@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Page Header -->
      <div
          class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Projects Overview</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Projects</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Projects Overview</li>
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
          <div class="col-xxl-8">
              <div class="card custom-card">
                  <div class="card-header justify-content-between">
                      <div class="card-title">
                          Project Overview
                      </div>
                      <div>
                          <a href="projects-create.html" class="btn btn-sm btn-primary btn-wave"><i
                                  class="ri-add-line align-middle me-1 fw-medium"></i>Create Project</a>
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="d-flex align-items-center mb-4 gap-2 flex-wrap"> <span
                              class="avatar avatar-lg me-1 bg-primary-transparent"><i
                                  class="ri-stack-line fs-24 lh-1"></i></span>
                          <div>
                              <h6 class="fw-medium mb-2 task-title"> Blockchain-Based Voting System Development
                              </h6> <span class="badge bg-success-transparent"> In progress</span> <span
                                  class="text-muted fs-12"><i
                                      class="ri-circle-fill text-success mx-2 fs-9"></i>Last Updated 1 Day
                                  Ago</span>
                          </div>
                          <div class="d-flex flex-wrap rightIcons float-end ms-auto"> <button
                                  aria-label="button" type="button"
                                  class="btn btn-icon btn-primary my-1 ms-2 btn-sm"> <i
                                      class="ri-edit-box-line"></i> </button> <button aria-label="button"
                                  type="button" class="btn btn-icon btn-secondary my-1 ms-2 btn-sm"> <i
                                      class="ri-links-fill"></i> </button> <div class="dropdown ms-2">
                                          <button class="btn btn-icon btn-success my-1 btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              <i class="ti ti-dots-vertical"></i>
                                          </button>
                                          <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                              <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                              <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                          </ul>
                                      </div></div>
                      </div>
                      <div class="d-flex gap-4 mb-3">
                          <div class="d-flex gap-2"> <span class="d-block text-muted fs-13">Type :</span>
                              <span class="text-primary">UI/UX Design</span>
                          </div>
                          <div class="d-flex gap-2"> <span class="d-block text-muted fs-13">Start Date
                                  :</span>
                              <span class="text-default fw-semibold">02/10/2024</span>
                          </div>
                      </div>
                      <div class="fs-15 fw-medium mb-2">Project Description :</div>
                      <p class="text-muted task-description">A secure and transparent voting platform that leverages blockchain technology to ensure the integrity of elections. This system allows voters to cast their ballots in a decentralized manner, where each vote is recorded on the blockchain, making it tamper-proof and verifiable.</p>
                      <div class="mb-3">
                              <div class="d-flex align-items-center justify-content-between mb-2">
                                  <div class="fs-15 fw-medium">Key Tasks :</div> <a href="javascript:void(0);"
                                      class="btn btn-primary-light btn-wave btn-sm waves-effect waves-light">See
                                      More</a>
                              </div>
                              <div class="row">
                                <div class="col-xl-6">
                                  <ul class="list-group">
                                      <li class="list-group-item">
                                          <div class="d-flex align-items-center">
                                              <div class="me-2"><i
                                                      class="ri-link fs-15 text-primary lh-1 p-1 bg-primary-transparent rounded-circle"></i>
                                              </div>
                                              <div class="fw-medium">Identify the key requirements for the voting system</div>
                                          </div>
                                      </li>
                                      <li class="list-group-item">
                                          <div class="d-flex align-items-center">
                                              <div class="me-2"><i
                                                      class="ri-link fs-15 text-primary lh-1 p-1 bg-primary-transparent rounded-circle"></i>
                                              </div>
                                              <div class="fw-medium">Research blockchain technologies suitable for voting.
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-group-item">
                                          <div class="d-flex align-items-center">
                                              <div class="me-2"><i
                                                      class="ri-link fs-15 text-primary lh-1 p-1 bg-primary-transparent rounded-circle"></i>
                                              </div>
                                              <div class="fw-medium">Plan for scalability, security, and privacy.
                                              </div>
                                          </div>
                                      </li>
                                  </ul>
                                </div>
                                <div class="col-xl-6">
                                  <ul class="list-group">
                                      <li class="list-group-item">
                                          <div class="d-flex align-items-center">
                                              <div class="me-2"><i
                                                      class="ri-link fs-15 text-primary lh-1 p-1 bg-primary-transparent rounded-circle"></i>
                                              </div>
                                              <div class="fw-medium">Research latest web development trends.</div>
                                          </div>
                                      </li>
                                      <li class="list-group-item">
                                          <div class="d-flex align-items-center">
                                              <div class="me-2"><i
                                                      class="ri-link fs-15 text-primary lh-1 p-1 bg-primary-transparent rounded-circle"></i>
                                              </div>
                                              <div class="fw-medium">Implement additional security measures as needed.
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-group-item">
                                          <div class="d-flex align-items-center">
                                              <div class="me-2"><i
                                                      class="ri-link fs-15 text-primary lh-1 p-1 bg-primary-transparent rounded-circle"></i>
                                              </div>
                                              <div class="fw-medium">Test the network’s performance and reliability.
                                              </div>
                                          </div>
                                      </li>
                                  </ul>
                                </div>
                              </div>
                      </div>
                      <div class="fs-15 fw-medium mb-2">Skills :</div>
                      <div>
                          <span class="badge bg-light text-default border mb-1">Teamwork</span>
                          <span class="badge bg-light text-default border mb-1">Graphic Design</span>
                          <span class="badge bg-light text-default border mb-1">Responsive Design</span>
                          <span class="badge bg-light text-default border mb-1">Web Accessibility</span>
                          <span class="badge bg-light text-default border mb-1">Front-End Build Tools</span>
                          <span class="badge bg-light text-default border mb-1">RESTful APIs</span>
                          <span class="badge bg-light text-default border mb-1">Performance Testing</span>
                          <span class="badge bg-light text-default border mb-1">Angular</span>
                          <span class="badge bg-light text-default border mb-1">Vue.js</span>
                      </div>
                      <div class="fs-15 fw-medium mb-2 mt-3">Team :</div>
                      <div class="d-flex align-items-center flex-wrap gap-4">
                          <div class="p-2 border rounded d-flex align-items-center">
                              <span class="avatar avatar-sm avatar-rounded me-2"><img
                                      src="{{ asset('') }}/assets/images/faces/1.jpg" alt="img"></span>
                              <div class="d-flex flex-column lh-1">
                                  <span class="mb-1">Robert Fox</span>
                                  <span class="fs-11 text-muted">Web Developer</span>
                              </div>
                          </div>
                          <div class="p-2 border rounded d-flex align-items-center">
                              <span class="avatar avatar-sm avatar-rounded me-2"><img
                                      src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img"></span>
                              <div class="d-flex flex-column lh-1">
                                  <span class="mb-1">
                                      Simon Cowall</span>
                                  <span class="fs-11 text-muted">Ui Tester</span>
                              </div>
                          </div>
                          <div class="p-2 border rounded d-flex align-items-center">
                              <span class="avatar avatar-sm avatar-rounded me-2"><img
                                      src="{{ asset('') }}/assets/images/faces/3.jpg" alt="img"></span>
                              <div class="d-flex flex-column lh-1">
                                  <span class="mb-1">
                                      Meisha Kerr</span>
                                  <span class="fs-11 text-muted">React Developer</span>
                              </div>
                          </div>
                          <div class="p-2 border rounded d-flex align-items-center">
                              <span class="avatar avatar-sm avatar-rounded me-2"><img
                                      src="{{ asset('') }}/assets/images/faces/4.jpg" alt="img"></span>
                              <div class="d-flex flex-column lh-1">
                                  <span class="mb-1">
                                      Jessica</span>
                                  <span class="fs-11 text-muted">UX Designer</span>
                              </div>
                          </div>
                          <div class="p-2 border rounded d-flex align-items-center">
                              <span class="avatar avatar-sm avatar-rounded me-2"><img
                                      src="{{ asset('') }}/assets/images/faces/5.jpg" alt="img"></span>
                              <div class="d-flex flex-column lh-1">
                                  <span class="mb-1">
                                      Amanda B</span>
                                  <span class="fs-11 text-muted">HTML Developer</span>
                              </div>
                          </div>
                          <div class="p-2 border rounded d-flex align-items-center">
                              <span class="avatar avatar-sm avatar-rounded me-2"><img
                                      src="{{ asset('') }}/assets/images/faces/6.jpg" alt="img"></span>
                              <div class="d-flex flex-column lh-1">
                                  <span class="mb-1">
                                      Stathman</span>
                                  <span class="fs-11 text-muted">Web Developer</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-12">
                  <div class="row">
                      <div class="col-xl-4">
                          <div class="card custom-card">
                              <div class="card-header justify-content-between">
                                  <div class="card-title">Project Categories</div>
                                  <div class="btn btn-sm btn-primary-light btn-wave waves-effect waves-light">
                                      <i class="ri-add-line align-middle me-1 fw-medium"></i>Add More
                                  </div>
                              </div>
                              <div class="card-body">
                                  <ul class="list-group">
                                      <li class="list-group-item">
                                          <div class="d-flex align-items-center justify-content-between">
                                              <div class="d-flex align-items-center"> <span
                                                      class="text-primary me-2 fs-16"><i
                                                          class="ri-loop-left-line"></i></span>
                                                  <div class="fw-medium">In Progress</div>
                                              </div>
                                              <div class="d-flex align-items-center"> <span
                                                      class="text-muted fs-14 me-2">8 card</span>
                                                  <div class="fw-medium">60%</div>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-group-item">
                                          <div class="d-flex align-items-center justify-content-between">
                                              <div class="d-flex align-items-center"> <span
                                                      class="text-secondary me-2 fs-16"><i
                                                          class="ri-error-warning-line"></i></span>
                                                  <div class="fw-medium">Need Review</div>
                                              </div>
                                              <div class="d-flex align-items-center"> <span
                                                      class="text-muted fs-14 me-2">5 card</span>
                                                  <div class="fw-medium">54%</div>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-group-item">
                                          <div class="d-flex align-items-center justify-content-between">
                                              <div class="d-flex align-items-center"> <span
                                                      class="text-success me-2 fs-16"><i
                                                          class="ri-checkbox-circle-line"></i></span>
                                                  <div class="fw-medium">Completed</div>
                                              </div>
                                              <div class="d-flex align-items-center"> <span
                                                      class="text-muted fs-14 me-2">7 card</span>
                                                  <div class="fw-medium">15%</div>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-group-item">
                                          <div class="d-flex align-items-center justify-content-between">
                                              <div class="d-flex align-items-center"> <span
                                                      class="text-info me-2 fs-16"><i
                                                          class="ri-arrow-left-circle-line"></i></span>
                                                  <div class="fw-medium">Backlog</div>
                                              </div>
                                              <div class="d-flex align-items-center"> <span
                                                      class="text-muted fs-14 me-2">12 card</span>
                                                  <div class="fw-medium">20%</div>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-group-item">
                                          <div class="d-flex align-items-center justify-content-between">
                                              <div class="d-flex align-items-center"> <span
                                                      class="text-warning me-2 fs-16"><i
                                                          class="ri-arrow-left-circle-line"></i></span>
                                                  <div class="fw-medium">Pending</div>
                                              </div>
                                              <div class="d-flex align-items-center"> <span
                                                      class="text-muted fs-14 me-2">10 card</span>
                                                  <div class="fw-medium">32%</div>
                                              </div>
                                          </div>
                                      </li>
                                  </ul>
                                  <div class="mt-3 text-center"> <button
                                          class="btn btn-primary btn-sm btn-wave waves-effect waves-light">View
                                          All</button> </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-4">
                          <div class="card custom-card">
                              <div class="card-header justify-content-between">
                                  <div class="card-title">Project Goals</div>
                                  <div class="btn btn-sm btn-light btn-wave"><i
                                          class="ri-add-line align-middle me-1 fw-medium"></i>Add Goal</div>
                              </div>
                              <div class="card-body">
                                  <ul class="list-group">
                                      <li class="list-group-item">
                                          <div class="d-flex align-items-center">
                                              <div class="me-2"><input
                                                      class="form-check-input form-checked-success"
                                                      type="checkbox" value="" id="successChecked1"
                                                      checked=""></div>
                                              <div class="fw-medium fs-14">Enhance user experience</div>
                                          </div>
                                      </li>
                                      <li class="list-group-item">
                                          <div class="d-flex align-items-center">
                                              <div class="me-2"><input
                                                      class="form-check-input form-checked-success"
                                                      type="checkbox" value="" id="successChecked2"></div>
                                              <div class="fw-medium fs-14">Boost inventory accuracy</div>
                                          </div>
                                      </li>
                                      <li class="list-group-item">
                                          <div class="d-flex align-items-center">
                                              <div class="me-2"><input
                                                      class="form-check-input form-checked-success"
                                                      type="checkbox" value="" id="successChecked3"></div>
                                              <div class="fw-medium fs-14">Reduce manual errors</div>
                                          </div>
                                      </li>
                                      <li class="list-group-item">
                                          <div class="d-flex align-items-center">
                                              <div class="me-2"><input
                                                      class="form-check-input form-checked-success"
                                                      type="checkbox" value="" id="successChecked4"></div>
                                              <div class="fw-medium fs-14">Improve data security</div>
                                          </div>
                                      </li>
                                      <li class="list-group-item">
                                          <div class="d-flex align-items-center">
                                              <div class="me-2"><input
                                                      class="form-check-input form-checked-success"
                                                      type="checkbox" value="" id="successChecked5"
                                                      checked=""></div>
                                              <div class="fw-medium fs-14">Increase operational efficiency
                                              </div>
                                          </div>
                                      </li>
                                  </ul>
                                  <div class="mt-3 text-center">
                                      <button class="btn btn-success btn-sm btn-wave my-2">View All</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-4">
                          <div class="card custom-card overflow-hidden">
                              <div class="card-header">
                                  <div class="card-title">
                                      Project Documents
                                  </div>
                              </div>
                              <div class="card-body p-0">
                                  <ul class="list-group list-group-flush">
                                      <li class="list-group-item">
                                          <div class="d-flex align-items-center flex-wrap gap-2">
                                              <div class="lh-1">
                                                  <div class="avatar avatar-md bg-light">
                                                      <div class="avatar avatar-sm svg-primary">
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                              height="32" fill="#000000"
                                                              viewBox="0 0 256 256">
                                                              <path
                                                                  d="M213.66,66.34l-40-40A8,8,0,0,0,168,24H88A16,16,0,0,0,72,40V56H56A16,16,0,0,0,40,72V216a16,16,0,0,0,16,16H168a16,16,0,0,0,16-16V200h16a16,16,0,0,0,16-16V72A8,8,0,0,0,213.66,66.34ZM136,192H88a8,8,0,0,1,0-16h48a8,8,0,0,1,0,16Zm0-32H88a8,8,0,0,1,0-16h48a8,8,0,0,1,0,16Zm64,24H184V104a8,8,0,0,0-2.34-5.66l-40-40A8,8,0,0,0,136,56H88V40h76.69L200,75.31Z">
                                                              </path>
                                                          </svg>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="flex-fill">
                                                  <a href="javascript:void(0);"><span
                                                          class="d-block fw-medium">Full Project</span></a>
                                                  <span
                                                      class="d-block text-muted fs-12 fw-normal">0.45MB</span>
                                              </div>
                                              <div class="btn-list">
                                                  <button
                                                      class="btn btn-sm btn-icon btn-primary-light btn-wave"><i
                                                          class="ri-edit-line"></i></button>
                                                  <button
                                                      class="btn btn-sm btn-icon btn-danger-light btn-wave"><i
                                                          class="ri-delete-bin-line"></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-group-item">
                                          <div class="d-flex align-items-center flex-wrap gap-2">
                                              <div class="lh-1">
                                                  <div class="avatar avatar-md bg-light">
                                                      <div class="avatar avatar-sm svg-secondary">
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                              height="32" fill="#000000"
                                                              viewBox="0 0 256 256">
                                                              <path
                                                                  d="M245,110.64A16,16,0,0,0,232,104H216V88a16,16,0,0,0-16-16H130.67L102.94,51.2a16.14,16.14,0,0,0-9.6-3.2H40A16,16,0,0,0,24,64V208h0a8,8,0,0,0,8,8H211.1a8,8,0,0,0,7.59-5.47l28.49-85.47A16.05,16.05,0,0,0,245,110.64ZM93.34,64,123.2,86.4A8,8,0,0,0,128,88h72v16H69.77a16,16,0,0,0-15.18,10.94L40,158.7V64Z">
                                                              </path>
                                                          </svg>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="flex-fill">
                                                  <a href="javascript:void(0);"><span
                                                          class="d-block fw-medium">assets.doc</span></a>
                                                  <span
                                                      class="d-block text-muted fs-12 fw-normal">0.99MB</span>
                                              </div>
                                              <div class="btn-list">
                                                  <button
                                                      class="btn btn-sm btn-icon btn-primary-light btn-wave"><i
                                                          class="ri-edit-line"></i></button>
                                                  <button
                                                      class="btn btn-sm btn-icon btn-danger-light btn-wave"><i
                                                          class="ri-delete-bin-line"></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-group-item">
                                          <div class="d-flex align-items-center flex-wrap gap-2">
                                              <div class="lh-1">
                                                  <div class="avatar avatar-md bg-light">
                                                      <div class="avatar avatar-sm svg-success"> <svg
                                                              xmlns="http://www.w3.org/2000/svg" width="32"
                                                              height="32" fill="#000000"
                                                              viewBox="0 0 256 256">
                                                              <path
                                                                  d="M216,40H72A16,16,0,0,0,56,56V72H40A16,16,0,0,0,24,88V200a16,16,0,0,0,16,16H184a16,16,0,0,0,16-16V184h16a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40ZM172,72a12,12,0,1,1-12,12A12,12,0,0,1,172,72Zm12,128H40V88H56v80a16,16,0,0,0,16,16H184Zm32-32H72V120.69l30.34-30.35a8,8,0,0,1,11.32,0L163.31,140,189,114.34a8,8,0,0,1,11.31,0L216,130.07V168Z">
                                                              </path>
                                                          </svg>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="flex-fill">
                                                  <a href="javascript:void(0);"><span
                                                          class="d-block fw-medium">image-1.png</span></a>
                                                  <span
                                                      class="d-block text-muted fs-12 fw-normal">245KB</span>
                                              </div>
                                              <div class="btn-list">
                                                  <button
                                                      class="btn btn-sm btn-icon btn-primary-light btn-wave"><i
                                                          class="ri-edit-line"></i></button>
                                                  <button
                                                      class="btn btn-sm btn-icon btn-danger-light btn-wave"><i
                                                          class="ri-delete-bin-line"></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-group-item">
                                          <div class="d-flex align-items-center flex-wrap gap-2">
                                              <div class="lh-1">
                                                  <div class="avatar avatar-md bg-light">
                                                      <div class="avatar avatar-sm svg-info">
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                              height="32" fill="#000000"
                                                              viewBox="0 0 256 256">
                                                              <path
                                                                  d="M213.66,82.34l-56-56A8,8,0,0,0,152,24H56A16,16,0,0,0,40,40V216a16,16,0,0,0,16,16H92a4,4,0,0,0,4-4V208H88.27A8.17,8.17,0,0,1,80,200.53,8,8,0,0,1,88,192h8V176H88.27A8.17,8.17,0,0,1,80,168.53,8,8,0,0,1,88,160h8V144H88.27A8.17,8.17,0,0,1,80,136.53,8,8,0,0,1,88,128h8v-7.73a8.18,8.18,0,0,1,7.47-8.25,8,8,0,0,1,8.53,8v8h7.73a8.17,8.17,0,0,1,8.25,7.47,8,8,0,0,1-8,8.53h-8v16h7.73a8.17,8.17,0,0,1,8.25,7.47,8,8,0,0,1-8,8.53h-8v16h7.73a8.17,8.17,0,0,1,8.25,7.47,8,8,0,0,1-8,8.53h-8v20a4,4,0,0,0,4,4h84a16,16,0,0,0,16-16V88A8,8,0,0,0,213.66,82.34ZM152,88V44l44,44Z">
                                                              </path>
                                                          </svg>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="flex-fill">
                                                  <a href="javascript:void(0);"><span
                                                          class="d-block fw-medium">documentation.zip</span></a>
                                                  <span class="d-block text-muted fs-12 fw-normal">2MB</span>
                                              </div>
                                              <div class="btn-list">
                                                  <button
                                                      class="btn btn-sm btn-icon btn-primary-light btn-wave"><i
                                                          class="ri-edit-line"></i></button>
                                                  <button
                                                      class="btn btn-sm btn-icon btn-danger-light btn-wave"><i
                                                          class="ri-delete-bin-line"></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-group-item">
                                          <div class="d-flex align-items-center flex-wrap gap-2">
                                              <div class="lh-1">
                                                  <div class="avatar avatar-md bg-light">
                                                      <div class="avatar avatar-sm svg-warning">
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                              height="32" fill="#000000"
                                                              viewBox="0 0 256 256">
                                                              <path
                                                                  d="M44,120H212a4,4,0,0,0,4-4V88a8,8,0,0,0-2.34-5.66l-56-56A8,8,0,0,0,152,24H56A16,16,0,0,0,40,40v76A4,4,0,0,0,44,120ZM152,44l44,44H152Zm72,108.53a8.18,8.18,0,0,1-8.25,7.47H192v16h15.73a8.17,8.17,0,0,1,8.25,7.47,8,8,0,0,1-8,8.53H192v15.73a8.17,8.17,0,0,1-7.47,8.25,8,8,0,0,1-8.53-8V152a8,8,0,0,1,8-8h32A8,8,0,0,1,224,152.53ZM64,144H48a8,8,0,0,0-8,8v55.73A8.17,8.17,0,0,0,47.47,216,8,8,0,0,0,56,208v-8h7.4c15.24,0,28.14-11.92,28.59-27.15A28,28,0,0,0,64,144Zm-.35,40H56V160h8a12,12,0,0,1,12,13.16A12.25,12.25,0,0,1,63.65,184ZM128,144H112a8,8,0,0,0-8,8v56a8,8,0,0,0,8,8h15.32c19.66,0,36.21-15.48,36.67-35.13A36,36,0,0,0,128,144Zm-.49,56H120V160h8a20,20,0,0,1,20,20.77C147.58,191.59,138.34,200,127.51,200Z">
                                                              </path>
                                                          </svg>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="flex-fill">
                                                  <a href="javascript:void(0);"><span
                                                          class="d-block fw-medium">landing.pdf</span></a>
                                                  <span
                                                      class="d-block text-muted fs-12 fw-normal">3.46MB</span>
                                              </div>
                                              <div class="btn-list">
                                                  <button
                                                      class="btn btn-sm btn-icon btn-primary-light btn-wave"><i
                                                          class="ri-edit-line"></i></button>
                                                  <button
                                                      class="btn btn-sm btn-icon btn-danger-light btn-wave"><i
                                                          class="ri-delete-bin-line"></i></button>
                                              </div>
                                          </div>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-4">
              <div class="card custom-card">
                  <div class="card-header justify-content-between">
                      <div class="card-title">
                          Project Details
                      </div>
                      <div>
                          <button class="btn btn-light btn-sm btn-wave"><i
                                  class="ri-add-line align-middle me-1 fw-medium"></i>Add New</button>
                      </div>
                  </div>
                  <div class="card-body p-0">
                      <div class="table-responsive">
                          <table class="table text-nowrap">
                              <tbody>
                                  <tr>
                                      <td>
                                          <span><i
                                                  class="ri-loop-right-line me-2 fs-15 lh-1 p-1 text-primary bg-primary-transparent rounded-pill"></i>Status</span>
                                      </td>
                                      <td>:</td>
                                      <td>
                                          <span class="badge bg-primary-transparent">Ongoing</span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <span><i class="ri-group-line fs-15 lh-1 p-1 text-secondary bg-secondary-transparent rounded-pill me-2"></i>Assigned</span>
                                      </td>
                                      <td>:</td>
                                      <td>
                                              <div class="avatar-list-stacked">
                                                  <span class="avatar avatar-sm avatar-rounded"
                                                      data-bs-toggle="tooltip"
                                                      data-bs-custom-class="tooltip-primary"
                                                      data-bs-original-title="Simon">
                                                      <img src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img">
                                                  </span>
                                                  <span class="avatar avatar-sm avatar-rounded"
                                                      data-bs-toggle="tooltip"
                                                      data-bs-custom-class="tooltip-primary"
                                                      data-bs-original-title="Sasha">
                                                      <img src="{{ asset('') }}/assets/images/faces/8.jpg" alt="img">
                                                  </span>
                                                  <span class="avatar avatar-sm avatar-rounded"
                                                      data-bs-toggle="tooltip"
                                                      data-bs-custom-class="tooltip-primary"
                                                      data-bs-original-title="Anagha">
                                                      <img src="{{ asset('') }}/assets/images/faces/5.jpg" alt="img">
                                                  </span>
                                                  <span class="avatar avatar-sm avatar-rounded"
                                                      data-bs-toggle="tooltip"
                                                      data-bs-custom-class="tooltip-primary"
                                                      data-bs-original-title="Hishen">
                                                      <img src="{{ asset('') }}/assets/images/faces/10.jpg" alt="img">
                                                  </span>
                                              </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <span><i
                                                  class="ri-calendar-line fs-15 lh-1 p-1 text-success bg-success-transparent rounded-pill me-2"></i>Timeline</span>
                                      </td>
                                      <td>:</td>
                                      <td>
                                          <span>22,Dec 2024 - 10,Feb 2024</span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <span><i class="ri-briefcase-line fs-15 lh-1 p-1 text-info bg-info-transparent rounded-pill me-2"></i>Project
                                              Type</span>
                                      </td>
                                      <td>:</td>
                                      <td>
                                          <span class="badge bg-secondary-transparent">Dashboard</span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <span><i class="ri-user-3-line fs-15 lh-1 p-1 text-warning bg-warning-transparent rounded-pill me-2"></i>Project
                                              Manager</span>
                                      </td>
                                      <td>:</td>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <div class="me-2 lh-1">
                                                  <span class="avatar avatar-sm avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/faces/13.jpg" alt="">
                                                  </span>
                                              </div>
                                              <span class="d-block fs-14 fw-medium">S.K.Jacob</span>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="border-bottom-0 rounded">
                                          <span><i class="ri-price-tag-3-line fs-15 lh-1 p-1 text-danger bg-danger-transparent rounded-pill me-2"></i>Tags</span>
                                      </td>
                                      <td class="border-bottom-0 rounded">:</td>
                                      <td class="border-bottom-0 rounded">
                                          <span class="badge bg-light text-default border">Dashboard</span>
                                          <span class="badge bg-light text-default border">Medium</span>
                                          <span class="badge bg-light text-default border">Launch</span>
                                          <span class="badge bg-light text-default border">SpaceX</span>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">Project Discussions</div>
                  </div>
                  <div class="card-body">
                      <ul class="list-unstyled profile-timeline">
                          <li>
                              <div>
                                  <span
                                      class="avatar avatar-md bg-primary-transparent avatar-rounded profile-timeline-avatar">
                                      <span class="avatar avatar-sm bg-primary avatar-rounded"><i class="ri-slideshow-4-line fs-16"></i></span>
                                  </span>
                                  <p class="mb-2">
                                      <span class="fw-medium">Project Kick-off Meeting To Ui developers.</span>
                                      <span class="float-end fs-11 text-muted">15,Nov
                                          2024 - 12:15</span>
                                  </p>
                                  <p class="text-muted mb-0">
                                      Discuss project scope, objectives, timelines and important Design elements.
                                  </p>
                              </div>
                          </li>
                          <li>
                              <div>
                                  <span
                                  class="avatar avatar-md bg-secondary-transparent avatar-rounded profile-timeline-avatar">
                                  <span class="avatar avatar-sm bg-secondary avatar-rounded"><i class="ri-file-image-line fs-16"></i></span>
                              </span>
                                  <p class="text-muted mb-2">
                                      <span class="text-default"><b>Alicia Keys</b> shared a Releted Images of Project.
                                          </span><span class="float-sm-end fs-11 text-muted">21,Dec
                                          2024 - 15:32</span>
                                  </p>
                                  <div class="p-2 rounded bg-light border">
                                      <div class="row gy-3">
                                          <div class="col-xl-6">
                                              <div class="card custom-card border shadow-none mb-0">
                                                  <div class="card-body">
                                                      <div class="mb-0 folder-svg-container d-flex flex-wrap align-items-center">
                                                          <div class="svg-warning text-warning me-3 bg-light avatar avatar-md border">
                                                              <img src="{{ asset('') }}/assets/images/media/file-manager/3.png" alt="img">
                                                          </div>
                                                          <div>
                                                              <p class="fs-14 fw-medium mb-1 lh-1">
                                                                  <a href="javascript:void(0);">Zip File</a>
                                                              </p>
                                                              <span class="text-muted fs-12">
                                                                  246 Files
                                                              </span>
                                                          </div>
                                                          <div class="float-end ms-auto">
                                                              <div class="dropdown">
                                                                  <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                                                                      <i class="ri-more-2-fill fw-semibold text-muted"></i>
                                                                  </a>
                                                                  <ul class="dropdown-menu">
                                                                      <li><a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                                      </li>
                                                                      <li><a class="dropdown-item" href="javascript:void(0);">Rename</a>
                                                                      </li>
                                                                      <li><a class="dropdown-item" href="javascript:void(0);">Hide
                                                                              Folder</a></li>
                                                                  </ul>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-xl-6">
                                              <div class="card custom-card border shadow-none mb-0">
                                                  <div class="card-body">
                                                      <div class="mb-0 folder-svg-container d-flex flex-wrap align-items-center">
                                                          <div class="svg-warning text-warning me-3 bg-light avatar avatar-md border p-1">
                                                              <img src="{{ asset('') }}/assets/images/media/file-manager/1.png" alt="img">
                                                          </div>
                                                          <div>
                                                              <p class="fs-14 fw-medium mb-1 lh-1">
                                                                  <a href="javascript:void(0);">Images</a>
                                                              </p>
                                                              <span class="text-muted fs-12">
                                                                  246 Files
                                                              </span>
                                                          </div>
                                                          <div class="float-end ms-auto">
                                                              <div class="dropdown">
                                                                  <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                                                                      <i class="ri-more-2-fill fw-semibold text-muted"></i>
                                                                  </a>
                                                                  <ul class="dropdown-menu">
                                                                      <li><a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                                      </li>
                                                                      <li><a class="dropdown-item" href="javascript:void(0);">Rename</a>
                                                                      </li>
                                                                      <li><a class="dropdown-item" href="javascript:void(0);">Hide
                                                                              Folder</a></li>
                                                                  </ul>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div>
                                  <span
                                  class="avatar avatar-md bg-success-transparent avatar-rounded profile-timeline-avatar">
                                  <span class="avatar avatar-sm bg-success avatar-rounded"><i class="ri-database-2-line fs-16"></i></span>
                              </span>
                                  <p class="mb-1">
                                      The list of technolgies used in this Project.<span
                                          class="float-end fs-11 text-muted">24,Dec 2024 - 14:34</span>
                                  </p>
                                  <p class="text-muted">Technology id developing rapidly keep up your work.
                                      </p>
                                      <div class="popular-tags gap-2 d-flex flex-wrap">
                                          <a href="javascript:void(0);" class="badge border bg-light text-default fs-12 align-middle"><span class="avatar avatar-sm align-middle me-2 bg-primary-transparent"><i class="ri-html5-line fs-16"></i></span>HTML</a>
                                          <a href="javascript:void(0);" class="badge border bg-light text-default fs-12 align-middle"><span class="avatar avatar-sm align-middle me-2 bg-secondary-transparent"><i class="ri-css3-line fs-16"></i></span>CSS</a>
                                          <a href="javascript:void(0);" class="badge border bg-light text-default fs-12 align-middle"><span class="avatar avatar-sm align-middle me-2 bg-success-transparent"><i class="ri-nodejs-line fs-16"></i></span>Javascript</a>
                                      </div>
                              </div>
                          </li>
                          <li>
                              <div>
                                  <span
                                  class="avatar avatar-md bg-info-transparent avatar-rounded profile-timeline-avatar">
                                  <span class="avatar avatar-sm bg-info avatar-rounded"><i class="ri-file-list-3-line fs-16"></i></span>
                              </span>
                              <p class="mb-2">
                                  <span class="text-default"><b>
                                      Meisha Kerr</b> plans for ongoing support, updates.
                                  </span>
                                  <span class="float-end fs-11 text-muted">05,Jan
                                      2024 - 09:17</span>
                              </p>
                              <p class="text-muted mb-3">
                                  We set up a dedicated team to handle ongoing support and maintenance, with plans to release regular update.
                              </p>
                              <p class="text-muted mb-0">
                                  Future updates will include support for additional wearable devices.
                              </p>
                              </div>
                          </li>
                      </ul>
                  </div>
                  <div class="card-footer">
                      <div class="d-sm-flex align-items-center lh-1 bg-light p-2 rounded">
                          <div class="me-sm-3 mb-2 mb-sm-0">
                              <img src="{{ asset('') }}/assets/images/faces/1.jpg" alt=""
                                  class="avatar avatar-md avatar-rounded">
                          </div>
                          <div class="flex-fill me-sm-2">
                              <div class="input-group">
                                  <input type="text" class="form-control w-sm-50 border shadow-none"
                                      placeholder="Post Anything"
                                      aria-label="Recipient's username with two button addons">
                                  <button class="btn border bg-white text-default btn-wave waves-effect waves-light"
                                      type="button"><i class="bi bi-emoji-smile"></i></button>
                                  <button class="btn border bg-white text-default btn-wave waves-effect waves-light"
                                      type="button"><i class="bi bi-paperclip"></i></button>
                                  <button class="btn border bg-white text-default btn-wave waves-effect waves-light"
                                      type="button"><i class="bi bi-camera"></i></button>
                                  <button class="btn btn-primary btn-wave waves-effect waves-light"
                                      type="button">Post</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--End::row-1 -->

  </div>
</div>
<!-- End::app-content -->

@endsection