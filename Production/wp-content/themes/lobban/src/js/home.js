var viewportWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
if(viewportWidth >= 320){
	document.querySelector('.logo').setAttribute("data-0", "margin-top: 0px; padding-left: 0em; position: fixed; top: 20vh;");
	document.querySelector('.logo').setAttribute("data-36p", "margin-top: 0px; padding-left: 0em; position: fixed; top: 0vh;");
	document.querySelector('.logo a').setAttribute("data-0", "font-size: 2em; letter-spacing: -1px; padding-bottom: 0.3em; padding-top: 0em;");
	document.querySelector('.logo a').setAttribute("data-36p", "font-size: 1em; letter-spacing: 0px; padding-bottom: 0.25em; padding-top: 0.45em;");
}
if(viewportWidth >= 640){
	document.querySelector('.logo').setAttribute("data-0", "margin-top: -107px; padding-left: 1em; position: fixed; top: 50vh;");
	document.querySelector('.logo').setAttribute("data-36p", "margin-top: 0px; padding-left: 0em; position: fixed; top: 0vh;");
	document.querySelector('.logo a').setAttribute("data-0", "font-size: 3.5em; letter-spacing: -1px; padding-bottom: 0.3em; padding-top: 0em;");
	document.querySelector('.logo a').setAttribute("data-36p", "font-size: 1em; letter-spacing: 0px; padding-bottom: 0.25em; padding-top: 0.75em;");
}
if(viewportWidth >= 960){
	document.querySelector('.logo').setAttribute("data-0", "margin-top: -128px; padding-left: 2em; position: fixed; top: 50vh;");
	document.querySelector('.logo').setAttribute("data-36p", "margin-top: 0px; padding-left: 0em; position: fixed; top: 0vh;");
	document.querySelector('.logo a').setAttribute("data-0", "font-size: 5.5em; letter-spacing: -1px; padding-bottom: 0.3em; padding-top: 0em;");
	document.querySelector('.logo a').setAttribute("data-36p", "font-size: 1.2em; letter-spacing: 0px; padding-bottom: 0.25em; padding-top: 0.85em;");
}
if(viewportWidth >= 1280){
	document.querySelector('.logo').setAttribute("data-0", "margin-top: -164px; padding-left: 2em; position: fixed; top: 50vh;");
	document.querySelector('.logo').setAttribute("data-36p", "margin-top: 0px; padding-left: 0em; position: fixed; top: 0vh;");
	document.querySelector('.logo a').setAttribute("data-0", "font-size: 7em; letter-spacing: -1px; padding-bottom: 0.3em; padding-top: 0em;");
	document.querySelector('.logo a').setAttribute("data-36p", "font-size: 1.15em; letter-spacing: 0px; padding-bottom: 0.25em; padding-top: 0.9em;");
}

(function() {
    'use strict';
    // Feature Test
    if ( 'querySelector' in document && 'addEventListener' in window && Array.prototype.forEach ) {
        // Function to animate the scroll
        var smoothScroll = function (anchor, duration) {
            // Calculate how far and how fast to scroll
            var startLocation = window.pageYOffset;
            var endLocation = anchor.offsetTop;
            var distance = endLocation - startLocation;
            var increments = distance/(duration/16);
            var stopAnimation;
            // Scroll the page by an increment, and check if it's time to stop
            var animateScroll = function () {
                window.scrollBy(0, increments);
                stopAnimation();
            };
            // If scrolling down
            if ( increments >= 0 ) {
                // Stop animation when you reach the anchor OR the bottom of the page
                stopAnimation = function () {
                    var travelled = window.pageYOffset;
                    if ( (travelled >= (endLocation - increments)) || ((window.innerHeight + travelled) >= document.body.offsetHeight) ) {
                        clearInterval(runAnimation);
                    }
                };
            }
            // If scrolling up
            else {
                // Stop animation when you reach the anchor OR the top of the page
                stopAnimation = function () {
                    var travelled = window.pageYOffset;
                    if ( travelled <= (endLocation || 0) ) {
                        clearInterval(runAnimation);
                    }
                };
            }
            // Loop the animation function
            var runAnimation = setInterval(animateScroll, 16);
        };
        // Define smooth scroll links
        var scrollToggle = document.querySelectorAll('.scroll');
        // For each smooth scroll link
        [].forEach.call(scrollToggle, function (toggle) {
            // When the smooth scroll link is clicked
            toggle.addEventListener('click', function(e) {
                // Prevent the default link behavior
                e.preventDefault();
                // Get anchor link and calculate distance from the top
                var dataID = toggle.getAttribute('href');
                var dataTarget = document.querySelector(dataID);
                var dataSpeed = toggle.getAttribute('data-speed');
                // If the anchor exists
                if (dataTarget) {
                    // Scroll to the anchor
                    smoothScroll(dataTarget, dataSpeed || 500);
                }
            }, false);
        });
    }
})();