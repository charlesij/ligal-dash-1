@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Start::page-header -->
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">School</h1>
              <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item">
                      <a href="javascript:void(0);">
                          Dashboards
                      </a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">School</li>
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
          <div class="col-xxl-8">
              <div class="row">
                  <div class="col-xxl-3 col-xl-6">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="d-flex align-items-end gap-2 justify-content-between flex-wrap">
                                  <div>
                                      <span class="avatar avatar-md bg-primary-transparent">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><line x1="32" y1="64" x2="32" y2="144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M56,216c15.7-24.08,41.11-40,72-40s56.3,15.92,72,40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polygon points="224 64 128 96 32 64 128 32 224 64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M169.34,82.22a56,56,0,1,1-82.68,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                      </span>
                                      <span class="d-block mb-1 mt-2">Students</span>
                                      <h3 class="d-block fw-semibold mb-0 lh-1">13,862</h3>
                                  </div>
                                  <div class="text-end">
                                      <span class="fw-semibold mb-1 text-muted">This Year</span>
                                      <span class="d-block text-success fs-13 d-inline-flex align-items-center"><i class="ti ti-arrow-up"></i>18.21%</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xxl-3 col-xl-6">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="d-flex align-items-end gap-2 justify-content-between flex-wrap">
                                  <div>
                                      <span class="avatar avatar-md bg-secondary-transparent">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="104" cy="144" r="32" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M53.39,208a56,56,0,0,1,101.22,0H216a8,8,0,0,0,8-8V56a8,8,0,0,0-8-8H40a8,8,0,0,0-8,8V200a8,8,0,0,0,8,8Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="176 176 192 176 192 80 64 80 64 96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                      </span>
                                      <span class="d-block mb-1 mt-2">Teachers</span>
                                      <h3 class="d-block fw-semibold mb-0 lh-1">765</h3>
                                  </div>
                                  <div class="text-end">
                                      <span class="fw-semibold mb-1 text-muted">This Year</span>
                                      <span class="d-block text-danger fs-13 d-inline-flex align-items-center"><i class="ti ti-arrow-down"></i>2.32%</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xxl-3 col-xl-6">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="d-flex align-items-end gap-2 justify-content-between flex-wrap">
                                  <div>
                                      <span class="avatar avatar-md bg-success-transparent">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><line x1="96" y1="224" x2="160" y2="224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="128" y1="184" x2="128" y2="224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M58,128H48A32,32,0,0,1,16,96V80a8,8,0,0,1,8-8H56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M198,128h10a32,32,0,0,0,32-32V80a8,8,0,0,0-8-8H200" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M56,48H200v63.1c0,39.7-31.75,72.6-71.45,72.9A72,72,0,0,1,56,112Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                      </span>
                                      <span class="d-block mb-1 mt-2">Awards</span>
                                      <h3 class="d-block fw-semibold mb-0 lh-1">24</h3>
                                  </div>
                                  <div class="text-end">
                                      <span class="fw-semibold mb-1 text-muted">This Year</span>
                                      <span class="d-block text-success fs-13 d-inline-flex align-items-center"><i class="ti ti-arrow-up"></i>43.11%</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xxl-3 col-xl-6">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="d-flex align-items-end gap-2 justify-content-between flex-wrap">
                                  <div>
                                      <span class="avatar avatar-md bg-info-transparent">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><line x1="128" y1="24" x2="128" y2="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="128" y1="208" x2="128" y2="232" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M184,88a40,40,0,0,0-40-40H112a40,40,0,0,0,0,80h40a40,40,0,0,1,0,80H104a40,40,0,0,1-40-40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                      </span>
                                      <span class="d-block mb-1 mt-2">Revenue</span>
                                      <h3 class="d-block fw-semibold mb-0 lh-1">$6,235</h3>
                                  </div>
                                  <div class="text-end">
                                      <span class="fw-semibold mb-1 text-muted">This Year</span>
                                      <span class="d-block text-success fs-13 d-inline-flex align-items-center"><i class="ti ti-arrow-up"></i>32.13%</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-12">
                      <div class="card custom-card">
                          <div class="card-header justify-content-between">
                              <div class="card-title">
                                  Attendance Report
                              </div>
                              <div class="dropdown">
                                  <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false"> Sort By <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i> </a>
                                  <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">This Month</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="card-body">
                              <div id="attendance-report"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-4">
              <div class="card custom-card overflow-hidden">
                  <div class="card-header justify-content-between">
                      <div class="card-title">
                          Teachers List
                      </div>
                      <button class="btn btn-sm btn-light border">View All <i class="ti ti-arrow-narrow-right"></i></button>
                  </div>
                  <div class="card-body p-0">
                      <div class="table-responsive">
                          <table class="table text-nowrap teachers-list">
                              <thead>
                                  <tr>
                                      <th scope="col">Teacher</th>
                                      <th scope="col">Qualification</th>
                                      <th scope="col">Subject</th>
                                  </tr>
                              </thead>
                              <tbody class="">
                                  <tr>
                                      <td>
                                          <div class="d-flex align-items-center gap-3">
                                              <img src="../assets/images/faces/11.jpg" alt="" class="avatar avatar-sm">
                                              <a href="javascript:void(0);" class="fw-semibold">John Smith</a>
                                          </div>
                                      </td>
                                      <td><span class="fs-12 text-muted d-block">M.Ed</span></td>
                                      <td><div class="text-primary fw-semibold">Mathematics</div></td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="d-flex align-items-center gap-3">
                                              <img src="../assets/images/faces/3.jpg" alt="" class="avatar avatar-sm">
                                              <a href="javascript:void(0);" class="fw-semibold">Mary Johnson</a>
                                          </div>
                                      </td>
                                      <td><span class="fs-12 text-muted d-block">B.A. in English</span></td>
                                      <td><div class="text-secondary fw-semibold">English</div></td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="d-flex align-items-center gap-3">
                                              <img src="../assets/images/faces/4.jpg" alt="" class="avatar avatar-sm">
                                              <a href="javascript:void(0);" class="fw-semibold"> Robert Davis</a>
                                          </div>
                                      </td>
                                      <td><span class="fs-12 text-muted d-block">Ph.D. in Science</span></td>
                                      <td><div class="text-danger fw-semibold">Physics</div></td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="d-flex align-items-center gap-3">
                                              <img src="../assets/images/faces/1.jpg" alt="" class="avatar avatar-sm">
                                              <a href="javascript:void(0);" class="fw-semibold"> Sarah Thompson</a>
                                          </div>
                                      </td>
                                      <td><span class="fs-12 text-muted d-block">M.A. in History</span></td>
                                      <td><div class="text-info fw-semibold">History</div></td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="d-flex align-items-center gap-3">
                                              <img src="../assets/images/faces/15.jpg" alt="" class="avatar avatar-sm">
                                              <a href="javascript:void(0);" class="fw-semibold">Michael Brown</a>
                                          </div>
                                      </td>
                                      <td><span class="fs-12 text-muted d-block">B.Ed</span></td>
                                      <td><div class="text-success fw-semibold">Chemistry</div></td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="d-flex align-items-center gap-3">
                                              <img src="../assets/images/faces/2.jpg" alt="" class="avatar avatar-sm">
                                              <a href="javascript:void(0);" class="fw-semibold">Emily Wilson</a>
                                          </div>
                                      </td>
                                      <td><span class="fs-12 text-muted d-block">M.A. in Geography</span></td>
                                      <td><div class="text-pink fw-semibold">Geography</div></td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="d-flex align-items-center gap-3">
                                              <img src="../assets/images/faces/5.jpg" alt="" class="avatar avatar-sm">
                                              <a href="javascript:void(0);" class="fw-semibold">Sarah Smith</a>
                                          </div>
                                      </td>
                                      <td><span class="fs-12 text-muted d-block">M.A.</span></td>
                                      <td><div class="text-warning fw-semibold">Hindi</div></td>
                                  </tr>
                                  <tr>
                                      <td class="border-bottom-0">
                                          <div class="d-flex align-items-center gap-3">
                                              <img src="../assets/images/faces/6.jpg" alt="" class="avatar avatar-sm">
                                              <a href="javascript:void(0);" class="fw-semibold">Angel</a>
                                          </div>
                                      </td>
                                      <td class="border-bottom-0"><span class="fs-12 text-muted d-block">M.A.</span></td>
                                      <td class="border-bottom-0"><div class="text-primary fw-semibold">Telugu</div></td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: row-1 -->

      <!-- Start:: row-2 -->
      <div class="row">
          <div class="col-xxl-3 col-xl-6">
              <div class="card custom-card">
                  <div class="card-header justify-content-between">
                      <div class="card-title">
                          Notice Board
                      </div>
                      <a href="javascript:void(0);" class="fs-12 text-muted"> View All<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                  </div>
                  <div class="card-body p-0">
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                              <div class="d-flex align-items-center gap-3">
                                  <div>
                                      <span class="avatar-md avatar bg-primary p-2 svg-white">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M232,112a24,24,0,0,0-24-24H136V79a32.06,32.06,0,0,0,24-31c0-28-26.44-45.91-27.56-46.66a8,8,0,0,0-8.88,0C122.44,2.09,96,20,96,48a32.06,32.06,0,0,0,24,31v9H48a24,24,0,0,0-24,24v23.33a40.84,40.84,0,0,0,8,24.24V200a24,24,0,0,0,24,24H200a24,24,0,0,0,24-24V159.57a40.84,40.84,0,0,0,8-24.24ZM112,48c0-13.57,10-24.46,16-29.79,6,5.33,16,16.22,16,29.79a16,16,0,0,1-32,0ZM40,112a8,8,0,0,1,8-8H208a8,8,0,0,1,8,8v23.33c0,13.25-10.46,24.31-23.32,24.66A24,24,0,0,1,168,136a8,8,0,0,0-16,0,24,24,0,0,1-48,0,8,8,0,0,0-16,0,24,24,0,0,1-24.68,24C50.46,159.64,40,148.58,40,135.33Zm160,96H56a8,8,0,0,1-8-8V172.56A38.77,38.77,0,0,0,62.88,176a39.69,39.69,0,0,0,29-11.31A40.36,40.36,0,0,0,96,160a40,40,0,0,0,64,0,40.36,40.36,0,0,0,4.13,4.67A39.67,39.67,0,0,0,192,176c.38,0,.76,0,1.14,0A38.77,38.77,0,0,0,208,172.56V200A8,8,0,0,1,200,208Z"></path></svg>
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <div>
                                          <div class="fw-semibold">Book Fair Event</div>
                                          <span class="text-muted mb-0 d-block">Explore books and join the fun!</span>
                                      </div>
                                  </div>
                                  <div class="badge bg-light text-default border">10 Jun 2024</div>
                              </div>
                          </li>
                          <li class="list-group-item">
                              <div class="d-flex align-items-center gap-3">
                                  <div>
                                      <span class="avatar-md avatar bg-secondary p-2 svg-white">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-96-88v64a8,8,0,0,1-16,0V132.94l-4.42,2.22a8,8,0,0,1-7.16-14.32l16-8A8,8,0,0,1,112,120Zm59.16,30.45L152,176h16a8,8,0,0,1,0,16H136a8,8,0,0,1-6.4-12.8l28.78-38.37A8,8,0,1,0,145.07,132a8,8,0,1,1-13.85-8A24,24,0,0,1,176,136,23.76,23.76,0,0,1,171.16,150.45Z"></path></svg>
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <div>
                                          <div class="fw-semibold">Science Fair Competition</div>
                                          <span class="text-muted mb-0 d-block">Showcase your science projects and win!</span>
                                      </div>
                                  </div>
                                  <div class="badge bg-light text-default border">24 Jun 2024</div>
                              </div>
                          </li>
                          <li class="list-group-item">
                              <div class="d-flex align-items-center gap-3">
                                  <div>
                                      <span class="avatar-md avatar bg-success p-2 svg-white">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M216,40H40A16,16,0,0,0,24,56V216a8,8,0,0,0,11.58,7.16L64,208.94l28.42,14.22a8,8,0,0,0,7.16,0L128,208.94l28.42,14.22a8,8,0,0,0,7.16,0L192,208.94l28.42,14.22A8,8,0,0,0,232,216V56A16,16,0,0,0,216,40Zm0,163.06-20.42-10.22a8,8,0,0,0-7.16,0L160,207.06l-28.42-14.22a8,8,0,0,0-7.16,0L96,207.06,67.58,192.84a8,8,0,0,0-7.16,0L40,203.06V56H216ZM60.42,167.16a8,8,0,0,0,10.74-3.58L76.94,152h38.12l5.78,11.58a8,8,0,1,0,14.32-7.16l-32-64a8,8,0,0,0-14.32,0l-32,64A8,8,0,0,0,60.42,167.16ZM96,113.89,107.06,136H84.94ZM136,128a8,8,0,0,1,8-8h16V104a8,8,0,0,1,16,0v16h16a8,8,0,0,1,0,16H176v16a8,8,0,0,1-16,0V136H144A8,8,0,0,1,136,128Z"></path></svg>
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <div>
                                          <div class="fw-semibold">Parent-Teacher Meeting</div>
                                          <span class="text-muted mb-0 d-block">Discuss your child's progress with teachers.</span>
                                      </div>
                                  </div>
                                  <div class="badge bg-light text-default border">09 Jul 2024</div>
                              </div>
                          </li>
                          <li class="list-group-item">
                              <div class="d-flex align-items-center gap-3">
                                  <div>
                                      <span class="avatar-md avatar bg-warning p-2 svg-white">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-96-88v64a8,8,0,0,1-16,0V132.94l-4.42,2.22a8,8,0,0,1-7.16-14.32l16-8A8,8,0,0,1,112,120Zm59.16,30.45L152,176h16a8,8,0,0,1,0,16H136a8,8,0,0,1-6.4-12.8l28.78-38.37A8,8,0,1,0,145.07,132a8,8,0,1,1-13.85-8A24,24,0,0,1,176,136,23.76,23.76,0,0,1,171.16,150.45Z"></path></svg>
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <div>
                                          <div class="fw-semibold d-block">Sports Day Celebration</div>
                                          <span class="text-muted mb-0 d-block">Cheer for your team in sports!</span>
                                      </div>
                                  </div>
                                  <div class="badge bg-light text-default border">12 Jul 2024</div>
                              </div>
                          </li>
                          <li class="list-group-item">
                              <div class="d-flex align-items-center gap-3">
                                  <div>
                                      <span class="avatar-md avatar bg-info p-2 svg-white">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216ZM80,108a12,12,0,1,1,12,12A12,12,0,0,1,80,108Zm96,0a12,12,0,1,1-12-12A12,12,0,0,1,176,108Zm-1.07,48c-10.29,17.79-27.4,28-46.93,28s-36.63-10.2-46.92-28a8,8,0,1,1,13.84-8c7.47,12.91,19.21,20,33.08,20s25.61-7.1,33.07-20a8,8,0,0,1,13.86,8Z"></path></svg>
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <div>
                                          <div class="fw-semibold d-block">School Picnic Announcement</div>
                                          <span class="text-muted mb-0 d-block">Enjoy outdoor fun and delicious food!</span>
                                      </div>
                                  </div>
                                  <div class="badge bg-light text-default border">05 Jul 2024</div>
                              </div>
                          </li>
                          <li class="list-group-item">
                              <div class="d-flex align-items-center gap-3">
                                  <div>
                                      <span class="avatar-md avatar bg-danger p-2 svg-white">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216ZM80,108a12,12,0,1,1,12,12A12,12,0,0,1,80,108Zm96,0a12,12,0,1,1-12-12A12,12,0,0,1,176,108Zm-1.07,48c-10.29,17.79-27.4,28-46.93,28s-36.63-10.2-46.92-28a8,8,0,1,1,13.84-8c7.47,12.91,19.21,20,33.08,20s25.61-7.1,33.07-20a8,8,0,0,1,13.86,8Z"></path></svg>
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <div>
                                          <div class="fw-semibold d-block">Career Guidance Workshop</div>
                                          <span class="text-muted mb-0 d-block">Explore career options and plan ahead!</span>
                                      </div>
                                  </div>
                                  <div class="badge bg-light text-default border">18 Jul 2024</div>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">
                          Students Overview
                      </div>
                  </div>
                  <div class="card-body">
                      <div id="students-overview"></div>
                  </div>
                  <div class="card-footer p-0">
                      <div class="row mt-0">
                          <div class="col-6 border-end border-inline-end-dashed text-center p-3">
                              <p class="mb-1 fw-medium">Boys</p>
                              <h5 class="text-primary fw-semibold">12.34K</h5>
                          </div>
                          <div class="col-6 text-center p-3">
                              <p class="mb-1 fw-medium">Girls</p>
                              <h5 class="text-secondary fw-semibold">10.19K</h5>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-4">
              <div class="card custom-card">
                  <div class="card-header justify-content-between">
                      <div class="card-title">
                          Events Calendar
                      </div>
                      <a href="javascript:void(0);" class="fs-12 text-muted"> View All<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                  </div>
                  <div class="card-body">
                      <div class="form-group events mb-4">
                          <input type="text" class="form-control" id="Eventscalendar" placeholder="Choose date">
                      </div>
                      <ul class="mb-0 list-unstyled border p-3">
                          <li class="d-flex gap-3 align-items-start">
                              <div>
                                  <span class="avatar avatar-md bg-primary">
                                      <i class="ri-calendar-event-line fs-5"></i>
                                  </span>
                              </div>
                              <div class="">
                                  <span class="fw-semibold d-block">10th Exams Schedule<span class="badge bg-light text-default float-end ms-1 border">12 Mar 2024</span></span>
                                  <span class="text-muted fs-13">Lorem ipsum dolor sit, amet consectetur adipisicing elit,</span>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-8">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">
                          Fee Details
                      </div>
                  </div>
                  <div class="card-body p-0">
                      <div class="table-responsive">
                          <table class="table text-nowrap">
                              <thead>
                                  <tr>
                                      <th class="">ID</th>
                                      <th>Student</th>
                                      <th class="">Status</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td class="">#1116</td>
                                      <td class="">
                                          <div class="d-flex align-items-center gap-2">
                                              <div>
                                                  <span class="avatar avatar-sm">
                                                      <img src="../assets/images/faces/2.jpg" alt="img">
                                                  </span>
                                              </div>
                                              <div>
                                                  <span class="d-block fw-semibold lh-1 mb-1">Studar Little</span>
                                                  <span class="fs-13 text-muted">Class Test</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td class="text-end">
                                          <span class="text-success fs-13 fw-semibold">Paid</span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="">#8547</td>
                                      <td class="">
                                          <div class="d-flex align-items-center gap-2">
                                              <div>
                                                  <span class="avatar avatar-sm">
                                                      <img src="../assets/images/faces/4.jpg" alt="img">
                                                  </span>
                                              </div>
                                              <div>
                                                  <span class="d-block fw-semibold lh-1 mb-1">Ion Somer</span>
                                                  <span class="fs-13 text-muted">Quarterly Fee</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td class="text-end">
                                          <span class="text-success fs-13 fw-semibold">Paid</span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="">#7564</td>
                                      <td class="">
                                          <div class="d-flex align-items-center gap-2">
                                              <div>
                                                  <span class="avatar avatar-sm">
                                                      <img src="../assets/images/faces/6.jpg" alt="img">
                                                  </span>
                                              </div>
                                              <div>
                                                  <span class="d-block fw-semibold lh-1 mb-1">Shakira</span>
                                                  <span class="fs-13 text-muted">Quarterly Fee</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td class="text-end">
                                          <span class="text-danger fs-13 fw-semibold">Not Paid</span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="">#1254</td>
                                      <td class="">
                                          <div class="d-flex align-items-center gap-2">
                                              <div>
                                                  <span class="avatar avatar-sm">
                                                      <img src="../assets/images/faces/8.jpg" alt="img">
                                                  </span>
                                              </div>
                                              <div>
                                                  <span class="d-block fw-semibold lh-1 mb-1">Thomas Shelby</span>
                                                  <span class="fs-13 text-muted">Annual Fee</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td class="text-end">
                                          <span class="text-success fs-13 fw-semibold">Paid</span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="">#7458</td>
                                      <td class="">
                                          <div class="d-flex align-items-center gap-2">
                                              <div>
                                                  <span class="avatar avatar-sm">
                                                      <img src="../assets/images/faces/10.jpg" alt="img">
                                                  </span>
                                              </div>
                                              <div>
                                                  <span class="d-block fw-semibold lh-1 mb-1">Stefan U</span>
                                                  <span class="fs-13 text-muted">Monthly Test</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td class="text-end">
                                          <span class="text-success fs-13 fw-semibold">Paid</span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="">#6325</td>
                                      <td class="">
                                          <div class="d-flex align-items-center gap-2">
                                              <div>
                                                  <span class="avatar avatar-sm">
                                                      <img src="../assets/images/faces/12.jpg" alt="img">
                                                  </span>
                                              </div>
                                              <div>
                                                  <span class="d-block fw-semibold lh-1 mb-1">Michael Shreff</span>
                                                  <span class="fs-13 text-muted">Annual Fee</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td class="text-end">
                                          <span class="text-danger fs-13 fw-semibold">Not Paid</span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="rounded">#2321</td>
                                      <td class="rounded">
                                          <div class="d-flex align-items-center gap-2">
                                              <div>
                                                  <span class="avatar avatar-sm">
                                                      <img src="../assets/images/faces/4.jpg" alt="img">
                                                  </span>
                                              </div>
                                              <div>
                                                  <span class="d-block fw-semibold lh-1 mb-1">Leo Phllip</span>
                                                  <span class="fs-13 text-muted">Class Test</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td class="text-end rounded">
                                          <span class="text-success fs-13 fw-semibold">Paid</span>
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
          <div class="col-xl-12">
              <div class="card custom-card">
                  <div class="card-header justify-content-between">
                      <div class="card-title">
                          Students Marks
                      </div>
                      <div class="d-flex align-items-center gap-2">
                          <div class="d-flex flex-wrap gap-2">
                              <div>
                                  <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
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
                  </div>
                  <div class="card-body p-0">
                      <div class="table-responsive">
                          <table class="table text-nowrap text-center">
                              <thead>
                                  <tr>
                                      <th class="">S.No</th>
                                      <th class="">ID</th>
                                      <th class="text-start">Student</th>
                                      <th class="">Class</th>
                                      <th class="">Section</th>
                                      <th class="">Status</th>
                                      <th class="">Marks In %</th>
                                      <th class="">Marks In GPA</th>
                                      <th class="">Actions</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td class="">1</td>
                                      <td class="">#1116</td>
                                      <td class="">
                                          <div class="d-flex align-items-center">
                                              <a href="javascript:void(0);" class="avatar avatar-xs avatar-rounded me-2">
                                                  <img src="../assets/images/faces/2.jpg" alt="img">
                                              </a>
                                              <a href="javascript:void(0);">Studar Little</a>
                                          </div>
                                      </td>
                                      <td class="">IX</td>
                                      <td class="">B</td>
                                      <td class="">
                                          <span class="badge bg-success-transparent">Pass</span>
                                      </td>
                                      <td class="">75%</td>
                                      <td class="">7.5</td>
                                      <td class="">
                                          <div class="btn-list">
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                  <i class="ri-eye-line"></i>
                                              </button>
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light">
                                                  <i class="ri-edit-line"></i>
                                              </button>
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-danger-light">
                                                  <i class="ri-delete-bin-line"></i>
                                              </button>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="">2</td>
                                      <td class="">#8547</td>
                                      <td class="">
                                          <div class="d-flex align-items-center">
                                              <a href="javascript:void(0);" class="avatar avatar-xs avatar-rounded me-2">
                                                  <img src="../assets/images/faces/4.jpg" alt="img">
                                              </a>
                                              <a href="javascript:void(0);">Ion Somer</a>
                                          </div>
                                      </td>
                                      <td class="">X</td>
                                      <td class="">A</td>
                                      <td class="">
                                          <span class="badge bg-success-transparent">Pass</span>
                                      </td>
                                      <td class="">65%</td>
                                      <td class="">6.5</td>
                                      <td class="">
                                          <div class="btn-list">
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                  <i class="ri-eye-line"></i>
                                              </button>
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light">
                                                  <i class="ri-edit-line"></i>
                                              </button>
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-danger-light">
                                                  <i class="ri-delete-bin-line"></i>
                                              </button>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="">3</td>
                                      <td class="">#7564</td>
                                      <td class="">
                                          <div class="d-flex align-items-center">
                                              <a href="javascript:void(0);" class="avatar avatar-xs avatar-rounded me-2">
                                                  <img src="../assets/images/faces/6.jpg" alt="img">
                                              </a>
                                              <a href="javascript:void(0);">Shakira</a>
                                          </div>
                                      </td>
                                      <td class="">X</td>
                                      <td class="">B</td>
                                      <td class="">
                                          <span class="badge bg-danger-transparent">Fail</span>
                                      </td>
                                      <td class="">25%</td>
                                      <td class="">2.5</td>
                                      <td class="">
                                          <div class="btn-list">
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                  <i class="ri-eye-line"></i>
                                              </button>
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light">
                                                  <i class="ri-edit-line"></i>
                                              </button>
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-danger-light">
                                                  <i class="ri-delete-bin-line"></i>
                                              </button>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="">4</td>
                                      <td class="">#1254</td>
                                      <td class="">
                                          <div class="d-flex align-items-center">
                                              <a href="javascript:void(0);" class="avatar avatar-xs avatar-rounded me-2">
                                                  <img src="../assets/images/faces/8.jpg" alt="img">
                                              </a>
                                              <a href="javascript:void(0);">Thomas Shelby</a>
                                          </div>
                                      </td>
                                      <td class="">IX</td>
                                      <td class="">A</td>
                                      <td class="">
                                          <span class="badge bg-success-transparent">Pass</span>
                                      </td>
                                      <td class="">95%</td>
                                      <td class="">9.5</td>
                                      <td class="">
                                          <div class="btn-list">
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                  <i class="ri-eye-line"></i>
                                              </button>
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light">
                                                  <i class="ri-edit-line"></i>
                                              </button>
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-danger-light">
                                                  <i class="ri-delete-bin-line"></i>
                                              </button>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="">5</td>
                                      <td class="">#7458</td>
                                      <td class="">
                                          <div class="d-flex align-items-center">
                                              <a href="javascript:void(0);" class="avatar avatar-xs avatar-rounded me-2">
                                                  <img src="../assets/images/faces/10.jpg" alt="img">
                                              </a>
                                              <a href="javascript:void(0);">Stefan U</a>
                                          </div>
                                      </td>
                                      <td class="">IX</td>
                                      <td class="">B</td>
                                      <td class="">
                                          <span class="badge bg-success-transparent">Pass</span>
                                      </td>
                                      <td class="">62%</td>
                                      <td class="">6.2</td>
                                      <td class="">
                                          <div class="btn-list">
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                  <i class="ri-eye-line"></i>
                                              </button>
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light">
                                                  <i class="ri-edit-line"></i>
                                              </button>
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-danger-light">
                                                  <i class="ri-delete-bin-line"></i>
                                              </button>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="">6</td>
                                      <td class="">#6325</td>
                                      <td class="">
                                          <div class="d-flex align-items-center">
                                              <a href="javascript:void(0);" class="avatar avatar-xs avatar-rounded me-2">
                                                  <img src="../assets/images/faces/12.jpg" alt="img">
                                              </a>
                                              <a href="javascript:void(0);">Michael Shreff</a>
                                          </div>
                                      </td>
                                      <td class="">X</td>
                                      <td class="">A</td>
                                      <td class="">
                                          <span class="badge bg-danger-transparent">Fail</span>
                                      </td>
                                      <td class="">15%</td>
                                      <td class="">1.5</td>
                                      <td class="">
                                          <div class="btn-list">
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                  <i class="ri-eye-line"></i>
                                              </button>
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light">
                                                  <i class="ri-edit-line"></i>
                                              </button>
                                              <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-danger-light">
                                                  <i class="ri-delete-bin-line"></i>
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
                          <div> Showing 6 Entries <i class="bi bi-arrow-right ms-2 fw-medium"></i> </div>
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
      <!-- End:: row-3 -->
      
  </div>
</div> 
<!-- End::app-content -->

@endsection