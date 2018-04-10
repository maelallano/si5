import '../scss/common.scss';
var $ = require('jquery');

let gameInstance = UnityLoader.instantiate("gameContainer", "Unity/build_web.json", { onProgress: UnityProgress });

/**
 * Loader overlay
 *
 * @type {Element | null}
 */
let loaderContainer = document.querySelector('#loader');

setTimeout(() => {
	loaderContainer.classList.add('fade-out');
}, 3000);