<?php

$val = '+639124959139';

if ( preg_match( '/^[0-9 +]{0,15}$/', $val ) ) {
	echo '<h1>It is</h1>';
} else {
	echo '<h1>It is not</h1>';
}