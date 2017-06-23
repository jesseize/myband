<?php
/* Smarty version 3.1.30, created on 2017-05-31 09:58:16
  from "C:\wamp64\www\MyBandV_M\views\articles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592e93b8db88e6_79457624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '484251c55de59dcf2d6cad1179923e4c7af0701a' => 
    array (
      0 => 'C:\\wamp64\\www\\MyBandV_M\\views\\articles.tpl',
      1 => 1496224694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592e93b8db88e6_79457624 (Smarty_Internal_Template $_smarty_tpl) {
?>
<content class="wrap">


<section>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article_list']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
        <article>
          <h1><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
          <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" alt=""><br>
          <content><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</content>

        </article>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</section>

</content>
<?php }
}
