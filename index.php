<?php

/**
 * Symbol count.
 *
 * @param string $str String
 *
 * @return void
 */
function symbol_use( string $str ): void {
	$string = preg_replace( '/[^a-zа-яA-Zа-я]/iu', '', $str );

	echo $string . PHP_EOL;
	echo strlen( $string ) . PHP_EOL;
}

symbol_use( 'djhask678.-34  !322выфпапа[216234' );
