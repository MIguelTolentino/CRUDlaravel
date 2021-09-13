<?php

// namespace App\Http\Controllers;

// // use Illuminate\Http\Request;

// use Exception;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

// class Ordercontroller extends Controller
// {
//     protected $user;

//     public function order(Request $request)
//     {
//         DB::beginTransaction();
//         try{
//             $user = auth()->user();

//             $data = $request->validate([
//                 'Item_name' => 'required',
//                 'quantity' => 'required'
//             ]);
//             $product = DB::table('crud')
//                         ->where('id', $request->Item_name)
//                         ->first();
//             $price = $item->price;
//             $stocks = $item->stocks;
//             $quantity = $request->quantity;
//             $total = $quantity * $price;

//             $data['Item_name'] = $user->id;
//             $data['total'] = $total;
//             $date = date('Y-m-d H:i:s');
//             $data['created_at'] = $date;
//             $data['updated_at'] = $date;

//             DB::table('products')
//                 ->where('id', $request->product_id)
//                 ->update([
//                     'stock' => $stock - $quantity
//                 ]);
//             $order = DB::table('orders')->insertGetId($data);
//             DB::commit();
//             $response = array (
//                 'status' => 'SUCCESS',
//                 'message' => 'SUCCESSFULLY INSERTED DATA!',
//                 'payload' => $order
//             );
//         } catch (Exception $e){
//             DB::rollBack();
//             $response = array (
//                 'status' => 'ERROR',
//                 'message' => 'SERVER ERROR: CODE # '.$e
//             );
//         }

//         return json_encode($response);
//     }


//}
