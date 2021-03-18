<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DepartmentController extends Controller
{
    public function index()
    {
        if (\request('company_id')) {
            $departments = Company::find(\request('company_id'))->departments()->get();
        } else {
            $departments = Department::all();
        }

        return JsonResource::collection($departments);
    }

    public function store(Request $request)
    {
        $department = Department::firstorcreate($request->all());

        return new JsonResource($department);
    }

    public function show($id)
    {
        $department = Department::find($id);

        return new JsonResource($department);
    }

    public function update(Request $request, $id)
    {
        $department = Department::find($id);

        $department->update($request->all());

        return new JsonResource($department);
    }

    public function destroy($id)
    {
        $department = Department::find($id);

        $department->delete();

        return new JsonResource($department);
    }
}
