#!/bin/sh
PHPRC=/usr/local/php56/lib/
export PHPRC
export PHP_FCGI_CHILDREN=2
export PHP_FCGI_MAX_REQUESTS=5000
exec /usr/local/php56/bin/php-cgi
