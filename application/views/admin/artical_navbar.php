

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <?php echo form_open("admin/search", ['class' => "form-horizontal"]); ?> 
        <div class="navbar-header">
            <a class="navbar-brand" href="#">My Quora</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Articals</a></li>
            <li><a href="#">Answer Question</a></li>
            <li><a href="#">Feedback</a></li>

        </ul>
        <!--to move the search bar to right-->
        <ul class="nav navbar-nav navbar-right" style=""> 
            <li style="width: 200px; padding-top: 10px;">
                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text"  class="form-control" placeholder="Search By title" name="search">
                        <div class="input-group-btn"> 
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>
            </li>
            <li class="" style="">
                <?= anchor('login/logout', 'Logout', array('class' => 'glyphicon glyphicon-log-out')) ?>

            </li>
        </ul>
    </div>
</nav>
