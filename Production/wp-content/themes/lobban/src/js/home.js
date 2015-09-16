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
	document.querySelector('.logo a').setAttribute("data-36p", "font-size: 1em; letter-spacing: 0px; padding-bottom: 0.25em; padding-top: 0.8em;");
}
if(viewportWidth >= 960){
	document.querySelector('.logo').setAttribute("data-0", "margin-top: -128px; padding-left: 2em; position: fixed; top: 50vh;");
	document.querySelector('.logo').setAttribute("data-36p", "margin-top: 0px; padding-left: 0em; position: fixed; top: 0vh;");
	document.querySelector('.logo a').setAttribute("data-0", "font-size: 5.5em; letter-spacing: -1px; padding-bottom: 0.3em; padding-top: 0em;");
	document.querySelector('.logo a').setAttribute("data-36p", "font-size: 1.2em; letter-spacing: 0px; padding-bottom: 0.25em; padding-top: 0.9em;");
}
if(viewportWidth >= 1280){
	document.querySelector('.logo').setAttribute("data-0", "margin-top: -164px; padding-left: 2em; position: fixed; top: 50vh;");
	document.querySelector('.logo').setAttribute("data-36p", "margin-top: 0px; padding-left: 0em; position: fixed; top: 0vh;");
	document.querySelector('.logo a').setAttribute("data-0", "font-size: 7em; letter-spacing: -1px; padding-bottom: 0.3em; padding-top: 0em;");
	document.querySelector('.logo a').setAttribute("data-36p", "font-size: 1.15em; letter-spacing: 0px; padding-bottom: 0.25em; padding-top: 0.9em;");
}