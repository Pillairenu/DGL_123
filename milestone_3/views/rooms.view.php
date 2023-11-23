<?php require('partials/head.php');?>


<?php require('partials/nav.php');?>

<?php require('model/room.model.php'); ?>


<?php $roomModel = new RoomModel($pdo);

// Use the RoomModel to retrieve room details
$rooms = $roomModel->getRoomDetails(); ?>

  <main>
   
    <div class="main-container">
      <div class="rooms-container">
        <h1> Discover Your Ideal Room</h1>
            <article class="article-container">
                <div class="image">
                    <img src="images/room-1.jpeg" alt="Image">
                </div>
                <div class="content">
                    <h2>Room available in 15th Street, Courtenay</h2>
                    <p>A new room available on 15th Street in the vibrant town of Courtenay.
                         Nestled in a peaceful neighborhood, this charming room offers the perfect
                          blend of comfort and convenience for those seeking an ideal place to call home.</p>
                    <a href="/DGL_123/milestone_3/room-details" class="details-button">View Details</a>
                </div>
            </article>
            <article class="article-container">
                <div class="image">
                    <img src="images/room-2.jpg" alt="Image">
                </div>
                <div class="content">
                    <h2>Room available in Comox Avenue</h2>
                    <p>A new room on scenic Comox Avenue, a charming location that perfectly blends tranquility with easy access to the heart of Comox. 
                        This inviting room offers a unique opportunity to reside in one of the most sought-after areas on Vancouver Island.</p>
                    <a href="/DGL_123/milestone_3/room-details" class="details-button">View Details</a>
                </div>
            </article>
            <article class="article-container">
                <div class="image">
                    <img src="images/room-3.jpg" alt="Image">
                </div>
                <div class="content">
                    <h2>Room available in Port Augusta Street</h2>
                    <p>Welcome to your new home on Port Augusta Street, a hidden gem in Courtenay.
                         This cozy room offers the perfect blend of comfort, convenience, and affordability 
                         for those looking for a peaceful place to call home.</p>
                    <a href="/DGL_123/milestone_3/room-details" class="details-button">View Details</a>
                </div>
            </article>

            <?php foreach ($rooms as $room) { ?>
                <article class="article-container">
                    <div class="image">
                    <img src="images/<?php echo $room['image']; ?>" alt="Image">
                    </div>
                    <div class="content">
                        <h2><?php echo "Room available in ". $room['street']; ?></h2>
                        <p><?php echo "A new room available on " . $room['street'] . " in the vibrant town of Comox. " . $room['features']; ?></p>
                        <a href="/DGL_123/milestone_3/room-details?room_id=<?php echo $room['id']; ?>" class="details-button">View Details</a>
                    </div>
                </article>
            <?php } ?>
            
          
    </div>
    </div>

  </main>
  
  <?php require('partials/footer.php');?>