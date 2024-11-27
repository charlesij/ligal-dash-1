@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Start::page-header -->
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Social Media</h1>
              <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item">
                      <a href="javascript:void(0);">
                          Dashboards
                      </a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Social Media</li>
              </ol>
          </div>
          <div>
              <button class="btn btn-primary-light btn-wave me-2 waves-effect waves-light">
                  <i class="bx bx-crown align-middle"></i> Plan Upgrade
              </button>
              <button class="btn btn-secondary-light btn-wave me-0 waves-effect waves-light">
                  <i class="ri-upload-cloud-line align-middle"></i> Export Report
              </button>
          </div>
      </div>
      <!-- End::page-header -->

      <!-- Start:: row-1 -->
      <div class="row">
          <div class="col-xxl-7">
              <div class="row">
                  <div class="col-xl-4">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="d-flex align-items-start justify-content-between mb-2">
                                  <div>
                                      <span class="d-block mb-2">Instagram</span>
                                      <h3 class="fw-semibold mb-0">121K</h3>
                                  </div>
                                  <span class="avatar avatar-md avatar-rounded bg-pink svg-white">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="128" cy="128" r="40" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="16"/><rect x="32" y="32" width="192" height="192" rx="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="180" cy="76" r="12"/></svg>
                                  </span>
                              </div>
                              <div class="d-flex align-items-center justify-content-between">
                                  <span class="text-muted">Followers</span>
                                  <span class="text-success  d-inline-flex align-items-center "><i class="ti ti-arrow-up me-1"></i>1.5%</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-4">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="d-flex align-items-start justify-content-between mb-2">
                                  <div>
                                      <span class="d-block mb-2">Linked In</span>
                                      <h3 class="fw-semibold mb-0">96.8K</h3>
                                  </div>
                                  <span class="avatar avatar-md avatar-rounded bg-info svg-white">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><rect x="32" y="32" width="192" height="192" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="120" y1="112" x2="120" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="88" y1="112" x2="88" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M120,140a28,28,0,0,1,56,0v36" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="88" cy="84" r="12"/></svg>
                                  </span>
                              </div>
                              <div class="d-flex align-items-center justify-content-between">
                                  <span class="text-muted">Followers</span>
                                  <span class="text-danger  d-inline-flex align-items-center"><i class="ti ti-arrow-down me-1"></i>15.45%</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-4">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="d-flex align-items-start justify-content-between mb-2">
                                  <div>
                                      <span class="d-block mb-2">Facebook</span>
                                      <h3 class="fw-semibold mb-0">1.3M</h3>
                                  </div>
                                  <span class="avatar avatar-md avatar-rounded bg-primary svg-white">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="128" cy="128" r="96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M168,88H152a24,24,0,0,0-24,24V224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="96" y1="144" x2="160" y2="144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                  </span>
                              </div>
                              <div class="d-flex align-items-center justify-content-between">
                                  <span class="text-muted">Followers</span>
                                  <span class="text-success  d-inline-flex align-items-center"><i class="ti ti-arrow-up me-1"></i>3.64%</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-4">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="d-flex align-items-start justify-content-between mb-2">
                                  <div>
                                      <span class="d-block mb-2">Twitch</span>
                                      <h3 class="fw-semibold mb-0">876K</h3>
                                  </div>
                                  <span class="avatar avatar-md avatar-rounded bg-purple svg-white">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M165.1,200H120L72,240V200H48a8,8,0,0,1-8-8V48a8,8,0,0,1,8-8H208a8,8,0,0,1,8,8V156.25a8,8,0,0,1-2.88,6.15l-42.89,35.75A8.05,8.05,0,0,1,165.1,200Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="168" y1="88" x2="168" y2="136" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="120" y1="88" x2="120" y2="136" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                  </span>
                              </div>
                              <div class="d-flex align-items-center justify-content-between">
                                  <span class="text-muted">Followers</span>
                                  <span class="text-success d-inline-flex align-items-center"><i class="ti ti-arrow-up me-1"></i>8.15%</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-4">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="d-flex align-items-start justify-content-between mb-2">
                                  <div>
                                      <span class="d-block mb-2">Twitter</span>
                                      <h3 class="fw-semibold mb-0">2.1K</h3>
                                  </div>
                                  <span class="avatar avatar-md avatar-rounded bg-dark svg-white">
                                      <svg xmlns="http://www.w3.org/2000/svg" class="invert-1" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polygon points="48 40 96 40 208 216 160 216 48 40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="113.88" y1="143.53" x2="48" y2="216" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="208" y1="40" x2="142.12" y2="112.47" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                  </span>
                              </div>
                              <div class="d-flex align-items-center justify-content-between">
                                  <span class="text-muted">Followers</span>
                                  <span class="text-success d-inline-flex align-items-center"><i class="ti ti-arrow-up me-1"></i>6.75%</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-4">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="d-flex align-items-start justify-content-between mb-2">
                                  <div>
                                      <span class="d-block mb-2">Youtube</span>
                                      <h3 class="fw-semibold mb-0">876K</h3>
                                  </div>
                                  <span class="avatar avatar-md avatar-rounded bg-danger svg-white">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polygon points="160 128 112 96 112 160 160 128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M24,128c0,29.91,3.07,47.45,5.41,56.47A16,16,0,0,0,39,195.42C72.52,208.35,128,208,128,208s55.48.35,89-12.58a16,16,0,0,0,9.63-10.95c2.34-9,5.41-26.56,5.41-56.47s-3.07-47.45-5.41-56.47a16,16,0,0,0-9.63-11C183.48,47.65,128,48,128,48s-55.48-.35-89,12.58a16,16,0,0,0-9.63,11C27.07,80.54,24,98.09,24,128Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                  </span>
                              </div>
                              <div class="d-flex align-items-center justify-content-between">
                                  <span class="text-muted">Subscribers</span>
                                  <span class="text-danger d-inline-flex align-items-center"><i class="ti ti-arrow-down me-1"></i>18.91%</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-5">
              <div class="row">
                  <div class="col-xl-6">
                      <div class="card custom-card overflow-hidden shadow-none">
                          <div class="card-body p-0">
                              <div class="p-4">
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="mb-3">
                                          <span class="d-block fw-medium fs-15">Engaged Users</span>
                                      </div>
                                      <div>
                                          <span class="avatar bg-primary-transparent">
                                              <i class="ri-group-line fs-5"></i>
                                          </span>
                                      </div>
                                  </div>
                                  <div>
                                      <p class="mb-0">
                                          <span class="fs-24 fw-medium">14,252</span>
                                      </p>
                                      <span class="text-muted">0.9% increased today</span>
                                  </div>
                              </div>
                              <div id="engaged"></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-6">
                      <div class="card custom-card overflow-hidden shadow-none">
                          <div class="card-body p-0">
                              <div class="p-4">
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="mb-3">
                                          <span class="d-block fw-medium fs-15">Page Impressions</span>
                                      </div>
                                      <div>
                                          <span class="avatar bg-secondary-transparent">
                                              <i class="ri-article-line fs-5"></i>
                                          </span>
                                      </div>
                                  </div>
                                  <div>
                                      <p class="mb-0">
                                          <span class="fs-24 fw-medium">5,14,252</span>
                                      </p>
                                      <span class="text-muted">0.9% increased today</span>
                                  </div>
                              </div>
                              <div id="impressions"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: row-1 -->

      <!-- Start:: row-2 -->
      <div class="row">
          <div class="col-xxl-3">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">
                          Suggestions
                      </div>
                  </div>
                  <div class="card-body">
                      <ul class="list-unstyled social-suggestions-list">
                          <li>
                              <div class="d-flex align-items-center gap-3">
                                  <div class="lh-1">
                                      <span class="avatar avatar-md">
                                          <img src="../assets/images/faces/2.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="fw-semibold d-block">Socrates Itumay</span>
                                      <span class="text-muted d-block">3 Mutual Friends</span>
                                  </div>
                                  <div>
                                      <button aria-label="buton" type="button" class="btn btn-sm btn-icon btn-light border"><i class="ri-user-add-line"></i></button>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center gap-3">
                                  <div class="lh-1">
                                      <span class="avatar avatar-md">
                                          <img src="../assets/images/faces/3.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="fw-semibold d-block">Ryan Gercia</span>
                                      <span class="text-muted d-block">1 Mutual Friend</span>
                                  </div>
                                  <div>
                                      <button aria-label="buton" type="button" class="btn btn-sm btn-icon btn-light border"><i class="ri-user-add-line"></i></button>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center gap-3">
                                  <div class="lh-1">
                                      <span class="avatar avatar-md">
                                          <img src="../assets/images/faces/10.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="fw-semibold d-block">Prax Bhav</span>
                                      <span class="text-muted d-block">2 Mutual Friends</span>
                                  </div>
                                  <div>
                                      <button aria-label="buton" type="button" class="btn btn-sm btn-icon btn-light border"><i class="ri-user-add-line"></i></button>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center gap-3">
                                  <div class="lh-1">
                                      <span class="avatar avatar-md">
                                          <img src="../assets/images/faces/12.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="fw-semibold d-block">Jackie Chen</span>
                                      <span class="text-muted d-block">12 Mutual Friends</span>
                                  </div>
                                  <div>
                                      <button aria-label="buton" type="button" class="btn btn-sm btn-icon btn-light border"><i class="ri-user-add-line"></i></button>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center gap-3">
                                  <div class="lh-1">
                                      <span class="avatar avatar-md">
                                          <img src="../assets/images/faces/5.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="fw-semibold d-block">Samantha Sam</span>
                                      <span class="text-muted d-block">6 Mutual Friends</span>
                                  </div>
                                  <div>
                                      <button aria-label="buton" type="button" class="btn btn-sm btn-icon btn-light border"><i class="ri-user-add-line"></i></button>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center gap-3">
                                  <div class="lh-1">
                                      <span class="avatar avatar-md">
                                          <img src="../assets/images/faces/15.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="fw-semibold d-block">Robert Lewis</span>
                                      <span class="text-muted d-block">8 Mutual Friends</span>
                                  </div>
                                  <div>
                                      <button aria-label="buton" type="button" class="btn btn-sm btn-icon btn-light border"><i class="ri-user-add-line"></i></button>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-xxl-6">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">
                          Audience Report
                      </div>  
                  </div>
                  <div class="card-body">
                      <div class="row gy-3">
                          <div class="col-xl-4">
                              <div class="p-3 text-default rounded border">
                                  <div class="d-flex align-items-center justify-content-between flex-wrap">
                                      <div>
                                          <span class="d-block mb-1">Followers</span>
                                          <h5 class="fw-semibold lh-1 mb-0">2.56M<span class="text-success fw-semibold fs-13 ms-2 d-inline-flex align-items-center">0.64%<i class="ri-arrow-up-s-line ms-1"></i></span></h5>
                                      </div>
                                      <div class="lh-1">
                                          <span class="avatar avatar-md bg-light text-primary border">
                                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M32,104H80a0,0,0,0,1,0,0V208a0,0,0,0,1,0,0H32a8,8,0,0,1-8-8V112A8,8,0,0,1,32,104Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M80,104l40-80a32,32,0,0,1,32,32V80h64a16,16,0,0,1,15.87,18l-12,96A16,16,0,0,1,204,208H80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                          </span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-4">
                              <div class="p-3 text-default rounded border">
                                  <div class="d-flex align-items-center justify-content-between flex-wrap">
                                      <div>
                                          <span class="d-block mb-1">Amount Spent</span>
                                          <h5 class="fw-semibold lh-1 mb-0">$14,642<span class="text-success fw-semibold fs-13 ms-2 d-inline-flex align-items-center">0.64%<i class="ri-arrow-up-s-line ms-1"></i></span></h5>
                                      </div>
                                      <div class="lh-1">
                                          <span class="avatar avatar-md bg-light text-secondary border">
                                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><line x1="128" y1="24" x2="128" y2="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="128" y1="208" x2="128" y2="232" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M184,88a40,40,0,0,0-40-40H112a40,40,0,0,0,0,80h40a40,40,0,0,1,0,80H104a40,40,0,0,1-40-40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                          </span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-4">
                              <div class="p-3 text-default rounded border">
                                  <div class="d-flex align-items-center justify-content-between flex-wrap">
                                      <div>
                                          <span class="d-block mb-1">Reach</span>
                                          <h5 class="fw-semibold lh-1 mb-0">12,326<span class="text-danger fw-semibold fs-13 ms-2 d-inline-flex align-items-center">5.31%<i class="ri-arrow-down-s-line ms-1"></i></span></h5>
                                      </div>
                                      <div class="lh-1">
                                          <span class="avatar avatar-md bg-light text-success border">
                                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="128" cy="96" r="64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M32,216c19.37-33.47,54.55-56,96-56s76.63,22.53,96,56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                          </span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div id="audience-report"></div>                                
                  </div>
              </div>
          </div>
          <div class="col-xxl-3">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">
                          Requests
                      </div>
                  </div>
                  <div class="card-body">
                      <ul class="list-unstyled social-requests-list">
                          <li>
                              <div class="d-flex align-items-center gap-2">
                                  <div>
                                      <span class="avatar avatar-md avatar-rounded bg-primary-transparent p-1">
                                          SI
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="fw-semibold d-block mb-0">Socrates Itumay</span>
                                      <span class="text-muted d-block fs-13">Sent you a request from <span class="fw-semibold text-pink">Instagram</span></span>
                                  </div>
                                  <div class="dropdown"> 
                                      <a aria-label="anchor" class="btn btn-primary-light btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="ri-more-2-fill"></i> </a> 
                                      <ul class="dropdown-menu" role="menu"> 
                                          <li><a class="dropdown-item text-success" href="javascript:void(0);"><i class="ri-check-line me-2 lh-1 align-middle"></i>Accept</a></li> 
                                          <li><a class="dropdown-item text-danger" href="javascript:void(0);"><i class="ri-close-line me-2 lh-1 align-middle"></i>Reject</a></li> 
                                      </ul> 
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center gap-2">
                                  <div>
                                      <span class="avatar avatar-md avatar-rounded bg-secondary-transparent p-1">
                                          RG
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="fw-semibold d-block mb-0">Ryan Gercia</span>
                                      <span class="text-muted d-block fs-13">Followed you on <span class="fw-semibold text-info">Twitter</span></span>
                                  </div>
                                  <div class="dropdown"> 
                                      <a aria-label="anchor" class="btn btn-primary-light btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="ri-more-2-fill"></i> </a> 
                                      <ul class="dropdown-menu" role="menu"> 
                                          <li><a class="dropdown-item text-success" href="javascript:void(0);"><i class="ri-check-line me-2 lh-1 align-middle"></i>Accept</a></li> 
                                          <li><a class="dropdown-item text-danger" href="javascript:void(0);"><i class="ri-close-line me-2 lh-1 align-middle"></i>Reject</a></li> 
                                      </ul> 
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center gap-2">
                                  <div>
                                      <span class="avatar avatar-md avatar-rounded bg-success-transparent p-1">
                                          PB
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="fw-semibold d-block mb-0">Prax Bhav</span>
                                      <span class="text-muted d-block fs-13">Sent you a connection request on <span class="text-teal fw-semibold">LinkedIn</span></span>
                                  </div>
                                  <div class="dropdown"> 
                                      <a aria-label="anchor" class="btn btn-primary-light btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="ri-more-2-fill"></i> </a> 
                                      <ul class="dropdown-menu" role="menu"> 
                                          <li><a class="dropdown-item text-success" href="javascript:void(0);"><i class="ri-check-line me-2 lh-1 align-middle"></i>Accept</a></li> 
                                          <li><a class="dropdown-item text-danger" href="javascript:void(0);"><i class="ri-close-line me-2 lh-1 align-middle"></i>Reject</a></li> 
                                      </ul> 
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center gap-2">
                                  <div>
                                      <span class="avatar avatar-md avatar-rounded bg-warning-transparent p-1">
                                          JC
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="fw-semibold d-block mb-0">Jackie Chen</span>
                                      <span class="text-muted d-block fs-13">Followed you on <span class="fw-se"></span>Twitter</span>
                                  </div>
                                  <div class="dropdown"> 
                                      <a aria-label="anchor" class="btn btn-primary-light btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="ri-more-2-fill"></i> </a> 
                                      <ul class="dropdown-menu" role="menu"> 
                                          <li><a class="dropdown-item text-success" href="javascript:void(0);"><i class="ri-check-line me-2 lh-1 align-middle"></i>Accept</a></li> 
                                          <li><a class="dropdown-item text-danger" href="javascript:void(0);"><i class="ri-close-line me-2 lh-1 align-middle"></i>Reject</a></li> 
                                      </ul> 
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center gap-2">
                                  <div>
                                      <span class="avatar avatar-md avatar-rounded bg-info-transparent p-1">
                                          SS
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="fw-semibold d-block mb-0">Samantha Sam</span>
                                      <span class="text-muted d-block fs-13">Requested to follow you on Instagram</span>
                                  </div>
                                  <div class="dropdown"> 
                                      <a aria-label="anchor" class="btn btn-primary-light btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="ri-more-2-fill"></i> </a> 
                                      <ul class="dropdown-menu" role="menu"> 
                                          <li><a class="dropdown-item text-success" href="javascript:void(0);"><i class="ri-check-line me-2 lh-1 align-middle"></i>Accept</a></li> 
                                          <li><a class="dropdown-item text-danger" href="javascript:void(0);"><i class="ri-close-line me-2 lh-1 align-middle"></i>Reject</a></li> 
                                      </ul> 
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center gap-2">
                                  <div>
                                      <span class="avatar avatar-md avatar-rounded bg-danger-transparent p-1">
                                          RL
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="fw-semibold d-block mb-0">Robert Lewis</span>
                                      <span class="text-muted d-block fs-13">Followed you on Twitter</span>
                                  </div>
                                  <div class="dropdown"> 
                                      <a aria-label="anchor" class="btn btn-primary-light btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="ri-more-2-fill"></i> </a> 
                                      <ul class="dropdown-menu" role="menu"> 
                                          <li><a class="dropdown-item text-success" href="javascript:void(0);"><i class="ri-check-line me-2 lh-1 align-middle"></i>Accept</a></li> 
                                          <li><a class="dropdown-item text-danger" href="javascript:void(0);"><i class="ri-close-line me-2 lh-1 align-middle"></i>Reject</a></li> 
                                      </ul> 
                                  </div>
                              </div>
                          </li>
                      </ul>                                
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: row-2 -->

      <!-- Start:: row-3 -->
      <div class="row">
          <div class="col-xxl-3">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">
                          Audience Reached
                      </div>
                  </div>
                  <div class="card-body p-0">
                      <div id="audience-reached" class="p-3"></div>
                      <div class="border-top">
                          <ul class="list-group list-group-flush top-categories">
                              <li class="list-group-item">
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="lh-1">
                                          <div class="fw-semibold mb-1">Male</div>
                                          <div><span class="text-muted fs-13">Increased by <span class="text-success fw-medium ms-1  d-inline-flex align-items-center">0.64%<i class="ti ti-trending-up ms-1"></i></span></span></div>
                                      </div>
                                      <div class="lh-1 text-end">
                                          <span class="d-block fw-semibold h6 mb-0">1,200</span>
                                      </div>
                                  </div>
                              </li>
                              <li class="list-group-item rounded">
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="lh-1">
                                          <div class="fw-semibold mb-1">Female</div>
                                          <div><span class="text-muted fs-13">Decreased by <span class="text-danger fw-medium ms-1  d-inline-flex align-items-center">2.75%<i class="ti ti-trending-down ms-1"></i></span></span></div>
                                      </div>
                                      <div class="lh-1 text-end">
                                          <span class="d-block fw-semibold h6 mb-0">750</span>
                                      </div>
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-9">
              <div class="card custom-card">
                  <div class="card-header justify-content-between">
                      <div class="card-title">
                          Social Media Performance
                      </div>
                      <div class="d-flex flex-wrap gap-2"> 
                          <div> 
                              <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example"> 
                          </div> 
                          <div class="dropdown"> 
                              <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i> 
                              </a> 
                              <ul class="dropdown-menu" role="menu"> 
                                  <li><a class="dropdown-item" href="javascript:void(0);">New</a></li> 
                                  <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li> 
                                  <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li> 
                              </ul> 
                          </div> 
                      </div>
                  </div>
                  <div class="card-body p-0">
                      <div class="table-responsive">
                          <table class="table text-nowrap">
                              <thead>
                                  <tr>
                                      <th scope="col">Date</th>
                                      <th scope="col">Platform</th>
                                      <th scope="col">Likes</th>
                                      <th scope="col">Comments</th>
                                      <th scope="col">Shares</th>
                                      <th scope="col">Impressions</th>
                                      <th scope="col">Engaged (%)</th>
                                      <th scope="col">Followers</th>
                                      <th scope="col">Following</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>
                                          2024-02-15
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <span class="avatar avatar-sm bg-danger-transparent">
                                                  <i class="ri-youtube-fill fs-16"></i>
                                              </span>
                                              <span class="fw-medium">Youtube</span>
                                          </div>
                                      </td>
                                      <td>
                                          150
                                      </td>
                                      <td>
                                          25
                                      </td>
                                      <td>
                                          50
                                      </td>
                                      <td>
                                          <span class="badge bg-primary-transparent">10,000</span>
                                      </td>
                                      <td>
                                          3.5%
                                      </td>
                                      <td>
                                          458
                                      </td>
                                      <td>
                                          256
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          2024-02-14
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <span class="avatar avatar-sm bg-dark-transparent">
                                                  <i class="ri-twitter-x-fill fs-16"></i>
                                              </span>
                                              <span class="fw-medium">Twitter</span>
                                          </div>
                                      </td>
                                      <td>
                                          200
                                      </td>
                                      <td>
                                          30
                                      </td>
                                      <td>
                                          70
                                      </td>
                                      <td>
                                          <span class="badge bg-secondary-transparent">15,000</span>
                                      </td>
                                      <td>
                                          4.2%
                                      </td>
                                      <td>
                                          565
                                      </td>
                                      <td>
                                          355
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          2024-02-13
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <span class="avatar avatar-sm bg-info-transparent">
                                                  <i class="ri-messenger-fill fs-16"></i>
                                              </span>
                                              <span class="fw-medium">Facebook</span>
                                          </div>
                                      </td>
                                      <td>
                                          300
                                      </td>
                                      <td>
                                          40
                                      </td>
                                      <td>
                                          90
                                      </td>
                                      <td>
                                          <span class="badge bg-success-transparent">20,000</span>
                                      </td>
                                      <td>
                                          5.0%
                                      </td>
                                      <td>
                                          458
                                      </td>
                                      <td>
                                          956
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          2024-02-12
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <span class="avatar avatar-sm bg-pink-transparent">
                                                  <i class="ri-instagram-fill fs-16"></i>
                                              </span>
                                              <span class="fw-medium">Instagram</span>
                                          </div>
                                      </td>
                                      <td>
                                          100
                                      </td>
                                      <td>
                                          20
                                      </td>
                                      <td>
                                          30
                                      </td>
                                      <td>
                                          <span class="badge bg-orange-transparent">8,000</span>
                                      </td>
                                      <td>
                                          2.1%
                                      </td>
                                      <td>
                                          458
                                      </td>
                                      <td>
                                          256
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          2024-02-11
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <span class="avatar avatar-sm bg-primary-transparent">
                                                  <i class="ri-linkedin-box-line fs-16"></i>
                                              </span>
                                              <span class="fw-medium">LinkedIn</span>
                                          </div>
                                      </td>
                                      <td>
                                          120
                                      </td>
                                      <td>
                                          15
                                      </td>
                                      <td>
                                          40
                                      </td>
                                      <td>
                                          <span class="badge bg-info-transparent">12,000</span>
                                      </td>
                                      <td>
                                          3.0%
                                      </td>
                                      <td>
                                          856
                                      </td>
                                      <td>
                                          295
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
                  <div class="card-footer border-top-0">
                      <div class="d-flex align-items-center">
                          <div> Showing 6 Entries <i class="bi bi-arrow-right ms-2 fw-medium"></i> </div>
                          <div class="ms-auto">
                          <nav aria-label="Page navigation" class="pagination-style-4">
                              <ul class="pagination mb-0">
                                  <li class="page-item disabled"> <a class="page-link" href="javascript:void(0);"> Prev </a> </li>
                                      <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                      <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                      <li class="page-item"> <a class="page-link text-primary" href="javascript:void(0);"> next </a> </li>
                                  </ul>
                              </nav>
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