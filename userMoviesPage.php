<?php
session_start();
?>
<!DOCTYPE html>
<?php include 'CMS\db.php';
$sql = "select * from filmsTable";
$rows = $db->query($sql);
?>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="Style/userMoviesPage.css">
    <script type="text/javascript" src="userMoviesPage.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Monoton|Quicksand|Martel+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Movies Page</title>
  </head>
  <body>
    <button onclick="topFunction()" id="goUpButton" class="goUpButton" title="Go to top">Go up  &#8743;</button>
    <div class="panel-heading header">
      <h3 class="panel-title pull-left" style="  font-family: 'Monoton', cursive;font-size:80px;color:#fff;">
      Movies
      </h3>
      <form class="pull-right" action="CMS\login.php" onsubmit="changeSession()">
        <i class="material-icons">person</i>
        <?php $_SESSION['signedEmail']; ?> &#8739;
        <input type="submit"  value="Logout" class="logoutButton"></input>
      </form>
      <div class="clearfix"></div>
    </div><br>
    <div class="container">
      <div class="row" >
        <?php
        while($row = $rows->fetch_assoc()){
        echo "<div class='col-sm-4'>";
          echo "<div class='panel panel-primary' id='primaryPanel'>";
            echo "<div class='panel-heading' id='headingPanel'><center>".$row['name']."</center></div>";
            echo "<div class='panel-body'><img src='CMS/movies-images/".$row['img']."' class='img-responsive' alt='Image' style='  width:100%;height: 500px;'></div>";
            echo "<div class='panel-footer' id='footerPanel'>";
              echo "<center><a href='CMS\show.php?id=".$row['id']."' class='btn viewButtons'>view details</a></center>";
            echo "</div></div>";
            }
            ?>
          </div>
        </div>
      </body>
    </html>
    <?php
    $db->close();
    ?>