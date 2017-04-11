<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang quản trị</title>

    <!-- Bootstrap -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <?php $c = $_GET['c'] ?? 'home'; ?>
<div class="container">
<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="admin.php?c=home">Quản trị</a>
    </div>
    <ul class="nav navbar-nav">
      <li <?php if($c=='home'){echo 'class="active"';}?>><a href="admin.php?c=home">Trang Chủ</a></li>
      <li <?php if($c=='user'){echo 'class="active"';}?>><a href="admin.php?c=user">Thành Viên</a></li> 
            <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sản Phẩm
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li <?php if($c=='product_list'){echo 'class="active"';}?>><a href="admin.php?c=product_list">Danh sách sản phẩm</a></li>
          <li <?php if($c=='product_add'){echo 'class="active"';}?>><a href="admin.php?c=product_add">Thêm mới sản phẩm </a></li>
          <li><a href="#">Thống kê sản phẩm</a></li> 
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Danh mục
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="admin.php?c=catalog_list">Loại</a></li>
          <li><a href="admin.php?c=brand_list">Hãng</a></li> 
        </ul>
      </li>
      <li><a href="admin.php?c=transaction_list">Đơn hàng</a></li>
      <li><a href="admin.php?c=logout">logout</a></li> 
    </ul>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="public/js/bootstrap.min.js"></script>
  </div>
</nav>
</div>
</html>
