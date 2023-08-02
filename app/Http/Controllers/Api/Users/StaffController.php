<?php

namespace App\Http\Controllers\Api\Users;

use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\StaffRequest;
use App\Models\Staff;
use Illuminate\Support\Facades\Hash;

class StaffController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staff= Staff::all();

        $responseMessage = "Staff List";

        return $this->sendResponse($staff,$responseMessage);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StaffRequest $req)
    {
        $data = $req->all();

        $password = Hash::make($req->password);
        
        $data['password'] = $password;
        
        $staff= Staff::create($data);

        $this->createUserTo($staff->toArray(),'staff');

        $responseMessage = "Staff added successfully";

        return $this->sendResponse($staff,$responseMessage);
  
    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
        return $staff;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StaffRequest $req, Staff $staff)
    {
        $data = $req->validated();

        $staff->update($data);

        $data = $this->filterByUser($data);

        $staff->user()->update($data);

        $responseMessage = "The staff has been modified successfully";

        return $this->sendResponse($staff,$responseMessage);
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $staff)
    {
        $this->removeUserTo($staff);
        $staff->delete();

        $responseMessage = "The staff has been removed successfully";

        return $this->sendResponse($staff,$responseMessage);
    }
}
