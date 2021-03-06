<!-- jQuery CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<!-- datatables -->
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
<!--custom datatables-->
<script src="{{ URL::asset('assets/js/datatables.search.js') }}"></script>

<!-- Select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<!-- morris.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            $('#sidebar').parent().toggleClass('active');
        });
    });
    
    
    (() => {
        // Sidebar Toggles
        for(let a of document.querySelectorAll('a[data-toggle=collapse]')){
            a.addEventListener('click', e => {
                
                console.log(e.currentTarget.getAttribute('href'));
                
                let liParent = e.currentTarget.closest('ul.list-unstyled');
                console.log(liParent);
                // for(let ul of ulParent.querySelectorAll('ul.list-unstyled')){
                //     console.log(ul);
                // }
            });
        }
        
        // Fullsreen
        document.querySelector('#toggleFullScreen').addEventListener('click', toggleFullScreen);
        
        function toggleFullScreen(e){
            e.preventDefault();
            if(!document.fullscreen){
                document.body.requestFullscreen();
                e.currentTarget.querySelector('i').textContent = 'fullscreen_exit';
            }else{
                document.exitFullscreen();
                e.currentTarget.querySelector('i').textContent = 'fullscreen';
            }
        }
    })();
    
</script>