@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Start::page-header -->
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Deals</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                          <li class="breadcrumb-item"><a href="javascript:void(0);">CRM</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Deals</li>
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
                  <div class="card-body">
                      <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                          <div class="d-flex align-items-center">
                              <span class="fw-medium fs-16 me-1">Deals</span><span class="badge bg-light text-default align-middle">16</span>
                          </div>
                          <div class="d-flex flex-wrap gap-2">
                              <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#create-contact"><i class="ri-add-line me-1 fw-medium align-middle"></i>New Deal</button>
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
                  </div>
              </div>
          </div>
      </div>
      <!--End::row-1 -->

      <!-- Start::row-2 -->
      <div class="row">
          <div class="col-xxl-2 col-md-4">
              <div class="card custom-card lead-discovered">
                  <div class="card-body p-2">
                      <div class="d-flex align-items-top flex-wrap justify-content-between p-3 rounded main-card">
                          <div>
                              <div class="fw-medium fs-15 text-default"><i class="ri-circle-fill p-1 lh-1 fs-7 rounded-2 bg-primary-transparent text-primary me-2 align-middle"></i>Discovered</div>
                          </div>
                          <div class="">
                              <span class="text-primary fw-semibold fs-14 ms-4">$25,238</span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-2 col-md-4">
              <div class="card custom-card lead-qualified">
                  <div class="card-body p-2">
                      <div class="d-flex align-items-top flex-wrap justify-content-between p-3 rounded main-card">
                          <div>
                              <div class="fw-medium fs-15"><i class="ri-circle-fill p-1 lh-1 fs-7 rounded-2 bg-secondary-transparent text-secondary me-2 align-middle"></i>Qualified</div>
                          </div>
                          <div class="">
                              <span class="text-warning fw-semibold fs-14 ms-4">$32,453</span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-2 col-md-4">
              <div class="card custom-card contact-initiated">
                  <div class="card-body p-2">
                      <div class="d-flex align-items-top flex-wrap justify-content-between p-3 rounded main-card">
                          <div>
                              <div class="fw-medium fs-15"><i class="ri-circle-fill p-1 lh-1 fs-7 rounded-2 bg-success-transparent text-success me-2 align-middle"></i>Initiated</div>
                          </div>
                          <div  class="">
                              <span class="text-success fw-semibold fs-14 ms-4">$13,756</span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-2 col-md-4">
              <div class="card custom-card need-identified">
                  <div class="card-body p-2">
                      <div class="d-flex align-items-top flex-wrap justify-content-between p-3 rounded main-card">
                          <div>
                              <div class="fw-medium fs-15"><i class="ri-circle-fill p-1 lh-1 fs-7 rounded-2 bg-info-transparent text-info me-2 align-middle"></i>Identified</div>
                          </div>
                          <div class="">
                              <span class="text-info fw-semibold fs-14 ms-4">$47,093</span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-2 col-md-4">
              <div class="card custom-card negotiation">
                  <div class="card-body p-2">
                      <div class="d-flex align-items-top flex-wrap justify-content-between p-3 rounded main-card">
                          <div>
                              <div class="fw-medium fs-15"><i class="ri-circle-fill p-1 lh-1 fs-7 rounded-2 bg-danger-transparent text-danger me-2 align-middle"></i>Negotiation</div>
                          </div>
                          <div class="">
                              <span class="text-danger fw-semibold fs-14 ms-4">$26,146</span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-2 col-md-4">
              <div class="card custom-card deal-finalized">
                  <div class="card-body p-2">
                      <div class="d-flex align-items-top flex-wrap justify-content-between p-3 rounded main-card">
                          <div>
                              <div class="fw-medium fs-15"><i class="ri-circle-fill p-1 lh-1 fs-7 rounded-2 bg-warning-transparent text-warning me-2 align-middle"></i>Finalized</div>
                          </div>
                          <div class="">
                              <span class="text-warning fw-semibold fs-14 ms-4">$1,74,679</span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End::row-2 -->

      <!-- Start::row-3 -->
      <div class="row">
          <div class="col-xxl-2" id="leads-discovered">
              <div class="card custom-card">
                  <div class="card-body">
                      <div>
                          <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                              <div class="lh-1">
                                  <span class="avatar avatar-sm avatar-rounded">
                                      <img src="{{ asset('') }}/assets/images/faces/12.jpg" alt="">
                                  </span>
                              </div>
                              <div>
                                  <span class="d-block text-muted">Service Upgrade</span>
                                  <a href="javascript:void(0);" class="company-name">Wcsrm Software</a>
                              </div>
                          </div>
                          <div class="px-3 py-2 rounded bg-light border d-flex align-items-center justify-content-between flex-wrap">
                              <div>$12,000</div>
                              <div class="text-muted fs-12"><i class="ri-calendar-line me-1"></i>21,May 2024</div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card custom-card">
                  <div class="card-body">
                      <div>
                          <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                              <div class="lh-1">
                                  <span class="avatar avatar-sm avatar-rounded">
                                      <img src="{{ asset('') }}/assets/images/faces/5.jpg" alt="">
                                  </span>
                              </div>
                              <div>
                                  <span class="d-block text-muted">Product Demo</span>
                                  <a href="javascript:void(0);" class="company-name">Acme Corporation LTD</a>
                              </div>
                          </div>
                          <div class="px-3 py-2 rounded bg-light border d-flex align-items-center justify-content-between flex-wrap">
                              <div>$50,000</div>
                              <div class="text-muted fs-12"><i class="ri-calendar-line me-1"></i>18,Apr 2024</div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card custom-card">
                  <div class="card-body">
                      <div>
                          <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                              <div class="lh-1">
                                  <span class="avatar avatar-sm avatar-rounded">
                                      <img src="{{ asset('') }}/assets/images/faces/15.jpg" alt="">
                                  </span>
                              </div>
                              <div>
                                  <span class="d-block text-muted">Website Redesign</span>
                                  <a href="javascript:void(0);" class="company-name">Embark Technologies</a>
                              </div>
                          </div>
                          <div class="px-3 py-2 rounded bg-light border d-flex align-items-center justify-content-between flex-wrap">
                              <div>$20,000</div>
                              <div class="text-muted fs-12"><i class="ri-calendar-line me-1"></i>12,Jul 2024</div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card custom-card">
                  <div class="card-body">
                      <div>
                          <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                              <div class="lh-1">
                                  <span class="avatar avatar-sm avatar-rounded">
                                      <img src="{{ asset('') }}/assets/images/faces/6.jpg" alt="">
                                  </span>
                              </div>
                              <div>
                                  <span class="d-block text-muted">Consulting Services</span>
                                  <a href="javascript:void(0);" class="company-name">Adam Johnson</a>
                              </div>
                          </div>
                          <div class="px-3 py-2 rounded bg-light border d-flex align-items-center justify-content-between flex-wrap">
                              <div>$10,000</div>
                              <div class="text-muted fs-12"><i class="ri-calendar-line me-1"></i>29,Jul 2024</div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-2" id="leads-qualified">
              <div class="card custom-card">
                  <div class="card-body">
                      <div>
                          <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                              <div class="lh-1">
                                  <span class="avatar avatar-sm avatar-rounded">
                                      <img src="{{ asset('') }}/assets/images/faces/6.jpg" alt="">
                                  </span>
                              </div>
                              <div>
                                  <span class="d-block text-muted">Event Sponsorship</span>
                                  <a href="javascript:void(0);" class="company-name">Initech Info</a>
                              </div>
                          </div>
                          <div class="px-3 py-2 rounded bg-light border d-flex align-items-center justify-content-between flex-wrap">
                              <div>$10,000</div>
                              <div class="text-muted fs-12"><i class="ri-calendar-line me-1"></i>21,May 2024</div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card custom-card">
                  <div class="card-body">
                      <div>
                          <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                              <div class="lh-1">
                                  <span class="avatar avatar-sm avatar-rounded">
                                      <img src="{{ asset('') }}/assets/images/faces/6.jpg" alt="">
                                  </span>
                              </div>
                              <div>
                                  <span class="d-block text-muted">Sales Training</span>
                                  <a href="javascript:void(0);" class="company-name">Soylent Corp</a>
                              </div>
                          </div>
                          <div class="px-3 py-2 rounded bg-light border d-flex align-items-center justify-content-between flex-wrap">
                              <div>$6,000</div>
                              <div class="text-muted fs-12"><i class="ri-calendar-line me-1"></i>10,May 2024</div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card custom-card">
                  <div class="card-body">
                      <div>
                          <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                              <div class="lh-1">
                                  <span class="avatar avatar-sm avatar-rounded">
                                      <img src="{{ asset('') }}/assets/images/faces/14.jpg" alt="">
                                  </span>
                              </div>
                              <div>
                                  <span class="d-block text-muted">Content Creation</span>
                                  <a href="javascript:void(0);" class="company-name">Hooli Technologies</a>
                              </div>
                          </div>
                          <div class="px-3 py-2 rounded bg-light border d-flex align-items-center justify-content-between flex-wrap">
                              <div>$3,000</div>
                              <div class="text-muted fs-12"><i class="ri-calendar-line me-1"></i>25,Aug 2024</div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-2" id="contact-initiated">
              <div class="card custom-card">
                  <div class="card-body">
                      <div>
                          <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                              <div class="lh-1">
                                  <span class="avatar avatar-sm avatar-rounded">
                                      <img src="{{ asset('') }}/assets/images/faces/3.jpg" alt="">
                                  </span>
                              </div>
                              <div>
                                  <span class="d-block text-muted">E-commerce Integration</span>
                                  <a href="javascript:void(0);" class="company-name">Spice Infotech</a>
                              </div>
                          </div>
                          <div class="px-3 py-2 rounded bg-light border d-flex align-items-center justify-content-between flex-wrap">
                              <div>$12,000</div>
                              <div class="text-muted fs-12"><i class="ri-calendar-line me-1"></i>15,Sep 2024</div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card custom-card">
                  <div class="card-body">
                      <div>
                          <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                              <div class="lh-1">
                                  <span class="avatar avatar-sm avatar-rounded">
                                      <img src="{{ asset('') }}/assets/images/faces/16.jpg" alt="">
                                  </span>
                              </div>
                              <div>
                                  <span class="d-block text-muted">Ad Campaign</span>
                                  <a href="javascript:void(0);" class="company-name">Umbrella Corp</a>
                              </div>
                          </div>
                          <div class="px-3 py-2 rounded bg-light border d-flex align-items-center justify-content-between flex-wrap">
                              <div>$5,500</div>
                              <div class="text-muted fs-12"><i class="ri-calendar-line me-1"></i>17,Jun 2024</div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-2" id="needs-identified">
              <div class="card custom-card">
                  <div class="card-body">
                      <div>
                          <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                              <div class="lh-1">
                                  <span class="avatar avatar-sm avatar-rounded">
                                      <img src="{{ asset('') }}/assets/images/faces/16.jpg" alt="">
                                  </span>
                              </div>
                              <div>
                                  <span class="d-block text-muted">Webinar Series</span>
                                  <a href="javascript:void(0);" class="company-name">Massive Dynamic</a>
                              </div>
                          </div>
                          <div class="px-3 py-2 rounded bg-light border d-flex align-items-center justify-content-between flex-wrap">
                              <div>$9,500</div>
                              <div class="text-muted fs-12"><i class="ri-calendar-line me-1"></i>16,May 2024</div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card custom-card">
                  <div class="card-body">
                      <div>
                          <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                              <div class="lh-1">
                                  <span class="avatar avatar-sm avatar-rounded">
                                      <img src="{{ asset('') }}/assets/images/faces/13.jpg" alt="">
                                  </span>
                              </div>
                              <div>
                                  <span class="d-block text-muted">SEO Audit</span>
                                  <a href="javascript:void(0);" class="company-name">Logitech ecostics</a>
                              </div>
                          </div>
                          <div class="px-3 py-2 rounded bg-light border d-flex align-items-center justify-content-between flex-wrap">
                              <div>$3,500</div>
                              <div class="text-muted fs-12"><i class="ri-calendar-line me-1"></i>16,May 2024</div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card custom-card">
                  <div class="card-body">
                      <div>
                          <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                              <div class="lh-1">
                                  <span class="avatar avatar-sm avatar-rounded">
                                      <img src="{{ asset('') }}/assets/images/faces/8.jpg" alt="">
                                  </span>
                              </div>
                              <div>
                                  <span class="d-block text-muted">Loyalty Program</span>
                                  <a href="javascript:void(0);" class="company-name">Globex Corp</a>
                              </div>
                          </div>
                          <div class="px-3 py-2 rounded bg-light border d-flex align-items-center justify-content-between flex-wrap">
                              <div>$12,000</div>
                              <div class="text-muted fs-12"><i class="ri-calendar-line me-1"></i>26,Jul 2024</div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card custom-card">
                  <div class="card-body">
                      <div>
                          <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                              <div class="lh-1">
                                  <span class="avatar avatar-sm avatar-rounded">
                                      <img src="{{ asset('') }}/assets/images/faces/9.jpg" alt="">
                                  </span>
                              </div>
                              <div>
                                  <span class="d-block text-muted">CRM Integration</span>
                                  <a href="javascript:void(0);" class="company-name">CrystalClear Consulting</a>
                              </div>
                          </div>
                          <div class="px-3 py-2 rounded bg-light border d-flex align-items-center justify-content-between flex-wrap">
                              <div>$10,000</div>
                              <div class="text-muted fs-12"><i class="ri-calendar-line me-1"></i>14,May 2024</div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-2" id="negotiation">
              <div class="card custom-card">
                  <div class="card-body">
                      <div>
                          <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                              <div class="lh-1">
                                  <span class="avatar avatar-sm avatar-rounded">
                                      <img src="{{ asset('') }}/assets/images/faces/16.jpg" alt="">
                                  </span>
                              </div>
                              <div>
                                  <span class="d-block text-muted">Media Analytics</span>
                                  <a href="javascript:void(0);" class="company-name">GlobalConnect</a>
                              </div>
                          </div>
                          <div class="px-3 py-2 rounded bg-light border d-flex align-items-center justify-content-between flex-wrap">
                              <div>$9,000</div>
                              <div class="text-muted fs-12"><i class="ri-calendar-line me-1"></i>18,Mar 2024</div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card custom-card">
                  <div class="card-body">
                      <div>
                          <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                              <div class="lh-1">
                                  <span class="avatar avatar-sm avatar-rounded">
                                      <img src="{{ asset('') }}/assets/images/faces/21.jpg" alt="">
                                  </span>
                              </div>
                              <div>
                                  <span class="d-block text-muted">Lead Nurturing Strategy</span>
                                  <a href="javascript:void(0);" class="company-name">AlphaTech Solutions</a>
                              </div>
                          </div>
                          <div class="px-3 py-2 rounded bg-light border d-flex align-items-center justify-content-between flex-wrap">
                              <div>$4,000</div>
                              <div class="text-muted fs-12"><i class="ri-calendar-line me-1"></i>16,Jul 2024</div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card custom-card">
                  <div class="card-body">
                      <div>
                          <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                              <div class="lh-1">
                                  <span class="avatar avatar-sm avatar-rounded">
                                      <img src="{{ asset('') }}/assets/images/faces/13.jpg" alt="">
                                  </span>
                              </div>
                              <div>
                                  <span class="d-block text-muted">Website Maintenance</span>
                                  <a href="javascript:void(0);" class="company-name">RedRock Industries</a>
                              </div>
                          </div>
                          <div class="px-3 py-2 rounded bg-light border d-flex align-items-center justify-content-between flex-wrap">
                              <div>$7,500</div>
                              <div class="text-muted fs-12"><i class="ri-calendar-line me-1"></i>30,Jul 2024</div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card custom-card">
                  <div class="card-body">
                      <div>
                          <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                              <div class="lh-1">
                                  <span class="avatar avatar-sm avatar-rounded">
                                      <img src="{{ asset('') }}/assets/images/faces/2.jpg" alt="">
                                  </span>
                              </div>
                              <div>
                                  <span class="d-block text-muted">Newsletter Campaign</span>
                                  <a href="javascript:void(0);" class="company-name">CoreTech Solutions</a>
                              </div>
                          </div>
                          <div class="px-3 py-2 rounded bg-light border d-flex align-items-center justify-content-between flex-wrap">
                              <div>$2,500</div>
                              <div class="text-muted fs-12"><i class="ri-calendar-line me-1"></i>12,May 2024</div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card custom-card">
                  <div class="card-body">
                      <div>
                          <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                              <div class="lh-1">
                                  <span class="avatar avatar-sm avatar-rounded">
                                      <img src="{{ asset('') }}/assets/images/faces/14.jpg" alt="">
                                  </span>
                              </div>
                              <div>
                                  <span class="d-block text-muted">Graphic Design</span>
                                  <a href="javascript:void(0);" class="company-name">TechPro Services</a>
                              </div>
                          </div>
                          <div class="px-3 py-2 rounded bg-light border d-flex align-items-center justify-content-between flex-wrap">
                              <div>$5,500</div>
                              <div class="text-muted fs-12"><i class="ri-calendar-line me-1"></i>10,Jul 2024</div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-2" id="deal-finalized">
              <div class="card custom-card">
                  <div class="card-body">
                      <div>
                          <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                              <div class="lh-1">
                                  <span class="avatar avatar-sm avatar-rounded">
                                      <img src="{{ asset('') }}/assets/images/faces/1.jpg" alt="">
                                  </span>
                              </div>
                              <div>
                                  <span class="d-block text-muted">CRM Training</span>
                                  <a href="javascript:void(0);" class="company-name">BlueSky Industries</a>
                              </div>
                          </div>
                          <div class="px-3 py-2 rounded bg-light border d-flex align-items-center justify-content-between flex-wrap">
                              <div>$4,200</div>
                              <div class="text-muted fs-12"><i class="ri-calendar-line me-1"></i>15,May 2024</div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card custom-card">
                  <div class="card-body">
                      <div>
                          <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                              <div class="lh-1">
                                  <span class="avatar avatar-sm avatar-rounded">
                                      <img src="{{ asset('') }}/assets/images/faces/10.jpg" alt="">
                                  </span>
                              </div>
                              <div>
                                  <span class="d-block text-muted">Market Research</span>
                                  <a href="javascript:void(0);" class="company-name">BrightStar Solutions</a>
                              </div>
                          </div>
                          <div class="px-3 py-2 rounded bg-light border d-flex align-items-center justify-content-between flex-wrap">
                              <div>$10,700</div>
                              <div class="text-muted fs-12"><i class="ri-calendar-line me-1"></i>28,Jun 2024</div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End::row-3 -->

      <!-- Start:: New Deal -->
      <div class="modal fade" id="create-contact" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                  <div class="modal-header">
                      <h6 class="modal-title">New Deal</h6>
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
                              <label for="deal-name" class="form-label">Contact Name</label>
                              <input type="text" class="form-control" id="deal-name" placeholder="Contact Name">
                          </div>
                          <div class="col-xl-6">
                              <label for="deal-lead-score" class="form-label">Deal Value</label>
                              <input type="number" class="form-control" id="deal-lead-score" placeholder="Deal Value">
                          </div>
                          <div class="col-xl-12">
                              <label for="company-name" class="form-label">Company Name</label>
                              <input type="text" class="form-control" id="company-name" placeholder="Company Name">
                          </div>
                          <div class="col-xl-12">
                              <label class="form-label">Last Contacted</label>
                              <div class="input-group">
                                  <div class="input-group-text text-muted border-end-0"> <i class="ri-calendar-line"></i> </div>
                                  <input type="text" class="form-control" id="targetDate" placeholder="Choose date and time">
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-light"
                          data-bs-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary">Create Deal</button>
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: New Deal -->

  </div>
</div>
<!-- End::app-content -->

@endsection