@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Page Header -->
      <div
          class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Reviews</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Reviews</li>
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
                          Reviews Style 1
                      </div>
                  </div>
                  <div class="card-body p-4 reviewscontainer">
                      <div class="swiper testimonialSwiperbasic">
                          <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                  <div class="card custom-card border border-primary border-opacity-25 p-3">
                                      <div class="card-body p-4 bg-primary-transparent rounded">
                                          <div class="d-flex align-items-center justify-content-between mb-3">
                                              <span class="badge bg-primary">Completed</span>
                                              <p class="mb-0 fs-14">88%<span
                                                      class="text-muted fs-12 mx-1">Match</span></p>
                                          </div>
                                          <p class="text-default">
                                              "Diligently craft tailored marketing campaigns to drive business
                                              growth, ensuring accuracy and precision in every strategy.
                                              Continuously enrich data integrity through forward-thinking
                                              innovations."
                                          </p>
                                          <div class="d-flex justify-content-between flex-wrap gap-3">
                                              <div class="d-flex">
                                                  <img src="{{ asset('') }}/assets/images/faces/1.jpg" alt="img"
                                                      class="avatar avatar-md avatar-rounded">
                                                  <div class="ms-2 my-auto mb-0">
                                                      <h6 class="mb-0 lh-1">Autumn Quinn</h6>
                                                      <p class="fs-14 mb-0 text-muted">Client</p>
                                                  </div>
                                              </div>
                                              <div class="mb-0 text-warning fs-12 my-auto">
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-half-line"></i>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="card custom-card border border-secondary border-opacity-25 p-3">
                                      <div class="card-body p-4 bg-secondary-transparent rounded">
                                          <div class="d-flex align-items-center justify-content-between mb-3">
                                              <span class="badge bg-secondary">Scheduled</span>
                                              <p class="mb-0 fs-14">32%<span
                                                      class="text-muted fs-12 mx-1">Match</span></p>
                                          </div>
                                          <p class="text-default">
                                              "Diligently craft tailored marketing campaigns to drive business
                                              growth, ensuring accuracy and precision in every strategy.
                                              Continuously enrich data integrity through forward-thinking
                                              innovations."
                                          </p>
                                          <div class="d-flex justify-content-between flex-wrap gap-3">
                                              <div class="d-flex">
                                                  <img src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img"
                                                      class="avatar avatar-md avatar-rounded">
                                                  <div class="ms-2 my-auto mb-0">
                                                      <h6 class="mb-0 lh-1">Berina Silva</h6>
                                                      <p class="fs-14 mb-0 text-muted">Agent</p>
                                                  </div>
                                              </div>
                                              <div class="mb-0 text-warning fs-12 my-auto">
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-half-line"></i>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="card custom-card border border-success border-opacity-25 p-3">
                                      <div class="card-body p-4 bg-success-transparent rounded">
                                          <div class="d-flex align-items-center justify-content-between mb-3">
                                              <span class="badge bg-success">Pending</span>
                                              <p class="mb-0 fs-14">32%<span
                                                      class="text-muted fs-12 mx-1">Match</span></p>
                                          </div>
                                          <p class="text-default">
                                              "Diligently craft tailored marketing campaigns to drive business
                                              growth, ensuring accuracy and precision in every strategy.
                                              Continuously enrich data integrity through forward-thinking
                                              innovations."
                                          </p>
                                          <div class="d-flex justify-content-between flex-wrap gap-3">
                                              <div class="d-flex">
                                                  <img src="{{ asset('') }}/assets/images/faces/3.jpg" alt="img"
                                                      class="avatar avatar-md avatar-rounded">
                                                  <div class="ms-2 my-auto mb-0">
                                                      <h6 class="mb-0 lh-1">William Chen</h6>
                                                      <p class="fs-14 mb-0 text-muted">Designer</p>
                                                  </div>
                                              </div>
                                              <div class="mb-0 text-warning fs-12 my-auto">
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-half-line"></i>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="card custom-card border border-info border-opacity-25 p-3">
                                      <div class="card-body p-4 bg-info-transparent rounded">
                                          <div class="d-flex align-items-center justify-content-between mb-3">
                                              <span class="badge bg-info">Unavailable</span>
                                              <p class="mb-0 fs-14">92%<span
                                                      class="text-muted fs-12 mx-1">Match</span></p>
                                          </div>
                                          <p class="text-default">
                                              "Diligently craft tailored marketing campaigns to drive business
                                              growth, ensuring accuracy and precision in every strategy.
                                              Continuously enrich data integrity through forward-thinking
                                              innovations."
                                          </p>
                                          <div class="d-flex justify-content-between flex-wrap gap-3">
                                              <div class="d-flex">
                                                  <img src="{{ asset('') }}/assets/images/faces/7.jpg" alt="img"
                                                      class="avatar avatar-md avatar-rounded">
                                                  <div class="ms-2 my-auto mb-0">
                                                      <h6 class="mb-0 lh-1">Donovan Frost</h6>
                                                      <p class="fs-14 mb-0 text-muted">Agent</p>
                                                  </div>
                                              </div>
                                              <div class="mb-0 text-warning fs-12 my-auto">
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-half-line"></i>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="card custom-card border border-warning border-opacity-25 p-3">
                                      <div class="card-body p-4 bg-warning-transparent rounded">
                                          <div class="d-flex align-items-center justify-content-between mb-3">
                                              <span class="badge bg-warning">Completed</span>
                                              <p class="mb-0 fs-14">92%<span
                                                      class="text-muted fs-12 mx-1">Match</span></p>
                                          </div>
                                          <p class="text-default">
                                              "Diligently craft tailored marketing campaigns to drive business
                                              growth, ensuring accuracy and precision in every strategy.
                                              Continuously enrich data integrity through forward-thinking
                                              innovations."
                                          </p>
                                          <div class="d-flex justify-content-between flex-wrap gap-3">
                                              <div class="d-flex">
                                                  <img src="{{ asset('') }}/assets/images/faces/6.jpg" alt="img"
                                                      class="avatar avatar-md avatar-rounded">
                                                  <div class="ms-2 my-auto mb-0">
                                                      <h6 class="mb-0 lh-1">Luna Park</h6>
                                                      <p class="fs-14 mb-0 text-muted">Agent</p>
                                                  </div>
                                              </div>
                                              <div class="mb-0 text-warning fs-12 my-auto">
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-half-line"></i>
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
      </div>
      <!--End::row-1 -->

      <!-- Start::row-2 -->
      <div class="row">
          <div class="col-xl-12">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">
                          Reviews Style 2
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="swiper testimonialSwiper1">
                          <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                  <div class="card mb-0">
                                      <i class="bx bxs-quote-alt-left review-quote review-quote1 primary"></i>
                                      <div class="card-body">
                                          <div class="d-flex p-2 mb-3 rounded bg-light align-items-center">
                                              <img src="{{ asset('') }}/assets/images/faces/1.jpg" alt="img"
                                                  class="text-center avatar avatar-md rounded-circle border-5 border border-white-1 mb-2 mb-sm-0">
                                              <div>
                                                  <h6 class="mb-0">
                                                      Autumn Quinn</h6>
                                                  <span class="fs-12 text-muted">User since 2023</span>
                                              </div>
                                          </div>
                                          <span class="">The sleek design immediately caught my eye, and the
                                              functionality sealed the deal. It's not just eye candy; it
                                              performs
                                              exceptionally well -- <a href="javascript:void(0);"
                                                  class="fw-semibold text-primary fs-11"
                                                  data-bs-toggle="tooltip"
                                                  data-bs-custom-class="tooltip-primary"
                                                  data-bs-placement="top"
                                                  data-bs-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio">Read
                                                  More</a></span>
                                          <div class="d-flex align-items-center justify-content-between mt-2">
                                              <div class="">
                                                  <span class="op-8 d-block">Rating : </span>
                                                  <span class="text-warning d-block">
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-half-line"></i>
                                                  </span>
                                              </div>
                                              <div class="">
                                                  <span class="text-primary fs-12">9 Days Ago</span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="card mb-0">
                                      <i
                                          class="bx bxs-quote-alt-left review-quote review-quote1 secondary"></i>
                                      <div class="card-body">
                                          <div class="d-flex p-2 mb-3 rounded bg-light align-items-center">
                                              <img src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img"
                                                  class="text-center avatar avatar-md rounded-circle border-5 border border-white-1 mb-2 mb-sm-0">
                                              <div>
                                                  <h6 class="mb-0">Barina Silva</h6>
                                                  <span class="fs-12 text-muted">User since 2021</span>
                                              </div>
                                          </div>
                                          <span class="">The sleek design immediately caught my eye, and the
                                              functionality sealed the deal. It's not just eye candy; it
                                              performs
                                              exceptionally well -- <a href="javascript:void(0);"
                                                  class="fw-semibold text-primary fs-11"
                                                  data-bs-toggle="tooltip"
                                                  data-bs-custom-class="tooltip-primary"
                                                  data-bs-placement="top"
                                                  data-bs-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio">Read
                                                  More</a></span>
                                          <div class="d-flex align-items-center justify-content-between mt-2">
                                              <div class="">
                                                  <span class="op-8 d-block">Rating : </span>
                                                  <span class="text-warning d-block">
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-half-line"></i>
                                                      <i class="ri-star-half-line"></i>
                                                  </span>
                                              </div>
                                              <div class="">
                                                  <span class="text-primary fs-12">2 Days Ago</span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="card mb-0">
                                      <i class="bx bxs-quote-alt-left review-quote review-quote1 success"></i>
                                      <div class="card-body">
                                          <div class="d-flex p-2 mb-3 rounded bg-light align-items-center">
                                              <img src="{{ asset('') }}/assets/images/faces/3.jpg" alt="img"
                                                  class="text-center avatar avatar-md rounded-circle border-5 border border-white-1 mb-2 mb-sm-0">
                                              <div>
                                                  <h6 class="mb-0">Luna Park</h6>
                                                  <span class="fs-12 text-muted">User since 2022</span>
                                              </div>
                                          </div>
                                          <span class="">The sleek design immediately caught my eye, and the
                                              functionality sealed the deal. It's not just eye candy; it
                                              performs
                                              exceptionally well -- <a href="javascript:void(0);"
                                                  class="fw-semibold text-primary fs-11"
                                                  data-bs-toggle="tooltip"
                                                  data-bs-custom-class="tooltip-primary"
                                                  data-bs-placement="top"
                                                  data-bs-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio">Read
                                                  More</a></span>
                                          <div class="d-flex align-items-center justify-content-between mt-2">
                                              <div class="">
                                                  <span class="op-8 d-block">Rating : </span>
                                                  <span class="text-warning d-block">
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-half-line"></i>
                                                  </span>
                                              </div>
                                              <div class="">
                                                  <span class="text-primary fs-12">Today</span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="card mb-0">
                                      <i class="bx bxs-quote-alt-left review-quote review-quote1 info"></i>
                                      <div class="card-body">
                                          <div class="d-flex p-2 mb-3 rounded bg-light align-items-center">
                                              <img src="{{ asset('') }}/assets/images/faces/4.jpg" alt="img"
                                                  class="text-center avatar avatar-md rounded-circle border-5 border border-white-1 mb-2 mb-sm-0">
                                              <div>
                                                  <h6 class="mb-0">Donovan Frost</h6>
                                                  <span class="fs-12 text-muted">User since 2001</span>
                                              </div>
                                          </div>
                                          <span class="">The sleek design immediately caught my eye, and the
                                              functionality sealed the deal. It's not just eye candy; it
                                              performs
                                              exceptionally well -- <a href="javascript:void(0);"
                                                  class="fw-semibold text-primary fs-11"
                                                  data-bs-toggle="tooltip"
                                                  data-bs-custom-class="tooltip-primary"
                                                  data-bs-placement="top"
                                                  data-bs-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio">Read
                                                  More</a></span>
                                          <div class="d-flex align-items-center justify-content-between mt-2">
                                              <div class="">
                                                  <span class="op-8 d-block">Rating : </span>
                                                  <span class="text-warning d-block">
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                  </span>
                                              </div>
                                              <div class="">
                                                  <span class="text-primary fs-12">12 Days Ago</span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="card mb-0">
                                      <i class="bx bxs-quote-alt-left review-quote review-quote1 warning"></i>
                                      <div class="card-body">
                                          <div class="d-flex p-2 mb-3 rounded bg-light align-items-center">
                                              <img src="{{ asset('') }}/assets/images/faces/4.jpg" alt="img"
                                                  class="text-center avatar avatar-md rounded-circle border-5 border border-white-1 mb-2 mb-sm-0">
                                              <div>
                                                  <h6 class="mb-0">William Chen</h6>
                                                  <span class="fs-12 text-muted">User since 2009</span>
                                              </div>
                                          </div>
                                          <span class="">The sleek design immediately caught my eye, and the
                                              functionality sealed the deal. It's not just eye candy; it
                                              performs
                                              exceptionally well -- <a href="javascript:void(0);"
                                                  class="fw-semibold text-primary fs-11"
                                                  data-bs-toggle="tooltip"
                                                  data-bs-custom-class="tooltip-primary"
                                                  data-bs-placement="top"
                                                  data-bs-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio">Read
                                                  More</a></span>
                                          <div class="d-flex align-items-center justify-content-between mt-2">
                                              <div class="">
                                                  <span class="op-8 d-block">Rating : </span>
                                                  <span class="text-warning d-block">
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                  </span>
                                              </div>
                                              <div class="">
                                                  <span class="text-primary fs-12">32 Days Ago</span>
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
      </div>
      <!-- End::row-2 -->

      <!-- Start::row-3 -->
      <div class="row">
          <div class="col-xl-12">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">
                          Reviews Style 3
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="swiper testimonialSwiper2">
                          <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                  <div class="card custom-card border reviws-section">
                                      <div class="card-body p-4 img-card">
                                          <span class="op-8 !text-start"><sup><i
                                                      class="ri-double-quotes-l fs-5 me-1 text-primary"></i></sup>Initially
                                              skeptical, but this product exceeded my expectations. Innovative
                                              and practical – highly recommended.</span>
                                          <img src="{{ asset('') }}/assets/images/faces/1.jpg" alt="img"
                                              class="mx-auto text-center avatar avatar-xl p-1 bg-gray-300 rounded-circle">
                                          <div class="mb-2 text-warning fs-15 mt-2 text-center">
                                              <i class="ri-star-fill"></i>
                                              <i class="ri-star-fill"></i>
                                              <i class="ri-star-fill"></i>
                                              <i class="ri-star-fill"></i>
                                              <i class="ri-star-half-line"></i>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-center">
                                              <div class="flex-grow-1">
                                                  <h6 class="mb-1 text-center">Luna Park</h6>
                                                  <div class="d-flex justify-content-center mt-3">
                                                      <a aria-label="anchor" href="javascript:void(0);"
                                                          class="btn btn-icon btn-sm bg-primary rounded-circle text-fixed-white me-2 btn-wave waves-effect waves-light"><i
                                                              class="ri-twitter-x-fill"></i></a>
                                                      <a aria-label="anchor" href="javascript:void(0);"
                                                          class="btn btn-icon btn-sm bg-secondary rounded-circle text-fixed-white me-2 btn-wave waves-effect waves-light"><i
                                                              class="ri-facebook-fill"></i></a>
                                                      <a aria-label="anchor" href="javascript:void(0);"
                                                          class="btn btn-icon btn-sm bg-success rounded-circle text-fixed-white btn-wave waves-effect waves-light"><i
                                                              class="ri-instagram-line"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="card custom-card border reviws-section">
                                      <div class="card-body p-4 img-card">
                                          <span class="op-8 !text-start"><sup><i
                                                      class="ri-double-quotes-l fs-5 me-1 text-primary"></i></sup>Initially
                                              skeptical, but this product exceeded my expectations. Innovative
                                              and practical – highly recommended.</span>
                                          <img src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img"
                                              class="mx-auto text-center avatar avatar-xl p-1 bg-gray-300 rounded-circle">
                                          <div class="mb-2 text-warning fs-15 mt-2 text-center">
                                              <i class="ri-star-fill"></i>
                                              <i class="ri-star-fill"></i>
                                              <i class="ri-star-fill"></i>
                                              <i class="ri-star-fill"></i>
                                              <i class="ri-star-half-line"></i>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-center">
                                              <div class="flex-grow-1">
                                                  <h6 class="mb-1 text-center">
                                                      Lucas Hayes</h6>
                                                  <div class="d-flex justify-content-center mt-3">
                                                      <a aria-label="anchor" href="javascript:void(0);"
                                                          class="btn btn-icon btn-sm bg-primary rounded-circle text-fixed-white me-2 btn-wave waves-effect waves-light"><i
                                                              class="ri-twitter-x-fill"></i></a>
                                                      <a aria-label="anchor" href="javascript:void(0);"
                                                          class="btn btn-icon btn-sm bg-secondary rounded-circle text-fixed-white me-2 btn-wave waves-effect waves-light"><i
                                                              class="ri-facebook-fill"></i></a>
                                                      <a aria-label="anchor" href="javascript:void(0);"
                                                          class="btn btn-icon btn-sm bg-success rounded-circle text-fixed-white btn-wave waves-effect waves-light"><i
                                                              class="ri-instagram-line"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="card custom-card border reviws-section">
                                      <div class="card-body p-4 img-card">
                                          <span class="op-8 !text-start"><sup><i
                                                      class="ri-double-quotes-l fs-5 me-1 text-primary"></i></sup>Initially
                                              skeptical, but this product exceeded my expectations. Innovative
                                              and practical – highly recommended.</span>
                                          <img src="{{ asset('') }}/assets/images/faces/5.jpg" alt="img"
                                              class="mx-auto text-center avatar avatar-xl p-1 bg-gray-300 rounded-circle">
                                          <div class="mb-2 text-warning fs-15 mt-2 text-center">
                                              <i class="ri-star-fill"></i>
                                              <i class="ri-star-fill"></i>
                                              <i class="ri-star-fill"></i>
                                              <i class="ri-star-fill"></i>
                                              <i class="ri-star-half-line"></i>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-center">
                                              <div class="flex-grow-1">
                                                  <h6 class="mb-1 text-center">
                                                      Abigail Scott</h6>
                                                  <div class="d-flex justify-content-center mt-3">
                                                      <a aria-label="anchor" href="javascript:void(0);"
                                                          class="btn btn-icon btn-sm bg-primary rounded-circle text-fixed-white me-2 btn-wave waves-effect waves-light"><i
                                                              class="ri-twitter-x-fill"></i></a>
                                                      <a aria-label="anchor" href="javascript:void(0);"
                                                          class="btn btn-icon btn-sm bg-secondary rounded-circle text-fixed-white me-2 btn-wave waves-effect waves-light"><i
                                                              class="ri-facebook-fill"></i></a>
                                                      <a aria-label="anchor" href="javascript:void(0);"
                                                          class="btn btn-icon btn-sm bg-success rounded-circle text-fixed-white btn-wave waves-effect waves-light"><i
                                                              class="ri-instagram-line"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="card custom-card border reviws-section">
                                      <div class="card-body p-4 img-card">
                                          <span class="op-8 !text-start"><sup><i
                                                      class="ri-double-quotes-l fs-5 me-1 text-primary"></i></sup>Initially
                                              skeptical, but this product exceeded my expectations. Innovative
                                              and practical – highly recommended.</span>
                                          <img src="{{ asset('') }}/assets/images/faces/4.jpg" alt="img"
                                              class="mx-auto text-center avatar avatar-xl p-1 bg-gray-300 rounded-circle">
                                          <div class="mb-2 text-warning fs-15 mt-2 text-center">
                                              <i class="ri-star-fill"></i>
                                              <i class="ri-star-fill"></i>
                                              <i class="ri-star-fill"></i>
                                              <i class="ri-star-fill"></i>
                                              <i class="ri-star-half-line"></i>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-center">
                                              <div class="flex-grow-1">
                                                  <h6 class="mb-1 text-center">Henry Morgan</h6>
                                                  <div class="d-flex justify-content-center mt-3">
                                                      <a aria-label="anchor" href="javascript:void(0);"
                                                          class="btn btn-icon btn-sm bg-primary rounded-circle text-fixed-white me-2 btn-wave waves-effect waves-light"><i
                                                              class="ri-twitter-x-fill"></i></a>
                                                      <a aria-label="anchor" href="javascript:void(0);"
                                                          class="btn btn-icon btn-sm bg-secondary rounded-circle text-fixed-white me-2 btn-wave waves-effect waves-light"><i
                                                              class="ri-facebook-fill"></i></a>
                                                      <a aria-label="anchor" href="javascript:void(0);"
                                                          class="btn btn-icon btn-sm bg-success rounded-circle text-fixed-white btn-wave waves-effect waves-light"><i
                                                              class="ri-instagram-line"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="card custom-card border reviws-section">
                                      <div class="card-body p-4 img-card">
                                          <span class="op-8 !text-start"><sup><i
                                                      class="ri-double-quotes-l fs-5 me-1 text-primary"></i></sup>Initially
                                              skeptical, but this product exceeded my expectations. Innovative
                                              and practical – highly recommended.</span>
                                          <img src="{{ asset('') }}/assets/images/faces/6.jpg" alt="img"
                                              class="mx-auto text-center avatar avatar-xl p-1 bg-gray-300 rounded-circle">
                                          <div class="mb-2 text-warning fs-15 mt-2 text-center">
                                              <i class="ri-star-fill"></i>
                                              <i class="ri-star-fill"></i>
                                              <i class="ri-star-fill"></i>
                                              <i class="ri-star-fill"></i>
                                              <i class="ri-star-half-line"></i>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-center">
                                              <div class="flex-grow-1">
                                                  <h6 class="mb-1 text-center">Jhon Hentry</h6>
                                                  <div class="d-flex justify-content-center mt-3">
                                                      <a aria-label="anchor" href="javascript:void(0);"
                                                          class="btn btn-icon btn-sm bg-primary rounded-circle text-fixed-white me-2 btn-wave waves-effect waves-light"><i
                                                              class="ri-twitter-x-fill"></i></a>
                                                      <a aria-label="anchor" href="javascript:void(0);"
                                                          class="btn btn-icon btn-sm bg-secondary rounded-circle text-fixed-white me-2 btn-wave waves-effect waves-light"><i
                                                              class="ri-facebook-fill"></i></a>
                                                      <a aria-label="anchor" href="javascript:void(0);"
                                                          class="btn btn-icon btn-sm bg-success rounded-circle text-fixed-white btn-wave waves-effect waves-light"><i
                                                              class="ri-instagram-line"></i></a>
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
          </div>
      </div>
      <!-- End::row-3 -->

      <!-- Start::row-4 -->
      <div class="row">
          <div class="col-xl-12">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">
                          Reviews Style 4
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="swiper testimonialSwiperService1">
                          <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                  <div class="card custom-card overflow-hidden border">
                                      <div class="card-body p-4">
                                          <div class="ribbon-5 ribbon-primary top-right">Critical</div>
                                          <div class="d-flex gap-2 mb-3">
                                              <div class="lh-1">
                                                  <span class="avatar rounded-circle  p-1 bg-primary-transparent">
                                                      <img src="{{ asset('') }}/assets/images/faces/1.jpg" alt=""
                                                          class="img-fluid rounded-circle">
                                                  </span>
                                              </div>
                                              <div class="flex-fill">
                                                  <p class="mb-0 fw-semibold fs-14">
                                                      Autumn Quinn</p>
                                                  <p class="mb-0 fs-11 fw-normal op-8">UX Guru</p>
                                              </div>
                                          </div>
                                          <span class="op-8"><sup><i
                                                      class="ri-double-quotes-l fs-5 me-1 text-primary"></i></sup>This
                                              product simplifies a daily task and has become indispensable for me. I
                                              can't imagine reverting to the old way-- <a href="javascript:void(0);"
                                                  class="fw-semibold text-primary fs-11" data-bs-toggle="tooltip"
                                                  data-bs-custom-class="tooltip-primary" data-bs-placement="top"
                                                  data-bs-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio">Read
                                                  More</a></span>
                                          <div class="d-flex align-items-center mt-2">
                                              <span class="op-8">Rating : </span>
                                              <span class="text-warning d-block">
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-half-line"></i>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="card custom-card overflow-hidden border">
                                      <div class="card-body p-4">
                                          <div class="ribbon-5 ribbon-secondary top-right">Popular</div>
                                          <div class="d-flex gap-2 mb-3">
                                              <div class="lh-1">
                                                  <span class="avatar rounded-circle  p-1 bg-secondary-transparent">
                                                      <img src="{{ asset('') }}/assets/images/faces/2.jpg" alt=""
                                                          class="img-fluid rounded-circle">
                                                  </span>
                                              </div>
                                              <div class="flex-fill">
                                                  <p class="mb-0 fw-semibold fs-14">
                                                      Barina Silva</p>
                                                  <p class="mb-0 fs-11 fw-normal op-8">Visual Wizard</p>
                                              </div>
                                          </div>
                                          <span class="op-8"><sup><i
                                                      class="ri-double-quotes-l fs-5 me-1 text-primary"></i></sup>This
                                              product simplifies a daily task and has become indispensable for me. I
                                              can't imagine reverting to the old way-- <a href="javascript:void(0);"
                                                  class="fw-semibold text-primary fs-11" data-bs-toggle="tooltip"
                                                  data-bs-custom-class="tooltip-primary" data-bs-placement="top"
                                                  data-bs-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio">Read
                                                  More</a></span>
                                          <div class="d-flex align-items-center mt-2">
                                              <span class="op-8">Rating : </span>
                                              <span class="text-warning d-block">
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-half-line"></i>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="card custom-card overflow-hidden border">
                                      <div class="card-body p-4">
                                          <div class="ribbon-5 ribbon-success top-right">Business</div>
                                          <div class="d-flex gap-2 mb-3">
                                              <div class="lh-1">
                                                  <span class="avatar rounded-circle p-1 bg-success-transparent">
                                                      <img src="{{ asset('') }}/assets/images/faces/3.jpg" alt=""
                                                          class="img-fluid rounded-circle">
                                                  </span>
                                              </div>
                                              <div class="flex-fill">
                                                  <p class="mb-0 fw-semibold fs-14">
                                                      Locus Zent</p>
                                                  <p class="mb-0 fs-11 fw-normal op-8">Design Mavin</p>
                                              </div>
                                          </div>
                                          <span class="op-8"><sup><i
                                                      class="ri-double-quotes-l fs-5 me-1 text-primary"></i></sup>This
                                              product simplifies a daily task and has become indispensable for me. I
                                              can't imagine reverting to the old way-- <a href="javascript:void(0);"
                                                  class="fw-semibold text-primary fs-11" data-bs-toggle="tooltip"
                                                  data-bs-custom-class="tooltip-primary" data-bs-placement="top"
                                                  data-bs-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio">Read
                                                  More</a></span>
                                          <div class="d-flex align-items-center mt-2">
                                              <span class="op-8">Rating : </span>
                                              <span class="text-warning d-block">
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-half-line"></i>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="card custom-card overflow-hidden border">
                                      <div class="card-body p-4">
                                          <div class="ribbon-5 ribbon-info top-right">Localize</div>
                                          <div class="d-flex gap-2 mb-3">
                                              <div class="lh-1">
                                                  <span class="avatar rounded-circle p-1 bg-info-transparent">
                                                      <img src="{{ asset('') }}/assets/images/faces/4.jpg" alt=""
                                                          class="img-fluid rounded-circle">
                                                  </span>
                                              </div>
                                              <div class="flex-fill">
                                                  <p class="mb-0 fw-semibold fs-14">Ethan Brown</p>
                                                  <p class="mb-0 fs-11 fw-normal op-8">UI traiblazer</p>
                                              </div>
                                          </div>
                                          <span class="op-8"><sup><i
                                                      class="ri-double-quotes-l fs-5 me-1 text-primary"></i></sup>This
                                              product simplifies a daily task and has become indispensable for me. I
                                              can't imagine reverting to the old way-- <a href="javascript:void(0);"
                                                  class="fw-semibold text-primary fs-11" data-bs-toggle="tooltip"
                                                  data-bs-custom-class="tooltip-primary" data-bs-placement="top"
                                                  data-bs-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio">Read
                                                  More</a></span>
                                          <div class="d-flex align-items-center mt-2">
                                              <span class="op-8">Rating : </span>
                                              <span class="text-warning d-block">
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-half-line"></i>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="card custom-card overflow-hidden border">
                                      <div class="card-body p-4">
                                          <div class="ribbon-5 ribbon-warning top-right">Expert</div>
                                          <div class="d-flex gap-2 mb-3">
                                              <div class="lh-1">
                                                  <span class="avatar rounded-circle">
                                                      <img src="{{ asset('') }}/assets/images/faces/6.jpg" alt=""
                                                          class="img-fluid rounded-circle">
                                                  </span>
                                              </div>
                                              <div class="flex-fill">
                                                  <p class="mb-0 fw-semibold fs-14">
                                                      Juniper Cruz</p>
                                                  <p class="mb-0 fs-11 fw-normal op-8">Innovation Ninja</p>
                                              </div>
                                          </div>
                                          <span class="op-8"><sup><i
                                                      class="ri-double-quotes-l fs-5 me-1 text-primary"></i></sup>This
                                              product simplifies a daily task and has become indispensable for me. I
                                              can't imagine reverting to the old way-- <a href="javascript:void(0);"
                                                  class="fw-semibold text-primary fs-11" data-bs-toggle="tooltip"
                                                  data-bs-custom-class="tooltip-primary" data-bs-placement="top"
                                                  data-bs-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio">Read
                                                  More</a></span>
                                          <div class="d-flex align-items-center mt-2">
                                              <span class="op-8">Rating : </span>
                                              <span class="text-warning d-block">
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-fill"></i>
                                                  <i class="ri-star-half-line"></i>
                                              </span>
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
      <!-- End::row-4 -->

      <!-- Start::row-5 -->
      <div class="row">
          <div class="col-xl-12">
              <div class="card custom-card reviews-container">
                  <div class="card-header">
                      <div class="card-title">
                          Reviews Style 5
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="swiper pagination-dynamic testimonialSwiperService">
                          <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                  <div class="card bg-primary text-fixed-white border-0">
                                      <div class="card-body">
                                          <div class="d-flex align-items-center mb-3">
                                              <span class="avatar rounded-circle me-2 p-1 bg-light">
                                                  <img src="{{ asset('') }}/assets/images/faces/3.jpg" alt=""
                                                      class="img-fluid rounded-circle">
                                              </span>
                                              <div>
                                                  <p class="mb-0 fw-semibold fs-14">Juniper Cruz</p>
                                                  <p class="mb-0 fs-11 fw-normal op-8">junipercriz12@gmail.com
                                                  </p>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <span class="op-8">- Lorem ipsum dolor sit amet consectetur
                                                  adipisicing elit. Earum autem quaerat distinctio -- <a
                                                      href="javascript:void(0);"
                                                      class="fw-semibold fs-11 text-fixed-white"
                                                      data-bs-toggle="tooltip"
                                                      data-bs-custom-class="tooltip-dark"
                                                      data-bs-placement="top"
                                                      data-bs-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio">Read
                                                      More</a></span>
                                          </div>
                                          <div
                                              class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                              <div class="d-flex align-items-center">
                                                  <span class="op-8">Rating : </span>
                                                  <span class="text-warning d-block ms-1">
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-half-line"></i>
                                                  </span>
                                              </div>
                                              <div class="float-end fs-12 fw-semibold op-8 text-end">
                                                  <span>12 days ago</span>
                                                  <span class="d-block fs-12"><i>Charlotte
                                                          Martinez</i></span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="card bg-secondary text-fixed-white border-0">
                                      <div class="card-body">
                                          <div class="d-flex align-items-center mb-3">
                                              <span class="avatar rounded-circle me-2 p-1 bg-light">
                                                  <img src="{{ asset('') }}/assets/images/faces/9.jpg" alt=""
                                                      class="img-fluid rounded-circle">
                                              </span>
                                              <div>
                                                  <p class="mb-0 fw-semibold fs-14">Caleb Brooks</p>
                                                  <p class="mb-0 fs-11 fw-normal op-8">calebbrooks@gmail.com
                                                  </p>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <span class="op-8">- Lorem ipsum dolor sit amet consectetur
                                                  adipisicing elit. Earum autem quaerat distinctio -- <a
                                                      href="javascript:void(0);"
                                                      class="fw-semibold fs-11 text-fixed-white"
                                                      data-bs-toggle="tooltip"
                                                      data-bs-custom-class="tooltip-dark"
                                                      data-bs-placement="top"
                                                      data-bs-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio">Read
                                                      More</a></span>
                                          </div>
                                          <div
                                              class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                              <div class="d-flex align-items-center">
                                                  <span class="op-8">Rating : </span>
                                                  <span class="text-warning d-block ms-1">
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-half-fill"></i>
                                                  </span>
                                              </div>
                                              <div class="float-end fs-12 fw-semibold op-8 text-end">
                                                  <span>9 days ago</span>
                                                  <span class="d-block fs-12"><i>Charlotte
                                                          Martinez</i></span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="card bg-success text-fixed-white border-0">
                                      <div class="card-body">
                                          <div class="d-flex align-items-center mb-3">
                                              <span class="avatar rounded-circle me-2 p-1 bg-light">
                                                  <img src="{{ asset('') }}/assets/images/faces/8.jpg" alt=""
                                                      class="img-fluid rounded-circle">
                                              </span>
                                              <div>
                                                  <p class="mb-0 fw-semibold fs-14">Barina Silva</p>
                                                  <p class="mb-0 fs-11 fw-normal op-8">
                                                      barinasilva212@gmail.com</p>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <span class="op-8">- Lorem ipsum dolor sit amet consectetur
                                                  adipisicing elit. Earum autem quaerat distinctio -- <a
                                                      href="javascript:void(0);"
                                                      class="fw-semibold fs-11 text-fixed-white"
                                                      data-bs-toggle="tooltip"
                                                      data-bs-custom-class="tooltip-dark"
                                                      data-bs-placement="top"
                                                      data-bs-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio">Read
                                                      More</a></span>
                                          </div>
                                          <div
                                              class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                              <div class="d-flex align-items-center">
                                                  <span class="op-8">Rating : </span>
                                                  <span class="text-warning d-block ms-1">
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-half-line"></i>
                                                  </span>
                                              </div>
                                              <div class="float-end fs-12 fw-semibold op-8 text-end">
                                                  <span>6 days ago</span>
                                                  <span class="d-block fs-12"><i>Barina
                                                          Silva</i></span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="card bg-info text-fixed-white border-0">
                                      <div class="card-body">
                                          <div class="d-flex align-items-center mb-3">
                                              <span class="avatar rounded-circle me-2 p-1 bg-light">
                                                  <img src="{{ asset('') }}/assets/images/faces/10.jpg" alt=""
                                                      class="img-fluid rounded-circle">
                                              </span>
                                              <div>
                                                  <p class="mb-0 fw-semibold fs-14">Lucas Tope</p>
                                                  <p class="mb-0 fs-11 fw-normal op-8">lucastope1999@gmail.com
                                                  </p>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <span class="op-8">- Lorem ipsum dolor sit amet consectetur
                                                  adipisicing elit. Earum autem quaerat distinctio -- <a
                                                      href="javascript:void(0);"
                                                      class="fw-semibold fs-11 text-fixed-white"
                                                      data-bs-toggle="tooltip"
                                                      data-bs-custom-class="tooltip-dark"
                                                      data-bs-placement="top"
                                                      data-bs-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio">Read
                                                      More</a></span>
                                          </div>
                                          <div
                                              class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                              <div class="d-flex align-items-center">
                                                  <span class="op-8">Rating : </span>
                                                  <span class="text-warning d-block ms-1">
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-half-line"></i>
                                                  </span>
                                              </div>
                                              <div class="float-end fs-12 fw-semibold op-8 text-end">
                                                  <span>10 days ago</span>
                                                  <span class="d-block fs-12"><i>Lucas
                                                          Tope</i></span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="card bg-warning text-fixed-white border-0">
                                      <div class="card-body">
                                          <div class="d-flex align-items-center mb-3">
                                              <span class="avatar rounded-circle me-2 p-1 bg-light">
                                                  <img src="{{ asset('') }}/assets/images/faces/1.jpg" alt=""
                                                      class="img-fluid rounded-circle">
                                              </span>
                                              <div>
                                                  <p class="mb-0 fw-semibold fs-14">Ethan Brown</p>
                                                  <p class="mb-0 fs-11 fw-normal op-8">
                                                      ethanbrown345@gmail.com</p>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <span class="op-8">- Lorem ipsum dolor sit amet consectetur
                                                  adipisicing elit. Earum autem quaerat distinctio -- <a
                                                      href="javascript:void(0);"
                                                      class="fw-semibold fs-11 text-fixed-white"
                                                      data-bs-toggle="tooltip"
                                                      data-bs-custom-class="tooltip-dark"
                                                      data-bs-placement="top"
                                                      data-bs-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio">Read
                                                      More</a></span>
                                          </div>
                                          <div
                                              class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                              <div class="d-flex align-items-center">
                                                  <span class="op-8">Rating : </span>
                                                  <span class="text-warning d-block ms-1">
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-fill"></i>
                                                      <i class="ri-star-half-line"></i>
                                                  </span>
                                              </div>
                                              <div class="float-end fs-12 fw-semibold op-8 text-end">
                                                  <span>16 days ago</span>
                                                  <span class="d-block fs-12"><i>Ethan
                                                          Brown</i></span>
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
      </div>
      <!-- End::row-5 -->

  </div>
</div>
<!-- End::app-content -->

@endsection