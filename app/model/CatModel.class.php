<?php
/**
 * Created by PhpStorm.
 * User: LEARNMO
 * Date: 2018/9/13
 * Time: 下午 11:30
 */

namespace model;


use core\Model;

class CatModel extends Model{

    #实现无限级递归分类
    public function getAll(){

        //先查询出分类表中所有的数据
        $sql = 'select * from bg_category where 1';
        $categorys = $this->getRows($sql);
        //整理所有的分类数据，形成一个有序的数组数据集合
        $tree = [];
        $this->recursiveCat($tree, $categorys);

        return $tree;
    }

    private function recursiveCat(&$aa, $allCats, $parent_id=0, $level=0){

        //查得所有的一级分类
        foreach( $allCats as $cat ){
            if( $cat['parent_id']==$parent_id ){//只要当前这条分类的parent_id的值等于0，说明当前这条分类就是顶级分类
                $cat['level'] = $level;
                $aa[] = $cat;
                $this->recursiveCat($aa, $allCats, $cat['id'], $level+1);
            }
        }
    }
}