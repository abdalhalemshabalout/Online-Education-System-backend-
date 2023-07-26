<?php

namespace App\Http\Controllers\Api;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announcements = Announcement::all();

        $responseMessage = 'Announcements List';
        
        return $this->sendResponse($announcements , $responseMessage);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $data = $req->all();
        
        $announcement = Announcement::create($data);

        $sendResponse = 'Announcement Added Successfully';

        return $this->sendResponse($announcement, $sendResponse);
    }

    /**
     * Display the specified resource.
     */
    public function show(Announcement $announcement)
    {
        return $announcement;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, Announcement $announcement)
    {
        $data = $req->all();
        
        $announcement->update($data);

        $responseMessage = 'Announcement has been modified successfully';

        return $this->sendResponse($announcement, $responseMessage);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcement $announcement)
    {
        $announcement->delete();

        $responseMessage = 'Announcement has been removed successfully';

        return $this->sendResponse($announcement, $responseMessage);
    }
}
