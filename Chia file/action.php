<?php
session_start();
if (isset($_POST['maSV'])){
if (isset($_POST['action'])){
		
	if($_POST["action"] == "add") {
		if(isset($_SESSION["dsdangky"])) { 
			$is_available = 0;

			foreach($_SESSION["dsdangky"] as $keys => $values) {
				if($_SESSION["dsdangky"][$keys]['maSV'] == $_POST["maSV"]) { 
					$is_available++;
					//tăng số lượng lên 1;
				}
			}
			if($is_available == 0) { 
				$item_array = array(
				
					'maSV'               =>     $_POST["maSV"]

					);
				$_SESSION["dsdangky"][] = $item_array; 
			}
		}
		else { 
			$item_array = array(
				'maSV'               =>     $_POST["maSV"],  

		
			);
			
			$_SESSION["dsdangky"][] = $item_array; //truyền sản phẩm vào trong giỏ
		}
	}		
		
		
		
		
		
		
		
		
		
		
		
		/*if ($_POST['action'] == "add"){
			
			if (isset($_SESSION['dsdangky'])){

				$soluong = 0;
				foreach ($_SESSION['dsdangky'] as keys => values){
					
					if ($_SESSION['dsdangky']['maSV'] == $_POST['maSV']){
						
						$soluong++;
						
					}
					
				}
				
				if ($soluong ==0) {
					
					$dsdangky_array = array(
						'maSV'               =>     $_POST["maSV"],  
						//'tenSV'             =>     $_POST["product_name"], //chua tim duoc cach ket noi csdl hop ly  


					);
					
					$_SESSION["dsdangky"][] = $dsdangky_array; // truyển sản phẩm vào giỏ hàng
				
				}
						
			}
			else{
				
				
				$dsdangky_array = array(
					'maSV'               =>     $_POST["maSV"],  
					//'tenSV'             =>     $_POST["product_name"], //chua tim duoc cach ket noi csdl hop ly  


				);
				$_SESSION["dsdangky"][] = $dsdangky_array; // truyển sản phẩm vào giỏ hàng				
			}
			
		}*/
		
		
	}
}
	
?>