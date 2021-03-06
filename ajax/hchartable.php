<?php require_once("inc/init.php"); ?>
<!-- row -->
<div class="row">
	
	<!-- col -->
	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
		<h1 class="page-title txt-color-blueDark">
			
			<!-- PAGE HEADER -->
			<i class="fa-fw fa fa-home"></i> 
				Graphs 
			<span>>  
				Highchart Table
			</span>
		</h1>
	</div>
	<!-- end col -->
	
	<!-- right side of the page with the sparkline graphs -->
	<!-- col -->
	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
		<!-- sparks -->
		<ul id="sparks">
			<li class="sparks-info">
				<h5> My Income <span class="txt-color-blue">$47,171</span></h5>
				<div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
					1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
				</div>
			</li>
			<li class="sparks-info">
				<h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up" data-rel="bootstrap-tooltip" title="Increased"></i>&nbsp;45%</span></h5>
				<div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
					110,150,300,130,400,240,220,310,220,300, 270, 210
				</div>
			</li>
			<li class="sparks-info">
				<h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
				<div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
					110,150,300,130,400,240,220,310,220,300, 270, 210
				</div>
			</li>
		</ul>
		<!-- end sparks -->
	</div>
	<!-- end col -->
	
</div>
<!-- end row -->

<!--
	The ID "widget-grid" will start to initialize all widgets below 
	You do not need to use widgets if you dont want to. Simply remove 
	the <section></section> and you can use wells or panels instead 
	-->

<!-- widget grid -->
<section id="widget-grid" class="">

	<!-- row -->

	<div class="row">

		<div class="col-sm-12"> 
			
			<div class="alert alert-info">
							
					
				
					<h3 class="no-margin">jQuery HighchartTable</h3>
				    <h5>Convert your HTML data tables into fancy Highcharts graphs without any coding!</h5>
					<ul>
						<li>The HighchartTable plugin takes data and attributes from a table and parses them to simply create an Hightcharts chart</li>
						<li>Control the graph dynamically and easily without any javascript</li>
						<li>Builds automatically during page load, all you need to do is load the plugin</li>
						<li>See the full documentation <a href="http://highcharttable.org/#documentation" target="_blank"><strong>here <i class="fa fa-link"></i> </strong> </a></li>
					</ul>
				
					
			
			</div>

			<div class="col-sm-12 well"> 
				<div class="col-sm-6">
					<table class="highchart table table-hover table-bordered" data-graph-container=".. .. .highchart-container2" data-graph-type="column">
		              <caption>Column example</caption>
		              <thead>
		                <tr>
		                  <th>Month</th>
		                  <th class="">Sales</th>
		                  <th class="">Benefits</th>
		                  <th class="">Expenses</th>
		                  <th class="">Prediction</th>
		                </tr>
		              </thead>
		              <tbody>
		                <tr>
		                  <td>January</td>
		                  <td class="">8000</td>
		                  <td class="">2000</td>
		                  <td class="">1000</td>
		                  <td class="">9000</td>
		                </tr>
		                <tr>
		                  <td>February</td>
		                  <td class="">12000</td>
		                  <td class="">3000</td>
		                  <td class="">1300</td>
		                  <td class="">10000</td>
		                </tr>
		                <tr>
		                  <td>March</td>
		                  <td class="">18000</td>
		                  <td class="">4000</td>
		                  <td class="">1240</td>
		                  <td class="">11000</td>
		                </tr>
		                <tr>
		                  <td>April</td>
		                  <td class="">2000</td>
		                  <td class="">-1000</td>
		                  <td class="">-150</td>
		                  <td class="">13000</td>
		                </tr>
		                <tr>
		                  <td>May</td>
		                  <td class="">500</td>
		                  <td class="">-2500</td>
		                  <td class="">1000</td>
		                  <td class="">14000</td>
		                </tr>
		                <tr>
		                  <td>June</td>
		                  <td class="">600</td>
		                  <td class="">-500</td>
		                  <td class="">-500</td>
		                  <td class="">15000</td>
		                </tr>
		              </tbody>
		            </table>
				</div>
				<div class="col-sm-6">
					<div class="highchart-container2"></div>
				</div>
			</div>
			
			<div class="col-sm-12 well"> 
				<div class="col-sm-6">
					<table class="highchart table table-hover table-bordered" data-graph-container=".. .. .highchart-container" data-graph-type="line">
		              <caption>Line example</caption>
		              <thead>
		                <tr>
		                  <th>Month</th>
		                  <th>Sales</th>
		                  <th>Benefits</th>
		                </tr>
		              </thead>
		              <tbody>
		                <tr>
		                  <td>January</td>
		                  <td>8000</td>
		                  <td>2000</td>
		                </tr>
		                <tr>
		                  <td>February</td>
		                  <td>12000</td>
		                  <td>3000</td>
		                </tr>
		                <tr>
		                  <td>March</td>
		                  <td>18000</td>
		                  <td>4000</td>
		                </tr>
		                <tr>
		                  <td>April</td>
		                  <td>2000</td>
		                  <td>-1000</td>
		                </tr>
		                <tr>
		                  <td>May</td>
		                  <td>500</td>
		                  <td>-2500</td>
		                </tr>
		              </tbody>
		            </table>
				</div>
				<div class="col-sm-6">
					<div class="highchart-container"></div>
				</div>
			</div>

			<div class="col-sm-12 well"> 
				<div class="col-sm-6">
					<table class="highchart table table-hover table-bordered" data-graph-container=".. .. .highchart-container3" data-graph-type="column">
		              <caption>Column + area example</caption>
		              <thead>
		                <tr>
		                  <th>Month</th>
		                  <th>Sales</th>
		                  <th data-graph-type="area">Benefits</th>
		                </tr>
		              </thead>
		              <tbody>
		                <tr>
		                  <td>January</td>
		                  <td>8000</td>
		                  <td>2000</td>
		                </tr>
		                <tr>
		                  <td>February</td>
		                  <td>12000</td>
		                  <td>3000</td>
		                </tr>
		                <tr>
		                  <td>March</td>
		                  <td>18000</td>
		                  <td>4000</td>
		                </tr>
		                <tr>
		                  <td>April</td>
		                  <td>2000</td>
		                  <td>-1000</td>
		                </tr>
		                <tr>
		                  <td>May</td>
		                  <td>500</td>
		                  <td>-2500</td>
		                </tr>
		              </tbody>
		            </table>
				</div>
				<div class="col-sm-6 ">
					<div class="highchart-container3"></div>
				</div>
			</div>

		</div>
		
		<!-- end row -->

	</div>

	<!-- end row -->

</section>
<!-- end widget grid -->

<script type="text/javascript">
	
	/* DO NOT REMOVE : GLOBAL FUNCTIONS!
	 *
	 * pageSetUp(); WILL CALL THE FOLLOWING FUNCTIONS
	 *
	 * // activate tooltips
	 * $("[rel=tooltip]").tooltip();
	 *
	 * // activate popovers
	 * $("[rel=popover]").popover();
	 *
	 * // activate popovers with hover states
	 * $("[rel=popover-hover]").popover({ trigger: "hover" });
	 *
	 * // activate inline charts
	 * runAllCharts();
	 *
	 * // setup widgets
	 * setup_widgets_desktop();
	 *
	 * // run form elements
	 * runAllForms();
	 *
	 ********************************
	 *
	 * pageSetUp() is needed whenever you load a page.
	 * It initializes and checks for all basic elements of the page
	 * and makes rendering easier.
	 *
	 */

	pageSetUp();
	
	/*
	 * ALL PAGE RELATED SCRIPTS CAN GO BELOW HERE
	 * eg alert("my home function");
	 * 
	 * var pagefunction = function() {
	 *   ...
	 * }
	 * loadScript("js/plugin/_PLUGIN_NAME_.js", pagefunction);
	 * 
	 * TO LOAD A SCRIPT:
	 * var pagefunction = function (){ 
	 *  loadScript(".../plugin.js", run_after_loaded);	
	 * }
	 * 
	 * OR you can load chain scripts by doing
	 * 
	 * loadScript(".../plugin.js", function(){
	 * 	 loadScript("../plugin.js", function(){
	 * 	   ...
	 *   })
	 * });
	 */
	
	// pagefunction
	
	var pagefunction = function() {
		// clears the variable if left blank
		$('table.highchart').highchartTable();
		//console.log("execute highchart")
	};
	
	

	// end pagefunction

	// destroy generated instances 
	// pagedestroy is called automatically before loading a new page
	// only usable in AJAX version!

	var pagedestroy = function(){
		
		/*
		Example below:

		$("#calednar").fullCalendar( 'destroy' );
		if (debugState){
			root.console.log("✔ Calendar destroyed");
		} 

		For common instances, such as Jarviswidgets, Google maps, and Datatables, are automatically destroyed through the app.js loadURL mechanic

		*/
	}

	// end destroy
	
	// run pagefunction
	
	loadScript("js/plugin/highChartCore/highcharts-custom.min.js", function(){
	  	loadScript("js/plugin/highchartTable/jquery.highchartTable.min.js", pagefunction); 
	});
	
</script>
