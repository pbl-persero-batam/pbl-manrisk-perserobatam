<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Audit;
use App\DataTables\TindakLanjutTable;
use App\Enums\Status;
use Illuminate\Support\Facades\DB;

class TindakLanjutController extends Controller
{
    public function index(TindakLanjutTable $dataTable)
    {
        return $dataTable->render('Tindak-Lanjut.tindak-lanjut');
    }

    public function show($auditId)
    {
        $data = Audit::where('id', $auditId)->with('findings', 'recomended')->first();
        return response()->json(['data' => $data, 'statusData' => Status::asOptions()], 200);
    }

    public function update(Request $request, $auditId)
    {
        DB::beginTransaction();
        try {
            $dataUpdate = ['status' => $request->status];
            if ($request->file('file_dinas')) {
                $dataUpdate['closed_file_surat'] = $request->file('file_dinas')->store('uploads', 'public');
            }
            Audit::where('id', $auditId)->update($dataUpdate);
            DB::commit();
            return response()->json(['status' => true, 'message' => 'Update status successfully'], 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['status' => false, 'message' => $th->getMessage], 500);
        }
    }
}
