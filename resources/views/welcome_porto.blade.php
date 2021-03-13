<!doctype html>
<html class="fixed js flexbox flexboxlegacy csstransforms csstransforms3d custom-scroll sidebar-left-collapsed">
    <head>
        <!-- Basic -->
        <meta charset="UTF-8">
        <title>Porto</title>

        <meta name="keywords" content="CMS - Tommypria" />
        <meta name="description" content="CMS - Tommypria">
        <meta name="author" content="Tommypria">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Web Fonts  -->
        {{-- <link rel="stylesheet" href="{{ asset('porto/css/font-face.css') }}"> --}}

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('porto/assets/vendor/bootstrap/css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('porto/assets/vendor/animate/animate.compat.css') }}">
		<link rel="stylesheet" href="{{ asset('porto/assets/vendor/font-awesome/css/font-awesome.css') }}">
		<link rel="stylesheet" href="{{ asset('porto/assets/vendor/magnific-popup/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ asset('porto/assets/vendor/bootstrap-datepicker/css/datepicker3.css') }}">

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('porto/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css') }}">
		<link rel="stylesheet" href="{{ asset('porto/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}">
		<link rel="stylesheet" href="{{ asset('porto/assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css') }}">
		<link rel="stylesheet" href="{{ asset('porto/assets/vendor/morris/morris.css') }}">
		<link rel="stylesheet" href="{{ asset('porto/assets/vendor/pnotify/pnotify.custom.css') }}">
		<link rel="stylesheet" href="{{ asset('porto/assets/vendor/select2/select2.css') }}">
		<link rel="stylesheet" href="{{ asset('porto/assets/vendor/nanoscroller/nanoscroller.css') }}">
		<link rel="stylesheet" href="{{ asset('porto/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
		<link rel="stylesheet" href="{{ asset('porto/assets/vendor/summernote/summernote.css') }}">
		<link rel="stylesheet" href="{{ asset('porto/assets/vendor/summernote/summernote-bs3.css') }}">
		<link rel="stylesheet" href="{{ asset('porto/assets/stylesheets/easy-autocomplete.themes.min.css') }}">
		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('porto/assets/stylesheets/theme_new.css') }}">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{ asset('porto/assets/stylesheets/skins/default.css') }}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('porto/assets/stylesheets/theme-custom.css') }}">

		<!-- Head Libs -->
        <script src="{{ asset('porto/assets/vendor/modernizr/modernizr.js') }}"></script>
		
		<link rel="shortcut icon" href="{{ asset('porto/assets/images/favicon.ico') }}">
    </head>

    <body>
		<section class="body">
            <!-- start: header -->
            <header class="header">
				<div class="logo-container">
					<a href="#" class="logo">
						<img src="{{ asset('porto/assets/images/logo-default.png') }}" width="75" height="35" alt="">
					</a>
					<div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>

				<div class="header-right">
					<span class="separator"></span>
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="{{ asset('porto/assets/images/!logged-user.jpg') }}" alt="Joseph Doe" class="rounded-circle" data-lock-picture="{{ asset('porto/assets/images/!logged-user.jpg') }}"/>
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">John Doe Junior</span>
								<span class="role">Administrator</span>
							</div>
							<i class="fa custom-caret"></i>
						</a>
						<div class="dropdown-menu">
							<ul class="list-unstyled mb-2">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html">
										<i class="bx bx-user-circle"></i>
										My
										                                        Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true">
										<i class="bx bx-lock"></i>
										Lock
										                                        Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-signin.html">
										<i class="bx bx-power-off"></i>
										Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</header>
            <!-- end: header -->

            <div class="inner-wrapper">
                <aside id="sidebar-left" class="sidebar-left">
				
                    <div class="sidebar-header">
                        <div class="sidebar-title">
                            Navigation
                        </div>
                        <div data-fire-event="sidebar-left-toggle" data-target="html" data-toggle-class="sidebar-left-collapsed" class="sidebar-toggle hidden-xs">
                            <i aria-label="Toggle sidebar" class="fa fa-bars"></i>
                        </div>
                    </div>
                
                    <div class="nano has-scrollbar">
                        <div class="nano-content" tabindex="0" style="right: -17px;">
                            <nav role="navigation" class="nav-main" id="menu">
                                <ul class="nav nav-main">
                                    <li>
                                        <a href="#"><i class="fa fa-home"></i> Dashboard</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </aside>

                <section role="main" class="content-body">
					<header class="page-header">
                        <h2>Dashboard</h2>

                        <div class="right-wrapper pull-right" style="line-height: 42px">
                            
                        </div>
                    </header>

                    <div class="panel">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-10 col-md-offset-2" style="text-align:right">

                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Content --}}
                    <div class="panel">
                        <div class="panel-body">
                            A
                        </div>
                    </div>

                </section>
            </div>
        </section>

        <a class="scrollup hidden-mobile visible" href="#"><i class="fa fa-chevron-up"></i></a>

        <!-- Vendor -->
        <script src="{{ asset('porto/assets/javascripts/jquery-2.1.1.js') }}"></script>	
        <script src="{{ asset('porto/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>	
		<script src="{{ asset('porto/assets/vendor/bootstrap/js/bootstrap.js') }}"></script>
		<script src="{{ asset('porto/assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
		<script src="{{ asset('porto/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
		<script src="{{ asset('porto/assets/vendor/jquery-autosize/jquery.autosize.js') }}"></script>
		<script src="{{ asset('porto/assets/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>
		<script src="{{ asset('porto/assets/vendor/jquery-maskedinput/jquery.maskedinput.js') }}"></script>
		<script src="{{ asset('porto/assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
		<script src="{{ asset('porto/assets/vendor/select2/select2.js') }}"></script>
		<script src="{{ asset('porto/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
		<script src="{{ asset('porto/assets/vendor/pnotify/pnotify.custom.js') }}"></script>	
		<script src="{{ asset('porto/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
		<script src="{{ asset('porto/assets/vendor/jquery-appear/jquery.appear.js') }}"></script>
		<script src="{{ asset('porto/assets/javascripts/jquery.md5.js') }}"></script>
		<script src="{{ asset('porto/assets/vendor/summernote/summernote.js') }}"></script>
		<script src="{{ asset('porto/assets/javascripts/jquery.autocomplete.min.js') }}"></script>
		<script src="{{ asset('porto/assets/javascripts/jquery.easy-autocomplete.min.js') }}"></script>
		<script src="{{ asset('porto/assets/javascripts/jquery.magnific-popup.js') }}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('porto/assets/javascripts/theme.js') }}"></script>	
		
		<!-- Theme Custom -->
		<script src="{{ asset('porto/assets/javascripts/theme.custom.js') }}"></script>	

		<!-- Theme Initialization Files -->
		<script src="{{ asset('porto/assets/javascripts/theme.init.js') }}"></script>	
		<script src="{{ asset('porto/assets/javascripts/cookie.js') }}"></script>

    </body>
</html>