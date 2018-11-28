<?php

namespace App\Http\Controllers\AdminAuth\CMS;

use App\Http\Controllers\Controller;
use App\Page;
use Illuminate\Http\Request;
use Validator;
use Auth;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->uniqid = uniqid();
        $this->module_name = 'PAGES';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        is_permission_allowed(Auth::user()->is_admin, $this->module_name, 'views');

        $pages = Page::orderBy('ordering', 'asc')->get();

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
        is_permission_allowed(Auth::user()->is_admin, $this->module_name, 'creates');

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
        is_permission_allowed(Auth::user()->is_admin, $this->module_name, 'creates');

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'slug'  => 'required|unique:pages,slug',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $page                 = new Page;
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
        is_permission_allowed(Auth::user()->is_admin, $this->module_name, 'edits');

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
        is_permission_allowed(Auth::user()->is_admin, $this->module_name, 'edits');

        $page      = Page::find($id);
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
