<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBorrowRecordRequest;
use App\Http\Requests\UpdateBorrowRecordRequest;
use App\Borrow;

class BorrowRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Borrow::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBorrowRecordRequest $request)
    {
        $borrowRecord = Borrow::create($request->all());

        return response()->json([
            'message' => 'You have borrowed this book.'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Borrow $borrowRecord)
    {
        return $borrowRecord;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBorrowRecordRequest $request, Borrow $borrowRecord)
    {
        $borrowRecord->update($request->all());

        return response()->json([
            'message' => 'Borrow record updated.'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Borrow $borrowRecord)
    {
        $borrowRecord->delete();

        return response()->json([
            'message' => 'Record deleted!'
        ]);
    }
}
