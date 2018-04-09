<?php
    require __DIR__ . '/../app/config.php';

    require DIR_VIEWS . '/header.inc.php';
?>

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
    require DIR_VIEWS . '/footer.inc.php';
?>