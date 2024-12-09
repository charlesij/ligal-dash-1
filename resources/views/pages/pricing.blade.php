@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Page Header -->
      <div
          class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Pricing</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Pricing</li>
                      </ol>
                  </nav>
              </div>
          </div>
          <div class="btn-list">
              <button type="button" class="btn btn-primary-light btn-wave me-2">
                  <i class="bx bx-crown align-middle"></i> Plan Upgrade
              </button>
              <button type="button" class="btn btn-secondary-light btn-wave me-0">
                  <i class="ri-upload-cloud-line align-middle"></i> Export Report
              </button>
          </div>
      </div>
      <!-- Page Header Close -->

      <!-- Start:: row-1 -->
      <div class="row d-flex align-items-center justify-content-center mb-5">
          <div class="p-3 pt-0 mb-3">
              <div class="text-center">
                  <h3 class="text-primary fw-semibold">Pricing</h3>
                  <h5 class="d-block">Plans that flex with your needs.</h5>
                  <p class="text-muted mb-4">Stay agile with plans that seamlessly adjust to your changing
                      requirements, ensuring you always have the flexibility you need.</p>
              </div>
          </div>
          <div class="col-lg-8 col-xl-4 col-xxl-3 col-md-8 col-sm-12">
              <div class="card custom-card pricing-card pricing-card1">
                  <div class="card-body p-4">
                      <div class="d-flex gap-3 align-items-center p-1">
                          <div
                              class="p-2 border d-inline-block border-secondary rounded border-opacity-10 bg-secondary-transparent">
                              <span class="avatar avatar-md bg-secondary svg-white">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                      fill="#000000" viewBox="0 0 256 256">
                                      <path d="M80,104V208H32a8,8,0,0,1-8-8V112a8,8,0,0,1,8-8Z" opacity="0.2">
                                      </path>
                                      <path
                                          d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z">
                                      </path>
                                  </svg>
                              </span>
                          </div>
                          <div class="text-start">
                              <h4 class="fw-medium mb-1">Basic</h4> <span
                                  class="mb-1 text-muted d-block">Essential features for a magical
                                  start</span>
                          </div>
                      </div>
                      <hr class="border-top my-4">
                      <div>
                          <h2 class="mb-0 fw-bold d-block text-secondary">$9.99/<span
                                  class="fs-12 text-secondary fw-medium ms-1">Per Month</span></h2> <span
                              class="text-muted fs-14"><span
                                  class="text-secondary me-2 fw-semibold">+20/</span>Person Per month</span>
                      </div>
                      <div class="text-center my-3 pricing-barrier">
                          <span class="op-6 fs-12 px-2 py-1 border rounded-pill">Current Plan</span>
                      </div>
                      <ul class="list-unstyled pricing-body">
                          <li>
                              <div class="d-flex align-items-center"> <span
                                      class="avatar avatar-xs svg-primary"> <i
                                          class="ri-check-double-line text-success fs-14"></i> </span> <span
                                      class="ms-2 my-auto flex-fill"> Timeless Assistance </span> <span
                                      class="badge bg-secondary rounded-pill">On-demand</span> </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center"> <span
                                      class="avatar avatar-xs svg-primary"> <i
                                          class="ri-check-double-line text-success fs-14"></i> </span> <span
                                      class="ms-2 my-auto"> Premium Experience </span> </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center"> <span
                                      class="avatar avatar-xs svg-primary"> <i
                                          class="ri-check-double-line text-success fs-14"></i> </span> <span
                                      class="ms-2 my-auto flex-fill"> Fortress-Level Security </span> <span
                                      class="badge bg-light text-default rounded-pill border"> <i
                                          class="ri-flashlight-fill text-warning me-1"></i>Standard </span>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center"> <span
                                      class="avatar avatar-xs svg-primary"> <i
                                          class="ri-check-double-line text-success fs-14"></i> </span> <span
                                      class="ms-2 my-auto"> Instant Access </span> </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center"> <span
                                      class="avatar avatar-xs svg-primary"> <i
                                          class="ri-check-double-line text-success fs-14"></i> </span> <span
                                      class="ms-2 my-auto"> Infinite Updates </span> </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center"> <span
                                      class="avatar avatar-xs svg-primary"> <i
                                          class="ri-check-double-line text-success fs-14"></i> </span> <span
                                      class="ms-2 my-auto flex-fill"> Risk-Free Trial </span> <span
                                      class="text-muted fs-12 fw-medium">7 Days</span> </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center"> <span
                                      class="avatar avatar-xs svg-primary"> <i
                                          class="ri-check-double-line text-success fs-14"></i> </span> <span
                                      class="ms-2 my-auto flex-fill"> Satisfaction Guarantee </span> <span
                                      class="text-muted fs-12 fw-medium">30 Days</span> </div>
                          </li>
                      </ul>
                      <button type="button"
                          class="btn btn-lg mt-4 btn-secondary-light d-grid w-100 btn-wave waves-effect waves-light">
                          <span class="ms-4 me-4">Schedule a Demo</span> </button>
                  </div>
              </div>
          </div>
          <div class="col-lg-8 col-xl-4 col-xxl-3 col-md-8 col-sm-12">
              <div class="card custom-card pricing-card pricing-card1">
                  <div class="card-body p-4">
                      <div class="d-flex gap-3 align-items-center p-1">
                          <div
                              class="p-2 border d-inline-block border-primary rounded border-opacity-10 bg-primary-transparent">
                              <span class="avatar avatar-md bg-primary svg-white">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                      fill="#000000" viewBox="0 0 256 256">
                                      <path
                                          d="M128,48v80H40.87A146.29,146.29,0,0,1,40,112V56a8,8,0,0,1,8-8Zm0,80V232s78.06-21.3,87.13-104Z"
                                          opacity="0.2"></path>
                                      <path
                                          d="M208,40H48A16,16,0,0,0,32,56v56c0,52.72,25.52,84.67,46.93,102.19,23.06,18.86,46,25.27,47,25.53a8,8,0,0,0,4.2,0c1-.26,23.91-6.67,47-25.53C198.48,196.67,224,164.72,224,112V56A16,16,0,0,0,208,40ZM120,220.55a130.85,130.85,0,0,1-30.93-18.74c-21.15-17.3-34.2-39.37-39-65.81H120ZM120,120H48.23c-.15-2.63-.23-5.29-.23-8l0-56h72Zm47.4,81.42A131.31,131.31,0,0,1,136,220.53V136h69.91C201.16,162.24,188.27,184.18,167.4,201.42ZM208,112c0,2.71-.08,5.37-.23,8H136V56h72Z">
                                      </path>
                                  </svg>
                              </span>
                          </div>
                          <div class="text-start">
                              <h4 class="fw-medium mb-1">Pro</h4> <span
                                  class="mb-1 text-muted d-block">Essential
                                  features for a magical start</span>
                          </div>
                      </div>
                      <hr class="border-top my-4">
                      <div>
                          <h2 class="mb-0 fw-bold d-block text-primary">$19.99/<span
                                  class="fs-12 text-primary fw-medium ms-1">Per Month</span></h2> <span
                              class="text-muted fs-14"><span
                                  class="text-primary me-2 fw-semibold">+20/</span>Person Per month</span>
                      </div>
                      <div class="text-center my-3 pricing-barrier">
                          <span class="op-6 fs-12 px-2 py-1 border rounded-pill">Reccomonded</span>
                      </div>
                      <ul class="list-unstyled pricing-body">
                          <li>
                              <div class="d-flex align-items-center"> <span
                                      class="avatar avatar-xs svg-primary"> <i
                                          class="ri-check-double-line text-success fs-14"></i> </span> <span
                                      class="ms-2 my-auto flex-fill"> Timeless Assistance </span> <span
                                      class="badge bg-success rounded-pill">Live chat</span> </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center"> <span
                                      class="avatar avatar-xs svg-primary"> <i
                                          class="ri-check-double-line text-success fs-14"></i> </span> <span
                                      class="ms-2 my-auto"> Premium Experience </span> </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center"> <span
                                      class="avatar avatar-xs svg-primary"> <i
                                          class="ri-check-double-line text-success fs-14"></i> </span> <span
                                      class="ms-2 my-auto flex-fill"> Fortress-Level Security </span> <span
                                      class="badge bg-light text-default rounded-pill border"> <i
                                          class="ri-flashlight-fill text-warning me-1"></i>Standard </span>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center"> <span
                                      class="avatar avatar-xs svg-primary"> <i
                                          class="ri-check-double-line text-success fs-14"></i> </span> <span
                                      class="ms-2 my-auto"> Instant Access </span> </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center"> <span
                                      class="avatar avatar-xs svg-primary"> <i
                                          class="ri-check-double-line text-success fs-14"></i> </span> <span
                                      class="ms-2 my-auto"> Infinite Updates </span> </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center"> <span
                                      class="avatar avatar-xs svg-primary"> <i
                                          class="ri-check-double-line text-success fs-14"></i> </span> <span
                                      class="ms-2 my-auto flex-fill"> Risk-Free Trial </span> <span
                                      class="text-muted fs-12 fw-medium">7 Days</span> </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center"> <span
                                      class="avatar avatar-xs svg-primary"> <i
                                          class="ri-check-double-line text-success fs-14"></i> </span> <span
                                      class="ms-2 my-auto flex-fill"> Satisfaction Guarantee </span> <span
                                      class="text-muted fs-12 fw-medium">30 Days</span> </div>
                          </li>
                      </ul>
                      <button type="button"
                          class="btn btn-lg mt-4 btn-primary d-grid w-100 btn-wave waves-effect waves-light">
                          <span class="ms-4 me-4">Schedule a Demo</span> </button>
                  </div>
              </div>
          </div>
          <div class="col-lg-8 col-xl-4 col-xxl-3 col-md-8 col-sm-12">
              <div class="card custom-card pricing-card pricing-card1">
                  <div class="card-body p-4">
                      <div class="d-flex gap-3 align-items-center p-1">
                          <div
                              class="p-2 border d-inline-block border-success rounded border-opacity-10 bg-success-transparent">
                              <span class="avatar avatar-md bg-success svg-white">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                      fill="#000000" viewBox="0 0 256 256">
                                      <path
                                          d="M209,81l-33,31,32,88-24,24-48-72-24,24v24L88,224,72,184,32,168l24-24H80l24-24L32,72,56,48l88,32,31-33A24,24,0,0,1,209,81Z"
                                          opacity="0.2"></path>
                                      <path
                                          d="M185.33,114.21l29.14-27.43.17-.16a32,32,0,0,0-45.26-45.26l-.16.17L141.79,70.67l-83-30.2a8,8,0,0,0-8.39,1.86l-24,24a8,8,0,0,0,1.22,12.31l63.89,42.59L76.69,136H56a8,8,0,0,0-5.65,2.34l-24,24A8,8,0,0,0,29,175.42l36.82,14.73,14.7,36.75.06.16a8,8,0,0,0,13.18,2.47l23.87-23.88A8,8,0,0,0,120,200V179.31l14.76-14.76,42.59,63.89a8,8,0,0,0,12.31,1.22l24-24a8,8,0,0,0,1.86-8.39Zm-.07,97.23-42.59-63.89A8,8,0,0,0,136.8,144a7.09,7.09,0,0,0-.79,0,8,8,0,0,0-5.66,2.34l-24,24A8,8,0,0,0,104,176v20.69L90.93,209.76,79.43,181A8,8,0,0,0,75,176.57l-28.74-11.5L59.32,152H80a8,8,0,0,0,5.66-2.34l24-24a8,8,0,0,0-1.22-12.32L44.56,70.74l13.5-13.49,83.22,30.26a8,8,0,0,0,8.56-2l30.94-32.88A16,16,0,0,1,203.4,75.22l-32.87,30.94a8,8,0,0,0-2,8.56l30.26,83.22Z">
                                      </path>
                                  </svg>
                              </span>
                          </div>
                          <div class="text-start">
                              <h4 class="fw-medium mb-1">Premium</h4> <span
                                  class="mb-1 text-muted d-block">Pinnacle excellence, VIP support.</span>
                          </div>
                      </div>
                      <hr class="border-top my-4">
                      <div>
                          <h2 class="mb-0 fw-bold d-block text-success">$29.99/<span
                                  class="fs-12 text-success fw-medium ms-1">Per Month</span></h2> <span
                              class="text-muted fs-14"><span
                                  class="text-success me-2 fw-semibold">+20/</span>Person Per month</span>
                      </div>
                      <div class="text-center my-3 pricing-barrier">
                          <span class="op-6 fs-12 px-2 py-1 border rounded-pill">New Plan</span>
                      </div>
                      <ul class="list-unstyled pricing-body">
                          <li>
                              <div class="d-flex align-items-center"> <span
                                      class="avatar avatar-xs svg-primary"> <i
                                          class="ri-check-double-line text-success fs-14"></i> </span> <span
                                      class="ms-2 my-auto flex-fill"> Timeless Assistance </span> <span
                                      class="badge bg-warning rounded-pill">24/7 Support</span> </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center"> <span
                                      class="avatar avatar-xs svg-primary"> <i
                                          class="ri-check-double-line text-success fs-14"></i> </span> <span
                                      class="ms-2 my-auto"> Premium Experience </span> </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center"> <span
                                      class="avatar avatar-xs svg-primary"> <i
                                          class="ri-check-double-line text-success fs-14"></i> </span> <span
                                      class="ms-2 my-auto flex-fill"> Fortress-Level Security </span> <span
                                      class="badge bg-light text-default rounded-pill border"> <i
                                          class="ri-flashlight-fill text-warning me-1"></i>Turbo </span>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center"> <span
                                      class="avatar avatar-xs svg-primary"> <i
                                          class="ri-check-double-line text-success fs-14"></i> </span> <span
                                      class="ms-2 my-auto"> Instant Access </span> </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center"> <span
                                      class="avatar avatar-xs svg-primary"> <i
                                          class="ri-check-double-line text-success fs-14"></i> </span> <span
                                      class="ms-2 my-auto"> Infinite Updates </span> </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center"> <span
                                      class="avatar avatar-xs svg-primary"> <i
                                          class="ri-check-double-line text-success fs-14"></i> </span> <span
                                      class="ms-2 my-auto flex-fill"> Risk-Free Trial </span> <span
                                      class="text-muted fs-12 fw-medium">14 Days</span> </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center"> <span
                                      class="avatar avatar-xs svg-primary"> <i
                                          class="ri-check-double-line text-success fs-14"></i> </span> <span
                                      class="ms-2 my-auto flex-fill"> Satisfaction Guarantee </span> <span
                                      class="text-muted fs-12 fw-medium">60 Days</span> </div>
                          </li>
                      </ul>
                      <button type="button"
                          class="btn btn-lg btn-success-light mt-4 d-grid w-100 btn-wave waves-effect waves-light">
                          <span class="ms-4 me-4">Schedule a Demo</span> </button>
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: row-1 -->

      <!-- Start:: row-2 -->
      <div class="row">
          <div class="col-xl-12" id="convertable-pricing">
              <div class="d-flex justify-content-center mb-4">
                  <div class="switcher-box">
                      <span>Monthly</span>
                      <div class="switcher-pricing text-center">
                          <input type="checkbox" class="pricing-toggle">
                      </div>
                      <span>Yearly</span>
                  </div>
              </div>
              <div class="tab-content show" id="monthly1">
                  <div class="row d-flex align-items-center justify-content-center">
                      <div class="col-lg-8 col-xl-4 col-xxl-3 col-md-8 col-sm-12">
                          <div class="card custom-card pricing-card">
                              <div class="card-body p-4 bg-white rounded">
                                  <div class="text-center bg-light p-3 rounded">
                                      <h4 class="fw-medium mb-1">Basic</h4>
                                      <span class="mb-1 text-muted d-block">Next-level tools for advanced
                                          users</span>
                                      <h2 class="mb-0 fw-bold d-block text-primary">$9.99/<span
                                              class="fs-12 text-default fw-medium ms-1">Price Per Month</span>
                                      </h2>
                                  </div>
                                  <hr class="border-top my-4">
                                  <ul class="list-unstyled pricing-body">
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto flex-fill">
                                                  Unicorn Support
                                              </span>
                                              <span class="badge bg-secondary rounded-pill">On Demand</span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto">
                                                  Teleportation Technology
                                              </span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto flex-fill">
                                                  Gravity-Defying Speed
                                              </span>
                                              <span class="badge bg-light text-default rounded-pill border">
                                                  <i class="ri-flashlight-fill text-warning me-1"></i>New
                                              </span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto">
                                                  Quantum Leap Security
                                              </span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto">
                                                  Infinite Updates
                                              </span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto flex-fill">
                                                  Free Trial
                                              </span>
                                              <span class="text-muted fs-12 fw-medium">14 Days</span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto flex-fill">
                                                  Money-Back Guarantee
                                              </span>
                                              <span class="text-muted fs-12 fw-medium">60 Days</span>
                                          </div>
                                      </li>
                                  </ul>
                                  <hr class="border-top my-3">
                                  <div class="">
                                      <div class="d-flex align-items-center justify-content-between mb-1">
                                          <span class="fs-13 fw-medium">Vat Tax</span> <span
                                              class="fs-16 fw-medium">$10</span>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between"> <span
                                              class="fs-13 fw-medium">Total</span> <span
                                              class="fs-4 fw-medium text-primary">$29</span>
                                      </div>
                                  </div>
                                  <hr class="border-top my-3">
                                  <button type="button"
                                      class="btn btn-lg btn-outline-primary d-grid w-100 btn-wave">
                                      <span class="ms-4 me-4">Start Today</span>
                                  </button>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-8 col-xl-4 col-xxl-3 col-md-8 col-sm-12">
                          <div class="card custom-card pricing-card pricing-card-main hover">
                              <span class="pricetag">Recommended</span>
                              <div class="card-body p-4 bg-white rounded">
                                  <div class="text-center bg-primary-transparent p-3 rounded">
                                      <h4 class="fw-medium mb-1">Pro</h4>
                                      <span class="mb-1 text-muted d-block">Next-level tools for advanced
                                          users</span>
                                      <h2 class="mb-0 fw-bold d-block text-primary">$19.99/<span
                                              class="fs-12 text-default fw-medium ms-1">Price Per Month</span>
                                      </h2>
                                  </div>
                                  <hr class="border-top my-4">
                                  <ul class="list-unstyled pricing-body">
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto flex-fill">
                                                  Unicorn Support
                                              </span>
                                              <span class="badge bg-success rounded-pill">Live Chat</span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto">
                                                  Teleportation Technology
                                              </span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto flex-fill">
                                                  Gravity-Defying Speed
                                              </span>
                                              <span class="badge bg-light text-default rounded-pill border">
                                                  <i class="ri-flashlight-fill text-warning me-1"></i>Turbo
                                              </span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto">
                                                  Quantum Leap Security
                                              </span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto">
                                                  Infinite Updates
                                              </span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto flex-fill">
                                                  Free Trial
                                              </span>
                                              <span class="text-muted fs-12 fw-medium">14 Days</span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto flex-fill">
                                                  Money-Back Guarantee
                                              </span>
                                              <span class="text-muted fs-12 fw-medium">60 Days</span>
                                          </div>
                                      </li>
                                  </ul>
                                  <hr class="border-top my-3">
                                  <div class="">
                                      <div class="d-flex align-items-center justify-content-between mb-1">
                                          <span class="fs-13 fw-medium">Vat Tax</span> <span
                                              class="fs-16 fw-medium">$10</span>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between"> <span
                                              class="fs-13 fw-medium">Total</span> <span
                                              class="fs-4 fw-medium text-primary">$59</span>
                                      </div>
                                  </div>
                                  <hr class="border-top my-3">
                                  <button type="button" class="btn btn-lg btn-primary d-grid w-100 btn-wave">
                                      <span class="ms-4 me-4">Start Today</span>
                                  </button>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-8 col-xl-4 col-xxl-3 col-md-8 col-sm-12">
                          <div class="card custom-card pricing-card">
                              <div class="card-body p-4 bg-white rounded">
                                  <div class="text-center bg-light p-3 rounded">
                                      <h4 class="fw-medium mb-1">Premium</h4>
                                      <span class="mb-1 text-muted d-block">Next-level tools for advanced
                                          users</span>
                                      <h2 class="mb-0 fw-bold d-block text-primary">$29.99/<span
                                              class="fs-12 text-default fw-medium ms-1">Price Per Month</span>
                                      </h2>
                                  </div>
                                  <hr class="border-top my-4">
                                  <ul class="list-unstyled pricing-body">
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto flex-fill">
                                                  Unicorn Support
                                              </span>
                                              <span class="badge bg-primary rounded-pill">24/7 Support</span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto">
                                                  Teleportation Technology
                                              </span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto flex-fill">
                                                  Gravity-Defying Speed
                                              </span>
                                              <span class="badge bg-light text-default rounded-pill border">
                                                  <i class="ri-flashlight-fill text-warning me-1"></i>New
                                              </span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto">
                                                  Quantum Leap Security
                                              </span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto">
                                                  Infinite Updates
                                              </span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto flex-fill">
                                                  Free Trial
                                              </span>
                                              <span class="text-muted fs-12 fw-medium">14 Days</span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto flex-fill">
                                                  Money-Back Guarantee
                                              </span>
                                              <span class="text-muted fs-12 fw-medium">60 Days</span>
                                          </div>
                                      </li>
                                  </ul>
                                  <hr class="border-top my-3">
                                  <div class="">
                                      <div class="d-flex align-items-center justify-content-between mb-1">
                                          <span class="fs-13 fw-medium">Vat Tax</span> <span
                                              class="fs-16 fw-medium">$10</span>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between"> <span
                                              class="fs-13 fw-medium">Total</span> <span
                                              class="fs-4 fw-medium text-primary">$99</span>
                                      </div>
                                  </div>
                                  <hr class="border-top my-3">
                                  <button type="button"
                                      class="btn btn-lg btn-outline-primary d-grid w-100 btn-wave">
                                      <span class="ms-4 me-4">Start Today</span>
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="tab-content" id="yearly1">
                  <div class="row d-flex align-items-center justify-content-center">
                      <div class="col-lg-8 col-xl-4 col-xxl-3 col-md-8 col-sm-12">
                          <div class="card custom-card pricing-card">
                              <div class="card-body p-4 bg-white rounded">
                                  <div class="text-center bg-light p-3 rounded">
                                      <h4 class="fw-medium mb-1">Basic</h4>
                                      <span class="mb-1 text-muted d-block">Next-level tools for advanced
                                          users</span>
                                      <h2 class="mb-0 fw-bold d-block text-primary">$99.99/<span
                                              class="fs-12 text-default fw-medium ms-1">Price Per Year</span>
                                      </h2>
                                  </div>
                                  <hr class="border-top my-4">
                                  <ul class="list-unstyled pricing-body">
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto flex-fill">
                                                  Unicorn Support
                                              </span>
                                              <span class="badge bg-secondary rounded-pill">On Demand</span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto">
                                                  Teleportation Technology
                                              </span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto flex-fill">
                                                  Gravity-Defying Speed
                                              </span>
                                              <span class="badge bg-light text-default rounded-pill border">
                                                  <i class="ri-flashlight-fill text-warning me-1"></i>New
                                              </span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto">
                                                  Quantum Leap Security
                                              </span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto">
                                                  Infinite Updates
                                              </span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto flex-fill">
                                                  Free Trial
                                              </span>
                                              <span class="text-muted fs-12 fw-medium">14 Days</span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto flex-fill">
                                                  Money-Back Guarantee
                                              </span>
                                              <span class="text-muted fs-12 fw-medium">60 Days</span>
                                          </div>
                                      </li>
                                  </ul>
                                  <hr class="border-top my-3">
                                  <div class="">
                                      <div class="d-flex align-items-center justify-content-between mb-1">
                                          <span class="fs-13 fw-medium">Vat Tax</span> <span
                                              class="fs-16 fw-medium">$10</span>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between"> <span
                                              class="fs-13 fw-medium">Total</span> <span
                                              class="fs-4 fw-medium text-primary">$29</span>
                                      </div>
                                  </div>
                                  <hr class="border-top my-3">
                                  <button type="button"
                                      class="btn btn-lg btn-outline-primary d-grid w-100 btn-wave">
                                      <span class="ms-4 me-4">Start Today</span>
                                  </button>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-8 col-xl-4 col-xxl-3 col-md-8 col-sm-12">
                          <div class="card custom-card pricing-card pricing-card-main hover">
                              <span class="pricetag">Recommended</span>
                              <div class="card-body p-4 bg-white rounded">
                                  <div class="text-center bg-primary-transparent p-3 rounded">
                                      <h4 class="fw-medium mb-1">Pro</h4>
                                      <span class="mb-1 text-muted d-block">Next-level tools for advanced
                                          users</span>
                                      <h2 class="mb-0 fw-bold d-block text-primary">$199.99/<span
                                              class="fs-12 text-default fw-medium ms-1">Price Per Year</span>
                                      </h2>
                                  </div>
                                  <hr class="border-top my-4">
                                  <ul class="list-unstyled pricing-body">
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto flex-fill">
                                                  Unicorn Support
                                              </span>
                                              <span class="badge bg-success rounded-pill">Live Chat</span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto">
                                                  Teleportation Technology
                                              </span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto flex-fill">
                                                  Gravity-Defying Speed
                                              </span>
                                              <span class="badge bg-light text-default rounded-pill border">
                                                  <i class="ri-flashlight-fill text-warning me-1"></i>Turbo
                                              </span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto">
                                                  Quantum Leap Security
                                              </span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto">
                                                  Infinite Updates
                                              </span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto flex-fill">
                                                  Free Trial
                                              </span>
                                              <span class="text-muted fs-12 fw-medium">14 Days</span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto flex-fill">
                                                  Money-Back Guarantee
                                              </span>
                                              <span class="text-muted fs-12 fw-medium">60 Days</span>
                                          </div>
                                      </li>
                                  </ul>
                                  <hr class="border-top my-3">
                                  <div class="">
                                      <div class="d-flex align-items-center justify-content-between mb-1">
                                          <span class="fs-13 fw-medium">Vat Tax</span> <span
                                              class="fs-16 fw-medium">$10</span>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between"> <span
                                              class="fs-13 fw-medium">Total</span> <span
                                              class="fs-4 fw-medium text-primary">$59</span>
                                      </div>
                                  </div>
                                  <hr class="border-top my-3">
                                  <button type="button" class="btn btn-lg btn-primary d-grid w-100 btn-wave">
                                      <span class="ms-4 me-4">Start Today</span>
                                  </button>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-8 col-xl-4 col-xxl-3 col-md-8 col-sm-12">
                          <div class="card custom-card pricing-card">
                              <div class="card-body p-4 bg-white rounded">
                                  <div class="text-center bg-light p-3 rounded">
                                      <h4 class="fw-medium mb-1">Premium</h4>
                                      <span class="mb-1 text-muted d-block">Next-level tools for advanced
                                          users</span>
                                      <h2 class="mb-0 fw-bold d-block text-primary">$299.99/<span
                                              class="fs-12 text-default fw-medium ms-1">Price Per Year</span>
                                      </h2>
                                  </div>
                                  <hr class="border-top my-4">
                                  <ul class="list-unstyled pricing-body">
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto flex-fill">
                                                  Unicorn Support
                                              </span>
                                              <span class="badge bg-primary rounded-pill">24/7 Support</span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto">
                                                  Teleportation Technology
                                              </span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto flex-fill">
                                                  Gravity-Defying Speed
                                              </span>
                                              <span class="badge bg-light text-default rounded-pill border">
                                                  <i class="ri-flashlight-fill text-warning me-1"></i>New
                                              </span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto">
                                                  Quantum Leap Security
                                              </span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto">
                                                  Infinite Updates
                                              </span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto flex-fill">
                                                  Free Trial
                                              </span>
                                              <span class="text-muted fs-12 fw-medium">14 Days</span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-xs svg-success">
                                                  <i class="ti ti-check text-success fs-18"></i>
                                              </span>
                                              <span class="ms-2 my-auto flex-fill">
                                                  Money-Back Guarantee
                                              </span>
                                              <span class="text-muted fs-12 fw-medium">60 Days</span>
                                          </div>
                                      </li>
                                  </ul>
                                  <hr class="border-top my-3">
                                  <div class="">
                                      <div class="d-flex align-items-center justify-content-between mb-1">
                                          <span class="fs-13 fw-medium">Vat Tax</span> <span
                                              class="fs-16 fw-medium">$10</span>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between"> <span
                                              class="fs-13 fw-medium">Total</span> <span
                                              class="fs-4 fw-medium text-primary">$99</span>
                                      </div>
                                  </div>
                                  <hr class="border-top my-3">
                                  <button type="button"
                                      class="btn btn-lg btn-outline-primary d-grid w-100 btn-wave">
                                      <span class="ms-4 me-4">Start Today</span>
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: row-2 -->

      <!-- Start:: row-3 -->
      <div class="row justify-content-center">
          <div class="col-xl-12">
              <div class="text-center my-5">
                  <div class="tab-style-1 border py-1 px-2 bg-white shadow-sm rounded-pill d-inline-block">
                      <ul class="nav nav-pills">
                          <li class="nav-item">
                              <button type="button" class="nav-link rounded-pill active fw-medium"
                                  data-bs-toggle="pill" data-bs-target="#pills-monthly">Monthly</button>
                          </li>
                          <li class="nav-item">
                              <button type="button" class="nav-link rounded-pill fw-medium"
                                  data-bs-toggle="pill" data-bs-target="#pills-yearly">Yearly</button>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="tab-content">
                  <div class="tab-pane show active p-0 border-0" id="pills-monthly">
                      <div class="row">
                          <div class="col-xl-6">
                              <div class="card custom-card">
                                  <div class="card-body p-0">
                                      <div class="row">
                                          <div class="col-xl-6 border-end">
                                              <div class="p-3 pe-2">
                                                  <div
                                                  class="bg-primary-transparent p-3 rounded border border-primary border-opacity-10">
                                                  <div class="d-flex align-items-center justify-content-center gap-2">
                                                      <span
                                                          class="avatar avatar-md bg-primary-transparent svg-primary avatar-rounded border-2 border border-opacity-50 border-primary">
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                              height="32" fill="#000000" viewBox="0 0 256 256">
                                                              <path
                                                                  d="M243.31,136,144,36.69A15.86,15.86,0,0,0,132.69,32H40a8,8,0,0,0-8,8v92.69A15.86,15.86,0,0,0,36.69,144L136,243.31a16,16,0,0,0,22.63,0l84.68-84.68a16,16,0,0,0,0-22.63Zm-96,96L48,132.69V48h84.69L232,147.31ZM96,84A12,12,0,1,1,84,72,12,12,0,0,1,96,84Z">
                                                              </path>
                                                          </svg>
                                                      </span>
                                                      <p class="h5 mb-0 fw-semibold text-primary text-center">Starter
                                                      </p>
                                                  </div>
                                                  <span class="fs-13 mt-2 text-muted d-block text-center">Starter
                                                      Plan</span>
                                                  <p class="h4 mb-4 mt-2 fw-semibold text-center">$9.99<span
                                                          class="fs-13 op-5 ms-1">/
                                                          month</span></p>
                                                  <button class="btn btn-primary w-100">Sign Up</button>
                                              </div>
                                              </div>
                                          </div>
                                          <div class="col-xl-6">
                                              <div class="py-3 ps-2 pe-4">
                                                  <div class="text-center">
                                                      <span class="fs-18 fw-semibold text-center">Plan Features</span>
                                                      <div class="d-flex align-items-center text-start mb-2 mt-3">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              Drag and Drop Builder :
                                                          </span>
                                                          <span class="">1</span>
                                                      </div>
                                                      <div class="d-flex align-items-center text-start mt-3">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              No of Pages :
                                                          </span>
                                                          <span class="">1</span>
                                                      </div>
                                                      <div class="d-flex align-items-center text-start mt-3">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              Search Functionality :
                                                          </span>
                                                          <span class="badge bg-secondary rounded-pill">Upto 5</span>
                                                      </div>
                                                      <div class="d-flex align-items-center text-start mt-3 mb-2">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              Custom Forms :
                                                          </span>
                                                          <span class="">3 %</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <div class="card custom-card">
                                  <div class="card-body p-0">
                                      <div class="row">
                                          <div class="col-xl-6 border-end">
                                              <div class="p-3 pe-2">
                                                  <div
                                                  class="bg-secondary-transparent p-3 rounded border border-secondary border-opacity-10">
                                                  <div class="d-flex align-items-center justify-content-center gap-2">
                                                      <span
                                                          class="avatar avatar-md bg-secondary-transparent svg-secondary avatar-rounded border-2 border border-opacity-50 border-secondary">
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                              height="32" fill="#000000" viewBox="0 0 256 256">
                                                              <path
                                                                  d="M235.58,128.84,160,91.06V48a32,32,0,0,0-64,0V91.06L20.42,128.84A8,8,0,0,0,16,136v32a8,8,0,0,0,9.57,7.84L96,161.76v18.93L82.34,194.34A8,8,0,0,0,80,200v32a8,8,0,0,0,11,7.43l37-14.81,37,14.81A8,8,0,0,0,176,232V200a8,8,0,0,0-2.34-5.66L160,180.69V161.76l70.43,14.08A8,8,0,0,0,240,168V136A8,8,0,0,0,235.58,128.84ZM224,158.24l-70.43-14.08A8,8,0,0,0,144,152v32a8,8,0,0,0,2.34,5.66L160,203.31v16.87l-29-11.61a8,8,0,0,0-5.94,0L96,220.18V203.31l13.66-13.65A8,8,0,0,0,112,184V152a8,8,0,0,0-9.57-7.84L32,158.24v-17.3l75.58-37.78A8,8,0,0,0,112,96V48a16,16,0,0,1,32,0V96a8,8,0,0,0,4.42,7.16L224,140.94Z">
                                                              </path>
                                                          </svg>
                                                      </span>
                                                      <p class="h5 mb-0 fw-semibold text-secondary">Growth Plan</p>
                                                  </div>
                                                  <span class="fs-13 mt-2 text-muted d-block text-center">Starter
                                                      Plan</span>
                                                  <p class="h4 mb-4 mt-2 fw-semibold text-center">$29.99<span
                                                          class="fs-13 op-5 ms-1">/
                                                          month</span></p>
                                                          <button class="btn btn-secondary w-100">Sign Up</button>
                                              </div>
                                              </div>
                                          </div>
                                          <div class="col-xl-6">
                                              <div class="py-3 ps-2 pe-4">
                                                  <div class="text-center">
                                                      <span class="fs-18 fw-semibold text-center">Plan Features</span>
                                                      <div class="d-flex align-items-center text-start mb-2 mt-3">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              Drag and Drop Builder :
                                                          </span>
                                                          <span class="">Unlimited</span>
                                                      </div>
                                                      <div class="d-flex align-items-center text-start mt-3">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              No of Pages :
                                                          </span>
                                                          <span class="">1</span>
                                                      </div>
                                                      <div class="d-flex align-items-center text-start mt-3">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              Search Functionality :
                                                          </span>
                                                          <span class="badge bg-success rounded-pill">Upto 10</span>
                                                      </div>
                                                      <div class="d-flex align-items-center text-start mt-3 mb-2">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              Custom Forms :
                                                          </span>
                                                          <span class="">12 %</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <div class="card custom-card">
                                  <div class="card-body p-0">
                                      <div class="row">
                                          <div class="col-xl-6 border-end">
                                              <div class="p-3 pe-2">
                                                  <div
                                                  class="bg-success-transparent p-3 rounded border border-success border-opacity-10">
                                                  <div class="d-flex align-items-center justify-content-center gap-2">
                                                      <span
                                                          class="avatar avatar-md bg-success-transparent svg-success avatar-rounded border-2 border border-opacity-50 border-success">
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                              height="32" fill="#000000" viewBox="0 0 256 256">
                                                              <path
                                                                  d="M246,98.73l-56-64A8,8,0,0,0,184,32H72a8,8,0,0,0-6,2.73l-56,64a8,8,0,0,0,.17,10.73l112,120a8,8,0,0,0,11.7,0l112-120A8,8,0,0,0,246,98.73ZM222.37,96H180L144,48h36.37ZM74.58,112l30.13,75.33L34.41,112Zm89.6,0L128,202.46,91.82,112ZM96,96l32-42.67L160,96Zm85.42,16h40.17l-70.3,75.33ZM75.63,48H112L76,96H33.63Z">
                                                              </path>
                                                          </svg>
                                                      </span>
                                                      <p class="h5 mb-0 fw-semibold text-success">Pro Plan</p>
                                                  </div>
                                                  <span class="fs-13 mt-2 text-muted d-block text-center">Starter
                                                      Plan</span>
                                                      <p class="h4 mb-4 mt-2 fw-semibold text-center">$49.99<span
                                                          class="fs-13 op-5 ms-1">/
                                                          month</span></p>
                                                          <button class="btn btn-success w-100">Sign Up</button>
                                              </div>
                                              </div>
                                          </div>
                                          <div class="col-xl-6">
                                              <div class="py-3 ps-2 pe-4">
                                                  <div class="text-center">
                                                      <span class="fs-18 fw-semibold text-center">Plan Features</span>
                                                      <div class="d-flex align-items-center text-start mb-2 mt-3">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              Drag and Drop Builder :
                                                          </span>
                                                          <span class="">Unlimited</span>
                                                      </div>
                                                      <div class="d-flex align-items-center text-start mt-3">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              No of Pages :
                                                          </span>
                                                          <span class="">Unlimited</span>
                                                      </div>
                                                      <div class="d-flex align-items-center text-start mt-3">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              Search Functionality :
                                                          </span>
                                                          <span class="badge bg-info rounded-pill">Upto 25</span>
                                                      </div>
                                                      <div class="d-flex align-items-center text-start mt-3 mb-2">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              Custom Forms :
                                                          </span>
                                                          <span class="">6 %</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <div class="card custom-card">
                                  <div class="card-body p-0">
                                      <div class="row">
                                          <div class="col-xl-6 border-end">
                                              <div class="p-3 pe-2">
                                                  <div
                                                  class="bg-info-transparent p-3 rounded border border-info border-opacity-10">
                                                  <div class="d-flex align-items-center justify-content-center gap-2">
                                                      <span
                                                          class="avatar avatar-md bg-info-transparent svg-info avatar-rounded border-2 border border-opacity-50 border-info">
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                              height="32" fill="#000000" viewBox="0 0 256 256">
                                                              <path
                                                                  d="M254.3,107.91,228.78,56.85a16,16,0,0,0-21.47-7.15L182.44,62.13,130.05,48.27a8.14,8.14,0,0,0-4.1,0L73.56,62.13,48.69,49.7a16,16,0,0,0-21.47,7.15L1.7,107.9a16,16,0,0,0,7.15,21.47l27,13.51,55.49,39.63a8.06,8.06,0,0,0,2.71,1.25l64,16a8,8,0,0,0,7.6-2.1l55.07-55.08,26.42-13.21a16,16,0,0,0,7.15-21.46Zm-54.89,33.37L165,113.72a8,8,0,0,0-10.68.61C136.51,132.27,116.66,130,104,122L147.24,80h31.81l27.21,54.41ZM41.53,64,62,74.22,36.43,125.27,16,115.06Zm116,119.13L99.42,168.61l-49.2-35.14,28-56L128,64.28l9.8,2.59-45,43.68-.08.09a16,16,0,0,0,2.72,24.81c20.56,13.13,45.37,11,64.91-5L188,152.66Zm62-57.87-25.52-51L214.47,64,240,115.06Zm-87.75,92.67a8,8,0,0,1-7.75,6.06,8.13,8.13,0,0,1-1.95-.24L80.41,213.33a7.89,7.89,0,0,1-2.71-1.25L51.35,193.26a8,8,0,0,1,9.3-13l25.11,17.94L126,208.24A8,8,0,0,1,131.82,217.94Z">
                                                              </path>
                                                          </svg>
                                                      </span>
                                                      <p class="h5 mb-0 fw-semibold text-info">Business Plan</p>
                                                  </div>
                                                  <span class="fs-13 mt-2 text-muted d-block text-center">Starter
                                                      Plan</span>
                                                      <p class="h4 mb-4 mt-2 fw-semibold text-center">$99.99<span
                                                          class="fs-13 op-5 ms-1">/
                                                          month</span></p>
                                                          <button class="btn btn-info w-100">Sign Up</button>
                                              </div>
                                              </div>
                                          </div>
                                          <div class="col-xl-6">
                                              <div class="py-3 ps-2 pe-4">
                                                  <div class="text-center">
                                                      <span class="fs-18 fw-semibold text-center">Plan Features</span>
                                                      <div class="d-flex align-items-center text-start mb-2 mt-3">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              Drag and Drop Builder :
                                                          </span>
                                                          <span class="">Unlimited</span>
                                                      </div>
                                                      <div class="d-flex align-items-center text-start mt-3">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              No of Pages :
                                                          </span>
                                                          <span class="">Unlimited</span>
                                                      </div>
                                                      <div class="d-flex align-items-center text-start mt-3">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              Search Functionality :
                                                          </span>
                                                          <span class="badge bg-primary rounded-pill">Upto 50</span>
                                                      </div>
                                                      <div class="d-flex align-items-center text-start mt-3 mb-2">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              Custom Forms :
                                                          </span>
                                                          <span class="">12 %</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="tab-pane p-0 border-0" id="pills-yearly">
                      <div class="row">
                          <div class="col-xl-6">
                              <div class="card custom-card">
                                  <div class="card-body p-0">
                                      <div class="row">
                                          <div class="col-xl-6 border-end">
                                              <div class="p-3 pe-2">
                                                  <div
                                                  class="bg-primary-transparent p-3 rounded border border-primary border-opacity-10">
                                                  <div class="d-flex align-items-center justify-content-center gap-2">
                                                      <span
                                                          class="avatar avatar-md bg-primary-transparent svg-primary avatar-rounded border-2 border border-opacity-50 border-primary">
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                              height="32" fill="#000000" viewBox="0 0 256 256">
                                                              <path
                                                                  d="M243.31,136,144,36.69A15.86,15.86,0,0,0,132.69,32H40a8,8,0,0,0-8,8v92.69A15.86,15.86,0,0,0,36.69,144L136,243.31a16,16,0,0,0,22.63,0l84.68-84.68a16,16,0,0,0,0-22.63Zm-96,96L48,132.69V48h84.69L232,147.31ZM96,84A12,12,0,1,1,84,72,12,12,0,0,1,96,84Z">
                                                              </path>
                                                          </svg>
                                                      </span>
                                                      <p class="h5 mb-0 fw-semibold text-primary text-center">Starter
                                                      </p>
                                                  </div>
                                                  <span class="fs-13 mt-2 text-muted d-block text-center">Starter
                                                      Plan</span>
                                                  <p class="h4 mb-4 mt-2 fw-semibold text-center">$19.99<span
                                                          class="fs-13 op-5 ms-1">/
                                                        Year</span></p>
                                                  <button class="btn btn-primary w-100">Sign Up</button>
                                              </div>
                                              </div>
                                          </div>
                                          <div class="col-xl-6">
                                              <div class="py-3 ps-2 pe-4">
                                                  <div class="text-center">
                                                      <span class="fs-18 fw-semibold text-center">Plan Features</span>
                                                      <div class="d-flex align-items-center text-start mb-2 mt-3">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              Drag and Drop Builder :
                                                          </span>
                                                          <span class="">1</span>
                                                      </div>
                                                      <div class="d-flex align-items-center text-start mt-3">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              No of Pages :
                                                          </span>
                                                          <span class="">1</span>
                                                      </div>
                                                      <div class="d-flex align-items-center text-start mt-3">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              Search Functionality :
                                                          </span>
                                                          <span class="badge bg-secondary rounded-pill">Upto 5</span>
                                                      </div>
                                                      <div class="d-flex align-items-center text-start mt-3 mb-2">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              Custom Forms :
                                                          </span>
                                                          <span class="">3 %</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <div class="card custom-card">
                                  <div class="card-body p-0">
                                      <div class="row">
                                          <div class="col-xl-6 border-end">
                                              <div class="p-3 pe-2">
                                                  <div
                                                  class="bg-secondary-transparent p-3 rounded border border-secondary border-opacity-10">
                                                  <div class="d-flex align-items-center justify-content-center gap-2">
                                                      <span
                                                          class="avatar avatar-md bg-secondary-transparent svg-secondary avatar-rounded border-2 border border-opacity-50 border-secondary">
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                              height="32" fill="#000000" viewBox="0 0 256 256">
                                                              <path
                                                                  d="M235.58,128.84,160,91.06V48a32,32,0,0,0-64,0V91.06L20.42,128.84A8,8,0,0,0,16,136v32a8,8,0,0,0,9.57,7.84L96,161.76v18.93L82.34,194.34A8,8,0,0,0,80,200v32a8,8,0,0,0,11,7.43l37-14.81,37,14.81A8,8,0,0,0,176,232V200a8,8,0,0,0-2.34-5.66L160,180.69V161.76l70.43,14.08A8,8,0,0,0,240,168V136A8,8,0,0,0,235.58,128.84ZM224,158.24l-70.43-14.08A8,8,0,0,0,144,152v32a8,8,0,0,0,2.34,5.66L160,203.31v16.87l-29-11.61a8,8,0,0,0-5.94,0L96,220.18V203.31l13.66-13.65A8,8,0,0,0,112,184V152a8,8,0,0,0-9.57-7.84L32,158.24v-17.3l75.58-37.78A8,8,0,0,0,112,96V48a16,16,0,0,1,32,0V96a8,8,0,0,0,4.42,7.16L224,140.94Z">
                                                              </path>
                                                          </svg>
                                                      </span>
                                                      <p class="h5 mb-0 fw-semibold text-secondary">Growth Plan</p>
                                                  </div>
                                                  <span class="fs-13 mt-2 text-muted d-block text-center">Starter
                                                      Plan</span>
                                                  <p class="h4 mb-4 mt-2 fw-semibold text-center">$49.99<span
                                                          class="fs-13 op-5 ms-1">/
                                                          Year</span></p>
                                                          <button class="btn btn-secondary w-100">Sign Up</button>
                                              </div>
                                              </div>
                                          </div>
                                          <div class="col-xl-6">
                                              <div class="py-3 ps-2 pe-4">
                                                  <div class="text-center">
                                                      <span class="fs-18 fw-semibold text-center">Plan Features</span>
                                                      <div class="d-flex align-items-center text-start mb-2 mt-3">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              Drag and Drop Builder :
                                                          </span>
                                                          <span class="">Unlimited</span>
                                                      </div>
                                                      <div class="d-flex align-items-center text-start mt-3">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              No of Pages :
                                                          </span>
                                                          <span class="">1</span>
                                                      </div>
                                                      <div class="d-flex align-items-center text-start mt-3">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              Search Functionality :
                                                          </span>
                                                          <span class="badge bg-success rounded-pill">Upto 10</span>
                                                      </div>
                                                      <div class="d-flex align-items-center text-start mt-3 mb-2">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              Custom Forms :
                                                          </span>
                                                          <span class="">12 %</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <div class="card custom-card">
                                  <div class="card-body p-0">
                                      <div class="row">
                                          <div class="col-xl-6 border-end">
                                              <div class="p-3 pe-2">
                                                  <div
                                                  class="bg-success-transparent p-3 rounded border border-success border-opacity-10">
                                                  <div class="d-flex align-items-center justify-content-center gap-2">
                                                      <span
                                                          class="avatar avatar-md bg-success-transparent svg-success avatar-rounded border-2 border border-opacity-50 border-success">
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                              height="32" fill="#000000" viewBox="0 0 256 256">
                                                              <path
                                                                  d="M246,98.73l-56-64A8,8,0,0,0,184,32H72a8,8,0,0,0-6,2.73l-56,64a8,8,0,0,0,.17,10.73l112,120a8,8,0,0,0,11.7,0l112-120A8,8,0,0,0,246,98.73ZM222.37,96H180L144,48h36.37ZM74.58,112l30.13,75.33L34.41,112Zm89.6,0L128,202.46,91.82,112ZM96,96l32-42.67L160,96Zm85.42,16h40.17l-70.3,75.33ZM75.63,48H112L76,96H33.63Z">
                                                              </path>
                                                          </svg>
                                                      </span>
                                                      <p class="h5 mb-0 fw-semibold text-success">Pro Plan</p>
                                                  </div>
                                                  <span class="fs-13 mt-2 text-muted d-block text-center">Starter
                                                      Plan</span>
                                                      <p class="h4 mb-4 mt-2 fw-semibold text-center">$79.99<span
                                                          class="fs-13 op-5 ms-1">/
                                                          Year</span></p>
                                                          <button class="btn btn-success w-100">Sign Up</button>
                                              </div>
                                              </div>
                                          </div>
                                          <div class="col-xl-6">
                                              <div class="py-3 ps-2 pe-4">
                                                  <div class="text-center">
                                                      <span class="fs-18 fw-semibold text-center">Plan Features</span>
                                                      <div class="d-flex align-items-center text-start mb-2 mt-3">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              Drag and Drop Builder :
                                                          </span>
                                                          <span class="">Unlimited</span>
                                                      </div>
                                                      <div class="d-flex align-items-center text-start mt-3">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              No of Pages :
                                                          </span>
                                                          <span class="">Unlimited</span>
                                                      </div>
                                                      <div class="d-flex align-items-center text-start mt-3">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              Search Functionality :
                                                          </span>
                                                          <span class="badge bg-info rounded-pill">Upto 25</span>
                                                      </div>
                                                      <div class="d-flex align-items-center text-start mt-3 mb-2">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              Custom Forms :
                                                          </span>
                                                          <span class="">6 %</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <div class="card custom-card">
                                  <div class="card-body p-0">
                                      <div class="row">
                                          <div class="col-xl-6 border-end">
                                              <div class="p-3 pe-2">
                                                  <div
                                                  class="bg-info-transparent p-3 rounded border border-info border-opacity-10">
                                                  <div class="d-flex align-items-center justify-content-center gap-2">
                                                      <span
                                                          class="avatar avatar-md bg-info-transparent svg-info avatar-rounded border-2 border border-opacity-50 border-info">
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                              height="32" fill="#000000" viewBox="0 0 256 256">
                                                              <path
                                                                  d="M254.3,107.91,228.78,56.85a16,16,0,0,0-21.47-7.15L182.44,62.13,130.05,48.27a8.14,8.14,0,0,0-4.1,0L73.56,62.13,48.69,49.7a16,16,0,0,0-21.47,7.15L1.7,107.9a16,16,0,0,0,7.15,21.47l27,13.51,55.49,39.63a8.06,8.06,0,0,0,2.71,1.25l64,16a8,8,0,0,0,7.6-2.1l55.07-55.08,26.42-13.21a16,16,0,0,0,7.15-21.46Zm-54.89,33.37L165,113.72a8,8,0,0,0-10.68.61C136.51,132.27,116.66,130,104,122L147.24,80h31.81l27.21,54.41ZM41.53,64,62,74.22,36.43,125.27,16,115.06Zm116,119.13L99.42,168.61l-49.2-35.14,28-56L128,64.28l9.8,2.59-45,43.68-.08.09a16,16,0,0,0,2.72,24.81c20.56,13.13,45.37,11,64.91-5L188,152.66Zm62-57.87-25.52-51L214.47,64,240,115.06Zm-87.75,92.67a8,8,0,0,1-7.75,6.06,8.13,8.13,0,0,1-1.95-.24L80.41,213.33a7.89,7.89,0,0,1-2.71-1.25L51.35,193.26a8,8,0,0,1,9.3-13l25.11,17.94L126,208.24A8,8,0,0,1,131.82,217.94Z">
                                                              </path>
                                                          </svg>
                                                      </span>
                                                      <p class="h5 mb-0 fw-semibold text-info">Business Plan</p>
                                                  </div>
                                                  <span class="fs-13 mt-2 text-muted d-block text-center">Starter
                                                      Plan</span>
                                                      <p class="h4 mb-4 mt-2 fw-semibold text-center">$129.99<span
                                                          class="fs-13 op-5 ms-1">/
                                                        Year</span></p>
                                                          <button class="btn btn-info w-100">Sign Up</button>
                                              </div>
                                              </div>
                                          </div>
                                          <div class="col-xl-6">
                                              <div class="py-3 ps-2 pe-4">
                                                  <div class="text-center">
                                                      <span class="fs-18 fw-semibold text-center">Plan Features</span>
                                                      <div class="d-flex align-items-center text-start mb-2 mt-3">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              Drag and Drop Builder :
                                                          </span>
                                                          <span class="">Unlimited</span>
                                                      </div>
                                                      <div class="d-flex align-items-center text-start mt-3">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              No of Pages :
                                                          </span>
                                                          <span class="">Unlimited</span>
                                                      </div>
                                                      <div class="d-flex align-items-center text-start mt-3">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              Search Functionality :
                                                          </span>
                                                          <span class="badge bg-primary rounded-pill">Upto 50</span>
                                                      </div>
                                                      <div class="d-flex align-items-center text-start mt-3 mb-2">
                                                          <i class="fe fe-check-circle text-success"></i>
                                                          <span class="ms-2 my-auto flex-fill">
                                                              Custom Forms :
                                                          </span>
                                                          <span class="">12 %</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
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