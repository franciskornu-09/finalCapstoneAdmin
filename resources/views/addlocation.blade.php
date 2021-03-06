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
                <div class="panel panel-info">
                  <div class="panel-heading">Add New Event</div>
                  <div class="panel-body">
                    <form method="post" action="/addLoc">
                    <div class="form-group col-sm-6">
                    	<label for="event">Select Event</label><br>
                    	<select class="col-sm-6" name="event">
                    	@foreach($events as $post)
                    		<option value="{{$post->name}}">{{$post->name}}</option>
                    	@endforeach
                    	</select><br>
                    </div>
					<!-- <div class="form-group col-sm-6">
                        <label for="image">File input</label>
                        <input type="file" class="form-control-file" name="image" id="image" aria-describedby="image">
                        <small id="image" class="form-text text-muted">Image size limit (5mb)</small>
                    </div> -->
                    <div class="form-group col-sm-6">
                       <label for="address">Address</label>
                       <input type="text" class="form-control" id="address" name="address" placeholder="60 Riley Street, Darlinghurst, NSW">
                      </div>
                    <div class="form-group col-sm-6">
                       <label for="lat">Latitude Co-ordinates</label>
                       <input type="text" class="form-control" id="lat" name="lat" placeholder="11.98">
                      </div>
                      <div class="form-group col-sm-6">
                       <label for="lng">Longitude Coordinates</label>
                       <input type="text" class="form-control" id="lng" name="lng" placeholder="27.34">
                      </div>
                      <div class="form-group col-sm-12">
                       <label for="fig">Number of Tickets</label>
                       <input type="text" class="form-control" id="fig" name="fig" placeholder="50">
                      </div><br>
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