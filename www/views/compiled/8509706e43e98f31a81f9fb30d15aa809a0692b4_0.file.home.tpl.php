<?php
/* Smarty version 3.1.30, created on 2017-06-17 00:04:39
  from "C:\wamp64\www\martin\views\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59447217dc76b1_88254749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8509706e43e98f31a81f9fb30d15aa809a0692b4' => 
    array (
      0 => 'C:\\wamp64\\www\\martin\\views\\home.tpl',
      1 => 1497657876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59447217dc76b1_88254749 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="content">
  <h1 class="main-title"><span>Martin</span> Garrix</h1>
  <div class="divider"></div>
  <a class="releases" href="releases.html">Releases</a>
</div>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['video']->value, 'fo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fo']->value) {
?>
<input type="hidden" id="video" value="<?php echo $_smarty_tpl->tpl_vars['fo']->value['video'];?>
">
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


<div class="video-overlay"></div>

<div class="video-background">
    <div class="video-foreground">
      <div id="player"></div>
    </div>
</div>

<?php echo '<script'; ?>
 src="js/scripts.js" charset="utf-8"><?php echo '</script'; ?>
>
<?php }
}
