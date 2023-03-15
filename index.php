<?php

$numbers   = [ 82, 66, 82, 77, 49, 40, 71, 33, 20, 43, ];
$str_array = [
	'Создать',
	'массив',
	'строк.',
	'Написать',
	'функцию',
	'поиска',
	'самой',
	'длинной',
	'строки',
	'по',
	'переданному',
	'массиву.',
];

/**
 * Max Numbers.
 *
 * @param array $numbers Numbers.
 *
 * @return void
 */
function max_number( array $numbers ): void {
	rsort( $numbers );

	echo $numbers[0] . PHP_EOL;
}

max_number( $numbers );

/**
 * Max length string.
 *
 * @param array $str_array Array Strings.
 *
 * @return void
 */
function max_string( array $str_array ): void {
	$max_string_in_array = array_reduce( $str_array, function ( $carry, $item ) {
		return mb_strlen( $carry, 'utf-8' ) < mb_strlen( $item, 'utf-8' ) ? $item : $carry;
	}, '' );

	echo $max_string_in_array . PHP_EOL;
}

max_string( $str_array );
