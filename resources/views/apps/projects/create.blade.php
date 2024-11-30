@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Page Header -->
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Create Project</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Projects</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Create Project</li>
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
          <div class="col-xl-12">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">
                          Create Project
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="row gy-3">
                          <div class="col-xl-4">
                              <label for="input-label" class="form-label">Project Name :</label>
                              <input type="text" class="form-control" id="input-label" placeholder="Enter Project Name">
                          </div>
                          <div class="col-xl-4">
                              <label for="input-label11" class="form-label">Project Manager :</label>
                              <input type="text" class="form-control" id="input-label11" placeholder="Project Manager Name">
                          </div>
                          <div class="col-xl-4">
                              <label for="input-label1" class="form-label">Client / Stakeholder :</label>
                              <input type="text" class="form-control" id="input-label1" placeholder="Enter Client Name">
                          </div>
                          <div class="col-xl-12">
                              <label class="form-label">Project Description :</label>
                              <div id="project-descriptioin-editor">
                                  <p>lorem Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33.</p>
                                  <p><br></p>
                                  <ol>
                                      <li class="ql-size-normal">Ensure data security and compliance with relevant regulations.</li>
                                      <li class="">Train staff on the enhanced system within two weeks of deployment.</li>
                                      <li class="">Implement a scalable solution to accommodate future growth.</li>
                                      <li class="">Decrease the time required for inventory audits by 50%.</li>
                                      <li class="">Achieve a 10% reduction in excess inventory costs.</li>
                                  </ol>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <label class="form-label">Start Date :</label>
                              <div class="form-group">
                                  <div class="input-group">
                                      <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                      <input type="text" class="form-control" id="startDate" placeholder="Choose date and time">
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <label class="form-label">End Date :</label>
                              <div class="form-group">
                                  <div class="input-group">
                                      <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                      <input type="text" class="form-control" id="endDate" placeholder="Choose date and time">
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <label class="form-label">Status :</label>
                              <select class="form-control" data-trigger name="choices-single-default1" id="choices-single-default1">
                                  <option value="Inprogress" selected>Inprogress</option>
                                  <option value="On-hold">On-hold</option>
                                  <option value="Completed">Completed</option>
                              </select>
                          </div>
                          <div class="col-xl-6">
                              <label class="form-label">Priority :</label>
                              <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
                                  <option value="High">High</option>
                                  <option value="Medium">Medium</option>
                                  <option value="Low">Low</option>
                              </select>
                          </div>
                          <div class="col-xl-6">
                              <label class="form-label">Assigned To</label>
                              <select class="form-control" name="assigned-team-members" id="assigned-team-members" multiple>
                                  <option value="Choice 1" selected>Angelina May</option>
                                  <option value="Choice 2">Kiara advain</option>
                                  <option value="Choice 3">Hercules Jhon</option>
                                  <option value="Choice 4">Mayor Kim</option>
                                  <option value="Choice 4" selected>Alexa Biss</option>
                                  <option value="Choice 4">Karley Dia</option>
                                  <option value="Choice 4">Kim Jong</option>
                                  <option value="Choice 4">Darren Sami</option>
                                  <option value="Choice 4">Elizabeth</option>
                                  <option value="Choice 4">Bear Gills</option>
                                  <option value="Choice 4" selected>Alex Carey</option>
                              </select>
                          </div>
                          <div class="col-xl-6">
                              <label class="form-label">Tags</label>
                              <input class="form-control" id="choices-text-unique-values" type="text" value="Marketing, Sales, Development, Design, Research" placeholder="This is a placeholder">
                          </div>
                          <div class="col-xl-12">
                              <label class="form-label">Attachments</label>
                              <input type="file" class="multiple-filepond" name="filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                          </div>
                      </div>
                  </div>
                  <div class="card-footer">
                      <button class="btn btn-primary-light btn-wave ms-auto float-end">Create Project</button>
                  </div>
              </div>
          </div>
      </div>
      <!--End::row-1 -->

  </div>
</div>
<!-- End::app-content -->

@endsection