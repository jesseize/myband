<?php
/* Smarty version 3.1.30, created on 2017-06-02 06:47:35
  from "C:\wamp64\www\MyBandV_M\views\about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59310a07153958_97133266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f1e4c04c6bb5736d01fa96a37dca5df094df6a9' => 
    array (
      0 => 'C:\\wamp64\\www\\MyBandV_M\\views\\about.tpl',
      1 => 1496226248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59310a07153958_97133266 (Smarty_Internal_Template $_smarty_tpl) {
?>
<content class="wrap">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['about_list']->value, 'x');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['x']->value) {
?>
    <?php echo $_smarty_tpl->tpl_vars['x']->value['content'];?>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</content>
<?php }
}
