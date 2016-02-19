@extends('painel')

@section('title', 'Graficos')

@section('content')

 <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

    
      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart','bar']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Plantado', {{$dados[0]->total}}],
          ['Metas', 1600]
        ]);

        // Set chart options
        var options = {'title':'Metas para Plantio'
                       };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
      google.charts.setOnLoadCallback(drawColColors);
      function drawColColors() {
      var data = google.visualization.arrayToDataTable([
          ['Indicador', 'Metas', 'Realizados'],
          ['Dist Gemas', {{$dados[0]->media}}, 100],
          ['Cobrição', 200, 100],
          ['Fertilizante', 200, 100],
          ['Calda', 130, 100]
        ]);

        var options = {
            title:'Indicadores de Plantio'
        };      
      var charta = new google.visualization.ColumnChart(document.getElementById('chart_diva'));
      charta.draw(data, options);
    }

      google.charts.setOnLoadCallback(drawChart2);
      function drawChart2() {
      var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart2 = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart2.draw(data, options);
      }
     </script>
    <!--Div that will hold the pie chart-->
<div>
  <div id="chart_div">
  </div>
</div>
<div>
  <div id="chart_diva">
    
  </div>
</div>
<div>
  <div id="curve_chart">
    
  </div>
</div>
@stop




