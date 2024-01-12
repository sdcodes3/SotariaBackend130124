<?php

namespace App\Http\Controllers;

use App\Models\DropdownModel;
use Illuminate\Http\Request;

class DropdownController extends Controller
{
    function index(Request $request)
    {
        $dropdowndata = json_decode(DropdownModel::all());
       
       
        return view('content.dropdowns.dropdown', compact('dropdowndata'));
    }

    function dropdownCreate(Request $request)
    {
        info($request->all());
        return redirect()->back()->with('success');
    }

    function saveDropDown(Request $request)
    {
        info($request->all());
        $key = $request->staticKey;
        $value = $request[$key];
        $oldValue = [];
        $settings = DropdownModel::where('key', $key)->first();
        if (!$settings) {
            $settings = new DropdownModel();
            $settings->key = $key;
            $oldValue = [];
        } else {
            $oldValue = json_decode($settings->value, true);
        }
        if (in_array($value, $oldValue)) {
            return back()->with("error", "This value is already in the dropdown");
        } else {
            $oldValue[] = $value;
        }
        $settings->value = json_encode($oldValue);
        $settings->save();

        $alldata = DropdownModel::all();
        info($alldata);
        return back()->with('success', "Value saved successfully");
    }
    function deleteDropDownValue(Request $request)
    {
        $key = $request->staticKey;
        $valueToDelete = $request->valueToDelete;

        $settings = DropdownModel::where('key', $key)->first();
        if (!$settings) {
            return back()->with("error", "Dropdown settings not found");
        }

        $oldValue = json_decode($settings->value, true);
        $newValue = array_diff($oldValue, [$valueToDelete]);

        $settings->value = json_encode($newValue);
        $settings->save();

        return back()->with('success', "Value deleted successfully");
    }
}
