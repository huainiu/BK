<?php
$conf = array(
		"background"=>"http://app.tvie.com.cn/static/images/background.png",
		"splash"=>"http://app.tvie.com.cn/static/images/background.png",
		"api"=>array(
			"related"=>"http://10.33.0.254/mcms/xchannel/mod/vod/query.php?cid=22",
			"detail"=>"http://10.33.0.254/mcms/xchannel/mod/vod/serial.php",
			"views"=>"http://10.33.0.254/mcms/xchannel/mod/vod/view/"
			)
		);
$conf["categories"] = array(
		// home
		array(
			"title"=>"首页",
			"tpl"=>"vod",
			"modules" => array(
				array(
				"id"=>"serial",
				"position"=>"0,0,0.2286,1",
				"app"=>"com.tvie.ibox.live.mianyang",
				"param"=>array(
						"query_channels_api"=>"http://10.33.0.254/mcms/xchannel/mod/live/live.php",
						"channel_id"=>1
					),
				"title"=>"直播",
				"icon"=>"",
				"pic"=>"http://app.tvie.com.cn/static/images/serial.jpg",
				"api"=>"http://app.tvie.com.cn/api/v1/serial/query/",
				"filter"=>""
			),
			array(
				"id"=>"movie",
				"position"=>"0.2286,0,0.3857,0.5",
				"title"=>"电影",
				"icon"=>"",
				"pic"=>"http://app.tvie.com.cn/static/images/movie.png",
				"param"=>array(
					"api"=>"http://10.33.0.254/mcms/xchannel/mod/vod/query.php?cid=22",
					),
				"filter"=>""
			),
			array(
				"id"=>"zongyi",
				"position"=>"0.6143,0,0.3857,0.5",
				"title"=>"电视剧",
				"icon"=>"",
				"pic"=>"http://app.tvie.com.cn/static/images/zy.png",
				"param"=>array(
					"api"=>"http://10.33.0.254/mcms/xchannel/mod/vod/serial.php",
					),
				"filter"=>""
			),
			array(
				"id"=>"lanmu",
				"position"=>"0.2286,0.5,0.3,0.5",
				"title"=>"娱乐",
				"icon"=>"",
				"pic"=>"http://app.tvie.com.cn/static/images/wp.png",
				"param"=>array(
						"api"=>"http://10.33.0.254/mcms/xchannel/mod/vod/query.php?cid=25",
					),
				"filter"=>""
			),
			array(
				"id"=>"star",
				"position"=>"0.5286,0.5,0.2357,0.5",
				"title"=>"综艺",
				"icon"=>"zong'yi",
				"pic"=>"http://app.tvie.com.cn/static/images/star.png",
				"param"=>array(
						"api"=>"http://10.33.0.254/mcms/xchannel/mod/vod/query.php?cid=25",
					),
				"filter"=>""
			),
			array(
				"id"=>"dongman",
				"position"=>"0.7643,0.5,0.2357,0.5",
				"title"=>"动漫",
				"icon"=>"",
				"pic"=>"http://app.tvie.com.cn/static/images/chat.png",
				"param"=>array(
						"api"=>"http://10.33.0.254/mcms/xchannel/mod/vod/query.php?cid=24",
					),
				"filter"=>""
			)
		)
		),
	);
return $conf;