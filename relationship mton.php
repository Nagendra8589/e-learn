<html>
<body>
<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <div class="row-fluid">
        <div class="span12">

            <?php include 'navbar.php'; ?>
            <div class="container">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="span12">
                        <div class="hero-unit-3"> 
                         <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Data Base Management System</strong>
                                </div>
                        <div class="vertical-menu">
  <a href="#" class="active">Introduction,Database Models and ER models</a>
  <a href="dbms.php">Introduction</a>
    <a href="database.php">Database models</a>
<a href="Er.php">Introduction to ER Model</a>
</div>
                                                 <div class="vertical-menu">
  <a href="#" class="active"> Entity and Relationship</a>
   <a href="Entity.php">Entity</a>                                                  
  <a href="relationship%201to1.php">Relationships 1:1</a>
    <a href="relationship%201tomany.php">Relationships 1:Many</a>
  <a href="relationship%20mton.php">Relationships m:n</a>
         <a href="recursive%20relation.php">Recursive Relationships</a>                                              
</div>
                            <div class="video" id="variables">
                            <video width="700" height="350" controls >
    <source src="videos/Relationships%20M_N%20.mp4" type="video/mp4">
    </video>
                            </div>
                           
                                          </div>
               
                </div>
                    </div>
                </div>
                <?php include('footer.php'); ?>
            </div>

        </div>
    </div>
</body>
</html>