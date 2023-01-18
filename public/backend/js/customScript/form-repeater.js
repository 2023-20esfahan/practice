	var $repeater_1=$("#repeater_1").repeater({
		initEmpty: 1,
		defaultValues: {
			"text-input": "foo"
		},
		show: function() {
			$(this).slideDown()
		},
		hide: function(e) {
			//$(this).slideUp(e)
			confirm("آیا از حذف این عبارت اطمینان دارید ؟") && $(this).slideUp(e)
		},
		
		isFirstItemUndeletable: true, // غیر قابل حذف کردن ایتم اول
		
	});
	
	var $repeater_2=$("#repeater_2").repeater({
		initEmpty: 1,
		defaultValues: {
			"text-input": "foo"
		},
		show: function() {
			$(this).slideDown()
		},
		hide: function(e) {
			//$(this).slideUp(e)
			confirm("آیا از حذف این عبارت اطمینان دارید ؟") && $(this).slideUp(e)
		},
		
		isFirstItemUndeletable: true, // غیر قابل حذف کردن ایتم اول
		
	});
	
	var $repeater_3=$("#repeater_3").repeater({
		initEmpty: 1,
		defaultValues: {
			"text-input": "foo"
		},
		show: function() {
			$(this).slideDown()
		},
		hide: function(e) {
			//$(this).slideUp(e)
			selectedItem=$(this);
			
  		    var alert_title = $(this).find('.delbtn').data('title');
			 var alert_text = $(this).find('.delbtn').data('text');
			 var alert_cancel = $(this).find('.delbtn').data('cancel');
			 var alert_confirm = $(this).find('.delbtn').data('confirm');
	
      swal({
            title: alert_title,
            text:alert_text,
            type: "warning",
            showCancelButton: !0,
            cancelButtonText:alert_cancel,
            confirmButtonText: alert_confirm
        }).then(function(el) {
            if(el.value){
				selectedItem.slideUp(e)
            }      
        });
			
			
		},
		isFirstItemUndeletable: true, // غیر قابل حذف کردن ایتم اول
		
	});
	
	var $repeater_4=$("#repeater_4").repeater({
		initEmpty: 1,
		defaultValues: {
			"text-input": "foo"
		},
		show: function() {
			$(this).slideDown()
		},
		hide: function(e) {
			//$(this).slideUp(e)
			confirm("آیا از حذف این عبارت اطمینان دارید ؟") && $(this).slideUp(e)
		},
		isFirstItemUndeletable: true, // غیر قابل حذف کردن ایتم اول
		
	});
	
	var $repeater_5=$("#repeater_5").repeater({
		initEmpty: 0,
		defaultValues: {
			"text-input": "foo"
		},
		show: function() {
			$(this).slideDown()
		},
		hide: function(e) {
			//$(this).slideUp(e)
			confirm("آیا از حذف این عبارت اطمینان دارید ؟") && $(this).slideUp(e)
		},
		isFirstItemUndeletable: true, // غیر قابل حذف کردن ایتم اول
		
	});
	