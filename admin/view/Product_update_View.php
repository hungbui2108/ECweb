 <!DOCTYPE html>
    <html>
    <head>
        <title>Thêm Sản Phẩm</title>
        <script src="public/ckeditor/ckeditor.js"></script>
    </head>
    <body >
    <div class="container">
        <div class="row col-md-12">
            <form action="admin.php?c=product_update&&a=update_product&&id=<?php echo $id; ?>" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                    <div class="modal-body" style="padding: 5px;">
                          <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                    <input class="form-control" value=<?php echo '"'.$name.'"'; ?> name="name" placeholder="Tên Sản Phẩm" type="text" required autofocus />
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                    <input class="form-control" value=<?php echo '"'.$price.'"'; ?> name="price" placeholder="Giá" type="text" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                    <input class="form-control" value=<?php echo '"'.$storage_qty.'"'; ?> name="storage_qty" placeholder="Số lượng trong kho" type="text" required autofocus />
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <textarea style="resize:vertical;" class="ckeditor" placeholder="Nội Dung" rows="6" name="content"><?php echo $content; ?></textarea>
                                </div>
                            </div>
                        </div>  
                        <div class="panel-footer" style="margin-bottom:-14px;">
                            <input type="submit" class="btn btn-success" name="submit" value="Update"/>
                                <!--<span class="glyphicon glyphicon-ok"></span>-->
                            <input type="reset" class="btn btn-danger" value="Xóa" />
                                <!--<span class="glyphicon glyphicon-remove"></span>-->
                            <input style="padding-top : 10px"; id="filebutton" name="file" class="input-file" type="file">
                        `</div>
                    </div>
            </form>
        </div>
    </div>