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
                  <div class="panel-heading" >Transaction Table</div>
                  <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name of Event</th>
                          <th>Number of Tickets</th>
                          <th>Amount Paid</th>
                          <th>Date (Month,Day)</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($jobs as $post)
                        <tr>
                          <td>{{$post->id}}</td>
                          <td>{{$post->name}}</td>
                          <td>{{$post->numberOfTickets}}</td>
                          <td>{{$post->amountPaid}}</td>
                          <td>{{$post->month}},{{$post->day}}</td>
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
