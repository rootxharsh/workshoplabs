FROM nginx
RUN apt update && apt install -y apache2
COPY nginx.conf /etc/nginx/conf.d/default.conf
COPY apache.conf /etc/apache2/ports.conf
ADD nginxroot/ /usr/share/nginx/html/
ADD apacheroot/ /var/www/html/
COPY start.sh /tmp/start.sh

ENTRYPOINT ["sh","/tmp/start.sh"]
