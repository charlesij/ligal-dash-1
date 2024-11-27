@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Start::page-header -->
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">HRM</h1>
              <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item">
                      <a href="javascript:void(0);">
                          Dashboards
                      </a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">HRM</li>
              </ol>
          </div>
          <div>
              <button class="btn btn-primary-light btn-wave me-2">
                  <i class="bx bx-crown align-middle"></i> Plan Upgrade
              </button>
              <button class="btn btn-secondary-light btn-wave me-0">
                  <i class="ri-upload-cloud-line align-middle"></i> Export Report
              </button>
          </div>
      </div>
      <!-- End::page-header -->

      <!-- Start:: row-1 -->
      <div class="row">
          <div class="col-xxl-3 col-xl-6">
              <div class="card custom-card">
                  <div class="card-body p-4">
                      <div class="d-flex align-items-start gap-3">
                          <div>
                              <span class="avatar avatar-md bg-primary">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="128" cy="120" r="40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="40" y="40" width="176" height="176" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M57.78,216a72,72,0,0,1,140.44,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                              </span>
                          </div>
                          <div class="d-flex align-items-start justify-content-between flex-fill flex-wrap">
                              <div>
                                  <span class="d-block mb-1 fw-medium">Total Employees</span>
                                  <h3 class="fw-semibold mb-2">12,116</h3>
                                  <div class="fs-13">
                                      <span class="text-success me-1 d-inline-flex align-items-center"><i class="ti ti-arrow-up me-1"></i>2.45%</span>
                                      <span class="text-muted fs-13">Increased this year</span>
                                  </div>
                              </div>
                              <div class="position-relative">
                                  <div id="total-employees"></div>
                                  <h5 class="fw-semibold mb-0 chart-value text-primary">40%</h5>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6">
              <div class="card custom-card">
                  <div class="card-body p-4">
                      <div class="d-flex align-items-start gap-3">
                          <div>
                              <span class="avatar avatar-md bg-secondary">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="128" cy="120" r="40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M63.8,199.37a72,72,0,0,1,128.4,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="176" y1="56" x2="224" y2="56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="200" y1="32" x2="200" y2="80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M222.67,112A95.92,95.92,0,1,1,144,33.33" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                              </span>
                          </div>
                          <div class="d-flex align-items-start justify-content-between flex-fill flex-wrap">
                              <div>
                                  <span class="d-block mb-1 fw-medium">New Employees</span>
                                  <h3 class="fw-semibold mb-2">1,116</h3>
                                  <div class="fs-13">
                                      <span class="text-danger me-1 d-inline-flex align-items-center"><i class="ti ti-arrow-down me-1"></i>1.95%</span>
                                      <span class="text-muted fs-13">Decreased this year</span>
                                  </div>
                              </div>
                              <div class="position-relative">
                                  <div id="new-employees"></div>
                                  <h5 class="fw-semibold mb-0 chart-value text-secondary">20%</h5>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6">
              <div class="card custom-card">
                  <div class="card-body p-4">
                      <div class="d-flex align-items-start gap-3">
                          <div>
                              <span class="avatar avatar-md bg-success">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="128" cy="120" r="40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M63.8,199.37a72,72,0,0,1,128.4,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="176" y1="56" x2="224" y2="56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M218.54,96A95.93,95.93,0,1,1,144,33.33" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                              </span>
                          </div>
                          <div class="d-flex align-items-start justify-content-between flex-fill flex-wrap">
                              <div>
                                  <span class="d-block mb-1 fw-medium">Resigned Employees</span>
                                  <h3 class="fw-semibold mb-2">102</h3>
                                  <div class="fs-13">
                                      <span class="text-danger me-1 d-inline-flex align-items-center"><i class="ti ti-arrow-down me-1"></i>2.5%</span>
                                      <span class="text-muted fs-13">Decreased this year</span>
                                  </div>
                              </div>
                              <div class="position-relative">
                                  <div id="resigned-employees"></div>
                                  <h5 class="fw-semibold mb-0 chart-value text-success">50%</h5>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6">
              <div class="card custom-card">
                  <div class="card-body p-4">
                      <div class="d-flex align-items-start gap-3">
                          <div>
                              <span class="avatar avatar-md bg-info">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="128" cy="136" r="32" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M80,192a60,60,0,0,1,96,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="32" y="48" width="192" height="160" rx="8" transform="translate(256) rotate(90)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="96" y1="64" x2="160" y2="64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                              </span>
                          </div>
                          <div class="d-flex align-items-start justify-content-between flex-fill flex-wrap">
                              <div>
                                  <span class="d-block mb-1 fw-medium">Employees On Leave</span>
                                  <h3 class="fw-semibold mb-2">212</h3>
                                  <div class="fs-13">
                                      <span class="text-success me-1 d-inline-flex align-items-center"><i class="ti ti-arrow-up me-1"></i>1.32%</span>
                                      <span class="text-muted fs-13">Increased this year</span>
                                  </div>
                              </div>
                              <div class="position-relative">
                                  <div id="employees-on-leave"></div>
                                  <h5 class="fw-semibold mb-0 chart-value text-info">60%</h5>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: row-1 -->

      <!-- Start:: row-2 -->
      <div class="row">
          <div class="col-xxl-6">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">Attendance Overview</div>
                  </div>
                  <div class="card-body">
                      <div id="attendance-overview"></div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6">
              <div class="card custom-card">
                  <div class="card-header justify-content-between">
                      <div class="card-title">Upcoming Events</div>
                      <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-primary-light">
                          View All
                      </a>
                  </div>
                  <div class="card-body">
                      <ul class="list-unstyled timeline-widget1 mb-0">
                          <li class="timeline-widget-list">
                              <div class="d-flex align-items-top">
                                  <div class="me-5 text-center">
                                      <span class="d-block fw-semibold">15</span>
                                      <span class="d-block fs-12 text-muted">Jun</span>
                                  </div>
                                  <div class="d-flex flex-wrap flex-fill align-items-top justify-content-between">
                                      <div>
                                          <p class="mb-1 text-truncate timeline-widget-content">Join us in celebrating John Doe's birthday with cake in the break room at 3:00 PM</p>
                                          <p class="mb-0 fs-12 lh-1 text-muted">10:00AM<span class="badge bg-secondary-transparent ms-2">Birthday</span></p>
                                      </div>
                                      <div class="dropdown">
                                          <a aria-label="anchor" href="javascript:void(0);" class="p-2 fs-16 text-muted" data-bs-toggle="dropdown">
                                              <i class="fe fe-more-vertical"></i>
                                          </a>
                                          <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                              <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                              <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="timeline-widget-list">
                              <div class="d-flex align-items-top">
                                  <div class="me-5 text-center">
                                      <span class="d-block fw-semibold">22</span>
                                      <span class="d-block fs-12 text-muted">Jun</span>
                                  </div>
                                  <div class="d-flex flex-wrap flex-fill align-items-top justify-content-between">
                                      <div>
                                          <p class="mb-1 text-truncate timeline-widget-content ">Office closed in observance of Independence Day. Enjoy your holiday!</p>
                                          <p class="mb-0 fs-12 lh-1 text-muted"><span class="badge bg-primary-transparent">Holiday</span></p>
                                      </div>
                                      <div class="dropdown">
                                          <a aria-label="anchor" href="javascript:void(0);" class="p-2 fs-16 text-muted" data-bs-toggle="dropdown">
                                              <i class="fe fe-more-vertical"></i>
                                          </a>
                                          <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                              <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                              <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="timeline-widget-list">
                              <div class="d-flex align-items-top">
                                  <div class="me-5 text-center">
                                      <span class="d-block fw-semibold">10</span>
                                      <span class="d-block fs-12 text-muted">Jul</span>
                                  </div>
                                  <div class="d-flex flex-wrap flex-fill align-items-top justify-content-between">
                                      <div>
                                          <p class="mb-1 text-truncate timeline-widget-content">Family-friendly event with games, food, and activities. A great opportunity for team building and relaxation.</p>
                                          <p class="mb-2 fs-12 lh-1 text-muted">09:00AM - 06:00PM<span class="badge bg-success-transparent ms-2">Picnic</span></p>
                                      </div>
                                      <div class="dropdown">
                                          <a aria-label="anchor" href="javascript:void(0);" class="p-2 fs-16 text-muted" data-bs-toggle="dropdown">
                                              <i class="fe fe-more-vertical"></i>
                                          </a>
                                          <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                              <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                              <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="timeline-widget-list">
                              <div class="d-flex align-items-top">
                                  <div class="me-5 text-center">
                                      <span class="d-block fw-semibold">18</span>
                                      <span class="d-block fs-12 text-muted">Jul</span>
                                  </div>
                                  <div class="d-flex flex-wrap flex-fill align-items-top justify-content-between">
                                      <div>
                                          <p class="mb-1 text-truncate timeline-widget-content">National Holiday - Dolore Ipsum</p>
                                          <p class="mb-0 fs-12 lh-1 text-muted"><span class="badge bg-primary-transparent">Holiday</span></p>
                                      </div>
                                      <div class="dropdown">
                                          <a aria-label="anchor" href="javascript:void(0);" class="p-2 fs-16 text-muted" data-bs-toggle="dropdown">
                                              <i class="fe fe-more-vertical"></i>
                                          </a>
                                          <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                              <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                              <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="timeline-widget-list">
                              <div class="d-flex align-items-top">
                                  <div class="me-5 text-center">
                                      <span class="d-block fw-semibold">05</span>
                                      <span class="d-block fs-12 text-muted">Aug</span>
                                  </div>
                                  <div class="d-flex flex-wrap flex-fill align-items-top justify-content-between">
                                      <div>
                                          <p class="mb-1 text-truncate timeline-widget-content">John pup birthday - Team Member</p>
                                          <p class="mb-2 fs-12 lh-1 text-muted">09:00AM<span class="badge bg-secondary-transparent ms-2">Birthday</span></p>
                                      </div>
                                      <div class="dropdown">
                                          <a aria-label="anchor" href="javascript:void(0);" class="p-2 fs-16 text-muted" data-bs-toggle="dropdown">
                                              <i class="fe fe-more-vertical"></i>
                                          </a>
                                          <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                              <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                              <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="timeline-widget-list">
                              <div class="d-flex align-items-top">
                                  <div class="me-5 text-center">
                                      <span class="d-block fw-semibold">20</span>
                                      <span class="d-block fs-12 text-muted">Aug</span>
                                  </div>
                                  <div class="d-flex flex-wrap flex-fill align-items-top justify-content-between">
                                      <div>
                                          <p class="mb-1 text-truncate timeline-widget-content">Amet sed no dolor kasd - Et Dolores Tempor Erat</p>
                                          <p class="mb-2 fs-12 lh-1 text-muted">04:00PM<span class="badge bg-info-transparent ms-2">Announcement</span></p>
                                      </div>
                                      <div class="dropdown">
                                          <a aria-label="anchor" href="javascript:void(0);" class="p-2 fs-16 text-muted" data-bs-toggle="dropdown">
                                              <i class="fe fe-more-vertical"></i>
                                          </a>
                                          <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                              <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                              <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6">
              <div class="card custom-card overflow-hidden">
                  <div class="card-header">
                      <div class="card-title">Employee Work Format</div>
                  </div>
                  <div class="card-body p-0">
                      <div class="leads-source-chart d-flex align-items-center justify-content-center p-3 border-bottom border-block-end-dashed">
                          <div id="work-format"></div>
                      </div>
                      <ul class="list-group list-group-flush employee-work-format-list">
                          <li class="list-group-item">
                              <div class="d-flex align-items-center justify-content-between">
                                  <div class="fw-semibold">Remote</div>
                                  <h6 class="fw-semibold mb-0"><span class="fs-13 me-2 d-inline-flex align-items-center text-success"><i class="ti ti-arrow-up"></i>4.26%</span>230</h6>
                              </div>
                          </li>
                          <li class="list-group-item">
                              <div class="d-flex align-items-center justify-content-between">
                                  <div class="fw-semibold">On Site</div>
                                  <h6 class="fw-semibold mb-0"><span class="fs-13 me-2 d-inline-flex align-items-center text-success"><i class="ti ti-arrow-up"></i>2.43%</span>200</h6>
                              </div>
                          </li>
                          <li class="list-group-item">
                              <div class="d-flex align-items-center justify-content-between">
                                  <div class="fw-semibold">Hybrid</div>
                                  <h6 class="fw-semibold mb-0"><span class="fs-13 me-2 d-inline-flex align-items-center text-danger"><i class="ti ti-arrow-down"></i>0.93%</span>178</h6>
                              </div>
                          </li>
                          <li class="list-group-item">
                              <div class="d-flex align-items-center justify-content-between">
                                  <div class="fw-semibold">Shift Work</div>
                                  <h6 class="fw-semibold mb-0"><span class="fs-13 me-2 d-inline-flex align-items-center text-success"><i class="ti ti-arrow-up"></i>8.84%</span>153</h6>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: row-2 -->

      <!-- Start:: row-3 -->
      <div class="row">
          <div class="col-xxl-3">
              <div class="card custom-card">
                  <div class="card-header justify-content-between">
                      <div class="card-title">
                          Meetings Schedule
                      </div>
                      <button class="btn btn-sm btn-wave btn-primary-light">View All</button>
                  </div>
                  <div class="card-body">
                      <ul class="list-unstyled mb-0 schedule-list">
                          <li>
                              <div class="d-flex align-items-center">
                                  <div class="lh-1">
                                      <span class="avatar avatar-md bg-danger-transparent">
                                          <i class="ri-vidicon-line fs-18"></i>
                                      </span>
                                  </div>
                                  <div class="flex-fill ms-3">
                                      <p class="fw-semibold mb-0">Lead Meeting</p>
                                      <p class="fs-13 text-muted mb-0">03 Feb(9.00am-10.00am)</p>
                                  </div>
                                  <div>
                                      <button type="button" class="btn btn-primary btn-sm">Join Now</button>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center">
                                  <div class="lh-1">
                                      <span class="avatar avatar-md bg-info-transparent">
                                          <i class="ri-phone-line fs-18"></i>
                                      </span>
                                  </div>
                                  <div class="flex-fill ms-3">
                                      <p class="fw-semibold mb-0">Project Meeting</p>
                                      <p class="fs-13 text-muted mb-0">04 Feb(9.00am-10.00am)</p>
                                  </div>
                                  <div>
                                      <button type="button" class="btn btn-light btn-sm">Join Now</button>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center">
                                  <div class="lh-1">
                                      <span class="avatar avatar-md bg-danger-transparent">
                                          <i class="ri-vidicon-line fs-18"></i>
                                      </span>
                                  </div>
                                  <div class="flex-fill ms-3">
                                      <p class="fw-semibold mb-0">Team Meeting</p>
                                      <p class="fs-13 text-muted mb-0">05 Feb(9.00am-10.00am)</p>
                                  </div>
                                  <div>
                                      <button type="button" class="btn btn-light btn-sm">Join Now</button>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center">
                                  <div class="lh-1">
                                      <span class="avatar avatar-md bg-info-transparent">
                                          <i class="ri-phone-line fs-18"></i>
                                      </span>
                                  </div>
                                  <div class="flex-fill ms-3">
                                      <p class="fw-semibold mb-0">Client Meeting</p>
                                      <p class="fs-13 text-muted mb-0">06 Feb(9.00am-10.00am)</p>
                                  </div>
                                  <div>
                                      <button type="button" class="btn btn-light btn-sm">Join Now</button>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center">
                                  <div class="lh-1">
                                      <span class="avatar avatar-md bg-info-transparent">
                                          <i class="ri-phone-line fs-18"></i>
                                      </span>
                                  </div>
                                  <div class="flex-fill ms-3">
                                      <p class="fw-semibold mb-0">Client Meeting</p>
                                      <p class="fs-13 text-muted mb-0">06 Feb(9.00am-10.00am)</p>
                                  </div>
                                  <div>
                                      <button type="button" class="btn btn-light btn-sm">Join Now</button>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center">
                                  <div class="lh-1">
                                      <span class="avatar avatar-md bg-info-transparent">
                                          <i class="ri-phone-line fs-18"></i>
                                      </span>
                                  </div>
                                  <div class="flex-fill ms-3">
                                      <p class="fw-semibold mb-0">Project Meeting</p>
                                      <p class="fs-13 text-muted mb-0">04 Feb(9.00am-10.00am)</p>
                                  </div>
                                  <div>
                                      <button type="button" class="btn btn-light btn-sm">Join Now</button>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-xxl-6">
              <div class="card custom-card overflow-hidden">
                  <div class="card-header justify-content-between">
                      <div class="card-title">Leave Request</div>
                      <a href="javascript:void(0);" class="btn btn-sm btn-light border">View All</a>
                  </div>
                  <div class="card-body p-0">
                      <div class="table-responsive">
                          <table class="table text-nowrap mb-0">
                              <thead>
                                  <tr>
                                      <th scope="col">Employee</th>
                                      <th scope="col">Type</th>
                                      <th scope="col">Days</th>
                                      <th scope="col">Status</th>
                                      <th scope="col">Actions</th>
                                  </tr>
                              </thead>
                              <tbody class="">
                                  <tr>
                                      <td>
                                          <div class="d-flex">
                                              <span class="avatar avatar-sm">
                                                  <img src="../assets/images/faces/2.jpg" class="" alt="">
                                              </span>
                                              <div class="flex-1 ms-2">
                                                  <p class="mb-0 fs-14">Socrates Itumay</p>
                                                  <a href="javascript:void(0);">Team Lead</a>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <span class="">Sick Leave</span>
                                      </td>
                                      <td>
                                          <span class="">2 Days</span>
                                      </td>
                                      <td>
                                          <span class="badge bg-success-transparent">Approved</span>
                                      </td>
                                      <td>
                                          <div class="btn-list">
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm rounded-pill btn-primary-light"><i class="ti ti-eye"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm rounded-pill btn-success-light"><i class="ti ti-pencil"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm rounded-pill  btn-danger-light"><i class="ti ti-trash"></i></a>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="d-flex">
                                              <span class="avatar avatar-sm">
                                                  <img src="../assets/images/faces/4.jpg" class="" alt="">
                                              </span>
                                              <div class="flex-1 ms-2">
                                                  <p class="mb-0 fs-14">Samantha Paul</p>
                                                  <a href="javascript:void(0);">Sr.UI Developer</a>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <span class="">Casual Leave</span>
                                      </td>
                                      <td>
                                          <span class="">1 Day</span>
                                      </td>
                                      <td>
                                          <span class="badge bg-warning-transparent">Pending</span>
                                      </td>
                                      <td>
                                          <div class="btn-list">
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm rounded-pill btn-primary-light"><i class="ti ti-eye"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm rounded-pill btn-success-light"><i class="ti ti-pencil"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm rounded-pill  btn-danger-light"><i class="ti ti-trash"></i></a>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="d-flex">
                                              <span class="avatar avatar-sm">
                                                  <img src="../assets/images/faces/14.jpg" class="" alt="">
                                              </span>
                                              <div class="flex-1 ms-2">
                                                  <p class="mb-0 fs-14">Gray Noal</p>
                                                  <a href="javascript:void(0);">Java Developer</a>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <span class="">Paternity Leave</span>
                                      </td>
                                      <td>
                                          <span class="">5 Days</span>
                                      </td>
                                      <td>
                                          <span class="badge bg-success-transparent">Approved</span>
                                      </td>
                                      <td>
                                          <div class="btn-list">
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm rounded-pill btn-primary-light"><i class="ti ti-eye"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm rounded-pill btn-success-light"><i class="ti ti-pencil"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm rounded-pill  btn-danger-light"><i class="ti ti-trash"></i></a>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="d-flex">
                                              <span class="avatar avatar-sm">
                                                  <img src="../assets/images/faces/15.jpg" class="" alt="">
                                              </span>
                                              <div class="flex-1 ms-2">
                                                  <p class="mb-0 fs-14">Gray Noal</p>
                                                  <a href="javascript:void(0);">React Developer</a>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <span class="">Personal Leave</span>
                                      </td>
                                      <td>
                                          <span class="">2 Days</span>
                                      </td>
                                      <td>
                                          <span class="badge bg-danger-transparent">Rejected</span>
                                      </td>
                                      <td>
                                          <div class="btn-list">
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm rounded-pill btn-primary-light"><i class="ti ti-eye"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm rounded-pill btn-success-light"><i class="ti ti-pencil"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm rounded-pill  btn-danger-light"><i class="ti ti-trash"></i></a>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="border-bottom-0">
                                          <div class="d-flex">
                                              <span class="avatar avatar-sm">
                                                  <img src="../assets/images/faces/16.jpg" class="" alt="">
                                              </span>
                                              <div class="flex-1 ms-2">
                                                  <p class="mb-0 fs-14">Pope Johnson</p>
                                                  <a href="javascript:void(0);">Jr.Java Developer</a>
                                              </div>
                                          </div>
                                      </td>
                                      <td class="border-bottom-0">
                                          <span class="">Gifted Leave</span>
                                      </td>
                                      <td class="border-bottom-0">
                                          <span class="">2 Days</span>
                                      </td>
                                      <td class="border-bottom-0">
                                          <span class="badge bg-warning-transparent">Pending
                                          </span>
                                      </td>
                                      <td class="border-bottom-0">
                                          <div class="btn-list">
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm rounded-pill btn-primary-light"><i class="ti ti-eye"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm rounded-pill btn-success-light"><i class="ti ti-pencil"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm rounded-pill  btn-danger-light"><i class="ti ti-trash"></i></a>
                                          </div>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">
                          Recruitment Pipeline
                      </div>
                  </div>
                  <div class="card-body">
                      <ul class="list-unstyled recruitment-pipeline-list">
                          <li>
                              <div class="d-flex align-items-center gap-2">
                                  <div>
                                      <span class="avatar avatar-md avatar-rounded bg-primary-transparent">
                                          <i class="ti ti-file-text fs-5"></i>
                                      </span>
                                  </div>
                                  <div class="flex-fill fw-semibold">
                                      Total Applications
                                  </div>
                                  <div class="text-end">
                                      <span class="text-primary h6 mb-0 fw-semibold">1,982</span>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center gap-2">
                                  <div>
                                      <span class="avatar avatar-md avatar-rounded bg-secondary-transparent">
                                          <i class="ti ti-user-plus fs-5"></i>
                                      </span>
                                  </div>
                                  <div class="flex-fill fw-semibold">
                                      Recruited
                                  </div>
                                  <div class="text-end">
                                      <span class="text-secondary h6 mb-0">582</span>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center gap-2">
                                  <div>
                                      <span class="avatar avatar-md avatar-rounded bg-success-transparent">
                                          <i class="ti ti-clipboard-plus fs-5"></i>
                                      </span>
                                  </div>
                                  <div class="flex-fill fw-semibold">
                                      Short Listed
                                  </div>
                                  <div class="text-end">
                                      <span class="text-success h6 mb-0">395</span>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center gap-2">
                                  <div>
                                      <span class="avatar avatar-md avatar-rounded bg-warning-transparent">
                                          <i class="ti ti-file-x fs-5"></i>
                                      </span>
                                  </div>
                                  <div class="flex-fill fw-semibold">
                                      Rejected
                                  </div>
                                  <div class="text-end">
                                      <span class="text-warning h6 mb-0">905</span>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center gap-2">
                                  <div>
                                      <span class="avatar avatar-md avatar-rounded bg-info-transparent">
                                          <i class="ti ti-file-off fs-5"></i>
                                      </span>
                                  </div>
                                  <div class="flex-fill fw-semibold">
                                      Blocked
                                  </div>
                                  <div class="text-end">
                                      <span class="text-info h6 mb-0">582</span>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center gap-2">
                                  <div>
                                      <span class="avatar avatar-md avatar-rounded bg-danger-transparent">
                                          <i class="ti ti-device-imac fs-5"></i>
                                      </span>
                                  </div>
                                  <div class="flex-fill fw-semibold">
                                      Interviewed
                                  </div>
                                  <div class="text-end">
                                      <span class="text-danger h6 mb-0">145</span>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: row-3 -->

      <!-- Start:: row-4 -->
      <div class="row">
          <div class="col-xxl-3">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">
                          Leave Requests
                      </div>
                  </div>
                  <div class="card-body">
                      <ul class="list-unstyled hrm-leave-requests-list">
                          <li>
                              <div class="d-flex align-items-center flex-wrap gap-3">
                                  <div>
                                      <span class="avatar avatar-sm">
                                          <img src="../assets/images/faces/2.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="fw-medium">Sarah Taylor</span>
                                      <span class="d-block text-muted fs-13">Casual Leave</span>
                                  </div>
                                  <div class="btn-list">
                                      <button class="btn btn-sm btn-outline-success btn-icon btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" aria-label="Accept" data-bs-original-title="Accept"><i class="ri-check-line"></i></button>
                                      <button class="btn btn-sm btn-danger-light btn-icon btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" aria-label="Reject" data-bs-original-title="Reject"><i class="ri-close-fill"></i></button>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center flex-wrap gap-3">
                                  <div>
                                      <span class="avatar avatar-sm">
                                          <img src="../assets/images/faces/1.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="fw-medium">John Doe </span>
                                      <span class="d-block text-muted fs-13">Vacation Leave</span>
                                  </div>
                                  <div class="btn-list">
                                      <button class="btn btn-sm btn-outline-success btn-icon btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" aria-label="Accept" data-bs-original-title="Accept"><i class="ri-check-line"></i></button>
                                      <button class="btn btn-sm btn-danger-light btn-icon btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" aria-label="Reject" data-bs-original-title="Reject"><i class="ri-close-fill"></i></button>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center flex-wrap gap-3">
                                  <div>
                                      <span class="avatar avatar-sm">
                                          <img src="../assets/images/faces/3.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="fw-medium">Jane Smith </span>
                                      <span class="d-block text-muted fs-13">Sick Leave</span>
                                  </div>
                                  <div class="btn-list">
                                      <button class="btn btn-sm btn-outline-success btn-icon btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" aria-label="Accept" data-bs-original-title="Accept"><i class="ri-check-line"></i></button>
                                      <button class="btn btn-sm btn-danger-light btn-icon btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" aria-label="Reject" data-bs-original-title="Reject"><i class="ri-close-fill"></i></button>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center flex-wrap gap-3">
                                  <div>
                                      <span class="avatar avatar-sm">
                                          <img src="../assets/images/faces/10.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="fw-medium">Robert White</span>
                                      <span class="d-block text-muted fs-13">Leave On Demand</span>
                                  </div>
                                  <div class="btn-list">
                                      <button class="btn btn-sm btn-outline-success btn-icon btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" aria-label="Accept" data-bs-original-title="Accept"><i class="ri-check-line"></i></button>
                                      <button class="btn btn-sm btn-danger-light btn-icon btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" aria-label="Reject" data-bs-original-title="Reject"><i class="ri-close-fill"></i></button>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center flex-wrap gap-3">
                                  <div>
                                      <span class="avatar avatar-sm">
                                          <img src="../assets/images/faces/4.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="fw-medium">Emily Clark</span>
                                      <span class="d-block text-muted fs-13">Casual Leave</span>
                                  </div>
                                  <div class="btn-list">
                                      <button class="btn btn-sm btn-outline-success btn-icon btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" aria-label="Accept" data-bs-original-title="Accept"><i class="ri-check-line"></i></button>
                                      <button class="btn btn-sm btn-danger-light btn-icon btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" aria-label="Reject" data-bs-original-title="Reject"><i class="ri-close-fill"></i></button>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center flex-wrap gap-3">
                                  <div>
                                      <span class="avatar avatar-sm">
                                          <img src="../assets/images/faces/11.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="fw-medium">Alex Johnson</span>
                                      <span class="d-block text-muted fs-13">Sick Leave</span>
                                  </div>
                                  <div class="btn-list">
                                      <button class="btn btn-sm btn-outline-success btn-icon btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" aria-label="Accept" data-bs-original-title="Accept"><i class="ri-check-line"></i></button>
                                      <button class="btn btn-sm btn-danger-light btn-icon btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" aria-label="Reject" data-bs-original-title="Reject"><i class="ri-close-fill"></i></button>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center flex-wrap gap-3">
                                  <div>
                                      <span class="avatar avatar-sm">
                                          <img src="../assets/images/faces/5.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="fw-medium">William Smith</span>
                                      <span class="d-block text-muted fs-13">Leave On Demand</span>
                                  </div>
                                  <div class="btn-list">
                                      <button class="btn btn-sm btn-outline-success btn-icon btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" aria-label="Accept" data-bs-original-title="Accept"><i class="ri-check-line"></i></button>
                                      <button class="btn btn-sm btn-danger-light btn-icon btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" aria-label="Reject" data-bs-original-title="Reject"><i class="ri-close-fill"></i></button>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-xxl-9">
              <div class="card custom-card">
                  <div class="card-header justify-content-between">
                      <div class="card-title">
                          Employees List
                      </div>
                      <div class="d-flex flex-wrap gap-2">
                          <div>
                              <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=" example">
                          </div>
                          <div class="dropdown">
                              <a href="javascript:void(0);" class="btn btn-sm btn-primary" data-bs-toggle="dropdown" aria-expanded="false">
                                  Sort By<i class="ri-arrow-down-s-line align-middle ms-1"></i>
                              </a>
                              <ul class="dropdown-menu" role="menu">
                                  <li><a class="dropdown-item" href="javascript:void(0);">New</a></li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="card-body p-0">
                      <div class="table-responsive">
                          <table class="table text-nowrap">
                              <thead>
                                  <tr>
                                      <th scope="col" class="text-center">S.No</th>
                                      <th scope="col">Employee Name</th>
                                      <th scope="col">Employee Id</th>
                                      <th scope="col">Designation</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Contact</th>
                                      <th scope="col">Salary</th>
                                      <th scope="col">Status</th>
                                      <th scope="col">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td class="text-center">
                                          01
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <img src="../assets/images/faces/1.jpg" class="avatar avatar-sm" alt="">
                                              <div class="flex-1 flex-between pos-relative ms-2">
                                                  <div class="">
                                                      <a href="javascript:void(0);" class="fs-13 fw-medium">Richard Dom</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <span class="text-primary fs-14">#Spt00120</span>
                                      </td>
                                      <td>
                                          <span class="">Team Leader</span>
                                      </td>
                                      <td>
                                          richard116@demo.com
                                      </td>
                                      <td>
                                          <span class="">+0987654321</span>
                                      </td>
                                      <td>
                                          <span class="fw-medium">$15,000</span>
                                      </td>
                                      <td>
                                          <span class="badge bg-success-transparent">Active</span>
                                      </td>
                                      <td>
                                          <div class="g-2">
                                              <a aria-label="anchor" class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                  <span class="ri-pencil-line fs-14"></span>
                                              </a>
                                              <a aria-label="anchor" class="btn btn-danger-light btn-sm ms-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                  <span class="ri-delete-bin-7-line fs-14"></span>
                                              </a>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="text-center">
                                          02
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <img src="../assets/images/faces/2.jpg" class="avatar avatar-sm" alt="">
                                              <div class="flex-1 flex-between pos-relative ms-2">
                                                  <div class="">
                                                      <a href="javascript:void(0);" class="fs-13 fw-medium">Kakashra Sri</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <span class="text-primary fs-14">#Spt00121</span>
                                      </td>
                                      <td>
                                          <span class="">Web Developer</span>
                                      </td>
                                      <td>
                                          Kakashra987@demo.com
                                      </td>
                                      <td>
                                          <span class="">+0986548761</span>
                                      </td>
                                      <td>
                                          <span class="fw-medium">$20,000</span>
                                      </td>
                                      <td>
                                          <span class="badge bg-success-transparent">Active</span>
                                      </td>
                                      <td>
                                          <div class="g-2">
                                              <a aria-label="anchor" class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                  <span class="ri-pencil-line fs-14"></span>
                                              </a>
                                              <a aria-label="anchor" class="btn btn-danger-light btn-sm ms-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                  <span class="ri-delete-bin-7-line fs-14"></span>
                                              </a>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="text-center">
                                          03
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <img src="../assets/images/faces/3.jpg" class="avatar avatar-sm" alt="">
                                              <div class="flex-1 flex-between pos-relative ms-2">
                                                  <div class="">
                                                      <a href="javascript:void(0);" class="fs-13 fw-medium">Nikki Jey</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <span class="text-primary fs-14">#Spt00122</span>
                                      </td>
                                      <td>
                                          <span class="">Project Manager</span>
                                      </td>
                                      <td>
                                          Nikki654@demo.com
                                      </td>
                                      <td>
                                          <span class="">+0986548787</span>
                                      </td>
                                      <td>
                                          <span class="fw-medium">$25,000</span>
                                      </td>
                                      <td>
                                          <span class="badge bg-success-transparent">Active</span>
                                      </td>
                                      <td>
                                          <div class="g-2">
                                              <a aria-label="anchor" class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                  <span class="ri-pencil-line fs-14"></span>
                                              </a>
                                              <a aria-label="anchor" class="btn btn-danger-light btn-sm ms-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                  <span class="ri-delete-bin-7-line fs-14"></span>
                                              </a>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="text-center">
                                          04
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <img src="../assets/images/faces/4.jpg" class="avatar avatar-sm" alt="">
                                              <div class="flex-1 flex-between pos-relative ms-2">
                                                  <div class="">
                                                      <a href="javascript:void(0);" class="fs-13 fw-medium">Sasukey Ahuhi</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <span class="text-primary fs-14">#Spt00123</span>
                                      </td>
                                      <td>
                                          <span class="">Project Manager</span>
                                      </td>
                                      <td>
                                          Sasukey986@demo.com
                                      </td>
                                      <td>
                                          <span class="">+0986548788</span>
                                      </td>
                                      <td>
                                          <span class="fw-medium">$30,000</span>
                                      </td>
                                      <td>
                                          <span class="badge bg-success-transparent">Active</span>
                                      </td>
                                      <td>
                                          <div class="g-2">
                                              <a aria-label="anchor" class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                  <span class="ri-pencil-line fs-14"></span>
                                              </a>
                                              <a aria-label="anchor" class="btn btn-danger-light btn-sm ms-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                  <span class="ri-delete-bin-7-line fs-14"></span>
                                              </a>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="text-center">
                                          05
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <img src="../assets/images/faces/5.jpg" class="avatar avatar-sm" alt="">
                                              <div class="flex-1 flex-between pos-relative ms-2">
                                                  <div class="">
                                                      <a href="javascript:void(0);" class="fs-13 fw-medium">Xiong Yu</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <span class="text-primary fs-14">#Spt00124</span>
                                      </td>
                                      <td>
                                          <span class="">UI Developer</span>
                                      </td>
                                      <td>
                                          Xiongu987@demo.com
                                      </td>
                                      <td>
                                          <span class="">+0986548988</span>
                                      </td>
                                      <td>
                                          <span class="fw-medium">$35,000</span>
                                      </td>
                                      <td>
                                          <span class="badge bg-success-transparent">Active</span>
                                      </td>
                                      <td>
                                          <div class="g-2">
                                              <a aria-label="anchor" class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                  <span class="ri-pencil-line fs-14"></span>
                                              </a>
                                              <a aria-label="anchor" class="btn btn-danger-light btn-sm ms-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                  <span class="ri-delete-bin-7-line fs-14"></span>
                                              </a>
                                          </div>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
                  <div class="card-footer border-top-0">
                      <div class="d-flex align-items-center">
                          <div>
                              Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-medium"></i>
                          </div>
                          <div class="ms-auto">
                              <nav aria-label="Page navigation" class="pagination-style-4">
                                  <ul class="pagination mb-0">
                                      <li class="page-item disabled">
                                          <a class="page-link" href="javascript:void(0);">
                                              Prev
                                          </a>
                                      </li>
                                      <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                      <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                      <li class="page-item">
                                          <a class="page-link text-primary" href="javascript:void(0);">
                                              next
                                          </a>
                                      </li>
                                  </ul>
                              </nav>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: row-4 -->

  </div>
</div> 
<!-- End::app-content -->

@endsection