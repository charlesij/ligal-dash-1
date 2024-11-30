@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Start::page-header -->
      <div
          class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">NFT Details</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                          <li class="breadcrumb-item"><a href="javascript:void(0);">NFT</a></li>
                          <li class="breadcrumb-item active" aria-current="page">NFT Details</li>
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
          <div class="col-xxl-4 col-xl-12">
              <div class="row">
                  <div class="col-xxl-12 col-sm-12 mb-4">
                      <div
                          class="swiper swiper-preview-details bg-light nft-details-swiper product-details-page swiper-initialized swiper-horizontal swiper-backface-hidden">
                          <div class="swiper-wrapper" id="swiper-wrapper-fb3da8f89b677915" aria-live="polite">
                              <div class="swiper-slide p-2 bg-white">
                                  <img class="img-fluid" src="{{ asset('') }}/assets/images/nft-images/8.jpg" alt="img">
                              </div>
                              <div class="swiper-slide p-2 bg-white">
                                  <img class="img-fluid" src="{{ asset('') }}/assets/images/nft-images/2.jpg" alt="img">
                              </div>
                              <div class="swiper-slide p-2 bg-white"> <img class="img-fluid"
                                      src="{{ asset('') }}/assets/images/nft-images/4.jpg" alt="img">
                              </div>
                              <div class="swiper-slide p-2 bg-white"> <img class="img-fluid"
                                      src="{{ asset('') }}/assets/images/nft-images/5.jpg" alt="img">
                              </div>
                          </div>
                          <div class="swiper-button-next"></div>
                          <div class="swiper-button-prev"></div>
                      </div>
                      <div
                          class="swiper swiper-view-details mt-3 swiper-initialized swiper-horizontal swiper-free-mode swiper-watch-progress swiper-backface-hidden swiper-thumbs">
                          <div class="swiper-wrapper">
                              <div class="swiper-slide p-2 bg-white"> <img class="img-fluid"
                                      src="{{ asset('') }}/assets/images/nft-images/8.jpg" alt="img"> </div>
                              <div class="swiper-slide p-2 bg-white"> <img class="img-fluid"
                                      src="{{ asset('') }}/assets/images/nft-images/2.jpg" alt="img"> </div>
                              <div class="swiper-slide p-2 bg-white"> <img class="img-fluid"
                                      src="{{ asset('') }}/assets/images/nft-images/4.jpg" alt="img"> </div>
                              <div class="swiper-slide p-2 bg-white"> <img class="img-fluid"
                                      src="{{ asset('') }}/assets/images/nft-images/5.jpg" alt="img"> </div>
                          </div> <span class="swiper-notification" aria-live="assertive"
                              aria-atomic="true"></span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-8">
              <div class="card custom-card overflow-hidden">
                  <div class="card-body p-4">
                      <div>
                          <span class="badge bg-primary-transparent fs-14 float-end py-2 px-3">23hrs : 15mins : 32sec</span>
                          <p class="fs-22 fw-semibold mb-0">Digital Dream Space - NFT Digital Art</p>
                          <p class="fs-18 mb-3"> <i class="ri-heart-3-line fs-10 text-danger align-middle"></i>
                              <span class="fw-medium text-muted"><a class="text-primary fs-14"
                                      href="javascript:void(0);">(2.4k Likes)</a></span>
                          </p>
                          <div class="row mb-3 justify-content-between">
                              <div class="col-xxl-4 col-xl-12 d-flex align-items-center gap-3">
                                  <p class="mb-1"><span class="h3 fw-semibold"><sup
                                              class="fs-14">$</sup>2,499<sup class="fs-14">.00</sup></span>
                                  </p>
                                  <p class="mb-0 text-muted fs-12">M.R.P-<s>$1,299.00</s></p>
                              </div>
                              <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-xxl-0 mt-3">
                                  <p class="mb-1 text-muted fs-14 fw-medium">Creator</p>
                                  <div class="d-flex align-items-center fw-medium"> <span
                                          class="avatar avatar-xs avatar-rounded lh-1 me-1"><img
                                              src="{{ asset('') }}/assets/images/faces/9.jpg" alt=""></span> Luna Park
                                  </div>
                              </div>
                              <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-xxl-0 mt-3">
                                  <p class="mb-1 fs-14 text-muted fw-medium">Published</p><span
                                      class="d-block fw-medium">24, Jul 2024 - 12:45PM</span>
                              </div>
                          </div>
                          <div class="mb-3">
                              <p class="fs-15 fw-semibold mb-2">Description :</p>
                              <p class="text-muted mb-0 fs-13"> Digital Dreamscape" is a mesmerizing NFT
                                  artwork created by a renowned digital artist. This unique piece takes
                                  viewers on a journey through a vivid and ethereal world, where vibrant
                                  colors blend seamlessly with abstract forms. The artwork is a digital
                                  representation of the artist's imagination.<a href="javascript:void(0);"
                                      class="text-decoration-underline text-primary">Read More ?</a> </p>
                          </div>
                          <div class="mb-4 mt-4">
                              <p class="fs-15 fw-semibold mb-2">Bid Information :</p>
                              <div class="row">
                                  <div class="col-sm-2"> <span class="fw-semibold text-muted fs-14">Loan
                                          Amount :</span>
                                      <div class="d-flex align-items-center mt-1"> <span
                                              class="avatar avatar-xs"> <img
                                                  src="{{ asset('') }}/assets/images/crypto-currencies/crypto-icons/ethereum-eth-logo.svg"
                                                  alt=""> </span> <span class="ms-1 fw-medium">5.76</span>
                                      </div>
                                  </div>
                                  <div class="col-sm-2"> <span class="fw-semibold text-muted fs-14">APY
                                          :</span>
                                      <div class="d-flex align-items-center mt-1"> <span
                                              class="ms-1 fw-medium">10%</span> </div>
                                  </div>
                                  <div class="col-sm-2"> <span class="fw-semibold text-muted fs-14">List
                                          Duration :</span>
                                      <div class="d-flex align-items-center mt-1"> <span
                                              class="ms-1 fw-medium">20 Days</span> </div>
                                  </div>
                                  <div class="col-sm-3"> <span class="fw-semibold text-muted fs-14">Balckchain :</span>
                                      <div class="d-flex gap-1 mt-1 align-items-center"> <div class="avatar avatar-sm avatar-rounded p-1 bg-primary-transparent me-2 border border-primary border-opacity-10"> <img src="{{ asset('') }}/assets/images/crypto-currencies/regular/Ethereum.svg" alt=""> </div> <span class="mb-0 fs-14"> Ethereum</span> </div>
                                  </div>
                              </div>
                          </div>
                          <div class="p-3 bg-light rounded mb-3">
                              <div class="row gy-3">
                                  <div class="col-xl-3">
                                      <div
                                          class="p-3 border border-primary border-opacity-25 d-flex bg-white rounded flex-wrap">
                                          <span class="avatar avatar-md bg-primary avatar-rounded me-2"><i
                                                  class="ri-bard-fill fs-16"></i></span>
                                          <div>
                                              <h5 class="fw-semibold mb-0">+12.75K</h5>
                                              <span class="text-muted">Items Disployed</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-xl-3">
                                      <div
                                          class="p-3 border border-secondary border-opacity-25 d-flex bg-white rounded flex-wrap">
                                          <span class="avatar avatar-md bg-secondary avatar-rounded me-2"><i
                                                  class="ri-folder-image-fill fs-16"></i></span>
                                          <div>
                                              <h5 class="fw-semibold mb-0">10.6K</h5>
                                              <span class="text-muted">Art Works</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-xl-3">
                                      <div
                                          class="p-3 border border-success border-opacity-25 d-flex bg-white rounded flex-wrap">
                                          <span class="avatar avatar-md bg-success avatar-rounded me-2"><i
                                                  class="ri-group-fill fs-16"></i></span>
                                          <div>
                                              <h5 class="fw-semibold mb-0">9.55K</h5>
                                              <span class="text-muted">Owners</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-xl-3">
                                      <div
                                          class="p-3 border border-info border-opacity-25 d-flex bg-white rounded flex-wrap">
                                          <span class="avatar avatar-md bg-info avatar-rounded me-2"><i
                                                  class="ri-star-fill fs-16"></i></span>
                                          <div>
                                              <h5 class="fw-semibold mb-0">9.2/10</h5>
                                              <span class="text-muted">Total Rating</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-xl-6">
                                  <div class="d-flex gap-1 mb-2 mb-xl-0 flex-wrap">
                                      <button
                                          class="btn btn-primary mb-0 btn-wave btn-w-lg me-1 waves-effect waves-light">Place
                                          a bid
                                      </button>
                                      <button
                                          class="btn btn-secondary mb-0 btn-wave btn-w-lg  waves-effect waves-light">Buy
                                          Now
                                      </button>
                                  </div>
                              </div>
                              <div class="col-xl-6 d-flex justify-content-end align-items-center">
                                  <div class="">
                                      <p
                                          class="fs-12 bg-success-transparent badge rounded-pill text-end mb-0">
                                          <i class="ri-eye-line text-success me-1 align-middle"></i> <span
                                              class="fw-medium"><a href="javascript:void(0);"></a>3.5k
                                              Views</span>
                                      </p>
                                      <p
                                          class="fs-12 bg-secondary-transparent badge rounded-pill text-end mb-0">
                                          <i class="ri-share-line text-secondary me-1 align-middle"></i> <span
                                              class="fw-medium"><a href="javascript:void(0);"></a>Share</span>
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xl-8">
              <div class="card custom-card">
                  <div class="card-header p-0">
                      <ul class="nav nav-tabs tab-style-8 scaleX mb-0 d-flex" id="myTab1" role="tablist">
                          <li class="nav-item me-0" role="presentation">
                              <button class="nav-link px-4 py-3 active" id="allorders" data-bs-toggle="tab"
                                  data-bs-target="#allorders-pane" type="button" role="tab"
                                  aria-controls="allorders-pane" aria-selected="true">Description</button>
                          </li>
                          <li class="nav-item me-0" role="presentation">
                              <button class="nav-link px-4 py-3" id="pending" data-bs-toggle="tab"
                                  data-bs-target="#pending-pane" type="button" role="tab"
                                  aria-controls="pending-pane" aria-selected="false" tabindex="-1">Rating &
                                  Reviews</button>
                          </li>
                      </ul>
                  </div>
                  <div class="card-body">
                      <div class="tab-content p-0" id="myTabContent">
                          <div class="tab-pane p-0 border-0 active show" id="allorders-pane" role="tabpanel"
                              aria-labelledby="allorders" tabindex="0">
                              <div class="row">
                                  <div class="col-xl-8">
                                      <div class="table-responsive">
                                          <table class="table table-bordered text-nowrap">
                                              <tbody>
                                                  <tr>
                                                      <th scope="row" class="fw-medium"> Artist Name </th>
                                                      <td>Jack Miller</td>
                                                  </tr>
                                                  <tr>
                                                      <th scope="row" class="fw-medium"> Royality </th>
                                                      <td> 10% royalty paid to the artist on secondary sales
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <th scope="row" class="fw-medium"> Total Bids </th>
                                                      <td> 32 </td>
                                                  </tr>
                                                  <tr>
                                                      <th scope="row" class="fw-medium"> Current Owner </th>
                                                      <td> Nikki Jones </td>
                                                  </tr>
                                                  <tr>
                                                      <th scope="row" class="fw-medium"> NFT Type </th>
                                                      <td> Digital art work </td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                      </div>
                                  </div>
                                  <div class="col-xl-4">
                                      <div class="">
                                          <p class="fs-15 fw-medium mb-2">Features :</p>
                                          <div class="row">
                                              <div class="col-xl-12">
                                                  <ul class="mb-0 ps-3">
                                                      <li class="text-muted mb-2"> NFT Title: "DIgital Dream
                                                          Space"
                                                      </li>
                                                      <li class="text-muted mb-2"> Edition: Limited edition of
                                                          25
                                                      </li>
                                                      <li class="text-muted mb-2"> Medium: Digital art </li>
                                                      <li class="text-muted mb-2"> Creation Date: July 1, 2024
                                                      </li>
                                                      <li class="text-muted mb-2"> Average Rating: 4.8/5 </li>
                                                      <li class="text-muted"> Dimensions: 3000x2000 pixels
                                                      </li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="mt-3">
                                  <p class="fs-15 fw-medium mb-2">Attributes :</p>
                                  <div class="row row-cols-xxl-5 row-col-xl-3 row-cols-md-2 gy-2 row-cols-1">
                                      <div class="col">
                                          <div class="p-3 border rounded d-flex gap-2 flex-wrap">
                                              <span class="avatar avatar-md bg-primary-transparent"><i
                                                      class="ri-color-filter-fill fs-18"></i></span>
                                              <div>
                                                  <span class="text-muted fs-12">Background</span>
                                                  <p class="mb-0 fw-semibold fs-15">Purple</p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="p-3 border rounded d-flex gap-2 flex-wrap">
                                              <span class="avatar avatar-md bg-secondary-transparent"><i
                                                      class="ri-medium-fill fs-18"></i></span>
                                              <div>
                                                  <span class="text-muted fs-12">Medium</span>
                                                  <p class="mb-0 fw-semibold fs-15">3D digital</p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="p-3 border rounded d-flex gap-2 flex-wrap">
                                              <span class="avatar avatar-md bg-success-transparent"><i
                                                      class="ri-money-euro-circle-fill fs-18"></i></span>
                                              <div>
                                                  <span class="text-muted fs-12">Block Chain</span>
                                                  <p class="mb-0 fw-semibold fs-15">Etherium</p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="p-3 border rounded d-flex gap-2 flex-wrap">
                                              <span class="avatar avatar-md bg-info-transparent"><i
                                                      class="ri-basketball-fill fs-18"></i></span>
                                              <div>
                                                  <span class="text-muted fs-12">Flur</span>
                                                  <p class="mb-0 fw-semibold fs-15">Solid Gold</p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="p-3 border rounded d-flex gap-2 flex-wrap">
                                              <span class="avatar avatar-md bg-warning-transparent"><i
                                                      class="ri-palette-fill fs-18"></i></span>
                                              <div>
                                                  <span class="text-muted fs-12">Visual Theme</span>
                                                  <p class="mb-0 fw-semibold fs-15">Futuristic</p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="tab-pane p-0 border-0" id="pending-pane" role="tabpanel"
                              aria-labelledby="pending" tabindex="0">
                              <div class="row">
                                  <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                      <div class="d-flex align-items-top mb-3">
                                          <div class="me-2 lh-1"> <i
                                                  class="ri-star-fill fs-25 text-warning"></i>
                                          </div>
                                          <div class="lh-1">
                                              <p class="mb-1">4.2 out of 5</p>
                                              <p class="mb-0 text-muted fs-11">Based on (23) ratings</p>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center mb-3">
                                          <div class="fs-12 me-2 fw-medium">5 <i
                                                  class="ri-star-fill fs-10"></i></div>
                                          <div class="progress progress-xs flex-fill">
                                              <div class="progress-bar bg-success" role="progressbar"
                                                  style="width: 55%" aria-valuenow="55" aria-valuemin="0"
                                                  aria-valuemax="100"> </div>
                                          </div>
                                          <div class="text-muted ms-2 fs-12">(10)</div>
                                      </div>
                                      <div class="d-flex align-items-center mb-3">
                                          <div class="fs-12 me-2 fw-medium">4 <i
                                                  class="ri-star-fill fs-10"></i></div>
                                          <div class="progress progress-xs flex-fill">
                                              <div class="progress-bar bg-success" role="progressbar"
                                                  style="width: 22%" aria-valuenow="22" aria-valuemin="0"
                                                  aria-valuemax="100"> </div>
                                          </div>
                                          <div class="text-muted ms-2 fs-12">(6)</div>
                                      </div>
                                      <div class="d-flex align-items-center mb-3">
                                          <div class="fs-12 me-2 fw-medium">3 <i
                                                  class="ri-star-fill fs-10"></i></div>
                                          <div class="progress progress-xs flex-fill">
                                              <div class="progress-bar bg-success" role="progressbar"
                                                  style="width: 8%" aria-valuenow="8" aria-valuemin="0"
                                                  aria-valuemax="100"> </div>
                                          </div>
                                          <div class="text-muted ms-2 fs-12">(4)</div>
                                      </div>
                                      <div class="d-flex align-items-center mb-3">
                                          <div class="fs-12 me-2 fw-medium">2 <i
                                                  class="ri-star-fill fs-10"></i></div>
                                          <div class="progress progress-xs flex-fill">
                                              <div class="progress-bar bg-warning" role="progressbar"
                                                  style="width: 9%" aria-valuenow="9" aria-valuemin="0"
                                                  aria-valuemax="100"> </div>
                                          </div>
                                          <div class="text-muted ms-2 fs-12">(1)</div>
                                      </div>
                                      <div class="d-flex align-items-center">
                                          <div class="fs-12 me-2 fw-medium">1 <i
                                                  class="ri-star-fill fs-10"></i></div>
                                          <div class="progress progress-xs flex-fill">
                                              <div class="progress-bar bg-danger" role="progressbar"
                                                  style="width: 6%" aria-valuenow="6" aria-valuemin="0"
                                                  aria-valuemax="100"> </div>
                                          </div>
                                          <div class="text-muted ms-2 fs-12">(1)</div>
                                      </div>
                                  </div>
                                  <div
                                      class="col-xxl-8 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-3">
                                      <div class="border rounded p-3">
                                          <div class="d-sm-flex d-block align-items-top mb-3">
                                              <div class="d-flex flex-fill">
                                                  <div class="me-2"> <span
                                                          class="avatar avatar-sm avatar-rounded">
                                                          <img src="{{ asset('') }}/assets/images/faces/15.jpg" alt="">
                                                      </span>
                                                  </div>
                                                  <div class="lh-1 me-2">
                                                      <p class="mb-1 fw-medium fs-14">Christopher</p>
                                                      <div class="mb-1"> <i
                                                              class="ri-star-fill text-warning align-middle fs-12"></i>
                                                          <i
                                                              class="ri-star-fill text-warning align-middle fs-12"></i>
                                                          <i
                                                              class="ri-star-fill text-warning align-middle fs-12"></i>
                                                          <i
                                                              class="ri-star-fill text-warning align-middle fs-12"></i>
                                                          <i
                                                              class="ri-star-line text-warning align-middle fs-12"></i>
                                                      </div>
                                                      <div class="fs-11 text-muted"> Reviewed on 24 nov,2024
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="ps-sm-0 mt-sm-0 mt-3 ps-sm-0 ps-2"> <span
                                                      class="badge bg-success">Verified Purchase</span> </div>
                                          </div>
                                          <div class="ps-sm-4 ps-0 mb-3">
                                              <p class="fw-medium mb-1 ps-2">Truely amazing NFT😀</p>
                                              <p class="mb-0 fs-12 text-muted ps-2">Digital Dreamspace is a
                                                  truly
                                                  captivating NFT that takes you on an unforgettable journey.
                                                  The
                                                  artwork's vivid colors and ethereal elements create a sense
                                                  of
                                                  tranquility and wonder </p>
                                          </div>
                                          <div class="product-images ps-sm-4 ps-0">
                                              <div class="row">
                                                  <div class="col-xl-6">
                                                      <div class="products-review-images"> <a
                                                              href="javascript:void(0);"> <img
                                                                  src="{{ asset('') }}/assets/images/nft-images/13.jpg"
                                                                  alt="">
                                                          </a> <a href="javascript:void(0);"> <img
                                                                  src="{{ asset('') }}/assets/images/nft-images/15.jpg"
                                                                  alt="">
                                                          </a> </div>
                                                  </div>
                                                  <div
                                                      class="col-xl-6 d-flex align-items-end justify-content-sm-end mt-sm-0 mt-2">
                                                      <button class="btn btn-sm btn-light me-2">Report
                                                          abuse</button>
                                                      <button
                                                          class="btn btn-sm btn-icon btn-primary-light me-2">
                                                          <i class="ri-thumb-up-line"></i> </button> <button
                                                          class="btn btn-sm btn-icon btn-primary-light"> <i
                                                              class="ri-thumb-down-line"></i> </button>
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
              <div class="d-flex gap-1 align-items-center justify-content-between mb-3">
                  <h6 class="fw-medium mb-0">Explore More NFT's:</h6> <a href="javascript:void(0);"
                      class="btn btn-primary-light btn-sm ms-auto"> View More </a>
              </div>
              <div class="swiper swiper-related-jobs">
                  <div class="swiper-wrapper">
                      <div class="swiper-slide">
                          <div class="row">
                              <div class="col-xxl-4 col-lg-6">
                                  <div class="card custom-card">
                                      <div class="card-body">
                                          <div class="position-relative mb-3 overflow-hidden rounded">
                                              <img src="{{ asset('') }}/assets/images/nft-images/3.jpg" class="card-img rounded" alt="...">
                                              <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                              <div class="nft-content">
                                                  <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">CryptoCanvas</a>
                                                  <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                      <div> 
                                                          <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                          <span class="fw-medium text-fixed-white d-block lh-1">PixelCraftPro</span>
                                                      </div>
                                                      <div class="text-end">
                                                          <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                          <div class="d-flex align-items-center">
                                                              <span class="avatar avatar-xs">
                                                                  <img src="{{ asset('') }}/assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                              </span>
                                                              <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">2.78</span>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="d-grid">
                                              <button class="btn btn-primary btn-wave waves-effect waves-light">
                                                  Place BId
                                              </button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xxl-4 col-lg-6">
                                  <div class="card custom-card">
                                      <div class="card-body">
                                          <div class="position-relative mb-3 overflow-hidden rounded">
                                              <img src="{{ asset('') }}/assets/images/nft-images/4.jpg" class="card-img rounded" alt="...">
                                              <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                              <div class="nft-content">
                                                  <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">CryptoCanvas</a>
                                                  <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                      <div> 
                                                          <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                          <span class="fw-medium text-fixed-white d-block lh-1">PixelCraftPro</span>
                                                      </div>
                                                      <div class="text-end">
                                                          <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                          <div class="d-flex align-items-center">
                                                              <span class="avatar avatar-xs">
                                                                  <img src="{{ asset('') }}/assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                              </span>
                                                              <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">2.78</span>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="d-grid">
                                              <button class="btn btn-primary btn-wave waves-effect waves-light">
                                                  Place BId
                                              </button>
                                          </div>   
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xxl-4 col-lg-6">
                                  <div class="card custom-card">
                                      <div class="card-body">
                                          <div class="position-relative mb-3 overflow-hidden rounded">
                                              <img src="{{ asset('') }}/assets/images/nft-images/5.jpg" class="card-img rounded" alt="...">
                                              <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                              <div class="nft-content">
                                                  <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">CryptoCanvas</a>
                                                  <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                      <div> 
                                                          <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                          <span class="fw-medium text-fixed-white d-block lh-1">PixelCraftPro</span>
                                                      </div>
                                                      <div class="text-end">
                                                          <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                          <div class="d-flex align-items-center">
                                                              <span class="avatar avatar-xs">
                                                                  <img src="{{ asset('') }}/assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                              </span>
                                                              <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">2.78</span>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="d-grid">
                                              <button class="btn btn-primary btn-wave waves-effect waves-light">
                                                  Place BId
                                              </button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="row">
                              <div class="col-xxl-4 col-lg-6">
                                  <div class="card custom-card">
                                      <div class="card-body">
                                          <div class="position-relative mb-3 overflow-hidden rounded">
                                              <img src="{{ asset('') }}/assets/images/nft-images/2.jpg" class="card-img rounded" alt="...">
                                              <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                              <div class="nft-content">
                                                  <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">CryptoCanvas</a>
                                                  <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                      <div> 
                                                          <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                          <span class="fw-medium text-fixed-white d-block lh-1">PixelCraftPro</span>
                                                      </div>
                                                      <div class="text-end">
                                                          <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                          <div class="d-flex align-items-center">
                                                              <span class="avatar avatar-xs">
                                                                  <img src="{{ asset('') }}/assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                              </span>
                                                              <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">2.78</span>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="d-grid">
                                              <button class="btn btn-primary btn-wave waves-effect waves-light">
                                                  Place BId
                                              </button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xxl-4 col-lg-6">
                                  <div class="card custom-card">
                                      <div class="card-body">
                                          <div class="position-relative mb-3 overflow-hidden rounded">
                                              <img src="{{ asset('') }}/assets/images/nft-images/5.jpg" class="card-img rounded" alt="...">
                                              <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                              <div class="nft-content">
                                                  <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">CryptoCanvas</a>
                                                  <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                      <div> 
                                                          <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                          <span class="fw-medium text-fixed-white d-block lh-1">PixelCraftPro</span>
                                                      </div>
                                                      <div class="text-end">
                                                          <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                          <div class="d-flex align-items-center">
                                                              <span class="avatar avatar-xs">
                                                                  <img src="{{ asset('') }}/assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                              </span>
                                                              <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">2.78</span>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="d-grid">
                                              <button class="btn btn-primary btn-wave waves-effect waves-light">
                                                  Place BId
                                              </button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xxl-4 col-lg-6">
                                  <div class="card custom-card">
                                      <div class="card-body">
                                          <div class="position-relative mb-3 overflow-hidden rounded">
                                              <img src="{{ asset('') }}/assets/images/nft-images/6.jpg" class="card-img rounded" alt="...">
                                              <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                              <div class="nft-content">
                                                  <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">CryptoCanvas</a>
                                                  <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                      <div> 
                                                          <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                          <span class="fw-medium text-fixed-white d-block lh-1">PixelCraftPro</span>
                                                      </div>
                                                      <div class="text-end">
                                                          <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                          <div class="d-flex align-items-center">
                                                              <span class="avatar avatar-xs">
                                                                  <img src="{{ asset('') }}/assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                              </span>
                                                              <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">2.78</span>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="d-grid">
                                              <button class="btn btn-primary btn-wave waves-effect waves-light">
                                                  Place BId
                                              </button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
              </div>
          </div>
          <div class="col-xl-4">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">Available Modes Of Buying </div>
                  </div> 
                  <div class="card-body">
                    <div class="row gy-3">
                      <div class="col-xxl-4">
                        <div class="p-3 bg-light border rounded text-center">
                              <span class="avatar avatar-md bg-primary-transparent border border-primary border-primary border-opacity-25 rounded-pill"><i class="ri-price-tag-2-line fs-18"></i></span>
                              <h6 class="mt-3 mb-0">Fixed Price</h6>
                          </div>
                      </div>
                      <div class="col-xxl-4">
                          <div class="p-3 bg-light border rounded text-center">
                                <span class="avatar avatar-md bg-secondary-transparent border border-secondary border-secondary border-opacity-25 rounded-pill"><i class="ri-shield-check-line fs-18"></i></span>
                                <h6 class="mt-3 mb-0">Open For Bids</h6>
                            </div>
                        </div>
                        <div class="col-xxl-4">
                          <div class="p-3 bg-light border rounded text-center">
                                <span class="avatar avatar-md bg-success-transparent border border-success border-success border-opacity-25 rounded-pill"><i class="ri-hourglass-line fs-18"></i></span>
                                <h6 class="mt-3 mb-0">Timed Auction</h6>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">Featured NFT's </div>
                  </div>
                  <div class="card-body p-0">
                      <div class="table-responsive">
                          <table class="table text-nowrap">
                              <tbody>
                                  <tr>
                                      <td> <a href="javascript:void(0);">
                                              <div class="d-flex align-items-top">
                                                  <div class="avatar p-1 bg-gray-300 me-2"> <img
                                                          src="{{ asset('') }}/assets/images/nft-images/16.jpg" alt="">
                                                  </div>
                                                  <div class="flex-fill">
                                                      <p
                                                          class="mb-0 fs-14 fw-medium similar-product-name text-truncate">
                                                          Digital Masterpieces</p>
                                                      <p class="mb-0">
                                                          <span class="text-muted ms-1">This Month's Top Picks</span>
                                                      </p>
                                                  </div>

                                              </div>
                                          </a>
                                      </td>
                                      <td>
                                          <span class="badge bg-primary-transparent">13.2k<i
                                              class="ri-heart-3-line fs-10 align-middle ms-1"></i></span>
                                      </td>
                                      <td>
                                          <div>
                                              <p class="mb-0 fw-semibold d-flex align-items-center fs-16 justify-content-end"><span
                                                  class="avatar avatar-xs avatar-rounded p-1"><img
                                                      src="{{ asset('') }}/assets/images/crypto-currencies/regular/Ethereum.svg"
                                                      alt=""></span>0.234<span class="text-muted fs-12 mt-1 ms-1">ETH</span></p>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td> <a href="javascript:void(0);">
                                              <div class="d-flex align-items-top">
                                                  <div class="avatar p-1 bg-gray-300 me-2"> <img
                                                          src="{{ asset('') }}/assets/images/nft-images/17.jpg" alt="">
                                                  </div>
                                                  <div class="flex-fill">
                                                      <p
                                                          class="mb-0  fs-14 fw-medium similar-product-name text-truncate">
                                                          NFT Spotlight</p>
                                                      <p class="mb-0">
                                                          <span class="text-muted ms-1">Curated Gems</span>
                                                      </p>
                                                  </div>
                                              </div>
                                          </a>
                                      </td>
                                      <td>
                                          <span class="badge bg-secondary-transparent">5.2k<i
                                                  class="ri-heart-3-line fs-10 align-middle ms-1"></i></span>
                                      </td>
                                      <td>
                                          <div>
                                              <p class="mb-0 fw-semibold d-flex align-items-center fs-16 justify-content-end"><span
                                                  class="avatar avatar-xs avatar-rounded p-1"><img
                                                      src="{{ asset('') }}/assets/images/crypto-currencies/regular/Ethereum.svg"
                                                      alt=""></span>4.256<span class="text-muted fs-12 mt-1 ms-1">ETH</span></p>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td> <a href="javascript:void(0);">
                                              <div class="d-flex align-items-top">
                                                  <div class="avatar p-1 bg-gray-300 me-2"> <img
                                                          src="{{ asset('') }}/assets/images/nft-images/18.jpg" alt="">
                                                  </div>
                                                  <div class="flex-fill">
                                                      <p
                                                          class="mb-0 fw-medium similar-product-name text-truncate">
                                                          Exclusive Creations</p>
                                                      <p class="mb-0">
                                                          <span class="text-muted ms-1"> Featured of the Week</span>
                                                      </p>
                                                  </div>

                                              </div>
                                          </a>
                                      </td>
                                      <td>
                                          <span class="badge bg-success-transparent">2.4k<i
                                                  class="ri-heart-3-line fs-10 align-middle ms-1"></i></span>
                                      </td>
                                      <td>
                                          <div>
                                              <p class="mb-0 fw-semibold d-flex align-items-center fs-16 justify-content-end"><span
                                                  class="avatar avatar-xs avatar-rounded p-1"><img
                                                      src="{{ asset('') }}/assets/images/crypto-currencies/regular/Ethereum.svg"
                                                      alt=""></span>3.124<span class="text-muted fs-12 mt-1 ms-1">ETH</span></p>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td> <a href="javascript:void(0);">
                                              <div class="d-flex align-items-top">
                                                  <div class="avatar p-1 bg-gray-300 me-2"> <img
                                                          src="{{ asset('') }}/assets/images/nft-images/10.jpg" alt="">
                                                  </div>
                                                  <div class="flex-fill">
                                                      <p
                                                          class="mb-0 fw-medium similar-product-name text-truncate">
                                                          Top-Tier Tokens</p>
                                                      <p class="mb-0">
                                                          <span class="text-muted ms-1">Discover the Best NFTs</span>
                                                      </p>
                                                  </div>

                                              </div>
                                          </a>
                                      </td>
                                      <td>
                                          <span class="badge bg-info-transparent">1.8k<i
                                                  class="ri-heart-3-line fs-10 align-middle ms-1"></i></span>
                                      </td>
                                      <td>
                                          <div>
                                              <p class="mb-0 fw-semibold d-flex align-items-center fs-16 justify-content-end"><span
                                                  class="avatar avatar-xs avatar-rounded p-1"><img
                                                      src="{{ asset('') }}/assets/images/crypto-currencies/regular/Ethereum.svg"
                                                      alt=""></span>1.263<span class="text-muted fs-12 mt-1 ms-1">ETH</span></p>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td> <a href="javascript:void(0);">
                                              <div class="d-flex align-items-top">
                                                  <div class="avatar p-1 bg-gray-300 me-2"> <img
                                                          src="{{ asset('') }}/assets/images/nft-images/11.jpg" alt="">
                                                  </div>
                                                  <div class="flex-fill">
                                                      <p
                                                          class="mb-0 fw-medium similar-product-name text-truncate">
                                                          Curated Collection</p>
                                                      <p class="mb-0">
                                                          <span class="text-muted ms-1">Featured NFT Showcase</span>
                                                      </p>
                                                  </div>

                                              </div>
                                          </a>
                                      </td>
                                      <td>
                                          <span class="badge bg-warning-transparent">12.9k<i
                                                  class="ri-heart-3-line fs-10 align-middle ms-1"></i></span>
                                      </td>
                                      <td>
                                          <div>
                                              <p class="mb-0 fw-semibold d-flex align-items-center fs-16 justify-content-end"><span
                                                  class="avatar avatar-xs avatar-rounded p-1"><img
                                                      src="{{ asset('') }}/assets/images/crypto-currencies/regular/Ethereum.svg"
                                                      alt=""></span>2.356<span class="text-muted fs-12 mt-1 ms-1">ETH</span></p>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td> <a href="javascript:void(0);">
                                              <div class="d-flex align-items-top">
                                                  <div class="avatar p-1 bg-gray-300 me-2"> <img
                                                          src="{{ asset('') }}/assets/images/nft-images/9.jpg" alt="">
                                                  </div>
                                                  <div class="flex-fill">
                                                      <p
                                                          class="mb-0 fw-medium similar-product-name text-truncate">
                                                          Digital Treasures</p>
                                                      <p class="mb-0">
                                                          <span class="text-muted ms-1">Spotlight on Unique</span>
                                                      </p>
                                                  </div>

                                              </div>
                                          </a>
                                      </td>
                                      <td>
                                          <span class="badge bg-danger-transparent">11.2k<i
                                                  class="ri-heart-3-line fs-10 align-middle ms-1"></i></span>
                                      </td>
                                      <td>
                                          <div>
                                              <p class="mb-0 fw-semibold d-flex align-items-center fs-16 justify-content-end"><span
                                                  class="avatar avatar-xs avatar-rounded p-1"><img
                                                      src="{{ asset('') }}/assets/images/crypto-currencies/regular/Ethereum.svg"
                                                      alt=""></span>0.874<span class="text-muted fs-12 mt-1 ms-1">ETH</span></p>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td> <a href="javascript:void(0);">
                                              <div class="d-flex align-items-top">
                                                  <div class="avatar p-1 bg-gray-300 me-2"> <img
                                                          src="{{ asset('') }}/assets/images/nft-images/13.jpg" alt="">
                                                  </div>
                                                  <div class="flex-fill">
                                                      <p
                                                          class="mb-0 fw-medium similar-product-name text-truncate">
                                                          Innovative Impression</p>
                                                      <p class="mb-0">
                                                          <span class="text-muted ms-1">Highlighted NFTs</span>
                                                      </p>
                                                  </div>

                                              </div>
                                          </a>
                                      </td>
                                      <td>
                                          <span class="badge bg-success-transparent">12.67k<i
                                                  class="ri-heart-3-line fs-10 align-middle ms-1"></i></span>
                                      </td>
                                      <td>
                                          <div>
                                              <p class="mb-0 fw-semibold d-flex align-items-center fs-16 justify-content-end"><span
                                                  class="avatar avatar-xs avatar-rounded p-1"><img
                                                      src="{{ asset('') }}/assets/images/crypto-currencies/regular/Ethereum.svg"
                                                      alt=""></span>0.127<span class="text-muted fs-12 mt-1 ms-1">ETH</span></p>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td> <a href="javascript:void(0);">
                                              <div class="d-flex align-items-top">
                                                  <div class="avatar p-1 bg-gray-300 me-2"> <img
                                                          src="{{ asset('') }}/assets/images/nft-images/12.jpg" alt="">
                                                  </div>
                                                  <div class="flex-fill">
                                                      <p
                                                          class="mb-0 fw-medium similar-product-name text-truncate">
                                                          Iconic Drops</p>
                                                      <p class="mb-0">
                                                          <span class="text-muted ms-1">Featured Digital Assets</span>
                                                      </p>
                                                  </div>

                                              </div>
                                          </a>
                                      </td>
                                      <td>
                                          <span class="badge bg-primary-transparent">4.5k<i
                                                  class="ri-heart-3-line fs-10 align-middle ms-1"></i></span>
                                      </td>
                                      <td>
                                          <div>
                                              <p class="mb-0 fw-semibold d-flex align-items-center fs-16 justify-content-end"><span
                                                  class="avatar avatar-xs avatar-rounded p-1"><img
                                                      src="{{ asset('') }}/assets/images/crypto-currencies/regular/Ethereum.svg"
                                                      alt=""></span>4.643<span class="text-muted fs-12 mt-1 ms-1">ETH</span></p>
                                          </div>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                      <div class="d-grid my-3 px-3"> <a href="javascript:void(0);"
                              class="btn btn-primary m-1">View All NFT's</a> </div>
                  </div>
              </div>
          </div>
      </div>
      <!--End::row-1 -->

  </div>
</div>
<!-- End::app-content -->

@endsection