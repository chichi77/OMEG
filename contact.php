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
		<div class="title_img">線上報修</div>
		<form id="postForm" name="postForm" class="postForm contact_form">
			<div class="tip_txt">*為必填項目</div>
			<div class="row">
				<div class="col-4 col-sm-4 col-form-label">
					<span class="red_txt">*</span>
					<label for="case">申報建案</label>
				</div>
				<div class="col-8 col-sm-8">
					<select name="case" id="case" class="form-control required">
						<option value="0">里港開市大吉-戶號13F-2</option>
						<option value="1">林邊森粼-戶號5F-1</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-4 col-sm-4 col-form-label">
					<span class="red_txt">*</span>
					<label for="repair_type">維修項目</label>
				</div>
				<div class="col-8 col-sm-8">
					<select name="repair_type" id="repair_type" class="form-control required">
						<option value="0">水電類</option>
						<option value="1">弱電類</option>
						<option value="3">衛浴類</option>
						<option value="4">油漆類</option>
						<option value="5">門窗類</option>
						<option value="6">泥作類</option>
						<option value="7">防水類</option>
						<option value="8">其他</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-4 col-sm-4 col-form-label">
					<label>報修照片</label>
				</div>
				<div class="col-8 col-sm-8">
					<input name="photo_1" id="photo_1" type="file" accept="image/*" value="" class="form-control-file" target="uploadIframe">
					<div class="preview"></div>
					<input name="photo_2" id="photo_2" type="file" accept="image/*" value="" class="form-control-file" target="uploadIframe">
					<div class="preview"></div>
					<input name="photo_3" id="photo_3" type="file" accept="image/*" value="" class="form-control-file" target="uploadIframe">
					<div class="preview"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-4 col-sm-4 col-form-label">
					<label for="detail">報修備註</label>
				</div>
				<div class="col-8 col-sm-8">
					<textarea name="detail" id="datail" rows="5" placeholder="詳細敘述報修狀況"  class="form-control"></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col-4 col-sm-4 col-form-label">
					<span class="red_txt">*</span>
					<label for="code">驗證碼</label>
				</div>
				<div class="col-8 col-sm-8 form-inline">
					<img class="code_img" src="dist/img/code.jpg">
					<input type="text" name="code" id="code" class="form-control code_input required">
				</div>
			</div>
			<div class="form_btn">
				<button type="submit" class="btn btn-danger">確認送出</button>
			</div>
		</form>
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>