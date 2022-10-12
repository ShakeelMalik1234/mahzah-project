@extends("layouts.sidebar")

@section("navbar")
    <nav class="navbar navbar-expand-lg navbar-light p-0 nav-bar-set">
        <div class="container-fluid nav-width">
            <div>
                <a class="navbar-brand" href="#">OWNERS</a>
            </div>
            <div class="nav-button">
                <a href="#" class="btn btn-export">Export CSV</a>
                <a href="#" class="btn btn-addstudent">Add Owners</a>
            </div>
        </div>
    </nav>

    {{-- content --}}
    <div class="row">
        <div class="col-sm-11 justify-content-center m-auto">
            <div class="add-filters d-flex">
                <button class="btn btn-filters" type="submit">Add Filters</button>
                <button class="btn btn-search" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                <input class="form-control" type="search" placeholder="Search by student name" aria-label="Search">
            </div>
        </div>
        <div class="col-sm-11 justify-content-center m-auto">
            <div class="student-owners-table d-flex">
                <table class="table">
                    <thead>
                       <tr class="row">
                        <th class="col">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </th>
                        <th class="col">Name</th>
                        <th class="col">Email</th>
                        <th class="col">Last Login</th>
                        <th class="col">Joined</th>
                       </tr>
                    </thead>
                    <tbody>
                        <tr class="row">
                            <td class="col">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </td>
                            <td class="col">xyz</td>
                            <td class="col">xyz@email.com</td>
                            <td class="col">5 min</td>
                            <td class="col">Joined</td>
                        <tr class="row">
                            <td class="col">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </td>
                            <td class="col">xyz</td>
                            <td class="col">xyz@email.com</td>
                            <td class="col">15 min</td>
                            <td class="col">Joined</td>
                        </tr>
                     </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection