<?php


namespace Portal\Model;
use Think\Model;

class MenuModel extends Model{

    public static $menu_list;

    public static function getMenuList(){

        if(isset(MenuModel::$menu_list))
            return MenuModel::$menu_list;

        // 初始化类实例
        $menu = D('Menu');
        MenuModel::$menu_list = $menu->build_menu($menu);

        return MenuModel::$menu_list;
    }

    public function build_menu($menuModel){
        $data = $menuModel->order('parent,id')->select();

        $menu_list = array();

        
        // 让所有菜单项都找一遍自己的爸爸
        foreach ($data as $value) {
            @$root = $this->getParent($data,$value);
            
            // 没有找到任何东西
            if(!$root) continue;

            $menu_list = $this->addArray($menu_list,$root);
        }
        
        return $menu_list;  

    } // end function


    private function addArray($destArray, $newRoot)
    {
        

        if(!isset($destArray))
            $destArray = $newRoot;

        if(!isset($newRoot))
            return;

        // echo '<pre>';
        // //print_r($destArray);
        // echo '------------------- new ROOT input';
        // print_r($newRoot);
        
        // 如果目标数组中不包括要添加项目的ID，直接添加即可
        if(!isset($destArray[$newRoot['id']]))
        {
            $destArray[$newRoot['id']] = $newRoot;
            return $destArray;
        }


        // 包括了ID，并且child不为空,看看这些child中是否与新的一样，不一样则插入
        foreach ($newRoot['childs'] as $key => $value) {
            // 主要用于构造二级目录
            // newroot中的child-$key是否包含在目标中，如果包含，检查他的子项
            if(!isset($destArray[$newRoot['id']]['childs'][$key])){
                $destArray[$newRoot['id']]['childs'][$key] = $value;
                continue;
            }

            foreach ($newRoot['childs'][$key]['childs'] as $tkey => $tvalue) {
                if(!isset($destArray[$newRoot['id']]['childs'][$key]['childs'][$tkey]))
                          $destArray[$newRoot['id']]['childs'][$key]['childs'][$tkey] = $tvalue;
                    continue;
            }
        }                    
                
        return $destArray;
        
    }

    // 找爸爸
    private function getParent($data,$me,$result){


        // O, 原来我没有爸爸
        if($me['parent']<=0)
            return $me;


        // 我有还没有找到爸爸
        foreach ($data as $key => $value) {

            // 我终于找到自己的爸爸了
            if($value['id']==$me['parent']){

                // 投入爸爸的怀抱
                // 获得子节点数目
                // array_push($value['childs'][$me['id']], $me);
                // if(!isset($value['childs'])) echo 'has childs';
                $value['childs'][$me['id']] = $me;
                $data[$key]['childs'][$me['id']] = $me;

                // 拖家带口递归，一直找到跟节点
                return $this->getParent($data,$value,$result);
            }
        }

        return false; // 没有找到爸爸
    }
}