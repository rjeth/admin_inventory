<?php
  $page_title = 'Product Inventory';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(2);
  $products = join_product_table();
?>
<?php include_once('layouts/header.php'); ?>
  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
    <div class="col-md-12">
      
        <div class="panel-heading clearfix">
        	<span><strong>Product Inventory</strong></span>
        </div>
        <div class="panel-body">
          <table class="table table-striped table-bordered table-condensed">
            <thead>
              <tr>
                <th class="text-center" style="width: 40px;">#</th>
                <th> Product Title </th>
                <th class="text-center" style="width: 20%;"> Categorie </th>
                <th class="text-center" style="width: 20%;"> Instock </th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($products as $product):?>
              <tr>
                <td class="text-center"><?php echo count_id();?></td>
                
                <td> <?php echo remove_junk($product['name']); ?></td>
                <td class="text-center"> <?php echo remove_junk($product['categorie']); ?></td>
                <td class="text-center"> <?php echo remove_junk($product['quantity']); ?></td>
              </tr>
             <?php endforeach; ?>
            </tbody>
          </tabel>
        </div>
      </div>
   
  </div>
  <?php include_once('layouts/footer.php'); ?>
