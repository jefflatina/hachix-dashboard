<?php

$item = null;
$value = null;

$sales = ControllerSales::ctrShowSales($item, $value);
$users = ControllerUsers::ctrShowUsers($item, $value);

$arraySellers = array();
$arraySellersList = array();

foreach ($sales as $key => $valueSales) {

  foreach ($users as $key => $valueUsers) {

    if($valueUsers["id"] == $valueSales["idSeller"]){

        #We capture sellers in an array
        array_push($arraySellers, $valueUsers["name"]);

        #We capture the names and net values in the same array
        $arraySellersList = array($valueUsers["name"] => $valueSales["netPrice"]);

        #We add the netprice of each seller

        foreach ($arraySellersList as $key => $value) {

            $addingTotalSales[$key] += $value;

         }

    }
  
  }

}

#Avoiding repeated names
$dontrepeatnames = array_unique($arraySellers);

?>
   

<!--=====================================
Sellers
======================================-->

<div class="box box-default">
	
	<div class="box-header with-border">
    
    	<h3 style="color:white" class="box-title">Overall Sales</h3>
  
  	</div>

  	<div class="box-body">
  		
		<div class="chart-responsive">
			
			<div class="chart" id="bar-chart1" style="height: 150px;"></div>

		</div>

  	</div>

</div>

<script>
	
//BAR CHART
var bar = new Morris.Bar({
  element: 'bar-chart1',
  resize: true,
  data: [

  <?php
    
    foreach($dontrepeatnames as $value){
      
      echo "{y: '".$value."', a: '".$addingTotalSales[$value]."'},";

    }

  ?>
  ],
  barColors: ['#E94701'],
  xkey: 'y',
  ykeys: ['a'],
  labels: ['sales'],
  preUnits: '₱ ',
  hideHover: 'auto'
});


</script>