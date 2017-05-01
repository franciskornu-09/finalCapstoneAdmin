@extends('app')

@section('content')

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb" style="background: #D9EDF7">
            <li><a href="{{action("DashboardController@index")}}">Dashboard</a></li>
            <li class="active">Events Tab</li>
          </ol>
       <div class="templatemo-panels">
            <div class="row">
            
              <div class="col-md-12 col-sm-6 margin-bottom-30">
                <div class="panel panel-default">
                  <div class="panel-heading">Add New Event</div>
                  <div class="panel-body">
                    <form method="post" action="/change">
                      <div class="form-group">
                      @foreach($events as $post)
                        <label for="event">Name of Event</label>
                        <input type="text" class="form-control" id="event" name="event"aria-describedby="event" value="{{$post->name}}">
                        <small id="event" class="form-text text-muted">Please be precise as possible.</small>
                      </div>
                      <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{$post->description}}">
                      </div>
                      <div class="form-group">
                       <label for="regular">Regular Ticket Amount</label>
                       <input type="number" class="form-control" id="regular" name="regular" value="{{$post->regular_ticket}}" >
                      </div>
                      <div class="form-group">
                        <label for="vip">Vip Ticket Amount</label>
                       <input type="number" class="form-control" id="vip" name="vip" value="{{$post->vip_ticket}}">
                      </div> 
                      <div class="form-check">
                       <label for="ticketNumber">Original Ticket Number Avaible</label>
                       <input type="number" class="form-control" id="ticketNumber" name="ticketNumber" value="{{$post->original_number}}">
                      </div>
                      <div class="form-check" hidden>
                       <label for="ticketNumber">Original Ticket Number Avaible</label>
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
