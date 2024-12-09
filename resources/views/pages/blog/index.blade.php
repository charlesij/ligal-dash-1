@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Start::page-header -->
      <div
          class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Blog</h1>
              <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item">
                      <a href="javascript:void(0);">
                          Pages
                      </a>
                  </li>
                  <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Blog</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Blog</li>
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
          <div class="col-xxl-5">
              <div class="card custom-card overflow-hidden">
                  <div class="card-body p-0">
                      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                          <a href="blog-details.html" class="stretched-link"></a>
                          <div class="carousel-inner rounded-0 p-3 pb-0">
                              <div class="carousel-item active">
                                  <img src="{{ asset('') }}/assets/images/media/blog/1.jpg" class="d-block w-100 rounded"
                                      alt="...">
                              </div>
                              <div class="carousel-item">
                                  <img src="{{ asset('') }}/assets/images/media/blog/2.jpg" class="d-block rounded w-100"
                                      alt="...">
                              </div>
                              <div class="carousel-item">
                                  <img src="{{ asset('') }}/assets/images/media/blog/3.jpg" class="d-block w-100 rounded"
                                      alt="...">
                              </div>
                          </div>
                      </div>
                      <div class="p-4 pt-3">
                          <h5 class="fw-semibold mb-3"><a href="blog-details.html">Exploring the Evolution of
                                  Digital Art</a></h5>
                          <p class="mb-3">Dive into the transformative journey of digital art, from its early
                              beginnings to its current prominence. This blog post explores how technology has
                              revolutionized artistic expression, featuring influential digital artists and
                              the tools shaping the future of creativity Discover how technology and art converge. <a href="javascript:void(0);"
                                  class="fw-medium text-muted ms-2 align-middle fs-12 text-Augoration-underline">Read
                                  More</a></p>
                          <div class="d-flex flex-wrap align-items-center justify-content-between">
                              <div class="d-flex align-items-center">
                                  <div class="avatar avatar-xs avatar-rounded me-2">
                                      <img src="{{ asset('') }}/assets/images/faces/11.jpg" alt="">
                                  </div>
                                  <div>
                                      <p class="mb-0 fw-medium">Alister Chuk</p>
                                  </div>
                              </div>
                              <p class="text-muted fs-12 mb-0">18,Aug 2024 - 11:25</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-7">
              <div class="row">
                  <div class="col-xl-7">
                      <div class="card custom-card shadow-none">
                          <div class="row g-0">
                              <div class="col-sm-8">
                                  <div class="card-body p-3">
                                      <h6 class="fw-semibold">
                                          <a href="javascript:void(0);">The Intersection of Art and
                                              Technology</a>
                                      </h6>
                                      <span class="d-block mb-3">
                                          Discover how technology and art converge to create innovative and
                                          interactive experiences overcome. <a
                                              href="javascript:void(0);"
                                              class="fw-medium text-muted ms-2 align-middle fs-12 text-Augoration-underline">
                                              Read More
                                          </a>
                                      </span>
                                      <div class="d-flex align-items-center gap-2 mb-3">
                                          <span class="badge bg-light text-default rounded-pill">Design</span>
                                          <span
                                              class="badge bg-light text-default rounded-pill">Research</span>
                                          <span class="badge bg-light text-default rounded-pill">Gaming</span>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="d-flex align-items-center">
                                              <div class="avatar avatar-xs avatar-rounded me-2">
                                                  <img src="{{ asset('') }}/assets/images/faces/10.jpg" alt="">
                                              </div>
                                              <div>
                                                  <p class="mb-0 fw-medium">Justin Kim</p>
                                              </div>
                                          </div>
                                          <div class="text-muted fs-12 mb-0">20,Aug 2024 - 16:32</div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-4 p-3">
                                  <img src="{{ asset('') }}/assets/images/media/blog/4.jpg"
                                      class="img-fluid rounded  h-100 w-100" alt="...">
                              </div>
                          </div>
                      </div>
                      <div class="card custom-card shadow-none">
                          <div class="row g-0">
                              <div class="col-sm-8">
                                  <div class="card-body p-3">
                                      <h6 class="fw-semibold">
                                          <a href="javascript:void(0);">Artistic Trends to Watch in 2024</a>
                                      </h6>
                                      <span class="d-block mb-3">
                                          Stay ahead of the curve with a look at emerging art trends for the
                                          coming year. This blog post highlights. <a href="javascript:void(0);"
                                              class="fw-medium text-muted ms-2 align-middle fs-12 text-Augoration-underline">
                                              Read More
                                          </a>
                                      </span>
                                      <div class="d-flex align-items-center gap-2 mb-3">
                                          <span class="badge bg-light text-default rounded-pill">Design</span>
                                          <span
                                              class="badge bg-light text-default rounded-pill">Research</span>
                                          <span class="badge bg-light text-default rounded-pill">Gaming</span>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="d-flex align-items-center">
                                              <div class="avatar avatar-xs avatar-rounded mb-1 me-2">
                                                  <img src="{{ asset('') }}/assets/images/faces/5.jpg" alt="">
                                              </div>
                                              <div>
                                                  <p class="mb-0 fw-medium">Monika Karen</p>
                                              </div>
                                          </div>
                                          <div class="text-muted fs-12 mb-0">25,Aug 2024 - 11:45</div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-4 p-3">
                                  <img src="{{ asset('') }}/assets/images/media/blog/5.jpg"
                                      class="img-fluid  rounded h-100 w-100" alt="...">
                              </div>
                          </div>
                      </div>
                      <div class="card custom-card shadow-none">
                          <div class="row g-0">
                              <div class="col-sm-8">
                                  <div class="card-body p-3">
                                      <h6 class="fw-semibold">
                                          <a href="javascript:void(0);">Mastering the Art of Mixed Media</a>
                                      </h6>
                                      <span class="d-block mb-3">
                                          Learn the ins and outs of mixed media art, combining various
                                          materials and techniques to create unique. <a
                                              href="javascript:void(0);"
                                              class="fw-medium text-muted ms-2 align-middle fs-12 text-Augoration-underline">
                                              Read More
                                          </a>
                                      </span>
                                      <div class="d-flex align-items-center gap-2 mb-3">
                                          <span class="badge bg-light text-default rounded-pill">Design</span>
                                          <span
                                              class="badge bg-light text-default rounded-pill">Research</span>
                                          <span class="badge bg-light text-default rounded-pill">Gaming</span>
                                      </div>
                                      <div
                                          class="d-flex flex-wrap align-items-center justify-content-between">
                                          <div class="d-flex align-items-center">
                                              <div class="avatar avatar-xs avatar-rounded me-2">
                                                  <img src="{{ asset('') }}/assets/images/faces/8.jpg" alt="">
                                              </div>
                                              <div>
                                                  <p class="mb-0 fw-medium">Samantha Nans</p>
                                              </div>
                                          </div>
                                          <div class="text-muted fs-12 mb-0">25,Aug 2024 - 04:25</div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-4 p-3">
                                  <img src="{{ asset('') }}/assets/images/media/blog/6.jpg"
                                      class="img-fluid rounded h-100 w-100" alt="...">
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-5">
                      <div class="card custom-card overflow-hidden">
                          <div class="card-header justify-content-between">
                              <div class="card-title">
                                  CATEGORIES
                              </div>
                              <a href="javascript:void(0);" class="fs-13 text-muted"> View All<i
                                      class="ti ti-arrow-narrow-right ms-1"></i> </a>
                          </div>
                          <div class="card-body p-0">
                              <ul class="list-group list-group-flush list-style">
                                  <li class="list-group-item">
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div>
                                              <span>
                                                  <i
                                                      class="ri-lifebuoy-fill fs-14 p-1 rounded-2 me-2 d-inline-block align-middle lh-1 bg-primary-transparent text-primary"></i>
                                              </span>
                                              <span class="fw-medium">Lifestyle</span>
                                          </div>
                                          <span class="badge bg-primary-transparent rounded-pill">24
                                              Items</span>
                                      </div>
                                  </li>
                                  <li class="list-group-item">
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div>
                                              <span>
                                                  <i
                                                      class="ri-bus-2-fill fs-14 p-1 rounded-2 me-2 d-inline-block align-middle lh-1 bg-secondary-transparent text-secondary"></i>
                                              </span>
                                              <span class="fw-medium">Travel & Adventure</span>
                                          </div>
                                          <span class="badge bg-primary-transparent rounded-pill">43
                                              Items</span>
                                      </div>
                                  </li>
                                  <li class="list-group-item">
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div>
                                              <span>
                                                  <i
                                                      class="ri-service-fill fs-14 p-1 rounded-2 me-2 d-inline-block align-middle lh-1 bg-success-transparent text-success"></i>
                                              </span>
                                              <span class="fw-medium">Health & Wellness</span>
                                          </div>
                                          <span class="badge bg-primary-transparent rounded-pill">14
                                              Items</span>
                                      </div>
                                  </li>
                                  <li class="list-group-item">
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div>
                                              <span>
                                                  <i
                                                      class="ri-macbook-fill fs-14 p-1 rounded-2 me-2 d-inline-block align-middle lh-1 bg-info-transparent text-info"></i>
                                              </span>
                                              <span class="fw-medium">Technology</span>
                                          </div>
                                          <span class="badge bg-primary-transparent rounded-pill">132
                                              Items</span>
                                      </div>
                                  </li>
                                  <li class="list-group-item">
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div>
                                              <span>
                                                  <i
                                                      class="ri-t-shirt-fill fs-14 p-1 rounded-2 me-2 d-inline-block align-middle lh-1 bg-warning-transparent text-warning"></i>
                                              </span>
                                              <span class="fw-medium">Fashion & Beauty</span>
                                          </div>
                                          <span class="badge bg-primary-transparent rounded-pill">36
                                              Items</span>
                                      </div>
                                  </li>
                                  <li class="list-group-item">
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div>
                                              <span>
                                                  <i
                                                      class="ri-wallet-3-fill fs-14 p-1 rounded-2 me-2 d-inline-block align-middle lh-1 bg-danger-transparent text-danger"></i>
                                              </span>
                                              <span class="fw-medium">Finance</span>
                                          </div>
                                          <span class="badge bg-primary-transparent rounded-pill">04
                                              Items</span>
                                      </div>
                                  </li>
                                  <li class="list-group-item">
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div>
                                              <span>
                                                  <i
                                                      class="ri-home-gear-fill fs-14 p-1 rounded-2 me-2 d-inline-block align-middle lh-1 bg-teal-transparent text-teal"></i>
                                              </span>
                                              <span class="fw-medium">Modern Living</span>
                                          </div>
                                          <span class="badge bg-primary-transparent rounded-pill">12
                                              Items</span>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="card custom-card">
                          <div class="card-header justify-content-between">
                              <div class="card-title">
                                  POPULAR TAGS
                              </div>
                              <a href="javascript:void(0);" class="fs-13 text-muted"> View All<i
                                      class="ti ti-arrow-narrow-right ms-1"></i> </a>
                          </div>
                          <div class="card-body py-4">
                              <div class="d-flex align-items-center gap-2 flex-wrap">
                                  <span class="badge bg-light text-default border">
                                      #Travel
                                  </span>
                                  <span class="badge bg-light text-default border">
                                      #Fitness
                                  </span>
                                  <span class="badge bg-light text-default border">
                                      #Fashion
                                  </span>
                                  <span class="badge bg-light text-default border">
                                      #FoodBlog
                                  </span>
                                  <span class="badge bg-light text-default border">
                                      #Crafting
                                  </span>
                                  <span class="badge bg-light text-default border">
                                      #BookReview
                                  </span>
                                  <span class="badge bg-light text-default border">
                                      #TechTalk
                                  </span>
                                  <span class="badge bg-light text-default border">
                                      #Parenting
                                  </span>
                                  <span class="badge bg-light text-default border">
                                      #Finance
                                  </span>
                                  <span class="badge bg-light text-default border">
                                      #SelfCare
                                  </span>
                                  <span class="badge bg-light text-default border">
                                      #Photography
                                  </span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="card custom-card">
                  <a href="javascript:void(0);" class="p-3 pb-0">
                      <img src="{{ asset('') }}/assets/images/media/blog/10.jpg" class="rounded w-100" alt="...">
                  </a>
                  <div class="card-body">
                      <a href="blog-details.html" class="h6 fw-semibold mb-2 d-block lh-base">The Revival of
                          Classical Art Techniques in Modern Times.</a>
                      <p class="mb-4">Explore how traditional art techniques are making a comeback in
                          contemporary art.<a href="javascript:void(0);"
                              class="fw-medium text-muted ms-2 align-middle fs-12 text-Augoration-underline">Read
                              More ?</a></p>
                      <div class="d-flex flex-wrap align-items-center justify-content-between">
                          <div class="d-flex align-items-center">
                              <div class="avatar avatar-xs avatar-rounded me-2">
                                  <img src="{{ asset('') }}/assets/images/faces/4.jpg" alt="">
                              </div>
                              <div>
                                  <p class="mb-0 fw-medium">Charlotte</p>
                              </div>
                          </div>
                          <span class="text-muted fs-12 mb-0">18,Aug 2024 - 11:25</span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="card custom-card">
                  <a href="javascript:void(0);" class="p-3 pb-0">
                      <img src="{{ asset('') }}/assets/images/media/blog/11.jpg" class="rounded w-100" alt="...">
                  </a>
                  <div class="card-body">
                      <a href="blog-details.html" class="h6 fw-semibold mb-2 lh-base d-block">The Role of Art
                          in Mental Health and Wellness.</a>
                      <p class="mb-4">Examine the profound impact art can have on mental health and
                          well-being. This post discusses therapeutic art practices<a href="javascript:void(0);"
                              class="fw-medium text-muted ms-2 align-middle fs-12 text-Augoration-underline">Read
                              More ?</a></p>
                      <div class="d-flex flex-wrap align-items-center justify-content-between">
                          <div class="d-flex align-items-center">
                              <div class="avatar avatar-xs avatar-rounded me-2">
                                  <img src="{{ asset('') }}/assets/images/faces/12.jpg" alt="">
                              </div>
                              <div>
                                  <p class="mb-0 fw-medium">Benjamin</p>
                              </div>
                          </div>
                          <span class="text-muted fs-12 mb-0">18,Aug 2024 - 11:25</span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="card custom-card">
                  <a href="javascript:void(0);" class="p-3 pb-0">
                      <img src="{{ asset('') }}/assets/images/media/blog/8.jpg" class="rounded w-100" alt="...">
                  </a>
                  <div class="card-body">
                      <a href="blog-details.html" class="fw-semibold h6 mb-2 d-block lh-base">Behind the
                          Canvas: Interviews with Emerging Artists</a>
                      <p class="mb-4">Get an inside look at the creative processes and inspirations of
                          up-and-coming artists.<a href="javascript:void(0);"
                              class="fw-medium text-muted ms-2 align-middle fs-12 text-Augoration-underline">Read
                              More ?</a></p>
                      <div class="d-flex flex-wrap align-items-center justify-content-between">
                          <div class="d-flex align-items-center">
                              <div class="avatar avatar-xs avatar-rounded me-2">
                                  <img src="{{ asset('') }}/assets/images/faces/2.jpg" alt="">
                              </div>
                              <div>
                                  <p class="mb-0 fw-medium">Isabella</p>
                              </div>
                          </div>
                          <span class="text-muted fs-12 mb-0">18,Aug 2024 - 11:25</span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="card custom-card">
                  <a href="javascript:void(0);" class="p-3 pb-0">
                      <img src="{{ asset('') }}/assets/images/media/blog/9.jpg" class="rounded w-100" alt="...">
                  </a>
                  <div class="card-body">
                      <a href="blog-details.html" class="fw-semibold h6 mb-2 d-block lh-base">The Art of
                          Collecting: Building Your Own Art Collection</a>
                      <p class="mb-4">Learn the essentials of starting and growing an art collection. This
                          post provides advice<a
                              href="javascript:void(0);"
                              class="fw-medium text-muted ms-2 align-middle fs-12 text-Augoration-underline">Read
                              More ?</a></p>
                      <div class="d-flex flex-wrap align-items-center justify-content-between">
                          <div class="d-flex align-items-center">
                              <div class="avatar avatar-xs avatar-rounded me-2">
                                  <img src="{{ asset('') }}/assets/images/faces/14.jpg" alt="">
                              </div>
                              <div>
                                  <p class="mb-0 fw-medium">William</p>
                              </div>
                          </div>
                          <span class="text-muted fs-12 mb-0">18,Aug 2024 - 11:25</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: row-1 -->

      <!-- Start::row-2 -->
      <div class="row">
          <div class="col-xl-12">
              <div class="row">
                  <div class="col-xl-6 col-xxl-3 col-lg-12 col-md-12">
                      <div class="card custom-card overflow-hidden">
                          <div class="card-header d-flex align-items-center justify-content-between">
                              <div class="card-title">
                                  Featured Blogs
                              </div>
                              <div>
                                  <span class="badge bg-primary-transparent">32 Blogs</span>
                              </div>
                          </div>
                          <div class="card-body p-0">
                              <ul class="list-group list-group-flush">
                                  <li class="list-group-item">
                                      <div class="d-flex flex-wrap align-items-center gap-3">
                                          <span class="avatar avatar-xl p-1 bg-gray-300">
                                              <img src="{{ asset('') }}/assets/images/media/blog/14.jpg" class="img-fluid"
                                                  alt="...">
                                          </span>
                                          <div class="flex-fill">
                                              <a href="javascript:void(0);"
                                                  class="fs-14 fw-medium mb-0">Christopher Jack</a>
                                              <p class="mb-1 popular-blog-content text-truncate">
                                                  There are many variations of passages of Lorem Ipsum
                                                  available
                                              </p>
                                              <span class="text-muted fs-11">24,Jul 2024 - 18:27</span>
                                          </div>
                                          <div>
                                              <button class="btn btn-icon btn-light btn-sm rtl-rotate"><i
                                                      class="ri-arrow-right-s-line"></i></button>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="list-group-item">
                                      <div class="d-flex flex-wrap align-items-center gap-3">
                                          <span class="avatar avatar-xl p-1 bg-gray-300">
                                              <img src="{{ asset('') }}/assets/images/media/blog/15.jpg" class="img-fluid"
                                                  alt="...">
                                          </span>
                                          <div class="flex-fill">
                                              <a href="javascript:void(0);"
                                                  class="fs-14 fw-medium mb-0">Sophia Sam</a>
                                              <p class="mb-1 popular-blog-content text-truncate">
                                                  Latin words, combined with a handful of model sentence
                                              </p>
                                              <span class="text-muted fs-11">28,Jul 2024 - 10:45</span>
                                          </div>
                                          <div>
                                              <button class="btn btn-icon btn-light btn-sm rtl-rotate"><i
                                                      class="ri-arrow-right-s-line"></i></button>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="list-group-item">
                                      <div class="d-flex flex-wrap align-items-center gap-3">
                                          <span class="avatar avatar-xl p-1 bg-gray-300">
                                              <img src="{{ asset('') }}/assets/images/media/blog/16.jpg" class="img-fluid"
                                                  alt="...">
                                          </span>
                                          <div class="flex-fill">
                                              <a href="javascript:void(0);"
                                                  class="fs-14 fw-medium mb-0">Anthony Karon</a>
                                              <p class="mb-1 popular-blog-content text-truncate">
                                                  Ipsum omnis non fugit ad voluptate consequuntur, sed
                                                  veritatis nesciunt, asperiores, provident temporibus!
                                              </p>
                                              <span class="text-muted fs-11">28,Sep 2024 - 08:32</span>
                                          </div>
                                          <div>
                                              <button class="btn btn-icon btn-light btn-sm rtl-rotate"><i
                                                      class="ri-arrow-right-s-line"></i></button>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="list-group-item">
                                      <div class="d-flex flex-wrap align-items-center gap-3">
                                          <span class="avatar avatar-xl p-1 bg-gray-300">
                                              <img src="{{ asset('') }}/assets/images/media/blog/17.jpg" class="img-fluid"
                                                  alt="...">
                                          </span>
                                          <div class="flex-fill">
                                              <a href="javascript:void(0);"
                                                  class="fs-14 fw-medium mb-0">Amelia Jackson</a>
                                              <p class="mb-1 popular-blog-content text-truncate">
                                                  Contrary to popular belief, Lorem Ipsum is not simply random
                                              </p>
                                              <span class="text-muted fs-11">30,Jul 2024 - 08:32</span>
                                          </div>
                                          <div>
                                              <button class="btn btn-icon btn-light btn-sm rtl-rotate"><i
                                                      class="ri-arrow-right-s-line"></i></button>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="list-group-item border-bottom-0">
                                      <div class="d-flex flex-wrap align-items-center gap-3">
                                          <span class="avatar avatar-xl p-1 bg-gray-300">
                                              <img src="{{ asset('') }}/assets/images/media/blog/18.jpg" class="img-fluid"
                                                  alt="...">
                                          </span>
                                          <div class="flex-fill">
                                              <a href="javascript:void(0);"
                                                  class="fs-14 fw-medium mb-0">Matthew Stuart</a>
                                              <p class="mb-1 popular-blog-content text-truncate">
                                                  It was popularised in the 1960s with the release of Letraset
                                                  sheets containing
                                              </p>
                                              <span class="text-muted fs-11">3,Aug 2024 - 11:56</span>
                                          </div>
                                          <div>
                                              <button class="btn btn-icon btn-light btn-sm rtl-rotate"><i
                                                      class="ri-arrow-right-s-line"></i></button>
                                          </div>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-6 col-xxl-3 col-lg-12 col-md-12">
                      <div class="card custom-card"> <a href="javascript:void(0);" class="p-3 pb-0 rounded-5">
                              <img src="{{ asset('') }}/assets/images/media/blog/15.jpg" class="rounded-2 card-img-top"
                                  alt="..."> </a>
                          <div class="card-body"> <a href="blog-details.html"
                                  class="h5 fw-semibold mb-2 d-block lh-base">Art Market Trends</a>
                              <p class="mb-3">Learn the essentials of starting and<a
                                      href="javascript:void(0);"
                                      class="fw-medium text-muted ms-2 align-middle fs-12 text-Augoration-underline d-inline-block">Read
                                      More ?</a></p>
                              <div class="d-flex flex-wrap align-items-center justify-content-between">
                                  <div class="d-flex align-items-center">
                                      <div class="avatar avatar-md avatar-rounded me-2"> <img
                                              src="{{ asset('') }}/assets/images/faces/11.jpg" alt=""> </div>
                                      <div>
                                          <p class="mb-0 fw-medium">Tilly</p><span
                                              class="text-muted fs-12 mb-0">19,Apr 2024 - 15:45</span>
                                      </div>
                                  </div>
                                  <a href="javascript:void(0);" class="avatar avatar-sm bg-danger-transparent avatar-rounded"> <i
                                          class="ri-heart-line fs-14 text-danger"></i> </a>
                              </div>
                          </div>
                      </div>

                  </div>
                  <div class="col-xl-6 col-xxl-3 col-lg-12 col-md-12">
                      <div class="card custom-card">
                          <div class="card-body"> <a href="blog-details.html"
                                  class="h5 fw-semibold mb-2 d-block lh-base">The Future of Art: Predictions
                                  for the Next Decade</a>
                              <p class="mb-3">Venture into the future of art as we explore predictions and
                                  trends likely to shape the next decade<a href="javascript:void(0);"
                                      class="fw-medium text-muted ms-2 align-middle fs-12 text-Augoration-underline">Read
                                      More ?</a></p>
                              <div class="d-flex flex-wrap align-items-center justify-content-between">
                                  <div class="d-flex align-items-center">
                                      <div class="avatar avatar-md avatar-rounded me-2"> <img
                                              src="{{ asset('') }}/assets/images/faces/16.jpg" alt=""> </div>
                                      <div>
                                          <p class="mb-0 fw-medium">Henry Milo</p><span
                                              class="text-muted fs-12 mb-0">31,Mar 2024 - 20:13</span>
                                      </div>
                                  </div>
                                  <a href="javascript:void(0);" class="avatar avatar-sm bg-danger-transparent avatar-rounded"> <i
                                          class="ri-heart-line fs-14 text-danger"></i> </a>
                              </div>
                          </div> <a href="javascript:void(0);" class="p-3 pt-0 rounded-5"> <img
                                  src="{{ asset('') }}/assets/images/media/blog/20.jpg" class="rounded-2 card-img-bottom"
                                  alt="..."> </a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-xxl-3 col-lg-12 col-md-12">
                      <div class="card custom-card overflow-hidden">
                          <div class="card-header d-flex align-items-center justify-content-between">
                              <div class="card-title">
                                  Related Blogs
                              </div>
                              <a href="javascript:void(0);" class="fs-13 text-muted"> View All<i
                                      class="ti ti-arrow-narrow-right ms-1"></i> </a>
                          </div>
                          <div class="card-body p-0">
                              <ul class="list-group list-group-flush">
                                  <li class="list-group-item">
                                      <div class="d-flex flex-wrap align-items-start gap-3">
                                          <span class="avatar avatar-xl avatar-rounded p-1 border">
                                              <img src="{{ asset('') }}/assets/images/media/blog/14.jpg" class="img-fluid"
                                                  alt="...">
                                          </span>
                                          <div class="flex-fill">
                                              <div class="d-flex align-items-center justify-content-between">
                                                  <a href="javascript:void(0);"
                                                      class="fs-14 fw-medium mb-0">Christopher Jack</a>
                                                  <a href="javascript:void(0);"
                                                      class="text-primary text-decoration-underline">View
                                                      All</a>
                                              </div>
                                              <p class="mb-1 popular-blog-content text-muted text-truncate">
                                                  There are many variations of passages of Lorem Ipsum
                                                  available
                                              </p>
                                              <div class="d-flex align-items-center justify-content-between">
                                                  <span
                                                      class="text-success badge bg-success-transparent">Music</span>
                                                  <span class="text-muted fs-11">28,Jul 2024 - 10:45</span>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="list-group-item">
                                      <div class="d-flex flex-wrap align-items-start gap-3">
                                          <span class="avatar avatar-xl  avatar-rounded p-1 border">
                                              <img src="{{ asset('') }}/assets/images/media/blog/15.jpg" class="img-fluid"
                                                  alt="...">
                                          </span>
                                          <div class="flex-fill">
                                              <div class="d-flex align-items-center justify-content-between">
                                                  <a href="javascript:void(0);"
                                                      class="fs-14 fw-medium mb-0">Sophia Sa</a>
                                                  <a href="javascript:void(0);"
                                                      class="text-primary text-decoration-underline">View
                                                      All</a>
                                              </div>
                                              <p class="mb-1 popular-blog-content text-truncate">
                                                  Latin words, combined with a handful of model sentence
                                              </p>
                                              <div class="d-flex align-items-center justify-content-between">
                                                  <span
                                                      class="text-primary badge bg-primary-transparent">Nature</span>
                                                  <span class="text-muted fs-11">28,Jul 2024 - 10:45</span>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="list-group-item">
                                      <div class="d-flex flex-wrap align-items-start gap-3">
                                          <span class="avatar avatar-xl  avatar-rounded p-1 border">
                                              <img src="{{ asset('') }}/assets/images/media/blog/16.jpg" class="img-fluid"
                                                  alt="...">
                                          </span>
                                          <div class="flex-fill">
                                              <div class="d-flex align-items-center justify-content-between">
                                                  <a href="javascript:void(0);"
                                                      class="fs-14 fw-medium mb-0">Anthony Karon</a>
                                                  <a href="javascript:void(0);"
                                                      class="text-primary text-decoration-underline">View
                                                      All</a>
                                              </div>
                                              <p class="mb-1 popular-blog-content text-truncate">
                                                  Ipsum omnis non fugit ad voluptate consequuntur, sed
                                                  veritatis nesciunt, asperiores, provident temporibus!
                                              </p>
                                              <div class="d-flex align-items-center justify-content-between">
                                                  <span
                                                      class="text-secondary badge bg-secondary-transparent">Life
                                                      Style</span>
                                                  <span class="text-muted fs-11">28,Jul 2024 - 10:45</span>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="list-group-item">
                                      <div class="d-flex flex-wrap align-items-start gap-3">
                                          <span class="avatar avatar-xl  avatar-rounded p-1 border">
                                              <img src="{{ asset('') }}/assets/images/media/blog/17.jpg" class="img-fluid"
                                                  alt="...">
                                          </span>
                                          <div class="flex-fill">
                                              <div class="d-flex align-items-center justify-content-between">
                                                  <a href="javascript:void(0);"
                                                      class="fs-14 fw-medium mb-0">Amelia Jackson</a>
                                                  <a href="javascript:void(0);"
                                                      class="text-primary text-decoration-underline">View
                                                      All</a>
                                              </div>
                                              <p class="mb-1 popular-blog-content text-truncate">
                                                  Contrary to popular belief, Lorem Ipsum is not simply random
                                              </p>
                                              <div class="d-flex align-items-center justify-content-between">
                                                  <span
                                                      class="text-primary badge bg-primary-transparent">Nature</span>
                                                  <span class="text-muted fs-11">28,Jul 2024 - 10:45</span>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="list-group-item border-bottom-0">
                                      <div class="d-flex flex-wrap align-items-start gap-3">
                                          <span class="avatar avatar-xl  avatar-rounded p-1 border">
                                              <img src="{{ asset('') }}/assets/images/media/blog/18.jpg" class="img-fluid"
                                                  alt="...">
                                          </span>
                                          <div class="flex-fill">
                                              <div class="d-flex align-items-center justify-content-between">
                                                  <a href="javascript:void(0);"
                                                      class="fs-14 fw-medium mb-0">Matthew Stuart</a>
                                                  <a href="javascript:void(0);"
                                                      class="text-primary text-decoration-underline">View
                                                      All</a>
                                              </div>
                                              <p class="mb-1 popular-blog-content text-truncate">
                                                  It was popularised in the 1960s with the release of Letraset
                                                  sheets containing
                                              </p>
                                              <div class="d-flex align-items-center justify-content-between">
                                                  <span
                                                      class="text-success badge bg-success-transparent">Music</span>
                                                  <span class="text-muted fs-11">28,Jul 2024 - 10:45</span>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <div class=" mb-3">
                  <button class="btn mx-auto btn-primary-light btn-loader">
                      <span class="me-2">Older Blogs</span>
                      <span class="loading"><i class="ri-loader-4-line fs-16"></i></span>
                  </button>
              </div>
          </div>
      </div>
      <!--End::row-2 -->

  </div>
</div>
<!-- End::app-content -->

@endsection