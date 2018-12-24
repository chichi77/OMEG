//import App from "./js/components/container/App";
//import M_Menu from "./js/components/container/m_menu.js"
import $ from "jquery";

require('./scss/style.scss');

$(function(){
	var page = GetPage();
	if($('.m_menu').length){
		if(page.indexOf('m_repair')!=-1){
			$('.m_menu > div').eq(0).addClass('active');
			$('.state_menu > div:nth-child(1), .case_wrapper .item[data-type="0"]').addClass('active');
		}
		else if(page.indexOf('m_case')!=-1){
			$('.m_menu > div').eq(1).addClass('active');
		}
		else if(page.indexOf('m_edu')!=-1){
			$('.m_menu > div').eq(2).addClass('active');
		}
		else if(page.indexOf('m_info')!=-1){
			$('.m_menu > div').eq(3).addClass('active');
		}
	}
	else if ($('.adm_menu').length) {
		if(page.indexOf('repair')!=-1){
			$('.adm_menu > div').eq(0).addClass('active');
			$('.state_menu > div:nth-child(1), .case_wrapper .item[data-type="0"]').addClass('active');
		}
		else if (page.indexOf('info')!=-1) {
			$('.adm_menu > div').eq(1).addClass('active');
		}
	}

	$('.postForm').submit(function(event) {
		if(!check_submit($(this))){
			alert('請確認必填欄位！');
			return false;
		}
	});

	$('.postForm:not(.m_info_form) .required').blur(function(event) {
		check_submit($(this).parents('form'));
	});

	//input img preview
	$('.form-control-file').change(function(event) {
		$(this).next('.preview').html('');
		readURL(this, $(this).next('.preview'));
	});

	$('.state_menu > div').click(function(event) {
		var type = parseInt($(this).data('type'));

		$('.state_menu > div, .case_wrapper .item').removeClass('active');
		$(this).addClass('active');
		
		switch (type) {
			case 0:
				$('.case_wrapper .item[data-type="0"]').addClass('active');
				break;
			case 1:
				$('.case_wrapper .item[data-type="1"]').addClass('active');
				break;
			case 2:
				$('.case_wrapper .item[data-type="2"]').addClass('active');
				break;
			case 3:
				$('.case_wrapper .item[data-type="3"]').addClass('active');
				break;
			default:
				// statements_def
				break;
		}
	});
})

function GetPage(){
	var path = location.pathname.split('/');
	return path.pop();
}

function readURL(input, preview) {
  if(input.files) {
    for(let i = 0, len = input.files.length>3 ? 3 : input.files.length; i < len; i++){
    	var reader = new FileReader();
	    reader.onload = function(e) {
	    	var img = "<img class='img-fluid preview_img' src='"+e.target.result+"' >";
        preview.append(img);
	    }

	    reader.readAsDataURL(input.files[i]);
	  }
  }
}

var $data_notify_default = "Can not be empty!",
	$data_notify_mail = "Please enter the correct e-mail.",
	$data_notify_pass = "請確認密碼";
function check_submit(object) //FORM_CHECK
{
	var reEmail = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/; 
	object.find(".required").each(function() {
		if($(this).val()==""){
			$(this).addClass("invalid").next(".notify").remove();
			if($(this).attr("data-notify")){
				$(this).after("<span class='notify'>"+$(this).attr("data-notify")+"</span>");
			}else{
				//$(this).after("<span class='notify'>"+$data_notify_default+"</span>");
			}
		}else if($(this).hasClass("mail_check")){ //E-mail Check
			if($(this).val().search(reEmail) == "-1"){
				$(this).addClass("invalid").next(".notify").remove();
				$(this).after("<span class='notify'>"+$data_notify_mail+"</span>");
			}else{
				$(this).removeClass("invalid");
				$(this).next(".notify").remove();
			}
		}else if($(this).hasClass("pw_check")){ //Password Check
			if(!$(this).hasClass("pw_db_check")){
				var $db_check = $(this).parents("form").find("input.pw_db_check");
				if($(this).val().length < 6 || $(this).val().length > 12){
					$(this).addClass("invalid").next(".notify").remove();
					$(this).after("<span class='notify'>"+$data_notify_pass+"</span>");
				}else{
					$(this).removeClass("invalid");
					$(this).next(".notify").remove();
					//do pw db check
					if($(this).val() != $db_check.val()){
						$db_check.addClass("invalid").next(".notify").remove();
						$db_check.after("<span class='notify'>"+$data_notify_pass+"</span>");
						return false;
					}

				}
			}else{ //if it's db_check_input
				if($(this).val().length < 6 || $(this).val().length > 12){
					$(this).addClass("invalid").next(".notify").remove();
					$(this).after("<span class='notify'>"+$data_notify_pass+"</span>");
				}else{
					$(this).removeClass("invalid");
					$(this).next(".notify").remove();
				}
			}
		}else{
			$(this).removeClass("invalid");
			$(this).next(".notify").remove();
		}
   });
	
	if (object.find("*").hasClass("invalid")){
		return false;
	}else{
		return true;
	};
}