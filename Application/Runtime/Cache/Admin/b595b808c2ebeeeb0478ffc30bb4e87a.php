<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="/bnuzbroadcast/Public/css/bootstrap.min.css">
		<link rel="stylesheet" href="/bnuzbroadcast/Public/css/style.css">
		<style type="text/css">
			.navbar {
				background-color: #f8f8f8;
			}
		</style>
	</head>

	<body>
		<!--top-->
		<div>
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<a href="index.html" class="navbar-brand logo"><img src="img/logo.png" alt="师大之音"></a>
						<span class="tab-h3" style="line-height: 55px;">管理员页面</span>
					</div>
				</div>
			</nav>
		</div>

		<!--body-->
		<div class="container" style="margin-top: 60px;">
			<!--用户管理-->
			<div>
				<div class="row">
					<div class="col-md-2">
						<ul class="admin-ul" id="Myul">
							<li onclick="t1()">用户管理</li>
							<li onclick="t2()">留言管理</li>
							<li onclick="t3()">节目管理</li>
							<li onclick="t4()">主持队信息管理</li>
							<li onclick="t5()">公告管理</li>
							<li onclick="t6()">活动管理</li>
						</ul>
					</div>
					<div class="col-md-8 col-md-offset-2" id="t_user">
						<p style="font-size: 30px;"><b>用户管理</b></p>
						<table class="table table-hover">
							<thead>
								<tr>
									<td>ID</td>
									<td>学号</td>
									<td>用户名</td>
									<td>密码</td>
									<td>电话</td>
									<td>邮箱</td>
									<td>头像</td>
									<td>简介</td>
									<td>类型</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>1301050062</td>
									<td>吴锐伟</td>
									<td>123456</td>
									<td>660752</td>
									<td>1111@qq.com</td>
									<td>111.jpg</td>
									<td>lalalla</td>
									<td>0</td>
								</tr>
							</tbody>
						</table>
					</div>
					
					<!--留言管理-->
						<div class="col-md-8 col-md-offset-2" id="t_comment">
						<p style="font-size: 30px;"><b>留言管理</b></p>
						<table class="table table-hover">
							<thead>
								<tr>
									<td>ID</td>
									<td>学号</td>
									<td>用户名</td>
									<td>密码</td>
									<td>电话</td>
									<td>邮箱</td>
									<td>头像</td>
									<td>简介</td>
									<td>类型</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>1301050062</td>
									<td>吴锐伟</td>
									<td>123456</td>
									<td>660752</td>
									<td>1111@qq.com</td>
									<td>111.jpg</td>
									<td>lalalla</td>
									<td>0</td>
								</tr>
							</tbody>
						</table>
					</div>
					
					<!--节目管理-->
					<div class="col-md-8 col-md-offset-2" id="t_program">
						<p style="font-size: 30px;"><b>节目管理</b></p>
						<table class="table table-hover">
							<thead>
								<tr>
									<td>ID</td>
									<td>学号</td>
									<td>用户名</td>
									<td>密码</td>
									<td>电话</td>
									<td>邮箱</td>
									<td>头像</td>
									<td>简介</td>
									<td>类型</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>1301050062</td>
									<td>吴锐伟</td>
									<td>123456</td>
									<td>660752</td>
									<td>1111@qq.com</td>
									<td>111.jpg</td>
									<td>lalalla</td>
									<td>0</td>
								</tr>
							</tbody>
						</table>
					</div>
					
					<!--主持队信息管理-->
						<div class="col-md-8 col-md-offset-2" id="t_host">
						<p style="font-size: 30px;"><b>主持队信息管理</b></p>
						<table class="table table-hover">
							<thead>
								<tr>
									<td>ID</td>
									<td>学号</td>
									<td>用户名</td>
									<td>密码</td>
									<td>电话</td>
									<td>邮箱</td>
									<td>头像</td>
									<td>简介</td>
									<td>类型</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>1301050062</td>
									<td>吴锐伟</td>
									<td>123456</td>
									<td>660752</td>
									<td>1111@qq.com</td>
									<td>111.jpg</td>
									<td>lalalla</td>
									<td>0</td>
								</tr>
							</tbody>
						</table>
					</div>
					
					<!--公告管理-->
						<div class="col-md-8 col-md-offset-2" id="t_notice">
						<p style="font-size: 30px;"><b>公告管理</b></p>
						<table class="table table-hover">
							<thead>
								<tr>
									<td>ID</td>
									<td>学号</td>
									<td>用户名</td>
									<td>密码</td>
									<td>电话</td>
									<td>邮箱</td>
									<td>头像</td>
									<td>简介</td>
									<td>类型</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>1301050062</td>
									<td>吴锐伟</td>
									<td>123456</td>
									<td>660752</td>
									<td>1111@qq.com</td>
									<td>111.jpg</td>
									<td>lalalla</td>
									<td>0</td>
								</tr>
							</tbody>
						</table>
					</div>
					
					<!--活动管理-->
						<div class="col-md-8 col-md-offset-2" id="t_activity">
						<p style="font-size: 30px;"><b>活动管理</b></p>
						<table class="table table-hover">
							<thead>
								<tr>
									<td>ID</td>
									<td>学号</td>
									<td>用户名</td>
									<td>密码</td>
									<td>电话</td>
									<td>邮箱</td>
									<td>头像</td>
									<td>简介</td>
									<td>类型</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>1301050062</td>
									<td>吴锐伟</td>
									<td>123456</td>
									<td>660752</td>
									<td>1111@qq.com</td>
									<td>111.jpg</td>
									<td>lalalla</td>
									<td>0</td>
								</tr>
							</tbody>
						</table>
					</div>
					
				</div>
			</div>
			
		
				
		
			
		
				
				
				
			</div>
		</div>

	<script src="/bnuzbroadcast/Public/js/jquery.min.js"></script>
		<script src="/bnuzbroadcast/Public/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$(function() {
				//改变div的高度
				$("#Myul").height($(window).height());
			});
			
			
				function t1(){
				var host1 = document.getElementById('t_user');
				host1.style.display = "block";
				
				var host2 = document.getElementById('t_comment');
				host2.style.display = "none";
				
				var host3 = document.getElementById('t_program');
				host3.style.display = "none";
				
				var host4 = document.getElementById('t_host');
				host4.style.display = "none";
				
				var host5 = document.getElementById('t_notice');
				host5.style.display = "none";
				
				var host6 = document.getElementById('t_activity');
				host6.style.display = "none";
			
			}
				
				function t2(){
				var host1 = document.getElementById('t_user');
				host1.style.display = "none";
				
				var host2 = document.getElementById('t_comment');
				host2.style.display = "block";
				
				var host3 = document.getElementById('t_program');
				host3.style.display = "none";
				
				var host4 = document.getElementById('t_host');
				host4.style.display = "none";
				
				var host5 = document.getElementById('t_notice');
				host5.style.display = "none";
				
				var host6 = document.getElementById('t_activity');
				host6.style.display = "none";
			
			}
				
				function t3(){
				var host1 = document.getElementById('t_user');
				host1.style.display = "none";
				
				var host2 = document.getElementById('t_comment');
				host2.style.display = "none";
				
				var host3 = document.getElementById('t_program');
				host3.style.display = "block";
				
				var host4 = document.getElementById('t_host');
				host4.style.display = "none";
				
				var host5 = document.getElementById('t_notice');
				host5.style.display = "none";
				
				var host6 = document.getElementById('t_activity');
				host6.style.display = "none";
			
			}
				
				function t4(){
				var host1 = document.getElementById('t_user');
				host1.style.display = "none";
				
				var host2 = document.getElementById('t_comment');
				host2.style.display = "none";
				
				var host3 = document.getElementById('t_program');
				host3.style.display = "none";
				
				var host4 = document.getElementById('t_host');
				host4.style.display = "block";
				
				var host5 = document.getElementById('t_notice');
				host5.style.display = "none";
				
				var host6 = document.getElementById('t_activity');
				host6.style.display = "none";
			
			}
				
				function t5(){
				var host1 = document.getElementById('t_user');
				host1.style.display = "none";
				
				var host2 = document.getElementById('t_comment');
				host2.style.display = "none";
				
				var host3 = document.getElementById('t_program');
				host3.style.display = "none";
				
				var host4 = document.getElementById('t_host');
				host4.style.display = "none";
				
				var host5 = document.getElementById('t_notice');
				host5.style.display = "block";
				
				var host6 = document.getElementById('t_activity');
				host6.style.display = "none";
			
			}
				
				function t6(){
				var host1 = document.getElementById('t_user');
				host1.style.display = "none";
				
				var host2 = document.getElementById('t_comment');
				host2.style.display = "none";
				
				var host3 = document.getElementById('t_program');
				host3.style.display = "none";
				
				var host4 = document.getElementById('t_host');
				host4.style.display = "none";
				
				var host5 = document.getElementById('t_notice');
				host5.style.display = "none";
				
				var host6 = document.getElementById('t_activity');
				host6.style.display = "block";
			
			}
			
			
			
		</script>
	</body>

</html>