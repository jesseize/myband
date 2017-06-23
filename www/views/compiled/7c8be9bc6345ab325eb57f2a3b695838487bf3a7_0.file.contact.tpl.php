<?php
/* Smarty version 3.1.30, created on 2017-06-17 00:13:45
  from "C:\wamp64\www\martin\views\contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594474392eee58_54051285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c8be9bc6345ab325eb57f2a3b695838487bf3a7' => 
    array (
      0 => 'C:\\wamp64\\www\\martin\\views\\contact.tpl',
      1 => 1497658419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594474392eee58_54051285 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="contact">
  <div class="contact-icons">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['social']->value, 'x');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['x']->value) {
?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['x']->value['link'];?>
"><i class="fa <?php echo $_smarty_tpl->tpl_vars['x']->value['icon'];?>
 fa-2x" aria-hidden="true"></i></a>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </div>
</div>
<?php }
}
