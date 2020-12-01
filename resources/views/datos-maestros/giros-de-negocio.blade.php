@extends('layouts.master')

@section('title', 'Giros de negocio')

@section('breadcrumb')
<h3>Giros de negocio</h3>
<div class="breadcrumb" id="breadcrumb">
    <a class="breadcrumb__step" href="#">Datos maestros</a>
    <a class="breadcrumb__step breadcrumb__step--active" href="#">Giros de negocio</a>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <table class="table table-hover table-striped table-hover table-bordered" id="table_giros_negocio">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>11</td>
                    <td>Bodegas</td>
                    <td>Local que expende todo tipo de abarrotes y golosinas al por menor. Puede estar ubicado en cualquier tipo de via.</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>12</td>
                    <td>Minimarket</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, aperiam quia nesciunt nulla adipisci, sequi quos optio quod repellat quis dolores doloremque non molestiae qui maiores eligendi sunt natus voluptatem!</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>13</td>
                    <td>Reja/Ventanas</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, aperiam quia nesciunt nulla adipisci, sequi quos optio quod repellat quis dolores doloremque non molestiae qui maiores eligendi sunt natus voluptatem!</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>14</td>
                    <td>Licoreria</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, aperiam quia nesciunt nulla adipisci, sequi quos optio quod repellat quis dolores doloremque non molestiae qui maiores eligendi sunt natus voluptatem!</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>15</td>
                    <td>Abarrotes</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, aperiam quia nesciunt nulla adipisci, sequi quos optio quod repellat quis dolores doloremque non molestiae qui maiores eligendi sunt natus voluptatem!</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>16</td>
                    <td>Refrijerados</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, aperiam quia nesciunt nulla adipisci, sequi quos optio quod repellat quis dolores doloremque non molestiae qui maiores eligendi sunt natus voluptatem!</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>17</td>
                    <td>Pto Juguerias</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, aperiam quia nesciunt nulla adipisci, sequi quos optio quod repellat quis dolores doloremque non molestiae qui maiores eligendi sunt natus voluptatem!</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>18</td>
                    <td>Pto Comidas</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, aperiam quia nesciunt nulla adipisci, sequi quos optio quod repellat quis dolores doloremque non molestiae qui maiores eligendi sunt natus voluptatem!</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>19</td>
                    <td>Pto Golosinas</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, aperiam quia nesciunt nulla adipisci, sequi quos optio quod repellat quis dolores doloremque non molestiae qui maiores eligendi sunt natus voluptatem!</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>20</td>
                    <td>Panaderias</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, aperiam quia nesciunt nulla adipisci, sequi quos optio quod repellat quis dolores doloremque non molestiae qui maiores eligendi sunt natus voluptatem!</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>21</td>
                    <td>Pastelerias</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, aperiam quia nesciunt nulla adipisci, sequi quos optio quod repellat quis dolores doloremque non molestiae qui maiores eligendi sunt natus voluptatem!</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>22</td>
                    <td>Kioskos</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, aperiam quia nesciunt nulla adipisci, sequi quos optio quod repellat quis dolores doloremque non molestiae qui maiores eligendi sunt natus voluptatem!</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>23</td>
                    <td>Ambulantes</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, aperiam quia nesciunt nulla adipisci, sequi quos optio quod repellat quis dolores doloremque non molestiae qui maiores eligendi sunt natus voluptatem!</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>24</td>
                    <td>Minimarket</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, aperiam quia nesciunt nulla adipisci, sequi quos optio quod repellat quis dolores doloremque non molestiae qui maiores eligendi sunt natus voluptatem!</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('js')
<script>
    const table_giros_negocio = initDataTable('#table_giros_negocio', {
        dataTable: {
            dom: `<"row"
                <"col-12 col-md-4"l>
                <"col-12 col-md-8"p>
            >rt`
        },
        filtro: [
            {index: 2, type: 'text'},
            {index: 3, type: 'text'}
        ]
    });
</script>
@endsection