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
			<select name="case" class="form-control">
				<option value="0">里港開市大吉-戶號13F-2</option>
				<option value="1">林邊森粼-戶號5F-1</option>
			</select>
			<div class="row img_title">
				<div class="col-3 col-sm-2">
					<div class="circle_bg" style="background-image: url('image/case_01.JPG')"></div>
				</div>
				<div class="col-9 col-sm-10">
					<div class="title">萬市大吉</div>
					<div class="detail">
						<i class="fas fa-map-marker-alt"></i>
						<span>高雄市大社區大吉路</span>
					</div>
				</div>
			</div>
			<div class="label_txt">設備教學</div>
			<div class="edu_item">
				<div class="title">三合一門禁卡</div>
				<div class="iframe-rwd">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/idZ4WFg80qw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="edu_item">
				<div class="title">三合一門禁卡</div>
				<div class="iframe-rwd">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/idZ4WFg80qw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>