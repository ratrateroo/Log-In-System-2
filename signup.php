<?php 
    include_once 'header.php';
  
?>

<main>
<h1>Sign Up</h1>




    
  

<div class="row">

    











<?php 
if (isset($_GET['error'])) {
  if ($_GET['error'] == "emptyfields") {
    echo '<div class="col s12 m6 offset-m3">
    <div class="card blue-grey darken-1">
      <div class="card-content white-text">
        <span class="card-title">Fill in all fields!</span>          
      </div>        
    </div>
</div>';
  }
  else if($_GET['error'] == "invalidemailuid") {
    echo '<div class="col s12 m6 offset-m3">
    <div class="card blue-grey darken-1">
      <div class="card-content white-text">
        <span class="card-title">Invalid Username and Email!</span>          
      </div>        
    </div>
</div>';
  }
  else if($_GET['error'] == "invaliduid") {
    echo '<div class="col s12 m6 offset-m3">
    <div class="card blue-grey darken-1">
      <div class="card-content white-text">
        <span class="card-title">Invalid Username!</span>          
      </div>        
    </div>
</div>';
  }
  else if($_GET['error'] == "invalidemail") {
    echo '<div class="col s12 m6 offset-m3">
    <div class="card blue-grey darken-1">
      <div class="card-content white-text">
        <span class="card-title">Invalid Email!</span>          
      </div>        
    </div>
</div>';
  }
  else if($_GET['error'] == "passwordcheck") {
    echo '<div class="col s12 m6 offset-m3">
    <div class="card blue-grey darken-1">
      <div class="card-content white-text">
        <span class="card-title">Your passwords do not match!</span>          
      </div>        
    </div>
</div>';
  }
  else if($_GET['error'] == "usertaken") {
    echo '    <div class="col s12 m6 offset-m3">
    <div class="card blue-grey darken-1">
      <div class="card-content white-text">
        <span class="card-title">Username'.$_GET['uid'].' is already taken!</span>          
      </div>        
    </div>
</div>';
  }
}
else if ($_GET['signup'] == "success") {
  echo '<div class="col s12 m6 offset-m3">
    <div class="card blue-grey darken-1">
      <div class="card-content white-text">
        <span class="card-title">Log In Successful!</span> 
        <span class="card-title">Welcome: '.$_GET['uid'].' !</span>          
      </div>        
    </div>
</div>';
}
?>
    <form class="col s6 offset-s3" action="includes/signup.inc.php" method="post">
      <div class="row">

        <div class="input-field col s12">
          <input placeholder="Username" id="first_name" type="text" class="validate" name="uid">
          <label for="first_name">Username</label>
        </div>

        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="mail">
          <label for="email">Email</label>
        </div>

        <div class="input-field col s6">
          <input id="password" type="password" class="validate" name="pwd">
          <label for="password">Password</label>
        </div>

        <div class="input-field col s6">
          <input id="password" type="password" class="validate" name="pwd-repeat">
          <label for="password">Repeat Password</label>
        </div>

        <button class="btn waves-effect waves-light" type="submit" name="signup-submit">Sign Up
            <i class="material-icons right">send</i>
        </button>

      </div>  
      
    </form>
  </div>
</main>
<?php 
    include_once 'footer.php';
?>