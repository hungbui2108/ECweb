<?php require_once 'Header_View.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Username
                        </th>
                        <th>
                            Email
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($data as $key => $value) {
                    # code...
                ?>
                    <tr class="active">
                        <td>
                            <?php echo $value['id']; ?>
                        </td>
                        <td>
                            <?php echo $value['name']; ?>
                        </td>
                        <td>
                            <?php echo $value['email']; ?>
                        </td>
                    </tr>
                    <?php }  ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php require_once 'Footer_View.php'; ?>