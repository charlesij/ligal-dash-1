@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Start::page-header -->
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Invoice List</h1>
              <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item">
                      <a href="javascript:void(0);">
                          Pages
                      </a>
                  </li>
                  <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Invoice</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Invoice List</li>
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

      <!-- Start::row-1 -->
      <div class="row">
          <div class="col-xl-12">
              <div class="row row-cols-xxl-5 row-cols-xl-3 row-cols-md-2 row-cols-1">
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
                                  <div class="d-flex justify-content-between align-items-center flex-wrap">
                                      <div>
                                          <span class="d-block mb-1 mt-2">Total Amount</span>
                                          <div class="d-flex align-items-center gap-2 mb-2">
                                              <h4 class="fw-medium mb-0">$<span class="count-up" data-count="471">471</span>k </h4> 
                                              <span class="badge bg-primary-transparent">12,345</span>
                                          </div>
                                      </div>
                                      <div>
                                          <span class="fw-semibold mb-1 text-muted">This Year</span>
                                          <span class="d-block text-success fs-13"><i class="ti ti-arrow-up"></i>18.21%</span>
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
                                  <div class="d-flex justify-content-between align-items-center flex-wrap">
                                      <div>
                                          <span class="d-block mb-1 mt-2">Total Paid</span>
                                      <div class="d-flex align-items-center gap-2">
                                          <h4 class="fw-medium mb-0">$<span class="count-up" data-count="471">122</span>k </h4> 
                                          <span class="badge bg-danger-transparent">12,345</span>
                                      </div>
                                      </div>
                                      <div>
                                          <span class="fw-semibold mb-1 text-muted">This Year</span>
                                          <span class="d-block text-danger fs-13"><i class="ti ti-arrow-down"></i>12.61%</span>
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
                                  <div class="d-flex justify-content-between align-items-center flex-wrap">
                                      <div>
                                          <span class="d-block mb-1 mt-2">Pending Invoices</span>
                                      <div class="d-flex align-items-center gap-2">
                                          <h4 class="fw-medium mb-0"><span class="count-up" data-count="471">325</span> </h4> 
                                          <span class="badge bg-success-transparent">12,345</span>
                                      </div>
                                      </div>
                                      <div>
                                          <span class="fw-semibold mb-1 text-muted">This Year</span>
                                          <span class="d-block text-success fs-13"><i class="ti ti-arrow-up"></i>11.81%</span>
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
                                  <div class="d-flex justify-content-between align-items-center flex-wrap">
                                      <div>
                                          <span class="d-block mb-1 mt-2">Overdue Invoices</span>
                                      <div class="d-flex align-items-center gap-2">
                                          <h4 class="fw-medium mb-0"><span class="count-up" data-count="471">236</span> </h4> 
                                          <span class="badge bg-danger-transparent">12,345</span>
                                      </div>
                                      </div>
                                      <div>
                                          <span class="fw-semibold mb-1 text-muted">This Year</span>
                                          <span class="d-block text-danger fs-13"><i class="ti ti-arrow-up"></i>13.65%</span>
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
                                  <div class="d-flex justify-content-between align-items-center flex-wrap">
                                      <div>
                                          <span class="d-block mb-1 mt-2">Paid Invoices</span>
                                      <div class="d-flex align-items-center gap-2">
                                          <h4 class="fw-medium mb-0"><span class="count-up" data-count="471">132</span> </h4> 
                                          <span class="badge bg-success-transparent">12,345</span>
                                      </div>
                                      </div>
                                      <div>
                                          <span class="fw-semibold mb-1 text-muted">This Year</span>
                                          <span class="d-block text-success fs-13"><i class="ti ti-arrow-up"></i>4.21%</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xl-12">
              <div class="card custom-card">
                  <div class="card-header justify-content-between">
                      <div class="card-title">
                          Manage Invoices
                      </div>
                      <div class="d-flex">
                          <a href="invoice-create.html" class="btn btn-sm btn-primary btn-wave waves-light"><i class="ri-add-line fw-medium align-middle me-1"></i> Create Invoice</a>
                          <div class="dropdown ms-2">
                              <button class="btn  btn-secondary-light btn-sm btn-wave waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <i class="ti ti-dots-vertical"></i>
                              </button>
                              <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="javascript:void(0);">All Invoices</a></li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">Paid Invoices</a></li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">Pending Invoices</a></li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">Overdue Invoices</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="card-body p-0">
                      <div class="table-responsive">
                          <table class="table text-nowrap">
                              <thead>
                                  <tr>
                                      <th scope="col">Client</th>
                                      <th scope="col">Invoice ID</th>
                                      <th scope="col">Issued Date</th>
                                      <th scope="col">Amount</th>
                                      <th scope="col">Status</th>
                                      <th scope="col">Due Date</th>
                                      <th scope="col">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr class="invoice-list">
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <div class="me-2 lh-1">
                                                  <span class="avatar avatar-sm avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/faces/11.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <p class="mb-0 fw-medium">Jack Miller</p>
                                                  <p class="mb-0 fs-11 text-muted">jackmiller2416@gmail.com</p>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <a href="javascript:void(0);" class="fw-medium text-primary">
                                              #SPK12032901
                                          </a>
                                      </td>
                                      <td>
                                          25,Nov 2024
                                      </td>
                                      <td>
                                          $212.45
                                      </td>
                                      <td>
                                          <span class="badge bg-success-transparent">Paid</span>
                                      </td>
                                      <td>
                                          25,Dec 2024
                                      </td>
                                      <td>
                                          <button class="btn btn-primary-light btn-icon btn-sm"><i class="ri-printer-line"></i></button>
                                          <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn"><i class="ri-delete-bin-5-line"></i></button>
                                      </td>
                                  </tr>
                                  <tr class="invoice-list">
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <div class="me-2 lh-1">
                                                  <span class="avatar avatar-sm avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/faces/7.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <p class="mb-0 fw-medium">Suzika Stallone</p>
                                                  <p class="mb-0 fs-11 text-muted">suzikastallone3214@gmail.com</p>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <a href="javascript:void(0);" class="fw-medium text-primary">
                                              #SPK12032912
                                          </a>
                                      </td>
                                      <td>
                                          13,Nov 2024
                                      </td>
                                      <td>
                                          $512.99
                                      </td>
                                      <td>
                                          <span class="badge bg-warning-transparent">Pending</span>
                                      </td>
                                      <td>
                                          13,Dec 2024
                                      </td>
                                      <td>
                                          <button class="btn btn-primary-light btn-icon btn-sm"><i class="ri-printer-line"></i></button>
                                          <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn"><i class="ri-delete-bin-5-line"></i></button>
                                      </td>
                                  </tr>
                                  <tr class="invoice-list">
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <div class="me-2 lh-1">
                                                  <span class="avatar avatar-sm avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/faces/15.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <p class="mb-0 fw-medium">Roman Killon</p>
                                                  <p class="mb-0 fs-11 text-muted">romankillon143@gmail.com</p>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <a href="javascript:void(0);" class="fw-medium text-primary">
                                              #SPK12032945
                                          </a>
                                      </td>
                                      <td>
                                          30,Nov 2024
                                      </td>
                                      <td>
                                          $2199.49
                                      </td>
                                      <td>
                                          <span class="badge bg-danger-transparent">Overdue</span>
                                      </td>
                                      <td>
                                          30,Dec 2024
                                      </td>
                                      <td>
                                          <button class="btn btn-primary-light btn-icon btn-sm"><i class="ri-printer-line"></i></button>
                                          <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn"><i class="ri-delete-bin-5-line"></i></button>
                                      </td>
                                  </tr>
                                  <tr class="invoice-list">
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <div class="me-2 lh-1">
                                                  <span class="avatar avatar-sm avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/faces/12.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <p class="mb-0 fw-medium">Charlie Davieson</p>
                                                  <p class="mb-0 fs-11 text-muted">charliedavieson@gmail.com</p>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <a href="javascript:void(0);" class="fw-medium text-primary">
                                              #SPK12032922
                                          </a>
                                      </td>
                                      <td>
                                          18,Nov 2024
                                      </td>
                                      <td>
                                          $1569.99
                                      </td>
                                      <td>
                                          <span class="badge bg-success-transparent">Paid</span>
                                      </td>
                                      <td>
                                          18,Dec 2024
                                      </td>
                                      <td>
                                          <button class="btn btn-primary-light btn-icon btn-sm"><i class="ri-printer-line"></i></button>
                                          <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn"><i class="ri-delete-bin-5-line"></i></button>
                                      </td>
                                  </tr>
                                  <tr class="invoice-list">
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <div class="me-2 lh-1">
                                                  <span class="avatar avatar-sm avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/faces/4.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <p class="mb-0 fw-medium">Selena Deoyl</p>
                                                  <p class="mb-0 fs-11 text-muted">selenadeoyl114@gmail.com</p>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <a href="javascript:void(0);" class="fw-medium text-primary">
                                              #SPK12032932
                                          </a>
                                      </td>
                                      <td>
                                          18,Nov 2024
                                      </td>
                                      <td>
                                          $4,873.99
                                      </td>
                                      <td>
                                          <span class="badge bg-primary-transparent">Due By 1 Day</span>
                                      </td>
                                      <td>
                                          18,Dec 2024
                                      </td>
                                      <td>
                                          <button class="btn btn-primary-light btn-icon btn-sm"><i class="ri-printer-line"></i></button>
                                          <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn"><i class="ri-delete-bin-5-line"></i></button>
                                      </td>
                                  </tr>
                                  <tr class="invoice-list">
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <div class="me-2 lh-1">
                                                  <span class="avatar avatar-sm avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/faces/7.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <p class="mb-0 fw-medium">Kiara Advensh</p>
                                                  <p class="mb-0 fs-11 text-muted">kiaraadvensh87@gmail.com</p>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <a href="javascript:void(0);" class="fw-medium text-primary">
                                              #SPK12032978
                                          </a>
                                      </td>
                                      <td>
                                          02,Nov 2024
                                      </td>
                                      <td>
                                          $1923.99
                                      </td>
                                      <td>
                                          <span class="badge bg-success-transparent">Paid</span>
                                      </td>
                                      <td>
                                          18,Dec 2024
                                      </td>
                                      <td>
                                          <button class="btn btn-primary-light btn-icon btn-sm"><i class="ri-printer-line"></i></button>
                                          <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn"><i class="ri-delete-bin-5-line"></i></button>
                                      </td>
                                  </tr>
                                  <tr class="invoice-list">
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <div class="me-2 lh-1">
                                                  <span class="avatar avatar-sm avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/faces/9.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <p class="mb-0 fw-medium">Joseph Samurai</p>
                                                  <p class="mb-0 fs-11 text-muted">josephsamurai@gmail.com</p>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <a href="javascript:void(0);" class="fw-medium text-primary">
                                              #SPK12032919
                                          </a>
                                      </td>
                                      <td>
                                          15,Nov 2024
                                      </td>
                                      <td>
                                          $1,623.99
                                      </td>
                                      <td>
                                          <span class="badge bg-success-transparent">Paid</span>
                                      </td>
                                      <td>
                                          15,Dec 2024
                                      </td>
                                      <td>
                                          <button class="btn btn-primary-light btn-icon btn-sm"><i class="ri-printer-line"></i></button>
                                          <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn"><i class="ri-delete-bin-5-line"></i></button>
                                      </td>
                                  </tr>
                                  <tr class="invoice-list">
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <div class="me-2 lh-1">
                                                  <span class="avatar avatar-sm avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/faces/13.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <p class="mb-0 fw-medium">Kevin Powell</p>
                                                  <p class="mb-0 fs-11 text-muted">kevinpowell@gmail.com</p>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <a href="javascript:void(0);" class="fw-medium text-primary">
                                              #SPK12032931
                                          </a>
                                      </td>
                                      <td>
                                          21,Nov 2024
                                      </td>
                                      <td>
                                          $3,423.99
                                      </td>
                                      <td>
                                          <span class="badge bg-warning-transparent">Pending</span>
                                      </td>
                                      <td>
                                          21,Dec 2024
                                      </td>
                                      <td>
                                          <button class="btn btn-primary-light btn-icon btn-sm"><i class="ri-printer-line"></i></button>
                                          <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn"><i class="ri-delete-bin-5-line"></i></button>
                                      </td>
                                  </tr>
                                  <tr class="invoice-list">
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <div class="me-2 lh-1">
                                                  <span class="avatar avatar-sm avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/faces/8.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <p class="mb-0 fw-medium">Darla Jung</p>
                                                  <p class="mb-0 fs-11 text-muted">darlajung555@gmail.com</p>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <a href="javascript:void(0);" class="fw-medium text-primary">
                                              #SPK12032958
                                          </a>
                                      </td>
                                      <td>
                                          15,Oct 2024
                                      </td>
                                      <td>
                                          $2,982.99
                                      </td>
                                      <td>
                                          <span class="badge bg-success-transparent">Paid</span>
                                      </td>
                                      <td>
                                          15,Nov 2024
                                      </td>
                                      <td>
                                          <button class="btn btn-primary-light btn-icon btn-sm"><i class="ri-printer-line"></i></button>
                                          <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn"><i class="ri-delete-bin-5-line"></i></button>
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
      <!--End::row-1 -->

  </div>
</div>
<!-- End::app-content -->

@endsection