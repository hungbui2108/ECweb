 <!DOCTYPE html>
    <html>
    <head>
        <title><?php echo $catalog['name'].' '.$brand['name']; ?></title>
    </head>
    <body >
<div class="container" style="padding-top: 10px;">
	<div class="row">
		<?php foreach ($product as $key => $value){?>
            <div class="col-xs-3">
                <div class="thumbnail" style="background-color: #ffffff">
                    <a href="index.php?c=product_detail&id=<?php echo $value['id'] ?>">
                        <img style="width: 170px; height: 200px;" src="<?php echo $value['image_link']; ?>" alt="">
                    </a>
                    <div class="caption">
                        <h4 class="pull-right"><?php echo number_format($value['price']).' VNĐ'; ?></h4> <br> <br>
                        <h4><a href="index.php?c=product_detail&id=<?php echo $value['id'] ?>"><?php echo $value['name']; ?></a></h4>
                    </div>
                </div>
            </div>
         <?php } ?>
	</div> <!-- row / end -->
</div> <!-- container / end -->
</body>
</html>