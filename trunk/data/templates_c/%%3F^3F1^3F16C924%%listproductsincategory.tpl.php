<?php /* Smarty version 2.6.20, created on 2010-11-12 08:46:52
         compiled from admin/categories/listproductsincategory.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'number_format', 'admin/categories/listproductsincategory.tpl', 13, false),)), $this); ?>
<table class="vlist" cellpadding="0" cellspacing="0" width="100%">
  <tr>
    <th width="40%">Tên Sản Phẩm</th>
    <th>Giá Gốc<br />(VND)</th>
    <th>Giá<br />Niêm Yết (VND)</th>
    <th>Giá<br />Khuyến Mãi (VND)</th>
    <th width="50px">&nbsp;</th>
  </tr>
  <?php $_from = $this->_tpl_vars['Products_List']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['product']):
?>
  <tr onMouseOver="this.style.backgroundColor='#71FFB8';" onMouseOut="this.style.backgroundColor='transparent';">
    <td><a href="javascript:openEditProductPopup(<?php echo $this->_tpl_vars['product']['products_id']; ?>
);"><?php echo $this->_tpl_vars['product']['products_name']; ?>
</a></td>
    <td align="right">100.000</td>
    <td align="right"><?php echo smarty_number_format(array('number' => $this->_tpl_vars['product']['products_price']), $this);?>
</td>
    <td align="right"><?php echo smarty_number_format(array('number' => $this->_tpl_vars['product']['special_price']), $this);?>
</td>
    <td><input type="button" value="Xóa" onclick="deleteProduct(<?php echo $this->_tpl_vars['product']['products_id']; ?>
);"></td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
</table>
<?php echo '
<script type="text/javascript" language="javascript">
function deleteProduct(product_id){
  var category_id = $("#tree").dynatree("getActiveNode").data.key;
  if(category_id != null && product_id != null && category_id != \'\' && product_id != \'\'){
    $.get("/admin/products/delete/" + product_id + "/" + category_id, function(data){
      update_sub_categories_tree(category_id);
    });
  }
}
</script>
'; ?>