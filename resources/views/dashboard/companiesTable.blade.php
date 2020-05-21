@extends('dashboard.app')

@section('content')
    <section class="bd-masthead m-b-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Ciudad</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Seleccionar</option>
                            <option value="1">Cancún</option>
                            <option value="2">Playa del Carmen</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Precio</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Seleccionar</option>
                            <option value="1">Bajos</option>
                            <option value="2">Altos</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="m-b-3">
        <div class="container">
            <table class="table" id="myTable">
                <thead class="thead">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
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
