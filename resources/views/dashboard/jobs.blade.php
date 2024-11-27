@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Start::page-header -->
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Jobs</h1>
              <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item">
                      <a href="javascript:void(0);">
                          Dashboards
                      </a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Jobs</li>
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
      <div class="row row-cols-xxl-5 row-cols-xl-3 row-cols-md-3 row-cols-1">
          <div class="col">
              <div class="card custom-card">
                  <div class="card-body">
                      <div class="d-flex align-items-start justify-content-between flex-wrap">
                          <div>
                              <span class="d-block mb-1">Total Employers</span>
                              <h3 class="fw-semibold mb-1">256</h3>
                              <span class="d-block text-muted fs-13">Increased By <span class="text-success"><i class="ti ti-arrow-narrow-up"></i>3.32%</span></span>
                          </div>
                          <div>
                              <span class="avatar avatar-lg bg-primary-transparent">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="84" cy="108" r="52" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M10.23,200a88,88,0,0,1,147.54,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M172,160a87.93,87.93,0,0,1,73.77,40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M152.69,59.7A52,52,0,1,1,172,160" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                              </span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card custom-card">
                  <div class="card-body">
                      <div class="d-flex align-items-start justify-content-between flex-wrap">
                          <div>
                              <span class="d-block mb-1">Total Candidates</span>
                              <h3 class="fw-semibold mb-1">4,026</h3>
                              <span class="d-block text-muted fs-13">Increased By <span class="text-danger"><i class="ti ti-arrow-narrow-down"></i>0.90%</span></span>
                          </div>
                          <div>
                              <span class="avatar avatar-lg bg-secondary-transparent">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M192,120a59.91,59.91,0,0,1,48,24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M16,144a59.91,59.91,0,0,1,48-24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="128" cy="144" r="40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M72,216a65,65,0,0,1,112,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M161,80a32,32,0,1,1,31,40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M64,120A32,32,0,1,1,95,80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                              </span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card custom-card">
                  <div class="card-body">
                      <div class="d-flex align-items-start justify-content-between flex-wrap">
                          <div>
                              <span class="d-block mb-1">Total Locations</span>
                              <h3 class="fw-semibold mb-1">48</h3>
                              <span class="d-block text-muted fs-13">Increased By <span class="text-success"><i class="ti ti-arrow-narrow-up"></i>2.43%</span></span>
                          </div>
                          <div>
                              <span class="avatar avatar-lg bg-success-transparent">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="128" cy="104" r="32" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M208,104c0,72-80,128-80,128S48,176,48,104a80,80,0,0,1,160,0Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                              </span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card custom-card">
                  <div class="card-body">
                      <div class="d-flex align-items-start justify-content-between flex-wrap">
                          <div>
                              <span class="d-block mb-1">Resume Generate</span>
                              <h3 class="fw-semibold mb-1">34%</h3>
                              <span class="d-block text-muted fs-13">Increased By <span class="text-success"><i class="ti ti-arrow-narrow-up"></i>0.51%</span></span>
                          </div>
                          <div>
                              <span class="avatar avatar-lg bg-info-transparent">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><rect x="53.87" y="34.21" width="148.27" height="187.59" rx="8" transform="translate(24.22 -20.31) rotate(10.02)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="97.22" y1="59.81" x2="180.2" y2="74.47" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="174.66" y1="105.98" x2="91.67" y2="91.33" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="127.62" y1="130.17" x2="86.13" y2="122.84" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                              </span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card custom-card">
                  <div class="card-body">
                      <div class="d-flex align-items-start justify-content-between flex-wrap">
                          <div>
                              <span class="d-block mb-1">Active Subscribers</span>
                              <h3 class="fw-semibold mb-1">1,468</h3>
                              <span class="d-block text-muted fs-13">Increased By <span class="text-danger"><i class="ti ti-arrow-narrow-down"></i>5.95%</span></span>
                          </div>
                          <div>
                              <span class="avatar avatar-lg bg-warning-transparent">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="128" cy="120" r="40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="40" y="40" width="176" height="176" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M57.78,216a72,72,0,0,1,140.44,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                              </span>
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
                          Statistics
                      </div>
                  </div>
                  <div class="card-body">
                      <div id="statistics"></div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6">
              <div class="card custom-card">
                  <div class="card-header justify-content-between">
                      <div class="card-title">
                          User Activity
                      </div>
                      <a href="javascript:void(0);" class="text-muted fw-medium fs-13">View All<i class="ti ti-arrow-narrow-right me-1"></i></a>
                  </div>
                  <div class="card-body">
                      <ul class="list-unstyled user-activity-list">
                          <li>
                              <div class="d-flex align-items-start gap-2">
                                  <div class="lh-1">
                                      <span class="avatar avatar-md avatar-rounded bg-primary-transparent backdrop-blur">
                                          JD
                                      </span>
                                  </div>
                                  <div>
                                      <span class="fw-semibold me-1 text-primary">John Doe</span>
                                      <span class="mb-1 d-block">Created job posting for "Software Engineer"</span>
                                      <span class="d-block text-muted fs-13">27 May, 2024 - 10:15 AM</span>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-start gap-2">
                                  <div class="lh-1">
                                      <span class="avatar avatar-md avatar-rounded bg-secondary-transparent backdrop-blur">
                                          MJ
                                      </span>
                                  </div>
                                  <div>
                                      <span class="fw-semibold me-1 text-secondary">Michael Johnson</span>
                                      <span class="mb-1 d-block">Updated job status to "Filled" for "Project Manager"</span>
                                      <span class="d-block text-muted fs-13">25 May, 2024 - 11:45 AM</span>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-start gap-2">
                                  <div class="lh-1">
                                      <span class="avatar avatar-md avatar-rounded backdrop-blur">
                                          <img src="../assets/images/faces/2.jpg" alt="">
                                      </span>
                                  </div>
                                  <div>
                                      <span class="fw-semibold me-1 text-info">Emily Williams</span>
                                      <span class="mb-1 d-block">Sent interview invitation for "Data Analyst" role to jackson rivera.</span>
                                      <span class="d-block text-muted fs-13">24 May, 2024 - 9:00 AM</span>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-start gap-2">
                                  <div class="lh-1">
                                      <span class="avatar avatar-md avatar-rounded bg-success-transparent backdrop-blur">
                                          DB
                                      </span>
                                  </div>
                                  <div>
                                      <span class="fw-semibold me-1 text-success">David Brown</span>
                                      <span class="mb-1 d-block">Rejected job application for "Graphic Designer"</span>
                                      <span class="d-block text-muted fs-13">23 May, 2024 - 03:20 PM</span>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6">
              <div class="card custom-card overflow-hidden">
                  <div class="card-header justify-content-between">
                      <div class="card-title">
                          Candidates
                      </div>
                      <button class="btn btn-primary-light btn-sm">View All <i class="ti ti-arrow-narrow-right ms-1"></i></button>
                  </div>
                  <div class="card-body p-0">
                      <div id="candidates" class="px-3 py-4"></div>
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
                  <div class="card-header justify-content-between">
                      <div class="card-title">
                          Trending User Profiles
                      </div>
                      <button class="btn btn-primary-light btn-sm">View All<i class="ti ti-arrow-narrow-right ms-1"></i></button>
                  </div>
                  <div class="card-body p-0">
                      <div class="table-responsive">
                          <table class="table text-nowrap">
                              <thead>
                                  <tr>
                                      <th scope="col">Name</th>
                                      <th scope="col">Points</th>
                                      <th scope="col">Department</th>
                                      <th scope="col">Growth</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <div class="avatar avatar-md avatar-rounded me-2">
                                                  <img src="../assets/images/faces/15.jpg" alt="img">
                                              </div>
                                              <div>
                                                  <p class="mb-1 fw-semibold">Robert anii</p>
                                                  <span class="fs-13 text-muted">Web Developer</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>25</td>
                                      <td>
                                          <span>Front-end Developer</span>
                                      </td>
                                      <td class="pe-3">
                                          <p class="fs-13 mb-1 text-end">90%<i class="ri-arrow-up-line text-primary"></i></p>
                                          <div class="progress progress-xs">
                                              <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <div class="avatar avatar-md avatar-rounded me-2">
                                                  <img src="../assets/images/faces/8.jpg" alt="img">
                                              </div>  
                                              <div>
                                                  <p class="mb-1 fw-semibold">Rubi manscho</p>
                                                  <span class="fs-13 text-muted">UI/UX Designer</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>14</td>
                                      <td>
                                          <span>Manufacturing</span>
                                      </td>
                                      <td class="pe-3">
                                          <p class="fs-13 mb-1 text-end">80%<i class="ri-arrow-up-line text-secondary"></i></p>
                                          <div class="progress progress-xs">
                                              <div class="progress-bar bg-secondary progress-bar-striped progress-bar-animated" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <div class="avatar avatar-md avatar-rounded me-2">
                                                  <img src="../assets/images/faces/13.jpg" alt="img">
                                              </div>
                                              <div>
                                                  <p class="mb-1 fw-semibold">Marckh Roz</p>
                                                  <span class="fs-13 text-muted">Graphic Designer</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>18</td>
                                      <td>
                                          <span>Marketing</span>
                                      </td>
                                      <td class="pe-3">
                                          <p class="fs-13 mb-1 text-end">60%<i class="ri-arrow-up-line text-warning"></i></p>
                                          <div class="progress progress-xs">
                                              <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="border-bottom-0">
                                          <div class="d-flex align-items-center">
                                              <div class="avatar avatar-md avatar-rounded me-2">
                                                  <img src="../assets/images/faces/16.jpg" alt="img">
                                              </div>
                                              <div>
                                                  <p class="mb-1 fw-semibold">Jackson Mach</p>
                                                  <span class="fs-13 text-muted">junior. Developer</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td class="border-bottom-0">10</td>
                                      <td class="border-bottom-0">
                                          <span>Front-end Developer</span>
                                      </td>
                                      <td class="border-bottom-0">
                                          <p class="fs-13 mb-1 text-end">35%<i class="ri-arrow-up-line text-success"></i></p>
                                          <div class="progress progress-xs">
                                              <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-4 col-xl-6">
              <div class="card custom-card overflow-hidden">
                  <div class="card-header justify-content-between">
                      <div class="card-title">
                          Country Wise Registers
                      </div>
                      <button class="btn btn-primary-light btn-sm">View All<i class="ti ti-arrow-narrow-right ms-1"></i></button>
                  </div>
                  <div class="card-body p-0">
                      <div class="table-responsive">
                          <table class="table text-nowrap">
                              <thead>
                                  <tr>
                                      <th scope="col" class="">Country</th>
                                      <th scope="col">Date</th>
                                      <th scope="col" class="text-center">Employers</th>
                                      <th scope="col">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td class="text-center">
                                          <div class="d-flex align-items-center">
                                              <div class="avatar avatar-xs avatar-rounded me-2">
                                                  <img src="../assets/images/flags/germany_flag.jpg" alt="img">
                                              </div>
                                              <p class="mb-0 fw-semibold">Germany</p>
                                          </div>
                                      </td>
                                      <td>02.12.2019</td>
                                      <td class="text-center">
                                          52
                                      </td>
                                      <td>
                                          <button type="button" class="btn btn-sm btn-success-light">View</button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="text-center">
                                          <div class="d-flex align-items-center">
                                              <div class="avatar avatar-xs avatar-rounded me-2">
                                                  <img src="../assets/images/flags/canada_flag.jpg" alt="img">
                                              </div>
                                              <p class="mb-0 fw-semibold">Canada</p>
                                          </div>
                                      </td>
                                      <td>10.06.2024</td>
                                      <td class="text-center">
                                          32
                                      </td>
                                      <td>
                                          <button type="button" class="btn btn-sm btn-success-light">View</button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="text-center">
                                          <div class="d-flex align-items-center">
                                              <div class="avatar avatar-xs avatar-rounded me-2">
                                                  <img src="../assets/images/flags/germany_flag.jpg" alt="img">
                                              </div>
                                              <p class="mb-0 fw-semibold">Germany</p>
                                          </div>
                                      </td>
                                      <td>24.08.2024</td>
                                      <td class="text-center">
                                          14
                                      </td>
                                      <td>
                                          <button type="button" class="btn btn-sm btn-success-light">View</button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="text-center">
                                          <div class="d-flex align-items-center">
                                              <div class="avatar avatar-xs avatar-rounded me-2">
                                                  <img src="../assets/images/flags/spain_flag.jpg" alt="img">
                                              </div>
                                              <p class="mb-0 fw-semibold">Usa</p>
                                          </div>
                                      </td>
                                      <td>03.10.2024</td>
                                      <td class="text-center">
                                          24
                                      </td>
                                      <td>
                                          <button type="button" class="btn btn-sm btn-success-light">View</button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="text-center border-bottom-0">
                                          <div class="d-flex align-items-center">
                                              <div class="avatar avatar-xs avatar-rounded me-2">
                                                  <img src="../assets/images/flags/mexico_flag.jpg" alt="img">
                                              </div>
                                              <p class="mb-0 fw-semibold">swedan</p>
                                          </div>
                                      </td>
                                      <td class="border-bottom-0">06.12.2024</td>
                                      <td class="text-center border-bottom-0">
                                          16
                                      </td>
                                      <td class="border-bottom-0">
                                          <button type="button" class="btn btn-sm btn-success-light">View</button>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6">
              <div class="card custom-card overflow-hidden">
                  <div class="card-header justify-content-between">
                      <div class="card-title">
                          Recent Jobs
                      </div>
                      <div class="dropdown">
                          <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                              View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                          </a>
                          <ul class="dropdown-menu" role="menu">
                              <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                              <li><a class="dropdown-item" href="javascript:void(0);">This Week</a>
                              </li>
                              <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="card-body">
                      <ul class="list-unstyled recent-jobs-list">
                          <li>
                              <a href="javascript:void(0);">
                                  <div class="d-flex align-items-center flex-wrap">
                                      <div class="me-2 lh-1">
                                          <span class="avatar avatar-md avatar-rounded bg-primary-transparent">
                                              SE
                                          </span>
                                      </div>
                                      <div class="flex-fill">
                                          <p class="mb-0 fw-semibold">Software Engineer</p>
                                          <p class="fs-12 text-muted mb-0">Tech Innovations Inc.</p>
                                      </div>
                                      <div class="text-end">
                                          <p class="mb-0 fs-12 fw-semibold">Full Time</p>
                                          <span class="badge bg-success-transparent">Fresher</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="javascript:void(0);">
                                  <div class="d-flex align-items-center flex-wrap">
                                      <div class="me-2 lh-1">
                                          <span class="avatar avatar-md avatar-rounded bg-secondary-transparent">
                                              MM
                                          </span>
                                      </div>
                                      <div class="flex-fill">
                                          <p class="mb-0 fw-semibold">Marketing Manager</p>
                                          <p class="fs-12 text-muted mb-0">Global Solutions Group</p>
                                      </div>
                                      <div class="text-end">
                                          <p class="mb-0 fs-12 fw-semibold">Contract</p>
                                          <span class="badge bg-info-transparent">2-3 yrs - Experience</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="javascript:void(0);">
                                  <div class="d-flex align-items-center flex-wrap">
                                      <div class="me-2 lh-1">
                                          <span class="avatar avatar-md avatar-rounded bg-success">
                                              FA
                                          </span>
                                      </div>
                                      <div class="flex-fill">
                                          <p class="mb-0 fw-semibold">Financial Analyst</p>
                                          <p class="fs-12 text-muted mb-0">FinanceCorp</p>
                                      </div>
                                      <div class="text-end">
                                          <p class="mb-0 fs-12 fw-semibold">Part-time</p>
                                          <span class="badge bg-success-transparent">Fresher</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="javascript:void(0);">
                                  <div class="d-flex align-items-center flex-wrap">
                                      <div class="me-2 lh-1">
                                          <span class="avatar avatar-md avatar-rounded bg-info-transparent">
                                              GD
                                          </span>
                                      </div>
                                      <div class="flex-fill">
                                          <p class="mb-0 fw-semibold">Graphic Designer</p>
                                          <p class="fs-12 text-muted mb-0">Minds Agency</p>
                                      </div>
                                      <div class="text-end">
                                          <p class="mb-0 text-primary fs-12 fw-semibold">Freelance</p>
                                          <span class="badge bg-info-transparent">+3 yrs - Experience</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="javascript:void(0);">
                                  <div class="d-flex align-items-center flex-wrap">
                                      <div class="me-2 lh-1">
                                          <span class="avatar avatar-md avatar-rounded bg-warning-transparent">
                                              HM
                                          </span>
                                      </div>
                                      <div class="flex-fill">
                                          <p class="mb-0 fw-semibold">HR Manager</p>
                                          <p class="fs-12 text-muted mb-0">Pinoy Tech</p>
                                      </div>
                                      <div class="text-end">
                                          <p class="mb-0 fs-12 fw-semibold">Full Time</p>
                                          <span class="badge bg-info-transparent">4-5 yrs - Experience</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                      </ul>
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
                          Recent Employers
                      </div>
                      <div class="d-flex flex-wrap">
                          <div class="me-2 my-1">
                              <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                          </div>
                          <div class="dropdown my-1">
                              <a href="javascript:void(0);" class="btn btn-primary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                                  Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
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
                                      <th scope="col">S.No</th>
                                      <th scope="col">Candidate</th>
                                      <th scope="col">Category</th>
                                      <th scope="col">Designation</th>
                                      <th scope="col">Mail</th>
                                      <th scope="col">Location</th>
                                      <th scope="col">Date</th>
                                      <th scope="col">Type</th>
                                      <th scope="col">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <th scope="row">01</th>
                                      <td>
                                          <div class="d-flex align-items-center fw-medium">
                                              <span class="avatar avatar-sm me-2 avatar-rounded">
                                                  <img src="../assets/images/faces/1.jpg" alt="img">
                                              </span>Mayor Kelly
                                          </div>
                                      </td>
                                      <td>Manufacture</td>
                                      <td><span class="text-primary">Team Lead</span></td>
                                      <td>mayorkelly@gmail.com</td>
                                      <td>
                                          <div class="d-inline-flex align-items-center">
                                              <i class="ri-map-pin-line text-muted"></i>
                                              <span class="ms-1">Germany</span>
                                          </div>
                                      </td>
                                      <td>Sep 15 - Oct 12, 2023</td>
                                      <td><span class="badge bg-primary-transparent">Full Time</span></td>
                                      <td>
                                          <div class="hstack gap-2 fs-15">
                                              <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-success-light"><i class="ri-download-2-line"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <th scope="row">02</th>
                                      <td>
                                          <div class="d-flex align-items-center fw-medium">
                                              <span class="avatar avatar-sm me-2 avatar-rounded">
                                                  <img src="../assets/images/faces/10.jpg" alt="img">
                                              </span>Andrew Garfield
                                          </div>
                                      </td>
                                      <td>Development</td>
                                      <td><span class="text-secondary">Sr.UI Developer</span></td>
                                      <td>andrewgarfield@gmail.com</td>
                                      <td>
                                          <div class="d-inline-flex align-items-center">
                                              <i class="ri-map-pin-line text-muted"></i>
                                              <span class="ms-1">Canada</span>
                                          </div>
                                      </td>
                                      <td>Apr 10 - Dec 12, 2023</td>
                                      <td><span class="badge bg-primary-transparent">Full Time</span></td>
                                      <td>
                                          <div class="hstack gap-2 fs-15">
                                              <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i class="ri-download-2-line"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <th scope="row">03</th>
                                      <td>
                                          <div class="d-flex align-items-center fw-medium">
                                              <span class="avatar avatar-sm me-2 avatar-rounded">
                                                  <img src="../assets/images/faces/2.jpg" alt="img">
                                              </span>Simon Cowel
                                          </div>
                                      </td>
                                      <td>Service</td>
                                      <td><span class="text-secondary">Sr.UI Developer</span></td>
                                      <td>simoncowel234@gmail.com</td>
                                      <td>
                                          <div class="d-inline-flex align-items-center">
                                              <i class="ri-map-pin-line text-muted"></i>
                                              <span class="ms-1">Europe</span>
                                          </div>
                                      </td>
                                      <td>Sep 15 - Oct 12, 2023</td>
                                      <td><span class="badge bg-secondary-transparent">Part Time</span></td>
                                      <td>
                                          <div class="hstack gap-2 fs-15">
                                              <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i class="ri-download-2-line"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <th scope="row">04</th>
                                      <td>
                                          <div class="d-flex align-items-center fw-medium">
                                              <span class="avatar avatar-sm me-2 avatar-rounded">
                                                  <img src="../assets/images/faces/11.jpg" alt="img">
                                              </span>Mirinda Hers
                                          </div>
                                      </td>
                                      <td>Marketing</td>
                                      <td><span class="text-success">Sales Executive</span></td>
                                      <td>mirindahers@gmail.com</td>
                                      <td>
                                          <div class="d-inline-flex align-items-center">
                                              <i class="ri-map-pin-line text-muted"></i>
                                              <span class="ms-1">USA</span>
                                          </div>
                                      </td>
                                      <td>Apr 10 - Dec 12, 2023</td>
                                      <td><span class="badge bg-danger-transparent">Hybride</span></td>
                                      <td>
                                          <div class="hstack gap-2 fs-15">
                                              <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i class="ri-download-2-line"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <th scope="row">05</th>
                                      <td>
                                          <div class="d-flex align-items-center fw-medium">
                                              <span class="avatar avatar-sm me-2 avatar-rounded">
                                                  <img src="../assets/images/faces/3.jpg" alt="img">
                                              </span>Andrew Garfield
                                          </div>
                                      </td>
                                      <td>Development</td>
                                      <td><span class="text-secondary">Sr.UI Developer</span></td>
                                      <td>andrewgarfield@gmail.com</td>
                                      <td>
                                          <div class="d-inline-flex align-items-center">
                                              <i class="ri-map-pin-line text-muted"></i>
                                              <span class="ms-1">London</span>
                                          </div>
                                      </td>
                                      <td>Jun 10 - Dec 12, 2022</td>
                                      <td><span class="badge bg-success-transparent">Freelancer</span></td>
                                      <td>
                                          <div class="hstack gap-2 fs-15">
                                              <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i class="ri-download-2-line"></i></a>
                                              <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
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