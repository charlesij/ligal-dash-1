@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Start::page-header -->
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Create NFT</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                          <li class="breadcrumb-item"><a href="javascript:void(0);">NFT</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Create NFT</li>
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
      <!-- End::page-header -->

      <!-- Start::row-1 -->
      <div class="row">
          <div class="col-xxl-12 col-xl-12">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">Create NFT</div>
                  </div>
                  <div class="card-body">
                      <div class="row gy-3 justify-content-between">
                          <div class="col-xxl-3 col-xl-12">
                              <div class="create-nft-item">
                                  <label class="form-label">Upload NFT</label>
                                  <input type="file" class="single-fileupload" name="filepond" accept="image/png, image/jpeg, image/gif">
                              </div>
                          </div>
                          <div class="col-xxl-9 col-xl-12">
                              <div class="row gy-3">
                                  <div class="col-xl-12">
                                      <label for="input-placeholder" class="form-label">NFT Title</label>
                                      <input type="text" class="form-control" id="input-placeholder" placeholder="eg:Neo-Nebulae">
                                  </div>
                                  <div class="col-xl-12">
                                      <label for="nft-description" class="form-label">NFT Description</label>
                                      <textarea class="form-control" id="nft-description" rows="3" placeholder="Enter Description"></textarea>
                                  </div>
                                  <div class="col-xl-6">
                                      <label class="form-label d-block">Method</label>
                                      <div class="row gy-3">
                                          <div class="col-md-4">
                                              <div class="card custom-card mb-0 border card-style-6">
                                                  <div class="card-body px-3 py-2">
                                                      <div class="d-flex align-items-center justify-content-between mb-0">
                                                          <div class="flex-grow-1">
                                                              <i class="ti ti-tag me-1 align-middle fs-15 d-inline-block"></i>Fixed Price
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
                                          <div class="col-md-4">
                                              <div class="card custom-card border mb-0 card-style-6">
                                                  <div class="card-body px-3 py-2">
                                                      <div class="d-flex align-items-center justify-content-between mb-0">
                                                          <div class="flex-grow-1 me-2">
                                                              <i class="ti ti-users fs-15 me-1 align-middle d-inline-block"></i>Open For Bids
                                                          </div>
                                                          <div class="min-w-fit-content">
                                                              <div class="d-flex gap-2">
                                                                  <input class="form-check-input m-0" type="radio" id="address3" name="default-address">
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="card custom-card border mb-0 card-style-6">
                                                  <div class="card-body px-3 py-2">
                                                      <div class="d-flex align-items-center justify-content-between mb-0">
                                                          <div class="flex-grow-1">
                                                              <i class="ti ti-hourglass-low fs-15 me-1 align-middle d-inline-block"></i>Timed Auction
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
                              </div>
                          </div>
                          <div class="col-xl-12">
                              <div class="row gy-3">
                                  <div class="col-xl-4">
                                      <label for="nft-link" class="form-label">External Link</label>
                                      <input type="text" class="form-control" id="nft-link" placeholder="External Link Here">
                                  </div>
                                  <div class="col-xl-4">
                                      <label for="nft-creator-name" class="form-label">Creator Name</label>
                                      <input type="text" class="form-control" id="nft-creator-name" placeholder="Enter Name">
                                  </div>
                                  <div class="col-xl-4">
                                      <label for="nft-price" class="form-label">NFT Price</label>
                                      <input type="text" class="form-control" id="nft-price" placeholder="Enter Price">
                                  </div>
                                  <div class="col-xl-4">
                                      <label for="nft-size" class="form-label">NFT Size</label>
                                      <input type="text" class="form-control" id="nft-size" placeholder="Enter Size">
                                  </div>
                                  <div class="col-xl-4">
                                      <label for="nft-royality" class="form-label">Royality</label>
                                      <select class="form-control" data-trigger name="nft-royality" id="nft-royality">
                                          <option value="">Choose Royalities</option>
                                          <option value="Choice 1">Flat Royalty</option>
                                          <option value="Choice 2">Graduated Royalty</option>
                                          <option value="Choice 3">Tiered Royalty</option>
                                          <option value="Choice 3">Time-Limited Royalty</option>
                                          <option value="Choice 3">Customized Royalty</option>
                                      </select>
                                  </div>
                                  <div class="col-xl-4">
                                      <label for="nft-property" class="form-label">Property</label>
                                      <input type="text" class="form-control" id="nft-property" placeholder="Enter Property">
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-5">
                              <div class="row">
                                <div class="col-xl-3">
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="checkebox-sm" checked="">
                                      <label class="form-check-label" for="checkebox-sm">
                                        Put On Sale
                                      </label>
                                  </div>
                                </div>
                                <div class="col-xl-4">
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="checkebox-sm1">
                                      <label class="form-check-label" for="checkebox-sm1">
                                        Instant Sale Price
                                      </label>
                                  </div>
                                </div>
                                <div class="col-xl-5">
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="checkebox-sm2">
                                      <label class="form-check-label" for="checkebox-sm2">
                                        UnLock One Purchaged
                                      </label>
                                  </div>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="card-footer text-end">
                      <a href="javascript:void(0);" class="btn btn-primary btn-wave waves-effect waves-light">Create NFT</a>
                  </div>
              </div>
          </div>
      </div>
      <!--End::row-1 -->

  </div>
</div>
<!-- End::app-content -->

@endsection