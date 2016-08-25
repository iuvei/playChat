<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<!-- 这里放共用head文件头,js,或者css -->
<title>标题</title>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=no">
<script type="text/javascript" src="/playChat/Public/Home/js/jquery-1.10.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="/playChat/Public/Home/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/playChat/Public/Home/font/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/playChat/Public/Home/css/playchat.css">
<script type="text/javascript" src="/playChat/Public/Home/js/bootstrap.min.js"></script>

	
    <!-- 这里可以放一些需要在公共head中追加的代码,比如css代码,引入其他页面不需要的css文件,或者js文件 -->

</head>
<body>
	<!-- 头部 -->
	<!-- 这里可以放导航条,也可以放其他 -->


	
	<!-- /头部 -->
	
	<!-- 主体 -->
	
    <!--这里放置正文代码-&#45;&#45;index-->
    <div class="container-fluid">
        <!--内部会议直播-->
        <div class="bt bt2">
            <button class="btn btn-default">选择直播类型</button>
            <p>选择后不能更改</p>
        </div>
        <div class="row">
            <div class="col-xs-4">
                <a href="public_play.html">
                <h4>公开直播</h4>
                <div><img src="/playChat/Public/Home/images/gongkaizhibo.png"></div>
                    </a>
            </div>
            <div class="col-xs-4">
                <a href="pay_play.html">
                <h4>收费直播</h4>
                <div><img src="/playChat/Public/Home/images/shouferizhibo.png"></div>
                    </a>
            </div>
            <div class="col-xs-4">
                <a href="into_meeting.html">
                <h4>内部会议</h4>
                <div><img src="/playChat/Public/Home/images/neibu1.png"></div>
                    </a>
                <p>
                    <img src="/playChat/Public/Home/images/sanjiao.png">
                </p>
            </div>
        </div>
        <!--设置密码话题密码-->
        <div class="all">
            <p>设置密码</p>
            <form class="form-inline">
                <div class="form-group">

                        <input type="password" class="form-control" id="exampleInputAmount" placeholder="支持中文、英文不区分大小">

                </div>
            </form>
        </div>
        <!--话题设置-->
        <div class="tab">
            <a href="#">
                <div class="pull-left">本期话题</div>
                <div class="pull-right">你说我们要成功</div>
            </a>
        </div>
        <div class="tab">
            <a href="#">
                <div class="pull-left">开始时间</div>
                <div class="pull-right">你说我们要成功</div>
            </a>
        </div>
        <div class="tab" id="tab">
            <a href="#">
                <div class="pull-left">话题介绍</div>
                <div class="pull-right">你说我们要成功</div>
            </a>
        </div>
        <div class="bt bt3">
            <button class="btn btn-default">下一步</button>
        </div>
    </div>



	<!-- /主体 -->

	<!-- 底部 -->
	<!-- 这里放置共用页脚代码 -->
	

	
	<!-- /底部 -->
</body>
</html>