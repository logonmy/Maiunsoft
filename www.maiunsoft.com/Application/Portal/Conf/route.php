<?php


return array(

	//开启路由
	//'URL_ROUTER_ON' => true,

	'URL_ROUTE_RULES' => array(

		//----------------------------------------------------------------
		//  软件产品路由
		//
		'products' => 'Product/index',
		'product/:id$' => 'Product/detail',

		'subscribe/product' => 'Product/subscribe',
		'subscribe/article' => 'Article/subscribe',

		//----------------------------------------------------------------
		//  合作伙伴路由
		//
		'client' => 'Company/client',

		'solution/[:g]' => 'Article/index?t=1',
		'report/[:g]' => 'Article/index?t=3',
		'help/[:g]' => 'Article/index?t=4',
		'join/[:g]' => 'Article/index?t=5',
		'news/[:g]' => 'Article/index?t=6',
		'about/[:g]' => 'Article/index?t=7',
		'lastnews' => 'Article/last_news',

		'articles/[:g]' => 'Article/index',
		'article/:id' => 'Article/detail',

		'query' => 'Query/search',
		
		
		
	),

);