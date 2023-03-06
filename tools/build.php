<?php

require 'bootstrap.php';

$slug = $package->config->slug;

run( 'rm -rf ./build/' );

run( 'mkdir ./build/' );

run( 'mkdir ./build/plugin/' );

run( 'rsync --recursive --delete --exclude-from=.pronamic-build-ignore ./ ./build/plugin/' );

run( 'composer install --no-dev --prefer-dist --optimize-autoloader --working-dir=./build/plugin/ --ansi' );

run( 'vendor/bin/phpcbf -s -v --sniffs=WordPress.Utils.I18nTextDomainFixer ./build/plugin/' );

run( "vendor/bin/wp dist-archive ./build/plugin/ --plugin-dirname=$slug" );
