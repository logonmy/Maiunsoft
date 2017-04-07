<?php 

namespace Admin\Controller;


##
#
# 当前用户信息管理
#
class MyController extends AdminController
{
    public function reset_password(){
        
        $this->pageGuid = array('icon' => 'key','title' => '修改我的密码','nav' => null);
        $this->display('reset-password');
    }
    
    public function save_password(){
        $oldPassword = I('post.old_password','','md5');
        $newPassword_1 = I('post.new_password_1','','md5');
        $newPassword_2 = I('post.new_password_2','','md5');
        if(!isset($oldPassword,$newPassword_1,$newPassword_2))
            $this->error('请输入有效的密码信息');
            
        if($newPassword_1!=$newPassword_2)
            $this->error('输入的新密码不一致，请重新输入');

        $existPassword = M('staff')->where('id=%d',$this->_current_staff['id'])->getField('password');
        if($existPassword!=$oldPassword)
            $this->error('对不起，您输入的当前密码不正确，请确认并重新输入');
            
        $ok = M('staff')->where('id=%d',$this->_current_staff['id'])->setField('password',$newPassword_1);
        
        if(!$ok) $this->error('密码修改失败');
        
        session(null);
        $this->redirect('login/index',array(),2,'密码修改成功，请重新登录...');
    }
}