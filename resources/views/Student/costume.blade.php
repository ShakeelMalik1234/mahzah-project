@extends("layouts.sidebar")

@section("navbar")
    <nav class="navbar navbar-expand-lg navbar-light p-0 nav-bar-set">
        <div class="container-fluid nav-width student-costume">
            <div>
                <a class="navbar-brand" href="#">CUSTOM</a>
            </div>
        </div>
    </nav>

    {{-- content --}}
    <div class="row">
        <div class="col-sm-11 justify-content-center m-auto">
            <div class="student-lead d-flex">
                <div class="leads">
                    <h2>Upgrade Your Plan To Create Custom Roles</h2>
                    <label for="">Manage administrative access by creating user roles with custom permissions. <a href="#">Learn more</a></label><br>
                    <label for="">Available on our Business plan and upwards</label><br>
                    <button class="btn btn-leads">Upgrade Plan</button>
                </div>
            </div>
        </div>
    </div>

@endsection