<?php

namespace App\Http\Controllers\Api\Lessons;

use App\Http\Controllers\Api\ApiController;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Http\Request;

class LessonController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lessons= Lesson::all();

        $responseMessage = "lessons List";

        return $this->sendResponse($lessons,$responseMessage);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $data = $req->all();

        $lesson= Lesson::create($data);

        $responseMessage = "lesson added successfully";

        return $this->sendResponse($lesson,$responseMessage);
    }

    /**
     * Display the specified resource.
     */
    public function show(Lesson $lesson)
    {
        return  $lesson;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, Lesson $lesson)
    {
        $data = $req->all();
        
        $lesson->update($data);

        $responseMessage = 'lesson has been modified successfully';

        return $this->sendResponse($lesson, $responseMessage);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lesson $lesson)
    {
        $lesson->delete();

        $responseMessage = "lesson has been removed successfully";

        return $this->sendResponse($lesson,$responseMessage);
    }

    /**
     * Lessons By User Id.
     */
    public function LessonsByUserId()
    {
        $branchId =$this->branchId();
        $lessons = Lesson::where('branch_id',[$branchId])->select()->get();

        return $lessons;
    }
}
