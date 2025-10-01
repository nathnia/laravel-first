<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $student = [
        //     [
        //         'name' => 'John Smith',
        //         'grade' => '11',
        //         'email' => 'john.smith@example.com',
        //         'address' => '123 Main Street, New York',
        //     ],
        //     [
        //         'name' => 'Emily Johnson',
        //         'grade' => '11',
        //         'email' => 'emily.johnson@example.com',
        //         'address' => '45 Park Avenue, Los Angeles',
        //     ],
        //     [
        //         'name' => 'Michael Brown',
        //         'grade' => '11',
        //         'email' => 'michael.brown@example.com',
        //         'address' => '78 Elm Street, Chicago',
        //     ],
        //     [
        //         'name' => 'Sophia Davis',
        //         'grade' => '11',
        //         'email' => 'sophia.davis@example.com',
        //         'address' => '12 Oak Road, Houston',
        //     ],
        //     [
        //         'name' => 'James Wilson',
        //         'grade' => '11',
        //         'email' => 'james.wilson@example.com',
        //         'address' => '90 Pine Avenue, Miami',
        //     ],
        // ];

        $students = Student::all();
        return view('student', ['title' => 'Student', 'students' => $students]);
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
