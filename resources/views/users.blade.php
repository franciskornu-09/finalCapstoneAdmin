@extends('app')

@section('content')

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="{{action("DashboardController@index")}}">Dashboard</a></li>
            <li class="active">Users Tab</li>
          </ol>
       <div class="templatemo-panels">
            <div class="row">
            
              <div class="col-md-12 col-sm-6 margin-bottom-30">
                <div class="panel panel-default">
                  <div class="panel-heading">Users Table</div>
                  <div class="panel-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>User Id</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Created On</th>
                          <th>Updated On</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($users as $post)
                        <tr>
                          <td>{{$post->id}}</td>
                          <td>{{$post->name}}</td>
                          <td>{{$post->email}}</td>
                          <td>{{$post->created_at}}</td>
                          <td>{{$post->updated_at}}</td>
                          <td><a type="button" href="{{action("DashboardController@index")}}" class="btn btn-info" style="border-radius: 10px 10px 10px 10px">Edit</a></td>
                          <td><button type="button" class="btn btn-danger" style="border-radius: 10px 10px 10px 10px">Delete</button></td>                        
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
