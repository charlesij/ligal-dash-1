@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Start::page-header -->
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Create Invoice</h1>
              <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item">
                      <a href="javascript:void(0);">
                          Pages
                      </a>
                  </li>
                  <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Invoice</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Create Invoice</li>
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
      
      <!-- Start::row-1 -->
      <div class="row">
          <div class="col-xxl-9">
              <div class="card custom-card">
                  <div class="card-header d-md-flex d-block">
                    <div class="card-title">Create Invoice</div>
                      <div class="ms-auto mt-md-0 mt-2">
                          <button class="btn btn-sm btn-primary me-2">Save As PDF<i class="ri-file-pdf-line ms-1 align-middle d-inline-block"></i></button>
                          <button class="btn btn-sm btn-icon btn-secondary-light me-2"><i class="bi bi-plus-lg"></i></button>
                          <button class="btn btn-sm btn-icon btn-success-light me-2"><i class="bi bi-download"></i></button>
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="p-3 bg-light border rounded mb-3">
                          <div class="row align-items-center">
                              <div class="col-xl-8">
                                  <div class="mb-2">
                                      <img src="{{ asset('') }}/assets/images/brand-logos/toggle-logo.png" alt="">
                                  </div>
                                  <span class="badge bg-secondary-transparent mb-2">Invoice To</span>
                                  <p class="mb-1 fw-semibold text-default">Nick Tamson K</p>
                                  <p class="text-muted mb-1">Office 220, 789 Market Street Downtown District</p>
                                  <p class="text-muted mb-1">New York, NY 11201, USA</p>
                                  <p class="text-muted mb-0">+1 (234) 567 8901, +44 (987) 654 3210</p>
                              </div>
                              <div class="col-xl-4">
                                  <div class="row align-items-center mb-3">
                                  <div class="col-xl-4">
                                      <label for="invoice-number" class="form-label mb-0 ">Invoice ID :</label>
                                  </div>
                                  <div class="col-xl-8">
                                      <input type="text" class="form-control" id="invoice-number" placeholder="Inv No" value="#SPK120219890">
                                  </div>
                                  </div>
                                  <div class="row align-items-center mb-3">
                                  <div class="col-xl-4">
                                      <label for="invoice-number" class="form-label mb-0 ">Invoice Title :</label>
                                  </div>
                                  <div class="col-xl-8">
                                    <input type="text" class="form-control" placeholder="Choose date" value="SHOPPING INVOICE">
                                  </div>
                                  </div>
                                  <div class="row align-items-center">
                                  <div class="col-xl-4">
                                      <label for="invoice-number" class="form-label mb-0 ">Due Amount :</label>
                                  </div>
                                  <div class="col-xl-8">
                                      <input type="text" class="form-control" placeholder="Choose date"  value="$2,570.42">
                                  </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="row gy-3">
                          <div class="col-xl-12">
                              <div class="row">
                                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                      <p class="dw-semibold mb-2">
                                          Billing To :
                                      </p>
                                      <div class="row gy-2">
                                          <div class="col-xl-12">
                                              <input type="text" class="form-control" id="Company-Name" placeholder="Company Name" value="WCSRM SOFTWARE">
                                          </div>
                                          <div class="col-xl-12">
                                              <textarea class="form-control" id="company-address" placeholder="Enter Address" rows="3"></textarea>
                                          </div>
                                          <div class="col-xl-12">
                                              <input type="text" class="form-control" id="company-mail" placeholder="Company Email" value="">
                                          </div>
                                          <div class="col-xl-12">
                                              <input type="text" class="form-control" id="company-phone" placeholder="Phone Number" value="">
                                          </div>
                                          <div class="col-xl-12">
                                              <textarea class="form-control" id="invoice-subject" placeholder="Subject" rows="4"></textarea>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 ms-auto mt-sm-0 mt-3">
                                      <p class="dw-semibold mb-2">
                                          Shipped To :
                                      </p>
                                      <div class="row gy-2">
                                          <div class="col-xl-12">
                                              <input type="text" class="form-control" id="customer-Name" placeholder="Customer Name" value="Jack Miller">
                                          </div>
                                          <div class="col-xl-12">
                                              <textarea class="form-control" id="customer-address" placeholder="Enter Address" rows="3"></textarea>
                                          </div>
                                          <div class="col-xl-12">
                                              <input type="text" class="form-control" id="customer-mail" placeholder="Customer Email" value="">
                                          </div>
                                          <div class="col-xl-12">
                                              <input type="text" class="form-control" id="customer-phone" placeholder="Phone Number" value="">
                                          </div>
                                          <div class="col-xl-12">
                                              <input type="text" class="form-control" id="zip-code" placeholder="Zip Code" value="">
                                          </div>
                                          <div class="col-xl-12">
                                              <p class="dw-semibold mb-2 mt-2">
                                                  Currency :
                                              </p>
                                              <select class="form-control" data-trigger name="invoice-currency" id="invoice-currency">
                                                  <option value="">Select Currency</option>
                                                  <option value="Armani">USD - (United States Dollar)</option>
                                                  <option value="Lacoste">BHD - (Bahraini Dinar)</option>
                                                  <option value="Puma">KWD - (Kuwaiti Dinar)</option>
                                                  <option value="Spykar">CHF - (Swiss Franc)</option>
                                              </select>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-12">
                              <div class="table-responsive"> 
                                  <table class="table nowrap text-nowrap border mt-3"> 
                                      <thead>
                                          <tr>
                                              <th>PRODUCT NAME</th>
                                              <th>DESCRIPTION</th>
                                              <th>QUANTITY</th>
                                              <th>PRICE PER UNIT</th> 
                                              <th>TOTAL</th>
                                              <th>ACTION</th>
                                          </tr> 
                                      </thead> 
                                      <tbody>
                                          <tr> 
                                              <td>
                                                  <input type="text" class="form-control" placeholder="Enter Product Name">
                                              </td>
                                              <td>
                                                  <textarea rows="1" class="form-control" placeholder="Enter Description"></textarea>
                                              </td>
                                              <td class="invoice-quantity-container">
                                                  <div class="input-group border rounded flex-nowrap">
                                                      <button class="btn btn-icon btn-primary input-group-text flex-fill product-quantity-minus"><i class="ri-subtract-line"></i></button>
                                                      <input type="text" class="form-control form-control-sm border-0 text-center w-100" aria-label="quantity" id="product-quantity4" value="1">
                                                      <button class="btn btn-icon btn-primary input-group-text flex-fill product-quantity-plus"><i class="ri-add-line"></i></button>
                                                  </div>
                                              </td>
                                              <td><input class="form-control" placeholder="" type="text" value="$60.00"></td>
                                              <td><input class="form-control" placeholder="" type="text" value="$120.00"></td>
                                              <td>
                                                  <button class="btn btn-sm btn-icon btn-danger-light"><i class="ri-delete-bin-5-line"></i></button>
                                              </td>
                                          </tr> 
                                          <tr> 
                                              <td>
                                                  <input type="text" class="form-control" placeholder="Enter Product Name">
                                              </td>
                                              <td>
                                                  <textarea rows="1" class="form-control" placeholder="Enter Description"></textarea>
                                              </td>
                                              <td class="invoice-quantity-container">
                                                  <div class="input-group border rounded flex-nowrap">
                                                      <button class="btn btn-icon btn-primary input-group-text flex-fill product-quantity-minus"><i class="ri-subtract-line"></i></button>
                                                      <input type="text" class="form-control form-control-sm border-0 text-center w-100" aria-label="quantity" id="product-quantity5" value="1">
                                                      <button class="btn btn-icon btn-primary input-group-text flex-fill product-quantity-plus"><i class="ri-add-line"></i></button>
                                                  </div>
                                              </td>
                                              <td><input class="form-control" placeholder="Enter Amount" type="text"></td>
                                              <td><input class="form-control" placeholder="Enter Amount" type="text"></td>
                                              <td>
                                                  <button class="btn btn-sm btn-icon btn-danger-light"><i class="ri-delete-bin-5-line"></i></button>
                                              </td>
                                          </tr> 
                                          <tr>
                                              <td colspan="6" class="border-bottom-0"><a class="btn btn-light" href="javascript:void(0);"><i class="bi bi-plus-lg"></i> Add Product</a></td>
                                          </tr>
                                          <tr>
                                              <td colspan="4"></td>
                                              <td colspan="2">
                                                  <table class="table table-sm text-nowrap mb-0 table-borderless">
                                                      <tbody>
                                                          <tr>
                                                              <th scope="row">
                                                                  <div class="fw-medium">Sub Total :</div>
                                                              </th>
                                                              <td>
                                                                  <input type="text" class="form-control invoice-amount-input" placeholder="Enter Amount" value="$1209.89">
                                                              </td>
                                                          </tr>
                                                          <tr>
                                                              <th scope="row">
                                                                  <div class="fw-medium">Avail Discount :</div>
                                                              </th>
                                                              <td>
                                                                  <input type="text" class="form-control invoice-amount-input" placeholder="Enter Amount" value="$29.98">
                                                              </td>
                                                          </tr>
                                                          <tr>
                                                              <th scope="row">
                                                                  <div class="fw-medium">Coupon Discount <span class="text-success">(10%)</span> :</div>
                                                              </th>
                                                              <td>
                                                                  <input type="text" class="form-control invoice-amount-input" placeholder="Enter Amount" value="$129.00">
                                                              </td>
                                                          </tr>
                                                          <tr>
                                                              <th scope="row">
                                                                  <div class="fw-medium">Vat <span class="text-danger">(20%)</span> :</div>
                                                              </th>
                                                              <td>
                                                                  <input type="text" class="form-control invoice-amount-input" placeholder="Enter Amount" value="$258.00">
                                                              </td>
                                                          </tr>
                                                          <tr>
                                                              <th scope="row">
                                                                  <div class="fw-medium">Due Till Date :</div>
                                                              </th>
                                                              <td>
                                                                  <input type="text" class="form-control invoice-amount-input" placeholder="Enter Amount" value="$0.00">
                                                              </td>
                                                          </tr>
                                                          <tr>
                                                              <th scope="row">
                                                                  <div class="fs-14 fw-medium">Total :</div>
                                                              </th>
                                                              <td>
                                                                  <input type="text" class="form-control invoice-amount-input" placeholder="Enter Amount" value="$1,071.89">
                                                              </td>
                                                          </tr>
                                                      </tbody>
                                                  </table>
                                              </td>
                                          </tr>
                                      </tbody> 
                                  </table> 
                              </div>
                          </div>
                          <div class="col-xl-12">
                              <div>
                                  <label for="invoice-note" class="form-label">Note:</label>
                                  <textarea class="form-control" id="invoice-note" rows="3">Once the invoice has been verified by the accounts payable team and recorded, the only task left is to send it for approval before releasing the payment</textarea>
                              </div>    
                          </div>
                      </div>
                  </div>
                  <div class="card-footer text-end">
                      <button class="btn btn-secondary m-1"><i class="ri-eye-line me-1 align-middle d-inline-block"></i>Preview</button>
                      <button class="btn btn-primary m-1">Send Invoice <i class="ri-send-plane-2-line ms-1 align-middle d-inline-block"></i></button>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">
                        Invoice Payment
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="row gy-3">
                          <div class="col-xl-12">
                              <div class="row gy-2">
                                  <div class="col-md-6">
                                      <div class="card custom-card mb-0 border card-style-6">
                                          <div class="card-body px-3 py-2">
                                              <div class="d-flex align-items-center justify-content-between mb-0">
                                                  <div class="flex-grow-1">
                                                      UPI Payment
                                                  </div>
                                                  <div class="min-w-fit-content">
                                                      <div class="d-flex gap-2">
                                                          <input class="form-check-input" type="radio" id="address1" name="default-address" checked="">
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="card custom-card border mb-0 card-style-6">
                                          <div class="card-body px-3 py-2">
                                              <div class="d-flex align-items-center justify-content-between mb-0">
                                                  <div class="flex-grow-1">
                                                      Credit Card
                                                  </div>
                                                  <div class="min-w-fit-content">
                                                      <div class="d-flex gap-2">
                                                          <input class="form-check-input" type="radio" id="address2" name="default-address">
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-12">
                              <input type="text" class="form-control" placeholder="Card Holder Name">
                          </div>
                          <div class="col-xl-12">
                              <input type="text" class="form-control" id="invoice-payment-cardname" placeholder="Card Number" value="1234 5678 9087 XXXX">
                              <label for="invoice-payment-cardname" class="form-label mb-0"><a class="text-danger fs-11" href="javascript:void(0);">Enter valid card number*</a></label>
                          </div>
                          <div class="col-xl-12">
                              <input type="text" class="form-control mb-0" placeholder="Enter OTP">
                          </div>
                          <div class="col-xl-6">
                              <label for="invoice-number" class="form-label mb-2 ">Isuue Date :</label>
                              <input type="text" class="form-control" id="invoice-date-issued" placeholder="Choose date">
                          </div>
                          <div class="col-xl-6">
                              <label for="invoice-number" class="form-label mb-2 ">Due Date :</label>
                              <input type="text" class="form-control" id="invoice-date-due" placeholder="Choose date">
                          </div>
                          <div class="col-xl-12">
                              <div class="alert alert-success" role="alert">
                                  Please Make sure to pay the invoice bill within 30 days.
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