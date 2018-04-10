<?php
    require __DIR__ . '/../app/config.php';

    require DIR_VIEWS . '/main/header.inc.php';
?>

<div class="loader-modal" id="loader">
    <div class="loadersWrapper">
        <div class="loader">
            <img src="/images/aperture-icon.png" class="loader-icon" />
        </div>
        <div class="loadingBarContainer">
          <div class="loadingBar"></div>
        </div>
    </div>
</div>

<!-- start template scrollTo -->

<!-- <div id="div1" style="height: 1000px; width 100px">
    Test 1
</div>
<br/>
<div id="div2" style="height: 1000px; width 100px">
    Test 2
</div>
<button id="click1">Click me 1</button>
<button id="click2">Click me 2</button> -->

<!-- end template scrollTo -->

<div class="webgl-content">
    <div id="gameContainer" style="width:1280px;height:720px"></div>
    <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
    </div>
</div>

<script src="<?=WEBROOT?>Unity/UnityLoader.js"></script>

<script src="<?=WEBROOT?>Unity/UnityProgress.js"></script>

<script src="<?=WEBROOT?>build/app.js"></script>

<?php
    require DIR_VIEWS . '/main/footer.inc.php';
?>