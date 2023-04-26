#! /bin/bash

service vsftpd start

adduser $ftp_user --disabled-password

echo "$ftp_user:$ftp_passwd" | /usr/sbin/chpasswd &> /dev/null

echo "$ftp_user" | tee -a /etc/vsftpd.userlist &> /dev/null

mkdir -p /var/www/html

# chown nobody:nogroup /var/www/html

# chmod a-w /home/$ftp_user/ftp

# mkdir /home/$ftp_user/ftp/files

chown $ftp_user:$ftp_user /var/www/html
chmod 754 /var/www/html

service vsftpd stop

/usr/sbin/vsftpd 