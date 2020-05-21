@extends('dashboard.app')

@section('content')
    <section class="bd-masthead m-b-3">
        <div class="container text-center">
            <h1>Lugares en renta</h1>
        </div>
    </section>

    <section class="m-b-3">
        <div class="container">
            <table class="table" id="myTable">
                <thead class="thead">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Rentador</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Plan</th>
                    <th scope="col">Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Cancún</td>
                    <td>Ernesto Alejandro Pech Angulo</td>
                    <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                    <td>Mensual</td>
                    <td>5,000</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Cancún</td>
                    <td>Jesus Manuel España</td>
                    <td>MZ4 SM 74 LT181 AV.Tulum</td>
                    <td>Mensual</td>
                    <td>10,000</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Cancún</td>
                    <td>Fernando García Marquez</td>
                    <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                    <td>Quincenal</td>
                    <td>5,000</td>
                    </tr>
                    <tr>
                    <th scope="row">4</th>
                    <td>Cancún</td>
                    <td>Fernando García Marquez</td>
                    <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                    <td>Quincenal</td>
                    <td>5,000</td>
                    </tr>
                    <tr>
                    <th scope="row">5</th>
                    <td>Cancún</td>
                    <td>Fernando García Marquez</td>
                    <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                    <td>Quincenal</td>
                    <td>5,000</td>
                    </tr>
                    <tr>
                    <th scope="row">6</th>
                    <td>Cancún</td>
                    <td>Fernando García Marquez</td>
                    <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                    <td>Quincenal</td>
                    <td>5,000</td>
                    </tr>
                    <tr>
                    <th scope="row">7</th>
                    <td>Cancún</td>
                    <td>Fernando García Marquez</td>
                    <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                    <td>Quincenal</td>
                    <td>5,000</td>
                    </tr>
                    <tr>
                    <th scope="row">8</th>
                    <td>Cancún</td>
                    <td>Fernando García Marquez</td>
                    <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                    <td>Quincenal</td>
                    <td>5,000</td>
                    </tr>
                    <tr>
                    <th scope="row">9</th>
                    <td>Cancún</td>
                    <td>Fernando García Marquez</td>
                    <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                    <td>Quincenal</td>
                    <td>5,000</td>
                    </tr>
                    <tr>
                    <th scope="row">10</th>
                    <td>Cancún</td>
                    <td>Fernando García Marquez</td>
                    <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                    <td>Quincenal</td>
                    <td>5,000</td>
                    </tr>
                    <tr>
                    <th scope="row">11</th>
                    <td>Cancún</td>
                    <td>Fernando García Marquez</td>
                    <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                    <td>Quincenal</td>
                    <td>5,000</td>
                    </tr>
                    <tr>
                    <th scope="row">12</th>
                    <td>Cancún</td>
                    <td>Fernando García Marquez</td>
                    <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                    <td>Quincenal</td>
                    <td>5,000</td>
                    </tr>
                    <tr>
                    <th scope="row">13</th>
                    <td>Cancún</td>
                    <td>Fernando García Marquez</td>
                    <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                    <td>Quincenal</td>
                    <td>5,000</td>
                    </tr>
                    <tr>
                    <th scope="row">14</th>
                    <td>Cancún</td>
                    <td>Fernando García Marquez</td>
                    <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                    <td>Quincenal</td>
                    <td>5,000</td>
                    </tr>
                    <tr>
                    <th scope="row">15</th>
                    <td>Cancún</td>
                    <td>Fernando García Marquez</td>
                    <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                    <td>Quincenal</td>
                    <td>5,000</td>
                    </tr>
                    <tr>
                    <th scope="row">16</th>
                    <td>Cancún</td>
                    <td>Fernando García Marquez</td>
                    <td>MZ4 SM 74 LT181 AV.Lopez Portillo</td>
                    <td>Quincenal</td>
                    <td>5,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection

@section('javascript')

    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        } );
    </script>
@endsection
