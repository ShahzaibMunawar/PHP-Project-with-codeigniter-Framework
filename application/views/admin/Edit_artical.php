<?php include_once ('admin_header.php'); ?>
<div class="container">
    <!--    //this will open the admin/store_artical file-->
    <?php echo form_open("admin/update_artical/{$artical->id}", ['class' => "form-horizontal"]); ?> 

    <fieldset>
        <legend>Edit Article</legend>

        <div class="row">
            <div class="col-lg-7"> 
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Article Title</label>
                    <div class="col-lg-10">

                        <?php
                        echo form_input(['name' => 'title', 'class' => 'form-control',
                            'placeholder' => 'Article title', 'value' => set_value('title', $artical->title)])
                        ?>

                    </div>
                </div>

                <div class="form-group">

                    <label for="inputEmail" class="col-lg-2 control-label">Article body</label>
                    <div class="col-lg-10">

                        <?php
                        echo form_textarea(['name' => 'body', 'class' => 'form-control',
                            'placeholder' => 'Article body', 'value' => set_value('body', $artical->body)])
                        ?>

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <br>
                        <br>
                        <?php echo form_reset(['name' => 'Reset', 'value' => 'Reset', 'class' => 'btn btn-default']) ?>
                        <?php echo form_Submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-primary']) ?>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">

                <?= form_error('title'); ?>
                <?= form_error('body'); ?>
            </div>
        </div>
    </fieldset>
</div>
<?php include_once ('admin_footer.php'); ?>