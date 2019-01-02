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
	<div class="container page pb-5 mb-4">
		<?php include("adm_menu.php"); ?>
		<div class="py-3">
			<ul>
				<li>
					<span class="main_color_txt">2018-11-01</span>
					<span class="text-secondary px-2">編號：20181101164532</span>
				</li>
				<li class="state">
					<div class="state_bar green">
						<div style="width:76%"></div>
					</div>
					<div class="state_txt text-success">施工中　維修進度76%</div>
				</li>
			</ul>
		</div>
		<form name="postForm" id="postForm" class="postForm adm_repair_form">
			<div class="row no-gutters">
				<div class="col-4 col-sm-4 col-form-label">
					<label for="date_s">維修排程</label>
				</div>
				<div class="col-8 col-sm-8 d-flex">
					<input type="date" class="form-control" name="date_s" id="date_s">
					<span class="px-2">-</span>
					<input type="date" class="form-control" name="date_f" id="date_f">
				</div>
			</div>
			<div class="row no-gutters">
				<div class="col-4 col-sm-4">
					<label class="col-form-label" for="progress">進度</label>
				</div>
				<div class="col-8 col-sm-8 d-flex">
					<input type="number" max="100" min="0" class="form-control" name="progress" id="progress" value="76">
					<span class="px-2 text-dark">%</span>
				</div>
			</div>
			<div class="row no-gutters">
				<div class="col-4 col-sm-4">
					<label class="col-form-label" for="state">狀態</label>
				</div>
				<div class="col-8 col-sm-8">
					<select name="state" class="form-control">
						<option value="0">未確認</option>
						<option value="1" checked>施工中</option>
						<option value="2">檢修中</option>
						<option value="3">已完成</option>
					</select>
				</div>
			</div>
			<div class="row no-gutters">
				<textarea name="memo" id="memo" rows="6" class="form-control px-2" placeholder="可在此輸入維修備註"></textarea>
			</div>
			<div class="form_btn py-1 px-3 fixed_bottom">
				<div class="row">
					<div class="col-6 col-sm-6 text-left">
						<input type="button" class="btn btn-warning" value="返回列表" onclick="location.href='adm_repair.php'">
					</div>
					<div class="col-6 col-sm-6 text-right">
						<button type="submit" class="btn btn-danger">儲存修改</button>
					</div>
				</div>
			</div>
		</form>
		<div class="py-4">
			<div class="label_txt">報修內容</div>
			<div class="row no-gutters">
				<div class="col-4 col-sm-4 main_color_txt">報修建案</div>
				<div class="col-8 col-sm-8">樂見（戶號13F-2）</div>
				<div class="col-4 col-sm-4 main_color_txt">維修項目</div>
				<div class="col-8 col-sm-8">衛浴類</div>
				<div class="col-4 col-sm-4 main_color_txt">報修內容</div>
				<div class="col-8 col-sm-8">這幾天大門的電子鎖都會發出奇怪的聲音，聽起來像是卡住了</div>
				<div class="col-4 col-sm-4 main_color_txt">報修照片</div>
				<div class="col-8 col-sm-8 pt-2">
					<img src="image/repair_01.JPG" alt="" class="img-fluid">
				</div>
			</div>
		</div>
		<div class="py-4">
			<div class="label_txt">申報會員資料</div>
			<div class="row no-gutters">
				<div class="col-4 col-sm-4 main_color_txt">申報人</div>
				<div class="col-8 col-sm-8">米棋</div>
				<div class="col-4 col-sm-4 main_color_txt">行動電話</div>
				<div class="col-8 col-sm-8">0912345678</div>
				<div class="col-4 col-sm-4 main_color_txt">家用電話</div>
				<div class="col-8 col-sm-8">07-12345678</div>
			</div>
		</div>
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>