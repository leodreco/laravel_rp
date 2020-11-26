function initDataTable(options = {}){
    
    let defaultOpts = {
        buttonsResponsive: [],
        filtro: false
    }
    
    options = Object.assign(defaultOpts, options);
    
    let table = $('#table_busqueda_socio').DataTable({
        responsive: true,
        dom: 'ft',
        ordering: false,
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
    
    if(!!options.filtro){
        table.filter = {
            hidden: true,
            row: undefined
        }
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
        
        for(let i = 0; i < columns; i++){
            let td = document.createElement('td');
            if(!!filtros[i]){
                switch (filtros[i].type) {
                    case 'text':
                        td.innerHTML = '<input type="text">';
                        break;
                    case 'select':
                        let select = document.createElement('select');
                        td.appendChild(select);
                        for(let option of filtros[i].options){
                            let opt = document.createElement('option');
                            opt.value = option;
                            opt.text = option;
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
        // table.on('draw', (e) => {
        //     let row = e.currentTarget.insertRow(1);
        //     row.innerHTML = `
        //     <td></td>
        //     <td><input type="text"></td>
        //     <td><input type="text"></td>
        //     <td><input type="text"></td>
        //     <td><input type="text"></td>
        //     <td><input type="text"></td>
        //     <td><input type="text"></td>
        //     <td><input type="text"></td>
        //     <td><input type="text"></td>
        //     <td><input type="text"></td>
        //     <td><input type="text"></td>
        //     <td><input type="text"></td>`;
        //     row.classList.add('filtros');
        //     console.log(row);
        // });
    }
    // .on('init', () => {
    //     setInterval(() => {
    //         $.fn.dataTable.tables( { visible: true, api: true } ).columns.adjust();
    //     }, 500);
    // }).on('responsive-display', (e, t, row, showHide, update) => {
    //     if(showHide){
    //         console.log(row);
    //     }
    // });
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