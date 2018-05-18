<!DOCTYPE html>
<html lang="en">

<head>

	<meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
     <!-- Favicon icon -->

     <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png')}}" type="image/x-icon">
     <link rel="icon" href="{{ asset('assets/images/favicon.ico')}}" type="image/x-icon">

      <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/icofont/css/icofont.css')}}">

     <!-- Google font-->
    <link href="{{ asset('assets/css/font-awesome.min.css" rel="stylesheet')}}" type="text/css">

     <!-- iconfont -->
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/icofont/css/icofont.css') }}">

     <!-- simple line icon -->
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/simple-line-icons/css/simple-line-icons.css')}}">

     <!-- Required Fremwork -->
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">

     <!-- Date Picker css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" />

     <!-- Weather css -->
     <link href="{{ asset('assets/css/svg-weather.css')}}" rel="stylesheet">

     <!-- Echart js -->
     <script src="{{ asset('assets/plugins/charts/echarts/js/echarts-all.js')}}"></script>

     <!-- Style.css -->
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css')}}">

     <!-- Responsive.css-->
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css')}}">

     <!--color css-->
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color/color-1.min.css')}}" id="color"/>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

     <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

 </head>




<body class="sidebar-mini fixed">
    <div class="loader-bg"> 
        <div class="loader-bar">
        </div>
    </div>
    <div class="wrapper">
    <!--   <div class="loader-bg">
    <div class="loader-bar">
    </div>
</div> -->
<!-- Navbar-->
<header class="main-header-top hidden-print">








    <a href="index.html" class="logo"><img class="img-fluid able-logo" src="{{ asset('assets/images/logo.png')}}" alt="Theme-logo"></a>



<?php 
        function activeMenu($url){
            return request()->is($url) ? 'active' : '';
        }

        ?>






    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button--><a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
        <!-- Navbar Right Menu-->
        <div class="navbar-custom-menu f-right">
            
            <ul class="top-nav">
                <!--Notification Menu-->
                    
                <li class="dropdown pc-rheader-submenu message-notification search-toggle">
                    <a href="#!" id="morphsearch-search" class="drop icon-circle txt-white">
                        <i class="icofont icofont-search-alt-1"></i>
                    </a>
                </li>
                <li class="dropdown notification-menu">
                    <a href="#!" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                        <i class="icon-bell"></i>
                        <span class="badge badge-danger header-badge">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="not-head">You have <b class="text-primary">4</b> new notifications.</li>
                        <li class="bell-notification">
                            <a href="javascript:;" class="media">
                                <span class="media-left media-icon">
                                    <img class="img-circle" src="{{ asset('assets/images/avatar-1.png')}}" alt="User Image">
                                </span>
                                <div class="media-body"><span class="block">Lisa sent you a mail</span><span class="text-muted block-time">2min ago</span></div></a>
                            </li>
                            <li class="bell-notification">
                                <a href="javascript:;" class="media">
                                    <span class="media-left media-icon">
                                        <img class="img-circle" src="{{ asset('assets/images/avatar-2.png')}}" alt="User Image">
                                    </span>
                                    <div class="media-body"><span class="block">Server Not Working</span><span class="text-muted block-time">20min ago</span></div></a>
                                </li>
                                <li class="bell-notification">
                                    <a href="javascript:;" class="media"><span class="media-left media-icon">
                                        <img class="img-circle" src="{{ asset('assets/images/avatar-3.png')}}" alt="User Image">
                                    </span>
                                    <div class="media-body"><span class="block">Transaction xyz complete</span><span class="text-muted block-time">3 hours ago</span></div></a>
                                </li>
                                <li class="not-footer">
                                    <a href="#!">See all notifications.</a>
                                </li>
                            </ul>
                        </li>
                        <!-- chat dropdown -->
                        
                        <!-- window screen -->
                        <li class="pc-rheader-submenu">
                            <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                                <i class="icon-size-fullscreen"></i>
                            </a>

                        </li>
                        <!-- User Menu-->
                        <li class="dropdown">

                        	@guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                        	@else

                            <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                                <span><img class="img-circle " src="{{ asset('assets/images/avatar-1.png')}}" style="width:40px;" alt="User Image"></span>
                                <span>{{ Auth::user()->name }}<i class=" icofont icofont-simple-down"></i></span>

                            </a>
                            <ul class="dropdown-menu settings-menu">
                                <li><a href="#!"><i class="icon-settings"></i> Settings</a></li>
                                <li><a href="/users/{{auth()->id()}}/edit"><i class="icon-user"></i> Mi cuenta</a></li>
                                <li><a href="/users/show/{{auth()->id()}}"><i class="icon-user"></i> Mi cuenta en show</a></li>
                                
                                <li><a href="message.html"><i class="icon-envelope-open"></i> My Messages</a></li>
                                <li class="p-0">
                                    <div class="dropdown-divider m-0"></div>
                                </li>
                                <li><a href="lock-screen.html"><i class="icon-lock"></i> Lock Screen</a></li>
                                <li>
                                	

                                	<a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="icon-logout"></i>
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>




                                </li>

                            </ul>
                            @endguest
                        </li>
                    </ul>

                    <!-- search -->
                    <div id="morphsearch" class="morphsearch">
                        <form class="morphsearch-form">

                            <input class="morphsearch-input" type="search" placeholder="Search..."/>

                            <button class="morphsearch-submit" type="submit">Search</button>

                        </form>
                        <div class="morphsearch-content">
                            <div class="dummy-column">
                                <h2>People</h2>
                                <a class="dummy-media-object" href="#!">
                                    <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan"/>
                                    <h3>Sara Soueidan</h3>
                                </a>

                                <a class="dummy-media-object" href="#!">
                                    <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G" alt="Shaun Dona"/>
                                    <h3>Shaun Dona</h3>
                                </a>
                            </div>
                            <div class="dummy-column">
                                <h2>Popular</h2>
                                <a class="dummy-media-object" href="#!">
                                    <img src="assets/images/avatar-1.png" alt="PagePreloadingEffect"/>
                                    <h3>Page Preloading Effect</h3>
                                </a>

                                <a class="dummy-media-object" href="#!">
                                    <img src="assets/images/avatar-1.png" alt="DraggableDualViewSlideshow"/>
                                    <h3>Draggable Dual-View Slideshow</h3>
                                </a>
                            </div>
                            <div class="dummy-column">
                                <h2>Recent</h2>
                                <a class="dummy-media-object" href="#!">
                                    <img src="assets/images/avatar-1.png" alt="TooltipStylesInspiration"/>
                                    <h3>Tooltip Styles Inspiration</h3>
                                </a>
                                <a class="dummy-media-object" href="#!">
                                    <img src="assets/images/avatar-1.png" alt="NotificationStyles"/>
                                    <h3>Notification Styles Inspiration</h3>
                                </a>
                            </div>
                        </div><!-- /morphsearch-content -->
                        <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                    </div>
                    <!-- search end -->
                </div>
            </nav>
        </header>
        <!-- Side-Nav-->
        <aside class="main-sidebar hidden-print " >
            <section class="sidebar" id="sidebar-scroll">
                
                <div class="user-panel">
                    <div class="f-left image"><img src="{{ asset('assets/images/avatar-1.png')}}" alt="User Image" class="img-circle"></div>
                    <div class="f-left info">
                    	@guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        <p>{{ Auth::user()->name }}</p>

                        <p class="designation">UX Designer <i class="icofont icofont-caret-down m-l-5"></i></p>
                    </div>
                </div>
                <!-- sidebar profile Menu-->
                <ul class="nav sidebar-menu extra-profile-list">
                    <li>
                        <a class="waves-effect waves-dark" href="profile.html">
                            <i class="icon-user"></i>
                            <span class="menu-text">View Profile</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="javascript:void(0)">
                            <i class="icon-settings"></i>
                            <span class="menu-text">Settings</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li>
                    
                            	
                            	       <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="waves-effect waves-dark">
                                                     <i class="icon-logout"></i>
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                     
                    </li>
                </ul>
                <!-- Sidebar Menu-->
                <ul class="sidebar-menu">
                    <li class="nav-level">Navigation</li>
                    <li class=" {{ activeMenu('cpanel')}} treeview">
                        <a class="waves-effect waves-dark" href="{{ route('cpanel')}}">
                            <i class="icon-speedometer"></i><span> Dashboard</span>
                        </a>                
                    </li>

             


                    <li class="nav-level">Components</li>

                    @if (auth()->check())

                    @if (auth()->user()->hasRoles(['admin']))

                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Roles</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="{{ route('roles.index')}}"><i class="icon-arrow-right"></i> Lista Roles </a></li>

                          
                        </ul>
                    </li> 

                    <li class="{{ activeMenu('users*')}} treeview"><a class="waves-effect waves-dark" href="usuarios.html" type="_blank"><i class="icon-briefcase"></i><span>Usuarios</span><i class="icon-arrow-down"></i></a>


                        <ul class="treeview-menu">

                            
                            {{-- <li class="{{ activeMenu('users/create')}}"><a class="waves-effect waves-dark" href="{{ route('users.create')}}"><i class="icon-arrow-right"></i> Agregar usuario</a></li> --}}
                            <li class="{{ activeMenu('users/index')}}"><a class="waves-effect waves-dark" href="{{ route('users.index')}}"><i class="icon-arrow-right"></i> Lista Usuarios</a></li>
                            <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i>Reporte</a></li>                          
                        </ul>
                    </li>

                     <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Alumnos</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            
                            <li><a class="waves-effect waves-dark" href="{{ route('students.index')  }}"><i class="icon-arrow-right"></i>Lista Alumno</a></li>
                        </ul>
                    </li>

                     <li class=" treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Docente</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="{{ route('teachers.index')  }}"><i class="icon-arrow-right"></i>Lista docentes</a></li>
                            <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i>Registrar Cursos</a></li>
                          
                        </ul>
                    </li>

                     <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Apoderado</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="{{ route('attorneys.index')}}"><i class="icon-arrow-right"></i> Lista apoderados</a></li>
                          
                        </ul>
                    </li>
                    <li class=" treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Horario</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href=""><i class="icon-arrow-right"></i>Registrar Nivel</a></li>
                            <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i>Registrar Horario</a></li>
                          
                        </ul>
                    </li>               
                        
                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Matricula</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i> Registrar Matricula</a></li>
                            <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i> Detalle Programacion</a></li>
                        </ul>
                    </li>   

                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Pabellon</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i> Registrar Pabellon</a></li>
                            <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i> Registrar Aula</a></li>
                          
                        </ul>
                    </li>   

                     <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Pagos</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i> Registrar TipoPago</a></li>
                            <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i> Registrar Pago</a></li>
                            <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i> Registrar Recibo</a></li>
                          
                        </ul>
                    </li>   

                    


                    


                    @endif

                     @if (auth()->user()->hasRoles(['alumno']))

                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Alumnos</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i> Mis Datos</a></li>
                            <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i> Horario</a></li>
                            <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i> Notas</a></li>
                            <li><a class="waves-effect waves-dark" href="bootstrap-ui.html"><i class="icon-arrow-right"></i> Cursos</a></li>
                          
                        </ul>
                    </li>

                    @endif

                    @if (auth()->user()->hasRoles(['apoderado']))

                   
                    
                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Apoderado</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i> Mis Datos</a></li>
                            <li><a class="waves-effect waves-dark" href="/attorneys/students/"><i class="icon-arrow-right"></i> Mis hijos</a></li>
                            <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i> Pagos</a></li>
                        </ul>
                    </li>

                    @endif

                  @endif


                </ul>
                     @endguest
            </section>
        </aside>
        <!-- Sidebar chat start -->
        
<!-- Sidebar chat end-->
<div class="content-wrapper">

   <!-- Container-fluid starts -->
   <!-- Main content starts -->
   <div class="container-fluid">
    
    <!-- 4-blocks row start -->
    <div class="row m-b-30 dashboard-header">
 

     @yield('contenido')

</div>
</div>

    

		

        
        
{{-- 	<script type="text/javascript" src="https://unpkg.com/sweetalert2@7.20.3/dist/sweetalert2.all.js"></script> --}}



      <script src="{{asset('assets/plugins/jquery/dist/jquery.min.js')}}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

      <script type="text/javascript">
        $(document).ready(function () {
            (function ($) {
                $('#filtrar').keyup(function () {
                    var rex = new RegExp($(this).val(), 'i');
                    $('.buscar tr').hide();
                    $('.buscar tr').filter(function () {
                        return rex.test($(this).text());
                    }).show();
                })
            }(jQuery));
        });
      </script>   


        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

              <script type="text/javascript">
                     $(document).ready(function(){
                    $('#mibuscador').select2();

            });
        </script>

      <script type="text/javascript">
        $(".delete-edition-btn").on("click", function(event){
        event.preventDefault();

        swal({
            title: "Estás seguro?",
            text: "No podrás recuperar este Rol !", type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B25",
            confirmButtonText: "Si, eliminar esto!",
            closeOnConfirm: false
        },
        function(){
            // Use closest() to find the correct form in the DOM
          $("form#deleteedition").submit();
        });
        });

        $(".delete-student-btn").on("click", function(event){
        event.preventDefault();

        swal({
            title: "Estás seguro?",
            text: "No podrás recuperar este Alumno !", type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B25",
            confirmButtonText: "Si, eliminar esto!",
            closeOnConfirm: false
        },
        function(){
            // Use closest() to find the correct form in the DOM
          $("form#deleteestudent").submit();
        });
        });

        
        </script>

        @include('sweet::alert')



      <script src="{{asset('assets/plugins/tether/dist/js/tether.min.js')}}"></script>

      <!-- Required Fremwork -->
      <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>


        
      <!-- waves effects.js -->
      <script src="{{asset('assets/plugins/Waves/waves.min.js')}}"></script>

      <!-- Scrollbar JS-->
      <script src="{{asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
      <script src="{{asset('assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js')}}"></script>

      <!--classic JS-->
      <script src="{{asset('assets/plugins/classie/classie.js')}}"></script>

      <!-- notification -->
      <script src="{{asset('assets/plugins/notification/js/bootstrap-growl.min.js')}}"></script>

      <!-- Rickshaw Chart js -->
     {{--  <script src="{{asset('assets/plugins/d3/d3.js')}}"></script>
      <script src="{{asset('assets/plugins/rickshaw/rickshaw.js')}}"></script>

      <! Sparkline charts >
      <script src="{{asset('assets/plugins/jquery-sparkline/dist/jquery.sparkline.js')}}"></script>
 --}}
      <!-- Counter js  -->

            <!-- Multi Select js -->

      <script src="{{asset('assets/plugins/waypoints/jquery.waypoints.min.js')}}"></script>
      <script src="{{asset('assets/plugins/countdown/js/jquery.counterup.js')}}"></script>

        <!-- custom js -->




      <!-- custom js -->
      <script type="text/javascript">
        
        'use strict';

// function removeloader(){
//     $('.loader-bg').fadeOut('slow', function() {
//         $('.loader-bg').remove();
//     });
// };
    $(document).ready(function() {

    //sidebar dropdown open
    $(".designation").on('click', function() {
        $(".extra-profile-list").slideToggle();
    });

    /*chatbar js start*/
    /*chat box scroll*/
    var a = $(window).height() - 50;
    $(".main-friend-list ").slimScroll({
        height: a,
        allowPageScroll: false,
        wheelStep: 5,
        color: '#1b8bf9'
    });

    // search
    $("#search-friends").on("keyup", function() {

        var g = $(this).val().toLowerCase();
        $(".friendlist-box .media-body .friend-header").each(function() {

            var s = $(this).text().toLowerCase();
            $(this).closest('.friendlist-box')[s.indexOf(g) !== -1 ? 'show' : 'hide']();
        });
    });

    // open chat box
    $('.displayChatbox').on('click', function() {

        var options = {
            direction: 'right'
        };
        $('.showChat').toggle('slide', options, 500);
    });
    //open friend chat
    $('.friendlist-box').on('click', function() {


        var options = {
            direction: 'right'
        };
        $('.showChat_inner').toggle('slide', options, 500);
    });
    //back to main chatbar
    $('.back_chatBox').on('click', function() {
        var options = {
            direction: 'right'
        };
        $('.showChat_inner').toggle('slide', options, 500);
        $('.showChat').css('display', 'block');
    });
    /*chatbar js start*/

    $("[data-toggle='utility-menu']").on('click', function() {
        $(this).next().slideToggle(300);
        $(this).toggleClass('open');
        return false;
    });

});



/*Show tooltip*/
$('[data-toggle="tooltip"]').tooltip();
$('[data-toggle="popover"]').popover({
    animation: true,
    delay: {
        show: 100,
        hide: 100
    }
});


// wave effect js

Waves.init();
Waves.attach('.flat-buttons', ['waves-button']);
Waves.attach('.float-buttons', ['waves-button', 'waves-float']);
Waves.attach('.float-button-light', ['waves-button', 'waves-float', 'waves-light']);
Waves.attach('.flat-buttons', ['waves-button', 'waves-float', 'waves-light', 'flat-buttons']);

// side button js code start
$.pushMenu = {
    activate: function(toggleBtn) {

        //Enable sidebar toggle
        $(toggleBtn).on('click', function(e) {
            e.preventDefault();

            //Enable sidebar push menu
            if ($(window).width() > (767)) {
                if ($("body").hasClass('sidebar-collapse')) {
                    $("body").removeClass('sidebar-collapse').trigger('expanded.pushMenu');
                } else {
                    $("body").addClass('sidebar-collapse').trigger('collapsed.pushMenu');
                }
            }
            //Handle sidebar push menu for small screens
            else {
                if ($("body").hasClass('sidebar-open')) {
                    $("body").removeClass('sidebar-open').removeClass('sidebar-collapse').trigger('collapsed.pushMenu');
                } else {
                    $("body").addClass('sidebar-open').trigger('expanded.pushMenu');
                }
            }
            if ($('body').hasClass('fixed') && $('body').hasClass('sidebar-mini') && $('body').hasClass('sidebar-collapse')) {
                $('.sidebar').css("overflow", "visible");
                $('.main-sidebar').find(".slimScrollDiv").css("overflow", "visible");
            }
            if ($('body').hasClass('only-sidebar')) {
                $('.sidebar').css("overflow", "visible");
                $('.main-sidebar').find(".slimScrollDiv").css("overflow", "visible");
            };
        });

        $(".content-wrapper").on('click', function() {
            //Enable hide menu when clicking on the content-wrapper on small screens
            if ($(window).width() <= (767) && $("body").hasClass("sidebar-open")) {
                $("body").removeClass('sidebar-open');
            }
        });
    }
};
$.tree = function(menu) {
    var _this = this;
    var animationSpeed = 200;
    $(document).on('click', menu + ' li a', function(e) {
        //Get the clicked link and the next element
        var $this = $(this);
        var checkElement = $this.next();

        //Check if the next element is a menu and is visible
        if ((checkElement.is('.treeview-menu')) && (checkElement.is(':visible'))) {
            //Close the menu
            checkElement.slideUp(animationSpeed, function() {
                checkElement.removeClass('menu-open');
                //Fix the layout in case the sidebar stretches over the height of the window
                //_this.layout.fix();
            });
            checkElement.parent("li").removeClass("active");
        }
        //If the menu is not visible
        else if ((checkElement.is('.treeview-menu')) && (!checkElement.is(':visible'))) {
            //Get the parent menu
            var parent = $this.parents('ul').first();
            //Close all open menus within the parent
            var ul = parent.find('ul:visible').slideUp(animationSpeed);
            //Remove the menu-open class from the parent
            ul.removeClass('menu-open');
            //Get the parent li
            var parent_li = $this.parent("li");

            //Open the target menu and add the menu-open class
            checkElement.slideDown(animationSpeed, function() {
                //Add the class active to the parent li
                checkElement.addClass('menu-open');
                parent.find('li.active').removeClass('active');
                parent_li.addClass('active');
            });
        }
        //if this isn't a link, prevent the page from being redirected
        if (checkElement.is('.treeview-menu')) {
            e.preventDefault();
        }
    });
};
// Activate sidenav treemenu
$.tree('.sidebar');
$.pushMenu.activate("[data-toggle='offcanvas']");
// side button js code end


/* Search header start */
(function() {
    var isAnimating;
    var morphSearch = document.getElementById('morphsearch'),
        input = morphSearch.querySelector('input.morphsearch-input'),
        ctrlClose = morphSearch.querySelector('span.morphsearch-close'),
        isOpen = isAnimating = false,
        isHideAnimate = morphsearch.querySelector('.morphsearch-form'),
        // show/hide search area
        toggleSearch = function(evt) {
            // return if open and the input gets focused
            if (evt.type.toLowerCase() === 'focus' && isOpen) return false;

            var offsets = morphsearch.getBoundingClientRect();
            if (isOpen) {
                classie.remove(morphSearch, 'open');

                // trick to hide input text once the search overlay closes
                // todo: hardcoded times, should be done after transition ends
                //if( input.value !== '' ) {
                setTimeout(function() {
                    classie.add(morphSearch, 'hideInput');
                    setTimeout(function() {
                        classie.add(isHideAnimate, 'p-absolute');
                        classie.remove(morphSearch, 'hideInput');
                        input.value = '';
                    }, 300);
                }, 500);
                //}

                input.blur();
            } else {
                classie.remove(isHideAnimate, 'p-absolute');
                classie.add(morphSearch, 'open');
            }
            isOpen = !isOpen;
        };

    // events
    input.addEventListener('focus', toggleSearch);
    ctrlClose.addEventListener('click', toggleSearch);
    // esc key closes search overlay
    // keyboard navigation events
    document.addEventListener('keydown', function(ev) {
        var keyCode = ev.keyCode || ev.which;
        if (keyCode === 27 && isOpen) {
            toggleSearch(ev);
        }
    });
    var morphSearch_search = document.getElementById('morphsearch-search');
    morphSearch_search.addEventListener('click', toggleSearch);

    /***** for demo purposes only: don't allow to submit the form *****/
    morphSearch.querySelector('button[type="submit"]').addEventListener('click', function(ev) {
        ev.preventDefault();
    });
})();
/* Search header end */

// toggle full screen
function toggleFullScreen() {
    if (!document.fullscreenElement && // alternative standard method
        !document.mozFullScreenElement && !document.webkitFullscreenElement) { // current working methods
        if (document.documentElement.requestFullscreen) {
            document.documentElement.requestFullscreen();
        } else if (document.documentElement.mozRequestFullScreen) {
            document.documentElement.mozRequestFullScreen();
        } else if (document.documentElement.webkitRequestFullscreen) {
            document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
        }
    } else {
        if (document.cancelFullScreen) {
            document.cancelFullScreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.webkitCancelFullScreen) {
            document.webkitCancelFullScreen();
        }
    }
}

// viral
// chat-sidebar
var ost = 0;
$(window).scroll(function() {
    var $window = $(window);
    var windowHeight = $(window).innerHeight();
    if ($window.width() <= 767) {
        var cOst = $(this).scrollTop();
        if (cOst == 0) {
            $('.showChat').removeClass('top-showChat').addClass('fix-showChat');
        } else if (cOst > ost) {
            $('.showChat').removeClass('fix-showChat').addClass('top-showChat');
        }
        ost = cOst;
    }
});

// Start [ Menu-bottom ]
$(document).ready(function() {
    $(".dropup-mega, .dropup").hover(function() {
        var dropdownMenu = $(this).children(".dropdown-menu");
        $(this).toggleClass("open");
    });
});
// End [ Menu ]



        </script>
      <script type="text/javascript" src="{{asset('assets/pages/dashboard.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/pages/profile.js')}}"></script>
      <script type="text/javascript" src="{{asset('assets/pages/elements.js')}}"></script>
      <script src="{{asset('assets/js/menu.min.js')}}"></script>

      <script>
        var $window = $(window);
        var nav = $('.fixed-button');
        $window.scroll(function(){
            if ($window.scrollTop() >= 200) {
             nav.addClass('active');
         }
         else {
             nav.removeClass('active');
         }
     });
    </script>

    
    <script type="text/javascript"
    >
    	$(window).on('load', function() {
    var $window = $(window);
    $('.loader-bar').animate({ width:$window.width()},2000);
    setTimeout(function() {
        while ($('.loader-bar').width() == $window.width()) {
            removeloader();
            break;
        }
    }, 2500);

    //Welcome Message (not for login page)
    function notify(message, type) {
        $.growl({
            message: message
        }, {
            type: type,
            allow_dismiss: false,
            label: 'Cancel',
            className: 'btn-xs btn-inverse',
            placement: {
                from: 'bottom',
                align: 'right'
            },
            delay: 2500,
            animate: {
                enter: 'animated fadeInRight',
                exit: 'animated fadeOutRight'
            },
            offset: {
                x: 30,
                y: 30
            }
        });
    };

 // copiar javascript
    
    $('.loader-bg').fadeOut('slow');

});
    </script>




  


</body>

</html>
