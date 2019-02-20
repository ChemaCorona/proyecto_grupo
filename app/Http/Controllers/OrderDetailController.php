<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Order;

class OrderDetailController extends Controller
{

  public $order;
 
    /**
     * [__construct description]
     * @param Order $id [description]
     */
    public function __construct(Order $id)
    {
        $this->id = $id;
    }

    public function index()
    {
        //get order
        $orders = $this->id->get();
 
        return view('orders.index', ['orders' => $order]);
    }

    public function viewPDF()
    {
        //get all users
        $o = $this->id->get();
 
        // load view for pdf
        $pdf = PDF::loadView('pdf.orders', ['orders' => $order]);
 
        // stream pdf on browser
        return $pdf->stream();
    }
}