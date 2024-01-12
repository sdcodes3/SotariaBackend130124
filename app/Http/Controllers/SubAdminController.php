<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\SubadminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SubAdminController extends Controller
{
    function index()
    {
        $subadmindetails = Admin::all();
        return view('content.subadmin.subadmin', compact('subadmindetails'));
    }
    function SubAdminCreate(Request $request)
    {
        info($request->all());
        Admin::create([
            'name' => $request->full_name,
            'mobile_no' => $request->mobile_no,
            'email' => $request->admin_id,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'national_id' => $request->national_id,

        ]);
        return redirect()->route('pages.subadmin');
    }

    function SubAdminEdit($id)
    {
        $admindata = Admin::find($id);
        info($admindata);
        return response()->json([
            'subadmin' => $admindata,
            'status' => 200
        ]);
    }

    public function subadminUpdate(Request $request)
    {
        $subadmin = Admin::find($request->subadmin_id);

        if ($subadmin) {
            $subadmin->update([
                'name' => $request->full_name,
                'mobile_no' => $request->mobile_no,
                'email' => $request->admin_id,
                'password' => Hash::make($request->password),
                'gender' => $request->gender,
                'national_id' => $request->national_id,
            ]);
            return redirect()->back()->with('success', 'subadmin Update successfully');
        }

        return response()->back()->with('error', 'subadmin not found');
    }

    function destorySubadmin(Request $request)
    {
        $subadmin_id = $request->input('delete_subadmin_id');
        $subadmin = Admin::find($subadmin_id);
        info($subadmin);
        $subadmin->delete();

        return redirect()->back()->with('status', 'Subadmin deleted successfully');
    }
}
