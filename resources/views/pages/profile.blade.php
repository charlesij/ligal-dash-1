@extends('layout.main')
@section('content')

        <!-- Start::app-content -->
        <div class="main-content app-content">
          <div class="container-fluid">

              <!-- Page Header -->
              <div
                  class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                  <div>
                      <h1 class="page-title fw-medium fs-18 mb-2">Profile</h1>
                      <div class="">
                          <nav>
                              <ol class="breadcrumb mb-0">
                                  <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Profile</li>
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

              <!-- Start:: row-1 -->
              <div class="row">
                  <div class="col-xl-6">
                      <div class="row">
                          <div class="col-xl-12">
                              <div class="card custom-card profile-card">
                                  <div class="card-body pb-0 position-relative">
                                      <div class="profile-banner-img">
                                          <img src="{{ asset('') }}/assets/images/media/media-74.jpg" class="rounded w-100" alt="...">
                                      </div>
                                      <span class="avatar avatar-xxl avatar-rounded bg-light">
                                          <img src="{{ asset('') }}/assets/images/faces/2.jpg" alt="">
                                      </span>
                                      <div
                                          class="mt-4 mb-0 p-4 d-flex align-items-center flex-wrap gap-3 justify-content-between">
                                          <div>
                                              <h5 class="fw-semibold mb-3">Abigail Scott</h5>
                                              <span class="d-block fw-medium text-muted mb-1">Chief Executive Officer
                                                  (C.E.O)</span>
                                              <p class="fs-12 mb-0 fw-medium text-muted"> <span class="me-3"><i
                                                          class="ri-building-line me-1 align-middle"></i>Georgia</span>
                                                  <span><i class="ri-map-pin-line me-1 align-middle"></i>Washington
                                                      D.C</span>
                                              </p>
                                          </div>
                                          <div class="d-flex mb-0 flex-wrap gap-4">
                                              <div
                                                  class="py-2 ps-2 pe-3 rounded-pill d-flex align-items-center border gap-3">
                                                  <div class="main-card-icon primary">
                                                      <div
                                                          class="avatar avatar-md avatar-rounded bg-primary-transparent svg-primary border border-primary border-opacity-25">
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                              height="32" fill="#000000" viewBox="0 0 256 256">
                                                              <path
                                                                  d="M224,118.31V200a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8V118.31h0A191.14,191.14,0,0,0,128,144,191.08,191.08,0,0,0,224,118.31Z"
                                                                  opacity="0.2"></path>
                                                              <path
                                                                  d="M104,112a8,8,0,0,1,8-8h32a8,8,0,0,1,0,16H112A8,8,0,0,1,104,112ZM232,72V200a16,16,0,0,1-16,16H40a16,16,0,0,1-16-16V72A16,16,0,0,1,40,56H80V48a24,24,0,0,1,24-24h48a24,24,0,0,1,24,24v8h40A16,16,0,0,1,232,72ZM96,56h64V48a8,8,0,0,0-8-8H104a8,8,0,0,0-8,8ZM40,72v41.62A184.07,184.07,0,0,0,128,136a184,184,0,0,0,88-22.39V72ZM216,200V131.63A200.25,200.25,0,0,1,128,152a200.19,200.19,0,0,1-88-20.36V200H216Z">
                                                              </path>
                                                          </svg>
                                                      </div>
                                                  </div>
                                                  <div>
                                                      <p class="fw-semibold h6 mb-0">113</p>
                                                      <p class="mb-0 fs-12 text-muted fw-medium">Projects</p>
                                                  </div>
                                              </div>
                                              <div
                                                  class="py-2 ps-2 pe-3 rounded-pill d-flex align-items-center border  gap-3">
                                                  <div class="main-card-icon secondary">
                                                      <div
                                                          class="avatar avatar-rounded avatar-md bg-secondary-transparent svg-secondary border border-secondary border-opacity-25">
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                              height="32" fill="#000000" viewBox="0 0 256 256">
                                                              <path
                                                                  d="M136,108A52,52,0,1,1,84,56,52,52,0,0,1,136,108Z"
                                                                  opacity="0.2"></path>
                                                              <path
                                                                  d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z">
                                                              </path>
                                                          </svg>
                                                      </div>
                                                  </div>
                                                  <div>
                                                      <p class="fw-semibold h6 mb-0">23.86%</p>
                                                      <p class="mb-0 fs-12 text-muted fw-medium">Success Rate</p>
                                                  </div>
                                              </div>
                                              <div
                                                  class="py-2 ps-2 pe-3 rounded-pill d-flex align-items-center border gap-2">
                                                  <div class="main-card-icon success">
                                                      <div
                                                          class="avatar avatar-rounded avatar-md bg-success-transparent svg-success border border-success border-opacity-25">
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                              height="32" fill="#000000" viewBox="0 0 256 256">
                                                              <path
                                                                  d="M208,40H48a8,8,0,0,0-8,8V208a8,8,0,0,0,8,8H208a8,8,0,0,0,8-8V48A8,8,0,0,0,208,40ZM57.78,216A72,72,0,0,1,128,160a40,40,0,1,1,40-40,40,40,0,0,1-40,40,72,72,0,0,1,70.22,56Z"
                                                                  opacity="0.2"></path>
                                                              <path
                                                                  d="M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120ZM68.67,208A64.45,64.45,0,0,1,87.8,182.2a64,64,0,0,1,80.4,0A64.45,64.45,0,0,1,187.33,208ZM208,208h-3.67a79.87,79.87,0,0,0-46.69-50.29,48,48,0,1,0-59.28,0A79.87,79.87,0,0,0,51.67,208H48V48H208V208Z">
                                                              </path>
                                                          </svg>
                                                      </div>
                                                  </div>
                                                  <div>
                                                      <p class="fw-semibold h6 mb-0">$12.6K</p>
                                                      <p class="mb-0 fs-12 text-muted fw-medium">Earning</p>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <ul class="list-group list-group-flush">
                                          <li class="list-group-item p-3 border-top">
                                              <span class="fw-medium fs-15 d-block mb-3"><span
                                                      class="me-1"></span>Personal Bio :</span>
                                              <p class="text-muted mb-2">
                                                  I’m Abigail Scott, a passionate UI developer based in Hyderabad with a deep appreciation for the art of creating engaging and user-centric digital experiences. My background in Computer Engineering fuels my creativity and technical expertise, allowing me to bring innovative solutions to every project I tackle.
                                              </p>
                                              <p class="text-muted mb-0">
                                                  With a love for reading and a fascination with the beauty of Spruko, I find inspiration in both my hobbies and my work. My career journey has been marked by significant milestones, from winning accolades in college to securing a rewarding position in the industry. Each step has been a thrilling adventure, and I’m always excited to embrace new challenges and opportunities for growth.
                                              </p>
                                          </li>
                                          <li class="list-group-item p-3">
                                              <span class="fw-medium fs-15 d-block mb-3">Skills :</span>
                                              <div class="w-75">
                                                  <a href="javascript:void(0);">
                                                      <span class="badge bg-light text-muted m-1 border">Project
                                                          Management</span>
                                                  </a>
                                                  <a href="javascript:void(0);">
                                                      <span class="badge bg-light text-muted m-1 border">Data
                                                          Analysis</span>
                                                  </a>
                                                  <a href="javascript:void(0);">
                                                      <span class="badge bg-light text-muted m-1 border">Marketing
                                                          Strategy</span>
                                                  </a>
                                                  <a href="javascript:void(0);">
                                                      <span class="badge bg-light text-muted m-1 border">Graphic
                                                          Design</span>
                                                  </a>
                                                  <a href="javascript:void(0);">
                                                      <span class="badge bg-light text-muted m-1 border">Content
                                                          Creation</span>
                                                  </a>
                                                  <a href="javascript:void(0);">
                                                      <span class="badge bg-light text-muted m-1 border">Market
                                                          Research</span>
                                                  </a>
                                                  <a href="javascript:void(0);">
                                                      <span class="badge bg-light text-muted m-1 border">Client
                                                          Relations</span>
                                                  </a>
                                                  <a href="javascript:void(0);">
                                                      <span class="badge bg-light text-muted m-1 border">Event
                                                          Planning</span>
                                                  </a>
                                                  <a href="javascript:void(0);">
                                                      <span class="badge bg-light text-muted m-1 border">Budgeting
                                                          and
                                                          Finance</span>
                                                  </a>
                                                  <a href="javascript:void(0);">
                                                      <span class="badge bg-light text-muted m-1 border">Negotiation
                                                          Skills</span>
                                                  </a>
                                                  <a href="javascript:void(0);">
                                                      <span class="badge bg-light text-muted m-1 border">Team
                                                          Collaboration</span>
                                                  </a>
                                                  <a href="javascript:void(0);">
                                                      <span
                                                          class="badge bg-light text-muted m-1 border">Adaptability</span>
                                                  </a>
                                              </div>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <div class="card custom-card overflow-hidden">
                                  <div class="card-header">
                                      <div class="card-title">
                                          Personal Info
                                      </div>
                                  </div>
                                  <div class="card-body p-0">
                                      <ul class="list-group list-group-flush">
                                          <li class="list-group-item">
                                              <div><span class="fw-medium me-2">Name :</span><span
                                                      class="text-muted">Leo
                                                      Phillips</span></div>
                                          </li>
                                          <li class="list-group-item">
                                              <div><span class="fw-medium me-2">Email :</span><span
                                                      class="text-muted">your.email@example.com</span></div>
                                          </li>
                                          <li class="list-group-item">
                                              <div><span class="fw-medium me-2">Phone :</span><span
                                                      class="text-muted">+1
                                                      (555) 123-4567</span></div>
                                          </li>
                                          <li class="list-group-item">
                                              <div><span class="fw-medium me-2">Designation :</span><span
                                                      class="text-muted">C.E.O</span></div>
                                          </li>
                                          <li class="list-group-item">
                                              <div><span class="fw-medium me-2">Skills :</span><span class="w-75">
                                                      <a href="javascript:void(0);">
                                                          <span
                                                              class="badge bg-primary-transparent text-primary text-muted m-1 border border-primary border-opacity-25">Project
                                                              Management</span>
                                                      </a>
                                                      <a href="javascript:void(0);">
                                                          <span
                                                              class="badge bg-secondary-transparent text-secondary text-muted m-1 border border-secondary border-opacity-25">Data
                                                              Analysis</span>
                                                      </a>
                                                  </span>
                                              </div>
                                          </li>
                                          <li class="list-group-item">
                                              <div><span class="fw-medium me-2">Experience :</span><span
                                                      class="text-muted">12
                                                      Years</span></div>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <div class="card custom-card overflow-hidden">
                                  <div class="card-header justify-content-between">
                                      <div class="card-title">
                                          Followers
                                      </div>
                                      <a href="javascript:void(0);" class="fs-12 text-muted"> View All<i
                                              class="ti ti-arrow-narrow-right ms-1"></i> </a>
                                  </div>
                                  <div class="card-body p-0">
                                      <ul class="list-group list-group-flush">
                                          <li class="list-group-item">
                                              <div class="d-flex align-items-center gap-2">
                                                  <div class="lh-1">
                                                      <span class="avatar avatar-sm avatar-rounded">
                                                          <img src="{{ asset('') }}/assets/images/faces/1.jpg" alt="">
                                                      </span>
                                                  </div>
                                                  <div class="flex-fill">
                                                      <span class="fw-medium">Amelia Turner</span>
                                                  </div>
                                                  <div>
                                                      <button class="btn btn-sm btn-icon btn-primary-light"> <i
                                                              class="ri-add-line lh-1 align-middle"></i> </button>
                                                  </div>
                                              </div>
                                          </li>
                                          <li class="list-group-item">
                                              <div class="d-flex align-items-center gap-2">
                                                  <div class="lh-1">
                                                      <span class="avatar avatar-sm avatar-rounded">
                                                          <img src="{{ asset('') }}/assets/images/faces/14.jpg" alt="">
                                                      </span>
                                                  </div>
                                                  <div class="flex-fill">
                                                      <span class="fw-medium">Henry Morgan</span>
                                                  </div>
                                                  <div>
                                                      <button class="btn btn-sm btn-icon btn-primary-light"> <i
                                                              class="ri-add-line lh-1 align-middle"></i> </button>
                                                  </div>
                                              </div>
                                          </li>
                                          <li class="list-group-item">
                                              <div class="d-flex align-items-center gap-2">
                                                  <div class="lh-1">
                                                      <span class="avatar avatar-sm avatar-rounded">
                                                          <img src="{{ asset('') }}/assets/images/faces/3.jpg" alt="">
                                                      </span>
                                                  </div>
                                                  <div class="flex-fill">
                                                      <span class="fw-medium">Aurora Reed</span>
                                                  </div>
                                                  <div>
                                                      <button class="btn btn-sm btn-icon btn-primary-light"> <i
                                                              class="ri-add-line lh-1 align-middle"></i> </button>
                                                  </div>
                                              </div>
                                          </li>
                                          <li class="list-group-item">
                                              <div class="d-flex align-items-center gap-2">
                                                  <div class="lh-1">
                                                      <span class="avatar avatar-sm avatar-rounded">
                                                          <img src="{{ asset('') }}/assets/images/faces/10.jpg" alt="">
                                                      </span>
                                                  </div>
                                                  <div class="flex-fill">
                                                      <span class="fw-medium">Leo Phillips</span>
                                                  </div>
                                                  <div>
                                                      <button class="btn btn-sm btn-icon btn-primary-light"> <i
                                                              class="ri-add-line lh-1 align-middle"></i> </button>
                                                  </div>
                                              </div>
                                          </li>
                                          <li class="list-group-item">
                                              <div class="d-flex align-items-center gap-2">
                                                  <div class="lh-1">
                                                      <span class="avatar avatar-sm avatar-rounded">
                                                          <img src="{{ asset('') }}/assets/images/faces/5.jpg" alt="">
                                                      </span>
                                                  </div>
                                                  <div class="flex-fill">
                                                      <span class="fw-medium">Ava Taylor</span>
                                                  </div>
                                                  <div>
                                                      <button class="btn btn-sm btn-icon btn-primary-light"> <i
                                                              class="ri-add-line lh-1 align-middle"></i> </button>
                                                  </div>
                                              </div>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-6">
                      <div class="card custom-card">
                          <div class="card-header">
                              <ul class="nav nav-pills mb-0 gap-2" id="myTab" role="tablist">
                                  <li class="nav-item" role="presentation">
                                      <button class="nav-link bg-light active" id="profile-about-tab"
                                          data-bs-toggle="tab" data-bs-target="#profile-about-tab-pane" type="button"
                                          role="tab" aria-controls="profile-about-tab-pane" aria-selected="true"><i
                                              class="ri-shield-user-line me-1 fs-16"></i>About</button>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                      <button class="nav-link bg-light" id="edit-profile-tab" data-bs-toggle="tab"
                                          data-bs-target="#edit-profile-tab-pane" type="button" role="tab"
                                          aria-controls="edit-profile-tab-pane" aria-selected="true"><i
                                              class="ri-edit-box-line me-1 fs-16"></i>Edit
                                          Profile</button>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                      <button class="nav-link bg-light" id="gallery-tab" data-bs-toggle="tab"
                                          data-bs-target="#gallery-tab-pane" type="button" role="tab"
                                          aria-controls="gallery-tab-pane" aria-selected="false"><i
                                              class="ri-image-2-line me-1 fs-16"></i>Gallery</button>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                      <button class="nav-link bg-light" id="friends-tab" data-bs-toggle="tab"
                                          data-bs-target="#friends-tab-pane" type="button" role="tab"
                                          aria-controls="friends-tab-pane" aria-selected="false"><i
                                              class="ri-group-line me-1 fs-16"></i>Friends</button>
                                  </li>
                              </ul>
                          </div>
                          <div class="card-body p-0">
                              <div class="tab-content" id="profile-tabs">
                                  <div class="tab-pane show active p-0 border-0" id="profile-about-tab-pane"
                                      role="tabpanel" aria-labelledby="profile-about-tab" tabindex="0">
                                      <div class="card custom-card overflow-hidden shadow-none mb-0">
                                          <div class="card-body p-0">
                                              <ul class="list-group list-group-flush">
                                                  <li class="list-group-item p-4">
                                                      <span class="fw-medium fs-15 d-block mb-3"><span
                                                              class="me-1"></span>Experience :</span>
                                                      <ul class="list-unstyled profile-timeline">
                                                          <li>
                                                              <div> <span
                                                                      class="avatar avatar-md bg-primary-transparent avatar-rounded profile-timeline-avatar">
                                                                      <span class="avatar avatar-sm bg-primary avatar-rounded"><i class="ri-code-s-slash-fill fs-16"></i></span>
                                                                       </span>
                                                                  <div class="p-3 bg-light rounded">
                                                                      <span class="badge bg-primary rounded-pill float-end">2019-2021</span>
                                                                     <h6 class="fw-semibold mb-0">Web Developer</h6>
                                                                     <p class="mb-2">SprukoTechnologies.pvt.lmt</p>
                                                                     <p class="mb-0 text-muted">As a Web Developer, you will design, build, and maintain websites and web applications that deliver a seamless user experience. You will work with a variety of technologies, including HTML, CSS, JavaScript, and modern frameworks, to create responsive and visually appealing web solutions.</p>
                                                                  </div>
                                                              </div>
                                                          </li>
                                                          <li>
                                                              <div> <span
                                                                  class="avatar avatar-md bg-secondary-transparent avatar-rounded profile-timeline-avatar">
                                                                  <span class="avatar avatar-sm bg-secondary avatar-rounded"><i class="ri-reactjs-line fs-16"></i></span>
                                                                   </span>
                                                              <div class="p-3 bg-light rounded">
                                                                  <span class="badge bg-secondary rounded-pill float-end">2022-2023</span>
                                                                 <h6 class="fw-semibold mb-0">React Developer</h6>
                                                                 <p class="mb-2">Websynergies.pvt.lmt</p>
                                                                 <p class="mb-0 text-muted">
                                                                  As a React Developer, you will be responsible for building and maintaining user interfaces for web applications using React.js. Your role involves translating design concepts into interactive, high-performance front-end components.
                                                                 </p>
                                                              </div>
                                                          </div>
                                                          </li>
                                                          <li>
                                                              <div> <span
                                                                  class="avatar avatar-md bg-success-transparent avatar-rounded profile-timeline-avatar">
                                                                  <span class="avatar avatar-sm bg-success avatar-rounded"><i class="ri-color-filter-line fs-16"></i></span>
                                                                   </span>
                                                              <div class="p-3 bg-light rounded">
                                                                  <span class="badge bg-success rounded-pill float-end">2023-2024</span>
                                                                 <h6 class="fw-semibold mb-0">Web Designer</h6>
                                                                 <p class="mb-2">Santhikalnsi.pvt.lmt</p>
                                                                 <p class="mb-2 text-muted">
                                                                  As a Web Designer, you will be responsible for creating visually appealing and user-friendly website designs
                                                              </p>
                                                              <div class="d-flex gap-2 flex-wrap">
                                                                  <div class="d-flex align-items-center p-2 border bg-white rounded">
                                                                      <div class="me-0">
                                                                          <span class="avatar avatar-md svg-primary text-primary">
                                                                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                                                                                  <rect width="256" height="256" fill="none"></rect>
                                                                                  <polygon points="152 32 152 88 208 88 152 32" opacity="0.2"></polygon>
                                                                                  <path d="M48,112V40a8,8,0,0,1,8-8h96l56,56v24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
                                                                                  <polyline points="152 32 152 88 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
                                                                                  <polyline points="216 152 184 152 184 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
                                                                                  <line x1="208" y1="184" x2="184" y2="184" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                                                                  <path d="M48,192H64a20,20,0,0,0,0-40H48v56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
                                                                                  <path d="M112,152v56h16a28,28,0,0,0,0-56Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
                                                                              </svg>
                                                                          </span>
                                                                      </div>
                                                                      <div>
                                                                          <a href="javascript:void(0);">DOC-Exp1.doc</a>
                                                                      </div>
                                                                      <a href="javascript:void(0);"><i class="ri-download-line fs-16 text-muted ms-2"></i></a>
                                                                  </div>
                                                                  <div class="d-flex align-items-center p-2 border bg-white rounded">
                                                                      <div class="me-0">
                                                                          <span class="avatar avatar-md svg-primary text-primary">
                                                                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                                                                                  <rect width="256" height="256" fill="none"></rect>
                                                                                  <polygon points="152 32 152 88 208 88 152 32" opacity="0.2"></polygon>
                                                                                  <path d="M48,112V40a8,8,0,0,1,8-8h96l56,56v24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
                                                                                  <polyline points="152 32 152 88 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
                                                                                  <polyline points="216 152 184 152 184 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
                                                                                  <line x1="208" y1="184" x2="184" y2="184" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                                                                  <path d="M48,192H64a20,20,0,0,0,0-40H48v56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
                                                                                  <path d="M112,152v56h16a28,28,0,0,0,0-56Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
                                                                              </svg>
                                                                          </span>
                                                                      </div>
                                                                      <div>
                                                                          <a href="javascript:void(0);">DOC-Exp2.doc</a>
                                                                      </div>
                                                                      <a href="javascript:void(0);"><i class="ri-download-line fs-16 text-muted ms-2"></i></a>
                                                                  </div>
                                                              </div>
                                                              </div>
                                                          </div>
                                                          </li>
                                                      </ul>

                                                  </li>
                                                  <li class="list-group-item p-4">
                                                      <span class="fw-medium fs-15 d-block mb-3">Contact Information
                                                          :</span>
                                                      <div class="text-muted">
                                                          <p class="mb-2">
                                                              <span
                                                                  class="avatar avatar-sm avatar-rounded text-muted">
                                                                  <i class="ri-mail-line align-middle fs-15"></i>
                                                              </span>
                                                              <span class="fw-medium text-default">Email : </span>
                                                              your.email@example.com
                                                          </p>
                                                          <p class="mb-2">
                                                              <span
                                                                  class="avatar avatar-sm avatar-rounded text-muted">
                                                                  <i class="ri-phone-line align-middle fs-15"></i>
                                                              </span>
                                                              <span class="fw-medium text-default">Phone : </span> +1
                                                              (555)
                                                              123-4567
                                                          </p>
                                                          <p class="mb-2">
                                                              <span
                                                                  class="avatar avatar-sm avatar-rounded text-muted">
                                                                  <i class="ri-map-pin-line align-middle fs-15"></i>
                                                              </span>
                                                              <span class="fw-medium text-default">Website : </span>
                                                              www.yourwebsite.com
                                                          </p>
                                                          <p class="mb-0">
                                                              <span
                                                                  class="avatar avatar-sm avatar-rounded text-muted">
                                                                  <i class="ri-building-line align-middle fs-15"></i>
                                                              </span>
                                                              <span class="fw-medium text-default">Location : </span>
                                                              City,
                                                              Country
                                                          </p>
                                                      </div>
                                                  </li>
                                                  <li class="list-group-item p-4">
                                                      <span class="fw-medium fs-15 d-block mb-3">Social Media :</span>
                                                      <div class="d-flex align-items-center gap-4 flex-wrap">
                                                          <div class="d-flex align-items-center gap-3">
                                                              <div>
                                                                  <span
                                                                      class="avatar avatar-md bg-primary-transparent"><i
                                                                          class="ri-github-line fs-4"></i></span>
                                                              </div>
                                                              <div>
                                                                  <span class="d-block fw-medium">Github</span>
                                                                  <span
                                                                      class="text-muted fw-medium">github.com/wcsrm</span>
                                                              </div>
                                                          </div>
                                                          <div class="d-flex align-items-center gap-3">
                                                              <div>
                                                                  <span
                                                                      class="avatar avatar-md bg-secondary-transparent"><i
                                                                          class="ri-twitter-x-fill fs-4"></i></span>
                                                              </div>
                                                              <div>
                                                                  <span class="d-block fw-medium">Twitter</span>
                                                                  <span
                                                                      class="text-muted fw-medium">twitter.com/wcsrm.me</span>
                                                              </div>
                                                          </div>
                                                          <div class="d-flex align-items-center gap-3">
                                                              <div>
                                                                  <span
                                                                      class="avatar avatar-md bg-success-transparent"><i class="ri-linkedin-box-line fs-4"></i></span>
                                                              </div>
                                                              <div>
                                                                  <span class="d-block fw-medium">Linkedin</span>
                                                                  <span
                                                                      class="text-muted fw-medium">linkedin.com/in/wcsrm</span>
                                                              </div>
                                                          </div>
                                                          <div class="d-flex align-items-center gap-3">
                                                              <div>
                                                                  <span
                                                                      class="avatar avatar-md bg-info-transparent"><i class="ri-briefcase-2-line fs-4"></i></span>
                                                              </div>
                                                              <div>
                                                                  <span class="d-block fw-medium">My Portfolio</span>
                                                                  <span class="text-muted fw-medium">wcsrm.com/</span>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="tab-pane p-0 border-0" id="edit-profile-tab-pane" role="tabpanel"
                                      aria-labelledby="edit-profile-tab" tabindex="0">
                                      <div class="card custom-card overflow-hidden">
                                          <div class="card-body p-0">
                                              <ul class="list-group list-group-flush">
                                                  <li class="list-group-item p-4">
                                                      <span class="fw-medium fs-15 d-block mb-3">Personal Info
                                                          :</span>
                                                      <div class="row gy-4 align-items-center">
                                                          <div class="col-xl-3">
                                                              <div class="lh-1">
                                                                  <span class="fw-medium">User Name :</span>
                                                              </div>
                                                          </div>
                                                          <div class="col-xl-9">
                                                              <input type="text" class="form-control"
                                                                  placeholder="Placeholder" value="Leo Phillips">
                                                          </div>
                                                          <div class="col-xl-3">
                                                              <div class="lh-1">
                                                                  <span class="fw-medium">First Name :</span>
                                                              </div>
                                                          </div>
                                                          <div class="col-xl-9">
                                                              <input type="text" class="form-control"
                                                                  placeholder="Placeholder" value="Leo">
                                                          </div>
                                                          <div class="col-xl-3">
                                                              <div class="lh-1">
                                                                  <span class="fw-medium">Last Name :</span>
                                                              </div>
                                                          </div>
                                                          <div class="col-xl-9">
                                                              <input type="text" class="form-control"
                                                                  placeholder="Placeholder" value="Phillips">
                                                          </div>
                                                          <div class="col-xl-3">
                                                              <div class="lh-1">
                                                                  <span class="fw-medium">Designation :</span>
                                                              </div>
                                                          </div>
                                                          <div class="col-xl-9">
                                                              <input type="text" class="form-control"
                                                                  placeholder="Placeholder"
                                                                  value="Chief Executive Officer (C.E.O)">
                                                          </div>
                                                      </div>
                                                  </li>
                                                  <li class="list-group-item p-4">
                                                      <span class="fw-medium fs-15 d-block mb-3">Contact Info :</span>
                                                      <div class="row gy-4 align-items-center">
                                                          <div class="col-xl-3">
                                                              <div class="lh-1">
                                                                  <span class="fw-medium">Email :</span>
                                                              </div>
                                                          </div>
                                                          <div class="col-xl-9">
                                                              <input type="email" class="form-control"
                                                                  placeholder="Placeholder"
                                                                  value="your.email@example.com">
                                                          </div>
                                                          <div class="col-xl-3">
                                                              <div class="lh-1">
                                                                  <span class="fw-medium">Phone :</span>
                                                              </div>
                                                          </div>
                                                          <div class="col-xl-9">
                                                              <input type="text" class="form-control"
                                                                  placeholder="Placeholder" value="+1 (555) 123-4567">
                                                          </div>
                                                          <div class="col-xl-3">
                                                              <div class="lh-1">
                                                                  <span class="fw-medium">Website :</span>
                                                              </div>
                                                          </div>
                                                          <div class="col-xl-9">
                                                              <input type="text" class="form-control"
                                                                  placeholder="Placeholder"
                                                                  value="www.yourwebsite.com">
                                                          </div>
                                                          <div class="col-xl-3">
                                                              <div class="lh-1">
                                                                  <span class="fw-medium">Location :</span>
                                                              </div>
                                                          </div>
                                                          <div class="col-xl-9">
                                                              <input type="text" class="form-control"
                                                                  placeholder="Placeholder" value="City, Country">
                                                          </div>
                                                      </div>
                                                  </li>
                                                  <li class="list-group-item p-4">
                                                      <span class="fw-medium fs-15 d-block mb-3">Social Info :</span>
                                                      <div class="row gy-4 align-items-center">
                                                          <div class="col-xl-3">
                                                              <div class="lh-1">
                                                                  <span class="fw-medium">Github :</span>
                                                              </div>
                                                          </div>
                                                          <div class="col-xl-9">
                                                              <input type="text" class="form-control"
                                                                  placeholder="Placeholder" value="github.com/wcsrm">
                                                          </div>
                                                          <div class="col-xl-3">
                                                              <div class="lh-1">
                                                                  <span class="fw-medium">Twitter :</span>
                                                              </div>
                                                          </div>
                                                          <div class="col-xl-9">
                                                              <input type="text" class="form-control"
                                                                  placeholder="Placeholder"
                                                                  value="twitter.com/wcsrm.me">
                                                          </div>
                                                          <div class="col-xl-3">
                                                              <div class="lh-1">
                                                                  <span class="fw-medium">Linkedin :</span>
                                                              </div>
                                                          </div>
                                                          <div class="col-xl-9">
                                                              <input type="text" class="form-control"
                                                                  placeholder="Placeholder"
                                                                  value="linkedin.com/in/wcsrm">
                                                          </div>
                                                          <div class="col-xl-3">
                                                              <div class="lh-1">
                                                                  <span class="fw-medium">Portfolio :</span>
                                                              </div>
                                                          </div>
                                                          <div class="col-xl-9">
                                                              <input type="text" class="form-control"
                                                                  placeholder="Placeholder" value="wcsrm.com/">
                                                          </div>
                                                      </div>
                                                  </li>
                                                  <li class="list-group-item p-4">
                                                      <span class="fw-medium fs-15 d-block mb-3">About :</span>
                                                      <div class="row gy-4 align-items-center">
                                                          <div class="col-xl-3">
                                                              <div class="lh-1">
                                                                  <span class="fw-medium">Biographical Info :</span>
                                                              </div>
                                                          </div>
                                                          <div class="col-xl-9">
                                                              <textarea class="form-control" id="text-area" rows="4">Hey there! I'm [Your Name], a passionate [Your Profession/Interest] based in [Your Location]. With a love for [Your Hobbies/Interests], I find joy in exploring the beauty of [Your Industry/Field]. Whether it's [Specific Skills or Expertise], I'm always eager to learn and grow.
      
                                                              I specialize in [Your Specialization/Area of Expertise], bringing creativity and innovation to every project. From [Key Achievements] to [Notable Experiences], my journey has been a thrilling ride, and I'm excited to share it with you.
                                                              </textarea>
                                                          </div>
                                                      </div>
                                                  </li>
                                                  <li class="list-group-item p-4">
                                                      <span class="fw-medium fs-15 d-block mb-3">Skills :</span>
                                                      <div class="row gy-4 align-items-center">
                                                          <div class="col-xl-3">
                                                              <div class="lh-1">
                                                                  <span class="fw-medium">skills :</span>
                                                              </div>
                                                          </div>
                                                          <div class="col-xl-9">
                                                              <input class="form-control"
                                                                  id="choices-text-preset-values" type="text"
                                                                  value="Project Management,Data Analysis,Marketing Strategy,Graphic Design,Content Creation,Market Research,Client Relations,Event Planning,Budgeting and Finance,Negotiation Skills,Team Collaboration,Adaptability"
                                                                  placeholder="This is a placeholder">
                                                          </div>
                                                      </div>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="tab-pane p-0 border-0" id="gallery-tab-pane" role="tabpanel"
                                      aria-labelledby="gallery-tab" tabindex="0">
                                      <div class="card custom-card overflow-hidden">
                                          <div class="card-body">
                                              <div class="row">
                                                  <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                      <a href="{{ asset('') }}/assets/images/media/media-40.jpg"
                                                          class="glightbox card" data-gallery="gallery1">
                                                          <img src="{{ asset('') }}/assets/images/media/media-40.jpg" alt="image">
                                                      </a>
                                                  </div>
                                                  <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                      <a href="{{ asset('') }}/assets/images/media/media-41.jpg"
                                                          class="glightbox card" data-gallery="gallery1">
                                                          <img src="{{ asset('') }}/assets/images/media/media-41.jpg" alt="image">
                                                      </a>
                                                  </div>
                                                  <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                      <a href="{{ asset('') }}/assets/images/media/media-42.jpg"
                                                          class="glightbox card" data-gallery="gallery1">
                                                          <img src="{{ asset('') }}/assets/images/media/media-42.jpg" alt="image">
                                                      </a>
                                                  </div>
                                                  <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                      <a href="{{ asset('') }}/assets/images/media/media-43.jpg"
                                                          class="glightbox card" data-gallery="gallery1">
                                                          <img src="{{ asset('') }}/assets/images/media/media-43.jpg" alt="image">
                                                      </a>
                                                  </div>
                                                  <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                      <a href="{{ asset('') }}/assets/images/media/media-44.jpg"
                                                          class="glightbox card" data-gallery="gallery1">
                                                          <img src="{{ asset('') }}/assets/images/media/media-44.jpg" alt="image">
                                                      </a>
                                                  </div>
                                                  <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                      <a href="{{ asset('') }}/assets/images/media/media-45.jpg"
                                                          class="glightbox card" data-gallery="gallery1">
                                                          <img src="{{ asset('') }}/assets/images/media/media-45.jpg" alt="image">
                                                      </a>
                                                  </div>
                                                  <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                      <a href="{{ asset('') }}/assets/images/media/media-46.jpg"
                                                          class="glightbox card" data-gallery="gallery1">
                                                          <img src="{{ asset('') }}/assets/images/media/media-46.jpg" alt="image">
                                                      </a>
                                                  </div>
                                                  <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                      <a href="{{ asset('') }}/assets/images/media/media-60.jpg"
                                                          class="glightbox card" data-gallery="gallery1">
                                                          <img src="{{ asset('') }}/assets/images/media/media-60.jpg" alt="image">
                                                      </a>
                                                  </div>
                                                  <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                      <a href="{{ asset('') }}/assets/images/media/media-26.jpg"
                                                          class="glightbox card" data-gallery="gallery1">
                                                          <img src="{{ asset('') }}/assets/images/media/media-26.jpg" alt="image">
                                                      </a>
                                                  </div>
                                                  <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                      <a href="{{ asset('') }}/assets/images/media/media-32.jpg"
                                                          class="glightbox card" data-gallery="gallery1">
                                                          <img src="{{ asset('') }}/assets/images/media/media-32.jpg" alt="image">
                                                      </a>
                                                  </div>
                                                  <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                      <a href="{{ asset('') }}/assets/images/media/media-30.jpg"
                                                          class="glightbox card" data-gallery="gallery1">
                                                          <img src="{{ asset('') }}/assets/images/media/media-30.jpg" alt="image">
                                                      </a>
                                                  </div>
                                                  <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                      <a href="{{ asset('') }}/assets/images/media/media-31.jpg"
                                                          class="glightbox card" data-gallery="gallery1">
                                                          <img src="{{ asset('') }}/assets/images/media/media-31.jpg" alt="image">
                                                      </a>
                                                  </div>
                                                  <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                      <a href="{{ asset('') }}/assets/images/media/media-46.jpg"
                                                          class="glightbox card" data-gallery="gallery1">
                                                          <img src="{{ asset('') }}/assets/images/media/media-46.jpg" alt="image">
                                                      </a>
                                                  </div>
                                                  <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                      <a href="{{ asset('') }}/assets/images/media/media-59.jpg"
                                                          class="glightbox card" data-gallery="gallery1">
                                                          <img src="{{ asset('') }}/assets/images/media/media-59.jpg" alt="image">
                                                      </a>
                                                  </div>
                                                  <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                      <a href="{{ asset('') }}/assets/images/media/media-61.jpg"
                                                          class="glightbox card" data-gallery="gallery1">
                                                          <img src="{{ asset('') }}/assets/images/media/media-61.jpg" alt="image">
                                                      </a>
                                                  </div>
                                                  <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                      <a href="{{ asset('') }}/assets/images/media/media-42.jpg"
                                                          class="glightbox card" data-gallery="gallery1">
                                                          <img src="{{ asset('') }}/assets/images/media/media-42.jpg" alt="image">
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="tab-pane p-0 border-0" id="friends-tab-pane" role="tabpanel"
                                      aria-labelledby="friends-tab" tabindex="0">
                                      <div class="card custom-card">
                                          <div class="card-body">
                                              <div class="row">
                                                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                      <div class="card custom-card shadow-none border">
                                                          <div class="card-body">
                                                              <div class="d-flex align-items-start gap-2"> <span
                                                                      class="avatar avatar-xl p-1 bg-light border avatar-rounded flex-shrink-0">
                                                                      <img src="{{ asset('') }}/assets/images/faces/2.jpg" alt="">
                                                                  </span>
                                                                  <div class="text-truncate"> <a
                                                                          href="javascript:void(0);"
                                                                          class="mb-0 fw-semibold">Della Jasmine</a>
                                                                      <p
                                                                          class="w-75 text-truncate fs-12 op-7 mb-1 text-muted">
                                                                          dellajasmine117@gmail.com</p><span
                                                                          class="badge bg-info-transparent">Product
                                                                          Designer</span>
                                                                  </div>
                                                                  <div class="dropdown ms-auto"> <a
                                                                          aria-label="anchor"
                                                                          class="btn btn-light btn-icon btn-sm btn-wave waves-effect waves-light"
                                                                          href="javascript:void(0);"
                                                                          data-bs-toggle="dropdown"> <i
                                                                              class="ri-more-2-fill"></i> </a>
                                                                      <ul class="dropdown-menu dropdown-menu-end"
                                                                          role="menu">
                                                                          <li><a class="dropdown-item"
                                                                                  href="javascript:void(0);">Message</a>
                                                                          </li>
                                                                          <li><a class="dropdown-item"
                                                                                  href="javascript:void(0);">Block</a>
                                                                          </li>
                                                                          <li><a class="dropdown-item"
                                                                                  href="javascript:void(0);">Remove</a>
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="card-footer text-center p-3">
                                                              <div
                                                                  class="d-flex gap-2 flex-wrap justify-content-center">
                                                                  <button
                                                                      class="btn btn-sm btn-primary-light btn-wave me-0 waves-effect waves-light">View
                                                                      Profile</button> <button
                                                                      class="btn btn-sm btn-secondary-light btn-wave me-0 waves-effect waves-light">Unfollow</button>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                      <div class="card custom-card shadow-none border">
                                                          <div class="card-body">
                                                              <div class="d-flex align-items-start gap-2"> <span
                                                                      class="avatar avatar-xl p-1 bg-light border avatar-rounded flex-shrink-0">
                                                                      <img src="{{ asset('') }}/assets/images/faces/15.jpg" alt="">
                                                                  </span>
                                                                  <div class="text-truncate">
                                                                      <p class="mb-0 fw-semibold">Danny Raj</p>
                                                                      <p
                                                                          class="w-75 text-truncate fs-12 op-7 mb-1 text-muted">
                                                                          dannyraj658@gmail.com</p><span
                                                                          class="badge bg-success-transparent">UI
                                                                          Designer</span>
                                                                  </div>
                                                                  <div class="dropdown ms-auto"> <a
                                                                          aria-label="anchor"
                                                                          class="btn btn-light btn-icon btn-sm btn-wave waves-effect waves-light"
                                                                          href="javascript:void(0);"
                                                                          data-bs-toggle="dropdown"> <i
                                                                              class="ri-more-2-fill"></i> </a>
                                                                      <ul class="dropdown-menu dropdown-menu-end"
                                                                          role="menu">
                                                                          <li><a class="dropdown-item"
                                                                                  href="javascript:void(0);">Message</a>
                                                                          </li>
                                                                          <li><a class="dropdown-item"
                                                                                  href="javascript:void(0);">Block</a>
                                                                          </li>
                                                                          <li><a class="dropdown-item"
                                                                                  href="javascript:void(0);">Remove</a>
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="card-footer text-center p-3">
                                                              <div
                                                                  class="d-flex gap-2 flex-wrap justify-content-center">
                                                                  <button
                                                                      class="btn btn-sm btn-primary-light btn-wave me-0 waves-effect waves-light">View
                                                                      Profile</button> <button
                                                                      class="btn btn-sm btn-secondary-light btn-wave me-0 waves-effect waves-light">Unfollow</button>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                      <div class="card custom-card shadow-none border">
                                                          <div class="card-body">
                                                              <div class="d-flex align-items-start gap-2"> <span
                                                                      class="avatar avatar-xl p-1 bg-light border avatar-rounded flex-shrink-0">
                                                                      <img src="{{ asset('') }}/assets/images/faces/5.jpg" alt="">
                                                                  </span>
                                                                  <div class="text-truncate">
                                                                      <p class="mb-0 fw-semibold">Catalina Keira</p>
                                                                      <p
                                                                          class="w-75 text-truncate fs-12 op-7 mb-1 text-muted">
                                                                          catalinakeira023@gmail.com</p><span
                                                                          class="badge bg-info-transparent">Product
                                                                          Designer</span>
                                                                  </div>
                                                                  <div class="dropdown ms-auto"> <a
                                                                          aria-label="anchor"
                                                                          class="btn btn-light btn-icon btn-sm btn-wave waves-effect waves-light"
                                                                          href="javascript:void(0);"
                                                                          data-bs-toggle="dropdown"> <i
                                                                              class="ri-more-2-fill"></i> </a>
                                                                      <ul class="dropdown-menu dropdown-menu-end"
                                                                          role="menu">
                                                                          <li><a class="dropdown-item"
                                                                                  href="javascript:void(0);">Message</a>
                                                                          </li>
                                                                          <li><a class="dropdown-item"
                                                                                  href="javascript:void(0);">Block</a>
                                                                          </li>
                                                                          <li><a class="dropdown-item"
                                                                                  href="javascript:void(0);">Remove</a>
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="card-footer text-center p-3">
                                                              <div
                                                                  class="d-flex gap-2 flex-wrap justify-content-center">
                                                                  <button
                                                                      class="btn btn-sm btn-primary-light btn-wave me-0 waves-effect waves-light">View
                                                                      Profile</button> <button
                                                                      class="btn btn-sm btn-secondary-light btn-wave me-0 waves-effect waves-light">Unfollow</button>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                      <div class="card custom-card shadow-none border">
                                                          <div class="card-body">
                                                              <div class="d-flex align-items-start gap-2"> <span
                                                                      class="avatar avatar-xl p-1 bg-light border avatar-rounded flex-shrink-0">
                                                                      <img src="{{ asset('') }}/assets/images/faces/11.jpg" alt="">
                                                                  </span>
                                                                  <div class="text-truncate">
                                                                      <p class="mb-0 fw-semibold">Priceton Gray</p>
                                                                      <p
                                                                          class="w-75 text-truncate fs-12 op-7 mb-1 text-muted">
                                                                          pricetongray451@gmail.com</p><span
                                                                          class="badge bg-warning-transparent">Team
                                                                          Manager</span>
                                                                  </div>
                                                                  <div class="dropdown ms-auto"> <a
                                                                          aria-label="anchor"
                                                                          class="btn btn-light btn-icon btn-sm btn-wave waves-effect waves-light"
                                                                          href="javascript:void(0);"
                                                                          data-bs-toggle="dropdown"> <i
                                                                              class="ri-more-2-fill"></i> </a>
                                                                      <ul class="dropdown-menu dropdown-menu-end"
                                                                          role="menu">
                                                                          <li><a class="dropdown-item"
                                                                                  href="javascript:void(0);">Message</a>
                                                                          </li>
                                                                          <li><a class="dropdown-item"
                                                                                  href="javascript:void(0);">Block</a>
                                                                          </li>
                                                                          <li><a class="dropdown-item"
                                                                                  href="javascript:void(0);">Remove</a>
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="card-footer text-center p-3">
                                                              <div
                                                                  class="d-flex gap-2 flex-wrap justify-content-center">
                                                                  <button
                                                                      class="btn btn-sm btn-primary-light btn-wave me-0 waves-effect waves-light">View
                                                                      Profile</button> <button
                                                                      class="btn btn-sm btn-secondary-light btn-wave me-0 waves-effect waves-light">Unfollow</button>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                      <div class="card custom-card shadow-none border">
                                                          <div class="card-body">
                                                              <div class="d-flex align-items-start gap-2"> <span
                                                                      class="avatar avatar-xl p-1 bg-light border avatar-rounded flex-shrink-0">
                                                                      <img src="{{ asset('') }}/assets/images/faces/7.jpg" alt="">
                                                                  </span>
                                                                  <div class="text-truncate">
                                                                      <p class="mb-0 fw-semibold">Sarah Ruth</p>
                                                                      <p
                                                                          class="w-75 text-truncate fs-12 op-7 mb-1 text-muted">
                                                                          sarahruth45@gmail.com</p><span
                                                                          class="badge bg-info-transparent">Product
                                                                          Designer</span>
                                                                  </div>
                                                                  <div class="dropdown ms-auto"> <a
                                                                          aria-label="anchor"
                                                                          class="btn btn-light btn-icon btn-sm btn-wave waves-effect waves-light"
                                                                          href="javascript:void(0);"
                                                                          data-bs-toggle="dropdown"> <i
                                                                              class="ri-more-2-fill"></i> </a>
                                                                      <ul class="dropdown-menu dropdown-menu-end"
                                                                          role="menu">
                                                                          <li><a class="dropdown-item"
                                                                                  href="javascript:void(0);">Message</a>
                                                                          </li>
                                                                          <li><a class="dropdown-item"
                                                                                  href="javascript:void(0);">Block</a>
                                                                          </li>
                                                                          <li><a class="dropdown-item"
                                                                                  href="javascript:void(0);">Remove</a>
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="card-footer text-center p-3">
                                                              <div
                                                                  class="d-flex gap-2 flex-wrap justify-content-center">
                                                                  <button
                                                                      class="btn btn-sm btn-primary-light btn-wave me-0 waves-effect waves-light">View
                                                                      Profile</button> <button
                                                                      class="btn btn-sm btn-secondary-light btn-wave me-0 waves-effect waves-light">Unfollow</button>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                      <div class="card custom-card shadow-none border">
                                                          <div class="card-body">
                                                              <div class="d-flex align-items-start gap-2"> <span
                                                                      class="avatar avatar-xl p-1 bg-light border avatar-rounded flex-shrink-0">
                                                                      <img src="{{ asset('') }}/assets/images/faces/12.jpg" alt="">
                                                                  </span>
                                                                  <div class="text-truncate">
                                                                      <p class="mb-0 fw-semibold">Mahira Hose</p>
                                                                      <p
                                                                          class="w-75 text-truncate fs-12 op-7 mb-1 text-muted">
                                                                          mahirahose9456@gmail.com</p><span
                                                                          class="badge bg-info-transparent">Product
                                                                          Designer</span>
                                                                  </div>
                                                                  <div class="dropdown ms-auto"> <a
                                                                          aria-label="anchor"
                                                                          class="btn btn-light btn-icon btn-sm btn-wave waves-effect waves-light"
                                                                          href="javascript:void(0);"
                                                                          data-bs-toggle="dropdown"> <i
                                                                              class="ri-more-2-fill"></i> </a>
                                                                      <ul class="dropdown-menu dropdown-menu-end"
                                                                          role="menu">
                                                                          <li><a class="dropdown-item"
                                                                                  href="javascript:void(0);">Message</a>
                                                                          </li>
                                                                          <li><a class="dropdown-item"
                                                                                  href="javascript:void(0);">Block</a>
                                                                          </li>
                                                                          <li><a class="dropdown-item"
                                                                                  href="javascript:void(0);">Remove</a>
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="card-footer text-center p-3">
                                                              <div
                                                                  class="d-flex gap-2 flex-wrap justify-content-center">
                                                                  <button
                                                                      class="btn btn-sm btn-primary-light btn-wave me-0 waves-effect waves-light">View
                                                                      Profile</button> <button
                                                                      class="btn btn-sm btn-secondary-light btn-wave me-0 waves-effect waves-light">Unfollow</button>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                      <div class="card custom-card shadow-none border">
                                                          <div class="card-body">
                                                              <div class="d-flex align-items-start gap-2"> <span
                                                                      class="avatar avatar-xl p-1 bg-light border avatar-rounded flex-shrink-0">
                                                                      <img src="{{ asset('') }}/assets/images/faces/1.jpg" alt="">
                                                                  </span>
                                                                  <div class="text-truncate">
                                                                      <p class="mb-0 fw-semibold">Victoria Gracie</p>
                                                                      <p
                                                                          class="w-75 text-truncate fs-12 op-7 mb-1 text-muted">
                                                                          victoriagracie@gmail.com</p><span
                                                                          class="badge bg-info-transparent">Product
                                                                          Designer</span>
                                                                  </div>
                                                                  <div class="dropdown ms-auto"> <a
                                                                          aria-label="anchor"
                                                                          class="btn btn-light btn-icon btn-sm btn-wave waves-effect waves-light"
                                                                          href="javascript:void(0);"
                                                                          data-bs-toggle="dropdown"> <i
                                                                              class="ri-more-2-fill"></i> </a>
                                                                      <ul class="dropdown-menu dropdown-menu-end"
                                                                          role="menu">
                                                                          <li><a class="dropdown-item"
                                                                                  href="javascript:void(0);">Message</a>
                                                                          </li>
                                                                          <li><a class="dropdown-item"
                                                                                  href="javascript:void(0);">Block</a>
                                                                          </li>
                                                                          <li><a class="dropdown-item"
                                                                                  href="javascript:void(0);">Remove</a>
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="card-footer text-center p-3">
                                                              <div
                                                                  class="d-flex gap-2 flex-wrap justify-content-center">
                                                                  <button
                                                                      class="btn btn-sm btn-primary-light btn-wave me-0 waves-effect waves-light">View
                                                                      Profile</button> <button
                                                                      class="btn btn-sm btn-secondary-light btn-wave me-0 waves-effect waves-light">Unfollow</button>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                      <div class="card custom-card shadow-none border">
                                                          <div class="card-body">
                                                              <div class="d-flex align-items-start gap-2"> <span
                                                                      class="avatar avatar-xl p-1 bg-light border avatar-rounded flex-shrink-0">
                                                                      <img src="{{ asset('') }}/assets/images/faces/13.jpg" alt="">
                                                                  </span>
                                                                  <div class="text-truncate">
                                                                      <p class="mb-0 fw-semibold">Amith Gray</p>
                                                                      <p
                                                                          class="w-75 text-truncate fs-12 op-7 mb-1 text-muted">
                                                                          amithgray132@gmail.com</p><span
                                                                          class="badge bg-info-transparent">Product
                                                                          Designer</span>
                                                                  </div>
                                                                  <div class="dropdown ms-auto"> <a
                                                                          aria-label="anchor"
                                                                          class="btn btn-light btn-icon btn-sm btn-wave waves-effect waves-light"
                                                                          href="javascript:void(0);"
                                                                          data-bs-toggle="dropdown"> <i
                                                                              class="ri-more-2-fill"></i> </a>
                                                                      <ul class="dropdown-menu dropdown-menu-end"
                                                                          role="menu">
                                                                          <li><a class="dropdown-item"
                                                                                  href="javascript:void(0);">Message</a>
                                                                          </li>
                                                                          <li><a class="dropdown-item"
                                                                                  href="javascript:void(0);">Block</a>
                                                                          </li>
                                                                          <li><a class="dropdown-item"
                                                                                  href="javascript:void(0);">Remove</a>
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="card-footer text-center p-3">
                                                              <div
                                                                  class="d-flex gap-2 flex-wrap justify-content-center">
                                                                  <button
                                                                      class="btn btn-sm btn-primary-light btn-wave me-0 waves-effect waves-light">View
                                                                      Profile</button> <button
                                                                      class="btn btn-sm btn-secondary-light btn-wave me-0 waves-effect waves-light">Unfollow</button>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-xl-12">
                                                      <div class="text-center"> <button
                                                              class="btn btn-primary-light btn-wave waves-effect waves-light">Show
                                                              All</button> </div>
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
              <!-- End:: row-1 -->

          </div>
      </div>
      <!-- End::app-content -->

@endsection