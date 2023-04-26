FROM debian:buster

RUN apt-get update && apt-get install nginx -y && \
apt-get install openssl -y

COPY /tools/script.sh /usr/bin
#COPY /tools/index.html /var/www/html
COPY /conf/nginx.conf /etc/nginx/sites-available/default

RUN chmod +x /usr/bin/script.sh && \
/usr/bin/script.sh && \
rm -rf /usr/bin/script.sh
EXPOSE 443 
CMD ["nginx", "-g", "daemon off;"]
