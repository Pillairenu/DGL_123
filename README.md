# PHP SEMESTER PROJECT

## PROJECT CONCEPT
“Comox Valley Realty Navigator” is a comprehensive online platform designed to serve as the ultimate guide for property seekers and property management professionals in the Comox Valley region of British Columbia, Canada. This innovative system empowers users to effortlessly navigate the local real estate landscape, whether they are looking to find their dream home, rent a commercial space, or manage property listings with ease.
This comprehensive real estate solution allows users to explore a wide range of property listings, including apartments, independent houses, shops, plots, and commercial land, both for rent and purchase. They can view the listings, save their favorite listings for later reference, and even book viewings.
Property management professionals can easily manage their property listings through intuitive tools that enable them to add, edit, and delete listings, ensuring that their offerings are always up-to-date and reflective of the dynamic Comox Valley real estate market. Whether you are a property seeker or a property manager, Comox Valley Realty Navigator is your go-to platform for a seamless and efficient real estate experience.

## Data model concept


The processing required for the real estate property management system involves various tasks related to user interactions, data management, and system functionality.
Here's an overview of the processing required for the key tasks in this project:

1. User Account Creation (User):
 - Processing involves collecting user-provided information during registration, such as name, email, and password.
 - Validation and verification of user data to ensure it meets security and integrity standards.
 - Storing user account information securely in the database.

2. Add to Favorites & Book Viewing (User):

- Processing involves capturing user requests to add specific property listings to their favorites.

- Associating the selected property with the user's account to create a record of favorites.

- Updating the user's favorites list in the database.
- Users initiate the booking process by clicking on a "Book Viewing" button associated with the property.
- A new booking record is created, associating it with the user's account and the specific property listing.

3.Add Listing (Admin):

- Processing includes capturing property details provided by admins, such as address, images, and property type.
- Data validation to ensure accuracy and completeness of property information.

- Securely storing the newly added property listing in the database.


4.View All Listed Items (Admin):

- Processing encompasses retrieving and displaying a comprehensive list of all property listings.

- Querying the database to fetch and organize property listing data.

- Presenting the property listings in an accessible format for admin review.
5. Edit Listing (Admin):

- Processing involves modifying and updating property listing details.

- Validating the edited information for accuracy and adherence to data standards.

- Updating the corresponding property listing in the database with the edited details.

6. Delete Listing (Admin):

- Processing includes managing admin requests to delete property listings.

- Identifying and confirming the property to be deleted.

- Removing the property listing from the database to maintain data integrity.
7. View User Bookings (Admin):

- Processing encompasses retrieving and presenting user booking data for property viewings.

- Querying the database to obtain booking information linked to specific properties.

# Project Plan

### Overview
In response to recent chapters (11-13) and valuable feedback, I'm planning to implementing several enhancements to my project. The primary focus is on improving SQL functionality, refining user experience, and fortifying database health. Below is a plan outlining the key areas of improvement.

### Database Enhancement Plan

#### Objective:

Ensure data integrity and improve database functionality by preventing duplicate values and adding a cascade on the database.

#### Features:

1. Cascade Implementation
    - Action: Add a cascade on the database.
    - Reasoning: Ensures data integrity and enhances the long-term health of the database by automating certain operations.

2. Duplicate Values Prevention

    a. Identify Unique Constraints

    Action: Identify fields or columns in the database where duplicate values are not allowed.

    b. Implement Unique Constraints

    Action: Alter the table structure to include unique constraints on identified fields.

    c. Handle Duplicate Inserts:

    Action: Implement logic in application code to handle duplicate insert attempts gracefully.

    Consideration: Use database transactions to ensure atomicity.

3. Cascade Enhancement

    a. Identify Relationships

    Action: Identify foreign key relationships between tables where a cascade is needed.

    b. Alter Foreign Key Constraints

    Action: Alter foreign key constraints to include the ON DELETE CASCADE option.

#### References from the book:

- Preventing Duplicate Values in Columns, Uniqueness Constraint (Page 430 & Page 492)


#### Schedule
Week: 4th Week of Nov

Complete Database Enhancement Plan (Feature 1 to 3).


###  User Experience Enhancement

1. Menu Terminology Update

    Action: Rename the "services" menu to "listings."

    Reasoning: Aligning menu terminology with user expectations improves navigation and overall user experience.

2. Listing Order Adjustment

    Action: Change the default list order so that new listings appear at the top.

    Reasoning: Enhances user convenience by prioritizing the latest listings for quick access.

3. Image Handling

    Action: Implement a condition to gracefully handle properties without images.

    Reasoning: Improves user experience by providing a clear message when no image is available.

4. Filtering Options

    Action: Introduce filtering options for users.

    Reasoning: Enhances user control and satisfaction by allowing them to customize their experience based on preferences.

5. Responsiveness

    Action: Implement responsive design principles for better user experience across various devices.

    Reasoning: Ensures that the application is accessible and functional on a wide range of devices, improving overall user satisfaction.

#### References from the book:

- Creating a Search Feature (Page 472 in the text)

#### Schedule
Week: 3rd Week of Nov

Complete User Experience Enhancement (Feature 1 to 3).

Week: 5th Week of Nov

Complete User Experience Enhancement (Feature 4 & 5).


### Website screenshot on AWS

![Screenshot 1](/milestone_3/images/AWS_Screenshot_1.png)

![Screenshot 2](/milestone_3/images/AWS_Screenshot_2.png)

![Screenshot 3](/milestone_3/images/AWS_Screenshot_3.png)


## Link to repository

[Link to repository](https://github.com/Pillairenu/DGL_123/tree/deploym3)

## Link to your Milestone 3 deployed installation

[Link to website on AWS](https://dgl123.rpillai.imgd.ca/DGL_123/milestone_3/)


### Rubric
![rubric](/milestone_3/images/Rubric_assignment8_deployment.png)

## Self-assessed score

7.2/8