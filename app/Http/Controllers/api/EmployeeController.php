<?php
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeController extends Controller
{
    public function index()
    {
        $companies = Employee::all();

        return JsonResource::collection($companies);
    }

    public function store(Request $request)
    {
        $employee = Employee::firstorcreate($request->all());

        return new JsonResource($employee);
    }

    public function show($id)
    {
        $employee = Employee::find($id);

        return new JsonResource($employee);
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);

        $employee->update($request->all());

        return new JsonResource($employee);
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);

        $employee->delete();

        return new JsonResource($employee);
    }
}
