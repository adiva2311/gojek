<!DOCTYPE HTML>

<html>
<meta name = "viewport" content = "initial-scale = 1.0,user-scalable = no">
<meta charset="utf-8">
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div id="semua"class= "container-fluid">
	<div class="row">
		<div class="col-md-12"></div>
	</div>
</div>
	<div class="modal fade" id="loginModal" role = "dialog" aria-labelledby= "myModalLabel" aria-hidden = "true" data-backdrop= "static" data-keyboard = "false">
		<div class="modal-dialog">
			<div class="modal-content"> 
			<div class="modal-header">
				<h4 class="modal-title"
id= "myModalLabel">
					login Dahulu
				</h4>
			</div>
			<div class="modal-body">
				<p><center>Untuk Bisa Memanfaatkan Aplikasi Ini Anda Dipersilahkan Untuk Login Dahulu 
				</center>
			</p>
					<form class="form-horizontal" role = "form" id="loginform" action="login.php?action=login">
						<div class="form-group">
							<label for="username" class="col-sm-2 control-label">
									username
								</label>
								<div class="col-sm-10">
									<input type="email"class = "form-control" name="username" id="logEmail" placeholder="username here"/>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label">
									password
								</label>
								<div class="col-sm-10">
									<input type="password"
									class="form-control" name="password" id="logPassword" placeholder="Input Your Password"/>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">

						<button type="button" class="btn btn-default" data dismiss = "modal">
							No, Thanks
						</button>
						<button id="btnLogin" type="button" class="btn btn-primary">
							login
						</button>
					</div>
				</div>
			</div>
		</body>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
</body>
</html>



