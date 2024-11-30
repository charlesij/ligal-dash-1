@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Page Header -->
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Post Job</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Jobs</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Post Job</li>
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
          <div class="col-xxl-9 col-xl-8">
              <div class="card custom-card">
                  <div class="card-header justify-content-between">
                      <div class="card-title">
                          Post New Job
                      </div>                       
                  </div>
                  <div class="card-body">
                      <div class="row gy-4 mb-4"> 
                          <div class="col-xl-6">
                              <label for="job-title" class="form-label">Job Title</label>
                              <input type="text" class="form-control" id="job-title" placeholder="Job Title" value="Web Developer">
                          </div>
                          <div class="col-xl-6">
                              <label class="form-label">Job Category</label> 
                              <select class="form-control" data-trigger name="Category-select">
                                  <option value="Choice 1">Development</option>
                                  <option value="Choice 2">Marketing</option>
                                  <option value="Choice 3">IT Software</option>
                              </select>
                          </div> 
                          <div class="col-xl-6">
                              <label class="form-label">Working Experience</label> 
                              <select class="form-control" data-trigger name="Experience">
                                  <option value="Choice 1">0 - 1 Years</option>
                                  <option value="Choice 2">1 - 3 Years</option>
                                  <option value="Choice 3">3 - 5 Years</option>
                              </select>
                          </div> 
                          <div class="col-xl-6">
                              <label class="form-label">Job Type</label> 
                              <select class="form-control" data-trigger name="jobtype">
                                  <option value="Choice 1">Contract</option>
                                  <option value="Choice 2">Freelance</option>
                                  <option value="Choice 3">Full Time</option>
                                  <option value="Choice 4">Part Time</option>
                                  <option value="Choice 5">Internship</option>
                              </select>
                          </div> 
                          <div class="col-xl-6">
                              <label class="form-label">Priority</label> 
                              <select class="form-control" data-trigger name="Priority">
                                  <option value="Choice 1">Normal</option>
                                  <option value="Choice 2">Urgent</option>
                              </select>
                          </div>  
                          <div class="col-xl-6"> 
                              <label class="form-label">Vacancies</label> 
                              <select class="form-control" data-trigger name="Vacancies">
                                  <option value="Choice 2">10</option> 
                                  <option value="Choice 3">20</option>
                                  <option value="Choice 4">30</option>
                                  <option value="Choice 5">40</option>
                              </select>
                          </div> 
                          <div class="col-xl-6"> 
                              <label class="form-label">Salary</label> 
                              <select class="form-control" data-trigger name="Salary">
                                  <option value="Choice 2">0 - $1,00,000 / Year</option> 
                                  <option value="Choice 3">$1,00,000 - $3,00,000 / Year</option>
                                  <option value="Choice 4">$3,00,000 - $5,00,000 / Year</option>
                              </select>
                          </div> 
                          <div class="col-xl-6">
                              <label for="skills" class="form-label">Skills :</label>
                              <select class="form-control" name="skills" id="skills" multiple>
                              <option value="Choice 1" selected>HTML</option>
                              <option value="Choice 2" selected>CSS</option>
                              <option value="Choice 3" selected>JavaScript</option>
                              <option value="Choice 4">React</option>
                              </select>
                          </div>      
                          <div class="col-xl-6">
                              <label for="job-deadline" class="form-label">Job Deadline</label>
                              <input type="text" class="form-control" id="job-deadline" placeholder="Job Deadline">
                          </div>  
                          <div class="col-xl-6"> 
                              <label class="form-label">Gender Requirement</label> 
                              <select class="form-control" data-trigger name="gender">
                                  <option value="Choice 2">No Preferences</option> 
                                  <option value="Choice 3">Male Only</option>
                                  <option value="Choice 4">Female Only</option>
                              </select>
                          </div>                                      
                          <div class="col-xl-6">
                              <label for="language" class="form-label">Languages :</label>
                              <select class="form-control" name="language" id="language" multiple>
                              <option value="Choice 1" selected>English</option>
                              <option value="Choice 2">French</option>
                              <option value="Choice 3">Arabic</option>
                              <option value="Choice 4" selected>Hindi</option>
                              </select>
                          </div>
                          <div class="col-xl-6">
                              <label for="qualification" class="form-label">Qualification :</label>
                              <select class="form-control" name="Qualification" id="qualification" multiple>
                              <option value="Choice 1" selected>Graduate</option>
                              <option value="Choice 2">Diploma</option>
                              <option value="Choice 3" selected>MBA</option>
                              <option value="Choice 4" selected>MCA</option>
                              </select>
                          </div>
                          <div class="col-xl-12">
                              <label for="job-description" class="form-label">Job Description :</label>
                              <textarea class="form-control" id="job-description" rows="4">Lorem ipsum dolor sit amet consectetur adipisicing elit. At sit impedit, officiis non minima saepe voluptates a magnam enim sequi porro veniam ea suscipit dolorum vel mollitia voluptate iste nemo!</textarea>
                          </div>
                      </div>
                  </div>
                  <div class="card-footer text-end">
                      <a href="javascript:void(0);" class="btn btn-primary btn-wave waves-effect waves-light">
                          <i class="bi bi-plus-circle"></i> Post Job
                      </a>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-4">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">Assign To Employer</div>
                  </div>
                  <div class="card-body">
                      <div class="col-xl-12">
                          <label class="form-label">Employer Name</label> 
                          <select class="form-control" data-trigger name="Category-select">
                              <option value="Choice 1">Obligation Pvt.Ltd</option>
                              <option value="Choice 2">Voluptatem Pvt.Ltd</option>
                              <option value="Choice 3">BloomTech.Inc</option>
                              <option value="Choice 4">Spotech Technical Solutions</option>
                          </select>
                      </div>                                 
                  </div>
              </div>
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">Company Details</div>
                  </div>
                  <div class="card-body">
                      <div class="row gy-3">
                          <div class="col-xl-12">
                              <label for="Company-Name" class="form-label">Company Name</label> 
                              <input type="text" class="form-control" id="Company-Name" placeholder="Company Name" value="Obligation Pvt.Ltd">
                          </div>                                 
                          <div class="col-xl-12">
                              <label for="Company-Website" class="form-label">Company Website</label> 
                              <input type="text" class="form-control" id="Company-Website" placeholder="Company Website" value="http//www.obligationpvtltd.com">
                          </div>  
                          <div class="col-xl-12"> 
                              <label class="form-label">Country</label> 
                              <select class="form-control" data-trigger name="Country">
                                  <option value="Choice 2">India</option> 
                                  <option value="Choice 3">USA</option>
                                  <option value="Choice 4">Germany</option>
                                  <option value="Choice 5">Spain</option>
                                  <option value="Choice 6">Urgentina</option>
                              </select>
                          </div> 
                          <div class="col-xl-12">
                              <label for="Company-Address" class="form-label">Address</label> 
                              <input type="text" class="form-control" id="Company-Address" placeholder="Company Address" value="USA">
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