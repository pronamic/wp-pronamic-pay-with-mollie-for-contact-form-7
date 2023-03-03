<?php

$package = json_decode( file_get_contents( 'package.json' ) );

$slug = $package->config->slug;

echo `rm -rf ./build/`;

echo `mkdir ./build/`;

echo `mkdir ./build/plugin/`;

echo `rsync --recursive --delete --exclude-from=.pronamic-build-ignore ./ ./build/plugin/`;

echo `composer install --no-dev --prefer-dist --optimize-autoloader --working-dir=./build/plugin/ --ansi`;

echo `vendor/bin/wp dist-archive ./build/plugin/ --plugin-dirname=$slug`;
