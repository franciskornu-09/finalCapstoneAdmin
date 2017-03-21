@extends('app')

@section('content')

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{action('DashboardController@index')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{action('UserController@index')}}">Users</a></li>
            <li class="breadcrumb-item active">Messages</li>
          </ol>
       <div class="templatemo-panels">
            <div class="row">
            
              <div class="col-md-12 col-sm-6 margin-bottom-30">
                <div class="panel panel-default">
                  <div class="panel-heading">Message Interface</div>
                  <div class="panel-body">
                   <form class="form-horizontal" method="post" action="{{ action('MessageController@create') }}">
                   @foreach($events as $post)
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                      <label class="col-md-4 control-label">ID #</label>
                      <div class="col-md-6">
                        <input type="text" class="form-control" id="num" name="num" value="{{ $post->id }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label">Email</label>
                      <div class="col-md-6">
                        <input type="text" class="form-control" id="email" name="email" value="{{ $post->email }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label">Topic</label>
                      <div class="col-md-6">
                        <input type="text" class="form-control" id="topic" name="topic">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label">Message</label>
                      <div class="col-md-6">
                      <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                      </div>
                    </div>
                    @endforeach
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                          Send
                        </button>
                      </div>
                    </div>
                  </form>
                        
                  </div>
                </div>
              </div>   
           </div>            
      </div>
   </div>
</div>
@endsection