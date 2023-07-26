<?php

namespace App\Http\Controllers\Api\LessonContent;

use App\Http\Controllers\Api\ApiController;
use App\Models\LessonContent;
use Illuminate\Http\Request;

class LessonContentController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $data = $req->all();

        $lessonContent= LessonContent::create($data);
 
        $responseMessage = "lesson content added successfully";

        return $this->sendResponse($lessonContent,$responseMessage);
    }

    /**
     * Display the specified resource.
     */
    public function show(LessonContent $lessonContent)
    {
        return $lessonContent;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, LessonContent $lessonContent)
    {
        $data = $req->all();
        
        $lessonContent->update($data);

        $responseMessage = 'lesson content has been modified successfully';

        return $this->sendResponse($lessonContent, $responseMessage);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LessonContent $lessonContent)
    {
        $lessonContent->delete();

        $responseMessage = "lesson content has been removed successfully";

        return $this->sendResponse($lessonContent,$responseMessage);
    }
}
