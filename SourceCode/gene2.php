<?php
/**
 * Template Name: gen2
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<!DOCTYPE html>
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
			<p>To young active soft-drink consumers who have little time for sleep our mountain dew is the soft drink that gives more energy than any other brand because it has the high level of caffeine.</p>
		</div>
		<div class="col-md-6 col-md-pull-6">
		<form id="subAction">
			<div class="form-inline">
				<div class="form-group">
				
				    
					<label for="TargetCustomer" class="normal-font">To</label>
				    <input type="text" class="form-control transparent-input" id="TargetCustomer" placeholder="Target Customer" data-toggle="tooltip" data-placement="top" title="Hint: Who do you want to buy your product?
				    Eg: young active soft-drink consumers who have little time for sleep"> 
					<br>
					<br>
					
				    <label for="ProductName" class="normal-font">our</label>
				    <input type="text" class="form-control transparent-input" id="ProductName" placeholder="Product Name"
					data-toggle="tooltip" data-placement="top" title="Hint: Company name or Product name
					Eg: mountain dew">
					<br>
					<br>
					
					<label for="Concept" class="normal-font">is</label>
				    <input type="text" class="form-control transparent-input" id="Concept" placeholder="Concept (Product Type)" data-toggle="tooltip" data-placement="top" title="Hint: The frame of reference is the segment or category in which your product competes.
					Eg: the soft drink">
					<br>
					<br>
					
					<label for="PointDiff" class="normal-font">that </label>
				    <input type="text" class="form-control transparent-input" id="PointDiff" placeholder="Point of difference" data-toggle="tooltip" data-placement="top" title="Hint: The point of differentiation describes how your brand or product benefits customers in ways that set you apart from your competitors.
					Eg: gives more energy than any other brand because it has high level of caffeine ">
					<br>
					<br>
					
					
					    
				     </div>
				
				
				     <div class="row">
					<div class="col-md-2 col-md-offset-5">
					 <input id="calcValue" name="calcValue" type="submit" class="btn btn-primary" value="Generate your positioning statement"></input>
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
	<br>
	<br>
	<br>
	<textarea id="resultant" name="resultant" rows="5" cols="60" style="resize:none; display:none;">
	</textarea>
	
	</div>
</div>
<br>
<br>
<div class="row">

	<div class="col-md-4 col-md-offset-4">
	    <a href="/generator1" class="btn btn-default" style="display:none;" id="try2">Try Previous Template</a>
		<a href="/generator3" class="btn btn-default" style="display:none;" id="try">Try another Template</a>
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
			$("#try2").show();
			$( "#resultant" ).val();
	  		$( "#resultant" ).val("To " + $("#TargetCustomer").val() + " our "  + $("#ProductName").val() + " is " + $("#Concept").val()+" that "+$("#PointDiff").val()+".");
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