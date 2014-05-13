<?php
$conf = array(
		//"splash"=>"http://app.tvie.com.cn/static/images/background.png",
		"splash"=>"http://app.tvie.com.cn/static/images/desktop/mianyang.png",
		"api"=>array(
			"related"=>"http://app.tvie.com.cn/api/v1/movie/query/",
			"detail"=>"http://app.tvie.com.cn/api/v1/movie/detail/query/",
			"views"=>"http://app.tvie.com.cn/api/v1/statistic/view/"
			)
		);
$conf["modules"] = array(
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
					"api"=>"http://app.tvie.com.cn/api/v1/movie/query/",
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
					"api"=>"http://app.tvie.com.cn/api/v1/serial/query/",
					),
				"filter"=>""
			),
			array(
				"id"=>"lanmu",
				"position"=>"0.2286,0.5,0.3,0.5",
				"title"=>"王牌栏目",
				"icon"=>"",
				"pic"=>"http://app.tvie.com.cn/static/images/wp.png",
				"param"=>array(
						"api"=>"http://app.tvie.com.cn/api/v1/movie/query/",
					),
				"filter"=>""
			),
			array(
				"id"=>"star",
				"position"=>"0.5286,0.5,0.2357,0.5",
				"title"=>"明星",
				"icon"=>"",
				"pic"=>"http://app.tvie.com.cn/static/images/star.png",
				"param"=>array(
						"api"=>"http://app.tvie.com.cn/api/v1/movie/query/",
					),
				"filter"=>""
			),
			array(
				"id"=>"hudong",
				"position"=>"0.7643,0.5,0.2357,0.5",
				"title"=>"互动",
				"icon"=>"",
				"pic"=>"http://app.tvie.com.cn/static/images/chat.png",
				"param"=>array(
						"api"=>"http://app.tvie.com.cn/api/v1/movie/query/",
					),
				"filter"=>""
			)
		)
		),
		//资讯
		array(
			"title"=>"资讯",
			"tpl"=>"vod",
			"modules"=>array(
				array(
					"tpl"=>"cate",
					"id"=>"wenhuayishu",
					"position"=>"0.0,0.2,0.3,0.6",
					"title"=>"新闻",
					"icon"=>"",
					"pic"=>"http://app.tvie.com.cn/static/images/wp.png",
					"background"=>"http://app.tvie.com.cn/static/images/desktop/sky.jpg",
					"param"=>array(
						"api"=>"http://app.tvie.com.cn/api/v1/movie/query/"
					),
					"categories"=>array(
							array(
									//"position"=>"0.0,0.2,0.3,0.6",
									"title"=>"分类1",
									"icon"=>"",
									"pic"=>"http://app.tvie.com.cn/static/images/wp.png",
									"param"=>array(
										"api"=>"http://app.tvie.com.cn/api/v1/movie/query/"
									),
								),
							array(
									//"position"=>"0.35,0.2,0.3,0.6",
									"title"=>"分类2",
									"icon"=>"",
									"pic"=>"http://app.tvie.com.cn/static/images/wp.png",
									"param"=>array(
										"api"=>"http://app.tvie.com.cn/api/v1/movie/query/"
									),

								)
						)
				),
				array(
					"id"=>"wenhuayishu",
					"position"=>"0.35,0.2,0.3,0.6",
					"title"=>"新闻",
					"icon"=>"",
					"pic"=>"http://app.tvie.com.cn/static/images/wp.png",
					"param"=>array(
						"api"=>"http://app.tvie.com.cn/api/v1/movie/query/"
					)
				),
			)
		),
		// live
		array(
			"title"=>"电视",
			"tpl"=>"live",
			"app"=>"com.tvie.ibox.live.mianyang",
			"param"=>array(
					"preview"=>1,
					"api"=>"http://app.tvie.com.cn/api/v1/live/channels",
					"query_channels_api"=>"http://app.tvie.com.cn/api/v1/live/channels?group=false",
					"channel_id"=>1,
					"lines"=>4,
					"num_of_line"=>4
				)
		),
		//资讯
		array(
			"title"=>"专题",
			"tpl"=>"vod",
			"modules"=>array(
				array(
					"id"=>"special1",
					"position"=>"0.1,0.1,0.35,0.6",
					"title"=>"专题1",
					"tpl"=>"special",
					"icon"=>"",
					"pic"=>"http://app.tvie.com.cn/static/images/chat.png",
					"background"=>"http://app.tvie.com.cn/static/images/desktop/sky.jpg",
					"param"=>array(
						"api"=>"http://app.tvie.com.cn/api/v1/movie/query/",
					),
					"filter"=>""
				),
				array(
					"id"=>"special2",
					"position"=>"0.6,0.1,0.35,0.6",
					"title"=>"专题2",
					"tpl"=>"special",
					"icon"=>"",
					"pic"=>"http://app.tvie.com.cn/static/images/chat.png",
					"param"=>array(
						"api"=>"http://app.tvie.com.cn/api/v1/movie/query/",
						"background"=>"http://app.tvie.com.cn/static/images/desktop/couple.jpg"
					),
					"filter"=>""
				),
			)
		),
	);
return $conf;