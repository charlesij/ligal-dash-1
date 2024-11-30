@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Page Header -->
      <div
          class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Wishlist</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                      </ol>
                  </nav>
              </div>
          </div>
          <div class="d-flex gap-2">
              <button class="btn btn-white btn-wave border-0 me-0 fw-normal waves-effect waves-light">
                  <i class="ri-filter-3-fill me-2"></i>Filter
              </button>
              <button type="button" class="btn btn-primary btn-wave waves-effect waves-light">
                  <i class="ri-upload-2-line me-2"></i> Export report
              </button>
          </div>
      </div>
      <!-- Page Header Close -->

      <!-- Start::row-1 -->
      <div class="row">
          <div class="col-xl-12">
              <div class="card custom-card">
                  <div class="card-body p-3">
                      <div class="d-flex justify-content-between align-items-center gap-3 flex-wrap">
                          <div class="">
                              <div class="d-flex">
                                  <h5 class="fw-semibold mb-0"><span class="fw-normal">Showing</span> 3456
                                      Items</h5>
                              </div>
                          </div>
                          <div class="custom-form-group mb-0 w-sm-50 w-100"> <input type="text"
                                  class="form-control form-control-md rounded-pill py-2" placeholder="Search Product.."
                                  aria-label="Search Hear.."> <button
                                  class="btn btn-primary btn-sm border-0 custom-form-btn rounded-pill px-3" type="button">Search</button> </div>
                          <div class="text-sm-end text-start">
                              <div class="btn-group">
                                  <button class="btn btn-outline-light border dropdown-toggle" type="button"
                                      data-bs-toggle="dropdown" aria-expanded="false">
                                      <i class="ti ti-sort-descending-2 me-1"></i> Sort By
                                  </button>
                                  <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="javascript:void(0)">Date
                                              Published</a></li>
                                      <li><a class="dropdown-item" href="javascript:void(0)">Most
                                              Relevant</a></li>
                                      <li><a class="dropdown-item" href="javascript:void(0)">Price Low to
                                              High</a></li>
                                      <li><a class="dropdown-item" href="javascript:void(0)">Price High to
                                              Low</a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6 col-md-6">
              <div class="card custom-card card-style-3">
                  <div class="card-body p-3">
                      <div class="row">
                          <div class="col-4">
                              <div class="rounded-2">
                                  <a href="javascript:void(0);">
                                      <img src="{{ asset('/assets/images/ecommerce/jpg/06.jpg') }}" alt="img" class="img-fluid bg-light w-100 rounded">
                                  </a>
                              </div>
                          </div>
                          <div class="col-8">
                              <div class="d-flex align-items-start justify-content-between mb-2">
                                  <div class="flex-grow-1">
                                      <div class="mb-2 d-flex align-items-start justify-content-between flex-wrap">
                                          <div>
                                              <span class="text-success fw-semibold mb-2"><i class="ti ti-circle-check-filled me-1"></i>In Stock</span>
                                              <div class="d-flex align-items-baseline fs-12">
                                                  <div class="d-flex align-items-baseline fs-12">
                                                      <div class="min-w-fit-content">
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star"></i></span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="d-flex align-items-baseline">
                                              <h6 class="fs-20 fw-semibold mb-0">$120</h6>
                                              <span class="fs-13 ms-2 text-muted text-decoration-line-through">$399</span>
                                          </div>
                                      </div>
                                      <h6 class="fs-16 mb-1 fw-semibold"><a href="product-details.html">CapturePro Camera</a></h6>
                                  </div>
                              </div>
                              <div class="d-flex align-items-center justify-content-between gap-2 mt-0">
                                  <a href="cart.html" class="btn btn-primary-light btn-sm rounded-pill"><i class="ti ti-shopping-cart-plus me-1"></i> Add Cart</a>
                                    <a href="javascript:void(0);"  data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Wishlist"><i class="ti ti-heart me-1 text-primary fs-18"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6 col-md-6">
              <div class="card custom-card card-style-3">
                  <div class="card-body p-3">
                      <div class="row">
                          <div class="col-4">
                              <div class="rounded-2">
                                  <a href="javascript:void(0);">
                                      <img src="{{ asset('/assets/images/ecommerce/jpg/12.jpg') }}" alt="img" class="img-fluid bg-light w-100 rounded">
                                  </a>
                              </div>
                          </div>
                          <div class="col-8">
                              <div class="d-flex align-items-start justify-content-between mb-2">
                                  <div class="flex-grow-1">
                                      <div class="mb-2 d-flex align-items-start justify-content-between flex-wrap">
                                          <div>
                                              <span class="text-success fw-semibold mb-2"><i class="ti ti-circle-check-filled me-1"></i>In Stock</span>
                                              <div class="d-flex align-items-baseline fs-12">
                                                  <div class="d-flex align-items-baseline fs-12">
                                                      <div class="min-w-fit-content">
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star"></i></span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="d-flex align-items-baseline">
                                              <h6 class="fs-20 fw-semibold mb-0">$567</h6>
                                              <span class="fs-13 ms-2 text-muted text-decoration-line-through">$999</span>
                                          </div>
                                      </div>
                                      <h6 class="fs-16 mb-1 fw-semibold"><a href="product-details.html">Stylish Headset</a></h6>
                                  </div>
                              </div>
                              <div class="d-flex align-items-center justify-content-between gap-2 mt-0">
                                  <a href="cart.html" class="btn btn-primary-light btn-sm rounded-pill"><i class="ti ti-shopping-cart-plus me-1"></i> Add Cart</a>
                                    <a href="javascript:void(0);"  data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Wishlist"><i class="ti ti-heart me-1 text-primary fs-18"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6 col-md-6">
              <div class="card custom-card card-style-3">
                  <div class="card-body p-3">
                      <div class="row">
                          <div class="col-4">
                              <div class="rounded-2">
                                  <a href="javascript:void(0);">
                                      <img src="{{ asset('/assets/images/ecommerce/jpg/05.jpg') }}" alt="img" class="img-fluid bg-light w-100 rounded">
                                  </a>
                              </div>
                          </div>
                          <div class="col-8">
                              <div class="d-flex align-items-start justify-content-between mb-2">
                                  <div class="flex-grow-1">
                                      <div class="mb-2 d-flex align-items-start justify-content-between flex-wrap">
                                          <div>
                                              <span class="text-danger fw-semibold mb-2"><i class="ti ti-circle-x-filled me-1"></i>Out Of Stock</span>
                                              <div class="d-flex align-items-baseline fs-12">
                                                  <div class="d-flex align-items-baseline fs-12">
                                                      <div class="min-w-fit-content">
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star"></i></span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="d-flex align-items-baseline">
                                              <h6 class="fs-20 fw-semibold mb-0">$2,755</h6>
                                              <span class="fs-13 ms-2 text-muted text-decoration-line-through">$3,575</span>
                                          </div>
                                      </div>
                                      <h6 class="fs-16 mb-1 fw-semibold"><a href="product-details.html">
                                          Altra Pro bearua</a></h6>
                                  </div>
                              </div>
                              <div class="d-flex align-items-center justify-content-between gap-2 mt-0">
                                  <a href="cart.html" class="btn btn-primary-light btn-sm rounded-pill"><i class="ti ti-shopping-cart-plus me-1"></i> Add Cart</a>
                                    <a href="javascript:void(0);"  data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Wishlist"><i class="ti ti-heart me-1 text-primary fs-18"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6 col-md-6">
              <div class="card custom-card card-style-3">
                  <div class="card-body p-3">
                      <div class="row">
                          <div class="col-4">
                              <div class="rounded-2">
                                  <a href="javascript:void(0);">
                                      <img src="{{ asset('/assets/images/ecommerce/jpg/3.jpg') }}" alt="img" class="img-fluid bg-light w-100 rounded">
                                  </a>
                              </div>
                          </div>
                          <div class="col-8">
                              <div class="d-flex align-items-start justify-content-between mb-2">
                                  <div class="flex-grow-1">
                                      <div class="mb-2 d-flex align-items-start justify-content-between flex-wrap">
                                          <div>
                                              <span class="text-success fw-semibold mb-2"><i class="ti ti-circle-check-filled me-1"></i>In Stock</span>
                                              <div class="d-flex align-items-baseline fs-12">
                                                  <div class="d-flex align-items-baseline fs-12">
                                                      <div class="min-w-fit-content">
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star"></i></span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div class="d-flex align-items-baseline">
                                              <h6 class="fs-20 fw-semibold mb-0">$673</h6>
                                              <span class="fs-13 ms-2 text-muted text-decoration-line-through">$756</span>
                                          </div>
                                      </div>
                                      <h6 class="fs-16 mb-1 fw-semibold"><a href="product-details.html">Alarm Clock</a></h6>
                                  </div>
                              </div>
                              <div class="d-flex align-items-center justify-content-between gap-2 mt-0">
                                  <a href="cart.html" class="btn btn-primary-light btn-sm rounded-pill"><i class="ti ti-shopping-cart-plus me-1"></i> Add Cart</a>
                                    <a href="javascript:void(0);"  data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Wishlist"><i class="ti ti-heart me-1 text-primary fs-18"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6 col-md-6">
              <div class="card custom-card card-style-3">
                  <div class="card-body p-3">
                      <div class="row">
                          <div class="col-4">
                              <div class="rounded-2">
                                  <a href="javascript:void(0);">
                                      <img src="{{ asset('/assets/images/ecommerce/jpg/15.jpg') }}" alt="img" class="img-fluid bg-light w-100 rounded">
                                  </a>
                              </div>
                          </div>
                          <div class="col-8">
                              <div class="d-flex align-items-start justify-content-between mb-2">
                                  <div class="flex-grow-1">
                                      
                                      <div class="mb-2 d-flex align-items-start justify-content-between flex-wrap">
                                          <div>
                                              <span class="text-danger fw-semibold mb-2"><i class="ti ti-circle-x-filled me-1"></i>Out Of Stock</span>
                                              <div class="d-flex align-items-baseline fs-12">
                                                  <div class="d-flex align-items-baseline fs-12">
                                                      <div class="min-w-fit-content">
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star"></i></span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div class="d-flex align-items-baseline">
                                              <h6 class="fs-20 fw-semibold mb-0">$1074</h6>
                                              <span class="fs-13 ms-2 text-muted text-decoration-line-through">$2999</span>
                                          </div>
                                      </div>
                                      <h6 class="fs-16 mb-1 fw-semibold"><a href="product-details.html">Teddy Bear Toys</a></h6>
                                  </div>
                              </div>
                              <div class="d-flex align-items-center justify-content-between gap-2 mt-0">
                                  <a href="cart.html" class="btn btn-primary-light btn-sm rounded-pill"><i class="ti ti-shopping-cart-plus me-1"></i> Add Cart</a>
                                    <a href="javascript:void(0);"  data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Wishlist"><i class="ti ti-heart me-1 text-primary fs-18"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6 col-md-6">
              <div class="card custom-card card-style-3">
                  <div class="card-body p-3">
                      <div class="row">
                          <div class="col-4">
                              <div class="rounded-2">
                                  <a href="javascript:void(0);">
                                      <img src="{{ asset('/assets/images/ecommerce/jpg/1.jpg') }}" alt="img" class="img-fluid bg-light w-100 rounded">
                                  </a>
                              </div>
                          </div>
                          <div class="col-8">
                              <div class="d-flex align-items-start justify-content-between mb-2">
                                  <div class="flex-grow-1">
                                  
                                      <div class="mb-2 d-flex align-items-start justify-content-between flex-wrap">
                                          <div>
                                              <span class="text-danger fw-semibold mb-2"><i class="ti ti-circle-x-filled me-1"></i>Out Of Stock</span>
                                              <div class="d-flex align-items-baseline fs-12">
                                                  <div class="d-flex align-items-baseline fs-12">
                                                      <div class="min-w-fit-content">
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star"></i></span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div class="d-flex align-items-baseline">
                                              <h6 class="fs-20 fw-semibold mb-0">$745</h6>
                                              <span class="fs-13 ms-2 text-muted text-decoration-line-through">$865</span>
                                          </div>
                                      </div>
                                      <h6 class="fs-16 mb-1 fw-semibold"><a href="product-details.html">Cobra Perfume</a></h6>
                                  </div>
                              </div>
                              <div class="d-flex align-items-center justify-content-between gap-2 mt-0">
                                  <a href="cart.html" class="btn btn-primary-light btn-sm rounded-pill"><i class="ti ti-shopping-cart-plus me-1"></i> Add Cart</a>
                                    <a href="javascript:void(0);"  data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Wishlist"><i class="ti ti-heart me-1 text-primary fs-18"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6 col-md-6">
              <div class="card custom-card card-style-3">
                  <div class="card-body p-3">
                      <div class="row">
                          <div class="col-4">
                              <div class="rounded-2">
                                  <a href="javascript:void(0);">
                                      <img src="{{ asset('/assets/images/ecommerce/jpg/07.jpg') }}" alt="img" class="img-fluid bg-light rounded w-100">
                                  </a>
                              </div>
                          </div>
                          <div class="col-8">
                              <div class="d-flex align-items-start justify-content-between mb-2">
                                  <div class="flex-grow-1">
                          
                                      <div class="mb-2 d-flex align-items-start justify-content-between flex-wrap">
                                          <div>
                                              <span class="text-success fw-semibold mb-2"><i class="ti ti-circle-check-filled me-1"></i>In Stock</span>
                                              <div class="d-flex align-items-baseline fs-12">
                                                  <div class="d-flex align-items-baseline fs-12">
                                                      <div class="min-w-fit-content">
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star"></i></span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div class="d-flex align-items-baseline">
                                              <h6 class="fs-20 fw-semibold mb-0">$189</h6>
                                              <span class="fs-13 ms-2 text-muted text-decoration-line-through">$250</span>
                                          </div>
                                      </div>
                                      <h6 class="fs-16 mb-1 fw-semibold"><a href="product-details.html">Flower Pot</a></h6>
                                  </div>
                              </div>
                              <div class="d-flex align-items-center justify-content-between gap-2 mt-0">
                                  <a href="cart.html" class="btn btn-primary-light btn-sm rounded-pill"><i class="ti ti-shopping-cart-plus me-1"></i> Add Cart</a>
                                    <a href="javascript:void(0);"  data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Wishlist"><i class="ti ti-heart me-1 text-primary fs-18"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6 col-md-6">
              <div class="card custom-card card-style-3">
                  <div class="card-body p-3">
                      <div class="row">
                          <div class="col-4">
                              <div class="rounded-2">
                                  <a href="javascript:void(0);">
                                      <img src="{{ asset('/assets/images/ecommerce/jpg/9.jpg') }}" alt="img" class="img-fluid bg-light rounded w-100">
                                  </a>
                              </div>
                          </div>
                          <div class="col-8">
                              <div class="d-flex align-items-start justify-content-between mb-2">
                                  <div class="flex-grow-1">
                                      <div class="mb-2 d-flex align-items-start justify-content-between flex-wrap">
                                          <div>
                                              <span class="text-success fw-semibold mb-2"><i class="ti ti-circle-check-filled me-1"></i>In Stock</span>
                                              <div class="d-flex align-items-baseline fs-12">
                                                  <div class="d-flex align-items-baseline fs-12">
                                                      <div class="min-w-fit-content">
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star"></i></span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div class="d-flex align-items-baseline">
                                              <h6 class="fs-20 fw-semibold mb-0">$869</h6>
                                              <span class="fs-13 ms-2 text-muted text-decoration-line-through">$999</span>
                                          </div>
                                      </div>
                                      <h6 class="fs-16 mb-1 fw-semibold"><a href="product-details.html">Stylish Ladies Shoe</a></h6>
                                  </div>
                              </div>
                              <div class="d-flex align-items-center justify-content-between gap-2 mt-0">
                                  <a href="cart.html" class="btn btn-primary-light btn-sm rounded-pill"><i class="ti ti-shopping-cart-plus me-1"></i> Add Cart</a>
                                    <a href="javascript:void(0);"  data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Wishlist"><i class="ti ti-heart me-1 text-primary fs-18"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6 col-md-6">
              <div class="card custom-card card-style-3">
                  <div class="card-body p-3">
                      <div class="row">
                          <div class="col-4">
                              <div class="rounded-2">
                                  <a href="javascript:void(0);">
                                      <img src="{{ asset('/assets/images/ecommerce/jpg/08.jpg') }}" alt="img" class="img-fluid bg-light rounded w-100">
                                  </a>
                              </div>
                          </div>
                          <div class="col-8">
                              <div class="d-flex align-items-start justify-content-between mb-2">
                                  <div class="flex-grow-1">
                                      
                                      <div class="mb-2 d-flex align-items-start justify-content-between flex-wrap">
                                          <div>
                                              <span class="text-success fw-semibold mb-2"><i class="ti ti-circle-check-filled me-1"></i>In Stock</span>
                                              <div class="d-flex align-items-baseline fs-12">
                                                  <div class="d-flex align-items-baseline fs-12">
                                                      <div class="min-w-fit-content">
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star"></i></span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div class="d-flex align-items-baseline">
                                              <h6 class="fs-20 fw-semibold mb-0">$659</h6>
                                              <span class="fs-13 ms-2 text-muted text-decoration-line-through">$879</span>
                                          </div>
                                      </div>
                                      <h6 class="fs-16 mb-1 fw-semibold"><a href="product-details.html">Jasmin Perfume</a></h6>
                                  </div>
                              </div>
                              <div class="d-flex align-items-center justify-content-between gap-2 mt-0">
                                  <a href="cart.html" class="btn btn-primary-light btn-sm rounded-pill"><i class="ti ti-shopping-cart-plus me-1"></i> Add Cart</a>
                                    <a href="javascript:void(0);"  data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Wishlist"><i class="ti ti-heart me-1 text-primary fs-18"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6 col-md-6">
              <div class="card custom-card card-style-3">
                  <div class="card-body p-3">
                      <div class="row">
                          <div class="col-4">
                              <div class="rounded-2">
                                  <a href="javascript:void(0);">
                                      <img src="{{ asset('/assets/images/ecommerce/jpg/17.jpg') }}" alt="img" class="img-fluid bg-light rounded w-100">
                                  </a>
                              </div>
                          </div>
                          <div class="col-8">
                              <div class="d-flex align-items-start justify-content-between mb-2">
                                  <div class="flex-grow-1">
                                      
                                      <div class="mb-2 d-flex align-items-start justify-content-between flex-wrap">
                                          <div>
                                              <span class="text-success fw-semibold mb-2"><i class="ti ti-circle-check-filled me-1"></i>In Stock</span>
                                              <div class="d-flex align-items-baseline fs-12">
                                                  <div class="d-flex align-items-baseline fs-12">
                                                      <div class="min-w-fit-content">
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star"></i></span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                        
                                          <div class="d-flex align-items-baseline">
                                              <h6 class="fs-20 fw-semibold mb-0">$59753</h6>
                                              <span class="fs-13 ms-2 text-muted text-decoration-line-through">$79475</span>
                                          </div>
                                      </div>
                                      <h6 class="fs-16 mb-1 fw-semibold"><a href="product-details.html">HP Laptop</a></h6>
                                  </div>
                              </div>
                              <div class="d-flex align-items-center justify-content-between gap-2 mt-0">
                                  <a href="cart.html" class="btn btn-primary-light btn-sm rounded-pill"><i class="ti ti-shopping-cart-plus me-1"></i> Add Cart</a>
                                    <a href="javascript:void(0);"  data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Wishlist"><i class="ti ti-heart me-1 text-primary fs-18"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6 col-md-6">
              <div class="card custom-card card-style-3">
                  <div class="card-body p-3">
                      <div class="row">
                          <div class="col-4">
                              <div class="rounded-2">
                                  <a href="javascript:void(0);">
                                      <img src="{{ asset('/assets/images/ecommerce/jpg/02.jpg') }}" alt="img" class="img-fluid rounded bg-light w-100">
                                  </a>
                              </div>
                          </div>
                          <div class="col-8">
                              <div class="d-flex align-items-start justify-content-between mb-2">
                                  <div class="flex-grow-1">
                                      
                                      <div class="mb-2 d-flex align-items-start justify-content-between flex-wrap">
                                          <div>
                                              <span class="text-danger fw-semibold mb-2"><i class="ti ti-circle-x-filled me-1"></i>Out Of Stock</span>
                                              <div class="d-flex align-items-baseline fs-12">
                                                  <div class="d-flex align-items-baseline fs-12">
                                                      <div class="min-w-fit-content">
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star"></i></span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                        
                                          <div class="d-flex align-items-baseline">
                                              <h6 class="fs-20 fw-semibold mb-0">$1255</h6>
                                              <span class="fs-13 ms-2 text-muted text-decoration-line-through">$1495</span>
                                          </div>
                                      </div>
                                      <h6 class="fs-16 mb-1 fw-semibold"><a href="product-details.html">Adidas Men Shoe</a></h6>
                                  </div>
                              </div>
                              <div class="d-flex align-items-center justify-content-between gap-2 mt-0">
                                  <a href="cart.html" class="btn btn-primary-light rounded-pill btn-sm"><i class="ti ti-shopping-cart-plus me-1"></i> Add Cart</a>
                                    <a href="javascript:void(0);"  data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Wishlist"><i class="ti ti-heart me-1 text-primary fs-18"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6 col-md-6">  
              <div class="card custom-card card-style-3">
                  <div class="card-body p-3">
                      <div class="row">
                          <div class="col-4">
                              <div class="rounded-2">
                                  <a href="javascript:void(0);">
                                      <img src="{{ asset('/assets/images/ecommerce/jpg/2.jpg') }}" alt="img" class="img-fluid rounded bg-light w-100">
                                  </a>
                              </div>
                          </div>
                          <div class="col-8">
                              <div class="d-flex align-items-start justify-content-between mb-2">
                                  <div class="flex-grow-1">
                                
                                      <div class="mb-2 d-flex align-items-start justify-content-between flex-wrap">
                                          <div>
                                              <span class="text-danger fw-semibold mb-2"><i class="ti ti-circle-x-filled me-1"></i>Out Of Stock</span>
                                              <div class="d-flex align-items-baseline fs-12">
                                                  <div class="d-flex align-items-baseline fs-12">
                                                      <div class="min-w-fit-content">
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                          <span class="text-warning"><i class="bi bi-star"></i></span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div class="d-flex align-items-baseline">
                                              <h6 class="fs-20 fw-semibold mb-0">$6844</h6>
                                              <span class="fs-13 ms-2 text-muted text-decoration-line-through">$7476</span>
                                          </div>
                                      </div>
                                      <h6 class="fs-16 mb-1 fw-semibold"><a href="product-details.html">Softouch Sofa Set</a></h6>
                                  </div>
                              </div>
                              <div class="d-flex align-items-center justify-content-between gap-2 mt-0">
                                  <a href="cart.html" class="btn btn-primary-light btn-sm rounded-pill"><i class="ti ti-shopping-cart-plus me-1"></i> Add Cart</a>
                                    <a href="javascript:void(0);"  data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Wishlist"><i class="ti ti-heart me-1 text-primary fs-18"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--End::row-1 -->

      <ul class="pagination justify-content-end">
          <li class="page-item disabled">
              <a class="page-link">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
          <li class="page-item active"><a class="page-link" href="javascript:void(0);">2</a></li>
          <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
          <li class="page-item">
              <a class="page-link" href="javascript:void(0);">Next</a>
          </li>
      </ul>

  </div>
</div>
<!-- End::app-content -->
        
@endsection