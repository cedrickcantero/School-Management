<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="{{ URL::asset('/css/loginstyles.css') }}">
</head>

<body>
<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-top">
						<div class="row">
							<img src="{{URL::asset('/image/logo.png')}}" alt="profile Pic" height="200" width="200">
						</div>
						<div class="row">
							<h4>MABOLO CHRISTIAN ACADEMY</h4>
						</div>
					</div>
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-4">
								<a href="#" class="active" id="admin-form-link">Admin</a>
							</div>
							<div class="col-xs-4">
								<a href="#" id="teacher-form-link">Teacher</a>
							</div>
							<div class="col-xs-4">
								<a href="#" id="student-form-link">Student</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="admin-login-form" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="admin-username" id="admin-username" tabindex="1" class="form-control" placeholder="Admin Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="admin-password" id="admin-password" tabindex="2" class="form-control" placeholder="Admin Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="admin-submit" id="admin-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
								</form>
								<form id="teacher-login-form" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="teacher-username" id="teacher-username" tabindex="1" class="form-control" placeholder="Teacher Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="teacher-password" id="teacher-password" tabindex="2" class="form-control" placeholder="Teacher Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="teacher-submit" id="teacher-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
								</form>
								<form id="student-login-form" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="student-username" id="student-username" tabindex="1" class="form-control" placeholder="Student Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="student-password" id="student-password" tabindex="2" class="form-control" placeholder="Student Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="student-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="footer">
				<p>2019 Mabolo Christian Academy</p>
				<p>Academic Module</p>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	$(function() {

    $('#admin-form-link').click(function(e) {
		$("#admin-login-form").delay(100).fadeIn(100);
 		$("#teacher-login-form").fadeOut(100);
 		$("#student-login-form").fadeOut(100);
		$('#teacher-form-link').removeClass('active');
		$('#student-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

    $('#teacher-form-link').click(function(e) {
		$("#teacher-login-form").delay(100).fadeIn(100);
 		$("#admin-login-form").fadeOut(100);
 		$("#student-login-form").fadeOut(100);
		$('#admin-form-link').removeClass('active');
		$('#student-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});


    $('#student-form-link').click(function(e) {
		$("#student-login-form").delay(100).fadeIn(100);
 		$("#admin-login-form").fadeOut(100);
 		$("#teacher-login-form").fadeOut(100);
		$('#admin-form-link').removeClass('active');
		$('#teacher-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});

</script>

</html>