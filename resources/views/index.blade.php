@extends('app')

@section('content')

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <div class="row">
              <div class="col-md-4 col-sm-6 margin-bottom-30">
                <a href="{{action('UserController@index')}}" class="btn btn btn-secondary btn-lg active" role="button" aria-pressed="true" style="width: 100%"><i class="fa fa-user fa-3x" style="margin-top:20px"></i> &nbsp;Users Tab</a>   
          </div>
           <div class="col-md-4 col-sm-6 margin-bottom-30">
                <a href="{{action('EventController@index')}}" class="btn btn btn-secondary btn-lg active" role="button" aria-pressed="true" style="width: 100%"><i class="fa fa-calendar fa-3x" style="margin-top:20px"></i> &nbsp;Events Tab</a>  
          </div>
           <div class="col-md-4 col-sm-6 margin-bottom-30">
                <a href="#" class="btn btn btn-secondary btn-lg active" role="button" aria-pressed="true" style="width: 100%"><i class="fa fa-book fa-3x" style="margin-top:20px"></i> &nbsp;Profile Tab</a>   
          </div> 
           <div class="col-md-4 col-sm-6 margin-bottom-30">
                <a href="{{action('GraphController@create')}}" class="btn btn btn-secondary btn-lg active" role="button" aria-pressed="true" style="width: 100%"><i class="fa fa-dollar fa-3x" style="margin-top:20px"></i> &nbsp;Transaction Tab</a>   
          </div> 
           <div class="col-md-4 col-sm-6 margin-bottom-30">
                <a href="{{action('MessageController@store')}}" class="btn btn btn-secondary btn-lg active" role="button" aria-pressed="true" style="width: 100%"><i class="fa fa-exclamation fa-3x" style="margin-top:20px"></i> &nbsp;Issues Tab</a>   
          </div> 
           <div class="col-md-4 col-sm-6 margin-bottom-30">
                <a href="{{action('GraphController@index')}}" class="btn btn btn-secondary btn-lg active" role="button" aria-pressed="true" style="width: 100%"><i class="fa fa-cogs fa-3x" style="margin-top:20px"></i> &nbsp;Statistics Tab</a>   
          </div>    
        </div>
      </div>
    </div>
@endsection