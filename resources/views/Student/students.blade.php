@extends("layouts.sidebar")

@section("navbar")
    <nav class="navbar navbar-expand-lg navbar-light p-0 nav-bar-set">
        <div class="container-fluid nav-width">
            <div>
                <a class="navbar-brand" href="#">STUDENTS</a>
            </div>
            <div class="nav-button">
                <a href="#" class="btn btn-export">Export CSV</a>
                <a href="#" class="btn btn-addstudent">Add Students</a>
            </div>
        </div>
    </nav>

    {{-- content --}}
    <div class="row">
        <div class="col-sm-11 justify-content-center m-auto">
            <div class="add-filters d-flex">
                <button class="btn btn-filters" type="submit">Add Filters</button>
                <button class="btn btn-search" type="submit"><i class="fa fa-search"></i></button>
                <input class="form-control" type="search" placeholder="Search by student name" aria-label="Search">
            </div>
        </div>
        <div class="col-sm-11 justify-content-center m-auto">
            <div class="student-table d-flex">
                <table class="table">
                    <thead>
                       <tr class="row">
                        <th class="col">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </th>
                        <th class="col">Name</th>
                        <th class="col">Email</th>
                        <th class="col">Email OPT out</th>
                        <th class="col">Last Login</th>
                        <th class="col">Joined</th>
                        <th class="col">Purchase</th>
                       </tr>
                    </thead>
                    <tbody>
                        <tr class="row">
                            <td class="col">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </td>
                            <td class="col">xyz</td>
                            <td class="col">xyz@email.com</td>
                            <td class="col">Yes</td>
                            <td class="col">5 min</td>
                            <td class="col">Joined</td>
                            <td class="col">$0.00</td>
                        <tr class="row">
                            <td class="col">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </td>
                            <td class="col">xyz</td>
                            <td class="col">xyz@email.com</td>
                            <td class="col">Yes</td>
                            <td class="col">5 min</td>
                            <td class="col">Joined</td>
                            <td class="col">$0.00</td>
                        </tr>
                     </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection