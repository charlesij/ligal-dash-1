@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Page Header -->
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Edit Product</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
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
          <div class="col-xl-3">
              <div class="card custom-card">
                  <div class="card-body">
                      <ul class="nav flex-column nav-pills tab-style-7" role="tablist">
                          <li class="nav-item m-1" role="presentation">
                              <a class="nav-link d-inline-flex w-100 mb-0  bg-light active" id="account" data-bs-toggle="tab" data-bs-target="#account-pane" href="#personal-info" aria-selected="true" role="tab">Basic Information</a>
                          </li>
                          <li class="nav-item m-1" role="presentation">
                              <a class="nav-link d-inline-flex w-100 mb-0 bg-light" id="notification-tab" data-bs-toggle="tab" data-bs-target="#notification-tab-pane" type="button" role="tab" aria-controls="notification-tab-pane" href="#personal-info" aria-selected="false" tabindex="-1">Pricing</a>
                          </li>
                          <li class="nav-item m-1" role="presentation">
                              <a class="nav-link d-inline-flex w-100 mb-0 bg-light" id="security-tab" data-bs-toggle="tab" data-bs-target="#security-tab-pane" type="button" role="tab" aria-controls="security-tab-pane" aria-selected="false" href="#personal-info" tabindex="-1">Specification</a>
                          </li>
                          <li class="nav-item m-1" role="presentation">
                              <a class="nav-link d-inline-flex w-100 mb-0 bg-light" id="otherinfo-tab" data-bs-toggle="tab" data-bs-target="#otherinfo-tab-pane" type="button" role="tab" aria-controls="otherinfo-tab-pane" aria-selected="false" href="#other-info" tabindex="-1">Other Information</a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="card custom-card">
                  <div class="card-header">
                        <div class="card-title">Product Images</div>
                  </div>
                  <div class="card-body">
                      <div class="row gy-3">
                          <div class="col-xl-12">
                              <label for="product-tags" class="form-label">Product Tags</label>
                              <select class="form-control" name="product-tags" id="product-tags" multiple>
                                  <option value="Relaxed">Relaxed</option>
                                  <option value="Solid" selected>Solid</option>
                                  <option value="Washed">Washed</option>
                                  <option value="Plain" selected>Plain</option>
                              </select>
                          </div>
                          <div class="col-xl-12">
                              <div class="product-dropzone">
                                  <p class="fw-medium mb-3 fs-14">Select Images :</p>
                                  <div class="mb-3">
                                      <span class="avatar avatar-xl border me-2 bg-light">
                                          <img src="{{ asset('') }}/assets/images/ecommerce/png/1.png" alt="" class="w-100 h-100">
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-danger avatar-badge"><i class="fe fe-x"></i></a>
                                      </span>
                                      <span class="avatar avatar-xl border me-2 bg-light">
                                          <img src="{{ asset('') }}/assets/images/ecommerce/png/14.png" alt="" class="w-100 h-100">
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-danger avatar-badge"><i class="fe fe-x"></i></a>
                                      </span>
                                      <span class="avatar avatar-xl border me-2 bg-light">
                                          <img src="{{ asset('') }}/assets/images/ecommerce/png/31.png" alt="" class="w-100 h-100">
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-danger avatar-badge"><i class="fe fe-x"></i></a>
                                      </span>
                                      <span class="avatar avatar-xl border me-2 bg-light">
                                          <img src="{{ asset('') }}/assets/images/ecommerce/png/36.png" alt="" class="w-100 h-100">
                                          <a href="javascript:void(0);" class="badge rounded-pill bg-danger avatar-badge"><i class="fe fe-x"></i></a>
                                      </span>
                                  </div>
                                  <input type="file" class="product-Images" name="filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xl-9">
              <div class="card custom-card">
                  <div class="p-3 border-bottom border-top border-block-end-dashed tab-content">
                      <div class="tab-pane show active p-0 border-0" id="account-pane" role="tabpanel" aria-labelledby="account" tabindex="0">
                          <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-1">
                              <div class="fw-semibold d-block fs-15">General Information :</div>
                              <button class="btn btn-secondary">Add Product<i class="bi bi-plus-lg ms-2"></i></button>
                          </div>
                          <div class="row gy-3">
                              <div class="col-xl-12">
                                  <label for="product-name-add" class="form-label">Product Name</label>
                                  <input type="text" class="form-control" id="product-name-add" placeholder="Name" value="Red Sweat Shirt">
                                  <label for="product-name-add" class="form-label mt-1 fs-12 op-5 text-muted mb-0">*Product Name should not exceed 30 characters</label>
                              </div>
                              <div class="col-xl-6">
                                  <label for="product-size-add" class="form-label">Size</label>
                                  <select class="form-control" data-trigger name="product-size-add" id="product-size-add">
                                      <option value="Extra Small">Extra Small</option>
                                      <option value="Small">Small</option>
                                      <option value="Medium">Medium</option>
                                      <option value="Large">Large</option>
                                      <option value="Extra Large">Extra Large</option>
                                  </select>
                              </div>
                              <div class="col-xl-6">
                                  <label for="product-brand-add" class="form-label">Brand</label>
                                  <select class="form-control" data-trigger name="product-brand-add" id="product-brand-add">
                                      <option value="Armani">Armani</option>
                                      <option value="Lacoste">Lacoste</option>
                                      <option value="Puma">Puma</option>
                                      <option value="Spykar">Spykar</option>
                                      <option value="Mufti">Mufti</option>
                                      <option value="Home Town">Home Town</option>
                                      <option value="Arrabi">Arrabi</option>
                                  </select>
                              </div>
                              <div class="col-xl-6">
                                  <label for="product-category-add" class="form-label">Category</label>
                                  <select class="form-control" data-trigger name="product-category-add" id="product-category-add">
                                      <option value="Clothing">Clothing</option>
                                      <option value="Footwear">Footwear</option>
                                      <option value="Accesories">Accesories</option>
                                      <option value="Grooming">Grooming</option>
                                      <option value="Ethnic & Festive">Ethnic & Festive</option>
                                      <option value="Jewellery">Jewellery</option>
                                      <option value="Toys & Babycare">Toys & Babycare</option>
                                      <option value="Festive Gifts">Festive Gifts</option>
                                      <option value="Kitchen">Kitchen</option>
                                      <option value="Dining">Dining</option>
                                      <option value="Home Decors">Home Decors</option>
                                      <option value="Stationery">Stationery</option>
                                  </select>
                              </div>
                              <div class="col-xl-6">
                                  <label for="product-category-add" class="form-label">Sub Category</label>
                                  <select class="form-control" data-trigger name="product-category-add" id="product-category-add">
                                      <option value="Footwear">Shirt</option>
                                      <option value="Clothing">Chudidar</option>
                                      <option value="Accesories">T-shirt</option>
                                      <option value="Grooming">Frock</option>
                                      <option value="Ethnic & Festive">Night Pant</option>
                                      <option value="Jewellery">Kurties</option>
                                  </select>
                              </div>
                              <div class="col-xl-6">
                                  <label for="product-gender-add" class="form-label">Gender</label>
                                  <select class="form-control" data-trigger name="product-gender-add" id="product-gender-add">
                                      <option value="All">All</option>
                                      <option value="Male">Male</option>
                                      <option value="Female">Female</option>
                                      <option value="Others">Others</option>
                                  </select>
                              </div>
                              <div class="col-xl-6 color-selection">
                                  <label for="product-color-add" class="form-label">Colors</label>
                                  <select class="form-control" name="product-color-add" id="product-color-add" multiple>
                                      <option value="">Red</option>
                                      <option value="White">White</option>
                                      <option value="Black">Black</option>
                                      <option value="Orange">Orange</option>
                                      <option value="Yellow">Yellow</option>
                                      <option value="Green">Green</option>
                                      <option value="Blue">Blue</option>
                                      <option value="Pink">Pink</option>
                                      <option value="Purple">Purple</option>
                                  </select>
                              </div>
                              <div class="col-xl-12">
                                  <label for="product-description-add" class="form-label">Product Description</label>
                                  <textarea class="form-control" id="product-description-add" rows="2">Ultra Soft: The fabric is extremely soft and comfortable, keeping you at ease for hours</textarea>
                                  <label for="product-description-add" class="form-label mt-1 fs-12 op-5 text-muted mb-0">*Description should not exceed 500 letters</label>
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane p-0 border-0" id="notification-tab-pane" role="tabpanel" aria-labelledby="notification-tab" tabindex="0">
                          <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-1">
                              <div class="fw-semibold d-block fs-15">Pricing Details:</div>
                              <button class="btn btn-secondary">Add Product<i class="bi bi-plus-lg ms-2"></i></button>
                          </div>
                          <div class="row gy-3">
                              <div class="col-xl-6">
                                  <label for="product-cost-add" class="form-label">Enter Actual Price</label>
                                  <input type="text" class="form-control" id="product-cost-add" placeholder="Cost" value="$135.00">
                              </div>
                              <div class="col-xl-6">
                                  <label for="product-cost-add" class="form-label">Enter Dealer Price</label>
                                  <input type="text" class="form-control" id="product-cost-add" placeholder="Cost"  value="$159.00">
                              </div>
                              <div class="col-xl-6">
                                  <label for="product-cost-add" class="form-label">Discount Type</label>
                                  <div class="row gy-3">
                                      <div class="col-xxl-4">
                                          <div class="card custom-card mb-0 border card-style-6">
                                              <div class="card-body px-3 py-2">
                                                  <div class="d-flex align-items-center justify-content-between mb-0">
                                                      <div class="flex-grow-1">
                                                      No Discount
                                                      </div>
                                                      <div class="min-w-fit-content">
                                                          <div class="d-flex gap-2">
                                                              <input class="form-check-input m-0" type="radio" id="address1" name="default-address" checked="">
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-xxl-4">
                                          <div class="card custom-card border mb-0 card-style-6">
                                              <div class="card-body px-3 py-2">
                                                  <div class="d-flex align-items-center justify-content-between mb-0">
                                                      <div class="flex-grow-1">
                                                          Percentage %
                                                      </div>
                                                      <div class="min-w-fit-content">
                                                          <div class="d-flex gap-2">
                                                              <input class="form-check-input m-0" type="radio" id="address2" name="default-address">
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-xxl-4">
                                          <div class="card custom-card border mb-0 card-style-6">
                                              <div class="card-body px-3 py-2">
                                                  <div class="d-flex align-items-center justify-content-between mb-0">
                                                      <div class="flex-grow-1">
                                                          Fixed Price
                                                      </div>
                                                      <div class="min-w-fit-content">
                                                          <div class="d-flex gap-2">
                                                              <input class="form-check-input m-0" type="radio" id="address2" name="default-address">
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-6">
                                  <label for="product-cost-add" class="form-label">Discount Percentage</label>
                                  <input type="text" class="form-control" id="product-discount" placeholder="Discount in %"  value="0.5%">
                              </div>
                              <div class="col-xl-6">
                                  <label for="product-cost-add" class="form-label">Stock Quantity</label>
                                  <input type="text" class="form-control" id="Stock-quantity" placeholder="Enter Quanity"  value="30 Items">
                              </div>
                              <div class="col-xl-6">
                                  <label for="product-cost-add" class="form-label">Shipping Cost</label>
                                  <input type="text" class="form-control" id="shiping-cost" placeholder="Enter Shipping Cost"  value="$35.00">
                              </div>
                              <div class="col-xl-12">
                                  <label for="product-cost-add" class="form-label">Availability Status</label>
                                  <select class="form-control" data-trigger name="product-size-add" id="product-avaialability">
                                      <option value="Extra Small">In Stock</option>
                                      <option value="Small">Out Of Stock</option>
                                      <option value="Medium">Pre Order</option>
                                  </select>
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane p-0 border-0" id="security-tab-pane" role="tabpanel" aria-labelledby="security-tab" tabindex="0">
                          <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-1">
                              <div class="fw-semibold d-block fs-15">Product Specification :</div>
                              <button class="btn btn-secondary">Add Product<i class="bi bi-plus-lg ms-2"></i></button>
                          </div>
                          <div class="row gy-3">
                              <div class="col-xl-6">
                                  <label for="product-type" class="form-label">Product Type</label>
                                  <input type="text" class="form-control" id="product-type" placeholder="Type"  value="Shirt">
                              </div>
                              <div class="col-xl-6">
                                  <label for="product-discount" class="form-label">Item Weight</label>
                                  <input type="text" class="form-control" id="product-discount1" placeholder="Weight in gms"  value="250gm">
                              </div>
                              <div class="col-xl-12">
                                  <label class="form-label">Product Features</label>
                                  <div id="product-features">
                                      <ul>
                                          <li>Care Instructions: Machine Wash</li>
                                          <li>Neckline: The pullover is framed with a Crew Neck</li>
                                          <li>Fit Type: Regular Fit</li>
                                          <li>Long Sleeves: The pullover is designed with Long Sleeves.</li>
                                          <li>Soft Hand feel: The fabric is extremely soft and comfortable, keeping you at ease for hours.</li>
                                          <li>Solid: The pullover is available in solid pattern.</li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="col-xl-4">
                                  <label for="publish-date" class="form-label">Publish Date</label>
                                  <input type="text" class="form-control" id="publish-date" placeholder="Choose date">
                              </div>
                              <div class="col-xl-4">
                                  <label for="publish-time" class="form-label">Publish Time</label>
                                  <input type="text" class="form-control" id="publish-time" placeholder="Choose time">
                              </div>
                              <div class="col-xl-4">
                                  <label for="product-status-add" class="form-label">Published Status</label>
                                  <select class="form-control" data-trigger name="product-status-add" id="product-status-add">
                                      <option value="Published">Published</option>
                                      <option value="Scheduled">Scheduled</option>
                                  </select>
                              </div>
                              <div class="col-xl-12 product-documents-container">
                                  <p class="fw-medium mb-2 fs-14">Warrenty Documents :</p>
                                  <input type="file" class="product-documents" name="filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane p-0 border-0" id="otherinfo-tab-pane" role="tabpanel" aria-labelledby="otherinfo-tab" tabindex="0">
                          <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-1">
                              <div class="fw-semibold d-block fs-15">Product Shipping & Handling :</div>
                              <button class="btn btn-secondary">Add Product<i class="bi bi-plus-lg ms-2"></i></button>
                          </div>
                          <div class="row gy-3">
                              <div class="col-xl-6">
                                  <label for="product-type" class="form-label">Packaging Type</label>
                                  <input type="text" class="form-control" id="product-type" placeholder="Type" value="Primary Pckaging">
                              </div>
                              <div class="col-xl-6">
                                  <label for="product-discount" class="form-label">Packaging Details</label>
                                  <input type="text" class="form-control" id="Packaging-Details" placeholder="Enter Packaging Details" value="Comes in a reusable garment bag">
                              </div>
                              <div class="col-xl-12">
                                  <label class="form-label">Handling Instructions</label>
                                  <textarea class="form-control" id="product-description-add" rows="2">Handle with care. Store in a cool, dry place away from direct sunlight.</textarea>
                              </div>
                              <div class="col-xl-7 product-documents-container">
                                  <p class="fw-medium mb-2 fs-14">Shipping Methods :</p>
                                  <div class="row gy-3">
                                      <div class="col-xxl-4">
                                          <div class="card custom-card mb-0 border card-style-6">
                                              <div class="card-body px-3 py-2">
                                                  <div class="d-flex align-items-center justify-content-between mb-0">
                                                      <div class="flex-grow-1">
                                                          Standard Shipping
                                                      </div>
                                                      <div class="min-w-fit-content">
                                                          <div class="d-flex gap-2">
                                                              <input class="form-check-input m-0" type="radio" id="address2" name="default-address1" checked="">
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-xxl-4">
                                          <div class="card custom-card border mb-0 card-style-6">
                                              <div class="card-body px-3 py-2">
                                                  <div class="d-flex align-items-center justify-content-between mb-0">
                                                      <div class="flex-grow-1">
                                                          Expedited Shipping
                                                      </div>
                                                      <div class="min-w-fit-content">
                                                          <div class="d-flex gap-2">
                                                              <input class="form-check-input m-0" type="radio" id="address2" name="default-address1">
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-xxl-4">
                                          <div class="card custom-card border mb-0 card-style-6">
                                              <div class="card-body px-3 py-2">
                                                  <div class="d-flex align-items-center justify-content-between mb-0">
                                                      <div class="flex-grow-1">
                                                          Overnight Shipping
                                                      </div>
                                                      <div class="min-w-fit-content">
                                                          <div class="d-flex gap-2">
                                                              <input class="form-check-input m-0" type="radio" id="address2" name="default-address1">
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-5 product-documents-container">
                                  <label class="form-label">Shipping Restrictions</label>
                                  <input type="text" class="form-control" id="product-shipping" placeholder="Enter Shipping Restrictions" value="This product cannot be shipped to P.O. boxes or APO/FPO addresses">
                              </div>
                          </div>
                          <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-1 mt-4">
                              <div class="fw-semibold d-block fs-15">Compliance and Legal :</div>
                          </div>
                          <div class="row gy-3">  
                              <div class="col-xl-12">
                                  <label for="product-type" class="form-label">Return Policy</label>
                                  <input type="text" class="form-control" id="Return-Policy" placeholder="Enter Return Policy" value="30-day return policy">
                              </div>
                              <div class="col-xl-12">
                                  <label class="form-label">Safety Information</label>
                                  <textarea class="form-control" id="product-description-add" rows="2">Warning:Choking hazard. Not suitable for children under 3 years.</textarea>
                              </div>
                              <div class="col-xl-12">
                                  <label class="form-label">Certifications</label>
                                  <input class="form-control" type="file" id="formFile">
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="card-footer border-top-0">
                      <div class="btn-list float-end">
                          <button class="btn btn-primary">Save Product<i class="bi bi-download ms-2"></i></button>
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