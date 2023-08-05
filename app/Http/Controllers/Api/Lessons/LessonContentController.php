<?php

namespace App\Http\Controllers\Api\Lessons;

use App\Http\Controllers\Api\ApiController;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\LessonContentRequest;
use App\Models\LessonContent;
use Illuminate\Http\Request;

class LessonContentController extends ApiController
{
    /**
     * lesson contents.
     */
    public function lessonContents($id)
    {
        $lesson_contents = LessonContent::all()->where('lesson_id',$id);

        return response()->json($lesson_contents);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $data = $req->all();

        if ($req->hasFile('document')) {
            $document = $req->file('document');
            $extension = $document->getClientOriginalExtension();
            $filename = md5($document->getClientOriginalName()) . '_' . time() . '.' . $extension;
            $documentPath = $document->storeAs('lesson-contents', $filename, 'public');
            $data['document'] = $documentPath;
        }

        $lesson= LessonContent::create($data);

        $responseMessage = "lesson content added successfully";

        return $this->sendResponse($lesson,$responseMessage);
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
        $document = $req->file('document');

        if ($document) {
            if (Storage::exists('public/', $lessonContent->document)) {
                Storage::delete('public/' . $lessonContent->document);
            }
            $extension = $document->getClientOriginalExtension();
            $filename = md5($document->getClientOriginalName()) . '_' . time() . '.' . $extension;
            $documentPath = $document->storeAs('lesson-contents', $filename, 'public');
            $data['document'] = $documentPath;
        }

        $lessonContent->update($data);
        $responseMessage = 'lesson content has been modified successfully.';

        return $this->sendResponse($lessonContent, $responseMessage);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LessonContent $lessonContent)
    {
        if (Storage::exists('public/', $lessonContent->document)) {
            Storage::delete('public/' . $lessonContent->document);
        }

        $lessonContent->delete();

        $responseMessage = 'lesson content has been removed successfully.';

        return $this->sendResponse($lessonContent, $responseMessage);
    }
}
