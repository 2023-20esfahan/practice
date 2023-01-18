var BootstrapMaxlength= {
    init:function() {
        $(".maxlength").maxlength( {
            warningClass: "m-badge m-badge--warning m-badge--rounded m-badge--wide", 
			limitReachedClass: "m-badge m-badge--success m-badge--rounded m-badge--wide",
			postText: " باقی مانده است ", 
        }
        ),
        $("#m_maxlength_2").maxlength( {
            threshold: 5, warningClass: "m-badge m-badge--danger m-badge--rounded m-badge--wide", limitReachedClass: "m-badge m-badge--success m-badge--rounded m-badge--wide"
        }
        ),
        $(".maxlength_onshow").maxlength( {
            alwaysShow: !0, 
			threshold: 5, 
			warningClass: "m-badge m-badge--warning m-badge--rounded m-badge--wide", 
			limitReachedClass: "m-badge m-badge--brand m-badge--rounded m-badge--wide",
			postText: " باقی مانده است ", 
        }
        ),
        $(".maxlength_custom_show").maxlength( {
            threshold: 3, 
			warningClass: "m-badge m-badge--danger m-badge--rounded m-badge--wide", 
			limitReachedClass: "m-badge m-badge--success m-badge--rounded m-badge--wide", 
			separator: " از ", 
			preText: " متن شما ", 
			postText: " باقی مانده است ", 
			validate: !0
        }
        ),
        $("#m_maxlength_5").maxlength( {
            threshold: 5, 
			warningClass: "m-badge m-badge--primary m-badge--rounded m-badge--wide", 
			limitReachedClass: "m-badge m-badge--brand m-badge--rounded m-badge--wide"
        }
        ),
        $(".maxlength_top_left").maxlength( {
            alwaysShow: !0, 
			threshold: 5, 
			placement: "top-left", 
			warningClass: "m-badge m-badge--brand m-badge--rounded m-badge--wide", 
			limitReachedClass: "m-badge m-badge--brand m-badge--rounded m-badge--wide"
        }
        ),
        $(".maxlength_top_right").maxlength( {
            alwaysShow: !0, 
			threshold: 5, 
			placement: "top-right", 
			warningClass: "m-badge m-badge--success m-badge--rounded m-badge--wide", 
			limitReachedClass: "m-badge m-badge--brand m-badge--rounded m-badge--wide"
        }
        ),
        $(".maxlength_bottom_left").maxlength({
            alwaysShow: !0, 
			threshold: 5, 
			placement: "bottom-left", 
			warningClass: "m-badge m-badge--warning m-badge--rounded m-badge--wide", 
			limitReachedClass: "m-badge m-badge--brand m-badge--rounded m-badge--wide"
        }
        ),
        $(".maxlength_bottom_right").maxlength( {
            alwaysShow: !0, 
			threshold: 5, 
			placement: "bottom-right", 
			warningClass: "m-badge m-badge--danger m-badge--rounded m-badge--wide", 
			limitReachedClass: "m-badge m-badge--brand m-badge--rounded m-badge--wide"
        }
        ),
        $("#m_maxlength_1_modal").maxlength( {
            warningClass: "m-badge m-badge--warning m-badge--rounded m-badge--wide", limitReachedClass: "m-badge m-badge--success m-badge--rounded m-badge--wide", appendToParent: !0
        }
        ),
        $("#m_maxlength_2_modal").maxlength( {
            threshold: 5, warningClass: "m-badge m-badge--danger m-badge--rounded m-badge--wide", limitReachedClass: "m-badge m-badge--success m-badge--rounded m-badge--wide", appendToParent: !0
        }
        ),
        $("#m_maxlength_5_modal").maxlength( {
            threshold: 5, warningClass: "m-badge m-badge--primary m-badge--rounded m-badge--wide", limitReachedClass: "m-badge m-badge--brand m-badge--rounded m-badge--wide", appendToParent: !0
        }
        ),
        $("#m_maxlength_4_modal").maxlength( {
            threshold: 3, warningClass: "m-badge m-badge--danger m-badge--rounded m-badge--wide", limitReachedClass: "m-badge m-badge--success m-badge--rounded m-badge--wide", appendToParent: !0, separator: " of ", preText: "You have ", postText: " chars remaining.", validate: !0
        }
        )
    }
}

;
jQuery(document).ready(function() {
    BootstrapMaxlength.init()
}

);