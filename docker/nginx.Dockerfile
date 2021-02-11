FROM nginx

ADD docker/conf/vhost.conf /etc/nginx/cond.d/default.conf

WORKDIR /var/www/krppo-logger
