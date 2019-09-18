<?php 


include("template/header.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title >MAINTENANCE</title>
</head>
<body>


<div class="container jumbotron-container">
    <p class="text-center"><i class="fa  fa-wrench icon-setting"></i><i class="fa  fa-cog icon-setting"></i></p> 
	<h2 class="text-center text-announcement" > Sorry, this page is under maintenance. </h2>
</div>


<style type="text/css">
	 .jumbotron-container{ 
        margin-top: 25vh;
        margin-bottom: 10vh;
	 }

	 .text-announcement
	 {
         font-family: "Quattrocento";
         font-weight: bold;
	 }
    
    .icon-setting{
        font-size: 150px;
    }
</style>

<script type="text/javascript">
	$(document).ready(function(){
		document.title = "LinkPro | Maintenance";
	}) 
</script>




<?php  include("template/footer.php"); ?>