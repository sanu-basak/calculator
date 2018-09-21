<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});
Route::get('add/{a}/{b}', 'Sanu\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Sanu\Calculator\CalculatorController@subtract');