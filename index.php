<!DOCTYPE html>
<html>
<head>
	<title>Brian's Weather Scrapper</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<style>

	html, body{
		height: 100%;
	}

	.container {
		background-image: url('weather_scrapper.jpg');
		width: 100%;
		height: 100%;
		background-size: cover;
		background-position: center;
		padding-top: 120px;
	}

	.center {
		text-align: center;
	}
</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h1 class="center">Brian's Web Scrapper</h1>
				<p class="lead center">Enter your city below for your personal weather forecast!</p>

				<form>
					<div class="form-group">
						<input type="text" class="form-control" name="city" id="city" placeholder="Eg. Toronto, Aurora..">
					</div>
					<button class="btn btn-success btn-xlarge col-md-offset-4">Tell me the Weather!</button>
				</form>
			</div>
		</div>
	</div>

<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>