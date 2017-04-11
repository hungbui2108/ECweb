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
    <a href="admin.php?c=product_add" class="btn btn-primary btn-xs pull-right"><b>+</b>Thêm mới</a>
        <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Đã bán</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    	<?php foreach ($data as $key => $value) {?>
            <tr>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['name']; ?></td>
                <td><?php echo $value['price'].' VNĐ'; ?></td>
                <td><?php echo $value['sold_qty']; ?></td>
                <td class="text-center">
                    <a class='btn btn-success btn-xs' href="admin.php?c=product_update&&d=<?php echo $value['id']; ?>">
                        <span class="glyphicon glyphicon-edit"></span> Edit
                    </a> 
                    <a href="admin.php?c=product_delete&&d=<?php echo $value['id']; ?>" class="btn btn-danger btn-xs">
                        <span class="glyphicon glyphicon-remove"></span> Del
                    </a>
                </td>
            </tr>
            <?php } ?>
    </table>
    </div>
</div>
</body>
</html>
