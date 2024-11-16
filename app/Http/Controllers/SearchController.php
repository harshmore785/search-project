<?php

namespace App\Http\Controllers;
use App\Models\ElectionData;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $fname = $request->fname ?? null;
            $lname = $request->lname ?? null;
            $epic_number = $request->epic_number ?? null;
            $part_no = $request->part_no ?? null;
            $part_serial_no = $request->part_serial_no ?? null;


            $res = ElectionData::query()
                    ->when($fname, function ($query, $fname) {
                        return $query->where('fname', $fname);
                    })
                    ->when($lname, function ($query, $lname) {
                        return $query->where('lname', $lname);
                    })
                    ->when($epic_number, function ($query, $epic_number) {
                        return $query->where('epic_number', $epic_number);
                    })
                    ->when($part_no, function ($query, $part_no) {
                        return $query->where('part_no', $part_no);
                    })
                    ->when($part_serial_no, function ($query, $part_serial_no) {
                        return $query->where('part_serial_no', $part_serial_no);
                    })
                    ->get();


            return view('search-res')->with(['result' => $res]);
        } catch (\Exception $e) {
            return response()->json([
                'error2' => 'An error occurred while processing the request.'
            ], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
