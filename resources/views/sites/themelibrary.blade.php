@extends("layouts.sidebar")

@section("navbar")
    <nav class="navbar navbar-expand-lg navbar-light p-0 nav-bar-set">
        <div class="container-fluid nav-width">
            <div class="nav-theme-library">
                <a class="navbar-brand" href="#">THEME LIBRARY</a>
            </div>
        </div>
    </nav>

    {{-- content --}}
    <div class="row site-page">
        <div class="col-sm-10">
            <div>
                <div class="theme-library">
                    <button class="btn btn-themelibrary-theme" type="submit">My Theme</button>
                    <button class="btn btn-themelibrary-extheme" type="submit">Explore Themes</button>
                    <div class="themelibrary-edit">
                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                    </div>
                    <hr>   
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