<?php

$package = json_decode( file_get_contents( 'package.json' ) );

$slug = $package->config->slug;

$version = $package->version;

$zip_filename_version = "$slug.$version.zip";

$zip_filename = "$slug.zip";

$gcloud_bucket_name = "gs://downloads.pronamic.eu/plugins/$slug";

echo `gcloud storage cp build/$zip_filename_version $gcloud_bucket_name/$zip_filename_version`;

echo `gcloud storage cp $gcloud_bucket_name/$zip_filename_version $gcloud_bucket_name/$zip_filename`;

echo `curl --netrc --data version=$version --request PATCH https://www.pronamic.eu/wp-json/pronamic-wp-extensions/v1/plugins/$slug`;
