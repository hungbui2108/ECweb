    <!DOCTYPE html>
    <html>
    <head>
        <title>Trang Chủ</title>
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="upload/ads/ads1.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="upload/ads/ads2.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="upload/ads/ads3.png" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">
                <?php foreach ($data as $key => $value){?>
                    <div class="col-xs-3">
                        <div class="thumbnail" >
                            <img style="width: 170px; height: 200px;" src="<?php echo $value['image_link']; ?>" alt="">
                            <div class="caption">
                                <h4 class="pull-right"><?php echo $value['price'].' VNĐ'; ?></h4> <br> <br>
                                <h4><a href="#"><?php echo $value['name']; ?></a></h4>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>
    