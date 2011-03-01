<?php /* Smarty version 2.6.20, created on 2010-11-12 09:05:11
         compiled from admin/layouts/popup.tpl */ ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="robots" content="noindex" />
  <link rel="StyleSheet" href="/style/admin.css" type="text/css" />
  <?php if ($this->_tpl_vars['Request']['request_page'] == 'addproduct' || $this->_tpl_vars['Request']['request_page'] == 'editproduct'): ?>
  <script type="text/javascript" src="/jscripts/jquery/jquery-1.4.2.js"></script>
  <script type="text/javascript" src="/jscripts/jquery/tiny_mce/jquery.tinymce.js"></script>
  <?php endif; ?>
  <link rel="shortcut icon" href="/favico.ico" type="image/x-icon" />
  <title><?php echo $this->_tpl_vars['title']; ?>
</title>
</head>
<body>
<div id="allscreen">
  <div id="allcontent">
    <?php echo $this->_tpl_vars['center_col']; ?>

    <!-- <textarea id="elm1" name="elm1" rows="15" cols="80" style="width: 80%" class="tinymce"><?php echo $this->_tpl_vars['txtProductDescription']; ?>
</textarea> -->
  </div>
</div>
</body>
</html>