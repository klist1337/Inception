#!/bin/sh

service mysql start
echo "CREATE DATABASE IF NOT EXISTS $db_name;" > init.sql
echo "CREATE USER IF NOT EXISTS '$db_user'@'%' IDENTIFIED BY '$db_passwd';" >> init.sql
echo "GRANT ALL PRIVILEGES ON $db_name.* TO '$db_user'@'%';" >> init.sql
echo "ALTER USER 'root'@'localhost' IDENTIFIED BY '12345';"
echo "FLUSH PRIVILEGES;" >> init.sql
mysql < init.sql

kill $(cat /var/run/mysqld/mysqld.pid)

mysqld --user=mysql