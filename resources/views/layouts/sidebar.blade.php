<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/master.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Hello, world!</title>
  </head>
  <body id="body-pd">
   {{-- students --}}
      <div id="wrapper" class="toggled-2">
        <div id="sidebar-wrapper-1" class="dashboard-1  show-dashboard-1">
          <ul class="sidebar-nav-1">
            <li>
               <a href="#" class="dashboard-hide" style="margin-bottom: 50px;">
                  <i class="fa fa-long-arrow-left back-arrow-set" aria-hidden="true"></i>
                  <i class="fa fa-user px-1" aria-hidden="true"></i>User
               </a>
           </li>
              <li>
                  <a href="{{ route('user-students') }}">Students</a>
              </li>
              <li>
                  <a href="{{ route('user-students-leads') }}">Leads</a>
              </li>
              <li>
                  <a href="{{ route('user-students-owners') }}">Owners</a>
              </li>
              <li>
                  <a href="{{ route('user-students-authors') }}">Authors</a>
              </li>
              <li>
                  <a href="{{ route('user-students-affiliates') }}">Affiliates</a>
              </li>
              <li>
                  <a href="{{ route('user-students-costume') }}">Custom</a>
              </li>
          </ul>
        </div>
        
        {{-- sites --}}
        <div id="sidebar-wrapper-1" class="dashboard-1  show-dashboard-1 user-site-show">
         <ul class="sidebar-nav-1">
           <li>
              <a href="#" class="site-hide" style="margin-bottom: 50px;">
                 <i class="fa fa-long-arrow-left back-arrow-set" aria-hidden="true"></i>
                 SITES
              </a>
          </li>
             <li>
                 <a href="{{ route('user-sitepage') }}">Site Pages</a>
             </li>
             <li>
                 <a href="{{ route('user-themelibrary') }}">Theme Library</a>
             </li>
             <li>
                 <a href="#">Preview Website</a>
             </li>
         </ul>
       </div>
         <!-- Sidebar -->
         <div id="sidebar-wrapper">
            <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
              <li class="d-inline">
                <i class="navbar-toggle collapse in fa fa-bars" data-toggle="collapse" id="menu-toggle-2"></i>
                <img src="{{ asset('images/dashboard-logo.png') }}" class="logo-img-sidebar" alt="">
              </li>
              <li class="active">
                  <a href="#">
                     <span class="fa-stack fa-lg pull-left">
                        <i class="fa fa-dashboard fa-stack-1x "></i>
                        <div class="hover-content">
                           <p>Dashboard</p>
                        </div>
                     </span>
                      Dashboard</a>
               </li>
               <li class="dashboard">
                  <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-user fa-stack-1x "></i></span>User</a>
               </li>
               <li class="sites-show">
                  <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-wpforms fa-stack-1x "></i></span>Site</a>
               </li>
               <li>
                  <a href="#"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-graduation-cap fa-stack-1x "></i></span>Courses</a>
               </li>
               <li>
                  <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-database fa-stack-1x "></i></span>Bundles</a>
               </li>
               <li>
                  <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-desktop fa-stack-1x "></i></span>Coaching</a>
               </li>
               <li>
                  <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-file-text fa-stack-1x "></i></span>Price Plans</a>
               </li>
               <li>
                <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-comments-o fa-stack-1x "></i></span>Messages</a>
             </li>
             <li>
              <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-cog fa-stack-1x "></i></span>Settings</a>
           </li>
            </ul>
         </div>
         
         
         <!-- /#sidebar-wrapper -->
         <!-- Page Content -->
         <div id="page-content-wrapper" class="p-0">
            <div class="container-fluid xyz">
               <div class="row">
                  <div class="col-lg-12 p-0">
                    <div>
                      @yield("navbar")
                    </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- /#page-content-wrapper -->
      </div>
    


   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="{{ asset('js/master.js') }}"></script>

  </body>
</html>