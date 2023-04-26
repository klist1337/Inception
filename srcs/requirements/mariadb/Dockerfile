FROM debian:buster

RUN apt-get update && apt-get install mariadb-server -y

COPY /conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

RUN  mkdir -p /run/mysqld && chown mysql:mysql /run/mysqld

COPY /tools/script.sh /usr/bin

RUN chmod +x /usr/bin/script.sh

VOLUME /var/lib/mysql
EXPOSE 3306
CMD ["/usr/bin/script.sh"]


