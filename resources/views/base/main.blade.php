<!DOCTYPE html>
<html class="fixed">
    
    @include('base._head')
	
	<body>
        <section class="body">
            
            @include('base._header')
			
            <div class="inner-wrapper">
                
                @include('base._menu')

                <section role="main" class="content-body">
					<header class="page-header">
                        <h2>@yield('page_title')</h2>
                        <div class="right-wrapper text-right">
							<ol class="breadcrumbs">
                                <li>
									<a href="index.html">
										<i class="fas fa-home"></i>
									</a>
								</li>
                                @yield('breadcrumb')
                            </ol>
                        </div>
                    </header>

                    @yield('content')
                </section>

            </div>

        </section>

        @include('base._footer')
    </body>
</html>