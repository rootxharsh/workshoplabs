FROM ubuntu:18.04
ARG DEBIAN_FRONTEND=noninteractive
ENV TZ=Europe/Moscow
RUN apt update && apt-get install -y tzdata apache2 php libapache2-mod-php nano net-tools netcat php-curl 
ADD . /var/www/html/
ENTRYPOINT service apache2 start && bash
