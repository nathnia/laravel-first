<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

$student = [
    [
        'id' => 1,
        'name' => 'John Smith',
        'email' => 'john.smith@example.com',
        'phone_number' => '081234567890',
        'address' => '123 Main Street, New York',
    ],
    [
        'id' => 2,
        'name' => 'Emily Johnson',
        'email' => 'emily.johnson@example.com',
        'phone_number' => '081234567891',
        'address' => '45 Park Avenue, Los Angeles',
    ],
    [
        'id' => 3,
        'name' => 'Michael Brown',
        'email' => 'michael.brown@example.com',
        'phone_number' => '081234567892',
        'address' => '78 Elm Street, Chicago',
    ],
    [
        'id' => 4,
        'name' => 'Sophia Davis',
        'email' => 'sophia.davis@example.com',
        'phone_number' => '081234567893',
        'address' => '12 Oak Road, Houston',
    ],
    [
        'id' => 5,
        'name' => 'James Wilson',
        'email' => 'james.wilson@example.com',
        'phone_number' => '081234567894',
        'address' => '90 Pine Avenue, Miami',
    ],
];


        return view('student', ['title' => 'Student', 'student' => $student]);
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
