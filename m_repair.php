<!doctype html>
<html lang="zh-tw">
<head>
<meta charset="utf-8">
<?php include("head.php"); ?>
<title><?php echo $title; ?></title>
<meta name="robots" content="all">
<meta name="robots" content="index,follow">
<meta name="revisit-after" content="3 days" />
<meta name="spiders" content="all" />
<meta name="keywords" content="<?php echo $keywords; ?>">
<meta name="author" content="<?php echo $author; ?>">
<meta name="copyright" content="<?php echo $copyright; ?>">
<meta name="description" content="<?php echo $description; ?>">
</head>
<body>
<header>
	<?php include("header.php"); ?>
</header>
<div class="page_wrapper">
	<div class="container page">
		<?php include("m_menu.php"); ?>
		<div class="row no-gutters state_menu text-center">
			<div class="col-3 col-sm-3" data-type="0">未確認</div>
			<div class="col-3 col-sm-3" data-type="1">施工中</div>
			<div class="col-3 col-sm-3" data-type="2">檢修中</div>
			<div class="col-3 col-sm-3" data-type="3">已完工</div>
		</div>
		<div class="case_wrapper">
			<ul class="item" data-type="0">
				<li>
					<span class="main_color_txt">2018-11-01</span>
					<span class="text-secondary">編號：20181101164532</span>
				</li>
				<li class="state">
					<div class="state_bar">
						<div></div>
					</div>
					<div class="state_txt text-secondary">未處理</div>
				</li>
				<li>
					<div class="row">
						<div class="col-4 col-sm-4 main_color_txt">報修建案</div>
						<div class="col-8 col-sm-8">樂見（戶號13F-2）</div>
						<div class="col-4 col-sm-4 main_color_txt">維修項目</div>
						<div class="col-8 col-sm-8">衛浴類</div>
						<div class="col-4 col-sm-4 main_color_txt">報修內容</div>
						<div class="col-8 col-sm-8">這幾天大門的電子鎖都會發出奇怪的聲音，聽起來像是卡住了</div>
						<div class="col-4 col-sm-4 main_color_txt">報修照片</div>
						<div class="col-8 col-sm-8">
							<img src="image/repair_01.JPG" alt="" class="img-fluid">
						</div>
					</div>
				</li>
			</ul>
			<ul class="item" data-type="1">
				<li>
					<span class="main_color_txt">2018-11-01</span>
					<span class="text-secondary">編號：20181101164532</span>
				</li>
				<li class="state">
					<div class="state_bar green">
						<div style="width:76%"></div>
					</div>
					<div class="state_txt text-success">施工中　維修進度76%</div>
					<div class="text-secondary">維修排程：2018/11/05~2018/11/15</div>
				</li>
				<li>
					<div class="row">
						<div class="col-4 col-sm-4 main_color_txt">報修建案</div>
						<div class="col-8 col-sm-8">樂見（戶號13F-2）</div>
						<div class="col-4 col-sm-4 main_color_txt">維修項目</div>
						<div class="col-8 col-sm-8">衛浴類</div>
						<div class="col-4 col-sm-4 main_color_txt">報修內容</div>
						<div class="col-8 col-sm-8">這幾天大門的電子鎖都會發出奇怪的聲音，聽起來像是卡住了</div>
						<div class="col-4 col-sm-4 main_color_txt">報修照片</div>
						<div class="col-8 col-sm-8">
							<img src="image/repair_01.JPG" alt="" class="img-fluid">
						</div>
					</div>
				</li>
			</ul>
			<ul class="item" data-type="1">
				<li>
					<span class="main_color_txt">2018-11-01</span>
					<span class="text-secondary">編號：20181101164532</span>
				</li>
				<li class="state">
					<div class="state_bar green">
						<div style="width:76%"></div>
					</div>
					<div class="state_txt text-success">施工中　維修進度76%</div>
					<div class="text-secondary">維修排程：2018/11/05~2018/11/15</div>
				</li>
				<li>
					<div class="row no-gutters">
						<div class="col-4 col-sm-4 main_color_txt">報修建案</div>
						<div class="col-8 col-sm-8">樂見（戶號13F-2）</div>
						<div class="col-4 col-sm-4 main_color_txt">維修項目</div>
						<div class="col-8 col-sm-8">衛浴類</div>
						<div class="col-4 col-sm-4 main_color_txt">報修內容</div>
						<div class="col-8 col-sm-8">這幾天大門的電子鎖都會發出奇怪的聲音，聽起來像是卡住了</div>
						<div class="col-4 col-sm-4 main_color_txt">報修照片</div>
						<div class="col-8 col-sm-8"></div>
					</div>
				</li>
			</ul>
			<ul class="item" data-type="2">
				<li>
					<span class="main_color_txt">2018-11-01</span>
					<span class="text-secondary">編號：20181101164532</span>
				</li>
				<li class="state">
					<div class="state_bar green">
						<div style="width:76%"></div>
					</div>
					<div class="state_txt text-success">檢修中　維修進度76%</div>
					<div class="text-secondary">維修排程：2018/11/05~2018/11/15</div>
				</li>
				<li>
					<div class="row">
						<div class="col-4 col-sm-4 main_color_txt">報修建案</div>
						<div class="col-8 col-sm-8">樂見（戶號13F-2）</div>
						<div class="col-4 col-sm-4 main_color_txt">維修項目</div>
						<div class="col-8 col-sm-8">衛浴類</div>
						<div class="col-4 col-sm-4 main_color_txt">報修內容</div>
						<div class="col-8 col-sm-8">這幾天大門的電子鎖都會發出奇怪的聲音，聽起來像是卡住了</div>
						<div class="col-4 col-sm-4 main_color_txt">報修照片</div>
						<div class="col-8 col-sm-8"></div>
					</div>
				</li>
			</ul>
			<ul class="item" data-type="2">
				<li>
					<span class="main_color_txt">2018-11-01</span>
					<span class="text-secondary">編號：20181101164532</span>
				</li>
				<li class="state">
					<div class="state_bar green">
						<div style="width:76%"></div>
					</div>
					<div class="state_txt text-success">檢修中　維修進度76%</div>
					<div class="text-secondary">維修排程：2018/11/05~2018/11/15</div>
				</li>
				<li>
					<div class="row">
						<div class="col-4 col-sm-4 main_color_txt">報修建案</div>
						<div class="col-8 col-sm-8">樂見（戶號13F-2）</div>
						<div class="col-4 col-sm-4 main_color_txt">維修項目</div>
						<div class="col-8 col-sm-8">衛浴類</div>
						<div class="col-4 col-sm-4 main_color_txt">報修內容</div>
						<div class="col-8 col-sm-8">這幾天大門的電子鎖都會發出奇怪的聲音，聽起來像是卡住了</div>
						<div class="col-4 col-sm-4 main_color_txt">報修照片</div>
						<div class="col-8 col-sm-8"></div>
					</div>
				</li>
			</ul>
			<ul class="item" data-type="3">
				<li>
					<span class="main_color_txt">2018-11-01</span>
					<span class="text-secondary">編號：20181101164532</span>
				</li>
				<li class="state">
					<div class="state_bar blue">
						<div></div>
					</div>
					<div class="state_txt text-primary">已完成</div>
				</li>
				<li>
					<div class="row">
						<div class="col-4 col-sm-4 main_color_txt">報修建案</div>
						<div class="col-8 col-sm-8">樂見（戶號13F-2）</div>
						<div class="col-4 col-sm-4 main_color_txt">維修項目</div>
						<div class="col-8 col-sm-8">衛浴類</div>
						<div class="col-4 col-sm-4 main_color_txt">報修內容</div>
						<div class="col-8 col-sm-8">這幾天大門的電子鎖都會發出奇怪的聲音，聽起來像是卡住了</div>
						<div class="col-4 col-sm-4 main_color_txt">報修照片</div>
						<div class="col-8 col-sm-8"></div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>