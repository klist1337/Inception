FROM debian:buster

RUN apt-get update -y && \
apt-get install wget -y

RUN wget https://github.com/google/cadvisor/releases/download/v0.37.0/cadvisor && \
chmod +x cadvisor

CMD ["./cadvisor"]