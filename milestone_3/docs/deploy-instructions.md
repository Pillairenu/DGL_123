# Deployment Instructions

## AWS Setup
- Created a domain in AWS: dgl123.rpillai.imgd.ca
- Created a folder structure in AWS:
- Created a DGL 123 folder and subfolders within it for Milestones 3

## Code Adjustments
-  Adjusted the router code in PHP application:
  ```php
  // Updated routes for Milestone 3 controllers
  $routes = [
      '/DGL_123/milestone_3/' => 'controllers/index.php',
      '/DGL_123/milestone_3/signin' => 'controllers/signin.php',
      '/DGL_123/milestone_3/signup' => 'controllers/signup.php',
      // ... (other routes adjusted for Milestone 3)
  ];

 ```

- Adjusted navigation links

 ```html
 <li><a href="/DGL_123/milestone_3/">Home</a></li>
<li class="dropdown">
    <a href="#" class="drpbtn">Services <i class="fa fa-caret-down"></i></a>
    <div class="drpmenu">
        <a href="/DGL_123/milestone_3/rooms">Room</a>
        <a href="/DGL_123/milestone_3/house">House</a>
        <a href="/DGL_123/milestone_3/apartment">Apartment</a>
    </div>
</li>
// ... (other links adjusted for Milestone 3)

```

- Database Setup

    - Created a database in AWS: n0202333_realtydbm3.

    - Created a user and password for the database.

- Data Transfer

    - Imported the SQL file from local to AWS database.
    - Established connection with the new database in AWS.