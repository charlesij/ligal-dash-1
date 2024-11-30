@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Page Header -->
      <div
          class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Job Details</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Jobs</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Job Details</li>
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
      <div class="row">
          <div class="col-xl-8">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="card custom-card job-profile-card">
                          <div class="profile-banner-img">
                              <img src="{{ asset('') }}/assets/images/media/media-3.jpg" class="rounded w-100" alt="...">
                          </div>
                          <div class="card-body p-4 pb-0 position-relative">
                              <span class="avatar avatar-xxl avatar-rounded bg-gray-300 border">
                                  <span class="avatar avatar-xl avatar-rounded bg-white p-2">
                                      <img src="{{ asset('') }}/assets/images/company-logos/8.png" alt="">
                                  </span>
                              </span>
                              <div
                                  class="mt-5 mb-3 d-flex align-items-center flex-wrap gap-3 justify-content-between">
                                  <div>
                                      <h5 class="fw-semibold mb-1">Full Time Ui Developer</h5>
                                      <a href="javascript:void(0);" class="fw-medium text-muted"><i
                                              class="bi bi-building"></i> Spruko Technologies PRIVATE
                                          LIMITED</a>
                                      <div class="d-flex fs-14 mt-3">
                                          <div>
                                              <p class="mb-1"><i class="bi bi-geo-alt me-1"></i>Banglore,
                                                  Karnataka</p>
                                              <p class="mb-0"><i class="bi bi-briefcase me-1"></i>1 - 3+ years
                                                  Experience</p>
                                          </div>
                                          <div class="ms-4">
                                              <p class="mb-1"><i class="bi bi-coin me-1"></i><span
                                                      class="fw-medium">10,000 - 20,000</span> / per month
                                                  (+incentives)</p>
                                              <p class="mb-0"><i class="bi bi-mortarboard  me-1"></i>Graduate
                                                  and Above</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="d-flex mb-0 flex-wrap gap-4">
                                      <div class="btn-list mb-2"> <a href="javascript:void(0);"
                                              class="btn btn-primary"> Apply Now</a> <a
                                              href="javascript:void(0);"
                                              class="btn btn-icon btn-primary-light btn-wave waves-effect waves-light">
                                              <i class="ri-heart-line"></i> </a> <a href="javascript:void(0);"
                                              class="btn btn-icon btn-primary-light btn-wave waves-effect waves-light">
                                              <i class="ri-share-line"></i> </a> </div>
                                  </div>
                              </div>
                                  <div class="row row-cols-xxl-5 row-cols-xl-3 row-cols-md-2 row-cols-1">
                          <div class="col">
                              <div class="p-2 border bg-white d-flex gap-2 rounded mb-4 align-items-center flex-wrap">
                                  <div>
                                      <span class="avatar avatar-md avatar-rounded border lh-1 me-2 bg-primary">
                                          <i class="ri-briefcase-line fs-18"></i>
                                      </span>
                                  </div>
                                  <div>
                                      <span class="text-muted fs-12">Experience Level</span>
                                      <p class="fw-medium fs-14 mb-0">Intermediate</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col">
                              <div class="p-2 border bg-white d-flex gap-2 rounded mb-4 align-items-center flex-wrap">
                                  <div>
                                      <span class="avatar avatar-md avatar-rounded border lh-1 me-2 bg-secondary">
                                          <i class="ri-macbook-line fs-18"></i>
                                      </span>
                                  </div>
                                  <div>
                                      <span class="text-muted fs-12">Job Type</span>
                                      <p class="fw-medium fs-14 mb-0">Contract Base</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col">
                              <div class="p-2 border bg-white d-flex gap-2 rounded mb-4 align-items-center flex-wrap">
                                  <div>
                                      <span class="avatar avatar-md avatar-rounded border lh-1 me-2 bg-success">
                                          <i class="ri-home-office-line fs-18"></i>
                                      </span>
                                  </div>
                                  <div>
                                      <span class="text-muted fs-12">Work Type</span>
                                      <p class="fw-medium fs-14 mb-0">Remote</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col">
                              <div class="p-2 border bg-white d-flex gap-2 rounded mb-4 align-items-center flex-wrap">
                                  <div>
                                      <span class="avatar avatar-md avatar-rounded border lh-1 me-2 bg-info">
                                          <i class="ri-calendar-line fs-18"></i>
                                      </span>
                                  </div>
                                  <div>
                                      <span class="text-muted fs-12">Working Days</span>
                                      <p class="fw-medium fs-14 mb-0">5 Days/week</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col">
                              <div class="p-2 border bg-white d-flex gap-2 rounded mb-4 align-items-center flex-wrap">
                                  <div>
                                      <span class="avatar avatar-md avatar-rounded border lh-1 me-2 bg-warning">
                                          <i class="ri-time-line fs-18"></i>
                                      </span>
                                  </div>
                                  <div>
                                      <span class="text-muted fs-12">Working Hours</span>
                                      <p class="fw-medium fs-14 mb-0">9:30AM-6:00PM</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card custom-card">
                  <div class="card-body">
                      <div class="card-body">
                          <h5 class="fw-medium">Job Description</h5>
                          <p class="op-9">Est amet sit vero sanctus labore no sed ipsum ipsum nonumy. Sit
                              ipsum sanctus ea magna est. Aliquyam sed amet. Kasd diam rebum sit ipsum ipsum
                              erat et kasd.Est amet sit vero sanctus labore no sed ipsum ipsum nonumy vero
                              sanctus labore.A officiis optio temporibus minima facilis...</p>
                          <p class="mb-4 op-9">Sit ipsum sanctus ea magna est. Aliquyam sed amet. Kasd diam
                              rebum sit ipsum ipsum erat et kasd.Est amet sit vero sanctus labore no sed ipsum
                              ipsum nonumy vero sanctus labore..</p>
                          <h5 class="fw-medium">Key Responsibilities</h5>
                          <ol class="list-group border-0 list-unstyled list-group-numbered mb-3">
                              <li class="list-group-item border-0 py-1">Design thoughtful, beautiful, and
                                  useful software user interfaces and experiences in a team environment..</li>
                              <li class="list-group-item border-0 py-1">Create user-centered designs by
                                  considering market analysis, customer feedback, site metrics, and usability
                                  findings.</li>
                              <li class="list-group-item border-0 py-1">Work with stakeholders to plan
                                  projects for effective delivery while maintaining high standards for
                                  design..</li>
                              <li class="list-group-item border-0 py-1">Be a passionate and effective advocate
                                  for design with non-design audiences..</li>
                              <li class="list-group-item border-0 py-1">Use business requirements, user and
                                  market research to assist in developing scenarios, use cases, and high-level
                                  requirements..</li>
                          </ol>
                          <h5 class="fw-medium">Requirements</h5>
                          <ol class="list-group border-0 list-unstyled list-group-numbered mb-3">
                              <li class="list-group-item border-0 py-1">Design thoughtful, beautiful, and
                                  useful software user interfaces and experiences in a team environment..</li>
                              <li class="list-group-item border-0 py-1">Create user-centered designs by
                                  considering market analysis, customer feedback, site metrics, and usability
                                  findings.</li>
                              <li class="list-group-item border-0 py-1">Work with stakeholders to plan
                                  projects for effective delivery while maintaining high standards for
                                  design..</li>
                              <li class="list-group-item border-0 py-1">Be a passionate and effective advocate
                                  for design with non-design audiences..</li>
                              <li class="list-group-item border-0 py-1">Use business requirements, user and
                                  market research to assist in developing scenarios, use cases, and high-level
                                  requirements..</li>
                          </ol>
                      </div>
                  </div>
              </div>
              <div class="card custom-card shadow-none bg-primary-transparent border border-primary border-opacity-10"> <div class="card-body"> <div class="row align-items-center"> <div class="col-lg-6"> <h5 class="fw-medium mb-3"><i class="ri-briefcase-line me-2 p-2 bg-primary text-fixed-white fs-15 lh-1 align-middle rounded-circle"></i>Explore Job Opportunities</h5> <span class="text-muted mb-0 fs-14">Find exciting job opportunities that match your skills and interests. Join us to make a difference!</span> </div> <div class="col-lg-6 text-end"> <a href="javascript:void(0);" class="btn btn-primary btn-lg" role="button"> <i class="ri-share-line me-2 align-middle d-inline-block"></i>Sign up Now </a> </div> </div> </div> </div>
          </div>
          <div class="col-xl-4">
              <div class="card custom-card border overflow-hidden">
                  <div class="card-header justify-content-between">
                      <div class="card-title">
                          Similar Jobs
                      </div>
                      <a href="javascript:void(0);" class="text-primary fw-medium fs-13">
                          View All <i class="fe fe-arrow-right"></i>
                      </a>
                  </div>
                  <div class="card-body p-0">
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item d-flex justify-content-between align-items-center mb-2 flex-wrap">
                              <div class="d-sm-flex">
                                  <span
                                      class="avatar avatar-md bg-primary-transparent border border-primary border-opacity-25">
                                      <i class="ri-reactjs-line fs-20"></i>
                                  </span>
                                  <div class="ms-3 flex-grow-1">
                                      <p class="fw-medium fs-13 mb-1"><a href="javascript:void(0);"> React
                                              Lead Developer</a></p>
                                      <p class="mb-0 me-3"><i class="bi bi-building text-muted"></i> Infratech
                                          PVT LTD</p>
                                  </div>
                              </div>
                              <a href="javascript:void(0);" class="text-muted text-decoration-underline fw-semibold">Apply
                                  Now</a>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center mb-2 flex-wrap">
                              <div class="d-sm-flex">
                                  <span
                                      class="avatar avatar-md bg-secondary-transparent border border-secondary border-opacity-25">
                                      <i class="ri-html5-line fs-20"></i>
                                  </span>
                                  <div class="ms-3 flex-grow-1">
                                      <p class="fw-medium fs-13 mb-1"><a href="javascript:void(0);"> HTML
                                              Developer - Fresher</a></p>
                                      <p class="mb-0 me-3"><i class="bi bi-building text-muted"></i> Wcsrm
                                          Software PRIVATE LIMITED</p>
                                  </div>
                              </div>
                              <a href="javascript:void(0);" class="text-muted text-decoration-underline fw-semibold">Apply
                                  Now</a>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center mb-2 flex-wrap">
                              <div class="d-sm-flex">
                                  <span
                                      class="avatar avatar-md bg-success-transparent border border-success border-opacity-25">
                                      <i class="ri-wordpress-line fs-20"></i>
                                  </span>
                                  <div class="ms-3 flex-grow-1">
                                      <p class="fw-medium fs-13 mb-1"><a href="javascript:void(0);"> Wordpress
                                              Developer - Remote</a></p>
                                      <p class="mb-0 me-3"><i class="bi bi-building text-muted"></i> Hardware
                                          Private Solutions</p>
                                  </div>
                              </div>
                              <a href="javascript:void(0);" class="text-muted text-decoration-underline fw-semibold">Apply
                                  Now</a>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                              <div class="d-sm-flex">
                                  <span
                                      class="avatar avatar-md bg-info-transparent border border-info border-opacity-25">
                                      <i class="ri-vuejs-line fs-20"></i>
                                  </span>
                                  <div class="ms-3 flex-grow-1">
                                      <p class="fw-medium fs-13 mb-1"><a href="javascript:void(0);"> Vuejs
                                              Frontend Developer</a></p>
                                      <p class="mb-0 me-3"><i class="bi bi-building text-muted"></i> G
                                          Technical Solutions</p>
                                  </div>
                              </div>
                              <a href="javascript:void(0);" class="text-muted text-decoration-underline fw-semibold">Apply
                                  Now</a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title"> Popular Tags </div>
                  </div>
                  <div class="card-body py-4">
                      <div class="d-flex align-items-center gap-2 flex-wrap"> <span
                              class="badge bg-light text-default border"> #UI </span> <span
                              class="badge bg-light text-default border"> #UX </span> <span
                              class="badge bg-light text-default border"> #Designer </span> <span
                              class="badge bg-light text-default border"> #Sketch </span> <span
                              class="badge bg-light text-default border"> #Remote </span> <span
                              class="badge bg-light text-default border"> #Office </span> <span
                              class="badge bg-light text-default border"> #Full Time </span> <span
                              class="badge bg-light text-default border"> #Partime </span> <span
                              class="badge bg-light text-default border"> #Job </span> <span
                              class="badge bg-light text-default border"> #Visa </span> <span
                              class="badge bg-light text-default border"> #Fresher </span> <span
                              class="badge bg-light text-default border"> #Experineced </span> <span
                              class="badge bg-light text-default border"> #Graduate </span> <span
                              class="badge bg-light text-default border"> #Service </span> <span
                              class="badge bg-light text-default border"> #Salary </span> </div>
                  </div>
              </div>
              <div class="card custom-card border">
                  <div class="card-header justify-content-between">
                      <div class="card-title">
                          Featured Companies
                      </div>
                      <a href="javascript:void(0);" class="text-primary fw-medium fs-14">
                          View All <i class="fe fe-arrow-right"></i>
                      </a>
                  </div>
                  <div class="card-body p-0">
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item mb-2">
                              <div class="d-sm-flex">
                                  <span class="avatar avatar-md avatar-rounded bg-gray-300 border">
                                      <span class="avatar avatar-sm avatar-rounded bg-white">
                                          <img src="{{ asset('') }}/assets/images/company-logos/3.png" alt="">
                                      </span>
                                  </span>
                                  <div class="ms-3 flex-grow-1">
                                      <p class="fw-medium fs-14 mb-1"><a href="javascript:void(0);">Infratech
                                              PVT LTD</a></p>
                                      <p class="mb-0 me-3"><i class="bi bi-briefcase text-muted"></i> React
                                          Lead Developer </p>
                                  </div>
                              </div>
                          </li>
                          <li class="list-group-item mb-2">
                              <div class="d-sm-flex">
                                  <span class="avatar avatar-md avatar-rounded bg-gray-300 border">
                                      <span class="avatar avatar-sm avatar-rounded bg-white">
                                          <img src="{{ asset('') }}/assets/images/company-logos/6.png" alt="">
                                      </span>
                                  </span>
                                  <div class="ms-3 flex-grow-1">
                                      <p class="fw-medium fs-14 mb-1"><a href="javascript:void(0);">Wcsrm
                                              Software PRIVATE LIMITED</a></p>
                                      <p class="mb-0 me-3"><i class="bi bi-briefcase text-muted"></i> HTML
                                          Developer - Fresher</p>
                                  </div>
                              </div>
                          </li>
                          <li class="list-group-item mb-2">
                              <div class="d-sm-flex">
                                  <span class="avatar avatar-md avatar-rounded bg-gray-300 border">
                                      <span class="avatar avatar-sm avatar-rounded bg-white">
                                          <img src="{{ asset('') }}/assets/images/company-logos/8.png" alt="">
                                      </span>
                                  </span>
                                  <div class="ms-3 flex-grow-1">
                                      <p class="fw-medium fs-14 mb-1"><a href="javascript:void(0);">Hardware
                                              Private Solutions </a></p>
                                      <p class="mb-0 me-3"><i class="bi bi-briefcase text-muted"></i>
                                          Wordpress Developer</p>
                                  </div>
                              </div>
                          </li>
                          <li class="list-group-item mb-2">
                              <div class="d-sm-flex">
                                  <span class="avatar avatar-md avatar-rounded bg-gray-300 border">
                                      <span class="avatar avatar-sm avatar-rounded bg-white">
                                          <img src="{{ asset('') }}/assets/images/company-logos/5.png" alt="">
                                      </span>
                                  </span>
                                  <div class="ms-3 flex-grow-1">
                                      <p class="fw-medium fs-14 mb-1"><a href="javascript:void(0);"> G
                                              Technical Solutions</a></p>
                                      <p class="mb-0 me-3"><i class="bi bi-briefcase text-muted"></i> Vuejs
                                          Frontend Developer</p>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
              <div>
                  <h4 class="fw-medium mb-0">Related Jobs</h4>
                  <p class="">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                  <div class="swiper swiper-related-jobs">
                      <div class="swiper-wrapper">
                          <div class="swiper-slide">
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="card custom-card featured-jobs">
                                          <div class="card-body">
                                              <div class="bg-light border border-bottom-0 p-3">
                                                  <div class="btn-list float-end">
                                                      <a href="javascript:void(0);"
                                                          class="avatar avatar-rounded avatar-sm bg-primary-transparent text-primary"
                                                          data-bs-toggle="tooltip" data-bs-placement="top"
                                                          aria-label="Add to wishlist"
                                                          data-bs-original-title="Add to wishlist"><span><i
                                                                  class="ri-heart-3-line fs-15"></i></span></a>
                                                  </div>
                                                  <div class="d-flex flex-wrap gap-3 align-items-center">
                                                      <span
                                                          class="avatar avatar-lg bg-primary-transparent">
                                                          <i class="ri-html5-fill fs-30 text-primary"></i>
                                                      </span>
                                                      <div>
                                                          <h5 class="fw-medium mb-0 d-flex align-items-center"><a
                                                                  href="javascript:void(0);"> HTML Developer - Fresher</a></h5>
                                                          <a href="javascript:void(0);">Spotech Technical Solutions</a>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="border p-3">
                                                  <div class="popular-tags d-flex flex-wrap gap-2 mb-3">
                                                      <a href="javascript:void(0);"
                                                          class="badge border bg-light text-default"><i
                                                              class="bi bi-geo-alt text-muted me-1"></i> Hyderabad</a>
                                                      <a href="javascript:void(0);"
                                                          class="badge border bg-light text-default"><i
                                                              class="bi bi-briefcase text-muted me-1"></i> 13 Openings</a>
                                                      <a href="javascript:void(0);"
                                                          class="badge border bg-light text-default"><i
                                                              class="bi bi-mortarboard text-muted me-1"></i> Graduate</a>
                                                      <a href="javascript:void(0);"
                                                          class="badge border bg-light text-default"><i
                                                              class="bi bi-clock text-muted me-1"></i> Min - 2Years</a>
                                                      <a href="javascript:void(0);"
                                                          class="badge border bg-light text-default"><i
                                                              class="bi bi-moon-stars text-muted me-1"></i> flexible-shift</a>
                                                  </div>
                                                  <div class="d-flex justify-content-between">
                                                      <h5 class="fw-medium mb-0">$25,000/<span class="text-muted fs-12">Month</span></h5>
                                                      <a href="javascript:void(0);"
                                                          class="btn btn-primary btn-sm fw-medium fs-14 d-inline-flex">
                                                          Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="swiper-slide">
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="card custom-card featured-jobs">
                                          <div class="card-body">
                                              <div class="bg-light p-3 border border-bottom-0">
                                                  <div class="btn-list float-end">
                                                      <a href="javascript:void(0);"
                                                      class="avatar avatar-rounded avatar-sm bg-primary-transparent"
                                                      data-bs-toggle="tooltip" data-bs-placement="top"
                                                      aria-label="Add to wishlist"
                                                      data-bs-original-title="Add to wishlist"><span><i
                                                              class="ri-heart-3-fill text-primary fs-15"></i></span></a>
                                                  </div>
                                                  <div class="d-flex flex-wrap gap-3 align-items-center">
                                                      <span
                                                      class="avatar avatar-lg bg-secondary-transparent">
                                                      <i class="ri-reactjs-line fs-30 text-secondary"></i>
                                                  </span>
                                                      <div>
                                                          <h5 class="fw-medium mb-0 d-flex align-items-center"><a
                                                                  href="javascript:void(0);"> React Lead Developer</a></h5>
                                                          <a href="javascript:void(0);">Infratech PVT LTD</a>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="border p-3">
                                                  <div class="popular-tags d-flex flex-wrap gap-2 mb-3">
                                                      <a href="javascript:void(0);"
                                                          class="badge border bg-light text-default"><i
                                                              class="bi bi-geo-alt text-muted me-1"></i> Hyderabad</a>
                                                      <a href="javascript:void(0);"
                                                          class="badge border bg-light text-default"><i
                                                              class="bi bi-briefcase text-muted me-1"></i> 13 Openings</a>
                                                      <a href="javascript:void(0);"
                                                          class="badge border bg-light text-default"><i
                                                              class="bi bi-mortarboard text-muted me-1"></i> Graduate</a>
                                                      <a href="javascript:void(0);"
                                                          class="badge border bg-light text-default"><i
                                                              class="bi bi-clock text-muted me-1"></i> Min - 2Years</a>
                                                      <a href="javascript:void(0);"
                                                          class="badge border bg-light text-default"><i
                                                              class="bi bi-moon-stars text-muted me-1"></i> flexible-shift</a>
                                                  </div>
                                                  <div class="d-flex justify-content-between">
                                                      <h5 class="fw-medium mb-0">$17,000/<span class="text-muted fs-12">Month</span></h5>
                                                      <a href="javascript:void(0);"
                                                          class="btn btn-primary btn-sm fw-medium fs-14 d-inline-flex">
                                                          Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="swiper-slide">
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="card custom-card featured-jobs">
                                          <div class="card-body">
                                              <div class="bg-light p-3 border border-bottom-0">
                                                  <div class="btn-list float-end">
                                                      <a href="javascript:void(0);"
                                                      class="avatar avatar-rounded avatar-sm bg-primary-transparent text-primary"
                                                      data-bs-toggle="tooltip" data-bs-placement="top"
                                                      aria-label="Add to wishlist"
                                                      data-bs-original-title="Add to wishlist"><span><i
                                                              class="ri-heart-3-line fs-15"></i></span></a>
                                                  </div>
                                                  <div class="d-flex flex-wrap gap-3 align-items-center">
                                                      <span
                                                      class="avatar avatar-lg bg-success-transparent">
                                                      <i class="ri-vuejs-line fs-30 text-success"></i>
                                                  </span>
                                                      <div>
                                                          <h5 class="fw-medium mb-0 d-flex align-items-center"><a
                                                                  href="javascript:void(0);"> Vuejs Frontend Developer</a></h5>
                                                          <a href="javascript:void(0);">G Technical Solutions</a>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="border p-3">
                                                  <div class="popular-tags d-flex flex-wrap gap-2 mb-3">
                                                      <a href="javascript:void(0);"
                                                          class="badge border bg-light text-default"><i
                                                              class="bi bi-geo-alt text-muted me-1"></i> Hyderabad</a>
                                                      <a href="javascript:void(0);"
                                                          class="badge border bg-light text-default"><i
                                                              class="bi bi-briefcase text-muted me-1"></i> 13 Openings</a>
                                                      <a href="javascript:void(0);"
                                                          class="badge border bg-light text-default"><i
                                                              class="bi bi-mortarboard text-muted me-1"></i> Graduate</a>
                                                      <a href="javascript:void(0);"
                                                          class="badge border bg-light text-default"><i
                                                              class="bi bi-clock text-muted me-1"></i> Min - 2Years</a>
                                                      <a href="javascript:void(0);"
                                                          class="badge border bg-light text-default"><i
                                                              class="bi bi-moon-stars text-muted me-1"></i> flexible-shift</a>
                                                  </div>
                                                  <div class="d-flex justify-content-between">
                                                      <h5 class="fw-medium mb-0">$16,000/<span class="text-muted fs-12">Month</span></h5>
                                                      <a href="javascript:void(0);"
                                                          class="btn btn-primary btn-sm fw-medium fs-14 d-inline-flex">
                                                          Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="swiper-button-next"></div>
                      <div class="swiper-button-prev"></div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End::row-1 -->

  </div>
</div>
<!-- End::app-content -->

@endsection