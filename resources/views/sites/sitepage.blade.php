@extends("layouts.sidebar")

@section("navbar")
    <nav class="navbar navbar-expand-lg navbar-light p-0 nav-bar-set">
        <div class="container-fluid nav-width">
            <div>
                <a class="navbar-brand" href="#">SITES</a>
            </div>
            <div class="nav-button">
                <a href="#" class="btn btn-addstudent">New Custom Page <i class="fa fa-plus ps-2"></i></a>
            </div>
        </div>
    </nav>

    {{-- content --}}
    <div class="row site-page">
        <div class="col-sm-10">
            <div class="d-flex justify-content-between">
                <div class="add-sitepage">
                    <button class="btn btn-search" type="submit"><i class="fa fa-search"></i></button>
                    <input class="form-control" type="search" placeholder="Search by student name" aria-label="Search">
                </div>
                <div class="sitepage-grid-style">
                    <button class="btn btn-sitepage-style-grid" type="submit"><i class='bi bi-grid-3x3 px-1'></i> GRID</button>
                    <button class="btn btn-sitepage-style-list" type="submit"><i class="fa fa-th-list px-1"></i> LIST</button>
                </div>
            </div>
        </div>
        <div class="col-sm-10">
            <div class="site-page-post">
                <div class="row">
                    <div class="col-sm-6 d-inline-flex">
                        <div class="add-image">
                            <i class="fa fa-picture-o" aria-hidden="true"></i>
                        </div>
                        <div class="course-name">
                            <div class="d-flex">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <h3>Course Name</h3>
                            </div>
                            <button class="btn btn-course-page">Course Page</button>
                        </div>
                    </div>
                        <div class="col-sm-6">
                            <div class="text-end edit-post">
                                <div><i class="fa fa-ellipsis-v" aria-hidden="true"></i></div>
                                <div class="post-view">
                                    <i class="btn fa fa-eye" aria-hidden="true"></i>
                                    <i class="btn fa fa-paperclip" aria-hidden="true"></i>
                                    <i class="btn fa fa-pencil" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="sitepage-showdefultpage">
            <a href="#">Show Default Pages</a>
        </div>
    </div>

@endsection