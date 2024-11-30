@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Page Header -->
      <div
          class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Kanban Board</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Task</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Kanban Board</li>
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
          <div class="col-xl-12">
              <div class="card custom-card">
                  <div class="card-body">
                      <div class="d-sm-flex gap-3 mb-4">
                          <div class="input-group mb-2 mb-sm-0"> <input type="text" class="form-control"
                                  placeholder="Search Project Here" aria-describedby="button-addon2"> <button
                                  class="btn btn-light border" type="submit">Search</button> </div> <a
                              href="javascript:void(0);" class="btn btn-primary me-2 text-nowrap" data-bs-toggle="modal" data-bs-target="#add-board"><i
                                  class="ri-add-line me-1 fw-medium align-middle"></i>New Board</a>
                      </div>
                      <div class="row row-cols-xxl-5 row-col-xl-3 row-cols-md-2 row-cols-1 gy-3">
                          <div class="col">
                              <div class="card custom-card border shadow-none mb-0">
                                  <div class="card-body">
                                      <div class="d-flex align-items-start gap-3 flex-wrap">
                                          <div>
                                              <span class="avatar avatar-md bg-primary">
                                                  <i class="ri-briefcase-line fs-18"></i>
                                              </span>
                                          </div>
                                          <div class="flex-fill">
                                              <span class="d-block mb-2">New Tasks</span>
                                              <h5 class="fw-semibold mb-2 lh-1">32 <span class="text-success fw-semibold fs-12"><i class="ti ti-arrow-narrow-up"></i>0.19%</span></h5>
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
                              <div class="card custom-card border shadow-none mb-0">
                                  <div class="card-body">
                                      <div class="d-flex align-items-start gap-3 flex-wrap">
                                          <div>
                                              <span class="avatar avatar-md bg-secondary">
                                                  <i class="ri-briefcase-line fs-18"></i>
                                              </span>
                                          </div>
                                          <div class="flex-fill">
                                              <span class="d-block mb-2">Todo Task</span>
                                              <h5 class="fw-semibold mb-2 lh-1">16 <span class="text-danger fw-semibold fs-12"><i class="ti ti-arrow-narrow-down"></i>1.23%</span></h5>
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
                              <div class="card custom-card border shadow-none mb-0">
                                  <div class="card-body">
                                      <div class="d-flex align-items-start gap-3 flex-wrap">
                                          <div>
                                              <span class="avatar avatar-md bg-success">
                                                  <i class="ri-briefcase-line fs-18"></i>
                                              </span>
                                          </div>
                                          <div class="flex-fill">
                                              <span class="d-block mb-2">Ongoing Task</span>
                                              <h5 class="fw-semibold mb-2 lh-1">26 <span class="text-success fw-semibold fs-12"><i class="ti ti-arrow-narrow-up"></i>0.54%</span></h5>
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
                              <div class="card custom-card border shadow-none mb-0">
                                  <div class="card-body">
                                      <div class="d-flex align-items-start gap-3 flex-wrap">
                                          <div>
                                              <span class="avatar avatar-md bg-info">
                                                  <i class="ri-briefcase-line fs-18"></i>
                                              </span>
                                          </div>
                                          <div class="flex-fill">
                                              <span class="d-block mb-2">In Review Tasks</span>
                                              <h5 class="fw-semibold mb-2 lh-1">52 <span class="text-danger fw-semibold fs-12"><i class="ti ti-arrow-narrow-down"></i>0.16%</span></h5>
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
                              <div class="card custom-card border shadow-none mb-0">
                                  <div class="card-body">
                                      <div class="d-flex align-items-start gap-3 flex-wrap">
                                          <div>
                                              <span class="avatar avatar-md bg-warning">
                                                  <i class="ri-briefcase-line fs-18"></i>
                                              </span>
                                          </div>
                                          <div class="flex-fill">
                                              <span class="d-block mb-2">Complted Tasks</span>
                                              <h5 class="fw-semibold mb-2 lh-1">43 <span class="text-success fw-semibold fs-12"><i class="ti ti-arrow-narrow-up"></i>0.29%</span></h5>
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
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: row-1 -->

      <!-- Start::row-2 -->
      <div class="ZYNIX-kanban-board">
          <div class="kanban-tasks-type new p-0 border bg-white rounded">
              <div class="mb-3 p-3 pb-0">
                  <div class="d-flex justify-content-between align-items-center p-2 border border-primary border-opacity-25 rounded">
                      <span class="d-block fw-medium fs-14"><input class="form-check-input me-2" type="checkbox" value="" id="primaryChecked" checked="">New Task</span>
                      <div>
                          <a aria-label="anchor" href="javascript:void(0)"
                              class="btn btn-sm btn-light text-default border btn-wave" data-bs-toggle="modal"
                              data-bs-target="#add-task">
                              <i class="ri-add-line align-middle me-1 fw-medium"></i>Add Task
                          </a>
                      </div>
                  </div>
              </div>
              <div class="p-3 pt-0" id="new-tasks">
                  <div class="kanban-tasks">
                      <div id="new-tasks-draggable" data-view-btn="new-tasks">
                          <div class="card custom-card">
                              <div class="card-body p-0">
                                  <div class="p-3 kanban-board-head">
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="task-badges"><span
                                                  class="badge">#SPK123</span><span
                                                  class="ms-1 badge">UI/UX</span></div>
                                          <div class="dropdown">
                                              <a aria-label="anchor" href="javascript:void(0);"
                                                  class="btn btn-icon btn-sm outline" data-bs-toggle="dropdown"
                                                  aria-expanded="false">
                                                  <i class="fe fe-more-vertical"></i>
                                              </a>
                                              <ul class="dropdown-menu dropdown-menu-end">
                                                  <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                              class="ri-eye-line me-1 align-middle d-inline-block"></i>View</a>
                                                  </li>
                                                  <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                              class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a>
                                                  </li>
                                                  <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                              class="ri-edit-line me-1 align-middle d-inline-block"></i>Edit</a>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="kanban-content mt-2 mb-2">
                                          <h6 class="fw-medium mb-1 fs-15">New Dashboard design.</h6>
                                          <div class="kanban-task-description">Lorem ipsum dolor sit amet
                                              consectetur adipisicing elit, Nulla soluta consectetur sit amet elit
                                              dolor sit amet.</div>
                                      </div>
                                      <div class="mb-3">
                                          <p class="fs-13 fw-medium mb-2 text-muted">Sub Task<span class="float-end fs-13 fw-normal">2/14</span></p>
                                          <div class="progress progress-xs mb-0" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                                              <div class="progress-bar progress-bar-striped" style="width: 55%">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="d-flex gap-2">
                                              <a href="javascript:void(0);" class="me-2 py-0 px-2 outline rounded fs-12 d-flex align-items-center justify-content-center">
                                                  <span class="me-1"><i
                                                          class="ri-thumb-up-fill align-middle fw-normal"></i></span><span
                                                      class="fw-medium fs-12">12</span>
                                              </a>
                                              <a href="javascript:void(0);" class="py-0 px-2 outline rounded fs-12 d-flex align-items-center justify-content-center">
                                                  <span class="me-1"><i
                                                          class="ri-message-2-line align-middle fw-normal"></i></span><span
                                                      class="fw-medium fs-12">02</span>
                                              </a>
                                          </div>
                                          <div class="avatar-list-stacked">
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/11.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/12.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/7.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/8.jpg" alt="img">
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="card custom-card">
                              <div class="card-body p-0">
                                  <div class="p-3 kanban-board-head">
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="task-badges"><span
                                                  class="badge">#SPK05</span><span
                                                  class="ms-1 badge">Marketing</span><span
                                                  class="ms-1 badge">Finance</span></div>
                                                  <div class="dropdown">
                                                      <a aria-label="anchor" href="javascript:void(0);"
                                                          class="btn btn-icon btn-sm outline" data-bs-toggle="dropdown"
                                                          aria-expanded="false">
                                                          <i class="fe fe-more-vertical"></i>
                                                      </a>
                                                      <ul class="dropdown-menu dropdown-menu-end">
                                                          <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                      class="ri-eye-line me-1 align-middle d-inline-block"></i>View</a>
                                                          </li>
                                                          <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                      class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a>
                                                          </li>
                                                          <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                      class="ri-edit-line me-1 align-middle d-inline-block"></i>Edit</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                      </div>
                                      <div class="kanban-content mt-2 mb-2">
                                          <h6 class="fw-medium mb-1 fs-15">Marketing next projects.</h6>
                                          <div class="kanban-task-description">Lorem ipsum dolor sit amet
                                              consectetur adipisicing elit. Nulla soluta </div>
                                      </div>
                                      <div class="mb-3">
                                          <p class="fs-13 fw-medium mb-2 text-muted">Sub Task<span class="float-end fs-13 fw-normal">15/23</span></p>
                                          <div class="progress progress-xs mb-0" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                              <div class="progress-bar progress-bar-striped" style="width: 35%">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="d-flex gap-2">
                                              <a href="javascript:void(0);" class="me-2 py-0 px-2 rounded outline fs-12 d-flex align-items-center justify-content-center">
                                                  <span class="me-1"><i
                                                          class="ri-thumb-up-fill align-middle fw-normal"></i></span><span
                                                      class="fw-medium fs-12">17</span>
                                              </a>
                                              <a href="javascript:void(0);" class="py-0 px-2 rounded outline fs-12 d-flex align-items-center justify-content-center">
                                                  <span class="me-1"><i
                                                          class="ri-message-2-line align-middle fw-normal"></i></span><span
                                                      class="fw-medium fs-12">09</span>
                                              </a>
                                          </div>
                                          <div class="avatar-list-stacked">
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/11.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/12.jpg" alt="img">
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="card custom-card">
                              <div class="card-body p-0">
                                  <div class="p-3 kanban-board-head">
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="task-badges"><span
                                                  class="badge">#SPK - 08</span><span
                                                  class="ms-1 badge">Designing</span></div>
                                                  <div class="dropdown">
                                                      <a aria-label="anchor" href="javascript:void(0);"
                                                          class="btn btn-icon btn-sm outline" data-bs-toggle="dropdown"
                                                          aria-expanded="false">
                                                          <i class="fe fe-more-vertical"></i>
                                                      </a>
                                                      <ul class="dropdown-menu dropdown-menu-end">
                                                          <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                      class="ri-eye-line me-1 align-middle d-inline-block"></i>View</a>
                                                          </li>
                                                          <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                      class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a>
                                                          </li>
                                                          <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                      class="ri-edit-line me-1 align-middle d-inline-block"></i>Edit</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                      </div>
                                      <div class="kanban-content mt-2 mb-3">
                                          <div class="task-image mt-2">
                                              <img src="{{ asset('') }}/assets/images/media/media-36.jpg"
                                                  class="img-fluid rounded kanban-image" alt="">
                                          </div>
                                          <h6 class="fw-medium mb-0 mt-2 text-primary">Design multi usage landing.</h6>
                                      </div>
                                      <div class="mb-3">
                                          <p class="fs-13 fw-medium mb-2">Sub Task<span class="float-end fs-13 fw-normal">09/12</span></p>
                                          <div class="progress progress-xs mb-0" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                              <div class="progress-bar progress-bar-striped" style="width: 35%">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="d-flex gap-2">
                                              <a href="javascript:void(0);" class="me-2 py-0 px-2 rounded outline fs-12 d-flex align-items-center justify-content-center">
                                                  <span class="me-1"><i
                                                          class="ri-thumb-up-fill align-middle fw-normal"></i></span><span
                                                      class="fw-medium fs-12">11</span>
                                              </a>
                                              <a href="javascript:void(0);" class="py-0 px-2 rounded outline fs-12 d-flex align-items-center justify-content-center">
                                                  <span class="me-1"><i
                                                          class="ri-message-2-line align-middle fw-normal"></i></span><span
                                                      class="fw-medium fs-12">15</span>
                                              </a>
                                          </div>
                                          <div class="avatar-list-stacked">
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/11.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/12.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/10.jpg" alt="img">
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="p-3 pt-0">
                  <div class="d-grid view-more-button mt-3">
                      <button class="btn btn-primary-light btn-wave">View More</button>
                  </div>
              </div>
              
          </div>
          <div class="kanban-tasks-type todo border bg-white rounded">
              <div class="mb-3 p-3 pb-0">
                  <div class="d-flex justify-content-between align-items-center p-2 bg-white border border-secondary border-dashed border-opacity-25 rounded">
                      <span class="d-block fw-medium fs-14"><input class="form-check-input form-checked-secondary me-2" type="checkbox" value="" id="secondaryChecked" checked="">Todo Task</span>
                      <div>
                          <a aria-label="anchor" href="javascript:void(0)"
                              class="btn btn-sm btn-light text-default border btn-wave" data-bs-toggle="modal"
                              data-bs-target="#add-task">
                              <i class="ri-add-line align-middle me-1 fw-medium"></i>Add Task
                          </a>
                      </div>
                  </div>
              </div>
              <div class="p-3 pt-0" id="todo-tasks">
                  <div class="kanban-tasks">
                      <div id="todo-tasks-draggable" data-view-btn="todo-tasks">
                          <div class="card custom-card">
                              <div class="card-body p-0">
                                  <div class="p-3 kanban-board-head">
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="task-badges"><span
                                                  class="badge">#SPK107</span><span
                                                  class="ms-1 badge">Admin</span><span
                                                  class="ms-1 badge">Authentication</span>
                                          </div>
                                          <div class="dropdown">
                                              <a aria-label="anchor" href="javascript:void(0);"
                                                  class="btn btn-icon btn-sm outline" data-bs-toggle="dropdown"
                                                  aria-expanded="false">
                                                  <i class="fe fe-more-vertical"></i>
                                              </a>
                                              <ul class="dropdown-menu dropdown-menu-end">
                                                  <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                              class="ri-eye-line me-1 align-middle d-inline-block"></i>View</a>
                                                  </li>
                                                  <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                              class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a>
                                                  </li>
                                                  <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                              class="ri-edit-line me-1 align-middle d-inline-block"></i>Edit</a>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="kanban-content mt-2 mb-3">
                                          <h6 class="fw-medium mb-1 fs-15">Adding Authentication Pages.</h6>
                                          <div class="kanban-task-description">Lorem ipsum dolor sit amet
                                              consectetur adipisicing elit. Nulla soluta </div>
                                      </div>
                                      <div class="mb-3">
                                          <p class="fs-13 fw-medium mb-2 text-muted">Sub Task<span class="float-end fs-13 fw-normal">03/45</span></p>
                                          <div class="progress progress-xs mb-0" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                              <div class="progress-bar progress-bar-striped" style="width: 35%">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="d-flex gap-2">
                                              <a href="javascript:void(0);" class="me-2 py-0 px-2 outline rounded fs-12 d-flex align-items-center justify-content-center">
                                                  <span class="me-1"><i
                                                          class="ri-thumb-up-fill align-middle fw-normal"></i></span><span
                                                      class="fw-medium fs-12">18</span>
                                              </a>
                                              <a href="javascript:void(0);" class="py-0 px-2 outline rounded fs-12 d-flex align-items-center justify-content-center">
                                                  <span class="me-1"><i
                                                          class="ri-message-2-line align-middle fw-normal"></i></span><span
                                                      class="fw-medium fs-12">05</span>
                                              </a>
                                          </div>
                                          <div class="avatar-list-stacked">
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/11.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/12.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/10.jpg" alt="img">
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="card custom-card">
                              <div class="card-body p-0">
                                  <div class="p-3 kanban-board-head">
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="task-badges"><span
                                                  class="badge">#SPK15</span><span
                                                  class="ms-1 badge">Planning</span></div>
                                                  <div class="dropdown">
                                                      <a aria-label="anchor" href="javascript:void(0);"
                                                          class="btn btn-icon btn-sm outline" data-bs-toggle="dropdown"
                                                          aria-expanded="false">
                                                          <i class="fe fe-more-vertical"></i>
                                                      </a>
                                                      <ul class="dropdown-menu dropdown-menu-end">
                                                          <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                      class="ri-eye-line me-1 align-middle d-inline-block"></i>View</a>
                                                          </li>
                                                          <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                      class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a>
                                                          </li>
                                                          <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                      class="ri-edit-line me-1 align-middle d-inline-block"></i>Edit</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                      </div>
                                      <div class="kanban-content mt-2 mb-3">
                                          <div class="task-image mt-2">
                                              <img src="{{ asset('') }}/assets/images/media/media-41.jpg"
                                                  class="img-fluid rounded kanban-image" alt="">
                                          </div>
                                          <h6 class="fw-medium mb-0 mt-2">New Project Discussion.</h6>
                                      </div>
                                      <div class="mb-3">
                                          <p class="fs-13 fw-medium mb-2 text-muted">Sub Task<span class="float-end fs-13 fw-normal">21/45</span></p>
                                          <div class="progress progress-xs mb-0" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                              <div class="progress-bar progress-bar-striped" style="width: 35%">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="d-flex gap-2">
                                              <a href="javascript:void(0);" class="me-2 py-0 px-2 outline rounded fs-12 d-flex align-items-center justify-content-center">
                                                  <span class="me-1"><i
                                                          class="ri-thumb-up-fill align-middle fw-normal"></i></span><span
                                                      class="fw-medium fs-12">04</span>
                                              </a>
                                              <a href="javascript:void(0);" class="py-0 px-2 outline rounded fs-12 d-flex align-items-center justify-content-center">
                                                  <span class="me-1"><i
                                                          class="ri-message-2-line align-middle fw-normal"></i></span><span
                                                      class="fw-medium fs-12">14</span>
                                              </a>
                                          </div>
                                          <div class="avatar-list-stacked">
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/11.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/12.jpg" alt="img">
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="p-3 pt-0">
                  <div class="d-grid view-more-button mt-3">
                      <button class="btn btn-secondary-light btn-wave">View More</button>
                  </div>
              </div>
          </div>
          <div class="kanban-tasks-type in-progress border bg-white rounded">
              <div class="mb-3 p-3 pb-0">
                  <div class="d-flex justify-content-between align-items-center p-2 bg-white border border-info border-opacity-25 rounded">
                      <span class="d-block fw-medium fs-15"><input class="form-check-input form-checked-info me-2" type="checkbox" value="" id="secondaryChecked1" checked="">OnGoing Task</span>
                      <div>
                          <a aria-label="anchor" href="javascript:void(0)"
                              class="btn btn-sm btn-light text-default border btn-wave" data-bs-toggle="modal"
                              data-bs-target="#add-task">
                              <i class="ri-add-line align-middle me-1 fw-medium"></i>Add Task
                          </a>
                      </div>
                  </div>
              </div>
              <div class="p-3 pt-0" id="inprogress-tasks">
                  <div class="kanban-tasks">
                      <div id="inprogress-tasks-draggable" data-view-btn="inprogress-tasks">
                          <div class="card custom-card">
                              <div class="card-body p-0">
                                  <div class="p-3 kanban-board-head">
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="task-badges"><span
                                                  class="badge">#SPK13</span><span
                                                  class="ms-1 badge">UI Design</span><span
                                                  class="ms-1 badge">Development</span></div>
                                          <div class="dropdown">
                                              <a aria-label="anchor" href="javascript:void(0);"
                                                  class="btn btn-icon btn-sm outline" data-bs-toggle="dropdown"
                                                  aria-expanded="false">
                                                  <i class="fe fe-more-vertical"></i>
                                              </a>
                                              <ul class="dropdown-menu dropdown-menu-end">
                                                  <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                              class="ri-eye-line me-1 align-middle d-inline-block"></i>View</a>
                                                  </li>
                                                  <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                              class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a>
                                                  </li>
                                                  <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                              class="ri-edit-line me-1 align-middle d-inline-block"></i>Edit</a>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="kanban-content mt-2 mb-3">
                                          <h6 class="fw-medium mb-1 fs-15  text-info">Create Calendar & Mail pages.</h6>
                                          <div class="kanban-task-description">Lorem ipsum dolor sit amet
                                              consectetur adipisicing elit. Nulla soluta </div>
                                      </div>
                                      <div class="mb-3">
                                          <p class="fs-13 fw-medium mb-2 text-muted">Sub Task<span class="float-end fs-13 fw-normal">21/45</span></p>
                                          <div class="progress progress-xs mb-0" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                              <div class="progress-bar progress-bar-striped" style="width: 35%">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="d-flex gap-2">
                                              <a href="javascript:void(0);" class="me-2 py-0 px-2 outline rounded fs-12 d-flex align-items-center justify-content-center">
                                                  <span class="me-1"><i
                                                          class="ri-thumb-up-fill align-middle fw-normal"></i></span><span
                                                      class="fw-medium fs-12">04</span>
                                              </a>
                                              <a href="javascript:void(0);" class="py-0 px-2 outline rounded fs-12 d-flex align-items-center justify-content-center">
                                                  <span class="me-1"><i
                                                          class="ri-message-2-line align-middle fw-normal"></i></span><span
                                                      class="fw-medium fs-12">14</span>
                                              </a>
                                          </div>
                                          <div class="avatar-list-stacked">
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/11.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/12.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/1.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img">
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="card custom-card">
                              <div class="card-body p-0">
                                  <div class="p-3 kanban-board-head">
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="task-badges"><span
                                                  class="badge ms-1">#SPK09</span><span
                                                  class="ms-1 badge">Product</span></div>
                                                  <div class="dropdown">
                                                      <a aria-label="anchor" href="javascript:void(0);"
                                                          class="btn btn-icon btn-sm outline" data-bs-toggle="dropdown"
                                                          aria-expanded="false">
                                                          <i class="fe fe-more-vertical"></i>
                                                      </a>
                                                      <ul class="dropdown-menu dropdown-menu-end">
                                                          <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                      class="ri-eye-line me-1 align-middle d-inline-block"></i>View</a>
                                                          </li>
                                                          <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                      class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a>
                                                          </li>
                                                          <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                      class="ri-edit-line me-1 align-middle d-inline-block"></i>Edit</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                      </div>
                                      <div class="kanban-content mt-2 mb-3">
                                          <h6 class="fw-medium mb-1 fs-15">Project design Figma,Sketch.</h6>
                                          <div class="kanban-task-description">Lorem ipsum dolor sit amet
                                              consectetur adipisicing elit. Nulla soluta </div>
                                      </div>
                                      <div class="mb-3">
                                          <p class="fs-13 fw-medium mb-2 text-muted">Sub Task<span class="float-end fs-13 fw-normal">11/23</span></p>
                                          <div class="progress progress-xs mb-0" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                              <div class="progress-bar progress-bar-striped" style="width: 75%">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="d-flex gap-2">
                                              <a href="javascript:void(0);" class="me-2 py-0 px-2 outline rounded fs-12 d-flex align-items-center justify-content-center">
                                                  <span class="me-1"><i
                                                          class="ri-thumb-up-fill align-middle fw-normal"></i></span><span
                                                      class="fw-medium fs-12">24</span>
                                              </a>
                                              <a href="javascript:void(0);" class="py-0 px-2 outline rounded fs-12 d-flex align-items-center justify-content-center">
                                                  <span class="me-1"><i
                                                          class="ri-message-2-line align-middle fw-normal"></i></span><span
                                                      class="fw-medium fs-12">07</span>
                                              </a>
                                          </div>
                                          <div class="avatar-list-stacked">
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/1.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img">
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="card custom-card">
                              <div class="card-body p-0">
                                  <div class="p-3 kanban-board-head">
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="task-badges"><span
                                                  class="badge ms-1">#SPK145</span><span
                                                  class="ms-1 badge">Product</span></div>
                                                  <div class="dropdown">
                                                      <a aria-label="anchor" href="javascript:void(0);"
                                                          class="btn btn-icon btn-sm outline" data-bs-toggle="dropdown"
                                                          aria-expanded="false">
                                                          <i class="fe fe-more-vertical"></i>
                                                      </a>
                                                      <ul class="dropdown-menu dropdown-menu-end">
                                                          <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                      class="ri-eye-line me-1 align-middle d-inline-block"></i>View</a>
                                                          </li>
                                                          <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                      class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a>
                                                          </li>
                                                          <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                      class="ri-edit-line me-1 align-middle d-inline-block"></i>Edit</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                      </div>
                                      <div class="kanban-content mt-2 mb-3">
                                          <h6 class="fw-medium mb-1 fs-15">Project design Figma,Sketch.</h6>
                                          <div class="kanban-task-description">Lorem ipsum dolor sit amet
                                              consectetur adipisicing elit. Nulla soluta </div>
                                      </div>
                                      <div class="mb-3">
                                          <p class="fs-13 fw-medium mb-2 text-muted">Sub Task<span class="float-end fs-13 fw-normal">13/34</span></p>
                                          <div class="progress progress-xs mb-0" role="progressbar" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100">
                                              <div class="progress-bar progress-bar-striped" style="width: 26%">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="d-flex gap-2">
                                              <a href="javascript:void(0);" class="me-2 py-0 px-2 outline rounded fs-12 d-flex align-items-center justify-content-center">
                                                  <span class="me-1"><i
                                                          class="ri-thumb-up-fill align-middle fw-normal"></i></span><span
                                                      class="fw-medium fs-12">17</span>
                                              </a>
                                              <a href="javascript:void(0);" class="py-0 px-2 outline rounded fs-12 d-flex align-items-center justify-content-center">
                                                  <span class="me-1"><i
                                                          class="ri-message-2-line align-middle fw-normal"></i></span><span
                                                      class="fw-medium fs-12">12</span>
                                              </a>
                                          </div>
                                          <div class="avatar-list-stacked">
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/1.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/9.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img">
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="p-3 pt-0">
                  <div class="d-grid view-more-button mt-3">
                      <button class="btn btn-info-light btn-wave">View More</button>
                  </div>
              </div>
          </div>
          <div class="kanban-tasks-type inreview border bg-white rounded">
              <div class="mb-3 p-3 pb-0">
                  <div class="d-flex justify-content-between align-items-center p-2 bg-white border border-danger border-opacity-25 rounded">
                      <span class="d-block fw-medium fs-15"><input class="form-check-input form-checked-danger me-2" type="checkbox" value="" id="secondaryChecked2" checked="">In Review Task</span>
                      <div>
                          <a aria-label="anchor" href="javascript:void(0)"
                              class="btn btn-sm btn-light text-default border btn-wave" data-bs-toggle="modal"
                              data-bs-target="#add-task">
                              <i class="ri-add-line align-middle me-1 fw-medium"></i>Add Task
                          </a>
                      </div>
                  </div>
              </div>
              <div class="p-3 pt-0" id="inreview-tasks">
                  <div class="kanban-tasks">
                      <div id="inreview-tasks-draggable" data-view-btn="inreview-tasks">
                          <div class="card custom-card">
                              <div class="card-body p-0">
                                  <div class="p-3 kanban-board-head">
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="task-badges"><span
                                                  class="badge">#SPK15</span><span
                                                  class="ms-1 badge">Review</span></div>
                                          <div class="dropdown">
                                              <a aria-label="anchor" href="javascript:void(0);"
                                                  class="btn btn-icon btn-sm outline" data-bs-toggle="dropdown"
                                                  aria-expanded="false">
                                                  <i class="fe fe-more-vertical"></i>
                                              </a>
                                              <ul class="dropdown-menu dropdown-menu-end">
                                                  <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                              class="ri-eye-line me-1 align-middle d-inline-block"></i>View</a>
                                                  </li>
                                                  <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                              class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a>
                                                  </li>
                                                  <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                              class="ri-edit-line me-1 align-middle d-inline-block"></i>Edit</a>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="kanban-content mt-2 mb-3">
                                          <div class="task-image mt-2">
                                              <img src="{{ asset('') }}/assets/images/media/media-43.jpg"
                                                  class="img-fluid rounded kanban-image" alt="">
                                          </div>
                                          <h6 class="fw-medium mb-0 mt-2">Design Architecture strategy.</h6>
                                      </div>
                                      <div class="mb-3">
                                          <p class="fs-13 fw-medium mb-2 text-muted">Sub Task<span class="float-end fs-13 fw-normal">15/16</span></p>
                                          <div class="progress progress-xs mb-0" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100">
                                              <div class="progress-bar progress-bar-striped" style="width: 48%">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="d-flex gap-2">
                                              <a href="javascript:void(0);" class="me-2 py-0 px-2 outline rounded fs-12 d-flex align-items-center justify-content-center">
                                                  <span class="me-1"><i
                                                          class="ri-thumb-up-fill align-middle fw-normal"></i></span><span
                                                      class="fw-medium fs-12">17</span>
                                              </a>
                                              <a href="javascript:void(0);" class="py-0 px-2 outline rounded fs-12 d-flex align-items-center justify-content-center">
                                                  <span class="me-1"><i
                                                          class="ri-message-2-line align-middle fw-normal"></i></span><span
                                                      class="fw-medium fs-12">12</span>
                                              </a>
                                          </div>
                                          <div class="avatar-list-stacked">
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/1.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/9.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img">
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="card custom-card">
                              <div class="card-body p-0">
                                  <div class="p-3 kanban-board-head">
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="task-badges"><span
                                                  class="badge">#SPK465</span><span
                                                  class="ms-1 badge">Review</span></div>
                                                  <div class="dropdown">
                                                      <a aria-label="anchor" href="javascript:void(0);"
                                                          class="btn btn-icon btn-sm outline" data-bs-toggle="dropdown"
                                                          aria-expanded="false">
                                                          <i class="fe fe-more-vertical"></i>
                                                      </a>
                                                      <ul class="dropdown-menu dropdown-menu-end">
                                                          <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                      class="ri-eye-line me-1 align-middle d-inline-block"></i>View</a>
                                                          </li>
                                                          <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                      class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a>
                                                          </li>
                                                          <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                      class="ri-edit-line me-1 align-middle d-inline-block"></i>Edit</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                      </div>
                                      <div class="kanban-content mt-2 mb-3">
                                          <div class="task-image mt-2">
                                              <img src="{{ asset('') }}/assets/images/media/media-43.jpg"
                                                  class="img-fluid rounded kanban-image" alt="">
                                          </div>
                                          <h6 class="fw-medium mb-0 mt-2 text-danger">Design Architecture strategy.</h6>
                                      </div>
                                      <div class="mb-3">
                                          <p class="fs-13 fw-medium mb-2 text-muted">Sub Task<span class="float-end fs-13 fw-normal">11/34</span></p>
                                          <div class="progress progress-xs mb-0" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
                                              <div class="progress-bar progress-bar-striped" style="width: 88%">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="d-flex gap-2">
                                              <a href="javascript:void(0);" class="me-2 py-0 px-2 outline rounded fs-12 d-flex align-items-center justify-content-center">
                                                  <span class="me-1"><i
                                                          class="ri-thumb-up-fill align-middle fw-normal"></i></span><span
                                                      class="fw-medium fs-12">19</span>
                                              </a>
                                              <a href="javascript:void(0);" class="py-0 px-2 outline rounded fs-12 d-flex align-items-center justify-content-center">
                                                  <span class="me-1"><i
                                                          class="ri-message-2-line align-middle fw-normal"></i></span><span
                                                      class="fw-medium fs-12">06</span>
                                              </a>
                                          </div>
                                          <div class="avatar-list-stacked">
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/1.jpg" alt="img">
                                              </span>
                                              <span class="avatar avatar-sm avatar-rounded">
                                                  <img src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img">
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="p-3 pt-0">
                  <div class="d-grid view-more-button mt-3">
                      <button class="btn btn-danger-light btn-wave">View More</button>
                  </div>
              </div>
          </div>
          <div class="kanban-tasks-type completed border bg-white rounded">
              <div class="mb-3 p-3 pb-0">
                  <div class="d-flex justify-content-between align-items-center p-2 bg-white border border-success border-opacity-25 rounded">
                      <span class="d-block fw-medium fs-15"><input class="form-check-input form-checked-success me-2" type="checkbox" value="" id="secondaryChecked3" checked="">Completed Task</span>
                      <div>
                          <a aria-label="anchor" href="javascript:void(0)"
                              class="btn btn-sm btn-light text-default border btn-wave" data-bs-toggle="modal"
                              data-bs-target="#add-task">
                              <i class="ri-add-line align-middle me-1 fw-medium"></i>Add Task
                          </a>
                      </div>
                  </div>
              </div>
              <div class="p-3 pt-0" id="completed-tasks">
                  <div class="kanban-tasks">
                  <div id="completed-tasks-draggable" data-view-btn="completed-tasks">
                      <div class="card custom-card">
                          <div class="card-body p-0">
                              <div class="p-3 kanban-board-head">
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="task-badges"><span
                                              class="badge">#SPK04</span><span
                                              class="ms-1 badge">UI/UX</span></div>
                                      <div class="dropdown">
                                          <a aria-label="anchor" href="javascript:void(0);"
                                              class="btn btn-icon btn-sm outline" data-bs-toggle="dropdown"
                                              aria-expanded="false">
                                              <i class="fe fe-more-vertical"></i>
                                          </a>
                                          <ul class="dropdown-menu dropdown-menu-end">
                                              <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                          class="ri-eye-line me-1 align-middle d-inline-block"></i>View</a>
                                              </li>
                                              <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                          class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a>
                                              </li>
                                              <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                          class="ri-edit-line me-1 align-middle d-inline-block"></i>Edit</a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="kanban-content mt-2 mb-3">
                                      <h6 class="fw-medium mb-1 fs-15 ">Sash project update.</h6>
                                      <div class="kanban-task-description">Lorem ipsum dolor sit amet
                                          consectetur adipisicing elit. Nulla soluta </div>
                                  </div>
                                  <div class="mb-3">
                                      <p class="fs-13 fw-medium mb-2 text-muted">Sub Task<span class="float-end fs-13 fw-normal">13/16</span></p>
                                      <div class="progress progress-xs mb-0" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100">
                                          <div class="progress-bar progress-bar-striped" style="width: 56%">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="d-flex gap-2">
                                          <a href="javascript:void(0);" class="me-2 py-0 px-2 outline rounded fs-12 d-flex align-items-center justify-content-center">
                                              <span class="me-1"><i
                                                      class="ri-thumb-up-fill align-middle fw-normal"></i></span><span
                                                  class="fw-medium fs-12">15</span>
                                          </a>
                                          <a href="javascript:void(0);" class="py-0 px-2 outline rounded fs-12 d-flex align-items-center justify-content-center">
                                              <span class="me-1"><i
                                                      class="ri-message-2-line align-middle fw-normal"></i></span><span
                                                  class="fw-medium fs-12">23</span>
                                          </a>
                                      </div>
                                      <div class="avatar-list-stacked">
                                          <span class="avatar avatar-sm avatar-rounded">
                                              <img src="{{ asset('') }}/assets/images/faces/1.jpg" alt="img">
                                          </span>
                                          <span class="avatar avatar-sm avatar-rounded">
                                              <img src="{{ asset('') }}/assets/images/faces/7.jpg" alt="img">
                                          </span>
                                          <span class="avatar avatar-sm avatar-rounded">
                                              <img src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img">
                                          </span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="card custom-card">
                          <div class="card-body p-0">
                              <div class="p-3 kanban-board-head">
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="task-badges"><span
                                              class="badge">#SPK10</span><span
                                              class="ms-1 badge">Development</span></div>
                                              <div class="dropdown">
                                                  <a aria-label="anchor" href="javascript:void(0);"
                                                      class="btn btn-icon btn-sm outline" data-bs-toggle="dropdown"
                                                      aria-expanded="false">
                                                      <i class="fe fe-more-vertical"></i>
                                                  </a>
                                                  <ul class="dropdown-menu dropdown-menu-end">
                                                      <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                  class="ri-eye-line me-1 align-middle d-inline-block"></i>View</a>
                                                      </li>
                                                      <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                  class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a>
                                                      </li>
                                                      <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                  class="ri-edit-line me-1 align-middle d-inline-block"></i>Edit</a>
                                                      </li>
                                                  </ul>
                                              </div>
                                  </div>
                                  <div class="kanban-content mt-2 mb-3">
                                      <h6 class="fw-medium mb-1 fs-15 ">React JS new version update.</h6>
                                      <div class="kanban-task-description">Lorem ipsum dolor sit amet
                                          consectetur adipisicing elit. Nulla soluta </div>
                                  </div>
                                  <div class="mb-3">
                                      <p class="fs-13 fw-medium mb-2 text-muted">Sub Task<span class="float-end fs-13 fw-normal">16/22</span></p>
                                      <div class="progress progress-xs mb-0" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                          <div class="progress-bar  progress-bar-striped" style="width: 65%">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="d-flex gap-2">
                                          <a href="javascript:void(0);" class="me-2 py-0 px-2 outline rounded fs-12 d-flex align-items-center justify-content-center">
                                              <span class="me-1"><i
                                                      class="ri-thumb-up-fill align-middle fw-normal"></i></span><span
                                                  class="fw-medium fs-12">24</span>
                                          </a>
                                          <a href="javascript:void(0);" class="py-0 px-2 outline rounded fs-12 d-flex align-items-center justify-content-center">
                                              <span class="me-1"><i
                                                      class="ri-message-2-line align-middle fw-normal"></i></span><span
                                                  class="fw-medium fs-12">06</span>
                                          </a>
                                      </div>
                                      <div class="avatar-list-stacked">
                                          <span class="avatar avatar-sm avatar-rounded">
                                              <img src="{{ asset('') }}/assets/images/faces/7.jpg" alt="img">
                                          </span>
                                          <span class="avatar avatar-sm avatar-rounded">
                                              <img src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img">
                                          </span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="card custom-card">
                          <div class="card-body p-0">
                              <div class="p-3 kanban-board-head">
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="task-badges"><span
                                              class="badge">#SPK16</span><span
                                              class="ms-1 badge">Discussion</span></div>
                                              <div class="dropdown">
                                                  <a aria-label="anchor" href="javascript:void(0);"
                                                      class="btn btn-icon btn-sm outline" data-bs-toggle="dropdown"
                                                      aria-expanded="false">
                                                      <i class="fe fe-more-vertical"></i>
                                                  </a>
                                                  <ul class="dropdown-menu dropdown-menu-end">
                                                      <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                  class="ri-eye-line me-1 align-middle d-inline-block"></i>View</a>
                                                      </li>
                                                      <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                  class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a>
                                                      </li>
                                                      <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                  class="ri-edit-line me-1 align-middle d-inline-block"></i>Edit</a>
                                                      </li>
                                                  </ul>
                                              </div>
                                  </div>
                                  <div class="kanban-content mt-2 mb-3">
                                      <div class="task-image mt-2">
                                          <img src="{{ asset('') }}/assets/images/media/media-69.jpg"
                                              class="img-fluid rounded kanban-image bg-light" alt="">
                                      </div>
                                      <h6 class="fw-medium mb-0 mt-2">Project discussion with client.</h6>
                                  </div>
                                  <div class="mb-3">
                                      <p class="fs-13 fw-medium mb-2 text-muted">Sub Task<span class="float-end fs-13 fw-normal">18/25</span></p>
                                      <div class="progress progress-xs mb-0" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100">
                                          <div class="progress-bar  progress-bar-striped" style="width: 73%">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="d-flex gap-2">
                                          <a href="javascript:void(0);" class="me-2 py-0 px-2 outline rounded fs-12 d-flex align-items-center justify-content-center">
                                              <span class="me-1"><i
                                                      class="ri-thumb-up-fill align-middle fw-normal"></i></span><span
                                                  class="fw-medium fs-12">16</span>
                                          </a>
                                          <a href="javascript:void(0);" class="py-0 px-2 outline rounded fs-12 d-flex align-items-center justify-content-center">
                                              <span class="me-1"><i
                                                      class="ri-message-2-line align-middle fw-normal"></i></span><span
                                                  class="fw-medium fs-12">25</span>
                                          </a>
                                      </div>
                                      <div class="avatar-list-stacked">
                                          <span class="avatar avatar-sm avatar-rounded">
                                              <img src="{{ asset('') }}/assets/images/faces/7.jpg" alt="img">
                                          </span>
                                          <span class="avatar avatar-sm avatar-rounded">
                                              <img src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img">
                                          </span>
                                          <span class="avatar avatar-sm avatar-rounded">
                                              <img src="{{ asset('') }}/assets/images/faces/8.jpg" alt="img">
                                          </span>
                                          <span class="avatar avatar-sm avatar-rounded">
                                              <img src="{{ asset('') }}/assets/images/faces/6.jpg" alt="img">
                                          </span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="p-3 pt-0">
                  <div class="d-grid view-more-button mt-3">
                      <button class="btn btn-success-light btn-wave">View More</button>
                  </div>
              </div>
          </div>
      </div>
      <!--End::row-2 -->

      <!-- Start::add board modal -->
      <div class="modal fade" id="add-board" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                  <div class="modal-header">
                      <h6 class="modal-title">Add Board</h6>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"
                          aria-label="Close"></button>
                  </div>
                  <div class="modal-body px-4">
                      <div class="row">
                          <div class="col-xl-12">
                              <label for="board-title" class="form-label">Task Board Title</label>
                              <input type="text" class="form-control" id="board-title"
                                  placeholder="Board Title">
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary">Add Board</button>
                  </div>
              </div>
          </div>
      </div>
      <!-- End::add board modal -->

      <!-- Start::add task modal -->
      <div class="modal fade" id="add-task" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                  <div class="modal-header">
                      <h6 class="modal-title">Add Task</h6>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"
                          aria-label="Close"></button>
                  </div>
                  <div class="modal-body px-4">
                      <div class="row gy-2">
                          <div class="col-xl-6">
                              <label for="task-name" class="form-label">Task Name</label>
                              <input type="text" class="form-control" id="task-name" placeholder="Task Name">
                          </div>
                          <div class="col-xl-6">
                              <label for="task-id" class="form-label">Task ID</label>
                              <input type="text" class="form-control" id="task-id" placeholder="Task ID">
                          </div>
                          <div class="col-xl-12">
                              <label for="text-area" class="form-label">Task Description</label>
                              <textarea class="form-control" id="text-area" rows="2"
                                  placeholder="Write Description"></textarea>
                          </div>
                          <div class="col-xl-12">
                              <label for="text-area" class="form-label">Task Images</label>
                              <input type="file" class="multiple-filepond" name="filepond" multiple
                                  data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                          </div>
                          <div class="col-xl-12">
                              <label class="form-label">Assigned To</label>
                              <select class="form-control" name="choices-multiple-remove-button1"
                                  id="choices-multiple-remove-button1" multiple>
                                  <option value="Choice 1">Angelina May</option>
                                  <option value="Choice 2">Kiara advain</option>
                                  <option value="Choice 3">Hercules Jhon</option>
                                  <option value="Choice 4">Mayor Kim</option>
                              </select>
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
                              <label class="form-label">Tags</label>
                              <select class="form-control" name="choices-multiple-remove-button2"
                                  id="choices-multiple-remove-button2" multiple>
                                  <option value="">Select Tag</option>
                                  <option value="UI/UX">UI/UX</option>
                                  <option value="Marketing">Marketing</option>
                                  <option value="Finance">Finance</option>
                                  <option value="Designing">Designing</option>
                                  <option value="Admin">Admin</option>
                                  <option value="Authentication">Authentication</option>
                                  <option value="Product">Product</option>
                                  <option value="Development">Development</option>
                              </select>
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary">Add Task</button>
                  </div>
              </div>
          </div>
      </div>
      <!-- End::add task modal -->

  </div>
</div>
<!-- End::app-content -->

@endsection