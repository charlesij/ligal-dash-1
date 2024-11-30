@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Page Header -->
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Search Candidate</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Jobs</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Search Candidate</li>
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
          <div class="col-xxl-3 col-xl-4">
              <div class="card custom-card products-navigation-card">
                  <div class="card-body p-0">
                      <div class="p-4 border-bottom">
                          <h6 class="fw-semibold mb-2">Categories</h6>
                          <div class="input-group mt-2">
                              <input type="text" class="form-control" placeholder="Search" 
                                >
                          </div>
                          <div class="px-2 py-3 pb-0">
                              <div class="form-check mb-2">
                                  <input class="form-check-input me-2" type="checkbox" value="" id="c-1">
                                  <label class="form-check-label" for="c-1">
                                      Research & Developement
                                  </label>
                              </div>
                              <div class="form-check mb-2">
                                  <input class="form-check-input me-2" type="checkbox" value="" id="c-2">
                                  <label class="form-check-label" for="c-2">
                                      Accounting
                                  </label>
                              </div>
                              <div class="form-check mb-2">
                                  <input class="form-check-input me-2" type="checkbox" value="" id="c-3">
                                  <label class="form-check-label" for="c-3">
                                      Accounting
                                  </label>
                              </div>
                              <div class="form-check mb-2">
                                  <input class="form-check-input me-2" type="checkbox" value="" id="c-4">
                                  <label class="form-check-label" for="c-4">
                                      Administrative Support
                                  </label>
                              </div>
                              <a href="javascript:void(0);" class="text-decoration-underline text-primary">View All</a>
                          </div>
                      </div>
                      <div class="p-4 border-bottom">
                          <h6 class="fw-semibold mb-3">Availability</h6>
                          <select class="form-control" data-trigger name="choices-single-default"
                              id="choices-single-default">
                              <option value="">Select Availability</option>
                              <option value="Choice 1">Immediate</option>
                              <option value="Choice 2">30 Days</option>
                              <option value="Choice 3">3 months</option>
                          </select>
                      </div>
                      <div class="p-4 border-bottom">
                          <h6 class="fw-semibold mb-3">Bond Agreement</h6>
                          <select class="form-control" data-trigger name="choices-single-default1"
                              id="choices-single-default1">
                              <option value="">Select Bond</option>
                              <option value="Choice 1">0.5 Year</option>
                              <option value="Choice 2">1 year</option>
                              <option value="Choice 3">2 year</option>
                              <option value="Choice 4">3 year</option>
                          </select>
                      </div>
                      <div class="p-4 border-bottom">
                          <h6 class="fw-semibold mb-0">Salary Range</h6>
                          <div class="px-2 py-3 pb-0">
                              <div id="nonlinear"></div>
                              <div class="d-flex flex-wrap mt-4">
                                  <div class="fw-semibold mb-1 px-3 py-1 border rounded"><span id="lower-value"></span></div>
                                  <span class="fw-semibold mb-1 px-2 py-1">-</span>
                                  <div class="fw-semibold mb-1 px-3 py-1 border rounded"><span id="upper-value"></span></div>
                              </div>
                          </div>
                      </div>
                      <div class="p-4 border-bottom">
                          <h6 class="fw-semibold mb-3">Languages</h6>
                          <select class="form-control" data-trigger name="choices-single-default2"
                              id="choices-single-default2">
                              <option value="">Select Language</option>
                              <option value="Choice 1">English</option>
                              <option value="Choice 2">Hindi</option>
                              <option value="Choice 3">Telugu</option>
                          </select>
                      </div>
                      <div class="p-4 border-bottom">
                          <h6 class="fw-semibold mb-3">Job Type</h6>
                          <select class="form-control" data-trigger name="choices-single-default3"
                              id="choices-single-default3">
                              <option value="">Select Type</option>
                              <option value="Choice 1">Full Time</option>
                              <option value="Choice 2">Part Time</option>
                              <option value="Choice 3">Internship</option>
                          </select>
                      </div>
                      <div class="p-4 border-bottom">
                          <h6 class="fw-semibold mb-3">Qualification</h6>
                          <select class="form-control" data-trigger name="choices-single-default4"
                              id="choices-single-default4">
                              <option value="">Select Qualification</option>
                              <option value="Choice 1">All Education Levels</option>
                              <option value="Choice 2">10th Pass and Above</option>
                              <option value="Choice 3">12th Pass and Above</option>
                              <option value="Choice 4">Diploma and Graduate</option>
                          </select>
                      </div>
                      <div class="p-4">
                          <h6 class="fw-semibold mb-3">Skills</h6>
                          <select class="form-control" data-trigger name="choices-single-default5"
                              id="choices-single-default5">
                              <option value="">Select Skill</option>
                              <option value="choices">HTML5</option>
                              <option value="Choice 1">Javascript</option>
                              <option value="Choice 2">PHP</option>
                              <option value="Choice 2">React JS</option>
                          </select>
                      </div>
                      <div class="px-4 py-3 border-top text-center">
                          <button class="btn btn-primary-light me-2">Clear All</button>
                          <button class="btn btn-primary">Apply</button>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-9 col-xl-8">
              <div class="row align-items-center">
                  <div class="col-lg-12">
                      <div class="card custom-card border-0 shadow-none">
                          <div class="card-body p-md-0">
                              <div class="input-group companies-search-input">
                                  <input type="text" class="form-control form-control-lg w-25" aria-label="Text input with segmented dropdown button" placeholder="Enter your keyword here">
                                  <select class="form-select form-select-lg rounded-0" data-trigger>
                                      <option value="">All Categories</option>
                                      <option value="Choice 1">Software Dveloper</option>
                                      <option value="Choice 2">Web Developer</option>
                                      <option value="Choice 3">Software Architect</option>
                                      <option value="Choice 4">IT Hardware</option>
                                      <option value="Choice 5">Network Engineer</option>
                                      <option value="Choice 6">Angular Developer</option>
                                      <option value="Choice 7">React Developer</option>
                                  </select>
                                  <input type="text" class="form-control form-control-lg w-25" aria-label="Text input with segmented dropdown button" placeholder="Search by location">
                                  <select class="form-select form-select-lg rounded-0" data-trigger>
                                      <option value="Choice 1">Fresher's</option>
                                      <option value="Choice 2">1 Year Exp</option>
                                      <option value="Choice 3">2 Year Exp</option>
                                      <option value="Choice 4">3 Year Exp</option>
                                      <option value="Choice 5">4 Year Exp</option>
                                      <option value="Choice 6">5 Years Exp</option>
                                  </select>
                                  <button type="button" class="btn btn-lg btn-primary"><i class="ri-search-line"></i></button>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-12">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="d-flex flex-wrap gap-2 align-items-center">
                                  <h5 class="fw-medium mb-0 flex-grow-1">1287 <span class="fw-normal fs-18">Candidates match your job search</span> </h5>
                                  <div class="btn-group">
                                      <button class="btn btn-outline-light border dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          Sort By
                                      </button>
                                      <ul class="dropdown-menu dropdown-menu-end">
                                          <li><a class="dropdown-item" href="javascript:void(0);">Premium</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);">Newest</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);">Most Relevant</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);">Fresher</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);">Experienced</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);">Bond Agreement</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);">Flexible Shift</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);">Day Shift</a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-6">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="p-3 bg-light border border-bottom-0">
                                  <div class="btn-list float-end">
                                      <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-primary text-fixed-white" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download Resume" title="Download Resume"><span><i class="ri-download-line fs-14"></i></span></a>
                                      <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-primary-transparent border" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="ri-heart-3-line fs-14"></i></span></a>
                                  </div>
                                  <div class="d-flex align-items-center flex-wrap gap-2">
                                      <div>
                                          <span class="avatar avatar-lg avatar-rounded">
                                              <img src="{{ asset('') }}/assets/images/faces/1.jpg" alt="">
                                          </span> 
                                      </div>    
                                      <div>
                                          <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="job-candidate-details.html"> EmilyBrown</a></h5>
                                          <div class="d-flex gap-2 flex-wrap">
                                              <a href="javascript:void(0);">UI Developer</a>
                                              <p class="mb-0 fs-12 text-muted"><i class="bi bi-geo-alt fs-11"></i> Kondapur, Hyderabad</p>
                                          </div> 
                                      </div>
                                  </div>
                              </div>
                              <div class="p-3 border">
                                  <div class="d-flex align-items-center flex-wrap gap-3 mb-4">
                                      <p class="mb-0 flex-grow-1"><span class="text-muted">Package (Yearly) :</span> <span class="fw-medium" data-bs-toggle="tooltip" title="Current"> $2,300</span> - <span class="fw-medium" data-bs-toggle="tooltip" title="Expected"> $3,678</span> </p>
                                      <p class="mb-0"><span class="text-muted"> Languages :</span> <span class="fw-medium"> English, Hindi, Telugu</span></p>
                                  </div>
                                  <div class="d-flex align-items-center gap-3 flex-wrap">
                                      <h6 class="mb-0 fw-medium">Skills :</h6>
                                      <div class="popular-tags flex-grow-1">
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default">HTML</a>
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default">CSS</a>
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default">Javascript</a>
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-primary-transparent">More</a>    
                                      </div>
                                      <div>
                                          <a href="javascript:void(0);" class="badge badge-md rounded-pill bg-primary-transparent" data-bs-toggle="tooltip" title="1year bond accepted"><i class="bi bi-hand-thumbs-up me-1"></i>1 year bond accepted</a>
                                          <a href="javascript:void(0);" class="badge badge-md rounded-pill bg-secondary-transparent"><i class="bi bi-briefcase me-1"></i>Exp : 2 Years</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-6">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="p-3 bg-light border border-bottom-0">
                                  <div class="btn-list float-end">
                                      <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-primary text-fixed-white" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download Resume" title="Download Resume"><span><i class="ri-download-line fs-14"></i></span></a>
                                      <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-primary-transparent border" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="ri-heart-3-line fs-14"></i></span></a>
                                  </div>
                                  <div class="d-flex align-items-center flex-wrap gap-2">
                                      <div>
                                          <span class="avatar avatar-lg avatar-rounded">
                                              <img src="{{ asset('') }}/assets/images/faces/3.jpg" alt="">
                                          </span>
                                      </div>    
                                      <div>
                                          <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="job-candidate-details.html"> DavidMiller</a></h5>
                                          <div class="d-flex gap-2 flex-wrap">
                                              <a href="javascript:void(0);">Web Developer</a>
                                              <p class="mb-0 fs-12 text-muted"><i class="bi bi-geo-alt fs-11"></i> Gachibowli, Hyderabad</p>
                                          </div> 
                                      </div>
                                  </div>
                              </div>
                              <div class="p-3 border">
                                  <div class="d-flex align-items-center flex-wrap gap-3 mb-4">
                                      <p class="mb-0 flex-grow-1"><span class="text-muted">Package (Yearly) :</span> <span class="fw-medium" data-bs-toggle="tooltip" title="Current"> $3,600</span> - <span class="fw-medium" data-bs-toggle="tooltip" title="Expected"> $4,700</span> </p>
                                      <p class="mb-0"><span class="text-muted"> Languages :</span> <span class="fw-medium"> English, Telugu</span></p>
                                  </div>
                                  <div class="d-flex align-items-center gap-3 flex-wrap">
                                      <h6 class="mb-0 fw-medium">Skills :</h6>
                                      <div class="popular-tags flex-grow-1">
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default">React</a>
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default">React Native</a>
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-primary-transparent">More</a>
                                      </div>
                                      <div>
                                          <a href="javascript:void(0);" class="badge badge-md rounded-pill bg-primary-transparent" data-bs-toggle="tooltip" title="2year bond accepted"><i class="bi bi-hand-thumbs-up me-1"></i>2 years bond accepted</a>
                                          <a href="javascript:void(0);" class="badge badge-md rounded-pill bg-secondary-transparent"><i class="bi bi-briefcase me-1"></i>Exp : 4 Years</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-6">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="p-3 bg-light border border-bottom-0">
                                  <div class="btn-list float-end">
                                      <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-primary text-fixed-white" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download Resume" title="Download Resume"><span><i class="ri-download-line fs-14"></i></span></a>
                                      <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-primary-transparent border" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="ri-heart-3-fill text-primary fs-14"></i></span></a>
                                  </div>
                                  <div class="d-flex align-items-center flex-wrap gap-2">
                                      <div>
                                          <span class="avatar avatar-lg avatar-rounded">
                                              <img src="{{ asset('') }}/assets/images/faces/21.jpg" alt="">
                                          </span>
                                      </div>    
                                      <div>
                                          <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="job-candidate-details.html">DanielKim</a></h5>
                                          <div class="d-flex gap-2 flex-wrap">
                                              <a href="javascript:void(0);">Python Developer</a>
                                              <p class="mb-0 fs-12 text-muted"><i class="bi bi-geo-alt fs-11"></i> Gachibowli, Chennai</p>
                                          </div> 
                                      </div>
                                  </div>
                              </div>
                              <div class="p-3 border">
                                  <div class="d-flex align-items-center flex-wrap gap-3 mb-4">
                                      <p class="mb-0 flex-grow-1"><span class="text-muted">Package (Yearly) :</span> <span class="fw-medium" data-bs-toggle="tooltip" title="Current"> $4,300</span> - <span class="fw-medium" data-bs-toggle="tooltip" title="Expected"> $5,000</span> </p>
                                      <p class="mb-0"><span class="text-muted"> Languages :</span> <span class="fw-medium"> English, Hindi</span></p>
                                  </div>
                                  <div class="d-flex align-items-center gap-3 flex-wrap">
                                      <h6 class="mb-0 fw-medium">Skills :</h6>
                                      <div class="popular-tags flex-grow-1">
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default">Python</a>
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default">Java</a>
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default">React</a>
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-primary-transparent">More</a>
                                      </div>
                                      <div>
                                          <a href="javascript:void(0);" class="badge badge-md rounded-pill bg-primary-transparent"><i class="bi bi-briefcase me-1"></i>Exp : 5 Years</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-6">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="p-3 bg-light border border-bottom-0">
                                  <div class="btn-list float-end">
                                      <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-primary text-fixed-white" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download Resume" title="Download Resume"><span><i class="ri-download-line fs-14"></i></span></a>
                                      <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-primary-transparent border" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="ri-heart-3-fill text-primary fs-14"></i></span></a>
                                  </div>
                                  <div class="d-flex align-items-center flex-wrap gap-2">
                                      <div>
                                          <span class="avatar avatar-lg avatar-rounded">
                                              <img src="{{ asset('') }}/assets/images/faces/5.jpg" alt="">
                                          </span>
                                      </div>    
                                      <div>
                                          <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="job-candidate-details.html">EmmaClark</a></h5>
                                          <div class="d-flex gap-2 flex-wrap">
                                              <a href="javascript:void(0);">Java Developer</a>
                                              <p class="mb-0 fs-12 text-muted"><i class="bi bi-geo-alt fs-11"></i> Gachibowli, Banglore</p>
                                          </div> 
                                      </div>
                                  </div>
                              </div>
                              <div class="border p-3">
                                  <div class="d-flex align-items-center flex-wrap gap-3 mb-4">
                                      <p class="mb-0 flex-grow-1"><span class="text-muted">Package (Yearly) :</span><span class="fw-medium" data-bs-toggle="tooltip" title="Expected"> $3,678</span> </p>
                                      <p class="mb-0"><span class="text-muted"> Languages :</span> <span class="fw-medium"> English, Hindi, Telugu</span></p>
                                  </div>
                                  <div class="d-flex align-items-center gap-3 flex-wrap">
                                      <h6 class="mb-0 fw-medium">Skills :</h6>
                                      <div class="popular-tags flex-grow-1">
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default">Java</a>
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default">Core Java</a>
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-primary-transparent">More</a>
                                      </div>
                                      <div>
                                          <a href="javascript:void(0);" class="badge badge-md rounded-pill bg-info-transparent" data-bs-toggle="tooltip" title="2year bond accepted"><i class="bi bi-hand-thumbs-up me-1"></i>2 years bond accepted</a>
                                          <a href="javascript:void(0);" class="badge badge-md rounded-pill bg-primary-transparent"><i class="bi bi-briefcase me-1"></i>Fresher</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-6">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="p-3 bg-light border border-bottom-0">
                                  <div class="btn-list float-end">
                                      <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-primary text-fixed-white" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download Resume" title="Download Resume"><span><i class="ri-download-line fs-14"></i></span></a>
                                      <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-primary-transparent border" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="ri-heart-3-fill text-primary fs-14"></i></span></a>
                                  </div>
                                  <div class="d-flex align-items-center flex-wrap gap-2">
                                      <div>
                                          <span class="avatar avatar-lg avatar-rounded">
                                              <img src="{{ asset('') }}/assets/images/faces/13.jpg" alt="">
                                          </span>
                                      </div>    
                                      <div>
                                          <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="job-candidate-details.html">LiamWalker</a></h5>
                                          <div class="d-flex gap-2 flex-wrap">
                                              <a href="javascript:void(0);">Angular Developer</a>
                                              <p class="mb-0 fs-12 text-muted"><i class="bi bi-geo-alt fs-11"></i> Gachibowli, Nellore</p>
                                          </div> 
                                      </div>
                                  </div>
                              </div>
                              <div class="p-3 border">
                                  <div class="d-flex align-items-center flex-wrap gap-3 mb-4">
                                      <p class="mb-0 flex-grow-1"><span class="text-muted">Package (Yearly) :</span> <span class="fw-medium" data-bs-toggle="tooltip" title="Current"> $3,600</span> - <span class="fw-medium" data-bs-toggle="tooltip" title="Expected"> $4,700</span> </p>
                                      <p class="mb-0"><span class="text-muted"> Languages :</span> <span class="fw-medium"> English, Telugu</span></p>
                                  </div>
                                  <div class="d-flex align-items-center gap-3 flex-wrap">
                                      <h6 class="mb-0 fw-medium">Skills :</h6>
                                      <div class="popular-tags flex-grow-1">
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default">Angular</a>
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default">Advanced Java</a>
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-primary-transparent">More</a>
                                      </div>
                                      <div>
                                          <a href="javascript:void(0);" class="badge badge-md rounded-pill bg-info-transparent" data-bs-toggle="tooltip" title="2year bond accepted"><i class="bi bi-hand-thumbs-up me-1"></i>2 years bond accepted</a>
                                          <a href="javascript:void(0);" class="badge badge-md rounded-pill bg-primary-transparent"><i class="bi bi-briefcase me-1"></i>Exp: 5Years</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-6">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="p-3 bg-light border border-bottom-0">
                                  <div class="btn-list float-end">
                                      <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-primary text-fixed-white" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download Resume" title="Download Resume"><span><i class="ri-download-line fs-14"></i></span></a>
                                      <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-primary-transparent border" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="ri-heart-3-line fs-14"></i></span></a>
                                  </div>
                                  <div class="d-flex  align-items-center flex-wrap gap-2">
                                      <div>
                                          <span class="avatar avatar-lg avatar-rounded">
                                              <img src="{{ asset('') }}/assets/images/faces/21.jpg" alt="">
                                          </span>
                                      </div>    
                                      <div>
                                          <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="job-candidate-details.html">EthanMartin</a></h5>
                                          <div class="d-flex gap-2 flex-wrap">
                                              <a href="javascript:void(0);">AWS Developer</a>
                                              <p class="mb-0 fs-12 text-muted"><i class="bi bi-geo-alt fs-11"></i> Kukatpally, Hyderabad</p>
                                          </div> 
                                      </div>
                                  </div>
                              </div>
                              <div class="p-3 border">
                                  <div class="d-flex align-items-center flex-wrap gap-3 mb-4">
                                      <p class="mb-0 flex-grow-1"><span class="text-muted">Package (Yearly) :</span><span class="fw-medium" data-bs-toggle="tooltip" title="Expected"> $8,900</span> </p>
                                      <p class="mb-0"><span class="text-muted"> Languages :</span> <span class="fw-medium"> English, Hindi, Telugu</span></p>
                                  </div>
                                  <div class="d-flex align-items-center gap-3 flex-wrap">
                                      <h6 class="mb-0 fw-medium">Skills :</h6>
                                      <div class="popular-tags flex-grow-1">
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default">AWS Lambda</a>
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default">Athena</a>
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default">Linux</a>
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-primary-transparent">More</a>
                                      </div>
                                      <div>
                                          <a href="javascript:void(0);" class="badge badge-md rounded-pill bg-primary-transparent"><i class="bi bi-briefcase me-1"></i>Fresher</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-6">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="p-3 bg-light border border-bottom-0">
                                  <div class="btn-list float-end">
                                      <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-primary text-fixed-white" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download Resume" title="Download Resume"><span><i class="ri-download-line fs-14"></i></span></a>
                                      <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-primary-transparent border" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="ri-heart-3-fill text-primary fs-14"></i></span></a>
                                  </div>
                                  <div class="d-flex align-items-center flex-wrap gap-2">
                                      <div>
                                          <span class="avatar avatar-lg avatar-rounded">
                                              <img src="{{ asset('') }}/assets/images/faces/1.jpg" alt="">
                                          </span>
                                      </div>    
                                      <div>
                                          <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="job-candidate-details.html">ChrisTaylor</a></h5>
                                          <div class="d-flex gap-2 flex-wrap">
                                              <a href="javascript:void(0);">UI Developer</a>
                                              <p class="mb-0 fs-12 text-muted"><i class="bi bi-geo-alt fs-11"></i> Kondapur, Hyderabad</p>
                                          </div> 
                                      </div>
                                  </div>
                              </div>
                              <div class="p-3 border">
                                  <div class="d-flex align-items-center flex-wrap gap-3 mb-4">
                                      <p class="mb-0 flex-grow-1"><span class="text-muted">Package (Yearly) :</span> <span class="fw-medium" data-bs-toggle="tooltip" title="Current"> $2,300</span> - <span class="fw-medium" data-bs-toggle="tooltip" title="Expected"> $3,678</span> </p>
                                      <p class="mb-0"><span class="text-muted"> Languages :</span> <span class="fw-medium"> English, Hindi, Telugu</span></p>
                                  </div>
                                  <div class="d-flex align-items-center gap-3 flex-wrap">
                                      <h6 class="mb-0 fw-medium">Skills :</h6>
                                      <div class="popular-tags flex-grow-1">
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default">HTML</a>
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default">CSS</a>
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default">Javascript</a>
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-primary-transparent">More</a>
                                      </div>
                                      <div>
                                          <a href="javascript:void(0);" class="badge badge-md rounded-pill bg-info-transparent" data-bs-toggle="tooltip" title="1year bond accepted"><i class="bi bi-hand-thumbs-up me-1"></i>1 year bond accepted</a>
                                          <a href="javascript:void(0);" class="badge badge-md rounded-pill bg-primary-transparent"><i class="bi bi-briefcase me-1"></i>Exp : 2 Years</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-6">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="p-3 bg-light border border-bottom-0">
                                  <div class="btn-list float-end">
                                      <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-primary text-fixed-white" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download Resume" title="Download Resume"><span><i class="ri-download-line fs-14"></i></span></a>
                                      <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-primary-transparent border" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="ri-heart-3-line fs-14"></i></span></a>
                                  </div>
                                  <div class="d-flex align-items-center flex-wrap gap-2">
                                      <div>
                                          <span class="avatar avatar-lg avatar-rounded">
                                              <img src="{{ asset('') }}/assets/images/faces/3.jpg" alt="">
                                          </span>
                                      </div>    
                                      <div>
                                          <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="job-candidate-details.html">SarahDavis</a></h5>
                                          <div class="d-flex gap-2 flex-wrap">
                                              <a href="javascript:void(0);">Web Developer</a>
                                              <p class="mb-0 fs-12 text-muted"><i class="bi bi-geo-alt fs-11"></i> Gachibowli, Hyderabad</p>
                                          </div> 
                                          <div class="d-flex align-items-center fs-12 text-muted flex-wrap">
                                              <p class="fs-12 mb-0">Ratings : </p>
                                              <div class="min-w-fit-content ms-2">
                                                  <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                  <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                  <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                  <span class="text-warning"><i class="bi bi-star"></i></span>
                                                  <span class="text-warning"><i class="bi bi-star"></i></span>
                                              </div>
                                              <a href="javascript:void(0);" class="mb-0 ms-1 min-w-fit-content text-muted">
                                                  <span>(35)</span>
                                                  <span>Ratings</span>
                                              </a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="p-3 border">
                                  <div class="d-flex align-items-center flex-wrap gap-3 mb-4">
                                      <p class="mb-0 flex-grow-1"><span class="text-muted">Package (Yearly) :</span> <span class="fw-medium" data-bs-toggle="tooltip" title="Current"> $3,600</span> - <span class="fw-medium" data-bs-toggle="tooltip" title="Expected"> $4,700</span> </p>
                                      <p class="mb-0"><span class="text-muted"> Languages :</span> <span class="fw-medium"> English, Telugu</span></p>
                                  </div>
                                  <div class="d-flex align-items-center gap-3 flex-wrap">
                                      <h6 class="mb-0 fw-medium">Skills :</h6>
                                      <div class="popular-tags flex-grow-1">
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default">React</a>
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default">React Native</a>
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-primary-transparent">More</a>
                                      </div>
                                      <div>
                                          <a href="javascript:void(0);" class="badge badge-md rounded-pill bg-info-transparent" data-bs-toggle="tooltip" title="2year bond accepted"><i class="bi bi-hand-thumbs-up me-1"></i>2 years bond accepted</a>
                                          <a href="javascript:void(0);" class="badge badge-md rounded-pill bg-primary-transparent"><i class="bi bi-briefcase me-1"></i>Exp : 4 Years</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <ul class="pagination mb-4 justify-content-end">
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
          </div>
      </div>
      <!--End::row-1 -->

  </div>
</div>
<!-- End::app-content -->

@endsection