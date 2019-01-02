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
<script src="dist/js/input_check.js"></script>
<script>
$(function(){
	$('.postForm').submit(function(event) {
		if(!check_submit($(this))){
			alert('請確認必填欄位！');
			return false;
		}
	});
})
</script>
<body>
<header>
	<?php include("header.php"); ?>
</header>
<div class="page_wrapper">
	<div class="container page">
		<?php include("adm_menu.php"); ?>
		<form id="postForm" name="postForm" class="postForm m_info_form">
			<div class="row">
				<div class="col-4 col-sm-4 col-form-label">帳號</div>
				<div class="col-8 col-sm-8 col-form-label">match</div>
			</div>
			<div class="row">
				<div class="col-4 col-sm-4 col-form-label">
					<label for="psd">密碼</label>
				</div>
				<div class="col-8 col-sm-8">
					<input type="password" name="psd" id="psd" class="form-control required pw_check" maxlength="20" minlength="8" placeholder="請輸入8~20位英數字">
				</div>
			</div>
			<div class="row">
				<div class="col-4 col-sm-4 col-form-label">
					<label for="psd_2">確認密碼</label>
				</div>
				<div class="col-8 col-sm-8">
					<input type="password" name="psd_2" id="psd_2" class="form-control required pw_check pw_db_check" maxlength="20" minlength="8" placeholder="若沒有要修改不需要輸入">
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
				<div class="col-4 col-sm-4 col-form-label">職稱</div>
				<div class="col-8 col-sm-8 col-form-label">主任</div>
			</div>
			<div class="form_btn">
				<input type="button" class="btn btn-warning" value="登出" onclick="location.href='adm_login.php'">
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