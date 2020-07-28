<?php
include("connection.php");
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#" id="game">rateit</a>
  <title>rateit</title>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>


      <?php
        if(!empty($_SESSION['admin'])){
         ?> 
      <li class="nav-item">
        <a class="nav-link" href="admin.php">Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminMovies.php">Movies</a>
      </li>
      <?php 
        }
      ?>

      


      <?php
        if(!empty($_SESSION['user'])){
         ?> 
      <li class="nav-item">
        <a class="nav-link" href="user.php">Movies</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="userMovies.php"><?php echo ucfirst($_SESSION['username'])?></a>
      </li>
      <?php 
        }
      ?>
      


      
      <?php
        if(!empty($_SESSION['admin']) OR !empty($_SESSION['user']) ){
      ?> 
      <li class="nav-item">
        <a class="nav-link" href="stats.php">Stats</a>
      </li>
      <?php 
        }
      ?>

      

      <?php
        if(!empty($_SESSION['admin']) OR !empty($_SESSION['user']) ){
         ?> 
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Log out</a>
      </li>
      <?php 
        }
      ?>

      <?php
        if(empty($_SESSION['admin']) AND empty($_SESSION['user']) ){
         ?> 
        <li class="nav-item">
        <li class="nav-item">
        <a class="nav-link" href="singup.php">Sign up</a>
        </li>
        <a class="nav-link" href="singin.php">Sign in</a>
        </li>
        <?php 
        }
      ?>


    <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>

    </ul>
  </div>
</nav>

<script type="text/javascript">
    var myLink = document.getElementById('game');

    myLink.onclick = function(){

        var script = document.createElement("script");
        script.type = "text/javascript";
        script.src = "js/game.js."; 
        document.getElementsByTagName("head")[0].appendChild(script);
        return false;
    }
</script>
