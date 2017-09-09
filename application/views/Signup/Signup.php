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
                        <?php echo form_password(['name' => 'password','id'=>'password', 'class' => 'form-control', 'placeholder' => 'password', 'value' => set_value('password'),'onkeyup'=>'check();']) ?>
                    </div>
                </div>
<!--                <div class="form-group">

                    <label for="password" class="col-lg-2 control-label">Confirm Password</label>
                    <div class="col-lg-10">
                        <?php // echo form_password(['name' => 'confirm_password','id'=>'confirm_password', 'class' => 'form-control', 'placeholder' => 'Confirm Password', 'value' => set_value('confirm_password'),'onkeyup'=>'check();']) ?>
                    </div>
                </div>-->
                
                //<?php
//    if(isset($_POST['submit'])){
//        echo "
//            <script type=\"text/javascript\">
//            var check = function() {
//  if (document.getElementById('password').value ==
//    document.getElementById('confirm_password').value) {
//    document.getElementById('message').style.color = 'green';
//    document.getElementById('message').innerHTML = 'matching';
//  } else {
//    document.getElementById('message').style.color = 'red';
//    document.getElementById('message').innerHTML = 'not matching';
//  }
//}
//            </script>
//        ";
//     }
//  ?>
                
                
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


