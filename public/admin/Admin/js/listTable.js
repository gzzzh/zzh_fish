/**
 * @name 列表操作(排序，修改值，状态切换，批量操作)
 * @description Based on jQuery 1.4+
 * @author andery@foxmail.com 
 */ 
;(function($) {
	$.fn.listTable = function(options) {
		var self = this,
			local_url = window.location.search,
			settings = {
				url: $(self).attr('data-acturi')
			}
		if(options) {
			$.extend(settings, options);
		}
		//整理排序
		var params  = local_url.substr(1).split('&');
		var sortfld,sortord;
		for(var i=0; i < params.length; i++) {
			var param = params[i];
			var arr   = param.split('=');
			if(arr[0] == 'sortfld') {
				sortfld = arr[1];
			}
			if(arr[0] == 'sortord') {
				sortord = arr[1];
			}
		}
		self.find('.J_preview').preview();
		var showDialog=function(obj,ids){
		var self = $(obj),
			dtitle = self.attr('data-title'),
			did = self.attr('data-id'),
			duri = self.attr('data-uri')+'&id='+ids,
			dwidth = parseInt(self.attr('data-width')),
			dheight = parseInt(self.attr('data-height')),
			dpadding = (self.attr('data-padding') != undefined) ? self.attr('data-padding') : '',
			dcallback = self.attr('data-callback');
		$.dialog({id:did}).close();ajax-get
		$.dialog({
			id:did,
			title:dtitle,
			width:dwidth ? dwidth : 'auto',
			height:dheight ? dheight : 'auto',
			padding:dpadding,
			lock:true,
			ok:function(){
				var info_form = this.dom.content.find('#info_form');
				if(info_form[0] != undefined){
					info_form.submit();
					if(dcallback != undefined){
						eval(dcallback+'()');
					}
					return false;
				}
				if(dcallback != undefined){
					eval(dcallback+'()');
				}
			},
			cancel:function(){}
		});
		$.getJSON(duri, function(result){
			if(result.status == 1){
				$.dialog.get(did).content(result.data);
			}
		});
		return false;
	}
		
		//点击行选中本行
/*
		$('tbody tr', $(self)).on('click', function(){
			var tr = this;
			if($('.J_checkitem', $(this)).attr('checked')){
				$('.J_checkitem', $(this)).attr('checked', false);
				$(tr).removeClass('on');
			}else{
				$('.J_checkitem', $(this)).attr('checked', true);
				$(tr).addClass('on');
			}
		});

		$('.J_checkitem', $(self)).on('click', function(){
			$(this).attr('checked', this.checked ? false : true);
		});
                //点击行选中本行, 并取消其他行
		$('tbody tr', $(self)).on('click', function(){
                     $(self).find('tbody tr').each(function(){ $(this).removeClass('on');});
                    $(this).().addClass('on');
                   
		});
        */
       
		//全选反选
		$('.J_checkall').on('click', function(){
			$('.J_checkitem').attr('checked', this.checked);
			$('.J_checkall').attr('checked', this.checked);
    	});
    	//历史排序
		$('span[data-tdtype="order_by"]', $(self)).each(function() {
			if($(this).attr('data-field') == sortfld) {
				if(sortord == 'asc') {
					$(this).attr('data-order', 'asc');
					$(this).addClass("sort_asc");
				} else if (sortord == 'desc') {
					$(this).attr('data-order', 'desc');
					$(this).addClass("sort_desc");
				}
			}
		}).addClass('sort_th');
		//排序
		$('span[data-tdtype="order_by"]', $(self)).on('click', function() {
			var s_name = $(this).attr('data-field'),
				s_order  = $(this).attr('data-order'),
				sort_url = (local_url.indexOf('?') < 0) ? '?' : '';
				sort_url += '&sortfld=' + s_name + '&sortord=' + (s_order =='asc' ? 'desc' : 'asc');
				local_url = local_url.replace(/&sortfld=(.+?)&sortord=(.+?)$/, '');
			    location.href = local_url + sort_url;
			return false;
		});
		//修改
		$('span[data-tdtype="edit"]', $(self)).on('click', function() {
			var s_val   = $(this).text(),
			s_name  = $(this).attr('data-field'),
			s_id    = $(this).attr('data-id'),
            s_idfld    = $(this).attr('data-idfield'),
		    showmsg = ($(this).attr('data-showmsg') != undefined) ? $(this).attr('data-showmsg') : '',
			width   = $(this).width();
			if(width < 20){
				width = 20;
			}
			$('<input type="text" value="'+s_val+'" />').width(width).focusout(function(){
				$(this).prev('span').show().text($(this).val());
				if($(this).val() != s_val) {
					$.getJSON(settings.url, {id:s_id,idfield:s_idfld,field:s_name, val:$(this).val()}, function(result){
						if(showmsg.toUpperCase()=='YES'){
						  	if(result.status == 1) {
							   layer.msg(result.msg);	
							   return;
						    }
						}
						if(result.status == 0) {
							layer.msg(result.msg);
							$('span[data-field="'+s_name+'"][data-id="'+s_id+'"]').text(s_val);
							return;
						}
					});
				}
				$(this).remove();
			}).insertAfter($(this)).focus().select();
			$(this).hide();
			return false;
		});
		//切换
		$('img[data-tdtype="toggle"]', $(self)).on('click', function() {
			var img    = this,
				s_val  = ($(img).attr('data-value'))== 0 ? 1 : 0,
				s_name = $(img).attr('data-field'),
				s_id   = $(img).attr('data-id'),
				s_idfld = $(img).attr('data-idfield'),
				s_src  = $(img).attr('src');
			$.getJSON(settings.url, {id:s_id,idfield:s_idfld, field:s_name, val:s_val}, function(result){
				if(result.status == 1) {
					if(s_src.indexOf('disabled')>-1) {
						$(img).attr({'src':s_src.replace('disabled','enabled'),'data-value':s_val});
					} else {
						$(img).attr({'src':s_src.replace('enabled','disabled'),'data-value':s_val});
					}
				}
			});
			return false;
		});
		
		//切换切换2
		$('img[data-tdtype="togglex"]', $(self)).on('click', function() {
			var img    = this,
				s_val  = $(img).attr('data-value'),
				s_name = $(img).attr('data-field'),
				s_idfld = $(img).attr('data-idfield'),
				s_id   = $(img).attr('data-id'),
				s_src  = $(img).attr('src');
			$.getJSON(settings.url, {id:s_id,idfield:s_idfld,field:s_name, val:s_val}, function(result){
				if(result.status == 1) {
					if(s_src.indexOf('disabled')>-1) {
						$(img).attr({'src':s_src.replace('disabled','enabled'),'data-value':s_val});
					} else {
						$(img).attr({'src':s_src.replace('enabled','disabled'),'data-value':s_val});
					}
				}
			});
			return false;
		});
		
		
		//批量操作
		$('input[data-tdtype="batch_action"]').on('click', function() {
			var btn = this;
			if($('.J_checkitem:checked').length == 0){
                               Wind.tip_error('最少要选择一个');
				return false;
            }
			var ids = '';
			$('.J_checkitem:checked').each(function(){
				ids += $(this).val() + ',';
			});
			ids = ids.substr(0, (ids.length - 1));
			var uri = $(btn).attr('data-uri') + '&' + $(btn).attr('data-name') + '=' + ids,
				msg = $(btn).attr('data-msg'),
				acttype = $(btn).attr('data-acttype'),
				title = ($(btn).attr('data-title') != undefined) ? $(this).attr('data-title') : lang.confirm_title;
				
				if($(btn).hasClass('J_dialog')){
					showDialog(btn,ids);
					return;
				}
				
				if(msg != undefined){
				$.dialog({
					id:'confirm',
					title:title,
					width:200,
					padding:'10px 20px',
					lock:true,
					content:msg,
					okValue:'提交',
                   cancelValue:'取消',
					ok:function(){
						action();
					},
					cancel:function(){}
				});
			}else{
				action();
			}
			function action(){
				if(acttype == 'ajax_form'){
					var did = $(btn).attr('data-id'),
						dwidth = parseInt($(btn).attr('data-width')),
						dheight = parseInt($(btn).attr('data-height'));
					$.dialog({
						id:did,
						title:title,
						width:dwidth ? dwidth : 'auto',
						height:dheight ? dheight : 'auto',
						padding:'',
						lock:true,
						okValue:'提交',
                        cancelValue:'取消',
						ok:function(){
							var info_form = this.dom.content.find('#info_form');
							if(info_form[0] != undefined){
								info_form.submit();
								return false;
							}
						},
						cancel:function(){}
					});
					$.getJSON(uri, function(result){
						if(result.status == 1){
							$.dialog.get(did).content(result.data);
						}
					});
				}else if(acttype == 'ajax'){
					$.getJSON(uri, function(result){
						if(result.status == 1){
							Wind.tip({content:result.msg});
							window.location.reload();
						}else{
							Wind.tip({content:result.msg, icon:'error'});
						}
					});
				}else{
					location.href = uri;
				}
			}
		});
	};
})(jQuery);

//显示大图
;(function($){
	$.fn.preview = function(){
		var w = $(window).width();
		var h = $(window).height();		
		$(this).each(function(){
			$(this).hover(function(e){
				if(/.png$|.gif$|.jpg$|.bmp$|.jpeg$/.test($(this).attr("data-bimg"))){
					$("body").append("<div id='preview'><img src='"+$(this).attr('data-bimg')+"' width='400' /></div>");
				}
				var show_x = $(this).offset().left + $(this).width();
				var show_y = $(this).offset().top;
				var scroll_y = $(window).scrollTop();
				$("#preview").css({
					position:"absolute",
					padding:"4px",
					border:"1px solid #f3f3f3",
					backgroundColor:"#eeeeee",
					top:show_y + "px",
					left:show_x + "px",
					zIndex:1000
				});
				$("#preview > div").css({
					padding:"5px",
					backgroundColor:"white",
					border:"1px solid #cccccc"
				});
				if (show_y + 230 > h + scroll_y) {
					$("#preview").css("bottom", h - show_y - $(this).height() + "px").css("top", "auto");
				} else {
					$("#preview").css("top", show_y + "px").css("bottom", "auto");
				}
				$("#preview").fadeIn("fast")
			},function(){
				$("#preview").remove();
			})					  
		});
	};
})(jQuery);