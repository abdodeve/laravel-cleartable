<?php

Route::get('test-adev-temp', function(){
	echo 'Hello Activities Log!';
});

Route::get('testAction/{name}', 'Abdodeve\ActivityLog\ActivityLogController@testAction');
