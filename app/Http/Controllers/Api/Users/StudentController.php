<?php

namespace App\Http\Controllers\Api\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students= Student::all();

        $responseMessage = "students List";

        return $this->sendResponse($students,$responseMessage);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $data = $req->all();

        $student= Student::create($data);

        $this->createUserTo($student->toArray(),'student');

        $responseMessage = "student added successfully";

        return $this->sendResponse($student,$responseMessage);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return $student;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $req, Student $student)
    {
        $data = $req->validated();

        $student->update($data);

        $data = $this->filterByUser($data);

        $student->user()->update($data);

        $responseMessage = "The student has been modified successfully";

        return $this->sendResponse($student,$responseMessage);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $this->removeUserTo($student);
        $student->delete();

        $responseMessage = "The student has been removed successfully";

        return $this->sendResponse($student,$responseMessage);
    }

}
