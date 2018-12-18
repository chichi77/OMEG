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
		<div class="tip_txt yellow_txt">
			<i class="fas fa-info-circle"></i>
			<span>若有會員資料疑問請聯繫萬吉建設客服</span>
		</div>
		<form id="postForm" name="postForm" class="postForm m_info_form">
			<div class="row">
				<div class="col-4 col-sm-4 col-form-label">帳號</div>
				<div class="col-8 col-sm-8 col-form-label">0912345678</div>
			</div>
			<div class="row">
				<div class="col-4 col-sm-4 col-form-label">
					<label for="password">密碼</label>
				</div>
				<div class="col-8 col-sm-8">
					<input type="password" name="password" class="form-control required pw_check" placeholder="請輸入8~20位英數字">
				</div>
			</div>
			<div class="row">
				<div class="col-4 col-sm-4 col-form-label">
					<label for="password_2">確認密碼</label>
				</div>
				<div class="col-8 col-sm-8">
					<input type="password" name="password_2" class="form-control required pw_check pw_db_check" placeholder="若沒有要修改不需要輸入">
				</div>
			</div>
			<div class="row">
				<div class="col-4 col-sm-4 col-form-label">姓名</div>
				<div class="col-8 col-sm-8 col-form-label">米棋</div>
			</div>
			<div class="row">
				<div class="col-4 col-sm-4 col-form-label">性別</div>
				<div class="col-8 col-sm-8 col-form-label">先生</div>
			</div>
			<div class="row">
				<div class="col-4 col-sm-4 col-form-label">家用電話</div>
				<div class="col-8 col-sm-8 col-form-label">071234567</div>
			</div>
			<div class="row">
				<div class="col-4 col-sm-4 col-form-label">聯絡地址</div>
				<div class="col-8 col-sm-8 col-form-label">高雄市左營區孟子路</div>
			</div>
			<div class="row">
				<div class="col-4 col-sm-4 col-form-label">E-mail</div>
				<div class="col-8 col-sm-8 col-form-label">match@match-web.net</div>
			</div>
			<div class="form_btn">
				<input type="button" class="btn btn-warning" value="登出" onclick="location.href='m_forget.php?page=m_info'">
				<button type="submit" class="btn btn-danger">修改密碼</button>
			</div>
		</form>
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>