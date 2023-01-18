
function refresh_new_event() {
    var html= "",
        orderHtml= "",
        userHtml = "",
        close_btn="";
        var tpl='<div class="m-list-timeline__item" id="event-row-%id%">' +
            '<span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>' +
            '<span class="m-list-timeline__text">' +
            //'<i class="la la-times-circle font-small m--font-metal seen-quickly" id="%id%"></i> ' +
            '<a href="%link%" class="%fontColor%">%title%</a>' +
            //'%type%' +
            '</span>' +
            '<span class="m-list-timeline__time">%date%</span>' +
            '</div>';
        var no_event ='<div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">' +
            '<div class="m-stack__item m-stack__item--center m-stack__item--middle">' +
            '<span class=""> هنوز رویداد تازه ای ثبت نشده </span>' +
            '</div>' +
            '</div>';
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });
    $.ajax({
        url: $baseUrl+'/get-new-event',
        type: 'get',
        data: {},
        dataType: "json",
        success: function(result) {
            if(result.success){
                /*پلیر آلارم صوتی*/
                var ply = document.getElementById("myAudio");
                /*تعداد رویدادها*/
                var event_number=result.data.event_number;
                $("#new_event_count").html(event_number);
                /*تنظیم چشمک زن*/
                if(event_number > 0)
                    $("#spinner-event").addClass('m-badge--danger m-spinner m-spinner--sm');
                else
                    $("#spinner-event").removeClass('m-badge--danger m-spinner m-spinner--sm');
                /*محتوای رویدادها*/
                $.each(result.data.new, function (key, value) {
                    $.each(value,function(innerKey,innerValue){
                        if(key=='order'){
                            orderHtml+=my_template(tpl,innerValue);
                            //ply.play();
                        }
                        if(key=='user'){
                            userHtml+=my_template(tpl,innerValue);
                        }
                    });
                });
                if(orderHtml=='')
                    orderHtml=no_event;
                if(userHtml=='')
                    userHtml=no_event;
                /*درج محتوا در مکان خودش*/
                $("#see_order_event").html(orderHtml);
                $("#see_user_event").html(userHtml);
                //alert(orderHtml);
            }
            else{
                alert('error');
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
        }
    });
}

/*ایجاد هر سطر از رویداد با قالب صفحه*/
function my_template(tpl,row) {
    var html=tpl.replace(/%id%|%title%|%link%|%fontColor%|%date%/gi,function (x) {
        switch (x){
            case '%id%':
                return row.id;
                break;
            case '%title%':
                return row.title;
                break;
            case '%link%':
                if(row.link =="")
                    return '';
                else
                    return row.link;
                break;
            case '%fontColor%':
                if(row.type=='top_priority')
                    return 'm--font-danger';
                return 'm--font-metal';
                break;
            case '%date%':
                return row.created_at;
                break;
        }
    });
    return html;
}

/*خطای اطمینان حذف رویداد*/
$("body").on('click','.seen-quickly',function() {
    var id=this.id;
    if(confirm('میخواهید این رویداد دیگر نشان داده نشود؟')){
        delete_event_request(id);
    }
});

function delete_event_request(id) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });
    $.ajax({
        url: $baseUrl+'/delete-new-event',
        type: 'get',
        data: {id:id},
        dataType: "json",
        success: function(result) {
            if(result.success){
                $("#event-row-"+id).fadeToggle();
            }
            else
                alert(result.msg);
        },
        error: function (data){

        }
    });
}


refresh_new_event();
setInterval(refresh_new_event,20000);
