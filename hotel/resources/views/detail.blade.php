<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="{{('public/frontend/css/media.css')}}">
	<link rel="stylesheet" type="text/css" href="{{('public/frontend/css/bg.css')}}">
	<link rel="stylesheet" type="text/css" href="{{('public/frontend/css/flipcard.css')}}">
	<link rel="stylesheet" type="text/css" href="{{('public/frontend/css/footer.css')}}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>5StarHotel Category</title>

  <!-- Bootstrap core CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
	
  <!-- Navigation -->
  @include('navigation')
	<style>
		h1{
			color: white;
		}
		#card{
			padding: 20px;
			
		}
	</style>
  <!-- Page Content -->
	<div id="form" class="container wrapper">
		<h1>Giới thiệu</h1>
		<div class="row">
			@foreach ($images as $image)
			<?php
				$idcat = $image->idcat;
				$categories = DB::table('category')->where('idcat',$idcat)->first();
			?>
					<div id="card"  class="w3-container">
							<div class="flip-card">
								<div class="flip-card-inner">
									<div class="flip-card-front">
										<img src="{{('public/frontend/images/')}}<?php echo $image->name ?>" style="width:300px;height:300px;">
									</div>

									<div class="flip-card-back">
									<h1><?php if($image->idcat == $categories->idcat)
									{
										echo $categories->namecat;
									}
											?></h1>
									<p><?php 
											echo "-Không bao gồm ăn sáng";
											?></p>
									<p><?php 
											echo $categories->description;
											?></p>
									<p><?php
											echo $categories->ac;
											?></p>
									<p><?php 
											echo $categories->price."VND Chưa gồm VAT";
											?></p>
									</div>
								</div>
							</div>
						</div>
			@endforeach
		
		</div>
	<div class="push"></div>
  </div>
  <!-- /.container -->

  <!-- Footer -->
  @include('footer')

  <!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>
