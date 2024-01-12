<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CustomerModel;
use App\Models\HomeInsurancePlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    function getCustomers(Request $request)
    {
        return HelperController::sendJsonResponse(200, CustomerModel::all(), "Customer get successfully");
    }
    function getCustomer(Request $request, $id)
    {
        $customer =  CustomerModel::find($id);
        return HelperController::sendJsonResponse(200, $customer, $customer ? "Customer get successfully" : "Customer not found");
    }

    function createCustomer(Request $request)
    {
        $validation = Validator::make($request->all(), [
            "full_name" => 'required',
            "email" => 'required|email',
            "mobile_no" => 'required',
        ]);
        if ($validation->fails()) {
            return HelperController::sendJsonResponse(400, $validation->errors(), $validation->errors()->first());
        }
        $customer = new CustomerModel();
        $customer->full_name = $request->full_name;
        $customer->email = $request->email;
        $customer->mobile_no = $request->mobile_no;
        $customer->save();
        $token = $customer->createToken('api_token');
        $customer['token'] = $token->plainTextToken;
        return HelperController::sendJsonResponse(200, $customer, "Customer create successfully");
    }

    function updateCustomer(Request $request, $id)
    {
        $customer = CustomerModel::find($id);
        if (!$customer) {
            return HelperController::sendJsonResponse(500, null, "Customer not found");
        }
        $validation = Validator::make($request->all(), [
            "email" => 'email',
        ]);
        if ($validation->fails()) {
            return HelperController::sendJsonResponse(400, $validation->errors(), $validation->errors()->first());
        }
        $customer = new CustomerModel();
        (isset($request->full_name) && $request->full_name) && $customer->full_name = $request->full_name;
        (isset($request->email) && $request->email) && $customer->email;
        (isset($request->mobile_no) && $request->mobile_no) && $customer->mobile_no;
        $customer->save();
        $token = $customer->createToken('api_token');
        $customer['token'] = $token->plainTextToken;
        return HelperController::sendJsonResponse(200, $customer, "Customer update successfully");
    }

    public function  homeInsurance(Request $request) {
        $arr = [];
        if(!isset($request->user()->id)) {
            return HelperController::sendJsonResponse(401, null, "Customer not found");
        }
        if($request->has('fname') && $request->fname) {
            $arr['fname'] = $request->fname;
        }
        if($request->has('nationality') && $request->nationality) {
            $arr['nationality'] = $request->nationality;
        }
        if($request->has('national_id') && $request->national_id) {
            $arr['national_id'] = $request->national_id;
        }
        if($request->has('coverage') && $request->coverage) {
            $arr['coverage'] = $request->coverage;
        }
        if($request->has('category') && $request->category) {
            $arr['category'] = $request->category;
        }
        if($request->has('sizeofvilla') && $request->sizeofvilla) {
            $arr['sizeofvilla'] = $request->sizeofvilla;
        }
        if($request->has('location') && $request->location) {
            $arr['location'] = $request->location;
        }
        if($request->has('nooffloors') && $request->nooffloors) {
            $arr['nooffloors'] = $request->nooffloors;
        }
        if($request->has('noofrooms') && $request->noofrooms) {
            $arr['noofrooms'] = $request->noofrooms;
        }
        if($request->has('homecategory') && $request->homecategory) {
            $arr['homecategory'] = $request->homecategory;
        }
        if($request->has('effectivedate') && $request->effectivedate) {
            $arr['effectivedate'] = $request->effectivedate;
        }
        if($request->has('expirydate') && $request->expirydate) {
            $arr['expirydate'] = $request->expirydate;
        }
        if($request->has('limit') && $request->limit) {
            $arr['limit'] = $request->limit;
        }
        if($request->has('BuildingNo') && $request->BuildingNo) {
            $arr['BuildingNo'] = $request->BuildingNo;
        }
        if($request->has('BlockNo') && $request->BlockNo) {
            $arr['BlockNo'] = $request->BlockNo;
        }
        if($request->has('PlaateNo') && $request->PlaateNo) {
            $arr['PlaateNo'] = $request->PlaateNo;
        }
        if($request->has('PlotNo') && $request->PlotNo) {
            $arr['PlotNo'] = $request->PlotNo;
        }
        if($request->has('NoResident') && $request->NoResident) {
            $arr['NoResident'] = $request->NoResident;
        }
        if(count($arr) > 0) { 
            $homeInsturenPlan = HomeInsurancePlan::where('customer_id', $request->user()->id)->first();
            if($homeInsturenPlan) {
                $homeInsturenPlan->update($arr);
                return HelperController::sendJsonResponse(200, $homeInsturenPlan, "Data save successfully");
            } else {
                $arr['customer_id'] = $request->user()->id;
                $homeInsturenPlan = HomeInsurancePlan::create($arr);
                return HelperController::sendJsonResponse(200, $homeInsturenPlan, "Data save successfully");
            }
        } else {
            return HelperController::sendJsonResponse(500, null, "Input is not valid");
        }
    }

    public function  homeInsurancePlan(Request $request) {}
}
