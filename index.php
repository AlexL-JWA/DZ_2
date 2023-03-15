<?php
/**
 * File name to read
 */
const READ_FILE_NAME = 'read.txt';

function fizzbuzz( $n ) {
	return ( $n % 15 === 0 ) ? "fizzbuzz" : ( ( $n % 5 === 0 ) ? "buzz" : ( ( $n % 3 === 0 ) ? "fizz" : $n ) );
}

/**
 * Read file to array.
 *
 * @param string $file_path File path.
 *
 * @return array
 */
function read_to_array( string $file_path ): void {
	$string_array = [];

	$file = fopen( $file_path, 'rb' );

	while ( ! feof( $file ) ) {

		$str = trim( fgets( $file ) );

		$string_array = explode( ', ', $str );

		$fizz_array = array_map( "fizzbuzz", $string_array );
	}

	fclose( $file );

	echo implode( ', ', $fizz_array ) . PHP_EOL;
}


read_to_array( READ_FILE_NAME );