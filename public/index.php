<?php
    require __DIR__ . '/../app/config.php';

    require DIR_VIEWS . '/main/header.inc.php';
?>

<div id="loaderContainer">
	<div class="cog-loader">
	  <div class="cog-wrap">
	    <div class="cog">
	      <div class="spoke-wrap">
	        <div class="spoke">
	          <div class="spoke">      
	            <div class="spoke">
	              <div class="spoke">
	                <div class="spoke"></div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
</div>

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