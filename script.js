var ajax_arry=[];
 var ajax_index =0;
 var sctp = 100;
 $(function(){
   $('#loading').show();
   var filter=document.getElementById("tag").innerHTML;
 $.ajax({
	     url:"scroll.php",
                  type:"POST",
                  data:"actionfunction=showData&page=1&tag="+filter,
        cache: false,
        success: function(response){
		   $('#loading').hide();
		  $('#demoajax').html(response);
		}
	   });
	$(window).scroll(function(){
	   var height = $('#demoajax').height();
	   var scroll_top = $(this).scrollTop();
	   if(ajax_arry.length>0){
	   $('#loading').hide();
	   for(var i=0;i<ajax_arry.length;i++){
	     ajax_arry[i].abort();
	   }
	}
	   var page = $('#demoajax').find('.nextpage').val();
	   var isload = $('#demoajax').find('.isload').val();

     var filter=document.getElementById("tag").innerHTML;

	     if ((($(window).scrollTop()+document.body.clientHeight)==$(window).height()) && isload=='true'){
		   $('#loading').show();
	   var ajaxreq = $.ajax({
	     url:"scroll.php",
                  type:"POST",
                  data:"actionfunction=showData&tag="+filter+"&page="+page,
        cache: false,
        success: function(response){
		   $('#demoajax').find('.nextpage').remove();
		   $('#demoajax').find('.isload').remove();
		   $('#loading').hide();

		  $('#demoajax').append(response);
		}
	   });
	   ajax_arry[ajax_index++]= ajaxreq;

	   }
	return false;
 if($(window).scrollTop() == $(window).height()) {
       alert("bottom!");
   }
	});

});
