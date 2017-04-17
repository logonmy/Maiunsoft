<?php


namespace Home\Controller;
use Think\Controller;


class PublicController extends Controller {
    
    public function header(){

        $this->menu_list = \Home\Model\MenuModel::getMenuList();
        $this->theme($this->_theme)->display('header');
    }
    
    public function menu(){
    	
    	$this->menu_list = \Home\Model\MenuModel::getMenuList();
        $this->display('menu');
    }

    public function footer(){

    }

    

} // end contraoller