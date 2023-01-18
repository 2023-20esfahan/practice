function CtaOptLoad(idd,cat_type,action){
	var close_btn='<div class="m-alert__close"><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>';
	var method = 'post',
		formData = {"idd":idd,"cat_type":cat_type},
		idBlockLoading = 'modalFormCatOptEdit',
		feedback = 'modal-feedback';
		
	block_loading(idBlockLoading,2);
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
	});
	$.ajax({
		url: action,
		type: method,
		data: formData,
		dataType: "json",
		success: function(data) {
			if(data.success=="true"){
				$("#modal-title").html('('+data.title +')'+ ' با شناسه ' + data.id);
                $("#idd").val(data.idd);
                $("#cat_type").val(data.cat_type);
                $("#relate_arr").html(data.relate_arr);
                $("#icon_txt").val(data.icon);
                $(".browse-img input[name=thumbnail]").val(data.url);
				$(".browse-img img").attr('src',$uploadsUrl+'/'+data.url);
                $("#store_type").val(data.value);


				$("#advance-edit").attr('href',$baseUrl+'/management/category-edit/'+data.id);
				block_unloading(idBlockLoading);
			}
			else{
				html='<div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-warning fade show" role="alert">';
				html+='<div class="m-alert__icon"><i class="la la-warning"></i></div>';
				html+='<div class="m-alert__text">امکان بارگذاری مشخصات این آیتم وجود ندارد. </div>';
				html+=close_btn;
				html+='</div>';
				$("#"+feedback).html(html);
				block_unloading(idBlockLoading);

			}
			/*$('html, body').animate({
				scrollTop: $("#"+feedback).offset().top
			}, 1000);*/
		},
		error: function (data){
			var json = data.responseJSON;
			html='';
			$.each(json.errors, function (key, value) {
				$.each(value,function(inKey,inValue){
					html+='<div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-danger fade show" role="alert">';
					html+='<div class="m-alert__icon"><i class="la la-times-circle-o"></i></div>';
					html+='<div class="m-alert__text">'+inValue +'</div>' ;
					html+=close_btn;
					html+='</div>';
				});
			});
			if(html=='')
				html='<div class="alert alert-danger alert-dismissible fade show" role="alert"> '+close_btn+' بروز خطا در ارسال یا دریافت اطلاعات از سرور '+'</div>';
			$("#"+feedback).html(html);
			$('html, body').animate({
				scrollTop: $("#"+feedback).offset().top
			}, 1000);
			block_unloading(idBlockLoading);
		}
	});
}