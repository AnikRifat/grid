<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::latest()->paginate(5);
        return view('admin.pages.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.services.add_service');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'detail' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2024',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $filePath = 'images/';
            $setImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($filePath, $setImage);
            $input['image'] = $setImage;
        }

        Services::create($input);

        return redirect()->route('serviceindex')->with('success', 'service uploaded Scueesfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Services $service)
    {
        // dd($service);
        return view('admin.pages.services.edit_service', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Services $service)
    {
        $request->validate([
            'title' => 'required',
            'detail' => 'required',
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
        $service->update($input);

        return redirect()->route('serviceindex')->with('success', 'blog updated Scueesfully.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $service)
    {
        $service->delete();

        return redirect()->route('serviceindex')->with('success', 'services Deleted Scueesfully.');
    }
}
