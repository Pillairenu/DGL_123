<?php require('partials/head.php');?>


<?php require('partials/nav.php');?>

  <main>
  
    <div class="main-container">
    <div class="container">
        <form class="signup-form" action="/DGL_123/milestone_3/model/signup.model.php" method="post">
            <h2>Sign Up</h2>
            <div id="error-message" class="error-message" style="display: none;"></div>
         
     
            <!-- Name Field -->
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
             
                <!-- User Type Selection -->
                <label for="user-type">User Type:</label>
                <select id="user-type" name="user-type" required>
                    <option value="customer" selected>Property Seeker</option>
                    <option value="agent">Real Estate Agent</option>
                </select>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
            <button type="submit">Sign Up</button>
            <p>Already have an account? <a href="/DGL_123/milestone_3/signin">Sign In</a></p>
        </form>
          <!-- Success message placed at the bottom of the form -->
      <!-- Custom success message popup -->
      <div id="success-popup" class="popup" style="display: none;">
        <div class="popup-content">
          <span class="close-popup" onclick="closeSuccessPopup()">&times;</span>
          <p id="success-message-text">This is a success message.</p>
        </div>
      </div>
    </div>
    </div>

  </main>
  
  <?php require('partials/footer.php');?>