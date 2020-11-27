/* global $*/
function initDataTable(id, options = {}){
    let dataTableOpt = options.dataTable;
    let defaultOpts = {
        buttonsResponsive: [],
        filtro: false
    };
    
    let defaultDataTable = {
        dom: 'lprt',
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json'
        },
        ordering: false,
        serverSide: false,
        ajax: undefined,
        
        columnDefs: undefined
    };
    
    dataTableOpt = Object.assign(defaultDataTable, dataTableOpt);
    options = Object.assign(defaultOpts, options);
    
    // Iniciar Tabla
    let table = $(id).DataTable({
        
        dom: dataTableOpt.dom,
        language: dataTableOpt.language,
        ordering: dataTableOpt.ordering,
        
        // Server
        serverSide: dataTableOpt.serverSide,
        ajax: dataTableOpt.ajax,
        
        // Width
        columnDefs: dataTableOpt.columnDefs,
        
        responsive: {
            details: {
                renderer: ( api, rowIdx, columns ) => {
                    
                    var data = columns.map(( col, i ) => {
                        let buttonIndex = options.buttonsResponsive.map((obj,i) => obj.index);
                        if(col.hidden){
                            let btnIndex = buttonIndex.indexOf(i);
                            if(btnIndex != -1){
                                let buttonOpt = options.buttonsResponsive[btnIndex];
                                let onclick = '';
                                switch (buttonOpt.type) {
                                    case 'href':
                                        onclick = `hrefAction(event, '${buttonOpt.value}')`;
                                        break;
                                    case 'function': 
                                        onclick = buttonOpt.value + '(event)';
                                        break;
                                }
                                return `<li  class="button-cell" data-dt-row="${col.rowIndex}" data-dt-column="${col.columnIndex}" onclick="${onclick}">
                                    <span class="dtr-title">${col.title}</span>
                                    <span class="dtr-data">${col.data}</span>
                                </li>`;
                            }
                            return `<li data-dt-row="${col.rowIndex}" data-dt-column="${col.columnIndex}">
                                <span class="dtr-title">${col.title}</span>
                                <span class="dtr-data">${col.data}</span>
                            </li>`;
                        }
                        return '';
                    }).join('');
                    return `<ul data-dtr-index="${rowIdx}" class="dtr-details">
                        ${data}
                    </ul>`;
                }
            }
        }
    });
    
    table.on('init', () => {
       
        // Iniciar row de filtros
        if(!!options.filtro){
            table.filter = {
                hidden: true,
                row: undefined,
                index: undefined
            };
            let btnFilter = document.createElement('button');
            btnFilter.classList.add('btn', 'btn-danger', 'btnFilter');
            btnFilter.innerHTML = `<i class="material-icons">filter_list</i>`;
            btnFilter.addEventListener('click', e => {
                if(table.filter.hidden){
                    table.filter.hidden = false;
                    table.body()[0].prepend(table.filter.row);
                }else{
                    table.filter.hidden = true;
                    table.filter.row.remove();
                }
            });
            table.table().header().querySelector('th').appendChild(btnFilter);
            
            let columns = table.columns().count();
            let row = document.createElement('tr');
            row.classList.add('rowFilter');
            let filtros = [];
            for(let obj of options.filtro){
                filtros[obj.index] = obj;
            }
            
            let hiddenCols = table.columns().responsiveHidden();
            
            
            
            for(let colIndex = 0; colIndex < columns; colIndex++){
                
                let td = document.createElement('td');
                
                if(colIndex == 0){
                    td.innerHTML = `<button class="btn btn-danger clearFilter"><i class="material-icons">delete</i></button>`;
                    td.querySelector('button').addEventListener('click', clearFilter);
                    row.appendChild(td);
                    continue;
                }
                
                if(!hiddenCols[colIndex]){
                    td.style.display = 'none';
                }
                
                if(!!filtros[colIndex]){
                    switch (filtros[colIndex].type) {
                        case 'text':
                            td.innerHTML = `<input type="text" col-index="${colIndex}">`;
                            td.querySelector('input').addEventListener('input', search);
                            break;
                        case 'select':
                            let select = document.createElement('select');
                            select.setAttribute('col-index', colIndex);
                            select.addEventListener('change', search);
                            td.appendChild(select);
                            
                            let opt = document.createElement('option');
                            opt.value = 'T';
                            opt.text = 'Todo';
                            select.add(opt);
                            for(let option of filtros[colIndex].options){
                                let opt = document.createElement('option');
                                if(typeof option == 'string'){
                                    opt.value = option;
                                    opt.text = option;
                                }else{
                                    opt.value = option.value;
                                    opt.text = option.text;
                                }
                                
                                select.add(opt);
                            }
                            break;
                    }
                }
                row.appendChild(td);
            }
            
            table.filter.row = row;
            
            table.on('responsive-resize', (e, dataTable, columns) => {
               if(!table.filter.hidden){
                   let tds = table.body()[0].querySelectorAll('.rowFilter td');
                   for(let i = 0; i < tds.length; i++){
                       tds[i].style.display = columns[i] ? '' : 'none';
                   }
               }
            });
            
            table.on('draw', (e) => {
                if(!table.filter.hidden){
                    table.body()[0].prepend(table.filter.row);
                    
                    if(!!table.filter.index){
                        // Si hay un inpu seleccionado, darle focus
                        let input = table.body()[0].querySelector(`.rowFilter [col-index="${table.filter.index}"]`);
                        if(input.tagName == 'INPUT'){
                            input.focus();
                            input.selectionStart = input.value.length;
                            input.selectionEnd = input.value.length;
                        }
                    }
                }
            });
            
        }
        
        function search(e){
            let colIndex = e.currentTarget.getAttribute('col-index');
            let value = e.currentTarget.value;
            
            switch (e.currentTarget.tagName) {
                case 'INPUT':
                    table.filter.index = colIndex;
                    table.column(colIndex).search(value);
                    break;
                
                case 'SELECT':
                    if(value == 'T'){
                        table.column(colIndex).search('');
                    }else{
                        table.column(colIndex).search(value);
                    }
                    break;
            }
            table.draw();
        }
        
        function clearFilter(e){
            let filters = e.currentTarget.closest('.rowFilter').querySelectorAll('[col-index]');
            for(let element of filters){
                switch (element.tagName) {
                    case 'INPUT':
                        element.value = '';
                        break;
                    case 'SELECT':
                        element.value = 'T';
                        break;
                }
                table.columns(element.getAttribute('col-index')).search('');
            }
            table.draw();
        }
    });
    
    return table;
}

function hrefAction(e, selector){
    let btn = e.currentTarget.querySelector(selector);
    if(!!btn){
        btn.click();
    }else{
        console.error('Boton no existe');
    }
}
