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
                          <th>Name</th>
                          <th>Email</th>
                          <th>Number#</th>
                          <th>Created On</th>
                          <th>Updated On</th>
                          <th>Edit</th>
                          <th>Delete</th>
                          <th>Message</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($user as $post)
                        <tr>
                          <td>{{$post->id}}</td>
                          <td>{{$post->name}}</td>
                          <td>{{$post->email}}</td>
                          <td>{{$post->phone}}</td>
                          <td>{{$post->created_at}}</td>
                          <td>{{$post->updated_at}}</td>
                          <td>
                            <center><a href="{!! route('userEdit', ['id'=>$post->id]) !!}" aria-pressed="true" style="color: #a3aa1b"><i class="fa fa-pencil fa-3x"></i></a></center>
                          </td>
                          <td><center><a href="{{action('EventController@index')}}" aria-pressed="true" style="color: #ac0a0a"><i class="fa fa-times fa-3x"></i></a></center></td> 
                          <td><center><a href="{!! route('switch', ['id'=>$post->id]) !!}" aria-pressed="true" style="color: #2d1a99"><i class="fa fa-envelope fa-3x"></i></a></center></td> 
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
