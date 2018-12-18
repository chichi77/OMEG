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
		<div>
			<ul class="case_item">
				<li>
					<img src="image/case_01.JPG" class="img-fluid">
				</li>
				<li class="img_title">
					<div class="title">萬市大吉</div>
					<div class="detail">
						<i class="fas fa-map-marker-alt"></i>
						<span>高雄市大社區大吉路</span>
					</div>
				</li>
				<li>
					<div class="label_txt">建案基本資料</div>
				</li>
				<li>
					<div class="row no-gutters">
						<div class="col-4 col-sm-4 main_color_txt">建案類型</div>
						<div class="col-8 col-sm-8">車庫別墅</div>
						<div class="col-4 col-sm-4 main_color_txt">開工日期</div>
						<div class="col-8 col-sm-8">2015/07/10</div>
						<div class="col-4 col-sm-4 main_color_txt">完工日期</div>
						<div class="col-8 col-sm-8">2017/03/15</div>
						<div class="col-4 col-sm-4 main_color_txt">設備廠商</div>
						<div class="col-8 col-sm-8">
							<ul class="company_list">
								<li>
									<span>櫻花廚具</span>
									<div class="detail">
										<div>
											<i class="fas fa-phone"></i>
											<span>071234567</span>
										</div>
										<div>
											<i class="fas fa-map-marker-alt"></i>
											<span>高雄市鳳山區溪林路560號</span>
									</div>
									<div>
								</li>
								<li>
									<span>方吉電機電料</span>
									<div class="detail">
										<div>
											<i class="fas fa-phone"></i>
											<span>071234567</span>
										</div>
										<div>
											<i class="fas fa-map-marker-alt"></i>
											<span>高雄市鳳山區溪林路560號</span>
									</div>
									<div>
								</li>
							</ul>
						</div>
						<div class="col-4 col-sm-4 main_color_txt">交屋日期</div>
						<div class="col-8 col-sm-8">2018/05/06</div>
						<div class="col-4 col-sm-4 main_color_txt">保固狀態</div>
						<div class="col-8 col-sm-8">保固中（剩餘<span class="red_txt">295天</span>）</div>
						<div class="col-4 col-sm-4 main_color_txt">戶號</div>
						<div class="col-8 col-sm-8">13F-3</div>
						<div class="col-4 col-sm-4 main_color_txt">備註</div>
						<div class="col-8 col-sm-8">接待會館－屏東市民生路51號(演藝廳對面)</div>
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