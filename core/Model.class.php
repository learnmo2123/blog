<?php

namespace core;//创建了一个  全局空间  下的  core空间
use \PDO;//引入  全局空间  下的   PDO类
use \PDOException;//引入  全局空间  下的   PDO类

class Model{
    private $_pdo;//保存PDO类的对象

    #构造方法 执行初始化操作
    //public function __construct($type='mysql', $acc='root', $pwd='123abc', $h='localhost', $p=3306, $char='utf8', $db='day12'){ 
    public function __construct($type='', $acc='', $pwd='', $h='', $p='', $char='', $db=''){ 

        $type = ($type==='') ? $GLOBALS['config']['pdo']['type'] : $type;
        $acc = ($acc==='') ? $GLOBALS['config']['pdo']['acc'] : $acc;
        $pwd = ($pwd==='') ? $GLOBALS['config']['pdo']['pwd'] : $pwd;
        $h = ($h==='') ? $GLOBALS['config']['pdo']['host'] : $h;
        $p = ($p==='') ? $GLOBALS['config']['pdo']['port'] : $p;
        $char = ($char==='') ? $GLOBALS['config']['pdo']['char'] : $char;
        $db = ($db==='') ? $GLOBALS['config']['pdo']['db'] : $db;

        //连库基本操作
        $dsn = "{$type}:host={$h};port={$p};charset={$char};dbname={$db}";
        $this->_pdo = new PDO($dsn, $acc, $pwd);

        //设置错误处理模式为异常模式
        $this->_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    #专门记录错误信息的方法
    private function record($err){ 
        $str = '';
        $str = '出错的时间：' . date('Y-m-d H:i:s') . "\r\n";
        $str .= '错误的错误码值：' . $err->getCode() . "\r\n";
        $str .= '错误的行号：' . $err->getLine() . "\r\n";
        $str .= '错误的信息：' . $err->getMessage() . "\r\n";
        $str .= '出错的文件：' . $err->getFile() . "\r\n";
        $str .= "==========================================\r\n";
        file_put_contents('./err.log', $str, FILE_APPEND);
    }

    #设置操作（增删改）
    public function setData($sql){ 
        
        try{//监听执行SQL语句的代码
            $this->_pdo->exec($sql);
        }catch(PDOException $aa){//捕获出现的异常
            $this->record($aa);
            return false;
        }
        return true;
    }

    #查一条数据
    public function getRow($sql){ 
        
        try{//监听执行SQL语句的代码
            $pdostatement = $this->_pdo->query($sql);//执行查询SQL语句
        }catch(PDOException $aa){//捕获出现的异常
            $this->record($aa);//记录错误信息到日志文件
            return false;//如果执行失败返回false
        }

        return $pdostatement->fetch(PDO::FETCH_ASSOC);//如果执行SQL语句成功，则进一步解析一条数据返回出去
    }


    #查多条数据
    public function getRows($sql){ 
        
        try{//监听执行SQL语句的代码
            $pdostatement = $this->_pdo->query($sql);//执行查询SQL语句
        }catch(PDOException $aa){//捕获出现的异常
            $this->record($aa);//记录错误信息到日志文件
            return false;//如果执行失败返回false
        }

        return $pdostatement->fetchAll();//如果执行SQL语句成功，则进一步解析全部数据返回出去
    }
}