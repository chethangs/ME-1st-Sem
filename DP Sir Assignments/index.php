<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8> <meta content="IE=edge" http-equiv=X-UA-Compatible> <meta content="width=device-width,initial-scale=1" name=viewport>
  <title>Visualization</title>
  <link rel="stylesheet" type="text/css" href="css/c3.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-material-design.css">
  <link rel="stylesheet" type="text/css" href="css/ripples.css">

  <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>  
  <script type="text/javascript" src="js/d3.v3.min.js"></script>
  <script type="text/javascript" src="js/c3.min.js"></script>
  <script type="text/javascript" src="js/material.js"></script>
  <script type="text/javascript" src="js/ripples.js"></script>

</head>
<style type="text/css">

 </style>
<body>
<div class="container">
<div class="col-md-12" style="top:15px">
  <div class="col-md-3" style="top: 19px;">
    <img src="images/logo.png">
  </div>
  <div class="col-md-8">
  <h3 style="text-align:center">DevOps and MDBMS Assignments - BDDA, SOIS</h3>
  <h4 style="text-align:center">Data Analysis & Visualization - Students Academic Performance Analysis </h4>
  </div>
</div>
<div class="col-md-12">
<div class="form-inline">
  <div class="form-group label-floating">
      <label for="listofdata" class="">Select Data List</label><br/>
      <select id="listofdata" class="form-control ">
        <option value="" data-btn="dataType">Select Option</option>
        <option value="status" data-btn="dataType">Chethan-SubjectWise</option>
        <option value="status2" data-btn="dataType">Anusha Vs Deepika</option>
        <option value="status3" data-btn="dataType">Mail - Total Sent in last 180 days</option>
            
      </select>
  </div>
  
</div>
</div>
<div class="col-md-12">
  
<div id="chart">
<img style='display:none' id='status'src="images/cgs1.png"/>
<img style='display:none' id='status2'src="images/cgs2.png"/>
<img style='display:none' id='status3'src="images/webs.png"/>
</div>

</div>
<script type="text/javascript">

$('#listofdata').change(function(){

	var listdata=$("#listofdata :selected").val();
	if(listdata=="status"){
		$('#status').show();
		$('#status2').hide();
		$('#status3').hide();
	}else if(listdata=="status2"){
		$('#status').hide();
		$('#status2').show();
		$('#status3').hide();
	}else if(listdata=="status3"){
		$('#status').hide();
		$('#status2').hide();
		$('#status3').show();

	}
});

 

</script>
<hr/>
<footer class="navbar-fixed-bottom" style="padding: 19px;background: black;color: aliceblue;">
  <div class="col-md-12"><span>Semester Assignment - Monsoon 2016 | Submitted by Chethan GS</span>
  <span class="pull-right">Github Repo Link: <a href="https://github.com/chethangs">https://github.com/chethangs</a></span>
  </div>
</footer>
</div>

</body>
</html>