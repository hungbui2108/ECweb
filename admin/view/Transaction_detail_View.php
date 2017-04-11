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
    <p class="pull-right">Đơn hàng số <?php echo $id; ?></p>
        <tr>
            <th>ID</th>
            <th>Sản phẩm</th>
            <th>Số Lượng</th>
            <th>Tổng tiền</th>
        </tr>
    </thead>
    	<?php foreach ($data as $key => $value) {?>
            <tr>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['product_name']; ?></td>
                <td><?php echo $value['qty']; ?></td>
                <td><?php echo $value['amount']; ?></td>
            </tr>
            <?php } ?>
    </table>
    </div>
</div>
</body>
</html>

