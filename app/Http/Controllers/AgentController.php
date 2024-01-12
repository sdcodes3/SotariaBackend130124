<?php

namespace App\Http\Controllers;

use App\Models\AgentModel;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    function index()
    {
        $agentdata = AgentModel::all();

        return view('content.agent.agentadd', compact('agentdata'));
    }

    function AgentCreate(Request $request)
    {
        info($request->all());
        AgentModel::create(
            [
                'agent_full_name' => $request->agent_full_name,
                'agent_email' => $request->agent_email,
                'agent_mobile_no' => $request->agent_mobile_no,
                'gender' => $request->gender,
                'joining_date' => $request->joining_date,
                'supervisor_name' => $request->supervisor_name,
                'nationalidpassport' => $request->nationalidpassport,
                'agentcommision_no_general' => $request->agentcommision_no_general,
                'agentcommision_no_life' => $request->agentcommision_no_life,
            ]
        );
        return redirect()->route('pages.agent');
    }
    function AgentEdit($id)
    {
        $agentdata = AgentModel::find($id);

        // info($agentdata);
        // Return the customer data as JSON response
        return response()->json([
            'agent' => $agentdata,
            'status' => 200
        ]);
    }
    function agentUpdate(Request $request)
    {
        info($request->all());
        info($request->agent_id);
        $agent = AgentModel::find($request->agent_id);

        if ($agent) {
            $agent->update([
                'agent_full_name' => $request->agent_full_name,
                'agent_email' => $request->agent_email,
                'agent_mobile_no' => $request->agent_mobile_no,
                'gender' => $request->gender,
                'joining_date' => $request->joining_date,
                'supervisor_name' => $request->supervisor_name,
                'nationalidpassport' => $request->nationalidpassport,
                'agentcommision_no_general' => $request->agentcommision_no_general,
                'agentcommision_no_life' => $request->agentcommision_no_life,
            ]);

            return redirect()->back()->with('success', 'Customer Update successfully');
        }

        return response()->back()->with('error', 'Customer not found');
    }
    function destoryAgent(Request $request){
        $agent_id = $request->input('delete_agent_id');
        $agent = AgentModel::find($agent_id);
        $agent->delete();
        return redirect()->back()->with('status', 'agent deleted successfully');

    }
}
