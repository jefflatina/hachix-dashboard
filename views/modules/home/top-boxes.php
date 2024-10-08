<?php

$item = null;
$value = null;
$order = "id";

$sales = ControllerSales::ctrAddingTotalSales();

$categories = ControllerCategories::ctrShowCategories($item, $value);
$totalCategories = count($categories);

$customers = ControllerCustomers::ctrShowCustomers($item, $value);
$totalCustomers = count($customers);

$products = ControllerProducts::ctrShowProducts($item, $value, $order);
$totalProducts = count($products);

?>



<div class="col-lg-3 col-xs-6">
	   
  <div class="small-box bg-black-gradient">
    
    <div class="inner">
      
      <h3 style = "color:#E94701">₱<?php echo number_format($sales["total"],2); ?></h3>

      <p style = "color:white">Overall Sales</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-pricetag"></i>
    
    </div>
    
    <a href="sales" class="small-box-footer">
      
      More info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>
   
<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-black-gradient">
    
    <div class="inner">
    
      <h3 style = "color:#E94701"><?php echo number_format($totalCategories); ?></h3>

      <p style = "color:white">Categories</p>
    
    </div>
    
    <div class="icon">
    
      <i class="ion ion-clipboard"></i>
    
    </div>
    
    <a href="categories" class="small-box-footer">
      
      More info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>
   
<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-black-gradient">
    
    <div class="inner">
    
      <h3 style = "color:#E94701"><?php echo number_format($totalCustomers); ?></h3>

      <p style = "color:white">Business Days</p>
  
    </div>
    
    <div class="icon">
    
      <i class="ion ion-person-add"></i>
    
    </div>
    
    <a href="customers" class="small-box-footer">

      More info <i class="fa fa-arrow-circle-right"></i>

    </a>

  </div>

</div>
   
<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-black-gradient">
  
    <div class="inner">
    
      <h3 style = "color:#E94701"><?php echo number_format($totalProducts); ?></h3>

      <p style = "color:white">Products</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-ios-cart"></i>
    
    </div>
    
    <a href="products" class="small-box-footer">
      
      More info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>
	   
</div>