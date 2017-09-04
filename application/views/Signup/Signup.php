<?php include_once ('admin_header.php'); ?>		
<div class="container">
    <!--    //this will open the admin/store_artical file-->
    <?php echo form_open('login/store_user', ['class' => "form-horizontal"]); ?>

    <div class="col-lg-3"></div>
    <div class="col-lg-5">   
        <fieldset>

            <legend>Create an account</legend>

            <div class="row">

                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Username</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'username', 'class' => 'form-control', 'placeholder' => 'Username', 'value' => set_value('username')]) ?>
                    </div>
                </div>

                <div class="form-group">

                    <label for="password" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                        <?php echo form_password(['name' => 'password', 'class' => 'form-control', 'placeholder' => 'password', 'value' => set_value('password')]) ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <br>
                        <br>
                        <?php echo form_reset(['name' => 'Reset', 'value' => 'Reset', 'class' => 'btn btn-default']) ?>
                        <?php echo form_Submit(['name' => 'submit', 'value' => 'Register', 'class' => 'btn btn-primary']) ?>
                        <br>
                    </div>
                </div>

            </div>  
        </fieldset>
    </div>
    <div class="col-lg-4">
        <?= form_error('username'); ?>
        <?= form_error('password'); ?>
    </div>

</div>

<?php include_once ('Signup_footer.php'); ?>


