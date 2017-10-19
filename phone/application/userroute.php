<?php
Route::set('activity/show', 'activity/show_<aid>.html', array(
    'aid' => '\d+'

))->defaults(array(
    'action' => 'show',
    'controller' => 'activity'
));
Route::set('activity', 'activity/prizeshow_<aid>.html', array(
    'aid' => '\d+'

))->defaults(array(
    'action' => 'prizeshow',
    'controller' => 'activity'
));

