FROM debian:buster

RUN apt-get update -y && apt-get upgrade -y && \
apt-get install vsftpd -y

COPY /tools/script.sh /usr/bin

COPY /conf/vsftpd.conf /etc/vsftpd.conf

RUN chmod +x /usr/bin/script.sh

EXPOSE 20-21 30000-30009

CMD [ "/usr/bin/script.sh" ]