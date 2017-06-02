<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    function printMenuCategory($type='generateMenuHTMLCategories',$current=null) {
        
        $CI = & get_instance();
        $CI->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
        $key_cache = 'category-'.$type.$current;
        //echo $current."\n";
        $current = explode(',',$current);
        //var_dump($current);exit;
        if (!$result = $CI->cache->get($key_cache)) {
            $CI->load->model('Category_model');

            $categorys = $CI->Category_model->listCategory();
            if(!empty($categorys)) {
                foreach ($categorys as $result) {
                    $category['categories'][$result['id']] = $result; 
                    $category['parent_cats'][$result['parent']][] = $result['id']; 
                }
                $nav = 1;
                $result = $type(0, $category,0,$current);
                $CI->cache->save($key_cache, $result, 3600*24);
            }
        }
        return $result;
    }
	function generateMenuHTMLCategories($parent, $category,$level=0,$current=null) {
        $html = '';
        if (isset($category['parent_cats'][$parent])) {
            foreach ($category['parent_cats'][$parent] as $cat_id) {
                $html .= '<li class="level'.$level.''.($level==0 ? ' cat':'').''.(isset($category['parent_cats'][$cat_id]) ? ' hasChild dropdown':'').'">
                            <a'.($level==0 ? ' class="level-top"':'').' href="category/'.$category['categories'][$cat_id]['slug'].'.html">
                                '.($level==0 ? '<img class="img-responsive" alt="'.$category['categories'][$cat_id]['name'].'" src="media/catalog/category//06.png">':'').'
                                <span>'.$category['categories'][$cat_id]['name'].'</span>
                                '.($level==0 ? '<span class="boder-menu"></span>':'').'
                            </a>';
                if (isset($category['parent_cats'][$cat_id])) {
                    $html .= '<ul class="level'.$level.'">'."\n";
                    $html .= generateMenuHTMLCategories($cat_id, $category,$level+1,$current);
                    $html .= '</ul>'."\n";
                }
                $html .= '</li>'."\n";
            }
        }
        return $html;
    }
    function generateNavHTMLCategories($parent, $category,$level=0,$current=null) {
        global $nav;
        $html = '';
        if (isset($category['parent_cats'][$parent])) {
            foreach ($category['parent_cats'][$parent] as $cat_id) {
                $html .= '<li class="level'.$level.''.($level==0 ? ' level-top':'').' nav-'.$nav.' '.(isset($category['parent_cats'][$cat_id]) ? ' parent':'').''.($category['categories'][$cat_id]['id']==$current ? ' active':'').'">
                            <a'.($level==0 ? ' class="level-top"':'').' href="category/'.$category['categories'][$cat_id]['slug'].'.html">
                                <span>'.$category['categories'][$cat_id]['name'].'</span>
                                '.($level==0 ? '<span class="boder-menu"></span>':'').'
                            </a>';
                if (isset($category['parent_cats'][$cat_id])) {
                    $html .= '<ul class="level'.$level.'">'."\n";
                    $html .= generateNavHTMLCategories($cat_id, $category,$level+1,$current);
                    $html .= '</ul>'."\n";
                }
                $html .= '</li>'."\n";
                if($level==0) $nav++;
            }
        }
        return $html;
    }
	function generateSelectMenuHTMLCategories($parent, $category,$level=0,$current=null) {
        //var_dump($current);exit;
        $html = '';
        if (isset($category['parent_cats'][$parent])) {
            foreach ($category['parent_cats'][$parent] as $cat_id) {
                $prefix = str_repeat('-',$level);
                //$html .= ' <option value="'.$category['categories'][$cat_id]['id'].'"'.($current==$category['categories'][$cat_id]['id'] ? ' selected' : '').'>'.$prefix.$category['categories'][$cat_id]['name'].'</option>'."\n";
                //$html .= '<!-- '.$category['categories'][$cat_id]['id'].' : '. $current[0] .' -->'."\n";
                $html .= ' <option value="'.$category['categories'][$cat_id]['id'].'"'.($current && in_array($category['categories'][$cat_id]['id'],$current) ? ' selected' : '').'>'.$prefix.$category['categories'][$cat_id]['name'].'</option>'."\n";
                if (isset($category['parent_cats'][$cat_id])) {
                    $html .= generateSelectMenuHTMLCategories($cat_id, $category,$level+1,$current);
                }
            }
        }
        return $html;
    }
    function generateMenuMobileHTMLCategories($parent, $category,$level=0,$current=null) {
        $html = '';
        if (isset($category['parent_cats'][$parent])) {
            foreach ($category['parent_cats'][$parent] as $cat_id) {
                $html .= '<li class="level'.$level.''.(isset($category['parent_cats'][$cat_id]) ? ' hasChild':'').'">
                            <a'.($level==0 ? ' class="level-top"':'').' href="category/'.$category['categories'][$cat_id]['slug'].'.html">
                                '.($level==0 ? '<img class="img-responsive" alt="'.$category['categories'][$cat_id]['name'].'" src="media/catalog/category//06.png">':'').'
                                <span>'.$category['categories'][$cat_id]['name'].'</span>
                                '.($level==0 ? '<span class="boder-menu"></span>':'').'
                            </a>';
                if (isset($category['parent_cats'][$cat_id])) {
                    $html .= '<ul class="level'.$level.'">'."\n";
                    $html .= generateMenuMobileHTMLCategories($cat_id, $category,$level+1,$current);
                    $html .= '</ul>'."\n";
                }
                $html .= '</li>'."\n";
            }
        }
        return $html;
    }
    function generateSelectAdminHTMLCategories($parent, $category,$level=0,$current=null) {
        $html = '';
        if (isset($category['parent_cats'][$parent])) {
            foreach ($category['parent_cats'][$parent] as $cat_id) {
                $prefix = str_repeat('-',$level);
                //$html .= ' <option value="'.$category['categories'][$cat_id]['id'].'"'.($current && in_array($category['categories'][$cat_id]['id'],$current) ? ' selected' : '').'>'.$prefix.$category['categories'][$cat_id]['name'].'</option>'."\n";
                $html .= '<tr id="product-'.$category['categories'][$cat_id]['id'].'" data-id="'.$category['categories'][$cat_id]['id'].'">
                    <td class="text-center"><a href="category/page_ecom_category_edit.php?id='.$category['categories'][$cat_id]['id'].'"><strong>ID#'.$category['categories'][$cat_id]['id'].'</strong></a></td>
                    <td><a href="category/page_ecom_category_edit.php?id='.$category['categories'][$cat_id]['id'].'">'.$prefix.$category['categories'][$cat_id]['name'].'</a></td>
                    <td class="text-right hidden-xs"><strong>HTC</strong></td>
                    <td class="hidden-xs">';
                    if($category['categories'][$cat_id]['display']==0)
                        $html .= '<span class="label label-danger">Hide</span>';
                    else
                        $html .= '<span class="label label-success">Display</span>';
                    $html .= '</td>
                    <td class="hidden-xs text-center"><img src="" /></td>
                    <td class="text-center">
                        <div class="btn-group btn-group-xs">
                            <a target="_blank" href="category/page_ecom_category_edit.php?id='.$category['categories'][$cat_id]['id'].'" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                            <a href="javascript:deleteProduct('.$category['categories'][$cat_id]['id'].')" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                        </div>
                    </td>
                </tr>'."\n";

                if (isset($category['parent_cats'][$cat_id])) {
                    $html .= generateSelectMenuHTMLCategories($cat_id, $category,$level+1,$current);
                }
            }
        }
        return $html;
    }
