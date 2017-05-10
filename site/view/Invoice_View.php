<section class="content content_content" style="width: 70%; margin: auto;">
                    <section class="invoice">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-xs-12">
                                <h2 class="page-header">
                                    <i class="fa fa-globe"></i> Hóa Đơn
                                    <small class="pull-right">Date: <?php echo $date; ?></small>
                                </h2>
                            </div><!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                Địa chỉ
                                <address>
                                    <strong>
                                    Tên :<?php echo $_SESSION['user']['name']; ?>                                    
                                    </strong>
                                    <br>
                                    Địa chỉ: <?php echo $_SESSION['user']['address']; ?><br>
                                    Số điện thoại: <?php echo $_SESSION['user']['phone']; ?><br>
                                    Email: <?php echo $_SESSION['user']['email']; ?>                                
                                </address>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-xs-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Qty</th>
                                            <th>Sub Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($data as $key => $value): ?>
                                        <tr>
                                            <td><?php echo $value['name']; ?></td>
                                            <td><?php echo number_format($value['price']).' VNĐ'; ?></td>
                                            <td><?php echo $value['qty']; ?></td>
                                            <td><?php echo number_format($value['stotal']).' VNĐ'; ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Total:</th>
                                                <td> <?php echo number_format($sum).' VNĐ'; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-xs-12">
                                <a href="" class="btn btn-default"><i class="fa fa-print"></i> IN</a>
                                <a href="index.php?c=invoice&a=buy"><button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Xác nhận mua hàng</button></a>
                            </div>
                        </div>
                    </section>
                </section>