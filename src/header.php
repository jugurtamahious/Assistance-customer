<?php

 function head(){ 
  echo '
  <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
      <img src="logo.png" width="112" height="50">
    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
   
  <div name="navbarBasicExample" class="navbar-menu">

      
      <div class="navbar-item has-dropdown is-hoverable">
  

        <div class="navbar-dropdown">
      
          <hr class="navbar-divider">
         
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
        <a href="post.php" class="button is-primary" name="accuiel">
        Accueil
        </a>  
          <a href="login.php" class="button is-primary">
            <strong>déconnexion</strong>
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
';
};

?>

