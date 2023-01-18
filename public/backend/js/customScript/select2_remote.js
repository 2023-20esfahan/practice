/* سلکت 2 ایجکسی معمولی */
function select2_remote(select_id,ajax_url,translate) {
    $("#"+select_id).select2({
        placeholder:"متنی را برای جستجو بنویسید",
        dir : "rtl",
        allowClear:!0,
        language: {
            noResults: function(){return "چیزی یافت نشد";},
            inputTooShort: function () { return 'یک یا چند کاراکتر تایپ کنید'; }
        },
        ajax: {
            url:$baseUrl + ajax_url,
            dataType:"json",
            type: "GET",
            delay:250,
            language: 'fa',
            data:function(e) {
                return {
                    q: e.term,
                    page: e.page
                }
            }
            , processResults:function(e, t) {
                return t.page=t.page||1,
                    {
                        results:e.items, pagination: {
                        more: 30*t.page < e.total_count
                        }
                    }
            }
            , cache:!0
        }
        , escapeMarkup:function(e) {
            return e
        }
        , minimumInputLength:1,
        templateResult:function(e) {
            if(e.loading)
                return e.id;
            var t="";
            var searchKey="";
            t+="<div class='select2-result-repository clearfix' style='border-bottom: dashed 1px #ccc'>";
            jQuery.each(e , function (index , value) {
                searchKey=getKey(translate,index);
                if(searchKey !== "_false_"){
                    t+="<div class='select2-result-repository__title'>"+ searchKey +" : <span class='m--font-metal'>"+ value +"</span></div>" ;
                }
            });
            t+="</div>";
            return t;
        }
        , templateSelection:function(e) {
            return e.text || e.id ;
        }
    });
}

/* سلکت 2 ایجکسی برای مودال باکس */
function select2_remote_modal(select_id,modal_id,ajax_url,translate) {
    $("#"+select_id).select2({
        dropdownParent: $('#'+modal_id),
        placeholder:"متنی را برای جستجو بنویسید",
        dir : "rtl",
        allowClear:!0,
        language: {
            noResults: function(){return "چیزی یافت نشد";},
            inputTooShort: function () { return 'یک یا چند کاراکتر تایپ کنید'; }
        },
        ajax: {
            url:$baseUrl + ajax_url,
            dataType:"json",
            type: "GET",
            delay:250,
            language: 'fa',
            data:function(e) {
                return {
                    q: e.term,
                    page: e.page
                }
            }
            , processResults:function(e, t) {
                return t.page=t.page||1,
                    {
                        results:e.items, pagination: {
                        more: 30*t.page < e.total_count
                    }
                    }
            }
            , cache:!0
        }
        , escapeMarkup:function(e) {
            return e
        }
        , minimumInputLength:1,
        templateResult:function(e) {
            if(e.loading)
                return e.id;
            var t="";
            var searchKey="";
            t+="<div class='select2-result-repository clearfix' style='border-bottom: dashed 1px #ccc'>";
            jQuery.each(e , function (index , value) {
                searchKey=getKey(translate,index);
                if(searchKey !== "_false_"){
                    t+="<div class='select2-result-repository__title'>"+ searchKey +" : <span class='m--font-metal'>"+ value +"</span></div>" ;
                }
            });
            t+="</div>";
            return t;
        }
        , templateSelection:function(e) {
            return e.text || e.id ;
        }
    });
}

/* تابع کمکی برای پیدا کردن کلید ترجمه */
function getKey(obj,key) {
    var r = '_false_';
    jQuery.each(obj , function (index,value) {
        if(index == key){
            r = value
        }
    });
    return r;
}




