#!/usr/bin/env bash

# Run the tests
cd /home/zerobounce || exit
composer install
composer test
