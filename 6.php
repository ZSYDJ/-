<?php

nm(1,1300);
function nm($n,$m){
	$kdj = range($n,$m);
	echo substr_count(join($kdj),'1');
}
?>