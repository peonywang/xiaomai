<!-- /**
 * @Author: pengyuchen
 * @Date:   2016-11-01 16:56:17
 * @Last Modified by:   wgh
 * @Last Modified time: 2016-11-04 16:47:19
 */
 -->
 <!doctype html>
<html>
<head>
	<?php include $_SERVER['DOCUMENT_ROOT']."/wechat/src/head.html" ?>
	<title>双十一活动</title>
	<link rel="stylesheet" type="text/css" href="css/shuang.css">
	<style>
		body{max-width: 750px;margin: 0 auto}
		.banner{position: relative;}
		.banner .bg{width: 100%;display: block;}
		.guize{background: #5f00a7;box-shadow: 0 0 133px #a539ff inset;width: 90%;margin: -26% auto 0;position: absolute;border-radius: 10px;left: 5%}
		.guize .gz{width: 90%;margin: 0 auto;display: block;padding: 7% 0}
		.banner p{display: block;width: 40%;height: 36px;line-height: 36px;background: -webkit-linear-gradient(top, #f52c78 0%,#b52a5c 100%);background:linear-gradient(top, #f52c78 0%,#b52a5c 100%);position: absolute;text-align: center;color: #fff;font-size: 15px;border-radius: 20px;left: 30%;bottom: -20px}
		.game{width: 100%;background: url(imagesbak/bg1.jpg) repeat center top/cover;padding: 0 0 5% 0;text-align: center;}
		.game .puke{width: 30%;vertical-align: middle;}
		.game .game_tit{margin: 0 auto -4%;width: 80%;text-align: left;position: relative;z-index: 2;}
		.game .hezi{background: url(imagesbak/hezi.png)no-repeat center center/contain;width: 92%;margin: 0 auto 6%;position: relative;}
		.game span{color: #fff;font-size: 12px;position: absolute;right: 0;bottom: 13%;line-height: 18px;}
		.game span b{display: inline-block;height: 17px;width: 23px;background: #4f179c;border-radius: 3px;margin:0 5px;text-align: center;}
		.game ul{width: 84%;margin: 0 auto;padding: 8% 0;position: relative;}
		.game ul li{float: left;width: 32.6%;margin: 1% 0 0 1%}
		.game ul .mg0{margin: 1% 0 0 0}
		.game .kaishi{background: url(imagesbak/begin.png) no-repeat 100% 100% /cover;box-shadow: 0 0 24px rgba(112,8,69,.5);}
		.game .kaishi img{width: 90%;padding: 5% 0 11.3%;margin: 0 auto;box-shadow: none}
		.game ul li img{display: block;height: 100%;width: 100%;box-shadow: 0 0 24px rgba(112,8,69,.5);}
		
		.more{width: 100%;background: url(imagesbak/bg2.jpg) repeat center top/cover;padding: 0 0 5% 0;text-align: center;}
		.more .more_tit{display: block;width: 70%;margin-left: 5%}
		.more ul{width: 90%;margin: 0 auto}
		.more ul li{float: left;width: 50%;margin-top: 5%}
		.more ul li img{width: 80%;position: relative;}
		.more ul li .dizuo{margin-top: -25%}
		.more ul li .more2{position: relative;left: 0;top: 0}
		.more ul li .more2 span{color: #fff;font-size: 20px;left: 50%;margin-left:-30px;position: absolute;top: 36%;}
		.more li p{color: #fff;font-size: 14px;text-shadow:0 0 8px #c464f8,0 0 8px #c464f8,0 0 8px #c464f8;margin-top: -10%;}
		.more h3{font-size: 12px; color: #fff;font-weight: normal;margin: 32px auto}
		.fenxiang{position: fixed;bottom: 0;display: block;height: 40px;width: 100%;line-height: 40px;color: #fff;font-size: 17px;text-align: center;background: -webkit-linear-gradient(#f52c78 0%, #b52a5c 100%);background: -o-linear-gradient(#f52c78 0%, #b52a5c 100%);background: linear-gradient(#f52c78 0%, #b52a5c 100%); max-width: 750px;}
		
		/* 走马灯 */
		.zmd{position: absolute;width: 95%;left: 2%;top: 3%;display: none}
		.zmd2{position: absolute;width: 95%;left: 2%;top: 3%;}
		/* .zmd{animation:zmd linear 1s infinite;-webkit-animation:zmd linear 1s infinite;}
		@keyframes zmd{
			0%{opacity:1;}
			50%{opacity:0;}
		}
		.zmd2{animation:zmd2 linear 1s infinite;-webkit-animation:zmd2 linear 1s infinite;}
		@keyframes zmd2{
			0%{opacity:0;}
			50%{opacity:1;}
		} */
		.shuangTan h2{
			height: 40px;
			line-height: 38px;
			text-align: center;
			color: #FFF;
			font-style: ;18px;
			font-weight: normal;
			background: url(imagesbak/tanTitBg.png) no-repeat center top /auto 100%;
			position: relative;
			top:25px;
			z-index: 5;
		}
		.shuangTan{
			/* background:   center 50% /  */
			background-color: rgba(0, 0, 0, 0.5);
			background-image: url(imagesbak/Tbj.png);
			background-repeat: no-repeat;
			box-sizing: border-box;
		}
		.shuangTan .nrk{
			padding: 8px;
			background:-moz-linear-gradient(left top, #b823d3 0% , #700fa7 58% , #9e1cc3 100%);
			background:-webkit-linear-gradient(left top, #b823d3 0% , #700fa7 58% , #9e1cc3 100%);
			background:linear-gradient(left top, #b823d3 0% , #700fa7 58% , #9e1cc3 100%);
			width: 80%;
			margin: 0 10%;
			box-sizing: border-box;
			border-radius: 10px;
			position: relative;
		}
		.shuangTan .nr{
			background: #fff5ed; 
			border-radius: 4px;
			padding: 25px 14px;
			color: #5f00a7;
			font-size: 13px;
			line-height:22px;
		}
		.shuangTan .nrText{
			overflow-y:scroll;
			width: 100%;
		}
		/* .shuangTan .nr h3{font-weight: normal;} */
		.shuangTan .nr .nrText h3{margin-top: 10px;}
		.shuangTan .nr .nrText h3:first-child{margin-top: 0;}
		.shuangTan .nr .nrText li{
			margin-top: 5px;
		}
		.shuangTan .btn{text-align:center;margin-top: 40px} 
		.shuangTan .nr .juan1{height:80px;background: url(imagesbak/tuo.png) no-repeat center top /100% 100%;margin-bottom:3px;}
		.shuangTan .nr .juan1 .left{padding:20px 0; text-align: center;margin:0 auto; width:64%;float: left;}
		.shuangTan .nr .juan1 .left p:first-child{color:#000; font-size: 14px;}
		.shuangTan .nr .juan1 .left p:nth-of-type(2){color:#888; font-size: 12px;margin-top:-3px;text-align: center;}
		.shuangTan .nr .juan1 .left p:nth-of-type(2) a{color:red;}
		.shuangTan .nr .juan1 .right{color:#fff;font-size: 16px;padding:30px 0;width:36%;float: left;text-align: center;}
		.tan_fen{width: 100%;height: 100%;background: rgba(0,0,0,.5);position: fixed;z-index: 11;left: 0;top: 0;display: none}
		.tan_fen img{position: absolute;right: 10%;top: 5%;width: 60%}
		.more ul li{position: relative;}
		.more2{animation:3s ease .1s infinite running mymove;}

			 @keyframes mymove{
				0%{top: 0}
				25%{top: -10px}
				50%{top: 0}
				75%{top: -10px}
				100%{top: 0}
			}
	</style>
</head>
<body>


	<?php 

		//按钮状态: an 
		//浮动框状态:fu
		//an:1.未参与;2.可点击;3.不可点击
		//fu:1.立即参与;2.分享好友
		
	
		//按钮
		if (@$_GET['an']) {
			$status_an=$_GET['an'];
		}else{
	        $status_an=2;//投标中
	    }
	    //浮动框
	    if (@$_GET['fu']) {
			$status_fu=$_GET['fu'];
		}else{
	        $status_fu=2;//投标中
	    }


	 ?>
	<div class="w750">
		<div class="banner">
			<img src="imagesbak/banner.jpg" alt="" class="bg">
			<div class="guize">
				<img src="imagesbak/guize.png" alt="" class="gz">
				<p>活动规则</p>
			</div>
		</div>
		<div class="game">
			<div class="game_tit clearfix">
				<img src="imagesbak/puke.png" alt="" class="puke">
				<span>今日还剩<b>5</b>机会</span>
			</div>
			<div class="hezi">
				<img src="imagesbak/deng.png" alt="" class="zmd">
				<img src="imagesbak/deng2.png" alt="" class="zmd2">
				<script>
					var c = 250;
					function timedCount()
					{
						$(".zmd").show();
						$(".zmd2").hide();
						setTimeout(function(){
							$(".zmd2").show(); 
							$(".zmd").hide();
						},c);
						t=setTimeout("timedCount()",2*c);
					}
					$(function(){
						timedCount();
						$('.begin').click(function() {
							c = 150;
						});
					})
				</script>
				<ul class="clearfix" id="youxiqu">
					<li class="mg0">
						<img src="imagesbak/iphone7.png" alt="">
					</li>
					<li>
						<img src="imagesbak/you.png" alt="">
					</li>
					<li>
						<img src="imagesbak/huafei.png" alt="">
					</li>
					<li class="mg0">
						<img src="imagesbak/jiaxiquan1.png" alt="">
					</li>
					<li class="kaishi">
						<?php
				         if($status_an==1){
				        ?>
						<a href=""><img src="imagesbak/lijicanyu.png" alt=""></a>
						<?php
				           }else if($status_an==2){
				        ?>
						<img src="imagesbak/kaishi.png" alt="" id="begin">
						<?php
				           }else if($status_an==3){
				        ?>
						<img src="imagesbak/bukedian.png" alt="">
						<?php
				           }
				        ?>
					</li>
					<li>
						<img src="imagesbak/jiaxiquan2.png" alt="">
					</li>
					<li class="mg0">
						<img src="imagesbak/dami.png" alt="">
					</li>
					<li>
						<img src="imagesbak/zhaopian.png" alt="">
					</li>
					<li>
						<img src="imagesbak/jiaxiquan0.5.png" alt="">
					</li>
				</ul>
			</div>
		</div>
		<div class="more">
			<img src="imagesbak/more.png" alt="" class="more_tit">
			<ul class="clearfix">
				<li>
					<div class="more2">
						<img src="imagesbak/xy.png" alt="">
						<span>111.1元</span>
					</div>
					<div class="dizuo">
						<img src="imagesbak/dizuo.png" alt="">
					</div>
					<p>幸运奖</p>
				</li>
				<li>
					<div class="more2">
						<img src="imagesbak/sq.png" alt="">
						<span>11.11元</span>
					</div>
					<div class="dizuo">
						<img src="imagesbak/dizuo.png" alt="">
					</div>
					<p>最佳手气奖</p>
				</li>
				<li>
					<div class="more2">
						<img src="imagesbak/cy.png" alt="">
						<span>6寸照片</span>
					</div>
					<div class="dizuo">
						<img src="imagesbak/dizuo.png" alt="">
					</div>
					<p>参与奖</p>
				</li>
				<li>
					<div class="more2">
						<img src="imagesbak/aw.png" alt="">
						<span>111.1元</span>
					</div>
					<div class="dizuo">
						<img src="imagesbak/dizuo.png" alt="">
					</div>
					<p>安慰奖</p>
				</li>
			</ul>
			<h3>活动最终解释权归光合种子所有</h3>
		</div>
		<?php
         if($status_fu==1){
        ?>
		<a href="" class="fenxiang">立即参与</a>
		<?php
	       }else if($status_fu==2){
	    ?>
		<a class="fenxiang" id="fenxiang">分享好友</a>
		<?php
           }
        ?>
	</div>
	<!-- 规则 -->
	<div class="tan shuangTan" style="display:none;">
		<h2>活动规则</h2>
		<div class="nrk">	
			<div class="nr">
				<div class="nrText">
					<h3>▼我们的礼品：</h3>
					<p>iPhone7、鲁花花生油4L、福临门东北大米5kg、10元话费、2%加息券、1%加息券、0.5%加息券、6寸照片</p>

					<h3>▼如何获得抽奖机会：</h3>
					<ol>
						<li>1、登录光合种子app</li>
						<li>2、分享活动并提上“光合种子”四个字到朋友圈并截图发到“光合种子”公众号 </li>
						<li>3、投资额每满3000元（多投多送）</li>
						<li>4、邀请好友注册实名每满5个（多邀多送）</li>
						<li>5、邀请的好友投资额每满3000元（多投多送）</li>
					</ol>

					<h3>▼注意事项：</h3>
					<ol>
						<li>1、活动期间每人每天最多只能进行5轮，多出的抽奖机会可以在次日继续使用；</li>
						<li>2、中奖客户如在一周之内与光合种子双向均无法取得联系，则视为放弃奖品；</li>
						<li>3、在活动期间内未使用完的抽奖机会，将会在活动结束后以1：10的积分比例转化为积分存入到用户的积分账户中；</li>
						<li>4、获奖用户如对获奖信息有任何疑问请及时联系客服人员；</li>
						<li>5、通过不正当手段获奖者，光合种子有权取消其获奖资格；</li>
						<li>6、本次活动最终解释权归光合种子所有。</li>
					</ol>

					<h3>▼抽奖规则：</h3>
					<ol>
						<li>1.每个九宫格每轮抽奖只能翻动<span>5</span>张，一轮中<span>同时翻出3张相同礼品图片</span>即可获得该礼品；</li>
						<li>2.客服人员会在<span>获奖后三个工作日</span>内联系获奖用户确定获奖信息并及时安排奖品发放事宜；</li>
						<li>3.参与奖获得者将在活动结束后由客服人员统一进行统计，并公布在微信群以及微信公众号中，获奖用户可通过客服发送的链接自行下单，付款后截图发送到微信群中我们会如数报销打印照片的费用（不通过链接不能报销）；</li>
						<li>4.凡中奖用户均可获得一个抽奖号码（1-100），号码将安照参与活动顺序依次循环派发。中奖号码为活动结束次日的股票收盘上证指数（取整）/100所得的余数加1<span>（例如：当日上证指数为3085.82，3085/100得30余85，则中奖号码为85+1=86）</span>。中奖号码公布后，所有该号码中奖者可获得<span>111.1元现金礼包</span>，客服将在三个工作日内联系中奖用户并及时派发奖金；</li>
						<li>5.活动结束时，对于获得奖品最多的用户（除参与奖外）以及只获得参与奖的用户，将分别有机会获得<span>11.11与111.1元现金红包</span>，每项奖励将会分别在活动结束后随即抽取三名获奖者。</li>
					</ol>
				</div>
			</div>
		</div>
		<p class="btn"><img src="imagesbak/btn.png" alt="" width="35" height="35"></p>
	</div>
	<!-- 分享 -->
	<div class="tan_fen">
		<img src="imagesbak/fx.png" alt="">
	</div>

	<script>
		//判断机会
	    var chance = 9;
	    var canChance = 5;
	    var useChance = 0;
	    var surplus = chance - canChance;
	    // chanceD.html(chance);
	    //奖品数量
	    var jiangpin = 7;
	    var jiangpinIndex = jiangpin - 1;//对应索引

		//设置几率及相应图片文字
	    var charsNum = [0,25,15,4,5,1,10];
	    var charsSum = 0;
	    for(var i = 0; i < charsNum.length; i++){charsSum += charsNum[i];}
	    var chars = [];
	    //一等奖初次中奖概率
	    var firstJiangpin = 0.5;

	    //设置概率数组
	    function setChars(num){
	        chars[0]= charsSum*num/(1-num);
	        for(i = 1; i < jiangpin; i++){
	            chars[i] =  chars[i-1] + charsNum[i]; 
	        }
	    }
	    //概率组
	    setChars(firstJiangpin);

	    // 对应索引的文字及图片
	    var charsTxt =[
	        "恭喜您获得iPhone7!",
	        "恭喜您获得0.５％加息券!(25%)31",
	        "恭喜您获得１％加息券!(15%)21",
	        "恭喜您获得２％加息券!(4%)10",
	        "恭喜您获得福临门大米!(5%)11",
	        "恭喜您获得鲁花花生油!(1%)40",
	        "恭喜您获得１０元话费!(10%)16",
	    ];
	    var imgUrl = [
	        "images/iphone7.png",
	        "images/jiaxiquan0.5.png",
	        "images/jiaxiquan1.png",
	        "images/jiaxiquan2.png",
	        "images/dami.png",
	        "images/you.png",
	        "images/huafei.png",
	    ]

	    //初始化中奖次数
		var caseNo = [];
	    for(i=0;i<jiangpin;i++){
	        caseNo.push(0);
	    };

	    //定义奖品等级变量
		var jiangNo;
	    var kuaizhong = false;//是否快中奖变量
	    var kuaizhongNo;//快中奖索引
	    var zhongjiang = false;//是否中奖了
	    var failTan = $("#noWinningTan");

	    //初始化
	    var fanpaiLi;//点击模块
	    var bgImgEven = "";//背景模块
	    var jiangpinEven = "";//奖品模块
	    var open = "";//点开状态
	    var openClass = "";//点开状态类名
	    var on = "";//牌可点击状态
	    var onClass = "";//牌可点击状态类名
	    var suiji;
	    var winningTan = $("#winningTan");
		$(function(){

			// $(".begin").hover(function() {
			// 	$(this).attr("src","images/anxia.png").addClass('begin2');
			// }, function() {
			// 	$(this).attr("src","images/begin.png").removeClass('begin2');
			// });
			// $("#begin").click(function(){
			// 		$(this).attr("src","images/anxia.png");
			// 		$(".zmd,.zmd2").css("animation-duration","0.5s")
			// 	});
			//游戏开始按钮
			$("#begin").click(function(){
				$(this).attr("src","images/anxia.png");
				$(".zmd,.zmd2").css("animation-duration","0.5s");
				var beginHtml = '';
				var youxiLiHtml = '<li class="on"> <div class="d1"> <img src="imagesbak/weixuanzhong.jpg"> </div> <div class="d2"> <img src=""> </div> </li>';
				var youxiLiHtml2 = '<li class="on mg0"> <div class="d1"> <img src="imagesbak/weixuanzhong.jpg"> </div> <div class="d2"> <img src=""> </div> </li>';
				for(i = 0; i < 9; i++){
					if(i == 0 || i == 3 || i == 6){
						beginHtml = beginHtml + youxiLiHtml2;
					}else{
						beginHtml = beginHtml + youxiLiHtml;
					}
				}
				$("#youxiqu").delay(100).fadeOut(function(){
					$(this).html(beginHtml);
					//初始化
			        fanpaiLi = $("#youxiqu li.on");//点击模块
			        bgImgEven = ".d1 img";//背景模块
			        jiangpinEven = ".d2 img";//奖品模块
			        open = ".open";//点开状态
			        openClass = "open";//点开状态类名
			        on = ".on";//牌可点击状态
			        onClass = "on";//牌可点击状态类名
			        // var chanceD = $("#chance span");//机会显示框
				}).delay(200).fadeIn(function(){
			    	//记录已翻开的数据
			    	function jiluNo(i){
			    		caseNo[i]++;
			            if(caseNo[0]>0){
			                setChars(0);
			                chars[0] = -1;
			            }
			            if(caseNo[i]==2){
			                kuaizhong = true;
			                kuaizhongNo = i;
			            }
			    	}

			    	//判断是否中奖
			    	function panduan(){
			            for(i=0;i<jiangpin;i++){
			                if(caseNo[i]==3){
			                	winningTan.show();
			                    caseNo[i]=0;
			                    zhongjiang = true;
			                    document.location.href="zhong.php"//中奖跳转页面
			                }
			            }
			    	}

			        //获取随机数
			        function suijiNum(){
			            suiji = Math.round(Math.random()*(chars[jiangpinIndex]-1));
			            for(i=0;i<jiangpin;i++){
			                if(suiji<chars[i]){
			                    jiangNo = i;
			                    break;
			                }
			            };
			        }

			        //翻牌动画
			        function fanpai(bgImg,jiangpinImg,_thisjiangNo){
			            bgImg.animate({width:0},200,"swing",function(){
			                // 记录已翻开的数据
			                jiluNo(_thisjiangNo);
			                jiangpinImg.attr("src",imgUrl[_thisjiangNo]).show().animate({width:"100%"},100,"swing",function(){
			                    panduan();
			                    fanpaiLi.addClass('on');
			                    if(useChance == canChance && !zhongjiang){
			                        for (var i = 0; i < surplus; i++) {
			                            chance--;
			                            console.log(i);
			                            for(var j = 0; j < 9; j++){//9宫格
			                                suijiNum();
			                                if(!fanpaiLi.eq(j).is(open)){
			                                    var _thisOther = fanpaiLi.eq(j);
			                                    var bgImgOther = $(bgImgEven,_thisOther);

			                                    var jiangpinImgOther = $(jiangpinEven,_thisOther);
			                                    _thisOther.addClass(openClass);
			                                    jiangpinImgOther.attr("src",imgUrl[jiangNo]).css("width","100%").delay("500").fadeIn();
			                                    bgImgOther.delay("500").fadeOut();
			                                    failTan.delay("2000").fadeIn();

			                                    document.location.href="zhong.php"//未中奖跳转页面

			                                    break;
			                                }
			                            }
			                        }; 
			                    }
			                });
			                // chanceD.html(chance);
			            })
			        }

			    	//点击翻牌
			    	fanpaiLi.click(function() {
			    		var _this = $(this);
			            var bgImg = $(bgImgEven,_this);//背景img
			            var jiangpinImg = $(jiangpinEven,_this);//奖品img
			            

			    		if(!_this.is(open)){
			                if(_this.is('.on')){
			                    fanpaiLi.removeClass('on');
			    	    		chance--;
			                    useChance++;
			    	    		_this.addClass(openClass);
			    	    		

			                    //点击3次后仍未出现相同时
			                    if(useChance == 4 && !kuaizhong){
			                        var already = [];
			                        for(i=0;i<jiangpin;i++){
			                            if(caseNo[i]>0){
			                                already.push(i);
			                            }
			                        }
			                        console.log("没一样的了:"+already);
			                        suiji = Math.round(Math.random()*(already.length-1));
			                        jiangNo = already[suiji];
			                        fanpai(bgImg,jiangpinImg,jiangNo);
			                    }else{
			                        //获得几率内的随机数
			                        suijiNum();
			                        fanpai(bgImg,jiangpinImg,jiangNo);
			                    }                    
			                }
			            }
			    	});
				});

			});
			$(".close").click(function(){
				$("#youxiqu").html('<li class="mg0"> <img src="imagesbak/iphone7.jpg" alt="iPhone7"> </li> <li> <img src="imagesbak/you.jpg" alt="鲁花花生油４Ｌ"> </li> <li> <img src="imagesbak/10yuan.jpg" alt="10元话费"> </li> <li class="mg0"> <img src="imagesbak/jiaxi1.jpg" alt="1%加息券"> </li> <li> <img src="imagesbak/begin.png" alt="" id="begin"> </li> <li> <img src="imagesbak/jiaxi2.jpg" alt="2%加息券"> </li> <li class="mg0"> <img src="imagesbak/dami.jpg" alt="福临门东北大米５ｋｇ"> </li> <li> <img src="imagesbak/photo.jpg" alt="6寸照片"> </li> <li> <img src="imagesbak/jiaxi0.5.jpg" alt="0.5％加息券"> </li>');
				failTan.hide();
			})

		})
	</script>
	<script>
		$(function(){
			$(window).bind("resize load",function(){
    			$(".hezi").height('auto');
    			var swiperW = $(".hezi").width();
    			$(".hezi").height(swiperW);
    		});
			var windowH,windowW;
	    	$(window).bind("load resize",function(){
	    		windowW = $(window).width();
	    		windowH = $(window).height();
	    		var positionText = "center "+ windowH*0.03 +"px";
	    		var sizeText = "95% "+ (windowH*0.7+70) +"px";
	    		var positionText2 = "center "+ windowH*0.05 +"px";
	    		var sizeText2 = "95% "+ (windowH*0.6+70) +"px";
	    		$(".shuangTan").css({
	    			"width":windowW,
	    			"height":windowH,
	    			"padding-top":windowH*0.06,
	    			"background-position":positionText,
	    			"background-size":sizeText,
	    		});
	    		$(".shuangTan2").css({
	    			"background-position":positionText2,
	    			"padding-top":windowH*0.08,
	    			"background-size":sizeText2,
	    		})
	    		$(".nrText").css({
	    			"height":windowH*0.55,
	    		});
	    		$(".shuangTan2 .nrText").css({
	    			"height":windowH*0.45,
	    		});
	    	});
	    	$(".guize p").click(function(){
    			$(".tan").show();
    		});
    		//点击按钮
	    	$(".btn img").on("click",function(){
	    		$(this).parents(".tan ").hide()
	    	});
	    	$("#fenxiang").click(function(){
	    		$(".tan_fen").show();
	    	});
	    	$(".tan_fen").click(function(){
	    		$(this).hide();
	    	})
	    		
	    	
	    	// $(".tan_fen").click(){
	    	// 	$(this).hide();
	    	// }
    	})
	</script>
</body>
</html>