@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Start::page-header -->
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Companies</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                          <li class="breadcrumb-item"><a href="javascript:void(0);">CRM</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Companies</li>
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
      <!-- End::page-header -->

      <!-- Start::row-1 -->
      <div class="row">
          <div class="col-xl-12">
              <div class="card custom-card">
                  <div class="card-header justify-content-between">
                      <div class="card-title">
                          Companies <span class="badge bg-light text-default rounded ms-1 fs-12 align-middle">14</span>
                      </div>
                      <div class="d-flex flex-wrap gap-2">
                          <button class="btn btn-primary btn-sm btn-wave" data-bs-toggle="modal" data-bs-target="#create-contact"><i class="ri-add-line me-1 fw-medium align-middle"></i>Add Company</button>
                          <button class="btn btn-success-light btn-sm btn-wave">Export As CSV</button>
                          <div class="dropdown">
                              <a href="javascript:void(0);" class="btn btn-light btn-sm btn-wave" data-bs-toggle="dropdown" aria-expanded="false">
                                  Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                              </a>
                              <ul class="dropdown-menu" role="menu">
                                  <li><a class="dropdown-item" href="javascript:void(0);">Newest</a></li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">Date Added</a></li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">A - Z</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="card-body p-0">
                      <div class="table-responsive">
                          <table class="table text-nowrap">
                              <thead>
                                  <tr>
                                      <th scope="col">
                                          <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                                      </th>
                                      <th scope="col">Company Name</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Phone</th>
                                      <th scope="col">Company Size</th>
                                      <th scope="col">Industry</th>
                                      <th scope="col">Key Contact</th>
                                      <th scope="col">Total Deals</th>
                                      <th scope="col">Actions</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr class="crm-contact">
                                      <td>
                                          <input class="form-check-input" type="checkbox" id="checkboxNoLabel1" value="" aria-label="...">
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/company-logos/1.png" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <a  data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                  role="button" aria-controls="offcanvasExample">Diageo plc</a>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted d-inline-block"></i>Diageo2981@gmail.com</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted d-inline-block"></i>1678-28993-223</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center flex-wrap gap-1">
                                              <span class="badge bg-primary-transparent">Corporate</span>
                                          </div>
                                      </td>
                                      <td>
                                          Information Technology
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-rounded avatar-sm">
                                                      <img src="{{ asset('') }}/assets/images/faces/4.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <span class="d-block fw-medium">Charlotte</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          258
                                      </td>
                                      <td>
                                          <div class="btn-list">
                                              <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                              role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                              <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                              <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr class="crm-contact">
                                      <td>
                                          <input class="form-check-input" type="checkbox" id="checkboxNoLabel2" value="" aria-label="...">
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/company-logos/3.png" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <a  data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                  role="button" aria-controls="offcanvasExample">The Kraft Heinz Solutions</a>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted d-inline-block"></i>Kraf289@gmail.com</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted d-inline-block"></i>8122-2342-4453</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center flex-wrap gap-1">
                                              <span class="badge bg-danger-transparent">Small Business</span>
                                          </div>
                                      </td>
                                      <td>
                                          Telecommunications
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-rounded avatar-sm">
                                                      <img src="{{ asset('') }}/assets/images/faces/12.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <span class="d-block fw-medium">Thomas</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          335
                                      </td>
                                      <td>
                                          <div class="btn-list">
                                              <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                              role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                              <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                              <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr class="crm-contact">
                                      <td>
                                          <input class="form-check-input" type="checkbox" id="checkboxNoLabel33" value="" aria-label="...">
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/company-logos/4.png" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <a  data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                  role="button" aria-controls="offcanvasExample">Xiaomi Corporation</a>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted d-inline-block"></i>Xiaomi789@gmail.com</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted d-inline-block"></i>1902-2001-3023</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center flex-wrap gap-1">
                                              <span class="badge bg-success-transparent">Micro Business</span>
                                          </div>
                                      </td>
                                      <td>
                                          Logistics
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-rounded avatar-sm">
                                                      <img src="{{ asset('') }}/assets/images/faces/14.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <span class="d-block fw-medium">Matthew</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          685
                                      </td>
                                      <td>
                                          <div class="btn-list">
                                              <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                              role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                              <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                              <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr class="crm-contact">
                                      <td>
                                          <input class="form-check-input" type="checkbox" id="checkboxNoLabel3" value="" aria-label="...">
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/company-logos/5.png" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <a  data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                  role="button" aria-controls="offcanvasExample">Huawei Technologies Co., Ltd.</a>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted d-inline-block"></i>Huawei290@gmail.com</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted d-inline-block"></i>1603-2032-1123</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center flex-wrap gap-1">
                                              <span class="badge bg-light text-default">Startup</span>
                                          </div>
                                      </td>
                                      <td>
                                          Information Technology
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-rounded avatar-sm">
                                                      <img src="{{ asset('') }}/assets/images/faces/6.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <span class="d-block fw-medium">Isabella</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          425
                                      </td>
                                      <td>
                                          <div class="btn-list">
                                              <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                              role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                              <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                              <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr class="crm-contact">
                                      <td>
                                          <input class="form-check-input" type="checkbox" id="checkboxNoLabel4" value="" aria-label="...">
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/company-logos/6.png" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <a  data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                  role="button" aria-controls="offcanvasExample">Electronic Arts Inc.</a>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted d-inline-block"></i>Electronicarts1993@gmail.com</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted d-inline-block"></i>1129-2302-1092</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center flex-wrap gap-1">
                                              <span class="badge bg-pink-transparent">Large Enterprise</span>
                                          </div>
                                      </td>
                                      <td>
                                          Professional Services
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-rounded avatar-sm">
                                                      <img src="{{ asset('') }}/assets/images/faces/8.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <span class="d-block fw-medium">Sophia</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          516
                                      </td>
                                      <td>
                                          <div class="btn-list">
                                              <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                              role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                              <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                              <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr class="crm-contact">
                                      <td>
                                          <input class="form-check-input" type="checkbox" id="checkboxNoLabel5" value="" aria-label="...">
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/company-logos/7.png" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <a  data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                  role="button" aria-controls="offcanvasExample">Novartis International AG</a>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted d-inline-block"></i>Novartisp345@gmail.com</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted d-inline-block"></i>9923-2344-2003</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center flex-wrap gap-1">
                                              <span class="badge bg-danger-transparent">Small Business</span>
                                          </div>
                                      </td>
                                      <td>
                                          Education
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-rounded avatar-sm">
                                                      <img src="{{ asset('') }}/assets/images/faces/9.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <span class="d-block fw-medium">Jack Miller</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          127
                                      </td>
                                      <td>
                                          <div class="btn-list">
                                              <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                              role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                              <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                              <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr class="crm-contact">
                                      <td>
                                          <input class="form-check-input" type="checkbox" id="checkboxNoLabel6" value="" aria-label="...">
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/company-logos/8.png" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <a  data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                  role="button" aria-controls="offcanvasExample">Industria de Diseño.ltd</a>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted d-inline-block"></i>Industria78@gmail.com</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted d-inline-block"></i>7891-2093-1994</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center flex-wrap gap-1">
                                              <span class="badge bg-primary-transparent">Corporate</span>
                                          </div>
                                      </td>
                                      <td>
                                          Telecommunications
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-rounded avatar-sm">
                                                      <img src="{{ asset('') }}/assets/images/faces/15.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <span class="d-block fw-medium">Michael</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          368
                                      </td>
                                      <td>
                                          <div class="btn-list">
                                              <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                              role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                              <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                              <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr class="crm-contact">
                                      <td>
                                          <input class="form-check-input" type="checkbox" id="checkboxNoLabel7" value="" aria-label="...">
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/company-logos/9.png" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <a  data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                  role="button" aria-controls="offcanvasExample">AstraZeneca PLC</a>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted d-inline-block"></i>AstraZenec678@gmail.com</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted d-inline-block"></i>1899-2993-0923</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center flex-wrap gap-1">
                                              <span class="badge bg-warning-transparent">Medium Size</span>
                                          </div>
                                      </td>
                                      <td>
                                          Manufacturing
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-rounded avatar-sm">
                                                      <img src="{{ asset('') }}/assets/images/faces/1.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <span class="d-block fw-medium">Olivia</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          563
                                      </td>
                                      <td>
                                          <div class="btn-list">
                                              <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                              role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                              <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                              <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr class="crm-contact">
                                      <td>
                                          <input class="form-check-input" type="checkbox" id="checkboxNoLabel8" value="" aria-label="...">
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/company-logos/10.png" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <a  data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                  role="button" aria-controls="offcanvasExample">Novartis International AG</a>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted d-inline-block"></i>Novartis289@gmail.com</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted d-inline-block"></i>1768-2332-4934</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center flex-wrap gap-1">
                                              <span class="badge bg-success-transparent">Micro Business</span>
                                          </div>
                                      </td>
                                      <td>
                                          Healthcare
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-rounded avatar-sm">
                                                      <img src="{{ asset('') }}/assets/images/faces/3.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <span class="d-block fw-medium">Emily</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          185
                                      </td>
                                      <td>
                                          <div class="btn-list">
                                              <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                              role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                              <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                              <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr class="crm-contact">
                                      <td>
                                          <input class="form-check-input" type="checkbox" id="checkboxNoLabel9" value="" aria-label="...">
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/company-logos/2.png" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <a  data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                  role="button" aria-controls="offcanvasExample">Union Pacific Corporation</a>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted d-inline-block"></i>Unionpacific186@gmail.com</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted d-inline-block"></i>4788-7822-4786</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center flex-wrap gap-1">
                                              <span class="badge bg-light text-default">Startup</span>
                                          </div>
                                      </td>
                                      <td>
                                          Information Technology
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-rounded avatar-sm">
                                                      <img src="{{ asset('') }}/assets/images/faces/9.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <span class="d-block fw-medium">James</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          240
                                      </td>
                                      <td>
                                          <div class="btn-list">
                                              <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                              role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                              <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                              <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
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
                              Showing 10 Entries <i class="bi bi-arrow-right ms-2 fw-medium"></i>
                          </div>
                          <div class="ms-auto">
                              <nav aria-label="Page navigation" class="pagination-style-5">
                                  <ul class="pagination mb-0">
                                      <li class="page-item disabled">
                                          <a class="page-link" href="javascript:void(0);">
                                              Prev
                                          </a>
                                      </li>
                                      <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                      <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                      <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
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
      <!--End::row-1 -->

      <!-- Start:: Company Details Offcanvas -->
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample"
      aria-labelledby="offcanvasExample">
          <div class="offcanvas-body p-0">
              <div class="d-sm-flex align-items-top p-4 border-bottom border-block-end-dashed main-profile-cover">
                  <div>
                      <span class="avatar avatar-xxl avatar-rounded me-3 bg-light p-2">
                          <img src="{{ asset('') }}/assets/images/company-logos/1.png" alt="">
                      </span>
                  </div>
                  <div class="flex-fill main-profile-info">
                      <div class="d-flex align-items-center justify-content-between">
                          <h6 class="fw-medium mb-1">Wcsrm Software</h6>
                          <button type="button" class="btn-close invert-1" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                      </div>
                      <p class="mb-1 text-muted op-7">Telecommunications</p>
                      <p class="fs-12 mb-4 op-5">  
                          <span class="me-3"><i class="ri-building-line me-1 align-middle"></i>Georgia</span> 
                          <span><i class="ri-map-pin-line me-1 align-middle"></i>Washington D.C</span> 
                      </p>
                      <div class="d-flex mb-0">
                          <div class="me-4">
                              <p class="fw-medium fs-20 text-shadow mb-0">113</p>
                              <p class="mb-0 fs-11 op-5">Deals</p>
                          </div>
                          <div class="me-4">
                              <p class="fw-medium fs-20 text-shadow mb-0">$12.2k</p>
                              <p class="mb-0 fs-11 op-5">Contributions</p>
                          </div>
                          <div class="me-4">
                              <p class="fw-medium fs-20 text-shadow mb-0">$10.67k</p>
                              <p class="mb-0 fs-11 op-5">Comitted</p>
                          </div>
                      </div>
                  </div>
              </div>  
              <div class="p-4 border-bottom border-block-end-dashed">
                  <div class="mb-0">
                      <p class="fs-15 mb-2 fw-medium">Professional Bio :</p>
                      <p class="text-muted op-8 mb-0">
                          <b class="text-default">Wcsrm</b> Technologies is a leading technology company specializing in innovative software solutions for businesses worldwide. With a strong focus on cutting-edge technologies and a team of skilled professionals.
                      </p>
                  </div>   
              </div>  
              <div class="p-4 border-bottom border-block-end-dashed">
                  <p class="fs-14 mb-2 me-4 fw-medium">Contact Information :</p>
                  <div class="">
                      <div class="d-flex align-items-center mb-2">
                          <div class="me-2">
                              <span class="avatar avatar-sm avatar-rounded bg-light text-muted">
                                  <i class="ri-mail-line align-middle fs-14"></i>
                              </span>
                          </div>
                          <div>
                              wcsrm2981@gmail.com
                          </div>
                      </div>
                      <div class="d-flex align-items-center mb-2">
                          <div class="me-2">
                              <span class="avatar avatar-sm avatar-rounded bg-light text-muted">
                                  <i class="ri-phone-line align-middle fs-14"></i>
                              </span>
                          </div>
                          <div>
                              1678-28993-223
                          </div>
                      </div>
                      <div class="d-flex align-items-center mb-0">
                          <div class="me-2">
                              <span class="avatar avatar-sm avatar-rounded bg-light text-muted">
                                  <i class="ri-map-pin-line align-middle fs-14"></i>
                              </span>
                          </div>
                          <div>
                              MIG-1-11, Monroe Street, Georgetown, Washington D.C, USA,20071
                          </div>
                      </div>
                  </div>
              </div>
              <div class="p-4 border-bottom border-block-end-dashed d-flex align-items-center flex-wrap gap-4">
                  <p class="fs-14 mb-0 fw-medium">Social Networks :</p>
                  <div class="btn-list mb-0">
                      <button class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light mb-0">
                          <i class="ri-facebook-line fw-medium"></i>
                      </button>
                      <button class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light mb-0">
                          <i class="ri-twitter-x-line fw-medium"></i>
                      </button>
                      <button class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light mb-0">
                          <i class="ri-instagram-line fw-medium"></i>
                      </button>
                      <button class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light mb-0">
                          <i class="ri-github-line fw-medium"></i>
                      </button>
                      <button class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light mb-0">
                          <i class="ri-youtube-line fw-medium"></i>
                      </button>
                  </div>
              </div>
              <div class="p-4 border-bottom border-block-end-dashed d-flex align-items-center gap-3">
                  <div class="fs-14 fw-medium">Company Size:</div>
                  <div>
                      <span class="badge bg-primary-transparent m-1">Corporate</span> - 1001+ Employees
                  </div>
              </div>
              <div class="p-4 d-flex align-items-center gap-3">
                  <div class="fs-14 fw-medium">
                      Key Contact :
                  </div>
                  <div class="d-flex align-items-center gap-2">
                      <div class="lh-1">
                          <span class="avatar avatar-rounded avatar-sm">
                              <img src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img">
                          </span>
                      </div>    
                      <div class="fw-medium">Lisa Convay</div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: Company Details Offcanvas -->

      <!-- Start:: Add Company -->
      <div class="modal fade" id="create-contact" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                  <div class="modal-header">
                      <h6 class="modal-title">Add Company</h6>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"
                          aria-label="Close"></button>
                  </div>
                  <div class="modal-body px-4">
                      <div class="row gy-3">
                          <div class="col-xl-12">
                              <div class="mb-0 text-center">
                                  <span class="avatar avatar-xxl avatar-rounded p-2 bg-light">
                                      <img src="{{ asset('') }}/assets/images/company-logos/11.png" alt="" id="profile-img">
                                      <span class="badge rounded-pill bg-primary avatar-badge">
                                          <input type="file" name="photo" class="position-absolute w-100 h-100 op-0" id="profile-change">
                                          <i class="fe fe-camera"></i>
                                      </span>
                                  </span>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <label for="company-name" class="form-label">Company Name</label>
                              <input type="text" class="form-control" id="company-name" placeholder="Contact Name">
                          </div>
                          <div class="col-xl-6">
                              <label for="company-lead-score" class="form-label">Total Deals</label>
                              <input type="number" class="form-control" id="company-lead-score" placeholder="Total Deals">
                          </div>
                          <div class="col-xl-12">
                              <label for="company-mail" class="form-label">Email</label>
                              <input type="email" class="form-control" id="company-mail" placeholder="Enter Email">
                          </div>
                          <div class="col-xl-12">
                              <label for="company-phone" class="form-label">Phone No</label>
                              <input type="tel" class="form-control" id="company-phone" placeholder="Enter Phone Number">
                          </div>
                          <div class="col-xl-12">
                              <label for="key-contact" class="form-label">Key Contact</label>
                              <input type="text" class="form-control" id="key-contact" placeholder="Contact Name">
                          </div>
                          <div class="col-xl-12">
                              <label class="form-label">Industry</label>
                              <select class="form-control" data-trigger id="choices-single-default1"  name="choices-multiple-remove-button2">
                                  <option value="">Select Industry</option>
                                  <option value="Choice 1">Information Technology</option>
                                  <option value="Choice 2">Telecommunications</option>
                                  <option value="Choice 3">Logistics</option>
                                  <option value="Choice 4">Professional Services</option>
                                  <option value="Choice 5">Education</option>
                                  <option value="Choice 6">Education</option>
                                  <option value="Choice 7">Manufacturing</option>
                                  <option value="Choice 8">Healthcare</option>
                              </select>
                          </div>
                          <div class="col-xl-12">
                              <label class="form-label">Company Size</label>
                              <select class="form-control" data-trigger id="choices-single-default2"  name="choices-multiple-remove-button3">
                                  <option value="">Company Size</option>
                                  <option value="Choice 1">Corporate</option>
                                  <option value="Choice 2">Small Business</option>
                                  <option value="Choice 3">Micro Business</option>
                                  <option value="Choice 4">Startup</option>
                                  <option value="Choice 5">Large Enterprise</option>
                                  <option value="Choice 6">Medium Size</option>
                              </select>
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-light"
                          data-bs-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary">Create Contact</button>
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: Add Company -->

  </div>
</div>
<!-- End::app-content -->

@endsection