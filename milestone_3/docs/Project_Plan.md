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