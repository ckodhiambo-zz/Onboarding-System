<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();

        return JsonResource::collection($companies);
    }

    public function store(Request $request)
    {
        $company = Company::firstorcreate($request->all());

        return new JsonResource($company);
    }

    public function show($id)
    {
        $company = Company::find($id);

        return new JsonResource($company);
    }

    public function update(Request $request, $id)
    {
        $company = Company::find($id);

        $company->update($request->all());

        return new JsonResource($company);
    }

    public function destroy($id)
    {
        $company = Company::find($id);

        $company->delete();

        return new JsonResource($company);
    }
}
