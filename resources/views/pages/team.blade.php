@extends('layout.main')
@section('content')

        <!-- Start::app-content -->
        <div class="main-content app-content">
          <div class="container-fluid">

              <!-- Page Header -->
              <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                  <div>
                      <h1 class="page-title fw-medium fs-18 mb-2">Team</h1>
                      <div class="">
                          <nav>
                              <ol class="breadcrumb mb-0">
                                  <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Team</li>
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
              <div class="row justify-content-center">
                  <div class="col-xl-9">
                     <div class="row mb-4">
                      <div class="col-xxl-3 col-xl-6 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                          <div class="card custom-card team-member">
                              <div class="card-body text-center p-2">
                                  <div class="mb-4 lh-1 bg-light px-4 py-3">
                                      <span class="avatar avatar-xxl bg-primary-transparent avatar-rounded">
                                          <img src="{{ asset('') }}/assets/images/faces/team/1.png" class="card-img" alt="...">
                                      </span>
                                  </div>
                                  <div class="text-center p-4 pt-0">
                                      <h6 class="mb-0 fw-semibold">Jessica White</h6>
                                      <p class="mb-2 text-muted">Director</p>
                                      <div class="d-flex align-items-center  justify-content-center gap-2 flex-wrap">
                                          <span class="badge bg-light text-default border rounded-pill">
                                              Design
                                          </span>
                                          <span class="badge bg-light text-default border rounded-pill">
                                              Work
                                          </span>
                                          <span class="badge bg-light text-default border rounded-pill">
                                            Illustration
                                          </span>
                                      </div>
                                      <div class="d-flex justify-content-center mt-3">
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary btn-wave"><i class="ri-twitter-x-fill"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-secondary btn-wave ms-2"><i class="ri-facebook-fill"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-success btn-wave ms-2"><i class="ri-instagram-line"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-info btn-wave ms-2"><i class="ri-linkedin-fill"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xxl-3 col-xl-6 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                          <div class="card custom-card team-member">
                              <div class="card-body text-center p-2">
                                  <div class="mb-4 lh-1 bg-light px-4 py-3">
                                      <span class="avatar avatar-xxl bg-secondary-transparent avatar-rounded">
                                          <img src="{{ asset('') }}/assets/images/faces/team/2.png" class="card-img" alt="...">
                                      </span>
                                  </div>
                                  <div class="text-center p-4 pt-0">
                                      <h6 class="mb-0 fw-semibold">Daniel Lewis</h6>
                                      <p class="mb-2 text-muted">Manager</p>
                                      <div class="d-flex align-items-center  justify-content-center gap-2 flex-wrap">
                                          <span class="badge bg-light text-default border rounded-pill">
                                              Team
                                          </span>
                                          <span class="badge bg-light text-default border rounded-pill">
                                              Work
                                          </span>
                                          <span class="badge bg-light text-default border rounded-pill">
                                            Meating
                                          </span>
                                      </div>
                                      <div class="d-flex justify-content-center mt-3">
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary btn-wave"><i class="ri-twitter-x-fill"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-secondary btn-wave ms-2"><i class="ri-facebook-fill"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-success btn-wave ms-2"><i class="ri-instagram-line"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-info btn-wave ms-2"><i class="ri-linkedin-fill"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xxl-3 col-xl-6 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                          <div class="card custom-card team-member">
                              <div class="card-body text-center p-2">
                                  <div class="mb-4 lh-1 bg-light px-4 py-3">
                                      <span class="avatar avatar-xxl bg-success-transparent avatar-rounded">
                                          <img src="{{ asset('') }}/assets/images/faces/team/3.png" class="card-img" alt="...">
                                      </span>
                                  </div>
                                  <div class="text-center p-4 pt-0">
                                      <h6 class="mb-0 fw-semibold">Isabella King</h6>
                                      <p class="mb-2 text-muted">Frontend Developer</p>
                                      <div class="d-flex align-items-center  justify-content-center gap-2 flex-wrap">
                                          <span class="badge bg-light text-default border rounded-pill">
                                              Design
                                          </span>
                                          <span class="badge bg-light text-default border rounded-pill">
                                              Developing
                                          </span>
                                          <span class="badge bg-light text-default border rounded-pill">
                                            Work
                                          </span>
                                      </div>
                                      <div class="d-flex justify-content-center mt-3">
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary btn-wave"><i class="ri-twitter-x-fill"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-secondary btn-wave ms-2"><i class="ri-facebook-fill"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-success btn-wave ms-2"><i class="ri-instagram-line"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-info btn-wave ms-2"><i class="ri-linkedin-fill"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xxl-3 col-xl-6 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                          <div class="card custom-card team-member">
                              <div class="card-body text-center p-2">
                                  <div class="mb-4 lh-1 bg-light px-4 py-3">
                                      <span class="avatar avatar-xxl bg-info-transparent avatar-rounded">
                                          <img src="{{ asset('') }}/assets/images/faces/team/4.png" class="card-img" alt="...">
                                      </span>
                                  </div>
                                  <div class="text-center p-4 pt-0">
                                      <h6 class="mb-0 fw-semibold">Ethan Evans</h6>
                                      <p class="mb-2 text-muted">Freelance</p>
                                      <div class="d-flex align-items-center  justify-content-center gap-2 flex-wrap">
                                          <span class="badge bg-light text-default border rounded-pill">
                                              Mail
                                          </span>
                                          <span class="badge bg-light text-default border rounded-pill">
                                              Work
                                          </span>
                                          <span class="badge bg-light text-default border rounded-pill">
                                             Design
                                          </span>
                                      </div>
                                      <div class="d-flex justify-content-center mt-3">
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary btn-wave"><i class="ri-twitter-x-fill"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-secondary btn-wave ms-2"><i class="ri-facebook-fill"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-success btn-wave ms-2"><i class="ri-instagram-line"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-info btn-wave ms-2"><i class="ri-linkedin-fill"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xxl-3 col-xl-6 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                          <div class="card custom-card team-member">
                              <div class="card-body text-center p-2">
                                  <div class="mb-4 lh-1 bg-light px-4 py-3">
                                      <span class="avatar avatar-xxl bg-warning-transparent avatar-rounded">
                                          <img src="{{ asset('') }}/assets/images/faces/team/5.png" class="card-img" alt="...">
                                      </span>
                                  </div>
                                  <div class="text-center p-4 pt-0">
                                      <h6 class="mb-0 fw-semibold">Liam Nelson</h6>
                                      <p class="mb-2 text-muted">Manager</p>
                                      <div class="d-flex align-items-center  justify-content-center gap-2 flex-wrap">
                                          <span class="badge bg-light text-default border rounded-pill">
                                             Team
                                          </span>
                                          <span class="badge bg-light text-default border rounded-pill">
                                              Work
                                          </span>
                                          <span class="badge bg-light text-default border rounded-pill">
                                             Managing
                                          </span>
                                      </div>
                                      <div class="d-flex justify-content-center mt-3">
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary btn-wave"><i class="ri-twitter-x-fill"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-secondary btn-wave ms-2"><i class="ri-facebook-fill"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-success btn-wave ms-2"><i class="ri-instagram-line"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-info btn-wave ms-2"><i class="ri-linkedin-fill"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xxl-3 col-xl-6 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                          <div class="card custom-card team-member">
                              <div class="card-body text-center p-2">
                                  <div class="mb-4 lh-1 bg-light px-4 py-3">
                                      <span class="avatar avatar-xxl bg-danger-transparent avatar-rounded">
                                          <img src="{{ asset('') }}/assets/images/faces/team/6.png" class="card-img" alt="...">
                                      </span>
                                  </div>
                                  <div class="text-center p-4 pt-0">
                                      <h6 class="mb-0 fw-semibold">Grace Mitchell</h6>
                                      <p class="mb-2 text-muted">Backed Developer</p>
                                      <div class="d-flex align-items-center  justify-content-center gap-2 flex-wrap">
                                          <span class="badge bg-light text-default border rounded-pill">
                                              Developing
                                          </span>
                                          <span class="badge bg-light text-default border rounded-pill">
                                              Work
                                          </span>
                                          <span class="badge bg-light text-default border rounded-pill">
                                             Team
                                          </span>
                                      </div>
                                      <div class="d-flex justify-content-center mt-3">
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary btn-wave"><i class="ri-twitter-x-fill"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-secondary btn-wave ms-2"><i class="ri-facebook-fill"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-success btn-wave ms-2"><i class="ri-instagram-line"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-info btn-wave ms-2"><i class="ri-linkedin-fill"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xxl-3 col-xl-6 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                          <div class="card custom-card team-member">
                              <div class="card-body text-center p-2">
                                  <div class="mb-4 lh-1 bg-light px-4 py-3">
                                      <span class="avatar avatar-xxl bg-purple-transparent avatar-rounded">
                                          <img src="{{ asset('') }}/assets/images/faces/team/7.png" class="card-img" alt="...">
                                      </span>
                                  </div>
                                  <div class="text-center p-4 pt-0">
                                      <h6 class="mb-0 fw-semibold">Benjamin Adams</h6>
                                      <p class="mb-2 text-muted">Desinger</p>
                                      <div class="d-flex align-items-center  justify-content-center gap-2 flex-wrap">
                                          <span class="badge bg-light text-default border rounded-pill">
                                              Design
                                          </span>
                                          <span class="badge bg-light text-default border rounded-pill">
                                              UI/UX
                                          </span>
                                          <span class="badge bg-light text-default border rounded-pill">
                                            Frontend
                                          </span>
                                      </div>
                                      <div class="d-flex justify-content-center mt-3">
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary btn-wave"><i class="ri-twitter-x-fill"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-secondary btn-wave ms-2"><i class="ri-facebook-fill"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-success btn-wave ms-2"><i class="ri-instagram-line"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-info btn-wave ms-2"><i class="ri-linkedin-fill"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xxl-3 col-xl-6 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                          <div class="card custom-card team-member">
                              <div class="card-body text-center p-2">
                                  <div class="mb-4 lh-1 bg-light px-4 py-3">
                                      <span class="avatar avatar-xxl bg-teal-transparent avatar-rounded">
                                          <img src="{{ asset('') }}/assets/images/faces/team/8.png" class="card-img" alt="...">
                                      </span>
                                  </div>
                                  <div class="text-center p-4 pt-0">
                                      <h6 class="mb-0 fw-semibold">Olivia Martin</h6>
                                      <p class="mb-2 text-muted">Team Lead</p>
                                      <div class="d-flex align-items-center  justify-content-center gap-2 flex-wrap">
                                          <span class="badge bg-light text-default border rounded-pill">
                                              Team
                                          </span>
                                          <span class="badge bg-light text-default border rounded-pill">
                                              Leader
                                          </span>
                                          <span class="badge bg-light text-default border rounded-pill">
                                            Developement
                                          </span>
                                      </div>
                                      <div class="d-flex justify-content-center mt-3">
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary btn-wave"><i class="ri-twitter-x-fill"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-secondary btn-wave ms-2"><i class="ri-facebook-fill"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-success btn-wave ms-2"><i class="ri-instagram-line"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-info btn-wave ms-2"><i class="ri-linkedin-fill"></i></a>
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