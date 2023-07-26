<?php

namespace App\Http\Controllers\Api;

use App\Models\ClassRoom;
use Illuminate\Http\Request;

class ClassRoomController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = ClassRoom::all();

        $responseMassage = 'Claases List';

        return $this->sendResponse($classes , $responseMassage);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $data = $req->all();

        $classes= ClassRoom::create($data);

        $responseMessage = "Classroom added successfully";

        return $this->sendResponse($classes,$responseMessage);
    }

    /**
     * Display the specified resource.
     */
    public function show(ClassRoom $classRoom)
    {
        return  $classRoom;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, $id)
    {
        $claasRoom = ClassRoom::findOrFail($id);

        $data = $req->all();
        
        $claasRoom->update($data);

        $responseMessage = 'Classroom has been modified successfully';

        return $this->sendResponse($claasRoom, $responseMessage);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $claasRoom = ClassRoom::findOrFail($id);

        $claasRoom->delete();

        $responseMessage = "Classroom has been removed successfully";

        return $this->sendResponse($claasRoom,$responseMessage);

    }
}
