# s1-06-php-avancat
Level 1 - Exercise 1

Create an HTML form with the fields you want (at least a name or username). The form must have a PHP document as its action. The code in this PHP document will have to display the values of the different fields in the form using superglobal variables. Save some of these values in session variables.

/exercise
    ├── scr/                        # Source code 
    │     ├── css/
    │     │      └── style.css      # CSS styles file 
    │     │  
    |     ├── includes/ 
    |     │       ├── process.php   # Superglobal variables that collect data from index.html, store it in variables, 
    |     |       |                   and then redirect the data output to data.php 
    |     |       └── stored.php    # Redirect to dataStored.php 
    |     |
    |     ├── index.html            # HTML file with main script (form) 
    |     ├── data.php              # Displays the data entered in the index.html form 
    |     └──dataStored.php         # Displays the data stored in the session variables 
    |
    └── README.md                   # Exercise documentation 




