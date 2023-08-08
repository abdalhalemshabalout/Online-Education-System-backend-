<?php

namespace App\Http\Controllers\Api\Users;

use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\TeacherRequest;
use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class TeacherController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers= Teacher::all();

        $responseMessage = "Teachers List";

        return $this->sendResponse($teachers,$responseMessage);
    }
    /**
     * Display a listing of the resource.
     */
    public function teachers()
    {
        $teachers= Teacher::with(['classRoom','branch'])->orderBy('created_at', 'desc')
        ->get();

        $responseMessage = "Teachers List";

        return $this->sendResponse($teachers,$responseMessage);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $data = $req->all();

        $password = Hash::make($req->password);

        $data['password'] = $password;

        $teacher= Teacher::create($data);

        $this->createUserTo($teacher->toArray(),'teacher');

        $responseMessage = "teacher added successfully";

        return $this->sendResponse($teacher,$responseMessage);
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return $teacher;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeacherRequest $req, Teacher $teacher)
    {
        $data = $req->validated();

        $teacher->update($data);

        $data = $this->filterByUser($data);

        $teacher->user()->update($data);

        $responseMessage = "The teacher has been modified successfully";

        return $this->sendResponse($teacher,$responseMessage);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $this->removeUserTo($teacher);
        $teacher->delete();

        $responseMessage = "The teacher has been removed successfully";

        return $this->sendResponse($teacher,$responseMessage);
    }
}
