<?php require_once 'Header_View.php'; ?>
    <div class="container">
        <div class="row col-md-12">
            <form action="admin.php?c=catalog_add&&a=add_catalog" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                    <div class="modal-body" style="padding: 5px;">
                          <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                    <input class="form-control" name="name" placeholder="Tên loại" type="text" required autofocus />
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