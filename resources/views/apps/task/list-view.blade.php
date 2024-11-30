@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Page Header -->
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Task List View</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Task</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Task List View</li>
                      </ol>
                  </nav>
              </div>
          </div>
          <div class="btn-list">
              <button class="btn btn-primary-light btn-wave me-2">
                  <i class="bx bx-crown align-middle"></i> Plan Upgrade
              </button>
              <button class="btn btn-secondary-light btn-wave me-0"> 
                  <i class="ri-upload-cloud-line align-middle"></i> Export Report
              </button>
          </div>
      </div>
      <!-- Page Header Close -->

      <!-- Start::row-2 -->
      <div class="row">
          <div class="col-xl-12">
              <div class="row row-cols-xxl-5 row-col-xl-3 row-cols-md-2 row-cols-1">
                  <div class="col">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="">
                                  <div class="d-flex align-items-center justify-content-between">
                                      <span class="avatar avatar-md bg-primary svg-white">
                                          <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path d="M13,16H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM9,10h2a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm12,2H18V3a1,1,0,0,0-.5-.87,1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0A1,1,0,0,0,2,3V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM5,20a1,1,0,0,1-1-1V4.73L6,5.87a1.08,1.08,0,0,0,1,0l3-1.72,3,1.72a1.08,1.08,0,0,0,1,0l2-1.14V19a3,3,0,0,0,.18,1Zm15-1a1,1,0,0,1-2,0V14h2Zm-7-7H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"/></svg>
                                      </span>
                                      <div id="newtaskschart"></div>
                                  </div>
                                  <div class="d-flex justify-content-between align-items-center">
                                      <div>
                                          <span class="d-block mb-1 mt-2">New Tasks</span>
                                      <div class="d-flex align-items-center gap-2">
                                          <h3 class="fw-medium mb-0"><span class="count-up" data-count="42">41</span> </h3> 
                                          <span class="badge bg-success-transparent">12,345</span>
                                      </div>
                                      </div>
                                      <div>
                                          <span class="fw-semibold mb-1 text-muted">This Year</span>
                                          <span class="d-block text-success fs-13 d-inline-flex align-items-center"><i class="ti ti-arrow-up"></i>18.21%</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="">
                                  <div class="d-flex align-items-center justify-content-between">
                                      <span class="avatar avatar-md bg-secondary svg-white">
                                          <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path d="M13,16H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM9,10h2a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm12,2H18V3a1,1,0,0,0-.5-.87,1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0A1,1,0,0,0,2,3V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM5,20a1,1,0,0,1-1-1V4.73L6,5.87a1.08,1.08,0,0,0,1,0l3-1.72,3,1.72a1.08,1.08,0,0,0,1,0l2-1.14V19a3,3,0,0,0,.18,1Zm15-1a1,1,0,0,1-2,0V14h2Zm-7-7H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"/></svg>
                                      </span>
                                      <div id="completetaskschart"></div>
                                  </div>
                                  <div class="d-flex justify-content-between align-items-center">
                                      <div>
                                          <span class="d-block mb-1 mt-2">Completed Tasks</span>
                                      <div class="d-flex align-items-center gap-2">
                                          <h3 class="fw-medium mb-0"><span class="count-up" data-count="152">152</span> </h3> 
                                          <span class="badge bg-danger-transparent">12,345</span>
                                      </div>
                                      </div>
                                      <div>
                                          <span class="fw-semibold mb-1 text-muted">This Year</span>
                                          <span class="d-block text-danger fs-13 d-inline-flex align-items-center"><i class="ti ti-arrow-down"></i>12.61%</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="">
                                  <div class="d-flex align-items-center justify-content-between">
                                      <span class="avatar avatar-md bg-success svg-white">
                                          <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path d="M13,16H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM9,10h2a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm12,2H18V3a1,1,0,0,0-.5-.87,1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0A1,1,0,0,0,2,3V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM5,20a1,1,0,0,1-1-1V4.73L6,5.87a1.08,1.08,0,0,0,1,0l3-1.72,3,1.72a1.08,1.08,0,0,0,1,0l2-1.14V19a3,3,0,0,0,.18,1Zm15-1a1,1,0,0,1-2,0V14h2Zm-7-7H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"/></svg>
                                      </span>
                                      <div id="ongoingtaskschart"></div>
                                  </div>
                                  <div class="d-flex justify-content-between align-items-center">
                                      <div>
                                          <span class="d-block mb-1 mt-2">OnGoing Tasks</span>
                                      <div class="d-flex align-items-center gap-2">
                                          <h3 class="fw-medium mb-0"><span class="count-up" data-count="35">35</span> </h3> 
                                          <span class="badge bg-success-transparent">12,345</span>
                                      </div>
                                      </div>
                                      <div>
                                          <span class="fw-semibold mb-1 text-muted">This Year</span>
                                          <span class="d-block text-success fs-13 d-inline-flex align-items-center"><i class="ti ti-arrow-up"></i>11.81%</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="">
                                  <div class="d-flex align-items-center justify-content-between">
                                      <span class="avatar avatar-md bg-info svg-white">
                                          <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path d="M13,16H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM9,10h2a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm12,2H18V3a1,1,0,0,0-.5-.87,1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0A1,1,0,0,0,2,3V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM5,20a1,1,0,0,1-1-1V4.73L6,5.87a1.08,1.08,0,0,0,1,0l3-1.72,3,1.72a1.08,1.08,0,0,0,1,0l2-1.14V19a3,3,0,0,0,.18,1Zm15-1a1,1,0,0,1-2,0V14h2Zm-7-7H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"/></svg>
                                      </span>
                                      <div id="pendingtaskschart"></div>
                                  </div>
                                  <div class="d-flex justify-content-between align-items-center">
                                      <div>
                                          <span class="d-block mb-1 mt-2">Pending Tasks</span>
                                      <div class="d-flex align-items-center gap-2">
                                          <h3 class="fw-medium mb-0"><span class="count-up" data-count="98">98</span> </h3> 
                                          <span class="badge bg-danger-transparent">12,345</span>
                                      </div>
                                      </div>
                                      <div>
                                          <span class="fw-semibold mb-1 text-muted">This Year</span>
                                          <span class="d-block text-danger fs-13 d-inline-flex align-items-center"><i class="ti ti-arrow-up"></i>13.65%</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="">
                                  <div class="d-flex align-items-center justify-content-between">
                                      <span class="avatar avatar-md bg-warning svg-white">
                                          <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path d="M13,16H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM9,10h2a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm12,2H18V3a1,1,0,0,0-.5-.87,1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0A1,1,0,0,0,2,3V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM5,20a1,1,0,0,1-1-1V4.73L6,5.87a1.08,1.08,0,0,0,1,0l3-1.72,3,1.72a1.08,1.08,0,0,0,1,0l2-1.14V19a3,3,0,0,0,.18,1Zm15-1a1,1,0,0,1-2,0V14h2Zm-7-7H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"/></svg>
                                      </span>
                                      <div id="reviewtaskschart"></div>
                                  </div>
                                  <div class="d-flex justify-content-between align-items-center">
                                      <div>
                                          <span class="d-block mb-1 mt-2">InReview Tasks</span>
                                      <div class="d-flex align-items-center gap-2">
                                          <h3 class="fw-medium mb-0"><span class="count-up" data-count="120">120</span> </h3> 
                                          <span class="badge bg-success-transparent">12,345</span>
                                      </div>
                                      </div>
                                      <div>
                                          <span class="fw-semibold mb-1 text-muted">This Year</span>
                                          <span class="d-block text-success fs-13 d-inline-flex align-items-center"><i class="ti ti-arrow-up"></i>4.21%</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-12 col-xl-12">
              <div class="card custom-card">
                  <div class="card-header justify-content-between">
                      <div class="card-title">
                          Total Tasks
                      </div>
                      <div class="d-flex">
                          <button class="btn btn-sm btn-primary btn-wave waves-light" data-bs-toggle="modal" data-bs-target="#create-task"><i class="ri-add-line fw-medium align-middle me-1"></i> Create Task</button>
                          <!-- Start::add task modal -->
                          <div class="modal fade" id="create-task" tabindex="-1" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h6 class="modal-title">Add Task</h6>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal"
                                              aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body px-4">
                                          <div class="row gy-2">
                                              <div class="col-xl-6">
                                                  <label for="task-name" class="form-label">Task Name</label>
                                                  <input type="text" class="form-control" id="task-name" placeholder="Task Name">
                                              </div>
                                              <div class="col-xl-6">
                                                  <label for="task-id" class="form-label">Task ID</label>
                                                  <input type="text" class="form-control" id="task-id" placeholder="Task ID">
                                              </div>
                                              <div class="col-xl-6">
                                                  <label class="form-label">Assigned Date</label>
                                                  <div class="form-group">
                                                      <div class="input-group">
                                                          <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                          <input type="text" class="form-control" id="assignedDate" placeholder="Choose date and time">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-xl-6">
                                                  <label class="form-label">Due Date</label>
                                                  <div class="form-group">
                                                      <div class="input-group">
                                                          <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                          <input type="text" class="form-control" id="dueDate" placeholder="Choose date and time">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-xl-6">
                                                  <label class="form-label">Status</label>
                                                  <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
                                                      <option value="New">New</option>
                                                      <option value="Completed">Completed</option>
                                                      <option value="Inprogress">Inprogress</option>
                                                      <option value="Pending">Pending</option>
                                                  </select>
                                              </div>
                                              <div class="col-xl-6">
                                                  <label class="form-label">Priority</label>
                                                  <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default1">
                                                      <option value="High">High</option>
                                                      <option value="Medium">Medium</option>
                                                      <option value="Low">Low</option>
                                                  </select>
                                              </div>
                                              <div class="col-xl-12">
                                                  <label class="form-label">Assigned To</label>
                                                  <select class="form-control" name="choices-multiple-remove-button1" id="choices-multiple-remove-button1" multiple>
                                                      <option value="Choice 1">Angelina May</option>
                                                      <option value="Choice 2">Kiara advain</option>
                                                      <option value="Choice 3">Hercules Jhon</option>
                                                      <option value="Choice 4">Mayor Kim</option>
                                                  </select>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-light"
                                              data-bs-dismiss="modal">Cancel</button>
                                          <button type="button" class="btn btn-primary">Add Task</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- End::add task modal -->
                          <div class="dropdown ms-2">
                              <button class="btn btn-icon btn-secondary-light btn-sm btn-wave waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <i class="ti ti-dots-vertical"></i>
                              </button>
                              <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="javascript:void(0);">New Tasks</a></li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">Pending Tasks</a></li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">Completed Tasks</a></li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">Inprogress Tasks</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="card-body p-0">
                      <div class="table-responsive">
                          <table class="table text-nowrap">
                              <thead>
                                  <tr>
                                      <th>
                                          <input class="form-check-input check-all" type="checkbox" id="all-tasks" value="" aria-label=".">
                                      </th>
                                      <th scope="col">Task</th>
                                      <th scope="col">Task ID</th>
                                      <th scope="col">Priority</th>
                                      <th scope="col">Assigned Date</th>
                                      <th scope="col">Due Date</th>
                                      <th scope="col">Status</th>
                                      <th scope="col">Assigned To</th>
                                      <th scope="col">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr class="task-list">
                                      <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="."></td>
                                      <td>
                                          <span class="fw-medium">Implement a sticky navigation bar</span>
                                      </td>
                                      <td>
                                          <span class="fw-medium">SPK - 01</span>
                                      </td>
                                      <td>
                                          <span class="badge bg-primary">Medium</span>
                                      </td>
                                      <td>
                                          02-06-2024
                                      </td>
                                      <td>
                                          10-06-2024
                                      </td>
                                      <td>
                                          <span class="badge bg-primary-transparent  text-primary"><i class="ri-circle-fill fs-8 me-1"></i>New</span>
                                      </td>
                                      <td>
                                          <div class="avatar-list-stacked">
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/8.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img">
                                              </span>
                                              <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                  +2
                                              </a>
                                          </div>
                                      </td>
                                      <td>
                                          <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="ri-edit-line"></i></button>
                                          <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                      </td>
                                  </tr>
                                  <tr class="task-list">
                                      <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="." checked></td>
                                      <td>
                                          <span class="fw-medium">Integrate new UI components</span>
                                      </td>
                                      <td>
                                          <span class="fw-medium">SPK - 04</span>
                                      </td>
                                      <td>
                                          <span class="badge bg-danger">High</span>
                                      </td>
                                      <td>
                                          05-06-2024
                                      </td>
                                      <td>
                                          15-06-2024
                                      </td>
                                      <td>
                                          <span class="badge bg-secondary-transparent fw-medium text-secondary"><i class="ri-circle-fill fs-8 me-1"></i>Inprogress</span>
                                      </td>
                                      <td>
                                          <div class="avatar-list-stacked">
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/12.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/11.jpg" alt="img">
                                              </span>
                                              <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                  +4
                                              </a>
                                          </div>
                                      </td>
                                      <td>
                                          <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="ri-edit-line"></i></button>
                                          <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                      </td>
                                  </tr>
                                  <tr class="task-list">
                                      <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="."></td>
                                      <td>
                                          <span class="fw-medium">Optimize API endpoints for faster response times</span>
                                      </td>
                                      <td>
                                          <span class="fw-medium">SPK - 11</span>
                                      </td>
                                      <td>
                                          <span class="badge bg-success">Low</span>
                                      </td>
                                      <td>
                                          12-06-2024
                                      </td>
                                      <td>
                                          16-06-2024
                                      </td>
                                      <td>
                                          <span class="badge bg-warning-transparent text-warning"><i class="ri-circle-fill fs-8 me-1"></i>Pending</span>
                                      </td>
                                      <td>
                                          <div class="avatar-list-stacked">
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/5.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/9.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/13.jpg" alt="img">
                                              </span>
                                              <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                  +5
                                              </a>
                                          </div>
                                      </td>
                                      <td>
                                          <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="ri-edit-line"></i></button>
                                          <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                      </td>
                                  </tr>
                                  <tr class="task-list">
                                      <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="."></td>
                                      <td>
                                          <span class="fw-medium">Write unit tests for new JavaScript functions</span>
                                      </td>
                                      <td>
                                          <span class="fw-medium">SPK - 24</span>
                                      </td>
                                      <td>
                                          <span class="badge bg-success">Low</span>
                                      </td>
                                      <td>
                                          08-06-2024
                                      </td>
                                      <td>
                                          17-06-2024
                                      </td>
                                      <td>
                                          <span class="badge bg-success-transparent text-success"><i class="ri-circle-fill fs-8 me-1"></i>Completed</span>
                                      </td>
                                      <td>
                                          <div class="avatar-list-stacked">
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/8.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img">
                                              </span>
                                              <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                  +2
                                              </a>
                                          </div>
                                      </td>
                                      <td>
                                          <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="ri-edit-line"></i></button>
                                          <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                      </td>
                                  </tr>
                                  <tr class="task-list">
                                      <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="." checked></td>
                                      <td>
                                          <span class="fw-medium">Generate sales reports using ApexCharts</span>
                                      </td>
                                      <td>
                                          <span class="fw-medium">SPK - 16</span>
                                      </td>
                                      <td>
                                          <span class="badge bg-primary">Medium</span>
                                      </td>
                                      <td>
                                          03-06-2024
                                      </td>
                                      <td>
                                          08-06-2024
                                      </td>
                                      <td>
                                          <span class="badge bg-secondary-transparent  text-secondary"><i class="ri-circle-fill fs-8 me-1"></i>Inprogress</span>
                                      </td>
                                      <td>
                                          <div class="avatar-list-stacked">
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/10.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/15.jpg" alt="img">
                                              </span>
                                              <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                  +3
                                              </a>
                                          </div>
                                      </td>
                                      <td>
                                          <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="ri-edit-line"></i></button>
                                          <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                      </td>
                                  </tr>
                                  <tr class="task-list">
                                      <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="." checked></td>
                                      <td>
                                          <span class="fw-medium">Research free hosting options for a Blazor Server app</span>
                                      </td>
                                      <td>
                                          <span class="fw-medium">SPK - 07</span>
                                      </td>
                                      <td>
                                          <span class="badge bg-danger">High</span>
                                      </td>
                                      <td>
                                          12-06-2024
                                      </td>
                                      <td>
                                          25-06-2024
                                      </td>
                                      <td>
                                          <span class="badge bg-primary-transparent  text-primary"><i class="ri-circle-fill fs-8 me-1"></i>New</span>
                                      </td>
                                      <td>
                                          <div class="avatar-list-stacked">
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/12.jpg" alt="img">
                                              </span>
                                          </div>
                                      </td>
                                      <td>
                                          <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="ri-edit-line"></i></button>
                                          <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                      </td>
                                  </tr>
                                  <tr class="task-list">
                                      <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="."></td>
                                      <td>
                                          <span class="fw-medium">Updating Old UI</span>
                                      </td>
                                      <td>
                                          <span class="fw-medium">SPK - 13</span>
                                      </td>
                                      <td>
                                          <span class="badge bg-success">Low</span>
                                      </td>
                                      <td>
                                          06-06-2024
                                      </td>
                                      <td>
                                          12-06-2024
                                      </td>
                                      <td>
                                          <span class="badge bg-success-transparent text-success"><i class="ri-circle-fill fs-8 me-1"></i>Completed</span>
                                      </td>
                                      <td>
                                          <div class="avatar-list-stacked">
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/11.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/1.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/10.jpg" alt="img">
                                              </span>
                                              <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                  +1
                                              </a>
                                          </div>
                                      </td>
                                      <td>
                                          <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="ri-edit-line"></i></button>
                                          <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                      </td>
                                  </tr>
                                  <tr class="task-list">
                                      <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="." checked></td>
                                      <td>
                                          <span class="fw-medium">Create wireframes for the new dashboard layout</span>
                                      </td>
                                      <td>
                                          <span class="fw-medium">SPK - 20</span>
                                      </td>
                                      <td>
                                          <span class="badge bg-danger">High</span>
                                      </td>
                                      <td>
                                          14-06-2024
                                      </td>
                                      <td>
                                          19-06-2024
                                      </td>
                                      <td>
                                          <span class="badge bg-warning-transparent text-warning"><i class="ri-circle-fill fs-8 me-1"></i>Pending</span>
                                      </td>
                                      <td>
                                          <div class="avatar-list-stacked">
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/3.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/9.jpg" alt="img">
                                              </span>
                                              <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                  +2
                                              </a>
                                          </div>
                                      </td>
                                      <td>
                                          <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="ri-edit-line"></i></button>
                                          <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                      </td>
                                  </tr>
                                  <tr class="task-list">
                                      <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="."></td>
                                      <td>
                                          <span class="fw-medium">Resolve outstanding tickets in the support queue</span>
                                      </td>
                                      <td>
                                          <span class="fw-medium">SPK - 26</span>
                                      </td>
                                      <td>
                                          <span class="badge bg-primary">Medium</span>
                                      </td>
                                      <td>
                                          11-06-2024
                                      </td>
                                      <td>
                                          18-06-2024
                                      </td>
                                      <td>
                                          <span class="badge bg-success-transparent text-success"><i class="ri-circle-fill fs-8 me-1"></i>Completed</span>
                                      </td>
                                      <td>
                                          <div class="avatar-list-stacked">
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/5.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/14.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/12.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/3.jpg" alt="img">
                                              </span>
                                              <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                  +1
                                              </a>
                                          </div>
                                      </td>
                                      <td>
                                          <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="ri-edit-line"></i></button>
                                          <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                      </td>
                                  </tr>
                                  <tr class="task-list">
                                      <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="."></td>
                                      <td>
                                          <span class="fw-medium">Implement a dark mode toggle for the web application</span>
                                      </td>
                                      <td>
                                          <span class="fw-medium">SPK - 32</span>
                                      </td>
                                      <td>
                                          <span class="badge bg-success">Low</span>
                                      </td>
                                      <td>
                                          03-06-2024
                                      </td>
                                      <td>
                                          09-06-2024
                                      </td>
                                      <td>
                                          <span class="badge bg-secondary-transparent text-secondary"><i class="ri-circle-fill fs-8 me-1"></i>Inprogress</span>
                                      </td>
                                      <td>
                                          <div class="avatar-list-stacked">
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/12.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/6.jpg" alt="img">
                                              </span>
                                              <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                  +4
                                              </a>
                                          </div>
                                      </td>
                                      <td>
                                          <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="ri-edit-line"></i></button>
                                          <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
                  <div class="card-footer border-top-0">
                      <nav aria-label="Page navigation">
                          <ul class="pagination mb-0 float-end">
                              <li class="page-item disabled">
                                  <a class="page-link">Previous</a>
                              </li>
                              <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                              <li class="page-item active" aria-current="page">
                                  <a class="page-link" href="javascript:void(0);">2</a>
                              </li>
                              <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                              <li class="page-item">
                                  <a class="page-link" href="javascript:void(0);">Next</a>
                              </li>
                          </ul>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
      <!--End::row-2 -->

  </div>
</div>
<!-- End::app-content -->
      
@endsection