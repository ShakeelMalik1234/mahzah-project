<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function userRagistration()
    {
        return view('registrantion');
    }
    
    public function userWelcome()
    {
        return view('welcome');
    }

    public function userAbout()
    {
        return view('welcomeabout');
    }
    public function userForgotPassword()
    {
        return view('forgotpassword');
    }
    public function userDashboard()
    {
        return view('mahzahdashboard');
    }
    public function userStudents()
    {
        return view('student.students');
    }
    
    public function userStudentsLeads()
    {
        return view('student.leads');
    }
    public function userStudentsOwners()
    {
        return view('student.owners');
    }
    public function userStudentsAuthors()
    {
        return view('student.authors');
    }
    public function userStudentsAffiliates()
    {
        return view('student.affiliates');
    }
    public function userStudentsCostume()
    {
        return view('student.costume');
    }

    // site page
    public function userSitePage()
    {
        return view('sites.sitepage');
    }
    public function userThemeLibrary()
    {
        return view('sites.themelibrary');
    }
    
}
