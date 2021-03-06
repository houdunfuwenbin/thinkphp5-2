<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"D:\phpStudy\WWW\Thinkphp_5.0/application/start\view\index\article.html";i:1487503860;s:67:"D:\phpStudy\WWW\Thinkphp_5.0/application/start\view\\index\nav.html";i:1487855340;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="renderer" content="webkit">
	<meta property="qc:admins" content="1721742224651636" />
	<meta property="wb:webmaster" content="69e23ac12c635da9" />
	<meta name="baidu-site-verification" content="sSrE9nFHHr" />
	<meta baidu-gxt-verify-token="0cedd8469f067b548e2e2a19a196c16e">
	<meta name="360-site-verification" content="5dcd724ad92b8bba9adf192b493f6586" />

	<title><?php echo $article_info['title'];?></title>

	<meta name="Keywords" content="新年目标：三条路径成为经验丰富的设计师,厉嗣傲,设计,ui,分享,经验,产品设计,经验/观点,自译外文,ui 设计,ue 设计,界面设计,交互设计,动效 设计,ui 学习,ui 教程,ui 经验,ui 培训" />
	<meta name="Description" content="新年目标：三条路径成为经验丰富的设计师,厉嗣傲,UI/UX设计师。UI中国,前身为iconfans, 是专业的 UI 设计师交流、学习与展示的平台。" />

	<!-- CSS -->
	<link rel="stylesheet" href="/public/static/admin/lib/Hui-iconfont/1.0.8/iconfont.css"/>
	<link rel="stylesheet" href="/public/static/public/css/reset.css"/>
	<link rel="stylesheet" href="/public/static/start/css/uicn.v1.css">
	<link rel="stylesheet" href="/public/static/start/css/header.v1.css">
	<link rel="stylesheet" href="/public/static/start/css/footer.v1.css">
	<link rel="stylesheet" href="/public/static/start/css/nivo-slider.css">
	<link rel="stylesheet" href="/public/static/start/css/modal.css">
	<link rel="stylesheet" href="/public/static/start/css/post.css">

	<link rel="stylesheet" href="/public/static/start/css/simditor.css">
	<link rel="stylesheet" href="/public/static/start/css/ui-theme.css">

	<link rel="stylesheet" href="/public/static/start/css/contentover.css">
	<link rel="stylesheet" href="/public/static/start/css/page.css">
	<link rel="stylesheet" href="/public/static/start/css/min_page.css">

	<link rel="stylesheet" href="/public/static/start/css/home.v1.css">
	<link rel="stylesheet" href="/public/static/start/css/exp.css" >
	<link rel="stylesheet" href="/public/static/start/css/new.css"/>
	<link rel="stylesheet" href="/public/static/start/css/zhuce.css">


	<!-- JS -->
	<script src="/public/static/public/js/jquery-1.11.3.min.js"></script>
	<script src="/public/static/start/js/msgtip.js"></script>
	<script src="/public/static/start/js/header.v1.js"></script>
	<script src="/public/static/start/js/home.v1.js"></script>
	<script src="/public/static/start/js/works.js"></script>

	<script src="/public/static/start/js/footer.v1.js"></script>
	<script src="/public/static/start/js/post.js"></script>

	<script src="/public/static/start/js/lazyload.js"></script>
	<!--[if lt IE 9]>
	<script src="/public/static/start/js/html5.js"></script>
	<![endif]-->
	<!--[if (gte IE 6)&(lte IE 8)]>
	<script src="/public/static/start/js/selectivizr.min.js"></script>
	<![endif]-->
	<script type="text/javascript" src="/public/static/public/layer_pc/layer.js"></script>

</head>

<body>
<div id="ajax-hook"></div>

<div class="nav-div">
    <div class="bg-white bg-white-nav">
        <div class="wpn cl bg-white">
            <ul class="nav-hd cl">
                <?php foreach($nav_data as $key=>$val){ ?>
                    <li>
                        <a href="<?php if($val['children'] && $key+1==count($nav_data)){echo 'javascript:;';}else{echo url($val['nav_url']);}?>" target="_self"><?php echo $val['nav_name'];?><i class="<?php echo $key+1==count($nav_data)?'icon-down':'';?>"></i>	</a>
                        <?php if($val['children']){?>
                            <div class="subnav-hd cl">
                                <ul class="subnav-ct-hd">
                                    <?php foreach($val['children'] as $k=>$v){ ?>
                                        <li>
                                            <a href="<?php echo url($v['nav_url']);?>" target="_blank"><?php echo $v['nav_name'];?></a>
                                        </li>
                                    <?php }?>
                                </ul>
                            </div>
                        <?php }?>
                    </li>
                <?php }?>
            </ul>
            <div class="y cl">
                <div class="search-hd cl">
                    <form action="#" method="get" id="searchForm">
                        <div class="search-status">
                            <div class="search-filter">
                                <a href="javascript:;"><span class="tit">作品</span><i class="icon-down"></i></a>
                                <ul class="options">
                                    <li><a href="javascript:;" data-rel="project">作品</a></li>
                                    <li><a href="javascript:;" data-rel="experience">文章</a></li>
                                    <li><a href="javascript:;" data-rel="source">源文件</a></li>
                                    <li><a href="javascript:;" data-rel="designer">设计师</a></li>
                                    <li><a href="javascript:;" data-rel="inspiration">灵感</a></li>
                                    <li><a href="javascript:;" data-rel="talk">话题</a></li>
                                </ul>
                            </div>
                            <div class="search-select">
                                <input type="text" class="search-val" placeholder="请输入您要查找的内容" autocomplete="off" value="" name="keywords" id="keywords"/>
                                <ul class="options">
                                    <li><a href="javascript:;">icon</a></li>
                                    <li><a href="javascript:;">春节</a></li>
                                    <li><a href="javascript:;">app</a></li>
                                    <li><a href="javascript:;">作品集</a></li>
                                    <li><a href="javascript:;">AE</a></li>
                                </ul>
                            </div>
                        </div>
                        <input type="hidden" name="type" value='project' id="sType"/>
                        <a class="Hui-iconfont search-hd-btn" href="javascript:;">&#xe683;</a>
                    </form>
                </div>
                <?php if($login = session('login')){?>
                        <ul class="quick-hd cl">
                            <li class="quick-item">
                                <a class="quick-toggle" href="javascript:;">
                                    <img style="width: 53px;height: 53px;position: absolute;pointer-events: none;left: 4px;top: 4px;" src="<?php echo $user_info['logo'] ? $user_info['logo'] : '/public/static/public/face/'.$user_info['face'].'.png';?>"/>
                                </a>
                                <ul class="quick-menu quick-list">
                                    <li><a href="<?php echo url('start/user/index');?>">个人资料</a></li>
                                    <li><a href="">我的收藏</a></li>
                                    <li><a href="">我的简历</a></li>
                                    <li><a href="">修改资料</a></li>
                                    <li><a href="javascript:;" onclick="login_out(this);">退出登录</a></li>
                                </ul>
                            </li>
                            <div class="clean_float"></div>
                        </ul>

                <?php }else{?>
                    <div class="login-hd">
                        <a href="javascript:;" class="denglu_btn"><i class="Hui-iconfont">&#xe60d;</i> 登录</a>
                    </div>
                <?php }?>
            </div>
        </div><!-- wpn -->
    </div>
    <!--<a href="javascript:;" id="get-ip" style="position: absolute;top:28px;right: 50px;">位置：<?php echo get_ipCity() ? implode(' ',get_ipCity()) : '';?></a>-->
</div>
<!-- 	bg-white -->


<div id="wrapper" class="wpn mtv mbv cl">
	<div class="main works-main">
		<div class="works-top cl pos">
			<div class="left">
				<h1 id="p-title">
					<strong><?php echo $article_info['title'];?></strong>
				</h1>
				<div class="det cl">
					<span class="tag">自译外文</span>
					<span class="txt-gray1">分类：</span>

					<a class="txt-primary z" href="/exp.html?scatid=15" title="" target="_blank">经验/观点</a>
					<span class="txt-gray1">版权：</span>
					<div class="copyright pos">
						<i class="icon-copyright2"></i>
						<span class="text">保留作者信息</span>
					</div>
					<span class="txt-gray1">原作者：</span>
					<a class="txt-primary" href="https://blog.elpassion.com/senior-designer-isnt-a-dead-end-896d0bd08a92#.w74sv41bd" target="_blank" title="Michał Ptaszyński" >						Michał Ptaszyński</a>
				</div>
				<div class="det cl">
					<div class="msg z cl">
						<span><i class="icon-eye" title="浏览数"></i><em class="ll_number">3977</em></span>
						<span><i class="icon-star-solid" title="收藏数"></i><em class="sc_number">31</em></span>
						<span><i class="icon-leaf" title="点赞数"></i><em class="dz_number">52</em></span>
						<span><i class="icon-comment" title="评论数"></i><em id="ping-num" class="pl_number">7</em></span>
					</div>
					<span class="time"><i class="icon-time"></i><em>2017-01-05</em></span>

				</div>
			</div>
			<div class="right">
				<div class="hot">
					<i class="icon-hot"></i>
					<span class="num">25.3<strong>。</strong></span>
				</div>


			</div>

			<div class="tag-star tag-star1" title="首页推荐"><img src="/public/static/start/img/tag-star1.png" alt="首页推荐"></div>

		</div>
		<!-- .works-top -->
		<div class="works-cont editor-style ui-theme" id="p-content">
			<?php echo $article_info['content'];?>
			<pre>




















			</pre>
		</div>
		<!-- .works-cont -->

		<ul class="works-tag">
			<li><a href="http://s.ui.cn?keywords=设计" target="_blank"><i class="icon-tag"></i><span>设计</span></a></li><li><a href="http://s.ui.cn?keywords=ui" target="_blank"><i class="icon-tag"></i><span>ui</span></a></li><li><a href="http://s.ui.cn?keywords=分享" target="_blank"><i class="icon-tag"></i><span>分享</span></a></li><li><a href="http://s.ui.cn?keywords=经验" target="_blank"><i class="icon-tag"></i><span>经验</span></a></li><li><a href="http://s.ui.cn?keywords=产品设计" target="_blank"><i class="icon-tag"></i><span>产品设计</span></a></li>
		</ul><!-- works-tag -->
		<div class="works-bottom cl">
			<div class="share cl">
				<div class="weixin-box">
					<div id="qrcodeCanvas" style="display:inline-block"></div>
					<p style="top:-20px">打开微信“扫一扫”，将本文章分享到朋友圈</p>
					<a href="javascript:;"><i class="icon-close"></i></a>
				</div>
				<a href="javascript:;" id="share-sina"><i class="icon-sina"></i></a>
				<a href="javascript:;"><i class="icon-weixin1"></i></a>
				<a href="javascript:;" id="share-huaban"><i class="icon-huaban"></i></a>
				<a href="javascript:;" id="share-douban"><i class="icon-douban1"></i></a>
				<p class="tip">快给朋友分享吧！</p>
			</div>
			<ul class="oper">
				<li>
					<a href="javascript:;" id="p-collect" data="add"><i class="icon-star-solid"></i><strong>收藏</strong></a>
					<p class="tip txt-center"><em id="favnum">31</em>人已收藏</p>
				</li>			</ul>
			<div class="works-zan pos cl">
				<a class="iconfont p-like z" href="javascript:;" data="like">
					<div class="cont">
						<i class="icon-praise5 flower"></i>
						<span class="txt">赞</span>
						<em class="num like-num">52</em>
					</div>
				</a>

				<!--<a class="award y" href="javascript:;" data-target="#modal-pay" >
                <div class="cont2">
                    <i class="icon-renminbi"></i>
                    <span class="txt">打赏一下</span>
                    <em class="num like-num"></em>
                </div>
                </a>-->



			</div>
		</div><!-- works-bottom -->

		<div class="works-author cl">
			<a href="http://i.ui.cn/ucenter/362671.html" target="_blank" class="avatar-md z"><img src="/public/static/start/img/362671.jpg" alt=""></a>
			<div class="info z">
				<div>
					<h1></h1>
					<h1><a href="http://i.ui.cn/ucenter/362671.html" target="_blank" class="name ellipsis" id="p-author">厉嗣傲					<i class="icon-certified2" title="UI中国认证设计师"></i>										</a>

					</h1>
					<p class="intro ellipsis">UI/UX设计师</p>
					<p class="num"><em id="fan_num">440</em>粉丝/<em>59</em>关注</p>
				</div>
			</div>
			<div class="btn-group cl">
				<a class="btn-item letter_num" href="javascript:;" data-target="#modal-letter"><i class="icon-envelope-thin"></i><span>私信</span></a>
			</div>
			<div class="more">
				<!-- 该作者更多作品 -->
				<a class="item" href="#" target="_blank"><img src="/public/static/start/img/84039.png" alt="2016年UI设计趋势-回顾"></a><a class="item" href="" target="_blank"><img src="/public/static/start/img/84039.png" alt="粘稠滑动删除动效"></a>							</div>

		</div><!-- works-author -->

		<?php if(session('login')){?>
			<div class="edit-box">
				<form action="#">
				<textarea maxlength="500" class="reply-article-textarea" placeholder="说点什么..."></textarea>
				<p class="btn-line-p"><a href="javascript:;" class="Hui-iconfont reply-article-btn" onclick="submit_reply(this,<?php echo $article_info['id'];?>);">&#xe6df; 评 论</a></p>
				</form>
			</div>
		<?php }else{ ?>
		<div class="comment-login-box">
			<div class="comment-login cl">
				<p>大牛，别默默的看了，快登录帮我点评一下吧！<i class="Hui-iconfont" style="font-size: 25px;">&#xe68e;</i></p>
				<a class="btn btn-primary btn-fixed-100 y denglu_btn" href="javascript:void(0);" title="登录">登录</a>
				<a class="btn btn-nature y zhuce_btn" href="javascript:void(0);" title="立即注册">立即注册</a>
			</div>
		</div>
		<?php }?>

		<!-- 精彩评论 -->

		<!-- 全部评论 -->
		<ul class="comment-main cl zbd_item" id="com-list">
			<?php if($answers){
				foreach($answers as $key=>$val){
			?>
			<li class="item cl" id="reply-line">
				<a class="avatar-sm z" title="" href="javasctipt:;">
					<img src="<?php echo $val['uid']['logo'];?>" alt="logo">
				</a>
				<div class="comment-cont comment-data">
					<h5 class="user"><a href="javascript:;"><?php echo $val['uid']['username'];?></a><time><?php echo date('Y/m/d H:i:s',$val['addtime']);?></time></h5>
					<p class="text"><?php echo $val['content'];?></p>
					<div class="oper cl">
						<a class="Hui-iconfont p-replay" href="javascript:;" >&#xe6c5; 回复</a>
						<a href="javascript:;" class="Hui-iconfont">&#xe6aa;分享</a>
						<span class="oper-hide"></span>
					</div>
					<form action="#" class="reply_form">
						<input type="hidden" name="reply_article_answer_id" value="<?php echo $val['id'];?>">
						<textarea name="content" class="reply_textarea" placeholder="我也说一句.."></textarea>
						<p class="btn_line"><a href="javascript:;" class="canel_btn">取消 </a><a href="javascript:;" onclick="submit_reply(this,<?php echo $val['topic_id'];?>,<?php echo $val['id'];?>);" class="submit_btn">回复</a></p>
					</form>
				</div>
				<div class="clean_float"></div>
				<?php if(isset($val['children'])){
					foreach($val['children'] as $k=>$v){
				?>
					<div class="reply_children">
						<a class="avatar-sm z" title="" href="javascript:;">
							<img src="<?php echo $v['uid']['logo'];?>" alt="logo">
						</a>
						<div class="comment-cont comment-data">
							<h5 class="user"><a href="javascript:;"><?php echo $v['uid']['username'];?></a><time><?php echo date('Y/m/d H:i:s',$v['addtime']);?></time></h5>
							<p class="text"><?php if($v['reply_uid']){?><i>回复#</i><em><?php echo $v['reply_uid']['username'];?></em>：<?php }?><?php echo $v['content'];?> <a class="Hui-iconfont p-replay" href="javascript:;" >&#xe6c5;</a></p>
							<form action="#" class="reply_form">
								<textarea name="content" class="reply_textarea" placeholder="回复 <?php echo $v['uid']['username'];?>:"></textarea>
								<p class="btn_line"><a href="javascript:;" class="canel_btn">取消 </a><a href="javascript:;" onclick="submit_reply(this,<?php echo $v['topic_id'];?>,<?php echo $v['id'];?>);" class="submit_btn">回复</a></p>
							</form>
						</div>
					</div>
				<?php }}?>
			</li>
			<?php }}?>
			<a href="javascript:;" class="loading-more" page="2" topic="<?php echo $article_info['id'];?>" onclick="load_reply(this);">点击加载更多</a>
			<!--
			<li class="item cl">
				<a class="avatar-sm z" title="厉嗣傲" href="http://i.ui.cn/ucenter/362671.html">
					<img src="/public/static/start/img/362671_1.jpg" alt="厉嗣傲">
				</a>
				<div class="comment-cont comment-data">
					<h5 class="user"><a href="http://i.ui.cn/ucenter/362671.html">厉嗣傲</a><time>1-16 14:33</time></h5>
					<p class="text">加油吧！验证码需要使用function.php中的封装的函数,还需要用到测试用的key,和id,研究了好长时间才解决.</p>
					<div class="oper cl">
						<a class="Hui-iconfont p-replay" href="javascript:;" >&#xe6c5; 回复</a>
						<a href="javascript:;" class="Hui-iconfont">&#xe6aa;分享</a>
						<span class="oper-hide"></span>
					</div>
					<form action="#" class="reply_form">
						<textarea name="content" class="reply_textarea" placeholder="回复:111aaa"></textarea>
						<p class="btn_line"><a href="javascript:;" class="canel_btn">取消 </a><a href="javascript:;" onclick="submit_reply(this,1);" class="submit_btn">回复</a></p>
					</form>
				</div>
				<div class="clean_float"></div>
				<div class="reply_children">
					<a class="avatar-sm z" title="厉嗣傲" href="http://i.ui.cn/ucenter/362671.html">
						<img src="http://qzapp.qlogo.cn/qzapp/101376003/936580FC31437084909FEE5FEC35C646/50" alt="logo" width="100%" height="100%">
					</a>
					<div class="comment-cont comment-data">
						<h5 class="user"><a href="http://i.ui.cn/ucenter/362671.html">红尘</a><time>1-16 14:33</time></h5>
						<p class="text"><i>回复#</i><em>111aaa</em>：加油吧！验证码需要使用function.php中的封装的函数,还需要用到测试用的key,和id,研究了好长时间才解决 <a class="Hui-iconfont p-replay" href="javascript:;" >&#xe6c5;</a></p>
						<form action="#" class="reply_form">
							<textarea name="content" class="reply_textarea" placeholder="回复:111aaa"></textarea>
							<p class="btn_line"><a href="javascript:;" class="canel_btn">取消 </a><a href="javascript:;" onclick="submit_reply(this,1);" class="submit_btn">回复</a></p>
						</form>
					</div>
				</div>
			</li>
			-->

		</ul><!-- comment-main -->

	</div><!-- main works-main -->

	<div class="aside pos">
		<div class="works-author-aside cl"><!-- 上半部分-->
			<div class="zbd_warp pos cl">
				<p class="zbd_portrait"><a href="http://i.ui.cn/ucenter/362671.html" title="厉嗣傲" target="_blank">
					<img src="/public/static/start/img/362671.jpg" alt="厉嗣傲">
				</a></p>
				<p class="zbd_name">
					<a href="http://i.ui.cn/ucenter/362671.html" target="_blank">厉嗣傲</a>
					<a class="fuceng" href="http://cert.ui.cn?from=rz" title="UI中国认证设计师"><i class="icon-certified2"></i></a>										                                        				</p>
				<p class="zbd_introduce">UI/UX设计师</p>
				<div class="Occupying"></div>
				<div class="zbd_foot">
					<a class="zbd_left z" href="http://i.ui.cn/fans.html?id=362671&act=fans" title="粉丝">
						<em>粉丝</em><b id="fan-num">440</b>
					</a>
					<a class="zbd_right z" href="http://i.ui.cn/fans.html?id=362671&act=follow" title="关注">
						<em>关注</em><b>59</b>
					</a>
				</div>
				<!-- /*加关注*/ -->
				<div class="zbd_focus pos">
					<a class="z_follow iconfont " href="javascript:;" _rel="myfollow" data="follow">
						<i class="icon-add-bold"></i>
					</a>
				</div>
			</div>
			<!-- 	点赞评论 -->
			<div class="zbd_comments cl pos">
				<a class="zbd_one z arrow-left p-like zan-num" href="javascript:;" data="like">
					<b>赞</b>
					<em class="l-num">52</em>				</a>
				<a class="zbd_two z ping-num" href="javascript:;"title="">
					<b>评论</b><em id="pinglun_num">7</em>
				</a>
				<!-- 小三角 -->
				<div class="arrow-shadow">
				</div>
			</div>
			<div class="zbd_write pos">
				<form action="" onsubmit="return false">
					<textarea class="zbd_txt" id="textcomment" placeholder="大神，帮我看看我的作品？"></textarea>
					<button class="zbd_btn btn" id="fast-com">发布评论</button>
				</form>
			</div>
		</div><!-- 上半部分结束 -->
		<div class="uptop">
			<!-- 中部推荐 -->
			<div class="zbd_center works-look-aside">
				<!-- 相关推荐 -->
				<div class="rele">
					<h3>相关推荐</h3>
					<div class="img">
						<a href="/detail/182298.html" title="色彩想象力－迷之渐变色" target="_blank" class="xg_num">
							<img src="/public/static/start/img/211406.png" alt="色彩想象力－迷之渐变色">
							<div class="h-aside-show">
								<p>色彩想象力－迷之渐变色</p>
							</div>
						</a>
					</div>
				</div>								<!-- 文章推荐 -->
				<div class="article">
					<h3 class="cl">小U妹文章推荐
						<em class="y">
							<div class="cl" id="change">
								<i class="icon-refresh z"></i>
								<span class="z">换一换</span>
							</div>
						</em>
					</h3>					<div class="cont">
					<div class="top cl" id="hot">
						<div class="img z">
							<a href="/detail/203952.html" class="hot_num" title="2017首发-Music 概念设计 （含动态展示）" target="__blank">
								<img src="/public/static/start/img/loading.gif"  alt="2017首发-Music 概念设计 （含动态展示）">
							</a>
						</div>
						<div class="tit z">
							<div class="h1">
								<a href="/detail/203952.html" class="hot_num" title="2017首发-Music 概念设计 （含动态展示）" target="__blank">
									2017首发-Music 概念设计 （含动态展示）									</a>
							</div>
							<em class="time">2017-01-16</em>
						</div>
					</div>						<div class="down">
					<ul id="art-list">
						<li class="cl">
							<i class="z">•</i>
							<a class="z art_num" href="/detail/198009.html" title="2017 UI流行趋势 - 色彩探索" target="__blank">
								2017 UI流行趋势 - 色彩探索											</a>
						</li><li class="cl">
						<i class="z">•</i>
						<a class="z art_num" href="/detail/183424.html" title="看了那么多文章，可能你还是不会排版:)" target="__blank">
							看了那么多文章，可能你还是不会排版:)											</a>
					</li><li class="cl">
						<i class="z">•</i>
						<a class="z art_num" href="/detail/201209.html" title="百度网盘web端项目总结 " target="__blank">
							百度网盘web端项目总结 											</a>
					</li>								</ul>
				</div>					</div>
				</div>
			</div>

		</div><!-- 下半部分点赞评论结束 -->
	</div>

	<!-- aside works-aside -->
</div><!-- wpn -->
<!-- 私信弹出框 -->
<!-- 打开弹框按钮  data-target="#modal-letter" -->
<div id="modal-letter" class="modal">
	<div class="modal-effect">
		<div class="modal-letter">
			<i class="icon-close popup-close"></i>
			<div class="popup-info cl pos">
				<h2>给<a href="javascript:;">厉嗣傲</a>发私信</h2>
				<textarea class="popup-text" id="textarea-letter" name="lettersval" type="text" placeholder="大牛，别默默的看了，快帮我点评一下吧！"></textarea>
				<p class="word-warn">还可以输入<span>200</span>个字</p>
			</div>
			<div class="mtm cl">
				<button id="comm-submit" type="submit" class="btn btn-primary y">确定</button>
				<span class="tip y">Ctrl+Enter</span>
			</div>
		</div>
	</div>
</div>

<!-- 支付弹出框 -->
<!-- 打开弹框按钮  data-target="#modal-pay" -->
<div id="modal-pay" class="modal">
	<div class="modal-effect">
		<div class="modal-pay">
			<i class="icon-close popup-close"></i>
			<p>你的打赏就是我的动力！</p>
			<p class="word-warn">悄悄说，听说打赏的人收入都比我高，不信你试试。 </p>
			<div class="mtm cl">
				<img src="/public/static/start/img/loading.gif" class="z"/>
				<img src="/public/static/start/img/loading.gif" class="y"/>
			</div>
			<p>注: 打赏金额随意，完成后，请手动关闭本窗口。</p>
		</div>
	</div>
</div>



<!-- 举报弹出框 -->
<!-- 打开弹框按钮  data-target="#modal-inform" -->
<div id="modal-inform" class="modal">
	<div class="modal-effect">
		<div class="modal-letter">
			<i class="icon-close popup-close"></i>
			<div class="popup-info cl">
				<h2 class="">举报理由:</h2>
				<label for="examinetype1">
					<input id="examinetype1" type="radio" name="examinetype" value="1" checked="">垃圾、广告信息
				</label>
				<label for="examinetype2">
					<input id="examinetype2" type="radio" name="examinetype" value="2">色情、低俗内容
				</label>
				<label for="examinetype3">
					<input id="examinetype3" type="radio" name="examinetype" value="3">时政敏感话题
				</label>
				<label for="examinetype4">
					<input id="examinetype4" type="radio" name="examinetype" value="4">其他原因
				</label>
				<textarea style="display:none;" class="popup-text popup-text-let" id="textarea-report"  name="examinecomment" type="text"></textarea>
			</div>
			<div class="mtm cl">
				<button id="report-submit" type="submit" class="btn btn-primary y">确定</button>
				<span class="tip y">Ctrl+Enter</span>
			</div>
		</div>
	</div>
</div>
<!-- 删除弹框 -->
<div class="modal modal_de">
	<div class="modal-effect">
		<div class="modal-delet">
			<i class="icon-close"></i>
			<p class="title">删除经验</p>
			<p class="tip">您将要删除您的<em>首页推荐</em>大作</p>
			<p class="tit">新年目标：三条路径成为经验丰富的设计师</p>
			<p class="sent">在她入驻到UI中国的日子里</p>
			<div class="contents">
				<p>总共吸引了<em>3977</em>位设计师的驻足流连</p>
				<p>总共收获了<em>52</em>位设计师的由衷赞赏</p>
				<p>总共获得了<em>31</em>位设计师的悉心珍藏</p>
				<p>总共引起了<em>7</em>位设计师的深入讨论</p>
			</div>
			<p class="still">
				<em>依然要删除吗？</em>
			</p>
			<div class="mobtn">
				<p class="cl">
					<a class="z yes" href="javascript:;">残忍删除</a>
					<a class="z no close-btn" href="javascript:;">太可惜,不删了</a>
				</p>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var userid = "";
	var uid = "362671";
	var pid = "201560";
	var state = "";
	var email = "";
	var user = "";
	var catid = "15";
	var actid = "0";
	var type = "2";


	$("a[name='p-down0']").click(function(){
		var url = $(this).attr("src");
		globalTip({'msg':'正在为您准备下载','setTime':2});
		updateTime();
		window.open(url);
		return false;
	});

	$("a[name='p-down1']").click(function(){
		globalTip({'msg':'请登录后再下载素材','setTime':3,'URL':'http://ui.cn/login.html','jump':true});
		return false;
	});

	$("a[name='p-down2']").click(function(){
		var url = $(this).attr("src");
		globalTip({'msg':'您的邮箱或电话还未进行验证，每小时仅可下载1个素材','setTime':3});
		updateTime();
		window.open(url);
		return false;
	});

	$("a[name='p-down3']").click(function(){
		globalTip({'msg':'您的邮箱或电话还未进行验证，每小时仅可下载1个素材','setTime':3,'URL':'http://account.ui.cn/accountinfo.html','jump':true});
		return false;
	});

	function updateTime() {
		$.ajax({
			url:"http://ui.cn/updateLastDownloadTime",
			type:'post',
			data:{
				time:0        },
			dataType:'JSONP',
			success:function(data){
				alert(data);
				globalTip({"msg":"开始下载","setTime":3});
			},
			error:function(XMLHttpRequest, textStatus, errorThrown){
				globalTip({"msg":"下载错误,请重试！","setTime":3});
			},

		});
	}
	//删除作品
	jQuery(document).ready(function($) {
		$(document).on('click','[window-target]',function(){
			// 获取弹框id
			var modalBox = $(this).attr('window-target');
			var modalBoxPos = $(modalBox).find(".modal-effect")
			// 显示弹框
			modal_1(modalBox,modalBoxPos);
		});
		$(".icon-del").click(function(event) {
			var ll_number=parseInt($(".ll_number").html());
			var sc_number=parseInt($(".sc_number").html());
			var dz_number=parseInt($(".dz_number").html());
			var pl_number=parseInt($(".pl_number").html());
			if (ll_number<5&&sc_number==0&&dz_number==0&&pl_number==0) {
				firm();
			}
			else{
				$('body').addClass('modal-open').append('<div class="modal-backdrop"></div>');
				$(".modal_de").attr({
					"id": 'modal-del',
				});
			}
		});
		function firm()
		{
			//利用对话框返回的值 （true 或者 false）
			if(confirm("您确定要删除作品吗"))

			{
				$.ajax({
					type:'post',
					url:'/delProject',
					data:{'pid':pid,'uid':uid,'actid':actid},
					dataType:'json',
					success:function(msg){
						if(msg.code == 1){

							globalTip(msg);
						}else{
							globalTip(msg);
							return false;
						}

					}
				})

			}
			else{
				return false;
			}
		}
		modalPostion = function(pos) {
			//获取改变之后的宽度
			var changeWidth=$(window).width();
			var changeHeight=$(window).height();
			// 获取DIV宽度
			var smallW = $(pos).width();
			var smallH = $(pos).height();
			//计算宽度修改比例
			var divChangeWidth	=	(changeWidth - smallW) / 2;
			var divChangeHeight	=	(changeHeight - smallH) / 2;
			// 超过一屏幕的上下不居中给margin值
			if( divChangeHeight > 0 ) {
				$(pos).css('top', divChangeHeight);
				$(pos).css('left', divChangeWidth);
			} else {
				$(pos).css('left', divChangeWidth);
				$(pos).css('margin', "30px 0");
			}


		};

		modal_1 = function(box,pos) {
			// 浮动窗口定位
			modalPostion(pos);

			// 显示
			$('body').css('padding_right','15px');
			$(box).addClass("in");

			$(window).resize(function(){
				// 浮动窗口定位
				modalPostion(pos);
			});

			// 点击关闭按钮以及遮罩层时关闭浮动层
			$('.icon-close, .modal-backdrop').bind('click', function(){
				$(box).removeClass("in");
				$('.modal-backdrop').remove();
				$('body').removeClass("modal-open");
				$('body').css('padding_right','0');
			});

			// 点击关闭按钮以及遮罩层时关闭浮动层
			$('.close-btn, .modal-backdrop').bind('click', function(){
				$(box).removeClass("in");
				$('.modal-backdrop').remove();
				$('body').removeClass("modal-open");
				$('body').css('padding_right','0');
			});
		};

//	p标签内的文字处理
		$("#p-content p").each(function(i,e){
			if($(e).find("img").length>0){
				$(this).addClass("p-content-img");
			}
		})


	});



</script>


<div class="ft-wp">
	<div class="wpn cl">
		<div class="ft cl">
			<i class="icon-uimini"></i>
			<div class="ft-info">
				<ul class="ft-nav cl">
					<li><a href="http://www.ui.cn/about.html#section-3" target="_blank">商务合作</a></li>
					<li><a href="http://qa.ui.cn/" target="_blank">意见反馈</a></li>
					<li><a href="http://www.ui.cn/about.html#section-0" target="_blank">关于我们</a></li>
					<li><a href="http://www.ui.cn/about.html#section-3" target="_blank">联系我们</a></li>
					<li><a href="http://www.ui.cn/about.html#section-1" target="_blank">版权声明</a></li>
					<li><a href="http://www.ui.cn/about.html#section-2" target="_blank">隐私保护</a></li>
				</ul>
				<p class="copy"><a href="http://www.miibeian.gov.cn/">京ICP备14007358号-1</a> / 京公网安备11010802014104号 / Powered by &copy; 2008-2017 UI.CN</p>
				<div class="ft-share cl">
					<a id="ft-wx" class="share iconfont pos" title="微信" href="javascript:;" target="_blank" rel="nofollow">
						<i class="icon-weixin1"></i>
						<div class="ft-wx-show"></div>
					</a>

					<a class="share iconfont pos" title="新浪微博" href="http://www.weibo.com/iconfans" target="_blank" rel="nofollow">
						<i class="icon-sina"></i>
					</a>
					<a class="share iconfont pos" title="腾讯QQ" href="http://wpa.qq.com/msgrd?v=3&uin=1369535553&site=qq&menu=yes" target="_blank" rel="nofollow">
						<i class="icon-qq"></i>
					</a>

					<a class="anquan" rel="nofollow" key="544db0a1efbfb029d492a013" logo_size="83x30" logo_type="business" href="http://www.anquan.org" >
					</a>

					<style>
						#kx_verify_link { width: 79px; height: 28px; }
					</style>
					<span class="kexin" id="kx_verify"></span>
					<script type="text/javascript">
						(function (){var _kxs = document.createElement('script');_kxs.id = 'kx_script';_kxs.async = true;_kxs.setAttribute('cid', 'kx_verify');_kxs.src = ('https:' == document.location.protocol ? 'https://ss.knet.cn' : 'http://rr.knet.cn')+'/static/js/icon3.js?sn=e14110511010655874a7k9000000&tp=icon3';_kxs.setAttribute('size', 2);var _kx = document.getElementById('kx_verify');_kx.parentNode.insertBefore(_kxs, _kx);})();
					</script>
					  <a class="qinu" style="width:72px;height:30px;float: left;margin: 5px;" href="http://www.qiniu.com/" target="blank_">
                        <img src="/public/static/start/img/qiniu.png" alt="">
                    </a>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="scrollUp" class="scrollup">
	<a class="arrows" title="返回顶部" href="javascript:;"></a>
	<a class="feedback" title="反馈" target="_blank" href="http://qa.ui.cn/"><em>反馈</em></a>
</div>
</body>
<script type="text/javascript" src="/public/static/start/js/form.js"></script>
<script src="/public/static/start/js/reply.js"></script>
</html>