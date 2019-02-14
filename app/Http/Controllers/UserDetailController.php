<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\User;

class UserDetailController extends Controller
{

    public function store(Request $request){

      $user = new User([
        'name' => $request->get('name'),
        'password' => $request->get('password'),
        'email' => $request->get('email')
      ]);

      $user->save();
      return redirect('/index');
    }
    public function index(){

      $users = User::all();

      return view('index', compact('users'));
    }

    public function downloadPDF($id){
      $user = User::find($id);

      $pdf = PDF::loadView('pdf', compact('user'));
      return $pdf->download('invoice.pdf');

    }
}