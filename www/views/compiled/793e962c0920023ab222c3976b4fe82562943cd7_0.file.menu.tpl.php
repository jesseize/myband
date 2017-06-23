<?php
/* Smarty version 3.1.30, created on 2017-06-17 01:10:40
  from "C:\wamp64\www\martin\views\menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59448190030eb6_16159922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '793e962c0920023ab222c3976b4fe82562943cd7' => 
    array (
      0 => 'C:\\wamp64\\www\\martin\\views\\menu.tpl',
      1 => 1497661838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59448190030eb6_16159922 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="wrap">
    <img class="logo" src="images/logo.png" alt="Logo">
    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['page_name'];?>
</a></li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>
</nav>
<?php }
}
