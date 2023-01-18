var UIDeleteRows = function () {
    var handleDelete = function () {
        $(document).on("click", ".btn-delete-rows", function () {
            var close_btn = '<div class="m-alert__close"><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>';
            var $btn = $(this),
                action = $btn.data('action'),
                blockLoading = (typeof $btn.data('blockloading') !== 'undefined' && $btn.data('blockloading') !== "") ? $btn.data('blockloading') : 'unknow';
            $btn.addClass('m-loader');
            var $rows = [];
            var first_checks = document.getElementsByName("foo[]");
            var checks = first_checks.length ? first_checks : document.getElementsByName("selected_rows[]");
            for (var i = 0; i < checks.length; i++) {
                if (checks[i].checked === true) {
                    $rows.push(checks[i].value);
                }
            }

            swal({
                    title: "آیا از انجام این عملیات مطمئن هستید ؟",
                    text: "بعد از عملیات امکان بازگشت وجود ندارد و تمام داده های مرتبط پاک خواهد شد !",
                    type: "warning",
                    showCancelButton: !0,
                    cancelButtonText: "انصراف",
                    confirmButtonText: "بله مطمئن هستم"
                },
                function (confirm) {
                    if (confirm) {
                        block_loading(blockLoading, 2);
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: action,
                            type: 'POST',
                            data: {foo: $rows},
                            dataType: "json",
                            //contentType: false,
                            //cache: false,
                            //processData:false,
                            success: function (data) {
                                if (data.success == "true") {
                                    block_unloading(blockLoading);
                                    $('.m-checkable:checked').closest('tr').remove();
                                    swal("انجام شد", data.msg, "success");
                                } else {
                                    block_unloading(blockLoading);
                                    swal("شکست عملیات", data.msg, "warning");
                                }
                                $('html, body').animate({
                                    scrollTop: $("#alertBox").offset().top
                                }, 1000);
                                block_unloading(blockLoading);
                            },
                            error: function (data) {
                                var json = data.responseJSON;
                                var i = 0;
                                $.each(json.errors, function (key, value) {
                                    $.each(value, function (inKey, inValue) {
                                        notif({
                                            msg: inValue,
                                            type: "error",
                                            opacity: 0.8
                                        });
                                        i++;
                                    });
                                });
                                if (!i) {
                                    var msg = 'بروز خطا در ارسال یا دریافت اطلاعات از سرور';
                                    notif({
                                        msg: msg,
                                        type: "error",
                                        opacity: 0.8
                                    });
                                    html = '<div class="alert alert-danger alert-dismissible fade show" role="alert"> ' + close_btn + msg + '</div>';
                                    $("#alertBox").html(html);
                                    $('html, body').animate({
                                        scrollTop: $("#alertBox").offset().top
                                    }, 1000);
                                }
                                block_unloading(blockLoading);
                            }
                        });
                    }
                    $btn.removeClass('m-loader');
                });
        });
    }
    return {
        //main function to initiate the module
        init: function () {
            handleDelete();
        }
    };
}();
jQuery(document).ready(function () {
    UIDeleteRows.init();
});
