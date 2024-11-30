@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Page Header -->
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Candidate Details</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Jobs</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Candidate Details</li>
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

      <!-- Start::row-2 -->
      <div class="row">
          <div class="col-lg-8">
              <div class="col-xl-12">
                  <div class="card custom-card job-profile-card">
                      <div class="profile-banner-img">
                          <img src="{{ asset('') }}/assets/images/media/media-75.jpg" class="rounded w-100" alt="...">
                      </div>
                      <div class="card-body p-4 pb-0 position-relative">
                              <span class="avatar avatar-xxl avatar-rounded bg-light">
                                  <img src="{{ asset('') }}/assets/images/faces/team/5.png" class="rounded-circle img-fluid" alt="img">
                              </span>
                          <div class="mt-5 mb-3 d-flex align-items-start flex-wrap gap-3 justify-content-between">
                              <div>
                                  <h5 class="fw-semibold mb-1">AlexJohnson</h5>
                                  <a href="javascript:void(0);" class="fw-medium text-muted"><i class="bi bi-briefcase me-1"></i> Software Developer</a>
                                  <div class="d-flex fs-14 mt-3">
                                      <div>
                                          <p class="mb-1"><i class="bi bi-geo-alt me-2"></i>Banglore, Karnataka</p>
                                          <p><i class="bi bi-briefcase me-2"></i>5 Year Experience</p>
                                      </div>
                                      <div class="ms-4">
                                          <p class="mb-1"><i class="bi bi-coin me-2"></i>Package (Yearly) : <span class="fw-medium" data-bs-toggle="tooltip" data-bs-original-title="Current Salary">$10,000</span> - <span class="fw-medium" data-bs-toggle="tooltip" data-bs-original-title="Expected Salary">$20,000</span></p>
                                          <p><i class="bi bi-mortarboard me-2"></i>Graduate</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="d-flex mb-0 flex-wrap gap-4">
                                  <div class="btn-list mb-2"> <a href="javascript:void(0);" class="btn btn-primary"><i class="bi bi-download me-1"></i> Download CV</a> <a href="javascript:void(0);" class="btn btn-icon btn-primary-light btn-wave waves-effect waves-light">
                                          <i class="ri-heart-line"></i> </a> <a href="javascript:void(0);" class="btn btn-icon btn-primary-light btn-wave waves-effect waves-light">
                                          <i class="ri-share-line"></i> </a> </div>
                              </div>
                          </div>
                          <div class="row row-cols-xl-5  row-cols-md-2 row-cols-1">
                              <div class="col">
                                  <div class="p-2 border bg-white d-flex gap-2 rounded mb-4 align-items-center flex-wrap">
                                      <div>
                                          <span class="avatar avatar-md avatar-rounded border lh-1 me-2 bg-primary">
                                              <i class="ri-briefcase-line fs-18"></i>
                                          </span>
                                      </div>
                                      <div>
                                          <span class="text-muted fs-12">Experience Level</span>
                                          <p class="fw-medium fs-14 mb-0">5 Years</p>
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
                                          <span class="text-muted fs-12">Notice Period</span>
                                          <p class="fw-medium fs-14 mb-0">3 Months</p>
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
                                          <p class="fw-medium fs-14 mb-0">Remote Work</p>
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
                                          <p class="fw-medium fs-14 mb-0">Full Time</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="p-2 border bg-white d-flex gap-2 rounded mb-4 align-items-center flex-wrap">
                                      <div>
                                          <span class="avatar avatar-md avatar-rounded border lh-1 me-2 bg-warning">
                                              <i class="ri-global-line fs-18"></i>
                                          </span>
                                      </div>
                                      <div>
                                          <span class="text-muted fs-12">Languages</span>
                                          <p class="fw-medium fs-14 mb-0">Telugu, English</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">
                          Candidate Profile Information
                      </div>
                  </div>
                  <div class="card-body p-0 candidate-edu-timeline">
                      <div class="p-4 border-bottom">
                          <h5 class="fw-medium fs-17 d-flex align-items-center gap-2"><span class="avatar avatar-rounded bg-light text-default avatar-sm"><i class="bi bi-briefcase fs-14 fw-semibold"></i></span> Career Objective :</h5>
                          <div class="ms-4 ps-3">
                              <p class="op-9">Est amet sit vero sanctus labore no sed ipsum ipsum nonumy. Sit ipsum sanctus ea magna est. Aliquyam sed amet. Kasd diam rebum sit ipsum ipsum erat et kasd.Est amet sit vero sanctus labore no sed ipsum ipsum nonumy vero sanctus labore.A officiis optio temporibus minima facilis...</p>
                              <p class="mb-0 op-9">Sit ipsum sanctus ea magna est. Aliquyam sed amet. Kasd diam rebum sit ipsum ipsum erat et kasd.Est amet sit vero sanctus labore no sed ipsum ipsum nonumy vero sanctus labore..</p>
                          </div>
                      </div>
                      <div class="p-4 border-bottom">
                          <div class="row">
                            <div class="col-xl-6">
                              <h5 class="fw-medium fs-17 d-flex align-items-center gap-2"><span class="avatar avatar-rounded bg-light text-default avatar-sm"><i class="bi bi-mortarboard fs-14 fw-semibold"></i></span> Education :</h5>
                              <div class="ms-4 ps-3">
                                  <p class="fw-medium fs-14 mb-0">Bachelors of science in computer science</p>
                                  <div class="d-flex gap-2">
                                      <p class="mb-0">Dwayne University</p>
                                      <p class="mb-0 text-muted"><i class="bi bi-geo-alt fs-12"></i> Nellore</p>
                                  </div>
                                  <p class="mb-4"> (2019 Mar - 2024 Apr)</p>
                                  <p class="fw-medium fs-14 mb-0">Intermediate (MPC)</p>
                                  <div class="d-flex gap-2">
                                      <p class="mb-0">Sprect College</p>
                                      <p class="mb-0 text-muted"><i class="bi bi-geo-alt fs-12"></i> Warangal</p>
                                  </div>
                                  <p class="mb-0"> (2017 Mar - 2019 Apr)</p>
                              </div>
                            </div>
                            <div class="col-xl-6">
                                  <h5 class="fw-medium fs-17 d-flex align-items-center gap-2"><span class="avatar avatar-rounded bg-light text-default avatar-sm"><i class="bi bi-award fs-14 fw-semibold"></i></span> Certifications :</h5>
                                  <div class="ms-4 ps-3">
                                      <p class="fw-medium fs-14 mb-0">Web Development (3 Months)</p>
                                      <p class="mb-4">EMC Solutions Pvt Ltd</p>
                                      <p class="fw-medium fs-14 mb-0">Python Development (6 Months)</p>
                                      <p class="mb-0">Dabre Services Pvt Ltd</p>
                                  </div>
                            </div>
                          </div>
                      </div>
                      <div class="p-4 border-bottom">
                          <div class="row">
                              <div class="col-xl-6">
                                  <h5 class="fw-medium fs-17 d-flex align-items-center gap-2"><span class="avatar avatar-rounded bg-light text-default avatar-sm"><i class="bi bi-journal-medical fs-14 fw-semibold"></i></span> Publications :</h5>
                                  <div class="ms-3">
                                      <ol class="list-group border-0 list-bullets">
                                          <li class="border-0 py-1"><span class="fw-medium">“One of a Kind Design,”</span> Web Design Book, Poulin Publishing, 2018</li>
                                          <li class="border-0 py-1"><span class="fw-medium">“Website Design in 2019,”</span> A List Apart, June 2019</li>
                                          <li class="border-0 py-1"><span class="fw-medium">“Usable Information Architecture,”</span> SitePoint, Feb 2019</li>
                                      </ol>
                                  </div>
                              </div>
                              <div class="col-xl-6">
                                  <h5 class="fw-medium fs-17 d-flex align-items-center gap-2"><span class="avatar avatar-rounded bg-light text-default avatar-sm"><i class="bi bi-activity fs-14 fw-semibold"></i></span> Activities and Interests :</h5>
                                  <div class="ms-3">
                                      <ol class="list-group border-0 list-bullets">
                                          <li class="border-0 py-1">Community Involvement</li>
                                          <li class="border-0 py-1">Yoga</li>
                                          <li class="border-0 py-1">Travel</li>
                                          <li class="border-0 py-1">Art</li>
                                      </ol>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">
                          Experience Overview                                     
                      </div>
                  </div>
                  <div class="card-body p-0 candidate-edu-timeline">
                      <div class="row">
                          <div class="col-xl-6">
                              <div class="p-4">
                                  <h5 class="fw-medium fs-17 d-flex align-items-center gap-2"><span class="avatar avatar-rounded bg-light text-default avatar-sm"><i class="bi bi-briefcase fs-14 fw-semibold"></i></span> Experience :</h5>
                                  <div class="ms-4 ps-3">
                                      <p class="fw-medium fs-14 mb-0">Full Stack Developer (2019 Mar - 2024 Apr)</p>
                                      <div class="d-flex gap-2">
                                          <p>Spotech Technical Solutions</p>
                                          <p class="mb-0 fs-12 text-muted"><i class="bi bi-geo-alt fs-11"></i> Kondapur, Hyderabad</p>
                                      </div>
                                      <p class="fw-medium mb-2">Responsibilities :</p>
                                      <ol class="list-group border-0 list-bullets">
                                          <li class="border-0 py-1">Design thoughtful, beautiful, and useful software user interfaces and experiences in a team environment..</li>
                                          <li class="border-0 py-1">Create user-centered designs by considering market analysis, customer feedback, and usability findings.</li> 
                                      </ol>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <div class="p-4">
                                  <h5 class="fw-medium fs-17 d-flex align-items-center gap-2"><span class="avatar avatar-rounded bg-light text-default avatar-sm"><i class="bi bi-people fs-14 fw-semibold"></i></span> Volunteer Experience :</h5>
                                  <div class="ms-4 ps-3">
                                      <p class="fw-medium fs-14 mb-0">Volunteer in the Student Organization</p>
                                      <p class="mb-2 text-muted"><i class="bi bi-geo-alt fs-12"></i> Warangal, 2015</p>
                                      <ol class="list-group border-0 list-bullets">
                                          <li class="border-0 py-1">In charge of Organizing activities for approximately 100+ internation schools in 2015</li>
                                          <li class="border-0 py-1">In charge of Organizing activities for approximately 100+ internation schools in 2015</li>
                                      </ol>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>   
          </div>
          <div class="col-lg-4">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">
                          Skills
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="popular-tags gap-2 d-flex flex-wrap">
                          <a href="javascript:void(0);" class="badge border bg-light text-default fs-12 align-middle"><span class="avatar avatar-sm align-middle me-2 bg-primary-transparent"><i class="ri-html5-line fs-16"></i></span>HTML</a>
                          <a href="javascript:void(0);" class="badge border bg-light text-default fs-12 align-middle"><span class="avatar avatar-sm align-middle me-2 bg-secondary-transparent"><i class="ri-css3-line fs-16"></i></span>CSS</a>
                          <a href="javascript:void(0);" class="badge border bg-light text-default fs-12 align-middle"><span class="avatar avatar-sm align-middle me-2 bg-success-transparent"><i class="ri-nodejs-line fs-16"></i></span>Javascript</a>
                          <a href="javascript:void(0);" class="badge border bg-light text-default fs-12 align-middle"><span class="avatar avatar-sm align-middle me-2 bg-info-transparent"><i class="ri-vuejs-line fs-16"></i></span>Vuejs</a>
                          <a href="javascript:void(0);" class="badge border bg-light text-default fs-12 align-middle"><span class="avatar avatar-sm align-middle me-2 bg-warning-transparent"><i class="ri-reactjs-line fs-16"></i></span>React</a>
                      </div>
                  </div>
              </div>
              <div class="card custom-card overflow-hidden">
                  <div class="card-header">
                      <div class="card-title">
                          Tools Used
                      </div>
                  </div>
                  <div class="card-body d-flex flex-wrap gap-2">
                      <span class="avatar me-2 avatar-rounded bg-white shadow-sm border border-primary border-opacity-25 p-2">
                          <img src="{{ asset('') }}/assets/images/company-logos/1.png" alt="">
                      </span>
                      <span class="avatar me-2 avatar-rounded bg-white shadow-sm border border-primary border-opacity-25 p-2">
                          <img src="{{ asset('') }}/assets/images/company-logos/2.png" alt="">
                      </span>
                      <span class="avatar me-2 avatar-rounded bg-white shadow-sm border border-primary border-opacity-25 p-2">
                          <img src="{{ asset('') }}/assets/images/company-logos/3.png" alt="">
                      </span>
                      <span class="avatar me-2 avatar-rounded bg-white shadow-sm border border-primary border-opacity-25 p-2">
                          <img src="{{ asset('') }}/assets/images/company-logos/4.png" alt="">
                      </span>
                      <span class="avatar me-2 avatar-rounded bg-white shadow-sm border border-primary border-opacity-25 p-2">
                          <img src="{{ asset('') }}/assets/images/company-logos/5.png" alt="">
                      </span>
                      <span class="avatar avatar-rounded bg-white shadow-sm border border-primary border-opacity-25 p-2">
                          <img src="{{ asset('') }}/assets/images/company-logos/6.png" alt="">
                      </span>
                  </div>
              </div>
              <div class="card custom-card overflow-hidden">
                  <div class="card-header">
                      <div class="card-title">
                          Personal Information
                      </div>
                  </div>
                  <div class="card-body p-0">
                      <div class="table-responsive">
                          <table class="table table-responsive">
                              <tbody>
                                  <tr>
                                      <td class="w-50">
                                          <span class="fw-medium">Full Name</span> 
                                      </td>
                                      <td>: Brenda Simpson</td>
                                  </tr>
                                  <tr>
                                      <td class="w-50">
                                          <span class="fw-medium">Email</span> 
                                      </td>
                                      <td>: brendra@gmail.com</td>
                                  </tr>
                                  <tr>
                                      <td class="w-50">
                                          <span class="fw-medium">D.O.B</span> 
                                      </td>
                                      <td>: 13 Jan 2024</td>
                                  </tr>
                                  <tr>
                                      <td class="w-50">
                                          <span class="fw-medium">Gender</span> 
                                      </td>
                                      <td>: Female</td>
                                  </tr>
                                  <tr>
                                      <td class="w-50">
                                          <span class="fw-medium">Age</span> 
                                      </td>
                                      <td>: 35</td>
                                  </tr>
                                  <tr>
                                      <td class="w-50">
                                          <span class="fw-medium">Mobile </span> 
                                      </td>
                                      <td>: +91 7865343874</td>
                                  </tr>
                                  <tr>
                                      <td class="w-50">
                                          <span class="fw-medium">Mother Tongue </span> 
                                      </td>
                                      <td>: Telugu</td>
                                  </tr>
                                  <tr>
                                      <td class="w-50">
                                          <span class="fw-medium">Marital Status </span> 
                                      </td>
                                      <td>: Unmarried</td>
                                  </tr>
                                  <tr>
                                      <td class="w-50">
                                          <span class="fw-medium">Blood Group </span> 
                                      </td>
                                      <td>: o +ve</td>
                                  </tr>
                                  <tr>
                                      <td class="w-50">
                                          <span class="fw-medium">Address </span> 
                                      </td>
                                      <td> Akshya Nagar 1st Block 1st Cross, Rammurthy nagar, Bangalore-560016</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
                  <div class="card-footer border-top-0">
                      <div class="d-flex align-items-center">
                          <p class="fs-15 mb-0 me-4 fw-medium">Social :</p>
                          <div class="btn-list mb-0">
                              <button class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light mb-xxl-0">
                                  <i class="ri-facebook-line"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light mb-xxl-0">
                                  <i class="ri-twitter-x-line"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light mb-xxl-0">
                                  <i class="ri-instagram-line"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light mb-xxl-0">
                                  <i class="ri-github-line"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light mb-xxl-0">
                                  <i class="ri-youtube-line"></i>
                              </button>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card custom-card border border-primary border-opacity-10 bg-primary-transparent">
                  <div class="card-body">
                      <div class="">
                          <h5 class="fw-medium mb-3 text-primary"><i class="ri-notification-3-line me-2 p-2 bg-primary text-fixed-white fs-15 lh-1 align-middle rounded-circle"></i>Get Latest Alerts</h5>
                          <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="Email Here" aria-label="blog-email" aria-describedby="blog-subscribe">
                              <button class="btn btn-primary" type="button" id="blog-subscribe">Subscribe</button>
                          </div>
                          <label class="form-check-label">
                              By Subscribing you accept to <a href="javascript:void(0);" class="text-success"><u>privacy policy</u></a>
                          </label>
                      </div>
                  </div>
              </div>
              <div>
                  <h4 class="fw-medium mb-0">Related Profiles</h4>
                  <p class="">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                  <div class="swiper swiper-related-jobs">
                      <div class="swiper-wrapper">
                          <div class="swiper-slide">
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
                                                  <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="job-candidate-details.html"> Charlotte</a></h5>
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
                                                  <a href="javascript:void(0);" class="badge badge-md rounded-pill bg-primary-transparent" data-bs-toggle="tooltip" title="1 year bond accepted"><i class="bi bi-hand-thumbs-up me-1"></i>1 year bond accepted</a>
                                                  <a href="javascript:void(0);" class="badge badge-md rounded-pill bg-secondary-transparent"><i class="bi bi-briefcase me-1"></i>Exp : 2 Years</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="swiper-slide">
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
                                                  <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="job-candidate-details.html"> Isabella</a></h5>
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
                                                  <a href="javascript:void(0);" class="badge badge-md rounded-pill bg-primary-transparent" data-bs-toggle="tooltip" title="2 year bond accepted"><i class="bi bi-hand-thumbs-up me-1"></i>2 years bond accepted</a>
                                                  <a href="javascript:void(0);" class="badge badge-md rounded-pill bg-secondary-transparent"><i class="bi bi-briefcase me-1"></i>Exp : 4 Years</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="swiper-slide">
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
                                                  <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="job-candidate-details.html"> Abigail</a></h5>
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
                                                  <a href="javascript:void(0);" class="badge badge-md rounded-pill bg-primary-transparent" data-bs-toggle="tooltip" title="2 year bond accepted"><i class="bi bi-hand-thumbs-up me-1"></i>2 years bond accepted</a>
                                                  <a href="javascript:void(0);" class="badge badge-md rounded-pill bg-secondary-transparent"><i class="bi bi-briefcase me-1"></i>Exp : 4 Years</a>
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
      <!-- End::row-2 -->

  </div>
</div>
<!-- End::app-content -->

@endsection