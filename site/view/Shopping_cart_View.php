
<!DOCTYPE html>
<html lang="en">
    <head> 
    <link rel="stylesheet" type="text/css" href="public/css/signup.css">
    <title>Cart</title>
    </head>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <table id="cart" class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th style="width:50%">Product</th>
                            <th style="width:10%">Price</th>
                            <th style="width:8%">Quantity</th>
                            <th style="width:22%" class="text-center">Subtotal</th>
                            <th style="width:10%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($_SESSION['cart'])): ?>
                        <?php foreach ($data as $key => $value): ?>
                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-2 hidden-xs"><img src="<?php echo $value['image_link']; ?>" alt="..." class="img-responsive"/></div>
                                    <div class="col-sm-10">
                                        <h4 class="nomargin"><?php echo $value['name']; ?></h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price"><?php echo number_format($value['price']).' VNĐ'; ?></td>
                            <form method="post" action="index.php?c=shopping_cart&a=update_cart&id=<?php echo $value['id']; ?>">
                            <td data-th="Quantity">
                                <input type="number" class="form-control text-center" value="<?php echo $value['qty']; ?>" name="qty">
                            </td>
                            <td data-th="Subtotal" class="text-center"><?php echo number_format($value['stotal']).' VNĐ'; ?></td>
                            <td class="actions" data-th="">
                                <button class="btn btn-info btn-sm" type="submit"><i class="fa fa-refresh"></i></button></a>
                            </form>
                                <a href="index.php?c=shopping_cart&a=delete_cart&id=<?php echo $value['id']; ?>"><button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button></a>                                
                            </td>
                        </tr>
                        <?php endforeach ?>
                        <?php endif ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><a href="index.php?c=home" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a></td>
                            <td colspan="2" class="hidden-xs"></td>
                            <td class="hidden-xs text-center"><strong><?php echo number_format($sum).' VNĐ'; ?></strong></td>
                            <td><a href="index.php?c=invoice" class="btn btn-success btn-block">Thanh Toán <i class="fa fa-angle-right"></i></a></td>
                        </tr>
                    </tfoot>
                </table>
</div>  
</body>
</html>