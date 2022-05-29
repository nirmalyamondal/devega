	$(document).ready(function() {
			
		//$(function(){ $( "#accordion" ).accordion(); });  
		$(window).bind("scroll",function(){
			if($(this).scrollTop()>300){			
				$(".navbar-fixed-top").addClass('show-nav');
			} else {
				$(".navbar-fixed-top").removeClass('show-nav');
			}
		});  
		$(".navbar-default-fixed").bind('mouseover', function () {
	        $(".navbar-header-fixed .header_slogan_span").show();  
	        $(".small_slogan").hide();
	    }); 
	    $(".navbar-default-fixed").bind('mouseout', function () {
	        $(".navbar-header-fixed .header_slogan_span").hide();  
	        $(".small_slogan").show();
	    });
		$('ul.multicolumnContainer').each(function(){
			if($(this).children().length > 3){ $('.ce-media img').css('minHeight','150px'); }
		});  
	  	$("a.template-kontakt-help-anchor-open").bind('click', function () {
	        $("#myModal").show();  
	    });
	    $(".closeBtn").bind('click', function () {
	        $("#myModal").hide();  
	    });
	});
