<div class="span6">
	      		
	      		<div class="widget">
						
					<div class="widget-header">
						<i class="icon-star"></i>
						<h3>Tanah</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
						<canvas width="538" height="250" class="chart-holder" id="pie-chart" style="width: 538px; height: 250px;"></canvas>
					</div>
                                        <div class="widget-content">
                                            <table>
                                                <tr><td>Tanah Dengan Data Detil Belum Ada</td></tr>
                                                <tr><td></td></tr>
                                            </table>
                                        </div>
                                        <!-- /widget-content -->
						
				</div> <!-- /widget -->
				
	      		
	      		
	      		
		    </div>




<script>

    var pieDataTanah = [
				{
				    value: 251,
				    color: "#F38630"
				},
				{
				    value: 770,
				    color: "#E0E4CC"
				}

			];

    var myPieTanah = new Chart(document.getElementById("pie-chart").getContext("2d")).Pie(pieDataTanah);
    
    
    </script>