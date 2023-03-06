<?php

require 'bootstrap.php';

$slug = $package->config->slug;

$version = $package->version;

$zip_filename_version = "$slug.$version.zip";

$zip_filename = "$slug.zip";

$gcloud_bucket_name = "gs://downloads.pronamic.eu/plugins/$slug";

run( "gcloud storage cp build/$zip_filename_version $gcloud_bucket_name/$zip_filename_version" );

run( "gcloud storage cp $gcloud_bucket_name/$zip_filename_version $gcloud_bucket_name/$zip_filename" );

run( "curl --netrc --data version=$version --request PATCH https://www.pronamic.eu/wp-json/pronamic-wp-extensions/v1/plugins/$slug" );

run( "vendor/bin/wp-deployer changelog $version > build/CHANGELOG.$version.md" );

run( "gh release create v$version --title $version --notes-file build/CHANGELOG.$version.md build/$zip_filename_version" );
