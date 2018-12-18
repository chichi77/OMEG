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
<div class="page_wrapper middle_page"">
	<div class="container page">
		<div class="page_tite">會員登入</div>
		<div class="tip_txt_block">此功能為建案會員專屬功能，<br>若有帳號密碼疑問請聯繫萬吉建設客服</div>
		<form id="postForm" name="postForm" class="postForm login_form" action="<?php echo $_GET['page'].'.php'; ?>">
			<div class="row">
				<div class="col-4 col-sm-4 col-form-label">
					<span class="red_txt">*</span>
					<label for="account">帳號</label>
				</div>
				<div class="col-8 col-sm-8">
					<input type="text" class="required form-control" placeholder="請輸入手機號碼">
				</div>
			</div>
			<div class="row">
				<div class="col-4 col-sm-4 col-form-label">
					<span class="red_txt">*</span>
					<label for="password">密碼</label>
				</div>
				<div class="col-8 col-sm-8">
					<input type="password" class="required form-control" placeholder="請輸入密碼">
				</div>
			</div>
			<div class="row">
				<div class="col-4 col-sm-4 col-form-label">
					<span class="red_txt">*</span>
					<label for="detail">驗證碼</label>
				</div>
				<div class="col-8 col-sm-8 form-inline">
					<img class="code_img" src="dist/img/code.jpg">
					<input type="text" class="required form-control code_input">
				</div>
			</div>
			<div class="form_btn">
				<input type="button" class="btn btn-warning" value="忘記密碼" onclick="location.href='m_forget.php?page=m_info'">
				<button type="submit" class="btn btn-danger">會員登入</button>
			</div>
		</form>
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>