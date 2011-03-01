<?php /* Smarty version 2.6.20, created on 2010-11-12 09:41:11
         compiled from admin/products/editproduct.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'number_format', 'admin/products/editproduct.tpl', 52, false),)), $this); ?>
<?php echo '
<script type="text/javascript" language="javascript">
$(document).ready(function() {
  $(\'textarea.tinymce\').tinymce({
    // Location of TinyMCE script
    script_url : \'/jscripts/jquery/tiny_mce/tiny_mce.js\',

    // General options
    theme : "advanced",
    // plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,advlist",
    plugins : "advimage,advlink,insertdatetime,directionality",

    // Theme options
    theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,fontselect,fontsizeselect",
    theme_advanced_buttons2 : "link,unlink,image,|,forecolor,backcolor",
    theme_advanced_buttons3 : "",
    theme_advanced_toolbar_location : "top",
    theme_advanced_toolbar_align : "left",

    external_link_list_url : "lists/link_list.js",
	external_image_list_url : "lists/image_list.js",
  });
});
</script>
'; ?>

<form method="post" enctype="multipart/form-data">
<div class="content" style="width: 650px;margin:0 auto;">
  <div class="header1">Hiệu chỉnh thông tin sản phẩm</div>
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
          <td align="left" style="padding-left: 5px"><input name="txtProductName" type="text" class="w240" value="<?php echo $this->_tpl_vars['txtProductName']; ?>
"></td>
        </tr>
        <tr>
          <th align="right" style="padding-right: 5px">Danh Mục</th>
          <td align="left" style="padding-left: 5px"><?php echo $this->_tpl_vars['html_select_categories']; ?>
</td>
        </tr>
        <tr>
          <th align="right" style="padding-right: 5px">Giá Sản Phẩm</th>
          <td align="left" style="padding-left: 5px"><input name="txtProductPrice" type="text" class="w100 t-right" value="<?php echo $this->_tpl_vars['txtProductPrice']; ?>
">&nbsp;VND</td>
        </tr>
        <?php if ($this->_tpl_vars['txtProductSPPrice'] != ''): ?>
        <tr>
          <th align="right" style="padding-right: 5px">Giá Khuyến Mãi</th>
          <td align="left" style="padding-left: 5px"><span class="fore-red"><strong><?php echo smarty_number_format(array('number' => $this->_tpl_vars['txtProductSPPrice']), $this);?>
</strong></span>&nbsp;VND</td>
        </tr>
        <?php endif; ?>
        <tr>
          <th align="right" style="padding-right: 5px">Số Lượng</th>
          <td align="left" style="padding-left: 5px"><input name="txtProductQuantity" type="text" class="w50 t-right" value="<?php echo $this->_tpl_vars['txtProductQuantity']; ?>
"></td>
        </tr>
        <tr>
          <th align="right" style="padding-right: 5px">Chi Tiết Sản Phẩm</th>
          <td align="left" style="padding: 5px"><textarea name="txtProductDescription" rows="15" class="tinymce" style="width: 100%;"><?php echo $this->_tpl_vars['txtProductDescription']; ?>
</textarea></td>
        </tr>
        <tr>
          <th align="right" style="padding-right: 5px">Hình Sản Phẩm</th>
          <td align="left" style="padding-left: 5px"><input name="txtProductImage" type="file" class="w240">&nbsp;&nbsp;<?php echo $this->_tpl_vars['txtProductImage']; ?>
</td>
        </tr>
      </table><br />
      <input type="submit" class="w80" value="Lưu thay đổi">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="button" value="Đóng" onclick="window.close();">
    </div>
  </div>
</div>
</form><?php if ($this->_tpl_vars['update_product_ok'] == 1): ?>
<script type="text/javascript" language="javascript">
window.opener.reloadProductList(<?php echo $this->_tpl_vars['showing_category']; ?>
);
alert('Đã lưu thay đổi');
// window.close();
</script><?php endif; ?>