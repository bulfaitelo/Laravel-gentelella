<!DOCTYPE html>
<html lang="en">
  @include('gentelella.layouts.partials.htmlheader')

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            @include('gentelella.layouts.partials.htmlprofile')
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            @include('gentelella.layouts.partials.sidebar')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            @include('gentelella.layouts.partials.footerbuttons')
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        @include('gentelella.layouts.partials.mainheader')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>@yield('page_title')</h3>
              </div>

              @include('gentelella.layouts.partials.htmlsearch')
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                @yield('content')
              </div>
            </div>           
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        @include('gentelella.layouts.partials.htmlfooter')        
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    @include('gentelella.layouts.partials.scripts')      
    
  </body>
</html>
