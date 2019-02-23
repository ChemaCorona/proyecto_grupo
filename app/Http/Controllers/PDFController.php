<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
# use PDF;
use App\Order;

class PDF extends FPDF{

private $_SESSION['sessCustomerID'] = 1;

	function Header()
	{
    	$this->SetFont('Arial','B',15);
    	$this->Cell(80);
    	$this->Cell(54,10,'Factura',1,0,'C');
    	$this->Ln(20);
	}
	
	function GeneratePdf(){
		$cart = new Cart;
		$_SESSION['sessCustomerID'] = 1;
		$query = $db->query("SELECT * FROM users WHERE id = ".$_SESSION['sessCustomerID']);
		$custRow = $query->fetchColumn();
		if($cart->total_items() > 0){
    	$cartItems = $cart->contents();
		}

		$pdf = new PDF();
		$pdf->AliasNbPages();
		$pdf->AddPage();
		$pdf->SetFont('Times','',12);
		foreach($cartItems as $item){
		$name = $item["name"];
		$price = $item["price"];
		#$ = $item["qty"];
		$totalprice = $item["totalprice"];
		$contador=10;
		$pdf->cell(0,$contador,"Nombre producto:  " . $name,0,'L');
    		$pdf->setXY(5,30);
    		$contador=$contador+10;
		$pdf->cell(0,$contador,"Precio producto:  " . $price,0,'L');
    		$pdf->setXY(5,30);
    		$contador=$contador+10;
		/*$pdf->cell(0,$contador,"Cantidad productos:  " . $cantidad,0,'L');
   		 $pdf->setXY(5,30);
    		$contador=$contador+10;*/
		$pdf->cell(0,$contador,"Precio final:  " . $totalprice,0,'L');
    		$pdf->setXY(5,30);
    		$contador=$contador+10;   
		}
		$pdf->Output();
	}

	function Footer(){
    	$this->SetY(-15);
    	$this->SetFont('Arial','I',8);
    	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
}

