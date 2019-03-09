<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("comhead.php"); ?>
	<!-- 添加到主屏后的标题（iOS 6 新增） -->
	<meta name="apple-mobile-web-app-title" content="小麦购物-详情页">
	<title>详情页</title>
	<!-- 轮播插件 -->
	<link rel="stylesheet" href="js/swiper/swiper.min.css">
	<script src="js/swiper/swiper.min.js"></script>
	<!-- 详情页样式 -->
	<link rel="stylesheet" href="css/pro.css?1.0">
</head>
<body>
	<!-- 详情页 -->
	<div class="proD">
		<?php
			//轮播图片数据
			$banData = ["images/proImg.png","images/proImg.png","images/proImg.png"];
		?>
		<!-- 轮播 -->
        <?php  $lunbosate = [
                [
                    'src' => "news/images/banner.png",
                    'link' => "news",
                    'dis' => "news"
                ],
                [
                    'src' => "activity/tuangou/images/banner.png",
                    'link' => "activity/tuangou",
                    'dis' => "拼团活动"
                ],
                [
                    'src' => "activity/fanpai/images/banner.jpg",
                    'link' => "activity/fanpai",
                    'dis' => "翻拍活动"
                ],
                [
                    'src' => "activity/1yuan/images/top.jpg",
                    'link' => "activity/1yuan",
                    'dis' => "1元"
                ],
        ]; ?>
		<div class="banner">
			<div class="swiper-container" id="pro-banner">
				<div class="swiper-wrapper">
                    <?php foreach ($lunbosate as $k => $v){ ?>
                        <div class="swiper-slide"><a href="<?php echo $v['link']; ?>"><img src="<?php echo $v['src']; ?>" alt="<?php echo $v['dis']; ?>"></a></div>
                    <?php } ?>
					<?php foreach ($banData as $k => $v) { ?>
					    <div class="swiper-slide">
					    	<img src="<?php echo $v ?>">
					    </div>
					<?php } ?>
				</div>
				<div class="swiper-pagination"></div>
			</div>
			<div class="swiper-container" id="origin-img">
				<div class="swiper-wrapper"></div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
		<!-- 描述 -->
		<div class="dis">
			1963年第一辆911诞生，50多年来不断超越自己，现在再次用传奇刷新纪录，纯正跑车的理想设计值得你的拥有。
		</div>
		<!-- 价格 -->
		<div class="pri">
			<span class="red">¥<b class="b1">399</b></span>
			<s class="gray">¥499</s>
			<span class="right gray">已售1000</span>
		</div>
		<!-- 下载 -->
		<div class="downapp">
			<div class="d1">
				<p>下载APP后，购买该商品可立减</p>
				<p>¥<b>10</b></p>
			</div>
			<div class="d2">
				<a href="javascript:;">下载APP</a>
			</div>
		</div>
		<!-- 优惠券 -->
		<a href="javascript:;" class="btnTiao" onclick="$(youhuiTan).show()">
			<span class="s1">优惠券</span>
			<span class="gray">全场通用优惠券</span>
		</a>
		<!-- 评论 -->
		<a href="comment.php" class="btnTiao">
			<span class="s1">评论</span>
			<span class="gray">145条评论</span>
		</a>
        <!-- 活动 -->
        <a href="activity/fanpai" class="btnTiao"><span class="s1">翻拍活动</span></a>
        <a href="activity/1yuan" class="btnTiao"><span class="s1">1元购</span></a>
		<!-- 详情图 -->
		<div class="proI">
			<img src="images/proImg.png" alt="详情图1">
		</div>
		<!-- 底部功能条 -->
		<div class="botT">
			<a href="activity/fanpai" class="a1">
				<img src="images/kefu.png" alt="客服">
				<span>客服</span>
			</a>
			<a href="javascript:;" class="a2" onclick="$(typesChose).show();">加入购物车</a>
			<a href="javascript:;" class="a3" id="ljgm">立即购买</a>
			<!-- 悬浮购物车 -->
			<a href="shopcart.php" class="cartD">
				<img src="images/cart.png" alt="购物车">
				<p>购物车</p>
				<span class="num">1</span>
			</a>
		</div>
		<?php 
			// 型号选择模拟数据
			$choseType = [
				"color" => [
					"name" => "颜色",
					"types" => ["黑色","白色","红色","绿色","绿色绿","色蓝色蓝色","蓝色"]
				],
				"size" => [
					"name" => "尺码",
					"types" => ["M","L","XL","XXL"]
				]
			]
		?>
		<!-- 型号选择弹窗 -->
		<div class="tan" id="typesChose">
			<div class="tanNr choseTan">
				<div class="proInfo">
					<div class="proI">
						<img src="images/proImg.png">
					</div>
					<div class="priD">
						<p class="p1 red">¥<b>399</b></p>
						<p class="p2">请选择 <?php foreach ($choseType as $k => $v){ echo $v['name'].' ';} ?></p>
					</div>
				</div>
				<!-- 读取型号选择数据 -->
				<?php foreach ($choseType as $k => $v) { ?>
					<div class="choseD">
						<div class="tit"><?php echo $v['name']; ?></div>
						<div class="chose">
							<?php foreach ($v['types'] as $k1 => $v1) { ?>
								<label>
									<input type="radio" name="<?php echo $k; ?>" <?php if($k1 == 0){echo "checked='checked'";} ?>> 
									<span><?php echo $v1; ?></span>
								</label>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
				<div class="numD">
					<div class="tit">数量</div>
					<div class="chose">
						<span class="cz" data-type="sub">-</span>
						<input type="tel" value="1" name="num">
						<span class="cz" data-type="add">+</span>
					</div>
				</div>
				<div class="btnD"> <a href="javascript:;"  onclick="$(typesChose).hide()" class="a1">确认</a> </div>
				<div class="close"><img src="images/close.png" alt="关闭"></div>
			</div>
		</div>
		<!-- 优惠券弹窗 -->
		<div class="tan" id="youhuiTan">
			<div class="tanNr choseTan">
				<h2 class="tit">优惠券弹窗</h2>
				<div class="choseD">
					<div class="tit">领券</div>
					<ul class="yh red">
						<?php for ($i = 0;$i <4;$i++){ ?>
						<li>
							<div class="d1">
								<p class="p1">¥<b>10</b> 商品优惠券</p>
								<p class="p2">全场通用</p>
								<p class="p2">有效期 2018.11.01—2018.11.30</p>
							</div>
							<div class="d2">立即领取</div>
						</li>
						<?php } ?>
					</ul>
				</div>
				<div class="btnD"> <a href="javascript:;" onclick="$(youhuiTan).hide()" class="a1">完成</a> </div>
			</div>
		</div>
		<!-- 登陆框 -->
		<div class="tan loginD" id="loginTan" style="display: none;">
			<div class="tanNr">
				<div class="tit">为保证账号安全，请绑定手机号</div>
				<div class="d1">
					<input class="inp1" type="tel" placeholder="请输入手机号码">
				</div>
				<div class="d1 d2">
					<input class="inp1" type="tel" placeholder="请输入验证码">
					<a class="a1" href="javacript:;">获取验证码</a>
				</div>
				<div class="btnD">
					<a href="javascript:;" class="a1" onclick="$(loginTan).hide()">取消</a>
					<a href="javascritp:;" class="a2" onclick="$(loginTan).hide()">确定</a>
				</div>
			</div>
		</div>
		<!-- 提示弹出 -->
		<div class="tishiT"><span class="d1">提示弹出</span></div>
	</div>
	<script>
		// 轮播
		var mySwiper = new Swiper('#pro-banner', {
			autoplay: true,//可选选项，自动滑动
			pagination: {
				el: '#pro-banner .swiper-pagination',
			},
		})

		// 放大banner轮播图
		var swiperStatus=false;
		// imgsdata 获取banner的图片
		imgs = [<?php foreach ($banData as $k => $v) { echo json_encode($v,JSON_UNESCAPED_SLASHES).','; } ?>];
		
	
		
		var swiper = new Swiper('#origin-img',{
			zoom:true, 
			width: window.innerWidth, 
			virtual: true, 
			spaceBetween:20, 
			pagination: {
				el: '#origin-img .swiper-pagination', 
				type: 'fraction', 
			},
			controller: {
				control: mySwiper, //控制Swiper1 
			},
			on:{
				click: function(){
					$('#origin-img').fadeOut('fast'); 
					this.virtual.slides.length=0; 
					this.virtual.cache=[]; 
					swiperStatus=false; 
				}, 
			}, 
		}); 
		$('#pro-banner img').click(function(){
			clickIndex=mySwiper.clickedIndex;
			for(i=0;i<imgs.length;i++){
				swiper.virtual.appendSlide('<div class="swiper-zoom-container"><img src="'+imgs[i]+'" /></div>')
			}
			swiper.slideTo(clickIndex); 
			$('#origin-img').fadeIn('fast'); 
			swiperStatus=true; 
		}) 

		//切换图状态禁止页面缩放
		document.addEventListener('touchstart',function (event) {
			if(event.touches.length>1 && swiperStatus){
				event.preventDefault(); 
			} 
		})
	    var lastTouchEnd=0; 
	    document.addEventListener('touchend',function (event) {
	        var now=(new Date()).getTime();  
	        if(now-lastTouchEnd<=300){  
	            event.preventDefault();  
	        }  
	        lastTouchEnd=now;  
	    },false) 
	    document.addEventListener('touchmove',function(e){
	    	if(swiperStatus){
	    		e.preventDefault(); 
	    	} 
	    })


		var winH = $(window).height();

		// 领取优惠券
		$(function(){
			$(".choseTan ul.yh li").click(function () {
				if(!$(this).is(".ylq")){
					$(".tishiT .d1").text("恭喜您领取成功");
					$(".tishiT").show();
					setTimeout(function () {
						$(".tishiT").hide();
					},1000)
					$(this).addClass("ylq");
				}

			})
			//点击立即购买
			$("#ljgm").click(function () {
				$("#loginTan").show().css("min-height",winH);
				//页面不滚动
				$(".proD").css({"height":(winH-40),"overflow-y":"hidden"});
				$("#loginTan .btnD a").click(function () {
					//页面滚动
					$(".proD").css({"height":"auto","overflow-y":"unset"});

				});
			})
		})
	</script>
</body>
</html>