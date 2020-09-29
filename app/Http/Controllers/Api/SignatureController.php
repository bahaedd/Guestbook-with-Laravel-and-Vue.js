<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SignatureResource;
use Illuminate\Http\Request;
use App\Models\Signature;

class SignatureController extends Controller
{
    public function index()
    {
        $signatures = Signature::latest()
        ->ignoreFlagged()
        ->paginate(20);

        return SignatureResource::collection($signatures);
    }

    public function show(Signature $signature)
    {
        return new SignatureResource($signature);
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name'=> 'required|min:3|max:50',
            'email' => 'required|email',
            'body' => 'required|min:3'
        ]);

        $signature = Signature::create([$data]);

        return new SignatureResource($signature);
    }
}
