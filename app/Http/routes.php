<?php

	/*
		|--------------------------------------------------------------------------
		| Application Routes
		|--------------------------------------------------------------------------
		|
		| Here is where you can register all of the routes for an application.
		| It's a breeze. Simply tell Laravel the URIs it should respond to
		| and give it the controller to call when that URI is requested.
		|
	*/

	if(isset($_COOKIE['Language'])){
		session(['languageActive' => $_COOKIE['Language']]);
	} else {
		session(['languageActive' => 'English']);
		setcookie("Language", 'English', time()+3600*24*365, '/');
	}
	
	//Admin Role
	//Route::group(array('middleware' => ['auth', 'roles']), function()
	//Route::group(['prefix' => 'admin', 'middleware'=>'auth'], function () {
	Route::group(array('middleware' => ['auth','site']), function()
	{ 	
		// Useful Information
		Route::resource('admin/useful_information/useful_category', 'Admin\UsefulInfoCategoryController');
		Route::resource('admin/useful_information/useful_listing', 'Admin\UsefulInfoListingController');

		// information
		Route::resource('admin/information/committee', 'Admin\CommitteeController');
		Route::resource('admin/information', 'Admin\InformationController');
		//Admin 
		Route::get('admin', 'Admin\CommonController@index');
		Route::get('admin/dashboard', 'Admin\CommonController@index');
		Route::get('admin/calendar', 'Admin\CommonController@calendar');
		//Users
		Route::resource('admin/user_mgr/user','Admin\UserController');
		// Group Role
		Route::resource('admin/user_mgr/group_role', 'Admin\GroupRoleController');
		Route::post('admin/group_role_update', 'Admin\GroupRoleController@updateGroupRolePermission');
		//User Group
		Route::resource('admin/user_mgr/group_user','Admin\GroupUserController');
		//Permission
		Route::get('admin/permission/Permission_List', 'Admin\PermissionController@index');
		Route::get('admin/permission/setPermission', 'Admin\PermissionController@create');
		Route::post('admin/permission/store', 'Admin\PermissionController@store');
		Route::get('admin/permission/edit/{id}', 'Admin\PermissionController@edit');
		Route::post('admin/permission/update', 'Admin\PermissionController@update');
		//Route::get('admin/role/RoleList', ['uses' => 'admin\RoleController@index','roles' => ['admin']]);
		Route::get('admin/role/RoleList', 'admin\RoleController@index');
		//Front menu
		Route::resource('admin/menu_mgr/fmenu','Admin\FMenuController');
		Route::resource('admin/menu_mgr/mtype','Admin\MenuTypeController');
		Route::get('admin/menu_mgr/menuParent','Admin\FMenuController@menuParent');
		//All configuration
		Route::resource('admin/setting/config','Admin\ConfigController');
		Route::resource('admin/setting/config_group','Admin\ConfigGroupController');
		Route::resource('admin/setting/language','Admin\LanguageController');
		Route::resource('admin/setting/widget','Admin\WidgetController');
		//Category and Content
		Route::resource('admin/cmgr/content','Admin\ContentController');
		Route::resource('admin/content_category','Admin\ContentCategoryController');
		Route::get('admin/contentpage/page_menu','Admin\ContentController@page_menu');
		Route::get('admin/contentpage/pageLoad','Admin\ContentController@pageLoad');
		Route::get('admin/cmgr/filemanager', function(){
			return view('Admin.filemanager.index');
		});


		// Design
		Route::resource('admin/design/banner','Admin\BannerController');
		Route::resource('admin/design/partner','Admin\PartnerController');
		//Content Page
		Route::resource('admin/cmgr/career','Admin\CareerController');
		Route::resource('admin/cmgr/promotions','Admin\PromotionsController');
		Route::resource('admin/cmgr/quick_link','Admin\QuickLinkController');
		Route::resource('admin/cmgr/discover','Admin\DiscoverController');
		Route::resource('admin/cmgr/vision_mission','Admin\VisionMissionController');
		Route::resource('admin/cmgr/where_we_fly','Admin\WhereWeFlyController');
		// Members Management
		Route::resource('admin/members/base_country','Admin\BaseCountryController');
		Route::resource('admin/members/business_type','Admin\BusinessTypeController');
		Route::resource('admin/members/member_type','Admin\MemberTypeController');
		Route::resource('admin/members/position','Admin\PositionController');
		Route::resource('admin/members/member','Admin\MemberController');
		// Event
		Route::resource('admin/event_mgr/event_category','Admin\EventCategoryController');
		Route::resource('admin/event_mgr/event','Admin\EventController');
		Route::resource('admin/event_mgr/recent_event','Admin\RecentEventController');
		Route::resource('admin/event_mgr/upcoming_event','Admin\UpcomingEventController');
		// information
		Route::resource('admin/information/useful_information','Admin\UsefulInformationController');
		//########Activity Log
		Route::get('admin/activity_log','Admin\CommonController@activity_log');
	});

	Route::group(array('middleware' => ['site']), function(){
		//########Event
		// Route::resource('event', 'Client\EventController');
		Route::match(['get', 'post'],'event/report-detail/{event_report_category}/{id}/{report_name}', 'Client\EventController@event_report_detail');
		
		Route::match(['get', 'post'],'event/report/{id}/{name}', 'Client\EventController@event_report');

		Route::match(['get', 'post'],'event/{id}/{name}', 'Client\EventController@event');
		Route::match(['get', 'post'],'event/event_meeting_schedule', 'Client\EventController@event_meeting_schedule');
		Route::match(['get', 'post'],'event/{event_category}/{id}/{event_name}', 'Client\EventController@event_detail');
		//########Information
		Route::get('information/{id}/{name}', 'Client\InformationController@information');
		//########Useful Information
		Route::get('useful_information/{id}/{name}/', 'Client\UsefulInformationController@useful_information');
		//########Client Side
		Route::get('home/category', 'Client\CommonController@category');
		Route::get('/', 'Client\CommonController@index');
		Route::get('/home', 'Client\CommonController@index');
		//promotion
		Route::get('promotion', 'Client\CommonController@Promotion');
		//contact
		Route::get('contact', 'Client\CommonController@contact');

		Route::get('how_to_be_our_member', 'Client\CommonController@how_to_be_our_member');
		Route::get('background', 'Client\CommonController@background');
		Route::get('committee', 'Client\CommonController@committee');

		// about 
		Route::get('about/committee', 'Client\AboutController@committee');
		// members
		Route::get('members/current_members', 'Client\MemberController@current_members');
		Route::get('members/current_members/{id}/{name}', 'Client\MemberController@member_detail');
		Route::get('members/member_benefit', 'Client\MemberController@member_benefit');
		Route::get('members/how_to_be_our_member', 'Client\MemberController@how_to_be_our_member');

		// Route::get('useful_information', 'Client\CommonController@committee');
		Route::get('announcement', 'Client\CommonController@announcement');
		Route::get('news', 'Client\CommonController@news');
		Route::get('recent_events', 'Client\CommonController@recent_events');
		Route::get('upcoming_events', 'Client\CommonController@upcoming_events');
		Route::get('download_document', 'Client\CommonController@download_document');
		Route::get('presentation', 'Client\CommonController@presentation');
		Route::get('research', 'Client\CommonController@research');
		Route::get('others', 'Client\CommonController@others');

		Route::post('sendToContactInfo', 'Client\CommonController@sendToContactInfo');
		//flight info
		Route::get('flight_info', 'Client\CommonController@flight_info');
		// about
		Route::get('/page/{id}', 'Client\CommonController@page');
		Route::get('where_we_fly', 'Client\CommonController@where_we_fly');
		Route::get('our_vision_mission', 'Client\CommonController@our_vision_mission');
		Route::get('partnerus', 'Client\CommonController@partnerus');
		Route::post('sendToPartner', 'Client\CommonController@sendToPartner');
		Route::get('career', 'Client\CommonController@career');
		Route::get('apply_form/{id}', 'Client\CommonController@apply_form');
		Route::post('applyCareer', 'Client\CommonController@applyCareer');
		Route::get('manage_booking', 'Client\CommonController@manage_booking');
		Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);
		// Footer...
		Route::get('/term_condition', 'Client\CommonController@TermCondition');
		Route::get('/dangerous_goods_description', 'Client\CommonController@DgCondition');

		//Authentication routes...
		Route::get('auth/login', 'Auth\AuthController@getLogin');
		Route::post('auth/login', 'Auth\AuthController@postLogin');
		Route::get('auth/logout', 'Auth\AuthController@getLogout');
		
		Route::get('auth/logoutCashier', 'Auth\AuthCashierController@getLogoutCashier');
		
		// Registration routes...
		Route::get('auth/register', 'Auth\AuthController@getRegister');
		Route::post('auth/register', 'Auth\AuthController@postRegister');
	});	

