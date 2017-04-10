<?php require_once 'Header_View.php'; ?>
    <div class="container">
        <div class="row col-md-12">
            <form action="admin.php?c=brand_add&&a=add_brand" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                    <div class="modal-body" style="padding: 5px;">
                          <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                    <input class="form-control" name="name" placeholder="Tên hãng" type="text" required autofocus />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 " style="padding-bottom: 10px";>
                                    <select id="selectbasic" name="catalog" class="form-control">
                                        <?php foreach ($catalog as $key => $value) {?>
                                        <option value=<?php echo '"'.$value['id'].'"'; ?>><?php echo $value['name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        <div class="panel-footer" style="margin-bottom:-14px;">
                            <input type="submit" class="btn btn-success" name="submit" value="Thêm"/>
                                <!--<span class="glyphicon glyphicon-ok"></span>-->
                            <input type="reset" class="btn btn-danger" value="Xóa" />
                                <!--<span class="glyphicon glyphicon-remove"></span>-->
                        `</div>
                    </div>
            </form>
        </div>
    </div>
<?php require_once 'Footer_View.php'; ?>