@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Page Header -->
      <div
          class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Order Details</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Order Details</li>
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
          <div class="col-xl-8">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="card custom-card">
                          <div class="card-header d-flex justify-content-between">
                              <div class="card-title">
                                  Item Summery
                              </div>
                              <div class="d-flex flex-wrap gap-2"> 
                                  <div> 
                                      <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example"> 
                                  </div> 
                                  <div class="dropdown"> 
                                      <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i> 
                                      </a> 
                                      <ul class="dropdown-menu" role="menu"> 
                                          <li><a class="dropdown-item" href="javascript:void(0);">Low Price</a></li> 
                                          <li><a class="dropdown-item" href="javascript:void(0);">High Price</a></li> 
                                          <li><a class="dropdown-item" href="javascript:void(0);">Quantity</a></li> 
                                      </ul> 
                                  </div> 
                              </div>
                          </div>
                          <div class="card-body p-0">
                              <div class="table-responsive">
                                  <table class="table text-nowrap">
                                      <thead>
                                          <tr>
                                              <th scope="col">Item</th>
                                              <th scope="col">Category</th>
                                              <th scope="col">Tracking ID</th>
                                              <th scope="col">Price</th>
                                              <th scope="col">Color</th>
                                              <th scope="col">Quantity</th>
                                              <th scope="col">Total Price</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="me-3">
                                                          <span class="avatar avatar-lg bg-light">
                                                              <img src="{{ asset('') }}/assets/images/ecommerce/jpg/3.jpg"
                                                                  alt="">
                                                          </span>
                                                      </div>
                                                      <div>
                                                          <div class="mb-1 fs-14 fw-semibold">
                                                              <a href="javascript:void(0);">Alarm Clock</a>
                                                          </div>
                                                          <div class="mb-1">
                                                              <span
                                                                  class="text-muted">Dolce & Gabbana</span>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td>
                                                  <span class="">Electronics</span>
                                              </td>
                                              <td><a href="javascript:void(0);"
                                                      class="text-primary">SPK1218153635</a></td>
                                              <td>
                                                  <span class="fs-15 fw-semibold">$1,249</span>
                                              </td>
                                              <td>
                                                  <span class="badge bg-primary-transparent">Navy Blue</span>
                                              </td>
                                              <td>1</td>
                                              <td>$1,249</td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="me-3">
                                                          <span class="avatar avatar-lg bg-light">
                                                              <img src="{{ asset('') }}/assets/images/ecommerce/jpg/9.jpg"
                                                                  alt="">
                                                          </span>
                                                      </div>
                                                      <div>
                                                          <div class="mb-1 fs-14 fw-semibold">
                                                              <a href="javascript:void(0);">Ladies Stylish Shoe</a>
                                                          </div>
                                                          <div class="mb-1">
                                                              <span
                                                                  class="text-muted">Adidas</span>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </td> 
                                              <td>
                                                  <span class="">Footware</span>
                                              </td>
                                              <td><a href="javascript:void(0);"
                                                      class="text-primary">SPK3789423789</a></td>
                                              <td>
                                                  <span class="fs-15 fw-semibold">$499</span>
                                              </td>
                                              <td>
                                                  <span class="badge bg-secondary-transparent">Orange</span>
                                              </td>
                                              <td>2</td>
                                              <td>$998</td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="me-3">
                                                          <span class="avatar avatar-lg bg-light">
                                                              <img src="{{ asset('') }}/assets/images/ecommerce/jpg/2.jpg"
                                                                  alt="">
                                                          </span>
                                                      </div>
                                                      <div>
                                                          <div class="mb-1 fs-14 fw-semibold">
                                                              <a href="javascript:void(0);">
                                                                  ComfortSeat Wooden Sofa</a>
                                                          </div>
                                                          <div class="mb-1">
                                                              <span
                                                                  class="text-muted">Reformation</span>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td>
                                                  <span class="">Furniture</span>
                                              </td>
                                              <td><a href="javascript:void(0);"
                                                      class="text-primary">SPK1120324532</a></td>
                                              <td>
                                                  <span class="fs-15 fw-semibold">$799</span>
                                              </td>
                                              <td>
                                                  <span class="badge bg-success-transparent">Light Green</span>
                                              </td>
                                              <td>1</td>
                                              <td>$799</td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="me-3">
                                                          <span class="avatar avatar-lg bg-light">
                                                              <img src="{{ asset('') }}/assets/images/ecommerce/jpg/6.jpg"
                                                                  alt="">
                                                          </span>
                                                      </div>
                                                      <div>
                                                          <div class="mb-1 fs-14 fw-semibold">
                                                              <a href="javascript:void(0);">
                                                                  ComfortWalk Ultra Men's Shoe</a>
                                                          </div>
                                                          <div class="mb-1">
                                                              <span
                                                                  class="text-muted">Urban Outfitters</span>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td>
                                                  <span class="">Footware</span>
                                              </td>
                                              <td><a href="javascript:void(0);"
                                                      class="text-primary">SPK1120324532</a></td>
                                              <td>
                                                  <span class="fs-15 fw-semibold">$799</span>
                                              </td>
                                              <td>
                                                  <span class="badge bg-info-transparent">Purple</span>
                                              </td>
                                              <td>1</td>
                                              <td>$799</td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="me-3">
                                                          <span class="avatar avatar-lg bg-light">
                                                              <img src="{{ asset('') }}/assets/images/ecommerce/jpg/8.jpg"
                                                                  alt="">
                                                          </span>
                                                      </div>
                                                      <div>
                                                          <div class="mb-1 fs-14 fw-semibold">
                                                              <a href="javascript:void(0);">
                                                                Red Flower Pot</a>
                                                          </div>
                                                          <div class="mb-1">
                                                          <span
                                                                  class="text-muted">Patagonia</span>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td>
                                                  <span class="">Decoration</span>
                                              </td>
                                              <td><a href="javascript:void(0);"
                                                      class="text-primary">SPK1120324532</a></td>
                                              <td>
                                                  <span class="fs-15 fw-semibold">$799</span>
                                              </td>
                                              <td>
                                                  <span class="badge bg-warning-transparent">Yellow</span>
                                              </td>
                                              <td>1</td>
                                              <td>$799</td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                          <div class="card-footer border-top-0">
                              <div class="btn-list float-end">
                                  <button class="btn btn-secondary btn-wave btn-sm"
                                      onclick="javascript:window.print();"><i
                                          class="ri-printer-line me-1 align-middle d-inline-block"></i>Print</button>
                                  <button class="btn btn-primary btn-wave btn-sm"><i
                                          class="ri-share-forward-line me-1 align-middle d-inline-block"></i>Share
                                      Details</button>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xxl-4">
                      <div class="card custom-card">
                          <div class="card-body p-0">
                              <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
                                  <span class="fs-17 fw-semibold">Order Summary</span>
                                  <span class="avatar avatar-sm bg-light border"><i
                                          class="ri-box-3-line text-default fs-18"></i></span>
                              </div>
                              <div class="table-responsive">
                                  <table class="table">
                                      <tbody>
                                          <tr>
                                              <td>
                                                  <div class="fw-semibold">Total Items :</div>
                                              </td>
                                              <td class="text-end"> 06 </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="fw-semibold">Applied Coupon :</div>
                                              </td>
                                              <td class="text-end"> <span class="badge bg-success-transparent">SP0578A</span>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="fw-semibold">Delivery Fees :</div>
                                              </td>
                                              <td class="text-end"> <span class="text-danger">+$29</span> </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="fw-semibold">Sub Total :</div>
                                              </td>
                                              <td class="text-end"> <span class="fs-14 fw-medium">$3,799</span> </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="fw-semibold">Total Price :</div>
                                              </td>
                                              <td class="text-end"> <span class="fs-16 fw-semibold">$3,129</span> </td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xxl-4">
                      <div class="card custom-card">
                          <div class="card-body p-0">
                              <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
                                  <span class="fs-17 fw-semibold">Delivery Address</span>
                                  <span class="avatar avatar-sm bg-light border"><i class="ri-map-pin-user-line text-default fs-18"></i></span>
                              </div>
                              <div class="table-responsive">
                                  <table class="table table-borderless">
                                      <tbody>
                                          <tr>
                                              <td>
                                                  <div class="fw-semibold">Adress Line :</div>
                                              </td>
                                              <td class="text-end"> 14 Angle colony </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="fw-semibold">Flat/Building Name :</div>
                                              </td>
                                              <td class="text-end"> <span class="fs-14 fw-medium">srinivas Nivas</span>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="fw-semibold">District Name :</div>
                                              </td>
                                              <td class="text-end"> <span class="fs-14 fw-medium">Hyderabad</span> </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="fw-semibold">State Name :</div>
                                              </td>
                                              <td class="text-end"> <span class="fs-14 fw-medium">Telangana</span> </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="fw-semibold">Pincode :</div>
                                              </td>
                                              <td class="text-end"> <span class="fs-14 fw-medium">535124</span> </td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xxl-4">
                      <div class="card custom-card">
                          <div class="card-body p-0">
                              <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
                                  <span class="fs-17 fw-semibold">Customer Details</span>
                                  <span class="avatar avatar-sm bg-light border"><i class="ri-profile-line text-default fs-18"></i></span>
                              </div>
                              <div class="table-responsive">
                                  <table class="table table-borderless">
                                      <tbody>
                                          <tr>
                                              <td>
                                                  <div class="fw-semibold">Full Name :</div>
                                              </td>
                                              <td class="text-end"> Lucas Hayes  </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="fw-semibold">Email Id :</div>
                                              </td>
                                              <td class="text-end"> <span class="fs-14 fw-medium text-primary text-decoration-underline">lucas123@gmail.com</span>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="fw-semibold">Phone Number :</div>
                                              </td>
                                              <td class="text-end"> <span class="fs-14 fw-medium">+12764845456</span> </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="fw-semibold">Available Time :</div>
                                              </td>
                                              <td class="text-end"> <span class="fs-14 fw-medium">9:00 AM - 6:00 PM</span> </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="fw-semibold">Billing Adress :</div>
                                              </td>
                                              <td class="text-end"> <span class="fs-14 fw-medium">sr nagar,Vizag,535124</span> </td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xl-4">
              <div class="card custom-card">
                  <div class="card-header justify-content-between">
                      <div class="card-title">
                          Order Tracking
                      </div>
                      <p class="mb-0">
                          <span class="">Order ID :</span>
                          <span class="text-primary">#115876</span>
                      </p>
                  </div>
                  <div class="card-body">
                      <div class="row border-bottom mb-2">
                          <div class="col-md-12">
                              <p class="mb-1 fs-17 fw-semibold">Out For Delivery</p>
                              <p class="mb-3">
                                  <span class="text-muted">Estimated Delivery Date :</span>
                                  <span class="text-default fw-semibold">Monday, Jun 20</span>
                              </p>
                              <div class="p-3 rounded border mb-3">
                                  <div class="d-flex">
                                      <div class="progress progress-sm mb-3 w-25" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                          <div class="progress-bar" style="width: 100%"></div>
                                      </div>
                                      <div class="progress progress-sm mb-3 w-25" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                          <div class="progress-bar bg-secondary" style="width: 100%"></div>
                                      </div>
                                      <div class="progress progress-sm mb-3 w-25" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                          <div class="progress-bar bg-success" style="width: 100%"></div>
                                      </div>
                                      <div class="progress progress-sm mb-3 w-25" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                          <div class="progress-bar bg-info" style="width: 50%"></div>
                                      </div>
                                  </div>
                                  <div class="row gy-3">
                                      <div class="col-xl-6">
                                          <span class="mb-0 me-1 project-category category1">Preparing</span>
                                          <span class="text-success fw-semibold fs-13">
                                              <span class="">(Completed)</span>
                                          </span>
                                      </div>
                                      <div class="col-xl-6">
                                          <span class="mb-0 me-1 project-category category2">Pickup</span>
                                          <span class="text-success fw-semibold fs-13">
                                              <span class="">(Completed)</span>
                                          </span>
                                      </div>
                                      <div class="col-xl-6">
                                          <span class="mb-0 me-1 project-category category3">In Transit</span>
                                          <span class="text-success fw-semibold fs-13">
                                              <span class="">(Completed)</span>
                                          </span>
                                      </div>
                                      <div class="col-xl-6">
                                          <span class="mb-0 me-1 project-category category4">Delivered</span>
                                          <span class="text-info fw-semibold fs-13">
                                              <span class="">(Pending)</span>
                                          </span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <p class="mb-1 fs-17 fw-semibold">Shipment Progress :</p>
                      <div class="order-track">
                          <div class="accordion mb-2 mt-3" id="basicAccordion">
                              <div class="accordion-item border-0 bg-transparent">
                                  <div class="accordion-header" id="headingOne">
                                      <a class="px-0 pt-0" href="javascript:void(0)" role="button"
                                          data-bs-toggle="collapse" data-bs-target="#basicOne"
                                          aria-expanded="true" aria-controls="basicOne">
                                          <div class="d-flex align-items-center mb-0 lh-1">
                                              <div
                                                  class="me-2 p-1 d-flex align-items-center justify-contet-center bg-primary-transparent rounded-pill">
                                                  <i class="ri-circle-fill fs-10"></i>
                                              </div>
                                              <div class="flex-fill ps-3">
                                                  <p class="fw-semibold mb-1 fs-15">June, 29 11:30 AM </p>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                  <div id="basicOne" class="accordion-collapse collapse show border-top-0"
                                      aria-labelledby="headingOne" data-bs-parent="#basicAccordion">
                                      <div class="accordion-body pt-0 ps-5">
                                          <div class="">
                                              <p class="mb-0">Label Created At <a
                                                      href="javascript:void(0);"
                                                      class="font-weight-semibold text-primary">Hyderabad Office </a><span class="text-default fw-semibold">SDNWS-NSW</span></p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="accordion mb-2" id="basicAccordion1">
                              <div class="accordion-item border-0 bg-transparent">
                                  <div class="accordion-header" id="headingTwo">
                                      <a class="px-0 pt-0" href="javascript:void(0)" role="button"
                                          data-bs-toggle="collapse" data-bs-target="#basicTwo"
                                          aria-expanded="true" aria-controls="basicTwo">
                                          <div class="d-flex align-items-center mb-0 lh-1">
                                              <div
                                                  class="me-2 p-1 d-flex align-items-center justify-contet-center bg-primary-transparent rounded-pill">
                                                  <i class="ri-circle-fill fs-10"></i>
                                              </div>
                                              <div class="flex-fill ps-3">
                                                  <p class="fw-semibold mb-1 fs-15">June, 30 12:43 AM</p>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                  <div id="basicTwo" class="accordion-collapse show collapse border-top-0"
                                      aria-labelledby="headingTwo" data-bs-parent="#basicAccordion1">
                                      <div class="accordion-body pt-0 ps-5">
                                          <div class="">
                                              <p class="mb-0">Arrived at Hyderabad Local Fecility <span
                                                      class="fw-semibold text-default">- SUNDAY LOCAL CENTER</span>
                                              </p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="accordion mb-2" id="basicAccordion5">
                              <div class="accordion-item border-0 bg-transparent">
                                  <div class="accordion-header" id="headingFive">
                                      <a class="px-0 pt-0" href="javascript:void(0)" role="button"
                                          data-bs-toggle="collapse" data-bs-target="#basicTwo"
                                          aria-expanded="true" aria-controls="basicTwo">
                                          <div class="d-flex align-items-center mb-0 lh-1">
                                              <div
                                                  class="me-2 p-1 d-flex align-items-center justify-contet-center bg-primary-transparent rounded-pill">
                                                  <i class="ri-circle-fill fs-10"></i>
                                              </div>
                                              <div class="flex-fill ps-3">
                                                  <p class="fw-semibold mb-1 fs-15">June, 31 10:03 AM</p>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                  <div id="basicFive" class="accordion-collapse show collapse border-top-0"
                                      aria-labelledby="headingTwo" data-bs-parent="#basicAccordion5">
                                      <div class="accordion-body pt-0 ps-5">
                                          <div class="">
                                              <p class="mb-0">Product Taken By Delivery Agent <span
                                                      class="fw-semibold text-default">- Mr.Sudheerjan</span>
                                              </p>
                                              <span class="text-default">Ph No: +8736497847</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="accordion mb-2" id="basicAccordion2">
                              <div class="accordion-item border-0 bg-transparent">
                                  <div class="accordion-header" id="headingThree">
                                      <a class="px-0 pt-0" href="javascript:void(0)" role="button"
                                          data-bs-toggle="collapse" data-bs-target="#basicThree"
                                          aria-expanded="true" aria-controls="basicThree">
                                          <div class="d-flex align-items-center  lh-1">
                                              <div
                                                  class="me-2 p-1 d-flex align-items-center justify-contet-center bg-primary-transparent rounded-pill">
                                                  <i class="ri-circle-fill fs-10"></i>
                                              </div>
                                              <div class="flex-fill ps-3">
                                                  <p class="fw-semibold mb-1 fs-15">July, 5 12:43 AM</p>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                  <div id="basicThree" class="accordion-collapse show collapse border-top-0"
                                      aria-labelledby="headingThree" data-bs-parent="#basicAccordion2">
                                      <div class="accordion-body pt-0 ps-5">
                                          <div class="text-default mb-3">
                                              <p class="mb-0">Arrived at Regional Hub <span
                                                      class="font-weight-semibold">Phoenix, AZ</span></p>
                                              <span class="text-muted fs-13">Hyedrabad</span>
                                          </div>
                                          <div class="text-default mb-3">
                                              <p class="mb-0">Departed from FedEx Distribution Center<span
                                                      class="font-weight-semibold">Memphis, TN</span> </p>
                                              <span class="text-muted fs-13">Hyderbad</span>
                                          </div>
                                          <div class="text-default">
                                              <p class="mb-0">Arrived Salisnagar Near to your location </p>
                                              <span class="text-muted fs-13">Hyderabad</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="accordion mb-3" id="basicAccordion3">
                              <div class="accordion-item border-0 bg-transparent next-step">
                                  <div class="accordion-header" id="headingFour">
                                      <a class="collapsed px-0 pt-0" href="javascript:void(0)" role="button"
                                          data-bs-toggle="collapse" data-bs-target="#basicFour"
                                          aria-expanded="true" aria-controls="basicFour">
                                          <div class="d-flex mb-2 lh-1">
                                              <div
                                                  class="me-2 p-1 d-flex align-items-center justify-contet-center bg-primary-transparent rounded-pill">
                                                  <i class="ri-circle-fill fs-10"></i>
                                              </div>
                                              <div class="flex-fill ps-3">
                                                  <p class="fw-semibold mb-0 fs-15">Out For Delivery</p>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                  <div id="basicFour" class="accordion-collapse show collapse border-top-0"
                                      aria-labelledby="headingFour" data-bs-parent="#basicAccordion3">
                                      <div class="accordion-body pt-0 ps-5">
                                          <div class="text-default">
                                              <p class="mb-2">Your order is out for devlivery</p>
                                              <span class="text-muted fs-13">Nov 03, 2024, 15:36
                                                  (expected)</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="accordion" id="basicAccordion4">
                              <div class="accordion-item border-0 bg-transparent next-step">
                                  <div class="accordion-header" id="headingsix">
                                      <a class="collapsed px-0 pt-0" href="javascript:void(0)" role="button"
                                          data-bs-toggle="collapse" aria-expanded="true">
                                          <div class="d-flex mb-2 lh-1">
                                              <div
                                              class="me-2 p-1 d-flex align-items-center justify-contet-center bg-gray-200 text-muted rounded-pill">
                                              <i class="ri-circle-fill fs-10"></i>
                                          </div>
                                              <div class="flex-fill d-flex justify-content-between align-items-center ps-3">
                                                  <p class="fw-semibold mb-0 fs-15">Delivered</p>
                                              </div>
                                          </div>
                                      </a>
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