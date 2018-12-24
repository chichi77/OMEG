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
		<div class="page_tite">工務忘記密碼</div>
		<div class="tip_txt_block">請輸入您的手機號碼，<br>系統將會把密碼寄送到您的信箱</div>
		<form id="postForm" name="postForm" class="postForm login_form">
			<div class="row">
				<div class="col-4 col-sm-4 col-form-label">
					<span class="red_txt">*</span>
					<label for="acc">帳號</label>
				</div>
				<div class="col-8 col-sm-8">
					<input type="text" name="acc" id="acc" class="required form-control" placeholder="請輸入工務帳號" name="account">
				</div>
			</div>
			<div class="row">
				<div class="col-4 col-sm-4 col-form-label">
					<span class="red_txt">*</span>
					<label for="code">驗證碼</label>
				</div>
				<div class="col-8 col-sm-8 form-inline">
					<img class="code_img" src="dist/img/code.jpg">
					<input type="text" name="code" id="code" class="required form-control code_input">
				</div>
			</div>
			<div class="form_btn">
				<input type="button" class="btn btn-warning" value="返回登入" onclick="location.href='adm_login.php'">
				<button type="submit" class="btn btn-danger">送出</button>
			</div>
		</form>
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>