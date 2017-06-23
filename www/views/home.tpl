
<div class="content">
  <h1 class="main-title"><span>Martin</span> Garrix</h1>
  <div class="divider"></div>
  <a class="releases" href="releases.html">Releases</a>
</div>


{foreach from=$video item=fo}
<input type="hidden" id="video" value="{$fo.video}">
{/foreach}

<div class="video-overlay"></div>

<div class="video-background">
    <div class="video-foreground">
      <div id="player"></div>
    </div>
</div>

<script src="js/scripts.js" charset="utf-8"></script>
