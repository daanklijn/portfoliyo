FROM php:7.4-fpm-alpine

RUN apk add --no-cache nginx wget yarn

RUN mkdir -p /run/nginx

COPY docker/nginx.conf /etc/nginx/nginx.conf

RUN mkdir -p /app
COPY . /app

RUN sh -c "wget http://getcomposer.org/composer.phar && chmod a+x composer.phar && mv composer.phar /usr/local/bin/composer"
RUN cd /app && \
    /usr/local/bin/composer install --no-dev && \
    yarn install && \
    yarn run production

RUN chown -R www-data: /app

CMD sh /app/docker/startup.sh
