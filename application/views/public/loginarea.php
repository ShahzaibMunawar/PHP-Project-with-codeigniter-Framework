<div class="container">
    <?php echo form_open('login/admin_login', ['class' => "form-horizontal"]) ?>
    <fieldset>
        <legend>Admin Login</legend>
        <div class="row">
            <div class="col-lg-6">
         <div class="form-group">

            <label for="inputEmail" class="col-lg-2 control-label">Username</label>
            <div class="col-lg-10">
                <?php echo form_input(['name' => 'username', 'class' => 'form-control', 'placeholder' => 'Username' , 'value'=> set_value('username')]) ?>
            </div>
        </div>
                
                
        <div class="form-group">
            <label for="inputUserName" class="col-lg-2 control-label">Password</label>
            <div class="col-lg-10">
                <?php echo form_input(['name' => 'password', 'class' => 'form-control', 'placeholder' => 'Password']) ?>
            </div>
        </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <br>
                        <br>
                        <?php echo form_reset(['name' => 'Reset', 'value' => 'Reset', 'class' => 'btn btn-default']) ?>
                        <?php echo form_Submit(['name' => 'submit', 'value' => 'Login', 'class' => 'btn btn-primary']) ?>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <?php echo form_error('username'); ?>
                <?php echo form_error('password'); ?>
            </div>
        </div>
                </fieldset>`
            </div>