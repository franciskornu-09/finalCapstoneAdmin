@extends('app')

@section('content')

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb" style="background: #D9EDF7;">
            <li><a href="{{action('DashboardController@index')}}">Dashboard</a></li>
            <li class="active">Users Tab</li>
          </ol>
       <div class="templatemo-panels">
            <div class="row">
            
              <div class="col-md-12 col-sm-6 margin-bottom-30">
                <div class="panel panel-info">
                  <div class="panel-heading" >Users Table</div>
                  <div class="panel-body">
                    <form method="post" action="/userChange">
                      <div class="form-group">
                      @foreach($events as $post)
                        <label for="event">Name of User</label>
                        <input type="text" class="form-control" id="username" name="username"aria-describedby="event" value="{{$post->name}}">
                      </div>
                      <div class="form-group">
                        <label for="description">Email</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{$post->email}}">
                      </div>
                      <div class="form-check">
                       <label for="ticketNumber">User Number#</label>
                       <input type="number" class="form-control" id="phone" name="phone" value="{{$post->phone}}">
                      </div>
                      <div class="form-check" hidden>
                       <label for="ticketNumber">User Id#</label>
                       <input type="number" class="form-control" id="id" name="id" value="{{$post->id}}">
                      </div>

                      @endforeach
                      <br>
                      <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                      <button type="submit" class="btn btn-info">Enter</button>
                    </form>
                  </div>
                </div>
              </div>   
                 
           </div>            
      </div>
   </div>
</div>

@endsection
