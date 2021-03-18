<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

use App\Models\Hardware;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HardwareController extends Controller
{
    public function index()
    {
        $companies = Hardware::all();

        return JsonResource::collection($companies);
    }

    public function store(Request $request)
    {
        $hardware = Hardware::firstorcreate($request->all());

        return new JsonResource($hardware);
    }

    public function show($id)
    {
        $hardware = Hardware::find($id);

        return new JsonResource($hardware);
    }

    public function update(Request $request, $id)
    {
        $hardware = Hardware::find($id);

        $hardware->update($request->all());

        return new JsonResource($hardware);
    }

    public function destroy($id)
    {
        $hardware = Hardware::find($id);

        $hardware->delete();

        return new JsonResource($hardware);
    }
}
