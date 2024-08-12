<?php

namespace App\Http\Controllers\Backend\DataRecap;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FamilySizeMemberController extends Controller
{
    public function index(Request $request)
    {
        $param = match (true) {
            str_contains(url()->current(), '/index') => null,
            str_contains(url()->current(), '/area-code') => $request->code,
            default => $request->slug,
        };

        return view('pages.backend.data-recap.family-size-member-index', [
            'title' => 'Rekap Data Jumlah Anggota',
            'param' => $param
        ]);
    }
}
