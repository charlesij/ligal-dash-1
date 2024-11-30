@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Start::page-header -->
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Live Auction</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                          <li class="breadcrumb-item"><a href="javascript:void(0);">NFT</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Live Auction</li>
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
          <div class="col-xxl-9 col-xl-8 col-lg-12">
              <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-4">
                  <div class="nft-tag nft-tag-primary active">
                      <a href="javascript:void(0);" class="stretched-link"></a>
                      <span class="nft-tag-icon"><i class="ti ti-world fs-20"></i></span>
                      <span class="nft-tag-text">All</span>
                  </div>
                  <div class="nft-tag nft-tag-secondary">
                      <a href="javascript:void(0);" class="stretched-link"></a>
                      <span class="nft-tag-icon"><i class="ti ti-flame fs-20"></i></span>
                      <span class="nft-tag-text">New Trends</span>
                  </div>
                  <div class="nft-tag nft-tag-info">
                      <a href="javascript:void(0);" class="stretched-link"></a>
                      <span class="nft-tag-icon"><i class="ti ti-palette fs-20"></i></span>
                      <span class="nft-tag-text">Art Work</span>
                  </div>
                  <div class="nft-tag nft-tag-success">
                      <a href="javascript:void(0);" class="stretched-link"></a>
                      <span class="nft-tag-icon"><i class="ti ti-device-gamepad-2 fs-20"></i></span>
                      <span class="nft-tag-text">Games</span>
                  </div>
                  <div class="nft-tag nft-tag-danger">
                      <a href="javascript:void(0);" class="stretched-link"></a>
                      <span class="nft-tag-icon"><i class="ti ti-tie fs-20"></i></span>
                      <span class="nft-tag-text">Fashion</span>
                  </div>
                  <div class="nft-tag nft-tag-warning">
                      <a href="javascript:void(0);" class="stretched-link"></a>
                      <span class="nft-tag-icon"><i class="ti ti-music fs-20"></i></span>
                      <span class="nft-tag-text">Music</span>
                  </div>
                  <div class="nft-tag nft-tag-primary">
                      <a href="javascript:void(0);" class="stretched-link"></a>
                      <span class="nft-tag-icon"><i class="ti ti-home fs-20"></i></span>
                      <span class="nft-tag-text">Real Estate</span>
                  </div>
                  <div class="nft-tag nft-tag-dark">
                      <a href="javascript:void(0);" class="stretched-link"></a>
                      <span class="nft-tag-icon"><i class="ti ti-gift fs-20"></i></span>
                      <span class="nft-tag-text">Others</span>
                  </div>
              </div>
              <div class="row">
                  <h6 class="fw-medium mb-3">Live Auction:</h6>
                  <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="position-relative mb-3 overflow-hidden rounded">
                                  <img src="{{ asset('') }}/assets/images/nft-images/3.jpg" class="card-img rounded" alt="...">
                                  <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                  <div class="nft-content">
                                      <a href="javascript:v0id(0);" class="fs-14 fw-bold text-fixed-white">CryptoCanvas</a>
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
                  <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="position-relative mb-3 overflow-hidden rounded">
                                  <img src="{{ asset('') }}/assets/images/nft-images/4.jpg" class="card-img rounded" alt="...">
                                  <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                  <div class="nft-content">
                                      <a href="javascript:v0id(0);" class="fs-14 fw-bold text-fixed-white">CryptoCanvas</a>
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
                  <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="position-relative mb-3 overflow-hidden rounded">
                                  <img src="{{ asset('') }}/assets/images/nft-images/5.jpg" class="card-img rounded" alt="...">
                                  <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                  <div class="nft-content">
                                      <a href="javascript:v0id(0);" class="fs-14 fw-bold text-fixed-white">CryptoCanvas</a>
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
                  <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="position-relative mb-3 overflow-hidden rounded">
                                  <img src="{{ asset('') }}/assets/images/nft-images/2.jpg" class="card-img rounded" alt="...">
                                  <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                  <div class="nft-content">
                                      <a href="javascript:v0id(0);" class="fs-14 fw-bold text-fixed-white">CryptoCanvas</a>
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
                  <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="position-relative mb-3 overflow-hidden rounded">
                                  <img src="{{ asset('') }}/assets/images/nft-images/5.jpg" class="card-img rounded" alt="...">
                                  <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                  <div class="nft-content">
                                      <a href="javascript:v0id(0);" class="fs-14 fw-bold text-fixed-white">CryptoCanvas</a>
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
                  <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="position-relative mb-3 overflow-hidden rounded">
                                  <img src="{{ asset('') }}/assets/images/nft-images/6.jpg" class="card-img rounded" alt="...">
                                  <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                  <div class="nft-content">
                                      <a href="javascript:v0id(0);" class="fs-14 fw-bold text-fixed-white">CryptoCanvas</a>
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
                  <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="position-relative mb-3 overflow-hidden rounded">
                                  <img src="{{ asset('') }}/assets/images/nft-images/7.jpg" class="card-img rounded" alt="...">
                                  <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                  <div class="nft-content">
                                      <a href="javascript:v0id(0);" class="fs-14 fw-bold text-fixed-white">CryptoCanvas</a>
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
                  <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="position-relative mb-3 overflow-hidden rounded">
                                  <img src="{{ asset('') }}/assets/images/nft-images/8.jpg" class="card-img rounded" alt="...">
                                  <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                  <div class="nft-content">
                                      <a href="javascript:v0id(0);" class="fs-14 fw-bold text-fixed-white">CryptoCanvas</a>
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
                  <nav aria-label="Page navigation">
                      <ul class="pagination justify-content-end mb-4">
                          <li class="page-item disabled">
                              <a class="page-link">Previous</a>
                          </li>
                          <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                          <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                          <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                          <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">Next</a>
                          </li>
                      </ul>
                  </nav>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-4 col-lg-12">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="card custom-card overflow-hidden">
                          <div class="card-header justify-content-between">
                              <div class="card-title">
                                  Featured Creators
                              </div>
                              <div>
                                  <button class="btn btn-primary-light btn-sm btn-wave">View All</button>
                              </div>
                          </div>
                          <div class="card-body p-0">
                              <ul class="list-group list-group-flush">
                                  <li class="list-group-item">
                                      <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                          <div class="d-flex align-items-center">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-md p-1 bg-gray-300 me-2">
                                                      <img src="{{ asset('') }}/assets/images/nft-images/2.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div class="align-items-center">
                                                  <p class="mb-0 fw-medium">Joseph Smith</p>
                                                  <span class="fs-12 text-muted">@josephsmith</span>
                                              </div>
                                          </div>
                                          <div class="text-end">
                                              <span class="d-block fw-medium">+18.93ETH</span>
                                              <span class="d-block text-muted fs-11">22 NFT's</span>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="list-group-item">
                                      <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                          <div class="d-flex align-items-center">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-md p-1 bg-gray-300 me-2">
                                                      <img src="{{ asset('') }}/assets/images/nft-images/18.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div class="align-items-center">
                                                  <p class="mb-0 fw-medium">Elisha Sean</p>
                                                  <span class="fs-12 text-muted">@elishasean</span>
                                              </div>
                                          </div>
                                          <div class="text-end">
                                              <span class="d-block fw-medium">+12.45ETH</span>
                                              <span class="d-block text-muted fs-11">17 NFT's</span>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="list-group-item">
                                      <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                          <div class="d-flex align-items-center">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-md p-1 bg-gray-300 me-2">
                                                      <img src="{{ asset('') }}/assets/images/nft-images/8.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div class="align-items-center">
                                                  <p class="mb-0 fw-medium">Jack Miller</p>
                                                  <span class="fs-12 text-muted">@jackmiller</span>
                                              </div>
                                          </div>
                                          <div class="text-end">
                                              <span class="d-block fw-medium">+11.25ETH</span>
                                              <span class="d-block text-muted fs-11">15 NFT's</span>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="list-group-item">
                                      <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                          <div class="d-flex align-items-center">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-md p-1 bg-gray-300 me-2">
                                                      <img src="{{ asset('') }}/assets/images/nft-images/11.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div class="align-items-center">
                                                  <p class="mb-0 fw-medium">Julia Camo</p>
                                                  <span class="fs-12 text-muted">@juliacamo</span>
                                              </div>
                                          </div>
                                          <div class="text-end">
                                              <span class="d-block fw-medium">+10.48ETH</span>
                                              <span class="d-block text-muted fs-11">14 NFT's</span>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="list-group-item">
                                      <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                          <div class="d-flex align-items-center">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-md p-1 bg-gray-300  me-2">
                                                      <img src="{{ asset('') }}/assets/images/nft-images/17.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div class="align-items-center">
                                                  <p class="mb-0 fw-medium">Charles Achilles</p>
                                                  <span class="fs-12 text-muted">@charlesachilles</span>
                                              </div>
                                          </div>
                                          <div class="text-end">
                                              <span class="d-block fw-medium">+9.58ETH</span>
                                              <span class="d-block text-muted fs-11">12 NFT's</span>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="list-group-item">
                                      <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                          <div class="d-flex align-items-center">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-md p-1 bg-gray-300  me-2">
                                                      <img src="{{ asset('') }}/assets/images/nft-images/31.png" alt="">
                                                  </span>
                                              </div>
                                              <div class="align-items-center">
                                                  <p class="mb-0 fw-medium">Amanda Nanes</p>
                                                  <span class="fs-12 text-muted">amandananes@</span>
                                              </div>
                                          </div>
                                          <div class="text-end">
                                              <span class="d-block fw-medium">+7.67ETH</span>
                                              <span class="d-block text-muted fs-11">11 NFT's</span>
                                          </div>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-12">
                      <div class="card custom-card overflow-hidden">
                          <div class="card-header justify-content-between">
                              <div class="card-title">
                                  Recent Activity
                              </div>
                              <div class="dropdown">
                                  <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                      Today<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                  </a>
                                  <ul class="dropdown-menu" role="menu">
                                      <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="card-body p-0">
                              <ul class="list-group list-group-flush">
                                  <li class="list-group-item">
                                      <div class="d-flex gap-3 align-items-center flex-wrap">
                                          <div class="lh-1">
                                              <span class="avatar avatar-lg">
                                                  <img src="{{ asset('') }}/assets/images/nft-images/31.png" alt="">
                                              </span>
                                          </div>
                                          <div>
                                              <div class="mb-1"><a href="javascript:void(0);" class="fw-medium">DreamSpace</a><span class="fs-12 text-muted ms-2 d-inline-block">24 mins ago</span></div>
                                              <div class="fs-13">Purchsed from you by <a class="text-decoration-underline" href="javascript:void(0);">Mitchell</a> for <span class="text-success fw-medium fs-12">0.57ETH</span>.</div>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="list-group-item">
                                      <div class="d-flex gap-3 align-items-center flex-wrap">
                                          <div class="lh-1">
                                              <span class="avatar avatar-lg">
                                                  <img src="{{ asset('') }}/assets/images/nft-images/25.png" alt="">
                                              </span>
                                          </div>
                                          <div>
                                              <div class="mb-1"><span class="fw-medium">DreamSpace</span><span class="fs-12 text-muted ms-2 d-inline-block">16 mins ago</span></div>
                                              <div class="fs-13">You started following mark zensberg.</div>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="list-group-item">
                                      <div class="d-flex gap-3 align-items-center flex-wrap">
                                          <div class="lh-1">
                                              <span class="avatar avatar-lg">
                                                  <img src="{{ asset('') }}/assets/images/nft-images/21.png" alt="">
                                              </span>
                                          </div>
                                          <div>
                                              <div class="mb-1"><span class="fw-medium">Neo Nebulae</span><span class="fs-12 text-muted ms-2 d-inline-block">5 mins ago</span></div>
                                              <div class="fs-13">Showed interest in purchasing <a href="javascript:void(0);" class="fs-12 text-warning fw-medium">NeoNebulae</a>.</div>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="list-group-item">
                                      <div class="d-flex gap-3 align-items-center flex-wrap">
                                          <div class="lh-1">
                                              <span class="avatar avatar-lg">
                                                  <img src="{{ asset('') }}/assets/images/nft-images/26.png" alt="">
                                              </span>
                                          </div>
                                          <div>
                                              <div class="mb-1"><span class="fw-medium">Neo Nebulae</span><span class="fs-12 text-muted ms-2 d-inline-block">16 mins ago</span></div>
                                              <div class="fs-13">Purchased from <a href="javascript:void(0);" class="text-decoration-underline">CyberCanvas</a> for <span class="fw-medium fs-12 text-pink">1.345ETH</span>.</div>
                                          </div>
                                      </div>
                                  </li>
                              </ul>
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