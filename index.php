<?php

$numbers = [ 82, 66, 82, 77, 49, 40, 71, 33, 20, 43, ];


function max_number( array $numbers ): void {
	rsort( $numbers );

	echo $numbers[0] . PHP_EOL;
}

max_number( $numbers );