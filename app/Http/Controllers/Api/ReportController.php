<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Signature;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function update(Signature $signature)
    {
        $signature->flag();

        return $signature;
    }
}
