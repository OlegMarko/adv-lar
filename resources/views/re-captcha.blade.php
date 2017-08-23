<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Advanced laravel</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<div class="row">

			<br>

			<div class="col-lg-offset-4 col-lg-4">

				@if (count($errors) > 0)
					@foreach ($errors->all() as $error)
						<p class="alert alert-danger">{{ $error }}</p>
					@endforeach
				@endif

				@if (session('validation'))
					<p class="alert alert-success">{{ session('validation') }}</p>
				@endif

				<form action="{{ url('re-captcha') }}" method="post" id="form">

					{{ csrf_field() }}

					@captcha()

					<div class="form-group">
						<input class="btn btn-success" type="submit">
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script>
		$(document).ready(function () {
			// Test reCAPTCHA
			// $('#form').submit();
		});
	</script>
</body>
</html>