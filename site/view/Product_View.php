 <!DOCTYPE html>
    <html>
    <head>
        <title><?php echo $name; ?></title>
    </head>
    <body >
    <div class="container">
	<div class="row">
   <div class="col-xs-4 item-photo">
                    <img style="width: 380px; height: 400px;" src="<?php echo $image_link; ?>" />
                </div>
                <div class="col-xs-5" style="border:0px solid gray">
                    <h3><?php echo $name; ?></h3>    

                    <!-- Precios -->
                    <h6 class="title-price"><small>Giá</small></h6>
                    <h3 style="margin-top:0px;"><?php echo $price; ?></h3>

                    <form>
                        <div class="section" style="padding-bottom:20px;">
                            <h6 class="title-attr"><small>Số Lượng</small></h6>                    
                            <div>
                                <input name="qty" value="1" />
                            </div>
                        </div>                

                        <div class="section" style="padding-bottom:20px;">
                            <button class="btn btn-success" type="submit"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Bỏ vào giỏ hàng </button>
                        </div>
                    </form>                                        
                </div>                              

                <div class="col-xs-9">
                    <div style="width:100%;border-top:1px solid silver">
                        <p style="padding:20px; font-size: 20px;">
                            <?php echo $content; ?>
                        </p>
                    </div>
                </div>		
	   </div>
    </div>
</body>
    </html>
