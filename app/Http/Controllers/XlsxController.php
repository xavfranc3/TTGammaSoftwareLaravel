<?php

namespace App\Http\Controllers;

use App\Services\XlsxImportService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class XlsxController extends Controller
{
    public function uploadXlsx(Request $request)
    {
        $file = $request->file('file');
        $importer = new XlsxImportService();
        try {
            $importer->insertInDb($file);
            return response()->json('Upload to database was successful', 201);
        } catch (Exception $e) {
            return response()->json('Upload failed', 500);
        }
    }
}
