<?php
/**
 * Created by PhpStorm.
 * User: LEARNMO
 * Date: 2018/9/17
 * Time: 上午 12:16
 */

namespace admin\controller;


use core\Controller;

class CommentController extends Controller
{
    #评论列表
    //调用模型类查询评论
    public function commentList(){
        //计算分页所需的参数
        $nowPage = isset($_GET['page'])?$_GET['page']:1;
        //var_dump($nowPage);
        $numPerPage = 5; //每页的记录数量
        $sql = "select count(*)as num from bg_comment where 1";
        $row = M('CommentModel')->getRow($sql);
        //var_dump($row['num']);
        $totalPage = (int)ceil($row['num']/$numPerPage);
        //偏移量
        $x = ($nowPage-1)*$numPerPage;
        $sql = "select *from bg_comment where 1 order by post_date desc limit {$x},{$numPerPage}";
        $comments =  M('UserModel')->getRows($sql);
        $url = C('domain.main').'/index.php?p=admin&m=comment&a=commentList';
        //echo ((int)$nowPage-1);
        $url2 = $url.'&page='.((int)$nowPage-1);
        $url3 = $url.'&page='.((int)$nowPage+1);
        $pageHtml = pageHtml($totalPage,$url,$nowPage,$url2,$url3);
        //调用后台模型
        //$userModel = M('UserModel');
        //$sql = 'select id,acc,type,regtime from bg_user';
        $firstNum = ($nowPage-1)*$numPerPage+1;
        $this->assign('pageHtml',$pageHtml);

        $this->assign('firstNum',$firstNum);


        $this->assign('comments',$comments);
        $this->display('Comment/commentList.html');
    }
    #删除恶意评论
    public function deleteComment(){
        $id = $_GET['id'];
        $sql = "delete from bg_comment where id={$id}";
        $result = M('CommentModel')->setData($sql);
        if($result){
            echo '删除评论成功';
        }else{
            echo '删除评论失败,请重试....';
        }
        $url = C('domain.main').'/index.php?p=admin&m=comment&a=commentList';
        header('Refresh:3;url='.$url);
    }


}