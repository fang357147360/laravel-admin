<?php

return [

	'site_logo' => 'http://www.zghjzw.com/images/logo_9a54c1c.png',//网站logo

    'file_type' => [1=>'image', 2=>'audio', 3=>'video'],//资源类型
    'file_url' => 'http://7xk0dl.com1.z0.glb.clouddn.com/',//七牛资源网址
    'default_image' => 'http://tadmin.louxia100.com/Public/images/load.png',//默认图片

    //用户头像图片
    'user_info_face_prefix' => 'http://7xk0dl.com1.z0.glb.clouddn.com/',//用户头像前缀

    //分页
    'page_limit' => '10',//分页条数

    //redis缓存名称
    'user_list_hash_table' => 'user_list',//用户列表hash

    'forum_page_limit'=>10,//论坛分页
    'forum_comment_page_limit'=> 10,//论坛回复分页
];
