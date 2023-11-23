  <!-- navigation -->
  <section class="navWrap-main">
    
    <img src="images/logo_2.png" alt="logo" class="logo">
    <nav class="main-nav">
      <ul>
        <li><a href="/DGL_123/milestone_3/">Home</a></li>
        <li class="dropdown">
          <a href="#" class="drpbtn">Services <i class="fa fa-caret-down"></i></a>
            <div class="drpmenu">
              <a href="/DGL_123/milestone_3/rooms">Room</a>
              <a href="/DGL_123/milestone_3/house">House</a>
              <a href="/DGL_123/milestone_3/apartment">Apartment</a>
            </div>
          

            <?php
      // Check if the user is logged in
      if (isset($_SESSION['user_id']))
       {
        // User is logged in, so check user_type to determine the menu
        if ($_SESSION['user_type'] === 'customer') 
        {
          echo '<li><a href="/DGL_123/milestone_3/favorite">Favorites</a></li>';
          echo '<li><a href="/DGL_123/milestone_3/bookings">My Bookings</a></li>';
        } 
        
        elseif ($_SESSION['user_type'] === 'agent')
        {
          echo '<li><a href="/DGL_123/milestone_3/property">Add new property</a></li>';
        }
        echo '<li><a href="/DGL_123/milestone_3/logout">Logout</a></li>';
      }
      
      else
      {
        // User is not logged in
        echo '<li><a href="/DGL_123/milestone_3/signin">Login</a></li>';
      }
      ?>
       
      </ul>
    </nav>
  </section>