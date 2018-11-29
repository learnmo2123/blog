<?php
/**
 * Created by PhpStorm.
 * User: LEARNMO
 * Date: 2018/9/14
 * Time: 上午 09:28
 */

namespace admin\controller;


use core\Controller;

class ArticleController extends Controller{

    #博文展示页
    public function articleShow(){
        //调用分类模型查询递归分类数据
        $cats = M('CatModel')->getAll();
        $this->assign('cats',$cats);
        $this->display('Article/articleShow.html');
    }
    #博文添加处理方法
    public function articleAdd(){
        $title = trim($_POST['title']);        //标题
        $intro = trim($_POST['intro']);        //简介
        //htmlspecialchars  加了前台不解析
        $content = trim($_POST['content']);    //内容
        $pubtime = time();
        $category = $_POST['category'];       //获取父类id和分类名称
        $arr = explode('|',$category);
        if($category==0){
            echo '您还未选择分类呢,我的宝贝~~~~';
            $url = C('domain.main').'/index.php?p=admin&m=article&a=articleShow';
            header('Refresh:3;url='.$url);
            exit;
        }
        $cat_id = $arr[0];
        $cat_name = $arr[1];
        @session_start();
        //session中获取数据
        $user_id = $_SESSION['admin']['id'];
        $user_nickname = $_SESSION['admin']['nickname'];

        //调用模型类执行(新增)
        $sql = "insert into bg_article (title,intro,content,cat_id,cat_name,user_id,user_nickname,pubtime)values('{$title}','{$intro}','{$content}','{$cat_id}','{$cat_name}','{$user_id}','{$user_nickname}','{$pubtime}')";
        $result = M('ArticleModel')->setData($sql);
        if($result){
            echo '发布博文成功';
            $url = C('domain.main').'/index.php?p=admin&m=article&a=articleShow';
            header('Refresh:3;url='.$url);
            exit;
        }else{
            echo '发布博文失败';
            $url = C('domain.main').'/index.php?p=admin&m=article&a=articleShow';
            header('Refresh:3;url='.$url);
            exit;
        }
    }
    #博文列表
    public function articleList(){
        //调用模型查询所有的分类先
        $cats = M('CatModel')->getAll();
        $this->assign('cats',$cats);
        //获取表单数据
        $title = isset($_REQUEST['title'])?$_REQUEST['title']:'';  //搜索的标题
        $cat_id = isset($_REQUEST['cat_id'])?$_REQUEST['cat_id']:'';  //搜索的分类
        $this->assign('title',$title);
        $this->assign('cat_id',$cat_id);

        $condition = 1;
        if(!empty($title)){  //当title不为空的时候 ,拼接SQL条件语句
            $condition .= " and title like '%{$title}%'";
        }
        if($cat_id != 0){
            $condition .= " and cat_id={$cat_id}";
        }

        //调用博文模型查询博文数据
        $articleModel= M('ArticleModel');
        //查询博文表中的数据并分页
        //计算分页所需的参数
        $nowPage = isset($_GET['page'])?$_GET['page']:1;
        //var_dump($nowPage);
        $numPerPage = 3; //每页的记录数量
        $sql = "select count(*)as num from bg_article where {$condition}";

        $row = $articleModel->getRow($sql);
        //var_dump($row['num']);
        $totalPage = (int)ceil($row['num']/$numPerPage);
        //偏移量
        $x = ($nowPage-1)*$numPerPage;
        $sql = "select *from bg_article  where {$condition} ORDER BY pubtime desc limit {$x},{$numPerPage}";

        $articles = $articleModel->getRows($sql);
        $url = C('domain.main').'/index.php?p=admin&m=article&a=articleList';
        //echo ((int)$nowPage-1);
        $url2 = $url.'&page='.((int)$nowPage-1);
        $url3 = $url.'&page='.((int)$nowPage+1);
        $pageHtml = pageHtml($totalPage,$url,$nowPage,$url2,$url3);
        //计算序号
        $firstNum = ($nowPage-1)*$numPerPage+1;
        $this->assign('pageHtml',$pageHtml);
        $this->assign('firstNum',$firstNum);

        $this->assign('articles',$articles);
        $this->display('Article/articleList.html');
    }
    #修改博文展示页
    public function editArticleShow(){
        //查询所有的分类先
        $cats = M('CatModel')->getAll();
        $this->assign('cats',$cats);
        //接收表单action id值
        $id = $_GET['id'];
        $sql = "select *from bg_article where id={$id}";
        //调用模型查询数据
        $article = M('ArticleModel')->getRow($sql);
        $this->assign('article',$article);
        $this->display('Article/articleEdit.html');
    }
    #修改博文的处理方法
    public function editArticleHandle(){
        //接收表单数据
        $id = $_GET['id'];
        $title = $_POST['title'];
        $intro = $_POST['intro'];
        $category = $_POST['category'];
        //var_dump($category);
        if($category==0){
            echo '您还没有选择分类哦';
            $url= C('domain.main').'/index.php?p=admin&m=article&a=editArticleShow&id='.$id;
            header('Refresh:3;url='.$url);
            exit;
        }
        $arr = explode('|',$category);
        $cat_id = $arr[0];
        $cat_name = $arr[1];
        $content = trim($_POST['content']);
        //调用模型 更新数据 （update）
        $sql = "update bg_article set title='{$title}',intro='{$intro}',cat_id='{$cat_id}',cat_name='{$cat_name}',content='{$content}' where id={$id} ";
        //var_dump($sql);
        $result = M('ArticleModel')->setData($sql);
        if($result){
            echo '修改博文成功';
            $url= C('domain.main').'/index.php?p=admin&m=article&a=articleList';
            header('Refresh:3;url='.$url);
            exit;
        }else{
            echo 'Sorry,修改博文失败,请重试....';
            $url= C('domain.main').'/index.php?p=admin&m=article&a=editArticleShow&id='.$id;
            header('Refresh:3;url='.$url);
            exit;
        }
    }
    #删除博文
    public function deleteArticle(){
        $id = $_GET['id'];  //获取要删除博文的id
        //调用模型执行 delete
        $sql = "delete from bg_article where id={$id}";
        $result = M('ArticleModel')->setData($sql);
        if($result){
            echo '删除博文成功';
        }else{
            echo 'Sorry，删除博文失败，请重试';
        }
        $url= C('domain.main').'/index.php?p=admin&m=article&a=articleList';
        header('Refresh:3;url='.$url);
        exit;
    }
}