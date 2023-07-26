// JavaScript Document
$(document).ready(function(e) {
	var mark=$('.mark');
	var kg=/^\s*$/;	
	var win_w=$(window).width();
	var win_h=$(window).height();
		
	(function(){
		var up_f=$('.c_4');
		
		var up_3=$('#up_3');
		var up3_w=up_3.outerWidth(true);
		var up3_t=win_h/2-100;
		var up3_l=(win_w-up3_w)/2;
	    	up_3.css({top:up3_t,left:up3_l});// 弹窗提示--位置
		
		var colse=up_3.find('span');
		var f_name='';
		
		up_t(up_f.eq(0),up_3,colse,mark); //普通文档
		up_t(up_f.eq(1),up_3,colse,mark); //有声文件
		
	     var up_form=$('form.up_file2');//上传普通文档 /有声文档/创建专辑
         up_file(up_form.eq(0),kg);
		 up_file(up_form.eq(1),kg);

	})();//-------------------------上传文件处理

//-------------------------------------------------------------  
   (function(){
		var i=0;
		var upadd_zj=$('.up_add_zj');
		$('.sele').click(function(e)
		{
			if(i%2!=0)
			{ 
				$('.zj_list').slideDown('slow');
				$(this).css({'margin-top':'11px'})
				$(this).addClass('sele2');
					++i;
			}
			else
			{
			   zjlist_up();
			}
			 bubble(e);
		});
        $(window).click(function()
		 {
		  zjlist_up();
		 });
		
		function zjlist_up()
		{
			if(!$('.zj_list').is(':hidden'))
		   {
			$('.zj_list').slideUp('slow');
			$('.sele').css({'margin-top':'3px'})
			$('.sele').removeClass('sele2');
			}
			--i;
		}//收起list
		var len=$('.zj_list li').length-1;
		for(var j=0;j<len;j++)
		{
			$('.zj_list li').eq(j).click(function()
			{
				  $('#zj_name').text($(this).text());
				  upadd_zj.val($(this).text());
			});
		}
		
	})();//添加专辑列表
	
	(function()
	{
		fm($('#word_file'));
		fm($('#soud_file'));
		fm($('#zj_file'));

	})();//-----------------------------设置封面
   
   (function()
   {
	 var tag=$('.up_tag');
	 tagfn(kg,tag.eq(0));
     tagfn(kg,tag.eq(1));
	 tagfn(kg,tag.eq(2));
   })();//--------------设置标签
   
   (function(){
	 		
		var zj_but=$('.zj .zj_c');
		var zj_create=$('.zj_create');
		var zj_w=zj_create.outerWidth();
		var l=(win_w-zj_w)/2;
		var body_h=$(document).width();
		var zj_colse=zj_create.find('h3 .right');
				
		var zj_load=$('.mark .zj_load');
		var zj_load_h=zj_load.outerHeight();
		var zj_load_w=zj_load.outerWidth();
		var zj_load_t=(win_h-zj_load_h)/2-100;
		var zj_load_l=(win_w-zj_load_w)/2;
	   
	   var zj_success=mark.find('.mark_bor');
	   var zj_s_w=zj_success.outerWidth();
	   var zj_s_l=(win_w-zj_s_w)/2;
	   var zj_s_t=win_h/2-100;
	   var win_t=0;
       var t1=null,t2=null;
	   
	   $('#zj_c').click(function()
		{
			  zj_c();
		});//---------------------我的专辑创建
		
		 zj_create.css('left',l);
		 zj_but.each(function(i)
		  {
			$(this).click(function()
			{
	              zj_c()
			});
        });//---------------------------展开创建专辑
       function zj_c()
	   {
		   zj_success.css({'display':'none'});
			win_t=$(window).scrollTop();
			zj_create.css({'display':'block','top':win_t});	
            mark.css({'display':'block','opacity':1,'height':body_h});
		}//------------------------------创建专辑
	   
		zj_colse.click(function()
		{
			if(t1)
			{
			clearTimeout(t1);	
			}
			if(t2)
			clearTimeout(t2);	
			mark.animate({opacity:0},'slow','linear',function()
			 {
				 mark.css({'display':'none','height':100+'%'});
				 zj_create.css({'display':'none'});	
				 zj_success.css({'display':'none'});
				 zj_load.css({'display':'none'});
			 })
		});//----------------------------关闭专辑
      
	   var zj=$('.zj .zj_list');
	   var new_zj='';
	   
	   var zj_n=zj_create.find('.zj_name');
	   var name=/^\s*[\w\.\u4e00-\u9fa5]{2,20}\s*$/;
	       self_re(zj_n,name);
		   
	   var area=/^\s*[\S\s]{10,200}\s*$/;   
	   var zj_area=zj_create.find('.area'); 
	       self_re(zj_area,area);
	    
	   var zj_type=zj_create.find('select');
	
	  zj_create.find('.submit').click(function(){
	
		 //正则验证提交的数据
		    if(!name.test(zj_n.val()))
			{
				zj_n.siblings('i').css('color','red');
				return false;
			}
			if(zj_type.val()=='0')
			{
				zj_type.siblings('i').removeClass('none').css('color','red');
				return false;
			}
		    if(!area.test(zj_area.val()))
			{
				zj_area.siblings('i').css('color','red');
				return false;
			}
			
			/*
			ajax开始请求-------------专辑名称是否重复
			加载Load
			*/
			//win_t=$(window).scrollTop();
			//zj_load.css({'display':'block','left':zj_load_l,'top':zj_load_t+win_t});
			
			/*
			 ajax 请求后返回数据
			 添加专辑成功
		
				win_t=$(window).scrollTop();
				zj_create.animate({opacity:0},'slow','linear',function()
				{
				 zj_load.css({'display':'none'});
				 zj_create.css({'display':'none'});	
				 zj_success.find('p').text('创建专辑成功');
				 zj_success.css({'opacity':1,'display':'block','left':zj_s_l,'top':zj_s_t+win_t});
				 
				 t2=setTimeout(function()
				 {
					 mark.animate({opacity:0},'slow','linear',function()
						 {
						   mark.css({'display':'none','height':100+'%'});
						 });
				 },500);
				 
				// 专辑名称
				 new_zj='<li>'+zj_n+'</li>';
				 zj.prepend(new_zj);
				});
			*/
			
			
			/*
			 ajax 添加专辑失败
			 
				 win_t=$(window).scrollTop();
				 zj_load.css({'display':'none'});
				 zj_success.find('p').text('创建专辑失败');
				 zj_success.css({'opacity':1,'display':'block','left':zj_s_l,'top':zj_s_t+win_t});
				 t1=setTimeout(function(){
				  zj_success.animate({opacity:0},'slow','linear',function(){
					   $(this).css('display','none');
					  }) 
				  },2000);
			        
			*/
		});//-----------------------------------------添加专辑数据,按钮提交数据
  })();//----------------------创建专辑
  
   (function(){
	   	var name=/^\s*[\w\.\@\u4e00-\u9fa5]{2,20}\s*$/;
		var email=/^\s*([a-zA-Z0-9][\w\.]{2,15})+@([a-zA-Z0-9]{2,5})+\.([a-zA-Z0-9]{2,5})\s*$/;
		var pwd=/^\s*[\w]{6,9}\s*$/;
	    self_re($('.text_1'),name);//验证用户名
		self_re($('.text_2'),email);//邮箱
		self_re($('.text_3').eq(0),pwd); //密码
		self_re($('.text_3').eq(1),pwd); //密码
		self_re($('.text_3').eq(2),pwd); //密码
		self_equal($('.text_3').eq(2),$('.text_3').eq(1))

		$('.submit').eq(0).click(function()
		{
			if(kg.test($('.text').val()))
			{
				$('.text').siblings('i').removeClass('none');
				$('.text').siblings('i').css({'color':'red'});
				return false;
			}
		});//----------------------上传头像
		
		$('.submit').eq(1).click(function()
		{
			if(!name.test($('.text_1').val()))
			{
				$('.text_1').siblings('i').css({'color':'red'});
				return false;
			}
		})//-------------------------------修改用户名
		$('.submit').eq(2).click(function()
		{
			if(!email.test($('.text_2').val()))
			{
				$('.text_2').siblings('i').css({'color':'red'});
				return false;
			}
		})//-------------------------------修改邮箱
		$('.submit').eq(3).click(function()
		{
			if(!pwd.test($('.text_3').eq(0).val()))
			{
				$('.text_3').eq(0).siblings('i').css({'color':'red'});
				return false;
			}
			if(!pwd.test($('.text_3').eq(1).val()))
			{
				$('.text_3').eq(1).siblings('i').css({'color':'red'});
				return false;
			}
			if(!pwd.test($('.text_3').eq(2).val()))
			{
				$('.text_3').eq(2).siblings('i').css({'color':'red'});
				return false;
			}
			if($('.text_3').eq(2).val()!==$('.text_3').eq(1).val())
			{
				$('.text_3').eq(2).siblings('i').css({'color':'red'});
				return false;
			}
		})//-------------------------------修改密码	
	
	})();//-------------------------------------------------个人资料修改
	
});

window.onload=function(){
	
	function r_h(){
		var box=document.getElementsByClassName('box_1')[0];
		var Left_list=getClass(box,'div','z_left')[0];
		var z_h=Left_list.offsetHeight-40; //-----------------------右边区域高度

		var R_c=getClass(box,'div','center_r')[0];
		var div=R_c.children;
		var len=div.length;
   
		for(var i=0;i<len;i++)
		{
			if(div[i].style.display=='block')
			{
				if(div[i].offsetHeight<z_h)
				{
				  css(div[i],'height',z_h);
				}
			}
		}
	};
	r_h();  //设置右边高度---------------------只对可见元素起作用
	
	(function(){
	 var por_img=getClass(document,'p','por_modify');

	 var por=getClass(document,'div','c_1')[0];
	 var tab=por.getElementsByClassName('tab');
	 var menu=getClass(por,'p','ul')[0];
	 var menu=menu.getElementsByTagName('a');
	 
	 porfn(por,tab,por_img[0],menu);
	 porfn(por,tab,por_img[1],menu);

	 var u_name=getClass(tab[0],'img','u_name')[0];
	 var u_email=getClass(tab[0],'img','u_email')[0];
	 var len=tab.length;
	 u_name.onclick=function()
	 {
		 for(var i=0;i<len;i++)
		 {
			tab[i].style.display='none';
			removeClass(menu[i],'active');
		 }
		tab[2].style.display='block';
		addClass(menu[2],'active');
	  }//---------------------------------------修改用户名
	 u_email.onclick=function()
	 {
		 for(var i=0;i<len;i++)
		 {
			tab[i].style.display='none'
			removeClass(menu[i],'active');
			console.log(i);
		 }
		tab[3].style.display='block';
		addClass(menu[3],'active');
	  }//---------------------------------------修改邮箱
	  var por_siblings=null;
	  var z_menu=getClass(document,'ul','list_1')[0];
	  var z_menu=z_menu.children;
	
	 por_img[0].onclick=function()
	 {
		if(por.style.display!='block')
		{
			por.style.display='block';
			addClass(z_menu[0],'active');
			
			por_siblings=por.parentNode.children;
			
			for(i=1;i<por_siblings.length-1;i++)
			{
				por_siblings[i].style.display='none';
				removeClass(z_menu[i],'active');
			}
		  //--------------左边大的区域

			for(var i=0;i<len;i++)
			{
			  tab[i].style.display='none'
			  removeClass(menu[i],'active');
			}
            			
			tab[1].style.display='block';
			addClass(menu[1],'active');//---------------------------修改头像 
			
		}
	 }//-------------------左边修改头像
	
	})();//--------------------------------个人资料修改
	
	(function(){
		var zi_ul=document.getElementsByClassName('ul')[0];
		var zi_li=zi_ul.getElementsByTagName('a');
		var zi_tab=getClass(document,'*','tab');
		var zi_len=zi_li.length;
        tab(zi_li,zi_tab,zi_len);
    })();//----------------个人资料修改切换
	
	(function(){
	  var up_text=document.getElementsByClassName('up_text2')[0];
	  	  up_text.value='';	
		  
	  var up_input=document.getElementsByClassName('up_text')[0];
       
	   up_text.onmouseover=function()
	   {
		 up_input.style.backgroundPosition='0px -188px';  
	   }
	   up_text.onmouseout=function()
	   {
		 up_input.style.backgroundPosition='0px -96px';  
		}//--------------上传按钮

	})();//文件上传按钮
	
	(function(){
	   var con_qu=document.getElementsByClassName('center_r')[0];
	   var con_c=con_qu.children;
       var menu=getClass(document,'ul','list_1')[0];
	   var menu=menu.getElementsByTagName('li');
	   var len=menu.length;
	   tab(menu,con_c,len);
	})();//-----------------------左边按钮控制右边显示
} 


function tagfn(kg,tag)
{
   var txt='';
   var tag_num=5;
   var h_text=tag.find('.up_txt2'); //隐藏域标签
   var up_txt=tag.find('.up_txt'); //自定义标签
   
   var old_tag=tag.find('.old_tag'); // 网站定义标签
   var del_tag=tag.find('.del_tag'); //用户选择定义的标签
   var tag_ti=tag.find('.nored');

   var del='<span class="icon fm_colse"></span>'; //删除选择的标签
   
   var h_tag=h_text.val();
   var up_txtv='';
   var tag_len=tag.find('.tag_len i');  //自定义标签长度
   var h_len='';
   var len=0;
   old_tag.find('samp').each(function(i)
   {
	  $(this).click(function()
	  {
		  up_txtv=up_txt.val();
		  txt=$(this).text();
		  h_len=h_tag.split(',');
		  h_len=h_len.length;
		  //------------------选定标签
    
	   if(!kg.test(up_txtv))
	   {
		len=up_txtv.split(',');
		len=len.length;
		h_len=h_len+len;
	   } //输入标签个数
	   
	   if(h_len<=tag_num)
		{
		  if(h_tag.indexOf(txt)==-1 && up_txtv.indexOf(txt)==-1)
		  {
			   h_tag+=txt+',';
			   h_text.val(h_tag);
			   tag_ti.eq(1).removeClass('none');
			   del_tag.append('<samp>'+txt+del+'</samp>');
			 
		  }
		  else if(h_tag.indexOf(txt)!=-1)
		   {
			  tag_ti.eq(1).css('color','red');
		   }
		  else if( up_txtv.indexOf(txt)!=-1)
		   {
			   tag_ti.eq(0).css('color','red');
		   }
		 }
		 else
		 {
			  tag_len.css('color','red'); 
		 }//------------------------验证标签长度
	  });    
   });//--添加标签

   del_tag.mouseover(function(e)
   {
	   var e=e ||event;
	   var target=e.target || e.srcElement; 
	   if(target.nodeName.toLowerCase()=='span')
	   {
		  del_tag.find('samp').each(function(i)
		  {
			  var t=$(this);
			
			  t.find('span').click(function()
			  {
				 var txt2=t.text();
				 if(h_tag.indexOf(txt2)!=-1)
				 { 
					h_tag=h_tag.replace(txt2+',',''); 
					t.remove();
				  }
			 });
		  });
	   }
  });//删除标签

  var len2=0;
  var up_txtv2='';
  var h_len2=0;
  var hash={};
  up_txt.blur(function()
 {
	if(!kg.test(h_tag))
	{
		 h_len2=h_tag.split(',');
		 h_len2=h_len2.length;
	}
	else
	{ 
	   h_len=0; 
	}
	up_txtv2=$(this).val();
	
	if(!kg.test(up_txtv2))
	{
		up_txtv2=up_txtv2.split(',');
	
		len2=up_txtv2.length;

		if(len2+h_len<=tag_num)
		{
			for(var i=0;i<len2;i++)
			{
				var num=getLength(up_txtv2[i]);
				if(num>6)
				{
				  tag_len.css('color','red');
				}//-----------------标签长度
				 if(h_tag.indexOf(up_txtv2[i])!=-1)
				 {
				   tag_ti.eq(0).css('color','red');
				}//-----------------与定义标签比较是否重复
			}
			
			for(var j in up_txtv2) 
			{
				if(hash[up_txtv2[j]])
				{
					tag_ti.eq(0).css('color','red');
				}
				hash[up_txtv2[j]] = true;
			 }//---------------------------自定义的标签是否重复
		}
		else
		{
		  tag_len.css('color','red'); 
		}//------------------------验证标签长度
	}
  });//自定义标签是否合法
  
   up_txt.focus(function()
   {
	   tag_ti.eq(0).removeAttr('style');
	   tag_len.removeAttr('style');
	});
}//---------------选定标签函数
 
function up_t(up_f,con,colse,mark)   // ---------------------上传文件
{
	
	var up_text=up_f.find('.up_text2');//上传按钮
	var up_tit=up_f.find('.up_tit');//上传文件名称

	var up_input=up_tit.find('.input'); //------------上传文件临时文件名
	var up_2=up_tit.find('.up_2');
	var tishi=up_tit.find('.right');
	var del=up_tit.find('.del');
	var file_temp=up_f.find('.up_temp');//-------------上传的文件名
	var form=up_f.find('.up_file');
	var load_img=$('.center_r .up_load');

	var tage=up_tit.find('.f_s_12');//百分比
	var bg=up_tit.find('.bg b');//文件大小
	var status=up_tit.find('.icon').eq(0);

	
	up_text.change(function()
	{
		 bg.width(0);
		 status.attr('class','icon up');
		 tage.text('');  //设为初始值
		 
		up_input.text(up_text.val()); 
		up_input.css('display','block');
		tishi.css('display','block');
		up_2.slideDown('slow','linear');//开始上传0-----------------显示进度条
	
		/*
		ajax -->
		//beforeSend //局部事件  ---文件上传百分比  文件大小
		 php : 把时间戳存下来---》新的上传文件名
		 file_temp.val(返回时间戳+上传文件名);
		*/
	   //  file_temp.val('dfdsfdsfds地方是否');
	  
	  	$.ajax({
		url: 'up_file.php',
		type: 'POST',
		cache: false,
		data:new FormData(up_f.find('.up_file')[0]), //收集表单信息
		processData: false,
		contentType: false,
		beforeSend: function()
		{
		 load_img.css('display','block');
		},
     	xhr: function()
		{
			var xhr = $.ajaxSettings.xhr();
			if(onprogress && xhr.upload)
			 {
			 xhr.upload.addEventListener("progress" , onprogress, false); //完成后没法移除事件
			 return xhr;
			}
		},
		success:function(data)
		{
			//data---->新的文件名称
			file_temp.val(data)
		    load_img.css('display','none');
			tage.text('文件合格');
			status.removeClass('up').addClass('ok'); //上传文件合格
		},
	    error:function(xhr){
		   load_img.css('display','none');
		  alert(xhr.status+': '+xhr.statusText);	
		},
		
     })
  });//------------------------文件收藏
	   function onprogress(evt)
	   {
		  var loaded = evt.loaded;     //已经上传大小情况 
		  var tot = evt.total;      //附件总大小 
		  var per = Math.floor(100*(loaded/tot));  
		   tage.text(per+'%');
		   bg.width(per+'%');
		  var load_up=(loaded/1024).toFixed(2)+'KB';
		  var tot_up=(tot/1024).toFixed(2)+'KB';
		   bg.text(load_up+'/'+tot_up);
      }//-----------------------------文件上传进度条
	
	del.click(function(ev)
	{
	  var scr_t=$(window).scrollTop();
	  con.css('display','block');
	  mark.css({'top':scr_t,'display':'block','opacity':1});
	  $.wheel();
	});//删除上传

	colse.eq(1).click(function(){
		mark.animate({opacity:0},'slow','linear',function()
		{
			$(this).css('display','none');
			 con.css('display','none');
			$.dewheel();
		})
		
	 });//------------------------------取消删除
	colse.eq(0).click(function(){
		mark.animate({opacity:0},'slow','linear',function()
		{
			$(this).css('display','none');
			$.dewheel();
			tishi.css('display','none');
			up_input.css('display','none');
			up_input.empty();
			if(!up_2.is(':hidden'))
			{
				up_2.slideUp('slow'); //-----上传进度条
			}
			 con.css('display','none');
		})
		/*
		ajax 删除正在上传的文件或者已经上传的文件
		php: 判断文件名是否为空，然后删除
		 file_temp.val('');
		*/
	});//-------------------确定删除
	
}//---------------------------------上传文件函数 
 
function porfn(por,tab,obj,menu)
 {
	var len=tab.length;
	var por_mod=obj.getElementsByTagName('a')[0];
	obj.onmouseenter=function()
	{
	 run(por_mod,{height:24},'linear');
	}
	obj.onmouseleave=function()
	{
	 run(por_mod,{height:0},'linear');
	}
	por_mod.onclick=function()
	{
	 if(por.style.display=='block')
	 {
		for(var i=0;i<len;i++)
		{
			tab[i].style.display='none'
			removeClass(menu[i],'active');
		}
		tab[1].style.display='block';
		addClass(menu[1],'active');
	 }
	}	
}//--------------------------------------//修改头像 
 
function up_file(form,kg)
{
	   var up_temp=form.find('span.input');
	   var name=/^\s*[\w\.\u4e00-\u9fa5]{2,20}\s*$/;
	   var area=/^\s*[\S\s]{10,200}\s*$/;
		
	   var up_in_tit=form.find('.up_input_tit');//文档名称；
	       self_re(up_in_tit,name);
		   
	   var up_area=form.find('.up_area');//文档描述
	       noReqiured(up_area,area);
	  
	   var up_tag=form.find('.up_txt');
	   var up_tag2=form.find('.up_txt2');
	   var tag='';  
	   var t_len=0;
	   var tag_num=5;
	   var tag_len=form.find('.tag_len');
       var hash={}
	   
       form.find('.submit').click(function()
	   {
		  f_name=form.find('.up_temp').val()
		  if(kg.test(f_name))
		  {
			 alert('您没有文件上传');
			 return false; 
		  }
		  if(!name.test(up_in_tit.val()))
		  {
			up_in_tit.siblings('i').css('color','red');
			return false;
		  }//-----------------------------上传文件名称
		
		  if(!kg.test(up_area.val()))
		  {
			   if(!area.test(up_area.val()))
			  {
				up_area.siblings('i').css('color','red');
				return false;
			  } 
		  }//----------------------------如果有描述
		  tag=up_tag2.val()+up_tag.val();
		  if(!kg.test(tag))
		  {
			  tag2=tag.split(',');
			  t_len=tag2.length;
	
			  if(t_len>tag_num)
			  {
				  tag_len.css('color','red');
				  return false;
			  }
			  for(var i in tag2) 
			  {
				if(!kg.test(tag2[i]) && hash[tag2[i]])
				{
				 alert(tag2[i]+': 标签重复');
				 return false;
				}
				/*console.log(hash[tag2[i]]);//undefinde
				console.log(hash);*/
				hash[tag2[i]] = true;
			 }
		  }//----------------------------如果存在标签
		  
		  	   
		   /*
		   
		   ajax提交
		   
		   */
	   });

}//----------------------------------------上传文件表单提交
