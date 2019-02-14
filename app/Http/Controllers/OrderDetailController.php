<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Order;

class OrderDetailController extends Controller
{

    public function store(Request $request){

      $order = new Order([
        'id' => $request->get('id'),
        'id_user' => $request->get('id_user'),
        'totalprice' => $request->get('totalprice'),
        'date' => $request->get('date')
      ]);

      $order->save();
      return redirect('/index');
    }
    public function index(){

      $order = Order::all();

      return view('index', compact('order'));
    }

    public function downloadPDF($id){
      $order = Order::find($id);

      $pdf = PDF::loadView('pdf', compact('order'));
      return $pdf->download('invoice.pdf');

    }
}