<?php

//Only admin will see this link
if($app_user['group_id']==0)
{
  $app_plugin_menu['menu'][] = array('title'=>TEXT_PLUGIN_HELLO_WORLD,'url'=>url_for('hello/my_page/index'),'class'=>'fa-anchor');
}

/*
$app_plugin_menu['reports'][] = array('title'=>TEXT_PLUGIN_HELLO_WORLD,'url'=>url_for('hello/my_page/index'),'class'=>'fa-anchor');
$app_plugin_menu['account_menu'][] = array('title'=>TEXT_PLUGIN_HELLO_WORLD,'url'=>url_for('hello/my_page/index'),'class'=>'fa-anchor');

$s = array();
$s[] = array('title'=>TEXT_PLUGIN_HELLO_WORLD,'url'=>url_for('hello/my_page/index'),'class'=>'fa-anchor');
$app_plugin_menu['menu'][] = array('title'=>TEXT_PLUGIN_HELLO_WORLD,'url'=>url_for('hello/my_page/index'),'class'=>'fa-anchor','submenu'=>$s);
*/