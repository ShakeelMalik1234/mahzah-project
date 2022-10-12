@extends("layouts.sidebar")

@section("navbar")
    <nav class="navbar navbar-expand-lg navbar-light p-0 nav-bar-set">
        <div class="container-fluid nav-width">
            <div>
                <a class="navbar-brand" href="#">AUTHORS</a>
            </div>
            <div class="nav-button">
                <a href="#" class="btn btn-export">Export CSV</a>
                <a href="#" class="btn btn-addstudent">Add Author</a>
            </div>
        </div>
    </nav>

    {{-- content --}}
    <div class="row">
        <div class="col-sm-11 justify-content-center m-auto">
            <div class="student-lead d-flex">
                <div class="leads">
                    <h2>Add A Course Author To Your School</h2>
                    <label for="">Authors are able to build their own courses on your school while <br>
                         earning a share of the sales.</label><br>
                    <button class="btn btn-leads">Upgrade Plan</button>
                </div>
            </div>
        </div>
    </div>

@endsection