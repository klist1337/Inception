#!/bin/bash
#create directory to use in nginx container


cd /var/www/html

#remove all wordpress files if there is something from the volumes to install it again

rm -rf *

#installing  and using wp-cli tools

curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

#change the permission for execute file

chmod +x wp-cli.phar

#move wp-cli.phar to /usr/local/bin
mv wp-cli.phar /usr/local/bin/wp

#Download the latest version of word press in current directory
wp core download --allow-root

#rename the file wp-config-sample to wp-config

mv /var/www/html/wp-config-sample.php /var/www/html/wp-config.php
mv  /wp-config.php /var/www/html/wp-config.php
sed -i -r "s/database_name_here/$db_name/1" wp-config.php
sed -i -r "s/username_here/$db_user/1" wp-config.php
sed -i -r "s/password_here/$db_passwd/1" wp-config.php
sed -i -r "s/localhost/mariadb/1" wp-config.php

wp core install --url=$WP_URL --title=$WP_TITLE --admin_user=$WP_ADMIN_USER --admin_password=$WP_ADMIN_PASSWD --admin_email=$WP_ADMIN_EMAIL

#Create a new user account

wp user create $WP_USER $WP_USER_EMAIL --role=author --user_pass=$WP_USER_PASSWD --allow-root

#install astra theme
wp theme install astra --activate --allow-root
wp plugin install redis-cache --activate --allow-root
#replace line in file fot listening in port 9000 
sed -i 's/listen = \/run\/php\/php7.3-fpm.sock/listen = 9000/g' /etc/php/7.3/fpm/pool.d/www.conf

#create the /run/php

mkdir /run/php
chown www-data:www-data /var/www/html
chmod 777 -R /var/www/html
chmod 777 -R /var/www/html/wp-content/*

#start the php-fpm service in foreground
/usr/sbin/php-fpm7.3 -F