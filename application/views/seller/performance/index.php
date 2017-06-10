<script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
		animationEnabled: true,
		theme: "theme2",
		//exportEnabled: true,
		title:{
			text: "Monthly Performance"
		},
		data: [
		{
			type: "column", //change type to bar, line, area, pie, etc
			dataPoints: [
			
				<?php foreach($dailywise as $daily_wise) {   ?>
				{ label: "<?php echo $daily_wise ->created_at; ?>", y: <?php echo $daily_wise ->orders; ?> },
				
			<?php } ?>
			
			]
		}
		]
	});

	chart.render();
}
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/seller/js/canvasjs.min.js"></script>
<div class="content-wrapper mar_t_con" >
  <section class="content ">
<section id="main-content">
    <section class="wrapper">
      <!--<div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-cutlery" aria-hidden="true"></i>Add <?php //echo $catname->category_name;?> Item Details</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="<?php //echo base_url();?>seller/dashboard">Home</a></li>
            <li><i class="fa fa-cutlery" aria-hidden="true"></i><?php //echo $catname->category_name;?></li>
            <li><i class="fa fa-square-o"></i><?php //echo $subcatname->subcategory_name;?></li>
          </ol>
        </div>
      </div>-->
	

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <!--<header class="panel-heading"> Basic Forms </header>-->
			<div><?php echo $this->session->flashdata('message');?></div>
            <div class="panel-body">
			
              <form action="<?php echo base_url();   ?>seller/performance" method="post" enctype="multipart/form-data" onSubmit="return perfvalidateof();">
			  
               
				
   
				<div class="form-group nopaddingRight col-md-3 san-lg">
                  <label for="exampleInputPassword1">Select Month</label>
                   <select class="form-control" id="per_month" name="per_month">
 <option value="">Select Month</option>
  <option value="1">January</option>
  <option value="2">February</option>
  <option value="3">March</option>
  <option value="4">April</option>
   <option value="5">May</option>
    <option value="6">June</option>
	 <option value="7">July</option>
	  <option value="8">August</option>
	   <option value="9">September</option>
	    <option value="10">October</option>
		 <option value="11">November</option>
		  <option value="12">December</option>
</select>
				  <span style="color:red" id="errormonth"></span>
                </div>
				
				<div class="form-group nopaddingRight col-md-3 san-lg">
                  <label for="exampleInputPassword1">Select Year</label>
                  <select class="form-control" id="per_year" name="per_year">
 <option value="">Select Year</option>
  <option value="2017">2017</option>
   <option value="2018">2018</option>
    <option value="2019">2019</option>
	 <option value="2020">2020</option>
	 
</select>
				  <span style="color:red" id="erroryear"></span>
                </div>
               
				
                
				<div style="margin-top: 23px;" class="form-group nopaddingRight col-md-3 san-lg">
                <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
                <!--<button type="submit" class="btn btn-danger" onclick="window.location='<?php //echo base_url(); ?>seller/dashboard';return false;">Cancel</button>-->
				</div>
              </form>
            </div>
          </section>
        </div>
      </div>
	    <div class="row">
   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 ">  
		<div class="panel panel-bd lobidrag">
			<div class="panel-heading">
				<div class="panel-title">
					<h4>Line chart</h4>
				</div>
			</div>
			<div class="panel-body">
				<canvas id="lineChart" height="150"></canvas>
			</div>
		</div>
	</div>
  </div>
      <!-- page start--> 
      <!-- page end--> 
    </section>
  </section>

  <?php if(!empty($dailywise)) {?>
            <div id="chartContainer" style="height: 300px; width: 100%;"></div>
			<?php } else {?>
			
			  <div class="container">
	
      <h1 class="head_title">No Orders Found on this Month</h1>
   
   </div>
			
			<?php } ?>
  </div>
  

  </div>
  
  </section>
  
  </div>
  </div>
  </div>
  <script>
	
	function perfvalidateof()

{

var per_month=document.getElementById('per_month');

var per_year=document.getElementById('per_year');



if(per_month.value==""){

document.getElementById('errormonth').innerHTML="Please Select Month";

$("#per_month").focus();

return false;	

}	

else{

	document.getElementById('errormonth').innerHTML="";

}

if(per_year.value==""){

document.getElementById('erroryear').innerHTML="Please Select Subcategory";

$("#per_year").focus();

return false;	

}	

else{

	document.getElementById('erroryear').innerHTML="";

}



}
</script>
<script>

             //line chart
                var ctx = document.getElementById("lineChart");
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                        datasets: [
                            {
                                label: "My First dataset",
                                borderColor: "rgba(0,0,0,.09)",
                                borderWidth: "1",
                                backgroundColor: "rgba(0,0,0,.07)",
                                data: [22, 44, 67, 43, 76, 45, 12, 45, 65, 55, 42, 61, 73]
                            },
                            {
                                label: "My Second dataset",
                                borderColor: "#009688",
                                borderWidth: "1",
                                backgroundColor: "#009688",
                                pointHighlightStroke: "#009688",
                                data: [16, 32, 18, 26, 42, 33, 44, 24, 19, 16, 67, 71, 65]
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                });


        </script>