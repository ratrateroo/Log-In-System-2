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

<div class="row">
      
      <div class="col s8 offset-s2"></div>
</div>
<h1>Sign Up</h1>
<div class="row">
    <form class="col s6 offset-s3">
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

        <button class="btn waves-effect waves-light" type="submit" name="signup-submit">Submit
            <i class="material-icons right">send</i>
        </button>

      </div>  
      
    </form>
  </div>
<?php 
    include_once 'footer.php';
?>