@extends('app')

@section('content')

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb" style="background: #D9EDF7;">
            <li><a href="{{action('DashboardController@index')}}">Dashboard</a></li>
            <li class="active">Events Tab</li>
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
                            <th>Name</th>
                            <th>Description</th>
                            <th>Reglar Ticket</th>
                            <th>Vip Ticket</th>
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
                          <td><center><a href="{{action("EventController@index")}}" aria-pressed="true" style="color: #a3aa1b"><i class="fa fa-pencil fa-3x"></i></a></center></td>
                          <td><center><a href="{{action("EventController@index")}}" aria-pressed="true" style="color: #ac0a0a"><i class="fa fa-times fa-3x"></i></a></center></td>            
                       </tr> 
                      @endforeach 
                    </tbody>
                    </table>
                  </div>
                </div>
              </div>   
               <a type="button" href="{{action('TableController@index')}}" class="btn btn-default" style="width: auto;height: 40px; font-size: 24px;  line-height: 1.33;float: right;margin-right: 1%;margin-top: -2%;margin-bottom: 2%"><i class="fa fa-plus"></i>&nbsp;Add Event</a>
               <a type="button" href="{{action('TableController@create')}}" class="btn btn-default" style="width: auto;height: 40px; font-size: 24px;  line-height: 1.33;float: right;margin-right: 1%;margin-top: -2%;margin-bottom: 2%"><i class="fa fa-plus"></i>&nbsp;Add Location</a>  
               <br>
           </div>            
      </div>
   </div>
</div>
@endsection
