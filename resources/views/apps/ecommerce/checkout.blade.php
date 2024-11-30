@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Page Header -->
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Checkout</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Checkout</li>
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
          <div class="col-xxl-9">
              <div class="card custom-card">
                  <div class="card-body p-0 product-checkout">
                      <ul class="nav nav-tabs justify-content-center py-3 d-sm-flex d-grid gap-2" id="myTab2"
                          role="tablist">
                          <li class="nav-item me-0" role="presentation">
                              <button class="nav-link me-4 py-2 px-4 rounded-pill bg-light w-sm-auto w-100 mb-sm-0 mb-2 active" id="order-tab"
                                  data-bs-toggle="tab" data-bs-target="#order-tab-pane" type="button"
                                  role="tab" aria-controls="order-tab"
                                  aria-selected="true">Shipping</button>
                          </li>
                          <li class="nav-item me-0" role="presentation">
                              <button class="nav-link me-4 py-2 px-4 border rounded-pill bg-light w-sm-auto w-100 mb-sm-0 mb-2" id="confirmed-tab"
                                  data-bs-toggle="tab" data-bs-target="#confirm-tab-pane" type="button"
                                  role="tab" aria-controls="confirmed-tab" aria-selected="false">Personal
                                  Details</button>
                          </li>
                          <li class="nav-item me-0" role="presentation">
                              <button class="nav-link me-4 py-2 px-4 border rounded-pill bg-light w-sm-auto w-100 mb-sm-0 mb-2" id="shipped-tab"
                                  data-bs-toggle="tab" data-bs-target="#shipped-tab-pane" type="button"
                                  role="tab" aria-controls="shipped-tab"
                                  aria-selected="false">Payment</button>
                          </li>
                          <li class="nav-item me-0" role="presentation">
                              <button class="nav-link  py-2 px-4 border rounded-pill bg-light w-sm-auto w-100 mb-sm-0 mb-2" id="delivered-tab"
                                  data-bs-toggle="tab" data-bs-target="#delivery-tab-pane" type="button"
                                  role="tab" aria-controls="delivered-tab" aria-selected="false"
                                  tabindex="-1">Confirmation</button>
                          </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active border-0 p-0" id="order-tab-pane"
                              role="tabpanel" aria-labelledby="order-tab-pane" tabindex="0">
                              <div class="p-4">
                                  <div
                                      class="fs-15 fw-semibold d-sm-flex d-block align-items-center justify-content-between mb-3">
                                      <div>Shipping Address :</div>
                                      <div class="mt-sm-0 mt-2">
                                          <button class="btn btn-secondary btn-sm" data-bs-toggle="modal"
                                              data-bs-target="#modal-new-address"><i
                                                  class="ri-add-line me-1 align-middle fs-14 fw-semibold"></i>Add
                                              New Address</button>
                                              <div class="modal fade" id="modal-new-address" tabindex="-1"
                                              aria-labelledby="modal-new-address" aria-hidden="true">
                                              <div class="modal-dialog modal-lg modal-dialog-centered">
                                                  <div class="modal-content">
                                                      <div class="modal-header">
                                                          <h6 class="modal-title"
                                                              id="staticBackdropLabel">New Address
                                                          </h6>
                                                          <button type="button" class="btn-close"
                                                              data-bs-dismiss="modal"
                                                              aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">
                                                          <div class="row gy-3">
                                                              <div class="col-xl-6">
                                                                  <label for="fullname-new"
                                                                      class="form-label">Full Name</label>
                                                                  <input type="text" class="form-control"
                                                                      id="fullname-new"
                                                                      placeholder="Full Name">
                                                              </div>
                                                              <div class="col-xl-6">
                                                                  <label for="email-new"
                                                                      class="form-label">Email</label>
                                                                  <input type="email" class="form-control"
                                                                      id="email-new" placeholder="email">
                                                              </div>
                                                              <div class="col-xl-6">
                                                                  <label for="phonenumber-new"
                                                                      class="form-label">Phone
                                                                      Number</label>
                                                                  <input type="number"
                                                                      class="form-control"
                                                                      id="phonenumber-new"
                                                                      placeholder="Phone">
                                                              </div>
                                                              <div class="col-xl-6">
                                                                  <label for="address-new"
                                                                      class="form-label">Address</label>
                                                                  <input type="text" class="form-control"
                                                                      id="address-new"
                                                                      placeholder="Address">
                                                              </div>
                                                              <div class="col-xl-12">
                                                                  <div class="row">
                                                                      <div class="col-xl-3">
                                                                          <label for="pincode-new"
                                                                              class="form-label">Pincode</label>
                                                                          <input type="number"
                                                                              class="form-control"
                                                                              id="pincode-new"
                                                                              placeholder="pincode">
                                                                      </div>
                                                                      <div class="col-xl-3">
                                                                          <label for="city-new"
                                                                              class="form-label">City</label>
                                                                          <input type="text"
                                                                              class="form-control"
                                                                              id="city-new"
                                                                              placeholder="City">
                                                                      </div>
                                                                      <div class="col-xl-3">
                                                                          <label for="state-new"
                                                                              class="form-label">State</label>
                                                                          <input type="text"
                                                                              class="form-control"
                                                                              id="state-new"
                                                                              placeholder="State">
                                                                      </div>
                                                                      <div class="col-xl-3">
                                                                          <label for="country-new"
                                                                              class="form-label">Country</label>
                                                                          <input type="text"
                                                                              class="form-control"
                                                                              id="country-new"
                                                                              placeholder="Country">
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="modal-footer">
                                                          <button type="button" class="btn btn-light"
                                                              data-bs-dismiss="modal">Close</button>
                                                          <button type="button"
                                                              class="btn btn-primary">Save
                                                              Address</button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="card custom-card border card-style-6">
                                              <div class="card-body p-3">
                                                  <div class="d-flex align-items-center justify-content-between mb-3">
                                                      <div class="flex-grow-1">
                                                          <div class="d-flex align-items-center gap-2 card-style-6-avatar">
                                                              <div class="min-w-fit-content">
                                                                  <span class="avatar rounded-circle"><i class="ti ti-home fs-16"></i></span>
                                                              </div>
                                                              <h6 class="fs-16 mb-0 fw-semibold">Home</h6>
                                                          </div>
                                                      </div>
                                                      <div class="min-w-fit-content">
                                                          <div class="d-flex gap-2">
                                                              <input class="form-check-input" type="radio" id="address1" name="default-address" checked="">
                                                              <label class="form-check-label cursor-pointer" for="address1">Default</label>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <h6 class="mb-1 fw-semibold">Laura Benson</h6>
                                                  <p class="mb-1 fw-500 fs-13">laura.benson@example.com</p>
                                                  <p class="mb-2 fw-500 fs-13">+1-202-555-0147</p>
                                                  <p class="mb-0">
                                                      Elm Tower, 7th Floor, Suite 22, Maple Avenue, Brookville, NY 11545, United States of America
                                                  </p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="card custom-card border card-style-6">
                                              <div class="card-body p-3">
                                                  <div class="d-flex align-items-center justify-content-between mb-3">
                                                      <div class="flex-grow-1">
                                                          <div class="d-flex align-items-center gap-2 card-style-6-avatar">
                                                              <div class="min-w-fit-content">
                                                                  <span class="avatar rounded-circle"><i class="ti ti-briefcase fs-16"></i></span>
                                                              </div>
                                                              <h6 class="fs-16 mb-0 fw-semibold">Work</h6>
                                                          </div>
                                                      </div>
                                                      <div class="min-w-fit-content">
                                                          <div class="d-flex gap-2">
                                                              <input class="form-check-input" type="radio" id="address2" name="default-address">
                                                              <label class="form-check-label cursor-pointer" for="address2">Default</label>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <h6 class="mb-1 fw-semibold">Laura Benson</h6>
                                                  <p class="mb-1 fw-500 fs-13">laura.benson@example.com</p>
                                                  <p class="mb-2 fw-500 fs-13"> +44-20-7946-0958</p>
                                                  <p class="mb-0">
                                                      Horizon Plaza, 5th Floor, Office 12, Cherry Creek, Denver, CO 80206, United States of America
                                                  </p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row gy-3">
                                      <p class="fs-15 fw-semibold mb-1">Delivery Methods :</p>
                                      <div class="col-xl-4">
                                          <div class="form-check shipping-method-container mb-0">
                                              <input id="shipping-method1" name="shipping-methods"
                                                  type="radio" class="form-check-input" checked="">
                                              <div class="form-check-label">
                                                  <div
                                                      class="d-sm-flex align-items-center justify-content-between">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md">
                                                              <img src="{{ asset('') }}/assets/images/ecommerce/png/21.png"
                                                                  alt="">
                                                          </span>
                                                      </div>
                                                      <div class="shipping-partner-details me-sm-5 me-0">
                                                          <p class="mb-0 fw-semibold">DTP Deliveries</p>
                                                          <p class="text-muted fs-11 mb-0">Expected By
                                                              24,Nov 2022</p>
                                                      </div>
                                                      <div class="fw-semibold me-sm-5 me-0">
                                                          $9.99
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-xl-4">
                                          <div class="form-check shipping-method-container mb-0">
                                              <input id="shipping-method2" name="shipping-methods"
                                                  type="radio" class="form-check-input">
                                              <div class="form-check-label">
                                                  <div
                                                      class="d-sm-flex align-items-center justify-content-between">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md">
                                                              <img src="{{ asset('') }}/assets/images/ecommerce/png/22.png"
                                                                  alt="">
                                                          </span>
                                                      </div>
                                                      <div class="shipping-partner-details me-sm-5 me-0">
                                                          <p class="mb-0 fw-semibold">UPS Deliveries</p>
                                                          <p class="text-muted fs-11 mb-0">Expected By
                                                              22,Nov 2022</p>
                                                      </div>
                                                      <div class="fw-semibold me-sm-5 me-0">
                                                          $10.49
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-xl-4">
                                          <div class="form-check shipping-method-container mb-0">
                                              <input id="shipping-method3" name="shipping-methods"
                                                  type="radio" class="form-check-input">
                                              <div class="form-check-label">
                                                  <div
                                                      class="d-sm-flex align-items-center justify-content-between">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md">
                                                              <img src="{{ asset('') }}/assets/images/ecommerce/png/25.png"
                                                                  alt="">
                                                          </span>
                                                      </div>
                                                      <div class="shipping-partner-details me-sm-5 me-0">
                                                          <p class="mb-0 fw-semibold">FedEx Fast
                                                              Deliveries</p>
                                                          <p class="text-muted fs-11 mb-0">Expected
                                                              Tomorrow</p>
                                                      </div>
                                                      <div class="fw-semibold me-sm-5 me-0">
                                                          $12.29
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row gy-3 mt-2">
                                      <div class="col-xl-6">
                                          <p class="fs-15 fw-semibold mb-3">Gift Option :</p>
                                          <select class="form-control" data-trigger
                                              name="choices-single-default" id="choices-single-default">
                                              <option value="">Free Delivery</option>
                                              <option value="Choice 1">Custom Gift Set</option>
                                              <option value="Choice 2">Sweater Subscription</option>
                                              <option value="Choice 3">Wrapped with Elegance</option>
                                          </select>
                                      </div>
                                      <div class="col-xl-6">
                                          <p class="fs-15 fw-semibold mb-3">Additional Services :</p>
                                          <select class="form-control" data-trigger
                                              name="choices-single-default1" id="choices-single-default1">
                                              <option value="">Care+Package($10.00)</option>
                                              <option value="Choice 1">Environmental Friendly($2.00)</option>
                                              <option value="Choice 2">Golden Guard($5.00)</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                              <div
                                  class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-end">
                                  <button class="btn btn-primary"
                                      id="personal-details-trigger">Personal Details<i
                                          class="ri-user-3-line ms-2 align-middle d-inline-block"></i></button>
                              </div>
                          </div>
                          <div class="tab-pane fade border-0 p-0" id="confirm-tab-pane" role="tabpanel"
                              aria-labelledby="confirm-tab-pane" tabindex="0">
                              <div class="p-4">
                                  <div
                                      class="fs-15 fw-semibold d-sm-flex d-block align-items-center justify-content-between mb-3">
                                      <div>Personal Details :</div>
                                  </div>
                                  <div class="row gy-4">
                                      <div class="col-xl-6">
                                          <label for="firstname-personal" class="form-label">First
                                              Name</label>
                                          <input type="text" class="form-control" id="firstname-personal"
                                              placeholder="First Name" value="Meisha">
                                      </div>
                                      <div class="col-xl-6">
                                          <label for="lastname-personal" class="form-label">Last
                                              Name</label>
                                          <input type="text" class="form-control" id="lastname-personal"
                                              placeholder="Last Name" value="Kerr">
                                      </div>
                                      <div class="col-xl-6">
                                          <label for="email-personal" class="form-label">Email</label>
                                          <input type="email" class="form-control" id="email-personal"
                                              placeholder="xyz@example.com" value="">
                                      </div>
                                      <div class="col-xl-6">
                                          <label for="phoneno-personal" class="form-label">Phone
                                              no</label>
                                          <input type="text" class="form-control" id="phoneno-personal"
                                              placeholder="(555)-555-1234" value="">
                                      </div>
                                      <div class="col-xl-12">
                                          <label for="text-area" class="form-label">Address</label>
                                          <textarea class="form-control" id="text-area"
                                              rows="4"></textarea>
                                          <div class="form-check mt-1">
                                              <input
                                                  class="form-check-input"
                                                  type="checkbox" value="" id="invalidCheck1" required=""
                                                  checked="">
                                              <label class="form-check-label text-muted fs-12"
                                                  for="invalidCheck1">
                                                  Same as Shipping Address Address ?
                                              </label>
                                          </div>
                                      </div>
                                      <div class="col-xl-3">
                                          <label for="pincode-personal" class="form-label">Pincode</label>
                                          <input type="text" class="form-control" id="pincode-personal"
                                              placeholder="200017" value="">
                                      </div>
                                      <div class="col-xl-3">
                                          <label for="choices-single-default3"
                                              class="form-label">City</label>
                                          <select class="form-control" data-trigger
                                              name="choices-single-default3" id="choices-single-default3">
                                              <option value="Choice 1">Georgetown</option>
                                              <option value="Choice 2">Alexandria</option>
                                              <option value="Choice 3">Rockville</option>
                                              <option value="Choice 4">Frederick</option>
                                          </select>
                                      </div>
                                      <div class="col-xl-3">
                                          <label for="choices-single-default4"
                                              class="form-label">State</label>
                                          <select class="form-control" data-trigger
                                              name="choices-single-default4" id="choices-single-default4">
                                              <option value="Choice 1">Washington,D.C</option>
                                              <option value="Choice 2">California</option>
                                              <option value="Choice 3">Texas</option>
                                              <option value="Choice 4">Alaska</option>
                                          </select>
                                      </div>
                                      <div class="col-xl-3">
                                          <label for="country-personal" class="form-label">Country</label>
                                          <input type="text" class="form-control" id="country-personal"
                                              placeholder="Country" value="USA">
                                      </div>
                                  </div>
                              </div>
                              <div
                                  class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-between">
                                  <button class="btn btn-success mb-2 me-2" id="back-shipping-trigger"><i
                                          class="ri-truck-line me-2 align-middle d-inline-block"></i>Back
                                      To Shipping</button>
                                  <button class="btn btn-primary mt-sm-0 mb-2"
                                      id="payment-trigger">Continue To Payment<i
                                          class="bi bi-credit-card-2-front align-middle ms-2 d-inline-block"></i></button>
                              </div>
                          </div>
                          <div class="tab-pane fade border-0 p-0" id="shipped-tab-pane" role="tabpanel"
                              aria-labelledby="shipped-tab-pane" tabindex="0">
                              <div class="p-4">
                                  <div
                                      class="fs-15 fw-semibold d-sm-flex d-block align-items-center justify-content-between mb-3">
                                      <div>Payment Details :</div>
                                  </div>
                                  <div class="row">
                                      <div class="col-xl-12">
                                          <div class="row gy-3 mb-3">
                                              <div class="col-xl-12">
                                                    <div class="row gy-3">
                                                        <div class="col-xl-3">
                                                            <div class="p-3 border d-flex gap-2 align-items-center rounded flex-wrap payment-method">
                                                              <input id="cashondelivery" name="payment" type="radio" class="form-check-input" checked="">
                                                              <span class="avatar avatar-lg bg-light svg-primary">
                                                                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M16,152H48v56H16a8,8,0,0,1-8-8V160A8,8,0,0,1,16,152ZM204,56a28,28,0,0,0-12,2.71h0A28,28,0,1,0,176,85.29h0A28,28,0,1,0,204,56Z" opacity="0.2"></path><path d="M230.33,141.06a24.43,24.43,0,0,0-21.24-4.23l-41.84,9.62A28,28,0,0,0,140,112H89.94a31.82,31.82,0,0,0-22.63,9.37L44.69,144H16A16,16,0,0,0,0,160v40a16,16,0,0,0,16,16H120a7.93,7.93,0,0,0,1.94-.24l64-16a6.94,6.94,0,0,0,1.19-.4L226,182.82l.44-.2a24.6,24.6,0,0,0,3.93-41.56ZM16,160H40v40H16Zm203.43,8.21-38,16.18L119,200H56V155.31l22.63-22.62A15.86,15.86,0,0,1,89.94,128H140a12,12,0,0,1,0,24H112a8,8,0,0,0,0,16h32a8.32,8.32,0,0,0,1.79-.2l67-15.41.31-.08a8.6,8.6,0,0,1,6.3,15.9ZM164,96a36,36,0,0,0,5.9-.48,36,36,0,1,0,28.22-47A36,36,0,1,0,164,96Zm60-12a20,20,0,1,1-20-20A20,20,0,0,1,224,84ZM164,40a20,20,0,0,1,19.25,14.61,36,36,0,0,0-15,24.93A20.42,20.42,0,0,1,164,80a20,20,0,0,1,0-40Z"></path></svg>
                                                              </span>
                                                              <div>
                                                                  <p class="mb-1 fw-semibold fs-14">Cash On Delivery</p>
                                                                  <p class="mb-0 text-danger">$20 Extra On this Delivery</p>
                                                              </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3">
                                                          <div class="p-3 border d-flex gap-2 align-items-center rounded flex-wrap payment-method">
                                                              <input id="upipayment" name="payment" type="radio" class="form-check-input">
                                                              <span class="avatar avatar-lg bg-light svg-secondary">
                                                              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M224,128a96,96,0,1,1-96-96A96,96,0,0,1,224,128Z" opacity="0.2"></path><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm40-68a28,28,0,0,1-28,28h-4v8a8,8,0,0,1-16,0v-8H104a8,8,0,0,1,0-16h36a12,12,0,0,0,0-24H116a28,28,0,0,1,0-56h4V72a8,8,0,0,1,16,0v8h16a8,8,0,0,1,0,16H116a12,12,0,0,0,0,24h24A28,28,0,0,1,168,148Z"></path></svg>
                                                              </span>
                                                              <div>
                                                                  <p class="mb-1 fw-semibold fs-14">UPI Payment</p>
                                                                  <p class="mb-0 text-success">10% Extra Discount</p>
                                                              </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-xl-3">
                                                          <div class="p-3 border d-flex gap-2 align-items-center rounded flex-wrap payment-method">
                                                              <input id="creditcart" name="payment" type="radio" class="form-check-input">
                                                              <span class="avatar avatar-lg bg-light svg-success">
                                                              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M232,96v96a8,8,0,0,1-8,8H32a8,8,0,0,1-8-8V96Z" opacity="0.2"></path><path d="M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48Zm0,16V88H32V64Zm0,128H32V104H224v88Zm-16-24a8,8,0,0,1-8,8H168a8,8,0,0,1,0-16h32A8,8,0,0,1,208,168Zm-64,0a8,8,0,0,1-8,8H120a8,8,0,0,1,0-16h16A8,8,0,0,1,144,168Z"></path></svg>
                                                              </span>
                                                              <div>
                                                                  <p class="mb-1 fw-semibold fs-14">Credit/Debit Card</p>
                                                                  <p class="mb-0 text-success">Upto $100 Cashback</p>
                                                              </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-xl-3">
                                                          <div class="p-3 border d-flex gap-2 align-items-center rounded flex-wrap payment-method">
                                                              <input id="paytm" name="payment" type="radio" class="form-check-input">
                                                              <span class="avatar avatar-lg bg-light svg-info">
                                                              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M191.91,82.7a49,49,0,0,1-1.37,8.94h0A48,48,0,0,1,144,128H108a8,8,0,0,0-7.76,6.06l12-48A8,8,0,0,1,120,80h56A48.25,48.25,0,0,1,191.91,82.7Z" opacity="0.2"></path><path d="M220.12,93.54a55.8,55.8,0,0,0-20.19-16.18A56,56,0,0,0,144,24H84A16,16,0,0,0,68.48,36.12l-36,144A16,16,0,0,0,48,200h27.5l-3,12.12A16,16,0,0,0,88,232h31.5A16,16,0,0,0,135,219.88L144,184h32a56,56,0,0,0,44.14-90.46ZM79.52,184H48L84,40h60a40,40,0,0,1,39.3,32.49A57,57,0,0,0,176,72H120a16,16,0,0,0-15.53,12.12ZM183,88.62c-.08.36-.15.72-.24,1.08A39.94,39.94,0,0,1,144,120H112l8-32h56A40.07,40.07,0,0,1,183,88.62Zm31.76,49.08A39.94,39.94,0,0,1,176,168H144a16,16,0,0,0-15.52,12.12l-9,35.88H88l20-80h36a55.9,55.9,0,0,0,54-41.39,40.2,40.2,0,0,1,9.48,8.77A39.73,39.73,0,0,1,214.78,137.7Z"></path></svg>
                                                              </span>
                                                              <div>
                                                                  <p class="mb-1 fw-semibold fs-14">Paytm</p>
                                                                  <p class="mb-0 text-success">Upto $250 Wallet Money</p>
                                                              </div>
                                                          </div>
                                                        </div>
                                                    </div>
                                              </div>
                                          </div>
                                          <div class="row gy-3 mb-4">
                                              <p class="fs-15 fw-semibold mb-1">Saved Cards :</p>
                                              <div class="col-xl-4">
                                                  <div
                                                      class="form-check payment-card-container mb-0">
                                                      <input id="payment-card1"
                                                          name="payment-cards" type="radio"
                                                          class="form-check-input" checked="">
                                                      <div class="form-check-label">
                                                          <div
                                                              class="d-sm-flex d-block align-items-center mb-2 justify-content-between">
                                                              <div class="me-2 d-flex gap-2 align-items-center lh-1">
                                                                  <span class="">
                                                                      <i class="ri-visa-line text-primary fs-30"></i>
                                                                  </span>
                                                                  <p class="mb-0 fw-semibold">XXXX XXXX XXXX 2547</p>
                                                              </div>
                                                          </div>
                                                          <div class="d-flex align-items-center justify-content-between">
                                                              <span class="fs-14 fw-semibold">Expiries : <span class="text-muted fs-12">01/25</span></span>
                                                              <span class="text-success fw-semibold">Default</span>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-xl-4">
                                                  <div
                                                      class="form-check payment-card-container mb-0">
                                                      <input id="payment-card2"
                                                          name="payment-cards" type="radio"
                                                          class="form-check-input">
                                                      <div class="form-check-label">
                                                          <div
                                                              class="d-sm-flex d-block align-items-center mb-2 justify-content-between">
                                                              <div class="me-2 d-flex gap-2 align-items-center lh-1">
                                                                  <span class="">
                                                                      <i class="ri-mastercard-fill text-secondary fs-30"></i>
                                                                  </span>
                                                                  <p class="mb-0 fw-semibold">XXXX XXXX XXXX 2547</p>
                                                              </div>
                                                          </div>
                                                          <div class="d-flex align-items-center justify-content-between">
                                                              <span class="fs-14 fw-semibold">Expiries : <span class="text-muted fs-12">01/25</span></span>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-xl-4">
                                                  <div
                                                      class="form-check payment-card-container mb-0">
                                                      <input id="payment-card3"
                                                          name="payment-cards" type="radio"
                                                          class="form-check-input">
                                                      <div class="form-check-label">
                                                          <div
                                                              class="d-sm-flex d-block align-items-center mb-2 justify-content-between">
                                                              <div class="me-2 d-flex gap-2 align-items-center lh-1">
                                                                  <span class="">
                                                                      <i class="ri-paypal-fill text-info fs-25"></i>
                                                                  </span>
                                                                  <p class="mb-0 fw-semibold">XXXX XXXX XXXX 2547</p>
                                                              </div>
                                                          </div>
                                                          <div class="d-flex align-items-center justify-content-between">
                                                              <span class="fs-14 fw-semibold">Expiries : <span class="text-muted fs-12">01/25</span></span>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="row gy-3">
                                              <p class="fs-15 fw-semibold mb-1">Add New Card :</p>
                                              <div class="col-xl-6">
                                                  <div class="form-floating">
                                                      <input type="text" class="form-control" id="fullname-add" value="1245 - 5447 - 8934 - XXXX" placeholder="Name">
                                                      <label for="fullname-add">Card Number</label>
                                                  </div>
                                              </div>
                                              <div class="col-xl-6">
                                                  <div class="form-floating">
                                                      <input type="text" class="form-control" id="fullname-add1" value="JHON TAYLOR" placeholder="Name">
                                                      <label for="fullname-add1">Name On Card</label>
                                                  </div>
                                              </div>
                                              <div class="col-xl-4">
                                                  <div class="form-floating">
                                                      <input type="text" class="form-control" id="payment-cardexpiry-date" placeholder="MM/YY" value="08/2024">
                                                      <label for="payment-cardexpiry-date">Expiration Date</label>
                                                  </div>
                                              </div>
                                              <div class="col-xl-4">
                                                  <div class="form-floating">
                                                      <input type="text" class="form-control" id="payment-cvv" placeholder="XXX" value="341">
                                                      <label for="payment-cvv" class="form-label">CVV</label>
                                                  </div>
                                              </div>
                                              <div class="col-xl-4">
                                                  <div class="form-floating">
                                                      <input type="text" class="form-control" id="payment-security" placeholder="XXXXXX" value="183467">
                                                      <label for="payment-security" class="form-label">O.T.P</label>
                                                  </div>
                                                  <label for="payment-security" class="form-label mt-1 text-danger fs-11"><sup><i class="ri-star-s-fill"></i></sup>Do not share O.T.P with anyone</label>
                                              </div>
                                              <div class="col-xl-12 mt-0">
                                                  <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" value="" id="payment-card-save" checked="">
                                                      <label class="form-check-label" for="payment-card-save">
                                                          Save this card
                                                      </label>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div
                                  class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-between">
                                  <button class="btn btn-success mb-2 me-2" id="back-personal-trigger"><i
                                          class="ri-user-3-line me-2 align-middle d-inline-block"></i>Back
                                      To Personal Info</button>
                                  <button class="btn btn-primary mt-sm-0 mb-2"
                                      id="continue-payment-trigger">Continue Payment<i
                                          class="bi bi-credit-card-2-front align-middle ms-2 d-inline-block"></i></button>
                              </div>
                          </div>
                          <div class="tab-pane p-4 fade border-0" id="delivery-tab-pane" role="tabpanel"
                              aria-labelledby="delivery-tab-pane" tabindex="0">
                              <div class="row justify-content-center">
                                <div class="col-xl-5">
                                  <div class="border rounded">
                                      <div class="p-3 text-center">
                                          <span class="avatar avatar-xxl bg-success-transparent avatar-rounded mb-3">
                                          <span class="avatar avatar-md bg-success avatar-rounded">
                                              <i class="ri-check-line fs-2"></i>
                                          </span>
                                          </span>
                                          <h5 class="fw-semibold">Payment Successful...&#129309;
                                          </h5>
                                          <p class="mb-0 text-muted">Paymeny was recieved successfully, Thank You for tour payment.</p>
                                      </div>
                                      <div class="p-0 text-center border-top">
                                          <div class="table-responsive">
                                              <table class="table table-borderless text-nowrap">
                                                  <thead>
                                                      <tr>
                                                          <th scope="col" class="text-start">Detail Transaction :</th>
                                                          <th></th>
                                                      </tr>
                                                  </thead> 
                                                  <tbody>
                                                      <tr>
                                                          <td class="text-start fs-14 fw-semibold">
                                                              <span>Transaction Id :</span>
                                                          </td>
                                                          <td class="text-end text-muted">
                                                            721648463420585
                                                          </td>
                                                      </tr>
                                                      <tr>
                                                          <td class="text-start fs-14 fw-semibold">
                                                              <span>Date :</span>
                                                          </td>
                                                          <td class="text-end text-muted">
                                                              8:30 AM , 10 May 2024
                                                          </td>
                                                      </tr>
                                                      <tr>
                                                          <td class="text-start fs-14 fw-semibold">
                                                              <span>Type Of transaction :</span>
                                                          </td>
                                                          <td class="text-end text-muted">
                                                              <span class="text-primary">e-money</span>
                                                          </td>
                                                      </tr>
                                                      <tr>
                                                          <td class="text-start fs-14 fw-semibold">
                                                              <span>Status :</span>
                                                          </td>
                                                          <td class="text-end text-muted">
                                                              <span class="badge rounded-pill bg-success-transparent">Success</span>
                                                          </td>
                                                      </tr>
                                                      <tr>
                                                          <td class="text-start fs-14 fw-semibold">
                                                              <span>Total Amount :</span>
                                                          </td>
                                                          <td class="text-end fs-18">
                                                              <span class="fw-semibold">$12,756</span>
                                                          </td>
                                                      </tr>
                                                  </tbody>
                                              </table>
                                          </div>
                                      </div>
                                      <div class="p-3 text-center border-top d-flex align-items-center gap-2 flex-wrap justify-content-center">
                                        <button class="btn btn-primary-light mb-sm-0 mb-2">
                                          Download Reciept
                                        </button>
                                        <a href="products.html" class="btn btn-primary">
                                          Continue Shopping
                                        </a>
                                      </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title me-1">Order Summery</div>
                  </div>
                  <div class="card-body p-0">
                      <div class="border-bottom">
                          <ul class="list-group mb-0 border-0 rounded-0">
                              <li class="list-group-item border-0 border-bottom">
                                  <div class="d-flex align-items-center flex-wrap">
                                          <span class="avatar avatar-md  me-3 bg-primary-transparent border  border-primary border-opacity-10">
                                              <img src="{{ asset('') }}/assets/images/ecommerce/png/1.png" alt="">
                                          </span>
                                      <div class="flex-fill">
                                          <p class="mb-0 fw-semibold">Loveseat Compact sofa</p>
                                          <p class="mb-0 text-muted fs-12">Quantity : 2 <span
                                                  class="badge bg-success-transparent ms-3">30% Off</span></p>
                                      </div>
                                      <div>
                                          <p class="mb-0 text-end">
                                              <a href="javascript:void(0)">
                                                  <i class="ri-close-line fs-16 text-muted"></i>
                                              </a>
                                          </p>
                                          <p class="mb-0 fs-14 fw-semibold">$189<span
                                                  class="ms-1 text-muted fs-11 d-inline-block"><s>$329</s></span>
                                          </p>
                                      </div>
                                  </div>
                              </li>
                              <li class="list-group-item border-0 border-bottom">
                                  <div class="d-flex align-items-center flex-wrap">
                                          <span class="avatar avatar-md me-3 bg-secondary-transparent border  border-secondary border-opacity-10">
                                              <img src="{{ asset('') }}/assets/images/ecommerce/png/14.png" alt="">
                                          </span>
                                      <div class="flex-fill">
                                          <p class="mb-0 fw-semibold">Sony Alpha a7 Camera</p>
                                          <p class="mb-0 text-muted fs-12">Quantity : 1 <span
                                                  class="badge bg-secondary-transparent ms-3">10% Off</span></p>
                                      </div>
                                      <div>
                                          <p class="mb-0 text-end">
                                              <a href="javascript:void(0)">
                                                  <i class="ri-close-line fs-16 text-muted"></i>
                                              </a>
                                          </p>
                                          <p class="mb-0 fs-14 fw-semibold">$129<span
                                                  class="ms-1 text-muted fs-11 d-inline-block"><s>$139</s></span>
                                          </p>
                                      </div>
                                  </div>
                              </li>
                              <li class="list-group-item border-0">
                                  <div class="d-flex align-items-center flex-wrap">
                                          <span class="avatar avatar-md me-3 bg-success-transparent border border-success border-opacity-10">
                                              <img src="{{ asset('') }}/assets/images/ecommerce/png/33.png" alt="">
                                          </span>
                                      <div class="flex-fill">
                                          <p class="mb-0 fw-semibold">Classic oriental Perfume</p>
                                          <p class="mb-0 text-muted fs-12">Quantity : 3 <span
                                                  class="badge bg-primary-transparent ms-3">12% Off</span></p>
                                      </div>
                                      <div>
                                          <p class="mb-0 text-end">
                                              <a href="javascript:void(0)">
                                                  <i class="ri-close-line fs-16 text-muted"></i>
                                              </a>
                                          </p>
                                          <p class="mb-0 fs-14 fw-semibold">$1349<span
                                                  class="ms-1 text-muted fs-11 d-inline-block"><s>$299</s></span>
                                          </p>
                                      </div>
                                  </div>
                              </li>
                          </ul>
                      </div>
                      <div class="p-3">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                              <div class="">Total Orders</div>
                              <div class="fw-semibold fs-14">3 Items</div>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                              <div class="">Payment Status</div>
                              <div class="badge bg-success-transparent">Completed</div>
                          </div>
                      </div>
                      <div class="p-3 border-bottom border-top border-block-end-dashed">
                          <div class="d-flex align-items-center justify-content-between flex-wrap">
                              <div
                                  class="fs-12 fw-semibold bg-primary-transparent badge badge-md rounded">
                                  HAPPY2024</div>
                              <div class="text-success">COUPON APPLIED</div>
                          </div>
                      </div>
                      <div class="p-3 border-bottom border-block-end-dashed">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                              <div class="">Sub Total</div>
                              <div class="fw-semibold fs-14">$318</div>
                          </div>
                          <div class="d-flex align-items-center justify-content-between mb-3">
                              <div class="">Discount</div>
                              <div class="fw-semibold fs-14 text-primary">10% - $31.8</div>
                          </div>
                          <div class="d-flex align-items-center justify-content-between mb-3">
                              <div class="">Delivery Charges</div>
                              <div class="fw-semibold fs-14 text-danger">- $29</div>
                          </div>
                          <div class="d-flex align-items-center justify-content-between mb-3">
                              <div class="">Service Tax (18%)</div>
                              <div class="fw-semibold fs-14">- $45.29</div>
                          </div>
                          <div  class="d-flex align-items-center justify-content-between">
                              <div class="fs-15">Total :</div>
                              <div class="fw-semibold fs-16 text-dark"> $1,387</div>
                          </div>
                          <div class="d-grid mt-2">
                              <a href="products.html" class="btn btn-primary">Continue Shopping</a>
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