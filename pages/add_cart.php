<?php 
	$idproduct = $_GET['id'];
    if (isset($_SESSION['cart'][$idproduct])) {
        // echo $soluong;
    	$soluong += 1;
        // echo $soluong;
    }else {
    	$soluong = 1;
    }
    // $_SESSION['cart'] = array();
    // echo $soluong;
    $_SESSION['cart'][$idproduct] = $soluong;
    echo '
		<script type="text/javascript">
			window.location.href="http://localhost:3408/huytuan/?page=cart";
		</script>';
 ?>