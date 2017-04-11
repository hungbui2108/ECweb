<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="public/css/product_list_style.css">
</head>
<body>
<div class="container">
    <div class="row col-md-12">
    <table class="table table-striped custab">
    <thead>
    <a href="admin.php?c=catalog_add" class="btn btn-primary btn-xs pull-right"><b>+</b>Thêm mới</a>
        <tr>
            <th>ID</th>
            <th>Loại</th>
        </tr>
    </thead>
    	<?php foreach ($data as $key => $value) {?>
            <tr>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['name']; ?></td>
            </tr>
            <?php } ?>
    </table>
    </div>
</div>
</body>
</html>
