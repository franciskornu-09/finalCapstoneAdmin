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
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>topic</th>
                          <th>message</th>
                          <th>sender</th>
                          <th>Date Sent</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($message as $post)
                        <tr>
                          <td>{{$post->id}}</td>
                          <td>{{$post->topic}}</td>
                          <td>{{$post->message}}</td>
                          <td>{{$post->sender}}</td>
                          <td>{{$post->created_at}}</td>
                       </tr> 
                      @endforeach 
                       </tbody>
                    </table>
                  </div>
                </div>
              </div>   
                 
           </div>            
      </div>
   </div>
</div>

@endsection
