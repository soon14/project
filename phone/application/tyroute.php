<?php



/**sanshuistart**/
Route::set('sanshui_show', 'sanshui/show_<aid>.html', array(
    'aid' => '\d+'

))->defaults(array(
        'action' => 'show',
        'controller' => 'sanshui'
    ));
Route::set('sanshui_book', 'sanshui/book', array())->defaults(array(
    'controller' => 'sanshui',
    'action' => 'book'
));
Route::set('sanshui_create', 'sanshui/create', array())->defaults(array(
    'controller' => 'sanshui',
    'action' => 'create'
));
Route::set('sanshui_list', 'sanshui(/<destpy>)(<sign>)(-<sorttype>)(-<attrid>)(-<p>)',
    array(
        'destpy' => '[a-zA-Z]+',
        'sign'=>'\/?',
        'sorttype' => '[0-9]+',
        'attrid' => '[0-9_]+',
        'p' => '[0-9]+'
    ))
    ->defaults(array(
        'controller'=>'sanshui',
        'action'=>'list'
    ));
/**sanshuiend**/
/**ysdwstart**/
Route::set('ysdw_show', 'ysdw/show_<aid>.html', array(
    'aid' => '\d+'

))->defaults(array(
        'action' => 'show',
        'controller' => 'ysdw'
    ));
Route::set('ysdw_book', 'ysdw/book', array())->defaults(array(
    'controller' => 'ysdw',
    'action' => 'book'
));
Route::set('ysdw_create', 'ysdw/create', array())->defaults(array(
    'controller' => 'ysdw',
    'action' => 'create'
));
Route::set('ysdw_list', 'ysdw(/<destpy>)(<sign>)(-<sorttype>)(-<attrid>)(-<p>)',
    array(
        'destpy' => '[a-zA-Z]+',
        'sign'=>'\/?',
        'sorttype' => '[0-9]+',
        'attrid' => '[0-9_]+',
        'p' => '[0-9]+'
    ))
    ->defaults(array(
        'controller'=>'ysdw',
        'action'=>'list'
    ));
/**ysdwend**/
/**huwaistart**/
Route::set('huwai_show', 'huwai/show_<aid>.html', array(
    'aid' => '\d+'

))->defaults(array(
        'action' => 'show',
        'controller' => 'huwai'
    ));
Route::set('huwai_book', 'huwai/book', array())->defaults(array(
    'controller' => 'huwai',
    'action' => 'book'
));
Route::set('huwai_create', 'huwai/create', array())->defaults(array(
    'controller' => 'huwai',
    'action' => 'create'
));
Route::set('huwai_list', 'huwai(/<destpy>)(<sign>)(-<sorttype>)(-<attrid>)(-<p>)',
    array(
        'destpy' => '[a-zA-Z]+',
        'sign'=>'\/?',
        'sorttype' => '[0-9]+',
        'attrid' => '[0-9_]+',
        'p' => '[0-9]+'
    ))
    ->defaults(array(
        'controller'=>'huwai',
        'action'=>'list'
    ));
/**huwaiend**/