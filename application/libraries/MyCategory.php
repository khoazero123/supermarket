<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MyCategory {
	private $nav = 1;
	function __construct() {}
	public function printMenuCategory($current=null) {
		$CI = & get_instance();
		$CI->load->model('Category_model');

		$categorys = $CI->Category_model->listCategory();
		foreach ($categorys as $result) {
            $category['categories'][$result['id']] = $result; 
            $category['parent_cats'][$result['parent']][] = $result['id']; 
        }
        return $this->generateMenuHTMLCategories(0, $category,0,$current);
	}
	public function printNavCategory($current=null) {
		$CI = & get_instance();
		$CI->load->model('Category_model');

		$categorys = $CI->Category_model->listCategory();
		foreach ($categorys as $result) {
            $category['categories'][$result['id']] = $result; 
            $category['parent_cats'][$result['parent']][] = $result['id']; 
        }
        $this->nav = 1;
        return $this->generateNavHTMLCategories(0, $category,0,$current);
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
                    $html .= $this->generateMenuHTMLCategories($cat_id, $category,$level+1);
                    $html .= '</ul>'."\n";
                }
                $html .= '</li>'."\n";
            }
        }
        return $html;
    }
	function generateNavHTMLCategories($parent, $category,$level=0,$current=null) {
		
        $html = '';
        if (isset($category['parent_cats'][$parent])) {
            foreach ($category['parent_cats'][$parent] as $cat_id) {
                $html .= '<li class="level'.$level.''.($level==0 ? ' level-top':'').' nav-'.$this->nav.' '.(isset($category['parent_cats'][$cat_id]) ? ' parent':'').''.($category['categories'][$cat_id]['id']==$current ? ' active':'').'">
                            <a'.($level==0 ? ' class="level-top"':'').' href="category/'.$category['categories'][$cat_id]['slug'].'.html">
                                <span>'.$category['categories'][$cat_id]['name'].'</span>
                                '.($level==0 ? '<span class="boder-menu"></span>':'').'
                            </a>';
                if (isset($category['parent_cats'][$cat_id])) {
                    $html .= '<ul class="level'.$level.'">'."\n";
                    $html .= $this->generateNavHTMLCategories($cat_id, $category,$level+1);
                    $html .= '</ul>'."\n";
                }
                $html .= '</li>'."\n";
                if($level==0) $this->nav++;
            }
        }
        return $html;
    }
}