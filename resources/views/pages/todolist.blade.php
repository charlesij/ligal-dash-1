@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Page Header -->
      <div
          class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">To Do List</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                          <li class="breadcrumb-item active" aria-current="page">To Do List</li>
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
          <div class="col-xxl-3">
              <div class="card custom-card">
                  <div class="card-header gap-3 align-items-center">
                      <div class="card-title"> To Do List <span class="text-muted d-block fs-12">
                              Create new list</span> </div> <button
                          class="btn btn-sm btn-primary ms-auto" data-bs-toggle="modal"
                          data-bs-target="#addtask"> <i class="ri-add-line me-1"></i>Add New List </button>

                      <div class="modal fade" id="addtask" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h6 class="modal-title" id="mail-ComposeLabel">Create Task</h6>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal"
                                          aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body px-4">
                                      <div class="row gy-2">
                                          <div class="col-xl-12">
                                              <label for="task-name" class="form-label">Task Name</label>
                                              <input type="text" class="form-control" id="task-name"
                                                  placeholder="Task Name">
                                          </div>
                                          <div class="col-xl-12">
                                              <label class="form-label">Assigned To</label>
                                              <select class="form-control"
                                                  name="choices-multiple-remove-button"
                                                  id="choices-multiple-remove-button" multiple>
                                                  <option value="Choice 1" selected>Angelina May</option>
                                                  <option value="Choice 2">Kiara advain</option>
                                                  <option value="Choice 3">Hercules Jhon</option>
                                                  <option value="Choice 4">Mayor Kim</option>
                                              </select>
                                          </div>
                                          <div class="col-xl-6">
                                              <label class="form-label">Assigned Date</label>
                                              <div class="form-group">
                                                  <div class="input-group">
                                                      <div class="input-group-text text-muted"> <i
                                                              class="ri-calendar-line"></i> </div>
                                                      <input type="text" class="form-control"
                                                          id="addignedDate"
                                                          placeholder="Choose date and time">
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-xl-6">
                                              <label class="form-label">Target Date</label>
                                              <div class="form-group">
                                                  <div class="input-group">
                                                      <div class="input-group-text text-muted"> <i
                                                              class="ri-calendar-line"></i> </div>
                                                      <input type="text" class="form-control" id="targetDate"
                                                          placeholder="Choose date and time">
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-xl-6">
                                              <label class="form-label">Status</label>
                                              <select class="form-control" data-trigger
                                                  name="choices-single-default1" id="choices-single-default1">
                                                  <option value="">Select</option>
                                                  <option value="one">In Progress</option>
                                                  <option value="two">Not Started</option>
                                                  <option value="three">Completed</option>
                                                  <option value="four">Pending</option>
                                              </select>
                                          </div>
                                          <div class="col-xl-6">
                                              <label class="form-label">Priority</label>
                                              <select class="form-control" data-trigger
                                                  name="choices-single-default" id="choices-single-default">
                                                  <option value="">Select</option>
                                                  <option value="Critical">Critical</option>
                                                  <option value="High">High</option>
                                                  <option value="Medium">Medium</option>
                                                  <option value="Low">Low</option>
                                              </select>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-light"
                                          data-bs-dismiss="modal">Cancel</button>
                                      <button type="button" class="btn btn-primary">Create</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="card-body p-0">
                      <div class="p-3 task-navigation border-bottom border-block-end-dashed">
                          <ul class="list-unstyled task-main-nav mb-0">
                                  <li class="fs-11 text-muted op-7 mb-2 fw-medium">GENERAL</li>
                              <li class="active mail-type">
                                  <a href="javascript:void(0);">
                                      <div class="d-flex align-items-center">
                                          <span class="me-2 lh-1">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                  fill="#000000" viewBox="0 0 256 256">
                                                  <path
                                                      d="M216,48V208a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V48a8,8,0,0,1,8-8H208A8,8,0,0,1,216,48Z"
                                                      opacity="0.2"></path>
                                                  <path
                                                      d="M173.66,98.34a8,8,0,0,1,0,11.32l-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35A8,8,0,0,1,173.66,98.34ZM224,48V208a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V48A16,16,0,0,1,48,32H208A16,16,0,0,1,224,48ZM208,208V48H48V208H208Z">
                                                  </path>
                                              </svg>
                                          </span>
                                          <span class="flex-fill text-nowrap fw-semibold">
                                              All Tasks
                                          </span>
                                          <span class="badge bg-primary text-fixed-white">446</span>
                                      </div>
                                  </a>
                              </li>
                              <li class="mail-type">
                                  <a href="javascript:void(0);">
                                      <div class="d-flex align-items-center">
                                          <span class="me-2 lh-1">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                  fill="#000000" viewBox="0 0 256 256">
                                                  <path
                                                      d="M229.06,108.79l-48.7,42,14.88,62.79a8.4,8.4,0,0,1-12.52,9.17L128,189.09,73.28,222.74a8.4,8.4,0,0,1-12.52-9.17l14.88-62.79-48.7-42A8.46,8.46,0,0,1,31.73,94L95.64,88.8l24.62-59.6a8.36,8.36,0,0,1,15.48,0l24.62,59.6L224.27,94A8.46,8.46,0,0,1,229.06,108.79Z"
                                                      opacity="0.2"></path>
                                                  <path
                                                      d="M239.18,97.26A16.38,16.38,0,0,0,224.92,86l-59-4.76L143.14,26.15a16.36,16.36,0,0,0-30.27,0L90.11,81.23,31.08,86a16.46,16.46,0,0,0-9.37,28.86l45,38.83L53,211.75a16.38,16.38,0,0,0,24.5,17.82L128,198.49l50.53,31.08A16.4,16.4,0,0,0,203,211.75l-13.76-58.07,45-38.83A16.43,16.43,0,0,0,239.18,97.26Zm-15.34,5.47-48.7,42a8,8,0,0,0-2.56,7.91l14.88,62.8a.37.37,0,0,1-.17.48c-.18.14-.23.11-.38,0l-54.72-33.65a8,8,0,0,0-8.38,0L69.09,215.94c-.15.09-.19.12-.38,0a.37.37,0,0,1-.17-.48l14.88-62.8a8,8,0,0,0-2.56-7.91l-48.7-42c-.12-.1-.23-.19-.13-.5s.18-.27.33-.29l63.92-5.16A8,8,0,0,0,103,91.86l24.62-59.61c.08-.17.11-.25.35-.25s.27.08.35.25L153,91.86a8,8,0,0,0,6.75,4.92l63.92,5.16c.15,0,.24,0,.33.29S224,102.63,223.84,102.73Z">
                                                  </path>
                                              </svg>
                                          </span>
                                          <span class="flex-fill text-nowrap">
                                              Starred
                                          </span>
                                          <span class="badge bg-secondary">26</span>
                                      </div>
                                  </a>
                              </li>
                              <li class="mail-type">
                                  <a href="javascript:void(0);">
                                      <div class="d-flex align-items-center">
                                          <span class="me-2 lh-1">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                  fill="#000000" viewBox="0 0 256 256">
                                                  <path
                                                      d="M224,118.31V200a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8V118.31h0A191.14,191.14,0,0,0,128,144,191.08,191.08,0,0,0,224,118.31Z"
                                                      opacity="0.2"></path>
                                                  <path
                                                      d="M104,112a8,8,0,0,1,8-8h32a8,8,0,0,1,0,16H112A8,8,0,0,1,104,112ZM232,72V200a16,16,0,0,1-16,16H40a16,16,0,0,1-16-16V72A16,16,0,0,1,40,56H80V48a24,24,0,0,1,24-24h48a24,24,0,0,1,24,24v8h40A16,16,0,0,1,232,72ZM96,56h64V48a8,8,0,0,0-8-8H104a8,8,0,0,0-8,8ZM40,72v41.62A184.07,184.07,0,0,0,128,136a184,184,0,0,0,88-22.39V72ZM216,200V131.63A200.25,200.25,0,0,1,128,152a200.19,200.19,0,0,1-88-20.36V200H216Z">
                                                  </path>
                                              </svg>
                                          </span>
                                          <span class="flex-fill text-nowrap">
                                              Work
                                          </span>
                                      </div>
                                  </a>
                              </li>
                              <li class="mail-type">
                                  <a href="javascript:void(0);">
                                      <div class="d-flex align-items-center">
                                          <span class="me-2 lh-1">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M216,48V88H40V48a8,8,0,0,1,8-8H208A8,8,0,0,1,216,48Z" opacity="0.2"></path><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-68-76a12,12,0,1,1-12-12A12,12,0,0,1,140,132Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,184,132ZM96,172a12,12,0,1,1-12-12A12,12,0,0,1,96,172Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,140,172Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,184,172Z"></path></svg>
                                          </span>
                                          <span class="flex-fill text-nowrap">
                                            Today
                                          </span>
                                      </div>
                                  </a>
                              </li>
                              <li class="mail-type">
                                  <a href="javascript:void(0);">
                                      <div class="d-flex align-items-center">
                                          <span class="me-2 lh-1">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M224,128a96,96,0,1,1-96-96A96,96,0,0,1,224,128Z" opacity="0.2"></path><path d="M173.66,98.34a8,8,0,0,1,0,11.32l-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35A8,8,0,0,1,173.66,98.34ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z"></path></svg>
                                          </span>
                                          <span class="flex-fill text-nowrap">
                                              Completed
                                          </span>
                                      </div>
                                  </a>
                              </li>
                              <li class="mail-type">
                                  <a href="javascript:void(0);">
                                      <div class="d-flex align-items-center">
                                          <span class="me-2 lh-1">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                  fill="#000000" viewBox="0 0 256 256">
                                                  <path d="M200,56V208a8,8,0,0,1-8,8H64a8,8,0,0,1-8-8V56Z"
                                                      opacity="0.2"></path>
                                                  <path
                                                      d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z">
                                                  </path>
                                              </svg>
                                          </span>
                                          <span class="flex-fill text-nowrap">
                                              Trash
                                          </span>
                                      </div>
                                  </a>
                              </li>
                              <li class="mail-type">
                                  <a href="javascript:void(0);">
                                      <div class="d-flex align-items-center">
                                          <span class="me-2 lh-1">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                  fill="#000000" viewBox="0 0 256 256">
                                                  <path d="M136,108A52,52,0,1,1,84,56,52,52,0,0,1,136,108Z"
                                                      opacity="0.2"></path>
                                                  <path
                                                      d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z">
                                                  </path>
                                              </svg>
                                          </span>
                                          <span class="flex-fill text-nowrap">
                                              Personal
                                          </span>
                                          <span class="badge bg-success">12</span>
                                      </div>
                                  </a>
                              </li>
                              <li class="fs-11 text-muted op-7 mb-3 fw-medium">WORK SPACE</li>
                              <li class="border mb-2">
                                  <div
                                      class="d-flex align-items-center justify-content-between">
                                      <div class="d-flex align-items-center">
                                          <span class="me-3 lh-1">
                                              <input class="form-check-input" type="checkbox" value=""
                                                  id="flexCheckDefault1">
                                          </span>
                                          <div class="lh-1">
                                              <p class="fw-semibold mb-0">Organic Photo shoot</p>
                                              <span class="fs-11 text-muted">Today</span>
                                          </div>
                                      </div>
                                      <div>
                                          <span class="badge bg-light text-default fs-12">work</span>
                                          <span class="badge bg-light text-default fs-12">Hooli</span>
                                      </div>
                                  </div>
                              </li>
                              <li class="border mb-2">
                                  <div
                                      class="d-flex align-items-center justify-content-between">
                                      <div class="d-flex align-items-center">
                                          <span class="me-3 lh-1">
                                              <input class="form-check-input" type="checkbox" value=""
                                                  id="flexCheckChecked" checked="">
                                          </span>
                                          <div class="lh-1">
                                              <p class="fw-semibold mb-0">Bug Fixes and Issue Tracking..</p>
                                              <span class="fs-11 text-muted">Tommorow</span>
                                          </div>
                                      </div>
                                      <div>
                                          <span class="badge bg-light text-default fs-12">work</span>
                                      </div>
                                  </div>
                              </li>
                              <li class="border mb-2">
                                  <div
                                      class="d-flex align-items-center justify-content-between">
                                      <div class="d-flex align-items-center">
                                          <span class="me-3 lh-1">
                                              <input class="form-check-input" type="checkbox" value=""
                                                  id="flexCheckChecked1" checked="">
                                          </span>
                                          <div class="lh-1">
                                              <p class="fw-semibold mb-0">Admin Template review...</p>
                                              <span class="fs-11 text-muted">Today</span>
                                          </div>
                                      </div>
                                      <div>
                                          <span class="badge bg-light text-default fs-12">work</span>
                                          <span class="badge bg-light text-default fs-12">Design</span>
                                      </div>
                                  </div>
                              </li>
                              <li class="border">
                                  <div
                                      class="d-flex align-items-center justify-content-between">
                                      <div class="d-flex align-items-center">
                                          <span class="me-3 lh-1">
                                              <input class="form-check-input" type="checkbox" value=""
                                                  id="flexCheckDefault">
                                          </span>
                                          <div class="lh-1">
                                              <p class="fw-semibold mb-0">New Feature Development...</p>
                                              <span class="fs-11 text-muted">Tommorow</span>
                                          </div>
                                      </div>
                                      <div>
                                          <span class="badge bg-light text-default fs-12">Development</span>
                                      </div>
                                  </div>
                              </li>
                          </ul>
                      </div>
                      <div class="p-3">
                          <div class="card custom-card todolist-card overflow-hidden mb-0">
                              <div class="card-body p-4">
                                  <div class="row">
                                      <div class="col-xl-8 col-8">
                                          <h4 class="fw-semibold">
                                              2/18 Tasks
                                          </h4>
                                          <p class="fs-14 mb-2">Today Completed Tasks</p>
                                          <button
                                              class="btn btn-primary btn-wave mt-1 waves-effect waves-light">Continue<i
                                                  class="ti ti-arrow-narrow-right align-middle ms-1"></i></button>
                                      </div>
                                      <div class="col-xl-4 col-4">
                                          <img src="{{ asset('') }}assets/images/media/media-76.png" alt="">
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-9">
              <div class="row">
                  <div class="col-xl-3">
                      <div class="card custom-card position-relative rounded-md overflow-hidden border border-primary border-opacity-25">
                          <div class="card-body p-4">
                              <h5 class="mb-1ld">12/35 Task</h5>
                              <div class="fw-medium op-7">Priority Tasks <span
                                      class="ms-1 badge bg-primary-transparent"> <i class="ri-circle-fill fs-7"></i> 23%  </span> </div>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"  class="svg-icon-med position-absolute svg-primary end-0 bottom-0 opacity-1 text-primary" fill="#000000" viewBox="0 0 256 256"><path d="M224,152v48a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8V152Z" opacity="0.2"></path><path d="M216,56H176V48a24,24,0,0,0-24-24H104A24,24,0,0,0,80,48v8H40A16,16,0,0,0,24,72V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V72A16,16,0,0,0,216,56ZM96,48a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96ZM216,72v72H40V72Zm0,128H40V160H216v40Z"></path></svg>
                                  
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3">
                      <div class="card custom-card position-relative rounded-md overflow-hidden border border-secondary border-opacity-25">
                          <div class="card-body p-4">
                              <h5 class="mb-1ld">3/34 Task</h5>
                              <div class="fw-medium op-7">Upcoming Task<span
                                      class="ms-1 badge bg-secondary-transparent"><i class="ri-circle-fill fs-7"></i> 12.6% </span> </div>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"  class="svg-icon-med position-absolute svg-primary end-0 bottom-0 opacity-1 text-secondary" fill="#000000" viewBox="0 0 256 256"><path d="M192,64V75.64A8,8,0,0,1,188.82,82L128,128,67.2,82.4A8,8,0,0,1,64,76V64Z" opacity="0.2"></path><path d="M184,24H72A16,16,0,0,0,56,40V76a16.07,16.07,0,0,0,6.4,12.8L114.67,128,62.4,167.2A16.07,16.07,0,0,0,56,180v36a16,16,0,0,0,16,16H184a16,16,0,0,0,16-16V180.36a16.09,16.09,0,0,0-6.35-12.77L141.27,128l52.38-39.59A16.09,16.09,0,0,0,200,75.64V40A16,16,0,0,0,184,24Zm0,16V56H72V40Zm0,176H72V180l56-42,56,42.35Zm-56-98L72,76V72H184v3.64Z"></path></svg>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3">
                      <div class="card custom-card position-relative rounded-md overflow-hidden border border-success border-opacity-25">
                          <div class="card-body p-4">
                              <h5 class="mb-1ld">12/35</h5>
                              <div class="fw-medium op-7">Overdue Task<span
                                      class="ms-1 badge bg-success-transparent"> <i class="ri-circle-fill fs-7"></i> 0.56% </span> </div>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"  class="svg-icon-med position-absolute svg-primary end-0 bottom-0 opacity-1 text-success" fill="#000000" viewBox="0 0 256 256"><path d="M208,88H152V32Z" opacity="0.2"></path><path d="M213.66,82.34l-56-56A8,8,0,0,0,152,24H56A16,16,0,0,0,40,40V216a16,16,0,0,0,16,16H200a16,16,0,0,0,16-16V88A8,8,0,0,0,213.66,82.34ZM160,51.31,188.69,80H160ZM200,216H56V40h88V88a8,8,0,0,0,8,8h48V216Zm-32-80a8,8,0,0,1-8,8H96a8,8,0,0,1,0-16h64A8,8,0,0,1,168,136Zm0,32a8,8,0,0,1-8,8H96a8,8,0,0,1,0-16h64A8,8,0,0,1,168,168Z"></path></svg>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3">
                      <div class="card custom-card position-relative rounded-md overflow-hidden  border border-info border-opacity-25">
                          <div class="card-body p-4">
                              <h5 class="mb-1ld">9/24</h5>
                              <div class="fw-medium op-7">Pending Task<span
                                      class="ms-1 badge bg-info-transparent"><i class="ri-circle-fill fs-7"></i> 12.4% </span> </div> 
                                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"  class="svg-icon-med position-absolute svg-primary end-0 bottom-0 opacity-1 text-info" fill="#000000" viewBox="0 0 256 256"><path d="M208,40H176V80a8,8,0,0,1-8,8H88a8,8,0,0,1-8-8V40.73a8,8,0,0,0-2.34,1.61L42.34,77.66A8,8,0,0,0,40,83.31V208a8,8,0,0,0,8,8H208a8,8,0,0,0,8-8V48A8,8,0,0,0,208,40ZM128,184a32,32,0,1,1,32-32A32,32,0,0,1,128,184Z" opacity="0.2"></path><path d="M208,32H83.31A15.86,15.86,0,0,0,72,36.69L36.69,72A15.86,15.86,0,0,0,32,83.31V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM88,48h80V80H88ZM208,208H48V83.31l24-24V80A16,16,0,0,0,88,96h80a16,16,0,0,0,16-16V48h24Zm-80-96a40,40,0,1,0,40,40A40,40,0,0,0,128,112Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,176Z"></path></svg>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-12">
                  <div class="card custom-card">
                      <div class="card-header">
                          <div class="flex-grow-1">
                              <input class="form-control" type="text" placeholder="Search Here"
                                  aria-label=".form-control-sm example">
                          </div>
                          <div class="d-flex flex-wrap gap-2">
                              <div class="dropdown">
                                  <a href="javascript:void(0);" class="btn btn-light btn-wave"
                                      data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i
                                          class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                  </a>
                                  <ul class="dropdown-menu" role="menu">
                                      <li><a class="dropdown-item" href="javascript:void(0);">New</a></li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                      <div class="card-body p-0 position-relative" id="todo-content">
                          <div>
                              <div class="table-responsive">
                                  <table class="table text-nowrap">
                                      <thead>
                                          <tr>
                                              <th>
                                                  <input class="form-check-input check-all" type="checkbox"
                                                      id="all-tasks" value="" aria-label="...">
                                              </th>
                                              <th class="todolist-handle-drag">

                                              </th>
                                              <th scope="col">Task Title</th>
                                              <th scope="col">Status</th>
                                              <th scope="col">Due Date</th>
                                              <th scope="col">Priority</th>
                                              <th scope="col" class="todolist-progress">Progress</th>
                                              <th scope="col" class="text-end">Action</th>
                                          </tr>
                                      </thead>
                                      <tbody id="todo-drag">
                                          <tr class="todo-box">
                                              <td class="task-checkbox"><input class="form-check-input"
                                                      type="checkbox" value="" aria-label="..."></td>
                                              <td>
                                                  <button
                                                      class="btn btn-icon btn-sm btn-wave btn-light todo-handle">:
                                                      :</button>
                                              </td>
                                              <td>
                                                  <span class="fw-medium">Complete Project Proposal</span>
                                              </td>
                                              <td>
                                                  <span
                                                      class="fw-semibold text-primary badge bg-primary-transparent"><i
                                                          class="ri-circle-line fw-semibold fs-7 me-2 lh-1 align-middle"></i>In
                                                      Progress</span>
                                              </td>
                                              <td>
                                                  2024-03-10
                                              </td>
                                              <td>
                                                  <span class="badge bg-primary">Medium</span>
                                              </td>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="progress progress-animate progress-xs w-100"
                                                          role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                          aria-valuemax="100">
                                                          <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
                                                              style="width: 40%"></div>
                                                      </div>
                                                      <div class="ms-2">40%</div>
                                                  </div>
                                              </td>
                                              <td class="text-end">
                                                  <div class="dropdown">
                                                      <a aria-label="anchor"
                                                          class="btn btn-light btn-icon btn-sm btn-wave"
                                                          href="javascript:void(0);" data-bs-toggle="dropdown">
                                                          <i class="ri-more-2-fill text-muted"></i>
                                                      </a>
                                                      <ul class="dropdown-menu" role="menu">
                                                          <li><a class="dropdown-item"
                                                                  href="javascript:void(0);"><i
                                                                      class="ri-edit-line me-2"></i>Edit</a></li>
                                                          <li><a class="dropdown-item"
                                                                  href="javascript:void(0);"><i
                                                                      class="ri-delete-bin-5-line me-2"></i>Delete</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr class="todo-box">
                                              <td class="task-checkbox"><input class="form-check-input"
                                                      type="checkbox" value="" aria-label="..." checked=""></td>
                                              <td>
                                                  <button
                                                      class="btn btn-icon btn-sm btn-wave btn-light todo-handle">:
                                                      :</button>
                                              </td>
                                              <td>
                                                  <span class="fw-medium">Client Meeting</span>
                                              </td>
                                              <td>
                                                  <span
                                                      class="fw-medium text-success badge bg-success-transparent"><i
                                                          class="ri-circle-line fw-semibold fs-7 me-2 lh-1 align-middle"></i>Not
                                                      Started</span>
                                              </td>
                                              <td>
                                                  2024-03-15
                                              </td>
                                              <td>
                                                  <span class="badge bg-danger">High</span>
                                              </td>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="progress progress-animate progress-xs w-100"
                                                          role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                                          aria-valuemax="100">
                                                          <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary"
                                                              style="width: 70%"></div>
                                                      </div>
                                                      <div class="ms-2">70%</div>
                                                  </div>
                                              </td>
                                              <td class="text-end">
                                                  <div class="dropdown">
                                                      <a aria-label="anchor"
                                                          class="btn btn-light btn-icon btn-sm btn-wave"
                                                          href="javascript:void(0);" data-bs-toggle="dropdown">
                                                          <i class="ri-more-2-fill text-muted"></i>
                                                      </a>
                                                      <ul class="dropdown-menu" role="menu">
                                                          <li><a class="dropdown-item"
                                                                  href="javascript:void(0);"><i
                                                                      class="ri-edit-line me-2"></i>Edit</a></li>
                                                          <li><a class="dropdown-item"
                                                                  href="javascript:void(0);"><i
                                                                      class="ri-delete-bin-5-line me-2"></i>Delete</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr class="todo-box">
                                              <td class="task-checkbox"><input class="form-check-input"
                                                      type="checkbox" value="" aria-label="..."></td>
                                              <td>
                                                  <button
                                                      class="btn btn-icon btn-sm btn-wave btn-light todo-handle">:
                                                      :</button>
                                              </td>
                                              <td>
                                                  <span class="fw-medium">Research Market Trends</span>
                                              </td>
                                              <td>
                                                  <span
                                                      class="fw-medium text-warning  badge bg-warning-transparent"><i
                                                          class="ri-circle-line fw-semibold fs-7 me-2 lh-1 align-middle"></i>Completed</span>
                                              </td>
                                              <td>
                                                  2024-03-12
                                              </td>
                                              <td>
                                                  <span class="badge bg-success">Low</span>
                                              </td>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="progress progress-animate progress-xs w-100"
                                                          role="progressbar" aria-valuenow="62" aria-valuemin="0"
                                                          aria-valuemax="100">
                                                          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                                              style="width: 62%"></div>
                                                      </div>
                                                      <div class="ms-2">62%</div>
                                                  </div>
                                              </td>
                                              <td class="text-end">
                                                  <div class="dropdown">
                                                      <a aria-label="anchor"
                                                          class="btn btn-light btn-icon btn-sm btn-wave"
                                                          href="javascript:void(0);" data-bs-toggle="dropdown">
                                                          <i class="ri-more-2-fill text-muted"></i>
                                                      </a>
                                                      <ul class="dropdown-menu" role="menu">
                                                          <li><a class="dropdown-item"
                                                                  href="javascript:void(0);"><i
                                                                      class="ri-edit-line me-2"></i>Edit</a></li>
                                                          <li><a class="dropdown-item"
                                                                  href="javascript:void(0);"><i
                                                                      class="ri-delete-bin-5-line me-2"></i>Delete</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr class="todo-box">
                                              <td class="task-checkbox"><input class="form-check-input"
                                                      type="checkbox" value="" aria-label="..."></td>
                                              <td>
                                                  <button
                                                      class="btn btn-icon btn-sm btn-wave btn-light todo-handle">:
                                                      :</button>
                                              </td>
                                              <td>
                                                  <span class="fw-medium">Update Website Content</span>
                                              </td>
                                              <td>
                                                  <span
                                                      class="fw-medium text-success badge bg-success-transparent"><i
                                                          class="ri-circle-line fw-semibold fs-7 me-2 lh-1 align-middle"></i>Not
                                                      Started</span>
                                              </td>
                                              <td>
                                                  2024-03-18
                                              </td>
                                              <td>
                                                  <span class="badge bg-success">Low</span>
                                              </td>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="progress progress-animate progress-xs w-100"
                                                          role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                                          aria-valuemax="100">
                                                          <div class="progress-bar progress-bar-striped progress-bar-animated bg-orange"
                                                              style="width: 85%"></div>
                                                      </div>
                                                      <div class="ms-2">85%</div>
                                                  </div>
                                              </td>
                                              <td class="text-end">
                                                  <div class="dropdown">
                                                      <a aria-label="anchor"
                                                          class="btn btn-light btn-icon btn-sm btn-wave"
                                                          href="javascript:void(0);" data-bs-toggle="dropdown">
                                                          <i class="ri-more-2-fill text-muted"></i>
                                                      </a>
                                                      <ul class="dropdown-menu" role="menu">
                                                          <li><a class="dropdown-item"
                                                                  href="javascript:void(0);"><i
                                                                      class="ri-edit-line me-2"></i>Edit</a></li>
                                                          <li><a class="dropdown-item"
                                                                  href="javascript:void(0);"><i
                                                                      class="ri-delete-bin-5-line me-2"></i>Delete</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr class="todo-box">
                                              <td class="task-checkbox"><input class="form-check-input"
                                                      type="checkbox" value="" aria-label="..." checked=""></td>
                                              <td>
                                                  <button
                                                      class="btn btn-icon btn-sm btn-wave btn-light todo-handle">:
                                                      :</button>
                                              </td>
                                              <td>
                                                  <span class="fw-medium">Team Meeting</span>
                                              </td>
                                              <td>
                                                  <span
                                                      class="fw-medium text-secondary badge bg-secondary-transparent"><i
                                                          class="ri-circle-line fw-semibold fs-7 me-2 lh-1 align-middle"></i>Pending</span>
                                              </td>
                                              <td>
                                                  2024-03-22
                                              </td>
                                              <td>
                                                  <span class="badge bg-primary">Medium</span>
                                              </td>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="progress progress-animate progress-xs w-100"
                                                          role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                                          aria-valuemax="100">
                                                          <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                                                              style="width: 55%"></div>
                                                      </div>
                                                      <div class="ms-2">55%</div>
                                                  </div>
                                              </td>
                                              <td class="text-end">
                                                  <div class="dropdown">
                                                      <a aria-label="anchor"
                                                          class="btn btn-light btn-icon btn-sm btn-wave"
                                                          href="javascript:void(0);" data-bs-toggle="dropdown">
                                                          <i class="ri-more-2-fill text-muted"></i>
                                                      </a>
                                                      <ul class="dropdown-menu" role="menu">
                                                          <li><a class="dropdown-item"
                                                                  href="javascript:void(0);"><i
                                                                      class="ri-edit-line me-2"></i>Edit</a></li>
                                                          <li><a class="dropdown-item"
                                                                  href="javascript:void(0);"><i
                                                                      class="ri-delete-bin-5-line me-2"></i>Delete</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr class="todo-box">
                                              <td class="task-checkbox"><input class="form-check-input"
                                                      type="checkbox" value="" aria-label="..." checked=""></td>
                                              <td>
                                                  <button
                                                      class="btn btn-icon btn-sm btn-wave btn-light todo-handle">:
                                                      :</button>
                                              </td>
                                              <td>
                                                  <span class="fw-medium">Prepare Monthly Report</span>
                                              </td>
                                              <td>
                                                  <span
                                                      class="fw-medium text-success badge bg-success-transparent"><i
                                                          class="ri-circle-line fw-semibold fs-7 me-2 lh-1 align-middle"></i>Not
                                                      Started</span>
                                              </td>
                                              <td>
                                                  2024-03-28
                                              </td>
                                              <td>
                                                  <span class="badge bg-danger">High</span>
                                              </td>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="progress progress-animate progress-xs w-100"
                                                          role="progressbar" aria-valuenow="96" aria-valuemin="0"
                                                          aria-valuemax="100">
                                                          <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                                              style="width: 96%"></div>
                                                      </div>
                                                      <div class="ms-2">96%</div>
                                                  </div>
                                              </td>
                                              <td class="text-end">
                                                  <div class="dropdown">
                                                      <a aria-label="anchor"
                                                          class="btn btn-light btn-icon btn-sm btn-wave"
                                                          href="javascript:void(0);" data-bs-toggle="dropdown">
                                                          <i class="ri-more-2-fill text-muted"></i>
                                                      </a>
                                                      <ul class="dropdown-menu" role="menu">
                                                          <li><a class="dropdown-item"
                                                                  href="javascript:void(0);"><i
                                                                      class="ri-edit-line me-2"></i>Edit</a></li>
                                                          <li><a class="dropdown-item"
                                                                  href="javascript:void(0);"><i
                                                                      class="ri-delete-bin-5-line me-2"></i>Delete</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr class="todo-box">
                                              <td class="task-checkbox"><input class="form-check-input"
                                                      type="checkbox" value="" aria-label="..."></td>
                                              <td>
                                                  <button
                                                      class="btn btn-icon btn-sm btn-wave btn-light todo-handle">:
                                                      :</button>
                                              </td>
                                              <td>
                                                  <span class="fw-medium">Review Project Milestones</span>
                                              </td>
                                              <td>
                                                  <span
                                                      class="fw-medium text-success badge bg-success-transparent"><i
                                                          class="ri-circle-line fw-semibold fs-7 me-2 lh-1 align-middle"></i>In
                                                      Progress</span>
                                              </td>
                                              <td>
                                                  2024-03-14
                                              </td>
                                              <td>
                                                  <span class="badge bg-success">Low</span>
                                              </td>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="progress progress-animate progress-xs w-100"
                                                          role="progressbar" aria-valuenow="78" aria-valuemin="0"
                                                          aria-valuemax="100">
                                                          <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                                              style="width: 78%"></div>
                                                      </div>
                                                      <div class="ms-2">78%</div>
                                                  </div>
                                              </td>
                                              <td class="text-end">
                                                  <div class="dropdown">
                                                      <a aria-label="anchor"
                                                          class="btn btn-light btn-icon btn-sm btn-wave"
                                                          href="javascript:void(0);" data-bs-toggle="dropdown">
                                                          <i class="ri-more-2-fill text-muted"></i>
                                                      </a>
                                                      <ul class="dropdown-menu" role="menu">
                                                          <li><a class="dropdown-item"
                                                                  href="javascript:void(0);"><i
                                                                      class="ri-edit-line me-2"></i>Edit</a></li>
                                                          <li><a class="dropdown-item"
                                                                  href="javascript:void(0);"><i
                                                                      class="ri-delete-bin-5-line me-2"></i>Delete</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr class="todo-box">
                                              <td class="task-checkbox"><input class="form-check-input"
                                                      type="checkbox" value="" aria-label="..." checked=""></td>
                                              <td>
                                                  <button
                                                      class="btn btn-icon btn-sm btn-wave btn-light todo-handle">:
                                                      :</button>
                                              </td>
                                              <td>
                                                  <span class="fw-medium">Customer Feedback Analysis</span>
                                              </td>
                                              <td>
                                                  <span
                                                      class="fw-medium text-primary badge bg-primary-transparent"><i
                                                          class="ri-circle-line fw-semibold fs-7 me-2 lh-1 align-middle"></i>In
                                                      Progress</span>
                                              </td>
                                              <td>
                                                  2024-03-20
                                              </td>
                                              <td>
                                                  <span class="badge bg-danger">High</span>
                                              </td>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="progress progress-animate progress-xs w-100"
                                                          role="progressbar" aria-valuenow="71" aria-valuemin="0"
                                                          aria-valuemax="100">
                                                          <div class="progress-bar progress-bar-striped progress-bar-animated bg-teal"
                                                              style="width: 71%"></div>
                                                      </div>
                                                      <div class="ms-2">71%</div>
                                                  </div>
                                              </td>
                                              <td class="text-end">
                                                  <div class="dropdown">
                                                      <a aria-label="anchor"
                                                          class="btn btn-light btn-icon btn-sm btn-wave"
                                                          href="javascript:void(0);" data-bs-toggle="dropdown">
                                                          <i class="ri-more-2-fill text-muted"></i>
                                                      </a>
                                                      <ul class="dropdown-menu" role="menu">
                                                          <li><a class="dropdown-item"
                                                                  href="javascript:void(0);"><i
                                                                      class="ri-edit-line me-2"></i>Edit</a></li>
                                                          <li><a class="dropdown-item"
                                                                  href="javascript:void(0);"><i
                                                                      class="ri-delete-bin-5-line me-2"></i>Delete</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr class="todo-box">
                                              <td class="task-checkbox"><input class="form-check-input"
                                                      type="checkbox" value="" aria-label="..."></td>
                                              <td>
                                                  <button
                                                      class="btn btn-icon btn-sm btn-wave btn-light todo-handle">:
                                                      :</button>
                                              </td>
                                              <td>
                                                  <span class="fw-medium">Training Session</span>
                                              </td>
                                              <td>
                                                  <span
                                                      class="fw-medium text-success badge bg-success-transparent"><i
                                                          class="ri-circle-line fw-semibold fs-7 me-2 lh-1 align-middle"></i>Not
                                                      Started</span>
                                              </td>
                                              <td>
                                                  2024-03-24
                                              </td>
                                              <td>
                                                  <span class="badge bg-primary">Medium</span>
                                              </td>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="progress progress-animate progress-xs w-100"
                                                          role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                                          aria-valuemax="100">
                                                          <div class="progress-bar progress-bar-striped progress-bar-animated bg-pink"
                                                              style="width: 60%"></div>
                                                      </div>
                                                      <div class="ms-2">60%</div>
                                                  </div>
                                              </td>
                                              <td class="text-end">
                                                  <div class="dropdown">
                                                      <a aria-label="anchor"
                                                          class="btn btn-light btn-icon btn-sm btn-wave"
                                                          href="javascript:void(0);" data-bs-toggle="dropdown">
                                                          <i class="ri-more-2-fill text-muted"></i>
                                                      </a>
                                                      <ul class="dropdown-menu" role="menu">
                                                          <li><a class="dropdown-item"
                                                                  href="javascript:void(0);"><i
                                                                      class="ri-edit-line me-2"></i>Edit</a></li>
                                                          <li><a class="dropdown-item"
                                                                  href="javascript:void(0);"><i
                                                                      class="ri-delete-bin-5-line me-2"></i>Delete</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr class="todo-box">
                                              <td class="task-checkbox"><input class="form-check-input"
                                                      type="checkbox" value="" aria-label="..."></td>
                                              <td>
                                                  <button
                                                      class="btn btn-icon btn-sm btn-wave btn-light todo-handle">:
                                                      :</button>
                                              </td>
                                              <td>
                                                  <span class="fw-medium">Finalize Budget</span>
                                              </td>
                                              <td>
                                                  <span
                                                      class="fw-medium text-primary badge bg-primary-transparent"><i
                                                          class="ri-circle-line fw-semibold fs-7 me-2 lh-1 align-middle"></i>In
                                                      Progress</span>
                                              </td>
                                              <td>
                                                  2024-03-25
                                              </td>
                                              <td>
                                                  <span class="badge bg-success">Low</span>
                                              </td>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="progress progress-animate progress-xs w-100"
                                                          role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                                          aria-valuemax="100">
                                                          <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark"
                                                              style="width: 80%"></div>
                                                      </div>
                                                      <div class="ms-2">80%</div>
                                                  </div>
                                              </td>
                                              <td class="text-end">
                                                  <div class="dropdown">
                                                      <a aria-label="anchor"
                                                          class="btn btn-light btn-icon btn-sm btn-wave"
                                                          href="javascript:void(0);" data-bs-toggle="dropdown">
                                                          <i class="ri-more-2-fill text-muted"></i>
                                                      </a>
                                                      <ul class="dropdown-menu" role="menu">
                                                          <li><a class="dropdown-item"
                                                                  href="javascript:void(0);"><i
                                                                      class="ri-edit-line me-2"></i>Edit</a></li>
                                                          <li><a class="dropdown-item"
                                                                  href="javascript:void(0);"><i
                                                                      class="ri-delete-bin-5-line me-2"></i>Delete</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                      <div class="card-footer border-top-0">
                          <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                              <div> Showing 10 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i> </div>
                              <div>
                                  <nav aria-label="Page navigation" class="pagination-style-4">
                                      <ul class="pagination mb-0">
                                          <li class="page-item disabled"> <a class="page-link"
                                                  href="javascript:void(0);"> Prev </a> </li>
                                          <li class="page-item active"><a class="page-link"
                                                  href="javascript:void(0);">1</a></li>
                                          <li class="page-item"><a class="page-link"
                                                  href="javascript:void(0);">2</a></li>
                                          <li class="page-item"> <a class="page-link text-primary"
                                                  href="javascript:void(0);"> next </a> </li>
                                      </ul>
                                  </nav>
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