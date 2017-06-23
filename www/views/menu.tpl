<nav class="wrap">
    <img class="logo" src="images/logo.png" alt="Logo">
    <ul>
      {foreach from=$pages item=page}
          <li><a href="{$page.link}">{$page.page_name}</a></li>
      {/foreach}
    </ul>
</nav>
