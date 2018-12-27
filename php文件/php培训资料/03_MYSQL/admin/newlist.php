<?php
  date_default_timezone_set('PRC'); 
  // 1.连接MySQL
  mysql_connect('localhost','root','root');
  //2. 打开 cms 数据库
  mysql_select_db('cms');
  // 客户端编码
  mysql_query('set names utf8');
  //3. SQL语句  查询
  $sql = "select id,title,addtime from cms_news order by id desc";
  //4. 执行 SQL语句  --返回结果集
  $rs = mysql_query($sql);
  //5.通过循环将结果集一行一行将结果集转为二维数组
  while($row=mysql_fetch_assoc($rs)){
  	  $arr[] = $row;
  }
  //6. 释放结果集
  if($rs){
  	 mysql_free_result($rs);
  }
  //7. 关闭数据库
  mysql_close();
?>
<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>后台首页</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="css/dashboard.css" rel="stylesheet"/>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" style="font-family:微软雅黑;font-weight:bold;color:#fff">CMS新闻管理系统</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
        <li>
           <form class="navbar-form navbar-left" role="search">
	        <div class="form-group  has-feedback">
	          <input type="text" class="form-control" placeholder="内容">
	          <span class="glyphicon glyphicon-search form-control-feedback"></span>
	        </div>
	        <button type="submit" class="btn btn-default">搜索</button>
           </form>
        </li>
        <li><a href="#">退出</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">系统管理员<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">个人信息</a></li>
            <li class="divider"></li>
            <li><a href="#">修改密码</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- 主体内容 -->
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">新闻管理</a></li>
            <li><a href="newlist.php">新闻列表</a></li>
            <li><a href="#">新闻添加</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">新闻分类管理</a></li>
            <li><a href="#">分类列表</a></li>
            <li><a href="#">分类添加</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">系统管理员管理</a></li>
            <li><a href="#">系统管理员列表</a></li>
            <li><a href="#">修改密码</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">会员管理</a></li>
            <li><a href="#">会员管理列表</a></li>
            <li><a href="#">会员管理修改密码</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">显示新闻</h1>
            <div class="table-responsive">
			<table class="table table-striped">
			   <thead>
			      <tr>
			         <th>编码</th>
			         <th>标题</th>
			         <th>发布时间</th>
			         <th>操作</th>
			      </tr>
			   </thead>
			   <tbody>
			     <?php 
			       foreach($arr as $v){
			     ?>
			     <tr>
			         <td><?php echo $v['id']?></td>
			         <td><?php echo $v['title']?></td>
			         <td><?php echo date('Y-m-d H:i:s',$v['addtime'])?></td>
			         <td><button type="button" class="btn btn-primary btn-xs">修改</button> <button type="button" class="btn btn-danger btn-xs">删除</button></td>
			      </tr>
			     <?php  	
			       }
			     ?>
			      
			      
			   </tbody>
		    </table>
</div>
        </div>   
      </div>
</div>    
    
    
    
    
    
    
    
    
    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>