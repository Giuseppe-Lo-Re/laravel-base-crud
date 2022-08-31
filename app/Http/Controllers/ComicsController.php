<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comics;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics_array = Comics::all();

        $data = [
            'comics_array' => $comics_array
        ];

        return view('comics-series.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics-series.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->getValidationRules());

        $form_data = $request->all();
        $new_comics = new Comics();
        $new_comics->fill($form_data);
        $new_comics->save();

        return redirect()->route('comics-series.store', $new_comics->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics = Comics::findOrFail($id);

        $data = [
            'comics' => $comics
        ];
        
        return view('comics-series.show',  $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comics = Comics::findOrFail($id);

        $data = [
            'comics' => $comics
        ];

        return view('comics-series.edit', $data);
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
        $form_data = $request->all();
        
        $comics_to_update = Comics::findOrFail($id);
        $comics_to_update->update($form_data);

        return redirect()->route('comics-series.show', ['comics_series'=> $comics_to_update->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comics_to_delete = Comics::findOrFail($id);
        $comics_to_delete->delete();

        return redirect()->route('comics-series.index');
    }

    protected function getValidationRules() {
        return [
            'title' => 'required|max:50',
            'description' => 'required|max:60000',
            'thumb' => 'required|max:60000',
            'price' => 'required|max:10',
            'series' => 'required|max:50',
            'sale_date' => 'required|max:10',
            'type' => 'required|max:20'
        ];
    }
}
