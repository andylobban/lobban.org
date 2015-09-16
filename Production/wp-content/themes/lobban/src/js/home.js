if($(window).width() >= 640){
	var logoAnimate = function(){
	    $('.logo').each(function(){
	        var newTop0 = $(this).attr('data-0').replace('top: 20vh','top: 50vh');
	        $(this).attr('data-0', newTop0);
	        var newMarginTop0 = $(this).attr('data-0').replace('margin-top: 0px','margin-top: -107px');
	        $(this).attr('data-0', newMarginTop0);
	        var newLeft0 = $(this).attr('data-0').replace('padding-left: 0em;','padding-left: 1em;');
	        $(this).attr('data-0', newLeft0);
	    });
	    $('.logo a').each(function(){
	        var newFontSize0 = $(this).attr('data-0').replace('font-size: 2em','font-size: 3.5em');
	        $(this).attr('data-0', newFontSize0);
	        var newPaddingTop40 = $(this).attr('data-36p').replace('padding-top: 0.45em',' padding-top: 0.8em');
	        $(this).attr('data-36p', newPaddingTop40);
	    });
	}
}
if($(window).width() >= 960){
	var logoAnimate = function(){
	    $('.logo').each(function(){
	        var newTop0 = $(this).attr('data-0').replace('top: 20vh','top: 50vh');
	        $(this).attr('data-0', newTop0);
	        var newMarginTop0 = $(this).attr('data-0').replace('margin-top: 0px','margin-top: -128px');
	        $(this).attr('data-0', newMarginTop0);
	        var newLeft0 = $(this).attr('data-0').replace('padding-left: 0em;','padding-left: 2em;');
	        $(this).attr('data-0', newLeft0);
	    });
	    $('.logo a').each(function(){
	        var newFontSize0 = $(this).attr('data-0').replace('font-size: 2em','font-size: 5.5em');
	        $(this).attr('data-0', newFontSize0);
	        var newPaddingTop40 = $(this).attr('data-36p').replace('padding-top: 0.45em',' padding-top: 0.9em');
	        $(this).attr('data-36p', newPaddingTop40);
	        var newFontSize30 = $(this).attr('data-36p').replace('font-size: 1em','font-size: 1.2em');
	        $(this).attr('data-36p', newFontSize30);
	    });
	}
}
if($(window).width() >= 1280){
	var logoAnimate = function(){
	    $('.logo').each(function(){
	        var newTop0 = $(this).attr('data-0').replace('top: 20vh','top: 50vh');
	        $(this).attr('data-0', newTop0);
	        var newMarginTop0 = $(this).attr('data-0').replace('margin-top: 0px','margin-top: -164px');
	        $(this).attr('data-0', newMarginTop0);
	        var newLeft0 = $(this).attr('data-0').replace('padding-left: 0em;','padding-left: 2em;');
	        $(this).attr('data-0', newLeft0);
	    });
	    $('.logo a').each(function(){
	        var newFontSize0 = $(this).attr('data-0').replace('font-size: 2em','font-size: 7em');
	        $(this).attr('data-0', newFontSize0);
	        var newPaddingTop40 = $(this).attr('data-36p').replace('padding-top: 0.45em',' padding-top: 0.9em');
	        $(this).attr('data-36p', newPaddingTop40);
	        var newFontSize30 = $(this).attr('data-36p').replace('font-size: 1em','font-size: 1.15em');
	        $(this).attr('data-36p', newFontSize30);
	    });
	}
}
logoAnimate();