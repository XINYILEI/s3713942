<?php
session_start();
?>
<h2>cart</h2>

<table>
	<tr>
		<th>item<?php echo($_SESSION['cart'][$id]['Title'])?></th>
		<th>option<?php echo($_SESSION['cart'][$id]['Option'])?></th>
		<th>Price<?php echo($_SESSION['cart'][$id]['Price'])?></th>
		<th>qty<?php echo($_SESSION['cart'][$id]['qty'])?></th>
	</tr>
	<?php
	$sumTotal=0;

		$sumTotal+=$_SESSION['cart'][$id]['Price']*$_SESSION['cart'][$id]['qty'];
?>
<tr>
	 <td>Total : <?php echo($sumTotal); ?></td>

 </tr>
</table>
