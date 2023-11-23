<?php require('partials/head.php');?>


<?php require('partials/nav.php');?>

  <main>
  
    <div class="main-container">
    <div class="container">
    <div class="form-container">
        <h1>Add New Property</h1>
        <form action="/DGL_123/milestone_3/model/add_property.model.php" method="POST" enctype="multipart/form-data" >
            <div class="form-group">
                <label for="unit-number">Unit Number:</label>
                <input type="text" id="unit-number" name="unit-number" required>
            </div>
            <div class="form-group">
                <label for="street">Street:</label>
                <input type="text" id="street" name="street" required>
            </div>
            <div class="form-group">
                <label for="property-type">Property Type:</label>
                <select id="property-type" name="property-type" required>
                    <option value="room">Room</option>
                    <option value="apartment">Apartment</option>
                    <option value="house">House</option>
                </select>
            </div>
            <div class="form-group">
                <label for="listing-type">Listing Type:</label>
                <select id="listing-type" name="listing-type" required>
                    <option value="sell">Sell</option>
                    <option value="rent">Rent</option>
                    <option value="lease">Lease</option>
                </select>
            </div>
            <div class="form-group">
                <label for="features">Add Feature:</label>
                <input type="text" id="features" name="features">
            </div>
            <div class="form-group">
                <label for="additional-info">Add Additional Information:</label>
                <textarea id="additional-info" name="additional-info" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Upload Image:</label>
                <input type="file" id="image" name="image" accept="image/*">
            </div>
            
                    <button type="submit" class="details-button">Submit</button>
            
        </form>
    </div>
</div>
    </div>

  </main>
  
  <?php require('partials/footer.php');?>