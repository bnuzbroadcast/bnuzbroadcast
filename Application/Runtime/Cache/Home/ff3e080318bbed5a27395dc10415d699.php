<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
		<title>栏目</title>
		<link rel="stylesheet" href="/bnuzbroadcast/Public/css/bootstrap.min.css">
		<link rel="stylesheet" href="/bnuzbroadcast/Public/css/style.css">
	</head>

	<body style="background-color: #f4f4f4;">

		<!-- 导航 -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a href="<?php echo U('Home/index/index');?>" class="navbar-brand logo"><img src="/bnuzbroadcast/Public/img/logo.png" alt="师大之音"></a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" style="border: none;">
						<img src="/bnuzbroadcast/Public/img/menu-icon.png" alt="" />
					</button>
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="index.html">师大之音</a></li>
						<li><a href="<?php echo U('Home/activity/index');?>">品牌活动</a></li>
						<li><a href="<?php echo U('Home/lanmu/index');?>">往期节目</a></li>
						<li><a href="#">校内公告</a></li>
						<li><a href="<?php echo U('Home/host/index');?>">校主持队</a></li>
						<li><a href="<?php echo U('Home/play/index');?>">在线收听</a></li>
						<li><a href="<?php echo U('Home/login/index');?>">登陆</a></li>
						<li><a href="<?php echo U('Home/signup/index');?>">注册</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<div style="margin-top: 60px;">
			<img src="/bnuzbroadcast/Public/img/feichangd.png" class="img-responsive center-block"  />
		</div>
	
	
		<div class="tab13">
			<div class="container" style="background-color: #fff;text-align: center;padding-bottom: 20px;">
			<h5 class="tab-h5">栏目简介</h5>
			<p class="tab-p1" style="background-color: #ccebf5;padding-top: 20px;padding-bottom: 20px;">新闻一直以来都是播音节目中不可缺少的一部分，因此“新闻非常道”也就有了别的栏目不可替代的地位。<br />《新闻非常道》于每周一晚间播出，目前的节目内容主要包括校内新闻、校外新闻、热点搜索（一件热点事<br />件展开探讨）以及关于历史今日四个板块。“新闻非常道”欢迎所有对新闻和时政社会热点感兴趣的同学加<br />入哟～</p>
			</div>
		</div>
	
	
	
		<div class="tab14">
			<div class="container" style="background-color: #fff;padding-bottom: 20px;">
				<h5 class="tab-h5" style="margin-bottom: 30px;text-align: center;">往期节目</h5>
				<div class="row">
					<div class="col-md-6">
						<img src="/bnuzbroadcast/Public/img/pastshow1.png" class="img-responsive center-block" alt="" />
					</div>
					<div class="col-md-6">
						<img src="/bnuzbroadcast/Public/img/pastshow2.png" class="img-responsive center-block" alt="" />
					</div>
				</div>
				<div style="background-color: #b6e2f0;margin-top: 30px;margin-bottom: 30px;">
					<h4 class="tab-h4" style="padding-left: 30px;float: left;">YEAR</h4>
					<input type="button"  onclick="shownew1()" value="2016"  style="float: left;"/>
					<input type="button"  onclick="shownew2()" value="2015"  style="float: left;"/>
					<input type="button"   value="2014"  style="float: left;"/>
					<input type="button"   value="2013"  style="float: left;"/>
					<div class="clear"></div>
				</div>
				
				<div id="new2016">
					<h5 class="tab-h5">四月</h5>
					<div class="row">
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
					</div>
					
					<h5 class="tab-h5">三月</h5>
					<div class="row">
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
					</div>
					
					<h5 class="tab-h5">二月</h5>
					<div class="row">
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
					</div>
					
					<h5 class="tab-h5">一月</h5>
					<div class="row">
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
					</div>
				</div>
				
				
				<div id="new2015" style="display: none;">
					<h5 class="tab-h5">四月1</h5>
					<div class="row">
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
					</div>
					
					<h5 class="tab-h5">三月1</h5>
					<div class="row">
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
					</div>
					
					<h5 class="tab-h5">二月1</h5>
					<div class="row">
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
					</div>
					
					<h5 class="tab-h5">一月1</h5>
					<div class="row">
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
						<div class="col-sm-3">
							<img src="/bnuzbroadcast/Public/img/new1.png" class="img-responsive center-block"/>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>

		<!--底部-->
		<div class="container">
			<footer>
				<p class="footer-p" style="border-bottom: 5px solid #999;padding-bottom: 30px;">广天下之事·播百家之言</p>
				<p class="tab-p1" style="text-align: center;color: #666;margin-top: 20px;font-size: 18px;">北京师范大学珠海分校师大之音广播台 版权所有<br />地址：广东省珠海市唐家湾镇金凤路18号北京师范大学珠海分校粤华三栋 邮编：519000</p>
			</footer>
		</div>

		<script src="/bnuzbroadcast/Public/js/jquery.min.js"></script>
		<script src="/bnuzbroadcast/Public/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			function shownew1(){
				var new1 = document.getElementById('new2016');
				new1.style.display = "block";
				var new2 = document.getElementById('new2015');
				new2.style.display = "none";
			}
			function shownew2(){
				var new1 = document.getElementById('new2016');
				new1.style.display = "none";
				var new2 = document.getElementById('new2015');
				new2.style.display = "block";
			}
		</script>
	</body>

</html>