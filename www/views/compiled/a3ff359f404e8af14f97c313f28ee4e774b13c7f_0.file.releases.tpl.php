<?php
/* Smarty version 3.1.30, created on 2017-06-17 00:09:34
  from "C:\wamp64\www\martin\views\releases.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5944733e0e8bd8_07622401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3ff359f404e8af14f97c313f28ee4e774b13c7f' => 
    array (
      0 => 'C:\\wamp64\\www\\martin\\views\\releases.tpl',
      1 => 1497658151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5944733e0e8bd8_07622401 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="spacer"></div>

<div class="releases-container">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['releases']->value, 'release');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['release']->value) {
?>
  <div class="release wow fadeIn">
    <iframe width="100%" height="250" scrolling="no" frameborder="no" src="<?php echo $_smarty_tpl->tpl_vars['release']->value['embed_link'];?>
"></iframe>
  </div>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>


<div class="bg-overlay"></div>
<div class="releases-bg"></div>

<div class="spacer"></div>
<?php echo '<script'; ?>
 src="js/releases.js"><?php echo '</script'; ?>
>
<?php }
}
