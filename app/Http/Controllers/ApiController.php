<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\CrudApi;

class ApiController extends Controller
{
    public function create(Request $request)
    {
        DB::beginTransaction();
        try{
            $query = DB::table('crud')->insertGetId(
                [
                    'Employee_name' => $request->Employee_name,
                    'Item_name' => $request->Item_name,
                    'stocks' => $request->stocks,

                    'created_date' => date('Y-m-d H:i:s')
                ]
            );
            DB::commit();
            $response = array(
                'status' => 'SUCCESS',
                'message' => 'SUCCESS INSERTING DATA!',
                'payload' => $query
            );
        // $cruds = new  CrudApi();

        // $cruds->Employee_name = $request->input('Employee_name');
        // $cruds->Item_name = $request->input('Item_name');
        // $cruds->stocks = $request->input('stocks');
        }catch(\Exception $e){
            DB::rollback();
            $response = array(
                'status' => 'ERROR',
                'message' => 'SERVER ERROR: CODE # '.$e->getLine()
            );
        }
        return json_encode($response);
    }

    //     $cruds->save();
    //     return response()->json($cruds);
    // }

    public function read()
    {
        DB::beginTransaction();
    	try{
    		$query = DB::table('crud')->get();
    		DB::commit();
    		$response = array(
    			'status' => 'SUCCESS',
    			'message' => 'SUCCESS FETCHING DATA!',
    			'payload' => $query
    		);
    	}catch(\Exception $e){
    		DB::rollback();
    		$response = array(
    			'status' => 'ERROR',
    			'message' => 'SERVER ERROR CODE # '.$e->getLine()
    		);
    	}
    	return json_encode($response);
    }
    //     $cruds = CrudApi::all();
    //     return response()->json($cruds);
    // }
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
    	try{
    		$query = DB::table('crud')
			->where('id', $request->id)
			->update(
				[
					'Employee_name' => $request->Employee_name,
                    'Item_name' => $request->Item_name,
                     'stocks' => $request->stocks

				]
			);
    		DB::commit();
    		$response = array(
    			'status' => 'SUCCESS',
    			'message' => 'SUCCESS UPDATING RECORD!'
    		);	
    	 }catch(\Exception $e){
    	 	DB::rollback();
    	 	$response = array(
    	 		'status' => 'ERROR',
    	 		'message' => 'SERVER ERROR CODE # '.$e->getLine()
    	 	);
    	 }
    	return json_encode($response);
    }


    //     $cruds = CrudApi::find($id);
    //     $cruds->Employee_name = $request->input('Employee_name');
    //     $cruds->Item_name = $request->input('Item_name');
    //     $cruds->stocks = $request->input('stocks');
    //     $cruds->save();
    //     return response()->json($cruds);
    // }

    public function deleted(Request $request, $id)
    {
        DB::beginTransaction();
    	try{
    		$query = DB::table('crud')
    		->where('id', $request->id)
    		->delete();
    		DB::commit();
    		$response = array(
    			'status' => 'SUCCESS',
    			'message' => 'SUCCESSFULLY DELETED RECORD!'
    		);
    	}catch(\Exception $e){
    		DB::rollback();
    		$response = array(
    			'status' => 'ERROR',
    			'message' => 'SERVER ERROR CODE # '.$e->getLine()
    		);
    	}	
    	return json_encode($response);
        // $cruds = CrudApi::find($id);
        // $cruds->delete();
        // return response()->json($cruds);
    }
}
