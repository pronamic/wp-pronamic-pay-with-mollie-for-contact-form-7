<?php

$package = json_decode( file_get_contents( 'package.json' ) );

$slug = $package->config->slug;

echo `rm -rf ./build/`;

echo "\n";

echo `mkdir ./build/`;

echo "\n";

echo `mkdir ./build/plugin/`;

echo "\n";

echo `rsync --recursive --delete --exclude-from=.pronamic-build-ignore ./ ./build/plugin/`;

echo "\n";

echo `composer install --no-dev --prefer-dist --optimize-autoloader --working-dir=./build/plugin/ --ansi`;

echo "\n";

echo `vendor/bin/wp dist-archive ./build/plugin/ --plugin-dirname=$slug`;

echo "\n";
