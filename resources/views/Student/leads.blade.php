@extends("layouts.sidebar")

@section("navbar")
    <nav class="navbar navbar-expand-lg navbar-light p-0 nav-bar-set">
        <div class="container-fluid nav-width">
            <div>
                <a class="navbar-brand" href="#">Leads</a>
            </div>
            <div class="nav-button">
                <a href="#" class="btn btn-export">Export CSV</a>
            </div>
        </div>
    </nav>

    {{-- content --}}
    <div class="row">
        <div class="col-sm-11 justify-content-center m-auto">
            <div class="student-lead d-flex">
                <div class="leads">
                    <h2>No Leads At This Time</h2>
                    <label for="">Leads will appear here after they opt-in.</label><br>
                    <button class="btn btn-leads">Learn More</button>
                </div>
            </div>
        </div>
    </div>

@endsection