# building-linux
These programs and contents provides web application with SQL injection vulnerabilities for a LAMP enviroment.<br>

## Rreparatio
If you would like to use these programs, you need to prepare a Japanese LAMP enviroments before.
I test these programs below version LAMP enviroment.
 - CentOS 6.10
 - PHP 7.0.33
 - MySQL 5.5.62
 - Apache 2.2.15

## Usage:
1. Bulid a LAMP enviroment.
2. MySQL need "test_mysql" datadase and "testTable" table.
```SQL
CREATE TABLE `testTable` (
`uid` VARCHAR(20) NOT NULL COMMENT "ID",
`passwd` VARCHAR(20) NOT NULL COMMENT "password",
`email` VARCHAR(20) NOT NULL COMMENT "mail address"
);
```

3. MySQL need "test_mysql" datadase and "testTable" table. you can use "data_personalinfomation.csv" as a dummy infomations.
   This file contains dummy data, so it is not real infomation.
4. Setting test.php on the DocumentRoot, and access test.php to check connection MySQL via PHP.
5. Setting index.html and db.php on the DocumentRoot, and access index.html. If you try to SQL inject to db.php, you can see tha behavior of SQL injection.
