<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("comhead.php"); ?>
	<title>评价中心</title>
	<meta name="apple-mobile-web-app-title" content="小麦购物-评价中心">
	<!-- 轮播插件 -->
	<link rel="stylesheet" href="js/swiper/swiper.min.css">
	<script src="js/swiper/swiper.min.js"></script>
	<link rel="stylesheet" href="css/comment.css">
	<?php 
		// 模拟评论数据
		$commentData = [
			[
				"face"	=> "images/face.png",
				"name"	=> "李二福",
				"detail"=> "关注这块手表很久了，一直想购买。最终还是买下了还是非常不错的。电池很好用。整体外形很不错。喜欢他的外表形状。很爱的宝贝，喜欢的不行不行~",
				"thumb"	=> ["images/pinglun1.png", "images/pinglun2.png", "images/pinglun3.png", "images/pinglun2.png"],
				"type"	=> ["经典款","黑色"],
				"data"	=> "2018-4-15"
			],
			[
				"face"	=> "images/face.png",
				"name"	=> "李二福2",
				"detail"=> "一直想购买。最终还是买下了还是非常不错的。电池很好用。整体外形很不错。喜欢他的外表形状。很爱的宝贝，喜欢的不行不行~",
				"thumb"	=> ["images/pinglun2.png", "images/pinglun3.png", "images/pinglun2.png","images/pinglun1.png"],
				"type"	=> ["时尚款","红色"],
				"data"	=> "2018-4-16"
			]
		]
	?>
</head>
<body>
	<div class="comment">
		<div class="dis">
			<span class="s1">共146人参与评论</span>
			<span class="s2">好评率：<span class="red">100%</span></span>
		</div>
		<div class="label">
			<label><input type="radio" name="label" checked="checked"><span>全部</span></label>
			<label><input type="radio" name="label"><span>有图(5)</span></label>
			<label><input type="radio" name="label"><span>追加(5)</span></label>
			<label><input type="radio" name="label"><span>追加(5)</span></label>
			<label><input type="radio" name="label"><span>追加(5)</span></label>
		</div>
		<!-- 评论列表 -->
		<ul class="comment-list">
			<?php foreach ($commentData as $k => $v) { ?>
				<li class="list"> 
					<div class="face"><img src="<?php echo $v['face']; ?>"></div> 
					<div class="guest"> 
						<div class="info"> 
							<h4 class="name"><?php echo $v['name']; ?></h4> 
						</div> 
						<p class="detail"><?php echo $v['detail']; ?></p> 
						<div class="thumb" thumblist="<?php echo'list'.($k+1); ?>">
							<?php foreach ($v['thumb'] as $k1 => $v1) { 
								echo '<img src="'.$v1.'">';
							} ?>
						</div> 
						<div class="info info2">
							<div class="type">
								<?php foreach ($v['type'] as $k1 => $v1) { 
									echo '"<span>'.$v1.'</span>" ';
								} ?>
							</div> 
							<div class="date"><?php echo $v['data']; ?></div>
						</div>
					</div> 
				</li>
			<?php } ?>
		</ul>
	</div>
	<!-- Swiper -->
	<div class="swiper-container" id="origin-img">
		<div class="swiper-wrapper"></div>
		<div class="swiper-pagination"></div>
	</div>
	<script>
		//  评论图片点击放大滑动
		var swiperStatus=false;
		// imgsdata 获取评论的图片
		imgsdata={
			<?php foreach ($commentData as $k => $v) { ?>
				"<?php echo 'list'.($k+1); ?>":<?php echo json_encode($v['thumb'],JSON_UNESCAPED_SLASHES); ?>,
			<?php } ?>
		}
		// end 评论的图片

		var swiper = new Swiper('.swiper-container',{
			zoom:true, 
			width: window.innerWidth, 
			virtual: true, 
			spaceBetween:20, 
			pagination: {
				el: '.swiper-pagination', 
				type: 'fraction', 
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
		$('.thumb img').click(function(){
			clickIndex=$(this).index(); 
			imglist=$(this).parent().attr('thumblist'); 
			imgs = imgsdata[imglist]; 
			for(i=0;i<imgs.length;i++){
				swiper.virtual.appendSlide('<div class="swiper-zoom-container"><img src="'+imgs[i]+'" /></div>'); 
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
</script>
</body>
</html>