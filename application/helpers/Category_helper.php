<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    function printMenuCategory($type='generateMenuHTMLCategories',$current=null) {
        $CI = & get_instance();
        $CI->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
        $key_cache = 'category-'.$type;
        if (!$result = $CI->cache->get($key_cache)) {
            $CI->load->model('Category_model');

            $categorys = $CI->Category_model->listCategory();
            foreach ($categorys as $result) {
                $category['categories'][$result['id']] = $result; 
                $category['parent_cats'][$result['parent']][] = $result['id']; 
            }
            $nav = 1;
            $result = $this->$type(0, $category,0,$current);
            $CI->cache->save($key_cache, $result, 3600*24);
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
                    $html .= generateMenuHTMLCategories($cat_id, $category,$level+1);
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
                    $html .= generateNavHTMLCategories($cat_id, $category,$level+1);
                    $html .= '</ul>'."\n";
                }
                $html .= '</li>'."\n";
                if($level==0) $nav++;
            }
        }
        return $html;
    }
	function generateSelectMenuHTMLCategories($parent, $category,$level=0,$current=null) {
        $html = '';
        if (isset($category['parent_cats'][$parent])) {
            foreach ($category['parent_cats'][$parent] as $cat_id) {
                $prefix = str_repeat('-',$level);
                $html .= ' <option value="'.$category['categories'][$cat_id]['id'].'">'.$prefix.$category['categories'][$cat_id]['name'].'</option>'."\n";
                if (isset($category['parent_cats'][$cat_id])) {
                    $html .= generateSelectMenuHTMLCategories($cat_id, $category,$level+1);
                }
            }
        }
        return $html;
    }
