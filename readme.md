# Max Nordström - Work Sample for 040

I've built this form using a html5 boilerplate and bootstrap.

This is a form allowing participants to sign up for a course of given choice. The user input will be saved to a database (called **040worksample_db** found in the **database** folder for import). The different courses (found in the **endpoints** folder) are structured as different tables in the database, named 'course' followed by the number that represents the course ID. The user input of each participant signing up for a course will be added to the corresponding table.

##Local environment

Set up the form locally using MAMP (or stack of your choice) and put the project folder in your root directory (in my case it's **/htdocs**). Checkout the **.env** file so that it corresponds to your local environment. Import the starter database and you're up and running!