FROM php:7.2.23-alpine

RUN apk --no-cache add \
        pcre-dev ${PHPIZE_DEPS} \
        composer \
        git \
    && pear config-set php_ini /usr/local/etc/php/php.ini \
    && pecl install pcov \
    && docker-php-ext-enable pcov

ENTRYPOINT ["/bin/sh", "/home/zerobounce/development/run-tests.sh"]