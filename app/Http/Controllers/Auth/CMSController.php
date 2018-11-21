<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Page;
use App\Survey;
use Illuminate\Http\Request;

class CMSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($survey_id, $slug)
    {
        $page = Page::where(['slug' => $slug, 'display' => 1])->first();

        return view('pages', [
            'title'     => $page->title,
            'page'      => $page,
            'survey_id' => $survey_id,
        ]);
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
    public function store(Request $request, $survey_id, $slug)
    {
        /*$request->session()->flush();
        $data['arvind'] = [
            'age'   =>  25,
            'location'  =>  'India',
        ];

        if($request->session()->has('mydata')) {
            $request->session()->push('mydata', $data);
        }
        else {
            $request->session()->put('mydata', $data);
        }
*/
        dd($request->session()->get('mydata'));
        $survey = Survey::where('unique_id', $survey_id)->first();
        $slug_array = get_slug_array();
        /*$data['web-design'] = [
            'age'   =>  25,
            'location'  =>  'India',
        ];*/
//$request->session()->flush();
        /*if($request->session()->has('mydata')) {

            $request->session()->push('mydata', $data);
        }
        else {
            //dd("Hello");
            $request->session()->put('mydata', $data);
        }
        dd($request->session()->get('mydata'));*/
//$request->session()->flush();
        $data['arvind'] = [
            'age'   =>  25,
            'location'  =>  'India',
        ];

        if($request->session()->has('mydata')) {
            $request->session()->push('mydata', $data);
        }
        else {
            $request->session()->put('mydata', $data);
        }

        dd($request->session()->get('mydata'));
        $slug_array_flip = array_flip($slug_array);
        if($slug_array_flip==(count($slug_array_flip)-1)) {
            $survey->status = 2;
            $survey->updated_at = date('Y-m-d H:i:s');
        }
        else {
            $survey->survey = json_encode($request->session()->get('mydata'));
        }
        $survey->save();
        return redirect($survey_id . '/' . $slug_array[($slug_array_flip[$slug]+1)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
