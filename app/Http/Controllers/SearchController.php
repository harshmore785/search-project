<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // try {
        //     $authUser = Auth::user();
        //     $from_date = $request->from_date ?? null;
        //     $to_date = $request->to_date ?? null;
        //     $month = $request->month ?? date('m');
        //     $monthName = Carbon::createFromDate(null, $month, 1)->format('F');
        //     $ward = $request->ward ?? null;


        //     // If from date and to date are not provided, calculate current month's from date and to date
        //     $financial_year = FinancialYear::where('id', session('financial_year'))->first();
        //     $wards = Ward::when($authUser->hasRole(['Ward HOD']), fn ($q) => $q->where('id', $authUser->ward_id))->latest()->get();


        //     if (!$from_date || !$to_date) {
        //         if ($financial_year) {
        //             if ($month <= 3) {
        //                 $year = date('Y', strtotime($financial_year->to_date));
        //             } else {
        //                 $year = date('Y', strtotime($financial_year->from_date));
        //             }
        //             $month = $month ?? 1;

        //             $from_date = Carbon::parse($year . '-' . ($month) . '-' . 01);
        //             $to_date = clone ($from_date);
        //             $from_date = (string) $from_date->startOfMonth()->toDateString();
        //             $to_date = (string) $to_date->endOfMonth()->toDateString();
        //         }
        //     }

        //     $bank_statements = FreezeAttendance::query();
        //     // Filter by ward if selected
        //     if ($ward) {
        //         if ($ward == 'custom_ward') {
        //             $bank_statements->whereNotIn('ward_id', [72]); // Exclude ward 29 and 72

        //         } else {
        //             $bank_statements->where('ward_id', $ward);
        //         }
        //     }


        //     $bank_statements = $bank_statements->when($authUser->hasRole(['Ward HOD']), function ($query) use ($authUser) {
        //         return $query->where('ward_id', $authUser->ward_id);
        //     })
        //         ->when($authUser->hasRole(['Department HOD']), function ($query) use ($authUser) {
        //             return $query->where('department_id', $authUser->department_id);
        //         })

        //         ->where('freeze_status', 1)
        //         ->where('from_date', $from_date)
        //         ->where('to_date', $to_date)
        //         ->get();

        //     return view('admin.reports.bank-statement')->with(['bank_statements' => $bank_statements, 'from_date' => $from_date, 'to_date' => $to_date, 'month' => $month, 'monthName' => $monthName, 'wards' => $wards, 'ward_id' => $ward]);
        // } catch (\Exception $e) {
        //     return response()->json([
        //         'error2' => 'An error occurred while processing the request.'
        //     ], 500);
        // }

        $res = [];
        return view('search-res')->with(['res'=>$res]);
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
