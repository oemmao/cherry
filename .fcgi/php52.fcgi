#!/bin/sh
PHPRC=/usr/local/php52/lib/
export PHPRC
export PHP_FCGI_CHILDREN=2
export PHP_FCGI_MAX_REQUESTS=5000
exec /usr/local/php52/bin/php-cgi
