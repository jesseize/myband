<?php
/* Smarty version 3.1.30, created on 2017-06-17 01:10:18
  from "C:\wamp64\www\martin\views\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5944817a5163e8_27880689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '372f1a73f333fbb5b743bbff818df984baacecb1' => 
    array (
      0 => 'C:\\wamp64\\www\\martin\\views\\footer.tpl',
      1 => 1497661790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5944817a5163e8_27880689 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer class="wrap">
  <div class="social">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['footer']->value, 'fo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fo']->value) {
?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['fo']->value['link'];?>
"><i class="fa <?php echo $_smarty_tpl->tpl_vars['fo']->value['icon'];?>
" aria-hidden="true"></i></a>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </div>
</footer>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.0/velocity.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/loader.js" charset="utf-8"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
