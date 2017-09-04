<div class="container">
    <?php echo form_open('login/admin_login', ['class' => "form-horizontal"]) ?>
    <fieldset>
        <legend>Admin Login</legend>
     
        <!--  flash data to show user added  -->
        <?php
        if ($user_added = $this->session->flashdata('user_added')):
            $feedback_class = $this->session->flashdata('feedback_class');
            ?> <!--this is used to set the class -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="alert alert-dismissible <?= $feedback_class ?>"> <!--here we dynamicaly call the class -->
                        <?= $user_added ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
            
               <!--to display the flashdata on the page that login fail-->
            
        <?php if ($error = $this->session->flashdata('login_failed')): ?>
            <div class="row">
                <div class="col-lg-6">
                    <div class="alert alert-dismissible alert-warning">
                        <?= $error ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
               
               
        <div class="row">

            <div class="col-lg-6">

                <div class="form-group">

                    <label for="inputEmail" class="col-lg-2 control-label">Username</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'username', 'class' => 'form-control', 'placeholder' => 'Username', 'value' => set_value('username')]) ?>
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
                        <?php echo form_reset(['name' => 'Reset', 'value' => 'Reset', 'class' => 'btn btn-default ']) ?>
                        <?php echo form_Submit(['name' => 'Login', 'value' => 'Login', 'class' => 'btn btn-primary']) ?>
                        <?= anchor('login/Signup', 'Signup', ['class' => 'btn btn-primary pull-right']) ?>
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