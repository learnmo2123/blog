/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50540
Source Host           : 127.0.0.1:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2018-10-14 22:45:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for bg_advice
-- ----------------------------
DROP TABLE IF EXISTS `bg_advice`;
CREATE TABLE `bg_advice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `advice` text,
  `user_id` int(11) DEFAULT NULL,
  `user_nickname` varchar(20) DEFAULT NULL,
  `liuyan_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bg_advice
-- ----------------------------
INSERT INTO `bg_advice` VALUES ('1', '还可以的,只是还需要不断的优化,和提升功能的完整性', '4', '小可心', '1537083454');
INSERT INTO `bg_advice` VALUES ('2', '我就是路过的', '7', '陆弯', '1537083877');
INSERT INTO `bg_advice` VALUES ('6', '我是来测试你的留言功能的', '6', '小粉粉', '1537084636');
INSERT INTO `bg_advice` VALUES ('7', '做的不错.继续努力完善功能哟.', '7', '陆弯', '1537084706');
INSERT INTO `bg_advice` VALUES ('8', '西瓜好甜,看着编程语言学习博客,感觉自己萌萌哒.', '1', '小小心', '1537084788');
INSERT INTO `bg_advice` VALUES ('9', '2018年的广州,下了一场寂寞又伤感的雨........', '4', '小可心', '1537084884');
INSERT INTO `bg_advice` VALUES ('16', '世间没有容易的事.', '4', '小可心', '1537091155');
INSERT INTO `bg_advice` VALUES ('44', '做的不错.继续努力完善功能哟.', '7', '陆弯', '1537093759');
INSERT INTO `bg_advice` VALUES ('45', '做的不错.继续努力完善功能哟.', '7', '陆弯', '1537093771');
INSERT INTO `bg_advice` VALUES ('46', '忘记了，雨真大啊', '10', '李哥', '1537143717');
INSERT INTO `bg_advice` VALUES ('47', '我是真的爱你，你知道吗？', '12', '李琼', '1537154797');
INSERT INTO `bg_advice` VALUES ('48', 'study sutbdf', '15', '小可爱12', '1537173678');
INSERT INTO `bg_advice` VALUES ('49', '英文系统也是可以支持的。。。。。', '4', '小可心', '1538376981');

-- ----------------------------
-- Table structure for bg_article
-- ----------------------------
DROP TABLE IF EXISTS `bg_article`;
CREATE TABLE `bg_article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '文章标题',
  `intro` varchar(255) NOT NULL DEFAULT '' COMMENT '文章简介',
  `content` text NOT NULL,
  `pubtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发布时间',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发布管理员id',
  `user_nickname` varchar(30) NOT NULL DEFAULT '' COMMENT '发布管理员昵称',
  `comment_num` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '评论数量',
  `cat_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '所属分类id',
  `cat_name` varchar(30) NOT NULL DEFAULT '' COMMENT '所属分类名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bg_article
-- ----------------------------
INSERT INTO `bg_article` VALUES ('1', 'PHP基础', 'php是基础，将有助于后面的学习，比如后端框架，以及前台的javascript', '<p><img alt=\"\" src=\"/Upload/ckfinder/images/2018/09/14/201809141153473887.jpg\" style=\"height:511px; width:582px\" /></p>', '1536897241', '1', '小小心', '1', '3', 'PHP基础');
INSERT INTO `bg_article` VALUES ('2', '变量', '变量:计算机内存用来存储数据的标识符', '<p>变量的声明:$变量名 = 变量值</p>\r\n\r\n<p>unset() 销毁变量</p>\r\n\r\n<p>PHP代码(查看页面源代码可以查看的到PHP代码执行的结果)</p>\r\n\r\n<p><img alt=\"\" src=\"/Upload/ckfinder/images/2018/09/14/201809141425273693.jpg\" style=\"height:289px; width:336px\" /></p>', '1536906331', '1', '小小心', '1', '9', 'PHP变量');
INSERT INTO `bg_article` VALUES ('11', 'CSS', '哈哈都很发达', '<p><img alt=\"\" src=\"/Upload/ckfinder/images/2018/09/17/201809171208597792.jpg\" style=\"height:200px; width:200px\" /></p>', '1537157344', '2', '小可爱', '1', '2', 'HTML+CSS');
INSERT INTO `bg_article` VALUES ('3', '常量', '常量:保存数据的载体,整个程序中,只能定义一次(不能改,不加$符号)', '<p>重复定义:constant path alreadly defined 错误信息</p>\r\n\r\n<p>常量和变量一样,直接拿来使用就可以print_r(常量)</p>\r\n\r\n<p><img alt=\"\" src=\"/Upload/ckfinder/images/2018/09/14/201809141427524314.png\" style=\"height:222px; width:295px\" /></p>', '1536906492', '2', '小可爱', '1', '9', 'PHP变量');
INSERT INTO `bg_article` VALUES ('4', '数据类型', '数据类型分类(三大类八小类)', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;整形int</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 浮点型 float&nbsp; 精确度有损失,小数是无穷尽的</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 字符串类型 string</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 布尔类型 bool</p>\r\n\r\n<p><img alt=\"\" src=\"/Upload/ckfinder/images/2018/09/16/201809161322176323.jpg\" style=\"height:200px; width:200px\" /></p>', '1536906604', '1', '小小心', '1', '10', 'PHP数组12');
INSERT INTO `bg_article` VALUES ('5', 'PHP错误级别', '内置的错误处理，也可自定义出发错误处理', '<p>1)编译时错误</p>\r\n\r\n<p>一般是语法错误,</p>\r\n\r\n<p>2)运行时错误</p>\r\n\r\n<p>变量未赋值,直接打印</p>\r\n\r\n<p>3)逻辑错误</p>\r\n\r\n<p>程序业务逻辑的错误,例如时间是负值,或金额</p>\r\n\r\n<p><img alt=\"\" src=\"/Upload/ckfinder/images/2018/09/16/201809161321438227.jpg\" style=\"height:200px; width:200px\" /></p>', '1536906725', '1', '小小心', '2', '11', 'PHP面向对象');
INSERT INTO `bg_article` VALUES ('6', '函数', '函数:具有特定功能的一段代码', '<p>function 函数名(){</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 函数体&nbsp; 或函数返回值</p>\r\n\r\n<p>}</p>\r\n\r\n<p>函数的调用:函数名()</p>\r\n\r\n<p>函数的结构是在编译时就已经确定,而调用操作是在程序执行到调用函数的代码时才生效的,所以,无论在定义前调用,还是在定义后调用,不会出现错误.</p>\r\n\r\n<p><img alt=\"\" src=\"/Upload/ckfinder/images/2018/09/16/201809161321113081.jpg\" style=\"height:200px; width:200px\" /></p>', '1536906809', '1', '小小心', '2', '11', 'PHP面向对象');
INSERT INTO `bg_article` VALUES ('7', '函数的返回值', 'return能将函数体内的数据进行提取', '<p>return能将函数体内的数据进行提取.其实相当于改变了其作用域(全局变量,局部变量)</p>\r\n\r\n<p>如果函数没有return,那么返回值将会是NULL值</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 函数引用值传递 参数里&amp;$var1,值都会改变</p>\r\n\r\n<p>一个函数中可以有多个return,只是说返回的结果只有一个return</p>\r\n\r\n<p><img alt=\"\" src=\"/Upload/ckfinder/images/2018/09/16/201809161320352176.jpg\" style=\"height:200px; width:200px\" /></p>', '1536906906', '3', '小宝贝', '2', '10', 'PHP数组12');
INSERT INTO `bg_article` VALUES ('8', '作用域', '全局作用域,但有的人很不习惯PHP中的变量作用域，PHP中函数变量和全局是完全隔绝的，也就是无法相互访问。我们可以使用global关键字来声明变量', '<p>全局作用域:函数体外部空间</p>\r\n\r\n<p>局部作用域:函数体内部的空间</p>\r\n\r\n<p>全局作用域与局部作用域不重叠(两者的数据不通用,不共享)</p>\r\n\r\n<p><img alt=\"\" src=\"/Upload/ckfinder/images/2018/09/16/201809161319509626.jpg\" style=\"height:200px; width:200px\" /></p>', '1536907538', '1', '小小心', '1', '10', 'PHP数组12');
INSERT INTO `bg_article` VALUES ('9', 'html解析', '如何强制让html代码进行解析', '<p>不知道啊，我是来看看的</p>\r\n\r\n<p><img alt=\"\" src=\"/Upload/ckfinder/images/2018/09/16/201809161254410656.jpg\" style=\"height:200px; width:200px\" /></p>', '1537073801', '1', '小小心', '2', '2', 'HTML+CSS');
INSERT INTO `bg_article` VALUES ('10', 'html解析的问题', '富文本框中的问题', '<p>真的不早</p>\r\n\r\n<p>不知道。怎么解决、</p>\r\n\r\n<p>寻求帮助</p>\r\n\r\n<p>&nbsp;</p>', '1537074033', '1', '小小心', '4', '2', 'HTML+CSS');

-- ----------------------------
-- Table structure for bg_category
-- ----------------------------
DROP TABLE IF EXISTS `bg_category`;
CREATE TABLE `bg_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL COMMENT '分类名称',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '上级分类ID，0表示顶级分类',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发布管理员id',
  `user_nickname` varchar(30) NOT NULL DEFAULT '' COMMENT '发布管理员昵称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bg_category
-- ----------------------------
INSERT INTO `bg_category` VALUES ('1', 'PHP', '0', '0', '');
INSERT INTO `bg_category` VALUES ('2', 'HTML+CSS', '0', '0', '');
INSERT INTO `bg_category` VALUES ('3', 'PHP基础', '1', '0', '');
INSERT INTO `bg_category` VALUES ('4', '微型MVC框架', '1', '0', '');
INSERT INTO `bg_category` VALUES ('5', '博客项目', '1', '0', '');
INSERT INTO `bg_category` VALUES ('6', '浮动', '2', '0', '');
INSERT INTO `bg_category` VALUES ('7', '表单', '2', '0', '');
INSERT INTO `bg_category` VALUES ('8', 'frame框架', '2', '0', '');
INSERT INTO `bg_category` VALUES ('9', 'PHP变量', '3', '0', '');
INSERT INTO `bg_category` VALUES ('10', 'PHP数组12', '3', '0', '');
INSERT INTO `bg_category` VALUES ('11', 'PHP面向对象', '3', '0', '');
INSERT INTO `bg_category` VALUES ('12', 'smarty模板技术', '4', '0', '');
INSERT INTO `bg_category` VALUES ('13', '自动加载', '4', '0', '');
INSERT INTO `bg_category` VALUES ('14', '登录', '5', '0', '');
INSERT INTO `bg_category` VALUES ('15', 'SESSION+COOKIE', '5', '0', '');
INSERT INTO `bg_category` VALUES ('16', '分类管理', '5', '0', '');
INSERT INTO `bg_category` VALUES ('17', '左右浮动', '6', '0', '');
INSERT INTO `bg_category` VALUES ('18', '绝对定位', '6', '0', '');
INSERT INTO `bg_category` VALUES ('19', '浮动的影响1', '6', '0', '');
INSERT INTO `bg_category` VALUES ('20', 'action', '7', '0', '');
INSERT INTO `bg_category` VALUES ('21', '属性', '7', '0', '');
INSERT INTO `bg_category` VALUES ('22', '文件上传', '7', '0', '');
INSERT INTO `bg_category` VALUES ('23', 'frame', '8', '0', '');
INSERT INTO `bg_category` VALUES ('24', 'iframe', '8', '0', '');
INSERT INTO `bg_category` VALUES ('27', 'session2344', '5', '2', '小可爱');
INSERT INTO `bg_category` VALUES ('29', 'sfdgsfsfdg', '12', '2', '小可爱');
INSERT INTO `bg_category` VALUES ('30', 'dsgfdg', '1', '2', '小可爱');
INSERT INTO `bg_category` VALUES ('31', '浮动25响1', '14', '2', '小可爱');
INSERT INTO `bg_category` VALUES ('32', '你的并且按', '0', '2', '小可爱');

-- ----------------------------
-- Table structure for bg_cat_yz
-- ----------------------------
DROP TABLE IF EXISTS `bg_cat_yz`;
CREATE TABLE `bg_cat_yz` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `yz_catname` varchar(20) DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `user_nickname` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bg_cat_yz
-- ----------------------------
INSERT INTO `bg_cat_yz` VALUES ('1', '工作经验', '1', '小小心');
INSERT INTO `bg_cat_yz` VALUES ('2', '算法设计', '3', '小宝贝');
INSERT INTO `bg_cat_yz` VALUES ('3', '人工智能', '1', '小小心');
INSERT INTO `bg_cat_yz` VALUES ('4', '安全', '2', '小可爱');
INSERT INTO `bg_cat_yz` VALUES ('5', '运维', '3', '小宝贝');

-- ----------------------------
-- Table structure for bg_comment
-- ----------------------------
DROP TABLE IF EXISTS `bg_comment`;
CREATE TABLE `bg_comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `post_date` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '评论时间',
  `article_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '所属文章ID',
  `article_title` varchar(50) NOT NULL DEFAULT '' COMMENT '所属文章标题',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户ID',
  `user_nickname` varchar(30) NOT NULL DEFAULT '' COMMENT '用户昵称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bg_comment
-- ----------------------------
INSERT INTO `bg_comment` VALUES ('1', '高富帅的各大富豪榜', '1537079500', '10', 'html解析的问题', '4', '小可心');
INSERT INTO `bg_comment` VALUES ('2', '好好学习，天天吃鸡。', '1537079825', '10', 'html解析的问题', '4', '小可心');
INSERT INTO `bg_comment` VALUES ('3', '查看富文本的记录吧', '1537080025', '10', 'html解析的问题', '1', '小小心');
INSERT INTO `bg_comment` VALUES ('4', '很性感哦，浏览器本身就会解析。。。。', '1537080086', '9', 'html解析', '1', '小小心');
INSERT INTO `bg_comment` VALUES ('5', '有没相关优质文档，可看的呀', '1537080159', '8', '作用域', '1', '小小心');
INSERT INTO `bg_comment` VALUES ('6', '函数里可以写多个return，但是只有一个返回的结果哟。', '1537080218', '7', '函数的返回值', '1', '小小心');
INSERT INTO `bg_comment` VALUES ('7', '函数是个好东西呀，目前正在努力学习它。。。。', '1537080266', '6', '函数', '1', '小小心');
INSERT INTO `bg_comment` VALUES ('8', '这个比较忧伤，没啥特别强大的特性，只能屏蔽，哈哈哈哈', '1537080318', '5', 'PHP错误级别', '1', '小小心');
INSERT INTO `bg_comment` VALUES ('9', '基础很重要的哈', '1537080352', '1', 'PHP基础', '1', '小小心');
INSERT INTO `bg_comment` VALUES ('10', '富文本框很丑的，你造吗？', '1537080419', '10', 'html解析的问题', '6', '小粉粉');
INSERT INTO `bg_comment` VALUES ('11', '放弃吧，就解决了呀。。', '1537080448', '9', 'html解析', '6', '小粉粉');
INSERT INTO `bg_comment` VALUES ('12', '沙发还给我，楼上你好坏。', '1537080480', '7', '函数的返回值', '6', '小粉粉');
INSERT INTO `bg_comment` VALUES ('13', '数据类型很重要奥，避免数据溢出，造成系统奔溃。', '1537080532', '4', '数据类型', '6', '小粉粉');
INSERT INTO `bg_comment` VALUES ('14', '常量好呀，MVC中比较多常量路径，用起来贼刺激。。。', '1537080597', '3', '常量', '6', '小粉粉');
INSERT INTO `bg_comment` VALUES ('15', '如果能帮我解决错误就完美咯', '1537080699', '5', 'PHP错误级别', '7', '陆弯');
INSERT INTO `bg_comment` VALUES ('16', '很像JAVA中的函数，可以写很多的功能呢，贼爽，贼蒙蔽。', '1537080766', '6', '函数', '7', '陆弯');
INSERT INTO `bg_comment` VALUES ('19', 'kedgdas', '1537173652', '11', 'CSS', '15', '小可爱12');
INSERT INTO `bg_comment` VALUES ('18', '母情节了，你还不好好努力真的是，变量就是存储数据的嘛。	母情节了，你还不好好努力真的是，变量就是存储数据的嘛。	母情节了，你还不好好努力真的是，变量就是存储数据的嘛。', '1537080852', '2', '变量', '7', '陆弯');

-- ----------------------------
-- Table structure for bg_user
-- ----------------------------
DROP TABLE IF EXISTS `bg_user`;
CREATE TABLE `bg_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `acc` varchar(50) NOT NULL DEFAULT '' COMMENT '帐号',
  `nickname` varchar(30) NOT NULL DEFAULT '' COMMENT '昵称',
  `pwd` char(32) NOT NULL DEFAULT '' COMMENT '密码',
  `sex` varchar(6) NOT NULL DEFAULT '' COMMENT '性别',
  `headimg` varchar(255) NOT NULL DEFAULT '' COMMENT '头像',
  `regtime` int(10) unsigned DEFAULT '0' COMMENT '注册时间',
  `type` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '用户类型 0:普通用户 1:管理员',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bg_user
-- ----------------------------
INSERT INTO `bg_user` VALUES ('1', 'admin', '小心蕊', '202cb962ac59075b964b07152d234b70', '女', 'public/admin/upload/img_5b9a4710d86af20180913191632_3942.jpg', '1536037872', '1');
INSERT INTO `bg_user` VALUES ('2', 'admin1', '小可爱', '202cb962ac59075b964b07152d234b70', '男', 'public/admin/upload/img_5b9a47e84707820180913192008_4926.jpg', '1536537872', '1');
INSERT INTO `bg_user` VALUES ('3', 'admin2', '小宝贝', '202cb962ac59075b964b07152d234b70', '女', 'public/admin/upload/img_5b9a48039218320180913192035_9119.jpg', '1536827878', '1');
INSERT INTO `bg_user` VALUES ('4', 'test1', '小可心', '202cb962ac59075b964b07152d234b70', '男', 'public/admin/upload/img_5b9a482053eff20180913192104_5444.jpg', '1530837872', '0');
INSERT INTO `bg_user` VALUES ('6', 'test2', '小粉粉', '202cb962ac59075b964b07152d234b70', '女', 'public/admin/upload/img_5b9a48f03d9f820180913192432_4316.jpg', '1536865282', '0');
INSERT INTO `bg_user` VALUES ('5', 'test3', '小河', '202cb962ac59075b964b07152d234b70', '男', 'public/admin/upload/img_5b9a48f03d9f820180913192432_4316.jpg', '1536837872', '0');
INSERT INTO `bg_user` VALUES ('7', 'test4', '陆弯', '202cb962ac59075b964b07152d234b70', '女', 'public/admin/upload/img_5b9a48f03d9f820180913192432_4316.jpg', '1536865282', '0');
INSERT INTO `bg_user` VALUES ('8', 'test5', '甜心', '202cb962ac59075b964b07152d234b70', '男', 'public/admin/upload/img_5b9a48f03d9f820180913192432_4316.jpg', '1536837872', '0');
INSERT INTO `bg_user` VALUES ('9', 'test6', '苏克', '202cb962ac59075b964b07152d234b70', '女', 'public/admin/upload/img_5b9a48f03d9f820180913192432_4316.jpg', '1536865282', '0');
INSERT INTO `bg_user` VALUES ('10', 'test7', '李哥', '202cb962ac59075b964b07152d234b70', '保密', 'public/admin/upload/img_5b9a48f03d9f820180913192432_4316.jpg', '1536837872', '0');
INSERT INTO `bg_user` VALUES ('11', 'test8', '小桑心', '202cb962ac59075b964b07152d234b70', '女', 'public/admin/upload/img_5b9a48f03d9f820180913192432_4316.jpg', '1536837872', '0');
INSERT INTO `bg_user` VALUES ('12', 'test9', '李琼', '202cb962ac59075b964b07152d234b70', '女', 'public/admin/upload/img_5b9a48f03d9f820180913192432_4316.jpg', '1536837872', '0');
INSERT INTO `bg_user` VALUES ('13', 'test10', '小星星', '202cb962ac59075b964b07152d234b70', '女', 'public/admin/upload/img_5b9efbda0012520180917085658_1491.png', '1537145818', '0');
INSERT INTO `bg_user` VALUES ('14', 'admin3', '测试哦', '202cb962ac59075b964b07152d234b70', '女', 'public/admin/upload/img_5b9f28968a2c920180917120750_710.jpg', '1537157270', '1');
INSERT INTO `bg_user` VALUES ('15', 'test12', '小可爱12', '202cb962ac59075b964b07152d234b70', '男', 'public/admin/upload/img_5b9f67f8ab6c320180917163816_3317.png', '1537173496', '0');

-- ----------------------------
-- Table structure for bg_yz_bw
-- ----------------------------
DROP TABLE IF EXISTS `bg_yz_bw`;
CREATE TABLE `bg_yz_bw` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `yz_title` varchar(50) DEFAULT NULL,
  `yz_intro` varchar(200) DEFAULT NULL,
  `yz_pic` varchar(100) DEFAULT NULL,
  `yz_content` text,
  `pubtime` int(11) DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `user_nickname` varchar(20) DEFAULT NULL,
  `cat_yz_id` int(11) DEFAULT NULL,
  `cat_yz_name` varchar(11) DEFAULT NULL,
  `enjoy` smallint(20) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bg_yz_bw
-- ----------------------------
INSERT INTO `bg_yz_bw` VALUES ('1', 'CSS3', 'CSS演进的一个主要变化就是W3C决定将CSS3分成一系列模块', 'public/admin/upload/img_5b9e701b429b920180916230043_6475.png', 'CSS3编程工具同CSS，任何一种文本编辑工具都可用来编写，如：Windows下的写字本、记事本；或其他专门用于编辑网页文本的工具 [28]  ，如：IntelliJ IDEA、Eclipse、MyEclipse、webstorm、sublime text；此外还有专门针对前端开发的插件，如：Emmet。', '1537110043', '10', '李哥', '1', '工作经验', '10');
INSERT INTO `bg_yz_bw` VALUES ('2', '设计算法', '设计算法、表示算法、确认算法、分析算法、验证算法。', 'public/admin/upload/img_5b9e70adf419b20180916230309_2830.jpg', '算法设计工作是不可能完全自动化的，应学习了解已经被实践证明有用的一些基本的算法设计方法，这些基本的设计方法不仅适用于计算机科学，而且适用于电气工程、运筹学等领域。设计算法的原则包括：正确性、可读性、健壮性、高效率与低存储量。', '1537110190', '10', '李哥', '2', '算法设计', '30');
INSERT INTO `bg_yz_bw` VALUES ('3', '网络运维', '指互联网运维，通常属于技术部门，与研发、测试、系统管理同为互联网产品技术支撑的4大部门', 'public/admin/upload/img_5b9e70f09abe320180916230416_1249.jpg', '对于初创公司，运维部和系统部一般是合二为一的，相关工作由同一批人负责，界限可能不是很明显。大型公司对运维工作的要求更高，需要有更精细的分工，因此机房/网络/操作系统相关的底层工作分离出来由专人负责，成为系统管理部，而上层和应用产品相关的工作则由运维负责，成为运维部。以下从互联网产品生命周期和运维涉及的技术分别来看分工较细的大型互联网公司中运维工作的职责。', '1537110256', '10', '李哥', '5', '运维', '45');
INSERT INTO `bg_yz_bw` VALUES ('4', '运维', '网络安全是指网络系统的硬件、软件及其系统中的数据受到保护，不因偶然的或者恶意的原因而遭受到破坏、更改、泄露，系统连续可靠正常地运行，网络服务不中断。', 'public/admin/upload/img_5b9e7137633e420180916230527_3184.jpg', '从网络运行和管理者角度说，希望对本地网络信息的访问、读写等操作受到保护和控制，避免出现“陷门”、病毒、非法存取、拒绝服务和网络资源非法占用和非法控制等威胁，制止和防御网络黑客的攻击。对安全保密部门来说，他们希望对非法的、有害的或涉及国家机密的信息进行过滤和防堵，避免机要信息泄露，避免对社会产生危害，对国家造成巨大损失。', '1537110327', '7', '陆弯', '5', '运维', '86');
INSERT INTO `bg_yz_bw` VALUES ('5', '人工智能', '人工智能 Artificial Intelligence，英文缩写为AI。', 'public/admin/upload/img_5b9e7160ada2f20180916230608_9493.jpg', '人工智能是计算机科学的一个分支，它企图了解智能的实质，并生产出一种新的能以人类智能相似的方式做出反应的智能机器，该领域的研究包括机器人、语言识别、图像识别、自然语言处理和专家系统等。人工智能从诞生以来，理论和技术日益成熟，应用领域也不断扩大，可以设想，未来人工智能带来的科技产品，将会是人类智慧的“容器”。人工智能可以对人的意识、思维的信息过程的模拟。人工智能不是人的智能，但能像人那样思考、也可能超过人的智能。', '1537110368', '10', '李哥', '3', '人工智能', '101');
INSERT INTO `bg_yz_bw` VALUES ('6', '算法目的', '设计算法的目的，一方面是为了让计算机执行，但还有一个重要的目的就是为了便于他人的阅读，让人理解和交流，自己将来也可阅读。如果可读性不好，时间长了自己都不知道写了什么，可读性是评判算法（也包括实现它的程序代码）好坏很重要的标志。可读性不好不仅无助于人们理解算法，晦涩难懂的算法往往隐含错误，不易被发现并且难以调试和修改。', 'public/admin/upload/img_5b9e721a5fb6720180916230914_9348.jpg', '高效率与低存储量\r\n通常，算法的效率指的是算法的执行时间；算法的存储量指的是算法执行过程中所需要的最大存储空间，两者的复杂度都与问题的规模有关。算法分析的任务是对设计的每一个具体的算法，利用数学工具，讨论其复杂度，探讨具体算法对问题的适应性。 [1]', '1537110554', '7', '陆弯', '2', '算法设计', '121');
INSERT INTO `bg_yz_bw` VALUES ('7', '信息安全', '可被授权实体访问并按需求使用的特性。即当需要时能否存取所需的信息。', 'public/admin/upload/img_5b9e70adf419b20180916230309_2830.jpg', '在系统处理能力提高的同时，系统的连接能力也在不断的提高。但在连接能力信息、流通能力提高的同时，基于网络连接的安全问题也日益突出，整体的网络安全主要表现在以下几个方面：网络的物理安全、网络拓扑结构安全、网络系统安全、应用系统安全和网络管理的安全等。', '1537110607', '10', '李哥', '4', '安全', '130');
INSERT INTO `bg_yz_bw` VALUES ('8', '数据安全', '可被授权实体访问并按需求使用的特性。即当需要时能否存取所需的信息。', 'public/admin/upload/img_5b9e725e862ad20180916231022_5245.jpg', '在系统处理能力提高的同时，系统的连接能力也在不断的提高。但在连接能力信息、流通能力提高的同时，基于网络连接的安全问题也日益突出，整体的网络安全主要表现在以下几个方面：网络的物理安全、网络拓扑结构安全、网络系统安全、应用系统安全和网络管理的安全等。', '1537110622', '10', '李哥', '4', '安全', '152');
INSERT INTO `bg_yz_bw` VALUES ('9', '产品维护', '容量管理：包括服务规模扩张后的资源评估、扩容、机房迁移、流量调度等规划和具体实施。', 'public/admin/upload/img_5b9e72b3e412820180916231147_6534.jpg', '故障处理：对服务出现的任何异常进行及时处理，尽可能避免问题的扩大化甚至中止服务。这之前运维工程师需要针对各类服务异常，如机房/网络故障、程序bug等问题制定处理的预案，问题出现时可以自动或手动执行预案达到止损的目的。除了日常小故障外，运维工程师还需要考虑产品不同程度受损情况下的灾难恢复，包括诸如地震等不可抗力导致大规模机房故障、在线产品被删除等对产品造成致命伤害的情况。', '1537110707', '7', '陆弯', '5', '运维', '148');
INSERT INTO `bg_yz_bw` VALUES ('10', '网络安全', '计算机安全问题，应该像每家每户的防火防盗问题一样，做到防范于未然', 'public/admin/upload/img_5b9e730167cfd20180916231305_480.jpg', '2014年全球网络安全市场规模有望达到956亿美元（约合人民币5951.3亿元），并且在未来5年，年复合增长率达到10.3%，到2019年，这一数据有望触及1557.4亿美元（约合人民币9695.1亿元）。其中，到2019年，全球无线网络安全市场规模将达到155.5亿美元（约合人民币969.3亿元），年复合增长率约12.94%。\r\n从行业来看，航空航天、国防等领域仍将是网络安全市场的主要推动力量。从地区收益来看，北美地区将是最大的市场。同时，亚太地区、中东和非洲地区有望在一定的时机呈现更大的增长速度。', '1537110785', '7', '陆弯', '4', '安全', '90');
INSERT INTO `bg_yz_bw` VALUES ('11', '人工智能的用途', '人工智能在计算机领域内，得到了愈加广泛的重视。并在机器人，经济政治决策，控制系统，仿真系统中得到应用。', 'public/admin/upload/img_5b9e733d8adab20180916231405_5614.png', '人工智能是一门极富挑战性的科学，从事这项工作的人必须懂得计算机知识，心理学和哲学。人工智能是包括十分广泛的科学，它由不同的领域组成，如机器学习，计算机视觉等等，总的说来，人工智能研究的一个主要目标是使机器能够胜任一些通常需要人类智能才能完成的复杂工作。但不同的时代、不同的人对这种“复杂工作”的理解是不同的。 [1]  2017年12月，人工智能入选“2017年度中国媒体十大流行语”。 [2]', '1537110845', '7', '陆弯', '3', '人工智能', '104');
INSERT INTO `bg_yz_bw` VALUES ('13', '安全', '系统安全很重要的哦', 'public/admin/upload/img_5b9f1ed55588520180917112613_4663.jpg', '系统安全很重要的哦', '1537154773', '12', '李琼', '4', '安全', '0');
INSERT INTO `bg_yz_bw` VALUES ('14', '安全', '震惊！ 黑历史！', 'public/admin/upload/img_5b9f66e8092cf20180917163344_966.jpg', '震惊！ 黑历史！震惊！ 黑历史！震惊！ 黑历史！震惊！ 黑历史！震惊！ 黑历史！', '1537173224', '4', '小可心', '4', '安全', '1');
