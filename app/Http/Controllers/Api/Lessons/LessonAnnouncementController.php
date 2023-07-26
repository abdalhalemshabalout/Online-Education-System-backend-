<?php

namespace App\Http\Controllers\Api\Lessons;

use App\Http\Controllers\Api\ApiController;
use App\Models\LessonAnnouncement;
use Illuminate\Http\Request;

class LessonAnnouncementController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announcements = LessonAnnouncement::all();

        $responseMessage = 'Lesson announcements List';
        
        return $this->sendResponse($announcements , $responseMessage);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $data = $req->all();
        
        $announcement = LessonAnnouncement::create($data);

        $sendResponse = 'Lesson announcement Added Successfully';

        return $this->sendResponse($announcement, $sendResponse);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $announcement = LessonAnnouncement::findOrFail($id);

        return $announcement;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, $id)
    {
        $announcement = LessonAnnouncement::findOrFail($id);

        $data = $req->all();
        
        $announcement->update($data);

        $responseMessage = 'Lesson announcement has been modified successfully';

        return $this->sendResponse($announcement, $responseMessage);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $announcement = LessonAnnouncement::findOrFail($id);

        $announcement->delete();

        $responseMessage = 'Lesson announcement has been removed successfully';

        return $this->sendResponse($announcement, $responseMessage);
    }
}
