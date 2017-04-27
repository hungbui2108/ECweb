<!DOCTYPE html>
    <html>
    <head>
        <title>Login</title>
    </head>
    <body >
<div class="container">
    <div class="row vertical-offset-100">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Đăng nhập</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" method="POST" action="index.php?c=login&&a=check_login ">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Username" name="username" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password">
                        </div>
                        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Đăng nhập">
                        <a href="">đăng ký tài khoản</a>
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

