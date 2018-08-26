<?php
  $page_title = 'kithcen Home Page';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(4);
?>
<?php
 $c_categorie     = count_by_id('categories');
 $c_product       = count_by_id('products');
 $c_sale          = count_by_id('sales');
 $c_user          = count_by_id('users');
 $products_sold   = find_higest_saleing_product('10');
 $recent_products = find_recent_product_added('5');
 $recent_sales    = find_recent_sale_added('5')
?>
<?php include_once('layouts/header2.php'); ?>

<div class="row">
   <div class="col-md-12">
     <?php echo display_msg($msg); ?>
   </div>
</div>
  <div class="row">
        
 </div>
  <div class="row">

  </div>



<?php include_once('layouts/footer.php'); ?>
