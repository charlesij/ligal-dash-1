@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Start::page-header -->
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">CRM</h1>
              <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item">
                      <a href="javascript:void(0);">
                          Dashboards
                      </a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">CRM</li>
              </ol>
          </div>
          <div>
              <button class="btn btn-primary-light btn-wave me-2 waves-effect waves-light">
                  <i class="bx bx-crown align-middle"></i> Plan Upgrade
              </button>
              <button class="btn btn-secondary-light btn-wave me-0 waves-effect waves-light">
                  <i class="ri-upload-cloud-line align-middle"></i> Export Report
              </button>
          </div>
      </div>
      <!-- End::page-header -->

      <!-- Start:: row-1 -->
      <div class="row">
          <div class="col-xxl-9">
              <div class="row">
                  <div class="col-xl-3">
                      <div class="card custom-card overflow-hidden">
                          <div class="card-body p-0">
                              <div class="d-flex align-items-start flex-wrap gap-3 p-3 mb-1">
                                  <div>
                                      <span class="avatar avatar-md bg-primary svg-white">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z"></path></svg>
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="d-block mb-1">Total Customers</span>
                                      <h3 class="fw-semibold mb-0 lh-1">2,54,244</h3>
                                  </div>
                                  <div class="text-end">
                                      <span class="badge bg-success-transparent"><i class="ti ti-arrow-narrow-up me-1"></i>0.16%</span>
                                  </div>
                              </div>
                              <div id="total-customers"></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3">
                      <div class="card custom-card overflow-hidden">
                          <div class="card-body p-0">
                              <div class="d-flex align-items-start flex-wrap gap-3 p-3 mb-1">
                                  <div>
                                      <span class="avatar avatar-md bg-secondary svg-white">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M40,56V184a16,16,0,0,0,16,16H216a8,8,0,0,0,8-8V80a8,8,0,0,0-8-8H56A16,16,0,0,1,40,56h0A16,16,0,0,1,56,40H192" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="180" cy="132" r="12"/></svg>
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="d-block mb-1">Total Revenue</span>
                                      <h3 class="fw-semibold mb-0 lh-1">$1.465M</h3>
                                  </div>
                                  <div class="text-end">
                                      <span class="badge bg-danger-transparent"><i class="ti ti-arrow-narrow-down me-1"></i>0.16%</span>
                                  </div>
                              </div>
                              <div id="total-revenue"></div>
                          </div>  
                      </div>
                  </div>
                  <div class="col-xl-3">
                      <div class="card custom-card overflow-hidden">
                          <div class="card-body p-0">
                              <div class="d-flex align-items-start flex-wrap gap-3 p-3 mb-1">
                                  <div>
                                      <span class="avatar avatar-md bg-success svg-white">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polyline points="232 128 232 184 128 184 128 72 24 72 24 128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="d-block mb-1">Conversion Ratio</span>
                                      <h3 class="fw-semibold mb-0 lh-1">26.97%</h3>
                                  </div>
                                  <div class="text-end">
                                      <span class="badge bg-success-transparent"><i class="ti ti-arrow-narrow-up me-1"></i>2.98%</span>
                                  </div>
                              </div>
                              <div id="conversion-ratio"></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3">
                      <div class="card custom-card overflow-hidden">
                          <div class="card-body p-0">
                              <div class="d-flex align-items-start flex-wrap gap-3 p-3 mb-1">
                                  <div>
                                      <span class="avatar avatar-md bg-info svg-white">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><rect x="32" y="64" width="192" height="144" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M168,64V48a16,16,0,0,0-16-16H104A16,16,0,0,0,88,48V64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M224,118.31A191.09,191.09,0,0,1,128,144a191.14,191.14,0,0,1-96-25.68" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="112" y1="112" x2="144" y2="112" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="d-block mb-1">Total Deals</span>
                                      <h3 class="fw-semibold mb-0 lh-1">12,644</h3>
                                  </div>
                                  <div class="text-end">
                                      <span class="badge bg-success-transparent"><i class="ti ti-arrow-narrow-up me-1"></i>1.34%</span>
                                  </div>
                              </div>
                              <div id="total-deals"></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-8">
                      <div class="card custom-card">
                          <div class="card-header">
                              <div class="card-title">
                                  Project Analysis
                              </div>
                          </div>
                          <div class="card-body">
                              <div id="project-analysis"></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-4">
                      <div class="card custom-card">
                          <div class="card-header justify-content-between">
                              <div class="card-title">
                                  Tasks List
                              </div>
                              <div>
                                  <ul class="nav nav-tabs justify-content-end nav-tabs-header" role="tablist">
                                      <li class="nav-item" role="presentation">
                                          <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page" href="#orders" aria-selected="true">Today</a>
                                      </li>
                                      <li class="nav-item" role="presentation">
                                          <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#accepted" aria-selected="false" tabindex="-1">Upcoming</a>
                                      </li>
                                      <li class="nav-item" role="presentation">
                                          <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#declined" aria-selected="false" tabindex="-1">Completed</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="card-body todo-tab p-0">
                              <div class="tab-content">
                                  <div class="tab-pane border-0 active show" id="orders" role="tabpanel">
                                      <ul class="list-unstyled task-list-tab">
                                          <li>
                                              <div class="todolist d-flex">
                                                  <div class="mb-3 form-check  me-2">
                                                      <input type="checkbox" class="form-check-input">
                                                  </div>
                                                  <div class="flex-fill w-100">
                                                      <div class="d-flex align-items-start justify-content-between">
                                                          <span class="d-block fw-semibold">Added New Customers</span>
                                                          <div class="">
                                                              <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="ti ti-trash"></i></a>
                                                          </div>
                                                      </div>
                                                      <div class="d-flex align-items-center justify-content-between">
                                                          <p class="text-muted mb-0 fs-13">Invi sadip takimata</p>
                                                          <span class="badge bg-primary-transparent">Progress</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="todolist d-flex">
                                                  <div class="mb-3 form-check  me-2">
                                                      <input type="checkbox" class="form-check-input" checked="">
                                                  </div>
                                                  <div class="flex-fill w-100">
                                                      <div class="d-flex align-items-start justify-content-between">
                                                          <span class="d-block fw-semibold">Sales Accounting</span>
                                                          <div class="">
                                                              <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="ti ti-trash"></i></a>
                                                          </div>
                                                      </div>
                                                      <div class="d-flex align-items-center justify-content-between">
                                                          <p class="text-muted mb-0 fs-13">Eos dolor ea</p>
                                                          <span class="badge bg-success-transparent">Completed</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="todolist d-flex">
                                                  <div class="mb-3 form-check  me-2">
                                                      <input type="checkbox" class="form-check-input">
                                                  </div>
                                                  <div class="flex-fill w-100">
                                                      <div class="d-flex align-items-start justify-content-between">
                                                          <span class="d-block fw-semibold">Meeting with Sales Team</span>
                                                          <div class="">
                                                              <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="ti ti-trash"></i></a>
                                                          </div>
                                                      </div>
                                                      <div class="d-flex align-items-center justify-content-between">
                                                          <p class="text-muted mb-0 fs-13">Nonumy erat ipsum ut ipsum</p>
                                                          <span class="badge bg-danger-transparent">not Started</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="todolist d-flex">
                                                  <div class="mb-3 form-check  me-2">
                                                      <input type="checkbox" class="form-check-input">
                                                  </div>
                                                  <div class="flex-fill w-100">
                                                      <div class="d-flex align-items-start justify-content-between">
                                                          <span class="d-block fw-semibold">Added New Customers</span>
                                                          <div class="">
                                                              <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="ti ti-trash"></i></a>
                                                          </div>
                                                      </div>
                                                      <div class="d-flex align-items-center justify-content-between">
                                                          <p class="text-muted mb-0 fs-13">Invi sadip takimata</p>
                                                          <span class="badge bg-primary-transparent">Progress</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="todolist d-flex">
                                                  <div class="mb-3 form-check me-2">
                                                      <input type="checkbox" class="form-check-input" checked="">
                                                  </div>
                                                  <div class="flex-fill w-100">
                                                      <div class="d-flex align-items-start justify-content-between">
                                                          <span class="d-block fw-semibold">Customers Meeting</span>
                                                          <div class="">
                                                              <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="ti ti-trash"></i></a>
                                                          </div>
                                                      </div>
                                                      <div class="d-flex align-items-center justify-content-between">
                                                          <p class="text-muted mb-0 fs-13">Sed labore ut sed</p>
                                                          <span class="badge bg-success-transparent">completed</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </li>
                                      </ul>
                                  </div>
                                  <div class="tab-pane border-0" id="accepted" role="tabpanel">
                                      <ul class="list-unstyled task-list-tab">
                                          <li>
                                              <div class="todolist d-flex">
                                                  <div class="mb-3 form-check  me-2">
                                                      <input type="checkbox" class="form-check-input">
                                                  </div>
                                                  <div class="flex-fill w-100">
                                                      <div class="d-flex align-items-start justify-content-between">
                                                          <span class="d-block fw-semibold">Build a New Team</span>
                                                          <div class="">
                                                              <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="ti ti-trash"></i></a>
                                                          </div>
                                                      </div>
                                                      <div class="d-flex align-items-center justify-content-between">
                                                          <p class="text-muted mb-0 fs-13">Nonumy erat ipsum ut ipsum</p>
                                                          <span class="badge bg-danger-transparent">not Started</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="todolist d-flex">
                                                  <div class="mb-3 form-check  me-2">
                                                      <input type="checkbox" class="form-check-input">
                                                  </div>
                                                  <div class="flex-fill w-100">
                                                      <div class="d-flex align-items-start justify-content-between">
                                                          <span class="d-block fw-semibold">Meeting with Sales Team</span>
                                                          <div class="">
                                                              <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="ti ti-trash"></i></a>
                                                          </div>
                                                      </div>
                                                      <div class="d-flex align-items-center justify-content-between">
                                                          <p class="text-muted mb-0 fs-13">Consetetur et amet dolor</p>
                                                          <span class="badge bg-danger-transparent">not Started</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="todolist d-flex">
                                                  <div class="mb-3 form-check  me-2">
                                                      <input type="checkbox" class="form-check-input">
                                                  </div>
                                                  <div class="flex-fill w-100">
                                                      <div class="d-flex align-items-start justify-content-between">
                                                          <span class="d-block fw-semibold">Created a New Task today</span>
                                                          <div class="">
                                                              <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="ti ti-trash"></i></a>
                                                          </div>
                                                      </div>
                                                      <div class="d-flex align-items-center justify-content-between">
                                                          <p class="text-muted mb-0 fs-13">Nonumy erat ipsum ut ipsum</p>
                                                          <span class="badge bg-danger-transparent">not Started</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="todolist d-flex">
                                                  <div class="mb-3 form-check  me-2">
                                                      <input type="checkbox" class="form-check-input">
                                                  </div>
                                                  <div class="flex-fill w-100">
                                                      <div class="d-flex align-items-start justify-content-between">
                                                          <span class="d-block fw-semibold">Build a New Team</span>
                                                          <div class="">
                                                              <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="ti ti-trash"></i></a>
                                                          </div>
                                                      </div>
                                                      <div class="d-flex align-items-center justify-content-between">
                                                          <p class="text-muted mb-0 fs-13">Nonumy erat ipsum ut ipsum</p>
                                                          <span class="badge bg-danger-transparent">not Started</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="todolist  d-flex">
                                                  <div class="mb-3 form-check  me-2">
                                                      <input type="checkbox" class="form-check-input">
                                                  </div>
                                                  <div class="flex-fill w-100">
                                                      <div class="d-flex align-items-start justify-content-between">
                                                          <span class="d-block fw-semibold">27 New people joined summit</span>
                                                          <div class="">
                                                              <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="ti ti-trash"></i></a>
                                                          </div>
                                                      </div>
                                                      <div class="d-flex align-items-center justify-content-between">
                                                          <p class="text-muted mb-0 fs-13">Accusam aliquyam ea sea</p>
                                                          <span class="badge bg-danger-transparent">not Started</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </li>
                                      </ul>
                                  </div>
                                  <div class="tab-pane border-0" id="declined" role="tabpanel">
                                      <ul class="list-unstyled task-list-tab">
                                          <li>
                                              <div class="todolist d-flex">
                                                  <div class="mb-3 form-check  me-2">
                                                      <input type="checkbox" class="form-check-input" checked="">
                                                  </div>
                                                  <div class="flex-fill w-100">
                                                      <div class="d-flex align-items-start justify-content-between">
                                                          <span class="d-block fw-semibold">Meeting with Sales Team</span>
                                                          <div class="">
                                                              <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="ti ti-trash"></i></a>
                                                          </div>
                                                      </div>
                                                      <div class="d-flex align-items-center justify-content-between">
                                                          <p class="text-muted mb-0 fs-13">Eos dolor ea</p>
                                                          <span class="badge bg-success-transparent">Completed</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="todolist d-flex">
                                                  <div class="mb-3 form-check  me-2">
                                                      <input type="checkbox" class="form-check-input" checked="">
                                                  </div>
                                                  <div class="flex-fill w-100">
                                                      <div class="d-flex align-items-start justify-content-between">
                                                          <span class="d-block fw-semibold">Replied to new support request</span>
                                                          <div class="">
                                                              <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="ti ti-trash"></i></a>
                                                          </div>
                                                      </div>
                                                      <div class="d-flex align-items-center justify-content-between">
                                                          <p class="text-muted mb-0 fs-13">Eos clita dolor elitr et</p>
                                                          <span class="badge bg-success-transparent">Completed</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="todolist d-flex">
                                                  <div class="mb-3 form-check  me-2">
                                                      <input type="checkbox" class="form-check-input" checked="">
                                                  </div>
                                                  <div class="flex-fill w-100">
                                                      <div class="d-flex align-items-start justify-content-between">
                                                          <span class="d-block fw-semibold">Update of calendar events</span>
                                                          <div class="">
                                                              <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="ti ti-trash"></i></a>
                                                          </div>
                                                      </div>
                                                      <div class="d-flex align-items-center justify-content-between">
                                                          <p class="text-muted mb-0 fs-13">Sadi tempor guberg rebum</p>
                                                          <span class="badge bg-success-transparent">Completed</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="todolist d-flex">
                                                  <div class="mb-3 form-check  me-2">
                                                      <input type="checkbox" class="form-check-input" checked="">
                                                  </div>
                                                  <div class="flex-fill w-100">
                                                      <div class="d-flex align-items-start justify-content-between">
                                                          <span class="d-block fw-semibold">Added New Customers</span>
                                                          <div class="">
                                                              <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="ti ti-trash"></i></a>
                                                          </div>
                                                      </div>
                                                      <div class="d-flex align-items-center justify-content-between">
                                                          <p class="text-muted mb-0 fs-13">Sadi tempor guberg rebum</p>
                                                          <span class="badge bg-success-transparent">Completed</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="todolist d-flex">
                                                  <div class="mb-3 form-check  me-2">
                                                      <input type="checkbox" class="form-check-input" checked="">
                                                  </div>
                                                  <div class="flex-fill w-100">
                                                      <div class="d-flex align-items-start justify-content-between">
                                                          <span class="d-block fw-semibold">Meeting with Sales Team</span>
                                                          <div class="">
                                                              <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="ti ti-trash"></i></a>
                                                          </div>
                                                      </div>
                                                      <div class="d-flex align-items-center justify-content-between">
                                                          <p class="text-muted mb-0 fs-13">Eos dolor ea</p>
                                                          <span class="badge bg-success-transparent">Completed</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">
                          Leads Overview
                      </div>
                  </div>
                  <div class="card-body">
                      <div id="leads-overview"></div>
                  </div>
                  <div class="card-footer p-0">
                      <ul class="list-group list-group-flush top-categories">
                          <li class="list-group-item">
                              <div class="d-flex align-items-center justify-content-between">
                                  <div class="lh-1">
                                      <div class="fw-semibold mb-1">Hot Leads</div>
                                      <div><span class="text-muted fs-13">Increased by <span class="text-success fw-medium ms-1 d-inline-flex align-items-center">0.64%<i class="ti ti-trending-up ms-1"></i></span></span></div>
                                  </div>
                                  <div class="lh-1 text-end">
                                      <span class="d-block fw-semibold h6 mb-0">1,754</span>
                                      <span class="d-block fs-13 text-muted">Leads</span>
                                  </div>
                              </div>
                          </li>
                          <li class="list-group-item">
                              <div class="d-flex align-items-center justify-content-between">
                                  <div class="lh-1">
                                      <div class="fw-semibold mb-1">Warm Leads</div>
                                      <div><span class="text-muted fs-13">Decreased by <span class="text-danger fw-medium ms-1 d-inline-flex align-items-center">2.75%<i class="ti ti-trending-down ms-1"></i></span></span></div>
                                  </div>
                                  <div class="lh-1 text-end">
                                      <span class="d-block fw-semibold h6 mb-0">1,234</span>
                                      <span class="d-block fs-13 text-muted">Leads</span>
                                  </div>
                              </div>
                          </li>
                          <li class="list-group-item">
                              <div class="d-flex align-items-center justify-content-between">
                                  <div class="lh-1">
                                      <div class="fw-semibold mb-1">Cold Leads</div>
                                      <div><span class="text-muted fs-13">Increased by <span class="text-success fw-medium ms-1 d-inline-flex align-items-center">1.54%<i class="ti ti-trending-up ms-1"></i></span></span></div>
                                  </div>
                                  <div class="lh-1 text-end">
                                      <span class="d-block fw-semibold h6 mb-0">878</span>
                                      <span class="d-block fs-13 text-muted">Leads</span>
                                  </div>
                              </div>
                          </li>
                          <li class="list-group-item">
                              <div class="d-flex align-items-center justify-content-between">
                                  <div class="lh-1">
                                      <div class="fw-semibold mb-1">Lost Leads</div>
                                      <div><span class="text-muted fs-13">Increased by <span class="text-success fw-medium ms-1 d-inline-flex align-items-center">1.54%<i class="ti ti-trending-up ms-1"></i></span></span></div>
                                  </div>
                                  <div class="lh-1 text-end">
                                      <span class="d-block fw-semibold h6 mb-0">270</span>
                                      <span class="d-block fs-13 text-muted">Leads</span>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: row-1 -->

      <!-- Start:: row-2 -->
      <div class="row">
          <div class="col-xxl-3">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">
                          Top Leads
                      </div>
                  </div>
                  <div class="card-body">
                      <ul class="list-unstyled crm-top-deals mb-0">
                          <li>
                              <div class="d-flex align-items-center flex-wrap gap-2">
                                  <div class="lh-1">
                                      <span class="avatar avatar-sm rounded-1">
                                          <img src="../assets/images/faces/2.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="fw-semibold d-block lh-1">Socrates Itumay</span>
                                      <span class="text-muted fs-13">socratesitumay@gmail.com</span>
                                  </div>
                                  <div class="fw-semibold mb-0 h6">$1,835</div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center flex-wrap gap-2">
                                  <div class="lh-1">
                                      <span class="avatar avatar-sm rounded-1">
                                          <img src="../assets/images/faces/3.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="fw-semibold d-block lh-1">Json Taylor</span>
                                      <span class="text-muted fs-13">jsontaylor2416@gmail.com</span>
                                  </div>
                                  <div class="fw-semibold mb-0 h6">$2,415</div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center flex-wrap gap-2">
                                  <div class="lh-1">
                                      <span class="avatar avatar-sm rounded-1">
                                          <img src="../assets/images/faces/4.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="fw-semibold d-block lh-1">Suzika Stallone</span>
                                      <span class="text-muted fs-13">suzikastallone3214@gmail.com</span>
                                  </div>
                                  <div class="fw-semibold mb-0 h6">$2,314</div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center flex-wrap gap-2">
                                  <div class="lh-1">
                                      <span class="avatar avatar-sm rounded-1">
                                          <img src="../assets/images/faces/5.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="fw-semibold d-block lh-1">Angelina Hose</span>
                                      <span class="text-muted fs-13">AngelinaHose3214@gmail.com</span>
                                  </div>
                                  <div class="fw-semibold mb-0 h6">2,624</div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center flex-wrap gap-2">
                                  <div class="lh-1">
                                      <span class="avatar avatar-sm rounded-1">
                                          <img src="../assets/images/faces/6.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="fw-semibold d-block lh-1">Selena Deoyl</span>
                                      <span class="text-muted fs-13">selenadeoyl114@gmail.com</span>
                                  </div>
                                  <div class="fw-semibold mb-0 h6">$1,035</div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center flex-wrap gap-2">
                                  <div class="lh-1">
                                      <span class="avatar avatar-sm rounded-1">
                                          <img src="../assets/images/faces/10.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="fw-semibold d-block lh-1">Charlie Davieson</span>
                                      <span class="text-muted fs-13">charliedavieson@gmail.com</span>
                                  </div>
                                  <div class="fw-semibold mb-0 h6">$1,835</div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center flex-wrap gap-2">
                                  <div class="lh-1">
                                      <span class="avatar avatar-sm rounded-1">
                                          <img src="../assets/images/faces/1.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="fw-semibold d-block lh-1">Leo Phillip</span>
                                      <span class="text-muted fs-13">leophillips@gmail.com</span>
                                  </div>
                                  <div class="fw-semibold mb-0 h6">$3,856</div>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3">
              <div class="card custom-card overflow-hidden">
                  <div class="card-header">
                      <div class="card-title">
                          Leads By channels
                      </div>
                  </div>
                  <div class="card-body">
                      <div id="leads-channels"></div>
                  </div>
                  <div class="card-footer p-0">
                      <ul class="list-group list-group-flush crm-leads-channels-list">
                          <li class="list-group-item">
                              <div class="d-flex align-items-center gap-2">
                                  <div class="flex-fill">Direct</div>
                                  <div class="h6 mb-0 fw-semibold"><span class="me-2 text-success fw-normal fs-13 d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-up"></i>0.56%</span>42.34%</div>
                              </div>
                          </li>
                          <li class="list-group-item">
                              <div class="d-flex align-items-center gap-2">
                                  <div class="flex-fill">Referral</div>
                                  <div class="h6 mb-0 fw-semibold"><span class="me-2 text-success fw-normal fs-13 d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-up"></i>12.85%</span>13%</div>
                              </div>
                          </li>
                          <li class="list-group-item">
                              <div class="d-flex align-items-center gap-2">
                                  <div class="flex-fill">Social</div>
                                  <div class="h6 mb-0 fw-semibold"><span class="me-2 text-danger fw-normal fs-13 d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-down"></i>4.45%</span>62%</div>
                              </div>
                          </li>
                          <li class="list-group-item">
                              <div class="d-flex align-items-center gap-2">
                                  <div class="flex-fill">Organic</div>
                                  <div class="h6 mb-0 fw-semibold"><span class="me-2 text-success fw-normal fs-13 d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-up"></i>5.75%</span>22.46%</div>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-md-12 col-xxl-6">
              <div class="card custom-card ">
                  <div class="card-header justify-content-between">
                      <div class="card-title">Deals Overview</div>
                      <div class="d-flex gap-2">
                          <div class="btn btn-sm btn-outline-primary">Today</div>
                          <div class="btn btn-sm btn-outline-primary">Weakly</div>
                          <div class="btn btn-sm btn-primary">Yearly</div>
                      </div>
                  </div>
                  <div class="card-body p-0">
                      <div class="table-responsive">
                          <table class="table text-nowrap mb-0">
                              <thead>
                                  <tr>
                                      <th scope="col">Deal</th>
                                      <th scope="col">Amount</th>
                                      <th scope="col">Probability</th>
                                      <th scope="col">Status</th>
                                  </tr>
                              </thead>
                              <tbody class="">
                                  <tr>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-sm">
                                                  <img src="../assets/images/faces/2.jpg" class="" alt="">
                                              </span>
                                              <div class="flex-1 ms-2">
                                                  <p class="mb-0 fw-semibold lh-1">Socrates Itumay</p>
                                                  <a href="javascript:void(0);" class="text-muted fs-12">socratesitumay@gmail.com</a>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <span class="">$54,900	</span>
                                      </td>
                                      <td>
                                          <span class="">24%</span>
                                      </td>
                                      <td>
                                          <span class="badge bg-primary-transparent">Qualified</span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="d-flex">
                                              <span class="avatar avatar-sm align-items-center">
                                                  <img src="../assets/images/faces/3.jpg" class="" alt="">
                                              </span>
                                              <div class="flex-1 ms-2">
                                                  <p class="mb-0 fw-semibold lh-1">Json Taylor</p>
                                                  <a href="javascript:void(0);" class="text-muted fs-12">jsontaylor2416@gmail.com</a>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <span class="">$16,800	</span>
                                      </td>
                                      <td>
                                          <span class="">70%</span>
                                      </td>
                                      <td>
                                          <span class="badge bg-warning-transparent">Review</span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="d-flex">
                                              <span class="avatar avatar-sm align-items-center">
                                                  <img src="../assets/images/company-logos/1.png" class="" alt="">
                                              </span>
                                              <div class="flex-1 ms-2">
                                                  <p class="mb-0 fw-semibold lh-1">Inferno Tech Et.</p>
                                                  <a href="javascript:void(0);" class="text-muted fs-12">InfernoTech@gmail.com</a>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <span class="">$12,000	</span>
                                      </td>
                                      <td>
                                          <span class="">90%</span>
                                      </td>
                                      <td>
                                          <span class="badge bg-success-transparent">Closed Won</span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="d-flex">
                                              <span class="avatar avatar-sm align-items-center">
                                                  <img src="../assets/images/faces/13.jpg" class="" alt="">
                                              </span>
                                              <div class="flex-1 ms-2">
                                                  <p class="mb-0 fw-semibold lh-1">Andrew Garfield</p>
                                                  <a href="javascript:void(0);" class="text-muted fs-12">andrewgarfield@gmail.com</a>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <span class="">$16,800	</span>
                                      </td>
                                      <td>
                                          <span class="">70%</span>
                                      </td>
                                      <td>
                                          <span class="badge bg-danger-transparent">Closed Lost</span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="d-flex">
                                              <span class="avatar avatar-sm align-items-center">
                                                  <img src="../assets/images/company-logos/8.png" class="" alt="">
                                              </span>
                                              <div class="flex-1 ms-2">
                                                  <p class="mb-0 fw-semibold lh-1">Jack Pvt.Ltd</p>
                                                  <a href="javascript:void(0);" class="text-muted fs-12">JackTech@gmail.com</a>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <span class="">$12,000</span>
                                      </td>
                                      <td>
                                          <span class="">90%</span>
                                      </td>
                                      <td>
                                          <span class="badge bg-success-transparent">Closed Won</span>
                                      </td>
                                  </tr>
                              <tr>
                                      <td class="border-bottom-0 rounded">
                                          <div class="d-flex">
                                              <span class="avatar avatar-sm align-items-center">
                                                  <img src="../assets/images/company-logos/9.png" class="" alt="">
                                              </span>
                                              <div class="flex-1 ms-2">
                                                  <p class="mb-0 fw-semibold lh-1">Athetic Corp</p>
                                                  <a href="javascript:void(0);" class="text-muted fs-12">atheticcorp33@gmail.com</a>
                                              </div>
                                          </div>
                                      </td>
                                      <td class="border-bottom-0 rounded">
                                          <span class="">$15,000</span>
                                      </td>
                                      <td class="border-bottom-0 rounded">
                                          <span class="">70%</span>
                                      </td>
                                      <td class="border-bottom-0 rounded">
                                          <span class="badge bg-warning-transparent">Review</span>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: row-2 -->

      <!-- Start:: row-3 -->
      <div class="row">
          <div class="col-xxl-9">
              <div class="card custom-card overflow-hidden">
                  <div class="card-header justify-content-between">
                      <div class="card-title">
                          Leads Report
                      </div>
                      <div class="dropdown">
                          <div class="btn btn-outline-light border btn-full btn-sm" data-bs-toggle="dropdown">View All<i class="ti ti-chevron-down ms-1"></i>
                          </div>
                          <ul class="dropdown-menu" role="menu">
                              <li><a class="dropdown-item" href="javascript:void(0);">Download</a>
                              </li>
                              <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                              <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="card-body p-0">
                      <div class="table-responsive">
                          <table class="table text-nowrap">
                              <thead>
                                  <tr>
                                      <th scope="col">S.NO</th>
                                      <th scope="col">Lead</th>
                                      <th scope="col">Phone Number</th>
                                      <th scope="col">Company Name</th>
                                      <th scope="col">Location</th>
                                      <th scope="col">Status</th>
                                      <th scope="col">Date</th>
                                      <th scope="col">Amount</th>
                                      <th scope="col">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>
                                          <span class="">1</span>
                                      </td>
                                      <td>
                                          <div class="d-flex">
                                              <span class="avatar avatar-sm">
                                                  <img src="../assets/images/faces/2.jpg" class="" alt="">
                                              </span>
                                              <div class="flex-1 ms-2">
                                                  <span class="d-block fw-semibold lh-1">Socrates Itumay</span>
                                                  <a href="javascript:void(0);" class="text-muted fs-12">socratesitumay@gmail.com</a>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <span class="">+1(555) 354 2345</span>
                                      </td>
                                      <td>
                                          <span class="">Beckle Heth Corp.</span>
                                      </td>
                                      <td>
                                          <span><i class="ri-map-pin-fill text-muted me-1"></i>Germany</span>
                                      </td>
                                      <td>
                                          <span class="badge bg-success-transparent">Won Lead</span>
                                      </td>
                                      <td>
                                          <span>02-04-2024</span>
                                      </td>
                                      <td>
                                          <span>$1500</span>
                                      </td>
                                      <td>
                                          <div class="btn-list">
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-sm btn-icon btn-primary-light"><i class="ti ti-eye"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-sm btn-icon btn-success-light"><i class="ti ti-pencil"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-sm btn-icon  btn-danger-light"><i class="ti ti-trash"></i></a>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <span class="">2</span>
                                      </td>
                                      <td>
                                          <div class="d-flex">
                                              <span class="avatar avatar-sm">
                                                  <img src="../assets/images/faces/12.jpg" class="" alt="">
                                              </span>
                                              <div class="flex-1 ms-2">
                                                  <span class="d-block fw-semibold lh-1">Luke Cooper</span>
                                                  <a href="javascript:void(0);" class="text-muted fs-12">LukeCooper@gmail.com</a>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <span class="">+1(555) 873 8923</span>
                                      </td>
                                      <td>
                                          <span class="">Lackme Info Et.</span>
                                      </td>
                                      <td>
                                          <span><i class="ri-map-pin-fill text-muted me-1"></i>London</span>
                                      </td>
                                      <td>
                                          <span class="badge bg-primary-transparent">New Lead</span>
                                      </td>
                                      <td>
                                          <span>03-04-2024</span>
                                      </td>
                                      <td>
                                          <span>$20000</span>
                                      </td>
                                      <td>
                                          <div class="btn-list">
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-sm btn-icon btn-primary-light"><i class="ti ti-eye"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-sm btn-icon btn-success-light"><i class="ti ti-pencil"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-sm btn-icon  btn-danger-light"><i class="ti ti-trash"></i></a>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <span class="">3</span>
                                      </td>
                                      <td>
                                          <div class="d-flex">
                                              <span class="avatar avatar-sm">
                                                  <img src="../assets/images/faces/14.jpg" class="" alt="">
                                              </span>
                                              <div class="flex-1 ms-2">
                                                  <span class="d-block fw-semibold lh-1">Rony Brad</span>
                                                  <a href="javascript:void(0);" class="text-muted fs-12">RonyBrad@gmail.com</a>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <span class="">+1(555) 347 0923</span>
                                      </td>
                                      <td>
                                          <span class="">Mevengo Tech Et Sed</span>
                                      </td>
                                      <td>
                                          <span><i class="ri-map-pin-fill text-muted me-1"></i>Usa</span>
                                      </td>
                                      <td>
                                          <span class="badge bg-primary-transparent">New Lead</span>
                                      </td>
                                      <td>
                                          <span>04-04-2024</span>
                                      </td>
                                      <td>
                                          <span>$10000</span>
                                      </td>
                                      <td>
                                          <div class="btn-list">
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-sm btn-icon btn-primary-light"><i class="ti ti-eye"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-sm btn-icon btn-success-light"><i class="ti ti-pencil"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-sm btn-icon  btn-danger-light"><i class="ti ti-trash"></i></a>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <span class="">4</span>
                                      </td>
                                      <td>
                                          <div class="d-flex">
                                              <span class="avatar avatar-sm">
                                                  <img src="../assets/images/faces/4.jpg" class="" alt="">
                                              </span>
                                              <div class="flex-1 ms-2">
                                                  <span class="d-block fw-semibold lh-1">Sophia Khud</span>
                                                  <a href="javascript:void(0);" class="text-muted fs-12">RonyBrad@gmail.com</a>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <span class="">+1(555) 674 7824</span>
                                      </td>
                                      <td>
                                          <span class="">Jeveda Group En.</span>
                                      </td>
                                      <td>
                                          <span><i class="ri-map-pin-fill text-muted me-1"></i>Canada</span>
                                      </td>
                                      <td>
                                          <span class="badge bg-danger-transparent">Lost Lead</span>
                                      </td>
                                      <td>
                                          <span>05-04-2024</span>
                                      </td>
                                      <td>
                                          <span>$30000</span>
                                      </td>
                                      <td>
                                          <div class="btn-list">
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-sm btn-icon btn-primary-light"><i class="ti ti-eye"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-sm btn-icon btn-success-light"><i class="ti ti-pencil"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-sm btn-icon  btn-danger-light"><i class="ti ti-trash"></i></a>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="border-bottom-0">
                                          <span class="">5</span>
                                      </td>
                                      <td class="border-bottom-0">
                                          <div class="d-flex">
                                              <span class="avatar avatar-sm">
                                                  <img src="../assets/images/faces/3.jpg" class="" alt="">
                                              </span>
                                              <div class="flex-1 ms-2">
                                                  <span class="d-block fw-semibold lh-1">Cooper Hard</span>
                                                  <a href="javascript:void(0);" class="text-muted fs-12">CooperHard@gmail.com</a>
                                              </div>
                                          </div>
                                      </td>
                                      <td class="border-bottom-0">
                                          <span class="">+1(555) 985 2893</span>
                                      </td>
                                      <td class="border-bottom-0">
                                          <span class="">Neveia Exp Sid.</span>
                                      </td>
                                      <td class="border-bottom-0">
                                          <span><i class="ri-map-pin-fill text-muted me-1"></i>England</span>
                                      </td>
                                      <td class="border-bottom-0">
                                          <span class="badge bg-primary-transparent">New Lead</span>
                                      </td>
                                      <td class="border-bottom-0">
                                          <span>06-04-2024</span>
                                      </td>
                                      <td class="border-bottom-0">
                                          <span>$10000</span>
                                      </td>
                                      <td class="border-bottom-0">
                                          <div class="btn-list">
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-sm btn-icon btn-primary-light"><i class="ti ti-eye"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-sm btn-icon btn-success-light"><i class="ti ti-pencil"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-sm btn-icon  btn-danger-light"><i class="ti ti-trash"></i></a>
                                          </div>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
                  <div class="card-footer">
                      <div class="d-flex align-items-center">
                          <div>Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i></div>
                          <div class="ms-auto">
                              <nav aria-label="Page navigation" class="pagination-style-4">
                                  <ul class="pagination mb-0">
                                      <li class="page-item disabled"><a class="page-link" href="javascript:void(0);">Prev</a></li>
                                      <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                      <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                      <li class="page-item"><a class="page-link text-primary" href="javascript:void(0);">Next</a></li>
                                  </ul>
                              </nav>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">
                          Recent Activity
                      </div>
                  </div>
                  <div class="card-body">
                      <ul class="list-unstyled crm-recent-activity-list">
                          <li>
                              <div>
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="fw-semibold mb-0">New Lead</div>
                                      <span class="badge bg-light text-default border">09 July 2021</span>
                                  </div>
                                  <div class="text-muted fs-13 w-75">John Smith contacted via website form submission</div>
                              </div>
                          </li>
                          <li>
                              <div>
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="fw-semibold mb-0">Follow-up</div>
                                      <span class="badge bg-light text-default border">05 July 2021</span>
                                  </div>
                                  <div class="text-muted fs-13 w-75">Emma Johnson called client for initial consultation</div>
                              </div>
                          </li>
                          <li>
                              <div>
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="fw-semibold mb-0">Meeting Scheduled</div>
                                      <span class="badge bg-light text-default border">29 June 2021</span>
                                  </div>
                                  <div class="text-muted fs-13 w-75"> David Lee set up a meeting with potential client for next week</div>
                              </div>
                          </li>
                          <li>
                              <div>
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="fw-semibold mb-0">Deal Closed</div>
                                      <span class="badge bg-light text-default border">09 July 2021</span>
                                  </div>
                                  <div class="text-muted fs-13 w-75">Sarah Thompson finalized a contract with XYZ Company worth $10,000</div>
                              </div>
                          </li>
                          <li>
                              <div>
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="fw-semibold mb-0">Task Completed</div>
                                      <span class="badge bg-light text-default border">25 Aug 2021</span>
                                  </div>
                                  <div class="text-muted fs-13 w-75">Mark Williams finished product demo</div>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: row-3 -->

  </div>
</div>
<!-- End::app-content -->

@endsection