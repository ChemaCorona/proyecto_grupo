<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Register extends Model
{
   protected $table = 'registers';
   protected $fillable = ['id_order','id_game','id','quantity'];

   /**
   * Display a listing of the resource
   *
   * @return Response
   */

   public function index(Request $request)
   {
   		$order = new Order([
        'id' => $request->get('id'),
        'id_user' => $request->get('id_user'),
        'totalprice' => $request->get('totalprice'),
        'date' => $request->get('date')
      ]);

   		
   }
}