FROM debian:buster

RUN apt-get update -y && \
apt-get upgrade -y && apt-get install php-fpm php-mysql curl -y

COPY tools/script.sh /usr/bin
COPY conf/wp-config.php .
RUN chmod +x /usr/bin/script.sh 

CMD [ "usr/bin/script.sh" ]