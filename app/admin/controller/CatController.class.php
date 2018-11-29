<?php
/**
 * Created by PhpStorm.
 * User: LEARNMO
 * Date: 2018/9/13
 * Time: 下午 11:27
 */

namespace admin\controller;


use core\Controller;

class CatController extends Controller{
    #展示分类列表
    public function showCat(){
        //调用分类模型查询递归分类数据
        $cats = M('CatModel')->getAll();
        $this->assign('cats',$cats);
        $this->display('Category/categoryList.html');
    }
    #展示添加页的页面
    public function showCatAdd(){
        //加载所有的分类
        $cats = M('CatModel')->getAll();
        $this->assign('cats',$cats);
        $this->display('Category/categoryAdd.html');
    }
    #添加分类的处理方法
    public function catAddHandle(){
        //接收表单提交的数据
        $name = trim($_POST['name']);//分类名称
        $parent_id = $_POST['parent_id'];//父分类id

        @session_start();
        $user_id = $_SESSION['admin']['id'];//添加者的id
        $user_nickname = $_SESSION['admin']['nickname'];//添加者的昵称

        //调用模型操作数据（新增）
        $sql = "insert into bg_category values (null, '{$name}', {$parent_id}, {$user_id}, '{$user_nickname}')";
        $re = M('CatModel')->setData($sql);

        //根据操作的结果进行判断
        if( $re ){//执行成功
            echo '添加分类成功';
            $url = C('domain.main') . '/index.php?p=admin&m=cat&a=showCat';
        }else{//执行失败
            echo '添加失败！请重试.....';
            $url = C('domain.main') . '/index.php?p=admin&m=cat&a=showCatAdd';
        }
        header('Refresh:3; url='.$url);
        exit;
    }
    #修改分类的页面展示
    public function editCatShow(){
        //查询所有的分类
        $cats = M('CatModel')->getAll();

        $id = $_GET['id'];  //获取父分类id
        //调用模型查找对应父分类的信息
        $sql = "select *from bg_category where id={$id}";
        $category =  M('CatModel')->getRow($sql);
        $this->assign('cats',$cats);
        $this->assign('category',$category);
        $this->display('Category/categoryEdit.html');
    }
    #处理修改分类信息
    public function editCatHandle(){
        //获取action后携带的父类id值
        $id = trim($_GET['id']);
        $name = $_POST['name'];
        $parent_id = $_POST['parent_id'];
        $arr = explode('|',$parent_id);
//        var_dump($id);
//        var_dump($name);
//        var_dump($parent_id);
        $parent_id = $arr[1];
        //exit;
       //调用模型执行update操作
        $sql = "update bg_category set name='{$name}',parent_id='{$parent_id}' where id={$id}";
        $cat = M('CatModel')->setData($sql);
        if($cat){
            echo '修改数据成功';
            $url = C('domain.main') . '/index.php?p=admin&m=cat&a=showCat';
        }else{
            echo 'Sorry,修改信息失败,请重试';
            $url = C('domain.main') . '/index.php?p=admin&m=cat&a=editCatShow&id='.$id;
        }
        header('Refresh:3; url='.$url);
        exit;
    }
    #删除分类信息
    public function deleteCat(){
        //获取action后携带的父类id值
        $id = trim($_GET['id']);
        //调用模型查找相应的数据
        $sql = "select count(*) as num from bg_category where parent_id={$id}";
        $row = M('CatModel')->getRow($sql);
        if($row['num']>0){
            echo '该分类下有子分类,您需要先删除其下的子分类,再执行删除操作';
            $url = C('domain.main') . '/index.php?p=admin&m=cat&a=showCat';
            header('Refresh:3; url='.$url);
            exit;
        }
        $sql = "delete from bg_category where id={$id}";
        $row = M('CatModel')->setData($sql);
       if($row){
           echo '删除分类信息成功';
       }else{
           echo '删除分类信息失败，请重试......';
       }
        $url = C('domain.main') . '/index.php?p=admin&m=cat&a=showCat';
        header('Refresh:3; url='.$url);
        exit;
    }
}