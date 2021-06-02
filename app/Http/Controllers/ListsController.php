<?php

namespace App\Http\Controllers;

use App\Models\GradeLevel;
use App\Models\School;
use App\Models\SchoolType;
use App\Models\SchoolYear;
use Illuminate\Http\Request;

class ListsController extends Controller
{
    /**
     * Display a listing of schools. Default behavior is to return results for the current school year.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSchools($year=null)
    {
        // optionally return schools in a given year
        if ($year) {
            return School::where('school_year', '=', $year)->get();
        }

        $currentYear = $this->getCurrentSchoolYear();

        return School::where('school_year', '=', $currentYear)->get();
    }

    /**
     * Display a specific school
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getSchoolById($id)
    {
        return School::findOrFail($id)
            ->toArray();
    }


    public function getSchoolYears()
    {
        return SchoolYear::select('school_year', 'display')
            ->orderBy('school_year')
            ->get();
    }

    public function getGradeLevels($year)
    {
        return GradeLevel::select('id', 'grade_level_name')
            ->where('school_year', '=', $year)
            ->orderBy('display_order')
            ->get();
    }

    public function getSchoolTypes($year)
    {
        return SchoolType::select('id', 'school_type_name')
                         ->where('school_year', '=', $year)
                         ->orderBy('id')
                         ->get();
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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



    private function getCurrentSchoolYear()
    {
        $currentYear = SchoolYear::where('current_ind', '=', 1)
                  ->firstOrFail();
        return $currentYear->school_year;
    }
}
