<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Software;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SoftwareController extends Controller
{
    public function index()
    {
        $companies = Software::all();

        return JsonResource::collection($companies);
    }

    public function store(Request $request)
    {
        $software = Software::firstorcreate($request->all());

        return new JsonResource($software);
    }

    public function show($id)
    {
        $software = Software::find($id);

        return new JsonResource($software);
    }

    public function update(Request $request, $id)
    {
        $software = Software::find($id);

        $software->update($request->all());

        return new JsonResource($software);
    }

    public function destroy($id)
    {
        $software = Software::find($id);

        $software->delete();

        return new JsonResource($software);
    }
}
