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
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>SĐT</th>
            <th>Tổng Tiền</th>
            <th>Thông Điệp</th>
            <th>Thời gian đặt hàng</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
        <?php foreach ($data as $key => $value) {?>
            <tr>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['user_email']; ?></td>
                <td><?php echo $value['user_phone'].' VNĐ'; ?></td>
                <td><?php echo $value['amount']; ?></td>
                <td><?php echo $value['message']; ?></td>
                <td><?php echo $value['created']; ?></td>
                <td class="text-center">
                    <a class='btn btn-info btn-xs' href="admin.php?c=transaction_detail&&id=<?php echo $value['id']; ?>">
                        <span class="glyphicon glyphicon-edit"></span> Detail
                    </a> 
                    <a href="admin.php?c=transaction_done&&id=<?php echo $value['id']; ?>" class="btn btn-success btn-xs">
                        <span class="glyphicon glyphicon-ok"></span> Done
                    </a>
                </td>
            </tr>
            <?php } ?>
    </table>
    </div>
</div>
</body>
</html>
