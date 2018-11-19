<?php

namespace App\Http\Controllers\AdminAuth\CMS;

use App\Http\Controllers\Controller;
use App\Page;
use Illuminate\Http\Request;
use Validator;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->uniqid = uniqid();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::where('display', 1)->get();

        return view('admin.cms.pages.index', [
            'page_title' => 'Pages',
            'pages'      => $pages,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cms.pages.create', [
            'page_title' => 'Create',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'slug'  => 'required|unique:slug',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $page                 = new Page();
        $page->unique_id      = $this->uniqid;
        $page->title          = $request->title;
        $page->slug           = str_slug($request->slug);
        $page->banner_content = $request->banner_content;
        $page->main_content   = $request->main_content;
        $page->ordering       = $request->ordering;
        $page->display        = $request->display;
        $page->save();

        return redirect()->back()->with('success', config('constant.page') . __('messages.created'));
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
        $page = Page::findOrFail($id);

        return view('admin.cms.pages.edit', [
            'page_title' => 'Edit #' . $id,
            'page'       => $page,
            'id'         => $id,
        ]);
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
        $page      = Page::find($id)->first();
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'slug'  => 'required|unique:pages,slug,' . $page->id,
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $page->title          = $request->title;
        $page->slug           = str_slug($request->slug);
        $page->banner_content = $request->banner_content;
        $page->main_content   = $request->main_content;
        $page->ordering       = $request->ordering;
        $page->display        = $request->display;
        $page->save();

        return redirect()->back()->with('success', config('constant.page') . __('messages.updated'));
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
