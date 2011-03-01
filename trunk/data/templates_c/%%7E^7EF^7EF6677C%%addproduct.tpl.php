<?php /* Smarty version 2.6.20, created on 2010-11-09 10:09:02
         compiled from admin/products/addproduct.tpl */ ?>
<form method="post" enctype="multipart/form-data">
<div class="content" style="width: 600px;margin:0 auto;">
  <div class="header1">Thêm sản phẩm mới</div>
    <div class="blu-container" style="padding: 10px;text-align: center">
      <?php if ($this->_tpl_vars['errors_count'] > 0): ?>
      <?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['error']):
?>
      <div class="w100p error_field t-left">&nbsp;&nbsp;<img height="10" border="0" width="10" title=" Lỗi " alt="Lỗi" src="/images/icons/error.gif">&nbsp;<?php echo $this->_tpl_vars['error']; ?>
</div>
      <?php endforeach; endif; unset($_from); ?>
      <br />
      <?php endif; ?>
      <table cellpadding="0" cellspacing="0" width="100%" class="vlist">
        <tr>
          <th align="right" style="padding-right: 5px">Tên Sản Phẩm</th>
          <td align="left" style="padding-left: 5px"><input name="txtProductName" type="text" class="w240" value="<?php echo $_POST['txtProductName']; ?>
"></td>
        </tr>
        <tr>
          <th align="right" style="padding-right: 5px">Danh Mục</th>
          <td align="left" style="padding-left: 5px"><?php echo $this->_tpl_vars['html_select_categories']; ?>
</td>
        </tr>
        <tr>
          <th align="right" style="padding-right: 5px">Giá Sản Phẩm</th>
          <td align="left" style="padding-left: 5px"><input name="txtProductPrice" type="text" class="w100 t-right" value="<?php echo $_POST['txtProductPrice']; ?>
">&nbsp;VND</td>
        </tr>
        <tr>
          <th align="right" style="padding-right: 5px">Số Lượng</th>
          <td align="left" style="padding-left: 5px"><input name="txtProductQuantity" type="text" class="w50 t-right" value="<?php echo $_POST['txtProductQuantity']; ?>
"></td>
        </tr>
        <tr>
          <th align="right" style="padding-right: 5px">Chi Tiết Sản Phẩm</th>
          <td align="left" style="padding-left: 5px"><textarea name="txtProductDescription" cols="40" rows="6" class="w240"><?php echo $_POST['txtProductDescription']; ?>
</textarea></td>
        </tr>
        <tr>
          <th align="right" style="padding-right: 5px">Hình Sản Phẩm</th>
          <td align="left" style="padding-left: 5px"><input name="txtProductImage" type="file" class="w240"></td>
        </tr>
      </table><br />
      <input type="submit" class="w80" value="Thêm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="button" value="Đóng" onclick="window.close();">
    </div>
  </div>
</div>
</form><?php if ($this->_tpl_vars['insert_product_ok'] == 1): ?>
<script type="text/javascript" language="javascript">
window.opener.reloadProductList(<?php echo $this->_tpl_vars['showing_category']; ?>
);
alert('Đã thêm sản phẩm thành công');
</script><?php endif; ?>