<?php

function run( $command ) {
	echo $command, "\n";

	passthru( $command );

	echo "\n";
}

$package = json_decode( file_get_contents( 'package.json' ) );
