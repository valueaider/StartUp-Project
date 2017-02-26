<?php
/**
 * Template Name: gen4
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>


<html lang="en" ng-app>
<style>
#bitnami-banner {display:none;}
</style>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head 
         content must come *after* these tags -->

    <title>ValueAider- Home</title>
	
	   <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet">
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/mystyles.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Polyfill Web Components support for older browsers -->
	<script src="components/webcomponentsjs/webcomponents-lite.min.js"></script>

	<!-- Import element -->
	<link rel="import" href="components/google-map/google-map.html">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	
</head>

<body>

<!--JumboTron -->
     <div class="container">
    <header class="jumbotron">
	<div class="row">
	<div class="col-md-offset-16">
	<a href="/"><h1 class="text-center">ValueAider</h1></a>
	<h3 class="text-center">Welcome to ValueAider Beta an online positioning statement generator.</h3>
	<p class="text-center">Fill in the blanks below to get your value positioning statement.</p>
	
	</div>
	</div>

		<div class="container">
		
			<div class="row">
				<div class="col-md-6">
						
				</div>
			</div>
		</div>
    </header>
	
	<hr>

<div class="container">

<div class="row">
	<div class="col-md-12">

	</div>
</div>

	<div class="row">
		<br>
		<br>
		<br>
		<div class="col-md-6 col-md-push-6 ">
<h3>Sample Positioning Statement</h3>			
<p>Our RLF program helps teachers who want their students to become aware of the realities of the job market by replacing old teaching methods and gaining practical skills while also having fun unlike typical career counseling</p>
		</div>
		<div class="col-md-6 col-md-pull-6">
			<form id="subAction">
			<div class="form-inline">
				<div class="form-group">
				
				    
					<label for="ProductName" class="normal-font"> Our </label>
					<input type="text" class="form-control transparent-input" id="ProductName" placeholder="Product Name"
					data-toggle="tooltip" data-placement="top" title="Hint: Product name and services offered					Eg: RFL Program.">
				    <br>
					<br>
					
				    <label for="TargetCustomer" class="normal-font"> helps </label>
					<input type="text" class="form-control transparent-input" id="TargetCustomer" placeholder="Target Customer" data-toggle="tooltip" data-placement="top" title="Hint: To Whom the product is usable?
				    Eg: Teachers">
			        <br>
					<br>
					
					<label for="Job" class="normal-font"> who want </label>
				    <input type="text" class="form-control transparent-input" id="Job" placeholder="Job to be done" 
					data-toggle="tooltip" data-placement="top" title="Hint: Jobs to be done for the TargetCustomer
					Eg: their students to become aware of the realities of the job market">
				    <br>
					<br>

                     <label for="verb" class="normal-font"> by </label>
				    <input type="text" class="form-control transparent-input" id="Verb" placeholder="Verb"
					data-toggle="tooltip" data-placement="top" title="Hint: Verb which is related to CustomerPain
					Eg: replacing, reducing, avoiding.">
					<input type="text" class="form-control transparent-input" id="CustomerPain" placeholder="Customer Pain" data-toggle="tooltip" data-placement="top" title="Hint: TargetCustomer's pain
					Eg: Old teaching methods">
					<br>
					<br>
					
					<label for="Verb1" class="normal-font"> and </label>
				    <input type="text" class="form-control transparent-input" id="Verb1" placeholder="Verb"
					data-toggle="tooltip" data-placement="top" title="Hint: Verb which is related to CustomerGain
					Eg: gaining, increasing,enabling.">
				    <input type="text" class="form-control transparent-input" id="CustomerGain" placeholder="Customer Gain" data-toggle="tooltip" data-placement="top" title="Hint: TargetCustomer's Gain
					Eg:practical skills while also having fun">
					<br>
					<br>
					
					<label for="Competitor" class="normal-font"> Unlike </label>
				    <input type="text" class="form-control transparent-input" id="Competitor" placeholder="Competitor" 
					data-toggle="tooltip" data-placement="top" title="Hint:Competitor's value proposition
					Eg: typical career counseling">
					
			   
				</div>
				
				<br>
				<br>
				<div class="row">
					<div class="col-md-2 col-md-offset-5">
					<input id="calcValue" name="calcValue" type="submit" class="btn btn-primary" value="Generate Your Positioning Statement"></input>
					<br>
					<br>
					<br>
				</div>
			</div>
			</form>
		</div>
		
	</div>

<br>
<br>
<br>

<!--Results -->
<div class="row">

	<div class="col-md-4 col-md-offset-4" style="padding-top:30px;">
	<textarea id="resultant" name="resultant" rows="5" cols="60" style="resize:none; display:none;">
	</textarea>
	</div>
</div>
<br>
<br>
<div class="row">

	<div class="col-md-4 col-md-offset-4">
		<a href="/generator3" class="btn btn-default" style="display:none;" id="try">Try Previous Template</a>
	</div>
</div>
<br>
<br>
<!--Google Embed Forms-->
<div class="row">
<div class="col-md-offset-1">
<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf1AA-8X4XRtWRlKkrUjSOW8fGiwUx2tOVTReQrC_UVy1NjjQ/viewform?embedded=true" width="760" height="1600" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
</div>
</div>
<!--Google embed Ends here-->
</div>
	
	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Script for adding the resopnsiveness-->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>


	<script>
	//Generator script
	$(document).ready(function(){
		
		$( "#subAction" ).submit(function( event ) {
	  		//Resultant values
	  		$( "#resultant" ).show();
			$("#try").show();
	  		$( "#resultant" ).val();
	  		$( "#resultant" ).val("Our " + $("#ProductName").val() + " helps " + $("#TargetCustomer").val() +" who want "+$("#Job").val() +" by "+$("#Verb").val() +$("#CustomerPain").val() +" and "+$("#Verb1").val() +$("#CustomerGain").val() +" Unlike "+$("#Competitor").val() +".");
	  	

	  		});
		
	});
	</script>

<script>
	$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});

</script>
</body>

</html>