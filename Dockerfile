FROM wordpress

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer require phpunit/phpunit --dev

ENTRYPOINT composer install && ./vendor/bin/phpunit tests