<?php
/* Smarty version 4.3.4, created on 2025-03-16 15:21:54
  from '/app/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67d6de82e44d03_86498159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcdd91a951fd1701bea9d3a14d1653546e4e8d58' => 
    array (
      0 => '/app/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1738226100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67d6de82e44d03_86498159 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
