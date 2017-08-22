<?php include_once ('admin_header.php'); ?>
<?php include_once ('artical_navbar.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-6">
            <!--button-->
            <?= anchor('admin/add_artical','Add Article' , ['class'=>'btn btn-lg btn-primary']) ?>
            <!--------> 
        </div>
    </div>
    <table class="table">
        <thead>
        <th>Sr. No.</th>
        <th>Title</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
            if (count($articals)):
                foreach ($articals as $artical):
                    ?>
                    <tr>
                        <th>1</th>
                        <th> 
                            <?= $artical->title ?> 
                        </th>
                        <th>
                            <a href="" class="btn btn-default">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </th>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">
                        No Record foundww.
                    </td>
                </tr>
            <?php endif; ?>

        </tbody>
    </table>
</div>
<?php include_once ('admin_footer.php'); ?>


