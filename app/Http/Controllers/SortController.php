<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSortRequest;
use App\Http\Requests\UpdateSortRequest;
use App\Models\Sort;

class SortController extends Controller
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
     * @param  \App\Http\Requests\StoreSortRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSortRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sort  $sort
     * @return \Illuminate\Http\Response
     */
    public function show(Sort $sort)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sort  $sort
     * @return \Illuminate\Http\Response
     */
    public function edit(Sort $sort)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSortRequest  $request
     * @param  \App\Models\Sort  $sort
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSortRequest $request, Sort $sort)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sort  $sort
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sort $sort)
    {
        //
    }
}
