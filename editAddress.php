<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("comhead.php"); ?>
	<title>编辑地址</title>
	<link rel="stylesheet" href="css/address.css">
	<link rel="stylesheet" type="text/css" href="js/mobileSelect/mobileSelect.css">
	<script src="js/mobileSelect/mobileSelect.js"></script>
</head>
<body>
	<div class="editD">
		<ul>
			<li>
				<input class="inp" type="text" placeholder="收货人">
			</li>
			<li>
				<input class="inp" type="tel" placeholder="手机号码">
			</li>
			<li class="selD">
	            <div id="trigger4">所在地区</div>
			</li>
			<li>
				<input class="inp" type="text" placeholder="详细地址">
			</li>
			<li>
				<label>
					<input type="checkbox"><span>设为默认地址</span>
				</label>
			</li>
		</ul>
		<div class="btnD">
			<a href="address.php">确定</a>
		</div>
	</div>
	<div id="abc"></div>
	<script>
		
		$(function () {	
			var mobileSelect = new MobileSelect({
			    trigger: '#trigger4',
			    title: '地区选择',
			    wheels: [
			        {data:[
                        {
                            id:'1',
                            value:'省',
                            childs:[
                                {
                                	id:'A1',value:'市',childs:[
	                                	{id:'B1',value:'区'}
                                	]
                                },
                            ]
                        }
                    ]},
				],
			    callback:function(indexArr, data){
			        mobileSelect.position=[indexArr];
			    }

			});

			$.ajax({
				url: 'js/city.json',
				type: 'GET',
				dataType: 'json',
			})
			.done(function(data) {
				var city = [];
				for(var i=0; i<data.length; i++){
					city[i] = {id:i+1, value:data[i]['name'],childs:[]}
					for(var i2=0; i2<data[i]['city'].length; i2++){
						city[i]['childs'][i2] = {id:1,value:data[i]['city'][i2]['name'],childs:[]};
						for(var i3=0; i3<data[i]['city'][i2]["area"].length; i3++){
							city[i]['childs'][i2]['childs'][i3] = {id:i3+1,value:data[i]['city'][i2]["area"][i3]}
						}
					}
				}
				mobileSelect.updateWheels(city); 
				// mobileSelect.updateWheels(data); 
				
			})
			.fail(function() {
				console.log("error");
			})
		})
	</script>
</body>
</html>