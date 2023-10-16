<html>

<body>
    <?php include('header.php'); ?>
   
<div class="row-fluid">
        <div class="span12">


            <div class="navbar navbar-fixed-top navbar-inverse">
                <div class="navbar-inner">
                    <div class="container">

                        <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>

                        <!-- Be sure to leave the brand out there if you want it shown -->


                        <!-- Everything you want hidden at 940px or less, place within here -->



                        <div class="nav-collapse collapse">
                            <!-- .nav, .navbar-search, .navbar-form, etc -->


                        </div>

                    </div>
                </div>
            </div>

            <div class="hero-unit-header">
                <div class="container">
                    <div class="row-fluid">
                        <div class="span12">


                            <div class="row-fluid">
                                <div class="span6">
                                    <img src="images/learn.jpg">
                                </div>
                                <div class="span6 currentdate">

                                    <div class="pull-right ">
                                        <i class="icon-calendar icon-large"></i>
                                        <?php
                                        $Today = date('y:m:d');
                                        $new = date('l, F d, Y', strtotime($Today));
                                        echo $new;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
   
     <div class="span10">

					<div class="hero-unit-3">
                        <ul class="thumbnails">
                            <li class="span7">
                                <div class="thumbnail">
                              <div class="alert alert-danger"><strong>Username</strong>  username is already exist</div>

                                    <form class="form-horizontal" method="POST">
                                        <div class="control-group">
                                            <label class="control-label" for="inputEmail">Username:</label>
                                            <div class="controls">
                                                <input type="text" name="un" id="inputEmail" placeholder="Username" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputPassword">Password:</label>
                                            <div class="controls">
                                                <input type="password" name="p" id="inputPassword" placeholder="Password" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputPassword">FirstName:</label>
                                            <div class="controls">
                                                <input type="text" name="fn" id="inputPassword" placeholder="FirstName" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputPassword">LastName:</label>
                                            <div class="controls">
                                                <input type="text" name="ln" id="inputPassword" placeholder="LastName" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">

                                                <button type="submit" name="save" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Sigin in </button>
                                            </div>
                                        </div>
                                    </form>

                                    <?php
                                    if (isset($_POST['save'])) {

                                        $un = $_POST['un'];
                                        $p = $_POST['p'];
                                        $fn = $_POST['fn'];
                                        $ln = $_POST['ln'];
                                      $sql=mysqli_query($conn,"select * from user where  username='$un' ");
                                        $count=mysqli_num_rows($sql);
                                        if($count<1){
                                        mysqli_query($conn,"insert into user (username,password,firstname,lastname) values ('$un','$p','$fn','$ln')")or die(mysqli_error());
                                        echo('<script>location.href = "user.php"</script>');
                                        }
                                        else
                                        {
                                           echo('<script>location.href = "invalid_user.php"</script>');
                                        }
                                    }
                                    ?>

                                </div>
                            </li>

                        </ul>
						</div>



                    </div>
    </div>
    </div>
        <?php include('footer.php'); ?>
    
</body>

</html>