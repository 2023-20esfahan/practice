var UIOptionSubmit = function () {
    var handleOption = function () {
        $(document).on("change", ".load_option",function (event) {
            //event.preventDefault();
            var close_btn='<div class="m-alert__close"><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>';
			var selectbox = $(this),
                action = selectbox.data('action'),
                method = "GET",
				val2 = (typeof selectbox.data('value') !== 'undefined' && selectbox.data('value')!=="" ) ?  selectbox.data('value') : '0',
			    formData = {id:selectbox.val(),value:val2},
				feedback = selectbox.data('feedback'),
				result = (typeof selectbox.data('result') !== 'undefined' && selectbox.data('result')!=="" ) ?  selectbox.data('result') : 'alertBox',
				bloading=selectbox.id;
                html = "";
				
			block_loading(bloading,9);
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
                        $("#"+feedback).html(data.html);
                        block_unloading(bloading);
					}
					else{
                        $("#"+feedback).html(data.html);
                        block_unloading(bloading);

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
					$("#"+result).html(html);
                    $('html, body').animate({
                        scrollTop: $("#"+result).offset().top
                    }, 1000);
					$("#"+feedback).html('<option value="0">هیچ گزینه ای یافت نشد</option>');
                    block_unloading(bloading);
				}
			});
		});
	}
    return {
        //main function to initiate the module
        init: function () {
            handleOption();
        }
    };
}();
jQuery(document).ready(function() {
    UIOptionSubmit.init();
});