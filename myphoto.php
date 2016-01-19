<?php 
    require 'confs/auth.php';   
    session_start();
    $user=$_REQUEST['username'];
    
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SEA Dream Company</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/fav.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
    <style type="text/css">
        #like{
            padding-left: 5px;
            font-size: 12px;
        }
        nav , body {
            z-index: 0;
        }


    </style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="gallery.php">SEA Dream Gallery</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               

                    <ul class="nav navbar-nav navbar-right">
                            <li class=""><a href="#" id="upload_ft" onclick="showDialog()"><i class="glyphicon glyphicon-cloud-upload"></i> Upload Photo </a></li>
                            <li class=""><a href="myphoto.php?username=<?php echo $_SESSION['user'] ?>"><i class="glyphicon glyphicon-picture"></i> My Photo (s) </a></li>
                            <li ><a href="#"><i class="glyphicon glyphicon-user fa fa-btn fa-heart"></i><?php echo " ".$_SESSION['user']; ?></a></li>
                            <li class=""><a href="logout.php"><i class="glyphicon glyphicon-log-out fa fa-btn fa-sign-in"></i> Logout </a></li>
                            
                    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">SEA Dream Company Gallery</h1>
            </div>
         <!-- Upload From -->
              <div id="overlay" onClick="hideDialog()"></div>
                  <div id="dialog">
                    <h2>
                      Upload Photo
                      <span onClick="hideDialog()">&times;</span>
                    </h2>
                    <form action="fileupload.php" method="post" enctype="multipart/form-data">
                        <fieldset>
                          <label>Choose an image to upload</label>
                          <input type="file" name="image" id="imgInp" onchange="loadFile(event);">
                          <h3>Your Image Will Be Shown Below</h3>

                          <img class="preview" id="preview">
                        </fieldset>
                        <fieldset>
                          <input type="submit" name="submit" class="btn btn-primary" value="Upload">
                          <input type="reset" name="reset" class="btn btn-danger" id="clear" value="Clear">
                        </fieldset>
                    </form>
                  </div>
        <!-- End Upload From -->
        <!-- View Slide Show -->

        <!-- View Slide Show -->
        <!-- Get Data From DB and Show -->
        <div class="row"> 
        <?php 
                include 'paginate/class.paging.php';       
                     
                    $query = "SELECT * FROM phototb WHERE uploaded_by='$user' ORDER BY uploaded_date DESC";       
                    $records_per_page=12;
                    $newquery = $paginate->paging($query,$records_per_page);
                    $paginate->dataview($newquery); 
                    mysql_close();  
                
         ?>
        </div>
        </div>

        <!-- Paginate -->
        <div class="row paginate">
            <ul class="pagination">
  
            <?php
                $paginate->paginglink($query,$records_per_page);
                mysql_close();
            ?>
           
          </ul>
        </div>  
        <hr>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Team QA</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
 

</body>

</html>
