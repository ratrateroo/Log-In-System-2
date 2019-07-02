<?php 
    include_once 'header.php';
?>

<!-- <main>
    <div>
        <section>
            <h1>Sign Up</h1>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="email" name="mail" placeholder="E-mail">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwd-repeat" placeholder="Repeat password">
                <button type="submit" name="signup-submit">Sign Up</button>
            </form>
        </section>
    </div>
</main> -->
<!-- <div>
    <form >
        <input type="text" name="mailuid" placeholder="Username/E-mail...">
        <input type="password" name="pwd" placeholder="Password">
        <button type="submit" name="login-submit">Login</button>
    </form>
    <a href="signup.php">Sign up</a>
    <form action="includes/logout.inc.php" method="post">
        <button type="submit" name="logout-submit">Logout</button>
    </form>
</div> -->
<main>
<h1>Sign In</h1>
<div class="row">
    <form class="col s6 offset-s3" action="includes/login.inc.php" method="post">
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

      </div>  
      
    </form>

    <form class="col s6 offset-s3" action="includes/logout.inc.php" method="post">
      <div class="row">

        <button class="btn waves-effect waves-light" type="submit" name="logout-submit">Sign Out
            <i class="material-icons right">exit_to_app</i>
        </button>

      </div>  
      
    </form>
  </div>


</main>

<?php 
    include_once 'footer.php';
?>