@extends('app')

@section('content')
<div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <div class="row">
            	<div class="col-md-12 col-sm-6 margin-bottom-30">
                <div class="panel panel-info">
                  <div class="panel-heading" >Statistics of Event Transactions</div>
                  <div class="panel-body">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      // Load Charts and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart for Sarah's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(drawSarahChart);

      // Callback that draws the pie chart for Sarah's pizza.
      function drawSarahChart() {

        // Create the data table for Sarah's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name Of Event');
        data.addColumn('number', 'Number Of Tickets');
        @foreach($events as $post)
        	data.addRows([
          ['{{$post->name}}', {{$post->numberTickets}}]
        ]);
        @endforeach

        // Set options for Sarah's pie chart.
        var options = {title:'Total Event Ticket Purchased',
                       width:500,
                       height:300,
                       is3D: true};

        // Instantiate and draw the chart for Sarah's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('Sarah_chart_div'));
        chart.draw(data, options);

        var barchart_options = {title:'Barchart: How Much Pizza I Ate Last Night',
                       width:480,
                       height:300,
                       legend: 'none'};
        var barchart = new google.visualization.BarChart(document.getElementById('barchart_div'));
        barchart.draw(data, barchart_options);
      }

      // Callback that draws the pie chart for Anthony's pizza.
    </script>
    <!--Table and divs that hold the pie charts-->
    <table class="columns">
      <tr>
        <td><div id="Sarah_chart_div" style="border: 1px solid #ccc"></div></td>
        <td><div style="width: 100px"><center><i class="fa fa-bolt" aria-hidden="true"></i></center></div></td>
        <td><div id="barchart_div" style="border: 1px solid #ccc"></div></td>
      </tr>
    </table> 
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
