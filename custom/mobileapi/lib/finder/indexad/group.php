<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */
 
class mobileapi_finder_indexad_group{
    var $column_edit = '编辑';
    function column_edit($row){
        return '<a href="index.php?app=mobileapi&ctl=admin_indexad_group&act=edit&_finder[finder_id]='.$_GET['_finder']['finder_id'].'&p[0]='.$row['group_id'].'" target="_blank">'.app::get('b2c')->_('编辑').'</a>';
    }
}
