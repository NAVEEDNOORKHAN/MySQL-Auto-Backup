# MySQL-Auto-Backup
This program will create mysql database backup automatically

Edit config.php to add your config like following
$host = "localhost";
$user = "database_user";
$password = "database_password";
$database = "database_name";

Edit nmail.php to add your email in these fields
$sender_email = "from@website.com"; 
$recipient_email = "email@website.com";

Just visit url where you placed index.php like
https://yourwebsite.com/MySQL-Auto-Backup/index.php
You can use Cron Jobs
0	*	*	*	*	wget https://yourwebsite.com/MySQL-Auto-Backup/index.php
0	*	*	*	*	wget  https://yourwebsite.com/MySQL-Auto-Backup/nmail.php

Simplest way to make automated backups
Thanks
If you need help then contact me on whatsapp
[https://wa.me/923344933334](https://wa.me/923344933334)
