@extends('app')

@section('content')

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="{{action("DashboardController@index")}}">Dashboard</a></li>
            <li class="active">Events Tab</li>
          </ol>
       <div class="templatemo-panels">
            <div class="row">
            
              <div class="col-md-12 col-sm-6 margin-bottom-30">
                <div class="panel panel-default">
                  <div class="panel-heading">Events Table</div>
                  <div class="panel-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Description</th>
                          <th>Regular Ticket($)</th>
                          <th>Vip Ticket($)</th>
                          <th>Number of Tickets</th>
                          <th>Tickets Available</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($text as $post)
                        <tr>
                          <td>{{$post->name}}</td>
                          <td>{{$post->description}}</td>
                          <td>{{$post->regular_ticket}}</td>
                          <td>{{$post->vip_ticket}}</td>
                          <td>{{$post->original_number}}</td>
                          <td>{{$post->number_left}}</td>
                          <td><a type="button" href="{{action("DashboardController@index")}}" class="btn btn-info" style="border-radius: 10px 10px 10px 10px">Edit</a></td>
                          <td><button type="button" class="btn btn-danger" style="border-radius: 10px 10px 10px 10px">Delete</button></td>            
                       </tr> 
                      @endforeach 
                       </tbody>
                    </table>
                  </div>
                </div>
              </div>   
               <!-- <a href="{{action("EventController@index")}}" class="btn btn-info" role="button" aria-pressed="true" style="width: 5%; border-radius: 25px;padding: 10px 16px;height: 5%"><i class="fa fa-plus fa-3x" style="margin-top:20px"></i></a>  --> 
               <a type="button" href="{{action("TableController@index")}}"class="btn btn-success btn-circle btn-xl" style="width: 70px;height: 60px;  padding: 10px 16px;  font-size: 24px;  line-height: 1.33;  border-radius: 35px;float: right;margin-right: 5%;margin-top: -2%;margin-bottom: 2%"><i class="fa fa-plus"></i></a> 
               <br>
           </div>            
      </div>
   </div>
</div>
@endsection
