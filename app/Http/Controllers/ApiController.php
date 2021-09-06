<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CrudApi;

class ApiController extends Controller
{
    public function create(Request $request)
    {
        $cruds = new  CrudApi();

        $cruds->Employee_name = $request->input('Employee_name');
        $cruds->Item_name = $request->input('Item_name');
        $cruds->stocks = $request->input('stocks');
        // $cruds->password = $request->input('password');

        $cruds->save();
        return response()->json($cruds);
    }

    public function read()
    {
        $cruds = CrudApi::all();
        return response()->json($cruds);
    }
    public function update(Request $request, $id)
    {
        $cruds = CrudApi::find($id);
        $cruds->Employee_name = $request->input('Employee_name');
        $cruds->Item_name = $request->input('Item_name');
        $cruds->stocks = $request->input('stocks');
        $cruds->save();
        return response()->json($cruds);
    }

    public function deleted(Request $request, $id)
    {
        $cruds = CrudApi::find($id);
        $cruds->delete();
        return response()->json($cruds);
    }
}
