<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Page;
use App\Survey;
use App\Notification;
use App\Admin;
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
        $page   = Page::where(['slug' => $slug, 'display' => 1])->first();
        $survey = Survey::where(['unique_id' => $survey_id, 'status' => 1])->first();
        if (!$survey && $slug!='thank-you') {
            return abort(404);
        }
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
        $survey = Survey::where(['unique_id' => $survey_id, 'status' => 1])->first();
        if (!$survey) {
            return abort(404);
        }
        $slug_array  = get_slug_array();
        $data[$slug] = [
            'score'   => isset($request->r1) ? $request->r1 : '',
            'comment' => isset($request->comment) ? $request->comment : '',
        ];

        if ($request->session()->has('mydata')) {
            $request->session()->put('mydata.' . $slug, $data[$slug]);
        } else {
            $request->session()->put('mydata', $data);
        }

        $slug_array_flip = array_flip($slug_array);
        $survey->survey = json_encode($request->session()->get('mydata'));
        if ($slug == $slug_array[array_last($slug_array_flip) - 1]) {
            $users = Admin::all();
            foreach($users as $user)
            {
                $notification = new Notification;
                $notification->user_id = $user->unique_id;
                $notification->survey_id = $survey->unique_id;
                $notification->save();
            }
            
            $survey->status     = 2;
            $survey->updated_at = $survey->submitted_at = date('Y-m-d H:i:s');
            $request->session()->flush();

        }
        $survey->save();
        return redirect($survey_id . '/' . $slug_array[($slug_array_flip[$slug] + 1)]);
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
