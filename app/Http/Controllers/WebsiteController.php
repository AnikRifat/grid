<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.pages.website.content', ['content' => $this->content]);
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
        //
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
     * @param  \App\Models\Website  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Website $content)
    {
        $request->validate([
            'inputSlogan' => 'required',
            'inputAbout' => 'required',
            'inputPhone' => 'required',
            'inputAddress' => 'required',
            'inputFacebook' => 'required',
            'inputTwitter' => 'required',
            'inputLinkedin' => 'required',
            'inputYoutube' => 'required',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $filePath = 'images/';
            $setImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($filePath, $setImage);
            $input['image'] = $setImage;
        } else {
            unset($input['image']);
        }
        $content->update($input);

        return redirect()->route('index')->with('success', 'Settings updated Scueesfully.');
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
