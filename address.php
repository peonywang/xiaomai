<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("comhead.php"); ?>
	<title>选择地址</title>
	<link rel="stylesheet" href="css/address.css">
</head>
<body>
	<div class="adrD">
		<div class="dis">防诈骗提示：货到商城不会以任何理由发送链接要求您填写个人银行信息进行退款。谨防假冒客服电话诈骗！</div>
		<ul class="list">
			<?php for ($i = 0;$i<2;$i++){ ?>
			<li <?php if($i==0) echo ' class="act"';?>>
				<div class="d1">
					<div class="s1">
						<span class="name">李勇闯</span>
						<span class="tel">176****0912</span>
					</div>
					<div class="s2">
						北京市 大兴区 天宫院小区10号楼2单元502室
					</div>
				</div>
				<a class="a1" href="editAddress.php"></a>
			</li>
			<?php } ?>
		</ul>
	</div>
	<div class="addNew">
		<a href="editAddress.php">添加新地址</a>
	</div>
</body>
</html>