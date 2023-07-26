<?php

namespace App\Http\Controllers\Api;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branches = Branch::with('classRoom')->get();

        $responseMassage = 'branches List';

        return $this->sendResponse($branches , $responseMassage);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $data = $req->all();

        $branch= Branch::create($data);

        $responseMessage = "branch added successfully";

        return $this->sendResponse($branch,$responseMessage);
    }

    /**
     * Display the specified resource.
     */
    public function show(Branch $branch)
    {
        return $branch;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, $id)
    {
        $branch = Branch::findOrFail($id);

        $data = $req->all();
        
        $branch->update($data);

        $responseMessage = 'branch has been modified successfully';

        return $this->sendResponse($branch, $responseMessage);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $branch = Branch::findOrFail($id);

        $branch->delete();

        $responseMessage = "branch has been removed successfully";

        return $this->sendResponse($branch,$responseMessage);
    }
}
