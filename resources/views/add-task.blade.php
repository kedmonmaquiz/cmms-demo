@extends('layouts.main')

@section('title','Add Tasks')

@section('content')
      <!-- start page title -->
      <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Form Select</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">Form Select</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Default Select</h4>
                    
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="live-preview">
                        <div class="row">
                            <div class="col-lg-6">
                                <select class="form-select mb-3" aria-label="Default select example">
                                    <option selected>Select your Equipment </option>
                                    <option value="1">Fontain</option>
                                    <option value="2">Rainwater Equipment</option>
                                    <option value="3">Drainage Equipment</option>
                                </select>
                            </div>

                            <div class="col-lg-6">
                                <select class="form-select mb-3" aria-label="Default select example">
                                    <option selected>maintanance Frequency </option>
                                    <option value="1">Daily</option>
                                    <option value="2">Weekly</option>
                                    <option value="3">Monthly</option>
                                    <option value="3">Quaterly</option>
                                    <option value="3">Bi-Annually</option>
                                    <option value="3">Annually</option>
                                </select>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="firstnamefloatingInput"
                                        placeholder="Enter your firstname">
                                    <label for="firstnamefloatingInput">Task Description</label>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-5">
                               <button class="btn btn-success">Submit</button>
                            </div>
                        
                        </div>
                    </div>
                    
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection