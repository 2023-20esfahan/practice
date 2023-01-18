//block loading
function block_loading(blockId,num) {
	var gif = (typeof num !== 'undefined' && num!=="" ) ?  num : 1;
	var path=$baseUrl+'/back-end/images/loader.svg';
	$('#'+blockId).block({
		message: '<img src="'+path+'" width="150px" />',
		css: { border: '2px solid #fff',overflow:'hidden','text-align':'center',margin:'0 auto' }
	});
}
function block_unloading(blockId) {
	$('#'+blockId).unblock();
}

//form validation
var PageScripts= {
	init:function() {
		$(".form-validate").validate({
			invalidHandler:function(e, r) {
				$(this).find(".form_msg_validate").removeClass("m--hide").show(), mUtil.scrollTop()
			}
			/*, submitHandler:function(e) {}*/
		});
		$(".form-validate-2").validate({
			invalidHandler:function(e, r) {
				$(this).find(".form_msg_validate").removeClass("m--hide").show(), mUtil.scrollTop()
			}
		});
		$(".form-validate-3").validate({
			invalidHandler:function(e, r) {
				$(this).find(".form_msg_validate").removeClass("m--hide").show(), mUtil.scrollTop()
			}
		});
		$(".form-validate-4").validate({
			invalidHandler:function(e, r) {
				$(this).find(".form_msg_validate").removeClass("m--hide").show(), mUtil.scrollTop()
			}
		});
		$(".form-validate-5").validate({
			invalidHandler:function(e, r) {
				$(this).find(".form_msg_validate").removeClass("m--hide").show(), mUtil.scrollTop()
			}
		});




		//input only digits
		jQuery('.numerical,.numeric').keyup(function () {
			this.value = this.value.replace(/[^0-9\.]/g,'');
		});

		//check all dataTable
		$("#m_table_1 .m-checkall").click(function () {
			var $ch=$(this).data('checkall');
			if( $(this).is(':checked') )
				$("#m_table_1 ."+$ch).prop("checked",true);
			else
				$("#m_table_1 ."+$ch).prop("checked",false);
		});


        /****Only English****/
        $('.only_english').keyup(function() {
            if (this.value.match(/[^a-zA-Z0-9\ ]/g)) {
                this.value = this.value.replace(/[^a-zA-Z0-9 ]/g, '');
            }
        });

        /****Only Persian****/
        $(".only_persian").bind('input propertychange',function(){
            if(!/^[پچجحخهعغفقثصضشسیبلاتنمکگوئدذرزطظژؤإأءًٌٍَُِّ\s\n\r\t\d\(\)\[\]\{\}.,،;\-؛]+$/.test($(this).val())){
                $(this).val("");
            }
        });

	}};

jQuery(document).ready(function() {
	PageScripts.init();
});

