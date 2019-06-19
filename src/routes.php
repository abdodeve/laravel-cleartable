<?php

Route::get('test-adev-temp', function(){
	echo 'Hello Activities Log!';
});

Route::get('testAction/{name}', 'Abdodev\ActivityLog\ActivityLogController@testAction');
