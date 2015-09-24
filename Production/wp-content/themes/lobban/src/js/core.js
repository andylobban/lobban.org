(function( w ){
	if( w.document.documentElement.className.indexOf( "fonts-loaded" ) > -1 ){
	    return;
	}
	var font1 = new w.FontFaceObserver( "teimposheadlineblack", {
	    weight: 400
	});
	var font2 = new w.FontFaceObserver( "karlaregular", {
	    weight: 400
	});
	var font3 = new w.FontFaceObserver( "karlabold", {
	    weight: 400
	});
	var font4 = new w.FontFaceObserver( "karlaitalic", {
	    weight: 400
	});
	w.Promise
	    .all([font1.check(null, 10000), font2.check(null, 10000), font3.check(null, 10000), font4.check(null, 10000)])
	    .then(function(){
	        w.document.documentElement.className += " fonts-loaded";
	    });
	}( this ));