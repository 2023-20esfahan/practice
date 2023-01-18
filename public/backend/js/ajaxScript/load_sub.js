
        $(document).on("change", ".load_sub",function (event) {
            //event.preventDefault();
            var close_btn='<div class="m-alert__close"><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>';
			var selectbox = $(this),
                action = selectbox.data('action'),
                method = "GET",

				feedback = (typeof selectbox.data('feedback') !== 'undefined' && selectbox.data('feedback')!=="" ) ?  selectbox.data('feedback') : 'alertBox',
				sub_id = (typeof selectbox.data('sub-id') !== 'undefined' && selectbox.data('sub-id')!=="" ) ?  selectbox.data('sub-id') : '',
                blocLoading=(typeof selectbox.data('blockloading') !== 'undefined' && selectbox.data('blockloading')!=="" ) ?  selectbox.data('blockloading') : 'pjax-container',
                search = (typeof selectbox.data('search') !== 'undefined' && selectbox.data('search')!=="" ) ?  selectbox.data('search') : 'no',
                main_parent_id = (typeof selectbox.data('parent-id') !== 'undefined' && selectbox.data('parent-id')!=="" ) ?  selectbox.data('parent-id') : '';
				if( main_parent_id!="") {
					main_parent_id=$("#"+main_parent_id).val();
					 formData = {parent_id:selectbox.val(),'search':search,'main_parent_id':main_parent_id};
				 } else{
					 formData = {parent_id:selectbox.val(),'search':search};
					}			 
			   
                html = "";
	
			block_loading(blocLoading,9);
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
                        $("#"+sub_id).html(data.html);
						$("#"+sub_id).trigger("liszt:updated");
						
                        $("#"+sub_id).select2();
                        block_unloading(blocLoading);
					}
					else{
                        $("#"+sub_id).html(data.html);
						$("#"+sub_id).trigger("liszt:updated");
					
                        $("#"+sub_id).select2();
                        block_unloading(blocLoading);

					}
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
					$("#"+sub_id).html('<option value="0">'+selectbox.data('not-found-message')+'</option>');
                    block_unloading(blocLoading);
				}
            });
        });
