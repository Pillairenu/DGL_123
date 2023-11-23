<?php require('partials/head.php');?>


<?php require('partials/nav.php');

require('model/view_bookings.model.php'); // Include the model

// Create a new instance of the ViewBookingsModel
$viewBookingsModel = new ViewBookingsModel($pdo);

// Get booking data
$bookingData = $viewBookingsModel->getBookingData();


?>

  <main>
   
    

    <div class="main-container">
        <div class="table-container">
            <h1>View Bookings</h1>
            <table>
                <thead>
                    <tr>
                        <th>Unit Number</th>
                        <th>Street</th>
                        <th>Property Type</th>
                        <th>Listing Type</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($bookingData as $booking) : ?>
                        <tr>
                            <td><?php echo $booking['unit_number']; ?></td>
                            <td><?php echo $booking['street']; ?></td>
                            <td><?php echo $booking['property_type']; ?></td>
                            <td><?php echo $booking['listing_type']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

  </main>
  
  <?php require('partials/footer.php');?>