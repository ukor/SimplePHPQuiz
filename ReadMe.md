## Language Used
PHP
Twitter bootstrap
## Database
MySQL

## What it does
A simple quiz system that allows you to upload questions to the database.
Then display the questions with options (answers). The options (answers) are shuffle before displaying them to the user
 
## How to install

Download the zip file. Extract the files to your root directory, 
*  **For wamp, root directory is `www`,
*  **For xamp, root directory is `htdocs`
Create a database using myPHPadmin(you can use any name of your choice).
 Run this SQL query
```sql
  CREATE TABLE questions (
    questionid BIDINT(15) NOT NULL UNIQUE AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    answer VARCHAR(255) NOT NULL,
    chioce1 VARCHAR(255) NOT NULL,
    choice2 VARCHAR(255) NOT NULL,
    choice3 VARCHAR(2550 NOT NULL,
        PRIMARY KEY(name)
  );
```
  From the file you extracted open the folder `include`, than open the file db_conn.php using any text editor of your choice.
  Change the database connection credentials to your own.
```php
  /**  Set the database access information as constants
       @params DB_PASSWORD to be left blank if password is not set
       @params DB_NAME CHANGE quizdb to the name of the database you created above
       @params DB_USER your username (usually root for localhost)
       @params DB_HOST usually localhost
  */
  
    DEFINE ('DB_USER', 'root');
    DEFINE ('DB_PASSWORD', ' '); 
    DEFINE ('DB_HOST', 'localhost');
    DEFINE ('DB_NAME', 'quizdb'); 

    @ $dbc = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); //Connection to the database

//check if there was an error during database connection

    if (mysqli_connect_error())
    {
	    echo "Could not connect to MySql. Please try again";
	    exit();
    }
```
                        OR
           open the `database` folder and IMPORT the sql file name quizdb.sql using the myPHPadmin.
               
* **Run the index.php**
* **Click on add questions than fill out the forms to add some questions to the database**
* **Click on Home and you will see all your questions with options(answer for the user to click)**

## Modification - Admin Branch
FEEL FREE!!! Go ahead and modify this script to meet your need

* **You can create an admin panel that only an admin can add questions to the database**

## Credit
Thanks to [Val Okafor] for providing this awesome template.
