import '../scss/common.scss';
var $ = require('jquery');

/* ----------- start function scrollTo jquery ---------*/

// let scrollTo = (button, target, speed) => {
// 	$(button).click(function (){
//         $('html, body').animate({
//             scrollTop: $(target).offset().top
//         }, speed);
//     });
// }

// $(document).ready(function (){
//     scrollTo("#click1", "#div1", 2000);
//     scrollTo("#click2", "#div2", 1000);
// });

/* ----------- end function scrollTo jquery ---------*/

let gameInstance = UnityLoader.instantiate("gameContainer", "Unity/build_web.json", { onProgress: UnityProgress });

/**
 * Loader overlay
 *
 * @type {Element | null}
 */
let loaderContainer = document.querySelector('#loader');

setTimeout(() => {
	loaderContainer.style.display = 'none';
	loaderContainer.classList.add('fade-out');
}, 3000);