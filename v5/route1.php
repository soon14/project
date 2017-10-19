<?php defined('SYSPATH') or die('No direct script access.');





//订单

Route::set('member_order', 'member/order(/<action>(-<ordertype>))(-<p>)',

    array(

        'action' =>"[a-zA-Z]+",

        'ordertype' => '[a-zA-Z]+',

        'p' => '[0-9]+'

    ))

    ->defaults(array(

        'action' => 'index',

        'controller' => 'order',

        'directory' => 'member'

    ));



//会员中心

Route::set('member', 'member(/<controller>(/<action>(/<query>)))', array('query' => '.*'))

    ->defaults(array(

        'action' => 'index',

        'controller' => 'index',

        'directory' => 'member'

    ));





//消息提示

Route::set('message', 'message/<param>', array(

    'param' => '[a-zA-Z0-9]+'

))->defaults(array(

    'action' => 'index',

    'controller' => 'message'

));



//线路详情

Route::set('line', 'lines(/<action>_<aid>.html)', array(

    'aid' => '\d+',

    'action' => '(print|show)'

))->defaults(array(

    'action' => 'index',

    'controller' => 'line'

));

//自驾 首页
Route::set('line_selfdriving', 'lines/self', array(
    'aid' => '\d+',
))->defaults(array(
    'action' => 'selfdriving',
    'controller' => 'line'
));
//自驾 线路详情
Route::set('line_self_show', 'lines/self_show(_<aid>.html)', array(
    'aid' => '\d+',

))->defaults(array(
    'action' => 'self_show',
    'controller' => 'line'
));

//线路预订

Route::set('line_book', 'lines/book', array())->defaults(array(

    'controller' => 'line',

    'action' => 'book'

));



//线路列表



Route::set('line_list', 'lines/(<destpy>)(<sign>)(-<dayid>)(-<priceid>)(-<sorttype>)(-<displaytype>)(-<startcityid>)(-<attrid>)(-<p>)',

    array(

        'destpy' => '[0-9a-zA-Z]+',

        'sign'=>'\/?',

        'dayid' => '[0-9]+',

        'priceid' => '[0-9]+',

        'sorttype' => '[0-9]+',

        'displaytype' => '[^-]',

        'startcityid' => '[0-9]+',

        'attrid' => '[0-9_]+',

        'p' => '[0-9]+'

    ))

    ->defaults(array(

        'controller'=>'line',

        'action'=>'list'

    ));


//自驾 线路列表

Route::set('line_self_list', 'lines/self/(<destpy>)(<sign>)(-<dayid>)(-<priceid>)(-<sorttype>)(-<displaytype>)(-<startcityid>)(-<attrid>)(-<p>)',
    array(
        'destpy' => '[0-9a-zA-Z]+',
        'sign'=>'\/?',
        'dayid' => '[0-9]+',
        'priceid' => '[0-9]+',
        'sorttype' => '[0-9]+',
        'displaytype' => '[^-]',
        'startcityid' => '[0-9]+',
        'attrid' => '[0-9_]+',
        'p' => '[0-9]+'
    ))
    ->defaults(array(
        'controller'=>'line',
        'action'=>'self_list'
    ));

//酒店详细

Route::set('hotel', 'hotels(/<action>_<aid>.html)', array(

    'aid' => '\d+',

    'action' => 'show'

))->defaults(array(

    'action' => 'index',

    'controller' => 'hotel'

));



//酒店预订

Route::set('hotel_book', 'hotels/book', array())->defaults(array(

    'controller' => 'hotel',

    'action' => 'book'

));

//酒店列表

Route::set('hotel_list', 'hotels/(<destpy>)(<sign>)(-<rankid>)(-<priceid>)(-<sorttype>)(-<displaytype>)(-<attrid>)(-<p>)',

    array(

        'destpy' => '[0-9a-zA-Z]+',

        'sign'=>'\/?',

        'rankid' => '[0-9]+',

        'priceid' => '[0-9]+',

        'sorttype' => '[0-9]+',

        'displaytype' => '[^-]',

        'attrid' => '[0-9_]+',

        'p' => '[0-9]+'

    ))

    ->defaults(array(

        'controller'=>'hotel',

        'action'=>'list'

    ));





//签证详细

Route::set('visa', 'visa(/<action>_<aid>.html)', array(

    'aid' => '\d+',

    'action' => 'show'

))->defaults(array(

    'action' => 'index',

    'controller' => 'visa'

));



//签证列表

Route::set('visa_book', 'visa/book', array())->defaults(array(

    'controller' => 'visa',

    'action' => 'book'

));



Route::set('visa_create', 'visa/create', array())->defaults(array(

    'controller' => 'visa',

    'action' => 'create'

));



//签证列表

Route::set('visa_list', 'visa/(<countrypy>)(<sign>)(-<cityid>)(-<sorttype>)(-<visatypeid>)(-<p>)',

    array(

        'countrypy' => '[a-zA-Z]+',

        'sign'=>'\/?',

        'cityid' => '[0-9]+',

        'sorttype' => '[0-9]+',

        'visatypeid' => '[0-9]+',

        'p' => '[0-9]+'

    ))

    ->defaults(array(

        'controller'=>'visa',

        'action'=>'list'

    ));



//租车详情

Route::set('car', 'cars(/<action>_<aid>.html)', array(

    'aid' => '\d+',

    'action' => 'show'

))->defaults(array(

    'action' => 'index',

    'controller' => 'car'

));

//租车预订

Route::set('car_book', 'cars/book', array())->defaults(array(

    'controller' => 'car',

    'action' => 'book'

));

//租车列表

Route::set('car_list', 'cars/(<destpy>)(<sign>)(-<carkindid>)(-<sorttype>)(-<attrid>)(-<p>)',

    array(

        'destpy' => '[0-9a-zA-Z]+',

        'sign'=>'\/?',

        'carkindid' => '[0-9]+',

        'sorttype' => '[0-9]+',

        'attrid' => '[0-9_]+',

        'p' => '[0-9]+'

    ))

    ->defaults(array(

        'controller'=>'car',

        'action'=>'list'

    ));





//攻略首页

Route::set('article', 'raiders(/)', array(



))->defaults(array(

    'action' => 'index',

    'controller' => 'article'

));



//攻略详情

Route::set('article_show', 'raiders(/<action>_<aid>.html)', array(

    'aid' => '\d+',

    'action' => 'show'

))->defaults(array(

    'action' => 'index',

    'controller' => 'article'

));



//攻略列表

Route::set('article_list', 'raiders/(<destpy>)(<sign>)(-<attrid>)(-<p>)',

    array(

        'destpy' => '[0-9a-zA-Z]+',

        'sign'=>'\/?',

        'attrid' => '[0-9_]+',

        'p' => '[0-9]+'

    ))

    ->defaults(array(

        'controller'=>'article',

        'action'=>'list'

    ));

//车主服务首页

Route::set('che', 'che(/)', array(



))->defaults(array(

    'action' => 'index',

    'controller' => 'che'

));

//车主服务详情

Route::set('che_show', 'che(/<action>_<aid>.html)', array(

    'aid' => '\d+',

    'action' => 'show'

))->defaults(array(

    'action' => 'index',

    'controller' => 'che'

));

//添加问答

Route::set('question', 'questions/<action>', array(

    'action' => '\w+'

))->defaults(array(

    'action' => 'add',

    'controller' => 'question'

));

//问答列表

Route::set('question_list', 'questions', array(

))->defaults(array(

    'action' => 'index',

    'controller' => 'question'

));



//相册详情

Route::set('photo', 'photos(/<action>_<aid>(_<num>).html)', array(

    'aid' => '\d+',

    'num' => '\d+',

    'action' => 'show'

))->defaults(array(

    'action' => 'index',

    'controller' => 'photo'

));



//相册列表





Route::set('photo_list', 'photos/(<destpy>)(<sign>)(-<attrid>)(-<p>)',

    array(

        'destpy' => '[0-9a-zA-Z]+',

        'sign'=>'\/?',

        'attrid' => '[0-9_]+',

        'p' => '[0-9]+'

    ))

    ->defaults(array(

        'controller'=>'photo',

        'action'=>'list'

    ));



//景点门票

Route::set('spot', 'spots(/<action>_<aid>.html)', array(

    'aid' => '\d+',

    'action' => 'show'

))->defaults(array(

    'action' => 'index',

    'controller' => 'spot'

));

Route::set('spot_test', 'spots/test', array())->defaults(array(

    'controller' => 'spot',

    'action' => 'test'

));
Route::set('spot_ticket', 'spots/ticket', array())->defaults(array(

    'controller' => 'spot',

    'action' => 'ticket'

));
Route::set('spot_refund', 'spots/refund', array())->defaults(array(

    'controller' => 'spot',

    'action' => 'refund'

));
//景点列表

Route::set('spot_list', 'spots/(<destpy>)(<sign>)(-<priceid>)(-<sorttype>)(-<attrid>)(-<p>)',

    array(

        'destpy' => '[0-9a-zA-Z]+',

        'sign'=>'\/?',

        'priceid' => '[0-9]+',

        'sorttype' => '[0-9]+',

        'attrid' => '[0-9_]+',

        'p' => '[0-9]+'

    ))

    ->defaults(array(

        'controller'=>'spot',

        'action'=>'list'

    ));



//团购

Route::set('tuan', 'tuan(/<action>_<aid>.html)', array(

    'aid' => '\d+',

    'action' => 'show'

))->defaults(array(

    'action' => 'index',

    'controller' => 'tuan'

));



Route::set('tuan_book', 'tuan/book', array())->defaults(array(

    'controller' => 'tuan',

    'action' => 'book'

));



Route::set('tuan_create', 'tuan/create', array())->defaults(array(

    'controller' => 'tuan',

    'action' => 'create'

));









//团购列表

Route::set('tuan_list', 'tuan/(<destpy>)(<sign>)(-<status>)(-<sorttype>)(-<attrid>)(-<p>)',

    array(

        'destpy' => '[0-9a-zA-Z]+',

        'sign'=>'\/?',

        'status' => '[0-9]+',

        'sorttype' => '[0-9]+',

        'attrid' => '[0-9_]+',

        'p' => '[0-9]+'

    ))

    ->defaults(array(

        'controller'=>'tuan',

        'action'=>'list'

    ));





//结伴

Route::set('jieban', 'jieban(/<action>_<id>.html)', array(

    'id' => '\d+',

    'action' => 'show'

))->defaults(array(

    'action' => 'index',

    'controller' => 'jieban'

));



//发布结伴

Route::set('jieban_add', 'jieban/<action>', array(

    'action' => 'add|ajax_get_more|ajax_check_msg'

))->defaults(array(

    'action' => 'index',

    'controller' => 'jieban'

));



//结伴列表

Route::set('jieban_list', 'jieban/<params>', array(

    'params' => '[a-zA-Z0-9]+/?(-\d+(-[\d_]){1,2}(-\d+)?)?'

))->defaults(array(

    'action' => 'list',

    'controller' => 'jieban'

));



//私人定制

Route::set('customize', 'customize(/<action>)', array(

    'action' => 'index|ajax_get_more|ajax_check_msg'

))->defaults(array(

    'action' => 'index',

    'controller' => 'customize'

));



//帮助

Route::set('help', 'help/<action>_<aid>.html', array(

    'aid' => '\d+',

    'action' => '(index|show)'

))->defaults(array(

    'action' => 'index',

    'controller' => 'help'

));



//服务选项

Route::set('servers','servers/index_<aid>.html',array(

    'aid'=>'\d+'

))->defaults(array(

    'action' => 'index',

    'controller' => 'server'

));



//全局搜索

Route::set('search', 'search')->defaults(array(

    'action' => 'index',

    'controller' => 'search'

));



//游记版块

Route::set('notes', 'notes(/<action>_<id>.html)', array(

    'id' => '\d+',

    'action' => 'show'

))->defaults(array(

    'action' => 'index',

    'controller' => 'notes'

));





//通用模块路由

include_once(APPPATH.'tyroute.php');



//目的地列表

Route::set('destlist', 'destination')->defaults(array(

    'action' => 'index',

    'controller' => 'destination'

));



//专题

Route::set('zhuanti', 'zhuanti', array())->defaults(array(

    'controller' => 'zhuanti',

    'action' => 'index'

));



//单目的地主页

Route::set('desthome', '<pinyin>', array(

    'pinyin' => '[a-zA-Z0-9]+'

))->defaults(array(

    'action' => 'main',

    'controller' => 'destination'

));







//错误页面



Route::set('error', 'error/<action>(/<message>)', array('action' => '[0-9]++', 'message' => '.+'))

    ->defaults(array(

        'controller' => 'error'

    ));









//默认

Route::set('default', '(<controller>(/<action>(/<params>)))', array(

    'params' => '.*'

))->defaults(array(

    'controller' => 'index',

    'action' => 'index',

));





