@extends('layout.main')
@section('content')

        <!-- Start::app-content -->
        <div class="main-content app-content">
          <div class="container-fluid">

              <!-- Page Header -->
              <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                  <div>
                      <h1 class="page-title fw-medium fs-18 mb-2">Gallery</h1>
                      <div class="">
                          <nav>
                              <ol class="breadcrumb mb-0">
                                  <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Gallery</li>
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
                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                      <a href="{{ asset('/assets/images/media/media-40.jpg') }}" class="glightbox card" data-gallery="gallery1">
                          <img src="{{ asset('/assets/images/media/media-40.jpg') }}" alt="image" >
                      </a>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                      <a href="{{ asset('/assets/images/media/media-41.jpg') }}" class="glightbox card" data-gallery="gallery1">
                          <img src="{{ asset('/assets/images/media/media-41.jpg') }}" alt="image" >
                      </a>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                      <a href="{{ asset('/assets/images/media/media-42.jpg') }}" class="glightbox card" data-gallery="gallery1">
                          <img src="{{ asset('/assets/images/media/media-42.jpg') }}" alt="image" >
                      </a>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                      <a href="{{ asset('/assets/images/media/media-43.jpg') }}" class="glightbox card" data-gallery="gallery1">
                          <img src="{{ asset('/assets/images/media/media-43.jpg') }}" alt="image" >
                      </a>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                      <a href="{{ asset('/assets/images/media/media-44.jpg') }}" class="glightbox card" data-gallery="gallery1">
                          <img src="{{ asset('/assets/images/media/media-44.jpg') }}" alt="image" >
                      </a>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                      <a href="{{ asset('/assets/images/media/media-45.jpg') }}" class="glightbox card" data-gallery="gallery1">
                          <img src="{{ asset('/assets/images/media/media-45.jpg') }}" alt="image" >
                      </a>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                      <a href="{{ asset('/assets/images/media/media-46.jpg') }}" class="glightbox card" data-gallery="gallery1">
                          <img src="{{ asset('/assets/images/media/media-46.jpg') }}" alt="image" >
                      </a>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                      <a href="{{ asset('/assets/images/media/media-60.jpg') }}" class="glightbox card" data-gallery="gallery1">
                          <img src="{{ asset('/assets/images/media/media-60.jpg') }}" alt="image" >
                      </a>
                  </div>
              </div>
              <!--End::row-1 -->

          </div>
      </div>
      <!-- End::app-content -->

@endsection