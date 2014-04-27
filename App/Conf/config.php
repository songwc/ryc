<?php
return array(
		'DB_TYPE'=>'mysql',
		'DB_HOST'=>'localhost',
		'DB_NAME'=>'ryc',
		'DB_USER'=>'root',
		'DB_PWD'=>'',
		'DB_PORT'=>3306,
		'DB_CHARSET'=>'utf8',
		'DB_PREFIX'=>'ryc_',
// 		'URL_ROUTER_ON' => true, //URL路由
// 		'URL_MODEL' => 2, // URL模式
		
	//'配置项'=>'配置值'
	'APP_GROUP_LIST'=>'Index,Admin',
	'DEFAULT_GROUP'=>'Index',
		//采用独立分组,独立分组时，指定模块路径
		'APP_GROUP_MODE'=>1,
		//分组的模块路径
		'APP_GROUP_PATH'=>'Modules',
	//模板文件的后缀名
	'TMPL_TEMPLATE_SUFFIX'=>'.html',
		//U函数生成路径的后缀名
		'URL_HTML_SUFFIX'=>'html',
		//使用PATHINFO路径
		//'URL_MODEL'=>1,
		//减少模板文件的层级，模板文件需要以“控制器名称+方法名称”来寻找项目下的模板文件
		'TMPL_FILE_DEPR'=>'_',
		//自定义错误页面
		//'TMPL_EXCEPTION_FILE'=>'./Public/Tpl/error.html',
		//SESSION配置项，如果为db，则需要创建一个表,
		//就会默认将这个session写入这个表中
		// CREATE TABLE xx_session(
		// session_id varchar(255) not null,
		// session_expire int(11) not null,
		// session_data blob,
		// unique key 'session_id'('session_id'));
		//'SESSION_TYPE'=>'Db',
);
?>