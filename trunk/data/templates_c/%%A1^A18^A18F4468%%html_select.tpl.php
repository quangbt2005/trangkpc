<?php /* Smarty version 2.6.20, created on 2010-11-09 08:22:02
         compiled from categories/html_select.tpl */ ?>
<select class="w180" name="drpProductCategory">
<?php $_from = $this->_tpl_vars['Categories_List']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>
<option value="<?php echo $this->_tpl_vars['category']['categories_id']; ?>
"<?php if ($this->_tpl_vars['category']['categories_id'] == $this->_tpl_vars['selected_id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['category']['categories_name']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select>