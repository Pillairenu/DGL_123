<?php require('partials/head.php');?>


<?php require('partials/nav.php');?>

  <main>
  
    <div class="main-container">
    <div class="container">
        <form class="signin-form" action="/DGL_123/milestone_3/model/signin.model.php" method="post">
            <h2>Sign In</h2>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Sign In</button>
            <p>Don't have an account? <a href="/DGL_123/milestone_3/signup">Sign Up</a></p>
        </form>
    </div>
    </div>

  </main>
  
  <?php require('partials/footer.php');?>