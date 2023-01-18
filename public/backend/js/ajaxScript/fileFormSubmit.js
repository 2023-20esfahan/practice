var UIFormFileSubmit = function () {
    var handleForms = function () {

		$(document).on("submit", ".fileAjaxSubmit",function (event) {
            event.preventDefault();
           var close_btn='<button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>';
           var form = $(this),
                action = form.attr('action'),
                method = form.attr('method');
                formData = new FormData($(this)[0]);
            var feedback = (typeof form.data('feedback') !== 'undefined' && form.data('feedback')!=="" ) ?  form.data('feedback') : 'alertBox',
                blockLoading = (typeof form.data('blockloading') !== 'undefined' && form.data('blockloading')!=="" ) ?  form.data('blockloading') : 'unknow',
                page_redirect= (typeof form.data('redirect') !== 'undefined' && form.data('redirect')!=="" ) ?  form.data('redirect') : action,
                func_after_done = (typeof form.data('func-after-done') !== 'undefined' && form.data('func-after-done')!=="" ) ?  form.data('func-after-done') : '',
                form_reset=  form.data('reset'),
                form_scroll= form.data('scroll'),
                html = "عملیاتی انجام نشد",
                class_loader='m-loader--light m-loader--left m-loader',
                d_param=0;
            var submitBtn=form.find('button[type="submit"]');
            submitBtn.addClass(class_loader);

            block_loading(blockLoading,3);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });

            $.ajax({
                url: action,
                type: method,
                data: formData,
                dataType: "json",
                contentType: false,
                cache: false,
                processData:false,
                success: function(data) {
                    if(data.success=="true"){

                        html='<div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-success fade show" role="alert">';
                        html+='<div class="m-alert__text">'+data.msg ;
                        html+=close_btn;
                        html+='</div>';
                        $("#"+feedback).html(html);
                        block_unloading(blockLoading);
                        var target=form.find("input[name=target_to]").val();
                        if(form_reset=='yes') form.find("input[type=text], textarea , input[type=password] , input[type=email]").val("");
                        if(target=='_blank')window.location.href = page_redirect;
                        if(data.param)
                            d_param=data.param;
                        /*if (typeof after_done == 'function')  {
                            after_done(d_param);
                        }*/
                        if(func_after_done!=='' && (typeof window[func_after_done] === "function")){

                            if(d_param !== 0)
                            {

                                window[func_after_done](d_param);
                            }else{

                                window[func_after_done]();
                            }
                        }
                    }
                    else{
                        html='<div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-warning fade show" role="alert">';
                        html+='<div class="m-alert__text">'+data.msg ;
                        html+=close_btn;
                        html+='</div>';
                        $("#"+feedback).html(html);
                        block_unloading(blockLoading);

                    }
                    submitBtn.removeClass(class_loader);
                    if(form_scroll=='yes'){
                        $('html, body').animate({
                            scrollTop: $("#"+feedback).offset().top -70
                        }, 1000);
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
                    if(form_scroll=='yes'){
                        $('html, body').animate({
                            scrollTop: $("#"+feedback).offset().top -70
                        }, 1000);
                    }
                    submitBtn.removeClass(class_loader);
                    block_unloading(blockLoading);
                }
            });
        });



	}
    return {
        //main function to initiate the module
        init: function () {
            handleForms();
        }
    };
}();
jQuery(document).ready(function() {
    UIFormFileSubmit.init();
});
