<?php
/* Smarty version 4.1.0, created on 2022-03-25 22:28:17
  from 'D:\programowanie\Nowy folder\htdocs\Szablon-widok\app\Calc\view_calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_623e33f18943d9_68013066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b57bf9c4f6baa293a77a3cde57097a4d7f6f4e1' => 
    array (
      0 => 'D:\\programowanie\\Nowy folder\\htdocs\\Szablon-widok\\app\\Calc\\view_calc.html',
      1 => 1648243694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623e33f18943d9_68013066 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103319409623e33f18851b0_59463527', 'tytul');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1317213825623e33f18859f6_03185991', 'under');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_958654818623e33f1885f72_71963105', 'whitey');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1413215785623e33f1886469_81913247', 'form');
?>

-----------------------------
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1401975051623e33f18886f1_30240583', 'k1');
?>

-----------------------------

-----------------------------
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1526167198623e33f18890c2_73800885', 'k2');
?>

-----------------------------

-----------------------------
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_796873515623e33f18895b7_66352272', 'k3');
?>

-----------------------------

-----------------------------
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1195197032623e33f1889ee2_28293046', 'k4');
?>

-----------------------------

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_942848908623e33f1893ed1_51433391', 'Cform');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'tytul'} */
class Block_103319409623e33f18851b0_59463527 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tytul' => 
  array (
    0 => 'Block_103319409623e33f18851b0_59463527',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   <?php
}
}
/* {/block 'tytul'} */
/* {block 'under'} */
class Block_1317213825623e33f18859f6_03185991 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'under' => 
  array (
    0 => 'Block_1317213825623e33f18859f6_03185991',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   <?php
}
}
/* {/block 'under'} */
/* {block 'whitey'} */
class Block_958654818623e33f1885f72_71963105 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'whitey' => 
  array (
    0 => 'Block_958654818623e33f1885f72_71963105',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 coś <?php
}
}
/* {/block 'whitey'} */
/* {block 'form'} */
class Block_1413215785623e33f1886469_81913247 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_1413215785623e33f1886469_81913247',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post"> <?php
}
}
/* {/block 'form'} */
/* {block 'k1'} */
class Block_1401975051623e33f18886f1_30240583 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k1' => 
  array (
    0 => 'Block_1401975051623e33f18886f1_30240583',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    Liczba 1:<br>
    <input id="id_x" type="text" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
" />    
<?php
}
}
/* {/block 'k1'} */
/* {block 'k2'} */
class Block_1526167198623e33f18890c2_73800885 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k2' => 
  array (
    0 => 'Block_1526167198623e33f18890c2_73800885',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Operacja:<br>
    	<select name="op">
    		<option value="plus">+</option>
    		<option value="minus">-</option>
    		<option value="times">*</option>
    		<option value="div">/</option>
        	<option value="pow">^</option>
    	</select>    
<?php
}
}
/* {/block 'k2'} */
/* {block 'k3'} */
class Block_796873515623e33f18895b7_66352272 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k3' => 
  array (
    0 => 'Block_796873515623e33f18895b7_66352272',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Liczba 2:<br>
    <input id="id_x" type="text" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
" />
<?php
}
}
/* {/block 'k3'} */
/* {block 'k4'} */
class Block_1195197032623e33f1889ee2_28293046 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k4' => 
  array (
    0 => 'Block_1195197032623e33f1889ee2_28293046',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
    	<h4>Wystąpiły błędy: </h4>
    	<ol class="err">
    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
    	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
    	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    	</ol>
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
    	<h4>Informacje: </h4>
    	<ol class="inf">
    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
    	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
    	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    	</ol>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
    	<h4>Wynik</h4>
    	<p class="res">
    	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

    	</p>
    <?php }
}
}
/* {/block 'k4'} */
/* {block 'Cform'} */
class Block_942848908623e33f1893ed1_51433391 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Cform' => 
  array (
    0 => 'Block_942848908623e33f1893ed1_51433391',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 </form> <?php
}
}
/* {/block 'Cform'} */
}
