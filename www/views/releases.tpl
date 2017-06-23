<div class="spacer"></div>

<div class="releases-container">
  {foreach from=$releases item=release}
  <div class="release wow fadeIn">
    <iframe width="100%" height="250" scrolling="no" frameborder="no" src="{$release.embed_link}"></iframe>
  </div>
  {/foreach}
</div>


<div class="bg-overlay"></div>
<div class="releases-bg"></div>

<div class="spacer"></div>
<script src="js/releases.js"></script>
