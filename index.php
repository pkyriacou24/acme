<?php

    const productCode =0;
    const productDesc =1;
    const productPrice =2;
    const productOffer =3;


    require_once('acme.php');
    // Initialise Products

    $redWidget = new Catelogue();
    $redWidget->setProduct(array('RO1','Red Widget',32.95));
    $blueWidget = new Catelogue();
    $blueWidget->setProduct(array('BO1','Blue Widget',7.95));
    $greenWidget = new Catelogue();
    $greenWidget->setProduct(array('GO1','Green Widget',24.95));

    // Initialise Delivery Cost

    $lessthanFifty = new Delivery();
    $lessthanFifty->setDelivery(array('<$50','4.95'));
    $lessthanNinety = new Delivery();
    $lessthanNinety->setDelivery(array('<$90','2.95'));
    $lessgreaterthanNinety = new Delivery();
    $lessgreaterthanNinety->setDelivery(array('>=$90','0'));
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 20%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>

<body>
	<center><h1> Available Products </h1></center>
	<table align="center" border="1">
		<thead>
			<td>Product</td>
			<td>Code</td>
			<td>Price</td>
		</thead>
		<tr>
            <td>
            <?php
            print ($redWidget -> getProduct()[productDesc] . PHP_EOL);
            ?>
            </td>
			<td>
            <?php
                print ($redWidget -> getProduct()[productCode] . PHP_EOL);            
            ?>
            </td>
            <td>
             <?php
             print ($redWidget -> getProduct()[productPrice] . PHP_EOL);
             ?>
             </td>
		</tr>
		<tr>
            <td>
            <?php
            print ($greenWidget -> getProduct()[productDesc] . PHP_EOL);
            ?>
            </td>
			<td>
            <?php
            print ($greenWidget -> getProduct()[productCode] . PHP_EOL);            
            ?>
            </td>
            <td>
             <?php
             print ($greenWidget -> getProduct()[productPrice] . PHP_EOL);
             ?>
             </td>
		</tr>
		<tr>
            <td>
            <?php
            print ($blueWidget -> getProduct()[productDesc] . PHP_EOL);
            ?>
            </td>
			<td>
            <?php
            print ($blueWidget -> getProduct()[productCode] . PHP_EOL);            
            ?>
            </td>
            <td>
             <?php
             print ($blueWidget -> getProduct()[productPrice] . PHP_EOL);
             ?>
             </td>
		</tr>
	</table>

	<center><h1> Delivery cost </h1></center>

	<table align="center">
		<thead>
			<td>Orders</td>
			<td>Delivery cost</td>
		</thead>
		<tr>
			<td>
             <?php
             print ($lessthanFifty -> getDelivery()[0] . PHP_EOL);
             ?>
            </td>
			<td>
             <?php
             print ($lessthanFifty -> getDelivery()[1] . PHP_EOL);
             ?>
             </td>
		</tr>
		<tr>
			<td>
             <?php
             print ($lessthanNinety -> getDelivery()[0] . PHP_EOL);
             ?>
            </td>
			<td>
             <?php
             print ($lessthanNinety -> getDelivery()[1] . PHP_EOL);
             ?>
             </td>
		</tr>
		<tr>
			<td>
             <?php
             print ($lessgreaterthanNinety -> getDelivery()[0] . PHP_EOL);
             ?>
            </td>
			<td>
             <?php
             print ($lessgreaterthanNinety -> getDelivery()[1] . PHP_EOL);
             ?>
             </td>
		</tr>
	</table>
	
	<center><h1> Cost Calculation </h1></center>

	<table align="center">
		<thead>
			<td>Orders</td>
			<td>Actions</td>
		</thead>
		<tbody id="cost-form-body">
			<tr>
				<td>
				</td>
				<td>
				</td>
			</tr>
		</tbody>
	</table>
	<center><h2> Sub Total </h2></center>
	<center><h3 id="Sub Total"></h3></center>
	<center><h2> Delivery Cost </h2></center>
	<center><h3 id="Delivery Cost"></h3></center>
	<center><h2> Total Cost </h2></center>
	<center><h3 id="Total Cost"></h3></center>
	<center><select id="product-code">
		<option value="R01">R01</option>
		<option value="G01">G01</option>
		<option value="B01">B01</option>
	</select></center>
	<center><button onclick="addProductCart()"> Add product </button></center>
	<script type="text/javascript" src="./index.js"></script>
</body>
</html>