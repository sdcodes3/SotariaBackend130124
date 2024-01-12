@extends('layouts.mainlayout')
@section('style')
<link rel="stylesheet" href="{{asset('css/agent.css')}}">
<style>
    .tox-statusbar {
        display: none !important;
    }
</style>
@endsection

@section('content')
<div class="dashboard">
    <main class="flex-grow-1 py-5 px-4">
        <form action="{{route('privacy.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="container-fluid d-flex flex-column gap-4 p-0">
                <!-- Select Company & Business -->
                <div class="bg-white p-4 pb-5 row g-0 gap-3 br-15">
                    <div class="col-12 col-md d-flex flex-column gap-2">
                        <div class="">Company Name</div>
                        <div class="shadow d-flex align-items-center px-3 py-2 gap-3 position-relative">
                            <select name="company_name" class="form-control border-0" id="s1">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">Lorem</option>
                            </select>
                            <div class="position-absolute" style="right: 1rem;"><img src="img/icon-select.png" alt=""></div>
                        </div>
                    </div>
                    <div class="col-12 col-md d-flex flex-column gap-2">
                        <div class="">Line of Business</div>
                        <div class="shadow d-flex align-items-center px-3 py-2 gap-3">
                            <select name="line_of_bussiness" class="form-control border-0">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">Lorem</option>
                            </select>
                            <div><img src="img/icon-select.png" alt=""></div>
                        </div>
                    </div>
                </div>
                <!-- Formatable area -->
                <div class="bg-white br-15">
                    <div class="p-4">
                        <img src="img/icon-formats.png" alt="" class="img-fluid">
                    </div>
                    <div class="border"></div>
                    <div class="p-4">
                        <!-- <textarea name="privacy_policy_content" rows="10" class="border-0 w-100 outline-0" style="resize: none; font-size: 1.5rem;">Write your privacy policy Details here....</textarea> -->


                        <textarea rows="10" name="privacy_policy_content" class="border-0 w-100 outline-0" style="resize: none; font-size: 1.5rem;">Write your privacy policy Details here....</textarea>
                    </div>
                </div>
                <!-- Upload area -->
                <div class="bg-white up-area d-flex flex-column align-items-center">
                    <a class="btn w-100 py-5" onclick="document.getElementById('f1').click()">
                        <div>
                            <img src="img/icon-upload.png" alt="">
                        </div>
                        <div class="fs-6">
                            Upload Word File Here
                        </div>
                    </a>
                    <input type="file" id="f1" name="policy_file" class="d-none">
                </div>
                <!-- Add Button -->
                <div class="w-100 text-end">
                    <button type="submit" class="btn btn-warning btn-custom text-white p-2 px-5">ADD</button>
                </div>
            </div>
        </form>
    </main>
</div>
@endsection

@section('script')

<script src="https://cdn.tiny.cloud/1/0zyyhslyk1vpwu9rzyci4tsa9uiz52flqe6jgnic9hmfotzf/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [{
                value: 'First.Name',
                title: 'First Name'
            },
            {
                value: 'Email',
                title: 'Email'
            },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant"))
    });
</script>

@endsection