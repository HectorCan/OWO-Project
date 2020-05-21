<?php

namespace App\Http\Controllers\System;

use App\Models\System\Property as PropertyRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        // De esta forma solo vas a mostrar siempre los primeros
        // Recomendaria un metodo aparte para obtener los datos y paginarlos
        // Datatables tiene un plugin que hace esto, solo le pasas la Query y te regresa la info para un DT.
        return view('System.Property.index', [
            "data" => PropertyRepo::limit(30)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function Store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'loc' => 'required',
            'size' => 'required',
            'status' => 'required',
            'price' => 'required'
        ]);

        if (!$validator->fails()) {
            $id = $request->input('propertyId');

            // This block is to update or create
            if (isset($id)) {
                $P = PropertyRepo::find($id);

                if (!isset($P->id)) {
                    return Response()->json(['m' => 'Property Dont Exist'], 422);
                }
            } else {
                $P = new PropertyRepo;
            }

            // You can access columns like this, and access to request data like this
            $P->location = $request->input('location');
            $P->size = $request->input('size');
            $P->status = $request->input('status');
            $P->price = $request->input('price');

            $P->save();

            if (isset($P->id)) {
                return Response()->json(['m' => 'Saved'], 200);
            }

            return Response()->json(['m' => 'Dont saved'], 422);

        } else {
            return Response()->json(['errors' => $validator->errors()], 422);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function Get(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'propertyId' => 'required|integer'
        ]);

        if (!$validator->fails()) {
            $Property = PropertyRepo::find($request->input('propertyId'));

            if (isset($Property->id)) {
                return Response()->json(['d' => $Property], 200);
            }

            return Response()->json(['m' => 'No property with ID'], 422);
        } else {
            return Response()->json(['errors' => $validator->errors()], 422);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function Delete(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'propertyId' => 'required|integer'
        ]);

        if (!$validator->fails()) {
            PropertyRepo::destroy($request->input('propertyId'));

            return Response()->json(['m' => 'Deleted Succesfully'], 200);
        } else {
            return Response()->json(['errors' => $validator->errors()], 422);
        }
    }
}
