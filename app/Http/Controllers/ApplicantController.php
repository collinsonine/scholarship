<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreApplicantRequest;
use App\Http\Requests\UpdateApplicantRequest;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('applicants.apply');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $validated = $request->validate([
        //     'name' => ['required'],
        //     'email' => ['required', 'unique:applicants'],
        //     'phone' => ['required', 'min:11', 'unique:applicants'],
        //     'address' => ['required'],
        //     'dob' => ['required'],
        // ]);
        $applicant = new Applicant();
        $uid = DB::table('applicants')->latest()->first();
        if ($uid == null) {
            $ucode = 1;
        }else {
            $ucode = $uid->id + 1;
        }
        $applicant->name = $request->input('name');
        $applicant->email = $request->input('email');
        $applicant->phone = $request->input('phone');
        $applicant->dob = $request->input('dob');
        $applicant->address = $request->input('address');
        $applicant->applicant_id = 'APP/2022/'.$ucode;
        $applicant->save();

        return redirect()->back()
        ->with('success', 'Application Completed Successfully, Your Applicantin ID is APP/2022/'.$ucode);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreApplicantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApplicantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $applicant = DB::table('applicants')->where('applicant_id', $request->input('applicant_id'))->first();
        if ($applicant == null) {
            return redirect()->back()
            ->with('error', 'Sorry, Apllicant does not exist');
        }else {
            return view('applicants.applicant', compact('applicant'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateApplicantRequest  $request
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApplicantRequest $request, Applicant $applicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $applicant)
    {
        //
    }
}
