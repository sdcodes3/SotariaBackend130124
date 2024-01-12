<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Api\HelperController;
use App\Http\Controllers\Controller;
use App\Models\IndividualPlanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IndividualController extends Controller
{
    public function individualInsurance(Request $request)
    {
        $user = $request->user();
        $validate = Validator::make($request->all(), [
            'individual_type' => 'required',
            'row' => 'required_if:individual_type,family',
            'row.*.name' => 'required_if:individual_type,family|string',
            'row.*.dob' => 'required_if:individual_type,family|string',
            'previous_medical_detail' => 'required_if:previous_medical_condition,yes|string',
            'previous_medical_case_detail' => 'required_if:previous_medical_case,yes|string',
        ]);

        if($validate->fails()){
            return HelperController::sendJsonResponse(500, $validate->errors(), "Please enter valid data");
        }

        $individualPlanModel = IndividualPlanModel::where('user_id', $user->id)->first();
        if(!$individualPlanModel) {
            $individualPlanModel = new IndividualPlanModel();
            $individualPlanModel->user_id = $user->id;
        }
        $individualPlanModel->individual_type = $request->individualPlanModel;
        if($request->individualPlanModel == "family") {
            $individualPlanModel->family = json_encode($request->row);
        }
        $individualPlanModel->save();

        return HelperController::sendJsonResponse(200, $request->all(), "Please enter valid data");
    }
}
