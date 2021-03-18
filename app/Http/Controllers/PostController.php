<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use App\Models\Hardware;
use App\Models\Software;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function addPost()
    {
        $companies = Company::with('departments')->get();

        $hardwares = Hardware::all();

        $required_softwares = Software::where('required', true)->get();

        $optional_softwares = Software::where('required', false)->get();

        return view('add-post', [
            'companies' => $companies,
            'hardwares' => $hardwares,
            'required_softwares' => $required_softwares,
            'optional_softwares' => $optional_softwares,
        ]);
    }

    public function createPost(Request $request)
    {
        $request->session()->reflash();

        $employee = Employee::create($request->all());

        $employee->companies()->attach([\request('company_id')]);

        $employee->departments()->attach([\request('department_id')]);

        $employee->hardwares()->attach(\request('hardware_id'));

        $employee->softwares()->attach(\request('software_id'));

        return back()->with('post_created', 'Employee has been added successfully!');
    }

    public function getPost()
    {
        $employees = Employee::orderBy('id', 'ASC')->get();

        return view('employees', compact('employees'));
    }

    public function getPostById($id)
    {
        $employee = Employee::where('id', $id)->with('companies')->with('departments')->with('hardwares')->with('softwares')->first();

        return view('single-post', compact('employee'));
    }

    public function deletePost($id)
    {
        Employee::where('id', $id)->delete();
        return back()->with('post_deleted', 'Employee has been deleted successfully!');
    }

    public function editPost($id)
    {
        $employee = Employee::find($id);
        return view('edit-post', compact('employee'));
    }

    public function updatePost(Request $request)
    {
        $employee = Employee::find($request->id);
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->position = $request->position;
        $employee->onboarding_date = $request->onboarding_date;
        $employee->supervisor = $request->supervisor;
        $employee->save();
        return back()->with('post_updated', 'Employee details have been updated successfully!');
    }
//    public function getCompany(Request $name)
//    {
////        name = 'nabo capital'
////            // Retrieve all departments in nabo capital
////       Request.send(department:[{
////           name:"Investment",
////        name:"Finance"
////       }])
//    }
}
