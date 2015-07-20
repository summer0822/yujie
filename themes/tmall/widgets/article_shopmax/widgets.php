<?php
/**
 * ShopMax licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopMax Technologies Inc. (http://www.shopmaxmb.com)
 */
$setting['author']='www.shopmaxmb.com';
$setting['name']='ShopMax文章挂件';
$setting['version']='1.0.0';
$setting['stime']='2012-08';
$setting['catalog']='文章挂件';
$setting['usual'] = '1';
$setting['description']='展示模板使用的公告资讯挂件';
$setting['userinfo']='';
$setting['tag'] = 'auto';
$setting['template'] = array(
    'default.html'=>app::get('b2c')->_('默认')
);
$setting['limit'] = 5;          //节点下显文章数
$setting['lv'] = 2;             //深度
$setting['styleart'] = 0;       //文章样式统一
$setting['shownode'] = 1;       //是否显示节点名称
$setting['node_id']  = 1;       //默认节点
$selectmaps = kernel::single('content_article_node')->get_selectmaps();
array_unshift($selectmaps, array('node_id'=>0, 'step'=>1, 'node_name'=>app::get('content')->_('---无---')));
$setting['selectmaps'] = $selectmaps;
$setting['select_order']['order_type'] = array('pubtime'=>'发布时间');
$setting['select_order']['order'] = array('asc'=>'升序','desc'=>'降序');
$setting['showuptime'] = 0; //是否显示文章最后更新时间
$setting['showpic'] = 0; //是否显示文章配图
?>