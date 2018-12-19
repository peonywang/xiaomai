$(function () {
	// 点击弹窗其他部分隐藏弹窗
	$(".tan").click(function(){$(this).hide()});
	$(".tan .tanNr").click(function(event){
        event.stopPropagation();
    });
    $(".close").click(function(){
    	$(this).parents(".tan").hide();
    })
    
	// 默认提示隐藏
	$(".tishiT").hide();

	// 数量加减
	$(".numD .cz").click(function(){
		var _type = $(this).data("type");
		var _input = $(this).siblings("input[name='num']");
		var _val = parseInt(_input.val());
		if(_type == "sub"){
			if(_val > 1){
				_input.val(_val-1);
			}
		}else if(_type == "add"){
			_input.val(_val+1);
		}
	});

	$(".numD input[name=num]").change(function() {
		var _val = parseInt($(this).val())
		if(_val<1 || isNaN(_val)){
			$(this).val(1);
		}
	});
})