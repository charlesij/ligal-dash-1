@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Page Header -->
      <div
          class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Projects List</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Projects</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Projects List</li>
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

      <!-- Start::row-1 -->

      <div class="row row-cols-xxl-5 row-cols-xl-3 row-cols-md-2 row-cols-1">
          <div class="col">
              <div class="card custom-card">
                  <div class="card-body">
                      <div class="d-flex align-items-start flex-wrap gap-3">
                          <div>
                              <span class="avatar avatar-md bg-primary shipping-icon mx-2">
                                  <i class="ri-briefcase-line fs-20"></i></span>
                          </div>
                          <div class="flex-fill">
                              <span class="d-block mb-2">Total Projects</span>
                              <h3 class="fw-semibold mb-2 lh-1">12,432 </h3>
                          </div>
                          <div class="dropdown">
                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown">
                                  <i class="ri-more-2-fill fs-18 text-muted"></i>
                              </a>
                              <ul class="dropdown-menu" role="menu">
                                  <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card custom-card">
                  <div class="card-body">
                      <div class="d-flex align-items-start flex-wrap gap-3">
                          <div>
                              <span class="avatar avatar-md bg-secondary shipping-icon-1 mx-2">
                                  <i class="ri-briefcase-line fs-20"></i></span>
                          </div>
                          <div class="flex-fill">
                              <span class="d-block mb-2">New Projects</span>
                              <h3 class="fw-semibold mb-2 lh-1">12,432 </h3>
                          </div>
                          <div class="dropdown">
                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown">
                                  <i class="ri-more-2-fill fs-18 text-muted"></i>
                              </a>
                              <ul class="dropdown-menu" role="menu">
                                  <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card custom-card">
                  <div class="card-body">
                      <div class="d-flex align-items-start flex-wrap gap-3">
                          <div>
                              <span class="avatar avatar-md bg-success shipping-icon-2 mx-2">
                                  <i class="ri-briefcase-line fs-20"></i></span>
                          </div>
                          <div class="flex-fill">
                              <span class="d-block mb-2">Completed Projects</span>
                              <h3 class="fw-semibold mb-2 lh-1">12,432 </h3>
                          </div>
                          <div class="dropdown">
                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown">
                                  <i class="ri-more-2-fill fs-18 text-muted"></i>
                              </a>
                              <ul class="dropdown-menu" role="menu">
                                  <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card custom-card">
                  <div class="card-body">
                      <div class="d-flex align-items-start flex-wrap gap-3">
                          <div>
                              <span class="avatar avatar-md bg-info shipping-icon-4 mx-2">
                                  <i class="ri-briefcase-line fs-20"></i></span>
                          </div>
                          <div class="flex-fill">
                              <span class="d-block mb-2">On going Projects</span>
                              <h3 class="fw-semibold mb-2 lh-1">12,432 </h3>
                          </div>
                          <div class="dropdown">
                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown">
                                  <i class="ri-more-2-fill fs-18 text-muted"></i>
                              </a>
                              <ul class="dropdown-menu" role="menu">
                                  <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card custom-card">
                  <div class="card-body">
                      <div class="d-flex align-items-start flex-wrap gap-3">
                          <div>
                              <span class="avatar avatar-md bg-warning shipping-icon-3 mx-2">
                                  <i class="ri-briefcase-line fs-20"></i></span>
                          </div>
                          <div class="flex-fill">
                              <span class="d-block mb-2">In Review Projects</span>
                              <h3 class="fw-semibold mb-2 lh-1">12,432 </h3>
                          </div>
                          <div class="dropdown">
                              <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown">
                                  <i class="ri-more-2-fill fs-18 text-muted"></i>
                              </a>
                              <ul class="dropdown-menu" role="menu">
                                  <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End::row-1 -->

        <!-- Start::row-2 -->
        <div class="row">
          <div class="col-xl-12">
              <div class="col-xl-12">
                  <div class="card custom-card">
                      <div class="card-body p-3 d-flex align-items-center gap-3 flex-wrap justify-content-between">
                          <ul class="nav nav-tabs tab-style-8 scaleX mb-0 d-flex gap-3" id="myTab1"
                              role="tablist">
                              <li class="nav-item me-0" role="presentation">
                                  <button class="nav-link active" id="users-tab" data-bs-toggle="tab"
                                      data-bs-target="#users-tab-pane" type="button" role="tab"
                                      aria-controls="users-tab-pane" aria-selected="true">Todo <span
                                          class="badge bg-light text-default ms-1">546</span></button>
                              </li>
                              <li class="nav-item me-0" role="presentation">
                                  <button class="nav-link" id="groups-tab" data-bs-toggle="tab"
                                      data-bs-target="#groups-tab-pane" type="button" role="tab"
                                      aria-controls="groups-tab-pane" aria-selected="false" tabindex="-1">In
                                      Progress</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="contacts-tab" data-bs-toggle="tab"
                                      data-bs-target="#contacts-tab-pane" type="button" role="tab"
                                      aria-controls="contacts-tab-pane" aria-selected="false"
                                      tabindex="-1">Completed</button>
                              </li>
                          </ul>
                          <div class="custom-form-group mb-0 w-sm-50 w-100"> <input type="text"
                                  class="form-control form-control-md  py-2"
                                  placeholder="Search Product.." aria-label="Search Hear.."> <button
                                  class="btn btn-primary btn-sm border-0 custom-form-btn  px-3"
                                  type="button">Search</button> </div>
                          <div class="text-sm-end text-start">
                              <div class="d-flex flex-wrap">
                                  <div class="dropdown ms-2">
                                      <button class="btn btn-outline-light border me-2 dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                      <i class="ti ti-sort-descending-2 me-1"></i> Filter
                                      </button>
                                      <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="javascript:void(0)">Date
                                                  Published</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0)">Most
                                                  Relevant</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0)">Price Low to
                                                  High</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0)">Price High to
                                                  Low</a></li>
                                      </ul>
                                  </div>
                                  <a href="projects-create.html" class="btn btn-primary text-nowrap"><i
                                          class="ri-add-line me-1 fw-medium align-middle"></i>Add New
                                      Project</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="tab-content">
                      <div class="tab-pane show active text-muted border-0 p-0" id="users-tab-pane"
                          role="tabpanel">
                          <div class="row row-cols-xxl-5 row-cols-md-2 row-cols-1">
                              <div class="col">
                                  <div class="card custom-card">
                                      <div class="card-body">
                                          <div class="d-flex align-items-center justify-content-between mb-2">
                                              <span class="badge bg-primary-transparent rounded-pill">Web
                                                  Design</span>
                                              <div class="dropdown">
                                                  <a class="btn btn-sm btn-icon btn-light" aria-label="anchor"
                                                      href="javascript:void(0);" data-bs-toggle="dropdown">
                                                      <i class="ri-more-2-fill text-muted"></i>
                                                  </a>
                                                  <ul class="dropdown-menu" role="menu">
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Week</a></li>
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Day</a></li>
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Year</a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                          <h6 class="mb-2 fw-semibold">E-commerce Platform Design</h6>
                                          <span class="text-muted fs-13">A fully functional online store
                                              allowing users to browse products.</span>
                                          <div
                                              class="p-2 bg-light border d-flex align-items-center gap-3 mt-2 rounded flex-wrap">
                                              <span class="avatar avatar-md bg-primary-transparent"><i
                                                      class="ri-html5-fill fs-20"></i></span>
                                              <div>
                                                  <p class="mb-0">HTML Deisgn</p>
                                                  <span class="text-muted d-block fs-12"><strong
                                                          class="text-default">18/22</strong> tasks
                                                      completed</span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card-footer d-flex justify-content-between align-items-center">
                                          <div class="avatar-list-stacked"> <span
                                                  class="avatar avatar-sm avatar-rounded"> <img
                                                      src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img"> </span>
                                              <span class="avatar avatar-sm avatar-rounded"> <img
                                                      src="{{ asset('') }}/assets/images/faces/8.jpg" alt="img"> </span>
                                              <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white"
                                                  href="javascript:void(0);"> +2 </a> </div>
                                          <span class="fs-13 text-muted"><i class="ri-calendar-line me-1"></i>07, Dec 2024</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="card custom-card">
                                      <div class="card-body">
                                          <div class="d-flex align-items-center justify-content-between mb-2">
                                              <span class="badge bg-success-transparent rounded-pill">Ui Testing</span>
                                              <div class="dropdown">
                                                  <a class="btn btn-sm btn-icon btn-light" aria-label="anchor"
                                                      href="javascript:void(0);" data-bs-toggle="dropdown">
                                                      <i class="ri-more-2-fill text-muted"></i>
                                                  </a>
                                                  <ul class="dropdown-menu" role="menu">
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Week</a></li>
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Day</a></li>
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Year</a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                          <h6 class="mb-2 fw-semibold">Fitness Tracker App</h6>
                                          <span class="text-muted fs-13">An app designed to track physical activities, monitor progress, and set fitness goals. </span>
                                          <div
                                              class="p-2 bg-light border d-flex align-items-center gap-3 mt-2 rounded flex-wrap">
                                              <span class="avatar avatar-md bg-secondary-transparent"><i class="ri-window-fill fs-20"></i></span>
                                              <div>
                                                  <p class="mb-0">User Interface Testing</p>
                                                  <span class="text-muted d-block fs-12"><strong
                                                          class="text-default">6/12</strong> tasks
                                                      completed</span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card-footer d-flex justify-content-between align-items-center">
                                          <div class="avatar-list-stacked"> <span
                                                  class="avatar avatar-sm avatar-rounded"> <img
                                                      src="{{ asset('') }}/assets/images/faces/3.jpg" alt="img"> </span>
                                              <span class="avatar avatar-sm avatar-rounded"> <img
                                                      src="{{ asset('') }}/assets/images/faces/5.jpg" alt="img"> </span>
                                                      <span class="avatar avatar-sm avatar-rounded"> <img
                                                          src="{{ asset('') }}/assets/images/faces/8.jpg" alt="img"> </span>
                                            </div>
                                          <span class="fs-13 text-muted"><i class="ri-calendar-line me-1"></i>12, Aug 2024</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="card custom-card">
                                      <div class="card-body">
                                          <div class="d-flex align-items-center justify-content-between mb-2">
                                              <span class="badge bg-secondary-transparent rounded-pill">Data Seience</span>
                                              <div class="dropdown">
                                                  <a class="btn btn-sm btn-icon btn-light" aria-label="anchor"
                                                      href="javascript:void(0);" data-bs-toggle="dropdown">
                                                      <i class="ri-more-2-fill text-muted"></i>
                                                  </a>
                                                  <ul class="dropdown-menu" role="menu">
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Week</a></li>
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Day</a></li>
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Year</a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                          <h6 class="mb-2 fw-semibold">Customer Segmentation Analysis</h6>
                                          <span class="text-muted fs-13"> A data analysis project that segments customers based on purchasing behavior.</span>
                                          <div
                                              class="p-2 bg-light border d-flex align-items-center gap-3 mt-2 rounded flex-wrap">
                                              <span class="avatar avatar-md bg-success-transparent"><i class="ri-database-2-fill fs-20"></i></span>
                                              <div>
                                                  <p class="mb-0">Marketing Analytics</p>
                                                  <span class="text-muted d-block fs-12"><strong
                                                          class="text-default">09/32</strong> tasks
                                                      completed</span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card-footer d-flex justify-content-between align-items-center">
                                          <div class="avatar-list-stacked"> <span
                                                  class="avatar avatar-sm avatar-rounded"> <img
                                                      src="{{ asset('') }}/assets/images/faces/1.jpg" alt="img"> </span>
                                              <span class="avatar avatar-sm avatar-rounded"> <img
                                                      src="{{ asset('') }}/assets/images/faces/7.jpg" alt="img"> </span>
                                              <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white"
                                                  href="javascript:void(0);"> +2 </a> </div>
                                          <span class="fs-13 text-muted"><i class="ri-calendar-line me-1"></i>24, Nov 2024</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="card custom-card">
                                      <div class="card-body">
                                          <div class="d-flex align-items-center justify-content-between mb-2">
                                              <span class="badge bg-warning-transparent rounded-pill">Development</span>
                                              <div class="dropdown">
                                                  <a class="btn btn-sm btn-icon btn-light" aria-label="anchor"
                                                      href="javascript:void(0);" data-bs-toggle="dropdown">
                                                      <i class="ri-more-2-fill text-muted"></i>
                                                  </a>
                                                  <ul class="dropdown-menu" role="menu">
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Week</a></li>
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Day</a></li>
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Year</a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                          <h6 class="mb-2 fw-semibold">Inventory Management System</h6>
                                          <span class="text-muted fs-13">A software application for managing inventory levels, tracking stock. </span>
                                          <div
                                              class="p-2 bg-light border d-flex align-items-center gap-3 mt-2 rounded flex-wrap">
                                              <span class="avatar avatar-md bg-info-transparent"><i class="ri-survey-fill fs-20"></i></span>
                                              <div>
                                                  <p class="mb-0">Enterprise Resource Planning</p>
                                                  <span class="text-muted d-block fs-12"><strong
                                                          class="text-default">16/18</strong> tasks
                                                      completed</span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card-footer d-flex justify-content-between align-items-center">
                                          <div class="avatar-list-stacked"> <span
                                                  class="avatar avatar-sm avatar-rounded"> <img
                                                      src="{{ asset('') }}/assets/images/faces/8.jpg" alt="img"> </span>
                                              <span class="avatar avatar-sm avatar-rounded"> <img
                                                      src="{{ asset('') }}/assets/images/faces/5.jpg" alt="img"> </span>
                                              </div>
                                          <span class="fs-13 text-muted"><i class="ri-calendar-line me-1"></i>15, Sept 2024</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="card custom-card">
                                      <div class="card-body">
                                          <div class="d-flex align-items-center justify-content-between mb-2">
                                              <span class="badge bg-info-transparent rounded-pill">Sales</span>
                                              <div class="dropdown">
                                                  <a class="btn btn-sm btn-icon btn-light" aria-label="anchor"
                                                      href="javascript:void(0);" data-bs-toggle="dropdown">
                                                      <i class="ri-more-2-fill text-muted"></i>
                                                  </a>
                                                  <ul class="dropdown-menu" role="menu">
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Week</a></li>
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Day</a></li>
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Year</a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                          <h6 class="mb-2 fw-semibold">Sales Forecasting Model</h6>
                                          <span class="text-muted fs-13">A predictive model to forecast future sales based on historical data.</span>
                                          <div
                                              class="p-2 bg-light border d-flex align-items-center gap-3 mt-2 rounded flex-wrap">
                                              <span class="avatar avatar-md bg-warning-transparent"><i class="ri-bubble-chart-fill fs-20"></i></span>
                                              <div>
                                                  <p class="mb-0">Predictive Analytics</p>
                                                  <span class="text-muted d-block fs-12"><strong
                                                          class="text-default">12/45</strong> tasks
                                                      completed</span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card-footer d-flex justify-content-between align-items-center">
                                          <div class="avatar-list-stacked"> <span
                                                  class="avatar avatar-sm avatar-rounded"> <img
                                                      src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img"> </span>
                                              <span class="avatar avatar-sm avatar-rounded"> <img
                                                      src="{{ asset('') }}/assets/images/faces/8.jpg" alt="img"> </span>
                                              <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white"
                                                  href="javascript:void(0);"> +2 </a> </div>
                                          <span class="fs-13 text-muted"><i class="ri-calendar-line me-1"></i>11, Nov 2024</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="card custom-card">
                                      <div class="card-body">
                                          <div class="d-flex align-items-center justify-content-between mb-2">
                                              <span class="badge bg-secondary-transparent rounded-pill">UI/UX Design</span>
                                              <div class="dropdown">
                                                  <a class="btn btn-sm btn-icon btn-light" aria-label="anchor"
                                                      href="javascript:void(0);" data-bs-toggle="dropdown">
                                                      <i class="ri-more-2-fill text-muted"></i>
                                                  </a>
                                                  <ul class="dropdown-menu" role="menu">
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Week</a></li>
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Day</a></li>
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Year</a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                          <h6 class="mb-2 fw-semibold">Redesign of Checkout Process</h6>
                                          <span class="text-muted fs-13"> A project focused on improving the user experience of an online checkout process. </span>
                                          <div
                                              class="p-2 bg-light border d-flex align-items-center gap-3 mt-2 rounded flex-wrap">
                                              <span class="avatar avatar-md bg-danger-transparent"><i class="ri-aed-electrodes-fill fs-20"></i></span>
                                              <div>
                                                  <p class="mb-0">UX Design</p>
                                                  <span class="text-muted d-block fs-12"><strong
                                                          class="text-default">15/16</strong> tasks
                                                      completed</span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card-footer d-flex justify-content-between align-items-center">
                                          <div class="avatar-list-stacked"> <span
                                                  class="avatar avatar-sm avatar-rounded"> <img
                                                      src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img"> </span>
                                              <span class="avatar avatar-sm avatar-rounded"> <img
                                                      src="{{ asset('') }}/assets/images/faces/8.jpg" alt="img"> </span>
                                                      <span class="avatar avatar-sm avatar-rounded"> <img
                                                          src="{{ asset('') }}/assets/images/faces/5.jpg" alt="img"> </span>
                                                          <span class="avatar avatar-sm avatar-rounded"> <img
                                                              src="{{ asset('') }}/assets/images/faces/1.jpg" alt="img"> </span>
                                              <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white"
                                                  href="javascript:void(0);"> +2 </a> </div>
                                          <span class="fs-13 text-muted"><i class="ri-calendar-line me-1"></i>21, Jan 2024</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="card custom-card">
                                      <div class="card-body">
                                          <div class="d-flex align-items-center justify-content-between mb-2">
                                              <span class="badge bg-primary-transparent rounded-pill">Cloud Computing</span>
                                              <div class="dropdown">
                                                  <a class="btn btn-sm btn-icon btn-light" aria-label="anchor"
                                                      href="javascript:void(0);" data-bs-toggle="dropdown">
                                                      <i class="ri-more-2-fill text-muted"></i>
                                                  </a>
                                                  <ul class="dropdown-menu" role="menu">
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Week</a></li>
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Day</a></li>
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Year</a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                          <h6 class="mb-2 fw-semibold">Cloud-Based File Storage System</h6>
                                          <span class="text-muted fs-13">A system that provides secure cloud storage for files, with features such as file sharing.</span>
                                          <div
                                              class="p-2 bg-light border d-flex align-items-center gap-3 mt-2 rounded flex-wrap">
                                              <span class="avatar avatar-md bg-info-transparent"><i class="ri-cloud-fill fs-20"></i></span>
                                              <div>
                                                  <p class="mb-0">Cloud Storage</p>
                                                  <span class="text-muted d-block fs-12"><strong
                                                          class="text-default">05/10</strong> tasks
                                                      completed</span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card-footer d-flex justify-content-between align-items-center">
                                          <div class="avatar-list-stacked"> <span
                                                  class="avatar avatar-sm avatar-rounded"> <img
                                                      src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img"> </span>
                                              <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white"
                                                  href="javascript:void(0);"> +2 </a> </div>
                                          <span class="fs-13 text-muted"><i class="ri-calendar-line me-1"></i>12, Feb 2024</span>
                                      </div>
                                  </div>
                              </div>  
                              <div class="col">
                                  <div class="card custom-card">
                                      <div class="card-body">
                                          <div class="d-flex align-items-center justify-content-between mb-2">
                                              <span class="badge bg-pink-transparent rounded-pill">Game Development</span>
                                              <div class="dropdown">
                                                  <a class="btn btn-sm btn-icon btn-light" aria-label="anchor"
                                                      href="javascript:void(0);" data-bs-toggle="dropdown">
                                                      <i class="ri-more-2-fill text-muted"></i>
                                                  </a>
                                                  <ul class="dropdown-menu" role="menu">
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Week</a></li>
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Day</a></li>
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Year</a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                          <h6 class="mb-2 fw-semibold">2D Platformer Game</h6>
                                          <span class="text-muted fs-13"> A side-scrolling platform game where players navigate levels.</span>
                                          <div
                                              class="p-2 bg-light border d-flex align-items-center gap-3 mt-2 rounded flex-wrap">
                                              <span class="avatar avatar-md bg-teal-transparent"><i class="ri-discord-fill fs-20"></i></span>
                                              <div>
                                                  <p class="mb-0">Game Development</p>
                                                  <span class="text-muted d-block fs-12"><strong
                                                          class="text-default">17/43</strong> tasks
                                                      completed</span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card-footer d-flex justify-content-between align-items-center">
                                          <div class="avatar-list-stacked"> <span
                                                  class="avatar avatar-sm avatar-rounded"> <img
                                                      src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img"> </span>
                                              <span class="avatar avatar-sm avatar-rounded"> <img
                                                      src="{{ asset('') }}/assets/images/faces/8.jpg" alt="img"> </span>
                                              <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white"
                                                  href="javascript:void(0);"> +2 </a> </div>
                                          <span class="fs-13 text-muted"><i class="ri-calendar-line me-1"></i>17, Aug 2024</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="card custom-card">
                                      <div class="card-body">
                                          <div class="d-flex align-items-center justify-content-between mb-2">
                                              <span class="badge bg-success-transparent rounded-pill">Machine Learning</span>
                                              <div class="dropdown">
                                                  <a class="btn btn-sm btn-icon btn-light" aria-label="anchor"
                                                      href="javascript:void(0);" data-bs-toggle="dropdown">
                                                      <i class="ri-more-2-fill text-muted"></i>
                                                  </a>
                                                  <ul class="dropdown-menu" role="menu">
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Week</a></li>
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Day</a></li>
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Year</a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                          <h6 class="mb-2 fw-semibold">Recommendation System</h6>
                                          <span class="text-muted fs-13">A machine learning model that classifies images into different categories.</span>
                                          <div
                                              class="p-2 bg-light border d-flex align-items-center gap-3 mt-2 rounded flex-wrap">
                                              <span class="avatar avatar-md bg-success-transparent"><i class="ri-mac-fill fs-20"></i></span>
                                              <div>
                                                  <p class="mb-0">Computer Vision</p>
                                                  <span class="text-muted d-block fs-12"><strong
                                                          class="text-default">23/32</strong> tasks
                                                      completed</span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card-footer d-flex justify-content-between align-items-center">
                                          <div class="avatar-list-stacked"> <span
                                                  class="avatar avatar-sm avatar-rounded"> <img
                                                      src="{{ asset('') }}/assets/images/faces/3.jpg" alt="img"> </span>
                                              <span class="avatar avatar-sm avatar-rounded"> <img
                                                      src="{{ asset('') }}/assets/images/faces/5.jpg" alt="img"> </span>
                                                      <span class="avatar avatar-sm avatar-rounded"> <img
                                                          src="{{ asset('') }}/assets/images/faces/9.jpg" alt="img"> </span>
                                              <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white"
                                                  href="javascript:void(0);"> +2 </a> </div>
                                          <span class="fs-13 text-muted"><i class="ri-calendar-line me-1"></i>15, Oct 2024</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="card custom-card">
                                      <div class="card-body">
                                          <div class="d-flex align-items-center justify-content-between mb-2">
                                              <span class="badge bg-secondary-transparent rounded-pill">Blockchain</span>
                                              <div class="dropdown">
                                                  <a class="btn btn-sm btn-icon btn-light" aria-label="anchor"
                                                      href="javascript:void(0);" data-bs-toggle="dropdown">
                                                      <i class="ri-more-2-fill text-muted"></i>
                                                  </a>
                                                  <ul class="dropdown-menu" role="menu">
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Week</a></li>
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Day</a></li>
                                                      <li><a class="dropdown-item"
                                                              href="javascript:void(0);">Year</a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                          <h6 class="mb-2 fw-semibold">Cryptocurrency Wallet</h6>
                                          <span class="text-muted fs-13">A secure wallet application for storing and managing cryptocurrencies. </span>
                                          <div
                                              class="p-2 bg-light border d-flex align-items-center gap-3 mt-2 rounded flex-wrap">
                                              <span class="avatar avatar-md bg-primary-transparent"><i class="ri-equalizer-fill fs-20"></i></span>
                                              <div>
                                                  <p class="mb-0">Blockchain/Fintech</p>
                                                  <span class="text-muted d-block fs-12"><strong
                                                          class="text-default">18/22</strong> tasks
                                                      completed</span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card-footer d-flex justify-content-between align-items-center">
                                          <div class="avatar-list-stacked"> <span
                                                  class="avatar avatar-sm avatar-rounded"> <img
                                                      src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img"> </span>
                                              <span class="avatar avatar-sm avatar-rounded"> <img
                                                      src="{{ asset('') }}/assets/images/faces/8.jpg" alt="img"> </span>
                                                      <span class="avatar avatar-sm avatar-rounded"> <img
                                                          src="{{ asset('') }}/assets/images/faces/8.jpg" alt="img"> </span> </div>
                                          <span class="fs-13 text-muted"><i class="ri-calendar-line me-1"></i>13, Jul 2024</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane text-muted border-0 p-0" id="groups-tab-pane"
                      role="tabpanel">
                      <div class="row row-cols-xxl-5 row-cols-md-2 row-cols-1">
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="d-flex align-items-center justify-content-between mb-2">
                                          <span class="badge bg-secondary-transparent rounded-pill">UI/UX Design</span>
                                          <div class="dropdown">
                                              <a class="btn btn-sm btn-icon btn-light" aria-label="anchor"
                                                  href="javascript:void(0);" data-bs-toggle="dropdown">
                                                  <i class="ri-more-2-fill text-muted"></i>
                                              </a>
                                              <ul class="dropdown-menu" role="menu">
                                                  <li><a class="dropdown-item"
                                                          href="javascript:void(0);">Week</a></li>
                                                  <li><a class="dropdown-item"
                                                          href="javascript:void(0);">Day</a></li>
                                                  <li><a class="dropdown-item"
                                                          href="javascript:void(0);">Year</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <h6 class="mb-2 fw-semibold">Redesign of Checkout Process</h6>
                                      <span class="text-muted fs-13"> A project focused on improving the user experience of an online checkout process. </span>
                                      <div
                                          class="p-2 bg-light border d-flex align-items-center gap-3 mt-2 rounded flex-wrap">
                                          <span class="avatar avatar-md bg-danger-transparent"><i class="ri-aed-electrodes-fill fs-20"></i></span>
                                          <div>
                                              <p class="mb-0">UX Design</p>
                                              <span class="text-muted d-block fs-12"><strong
                                                      class="text-default">15/16</strong> tasks
                                                  completed</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="card-footer d-flex justify-content-between align-items-center">
                                      <div class="avatar-list-stacked"> <span
                                              class="avatar avatar-sm avatar-rounded"> <img
                                                  src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img"> </span>
                                          <span class="avatar avatar-sm avatar-rounded"> <img
                                                  src="{{ asset('') }}/assets/images/faces/8.jpg" alt="img"> </span>
                                                  <span class="avatar avatar-sm avatar-rounded"> <img
                                                      src="{{ asset('') }}/assets/images/faces/5.jpg" alt="img"> </span>
                                                      <span class="avatar avatar-sm avatar-rounded"> <img
                                                          src="{{ asset('') }}/assets/images/faces/1.jpg" alt="img"> </span>
                                          <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white"
                                              href="javascript:void(0);"> +2 </a> </div>
                                      <span class="fs-13 text-muted"><i class="ri-calendar-line me-1"></i>21, Jan 2024</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="d-flex align-items-center justify-content-between mb-2">
                                          <span class="badge bg-primary-transparent rounded-pill">Cloud Computing</span>
                                          <div class="dropdown">
                                              <a class="btn btn-sm btn-icon btn-light" aria-label="anchor"
                                                  href="javascript:void(0);" data-bs-toggle="dropdown">
                                                  <i class="ri-more-2-fill text-muted"></i>
                                              </a>
                                              <ul class="dropdown-menu" role="menu">
                                                  <li><a class="dropdown-item"
                                                          href="javascript:void(0);">Week</a></li>
                                                  <li><a class="dropdown-item"
                                                          href="javascript:void(0);">Day</a></li>
                                                  <li><a class="dropdown-item"
                                                          href="javascript:void(0);">Year</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <h6 class="mb-2 fw-semibold">Cloud-Based File Storage System</h6>
                                      <span class="text-muted fs-13">A system that provides secure cloud storage for files, with features such as file sharing.</span>
                                      <div
                                          class="p-2 bg-light border d-flex align-items-center gap-3 mt-2 rounded flex-wrap">
                                          <span class="avatar avatar-md bg-info-transparent"><i class="ri-cloud-fill fs-20"></i></span>
                                          <div>
                                              <p class="mb-0">Cloud Storage</p>
                                              <span class="text-muted d-block fs-12"><strong
                                                      class="text-default">05/10</strong> tasks
                                                  completed</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="card-footer d-flex justify-content-between align-items-center">
                                      <div class="avatar-list-stacked"> <span
                                              class="avatar avatar-sm avatar-rounded"> <img
                                                  src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img"> </span>
                                          <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white"
                                              href="javascript:void(0);"> +2 </a> </div>
                                      <span class="fs-13 text-muted"><i class="ri-calendar-line me-1"></i>12, Feb 2024</span>
                                  </div>
                              </div>
                          </div>  
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="d-flex align-items-center justify-content-between mb-2">
                                          <span class="badge bg-pink-transparent rounded-pill">Game Development</span>
                                          <div class="dropdown">
                                              <a class="btn btn-sm btn-icon btn-light" aria-label="anchor"
                                                  href="javascript:void(0);" data-bs-toggle="dropdown">
                                                  <i class="ri-more-2-fill text-muted"></i>
                                              </a>
                                              <ul class="dropdown-menu" role="menu">
                                                  <li><a class="dropdown-item"
                                                          href="javascript:void(0);">Week</a></li>
                                                  <li><a class="dropdown-item"
                                                          href="javascript:void(0);">Day</a></li>
                                                  <li><a class="dropdown-item"
                                                          href="javascript:void(0);">Year</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <h6 class="mb-2 fw-semibold">2D Platformer Game</h6>
                                      <span class="text-muted fs-13"> A side-scrolling platform game where players navigate levels.</span>
                                      <div
                                          class="p-2 bg-light border d-flex align-items-center gap-3 mt-2 rounded flex-wrap">
                                          <span class="avatar avatar-md bg-teal-transparent"><i class="ri-discord-fill fs-20"></i></span>
                                          <div>
                                              <p class="mb-0">Game Development</p>
                                              <span class="text-muted d-block fs-12"><strong
                                                      class="text-default">17/43</strong> tasks
                                                  completed</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="card-footer d-flex justify-content-between align-items-center">
                                      <div class="avatar-list-stacked"> <span
                                              class="avatar avatar-sm avatar-rounded"> <img
                                                  src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img"> </span>
                                          <span class="avatar avatar-sm avatar-rounded"> <img
                                                  src="{{ asset('') }}/assets/images/faces/8.jpg" alt="img"> </span>
                                          <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white"
                                              href="javascript:void(0);"> +2 </a> </div>
                                      <span class="fs-13 text-muted"><i class="ri-calendar-line me-1"></i>17, Aug 2024</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="d-flex align-items-center justify-content-between mb-2">
                                          <span class="badge bg-success-transparent rounded-pill">Machine Learning</span>
                                          <div class="dropdown">
                                              <a class="btn btn-sm btn-icon btn-light" aria-label="anchor"
                                                  href="javascript:void(0);" data-bs-toggle="dropdown">
                                                  <i class="ri-more-2-fill text-muted"></i>
                                              </a>
                                              <ul class="dropdown-menu" role="menu">
                                                  <li><a class="dropdown-item"
                                                          href="javascript:void(0);">Week</a></li>
                                                  <li><a class="dropdown-item"
                                                          href="javascript:void(0);">Day</a></li>
                                                  <li><a class="dropdown-item"
                                                          href="javascript:void(0);">Year</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <h6 class="mb-2 fw-semibold">Recommendation System</h6>
                                      <span class="text-muted fs-13">A machine learning model that classifies images into different categories.</span>
                                      <div
                                          class="p-2 bg-light border d-flex align-items-center gap-3 mt-2 rounded flex-wrap">
                                          <span class="avatar avatar-md bg-success-transparent"><i class="ri-mac-fill fs-20"></i></span>
                                          <div>
                                              <p class="mb-0">Computer Vision</p>
                                              <span class="text-muted d-block fs-12"><strong
                                                      class="text-default">23/32</strong> tasks
                                                  completed</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="card-footer d-flex justify-content-between align-items-center">
                                      <div class="avatar-list-stacked"> <span
                                              class="avatar avatar-sm avatar-rounded"> <img
                                                  src="{{ asset('') }}/assets/images/faces/3.jpg" alt="img"> </span>
                                          <span class="avatar avatar-sm avatar-rounded"> <img
                                                  src="{{ asset('') }}/assets/images/faces/5.jpg" alt="img"> </span>
                                                  <span class="avatar avatar-sm avatar-rounded"> <img
                                                      src="{{ asset('') }}/assets/images/faces/9.jpg" alt="img"> </span>
                                          <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white"
                                              href="javascript:void(0);"> +2 </a> </div>
                                      <span class="fs-13 text-muted"><i class="ri-calendar-line me-1"></i>15, Oct 2024</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="d-flex align-items-center justify-content-between mb-2">
                                          <span class="badge bg-secondary-transparent rounded-pill">Blockchain</span>
                                          <div class="dropdown">
                                              <a class="btn btn-sm btn-icon btn-light" aria-label="anchor"
                                                  href="javascript:void(0);" data-bs-toggle="dropdown">
                                                  <i class="ri-more-2-fill text-muted"></i>
                                              </a>
                                              <ul class="dropdown-menu" role="menu">
                                                  <li><a class="dropdown-item"
                                                          href="javascript:void(0);">Week</a></li>
                                                  <li><a class="dropdown-item"
                                                          href="javascript:void(0);">Day</a></li>
                                                  <li><a class="dropdown-item"
                                                          href="javascript:void(0);">Year</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <h6 class="mb-2 fw-semibold">Cryptocurrency Wallet</h6>
                                      <span class="text-muted fs-13">A secure wallet application for storing and managing cryptocurrencies. </span>
                                      <div
                                          class="p-2 bg-light border d-flex align-items-center gap-3 mt-2 rounded flex-wrap">
                                          <span class="avatar avatar-md bg-primary-transparent"><i class="ri-equalizer-fill fs-20"></i></span>
                                          <div>
                                              <p class="mb-0">Blockchain/Fintech</p>
                                              <span class="text-muted d-block fs-12"><strong
                                                      class="text-default">18/22</strong> tasks
                                                  completed</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="card-footer d-flex justify-content-between align-items-center">
                                      <div class="avatar-list-stacked"> <span
                                              class="avatar avatar-sm avatar-rounded"> <img
                                                  src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img"> </span>
                                          <span class="avatar avatar-sm avatar-rounded"> <img
                                                  src="{{ asset('') }}/assets/images/faces/8.jpg" alt="img"> </span>
                                                  <span class="avatar avatar-sm avatar-rounded"> <img
                                                      src="{{ asset('') }}/assets/images/faces/8.jpg" alt="img"> </span> </div>
                                      <span class="fs-13 text-muted"><i class="ri-calendar-line me-1"></i>13, Jul 2024</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      </div>
                      <div class="tab-pane text-muted border-0 p-0" id="contacts-tab-pane"
                      role="tabpanel">
                      <div class="row row-cols-xxl-5 row-cols-md-2 row-cols-1">
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="d-flex align-items-center justify-content-between mb-2">
                                          <span class="badge bg-info-transparent rounded-pill">Sales</span>
                                          <div class="dropdown">
                                              <a class="btn btn-sm btn-icon btn-light" aria-label="anchor"
                                                  href="javascript:void(0);" data-bs-toggle="dropdown">
                                                  <i class="ri-more-2-fill text-muted"></i>
                                              </a>
                                              <ul class="dropdown-menu" role="menu">
                                                  <li><a class="dropdown-item"
                                                          href="javascript:void(0);">Week</a></li>
                                                  <li><a class="dropdown-item"
                                                          href="javascript:void(0);">Day</a></li>
                                                  <li><a class="dropdown-item"
                                                          href="javascript:void(0);">Year</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <h6 class="mb-2 fw-semibold">Sales Forecasting Model</h6>
                                      <span class="text-muted fs-13">A predictive model to forecast future sales based on historical data.</span>
                                      <div
                                          class="p-2 bg-light border d-flex align-items-center gap-3 mt-2 rounded flex-wrap">
                                          <span class="avatar avatar-md bg-warning-transparent"><i class="ri-bubble-chart-fill fs-20"></i></span>
                                          <div>
                                              <p class="mb-0">Predictive Analytics</p>
                                              <span class="text-muted d-block fs-12"><strong
                                                      class="text-default">12/45</strong> tasks
                                                  completed</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="card-footer d-flex justify-content-between align-items-center">
                                      <div class="avatar-list-stacked"> <span
                                              class="avatar avatar-sm avatar-rounded"> <img
                                                  src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img"> </span>
                                          <span class="avatar avatar-sm avatar-rounded"> <img
                                                  src="{{ asset('') }}/assets/images/faces/8.jpg" alt="img"> </span>
                                          <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white"
                                              href="javascript:void(0);"> +2 </a> </div>
                                      <span class="fs-13 text-muted"><i class="ri-calendar-line me-1"></i>11, Nov 2024</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="d-flex align-items-center justify-content-between mb-2">
                                          <span class="badge bg-secondary-transparent rounded-pill">UI/UX Design</span>
                                          <div class="dropdown">
                                              <a class="btn btn-sm btn-icon btn-light" aria-label="anchor"
                                                  href="javascript:void(0);" data-bs-toggle="dropdown">
                                                  <i class="ri-more-2-fill text-muted"></i>
                                              </a>
                                              <ul class="dropdown-menu" role="menu">
                                                  <li><a class="dropdown-item"
                                                          href="javascript:void(0);">Week</a></li>
                                                  <li><a class="dropdown-item"
                                                          href="javascript:void(0);">Day</a></li>
                                                  <li><a class="dropdown-item"
                                                          href="javascript:void(0);">Year</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <h6 class="mb-2 fw-semibold">Redesign of Checkout Process</h6>
                                      <span class="text-muted fs-13"> A project focused on improving the user experience of an online checkout process. </span>
                                      <div
                                          class="p-2 bg-light border d-flex align-items-center gap-3 mt-2 rounded flex-wrap">
                                          <span class="avatar avatar-md bg-danger-transparent"><i class="ri-aed-electrodes-fill fs-20"></i></span>
                                          <div>
                                              <p class="mb-0">UX Design</p>
                                              <span class="text-muted d-block fs-12"><strong
                                                      class="text-default">15/16</strong> tasks
                                                  completed</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="card-footer d-flex justify-content-between align-items-center">
                                      <div class="avatar-list-stacked"> <span
                                              class="avatar avatar-sm avatar-rounded"> <img
                                                  src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img"> </span>
                                          <span class="avatar avatar-sm avatar-rounded"> <img
                                                  src="{{ asset('') }}/assets/images/faces/8.jpg" alt="img"> </span>
                                                  <span class="avatar avatar-sm avatar-rounded"> <img
                                                      src="{{ asset('') }}/assets/images/faces/5.jpg" alt="img"> </span>
                                                      <span class="avatar avatar-sm avatar-rounded"> <img
                                                          src="{{ asset('') }}/assets/images/faces/1.jpg" alt="img"> </span>
                                          <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white"
                                              href="javascript:void(0);"> +2 </a> </div>
                                      <span class="fs-13 text-muted"><i class="ri-calendar-line me-1"></i>21, Jan 2024</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="d-flex align-items-center justify-content-between mb-2">
                                          <span class="badge bg-primary-transparent rounded-pill">Cloud Computing</span>
                                          <div class="dropdown">
                                              <a class="btn btn-sm btn-icon btn-light" aria-label="anchor"
                                                  href="javascript:void(0);" data-bs-toggle="dropdown">
                                                  <i class="ri-more-2-fill text-muted"></i>
                                              </a>
                                              <ul class="dropdown-menu" role="menu">
                                                  <li><a class="dropdown-item"
                                                          href="javascript:void(0);">Week</a></li>
                                                  <li><a class="dropdown-item"
                                                          href="javascript:void(0);">Day</a></li>
                                                  <li><a class="dropdown-item"
                                                          href="javascript:void(0);">Year</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <h6 class="mb-2 fw-semibold">Cloud-Based File Storage System</h6>
                                      <span class="text-muted fs-13">A system that provides secure cloud storage for files, with features such as file sharing.</span>
                                      <div
                                          class="p-2 bg-light border d-flex align-items-center gap-3 mt-2 rounded flex-wrap">
                                          <span class="avatar avatar-md bg-info-transparent"><i class="ri-cloud-fill fs-20"></i></span>
                                          <div>
                                              <p class="mb-0">Cloud Storage</p>
                                              <span class="text-muted d-block fs-12"><strong
                                                      class="text-default">05/10</strong> tasks
                                                  completed</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="card-footer d-flex justify-content-between align-items-center">
                                      <div class="avatar-list-stacked"> <span
                                              class="avatar avatar-sm avatar-rounded"> <img
                                                  src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img"> </span>
                                          <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white"
                                              href="javascript:void(0);"> +2 </a> </div>
                                      <span class="fs-13 text-muted"><i class="ri-calendar-line me-1"></i>12, Feb 2024</span>
                                  </div>
                              </div>
                          </div>  
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="d-flex align-items-center justify-content-between mb-2">
                                          <span class="badge bg-pink-transparent rounded-pill">Game Development</span>
                                          <div class="dropdown">
                                              <a class="btn btn-sm btn-icon btn-light" aria-label="anchor"
                                                  href="javascript:void(0);" data-bs-toggle="dropdown">
                                                  <i class="ri-more-2-fill text-muted"></i>
                                              </a>
                                              <ul class="dropdown-menu" role="menu">
                                                  <li><a class="dropdown-item"
                                                          href="javascript:void(0);">Week</a></li>
                                                  <li><a class="dropdown-item"
                                                          href="javascript:void(0);">Day</a></li>
                                                  <li><a class="dropdown-item"
                                                          href="javascript:void(0);">Year</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <h6 class="mb-2 fw-semibold">2D Platformer Game</h6>
                                      <span class="text-muted fs-13"> A side-scrolling platform game where players navigate levels.</span>
                                      <div
                                          class="p-2 bg-light border d-flex align-items-center gap-3 mt-2 rounded flex-wrap">
                                          <span class="avatar avatar-md bg-teal-transparent"><i class="ri-discord-fill fs-20"></i></span>
                                          <div>
                                              <p class="mb-0">Game Development</p>
                                              <span class="text-muted d-block fs-12"><strong
                                                      class="text-default">17/43</strong> tasks
                                                  completed</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="card-footer d-flex justify-content-between align-items-center">
                                      <div class="avatar-list-stacked"> <span
                                              class="avatar avatar-sm avatar-rounded"> <img
                                                  src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img"> </span>
                                          <span class="avatar avatar-sm avatar-rounded"> <img
                                                  src="{{ asset('') }}/assets/images/faces/8.jpg" alt="img"> </span>
                                          <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white"
                                              href="javascript:void(0);"> +2 </a> </div>
                                      <span class="fs-13 text-muted"><i class="ri-calendar-line me-1"></i>17, Aug 2024</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <!-- End::row-2 -->
          
      <ul class="pagination justify-content-end">
          <li class="page-item disabled">
              <a class="page-link">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
          <li class="page-item active"><a class="page-link" href="javascript:void(0);">2</a></li>
          <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
          <li class="page-item">
              <a class="page-link" href="javascript:void(0);">Next</a>
          </li>
      </ul>

  </div>
</div>
<!-- End::app-content -->

@endsection