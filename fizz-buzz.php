<?php
/**
 * HackerRank had a stupid challenge to write FizzBuzz
 * using as few characters as possible... which, while fun
 * to do is a really dangerous thing to make beginning
 * developers feel is an important thing to learn.
 * 
 * Value readable code over slick horseshit.
 * 
 * That said... here's some slick horseshit:
 */
foreach( range( 1, 100 ) as $i ) :
    echo( '' == ( $x = ( $i % 3 ? '' : 'Fizz' ) . ( $i % 5 ? '' : 'Buzz' ) ) ? $i : $x ) . "\r\n";
endforeach;