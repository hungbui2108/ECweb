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
            <th>Username</th>
            <th>Email</th>
        </tr>
    </thead>
        <?php foreach ($data as $key => $value) {?>
            <tr>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['name']; ?></td>
                <td><?php echo $value['email']; ?></td>
            </tr>
            <?php } ?>
    </table>
    </div>
</div>
</body>
</html>