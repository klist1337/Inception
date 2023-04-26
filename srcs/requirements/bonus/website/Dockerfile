FROM debian:buster

RUN apt-get update -y && apt install -y nodejs \
npm && \
mkdir website

COPY  /conf/public website/public

COPY /conf/server.js website/


COPY /tools/script.sh /usr/bin 

RUN chmod +x /usr/bin/script.sh

CMD ["/usr/bin/script.sh"]


