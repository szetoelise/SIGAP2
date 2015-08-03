 <style>
 .google-visualization-atl .outerChartContainer {
  overflow: hidden;
}
 </style>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
   google.load('visualization', '1.0', {'packages':['corechart']});
  	google.setOnLoadCallback(drawChartTanah);
  	google.setOnLoadCallback(drawChartGedungbangunan);
  	google.setOnLoadCallback(drawChartKendaraan);
  	google.setOnLoadCallback(drawChartBangunanair);
  	google.setOnLoadCallback(drawChartSenjata);
//          ['', 0],


 function drawChartSenjata() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Persenjataan Dengan Data Detil Belum Ada', 458],
          ['Persenjataan Dengan Kondisi Rusak', 8]
        ]);

        var options = {'title':'Persenjataan',
                       'width':600,
                       'height':300,
                        'maxLines': 2,
                        'is3D' : true,
                        'legend': {  position: "labeled"}};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_senjata'));
        chart.draw(data, options);
      }
      
 function drawChartBangunanair() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Bangunan Air Dengan Data Detil Belum Ada', 24],
          ['Bangunan Air Dengan Data IMB Belum Ada', 61]
        ]);

        var options = {'title':'Bangunan Air',
                       'width':600,
                       'height':300,
                        'maxLines': 2,
                        'is3D' : true,
                        'legend': {  position: "labeled"}};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_bangunanair'));
        chart.draw(data, options);
      }

 
 function drawChartKendaraan() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Kendaraan Dengan Data Detil Belum Ada', 363],
          ['Kendaraan Dengan Kondisi Rusak', 150],
          ['Kendaraan Dengan Data BPKB Belum Ada', 1219],
          ['Kendaraan Dengan Data STNK Belum Ada', 1222],
          ['Kendaraan Dengan Data Bukti Pembayaran Pajak Belum Ada', 1222],
          ['Kendaraan Dengan Masa Berlaku STNK Akan Berakhir', 15],
          ['Kendaraan Dengan Pembayaran Pajak Akan Jatuh Tempo', 15]
        ]);

        var options = {'title':'Kendaraan',
                       'width':600,
                       'height':300,
                        'maxLines': 2,
                        'is3D' : true,
                        'legend': {  position: "labeled"}};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_kendaraan'));
        chart.draw(data, options);
      }
      
 function drawChartTanah() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Tanah Dengan Data Detil Belum Ada', 251],
          ['Tanah Dengan Data Sertifikat Belum Ada', 770]
        ]);

        var options = {'title':'Tanah',
                       'width':600,
                       'height':300,
                        'maxLines': 2,
                        'is3D' : true,
                        'legend': {  position: "labeled"}};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_tanah'));
        chart.draw(data, options);
      }


 function drawChartGedungbangunan() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Bangunan/Gedung Dengan Data Detil Belum Ada', 1399],
          ['Gedung Dan Bangunan Dengan Kondisi Rusak', 67],
          ['Bangunan/Gedung Dengan Data IMB Belum Ada', 2161]
          
        ]);

        var options = {'title':'Gedung Dan Bangunan',
                       'width':600,
                       'height':300,
                        'maxLines': 2,
                        'is3D' : true,
                        'legend': {  position: "labeled"}};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_gedungbangunan'));
        chart.draw(data, options);
      }

</script>
<div class="span6">
<div id="chart_tanah"></div>
</div>

<div class="span6">
<div id="chart_gedungbangunan"></div>
</div>

<div class="span6">
<div id="chart_kendaraan"></div>
</div>


<div class="span6">
<div id="chart_bangunanair"></div>
</div>


<div class="span6">
<div id="chart_senjata"></div>
</div>
