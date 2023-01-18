var UIVisitorSubmit = function () {
    var handleState = function () {
        $(document).on("change", ".load_visitor",function (event) {
            //event.preventDefault();
            var close_btn='<div class="m-alert__close"><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>';
			var selectbox = $(this),
                action = $baseUrl+"/findVisitor",
                method = "GET",
			    formData = {parent_id:selectbox.val()},
				feedback = (typeof selectbox.data('feedback') !== 'undefined' && selectbox.data('feedback')!=="" ) ?  selectbox.data('feedback') : 'alertBox',
                visitor = (typeof selectbox.data('visitor-id') !== 'undefined' && selectbox.data('visitor-id')!=="" ) ?  selectbox.data('visitor-id') : '',
                blocLoading=(typeof selectbox.data('blockloading') !== 'undefined' && selectbox.data('blockloading')!=="" ) ?  selectbox.data('blockloading') : 'pjax-container',
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
                        $("#"+visitor).html('<option value="0">انتخاب کنید</option>');
                        $("#"+visitor).append(data.html)
                       /* $("#"+visitor).html(data.html);*/
                        block_unloading(blocLoading);
					} else{
                        $("#"+visitor).html(data.html);
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
						});s
					});
					if(html=='')
						html='<div class="alert alert-danger alert-dismissible fade show" role="alert"> '+close_btn+' بروز خطا در ارسال یا دریافت اطلاعات از سرور '+'</div>';
					$("#"+feedback).html(html);
                    $('html, body').animate({
                        scrollTop: $("#"+feedback).offset().top
                    }, 1000);
					$("#"+visitor).html('<option value="0">هیچ ویزیتوری یافت نشد</option>');
                    block_unloading(blocLoading);
				}
			});
		});
	}
    return {
        //main function to initiate the module
        init: function () {
            handleState();
        }
    };
}();
jQuery(document).ready(function() {
    UIVisitorSubmit.init();
});