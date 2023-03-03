<?php

$package = json_decode( file_get_contents( 'package.json' ) );

$slug = $package->config->slug;

$version = $package->version;

$zip_filename_version = "$slug.$version.zip";

$zip_filename = "$slug.zip";

$gcloud_bucket_name = "gs://downloads.pronamic.eu/plugins/$slug";

echo `gcloud storage cp build/$zip_filename_version $gcloud_bucket_name/$zip_filename_version`;

echo "\n";

echo `gcloud storage cp $gcloud_bucket_name/$zip_filename_version $gcloud_bucket_name/$zip_filename`;

echo "\n";

echo `curl --netrc --data version=$version --request PATCH https://www.pronamic.eu/wp-json/pronamic-wp-extensions/v1/plugins/$slug`;

echo "\n";

echo `vendor/bin/wp-deployer changelog $version > build/CHANGELOG.$version.md`;

echo "\n";

echo `gh release create v$version --title $version --notes-file build/CHANGELOG.$version.md build/$zip_filename_version`;

echo "\n";
