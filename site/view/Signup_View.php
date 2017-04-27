<!DOCTYPE html>
<html lang="en">
    <head> 
    <link rel="stylesheet" type="text/css" href="public/css/signup.css">
    <title>Sign Up</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Đăng Ký</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="index.php?c=signup&&a=sign_up">

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Nhập Email" required />
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Tài khoản</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Nhập tài khoản" required />
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Mật khẩu</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Nhập mật khẩu" required />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="phone" class="cols-sm-2 control-label">Số điện thoại</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="phone" id="phone"  placeholder="Nhập Số điện thoại" required />
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="adress" class="cols-sm-2 control-label">Địa chỉ</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="adress" id="adress"  placeholder="Nhập địa chỉ" required />
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block">Đăng ký</button>
						</div>
						<div class="login-register">
				            <a href="index.php?c=login">Login</a>
				        </div>
				        <div>
				        	<?php if($data){
				        		echo '<p style="color: red;">signup fail</p>';
				        	} 
				        	?>
				        </div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>