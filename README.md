# MySQL-Auto-Backup

This program automatically creates MySQL database backups.

## Setup

1. Edit `config.php` to add your database configuration:

    ```php
    $host = "localhost";
    $user = "database_user";
    $password = "database_password";
    $database = "database_name";
    ```

2. Edit `nmail.php` to add your email details:

    ```php
    $sender_email = "from@website.com";
    $recipient_email = "email@website.com";
    ```

3. Visit the URL where you placed `index.php`, like:

    [https://yourwebsite.com/MySQL-Auto-Backup/index.php](https://yourwebsite.com/MySQL-Auto-Backup/index.php)

## Usage

You can use Cron Jobs to automate backups:

```cron
0 * * * * wget https://yourwebsite.com/MySQL-Auto-Backup/index.php
0 * * * * wget https://yourwebsite.com/MySQL-Auto-Backup/nmail.php
