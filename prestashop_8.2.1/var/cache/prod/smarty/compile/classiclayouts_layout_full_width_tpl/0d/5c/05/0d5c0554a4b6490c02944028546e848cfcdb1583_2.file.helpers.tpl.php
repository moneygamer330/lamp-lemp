<?php
/* Smarty version 4.3.4, created on 2025-03-16 15:20:20
  from '/app/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67d6de24d86370_43353614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d5c0554a4b6490c02944028546e848cfcdb1583' => 
    array (
      0 => '/app/themes/classic/templates/_partials/helpers.tpl',
      1 => 1738226100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67d6de24d86370_43353614 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/app/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/0d/5c/05/0d5c0554a4b6490c02944028546e848cfcdb1583_2.file.helpers.tpl.php',
    'uid' => '0d5c0554a4b6490c02944028546e848cfcdb1583',
    'call_name' => 'smarty_template_function_renderLogo_64035811367d6de24d16a11_49190561',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_64035811367d6de24d16a11_49190561 */
if (!function_exists('smarty_template_function_renderLogo_64035811367d6de24d16a11_49190561')) {
function smarty_template_function_renderLogo_64035811367d6de24d16a11_49190561(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_64035811367d6de24d16a11_49190561 */
}
