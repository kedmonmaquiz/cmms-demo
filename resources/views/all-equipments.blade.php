@extends('layouts.main')

@section('title','All Equipments')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card" id="equipmentList">
            <div class="card-header border-bottom-dashed">

                <div class="row g-4 align-items-center">
                    <div class="col-sm">
                        <div>
                            <h5 class="card-title mb-0">Equipment List</h5>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <div>
                            <button class="btn btn-soft-danger" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                            <button type="button" class="btn btn-success add-btn"
                                data-bs-toggle="modal" id="create-btn"
                                data-bs-target="#showModal"><i
                                    class="ri-add-line align-bottom me-1"></i> Add Equipment</button>
                            <button type="button" class="btn btn-info"><i
                                    class="ri-file-download-line align-bottom me-1"></i>
                                Import</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body border-bottom-dashed border-bottom">
                <form>
                    <div class="row g-3">
                        <div class="col-xl-6">
                            <div class="search-box">
                                <input type="text" class="form-control search"
                                    placeholder="Search for equipment, model, serial no or something...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xl-6">
                            <div class="row g-3">
                                <div class="col-sm-4">
                                    <div class="">
                                        <input type="text" class="form-control"
                                            id="datepicker-range" data-provider="flatpickr"
                                            data-date-format="d M, Y" data-range-date="true"
                                            placeholder="Select date">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-sm-4">
                                    <div>
                                        <select class="form-control" data-plugin="choices"
                                            data-choices data-choices-search-false
                                            name="choices-single-default" id="idStatus">
                                            <option value="">Status</option>
                                            <option value="all" selected>All</option>
                                            <option value="Active">Active</option>
                                            <option value="Block">Pending</option>
                                            <option value="Block">Replaced</option>
                                        </select>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-sm-4">
                                    <div>
                                        <button type="button" class="btn btn-primary w-100"
                                            onclick="SearchData();"> <i
                                                class="ri-equalizer-fill me-2 align-bottom"></i>Filters</button>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </form>
            </div>
            <div class="card-body">
                <div>
                    <div class="table-responsive table-card mb-1">
                        <table class="table align-middle" id="customerTable">
                            <thead class="table-light text-muted">
                                <tr>
                                    <th scope="col" style="width: 50px;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                id="checkAll" value="option">
                                        </div>
                                    </th>

                                    <th class="sort" data-sort="name">Name</th>
                                    <th class="sort" data-sort="serial_no">Serial No</th>
                                    <th class="sort" data-sort="manufacturer">Manufacturer</th>
                                    <th class="sort" data-sort="date">installation Date</th>
                                    
                                    <th class="sort" data-sort="action">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list form-check-all">
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="chk_child" value="option1">
                                        </div>
                                    </th>
                                    <td class="id" style="display:none;"><a
                                            href="javascript:void(0);"
                                            class="fw-medium link-primary">#VZ2101</a></td>
                                    <td class="name">Fontain</td>
                                    <td class="serial_no">83288klews903</td>
                                    <td class="manufacturer">Tesla Inc.</td>
                                    <td class="date">06 Apr, 2021</td>
                                   
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Edit">
                                                <a href="#showModal" data-bs-toggle="modal"
                                                    class="text-primary d-inline-block edit-item-btn">
                                                    <i class="ri-pencil-fill fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="Remove">
                                                <a class="text-danger d-inline-block remove-item-btn"
                                                    data-bs-toggle="modal"
                                                    href="#deleteRecordModal">
                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="noresult" style="display: none">
                            <div class="text-center">
                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json"
                                    trigger="loop" colors="primary:#121331,secondary:#08a88a"
                                    style="width:75px;height:75px">
                                </lord-icon>
                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                <p class="text-muted mb-0">We've searched more than 150+ customer We
                                    did not find any
                                    customer for you search.</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="pagination-wrap hstack gap-2">
                            <a class="page-item pagination-prev disabled" href="#">
                                Previous
                            </a>
                            <ul class="pagination listjs-pagination mb-0"></ul>
                            <a class="page-item pagination-next" href="#">
                                Next
                            </a>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-light p-3">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close" id="close-modal"></button>
                            </div>
                            <form action="#">
                                <div class="modal-body">
                                    <input type="hidden" id="id-field" />

                                    <div class="mb-3" id="modal-id" style="display: none;">
                                        <label for="id-field1" class="form-label">ID</label>
                                        <input type="text" id="id-field1" class="form-control"
                                            placeholder="ID" readonly />
                                    </div>

                                    <div class="mb-3">
                                        <label for="customername-field" class="form-label">
                                            Name</label>
                                        <input type="text" id="customername-field"
                                            class="form-control" placeholder="Enter name"
                                            required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="email-field" class="form-label">Serial No.</label>
                                        <input type="email" id="email-field" class="form-control"
                                            placeholder="Enter email" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone-field" class="form-label">Manufacturer</label>
                                        <input type="text" id="phone-field" class="form-control"
                                            placeholder="Enter phone no." required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="date-field" class="form-label">Installation
                                            Date</label>
                                        <input type="date" id="date-field" class="form-control"
                                            data-provider="flatpickr" data-date-format="d M, Y"
                                            required placeholder="Select date" />
                                    </div>

                                    <div>
                                        <label for="status-field" class="form-label">Status</label>
                                        <select class="form-control" data-trigger
                                            name="status-field" id="status-field">
                                            <option value="">Status</option>
                                            <option value="Active">Active</option>
                                            <option value="Block">Block</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="hstack gap-2 justify-content-end">
                                        <button type="button" class="btn btn-light"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success"
                                            id="add-btn">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close" id="btn-close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mt-2 text-center">
                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json"
                                        trigger="loop" colors="primary:#f7b84b,secondary:#f06548"
                                        style="width:100px;height:100px"></lord-icon>
                                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                        <h4>Are you sure ?</h4>
                                        <p class="text-muted mx-4 mb-0">Are you sure you want to
                                            remove this record ?</p>
                                    </div>
                                </div>
                                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                    <button type="button" class="btn w-sm btn-light"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn w-sm btn-danger "
                                        id="delete-record">Yes, Delete It!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end modal -->
            </div>
        </div>

    </div>
    <!--end col-->
</div>
<!--end row-->
@endsection