@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Start::page-header -->
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Contacts</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                          <li class="breadcrumb-item"><a href="javascript:void(0);">CRM</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Contacts</li>
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
                  <div class="card-header d-flex align-items-center justify-content-between flex-wrap gap-3">
                      <div class="card-title">
                          Contacts<span class="badge bg-light text-default rounded ms-1 fs-12 align-middle">28</span>
                      </div>
                      <div class="d-flex flex-wrap gap-2">
                          <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#create-contact"><i class="ri-add-line me-1 fw-medium align-middle"></i>Create Contact</button>
                          <button class="btn btn-success-light btn-sm">Export As CSV</button>
                          <div class="dropdown">
                              <a href="javascript:void(0);" class="btn btn-light btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
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
                                      <th scope="col">Contact Name</th>
                                      <th scope="col">Lead Score</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Company</th>
                                      <th scope="col">Phone</th>
                                      <th scope="col">Lead Source</th>
                                      <th scope="col">Tags</th>
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
                                                  <span class="avatar avatar-rounded avatar-sm">
                                                      <img src="{{ asset('') }}/assets/images/faces/4.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                  role="button" aria-controls="offcanvasExample"><span class="d-block fw-medium">JaneDoe</span></a>
                                                  <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted"><i class="ri-account-circle-line me-1 fs-13 align-middle"></i>Jul,24 2024 - 4:45PM</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          258
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>JaneDoe2981@gmail.com</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/company-logos/1.png" alt="">
                                                  </span>
                                              </div>
                                              <div>Wcsrm Software</div>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>1678-28993-223</span>
                                          </div>
                                      </td>
                                      <td>
                                          Social Media
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center flex-wrap gap-1">
                                              <span class="badge bg-primary-transparent">New Lead</span>
                                              <span class="badge bg-primary-transparent">Prospect</span>
                                          </div>
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
                                                  <span class="avatar avatar-rounded avatar-sm">
                                                      <img src="{{ asset('') }}/assets/images/faces/12.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                  role="button" aria-controls="offcanvasExample"><span class="d-block fw-medium">SarahDavis</span></a>
                                                  <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted"><i class="ri-account-circle-line me-1 fs-13 align-middle"></i>Jul,15 2024 - 11:45AM</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          335
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>Sarah289@gmail.com</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/company-logos/3.png" alt="">
                                                  </span>
                                              </div>
                                              <div>Spice Infotech</div>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>8122-2342-4453</span>
                                          </div>
                                      </td>
                                      <td>
                                          Direct mail
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center flex-wrap gap-1">
                                              <span class="badge bg-primary-transparent">Customer</span>
                                              <span class="badge bg-danger-transparent">Hot Lead</span>
                                          </div>
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
                                                  <span class="avatar avatar-rounded avatar-sm">
                                                      <img src="{{ asset('') }}/assets/images/faces/14.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                  role="button" aria-controls="offcanvasExample"><span class="d-block fw-medium">LauraWilson</span></a>
                                                  <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted"><i class="ri-account-circle-line me-1 fs-13 align-middle"></i>Aug,10 2024 - 3:25PM</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          685
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>Laurawilson9@gmail.com</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/company-logos/4.png" alt="">
                                                  </span>
                                              </div>
                                              <div>Logitech ecostics</div>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>1902-2001-3023</span>
                                          </div>
                                      </td>
                                      <td>
                                          Blog Articles
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center flex-wrap gap-1">
                                              <span class="badge bg-success-transparent">Partner</span>
                                          </div>
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
                                                  <span class="avatar avatar-rounded avatar-sm">
                                                      <img src="{{ asset('') }}/assets/images/faces/6.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                  role="button" aria-controls="offcanvasExample"><span class="d-block fw-medium">ChrisTaylor</span></a>
                                                  <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted"><i class="ri-account-circle-line me-1 fs-13 align-middle"></i>Aug,18 2024 - 10:10AM</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          425
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>Chris290@gmail.com</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/company-logos/5.png" alt="">
                                                  </span>
                                              </div>
                                              <div>Initech Info</div>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>1603-2032-1123</span>
                                          </div>
                                      </td>
                                      <td>
                                          Affiliates
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center flex-wrap gap-1">
                                              <span class="badge bg-light text-default">LostCustomer</span>
                                              <span class="badge bg-secondary-transparent">Influencer</span>
                                          </div>
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
                                                  <span class="avatar avatar-rounded avatar-sm">
                                                      <img src="{{ asset('') }}/assets/images/faces/8.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                  role="button" aria-controls="offcanvasExample"><span class="d-block fw-medium">JamesWhite</span></a>
                                                  <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted"><i class="ri-account-circle-line me-1 fs-13 align-middle"></i>Jul,19 2024 - 12:41PM</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          516
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>James1993@gmail.com</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/company-logos/6.png" alt="">
                                                  </span>
                                              </div>
                                              <div>Massive Dynamic</div>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>1129-2302-1092</span>
                                          </div>
                                      </td>
                                      <td>
                                          Organic search 
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center flex-wrap gap-1">
                                              <span class="badge bg-pink-transparent">Subscriber</span>
                                              <span class="badge bg-success-transparent">Partner</span>
                                          </div>
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
                                                  <span class="avatar avatar-rounded avatar-sm">
                                                      <img src="{{ asset('') }}/assets/images/faces/9.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                  role="button" aria-controls="offcanvasExample"><span class="d-block fw-medium">LiamWalker</span></a>
                                                  <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted"><i class="ri-account-circle-line me-1 fs-13 align-middle"></i>Aug,14 2024 - 5:18PM</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          127
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>LiamWalker345@gmail.com</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/company-logos/7.png" alt="">
                                                  </span>
                                              </div>
                                              <div>Globex Corporation</div>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>9923-2344-2003</span>
                                          </div>
                                      </td>
                                      <td>
                                          Social media 
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center flex-wrap gap-1">
                                              <span class="badge bg-danger-transparent">Hot Lead</span>
                                              <span class="badge bg-info-transparent">Referral</span>
                                          </div>
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
                                                  <span class="avatar avatar-rounded avatar-sm">
                                                      <img src="{{ asset('') }}/assets/images/faces/15.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                  role="button" aria-controls="offcanvasExample"><span class="d-block fw-medium">EthanMartin</span></a>
                                                  <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted"><i class="ri-account-circle-line me-1 fs-13 align-middle"></i>Jun,12 2024 - 11:38AM</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          368
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>EthanMartin78@gmail.com</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/company-logos/8.png" alt="">
                                                  </span>
                                              </div>
                                              <div>Acme Corporation</div>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>7891-2093-1994</span>
                                          </div>
                                      </td>
                                      <td>
                                          Blog Articles
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center flex-wrap gap-1">
                                              <span class="badge bg-warning-transparent">Trial User</span>
                                              <span class="badge bg-purple-transparent">Cold Lead</span>
                                          </div>
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
                                                  <span class="avatar avatar-rounded avatar-sm">
                                                      <img src="{{ asset('') }}/assets/images/faces/1.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                  role="button" aria-controls="offcanvasExample"><span class="d-block fw-medium">MiaMoore</span></a>
                                                  <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted"><i class="ri-account-circle-line me-1 fs-13 align-middle"></i>May,19 2024 - 1:57PM</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          563
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>MiaMoore678@gmail.com</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/company-logos/9.png" alt="">
                                                  </span>
                                              </div>
                                              <div>Soylent Corp</div>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>1899-2993-0923</span>
                                          </div>
                                      </td>
                                      <td>
                                          Organic search
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center flex-wrap gap-1">
                                              <span class="badge bg-success-transparent">Influencer</span>
                                              <span class="badge bg-info-transparent">Partner</span>
                                          </div>
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
                                                  <span class="avatar avatar-rounded avatar-sm">
                                                      <img src="{{ asset('') }}/assets/images/faces/3.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                  role="button" aria-controls="offcanvasExample"><span class="d-block fw-medium">Isabella</span></a>
                                                  <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted"><i class="ri-account-circle-line me-1 fs-13 align-middle"></i>Jul,28 2024 - 9:31AM</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          185
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>Isabella289@gmail.com</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/company-logos/10.png" alt="">
                                                  </span>
                                              </div>
                                              <div>Umbrella Corporation</div>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>1768-2332-4934</span>
                                          </div>
                                      </td>
                                      <td>
                                          Affiliates
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center flex-wrap gap-1">
                                              <span class="badge bg-primary-transparent">New Lead</span>
                                              <span class="badge bg-light text-default">Lost Customer</span>
                                          </div>
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
                                                  <span class="avatar avatar-rounded avatar-sm">
                                                      <img src="{{ asset('') }}/assets/images/faces/9.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                  role="button" aria-controls="offcanvasExample"><span class="d-block fw-medium">SarahDavis</span></a>
                                                  <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted"><i class="ri-account-circle-line me-1 fs-13 align-middle"></i>Jul,28 2024 - 9:31AM</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          240
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>SarahDavis186@gmail.com</span>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/company-logos/2.png" alt="">
                                                  </span>
                                              </div>
                                              <div>Hooli Technologies</div>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>4788-7822-4786</span>
                                          </div>
                                      </td>
                                      <td>
                                          Direct mail
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center flex-wrap gap-1">
                                              <span class="badge bg-primary-transparent">New Lead</span>
                                              <span class="badge bg-pink-transparent">Subscriber</span>
                                          </div>
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

      <!-- Start:: Contact Details Offcanvas -->
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample"
      aria-labelledby="offcanvasExample">
          <div class="offcanvas-body p-0">
              <div class="d-sm-flex align-items-top p-4 border-bottom border-block-end-dashed main-profile-cover">
                  <div>
                      <span class="avatar avatar-xxl avatar-rounded online me-3">
                          <img src="{{ asset('') }}/assets/images/faces/4.jpg" alt="">
                      </span>
                  </div>
                  <div class="flex-fill main-profile-info">
                      <div class="d-flex align-items-center justify-content-between">
                          <h6 class="fw-medium mb-1">Lisa Convay</h6>
                          <button type="button" class="btn-close crm-contact-close-btn p-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                      </div>
                      <p class="mb-1 text-muted op-7">Chief Executive Officer (C.E.O)</p>
                      <p class="fs-12 mb-4 op-5">  
                          <span class="me-3"><i class="ri-building-line me-1 align-middle"></i>Georgia</span> 
                          <span><i class="ri-map-pin-line me-1 align-middle"></i>Washington D.C</span> 
                      </p>
                      <div class="d-flex mb-0">
                          <div class="me-4">
                              <p class="fw-bold fs-20 text-shadow mb-0">113</p>
                              <p class="mb-0 fs-11 op-5">Deals</p>
                          </div>
                          <div class="me-4">
                              <p class="fw-bold fs-20 text-shadow mb-0">$12.2k</p>
                              <p class="mb-0 fs-11 op-5">Contributions</p>
                          </div>
                          <div class="me-4">
                              <p class="fw-bold fs-20 text-shadow mb-0">$10.67k</p>
                              <p class="mb-0 fs-11 op-5">Comitted</p>
                          </div>
                      </div>
                  </div>
              </div>  
              <div class="p-4 border-bottom border-block-end-dashed">
                  <div class="mb-0">
                      <p class="fs-15 mb-2 fw-medium">Professional Bio :</p>
                      <p class="text-muted op-8 mb-0">
                          I am <b class="text-default">Lisa Convay,</b> here by conclude that,i am the founder and managing director of the prestigeous company name laugh at all and acts as the cheif executieve officer of the company.
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
                              sonyataylor2531@gmail.com
                          </div>
                      </div>
                      <div class="d-flex align-items-center mb-2">
                          <div class="me-2">
                              <span class="avatar avatar-sm avatar-rounded bg-light text-muted">
                                  <i class="ri-phone-line align-middle fs-14"></i>
                              </span>
                          </div>
                          <div>
                              +(555) 555-1234
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
              <div class="p-4 border-bottom border-block-end-dashed">
                  <p class="fs-14 mb-2 me-4 fw-medium">Tags :</p>
                  <div>
                      <span class="badge bg-light text-muted m-1">New Lead</span>
                      <span class="badge bg-light text-muted m-1">Others</span>
                  </div>
              </div>
              <div class="p-4">
                  <p class="fs-14 mb-2 fw-medium">Relationship Manager :
                      <a class="fs-14 text-primary mb-0 float-end" href="javascript:void(0);"><i class="ri-add-line me-1 align-middle"></i>Add Manager</a>
                  </p>
                  <div class="avatar-list-stacked">
                      <span class="avatar avatar-rounded">
                          <img src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img">
                      </span>
                      <span class="avatar avatar-rounded">
                          <img src="{{ asset('') }}/assets/images/faces/8.jpg" alt="img">
                      </span>
                      <span class="avatar avatar-rounded">
                          <img src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img">
                      </span>
                      <span class="avatar avatar-rounded">
                          <img src="{{ asset('') }}/assets/images/faces/10.jpg" alt="img">
                      </span>
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: Contact Details Offcanvas -->

      <!-- Start:: Create Contact -->
      <div class="modal fade" id="create-contact" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                  <div class="modal-header">
                      <h6 class="modal-title">Create Contact</h6>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"
                          aria-label="Close"></button>
                  </div>
                  <div class="modal-body px-4">
                      <div class="row gy-3">
                          <div class="col-xl-12">
                              <div class="mb-0 text-center">
                                  <span class="avatar avatar-xxl avatar-rounded">
                                      <img src="{{ asset('') }}/assets/images/faces/9.jpg" alt="" id="profile-img">
                                      <span class="badge rounded-pill bg-primary avatar-badge">
                                          <input type="file" name="photo" class="position-absolute w-100 h-100 op-0" id="profile-change">
                                          <i class="fe fe-camera"></i>
                                      </span>
                                  </span>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <label for="deal-title" class="form-label">Deal Title</label>
                              <input type="text" class="form-control" id="deal-title" placeholder="Deal Title">
                          </div>
                          <div class="col-xl-6">
                              <label for="contact-lead-score" class="form-label">Lead Score</label>
                              <input type="number" class="form-control" id="contact-lead-score" placeholder="Lead Score">
                          </div>
                          <div class="col-xl-12">
                              <label for="contact-mail" class="form-label">Email</label>
                              <input type="email" class="form-control" id="contact-mail" placeholder="Enter Email">
                          </div>
                          <div class="col-xl-12">
                              <label for="contact-phone" class="form-label">Phone No</label>
                              <input type="tel" class="form-control" id="contact-phone" placeholder="Enter Phone Number">
                          </div>
                          <div class="col-xl-12">
                              <label for="company-name" class="form-label">Company Name</label>
                              <input type="text" class="form-control" id="company-name" placeholder="Company Name">
                          </div>
                          <div class="col-xl-12">
                              <label class="form-label">Lead Source</label>
                              <select class="form-control" name="choices-multiple-remove-button1" id="choices-multiple-remove-button1">
                                  <option value="Choice 1">Social Media</option>
                                  <option value="Choice 2">Direct mail</option>
                                  <option value="Choice 3">Blog Articles</option>
                                  <option value="Choice 4">Affiliates</option>
                                  <option value="Choice 5">Organic search</option>
                              </select>
                          </div>
                          <div class="col-xl-6">
                              <label class="form-label">Last Contacted</label>
                              <div class="form-group">
                                  <div class="input-group">
                                      <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                      <input type="text" class="form-control" id="targetDate" placeholder="Choose date and time">
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <label class="form-label">Tags</label>
                              <select class="form-control" name="choices-multiple-remove-button2" id="choices-multiple-remove-button2" multiple>
                                  <option value="">Select Tag</option>
                                  <option value="Choice 1">New Lead</option>
                                  <option value="Choice 2">Prospect</option>
                                  <option value="Choice 3">Customer</option>
                                  <option value="Choice 4">Hot Lead</option>
                                  <option value="Choice 5">Partner</option>
                                  <option value="Choice 6">LostCustomer</option>
                                  <option value="Choice 7">Influencer</option>
                                  <option value="Choice 8">Subscriber</option>
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
      <!-- End:: Create Contact -->

  </div>
</div>
<!-- End::app-content -->

@endsection