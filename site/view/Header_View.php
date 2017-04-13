<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage</title>

    <!-- Bootstrap Core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="public/css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php?c=home">Trang Chủ</a>
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search" />
                    </div>
                    <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                </form>
            </div>
            <div>
            <?php if (!isset($_SESSION['user'])) {?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php?c=signup" ><span class="glyphicon glyphicon-user"></span> Đăng ký</a></li>
                    <li><a href="index.php?c=login"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
                </ul>
            <?php } ?>
            <?php if(isset($_SESSION['user'])) {?>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['user']['name']; ?>
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">  
                            <li><a href="index.php?c=logout">Log Out</a></li> 
                        </ul>
                    </li>
                    <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
                </ul>
            <?php } ?>
            </div>  
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php foreach ($data as $key => $value){?>
                    <li>
                        <a href="#"><?php echo $value['name']; ?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <script src="public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="public/js/bootstrap.min.js"></script>

</body>

</html>
