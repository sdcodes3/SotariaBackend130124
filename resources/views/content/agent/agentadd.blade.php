@extends('layouts.mainlayout')
@section('style')
<link rel="stylesheet" href="{{asset('css/agent.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<style>
    input {
        border: none;
        font-family: 'Nunito';
        width: 100%;
        height: 2.5rem;
        font-weight: 600;
    }

    input:focus-visible {
        outline: none;
    }

    .input-group {
        font-weight: 600;
        font-family: 'Nunito';
    }

    .shadow1 {
        box-shadow: 4px 4px 13px -3px #00000040;
    }
</style>
@endsection

@section('content')
<main class="flex-grow-1 pt-5">
    <div class="container-fluid">
        <div class="header d-flex justify-content-between p-3 py-2 align-items-center">
            <div class="text-white group-title fw-bold">Agents</div>
            <!-- <div class="py-1">
                <img src="{{asset('img/icon-add.png')}}" alt="">
            </div> -->
            <button data-bs-toggle="modal" data-bs-target="#addCustomer" class="btn pe-0">
                <img src="{{asset('img/icon-add.png')}}" alt="">
            </button>
        </div>
        <div class="body bg-white py-4 px-4 d-flex flex-column gap-3">
            <table id="example" class="table table-striped " style="width:100%">
                <thead>
                    <tr>

                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile No.</th>
                        <th>Joining Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($agentdata as $key=>$agentsdata)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{$agentsdata->agent_full_name}}</td>
                        <td>{{$agentsdata->agent_email}}</td>
                        <td>{{$agentsdata->agent_mobile_no}}</td>
                        <td>{{$agentsdata->joining_date}}</td>
                        <td>
                            <div class="d-flex gap-3 justify-content-evenly align-items-center px-2">
                                <a href="" class="" style="color: #939EAA !important;">More</a>
                                <button c class="btn p-0 m-0 editbtn" value="{{$agentsdata->id}}" data-bs-toggle="modal" data-bs-target="#">
                                    <img src="{{asset('img/icon-edit.png')}}" alt="">
                                </button>
                                <button class="btn p-0 m-0 deletebtn" value="{{$agentsdata->id}}">
                                    <img src="{{asset('img/icon-delete.png')}}" alt="">
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
<!-- START ADD AGENT -->
<div class="modal fade " id="addCustomer" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header text-white " style="background-color: #104E9E;">
                <h1 class="modal-title fs-5"> Add Agent</h1>
                <button data-bs-dismiss="modal" class="btn">
                    <img src="{{asset('img/icon-close.svg')}}" alt="">
                </button>
            </div>

            <form action="{{route('agent.create')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row p-3" style="color: #92959A;">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6 pt-2">
                                    <div> Full Name</div>
                                    <div class="shadow1 p-2" style="padding-bottom: 2.5rem;">
                                        <input type="text" name="agent_full_name" style="border: none;" required>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 pt-2">
                                    <div> Email ID </div>
                                    <div class="shadow1  p-2 bg-body ">
                                        <input type="email" name="agent_email" style="border: none;" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6 pt-4">
                                    <div> Mobile No. </div>
                                    <div class="input-group shadow1 p-2">
                                        <span class="input-group-text bg-body rounded-0 opacity-25" style="border-top:white; border-left: white; border-bottom:white ;"> + 91</span>
                                        <input type="number" class="form-control" name="agent_mobile_no" style="border-top:white; border-right: white; border-bottom:white; outline: none;" required>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 pt-4 d-flex flex-column">
                                    <div> Gender </div>
                                    <select name="gender" class="form-select rounded-0 flex-grow-1 border-0 shadow1" style="height: 3.5rem;" required>
                                        <option value="" disabled selected hidden>--Select--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6 pt-4">
                                    <div>Joining Date </div>
                                    <div class="shadow1  p-2 ">
                                        <input type="date" name="joining_date" id="jtime" style="border: none; font-weight: 330;" required>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 pt-4 d-flex flex-column">
                                    <div> Supervisor's Name </div>
                                    <select class="form-select rounded-0 flex-grow-1 border-0 shadow1" name="supervisor_name" style="height: 3.5rem;" required>
                                        <option value="" disabled selected hidden>--Select--</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6 pt-4">
                                    <div> National ID /Passport No. </div>
                                    <div class="shadow1  p-2 ">
                                        <input type="tel" name="nationalidpassport" id="jtime" style="border: none;" required>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 pt-4">
                                    <div> Agent Commission/General </div>
                                    <div class="shadow1 p-2">
                                        <input type="text" name="agentcommision_no_general" class="form-control" style="border: none;" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-12 col-lg-6 pt-4">
                                    <div> Agent Commission/life </div>
                                    <div class="shadow1 p-2">
                                        <input type="text" name="agentcommision_no_life" class="form-control" style="border: none;" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row pt-5">
                                <div class="col-12 col-lg-9"></div>
                                <div class="col-12 col-lg-3">
                                    <div class="pt-4 " style="border: none;">
                                        <button data-bs-target="#notif" data-bs-toggle="" type="submit" class="btn rounded-1 w-100 text-white opacity-50 p-2" style="background-color: #EF7C00;">ADD </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END ADD AGENT -->

<!-- START Agent Edit Modal -->
<div class="modal fade " id="editModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header text-white " style="background-color: #104E9E;">
                <h1 class="modal-title fs-5"> Edit Agent</h1>
                <button data-bs-dismiss="modal" class="btn">
                    <img src="{{asset('img/icon-close.svg')}}" alt="">
                </button>
            </div>

            <form action="{{route('agent.update')}}" method="post">
                @csrf
                <input type="hidden" name="agent_id" id="agent_id" value="">
                <div class="modal-body">
                    <div class="row p-3" style="color: #92959A;">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6 pt-2">
                                    <div> Full Name</div>
                                    <div class="shadow1 p-2" style="padding-bottom: 2.5rem;">
                                        <input type="text" id="agent_full_name" name="agent_full_name" style="border: none;">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 pt-2">
                                    <div> Email ID </div>
                                    <div class="shadow1  p-2 bg-body ">
                                        <input type="email" id="agent_email" name="agent_email" style="border: none;">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6 pt-4">
                                    <div> Mobile No. </div>
                                    <div class="input-group shadow1 p-2">
                                        <span class="input-group-text bg-body rounded-0 opacity-25" style="border-top:white; border-left: white; border-bottom:white ;"> + 91</span>
                                        <input type="number" class="form-control" id="agent_mobile_no" name="agent_mobile_no" style="border-top:white; border-right: white; border-bottom:white; outline: none;">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 pt-4 d-flex flex-column">
                                    <div> Gender </div>
                                    <select name="gender" id="gender" class="form-select rounded-0 flex-grow-1 border-0 shadow1" style="height: 3.5rem;">
                                        <option value="s" selected> --Select-- </option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6 pt-4">
                                    <div>Joining Date </div>
                                    <div class="shadow1  p-2 ">
                                        <input type="date" name="joining_date" id="joining_date" style="border: none; font-weight: 330;">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 pt-4 d-flex flex-column">
                                    <div> Supervisor's Name </div>
                                    <select class="form-select rounded-0 flex-grow-1 border-0 shadow1" id="supervisor_name" name="supervisor_name" style="height: 3.5rem;">
                                        <option value="s" selected>--Select--</option>
                                        <option value="Supervisor 1">Supervisor 1</option>
                                        <option value="Supervisor 2">Supervisor 2</option>
                                        <option value="Supervisor 3">Supervisor 3</option>
                                    </select>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6 pt-4">
                                    <div> National ID /Passport No. </div>
                                    <div class="shadow1  p-2 ">
                                        <input type="tel" name="nationalidpassport" id="nationalidpassport" style="border: none;">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 pt-4">
                                    <div> Agent Commission/General </div>
                                    <div class="shadow1 p-2">
                                        <input type="text" id="agentcommision_no_general" name="agentcommision_no_general" class="form-control" style="border: none;">
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-12 col-lg-6 pt-4">
                                    <div> Agent Commission/life </div>
                                    <div class="shadow1 p-2">
                                        <input type="text" name="agentcommision_no_life" id="agentcommision_no_life" class="form-control" style="border: none;">
                                    </div>
                                </div>
                            </div>

                            <div class="row pt-5">
                                <div class="col-12 col-lg-9"></div>
                                <div class="col-12 col-lg-3">
                                    <div class="pt-4 " style="border: none;">
                                        <button data-bs-target="#notif" data-bs-toggle="modal" type="submit" class="btn rounded-1 w-100 text-white opacity-50 p-2" style="background-color: #EF7C00;">UPDATE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END Agent Edit Modal -->

<!-- START delete AGENT -->
<div class="modal fade " id="DeleteModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header text-white " style="background-color: #104E9E;">
                <h1 class="modal-title fs-5"> Add Agent</h1>
                <button data-bs-dismiss="modal" class="btn">
                    <img src="{{asset('img/icon-close.svg')}}" alt="">
                </button>
            </div>

            <form action="{{route('destoryAgent')}}" method="post">
                @csrf
                @method('delete')
                <div class="modal-body">
                    <div class="row p-3" style="color: #92959A;">
                        <div class="container">
                            <div class="row pt-5">
                                <div class="col-12 col-lg-9">
                                    <h4>Confirm to Delete Data ?</h4>
                                    <input type="hidden" id="deleteing_id" name="delete_agent_id">
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="pt-4 " style="border: none;">
                                        <button data-bs-target="#notif" data-bs-toggle="modal" type="submit" class="btn rounded-1 w-100 text-white opacity-50 p-2" style="background-color: #EF7C00;">YES DELETE </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END ADD AGENT -->
@endsection

@section('script')
<script>
    // delete
    $(document).on('click', '.deletebtn', function() {
        var agent_id = $(this).val();
        $('#DeleteModal').modal('show');
        $('#deleteing_id').val(agent_id);
    });

    $(document).ready(function() {
        $(document).on('click', '.editbtn', function() {
            var agent_id = $(this).val();

            $('#editModal').modal('show');
            // Rest of your code

            $.ajax({
                type: "GET",
                url: "{{ route('agent.edit', '') }}/" + agent_id,
                dataType: "json",
                success: function(data) {
                    console.log(data);
                    var agent = data.agent;
                    $('#agent_id').val(agent.id);
                    $('#agent_full_name').val(agent.agent_full_name);
                    $('#agent_email').val(agent.agent_email);
                    $('#agent_mobile_no').val(agent.agent_mobile_no);
                    $('#gender').val(agent.gender);
                    $('#joining_date').val(agent.joining_date);
                    $('#supervisor_name').val(agent.supervisor_name);
                    $('#nationalidpassport').val(agent.nationalidpassport);
                    $('#housenoandbuildingname').val(agent.housenoandbuildingname);
                    $('#agentcommision_no_general').val(agent.agentcommision_no_general);
                    $('#agentcommision_no_life').val(agent.agentcommision_no_life);

                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
@endsection