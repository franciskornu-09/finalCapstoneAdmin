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
<style type="text/css">
	html, body {
    margin: 0;
    height: 100%;
}

#image {
    background-image: url("../images/black.jpg");
    background-size: 100% 100%;
    background-repeat: no-repeat;
}
</style>
</head>
<body id="image">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
				<div class="panel-body">
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}" style="margin-top: 30%">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div style="text-align: center;color: red">
							@if (count($errors) > 0)
							<strong>Whoops!</strong> There were some problems with your input.<br>
							
								@foreach ($errors->all() as $error)
									{{ $error }}
								@endforeach
							
							@endif
						</div><br>
						<div class="form-group">
							<label class="col-md-4 control-label" style="color: white">E-Mail Address</label>
							<div class="col-md-5">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" style="color: white">Password</label>
							<div class="col-md-5">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> <i style="color: white">Remember Me</i>
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Login</button>

								<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
							</div>
						</div>
					</form>
				</div>
			<!-- </div> -->
		</div>
	</div>
</div>
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
            </div>
            <div class="modal-footer">
              <a href="sign-in.html" class="btn btn-primary">Yes</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>