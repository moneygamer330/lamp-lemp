<?php
/* Smarty version 4.3.4, created on 2025-03-16 15:20:14
  from '/app/themes/classic/templates/catalog/_partials/productlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67d6de1ed34ee6_21273455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f5e3800a380ebe0f3bfebc9cc10b2700b7a5e0' => 
    array (
      0 => '/app/themes/classic/templates/catalog/_partials/productlist.tpl',
      1 => 1738226100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_67d6de1ed34ee6_21273455 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '29658984467d6de1ecbb897_54768196';
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "productClasses", null);
if (!empty($_smarty_tpl->tpl_vars['productClass']->value)) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['productClass']->value, ENT_QUOTES, 'UTF-8');
} else { ?>col-xs-12 col-sm-6 col-xl-4<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<div class="products<?php if (!empty($_smarty_tpl->tpl_vars['cssClass']->value)) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cssClass']->value, ENT_QUOTES, 'UTF-8');
}?>">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'position');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'position'=>$_smarty_tpl->tpl_vars['position']->value,'productClasses'=>$_smarty_tpl->tpl_vars['productClasses']->value), 0, true);
?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
