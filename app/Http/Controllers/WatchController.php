<?php

namespace App\Http\Controllers;

use App\Watch;
use Illuminate\Http\Request;
use Validator;

use App\Http\Requests;
use Laracasts\Flash\Flash;

class WatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $watches = Watch::with(['brand','model'])->get();
        return $watches;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            return Response(['error' => [
                'message' => 'Validation Error',
                'errors'  => $validator->messages()]
            ], 400);
        }

         Watch::create($request->all());
         return Response('Accepted !', 201);
    }



    /**
     * Display the specified resource.
     *
     * @param Watch $watches
     * @internal param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Watch $watches)
    {
        return $watches->load(['brand', 'model']);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Watch $watches
     * @internal param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Watch $watches)
    {

        $validator = $this->validator($request->all());

        if ($watches && $validator->fails()) {
            return Response(['error' => $validator->messages()], 502);
        }

        $watches->update($request->all());
        return Response('Updated', 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Watch $watches
     * @throws \Exception
     * @internal param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Watch $watches)
    {
        $watches->delete();
        return Response('Deleted', 200);
    }

    /**
     * @param $data
     * @return mixed
     */
    private function validator($data)
    {
        return  Validator::make($data, [
            'brand_id'  => 'required|integer',
            'model_id'  => 'required|integer',
            'movement'  => 'required|string|min:2',
            'gender'    => 'required|string|min:2',
            'price'     => 'numeric|max:50000|min:1',
            'available' => 'required|boolean',
            'case_size' => 'string',
            'w_case'    => 'string',
            'bracelet'  => 'string',
            'glass'     => 'string',
            'year'      => 'numeric|between:1985,2017',

        ],  [
            'brand_id.required' => 'The Brand field is required.',
            'model_id.required'  => 'The Model field is required.',
        ]);
    }

}
