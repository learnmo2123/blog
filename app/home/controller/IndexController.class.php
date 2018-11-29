<?php
/**
 * Created by PhpStorm.
 * User: LEARNMO
 * Date: 2018/9/13
 * Time: 下午 02:59
 */

namespace home\controller;


use core\Controller;

class IndexController extends Controller
{

    #前台首页
    public function showIndex()
    {
        //分页
        $title = isset($_REQUEST['title1']) ? $_REQUEST['title1'] : '';  //搜索的标题
        $this->assign('title1', $title);
        $condition = 1;
        if (!empty($title)) {  //当title不为空的时候 ,拼接SQL条件语句
            $condition .= " and title like '%{$title}%'";
        }
        //查询博文表中的数据并分页
        //计算分页所需的参数
        $nowPage = isset($_GET['page']) ? $_GET['page'] : 1;
        //var_dump($nowPage);
        $numPerPage = 6; //每页的记录数量
        $sql = "select count(*)as num from bg_article where {$condition}";
        $row = M('ArticleModel')->getRow($sql);
        //var_dump($row['num']);
        $totalPage = (int)ceil($row['num'] / $numPerPage);
        //偏移量
        $x = ($nowPage - 1) * $numPerPage;
        $sql = "select id,title,intro,user_nickname,cat_name,pubtime,comment_num from bg_article  where {$condition} ORDER BY pubtime desc limit {$x},{$numPerPage}";

        $articles = M('ArticleModel')->getRows($sql);
        $url = C('domain.main') . '/index.php?p=home&m=index&a=showIndex';
        //echo ((int)$nowPage-1);
        $url2 = $url . '&page=' . ((int)$nowPage - 1);
        $url3 = $url . '&page=' . ((int)$nowPage + 1);
        $pageHtml = pageHtml($totalPage, $url, $nowPage, $url2, $url3);

        //最新博文(最新的三条)
        $sql1 = "select id,title from bg_article order by pubtime desc limit 3";
        $zuixin = M('ArticleModel')->getRows($sql1);
        $this->assign('zuixin', $zuixin);

        $this->assign('pageHtml', $pageHtml);


        $articles = M('ArticleModel')->getRows($sql);
        $this->assign('articles', $articles);

        $this->assign('title2', '编程语言学习博客');
        $this->display('index.html');
    }

    #展示登录界面
    public function showLogin()
    {
        $this->display('login.html');
    }

    #实现登录功能
    public function login()
    {
        //接收表单数据
        $acc = addslashes(trim($_POST['acc']));//帐号
        $pwd = trim($_POST['pwd']);//密码
        $captcha = trim($_POST['captcha']);//验证码
        //检查数据
        @session_start();
        if ($captcha != $_SESSION['captchaStr']) {//当验证码不正确的时候
            echo '验证码错误,请重试';
            $url = C('domain.main') . '/index.php?p=home&m=index&a=showLogin';
            header('Refresh:3; url=' . $url);
            exit;
        }
        $pwd = md5($pwd);//没有问题则将密码进行md5加密

        //登陆验证
        $sql = "select * from bg_user where acc='{$acc}' and pwd='{$pwd}'";
        $user = M('UserModel')->getRow($sql);

        //根据验证的结果进行判断处理
        if ($user && $user['pwd'] === $pwd) {//表示查到了数据，说明登陆成功
            echo '欢迎光临编程语言学习博客系统~~~~~';
            $_SESSION['home'] = $user;
            $url = C('domain.main') . '/index.php?p=home&m=index&a=showIndex';
            header('Refresh:3; url=' . $url);
            exit;

        } else {//表示没查到数据，说明登陆失败
            echo '您填写的帐号或密码有误～';
            $url = C('domain.main') . '/index.php?p=home&m=index&a=showLogin';
            header('Refresh:3; url=' . $url);
            exit;
        }
    }

    #实现退出功能
    public function logout()
    {
        @session_start();
        unset($_SESSION['home']);
        $url = C('domain.main') . '/index.php?p=home&m=index&a=showIndex';
        header('Refresh:1; url=' . $url);
        exit;
    }

    #发表评论展示页
    public function showReadMore()
    {
        //接收id值
        $id = $_GET['id'];
        //调用模型查询数据
        $sql = "select *from bg_article where id={$id}";
        $article = M('ArticleModel')->getRow($sql);
        //评论的分页
        //计算分页所需的参数
        $nowPage = isset($_GET['page']) ? $_GET['page'] : 1;
        //var_dump($nowPage);
        $numPerPage = 3; //每页的记录数量
        $sql = "select count(*)as num from bg_comment where article_id={$id}";

        $row = M('CommentModel')->getRow($sql);
        //var_dump($row['num']);
        $totalPage = (int)ceil($row['num'] / $numPerPage);
        //偏移量
        $x = ($nowPage - 1) * $numPerPage;
        $sql = $sql = "select *from bg_comment where article_id={$id} order by post_date desc limit {$x},{$numPerPage}";
        $comment = M('CommentModel')->getRows($sql);
        $url = C('domain.main') . '/index.php?p=home&m=index&a=showReadMore';
        //echo ((int)$nowPage-1);
        $url2 = $url . '&page=' . ((int)$nowPage - 1) . '&id=' . $id;
        $url3 = $url . '&page=' . ((int)$nowPage + 1) . '&id=' . $id;
        $pageHtml = pageHtml($totalPage, $url, $nowPage, $url2, $url3);
        $this->assign('pageHtml', $pageHtml);
        $this->assign('article', $article);

        $this->assign('article', $article);
        $this->assign('comment', $comment);
        $this->assign('title2', '阅读更多');
        $this->display('readMore.html');
    }

    #发表评论
    public function publish()
    {
        //数据
        $article_id = $_POST['article_id'];
        $article_title = $_POST['article_title'];
        //获取用户数据
        $comment = htmlspecialchars($_POST['comment']);
        $user_id = $_SESSION['home']['id'];
        $user_nickname = $_SESSION['home']['nickname'];
        $post_date = time();
        if (empty($comment)) {
            echo '请先填写评论内容哟～';
            $url = C('domain.main') . '/index.php?p=home&m=index&a=showReadMore=' . $article_id;
            header('Refresh:2; url=' . $url);
            exit;
        }

        $sql = "insert into bg_comment (article_id,article_title,user_id,user_nickname,content,post_date)values('{$article_id}','{$article_title}','{$user_id}','{$user_nickname}','{$comment}','{$post_date}')";
        $result = M('CommentModel')->setData($sql);

        if ($result) {
            echo '发布评论成功';
            //评论成功，需要将文章的评论数量加1
            $sql = "update bg_article set comment_num=comment_num+1 where id={$article_id}";
            $re = M('ArticleModel')->setData($sql);
            if (!$re) {//评论数量加1失败
                //记录失败的信息，以便后续改进
                echo '评论成功，但是评论数量加1失败！';
            }
        } else {
            echo '发布评论失败';
        }
        $url = C('domain.main') . '/index.php?p=home&m=index&a=showReadMore&id=' . $article_id;
        header('Refresh:1; url=' . $url);
        exit;
    }

    #发布博文
    public function showFabu()
    {
        //条用模型查询数据
        $sql = "select id , yz_catname from bg_cat_yz where 1";
        $yzcats = M('YzCatModel')->getRows($sql);
        $this->assign('yzcats', $yzcats);
        $this->assign('title2', '发布博文');
        $this->display('fabu.html');
    }

    #发布博文的处理
    public function showFabuHandle()
    {
        $title = trim($_POST['title3']);
        $intro = trim($_POST['intro']);
        $yz_content = trim($_POST['content']);    //内容
        $yz_pic = upFile($_FILES['yz_pic']);  //配图
        $pubtime = time();
        $category = $_POST['cat_yz_name'];       //获取父类id和分类名称
        $arr = explode('|', $category);
        if ($category = 0) {
            echo '您还未选择分类呢,我的宝贝~~~~';
            $url = C('domain.main') . '/index.php?p=home&m=index&a=showFabu';
            header('Refresh:3;url=' . $url);
            exit;
        }
        $cat_yz_id = $arr[0];
        $cat_yz_name = $arr[1];
        @session_start();
        //session中获取数据
        $user_id = $_SESSION['home']['id'];
        $user_nickname = $_SESSION['home']['nickname'];
        if(empty($title)){
            echo '您还没有填写标题';
            $url = C('domain.main').'/index.php?p=home&m=index&a=showFabu';
            header('Refresh:3;url='.$url);
            exit;
        }
        if(empty($intro)){
            echo '您还没有填写简介';
            $url = C('domain.main').'/index.php?p=home&m=index&a=showFabu';
            header('Refresh:3;url='.$url);
            exit;
        }
        if(empty($yz_content)){
            echo '您还没有填写金玉良言呢';
            $url = C('domain.main').'/index.php?p=home&m=index&a=showFabu';
            header('Refresh:3;url='.$url);
            exit;
        }
        //调用模型执行 (新增)
        $sql = "insert into bg_yz_bw (yz_title,yz_intro,yz_content,yz_pic,pubtime,cat_yz_id,cat_yz_name,user_id,user_nickname)values('{$title}','{$intro}','{$yz_content}','{$yz_pic}','{$pubtime}','{$cat_yz_id}','{$cat_yz_name}','{$user_id}','{$user_nickname}')";
        $result = M('YzCatModel')->setData($sql);
        if($result){
            echo '发布优质博文成功';
            $url = C('domain.main').'/index.php?p=home&m=index&a=showYouzhi';
        }else{
            echo 'Sorry,发布失败,请重试....';
            $url = C('domain.main').'/index.php?p=home&m=index&a=showFabu';
        }
        header('Refresh:3;url='.$url);
        exit;
    }

        #优质博文
    public function showYouzhi(){
        $nowPage = isset($_GET['page'])?$_GET['page']:1;
        //var_dump($nowPage);
        $numPerPage = 8; //每页的记录数量
        $sql = "select count(*)as num from bg_yz_bw where 1";
        $arr = [];
        $row = M('YzBwModel')->getRow($sql,$arr);
        //var_dump($row['num']);
        $totalPage = (int)ceil($row['num']/$numPerPage);
        //偏移量
        $x = ($nowPage-1)*$numPerPage;
        $sql = "select id,yz_title ,yz_intro,yz_pic ,enjoy from bg_yz_bw where 1 order by pubtime desc limit {$x},{$numPerPage}";
        $blogs =  M('YzBwModel')->getRows($sql);
        $url = C('domain.main').'/index.php?p=home&m=index&a=showYouzhi';
        $url2 = $url.'&page='.((int)$nowPage-1);
        $url3 = $url.'&page='.((int)$nowPage+1);
        $pageHtml = pageHtml($totalPage,$url,$nowPage,$url2,$url3);

        $this->assign('pageHtml',$pageHtml);


        $this->assign('blogs',$blogs);
        $this->assign('title2','优质博文');
        $this->display('youzhi.html');
    }
    #优质中 喜欢加一,太粗暴了(不建议) 后期考虑AJAX做
    public function add(){
        $id = $_GET['id'];
        $sql = "update bg_yz_bw set enjoy=enjoy+1 where id={$id}";
        M('YzBwModel')->setData($sql);
        $url = C('domain.main').'/index.php?p=home&m=index&a=showYouzhi';
        header('Refresh:0.1;url='.$url);
        exit;
    }
    #留言
    public function showLiuyan(){

        $user_id = isset($_SESSION['home']['id'])?$_SESSION['home']['id']:'';
        $user_nickname = isset($_SESSION['home']['nickname'])?$_SESSION['home']['nickname']:'';
        $liuyan_time = time();
        $sql = "select count(*) as num from bg_advice where 1";
        $sql1 = "select *from bg_advice order by liuyan_time desc";
        $url = C('domain.main').'/index.php?p=home&m=index&a=showLiuyan';

            if(empty($_POST['advice'])){
               $arr2 = $this->page($sql,$sql1,$url);
                $GLOBALS['arr2'] = $arr2;
            }else{
                $advice = trim($_POST['advice']);
                $sql3 = "insert into bg_advice (advice,user_id,user_nickname,liuyan_time) values('{$advice}','{$user_id}','{$user_nickname}','{$liuyan_time}')";

                M('LiuyanModel')->setData($sql3);
                $arr2 = $this->page($sql,$sql1,$url);
                $GLOBALS['arr2'] = $arr2;
            }

         $liuyan =$GLOBALS['arr2'][0];
         $pageHtml = $GLOBALS['arr2'][1];


        $this->assign('liuyan',$liuyan);
        $this->assign('pageHtml',$pageHtml);
        $this->assign('title2','留言');
        $this->display('liuyan.html');
    }
    #留言分页
    public function page($sql,$sql1,$url){
        //计算分页所需的参数
        $nowPage = isset($_GET['page'])?$_GET['page']:1;
        //var_dump($nowPage);
        $numPerPage = 3; //每页的记录数量

        $row = M('CommentModel')->getRow($sql);
        //var_dump($row['num']);
        $totalPage = (int)ceil($row['num']/$numPerPage);
        //偏移量
        $x = ($nowPage-1)*$numPerPage;

        $liuyan =M('LiuyanModel')->getRows($sql1." limit {$x},{$numPerPage}");

        $url2 = $url.'&page='.((int)$nowPage-1);
        $url3 = $url.'&page='.((int)$nowPage+1);
        $pageHtml = pageHtml($totalPage,$url,$nowPage,$url2,$url3);

        return $arr = [$liuyan,$pageHtml];
    }

    #系统开发流程
    public function showDevelop(){
        $this->assign('title2','系统开发流程');
        $this->display('develop.html');
    }

    #注册页面展示
    public function showRegister(){
        //渲染注册页面
        $this->display('register.html');
    }
    #注册页面实现注册
    public function registerHandle(){
        //接收表单数据
        $acc = trim($_POST['acc']);   //账户
        $pwd = trim($_POST['pwd']);   //密码
        $sex = trim($_POST['sex']);   //性别
        $nickname = trim($_POST['nickname']);   //昵称
        $headimg = upFile($_FILES['headimg']);   //用户上传的头像
        $regtime = time();

        $pwd = md5($pwd);
        if(empty($headimg)){
            echo '您还未上传头像';
            $url = C('domain.main').'/index.php?p=home&m=index&a=showRegister';
            header('Refresh:3;url='.$url);
            exit;
        }
        $captcha = trim($_POST['captcha']);//验证码
        //检查数据
        @session_start();   //验证在session不可删
        if ($captcha != $_SESSION['captchaStr']) {//当验证码不正确的时候
            echo '验证码错误,请重试';
            $url = C('domain.main') . '/index.php?p=home&m=index&a=showRegister';
            header('Refresh:3; url=' . $url);
            exit;
        }
        //调用父类模型执行数据(新增)
        $sql = "insert into bg_user (acc,pwd,sex,nickname,headimg,regtime)values('{$acc}','{$pwd}','{$sex}','{$nickname}','{$headimg}','{$regtime}')";
        $user = M('UserModel')->setData($sql);
        if($user){
            echo '注册用户成功';
            $url = C('domain.main').'/index.php?p=home&m=index&a=showIndex';
        }else{
            echo 'Sorry...注册用户失败';
            $url = C('domain.main').'/index.php?p=home&m=index&a=showRegister';
        }
        header('Refresh:3;url='.$url);
        exit;
    }
}