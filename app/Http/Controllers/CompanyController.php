<?php

namespace App\Http\Controllers;

use App\Models\company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function api(Request $request)
    {
        $pageSize = $request->size;
        $pageNumber = $request->page;
        $escapeItems = ($pageNumber*$pageSize)-$pageSize;
        $baseUrl = 'https://api.spacexdata.com/v3/'.$request->item.'?limit='.$request->size.'&offset='.$escapeItems;
        $response = Http::get($baseUrl);
        $data = json_decode($response->getBody());
        echo json_encode($data,JSON_PRETTY_PRINT);
    }

    public function q3(Request $request)
    {
        $input = explode(",",$request->key);
        //$input = array(3,7,4,3,3,4);
        $result = $data = $outputArray =array();
        $counter = 0;
        foreach($input as $key => $value){
            foreach($input as $key1 => $value1){
                if($key !== $key1){
                    if($value == $value1){
                        $data = ($key > $key1) ? $key.$key1 : $key1.$key;
                       $result[$counter] =  $data;
                       $counter++;
                    }
                }
            } 
        }  
        foreach($result as $inputArrayItem) {
            foreach($outputArray as $outputArrayItem) {
                if($inputArrayItem == $outputArrayItem) {
                    continue 2;
                }
            }
            $outputArray[] = $inputArrayItem;
        }
       return $outputArray;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(company $company)
    {
        //
    }
}
