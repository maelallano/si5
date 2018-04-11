import '../scss/common.scss';
var $ = require('jquery');

/* ----------- start function scrollTo jquery ---------*/

let scrollTo = (button, target, speed) => {
	$(button).click(function (){
		let goTo = $(target).offset().top - 100;
        $('html, body').animate({
            scrollTop: goTo
        }, speed);
    });
}

$(document).ready(function (){
    // scrollTo("#click1", "#div1", 2000);
    // scrollTo("#click2", "#div2", 1000);
    scrollTo(".header-navBarList-item1", ".portalGunSection", 1000);
    scrollTo("#Layer_1", "#div1", 1000);
		scrollTo(".header-navBarList-item2", ".Escape-section", 1000);
		scrollTo(".header-navBarList-item3", ".Escape-section__registration__title", 1000);

});

/* ----------- end function scrollTo jquery ---------*/

/*let gameInstance = UnityLoader.instantiate("gameContainer", "Unity/build_web.json", { onProgress: UnityProgress });*/

/**
 * Loader overlay
 *
 * @type {Element | null}
 */
/*let loaderContainer = document.querySelector('#loader');

setTimeout(() => {
    loaderContainer.classList.add('fade-out');
    setTimeout(() => {
	   loaderContainer.style.display = 'none';
    }, 1000);
}, 3000);*/
