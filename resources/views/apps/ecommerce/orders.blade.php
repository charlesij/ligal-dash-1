@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Page Header -->
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Orders</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Orders</li>
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
      <div class="card custom-card">
          <div class="card-header justify-content-between">
              <div class="card-title">
                  All Orders List
              </div>
          </div>
          <div class="card-body p-0">
              <ul class="nav nav-tabs tab-style-8 scaleX mb-0 border-bottom d-flex" id="myTab1" role="tablist">
                  <li class="nav-item me-0" role="presentation">
                      <button class="nav-link px-4 py-3 active" id="allorders" data-bs-toggle="tab" data-bs-target="#allorders-pane" type="button" role="tab" aria-controls="allorders-pane" aria-selected="true">All Orders</button>
                  </li>
                  <li class="nav-item me-0" role="presentation">
                      <button class="nav-link px-4 py-3" id="pending" data-bs-toggle="tab" data-bs-target="#pending-pane" type="button" role="tab" aria-controls="pending-pane" aria-selected="false" tabindex="-1">Pending Orders</button>
                  </li>
                  <li class="nav-item" role="presentation">
                      <button class="nav-link px-4 py-3" id="cancelled" data-bs-toggle="tab" data-bs-target="#cancelled-pane" type="button" role="tab" aria-controls="cancelled-pane" aria-selected="false" tabindex="-1">Cancelled Orders</button>
                  </li>
                  <li class="nav-item" role="presentation">
                      <button class="nav-link px-4 py-3" id="shipping" data-bs-toggle="tab" data-bs-target="#shipping-pane" type="button" role="tab" aria-controls="shipping-pane" aria-selected="false" tabindex="-1">Shipping Orders</button>
                  </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                  <div class="tab-pane border-0 active show" id="allorders-pane" role="tabpanel" aria-labelledby="allorders" tabindex="0">
                      <div class="row">
                          <div class="col-xxl-3 col-xl-6">
                              <div class="rounded border card custom-card">
                                <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                                    <span class="fw-semibold">ID : #139845</span>
                                    <div class="dropdown ms-2">
                                      <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          <i class="ti ti-dots-vertical"></i>
                                      </button>
                                      <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                      </ul>
                                  </div>
                                </div>
                                <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                                    <div class="d-flex align-items-center">
                                          <span class="avatar avatar-lg me-2">
                                          <img src="{{ asset('') }}/assets/images/ecommerce/jpg/06.jpg" alt="img">
                                          </span>
                                          <div>
                                          <p class="mb-1 fw-semibold fs-15">Alta max Camera</p>
                                          <span class="text-muted fs-13">02/09/2024</span>
                                          </div>
                                    </div>
                                    <span class="badge bg-success-transparent rounded-pill">Shipped</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between px-3 py-2">
                                  <div class="d-flex align-items-center">
                                      <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                          <img src="{{ asset('') }}/assets/images/faces/4.jpg"  alt="img">
                                      </span>Mayor Kelly
                                  </div>
                                  <p class="mb-0 fw-semibold">$1222.0</p>
                                </div>
                              </div>
                          </div>
                          <div class="col-xxl-3 col-xl-6">
                          <div class="rounded border card custom-card">
                              <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                                <span class="fw-semibold">ID : #139845</span>
                                <div class="dropdown ms-2">
                                    <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                </div>
                              </div>
                              <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                                  <div class="d-flex align-items-center">
                                      <span class="avatar avatar-lg me-2">
                                        <img src="{{ asset('') }}/assets/images/ecommerce/jpg/02.jpg"  alt="img">
                                      </span>
                                      <div>
                                        <p class="mb-1 fw-semibold fs-15">Adidas Gent's Shoe</p>
                                        <span class="text-muted fs-13">10/12/2024</span>
                                      </div>
                                  </div>
                                  <span class="badge bg-warning-transparent rounded-pill">Pending</span>
                              </div>
                              <div class="d-flex align-items-center justify-content-between px-3 py-2">
                              <div class="d-flex align-items-center">
                                  <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                      <img src="{{ asset('') }}/assets/images/faces/15.jpg" alt="">
                                  </span>Andrew Garfield 
                              </div>
                                <p class="mb-0 fw-semibold">$299.0</p>
                              </div>
                          </div>
                          </div>
                          <div class="col-xxl-3 col-xl-6">
                          <div class="rounded border card custom-card">
                              <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                                <span class="fw-semibold">ID : #139845</span>
                                <div class="dropdown ms-2">
                                    <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                </div>
                              </div>
                              <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                                  <div class="d-flex align-items-center">
                                      <span class="avatar avatar-lg me-2">
                                        <img src="{{ asset('') }}/assets/images/ecommerce/jpg/03.jpg"  alt="img">
                                      </span>
                                      <div>
                                        <p class="mb-1 fw-semibold fs-15">Yellow Ladies Bag</p>
                                        <span class="text-muted fs-13">15/05/2024</span>
                                      </div>
                                  </div>
                                  <span class="badge bg-success-transparent rounded-pill">shipped</span>
                              </div>
                              <div class="d-flex align-items-center justify-content-between px-3 py-2">
                              <div class="d-flex align-items-center">
                                  <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                      <img src="{{ asset('') }}/assets/images/faces/8.jpg" alt="">
                                  </span>Mirinda Hers
                              </div>
                                <p class="mb-0 fw-semibold">$512.0</p>
                              </div>
                          </div>
                          </div>
                          <div class="col-xxl-3 col-xl-6">
                          <div class="rounded border card custom-card">
                              <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                                <span class="fw-semibold">ID : #139845</span>
                                <div class="dropdown ms-2">
                                    <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                </div>
                              </div>
                              <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                                  <div class="d-flex align-items-center">
                                      <span class="avatar avatar-lg me-2">
                                        <img src="{{ asset('') }}/assets/images/ecommerce/jpg/05.jpg"  alt="img">
                                      </span>
                                      <div>
                                        <p class="mb-1 fw-semibold fs-15">Altra bearua</p>
                                        <span class="text-muted fs-13">11/06/2024</span>
                                      </div>
                                  </div>
                                  <span class="badge bg-secondary-transparent rounded-pill">Calncelled</span>
                              </div>
                              <div class="d-flex align-items-center justify-content-between px-3 py-2">
                              <div class="d-flex align-items-center">
                                  <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                      <img src="{{ asset('') }}/assets/images/faces/11.jpg" alt="">
                                  </span>Simon Cowel
                              </div>
                                <p class="mb-0 fw-semibold">$1279.0</p>
                              </div>
                          </div>
                          </div>
                          <div class="col-xxl-3 col-xl-6">
                          <div class="rounded border card custom-card">
                              <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                                <span class="fw-semibold">ID : #139845</span>
                                <div class="dropdown ms-2">
                                    <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                </div>
                              </div>
                              <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                                  <div class="d-flex align-items-center">
                                      <span class="avatar avatar-lg me-2">
                                        <img src="{{ asset('') }}/assets/images/ecommerce/jpg/16.jpg"  alt="img">
                                      </span>
                                      <div>
                                        <p class="mb-1 fw-semibold fs-15">Baby Shoe</p>
                                        <span class="text-muted fs-13">11/06/2024</span>
                                      </div>
                                  </div>
                                  <span class="badge bg-warning-transparent rounded-pill">Panding</span>
                              </div>
                              <div class="d-flex align-items-center justify-content-between px-3 py-2">
                              <div class="d-flex align-items-center">
                                  <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                      <img src="{{ asset('') }}/assets/images/faces/9.jpg" alt="">
                                  </span>Anandh Beary
                              </div>
                                <p class="mb-0 fw-semibold">$455.0</p>
                              </div>
                          </div>
                          </div>
                          <div class="col-xxl-3 col-xl-6">
                          <div class="rounded border card custom-card">
                              <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                                <span class="fw-semibold">ID : #139845</span>
                                <div class="dropdown ms-2">
                                    <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                </div>
                              </div>
                              <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                                  <div class="d-flex align-items-center">
                                      <span class="avatar avatar-lg me-2">
                                        <img src="{{ asset('') }}/assets/images/ecommerce/jpg/15.jpg"  alt="img">
                                      </span>
                                      <div>
                                        <p class="mb-1 fw-semibold fs-15">Teddy bear Toy</p>
                                        <span class="text-muted fs-13">16/06/2024</span>
                                      </div>
                                  </div>
                                  <span class="badge bg-secondary-transparent rounded-pill">Calncelled</span>
                              </div>
                              <div class="d-flex align-items-center justify-content-between px-3 py-2">
                              <div class="d-flex align-items-center">
                                  <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                      <img src="{{ asset('') }}/assets/images/faces/4.jpg" alt="">
                                  </span>Simon Cowel
                              </div>
                                <p class="mb-0 fw-semibold">$2563.0</p>
                              </div>
                          </div>
                          </div>
                          <div class="col-xxl-3 col-xl-6">
                          <div class="rounded border card custom-card">
                              <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                                <span class="fw-semibold">ID : #139845</span>
                                <div class="dropdown ms-2">
                                    <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                </div>
                              </div>
                              <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                                  <div class="d-flex align-items-center">
                                      <span class="avatar avatar-lg me-2">
                                        <img src="{{ asset('') }}/assets/images/ecommerce/jpg/12.jpg"  alt="img">
                                      </span>
                                      <div>
                                        <p class="mb-1 fw-semibold fs-15">Samsung Head Set</p>
                                        <span class="text-muted fs-13">05/11/2024</span>
                                      </div>
                                  </div>
                                  <span class="badge bg-success-transparent rounded-pill">Shipped</span>
                              </div>
                              <div class="d-flex align-items-center justify-content-between px-3 py-2">
                              <div class="d-flex align-items-center">
                                  <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                      <img src="{{ asset('') }}/assets/images/faces/14.jpg" alt="">
                                  </span>Jack Miller
                              </div>
                                <p class="mb-0 fw-semibold">$634.0</p>
                              </div>
                          </div>
                          </div>
                          <div class="col-xxl-3 col-xl-6">
                          <div class="rounded border card custom-card">
                              <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                                <span class="fw-semibold">ID : #139845</span>
                                <div class="dropdown ms-2">
                                    <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                </div>
                              </div>
                              <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                                  <div class="d-flex align-items-center">
                                      <span class="avatar avatar-lg me-2">
                                        <img src="{{ asset('') }}/assets/images/ecommerce/jpg/07.jpg"  alt="img">
                                      </span>
                                      <div>
                                        <p class="mb-1 fw-semibold fs-15">Flower Pot</p>
                                        <span class="text-muted fs-13">25/04/2024</span>
                                      </div>
                                  </div>
                                  <span class="badge bg-success-transparent rounded-pill">Shipped</span>
                              </div>
                              <div class="d-flex align-items-center justify-content-between px-3 py-2">
                              <div class="d-flex align-items-center">
                                  <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                      <img src="{{ asset('') }}/assets/images/faces/9.jpg" alt="">
                                  </span>Mirinda Hers
                              </div>
                                <p class="mb-0 fw-semibold">$145.0</p>
                              </div>
                          </div>
                          </div>
                          <div class="col-xxl-3 col-xl-6">
                          <div class="rounded border card custom-card">
                              <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                                <span class="fw-semibold">ID : #139845</span>
                                <div class="dropdown ms-2">
                                    <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                </div>
                              </div>
                              <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                                  <div class="d-flex align-items-center">
                                      <span class="avatar avatar-lg me-2">
                                        <img src="{{ asset('') }}/assets/images/ecommerce/jpg/10.jpg"  alt="img">
                                      </span>
                                      <div>
                                        <p class="mb-1 fw-semibold fs-15">Gent's Sweat Sweater</p>
                                        <span class="text-muted fs-13">23/09/2024</span>
                                      </div>
                                  </div>
                                  <span class="badge bg-secondary-transparent rounded-pill">Calncelled</span>
                              </div>
                              <div class="d-flex align-items-center justify-content-between px-3 py-2">
                              <div class="d-flex align-items-center">
                                  <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                      <img src="{{ asset('') }}/assets/images/faces/16.jpg" alt="">
                                  </span>Mayor Kelly
                              </div>
                                <p class="mb-0 fw-semibold">$599.0</p>
                              </div>
                          </div>
                          </div>
                          <div class="col-xxl-3 col-xl-6">
                          <div class="rounded border card custom-card">
                              <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                                <span class="fw-semibold">ID : #139845</span>
                                <div class="dropdown ms-2">
                                    <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                </div>
                              </div>
                              <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                                  <div class="d-flex align-items-center">
                                      <span class="avatar avatar-lg me-2">
                                        <img src="{{ asset('') }}/assets/images/ecommerce/jpg/3.jpg"  alt="img">
                                      </span>
                                      <div>
                                        <p class="mb-1 fw-semibold fs-15">Alarm Clock</p>
                                        <span class="text-muted fs-13">14/09/2024</span>
                                      </div>
                                  </div>
                                  <span class="badge bg-warning-transparent rounded-pill">Pending</span>
                              </div>
                              <div class="d-flex align-items-center justify-content-between px-3 py-2">
                              <div class="d-flex align-items-center">
                                  <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                      <img src="{{ asset('') }}/assets/images/faces/12.jpg" alt="">
                                  </span>Mirinda Hers
                              </div>
                                <p class="mb-0 fw-semibold">$325.0</p>
                              </div>
                          </div>
                          </div>
                          <div class="col-xxl-3 col-xl-6">
                          <div class="rounded border card custom-card">
                              <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                                <span class="fw-semibold">ID : #139845</span>
                                <div class="dropdown ms-2">
                                    <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                </div>
                              </div>
                              <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                                  <div class="d-flex align-items-center">
                                      <span class="avatar avatar-lg me-2">
                                        <img src="{{ asset('') }}/assets/images/ecommerce/jpg/08.jpg"  alt="img">
                                      </span>
                                      <div>
                                        <p class="mb-1 fw-semibold fs-15">Josmin Perfume</p>
                                        <span class="text-muted fs-13">11/06/2024</span>
                                      </div>
                                  </div>
                                  <span class="badge bg-success-transparent rounded-pill">Shipped</span>
                              </div>
                              <div class="d-flex align-items-center justify-content-between px-3 py-2">
                              <div class="d-flex align-items-center">
                                  <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                      <img src="{{ asset('') }}/assets/images/faces/12.jpg" alt="">
                                  </span>Jack Miller
                              </div>
                                <p class="mb-0 fw-semibold">$779.0</p>
                              </div>
                          </div>
                          </div>
                          <div class="col-xxl-3 col-xl-6">
                          <div class="rounded border card custom-card">
                              <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                                <span class="fw-semibold">ID : #139845</span>
                                <div class="dropdown ms-2">
                                    <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                </div>
                              </div>
                              <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                                  <div class="d-flex align-items-center">
                                      <span class="avatar avatar-lg me-2">
                                        <img src="{{ asset('') }}/assets/images/ecommerce/jpg/9.jpg"  alt="img">
                                      </span>
                                      <div>
                                        <p class="mb-1 fw-semibold fs-15">Ladies Shoe</p>
                                        <span class="text-muted fs-13">21/07/2024</span>
                                      </div>
                                  </div>
                                  <span class="badge bg-secondary-transparent rounded-pill">Calncelled</span>
                              </div>
                              <div class="d-flex align-items-center justify-content-between px-3 py-2">
                              <div class="d-flex align-items-center">
                                  <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                      <img src="{{ asset('') }}/assets/images/faces/11.jpg" alt="">
                                  </span>Mirinda Hers
                              </div>
                                <p class="mb-0 fw-semibold">$3289.0</p>
                              </div>
                          </div>
                          </div>
                          <div class="col-xl-12">
                          <div class="">
                              <div class="d-flex align-items-center flex-wrap overflow-auto">
                                  <div class="mb-2 mb-sm-0">
                                      Showing <b>1</b> to <b>10</b> of <b>10</b> entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
                                  </div>
                                  <div class="ms-auto">
                                      <ul class="pagination mb-0 overflow-auto">
                                          <li class="page-item disabled">
                                              <a class="page-link">Previous</a>
                                          </li>
                                          <li class="page-item active" aria-current="page"><a class="page-link" href="javascript:void(0)">1</a></li>
                                          <li class="page-item">
                                              <a class="page-link" href="javascript:void(0)">2</a>
                                          </li>
                                          <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                          <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                          <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                                          <li class="page-item">
                                              <a class="page-link" href="javascript:void(0)">Next</a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          </div>
                      </div>
                  </div>
                  <div class="tab-pane border-0" id="pending-pane" role="tabpanel" aria-labelledby="pending" tabindex="0">
                  <div class="row">
                      <div class="col-xxl-3 col-xl-6">
                          <div class="rounded border card custom-card">
                              <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                                <span class="fw-semibold">ID : #139845</span>
                                <div class="dropdown ms-2">
                                    <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                </div>
                              </div>
                              <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                                  <div class="d-flex align-items-center">
                                      <span class="avatar avatar-lg me-2">
                                        <img src="{{ asset('') }}/assets/images/ecommerce/jpg/06.jpg"  alt="img">
                                      </span>
                                      <div>
                                        <p class="mb-1 fw-semibold fs-15">Alta max Camera</p>
                                        <span class="text-muted fs-13">02/09/2024</span>
                                      </div>
                                  </div>
                                  <span class="badge bg-warning-transparent rounded-pill">Pending</span>
                              </div>
                              <div class="d-flex align-items-center justify-content-between px-3 py-2">
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                        <img src="{{ asset('') }}/assets/images/faces/4.jpg" alt="">
                                    </span>Mayor Kelly
                                </div>
                                <p class="mb-0 fw-semibold">$1222.0</p>
                              </div>
                          </div>
                      </div>
                      <div class="col-xxl-3 col-xl-6">
                        <div class="rounded border card custom-card">
                          <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                              <span class="fw-semibold">ID : #139845</span>
                              <div class="dropdown ms-2">
                                <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                </ul>
                            </div>
                          </div>
                          <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                              <div class="d-flex align-items-center">
                                    <span class="avatar avatar-lg me-2">
                                    <img src="{{ asset('') }}/assets/images/ecommerce/jpg/02.jpg"  alt="img">
                                    </span>
                                    <div>
                                    <p class="mb-1 fw-semibold fs-15">Adidas Gent's Shoe</p>
                                    <span class="text-muted fs-13">10/12/2024</span>
                                    </div>
                              </div>
                              <span class="badge bg-warning-transparent rounded-pill">Pending</span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between px-3 py-2">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                    <img src="{{ asset('') }}/assets/images/faces/15.jpg" alt="">
                                </span>Andrew Garfield 
                            </div>
                            <p class="mb-0 fw-semibold">$299.0</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-3 col-xl-6">
                        <div class="rounded border card custom-card">
                          <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                              <span class="fw-semibold">ID : #139845</span>
                              <div class="dropdown ms-2">
                                <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                </ul>
                            </div>
                          </div>
                          <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                              <div class="d-flex align-items-center">
                                    <span class="avatar avatar-lg me-2">
                                    <img src="{{ asset('') }}/assets/images/ecommerce/jpg/03.jpg"  alt="img">
                                    </span>
                                    <div>
                                    <p class="mb-1 fw-semibold fs-15">Yellow Ladies Bag</p>
                                    <span class="text-muted fs-13">15/05/2024</span>
                                    </div>
                              </div>
                              <span class="badge bg-warning-transparent rounded-pill">Pending</span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between px-3 py-2">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                    <img src="{{ asset('') }}/assets/images/faces/8.jpg" alt="">
                                </span>Mirinda Hers
                            </div>
                            <p class="mb-0 fw-semibold">$512.0</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-3 col-xl-6">
                        <div class="rounded border card custom-card">
                          <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                              <span class="fw-semibold">ID : #139845</span>
                              <div class="dropdown ms-2">
                                <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                </ul>
                            </div>
                          </div>
                          <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                              <div class="d-flex align-items-center">
                                    <span class="avatar avatar-lg me-2">
                                    <img src="{{ asset('') }}/assets/images/ecommerce/jpg/05.jpg"  alt="img">
                                    </span>
                                    <div>
                                    <p class="mb-1 fw-semibold fs-15">Altra bearua</p>
                                    <span class="text-muted fs-13">11/06/2024</span>
                                    </div>
                              </div>
                              <span class="badge bg-warning-transparent rounded-pill">Pending</span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between px-3 py-2">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                    <img src="{{ asset('') }}/assets/images/faces/11.jpg" alt="">
                                </span>Simon Cowel
                            </div>
                            <p class="mb-0 fw-semibold">$1279.0</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-3 col-xl-6">
                        <div class="rounded border card custom-card">
                          <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                              <span class="fw-semibold">ID : #139845</span>
                              <div class="dropdown ms-2">
                                <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                </ul>
                            </div>
                          </div>
                          <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                              <div class="d-flex align-items-center">
                                    <span class="avatar avatar-lg me-2">
                                    <img src="{{ asset('') }}/assets/images/ecommerce/jpg/16.jpg"  alt="img">
                                    </span>
                                    <div>
                                    <p class="mb-1 fw-semibold fs-15">Baby Shoe</p>
                                    <span class="text-muted fs-13">11/06/2024</span>
                                    </div>
                              </div>
                              <span class="badge bg-warning-transparent rounded-pill">Panding</span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between px-3 py-2">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                    <img src="{{ asset('') }}/assets/images/faces/9.jpg" alt="">
                                </span>Anandh Beary
                            </div>
                            <p class="mb-0 fw-semibold">$455.0</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-3 col-xl-6">
                        <div class="rounded border card custom-card">
                          <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                              <span class="fw-semibold">ID : #139845</span>
                              <div class="dropdown ms-2">
                                <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                </ul>
                            </div>
                          </div>
                          <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                              <div class="d-flex align-items-center">
                                    <span class="avatar avatar-lg me-2">
                                    <img src="{{ asset('') }}/assets/images/ecommerce/jpg/15.jpg"  alt="img">
                                    </span>
                                    <div>
                                    <p class="mb-1 fw-semibold fs-15">Teddy bear Toy</p>
                                    <span class="text-muted fs-13">16/06/2024</span>
                                    </div>
                              </div>
                              <span class="badge bg-warning-transparent rounded-pill">Pending</span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between px-3 py-2">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                    <img src="{{ asset('') }}/assets/images/faces/4.jpg" alt="">
                                </span>Simon Cowel
                            </div>
                            <p class="mb-0 fw-semibold">$2563.0</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-3 col-xl-6">
                        <div class="rounded border card custom-card">
                          <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                              <span class="fw-semibold">ID : #139845</span>
                              <div class="dropdown ms-2">
                                <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                </ul>
                            </div>
                          </div>
                          <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                              <div class="d-flex align-items-center">
                                    <span class="avatar avatar-lg me-2">
                                    <img src="{{ asset('') }}/assets/images/ecommerce/jpg/13.jpg"  alt="img">
                                    </span>
                                    <div>
                                    <p class="mb-1 fw-semibold fs-15">Ladies Stylish Bag</p>
                                    <span class="text-muted fs-13">05/11/2024</span>
                                    </div>
                              </div>
                              <span class="badge bg-warning-transparent rounded-pill">Pending</span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between px-3 py-2">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                    <img src="{{ asset('') }}/assets/images/faces/14.jpg" alt="">
                                </span>Jack Miller
                            </div>
                            <p class="mb-0 fw-semibold">$634.0</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-3 col-xl-6">
                        <div class="rounded border card custom-card">
                          <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                              <span class="fw-semibold">ID : #139845</span>
                              <div class="dropdown ms-2">
                                <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                </ul>
                            </div>
                          </div>
                          <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                              <div class="d-flex align-items-center">
                                    <span class="avatar avatar-lg me-2">
                                    <img src="{{ asset('') }}/assets/images/ecommerce/jpg/07.jpg"  alt="img">
                                    </span>
                                    <div>
                                    <p class="mb-1 fw-semibold fs-15">Flower Pot</p>
                                    <span class="text-muted fs-13">25/04/2024</span>
                                    </div>
                              </div>
                              <span class="badge bg-warning-transparent rounded-pill">Pending</span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between px-3 py-2">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                    <img src="{{ asset('') }}/assets/images/faces/9.jpg" alt="">
                                </span>Mirinda Hers
                            </div>
                            <p class="mb-0 fw-semibold">$145.0</p>
                          </div>
                        </div>
                      </div> 
                  </div>
                  </div>
                  <div class="tab-pane border-0" id="cancelled-pane" role="tabpanel" aria-labelledby="cancelled" tabindex="0">
                  <div class="row">
                      <div class="col-xxl-3 col-xl-6">
                          <div class="rounded border card custom-card">
                              <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                                <span class="fw-semibold">ID : #139845</span>
                                <div class="dropdown ms-2">
                                    <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                </div>
                              </div>
                              <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                                  <div class="d-flex align-items-center">
                                      <span class="avatar avatar-lg me-2">
                                        <img src="{{ asset('') }}/assets/images/ecommerce/jpg/06.jpg"  alt="img">
                                      </span>
                                      <div>
                                        <p class="mb-1 fw-semibold fs-15">Alta max Camera</p>
                                        <span class="text-muted fs-13">02/09/2024</span>
                                      </div>
                                  </div>
                                  <span class="badge bg-danger-transparent rounded-pill">Calncelled</span>
                              </div>
                              <div class="d-flex align-items-center justify-content-between px-3 py-2">
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                        <img src="{{ asset('') }}/assets/images/faces/4.jpg" alt="">
                                    </span>Mayor Kelly
                                </div>
                                <p class="mb-0 fw-semibold">$1222.0</p>
                              </div>
                          </div>
                      </div>
                      <div class="col-xxl-3 col-xl-6">
                        <div class="rounded border card custom-card">
                          <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                              <span class="fw-semibold">ID : #139845</span>
                              <div class="dropdown ms-2">
                                <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                </ul>
                            </div>
                          </div>
                          <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                              <div class="d-flex align-items-center">
                                    <span class="avatar avatar-lg me-2">
                                    <img src="{{ asset('') }}/assets/images/ecommerce/jpg/02.jpg"  alt="img">
                                    </span>
                                    <div>
                                    <p class="mb-1 fw-semibold fs-15">Adidas Gent's Shoe</p>
                                    <span class="text-muted fs-13">10/12/2024</span>
                                    </div>
                              </div>
                              <span class="badge bg-danger-transparent rounded-pill">Calncelled</span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between px-3 py-2">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                    <img src="{{ asset('') }}/assets/images/faces/15.jpg" alt="">
                                </span>Andrew Garfield 
                            </div>
                            <p class="mb-0 fw-semibold">$299.0</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-3 col-xl-6">
                        <div class="rounded border card custom-card">
                          <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                              <span class="fw-semibold">ID : #139845</span>
                              <div class="dropdown ms-2">
                                <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                </ul>
                            </div>
                          </div>
                          <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                              <div class="d-flex align-items-center">
                                    <span class="avatar avatar-lg me-2">
                                    <img src="{{ asset('') }}/assets/images/ecommerce/jpg/03.jpg"  alt="img">
                                    </span>
                                    <div>
                                    <p class="mb-1 fw-semibold fs-15">Yellow Ladies Bag</p>
                                    <span class="text-muted fs-13">15/05/2024</span>
                                    </div>
                              </div>
                              <span class="badge bg-danger-transparent rounded-pill">Calncelled</span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between px-3 py-2">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                    <img src="{{ asset('') }}/assets/images/faces/8.jpg" alt="">
                                </span>Mirinda Hers
                            </div>
                            <p class="mb-0 fw-semibold">$512.0</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-3 col-xl-6">
                        <div class="rounded border card custom-card">
                          <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                              <span class="fw-semibold">ID : #139845</span>
                              <div class="dropdown ms-2">
                                <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                </ul>
                            </div>
                          </div>
                          <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                              <div class="d-flex align-items-center">
                                    <span class="avatar avatar-lg me-2">
                                    <img src="{{ asset('') }}/assets/images/ecommerce/jpg/05.jpg"  alt="img">
                                    </span>
                                    <div>
                                    <p class="mb-1 fw-semibold fs-15">Altra bearua</p>
                                    <span class="text-muted fs-13">11/06/2024</span>
                                    </div>
                              </div>
                              <span class="badge bg-danger-transparent rounded-pill">Calncelled</span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between px-3 py-2">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                    <img src="{{ asset('') }}/assets/images/faces/11.jpg" alt="">
                                </span>Simon Cowel
                            </div>
                            <p class="mb-0 fw-semibold">$1279.0</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-3 col-xl-6">
                        <div class="rounded border card custom-card">
                          <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                              <span class="fw-semibold">ID : #139845</span>
                              <div class="dropdown ms-2">
                                <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                </ul>
                            </div>
                          </div>
                          <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                              <div class="d-flex align-items-center">
                                    <span class="avatar avatar-lg me-2">
                                    <img src="{{ asset('') }}/assets/images/ecommerce/jpg/16.jpg"  alt="img">
                                    </span>
                                    <div>
                                    <p class="mb-1 fw-semibold fs-15">Baby Shoe</p>
                                    <span class="text-muted fs-13">11/06/2024</span>
                                    </div>
                              </div>
                              <span class="badge bg-danger-transparent rounded-pill">Calncelled</span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between px-3 py-2">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                    <img src="{{ asset('') }}/assets/images/faces/9.jpg" alt="">
                                </span>Anandh Beary
                            </div>
                            <p class="mb-0 fw-semibold">$455.0</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-3 col-xl-6">
                        <div class="rounded border card custom-card">
                          <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                              <span class="fw-semibold">ID : #139845</span>
                              <div class="dropdown ms-2">
                                <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                </ul>
                            </div>
                          </div>
                          <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                              <div class="d-flex align-items-center">
                                    <span class="avatar avatar-lg me-2">
                                    <img src="{{ asset('') }}/assets/images/ecommerce/jpg/15.jpg"  alt="img">
                                    </span>
                                    <div>
                                    <p class="mb-1 fw-semibold fs-15">Teddy bear Toy</p>
                                    <span class="text-muted fs-13">16/06/2024</span>
                                    </div>
                              </div>
                              <span class="badge bg-danger-transparent rounded-pill">Calncelled</span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between px-3 py-2">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                    <img src="{{ asset('') }}/assets/images/faces/4.jpg" alt="">
                                </span>Simon Cowel
                            </div>
                            <p class="mb-0 fw-semibold">$2563.0</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-3 col-xl-6">
                        <div class="rounded border card custom-card">
                          <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                              <span class="fw-semibold">ID : #139845</span>
                              <div class="dropdown ms-2">
                                <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                </ul>
                            </div>
                          </div>
                          <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                              <div class="d-flex align-items-center">
                                    <span class="avatar avatar-lg me-2">
                                    <img src="{{ asset('') }}/assets/images/ecommerce/jpg/13.jpg"  alt="img">
                                    </span>
                                    <div>
                                    <p class="mb-1 fw-semibold fs-15">Ladies Stylish Bag</p>
                                    <span class="text-muted fs-13">05/11/2024</span>
                                    </div>
                              </div>
                              <span class="badge bg-danger-transparent rounded-pill">Calncelled</span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between px-3 py-2">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                    <img src="{{ asset('') }}/assets/images/faces/14.jpg" alt="">
                                </span>Jack Miller
                            </div>
                            <p class="mb-0 fw-semibold">$634.0</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-3 col-xl-6">
                        <div class="rounded border card custom-card">
                          <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                              <span class="fw-semibold">ID : #139845</span>
                              <div class="dropdown ms-2">
                                <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                </ul>
                            </div>
                          </div>
                          <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                              <div class="d-flex align-items-center">
                                    <span class="avatar avatar-lg me-2">
                                    <img src="{{ asset('') }}/assets/images/ecommerce/jpg/07.jpg"  alt="img">
                                    </span>
                                    <div>
                                    <p class="mb-1 fw-semibold fs-15">Flower Pot</p>
                                    <span class="text-muted fs-13">25/04/2024</span>
                                    </div>
                              </div>
                              <span class="badge bg-danger-transparent rounded-pill">Calncelled</span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between px-3 py-2">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                    <img src="{{ asset('') }}/assets/images/faces/9.jpg" alt="">
                                </span>Mirinda Hers
                            </div>
                            <p class="mb-0 fw-semibold">$145.0</p>
                          </div>
                        </div>
                      </div> 
                  </div>
                  </div>
                  <div class="tab-pane border-0" id="shipping-pane" role="tabpanel" aria-labelledby="shipping" tabindex="0">
                  <div class="row">
                      <div class="col-xxl-3 col-xl-6">
                          <div class="rounded border card custom-card">
                              <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                                <span class="fw-semibold">ID : #139845</span>
                                <div class="dropdown ms-2">
                                    <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                </div>
                              </div>
                              <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                                  <div class="d-flex align-items-center">
                                      <span class="avatar avatar-lg me-2">
                                        <img src="{{ asset('') }}/assets/images/ecommerce/jpg/06.jpg"  alt="img">
                                      </span>
                                      <div>
                                        <p class="mb-1 fw-semibold fs-15">Alta max Camera</p>
                                        <span class="text-muted fs-13">02/09/2024</span>
                                      </div>
                                  </div>
                                  <span class="badge bg-success-transparent rounded-pill">Shipping</span>
                              </div>
                              <div class="d-flex align-items-center justify-content-between px-3 py-2">
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                        <img src="{{ asset('') }}/assets/images/faces/4.jpg" alt="">
                                    </span>Mayor Kelly
                                </div>
                                <p class="mb-0 fw-semibold">$1222.0</p>
                              </div>
                          </div>
                      </div>
                      <div class="col-xxl-3 col-xl-6">
                        <div class="rounded border card custom-card">
                          <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                              <span class="fw-semibold">ID : #139845</span>
                              <div class="dropdown ms-2">
                                <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                </ul>
                            </div>
                          </div>
                          <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                              <div class="d-flex align-items-center">
                                    <span class="avatar avatar-lg me-2">
                                    <img src="{{ asset('') }}/assets/images/ecommerce/jpg/02.jpg"  alt="img">
                                    </span>
                                    <div>
                                    <p class="mb-1 fw-semibold fs-15">Adidas Gent's Shoe</p>
                                    <span class="text-muted fs-13">10/12/2024</span>
                                    </div>
                              </div>
                              <span class="badge bg-success-transparent rounded-pill">Shipping</span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between px-3 py-2">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                    <img src="{{ asset('') }}/assets/images/faces/15.jpg" alt="">
                                </span>Andrew Garfield 
                            </div>
                            <p class="mb-0 fw-semibold">$299.0</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-3 col-xl-6">
                        <div class="rounded border card custom-card">
                          <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                              <span class="fw-semibold">ID : #139845</span>
                              <div class="dropdown ms-2">
                                <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                </ul>
                            </div>
                          </div>
                          <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                              <div class="d-flex align-items-center">
                                    <span class="avatar avatar-lg me-2">
                                    <img src="{{ asset('') }}/assets/images/ecommerce/jpg/03.jpg"  alt="img">
                                    </span>
                                    <div>
                                    <p class="mb-1 fw-semibold fs-15">Yellow Ladies Bag</p>
                                    <span class="text-muted fs-13">15/05/2024</span>
                                    </div>
                              </div>
                              <span class="badge bg-success-transparent rounded-pill">Shipping</span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between px-3 py-2">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                    <img src="{{ asset('') }}/assets/images/faces/8.jpg" alt="">
                                </span>Mirinda Hers
                            </div>
                            <p class="mb-0 fw-semibold">$512.0</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-3 col-xl-6">
                        <div class="rounded border card custom-card">
                          <div class="px-3 py-2 border-b bg-light d-flex align-items-center justify-content-between">
                              <span class="fw-semibold">ID : #139845</span>
                              <div class="dropdown ms-2">
                                <button aria-label="button" class="btn btn-icon btn-primary-light my-1 btn-wave waves-light btn-sm waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                </ul>
                            </div>
                          </div>
                          <div class="border-bottom d-flex align-items-center justify-content-between p-3">
                              <div class="d-flex align-items-center">
                                    <span class="avatar avatar-lg me-2">
                                    <img src="{{ asset('') }}/assets/images/ecommerce/jpg/05.jpg"  alt="img">
                                    </span>
                                    <div>
                                    <p class="mb-1 fw-semibold fs-15">Altra bearua</p>
                                    <span class="text-muted fs-13">11/06/2024</span>
                                    </div>
                              </div>
                              <span class="badge bg-success-transparent rounded-pill">Shipping</span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between px-3 py-2">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-sm me-2 avatar-rounded p-1 bg-light">
                                    <img src="{{ asset('') }}/assets/images/faces/11.jpg" alt="">
                                </span>Simon Cowel
                            </div>
                            <p class="mb-0 fw-semibold">$1279.0</p>
                          </div>
                        </div>
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