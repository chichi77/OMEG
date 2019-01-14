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
	else if (location.pathname.indexOf('adm_')) {
		if(page.indexOf('repair')!=-1){
			$('.adm_menu > div').eq(0).addClass('active');
			$('.state_menu > div:nth-child(1), .case_wrapper .item[data-type="0"]').addClass('active');
		}
		else if (page.indexOf('info')!=-1) {
			$('.adm_menu > div').eq(1).addClass('active');
		}
	}

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