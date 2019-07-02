<?php 
    include_once 'header.php';
?>


<main>
<h1>Sign In</h1>
<div class="row">

    <?php 
    
    if (isset($_SESSION['userId'])){
        echo '<h3>You are logged in:'. $_SESSION['userUid'] .'</h3>';
        echo '<form class="col s6 offset-s3" action="includes/logout.inc.php" method="post">
        <div class="row">
  
          <button class="btn waves-effect waves-light" type="submit" name="logout-submit">Sign Out
              <i class="material-icons right">exit_to_app</i>
          </button>
  
        </div>  
        
      </form>';
    }
    else {
        echo '<form class="col s6 offset-s3" action="includes/login.inc.php" method="post">
        <div class="row">
  
          <div class="input-field col s12">
            <input placeholder="Username/E-mail..." type="text" class="validate" name="mailuid">
            <label for="first_name">Username</label>
          </div>
  
          <div class="input-field col s12">
            <input placeholder="Password" type="password" class="validate" name="pwd">
            <label for="password">Password</label>
          </div>       
  
          <button class="btn waves-effect waves-light" type="submit" name="login-submit">Sign In
              <i class="material-icons right">send</i>
          </button>

          <a class="btn waves-effect waves-light" href="signup.php">Sign Up
              <i class="material-icons right">send</i>
          </a>
  
        </div>  
        
      </form>';
    }
    
    ?>

    

    
  </div>


</main>

<?php 
    include_once 'footer.php';
?>