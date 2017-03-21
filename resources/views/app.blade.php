<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>Event Publisher</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link href="{{ asset('/css/templatemo_main.css') }}" type="text/css" rel="stylesheet" media="all">
  <link href="{{ asset('/css/dataTables.bootstrap.css') }}" type="text/css" rel="stylesheet" media="all">
  <link href='//fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- 
Dashboard Template 
http://www.templatemo.com/preview/templatemo_415_dashboard
-->
</head>
<body>
  <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1>Event Publisher &nbsp;<i class="fa fa-bolt" aria-hidden="true"></i></h1></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
      </div>   
    </div>
    <div class="template-page-wrapper">
      <div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
          
          <li><a href="{{action('DashboardController@index')}}"><i class="fa fa-home"></i>Dashboard</a></li>
          <li class="dropdown"><a href="{{action('GraphController@index')}}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cubes"></i>Data Visualization <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Data on Specific Dates</a></li>
                            <li><a href="#">Data on Numbers Bought</a></li>
                            <li><a href="#">Dropdown Link 3</a></li>
                            <li class="divider"></li>
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 4</a>
              </li>
              </ul>
              </li>
          <li><a href="{{action('EventController@index')}}"><i class="fa fa-calendar"></i>Manage Events</a></li>
          <li><a href="{{action('UserController@index')}}"><i class="fa fa-users"></i>Manage Users</a></li>
          <li><a href="preferences.html"><i class="fa fa-cog"></i>Issues</a></li>
          <li><a href="preferences.html"><i class="fa fa-cog"></i>Profile</a></li>
          <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Sign Out</a></li>
        </ul>
      </div>

      @yield('content')

       <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
            </div>
            <div class="modal-footer">
              <a href="{{ URL::route('account-sign-out') }}" class="btn btn-primary">Yes</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
          </div>
        </div>
      </div>
      <footer class="templatemo-footer">
        <div class="templatemo-copyright">
          <p>Copyright &copy; Event Publisher&nbsp;<i class="fa fa-bolt" aria-hidden="true"></i></p>
        </div>
      </footer>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <!-- <script src="{{ asset('js/templatemo_script.min.js') }}"></script> -->
    <script src="{{ asset('js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap.js') }}"></script>
    
    <script type="text/javascript">
    $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });

    $('#myTab a').click(function (e) {
      e.preventDefault();
      $(this).tab('show');
    });

    $('#loading-example-btn').click(function () {
      var btn = $(this);
      btn.button('loading');
      // $.ajax(...).always(function () {
      //   btn.button('reset');
      // });
  });
  </script>
</body>
</html>