<?php require('partials/head.php');?>


<?php require('partials/nav.php');?>
<?php
// Include the FavoriteModel class (adjust the path as needed)
require('model/favorite.model.php');

// Create an instance of the FavoriteModel class, passing the PDO connection
$favoriteModel = new FavoriteModel($pdo);

// Retrieve the user's session ID
$userId = $_SESSION['user_id'];

// Get the user's favorite properties using the model
$favorites = $favoriteModel->getFavoritesByUserId($userId);
?>

  <main>
   
    
    <div class="main-container">
      <div class="rooms-container favorite">
        <h1> Favorite List</h1>
        <div class="room-grid">
            
            <article class="favorite-container">
                <div class="details">
                    <p>Room available in Comox Avenue</p>
                </div>
                <div class="image">
                <img src="images/room-2.jpg" alt="Image">
                </div>
                <div class="content">
                    <a href="/DGL_123/milestone_3/bookings" class="details-button">Book Viewing</a>
                </div>
                <div class="content">
                    <a href="/DGL_123/milestone_3/room-details" class="details-button">Remove favorite</a>
                </div>
            </article>
            <article class="favorite-container">
                <div class="details">
                    <p>Room available in Port Augusta Street</p>
                </div>
                <div class="image">
                <img src="images/room-3.jpg" alt="Image">
                </div>
                <div class="content">
                    <a href="/DGL_123/milestone_3/bookings" class="details-button">Book Viewing</a>
                </div>
                <div class="content">
                    <a href="/DGL_123/milestone_3/room-details" class="details-button">Remove favorite</a>
                </div>
            </article>
            <article class="favorite-container">
                <div class="details">
                    <p>Room available in Port Augusta Street</p>
                </div>
                <div class="image">
                <img src="images/room-3.jpg" alt="Image">
                </div>
                <div class="content">
                    <a href="/DGL_123/milestone_3/bookings" class="details-button">Book Viewing</a>
                </div>
                <div class="content">
                    <a href="/DGL_123/milestone_3/room-details" class="details-button">Remove favorite</a>
                </div>
            </article>

            <article class="favorite-container">
                <div class="details">
                    <p>Room available in 15th Street, Courtenay</p>
                </div>
                <div class="image">
                    <img src="images/room-1.jpeg" alt="Image">
                </div>
                <div class="content">
                    <a href="/DGL_123/milestone_3/bookings" class="details-button">Book Viewing</a>
                </div>
                <div class="content">
                    <a href="/DGL_123/milestone_3/room-details" class="details-button">Remove favorite</a>
                </div>
            </article>

            <?php
            if ($userId) 
            {
            
                 foreach ($favorites as $favorite) { 
                ?>
                    <article class="favorite-container">
                        <div class="details">
                            <p>Room available in  <?php echo $favorite['street'];?>, Comox</p>
                        </div>
                        <div class="image">
                            
                            <img src="images/<?php echo $favorite['image']; ?>" alt="Image">
                        </div>
                        <div class="content">
                    <?php    echo '<a href="model/add_bookings.model.php?room_id=' . $favorite['id'] . '" class="details-button">Book Viewing</a>'; ?>
                        </div>
                        <div class="content">
                            <?php  echo '<a href="model/remove_favorite.model.php?room_id=' . $favorite['id'] . '" class="details-button">Remove favorite</a>'; ?>

                        </div>
                    </article>



                <?php
                }
            }
                ?>
           
            </div>
    </div>
    </div>

  </main>
  
  <?php require('partials/footer.php');?>