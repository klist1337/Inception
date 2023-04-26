FROM debian:buster

RUN apt-get update -y && \
apt-get install -y php \
php-mysql \
wget 

COPY tools/script.sh /usr/bin

RUN chmod +x /usr/bin/script.sh
WORKDIR /var/www/html
RUN touch adminer.php

CMD [ "/usr/bin/script.sh" ]