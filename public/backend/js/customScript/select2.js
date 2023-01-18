var Select2= {
    init:function() {
        $(".select2, #m_select2_1_validate").select2( {
            placeholder: "یک گزینه انتخاب کنید",
            dir : "rtl",
			language: {
				noResults: function(){return "چیزی یافت نشد";}
				}
			
        }
        ),
        $("#select2_remote_1").select2( {
            placeholder:"متنی را برای جستجو بنویسید",
            allowClear:!0,
            ajax: {
                url:"http://localhost/laravel/management/select2_remote",
                dataType:"json",
                type: "GET",
                delay:250,
                data:function(e) {
                    return {
                        q: e.term,
                        page: e.page
                    }
                }
                , processResults:function(e, t) {

                    return t.page=t.page||1, {
                        results:e.items, pagination: {
                            more: 30*t.page<e.total_count
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
                if(e.loading) return e.text;
                var t="<div class='select2-result-repository clearfix'><div class='select2-result-repository__meta'><div class='select2-result-repository__title'>"+e.full_name + e.id +" </div>";
                return e.description&&(t+="<div class='select2-result-repository__description'>"+e.description+"</div>"), t+="<div class='select2-result-repository__statistics'><div class='select2-result-repository__forks'><i class='fa fa-flash'></i> "+e.forks_count+" Forks</div><div class='select2-result-repository__stargazers'><i class='fa fa-star'></i> "+e.stargazers_count+" Stars</div><div class='select2-result-repository__watchers'><i class='fa fa-eye'></i> "+e.watchers_count+" Watchers</div></div></div></div>"
            }
            , templateSelection:function(e) {
                return e.full_name||e.text
            }
            }),

        $("#m_select2_5").select2( {
            placeholder:"یک مقدار انتخاب کنید", data:[ {
                id: 0, text: "Enhancement"
            }
            , {
                id: 1, text: "Bug"
            }
            , {
                id: 2, text: "Duplicate"
            }
            , {
                id: 3, text: "Invalid"
            }
            , {
                id: 4, text: "Wontfix"
            }
            ]
        }
        ),

        $(".select2_multiple").select2( {
            placeholder: "یک گزینه انتخاب کنید", maximumSelectionLength: 5,
			language: {
				noResults: function(){return "چیزی یافت نشد";}
				}
        }
        ),
        $(".select2_nobar").select2( {
            placeholder: "یک گزینه انتخاب کنید", minimumResultsForSearch: 1/0
        }
        ),
        $(".select2_tags").select2( {
            placeholder: "افزون کلمه کلیدی", tags: !0,
			language: {
				noResults: function(){return "چیزی یافت نشد";}
				},
			dir : "rtl",	
        }),
        $(".m-select2-general").select2( {
            placeholder: "Select an option"
        }),

            jQuery('.select2_remote').each(function () {
                var $this=$(this);
                var $action=$this.data('action');
                var $translate=$this.data('translate');
                console.log($translate);
                //var $translate=JSON.parse($textObject);
                $this.select2({
                    placeholder:"متنی را برای جستجو بنویسید",
                    dir : "rtl",
                    width:'100%',
                    allowClear:!0,
                    language: {
                        noResults: function(){return "چیزی یافت نشد";},
                        inputTooShort: function () { return 'یک یا چند کاراکتر تایپ کنید'; }
                    },
                    ajax: {
                        url:$baseUrl + $action,
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
                            searchKey=getKey($translate,index);
                            if(searchKey !== "_false_"){
                                t+="<div class='select2-result-repository__title'>"+ searchKey +" : <span class='m--font-metal'>"+ value +"</span></div>" ;
                            }
                        });
                        t+="</div>";
                        return t;
                    },
                    templateSelection:function(e) {
                        return e.text || e.id ;
                    }
                });
            });
		
        $("#m_select2_modal").on("shown.bs.modal", function() {
            $("#m_select2_1_modal").select2( {
                placeholder: "یک گزینه انتخاب کنید",
				
            }
            ), $("#m_select2_2_modal").select2( {
                placeholder: "یک گزینه انتخاب کنید"
            }
            ), $("#m_select2_3_modal").select2( {
                placeholder: "یک گزینه انتخاب کنید"
            }
            ), $("#m_select2_4_modal").select2( {
                placeholder: "یک گزینه انتخاب کنید", allowClear: !0
            }
            )
        })
    }
};
jQuery(document).ready(function() {
    Select2.init()
});


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

