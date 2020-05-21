@extends('dashboard.app')

@section('content')
    <section class="bd-masthead m-b-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-1 text-center text-md-left pr-md-5">
                    <h1 class="m-b-3"><strong>Find a <span class="text-primary">Workplace</span> Near You</strong></h1>
                    <p class="lead mb-4">
                        Quickly look for the best Private Offices, each one is equipped with Desks and Meeting & Conference Room.
                        The catalog is constantly being updated to respond to the needs of the clients.
                    </p>
                    <div class="d-flex flex-column flex-md-row">
                        <a href="#" class="btn btn-lg btn-primary mb-3 mr-md-3">Get started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="m-b-3">
        <div class="container">
            <div class="row m-b-3">
                <div class="col-sm-12 text-center">
                    <h1 class="m-b-3"><strong>About Us</strong></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lorem</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales enim metus, quis sodales nibh congue at. Nulla vel gravida nulla. Cras auctor, justo id iaculis accumsan, ipsum felis maximus libero, non tincidunt dolor sapien quis lectus pharetra. m</p>
                            <a href="#" class="btn btn-danger">Go</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lorem</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales enim metus, quis sodales nibh congue at. Nulla vel gravida nulla. Cras auctor, justo id iaculis accumsan, ipsum felis maximus libero, non tincidunt dolor sapien quis lectus pharetra. </p>
                            <a href="#" class="btn btn-danger">Go</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lorem</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales enim metus, quis sodales nibh congue at. Nulla vel gravida nulla. Cras auctor, justo id iaculis accumsan, ipsum felis maximus libero, non tincidunt dolor sapien quis lectus pharetra. </p>
                            <a href="#" class="btn btn-danger">Go</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('javascript')

    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
@endsection
