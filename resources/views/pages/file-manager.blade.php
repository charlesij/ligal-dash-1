@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Page Header -->
      <div
          class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">File Manager</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                          <li class="breadcrumb-item active" aria-current="page">File Manager</li>
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
          <div class="col-xxl-3 col-xl-12">
              <div class="card custom-card">
                  <div class="card-body p-0">
                      <div class="d-flex gap-3 align-items-center border-bottom p-3 flex-wrap">
                          <span class="avatar avatar-xl online p-1 bg-gray-300"><img
                                  src="{{ asset('') }}/assets/images/faces/14.jpg" alt="img"></span>
                          <div class="main-profile-info">
                              <h6 class="fw-semibold mb-1">Lucas Hayes</h6>
                              <p class="text-muted fs-11 mb-1">Ui Designer</p>
                              <p class="mb-0">lucashayes12@mail.com </p>
                          </div>
                      </div>
                      <ul class="list-unstyled files-main-nav p-3" id="files-main-nav">
                          <li class="active files-type">
                              <a href="javascript:void(0)">
                                  <div class="d-flex align-items-center">
                                      <div class="me-2">
                                          <i class="ri-folder-2-line fs-16"></i>
                                      </div>
                                      <span class="flex-fill text-nowrap">
                                          My Files
                                      </span>
                                      <span class="badge bg-primary">322</span>
                                  </div>
                              </a>
                          </li>
                          <li class="files-type">
                              <a href="javascript:void(0)">
                                  <div class="d-flex align-items-center">
                                      <div class="me-2">
                                          <i class="ri-star-s-line fs-16"></i>
                                      </div>
                                      <span class="flex-fill text-nowrap">
                                          favourites
                                      </span>
                                  </div>
                              </a>
                          </li>
                          <li class="files-type">
                              <a href="javascript:void(0)">
                                  <div class="d-flex align-items-center">
                                      <div class="me-2">
                                          <i class="ri-share-forward-line fs-16"></i>
                                      </div>
                                      <span class="flex-fill text-nowrap">
                                          Shared Files
                                      </span>
                                  </div>
                              </a>
                          </li>
                          <li class="files-type">
                              <a href="javascript:void(0)">
                                  <div class="d-flex align-items-center">
                                      <div class="me-2">
                                          <i class="ri-delete-bin-line fs-16"></i>
                                      </div>
                                      <span class="flex-fill text-nowrap">
                                          Recycle Bin
                                      </span>
                                  </div>
                              </a>
                          </li>
                          <li class="files-type">
                              <a href="javascript:void(0)">
                                  <div class="d-flex align-items-center">
                                      <div class="me-2">
                                          <i class="ri-history-fill fs-16"></i>
                                      </div>
                                      <span class="flex-fill text-nowrap">
                                          Recent Files
                                      </span>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="javascript:void(0)">
                                  <div class="d-flex align-items-center">
                                      <div class="me-2">
                                          <i class="ri-settings-3-line fs-16"></i>
                                      </div>
                                      <span class="flex-fill text-nowrap">
                                          Settings
                                      </span>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="javascript:void(0)">
                                  <div class="d-flex align-items-center">
                                      <div class="me-2">
                                          <i class="ri-questionnaire-line fs-16"></i>
                                      </div>
                                      <span class="flex-fill text-nowrap">
                                          Help Center
                                      </span>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="javascript:void(0)">
                                  <div class="d-flex align-items-center">
                                      <div class="me-2">
                                          <i class="ri-folder-line fs-16"></i>
                                      </div>
                                      <span class="flex-fill text-nowrap">
                                          Version
                                      </span>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="javascript:void(0)">
                                  <div class="d-flex align-items-center">
                                      <div class="me-2">
                                          <i class="ri-logout-box-line fs-16"></i>
                                      </div>
                                      <span class="flex-fill text-nowrap">
                                          Log out
                                      </span>
                                  </div>
                              </a>
                          </li>
                          <li class="fs-12 text-muted ps-2 mb-2">Favourite Files</li>
                          <li>
                              <a href="javascript:void(0);">
                                  <div class="d-flex align-items-center justify-content-between flex-wrap">
                                      <div class="d-flex align-items-center">
                                          <span class="me-2 lh-1">
                                              <i
                                                  class="ri-circle-line fw-bold align-middle fs-10 fw-medium text-primary"></i>
                                          </span>
                                          <span class="flex-fill text-nowrap">
                                              Doc-Snippets.docx
                                          </span>
                                      </div>
                                      <div>
                                          <span class="fs-12 text-muted">17.92 GB</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="javascript:void(0);">
                                  <div class="d-flex align-items-center justify-content-between flex-wrap">
                                      <div class="d-flex align-items-center">
                                          <span class="me-2 lh-1">
                                              <i
                                                  class="ri-circle-line fw-bold align-middle fs-10 fw-medium text-secondary"></i>
                                          </span>
                                          <span class="flex-fill text-nowrap">
                                              Img-favorite.img
                                          </span>
                                      </div>
                                      <div>
                                          <span class="fs-12 text-muted">22.7 GB</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="javascript:void(0);">
                                  <div class="d-flex align-items-center justify-content-between flex-wrap">
                                      <div class="d-flex align-items-center">
                                          <span class="me-2 lh-1">
                                              <i
                                                  class="ri-circle-line fw-bold align-middle fs-10 fw-medium text-info"></i>
                                          </span>
                                          <span class="flex-fill text-nowrap">
                                              Vid-Populatshows.mkv
                                          </span>
                                      </div>
                                      <div>
                                          <span class="fs-12 text-muted">32.65 GB</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li class="fs-12 text-muted ps-2">Storage Used</li>
                          <li class="p-3 bg-light rounded mt-2">
                              <div class="d-flex align-items-start gap-3">
                                  <div>
                                      <span
                                          class="avatar avatar-md bg-success-transparent svg-success">
                                          <svg xmlns="http://www.w3.org/2000/svg"
                                              viewBox="0 0 256 256">
                                              <rect width="256" height="256" fill="none" />
                                              <ellipse cx="128" cy="80" rx="88" ry="48"
                                                  opacity="0.2" />
                                              <ellipse cx="128" cy="80" rx="88" ry="48" fill="none"
                                                  stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="16" />
                                              <path
                                                  d="M40,80v48c0,26.51,39.4,48,88,48s88-21.49,88-48V80"
                                                  fill="none" stroke="currentColor"
                                                  stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="16" />
                                              <path
                                                  d="M40,128v48c0,26.51,39.4,48,88,48s88-21.49,88-48V128"
                                                  fill="none" stroke="currentColor"
                                                  stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="16" />
                                          </svg>
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <div class=" mb-2">
                                          <p class="mb-0"><span class="fw-bold fs-14">69.42GB</span>
                                              Used</p>
                                          <p class="fs-12 text-muted mb-0">58% Used - 51.04Gb free</p>
                                      </div>
                                      <div class="progress progress-xs bg-gray-300">
                                          <div class="progress-bar bg-success progress-bar-animated progress-bar-striped"
                                              role="progressbar" style="width: 58%" aria-valuenow="58"
                                              aria-valuemin="0" aria-valuemax="100">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="card custom-card">
                  <div class="card-body">
                      <div class="filemanager-dropzone"> 
                          <label class="form-label">Drop File here
                              :</label>
                              <form data-single="true" method="post" action="https://httpbin.org/post" class="dropzone"></form>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-6 col-xl-12">
              <div class="card custom-card overflow-hidden">
                  <div class="card-body p-0">
                      <div class="file-manager-folders">
                          <div
                              class="d-flex p-3 flex-wrap gap-2 align-items-center justify-content-between border-bottom">
                              <div class="flex-fill">
                                  <h6 class="fw-medium mb-0">Folders</h6>
                              </div>
                              <div class="d-flex gap-2 flex-wrap justify-content-sm-end w-75">
                                  <input class="form-control form-control-sm w-50" type="text"
                                      placeholder="Search Here" aria-label=".form-control-sm example">
                                  <button
                                      class="btn btn-sm btn-primary btn-w-md d-flex align-items-center justify-content-center btn-wave waves-light"
                                      data-bs-toggle="modal" data-bs-target="#create-folder">
                                      <i class="ri-add-circle-line align-middle me-1"></i>Create Folder
                                  </button>
                                  <div class="modal fade" id="create-folder" tabindex="-1"
                                      aria-labelledby="create-folder" data-bs-keyboard="false"
                                      aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h6 class="modal-title" id="staticBackdropLabel">Create
                                                      Folder
                                                  </h6>
                                                  <button type="button" class="btn-close"
                                                      data-bs-dismiss="modal" aria-label="Close"></button>
                                              </div>
                                              <div class="modal-body">
                                                  <label for="create-folder1" class="form-label">Folder
                                                      Name</label>
                                                  <input type="text" class="form-control" id="create-folder1"
                                                      placeholder="Folder Name">
                                              </div>
                                              <div class="modal-footer">
                                                  <button type="button" class="btn btn-sm btn-icon btn-light"
                                                      data-bs-dismiss="modal"><i
                                                          class="ri-close-fill"></i></button>
                                                  <button type="button"
                                                      class="btn btn-sm btn-success">Create</button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <button
                                      class="btn btn-sm btn-secondary btn-w-md d-flex align-items-center justify-content-center btn-wave waves-light"
                                      data-bs-toggle="modal" data-bs-target="#create-file">
                                      <i class="ri-add-circle-line align-middle me-1"></i>Create File
                                  </button>
                                  <div class="modal fade" id="create-file" tabindex="-1"
                                      aria-labelledby="create-file" data-bs-keyboard="false"
                                      aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h6 class="modal-title" id="staticBackdropLabel1">Create
                                                      File
                                                  </h6>
                                                  <button type="button" class="btn-close"
                                                      data-bs-dismiss="modal" aria-label="Close"></button>
                                              </div>
                                              <div class="modal-body">
                                                  <label for="create-file1" class="form-label">File
                                                      Name</label>
                                                  <input type="text" class="form-control" id="create-file1"
                                                      placeholder="File Name">
                                              </div>
                                              <div class="modal-footer">
                                                  <button type="button" class="btn btn-sm btn-icon btn-light"
                                                      data-bs-dismiss="modal"><i
                                                          class="ri-close-fill"></i></button>
                                                  <button type="button"
                                                      class="btn btn-sm btn-success">Create</button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="p-3 file-folders-container">
                              <div class="d-flex mb-3 align-items-center justify-content-between">
                                  <p class="mb-0 fw-medium fs-14">Most Recent</p>
                                  <a href="javascript:void(0);" class="fs-12 text-muted fw-medium"> View All<i
                                          class="ti ti-arrow-narrow-right ms-1"></i> </a>
                              </div>
                              <div class="row row-cols-xl-4 row-cols-md-2 row-cols-2 mb-0">
                                  <div class="col">
                                      <div class="card custom-card border  shadow-none">
                                          <div class="card-body p-1">
                                              <span class="filestar"><i
                                                      class="ri-star-line fs-14 text-muted"></i></span>
                                              <div class="text-center">
                                                  <div class="p-3 bg-light mb-2">
                                                      <div
                                                          class="avatar avatar-lg bg-primary-transparent border border-primary svg-primary border-opacity-10 mb-2">
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                              height="32" fill="#000000"
                                                              viewBox="0 0 256 256">
                                                              <path
                                                                  d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40ZM156,88a12,12,0,1,1-12,12A12,12,0,0,1,156,88Zm60,112H40V160.69l46.34-46.35a8,8,0,0,1,11.32,0h0L165,181.66a8,8,0,0,0,11.32-11.32l-17.66-17.65L173,138.34a8,8,0,0,1,11.31,0L216,170.07V200Z">
                                                              </path>
                                                          </svg>
                                                      </div>
                                                  </div>
                                                  <div>
                                                      <a href="javascript:void(0);"
                                                          class="d-block fw-medium">uipodcost.jpg</a>
                                                      <span class="fs-12 text-muted">16 Sep 2022</span>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col">
                                      <div class="card custom-card border  shadow-none">
                                          <div class="card-body p-1">
                                              <span class="filestar"><i
                                                      class="ri-star-line fs-14 text-warning"></i></span>
                                              <div class="text-center">
                                                  <div class="p-3 bg-light mb-2">
                                                      <div
                                                          class="avatar avatar-lg bg-secondary-transparent border svg-secondary border-secondary border-opacity-10 mb-2">
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                              height="32" fill="#000000"
                                                              viewBox="0 0 256 256">
                                                              <path
                                                                  d="M245,110.64A16,16,0,0,0,232,104H216V88a16,16,0,0,0-16-16H130.67L102.94,51.2a16.14,16.14,0,0,0-9.6-3.2H40A16,16,0,0,0,24,64V208h0a8,8,0,0,0,8,8H211.1a8,8,0,0,0,7.59-5.47l28.49-85.47A16.05,16.05,0,0,0,245,110.64ZM93.34,64,123.2,86.4A8,8,0,0,0,128,88h72v16H69.77a16,16,0,0,0-15.18,10.94L40,158.7V64Z">
                                                              </path>
                                                          </svg>
                                                      </div>
                                                  </div>
                                                  <div>
                                                      <a href="javascript:void(0);"
                                                          class="d-block fw-medium">mainfile.doc</a>
                                                      <span class="fs-12 text-muted">19 Aug 2023</span>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col">
                                      <div class="card custom-card border  shadow-none">
                                          <span class="filestar"><i
                                                  class="ri-star-line fs-14 text-muted"></i></span>
                                          <div class="card-body p-1">
                                              <div class="text-center">
                                                  <div class="p-3 bg-light mb-2">
                                                      <div
                                                          class="avatar avatar-lg bg-success-transparent border svg-success border-success  border-opacity-10 mb-2">
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                              height="32" fill="#000000"
                                                              viewBox="0 0 256 256">
                                                              <path
                                                                  d="M44,120H212a4,4,0,0,0,4-4V88a8,8,0,0,0-2.34-5.66l-56-56A8,8,0,0,0,152,24H56A16,16,0,0,0,40,40v76A4,4,0,0,0,44,120ZM152,44l44,44H152Zm72,108.53a8.18,8.18,0,0,1-8.25,7.47H192v16h15.73a8.17,8.17,0,0,1,8.25,7.47,8,8,0,0,1-8,8.53H192v15.73a8.17,8.17,0,0,1-7.47,8.25,8,8,0,0,1-8.53-8V152a8,8,0,0,1,8-8h32A8,8,0,0,1,224,152.53ZM64,144H48a8,8,0,0,0-8,8v55.73A8.17,8.17,0,0,0,47.47,216,8,8,0,0,0,56,208v-8h7.4c15.24,0,28.14-11.92,28.59-27.15A28,28,0,0,0,64,144Zm-.35,40H56V160h8a12,12,0,0,1,12,13.16A12.25,12.25,0,0,1,63.65,184ZM128,144H112a8,8,0,0,0-8,8v56a8,8,0,0,0,8,8h15.32c19.66,0,36.21-15.48,36.67-35.13A36,36,0,0,0,128,144Zm-.49,56H120V160h8a20,20,0,0,1,20,20.77C147.58,191.59,138.34,200,127.51,200Z">
                                                              </path>
                                                          </svg>
                                                      </div>
                                                  </div>
                                                  <div>
                                                      <a href="javascript:void(0);"
                                                          class="d-block fw-medium">sourcemedia.pdf</a>
                                                      <span class="fs-12 text-muted">15 Oct 2024</span>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col">
                                      <div class="card custom-card border  shadow-none">
                                          <span class="filestar"><i
                                                  class="ri-star-line fs-14 text-muted"></i></span>
                                          <div class="card-body p-1">
                                              <div class="text-center">
                                                  <div class="p-3 bg-light mb-2">
                                                      <div
                                                          class="avatar avatar-lg bg-info-transparent border svg-info border-info border-opacity-10 mb-2">
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                              height="32" fill="#000000"
                                                              viewBox="0 0 256 256">
                                                              <path
                                                                  d="M232,208a8,8,0,0,1-8,8H32a8,8,0,0,1,0-16H224A8,8,0,0,1,232,208Zm0-152V168a16,16,0,0,1-16,16H40a16,16,0,0,1-16-16V56A16,16,0,0,1,40,40H216A16,16,0,0,1,232,56Zm-68,56a8,8,0,0,0-3.41-6.55l-40-28A8,8,0,0,0,108,84v56a8,8,0,0,0,12.59,6.55l40-28A8,8,0,0,0,164,112Z">
                                                              </path>
                                                          </svg>
                                                      </div>
                                                  </div>
                                                  <div>
                                                      <a href="javascript:void(0);"
                                                          class="d-block fw-medium">moviesfile.mp3</a>
                                                      <span class="fs-12 text-muted">12 Jan 2021</span>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="d-flex mb-3 align-items-center justify-content-between">
                                  <p class="mb-0 fw-medium fs-14">Folders</p>
                                  <a href="javascript:void(0);" class="fs-12 text-muted fw-medium"> View All<i
                                          class="ti ti-arrow-narrow-right ms-1"></i> </a>
                              </div>
                              <div class="row row-cols-xl-4 row-cols-md-2 row-cols-2 mb-0">
                                  <div class="col">
                                      <div class="card custom-card border shadow-none">
                                          <div class="card-body">
                                              <div
                                                  class="mb-0 folder-svg-container d-flex flex-wrap align-items-center">
                                                  <div
                                                      class="svg-warning text-warning me-3 bg-light avatar avatar-lg border">
                                                      <svg xmlns="http://www.w3.org/2000/svg"
                                                          viewBox="0 0 256 256">
                                                          <rect width="256" height="256" fill="none" />
                                                          <path
                                                              d="M69.77,112H208V88a8,8,0,0,0-8-8H130.67a8,8,0,0,1-4.8-1.6L98.13,57.6a8,8,0,0,0-4.8-1.6H40a8,8,0,0,0-8,8V208l30.18-90.53A8,8,0,0,1,69.77,112Z"
                                                              opacity="0.2" />
                                                          <path
                                                              d="M32,208V64a8,8,0,0,1,8-8H93.33a8,8,0,0,1,4.8,1.6l27.74,20.8a8,8,0,0,0,4.8,1.6H200a8,8,0,0,1,8,8v24"
                                                              fill="none" stroke="currentColor"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="16" />
                                                          <path
                                                              d="M32,208l30.18-90.53A8,8,0,0,1,69.77,112H232a8,8,0,0,1,7.59,10.53L211.09,208Z"
                                                              fill="none" stroke="currentColor"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="16" />
                                                      </svg>
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
                                                          <a href="javascript:void(0);"
                                                              data-bs-toggle="dropdown" aria-expanded="false">
                                                              <i
                                                                  class="ri-more-2-fill fw-semibold text-muted"></i>
                                                          </a>
                                                          <ul class="dropdown-menu">
                                                              <li><a class="dropdown-item"
                                                                      href="javascript:void(0);">Delete</a>
                                                              </li>
                                                              <li><a class="dropdown-item"
                                                                      href="javascript:void(0);">Rename</a>
                                                              </li>
                                                              <li><a class="dropdown-item"
                                                                      href="javascript:void(0);">Hide
                                                                      Folder</a></li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div>
                                                  <div class="progress progress-xs mt-3">
                                                      <div class="progress-bar bg-primary progress-bar-animated progress-bar-striped"
                                                          role="progressbar" style="width: 65%"
                                                          aria-valuenow="65" aria-valuemin="0"
                                                          aria-valuemax="100">
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col">
                                      <div class="card custom-card border shadow-none">
                                          <div class="card-body">
                                              <div
                                                  class="mb-0 folder-svg-container d-flex flex-wrap align-items-center">
                                                  <div
                                                      class="svg-warning text-warning me-3 bg-light avatar avatar-lg border">
                                                      <svg xmlns="http://www.w3.org/2000/svg"
                                                          viewBox="0 0 256 256">
                                                          <rect width="256" height="256" fill="none" />
                                                          <path
                                                              d="M69.77,112H208V88a8,8,0,0,0-8-8H130.67a8,8,0,0,1-4.8-1.6L98.13,57.6a8,8,0,0,0-4.8-1.6H40a8,8,0,0,0-8,8V208l30.18-90.53A8,8,0,0,1,69.77,112Z"
                                                              opacity="0.2" />
                                                          <path
                                                              d="M32,208V64a8,8,0,0,1,8-8H93.33a8,8,0,0,1,4.8,1.6l27.74,20.8a8,8,0,0,0,4.8,1.6H200a8,8,0,0,1,8,8v24"
                                                              fill="none" stroke="currentColor"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="16" />
                                                          <path
                                                              d="M32,208l30.18-90.53A8,8,0,0,1,69.77,112H232a8,8,0,0,1,7.59,10.53L211.09,208Z"
                                                              fill="none" stroke="currentColor"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="16" />
                                                      </svg>
                                                  </div>
                                                  <div>
                                                      <p class="fs-14 fw-medium mb-1 lh-1">
                                                          <a href="javascript:void(0);">Docs</a>
                                                      </p>
                                                      <span class="text-muted fs-12">
                                                          17 Files
                                                      </span>
                                                  </div>
                                                  <div class="float-end ms-auto">
                                                      <div class="dropdown">
                                                          <a href="javascript:void(0);"
                                                              data-bs-toggle="dropdown" aria-expanded="false">
                                                              <i
                                                                  class="ri-more-2-fill fw-semibold text-muted"></i>
                                                          </a>
                                                          <ul class="dropdown-menu">
                                                              <li><a class="dropdown-item"
                                                                      href="javascript:void(0);">Delete</a>
                                                              </li>
                                                              <li><a class="dropdown-item"
                                                                      href="javascript:void(0);">Rename</a>
                                                              </li>
                                                              <li><a class="dropdown-item"
                                                                      href="javascript:void(0);">Hide
                                                                      Folder</a></li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div>
                                                  <div class="progress progress-xs mt-3">
                                                      <div class="progress-bar bg-secondary progress-bar-animated progress-bar-striped"
                                                          role="progressbar" style="width: 58%"
                                                          aria-valuenow="58" aria-valuemin="0"
                                                          aria-valuemax="100">
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col">
                                      <div class="card custom-card border shadow-none">
                                          <div class="card-body">
                                              <div
                                                  class="mb-0 folder-svg-container d-flex flex-wrap align-items-center">
                                                  <div
                                                      class="svg-warning text-warning me-3 bg-light avatar avatar-lg border">
                                                      <svg xmlns="http://www.w3.org/2000/svg"
                                                          viewBox="0 0 256 256">
                                                          <rect width="256" height="256" fill="none" />
                                                          <path
                                                              d="M69.77,112H208V88a8,8,0,0,0-8-8H130.67a8,8,0,0,1-4.8-1.6L98.13,57.6a8,8,0,0,0-4.8-1.6H40a8,8,0,0,0-8,8V208l30.18-90.53A8,8,0,0,1,69.77,112Z"
                                                              opacity="0.2" />
                                                          <path
                                                              d="M32,208V64a8,8,0,0,1,8-8H93.33a8,8,0,0,1,4.8,1.6l27.74,20.8a8,8,0,0,0,4.8,1.6H200a8,8,0,0,1,8,8v24"
                                                              fill="none" stroke="currentColor"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="16" />
                                                          <path
                                                              d="M32,208l30.18-90.53A8,8,0,0,1,69.77,112H232a8,8,0,0,1,7.59,10.53L211.09,208Z"
                                                              fill="none" stroke="currentColor"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="16" />
                                                      </svg>
                                                  </div>
                                                  <div>
                                                      <p class="fs-14 fw-medium mb-1 lh-1">
                                                          <a href="javascript:void(0);">Videos</a>
                                                      </p>
                                                      <span class="text-muted fs-12">
                                                          473 Files
                                                      </span>
                                                  </div>
                                                  <div class="float-end ms-auto">
                                                      <div class="dropdown">
                                                          <a href="javascript:void(0);"
                                                              data-bs-toggle="dropdown" aria-expanded="false">
                                                              <i
                                                                  class="ri-more-2-fill fw-semibold text-muted"></i>
                                                          </a>
                                                          <ul class="dropdown-menu">
                                                              <li><a class="dropdown-item"
                                                                      href="javascript:void(0);">Delete</a>
                                                              </li>
                                                              <li><a class="dropdown-item"
                                                                      href="javascript:void(0);">Rename</a>
                                                              </li>
                                                              <li><a class="dropdown-item"
                                                                      href="javascript:void(0);">Hide
                                                                      Folder</a></li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div>
                                                  <div class="progress progress-xs mt-3">
                                                      <div class="progress-bar bg-info progress-bar-animated progress-bar-striped"
                                                          role="progressbar" style="width: 90%"
                                                          aria-valuenow="90" aria-valuemin="0"
                                                          aria-valuemax="100">
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col">
                                      <div class="card custom-card border shadow-none">
                                          <div class="card-body">
                                              <div
                                                  class="mb-0 folder-svg-container d-flex flex-wrap align-items-center">
                                                  <div
                                                      class="svg-warning text-warning me-3 bg-light avatar avatar-lg border">
                                                      <svg xmlns="http://www.w3.org/2000/svg"
                                                          viewBox="0 0 256 256">
                                                          <rect width="256" height="256" fill="none" />
                                                          <path
                                                              d="M69.77,112H208V88a8,8,0,0,0-8-8H130.67a8,8,0,0,1-4.8-1.6L98.13,57.6a8,8,0,0,0-4.8-1.6H40a8,8,0,0,0-8,8V208l30.18-90.53A8,8,0,0,1,69.77,112Z"
                                                              opacity="0.2" />
                                                          <path
                                                              d="M32,208V64a8,8,0,0,1,8-8H93.33a8,8,0,0,1,4.8,1.6l27.74,20.8a8,8,0,0,0,4.8,1.6H200a8,8,0,0,1,8,8v24"
                                                              fill="none" stroke="currentColor"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="16" />
                                                          <path
                                                              d="M32,208l30.18-90.53A8,8,0,0,1,69.77,112H232a8,8,0,0,1,7.59,10.53L211.09,208Z"
                                                              fill="none" stroke="currentColor"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="16" />
                                                      </svg>
                                                  </div>
                                                  <div>
                                                      <p class="fs-14 fw-medium mb-1 lh-1">
                                                          <a href="javascript:void(0);">Apps</a>
                                                      </p>
                                                      <span class="text-muted fs-12">
                                                          165 Files
                                                      </span>
                                                  </div>
                                                  <div class="float-end ms-auto">
                                                      <div class="dropdown">
                                                          <a href="javascript:void(0);"
                                                              data-bs-toggle="dropdown" aria-expanded="false">
                                                              <i
                                                                  class="ri-more-2-fill fw-semibold text-muted"></i>
                                                          </a>
                                                          <ul class="dropdown-menu">
                                                              <li><a class="dropdown-item"
                                                                      href="javascript:void(0);">Delete</a>
                                                              </li>
                                                              <li><a class="dropdown-item"
                                                                      href="javascript:void(0);">Rename</a>
                                                              </li>
                                                              <li><a class="dropdown-item"
                                                                      href="javascript:void(0);">Hide
                                                                      Folder</a></li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div>
                                                  <div class="progress progress-xs mt-3">
                                                      <div class="progress-bar bg-success progress-bar-animated progress-bar-striped"
                                                          role="progressbar" style="width: 32%"
                                                          aria-valuenow="32" aria-valuemin="0"
                                                          aria-valuemax="100">
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="d-flex mb-3 align-items-center justify-content-between">
                                  <p class="mb-0 fw-medium fs-14">Recent Files</p>
                                  <a href="javascript:void(0);" class="fs-12 text-muted fw-medium"> View All<i
                                          class="ti ti-arrow-narrow-right ms-1"></i> </a>
                              </div>
                              <div class="row">
                                  <div class="col-xl-12">
                                      <div class="table-responsive border border-bottom-0">
                                          <table class="table text-nowrap table-hover">
                                              <thead>
                                                  <tr>
                                                      <th scope="col">File Name</th>
                                                      <th scope="col">Category</th>
                                                      <th scope="col">Size</th>
                                                      <th scope="col">Date Modified</th>
                                                      <th scope="col">Action</th>
                                                  </tr>
                                              </thead>
                                              <tbody class="files-list">
                                                  <tr>
                                                      <th scope="row">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-0">
                                                                  <span
                                                                      class="avatar avatar-md svg-primary text-primary">
                                                                      <svg xmlns="http://www.w3.org/2000/svg"
                                                                          viewBox="0 0 256 256">
                                                                          <rect width="256" height="256"
                                                                              fill="none" />
                                                                          <path
                                                                              d="M112,175.67V168a8,8,0,0,0-8-8H48a8,8,0,0,0-8,8v40a8,8,0,0,0,8,8h56a8,8,0,0,0,8-8v-8.82L144,216V160Z"
                                                                              opacity="0.2" />
                                                                          <polyline
                                                                              points="112 175.67 144 160 144 216 112 199.18"
                                                                              fill="none"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-width="16" />
                                                                          <rect x="40" y="160" width="72"
                                                                              height="56" rx="8" fill="none"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-width="16" />
                                                                          <polygon
                                                                              points="152 32 152 88 208 88 152 32"
                                                                              opacity="0.2" />
                                                                          <polyline
                                                                              points="152 32 152 88 208 88"
                                                                              fill="none"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-width="16" />
                                                                          <path
                                                                              d="M176,224h24a8,8,0,0,0,8-8V88L152,32H56a8,8,0,0,0-8,8v88"
                                                                              fill="none"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-width="16" />
                                                                      </svg>
                                                                  </span>
                                                              </div>
                                                              <div>
                                                                  <a href="javascript:void(0);"
                                                                      data-bs-toggle="offcanvas"
                                                                      data-bs-target="#offcanvasRight"
                                                                      aria-controls="offcanvasRight">VID-00292312-SPK823.mp4</a>
                                                              </div>
                                                          </div>
                                                      </th>
                                                      <td>Videos</td>
                                                      <td>87MB</td>
                                                      <td>22,Nov 2024</td>
                                                      <td>
                                                          <div class="hstack gap-2 fs-15">
                                                              <a href="javascript:void(0);"
                                                                  class="btn btn-icon btn-sm btn-info-light"><i
                                                                      class="ri-eye-line"></i></a>
                                                              <a href="javascript:void(0);"
                                                                  class="btn btn-icon btn-sm btn-danger-light"><i
                                                                      class="ri-delete-bin-line"></i></a>
                                                          </div>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <th scope="row">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-0">
                                                                  <span
                                                                      class="avatar avatar-md svg-secondary text-secondary">
                                                                      <svg xmlns="http://www.w3.org/2000/svg"
                                                                          viewBox="0 0 256 256">
                                                                          <rect width="256" height="256"
                                                                              fill="none" />
                                                                          <polygon
                                                                              points="152 224 104 152 76.36 193.46 60 168 24 224 152 224"
                                                                              opacity="0.2" />
                                                                          <polygon
                                                                              points="152 224 104 152 76.36 193.46 60 168 24 224 152 224"
                                                                              fill="none"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-width="16" />
                                                                          <polygon
                                                                              points="152 32 152 88 208 88 152 32"
                                                                              opacity="0.2" />
                                                                          <polyline
                                                                              points="152 32 152 88 208 88"
                                                                              fill="none"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-width="16" />
                                                                          <path
                                                                              d="M192,224h8a8,8,0,0,0,8-8V88L152,32H56a8,8,0,0,0-8,8v96"
                                                                              fill="none"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-width="16" />
                                                                      </svg>
                                                                  </span>
                                                              </div>
                                                              <div>
                                                                  <a href="javascript:void(0);"
                                                                      data-bs-toggle="offcanvas"
                                                                      data-bs-target="#offcanvasRight"
                                                                      aria-controls="offcanvasRight">IMG-09123878-SPK734.jpeg</a>
                                                              </div>
                                                          </div>
                                                      </th>
                                                      <td>Images</td>
                                                      <td>1.35MB</td>
                                                      <td>25,Nov 2024</td>
                                                      <td>
                                                          <div class="hstack gap-2 fs-15">
                                                              <a href="javascript:void(0);"
                                                                  class="btn btn-icon btn-sm btn-info-light"><i
                                                                      class="ri-eye-line"></i></a>
                                                              <a href="javascript:void(0);"
                                                                  class="btn btn-icon btn-sm btn-danger-light"><i
                                                                      class="ri-delete-bin-line"></i></a>
                                                          </div>
                                                      </td>
                                                  </tr>
                                                  <tr class="table-active">
                                                      <th scope="row">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-0">
                                                                  <span
                                                                      class="avatar avatar-md svg-success text-success">
                                                                      <svg xmlns="http://www.w3.org/2000/svg"
                                                                          viewBox="0 0 256 256">
                                                                          <rect width="256" height="256"
                                                                              fill="none" />
                                                                          <path
                                                                              d="M168,192h16a20,20,0,0,0,0-40H168v56"
                                                                              fill="none"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-width="16" />
                                                                          <line x1="128" y1="152" x2="128"
                                                                              y2="208" fill="none"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-width="16" />
                                                                          <polyline
                                                                              points="56 152 88 152 56 208 88 208"
                                                                              fill="none"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-width="16" />
                                                                          <polygon
                                                                              points="152 32 152 88 208 88 152 32"
                                                                              opacity="0.2" />
                                                                          <path
                                                                              d="M48,112V40a8,8,0,0,1,8-8h96l56,56v24"
                                                                              fill="none"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-width="16" />
                                                                          <polyline
                                                                              points="152 32 152 88 208 88"
                                                                              fill="none"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-width="16" />
                                                                      </svg>
                                                                  </span>
                                                              </div>
                                                              <div>
                                                                  <a href="javascript:void(0);"
                                                                      data-bs-toggle="offcanvas"
                                                                      data-bs-target="#offcanvasRight"
                                                                      aria-controls="offcanvasRight">AMB-2012.zip</a>
                                                              </div>
                                                          </div>
                                                      </th>
                                                      <td>Archives</td>
                                                      <td>422KB</td>
                                                      <td>23,Nov 2024</td>
                                                      <td>
                                                          <div class="hstack gap-2 fs-15">
                                                              <a href="javascript:void(0);"
                                                                  class="btn btn-icon btn-sm btn-info-light"><i
                                                                      class="ri-eye-line"></i></a>
                                                              <a href="javascript:void(0);"
                                                                  class="btn btn-icon btn-sm btn-danger-light"><i
                                                                      class="ri-delete-bin-line"></i></a>
                                                          </div>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <th scope="row">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-0">
                                                                  <span
                                                                      class="avatar avatar-md svg-orange text-orange">
                                                                      <svg xmlns="http://www.w3.org/2000/svg"
                                                                          viewBox="0 0 256 256">
                                                                          <rect width="256" height="256"
                                                                              fill="none" />
                                                                          <polygon
                                                                              points="48 200 48 160 72 160 96 136 96 224 72 200 48 200"
                                                                              opacity="0.2" />
                                                                          <polygon
                                                                              points="48 200 48 160 72 160 96 136 96 224 72 200 48 200"
                                                                              fill="none"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-width="16" />
                                                                          <path
                                                                              d="M128,152a32.5,32.5,0,0,1,0,56"
                                                                              fill="none"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-width="16" />
                                                                          <polygon
                                                                              points="152 32 152 88 208 88 152 32"
                                                                              opacity="0.2" />
                                                                          <polyline
                                                                              points="152 32 152 88 208 88"
                                                                              fill="none"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-width="16" />
                                                                          <path
                                                                              d="M168,224h32a8,8,0,0,0,8-8V88L152,32H56a8,8,0,0,0-8,8v80"
                                                                              fill="none"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-width="16" />
                                                                      </svg>
                                                                  </span>
                                                              </div>
                                                              <div>
                                                                  <a href="javascript:void(0);"
                                                                      data-bs-toggle="offcanvas"
                                                                      data-bs-target="#offcanvasRight"
                                                                      aria-controls="offcanvasRight">AUD-1002-2012.mp3</a>
                                                              </div>
                                                          </div>
                                                      </th>
                                                      <td>Archives</td>
                                                      <td>422KB</td>
                                                      <td>23,Nov 2024</td>
                                                      <td>
                                                          <div class="hstack gap-2 fs-15">
                                                              <a href="javascript:void(0);"
                                                                  class="btn btn-icon btn-sm btn-info-light"><i
                                                                      class="ri-eye-line"></i></a>
                                                              <a href="javascript:void(0);"
                                                                  class="btn btn-icon btn-sm btn-danger-light"><i
                                                                      class="ri-delete-bin-line"></i></a>
                                                          </div>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <th scope="row">
                                                          <div class="d-flex align-items-center">
                                                              <div class="me-0">
                                                                  <span
                                                                      class="avatar avatar-md svg-info text-info">
                                                                      <svg xmlns="http://www.w3.org/2000/svg"
                                                                          viewBox="0 0 256 256">
                                                                          <rect width="256" height="256"
                                                                              fill="none" />
                                                                          <polygon
                                                                              points="152 32 152 88 208 88 152 32"
                                                                              opacity="0.2" />
                                                                          <path
                                                                              d="M48,112V40a8,8,0,0,1,8-8h96l56,56v24"
                                                                              fill="none"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-width="16" />
                                                                          <polyline
                                                                              points="152 32 152 88 208 88"
                                                                              fill="none"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-width="16" />
                                                                          <polyline
                                                                              points="216 152 184 152 184 208"
                                                                              fill="none"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-width="16" />
                                                                          <line x1="208" y1="184" x2="184"
                                                                              y2="184" fill="none"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-width="16" />
                                                                          <path
                                                                              d="M48,192H64a20,20,0,0,0,0-40H48v56"
                                                                              fill="none"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-width="16" />
                                                                          <path
                                                                              d="M112,152v56h16a28,28,0,0,0,0-56Z"
                                                                              fill="none"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              stroke-width="16" />
                                                                      </svg>
                                                                  </span>
                                                              </div>
                                                              <div>
                                                                  <a href="javascript:void(0);"
                                                                      data-bs-toggle="offcanvas"
                                                                      data-bs-target="#offcanvasRight"
                                                                      aria-controls="offcanvasRight">Document-02.pdf</a>
                                                              </div>
                                                          </div>
                                                      </th>
                                                      <td>Documents</td>
                                                      <td>1.69MB</td>
                                                      <td>2,Dec 2024</td>
                                                      <td>
                                                          <div class="hstack gap-2 fs-15">
                                                              <a href="javascript:void(0);"
                                                                  class="btn btn-icon btn-sm btn-info-light"><i
                                                                      class="ri-eye-line"></i></a>
                                                              <a href="javascript:void(0);"
                                                                  class="btn btn-icon btn-sm btn-danger-light"><i
                                                                      class="ri-delete-bin-line"></i></a>
                                                          </div>
                                                      </td>
                                                  </tr>
                                              </tbody>
                                              <tfoot>
                                                  <tr>
                                                      <td colspan="5">
                                                          <nav aria-label="Page navigation">
                                                              <ul class="pagination justify-content-end mb-0">
                                                                  <li class="page-item disabled"><a
                                                                          class="page-link"
                                                                          href="javascript:void(0);">Previous</a>
                                                                  </li>
                                                                  <li class="page-item active"><a class="page-link"
                                                                          href="javascript:void(0);">1</a>
                                                                  </li>
                                                                  <li class="page-item"><a class="page-link"
                                                                          href="javascript:void(0);">2</a>
                                                                  </li>
                                                                  <li class="page-item"><a class="page-link"
                                                                          href="javascript:void(0);">Next</a>
                                                                  </li>
                                                              </ul>
                                                          </nav>
                                                      </td>
                                                  </tr>
                                              </tfoot>
                                          </table>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-12">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="card custom-card overflow-hidden">
                          <div class="card-body pb-0">
                              <div id="file-manager-storage"></div>
                          </div>
                          <div class="card-footer p-0">
                              <ul class="list-group filemanager-list list-group-flush p-3 list-none">
                                  <li class="px-3 py-2 bg-light border">
                                      <div class="d-flex align-items-center gap-3 flex-wrap">
                                          <div class="main-card-icon primary">
                                              <div
                                                  class="avatar avatar-md bg-primary-transparent avatar-rounded border border-primary border-opacity-10">
                                                  <div class="avatar avatar-sm svg-primary text-primary">
                                                      <svg xmlns="http://www.w3.org/2000/svg"
                                                          viewBox="0 0 256 256">
                                                          <rect width="256" height="256" fill="none" />
                                                          <path
                                                              d="M97.66,114.34,147.31,164h0L173,138.34a8,8,0,0,1,11.31,0L224,178.06V56a8,8,0,0,0-8-8H40a8,8,0,0,0-8,8V168.69l54.34-54.35A8,8,0,0,1,97.66,114.34Z"
                                                              opacity="0.2" />
                                                          <rect x="32" y="48" width="192" height="160" rx="8"
                                                              fill="none" stroke="currentColor"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="16" />
                                                          <circle cx="156" cy="100" r="12" />
                                                          <path
                                                              d="M147.31,164,173,138.34a8,8,0,0,1,11.31,0L224,178.06"
                                                              fill="none" stroke="currentColor"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="16" />
                                                          <path
                                                              d="M32,168.69l54.34-54.35a8,8,0,0,1,11.32,0L191.31,208"
                                                              fill="none" stroke="currentColor"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="16" />
                                                      </svg>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="flex-fill">
                                              <span class="fw-medium">Media</span>
                                              <span class="text-muted fs-12 d-block">2,872 files</span>
                                          </div>
                                          <div>
                                              <span class="fw-medium text-primary mb-0 fs-14">35GB</span>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="px-3 py-2 bg-light border">
                                      <div class="d-flex align-items-center gap-3 flex-wrap">
                                          <div class="main-card-icon secondary">
                                              <div
                                                  class="avatar avatar-md bg-secondary-transparent avatar-rounded border border-secondary border-opacity-10">
                                                  <div class="avatar avatar-sm svg-secondary text-secondary">
                                                      <svg xmlns="http://www.w3.org/2000/svg"
                                                          viewBox="0 0 256 256">
                                                          <rect width="256" height="256" fill="none" />
                                                          <rect x="24" y="128" width="208" height="80" rx="8"
                                                              opacity="0.2" />
                                                          <path
                                                              d="M184,128h40a8,8,0,0,1,8,8v64a8,8,0,0,1-8,8H32a8,8,0,0,1-8-8V136a8,8,0,0,1,8-8H72"
                                                              fill="none" stroke="currentColor"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="16" />
                                                          <line x1="128" y1="24" x2="128" y2="128" fill="none"
                                                              stroke="currentColor" stroke-linecap="round"
                                                              stroke-linejoin="round" stroke-width="16" />
                                                          <polyline points="80 80 128 128 176 80" fill="none"
                                                              stroke="currentColor" stroke-linecap="round"
                                                              stroke-linejoin="round" stroke-width="16" />
                                                          <circle cx="188" cy="168" r="12" />
                                                      </svg>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="flex-fill">
                                              <span class="fw-medium">Downloads</span>
                                              <span class="text-muted fs-12 d-block">644 files</span>
                                          </div>
                                          <div>
                                              <span class="fw-medium text-secondary mb-0 fs-14">34GB</span>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="px-3 py-2 bg-light border">
                                      <div class="d-flex align-items-center gap-3 flex-wrap">
                                          <div class="main-card-icon success">
                                              <div
                                                  class="avatar avatar-md bg-success-transparent avatar-rounded border border-success border-opacity-10">
                                                  <div class="avatar avatar-sm svg-success text-success">
                                                      <svg xmlns="http://www.w3.org/2000/svg"
                                                          viewBox="0 0 256 256">
                                                          <rect width="256" height="256" fill="none" />
                                                          <rect x="48" y="48" width="64" height="64" rx="8"
                                                              opacity="0.2" />
                                                          <rect x="144" y="48" width="64" height="64" rx="8"
                                                              opacity="0.2" />
                                                          <rect x="48" y="144" width="64" height="64" rx="8"
                                                              opacity="0.2" />
                                                          <rect x="144" y="144" width="64" height="64" rx="8"
                                                              opacity="0.2" />
                                                          <rect x="144" y="144" width="64" height="64" rx="8"
                                                              fill="none" stroke="currentColor"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="16" />
                                                          <rect x="48" y="48" width="64" height="64" rx="8"
                                                              fill="none" stroke="currentColor"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="16" />
                                                          <rect x="144" y="48" width="64" height="64" rx="8"
                                                              fill="none" stroke="currentColor"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="16" />
                                                          <rect x="48" y="144" width="64" height="64" rx="8"
                                                              fill="none" stroke="currentColor"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="16" />
                                                      </svg>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="flex-fill">
                                              <span class="fw-medium">Apps</span>
                                              <span class="text-muted fs-12 d-block">64 files</span>
                                          </div>
                                          <div>
                                              <span class="fw-medium text-success mb-0 fs-14">26GB</span>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="px-3 py-2 bg-light border">
                                      <div class="d-flex align-items-center gap-3 flex-wrap">
                                          <div class="main-card-icon info">
                                              <div
                                                  class="avatar avatar-md bg-info-transparent avatar-rounded border border-info border-opacity-10">
                                                  <div class="avatar avatar-sm svg-info text-info">
                                                      <svg xmlns="http://www.w3.org/2000/svg"
                                                          viewBox="0 0 256 256">
                                                          <rect width="256" height="256" fill="none" />
                                                          <polygon points="152 32 152 88 208 88 152 32"
                                                              opacity="0.2" />
                                                          <path
                                                              d="M200,224H56a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8h96l56,56V216A8,8,0,0,1,200,224Z"
                                                              fill="none" stroke="currentColor"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="16" />
                                                          <polyline points="152 32 152 88 208 88" fill="none"
                                                              stroke="currentColor" stroke-linecap="round"
                                                              stroke-linejoin="round" stroke-width="16" />
                                                      </svg>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="flex-fill">
                                              <span class="fw-medium">Documents</span>
                                              <span class="text-muted fs-12 d-block">3,271 files</span>
                                          </div>
                                          <div>
                                              <span class="fw-medium text-info mb-0 fs-14">29GB </span>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="px-3 py-2 bg-light border mb-0">
                                      <div class="d-flex align-items-center gap-3 flex-wrap">
                                          <div class="main-card-icon warning">
                                              <div
                                                  class="avatar avatar-md bg-warning-transparent avatar-rounded border border-warning border-opacity-10">
                                                  <div class="avatar avatar-sm svg-warning text-warning">
                                                      <svg xmlns="http://www.w3.org/2000/svg"
                                                          viewBox="0 0 256 256">
                                                          <rect width="256" height="256" fill="none" />
                                                          <polygon points="152 32 152 88 208 88 152 32"
                                                              opacity="0.2" />
                                                          <path
                                                              d="M200,224H56a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8h96l56,56V216A8,8,0,0,1,200,224Z"
                                                              fill="none" stroke="currentColor"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="16" />
                                                          <polyline points="152 32 152 88 208 88" fill="none"
                                                              stroke="currentColor" stroke-linecap="round"
                                                              stroke-linejoin="round" stroke-width="16" />
                                                      </svg>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="flex-fill">
                                              <span class="fw-medium">Audio</span>
                                              <span class="text-muted fs-12 d-block">5,546 files</span>
                                          </div>
                                          <div>
                                              <span class="fw-medium text-warning mb-0 fs-14">72GB </span>
                                          </div>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-12">
                      <div class="card custom-card border-0 shadow-none filemanager-gradient">
                          <div class="card-body">
                              <div class="filemanager-upgrade-storage w-100 text-center">
                                  <span class="d-block mb-3"> <img
                                          src="{{ asset('') }}/assets/images/media/file-manager/2.png" alt=""> </span>
                                  <span class="fs-15 fw-semibold text-default">Upgrade To PRO</span>
                                  <span class="fs-12 fw-medium d-block text-muted mt-2">Upgrade to Pro for
                                      lightning-fast transfers, enhanced security, unlimited storage</span>
                                  <div class="mt-3 d-grid"> <button
                                          class="btn btn-lg btn-primary btn-wave">Upgrade
                                          Now</button>
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