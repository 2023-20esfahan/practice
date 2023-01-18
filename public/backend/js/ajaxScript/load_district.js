var UICitySubmit = function () {
    var handleCity = function () {
        $(document).on("change", ".load_district",function (event) {
            //event.preventDefault();
            var close_btn='<div class="m-alert__close"><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>';
			var selectbox = $(this),
                action = $baseUrl+"/findDistrict",
                method = "GET",
			    formData = {parent_id:selectbox.val()},
				feedback = (typeof selectbox.data('feedback') !== 'undefined' && selectbox.data('feedback')!=="" ) ?  selectbox.data('feedback') : 'alertBox',
				district_id = (typeof selectbox.data('district-id') !== 'undefined' && selectbox.data('district-id')!=="" ) ?  selectbox.data('district-id') : '',
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
                        $("#"+district_id).html(data.html);
                        block_unloading(blocLoading);
					}
					else{
                        $("#"+district_id).html(data.html);
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
					$("#"+city_id).html('<option value="0">هیچ محله ای یافت نشد</option>');
                    block_unloading(blocLoading);
				}
			});
		});
	}
    return {
        //main function to initiate the module
        init: function () {
            handleCity();
        }
    };
}();
jQuery(document).ready(function() {
    UICitySubmit.init();
});