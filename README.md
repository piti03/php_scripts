# PHP SCRPTS DEALING WITH DATABASE
## connect_to_db.php
- make a database and try to connect with it . remember to **replace the name of db** with db_name in the file.
  
  
## insert_into_db.php
- This script takes two arguments from client side and insert into related table **make your proper table** and call it in the file. *logically your table should have relevant fields as table_record*.
 
## monitor_db.php
- This script takes two arguments from client to test the existency! **both similar arguments must existed**. If arguments be existed, returns the whole row as a json object, otherwise a warning dialogue.

## select_from_db.php
- This script returns all records of databes as a json array which is made up of from some json objects based on the number of rows in database.

## remind_password.php
- This script takes the username from client side and if username be correct!, send the password by an email to the user.
