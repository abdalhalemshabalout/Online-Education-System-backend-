<?php

namespace App\Http\Controllers\Api\Users;

use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\ManagerRequest;
use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManagerController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $managers= Manager::all();

        $responseMessage = "Mangers List";

        return $this->sendResponse($managers,$responseMessage);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ManagerRequest $req)
    {
        $data = $req->all();

        $manager= Manager::create($data);

        $this->createUserTo($manager->toArray(),'manager');

        $responseMessage = "Manager added successfully";

        return $this->sendResponse($manager,$responseMessage);
    }

    /**
     * Display the specified resource.
     */
    public function show(Manager $manager)
    {
        return $manager;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ManagerRequest $req, Manager $manager)
    {

        $data = $req->validated();

        $manager->update($data);

        $data = $this->filterByUser($data);

        $manager->user()->update($data);

        $responseMessage = "The manager has been modified successfully";

        return $this->sendResponse($manager,$responseMessage);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Manager $manager)
    {
        
        $this->removeUserTo($manager);
        $manager->delete();

        $responseMessage = "The manager has been removed successfully";

        return $this->sendResponse($manager,$responseMessage);

    }
}
