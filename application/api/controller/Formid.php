<?php
/**
 * Created by PhpStorm.
 * User: Administration
 * Date: 2018/11/30
 * Time: 10:15
 */
namespace app\api\controller;

use think\Controller;


class Formid extends Controller
{
    public function collectFormId(){
        $user_id = input('user_id');
        $form_id = input('form_id');
        if(!$user_id || !$form_id){
            return '参数错误';
        }
        $data =[
            'user_id' => $user_id,
            'form_id' => $form_id,
        ];
        $forminfo = model('XcxFormid')->insert($data);
        if ($forminfo){
            return '保存成功';
        }
    }
}