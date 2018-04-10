import '../scss/common.scss';

var gameInstance = UnityLoader.instantiate("gameContainer", "Unity/build_web.json", { onProgress: UnityProgress });

var loaderContainer = document.querySelector('#loaderContainer');

setTimeout(() => {
	loaderContainer.style.display = 'none';
}, 3000);