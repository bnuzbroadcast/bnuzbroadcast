<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
		<title>主持人页</title>
		<link rel="stylesheet" href="/bnuzbroadcast/Public/css/bootstrap.min.css">
		<link rel="stylesheet" href="/bnuzbroadcast/Public/css/style.css">
	</head>
	<body style="background-color: #d8d7d7;">
		
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

		<div style="margin-top: 90px;">
			 <div class="container">
			 	<div class="row">
			 		<div class="col-sm-5" >
			 			<img src="/bnuzbroadcast/Public/img/smm4.png" data-target="#myCarousel" data-slide-to="3" alt="" onclick="host4()"  class="m2"/>
			 			<img src="/bnuzbroadcast/Public/img/smm3.png" data-target="#myCarousel" data-slide-to="2" alt="" onclick="host3()"  class="m2"/>
			 			<img src="/bnuzbroadcast/Public/img/smm2.png" data-target="#myCarousel" data-slide-to="1" alt="" onclick="host2()"  class="m2"/>
			 			<img src="/bnuzbroadcast/Public/img/smm1.png" data-target="#myCarousel" data-slide-to="0" alt="" onclick="host1()"  class="m2"/>
			 		</div>
			 		<div class="col-sm-5" >
			 			<img src="/bnuzbroadcast/Public/img/smm5.png" data-target="#myCarousel" data-slide-to="4" alt="" onclick="host5()"  class="m1"/>
			 			<img src="/bnuzbroadcast/Public/img/smm6.png" data-target="#myCarousel" data-slide-to="5" alt="" onclick="host6()"  class="m1"/>
			 			<img src="/bnuzbroadcast/Public/img/smm7.png" data-target="#myCarousel" data-slide-to="6" alt="" onclick="host7()"  class="m1"/>
			 			<img src="/bnuzbroadcast/Public/img/smm8.png" data-target="#myCarousel" data-slide-to="7" alt="" onclick="host8()"  class="m1"/>
			 		</div>
			 	</div>
			 	<div class="row">
			 		<div class="col-sm-2"></div>
			 		<div class="col-sm-5" >
			 			<img src="/bnuzbroadcast/Public/img/smm12.png" data-target="#myCarousel" data-slide-to="8" alt=""  onclick="host12()" class="m2"/>
			 			<img src="/bnuzbroadcast/Public/img/smm11.png" data-target="#myCarousel" data-slide-to="9" alt=""  onclick="host11()" class="m2"/>
			 			<img src="/bnuzbroadcast/Public/img/smm10.png" data-target="#myCarousel" data-slide-to="10" alt=""  onclick="host10()" class="m2"/>
			 			<img src="/bnuzbroadcast/Public/img/smm9.png"  data-target="#myCarousel" data-slide-to="11"  alt=""  onclick="host9()" class="m2"/>
			 		</div>
			 		<div class="col-sm-5" >
			 			<img src="/bnuzbroadcast/Public/img/smm13.png" data-target="#myCarousel" data-slide-to="12" alt=""  onclick="host13()" class="m1"/>
			 			<img src="/bnuzbroadcast/Public/img/smm14.png" data-target="#myCarousel" data-slide-to="13" alt=""  onclick="host14()" class="m1"/>
			 			<img src="/bnuzbroadcast/Public/img/smm15.png" data-target="#myCarousel" data-slide-to="14" alt=""  onclick="host15()" class="m1"/>
			 			<img src="/bnuzbroadcast/Public/img/smm16.png" data-target="#myCarousel" data-slide-to="15" alt=""  onclick="host16()" class="m1"/>
			 		</div>
			 	</div>
			 </div>
		</div>


		<!--轮播-->
		<div id="myCarousel" class="carousel slide"  style="margin-top: 60px;">
			
			<div class="container">
			<div class="carousel-inner">
				
				<!--主持人1-->
				<div class="item active">
					<div class="row">
						<div class="col-md-7">
							<img src="/bnuzbroadcast/Public/img/lgm1.png" class="img-responsive center-block"/>
						</div>
						<div class="col-md-5" style="text-align: center;">
							<h2 class="tab-h2">校主持队队长</h2>
							<img src="/bnuzbroadcast/Public/img/mdm1.png" class="img-responsive center-block"/>
							<h3 class="tab-h3">马宇晴</h3>
							<p class="tab-p1" style="border-bottom: 5px solid #6ab3a7;padding-bottom: 15px;">身高:169cm <br /> 播音与主持艺术 <br /> 职位:队长 </p>
							<div class="more">
								<a href="" style="margin-right: 30px;"><input type="button" style="font-size: 20px;" value="活动邀约"></a>
								<img src="/bnuzbroadcast/Public/img/like.png" />
								<img src="/bnuzbroadcast/Public/img/comment.png" />
							</div>
						</div>
					</div>
				</div>
				
				<!--主持人2-->
				<div class="item">
					<div class="row">
						<div class="col-md-7">
							<img src="/bnuzbroadcast/Public/img/lgm2.png" class="img-responsive center-block"/>
						</div>
						<div class="col-md-5" style="text-align: center;">
							<h2 class="tab-h2">校主持队队员</h2>
							<img src="/bnuzbroadcast/Public/img/mdm2.png" class="img-responsive center-block"/>
							<h3 class="tab-h3">李玲慧</h3>
							<p class="tab-p1" style="border-bottom: 5px solid #6ab3a7;padding-bottom: 15px;">身高:165cm <br /> 服装与服饰设计<br /> 职位:队员 </p>
							<div class="more">
								<a href="" style="margin-right: 30px;"><input type="button" style="font-size: 20px;" value="活动邀约"></a>
								<img src="/bnuzbroadcast/Public/img/like.png" />
								<img src="/bnuzbroadcast/Public/img/comment.png" />
							</div>
						</div>
					</div>
				</div>
				
				<!--主持人3-->
				<div class="item">
					<div class="row">
						<div class="col-md-7">
							<img src="/bnuzbroadcast/Public/img/lgm3.png" class="img-responsive center-block"/>
						</div>
						<div class="col-md-5" style="text-align: center;">
							<h2 class="tab-h2">校主持队队员</h2>
							<img src="/bnuzbroadcast/Public/img/mdm3.png" class="img-responsive center-block"/>
							<h3 class="tab-h3">冯佳</h3>
							<p class="tab-p1" style="border-bottom: 5px solid #6ab3a7;padding-bottom: 15px;">身高:169cm <br /> 播音与主持艺术 <br /> 职位:队员 </p>
							<div class="more">
								<a href="" style="margin-right: 30px;"><input type="button" style="font-size: 20px;" value="活动邀约"></a>
								<img src="/bnuzbroadcast/Public/img/like.png" />
								<img src="/bnuzbroadcast/Public/img/comment.png" />
							</div>
						</div>
					</div>
				</div>
				
				<!--主持人4-->
					<div class="item">
					<div class="row">
						<div class="col-md-7">
							<img src="/bnuzbroadcast/Public/img/lgm4.png" class="img-responsive center-block"/>
						</div>
						<div class="col-md-5" style="text-align: center;">
							<h2 class="tab-h2">校主持队队员</h2>
							<img src="/bnuzbroadcast/Public/img/mdm4.png" class="img-responsive center-block"/>
							<h3 class="tab-h3">林晶晗</h3>
							<p class="tab-p1" style="border-bottom: 5px solid #6ab3a7;padding-bottom: 15px;">身高:172cm <br /> 播音与主持艺术 <br /> 职位:队员 </p>
							<div class="more">
								<a href="" style="margin-right: 30px;"><input type="button" style="font-size: 20px;" value="活动邀约"></a>
								<img src="/bnuzbroadcast/Public/img/like.png" />
								<img src="/bnuzbroadcast/Public/img/comment.png" />
							</div>
						</div>
					</div>
				</div>
				
				<!--主持人5-->
					<div class="item">
					<div class="row">
						<div class="col-md-7">
							<img src="/bnuzbroadcast/Public/img/lgm5.png" class="img-responsive center-block"/>
						</div>
						<div class="col-md-5" style="text-align: center;">
							<h2 class="tab-h2">校主持队队员</h2>
							<img src="/bnuzbroadcast/Public/img/mdm5.png" class="img-responsive center-block"/>
							<h3 class="tab-h3">谭湘雯</h3>
							<p class="tab-p1" style="border-bottom: 5px solid #6ab3a7;padding-bottom: 15px;">身高:168cm <br /> 播音与主持艺术 <br /> 职位:队员 </p>
							<div class="more">
								<a href="" style="margin-right: 30px;"><input type="button" style="font-size: 20px;" value="活动邀约"></a>
								<img src="/bnuzbroadcast/Public/img/like.png" />
								<img src="/bnuzbroadcast/Public/img/comment.png" />
							</div>
						</div>
					</div>
				</div>
				
				<!--主持人6-->
					<div class="item">
					<div class="row">
						<div class="col-md-7">
							<img src="/bnuzbroadcast/Public/img/lgm6.png" class="img-responsive center-block"/>
						</div>
						<div class="col-md-5" style="text-align: center;">
							<h2 class="tab-h2">校主持队队员</h2>
							<img src="/bnuzbroadcast/Public/img/mdm6.png" class="img-responsive center-block"/>
							<h3 class="tab-h3">成栩莹</h3>
							<p class="tab-p1" style="border-bottom: 5px solid #6ab3a7;padding-bottom: 15px;">身高:162cm <br /> 英语-国际汉语教育 双专 <br /> 职位:队员 </p>
							<div class="more">
								<a href="" style="margin-right: 30px;"><input type="button" style="font-size: 20px;" value="活动邀约"></a>
								<img src="/bnuzbroadcast/Public/img/like.png" />
								<img src="/bnuzbroadcast/Public/img/comment.png" />
							</div>
						</div>
					</div>
				</div>
				
				<!--主持人7-->
					<div class="item">
					<div class="row">
						<div class="col-md-7">
							<img src="/bnuzbroadcast/Public/img/lgm7.png" class="img-responsive center-block"/>
						</div>
						<div class="col-md-5" style="text-align: center;">
							<h2 class="tab-h2">校主持队队员</h2>
							<img src="/bnuzbroadcast/Public/img/mdm7.png" class="img-responsive center-block"/>
							<h3 class="tab-h3">赵俊</h3>
							<p class="tab-p1" style="border-bottom: 5px solid #6ab3a7;padding-bottom: 15px;">身高:163cm <br /> 汉语言文学 <br /> 职位:队员 </p>
							<div class="more">
								<a href="" style="margin-right: 30px;"><input type="button" style="font-size: 20px;" value="活动邀约"></a>
								<img src="/bnuzbroadcast/Public/img/like.png" />
								<img src="/bnuzbroadcast/Public/img/comment.png" />
							</div>
						</div>
					</div>
				</div>
				
				
				<!--主持人8-->
					<div class="item">
					<div class="row">
						<div class="col-md-7">
							<img src="/bnuzbroadcast/Public/img/lgm8.png" class="img-responsive center-block"/>
						</div>
						<div class="col-md-5" style="text-align: center;">
							<h2 class="tab-h2">校主持队队员</h2>
							<img src="/bnuzbroadcast/Public/img/mdm8.png" class="img-responsive center-block"/>
							<h3 class="tab-h3">郝晨欣</h3>
							<p class="tab-p1" style="border-bottom: 5px solid #6ab3a7;padding-bottom: 15px;">身高:164cm <br /> 播音与主持艺术 <br /> 职位:队员 </p>
							<div class="more">
								<a href="" style="margin-right: 30px;"><input type="button" style="font-size: 20px;" value="活动邀约"></a>
								<img src="/bnuzbroadcast/Public/img/like.png" />
								<img src="/bnuzbroadcast/Public/img/comment.png" />
							</div>
						</div>
					</div>
				</div>
				
				
				<!--主持人9-->
					<div class="item">
					<div class="row">
						<div class="col-md-7">
							<img src="/bnuzbroadcast/Public/img/lgm9.png" class="img-responsive center-block"/>
						</div>
						<div class="col-md-5" style="text-align: center;">
							<h2 class="tab-h2">校主持队副队长</h2>
							<img src="/bnuzbroadcast/Public/img/mdm9.png" class="img-responsive center-block"/>
							<h3 class="tab-h3">潘志航</h3>
							<p class="tab-p1" style="border-bottom: 5px solid #6ab3a7;padding-bottom: 15px;">身高:181cm <br /> 播音与主持艺术 <br /> 职位:副队长 </p>
							<div class="more">
								<a href="" style="margin-right: 30px;"><input type="button" style="font-size: 20px;" value="活动邀约"></a>
								<img src="/bnuzbroadcast/Public/img/like.png" />
								<img src="/bnuzbroadcast/Public/img/comment.png" />
							</div>
						</div>
					</div>
				</div>
				
				
				<!--主持人10-->
					<div class="item">
					<div class="row">
						<div class="col-md-7">
							<img src="/bnuzbroadcast/Public/img/lgm10.png" class="img-responsive center-block"/>
						</div>
						<div class="col-md-5" style="text-align: center;">
							<h2 class="tab-h2">校主持队副队长</h2>
							<img src="/bnuzbroadcast/Public/img/mdm10.png" class="img-responsive center-block"/>
							<h3 class="tab-h3">申博扬</h3>
							<p class="tab-p1" style="border-bottom: 5px solid #6ab3a7;padding-bottom: 15px;">身高:178cm <br /> 传播学 <br /> 职位:副队长 </p>
							<div class="more">
								<a href="" style="margin-right: 30px;"><input type="button" style="font-size: 20px;" value="活动邀约"></a>
								<img src="/bnuzbroadcast/Public/img/like.png" />
								<img src="/bnuzbroadcast/Public/img/comment.png" />
							</div>
						</div>
					</div>
				</div>
				
				
				<!--主持人11-->
					<div class="item">
					<div class="row">
						<div class="col-md-7">
							<img src="/bnuzbroadcast/Public/img/lgm11.png" class="img-responsive center-block"/>
						</div>
						<div class="col-md-5" style="text-align: center;">
							<h2 class="tab-h2">校主持队队员</h2>
							<img src="/bnuzbroadcast/Public/img/mdm11.png" class="img-responsive center-block"/>
							<h3 class="tab-h3">张宇辉</h3>
							<p class="tab-p1" style="border-bottom: 5px solid #6ab3a7;padding-bottom: 15px;">身高:169cm <br /> 播音与主持艺术 <br /> 职位:队员 </p>
							<div class="more">
								<a href="" style="margin-right: 30px;"><input type="button" style="font-size: 20px;" value="活动邀约"></a>
								<img src="/bnuzbroadcast/Public/img/like.png" />
								<img src="/bnuzbroadcast/Public/img/comment.png" />
							</div>
						</div>
					</div>
				</div>
				
				
				<!--主持人12-->
					<div class="item">
					<div class="row">
						<div class="col-md-7">
							<img src="/bnuzbroadcast/Public/img/lgm12.png" class="img-responsive center-block"/>
						</div>
						<div class="col-md-5" style="text-align: center;">
							<h2 class="tab-h2">校主持队队员</h2>
							<img src="/bnuzbroadcast/Public/img/mdm12.png" class="img-responsive center-block"/>
							<h3 class="tab-h3">林钧和</h3>
							<p class="tab-p1" style="border-bottom: 5px solid #6ab3a7;padding-bottom: 15px;">身高:169cm <br /> 播音与主持艺术 <br /> 职位:队员 </p>
							<div class="more">
								<a href="" style="margin-right: 30px;"><input type="button" style="font-size: 20px;" value="活动邀约"></a>
								<img src="/bnuzbroadcast/Public/img/like.png" />
								<img src="/bnuzbroadcast/Public/img/comment.png" />
							</div>
						</div>
					</div>
				</div>
				
				
				<!--主持人13-->
					<div class="item">
					<div class="row">
						<div class="col-md-7">
							<img src="/bnuzbroadcast/Public/img/lgm13.png" class="img-responsive center-block"/>
						</div>
						<div class="col-md-5" style="text-align: center;">
							<h2 class="tab-h2">校主持队队员</h2>
							<img src="/bnuzbroadcast/Public/img/mdm13.png" class="img-responsive center-block"/>
							<h3 class="tab-h3">方良文</h3>
							<p class="tab-p1" style="border-bottom: 5px solid #6ab3a7;padding-bottom: 15px;">身高:180cm <br /> 播音与主持艺术 <br /> 职位:队员 </p>
							<div class="more">
								<a href="" style="margin-right: 30px;"><input type="button" style="font-size: 20px;" value="活动邀约"></a>
								<img src="/bnuzbroadcast/Public/img/like.png" />
								<img src="/bnuzbroadcast/Public/img/comment.png" />
							</div>
						</div>
					</div>
				</div>
				
				
				<!--主持人14-->
					<div class="item">
					<div class="row">
						<div class="col-md-7">
							<img src="/bnuzbroadcast/Public/img/lgm14.png" class="img-responsive center-block"/>
						</div>
						<div class="col-md-5" style="text-align: center;">
							<h2 class="tab-h2">校主持队队员</h2>
							<img src="/bnuzbroadcast/Public/img/mdm14.png" class="img-responsive center-block"/>
							<h3 class="tab-h3">刘银寺</h3>
							<p class="tab-p1" style="border-bottom: 5px solid #6ab3a7;padding-bottom: 15px;">身高:183cm <br /> 播音与主持艺术 <br /> 职位:队员 </p>
							<div class="more">
								<a href="" style="margin-right: 30px;"><input type="button" style="font-size: 20px;" value="活动邀约"></a>
								<img src="/bnuzbroadcast/Public/img/like.png" />
								<img src="/bnuzbroadcast/Public/img/comment.png" />
							</div>
						</div>
					</div>
				</div>
				
				
				<!--主持人15-->
					<div class="item">
					<div class="row">
						<div class="col-md-7">
							<img src="/bnuzbroadcast/Public/img/lgm15.png" class="img-responsive center-block"/>
						</div>
						<div class="col-md-5" style="text-align: center;">
							<h2 class="tab-h2">校主持队队员</h2>
							<img src="/bnuzbroadcast/Public/img/mdm15.png" class="img-responsive center-block"/>
							<h3 class="tab-h3">杨力帆</h3>
							<p class="tab-p1" style="border-bottom: 5px solid #6ab3a7;padding-bottom: 15px;">身高:178cm <br /> 播音与主持艺术 <br /> 职位:队员 </p>
							<div class="more">
								<a href="" style="margin-right: 30px;"><input type="button" style="font-size: 20px;" value="活动邀约"></a>
								<img src="/bnuzbroadcast/Public/img/like.png" />
								<img src="/bnuzbroadcast/Public/img/comment.png" />
							</div>
						</div>
					</div>
				</div>
				
				
				<!--主持人16-->
					<div class="item">
					<div class="row">
						<div class="col-md-7">
							<img src="/bnuzbroadcast/Public/img/lgm16.png" class="img-responsive center-block"/>
						</div>
						<div class="col-md-5" style="text-align: center;">
							<h2 class="tab-h2">校主持队队员</h2>
							<img src="/bnuzbroadcast/Public/img/mdm16.png" class="img-responsive center-block"/>
							<h3 class="tab-h3">孙铭泽</h3>
							<p class="tab-p1" style="border-bottom: 5px solid #6ab3a7;padding-bottom: 15px;">身高:180cm <br /> 播音与主持艺术 <br /> 职位:队员 </p>
							<div class="more">
								<a href="" style="margin-right: 30px;"><input type="button" style="font-size: 20px;" value="活动邀约"></a>
								<img src="/bnuzbroadcast/Public/img/like.png" />
								<img src="/bnuzbroadcast/Public/img/comment.png" />
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		</div>
		
		
		<!--评论-->
		<div id="d1" class="container" style="margin-top: 80px;">
			<div class="row">
				<div class="col-md-12">
						<div class="liuyan" style="padding: 10px 10px 0 10px;margin-bottom: 30px;">
							<h5 class="tab-h5">添加评论</h5>
							<div>
								<textarea id="content1" rows="6"></textarea>
								<input type="button" class="fabiao" onclick="addContent1()" value="发表" />
								<div class="clear"></div>
							</div>
						</div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div id="layer1"></div>
				</div>
			</div>
		</div>
		
		<div id="d2" class="container" style="margin-top: 80px;display: none;">
			<div class="row">
				<div class="col-md-12">
						<div class="liuyan" style="padding: 10px 10px 0 10px;margin-bottom: 30px;">
							<h5 class="tab-h5">添加评论</h5>
							<div>
								<textarea id="content2" rows="6"></textarea>
								<input type="button" class="fabiao" onclick="addContent2()" value="发表" />
								<div class="clear"></div>
							</div>
						</div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">2211111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">1111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div id="layer2"></div>
					</div>
			</div>
		</div>
		
		<div id="d3" class="container" style="margin-top: 80px;display: none;">
			<div class="row">
				<div class="col-md-12">
						<div class="liuyan" style="padding: 10px 10px 0 10px;margin-bottom: 30px;">
							<h5 class="tab-h5">添加评论</h5>
							<div>
								<textarea id="content3" rows="6"></textarea>
								<input type="button" class="fabiao" onclick="addContent3()" value="发表" />
								<div class="clear"></div>
							</div>
						</div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">13311asdasd11111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div id="layer3"></div>
					</div>
			</div>
		</div>
		
		
			<div id="d4" class="container" style="margin-top: 80px;display: none;">
			<div class="row">
				<div class="col-md-12">
						<div class="liuyan" style="padding: 10px 10px 0 10px;margin-bottom: 30px;">
							<h5 class="tab-h5">添加评论</h5>
							<div>
								<textarea id="content4" rows="6"></textarea>
								<input type="button" class="fabiao" onclick="addContent4()" value="发表" />
								<div class="clear"></div>
							</div>
						</div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">44111asdasd11111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div id="layer4"></div>
					</div>
			</div>
		</div>
		
		
			<div id="d5" class="container" style="margin-top: 80px;display: none;">
			<div class="row">
				<div class="col-md-12">
						<div class="liuyan" style="padding: 10px 10px 0 10px;margin-bottom: 30px;">
							<h5 class="tab-h5">添加评论</h5>
							<div>
								<textarea id="content5" rows="6"></textarea>
								<input type="button" class="fabiao" onclick="addContent5()" value="发表" />
								<div class="clear"></div>
							</div>
						</div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">55111asdasd11111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div id="layer5"></div>
					</div>
			</div>
		</div>
		
		
			<div id="d6" class="container" style="margin-top: 80px;display: none;">
			<div class="row">
				<div class="col-md-12">
						<div class="liuyan" style="padding: 10px 10px 0 10px;margin-bottom: 30px;">
							<h5 class="tab-h5">添加评论</h5>
							<div>
								<textarea id="content6" rows="6"></textarea>
								<input type="button" class="fabiao" onclick="addContent6()" value="发表" />
								<div class="clear"></div>
							</div>
						</div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">666111asdasd11111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div id="layer6"></div>
					</div>
			</div>
		</div>
		
		
			<div id="d7" class="container" style="margin-top: 80px;display: none;">
			<div class="row">
				<div class="col-md-12">
						<div class="liuyan" style="padding: 10px 10px 0 10px;margin-bottom: 30px;">
							<h5 class="tab-h5">添加评论</h5>
							<div>
								<textarea id="content7" rows="6"></textarea>
								<input type="button" class="fabiao" onclick="addContent7()" value="发表" />
								<div class="clear"></div>
							</div>
						</div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">777111asdasd11111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div id="layer7"></div>
					</div>
			</div>
		</div>
		
		
			<div id="d8" class="container" style="margin-top: 80px;display: none;">
			<div class="row">
				<div class="col-md-12">
						<div class="liuyan" style="padding: 10px 10px 0 10px;margin-bottom: 30px;">
							<h5 class="tab-h5">添加评论</h5>
							<div>
								<textarea id="content8" rows="6"></textarea>
								<input type="button" class="fabiao" onclick="addContent8()" value="发表" />
								<div class="clear"></div>
							</div>
						</div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">888111asdasd11111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div id="layer8"></div>
					</div>
			</div>
		</div>
		
		
		
			<div id="d9" class="container" style="margin-top: 80px;display: none;">
			<div class="row">
				<div class="col-md-12">
						<div class="liuyan" style="padding: 10px 10px 0 10px;margin-bottom: 30px;">
							<h5 class="tab-h5">添加评论</h5>
							<div>
								<textarea id="content9" rows="6"></textarea>
								<input type="button" class="fabiao" onclick="addContent9()" value="发表" />
								<div class="clear"></div>
							</div>
						</div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">99999111asdasd11111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div id="layer9"></div>
					</div>
			</div>
		</div>
		
		
		
			<div id="d10" class="container" style="margin-top: 80px;display: none;">
			<div class="row">
				<div class="col-md-12">
						<div class="liuyan" style="padding: 10px 10px 0 10px;margin-bottom: 30px;">
							<h5 class="tab-h5">添加评论</h5>
							<div>
								<textarea id="content10" rows="6"></textarea>
								<input type="button" class="fabiao" onclick="addContent10()" value="发表" />
								<div class="clear"></div>
							</div>
						</div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">1010101111asdasd11111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div id="layer10"></div>
					</div>
			</div>
		</div>
		
		
		
		
			<div id="d11" class="container" style="margin-top: 80px;display: none;">
			<div class="row">
				<div class="col-md-12">
						<div class="liuyan" style="padding: 10px 10px 0 10px;margin-bottom: 30px;">
							<h5 class="tab-h5">添加评论</h5>
							<div>
								<textarea id="content11" rows="6"></textarea>
								<input type="button" class="fabiao" onclick="addContent11()" value="发表" />
								<div class="clear"></div>
							</div>
						</div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">111as11das11d11111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div id="layer11"></div>
					</div>
			</div>
		</div>
		
		
		
			<div id="d12" class="container" style="margin-top: 80px;display: none;">
			<div class="row">
				<div class="col-md-12">
						<div class="liuyan" style="padding: 10px 10px 0 10px;margin-bottom: 30px;">
							<h5 class="tab-h5">添加评论</h5>
							<div>
								<textarea id="content12" rows="6"></textarea>
								<input type="button" class="fabiao" onclick="addContent12()" value="发表" />
								<div class="clear"></div>
							</div>
						</div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">121212asdasd11111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div id="layer12"></div>
					</div>
			</div>
		</div>
		
		
		
		
			<div id="d13" class="container" style="margin-top: 80px;display: none;">
			<div class="row">
				<div class="col-md-12">
						<div class="liuyan" style="padding: 10px 10px 0 10px;margin-bottom: 30px;">
							<h5 class="tab-h5">添加评论</h5>
							<div>
								<textarea id="content13" rows="6"></textarea>
								<input type="button" class="fabiao" onclick="addContent13()" value="发表" />
								<div class="clear"></div>
							</div>
						</div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">131313asdasd11111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div id="layer13"></div>
					</div>
			</div>
		</div>
		
		
		
		
			<div id="d14" class="container" style="margin-top: 80px;display: none;">
			<div class="row">
				<div class="col-md-12">
						<div class="liuyan" style="padding: 10px 10px 0 10px;margin-bottom: 30px;">
							<h5 class="tab-h5">添加评论</h5>
							<div>
								<textarea id="content14" rows="6"></textarea>
								<input type="button" class="fabiao" onclick="addContent14()" value="发表" />
								<div class="clear"></div>
							</div>
						</div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">141414asdasd11111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div id="layer14"></div>
					</div>
			</div>
		</div>
		
		
		
			<div id="d15" class="container" style="margin-top: 80px;display: none;">
			<div class="row">
				<div class="col-md-12">
						<div class="liuyan" style="padding: 10px 10px 0 10px;margin-bottom: 30px;">
							<h5 class="tab-h5">添加评论</h5>
							<div>
								<textarea id="content15" rows="6"></textarea>
								<input type="button" class="fabiao" onclick="addContent15()" value="发表" />
								<div class="clear"></div>
							</div>
						</div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">151515asdasd11111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div id="layer15"></div>
					</div>
			</div>
		</div>
		
		
		
			<div id="d16" class="container" style="margin-top: 80px;display: none;">
			<div class="row">
				<div class="col-md-12">
						<div class="liuyan" style="padding: 10px 10px 0 10px;margin-bottom: 30px;">
							<h5 class="tab-h5">添加评论</h5>
							<div>
								<textarea id="content16" rows="6"></textarea>
								<input type="button" class="fabiao" onclick="addContent16()" value="发表" />
								<div class="clear"></div>
							</div>
						</div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">161616asdasd11111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div id="layer16"></div>
					</div>
			</div>
		</div>
		
		
		
		
		
		
		
		
			<!--底部-->
		<div class="container">
			<footer>
				<p class="footer-p" style="border-bottom: 5px solid #999;padding-bottom: 30px;">广天下之事·播百家之言</p>
				<p  class="tab-p1" style="text-align: center;color: #666;margin-top: 20px;font-size: 18px;">北京师范大学珠海分校师大之音广播台 版权所有<br />地址：广东省珠海市唐家湾镇金凤路18号北京师范大学珠海分校粤华三栋 邮编：519000</p>
			</footer>
		</div>

		<script src="/bnuzbroadcast/Public/js/jquery.min.js"></script>
		<script src="/bnuzbroadcast/Public/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			function addContent1()
			{
				var now = new Date();
				var layer = document.getElementById("layer1");
				var divlayer = document.createElement("div");
				var con = document.getElementById("content1").value;
				con = con.replace(/\n/g,"<br />");
 
				
				divlayer.innerHTML = "<img src='/bnuzbroadcast/Public/img/touxiang1.png' width='40px' class='header' />" + con + "<div class='stime'>" + now.toLocaleString() + "</div><div class='clear'></div>";
				divlayer.className = "content";
				
				layer.appendChild(divlayer);

				document.getElementById("content").value = "";
			}
			
			function addContent2()
			{
				var now = new Date();
				var layer = document.getElementById("layer2");
				var divlayer = document.createElement("div");
				var con = document.getElementById("content2").value;
				con = con.replace(/\n/g,"<br />");
 
				
				divlayer.innerHTML = "<img src='/bnuzbroadcast/Public/img/touxiang1.png' width='40px' class='header' />" + con + "<div class='stime'>" + now.toLocaleString() + "</div><div class='clear'></div>";
				divlayer.className = "content";
				
				layer.appendChild(divlayer);

				document.getElementById("content").value = "";
			}
			
			function addContent3()
			{
				var now = new Date();
				var layer = document.getElementById("layer3");
				var divlayer = document.createElement("div");
				var con = document.getElementById("content3").value;
				con = con.replace(/\n/g,"<br />");
 
				
				divlayer.innerHTML = "<img src='/bnuzbroadcast/Public/img/touxiang1.png' width='40px' class='header' />" + con + "<div class='stime'>" + now.toLocaleString() + "</div><div class='clear'></div>";
				divlayer.className = "content";
				
				layer.appendChild(divlayer);

				document.getElementById("content").value = "";
			}
			
			function addContent4()
			{
				var now = new Date();
				var layer = document.getElementById("layer4");
				var divlayer = document.createElement("div");
				var con = document.getElementById("content4").value;
				con = con.replace(/\n/g,"<br />");
 
				
				divlayer.innerHTML = "<img src='/bnuzbroadcast/Public/img/touxiang1.png' width='40px' class='header' />" + con + "<div class='stime'>" + now.toLocaleString() + "</div><div class='clear'></div>";
				divlayer.className = "content";
				
				layer.appendChild(divlayer);

				document.getElementById("content").value = "";
			}
			
			function addContent5()
			{
				var now = new Date();
				var layer = document.getElementById("layer5");
				var divlayer = document.createElement("div");
				var con = document.getElementById("content5").value;
				con = con.replace(/\n/g,"<br />");
 
				
				divlayer.innerHTML = "<img src='/bnuzbroadcast/Public/img/touxiang1.png' width='40px' class='header' />" + con + "<div class='stime'>" + now.toLocaleString() + "</div><div class='clear'></div>";
				divlayer.className = "content";
				
				layer.appendChild(divlayer);

				document.getElementById("content").value = "";
			}
			
			function addContent6()
			{
				var now = new Date();
				var layer = document.getElementById("layer6");
				var divlayer = document.createElement("div");
				var con = document.getElementById("content6").value;
				con = con.replace(/\n/g,"<br />");
 
				
				divlayer.innerHTML = "<img src='/bnuzbroadcast/Public/img/touxiang1.png' width='40px' class='header' />" + con + "<div class='stime'>" + now.toLocaleString() + "</div><div class='clear'></div>";
				divlayer.className = "content";
				
				layer.appendChild(divlayer);

				document.getElementById("content").value = "";
			}
			
			function addContent7()
			{
				var now = new Date();
				var layer = document.getElementById("layer7");
				var divlayer = document.createElement("div");
				var con = document.getElementById("content7").value;
				con = con.replace(/\n/g,"<br />");
 
				
				divlayer.innerHTML = "<img src='/bnuzbroadcast/Public/img/touxiang1.png' width='40px' class='header' />" + con + "<div class='stime'>" + now.toLocaleString() + "</div><div class='clear'></div>";
				divlayer.className = "content";
				
				layer.appendChild(divlayer);

				document.getElementById("content").value = "";
			}
			
			function addContent8()
			{
				var now = new Date();
				var layer = document.getElementById("layer8");
				var divlayer = document.createElement("div");
				var con = document.getElementById("content8").value;
				con = con.replace(/\n/g,"<br />");
 
				
				divlayer.innerHTML = "<img src='/bnuzbroadcast/Public/img/touxiang1.png' width='40px' class='header' />" + con + "<div class='stime'>" + now.toLocaleString() + "</div><div class='clear'></div>";
				divlayer.className = "content";
				
				layer.appendChild(divlayer);

				document.getElementById("content").value = "";
			}
			
			function addContent9()
			{
				var now = new Date();
				var layer = document.getElementById("layer9");
				var divlayer = document.createElement("div");
				var con = document.getElementById("content9").value;
				con = con.replace(/\n/g,"<br />");
 
				
				divlayer.innerHTML = "<img src='/bnuzbroadcast/Public/img/touxiang1.png' width='40px' class='header' />" + con + "<div class='stime'>" + now.toLocaleString() + "</div><div class='clear'></div>";
				divlayer.className = "content";
				
				layer.appendChild(divlayer);

				document.getElementById("content").value = "";
			}
			
			function addContent10()
			{
				var now = new Date();
				var layer = document.getElementById("layer10");
				var divlayer = document.createElement("div");
				var con = document.getElementById("content10").value;
				con = con.replace(/\n/g,"<br />");
 
				
				divlayer.innerHTML = "<img src='/bnuzbroadcast/Public/img/touxiang1.png' width='40px' class='header' />" + con + "<div class='stime'>" + now.toLocaleString() + "</div><div class='clear'></div>";
				divlayer.className = "content";
				
				layer.appendChild(divlayer);

				document.getElementById("content").value = "";
			}
			
			function addContent11()
			{
				var now = new Date();
				var layer = document.getElementById("layer11");
				var divlayer = document.createElement("div");
				var con = document.getElementById("content11").value;
				con = con.replace(/\n/g,"<br />");
 
				
				divlayer.innerHTML = "<img src='/bnuzbroadcast/Public/img/touxiang1.png' width='40px' class='header' />" + con + "<div class='stime'>" + now.toLocaleString() + "</div><div class='clear'></div>";
				divlayer.className = "content";
				
				layer.appendChild(divlayer);

				document.getElementById("content").value = "";
			}
			
			function addContent12()
			{
				var now = new Date();
				var layer = document.getElementById("layer12");
				var divlayer = document.createElement("div");
				var con = document.getElementById("content12").value;
				con = con.replace(/\n/g,"<br />");
 
				
				divlayer.innerHTML = "<img src='/bnuzbroadcast/Public/img/touxiang1.png' width='40px' class='header' />" + con + "<div class='stime'>" + now.toLocaleString() + "</div><div class='clear'></div>";
				divlayer.className = "content";
				
				layer.appendChild(divlayer);

				document.getElementById("content").value = "";
			}
			
			function addContent13()
			{
				var now = new Date();
				var layer = document.getElementById("layer13");
				var divlayer = document.createElement("div");
				var con = document.getElementById("content13").value;
				con = con.replace(/\n/g,"<br />");
 
				
				divlayer.innerHTML = "<img src='/bnuzbroadcast/Public/img/touxiang1.png' width='40px' class='header' />" + con + "<div class='stime'>" + now.toLocaleString() + "</div><div class='clear'></div>";
				divlayer.className = "content";
				
				layer.appendChild(divlayer);

				document.getElementById("content").value = "";
			}
			
			function addContent14()
			{
				var now = new Date();
				var layer = document.getElementById("layer14");
				var divlayer = document.createElement("div");
				var con = document.getElementById("content14").value;
				con = con.replace(/\n/g,"<br />");
 
				
				divlayer.innerHTML = "<img src='/bnuzbroadcast/Public/img/touxiang1.png' width='40px' class='header' />" + con + "<div class='stime'>" + now.toLocaleString() + "</div><div class='clear'></div>";
				divlayer.className = "content";
				
				layer.appendChild(divlayer);

				document.getElementById("content").value = "";
			}
			
			function addContent15()
			{
				var now = new Date();
				var layer = document.getElementById("layer15");
				var divlayer = document.createElement("div");
				var con = document.getElementById("content15").value;
				con = con.replace(/\n/g,"<br />");
 
				
				divlayer.innerHTML = "<img src='/bnuzbroadcast/Public/img/touxiang1.png' width='40px' class='header' />" + con + "<div class='stime'>" + now.toLocaleString() + "</div><div class='clear'></div>";
				divlayer.className = "content";
				
				layer.appendChild(divlayer);

				document.getElementById("content").value = "";
			}
			
			function addContent16()
			{
				var now = new Date();
				var layer = document.getElementById("layer16");
				var divlayer = document.createElement("div");
				var con = document.getElementById("content16").value;
				con = con.replace(/\n/g,"<br />");
 
				
				divlayer.innerHTML = "<img src='/bnuzbroadcast/Public/img/touxiang1.png' width='40px' class='header' />" + con + "<div class='stime'>" + now.toLocaleString() + "</div><div class='clear'></div>";
				divlayer.className = "content";
				
				layer.appendChild(divlayer);

				document.getElementById("content").value = "";
			}
			
			
		</script>
		<script type="text/javascript">
			
				$('#myCarousel').carousel({
				//自动4秒播放
				interval: 99999999999999999999,
			});
		
		
		
		
			//切换评论
			function host1(){
				var host1 = document.getElementById('d1');
				host1.style.display = "block";
				
				var host2 = document.getElementById('d2');
				host2.style.display = "none";
				
				var host3 = document.getElementById('d3');
				host3.style.display = "none";
				
				var host4 = document.getElementById('d4');
				host4.style.display = "none";
				
				var host5 = document.getElementById('d5');
				host5.style.display = "none";
				
				var host6 = document.getElementById('d6');
				host6.style.display = "none";
				
				var host7 = document.getElementById('d7');
				host7.style.display = "none";
				
				var host8 = document.getElementById('d8');
				host8.style.display = "none";
				
				var host9 = document.getElementById('d9');
				host9.style.display = "none";
				
				var host10 = document.getElementById('d10');
				host10.style.display = "none";
				
				var host11 = document.getElementById('d11');
				host11.style.display = "none";
				
				var host12 = document.getElementById('d12');
				host12.style.display = "none";
				
				var host13 = document.getElementById('d13');
				host13.style.display = "none";
				
				var host14 = document.getElementById('d14');
				host14.style.display = "none";
				
				var host15 = document.getElementById('d15');
				host15.style.display = "none";
				
				var host16 = document.getElementById('d16');
				host16.style.display = "none";
			}
		
		
		
				function host2(){
				var host1 = document.getElementById('d1');
				host1.style.display = "none";
				
				var host2 = document.getElementById('d2');
				host2.style.display = "block";
				
				var host3 = document.getElementById('d3');
				host3.style.display = "none";
				
				var host4 = document.getElementById('d4');
				host4.style.display = "none";
				
				var host5 = document.getElementById('d5');
				host5.style.display = "none";
				
				var host6 = document.getElementById('d6');
				host6.style.display = "none";
				
				var host7 = document.getElementById('d7');
				host7.style.display = "none";
				
				var host8 = document.getElementById('d8');
				host8.style.display = "none";
				
				var host9 = document.getElementById('d9');
				host9.style.display = "none";
				
				var host10 = document.getElementById('d10');
				host10.style.display = "none";
				
				var host11 = document.getElementById('d11');
				host11.style.display = "none";
				
				var host12 = document.getElementById('d12');
				host12.style.display = "none";
				
				var host13 = document.getElementById('d13');
				host13.style.display = "none";
				
				var host14 = document.getElementById('d14');
				host14.style.display = "none";
				
				var host15 = document.getElementById('d15');
				host15.style.display = "none";
				
				var host16 = document.getElementById('d16');
				host16.style.display = "none";
			}
				
			
				function host3(){
				var host1 = document.getElementById('d1');
				host1.style.display = "none";
				
				var host2 = document.getElementById('d2');
				host2.style.display = "none";
				
				var host3 = document.getElementById('d3');
				host3.style.display = "block";
				
				var host4 = document.getElementById('d4');
				host4.style.display = "none";
				
				var host5 = document.getElementById('d5');
				host5.style.display = "none";
				
				var host6 = document.getElementById('d6');
				host6.style.display = "none";
				
				var host7 = document.getElementById('d7');
				host7.style.display = "none";
				
				var host8 = document.getElementById('d8');
				host8.style.display = "none";
				
				var host9 = document.getElementById('d9');
				host9.style.display = "none";
				
				var host10 = document.getElementById('d10');
				host10.style.display = "none";
				
				var host11 = document.getElementById('d11');
				host11.style.display = "none";
				
				var host12 = document.getElementById('d12');
				host12.style.display = "none";
				
				var host13 = document.getElementById('d13');
				host13.style.display = "none";
				
				var host14 = document.getElementById('d14');
				host14.style.display = "none";
				
				var host15 = document.getElementById('d15');
				host15.style.display = "none";
				
				var host16 = document.getElementById('d16');
				host16.style.display = "none";
			}
				
		
		
			function host4(){
				var host1 = document.getElementById('d1');
				host1.style.display = "none";
				
				var host2 = document.getElementById('d2');
				host2.style.display = "none";
				
				var host3 = document.getElementById('d3');
				host3.style.display = "none";
				
				var host4 = document.getElementById('d4');
				host4.style.display = "block";
				
				var host5 = document.getElementById('d5');
				host5.style.display = "none";
				
				var host6 = document.getElementById('d6');
				host6.style.display = "none";
				
				var host7 = document.getElementById('d7');
				host7.style.display = "none";
				
				var host8 = document.getElementById('d8');
				host8.style.display = "none";
				
				var host9 = document.getElementById('d9');
				host9.style.display = "none";
				
				var host10 = document.getElementById('d10');
				host10.style.display = "none";
				
				var host11 = document.getElementById('d11');
				host11.style.display = "none";
				
				var host12 = document.getElementById('d12');
				host12.style.display = "none";
				
				var host13 = document.getElementById('d13');
				host13.style.display = "none";
				
				var host14 = document.getElementById('d14');
				host14.style.display = "none";
				
				var host15 = document.getElementById('d15');
				host15.style.display = "none";
				
				var host16 = document.getElementById('d16');
				host16.style.display = "none";
			}
			
			
				function host5(){
				var host1 = document.getElementById('d1');
				host1.style.display = "none";
				
				var host2 = document.getElementById('d2');
				host2.style.display = "none";
				
				var host3 = document.getElementById('d3');
				host3.style.display = "none";
				
				var host4 = document.getElementById('d4');
				host4.style.display = "none";
				
				var host5 = document.getElementById('d5');
				host5.style.display = "block";
				
				var host6 = document.getElementById('d6');
				host6.style.display = "none";
				
				var host7 = document.getElementById('d7');
				host7.style.display = "none";
				
				var host8 = document.getElementById('d8');
				host8.style.display = "none";
				
				var host9 = document.getElementById('d9');
				host9.style.display = "none";
				
				var host10 = document.getElementById('d10');
				host10.style.display = "none";
				
				var host11 = document.getElementById('d11');
				host11.style.display = "none";
				
				var host12 = document.getElementById('d12');
				host12.style.display = "none";
				
				var host13 = document.getElementById('d13');
				host13.style.display = "none";
				
				var host14 = document.getElementById('d14');
				host14.style.display = "none";
				
				var host15 = document.getElementById('d15');
				host15.style.display = "none";
				
				var host16 = document.getElementById('d16');
				host16.style.display = "none";
			}
		
			function host6(){
				var host1 = document.getElementById('d1');
				host1.style.display = "none";
				
				var host2 = document.getElementById('d2');
				host2.style.display = "none";
				
				var host3 = document.getElementById('d3');
				host3.style.display = "none";
				
				var host4 = document.getElementById('d4');
				host4.style.display = "none";
				
				var host5 = document.getElementById('d5');
				host5.style.display = "none";
				
				var host6 = document.getElementById('d6');
				host6.style.display = "block";
				
				var host7 = document.getElementById('d7');
				host7.style.display = "none";
				
				var host8 = document.getElementById('d8');
				host8.style.display = "none";
				
				var host9 = document.getElementById('d9');
				host9.style.display = "none";
				
				var host10 = document.getElementById('d10');
				host10.style.display = "none";
				
				var host11 = document.getElementById('d11');
				host11.style.display = "none";
				
				var host12 = document.getElementById('d12');
				host12.style.display = "none";
				
				var host13 = document.getElementById('d13');
				host13.style.display = "none";
				
				var host14 = document.getElementById('d14');
				host14.style.display = "none";
				
				var host15 = document.getElementById('d15');
				host15.style.display = "none";
				
				var host16 = document.getElementById('d16');
				host16.style.display = "none";
			}
			
			
				function host7(){
				var host1 = document.getElementById('d1');
				host1.style.display = "none";
				
				var host2 = document.getElementById('d2');
				host2.style.display = "none";
				
				var host3 = document.getElementById('d3');
				host3.style.display = "none";
				
				var host4 = document.getElementById('d4');
				host4.style.display = "none";
				
				var host5 = document.getElementById('d5');
				host5.style.display = "none";
				
				var host6 = document.getElementById('d6');
				host6.style.display = "none";
				
				var host7 = document.getElementById('d7');
				host7.style.display = "block";
				
				var host8 = document.getElementById('d8');
				host8.style.display = "none";
				
				var host9 = document.getElementById('d9');
				host9.style.display = "none";
				
				var host10 = document.getElementById('d10');
				host10.style.display = "none";
				
				var host11 = document.getElementById('d11');
				host11.style.display = "none";
				
				var host12 = document.getElementById('d12');
				host12.style.display = "none";
				
				var host13 = document.getElementById('d13');
				host13.style.display = "none";
				
				var host14 = document.getElementById('d14');
				host14.style.display = "none";
				
				var host15 = document.getElementById('d15');
				host15.style.display = "none";
				
				var host16 = document.getElementById('d16');
				host16.style.display = "none";
			}
				
				
					function host8(){
				var host1 = document.getElementById('d1');
				host1.style.display = "none";
				
				var host2 = document.getElementById('d2');
				host2.style.display = "none";
				
				var host3 = document.getElementById('d3');
				host3.style.display = "none";
				
				var host4 = document.getElementById('d4');
				host4.style.display = "none";
				
				var host5 = document.getElementById('d5');
				host5.style.display = "none";
				
				var host6 = document.getElementById('d6');
				host6.style.display = "none";
				
				var host7 = document.getElementById('d7');
				host7.style.display = "none";
				
				var host8 = document.getElementById('d8');
				host8.style.display = "block";
				
				var host9 = document.getElementById('d9');
				host9.style.display = "none";
				
				var host10 = document.getElementById('d10');
				host10.style.display = "none";
				
				var host11 = document.getElementById('d11');
				host11.style.display = "none";
				
				var host12 = document.getElementById('d12');
				host12.style.display = "none";
				
				var host13 = document.getElementById('d13');
				host13.style.display = "none";
				
				var host14 = document.getElementById('d14');
				host14.style.display = "none";
				
				var host15 = document.getElementById('d15');
				host15.style.display = "none";
				
				var host16 = document.getElementById('d16');
				host16.style.display = "none";
			}
					
						function host9(){
				var host1 = document.getElementById('d1');
				host1.style.display = "none";
				
				var host2 = document.getElementById('d2');
				host2.style.display = "none";
				
				var host3 = document.getElementById('d3');
				host3.style.display = "none";
				
				var host4 = document.getElementById('d4');
				host4.style.display = "none";
				
				var host5 = document.getElementById('d5');
				host5.style.display = "none";
				
				var host6 = document.getElementById('d6');
				host6.style.display = "none";
				
				var host7 = document.getElementById('d7');
				host7.style.display = "none";
				
				var host8 = document.getElementById('d8');
				host8.style.display = "none";
				
				var host9 = document.getElementById('d9');
				host9.style.display = "block";
				
				var host10 = document.getElementById('d10');
				host10.style.display = "none";
				
				var host11 = document.getElementById('d11');
				host11.style.display = "none";
				
				var host12 = document.getElementById('d12');
				host12.style.display = "none";
				
				var host13 = document.getElementById('d13');
				host13.style.display = "none";
				
				var host14 = document.getElementById('d14');
				host14.style.display = "none";
				
				var host15 = document.getElementById('d15');
				host15.style.display = "none";
				
				var host16 = document.getElementById('d16');
				host16.style.display = "none";
			}
		
				function host10(){
				var host1 = document.getElementById('d1');
				host1.style.display = "none";
				
				var host2 = document.getElementById('d2');
				host2.style.display = "none";
				
				var host3 = document.getElementById('d3');
				host3.style.display = "none";
				
				var host4 = document.getElementById('d4');
				host4.style.display = "none";
				
				var host5 = document.getElementById('d5');
				host5.style.display = "none";
				
				var host6 = document.getElementById('d6');
				host6.style.display = "none";
				
				var host7 = document.getElementById('d7');
				host7.style.display = "none";
				
				var host8 = document.getElementById('d8');
				host8.style.display = "none";
				
				var host9 = document.getElementById('d9');
				host9.style.display = "none";
				
				var host10 = document.getElementById('d10');
				host10.style.display = "block";
				
				var host11 = document.getElementById('d11');
				host11.style.display = "none";
				
				var host12 = document.getElementById('d12');
				host12.style.display = "none";
				
				var host13 = document.getElementById('d13');
				host13.style.display = "none";
				
				var host14 = document.getElementById('d14');
				host14.style.display = "none";
				
				var host15 = document.getElementById('d15');
				host15.style.display = "none";
				
				var host16 = document.getElementById('d16');
				host16.style.display = "none";
			}
		
				function host11(){
				var host1 = document.getElementById('d1');
				host1.style.display = "none";
				
				var host2 = document.getElementById('d2');
				host2.style.display = "none";
				
				var host3 = document.getElementById('d3');
				host3.style.display = "none";
				
				var host4 = document.getElementById('d4');
				host4.style.display = "none";
				
				var host5 = document.getElementById('d5');
				host5.style.display = "none";
				
				var host6 = document.getElementById('d6');
				host6.style.display = "none";
				
				var host7 = document.getElementById('d7');
				host7.style.display = "none";
				
				var host8 = document.getElementById('d8');
				host8.style.display = "none";
				
				var host9 = document.getElementById('d9');
				host9.style.display = "none";
				
				var host10 = document.getElementById('d10');
				host10.style.display = "none";
				
				var host11 = document.getElementById('d11');
				host11.style.display = "block";
				
				var host12 = document.getElementById('d12');
				host12.style.display = "none";
				
				var host13 = document.getElementById('d13');
				host13.style.display = "none";
				
				var host14 = document.getElementById('d14');
				host14.style.display = "none";
				
				var host15 = document.getElementById('d15');
				host15.style.display = "none";
				
				var host16 = document.getElementById('d16');
				host16.style.display = "none";
			}
		
		function host12(){
				var host1 = document.getElementById('d1');
				host1.style.display = "none";
				
				var host2 = document.getElementById('d2');
				host2.style.display = "none";
				
				var host3 = document.getElementById('d3');
				host3.style.display = "none";
				
				var host4 = document.getElementById('d4');
				host4.style.display = "none";
				
				var host5 = document.getElementById('d5');
				host5.style.display = "none";
				
				var host6 = document.getElementById('d6');
				host6.style.display = "none";
				
				var host7 = document.getElementById('d7');
				host7.style.display = "none";
				
				var host8 = document.getElementById('d8');
				host8.style.display = "none";
				
				var host9 = document.getElementById('d9');
				host9.style.display = "none";
				
				var host10 = document.getElementById('d10');
				host10.style.display = "none";
				
				var host11 = document.getElementById('d11');
				host11.style.display = "none";
				
				var host12 = document.getElementById('d12');
				host12.style.display = "block";
				
				var host13 = document.getElementById('d13');
				host13.style.display = "none";
				
				var host14 = document.getElementById('d14');
				host14.style.display = "none";
				
				var host15 = document.getElementById('d15');
				host15.style.display = "none";
				
				var host16 = document.getElementById('d16');
				host16.style.display = "none";
			}
		
		function host13(){
				var host1 = document.getElementById('d1');
				host1.style.display = "none";
				
				var host2 = document.getElementById('d2');
				host2.style.display = "none";
				
				var host3 = document.getElementById('d3');
				host3.style.display = "none";
				
				var host4 = document.getElementById('d4');
				host4.style.display = "none";
				
				var host5 = document.getElementById('d5');
				host5.style.display = "none";
				
				var host6 = document.getElementById('d6');
				host6.style.display = "none";
				
				var host7 = document.getElementById('d7');
				host7.style.display = "none";
				
				var host8 = document.getElementById('d8');
				host8.style.display = "none";
				
				var host9 = document.getElementById('d9');
				host9.style.display = "none";
				
				var host10 = document.getElementById('d10');
				host10.style.display = "none";
				
				var host11 = document.getElementById('d11');
				host11.style.display = "none";
				
				var host12 = document.getElementById('d12');
				host12.style.display = "none";
				
				var host13 = document.getElementById('d13');
				host13.style.display = "block";
				
				var host14 = document.getElementById('d14');
				host14.style.display = "none";
				
				var host15 = document.getElementById('d15');
				host15.style.display = "none";
				
				var host16 = document.getElementById('d16');
				host16.style.display = "none";
			}
		
			function host14(){
				var host1 = document.getElementById('d1');
				host1.style.display = "none";
				
				var host2 = document.getElementById('d2');
				host2.style.display = "none";
				
				var host3 = document.getElementById('d3');
				host3.style.display = "none";
				
				var host4 = document.getElementById('d4');
				host4.style.display = "none";
				
				var host5 = document.getElementById('d5');
				host5.style.display = "none";
				
				var host6 = document.getElementById('d6');
				host6.style.display = "none";
				
				var host7 = document.getElementById('d7');
				host7.style.display = "none";
				
				var host8 = document.getElementById('d8');
				host8.style.display = "none";
				
				var host9 = document.getElementById('d9');
				host9.style.display = "none";
				
				var host10 = document.getElementById('d10');
				host10.style.display = "none";
				
				var host11 = document.getElementById('d11');
				host11.style.display = "none";
				
				var host12 = document.getElementById('d12');
				host12.style.display = "none";
				
				var host13 = document.getElementById('d13');
				host13.style.display = "none";
				
				var host14 = document.getElementById('d14');
				host14.style.display = "block";
				
				var host15 = document.getElementById('d15');
				host15.style.display = "none";
				
				var host16 = document.getElementById('d16');
				host16.style.display = "none";
			}
		
			function host15(){
				var host1 = document.getElementById('d1');
				host1.style.display = "none";
				
				var host2 = document.getElementById('d2');
				host2.style.display = "none";
				
				var host3 = document.getElementById('d3');
				host3.style.display = "none";
				
				var host4 = document.getElementById('d4');
				host4.style.display = "none";
				
				var host5 = document.getElementById('d5');
				host5.style.display = "none";
				
				var host6 = document.getElementById('d6');
				host6.style.display = "none";
				
				var host7 = document.getElementById('d7');
				host7.style.display = "none";
				
				var host8 = document.getElementById('d8');
				host8.style.display = "none";
				
				var host9 = document.getElementById('d9');
				host9.style.display = "none";
				
				var host10 = document.getElementById('d10');
				host10.style.display = "none";
				
				var host11 = document.getElementById('d11');
				host11.style.display = "none";
				
				var host12 = document.getElementById('d12');
				host12.style.display = "none";
				
				var host13 = document.getElementById('d13');
				host13.style.display = "none";
				
				var host14 = document.getElementById('d14');
				host14.style.display = "none";
				
				var host15 = document.getElementById('d15');
				host15.style.display = "block";
				
				var host16 = document.getElementById('d16');
				host16.style.display = "none";
			}
		
		
		
			function host16(){
				var host1 = document.getElementById('d1');
				host1.style.display = "none";
				
				var host2 = document.getElementById('d2');
				host2.style.display = "none";
				
				var host3 = document.getElementById('d3');
				host3.style.display = "none";
				
				var host4 = document.getElementById('d4');
				host4.style.display = "none";
				
				var host5 = document.getElementById('d5');
				host5.style.display = "none";
				
				var host6 = document.getElementById('d6');
				host6.style.display = "none";
				
				var host7 = document.getElementById('d7');
				host7.style.display = "none";
				
				var host8 = document.getElementById('d8');
				host8.style.display = "none";
				
				var host9 = document.getElementById('d9');
				host9.style.display = "none";
				
				var host10 = document.getElementById('d10');
				host10.style.display = "none";
				
				var host11 = document.getElementById('d11');
				host11.style.display = "none";
				
				var host12 = document.getElementById('d12');
				host12.style.display = "none";
				
				var host13 = document.getElementById('d13');
				host13.style.display = "none";
				
				var host14 = document.getElementById('d14');
				host14.style.display = "none";
				
				var host15 = document.getElementById('d15');
				host15.style.display = "none";
				
				var host16 = document.getElementById('d16');
				host16.style.display = "block";
			}
		
		
		
		
		
		
		
		
		
		
		
		
		
			// 全局变量
			var divs=[];
			var divCnt = 3; //div 数量 
			for (var i=0;i<divCnt;i++) {
   			divs[i] = document.getElementById("d"+(i+1));
			}
			var selectedDiv = 0;
			function toggleDivnext(){
    			selectedDiv++;
    			selectedDiv = selectedDiv % divCnt; //
    			for (var i=0;i< divCnt;i++) {
       			divs[i].style.display="none"; 
    			}
   			 divs[selectedDiv].style.display="block"; 
 			}   
 			
	 </script>
	</body>
</html>