<?php require('partials/head.php');?>


<?php require('partials/nav.php');?>

<?php require('model/room-details.model.php'); ?>

<?php 
// Create a new instance of the RoomDetailsModel
$roomDetailsModel = new RoomDetailsModel($pdo);

// Get the room ID from the URL query parameter
 $room_id = isset($_GET['room_id']) ? $_GET['room_id'] : null;
?>

  <main>
   
    
    <div class="main-container">
      <div class="rooms-container">
        

        <?php
            if ($room_id) {
                $room = $roomDetailsModel->getRoomDetailsById($room_id);
 
                
                ?>
           
           <h1>Room available in <?php echo $room['street']; ?>, Comox Valley</h1>
           <article class="article-container">
               
               <div class="content">
                   <h2>Address:</h2>
                   <ul>
                       <li>Unit No:<?php echo $room['unit_number'];?></li>
                       <li>Street:<?php echo $room['street'];?></li>
                       <li>City:Courtenay BC</li>
                       

                   </ul>
           
                   <h2>Key Features:</h2>
                    <ul>
                        <li><?php echo $room['features'];?></li>
                        

                    </ul>
           
                    <h2>Additional Information:</h2>
                    <ul>
                   
                        <li><?php echo $room['additional_info'];?></li>
                        

                    </ul>
                  
                    <h2>Contact Details:</h2>
                    <ul>
                        <li>Agent name:Lee Copper</li>
                        <li>Contact no:250-788-9999</li>
                        
                    </ul>
                    
                    
                </div>
                <div class="image">
                <img src="images/<?php echo $room['image']; ?>" alt="Image">

                <?php
                     if (isset($_SESSION['user_id']))
                     {
                      // User is logged in, so check user_type to determine the menu
                      if ($_SESSION['user_type'] === 'customer') 
                      {

                        echo '<a href="model/add_favorite.model.php?room_id=' . $room['id'] . '" class="favorite-button">Add to Favorite</a>';
                    }
                    }
                    ?>
                </div>

                
            </article>





           
        <?php }
        
           
            else{
                
        ?>

            <h1>Room available in Comox Valley</h1>
            <article class="article-container">
               
                <div class="content">
                    <h2>Address:</h2>
                    <ul>
                        <li>Unit No:1795</li>
                        <li>Street:15th Street</li>
                        <li>City:Courtenay BC</li>
                        

                    </ul>
                    
                    <h2>Key Features:</h2>
                    <ul>
                        <li>Situated in a prime location, you'll have easy access to Courtenay's downtown shops, 
                            restaurants, and amenities, as well as the scenic beauty of Vancouver Island.</li>
                        <li>Your room is thoughtfully designed for your comfort, featuring ample space, 
                            natural light, and all the essentials for a relaxed and pleasant stay.</li>
                        <li>As a resident on 15th Street, you'll have access to well-maintained shared spaces 
                            that include a modern kitchen, cozy living area, and a lovely backyard</li>
                        

                    </ul>
                    
                    <h2>Additional Information:</h2>
                    <ul>
                        <li>Rent:$750</li>
                        <li>Availability:July 18th,2023</li>
                        <li>Utilities:$50</li>
                        <li>Parking:0</li>
                        

                    </ul>
                  
                    <h2>Contact Details:</h2>
                    <ul>
                        <li>Agent name:Lee Copper</li>
                        <li>Contact no:250-788-9999</li>
                        
                    </ul>
                    
                    
                </div>
                <div class="image">
                    <img src="images/room-1.jpeg" alt="Image">
                    <a href="/DGL_123/milestone_3/favorite" class="favorite-button">Add to Favorite</a>
                </div>

                
            </article>

           <?php } ?>
    </div>
    </div>

  </main>
  
  <?php require('partials/footer.php');?>