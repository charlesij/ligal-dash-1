@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Start::page-header -->
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Medical</h1>
              <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item">
                      <a href="javascript:void(0);">
                          Dashboards
                      </a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Medical</li>
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
          <div class="col-xxl-4">
              <div class="card custom-card overflow-hidden medical-main-card">
                  <div class="card-body p-4">
                      <div class="row justify-content-between">
                          <div class="col-xxl-9">
                              <h4 class="fw-semibold text-fixed-white mb-2">Personalized Care Alerts</h4>
                              <span class="fs-14 d-block mb-3 text-fixed-white op-7">Unlock detailed, actionable reports on patient well-being, facilitating informed decision-making for optimized care.</span>
                              <button type="button" class="btn btn-success btn-w-md brn-wave mt-2">Book Appointment <i class="ti ti-arrow-narrow-right ms-1"></i></button>
                          </div>
                          <div class="col-xxl-3">
                              <img src="../assets/images/media/backgrounds/3.png" class="img-fluid d-xxl-block d-none" alt="">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-5">
              <div class="row">
                  <div class="col-xl-6">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="d-flex align-items-center flex-wrap gap-3">
                                  <div class=lh-1>
                                      <span class="avatar avatar-lg bg-primary-transparent">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="84" cy="108" r="52" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M10.23,200a88,88,0,0,1,147.54,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M172,160a87.93,87.93,0,0,1,73.77,40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M152.69,59.7A52,52,0,1,1,172,160" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <h3 class="fw-semibold mb-1">256</h3>
                                      <span class="">Total Patients</span>
                                  </div>
                                  <div class="text-end">
                                      <span class="d-block text-muted fs-13 mb-1">Today</span>
                                      <span class="badge bg-success-transparent d-inline-flex align-items-center"><i class="ti ti-arrow-up me-1"></i>4.97%</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-6">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="d-flex align-items-center flex-wrap gap-3">
                                  <div class=lh-1>
                                      <span class="avatar avatar-lg bg-secondary-transparent">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="208" cy="160" r="12"/><circle cx="208" cy="160" r="32" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M104,144v48a40,40,0,0,0,40,40h24a40,40,0,0,0,40-40h0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M136,40h24V87.17c0,30.77-24.48,56.43-55.26,56.83A56,56,0,0,1,48,88V40H72" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <h3 class="fw-semibold mb-1">4,026</h3>
                                      <span class="">Total Doctors</span>
                                  </div>
                                  <div class="text-end">
                                      <span class="d-block text-muted fs-13 mb-1">Today</span>
                                      <span class="badge bg-danger-transparent d-inline-flex align-items-center"><i class="ti ti-arrow-down me-1"></i>+0.40%</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-6">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="d-flex align-items-center flex-wrap gap-3">
                                  <div class=lh-1>
                                      <span class="avatar avatar-lg bg-success-transparent">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="128" cy="120" r="40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="40" y="40" width="176" height="176" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M57.78,216a72,72,0,0,1,140.44,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <h3 class="fw-semibold mb-1">148</h3>
                                      <span class="">Total Appointments</span>
                                  </div>
                                  <div class="text-end">
                                      <span class="d-block text-muted fs-13 mb-1">Today</span>
                                      <span class="badge bg-success-transparent d-inline-flex align-items-center"><i class="ti ti-arrow-up me-1"></i>16.34%</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-6">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="d-flex align-items-center flex-wrap gap-3">
                                  <div class=lh-1>
                                      <span class="avatar avatar-lg bg-info-transparent">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><line x1="128" y1="40" x2="128" y2="224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="160" y1="72" x2="184" y2="72" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="160" y1="104" x2="184" y2="104" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="72" y1="72" x2="96" y2="72" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="72" y1="104" x2="96" y2="104" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M48,40H208a8,8,0,0,1,8,8V200a0,0,0,0,1,0,0H40a0,0,0,0,1,0,0V48a8,8,0,0,1,8-8Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="40" y1="200" x2="40" y2="224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="216" y1="200" x2="216" y2="224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <h3 class="fw-semibold mb-1">116</h3>
                                      <span class="">Available Rooms</span>
                                  </div>
                                  <div class="text-end">
                                      <span class="d-block text-muted fs-13 mb-1">Today</span>
                                      <span class="badge bg-success-transparent d-inline-flex align-items-center"><i class="ti ti-arrow-up me-1"></i>0.21%</span>
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
                          Avaialable Treatments
                      </div>
                  </div>
                  <div class="card-body p-4"> 
                      <div class="row gy-3"> 
                          <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-center"> 
                              <a aria-label="anchor" href="javascript:void(0);" class="btn btn-primary-light btn-wave border-0 p-3 lh-1 rounded"> 
                                  <i class="ti ti-heartbeat fs-22"></i> 
                              </a> 
                              <a href="javascript:void(0);" class="d-block pt-3 fw-medium fs-12">Cardiology</a> 
                          </div> 
                          <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-center"> 
                              <a aria-label="anchor" href="javascript:void(0);" class="btn btn-secondary-light btn-wave border-0 p-3 lh-1 rounded"> 
                                  <i class="ti ti-baby-carriage fs-22"></i> 
                              </a> 
                              <a href="javascript:void(0);" class="d-block pt-3 fw-medium fs-12">Pediatrics</a> 
                          </div> 
                          <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-center"> 
                              <a aria-label="anchor" href="javascript:void(0);" class="btn btn-success-light btn-wave border-0 p-3 lh-1 rounded"> 
                                  <i class="ti ti-bone fs-22"></i> 
                              </a> 
                              <a href="javascript:void(0);" class="d-block pt-3 fw-medium fs-12">Orthopedic</a> 
                          </div> 
                          <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-center"> 
                              <a aria-label="anchor" href="javascript:void(0);" class="btn btn-info-light btn-wave border-0 p-3 lh-1 rounded"> 
                                  <i class="bi bi-three-dots fs-22"></i> 
                              </a> 
                              <a href="javascript:void(0);" class="d-block pt-3 fw-medium fs-12">More</a> 
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
                      <div class="card-title">
                          Patients Analysis
                      </div>
                  </div>
                  <div class="card-body">
                      <div id="patients-analysis"></div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">
                          Available Doctors
                      </div>
                  </div>
                  <div class="card-body">
                      <ul class="list-unstyled available-doctors-list">
                          <li>
                              <div class="d-flex align-items-center gap-2 flex-wrap">
                                  <div class="lh-1">
                                      <span class="avatar avatar-sm">
                                          <img src="../assets/images/faces/doctors/1.jpg" alt="">
                                      </span>
                                  </div> 
                                  <div class="flex-fill">
                                      <span class="d-block fw-semibold lh-1">
                                          Dr. Smith
                                      </span>
                                      <span class="text-muted fs-13">Cardiology</span>
                                  </div>   
                                  <div class="text-end">
                                      <span class="d-block text-muted fs-13">
                                          14 Appointments
                                      </span>
                                      <span class="fw-medium">10:00AM - 6:00PM</span>
                                  </div>                                        
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center gap-2 flex-wrap">
                                  <div class="lh-1">
                                      <span class="avatar avatar-sm">
                                          <img src="../assets/images/faces/doctors/2.jpg" alt="">
                                      </span>
                                  </div> 
                                  <div class="flex-fill">
                                      <span class="d-block fw-semibold lh-1">
                                          Dr. Johnson
                                      </span>
                                      <span class="text-muted fs-13">Orthopedics</span>
                                  </div>   
                                  <div class="text-end">
                                      <span class="d-block text-muted fs-13">
                                          18 Appointments
                                      </span>
                                      <span class="fw-medium">2:00PM - 4:00PM</span>
                                  </div>                                        
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center gap-2 flex-wrap">
                                  <div class="lh-1">
                                      <span class="avatar avatar-sm">
                                          <img src="../assets/images/faces/doctors/3.jpg" alt="">
                                      </span>
                                  </div> 
                                  <div class="flex-fill">
                                      <span class="d-block fw-semibold lh-1">
                                          Dr. Davis
                                      </span>
                                      <span class="text-muted fs-13">Dermatology</span>
                                  </div>   
                                  <div class="text-end">
                                      <span class="d-block text-muted fs-13">
                                          16 Appointments
                                      </span>
                                      <span class="fw-medium">12:00AM - 2:00PM</span>
                                  </div>                                        
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center gap-2 flex-wrap">
                                  <div class="lh-1">
                                      <span class="avatar avatar-sm">
                                          <img src="../assets/images/faces/doctors/4.jpg" alt="">
                                      </span>
                                  </div> 
                                  <div class="flex-fill">
                                      <span class="d-block fw-semibold lh-1">
                                          Dr. Miller
                                      </span>
                                      <span class="text-muted fs-13">Neurology</span>
                                  </div>   
                                  <div class="text-end">
                                      <span class="d-block text-muted fs-13">
                                          22 Appointments
                                      </span>
                                      <span class="fw-medium">4:00PM - 6:00PM</span>
                                  </div>                                        
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center gap-2 flex-wrap">
                                  <div class="lh-1">
                                      <span class="avatar avatar-sm">
                                          <img src="../assets/images/faces/doctors/5.jpg" alt="">
                                      </span>
                                  </div> 
                                  <div class="flex-fill">
                                      <span class="d-block fw-semibold lh-1">
                                          Dr. Anderson
                                      </span>
                                      <span class="text-muted fs-13">Ophthalmology</span>
                                  </div>   
                                  <div class="text-end">
                                      <span class="d-block text-muted fs-13">
                                          27 Appointments
                                      </span>
                                      <span class="fw-medium">11:00AM - 2:00PM</span>
                                  </div>                                        
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center gap-2 flex-wrap">
                                  <div class="lh-1">
                                      <span class="avatar avatar-sm">
                                          <img src="../assets/images/faces/doctors/6.jpg" alt="">
                                      </span>
                                  </div> 
                                  <div class="flex-fill">
                                      <span class="d-block fw-semibold lh-1">
                                          Dr. Martinez
                                      </span>
                                      <span class="text-muted fs-13">Gastroenterology</span>
                                  </div>   
                                  <div class="text-end">
                                      <span class="d-block text-muted fs-13">
                                          10 Appointments
                                      </span>
                                      <span class="fw-medium">11:00AM - 4:00PM</span>
                                  </div>                                        
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
                          Patients Overview
                      </div>
                  </div>
                  <div class="card-body p-0">
                      <div id="patients-overview"></div>
                      <div class="border-top">
                          <ul class="list-group list-group-flush top-categories">
                              <li class="list-group-item">
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="lh-1">
                                          <div class="fw-semibold mb-1">Male</div>
                                          <div><span class="text-muted fs-13">Increased by <span class="text-success fw-medium ms-1 d-inline-flex align-items-center">0.64%<i class="ti ti-trending-up ms-1"></i></span></span></div>
                                      </div>
                                      <div class="lh-1 text-end">
                                          <span class="d-block fw-semibold h6 mb-0">1,200</span>
                                      </div>
                                  </div>
                              </li>
                              <li class="list-group-item">
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="lh-1">
                                          <div class="fw-semibold mb-1">Female</div>
                                          <div><span class="text-muted fs-13">Decreased by <span class="text-danger fw-medium ms-1 d-inline-flex align-items-center">2.75%<i class="ti ti-trending-down ms-1"></i></span></span></div>
                                      </div>
                                      <div class="lh-1 text-end">
                                          <span class="d-block fw-semibold h6 mb-0">750</span>
                                      </div>
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: row-2 -->

      <!-- Start:: row-3 -->
      <div class="row">
          <div class="col-xxl-5">
              <div class="card custom-card overflow-hidden">
                  <div class="card-header">
                      <div class="card-title">
                          Doctors List
                      </div>
                  </div>
                  <div class="card-body p-0">
                      <div class="table-responsive">
        <table class="table text-nowrap">
          <thead>
            <tr>
              <th scope="col">Doctor</th>
              <th scope="col">Qualification</th>
              <th scope="col">Experience</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="d-flex align-items-center gap-2">
                  <img src="../assets/images/faces/doctors/1.jpg" alt="" class="avatar avatar-sm avatar-rounded">
                  <div class="">
                    <span class="d-block fw-semibold lh-1">
                      Dr. Smith
                    </span>
                    <span class="text-muted fs-13">Cardiology</span>
                  </div>
                </div>
              </td>
              <td>MBBS</td>
              <td>4 yrs Exp</td>
                                      <td>
                <div class="btn-list">
                  <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm btn-primary-light"><i class="ti ti-eye align-middle"></i></a>
                  <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm btn-success-light"><i class="ti ti-pencil align-middle"></i></a>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center gap-2">
                  <img src="../assets/images/faces/doctors/2.jpg" alt="" class="avatar avatar-sm avatar-rounded">
                  <div class="">
                    <span class="d-block fw-semibold lh-1">
                      Dr. Johnson
                    </span>
                    <span class="text-muted fs-13">Orthopedics</span>
                  </div>
                </div>
              </td>
              <td>MBBS, MD</td>
              <td>6 yrs Exp</td>
                                      <td>
                <div class="btn-list">
                  <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm btn-primary-light"><i class="ti ti-eye align-middle"></i></a>
                  <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm btn-success-light"><i class="ti ti-pencil align-middle"></i></a>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center gap-2">
                  <img src="../assets/images/faces/doctors/3.jpg" alt="" class="avatar avatar-sm avatar-rounded">
                  <div class="">
                    <span class="d-block fw-semibold lh-1">
                      Dr.L.Rickie Smtih
                    </span>
                    <span class="text-muted fs-13">Orthopedics</span>
                  </div>
                </div>
              </td>
              <td>DO</td>
              <td>6 yrs Exp</td>
                                      <td>
                <div class="btn-list">
                  <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm btn-primary-light"><i class="ti ti-eye align-middle"></i></a>
                  <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm btn-success-light"><i class="ti ti-pencil align-middle"></i></a>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center gap-2">
                  <img src="../assets/images/faces/doctors/4.jpg" alt="" class="avatar avatar-sm avatar-rounded">
                  <div class="">
                    <span class="d-block fw-semibold lh-1">
                      Dr.M.Angle
                    </span>
                    <span class="text-muted fs-13">Gynecologist</span>
                  </div>
                </div>
              </td>
              <td>MBBS, Ph.D</td>
              <td>10 yrs Exp</td>
                                      <td>
                <div class="btn-list">
                  <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm btn-primary-light"><i class="ti ti-eye align-middle"></i></a>
                  <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm btn-success-light"><i class="ti ti-pencil align-middle"></i></a>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center gap-2">
                  <img src="../assets/images/faces/doctors/5.jpg" alt="" class="avatar avatar-sm avatar-rounded">
                  <div class="">
                    <span class="d-block fw-semibold lh-1">
                      Dr.S.Mary
                    </span>
                    <span class="text-muted fs-13">Neurosurgeon</span>
                  </div>
                </div>
              </td>
              <td>MBBS, MD</td>
              <td>3 yrs Exp</td>
                                      <td>
                <div class="btn-list">
                  <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm btn-primary-light"><i class="ti ti-eye align-middle"></i></a>
                  <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm btn-success-light"><i class="ti ti-pencil align-middle"></i></a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="border-bottom-0">
                <div class="d-flex align-items-center gap-2">
                  <img src="../assets/images/faces/doctors/6.jpg" alt="" class="avatar avatar-sm avatar-rounded">
                  <div class="">
                    <span class="d-block fw-semibold lh-1">
                      Dr.T.Laytoya Thoma
                    </span>
                    <span class="text-muted fs-13">Dermatologists</span>
                  </div>
                </div>
              </td>
              <td class="border-bottom-0">MD-PhD</td>
              <td class="border-bottom-0">5 yrs Exp</td>
                                      <td class="border-bottom-0">
                <div class="btn-list">
                  <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm btn-primary-light"><i class="ti ti-eye align-middle"></i></a>
                  <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm btn-success-light"><i class="ti ti-pencil align-middle"></i></a>
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
                          Top Departments
                      </div>
                  </div>
                  <div class="card-body">
                      <div id="top-departments"></div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-4">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">
                          Upcoming Appointments
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="upcoming-shedule">
                          <ul class="nav nav-pills mb-2" role="tablist">
                              <li class="nav-item fw-medium mb-3" role="presentation">
                                  <a href="#mon_tab" class="nav-link sh-link text-center b" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                                      <p class="sh-dt mb-0">25</p>
                                      <span class="sh-day fw-semibold">Mon</span>
                                  </a>
                              </li>
                              <li class="nav-item fw-medium mb-3" role="presentation">
                                  <a href="#tue_tab" class="nav-link sh-link text-center b" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                                      <p class="sh-dt mb-0">26</p>
                                      <span class="sh-day fw-semibold">Tue</span>
                                  </a>
                              </li>
                              <li class="nav-item fw-medium mb-3" role="presentation">
                                  <a href="#wed_tab" class="nav-link sh-link text-center b active" data-bs-toggle="tab" aria-selected="true" role="tab">
                                      <p class="sh-dt mb-0">27</p>
                                      <span class="sh-day fw-semibold">Wed</span>
                                  </a>
                              </li>
                              <li class="nav-item fw-medium mb-3" role="presentation">
                                  <a href="#thu_tab" class="nav-link sh-link text-center b" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                                      <p class="sh-dt mb-0">28</p>
                                      <span class="sh-day fw-semibold">Thu</span>
                                  </a>
                              </li>
                              <li class="nav-item fw-medium mb-3" role="presentation">
                                  <a href="#fri_tab" class="nav-link sh-link text-center b" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                                      <p class="sh-dt mb-0">29</p>
                                      <span class="sh-day fw-semibold">Fri</span>
                                  </a>
                              </li>
                              <li class="nav-item fw-medium" role="presentation">
                                  <a href="#sat_tab" class="nav-link sh-link text-center b" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                                      <p class="sh-dt mb-0">30</p>
                                      <span class="sh-day fw-semibold">Sat</span>
                                  </a>
                              </li>
                          </ul>
                          <div class="tab-content">
                              <div class="tab-pane p-0 border-0" id="mon_tab" role="tabpanel">
                                  <ul class="list-unstyled mb-0 sh-shedule-container">
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Post-Surgery Follow-up Appointment</p>
                                                  <span class="text-muted">Orthopedics</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>09:35</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>10:00</span>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Asthma Management Consultation</p>
                                                  <span class="text-muted">Pulmonology</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>12:20</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>13:20</span>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Vision Check-up</p>
                                                  <span class="text-muted">Ophthalmology</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>15:40</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>16:00</span>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Pre-natal Check-up</p>
                                                  <span class="text-muted">Obstetrics</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>16:45</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>17:00</span>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Mental Health Counseling</p>
                                                  <span class="text-muted">Psychiatry</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>16:10</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>16:30</span>
                                              </div>
                                          </div>
                                      </li>
                                  </ul>
                              </div>
                              <div class="tab-pane p-0 border-0" id="tue_tab" role="tabpanel">
                                  <ul class="list-unstyled mb-0 sh-shedule-container">
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Allergy Testing</p>
                                                  <span class="text-muted">Allergology</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>10:00</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>11:30</span>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Diabetes Management Review</p>
                                                  <span class="text-muted">Endocrinology</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>13:45</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>14:45</span>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Mental Health Counseling</p>
                                                  <span class="text-muted">Psychiatry</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>16:10</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>16:30</span>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Routine Immunization</p>
                                                  <span class="text-muted">Vaccination</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>16:55</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>18:55</span>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Pre-natal Check-up</p>
                                                  <span class="text-muted">Obstetrics</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>16:45</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>17:00</span>
                                              </div>
                                          </div>
                                      </li>
                                  </ul>
                              </div>
                              <div class="tab-pane p-0 border-0 active show" id="wed_tab" role="tabpanel">
                                  <ul class="list-unstyled mb-0 sh-shedule-container">
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Digestive Disorder Consult</p>
                                                  <span class="text-muted">Gastroenterology</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>10:00</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>12:00</span>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Pre-operative Assessment</p>
                                                  <span class="text-muted">Surgery</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>13:15</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>14:10</span>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Cancer Screening</p>
                                                  <span class="text-muted">Oncology</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>15:30</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>16:20</span>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Hypertension Management</p>
                                                  <span class="text-muted">Cardiology</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>17:30</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>18:00</span>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Routine Immunization</p>
                                                  <span class="text-muted">Vaccination</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>16:55</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>18:55</span>
                                              </div>
                                          </div>
                                      </li>
                                  </ul>
                              </div>
                              <div class="tab-pane p-0 border-0" id="thu_tab" role="tabpanel">
                                  <ul class="list-unstyled mb-0 sh-shedule-container">
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Dermatological Consultation</p>
                                                  <span class="text-muted">Dermatology</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>09:00</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>11:00</span>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Annual Wellness Exam</p>
                                                  <span class="text-muted">Preventive Medicine</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>12:50</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>13:20</span>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Joint Pain Evaluation</p>
                                                  <span class="text-muted">Rheumatology</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>15:45</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>16:00</span>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Kidney Function Test</p>
                                                  <span class="text-muted">Nephrology</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>19:55</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>20:30</span>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Hypertension Management</p>
                                                  <span class="text-muted">Cardiology</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>17:30</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>18:00</span>
                                              </div>
                                          </div>
                                      </li>
                                  </ul>
                              </div>
                              <div class="tab-pane p-0 border-0" id="fri_tab" role="tabpanel">
                                  <ul class="list-unstyled mb-0 sh-shedule-container">
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Audiological Assessment</p>
                                                  <span class="text-muted">Audiology</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>09:00</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>12:00</span>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Hormonal Imbalance Evaluation</p>
                                                  <span class="text-muted">Reproductive Endocrinology</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>12:00</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>13:20</span>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Eating Disorder Assessment</p>
                                                  <span class="text-muted">Eating Disorders</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>16:00</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>17:20</span>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Sleep Disorder Consultation</p>
                                                  <span class="text-muted">Sleep Medicine</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>18:15</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>19:00</span>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Kidney Function Test</p>
                                                  <span class="text-muted">Nephrology</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>19:55</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>20:30</span>
                                              </div>
                                          </div>
                                      </li>
                                  </ul>
                              </div>
                              <div class="tab-pane p-0 border-0" id="sat_tab" role="tabpanel">
                                  <ul class="list-unstyled mb-0 sh-shedule-container">
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Chronic Pain Management</p>
                                                  <span class="text-muted">Pain Management</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>09:35</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>10:00</span>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Obesity Management Review</p>
                                                  <span class="text-muted">Bariatrics</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>12:20</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>13:20</span>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Asthma Action Plan Review</p>
                                                  <span class="text-muted">Allergy and Immunology</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>15:40</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>16:00</span>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Fertility Consultation</p>
                                                  <span class="text-muted">Reproductive Medicine</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>16:45</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>17:00</span>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-item">
                                          <div class="sh-shedule d-sm-flex align-items-start justify-content-between">
                                              <div>
                                                  <p class="lh-1 mb-1 fw-semibold">Sleep Disorder Consultation</p>
                                                  <span class="text-muted">Sleep Medicine</span>
                                              </div>
                                              <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                  <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                  <span>18:15</span>
                                                  <span class="mx-2 text-muted">-</span>
                                                  <span>19:00</span>
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
      <!-- End:: row-3 -->

      <!-- Start:: row-4 -->
      <div class="row">
          <div class="col-xl-12">
              <div class="card custom-card">
                  <div class="card-header justify-content-between">
                      <div class="card-title">
                          Patients List
                      </div>
                      <div class="d-flex flex-wrap gap-2">
                          <div>
                              <input class="form-control" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                          </div>
                          <div class="dropdown">
                              <a href="javascript:void(0);" class="btn btn-primary btn-sm" data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
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
                                      <th scope="row" class="text-center">S.No</th>
                                      <th scope="col">Patient ID</th>
                                      <th scope="col">Name</th>
                                      <th scope="col">Gender</th>
                                      <th scope="col">Age</th>
                                      <th scope="col">Assgined Doctor</th>
                                      <th scope="col">Contact Number</th>
                                      <th scope="col">Appointmented Date</th>
                                      <th scope="col">Disease</th>
                                      <th scope="col">Room No</th>
                                      <th scope="col">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td class="text-center">01</td>
                                      <td>SPK-9ABC</td>
                                      <td>
                                          <div class="d-flex gap-2">
                                              <span class="avatar avatar-xs avatar-rounded"><img src="../assets/images/faces/11.jpg" class="" alt="..."></span>
                                              <div>
                                                  <span class="fw-medium mb-0 d-flex align-items-center">Jhon Doe</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          Male
                                      </td>
                                      <td>25</td>
                                      <td>Dr.M.Smith</td>
                                      <td>123-456-7890</td>
                                      <td>
                                          2023-10-20
                                      </td>
                                      <td>
                                          <span class="badge bg-primary-transparent">Hypertension</span>
                                      </td>
                                      <td>101</td>
                                      <td>
                                          <div class="btn-list">
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                  <i class="ri-eye-line"></i>
                                              </button>
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light">
                                                  <i class="ri-edit-line"></i>
                                              </button>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="text-center">02</td>
                                      <td>SPK-3SFW</td>
                                      <td>
                                          <div class="d-flex gap-2">
                                              <span class="avatar avatar-xs avatar-rounded"><img src="../assets/images/faces/2.jpg" class="" alt="..."></span>
                                              <div>
                                                  <span class="fw-medium mb-0 d-flex align-items-center">Jane smith</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          Female
                                      </td>
                                      <td>35</td>
                                      <td>Dr. Johnson</td>
                                      <td>987-654-3210</td>
                                      <td>
                                          2023-09-15
                                      </td>
                                      <td>
                                          <span class="badge bg-secondary-transparent">Diabetes</span>
                                      </td>
                                      <td>102</td>
                                      <td>
                                          <div class="btn-list">
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                  <i class="ri-eye-line"></i>
                                              </button>
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light">
                                                  <i class="ri-edit-line"></i>
                                              </button>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="text-center">03</td>
                                      <td>SPK-6SKF</td>
                                      <td>
                                          <div class="d-flex gap-2">
                                              <span class="avatar avatar-xs avatar-rounded"><img src="../assets/images/faces/12.jpg" class="" alt="..."></span>
                                              <div>
                                                  <span class="fw-medium mb-0 d-flex align-items-center">Robert Jhonson</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          Male
                                      </td>
                                      <td>45</td>
                                      <td>Dr.M.Angle</td>
                                      <td>456-789-0123</td>
                                      <td>
                                          2023-11-05
                                      </td>
                                      <td>
                                          <span class="badge bg-success-transparent">Asthma</span>
                                      </td>
                                      <td>103</td>
                                      <td>
                                          <div class="btn-list">
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                  <i class="ri-eye-line"></i>
                                              </button>
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light">
                                                  <i class="ri-edit-line"></i>
                                              </button>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="text-center">04</td>
                                      <td>SPK-3ESD</td>
                                      <td>
                                          <div class="d-flex gap-2">
                                              <span class="avatar avatar-xs avatar-rounded"><img src="../assets/images/faces/5.jpg" class="" alt="..."></span>
                                              <div>
                                                  <span class="fw-medium mb-0 d-flex align-items-center">Emiley Davis</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          Female
                                      </td>
                                      <td>28</td>
                                      <td>Dr.S.Mary</td>
                                      <td>789-012-3456</td>
                                      <td>
                                          2023-08-12
                                      </td>
                                      <td>
                                          <span class="badge bg-orange-transparent">Allergies</span>
                                      </td>
                                      <td>104</td>
                                      <td>
                                          <div class="btn-list">
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                  <i class="ri-eye-line"></i>
                                              </button>
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light">
                                                  <i class="ri-edit-line"></i>
                                              </button>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="text-center">05</td>
                                      <td>SPK-3KSE</td>
                                      <td>
                                          <div class="d-flex gap-2">
                                              <span class="avatar avatar-xs avatar-rounded"><img src="../assets/images/faces/11.jpg" class="" alt="..."></span>
                                              <div>
                                                  <span class="fw-medium mb-0 d-flex align-items-center">William Martinez</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          Male
                                      </td>
                                      <td>38</td>
                                      <td>Dr.S.Mary</td>
                                      <td>234-567-8901</td>
                                      <td>
                                          2023-12-08
                                      </td>
                                      <td>
                                          <span class="badge bg-info-transparent">General</span>
                                      </td>
                                      <td>105</td>
                                      <td>
                                          <div class="btn-list">
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                  <i class="ri-eye-line"></i>
                                              </button>
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light">
                                                  <i class="ri-edit-line"></i>
                                              </button>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="text-center">06</td>
                                      <td>SPK-4DFS</td>
                                      <td>
                                          <div class="d-flex gap-2">
                                              <span class="avatar avatar-xs avatar-rounded"><img src="../assets/images/faces/4.jpg" class="" alt="..."></span>
                                              <div>
                                                  <span class="fw-medium mb-0 d-flex align-items-center">Sarah Wilson</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          Female
                                      </td>
                                      <td>28</td>
                                      <td>Dr.T.Laytoya Thoma</td>
                                      <td>567-890-1234</td>
                                      <td>
                                          2023-07-25
                                      </td>
                                      <td>
                                          <span class="badge bg-warning-transparent">High Cholesterol</span>
                                      </td>
                                      <td>106</td>
                                      <td>
                                          <div class="btn-list">
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                  <i class="ri-eye-line"></i>
                                              </button>
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light">
                                                  <i class="ri-edit-line"></i>
                                              </button>
                                          </div>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
                  <div class="card-footer border-top-0">
                      <div class="d-flex align-items-center">
                          <div> Showing 6 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i> </div>
                          <div class="ms-auto">
                          <nav aria-label="Page navigation" class="pagination-style-4">
                              <ul class="pagination mb-0">
                                  <li class="page-item disabled"> <a class="page-link" href="javascript:void(0);"> Prev </a> </li>
                                      <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                      <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                      <li class="page-item"> <a class="page-link text-primary" href="javascript:void(0);"> next </a> </li>
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