@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Start::page-header -->
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">NFT</h1>
              <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item">
                      <a href="javascript:void(0);">
                          Dashboards
                      </a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">NFT</li>
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
          <div class="col-xxl-8">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="card custom-card nft-banner-card overflow-hidden">
                          <div class="card-body p-5">
                              <div class="row">
                                  <div class="col-lg-7">
                                      <h3 class="fw-semibold text-fixed-white">
                                          Discover, Collect, Create: Your NFT Universe Awaits!
                                      </h3>
                                      <p class="text-fixed-white fs-15 op-8 mb-4">Explore unique digital assets, connect with creators, and unlock endless possibilities in the world of nft's.</p>
                                      <button class="btn btn-primary btn-wave">Discover Now<i class="ti ti-arrow-narrow-right mx-2 align-middle"></i></button>
                                  </div>
                                  <div class="col-lg-5">
                                      <img src="../assets/images/nft-images/1.png" class="img-fluid nft-main-banner-image d-lg-block d-none" alt="">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="d-flex align-items-start gap-3 flex-wrap">
                                  <div>
                                      <span class="avatar avatar-md bg-primary">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polygon points="152 224 104 152 76.36 193.46 60 168 24 224 152 224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="152 32 152 88 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M192,224h8a8,8,0,0,0,8-8V88L152,32H56a8,8,0,0,0-8,8v88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="d-block mb-2">Total Assets</span>
                                      <h3 class="fw-semibold mb-2 lh-1">12,432 </h3>
                                      <div class="text-muted"><span class="text-success me-1 d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-up"></i>2.5%</span>Increased</div>
                                  </div>
                                  <div class="dropdown"> 
                                      <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown"> 
                                          <i class="ri-more-2-fill fs-18 text-muted"></i>
                                      </a> 
                                      <ul class="dropdown-menu" role="menu"> 
                                          <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li> 
                                          <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li> 
                                          <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li> 
                                      </ul> 
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="d-flex align-items-start gap-3 flex-wrap">
                                  <div>
                                      <span class="avatar avatar-md bg-secondary svg-white">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><line x1="128" y1="24" x2="128" y2="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="128" y1="208" x2="128" y2="232" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M184,88a40,40,0,0,0-40-40H112a40,40,0,0,0,0,80h40a40,40,0,0,1,0,80H104a40,40,0,0,1-40-40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="d-block mb-2">Total Value</span>
                                      <h3 class="fw-semibold mb-2 lh-1">$9,432</h3>
                                      <div class="text-muted"><span class="text-danger me-1 d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-up"></i>2.5%</span>Decreased</div>
                                  </div>
                                  <div class="dropdown"> 
                                      <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown"> 
                                          <i class="ri-more-2-fill fs-18 text-muted"></i>
                                      </a> 
                                      <ul class="dropdown-menu" role="menu"> 
                                          <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li> 
                                          <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li> 
                                          <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li> 
                                      </ul> 
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="d-flex align-items-start gap-3 flex-wrap">
                                  <div>
                                      <span class="avatar avatar-md bg-success svg-white">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M54.46,201.54c-9.2-9.2-3.1-28.53-7.78-39.85C41.82,150,24,140.5,24,128s17.82-22,22.68-33.69C51.36,83,45.26,63.66,54.46,54.46S83,51.36,94.31,46.68C106.05,41.82,115.5,24,128,24S150,41.82,161.69,46.68c11.32,4.68,30.65-1.42,39.85,7.78s3.1,28.53,7.78,39.85C214.18,106.05,232,115.5,232,128S214.18,150,209.32,161.69c-4.68,11.32,1.42,30.65-7.78,39.85s-28.53,3.1-39.85,7.78C150,214.18,140.5,232,128,232s-22-17.82-33.69-22.68C83,204.64,63.66,210.74,54.46,201.54Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="96" cy="96" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="160" cy="160" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="88" y1="168" x2="168" y2="88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="d-block mb-2">Total Sales</span>
                                      <h3 class="fw-semibold mb-2 lh-1">3,132</h3>
                                      <div class="text-muted"><span class="text-success me-1 d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-up"></i>2.5%</span>Increased</div>
                                  </div>
                                  <div class="dropdown"> 
                                      <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown"> 
                                          <i class="ri-more-2-fill fs-18 text-muted"></i>
                                      </a> 
                                      <ul class="dropdown-menu" role="menu"> 
                                          <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li> 
                                          <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li> 
                                          <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li> 
                                      </ul> 
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="d-flex align-items-start gap-3 flex-wrap">
                                  <div>
                                      <span class="avatar avatar-md bg-info svg-white">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M40,56V184a16,16,0,0,0,16,16H216a8,8,0,0,0,8-8V80a8,8,0,0,0-8-8H56A16,16,0,0,1,40,56h0A16,16,0,0,1,56,40H192" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="180" cy="132" r="12"/></svg>
                                      </span>
                                  </div>
                                  <div class="flex-fill">
                                      <span class="d-block mb-2">Total Revenue</span>
                                      <h3 class="fw-semibold mb-2 lh-1">$2,561.09</h3>
                                      <div class="text-muted"><span class="text-success me-1 d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-up"></i>2.5%</span>Increased</div>
                                  </div>
                                  <div class="dropdown"> 
                                      <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown"> 
                                          <i class="ri-more-2-fill fs-18 text-muted"></i>
                                      </a> 
                                      <ul class="dropdown-menu" role="menu"> 
                                          <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li> 
                                          <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li> 
                                          <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li> 
                                      </ul> 
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-4">
              <div class="card custom-card overflow-hidden">
                  <div class="card-header">
                      <div class="card-title">
                          Top Creators
                      </div>
                  </div>
                  <div class="card-body p-0">
                      <div class="table-responsive">
                          <table class="table text-nowrap">
                              <thead>
                                  <tr>
                                      <th>
                                          Creator Name
                                      </th>
                                      <th class="text-center">Total NFTs</th>
                                      <th class="text-center">Followers</th>
                                      <th class="text-end">Total Sales</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-sm avatar-rounded">
                                                      <img src="../assets/images/faces/1.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <span class="fw-semibold d-block lh-1 mb-1">JohnDoe</span>
                                                  <span class="fs-13 text-muted">johndoe123</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td class="text-center">
                                          100
                                      </td>
                                      <td class="text-center">10,000</td>
                                      <td class="text-end">
                                          <span class="d-block lh-1">500 ETH</span>
                                          <span class="text-success fs-13"><i class="ti ti-arrow-narrow-up"></i>4.25%</span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-sm avatar-rounded">
                                                      <img src="../assets/images/faces/2.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <span class="fw-semibold d-block lh-1 mb-1">JaneSmith</span>
                                                  <span class="fs-13 text-muted">jane_smith</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td class="text-center">
                                          80
                                      </td>
                                      <td class="text-center">8,500</td>
                                      <td class="text-end">
                                          <span class="d-block lh-1">400 ETH</span>
                                          <span class="text-danger fs-13"><i class="ti ti-arrow-narrow-down"></i>0.84%</span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-sm avatar-rounded bg-success-transparent fs-20">
                                                      CA
                                                  </span>
                                              </div>
                                              <div>
                                                  <span class="fw-semibold d-block lh-1 mb-1">CryptoArt123</span>
                                                  <span class="fs-13 text-muted">crypto_123</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td class="text-center">
                                          70
                                      </td>
                                      <td class="text-center">7,200</td>
                                      <td class="text-end">
                                          <span class="d-block lh-1">300 ETH</span>
                                          <span class="text-success fs-13"><i class="ti ti-arrow-narrow-up"></i>1.66%</span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-sm avatar-rounded">
                                                      <img src="../assets/images/faces/10.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <span class="fw-semibold d-block lh-1 mb-1">ArtisanX</span>
                                                  <span class="fs-13 text-muted">artisan_x</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td class="text-center">
                                          60
                                      </td>
                                      <td class="text-center">6,800</td>
                                      <td class="text-end">
                                          <span class="d-block lh-1">250 ETH</span>
                                          <span class="text-success fs-13"><i class="ti ti-arrow-narrow-up"></i>12.85%</span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="border-bottom-0">
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-sm avatar-rounded">
                                                      <img src="../assets/images/faces/12.jpg" alt="">
                                                  </span>
                                              </div>
                                              <div>
                                                  <span class="fw-semibold d-block lh-1 mb-1">ArtisanX</span>
                                                  <span class="fs-13 text-muted">artisan_x</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td class="text-center border-bottom-0">
                                          60
                                      </td>
                                      <td class="text-center border-bottom-0">5,500</td>
                                      <td class="text-end border-bottom-0">
                                          <span class="d-block lh-1">250 ETH</span>
                                          <span class="text-danger fs-13"><i class="ti ti-arrow-narrow-down"></i>1.37%</span>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: row-1 -->

      <!-- Start:: row-2 -->
      <div class="row">
          <div class="col-xxl-9">
              <div class="mb-4 d-flex align-items-center justify-content-between flex-wrap gap-2"> 
                  <h6 class="fw-semibold mb-0">Trending NFT'S :</h6> 
                  <div class="btn-group btn-group-sm" role="group" aria-label="Basic example"> 
                      <button type="button" class="btn btn-primary btn-sm btn-wave waves-effect waves-light">1D</button>
                      <button type="button" class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">1W</button> 
                      <button type="button" class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">1M</button> 
                      <button type="button" class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">1Y</button> 
                  </div>
              </div>
              <div class="d-flex align-items-center gap-4 mb-4 flex-wrap">
                  <div class="nft-tag nft-tag-primary active">
                      <a href="javascript:void(0);" class="stretched-link"></a>
                      <span class="nft-tag-icon"><i class="ti ti-world fs-16"></i></span>
                      <span class="nft-tag-text">All</span>
                  </div>
                  <div class="nft-tag nft-tag-secondary">
                      <a href="javascript:void(0);" class="stretched-link"></a>
                      <span class="nft-tag-icon"><i class="ti ti-flame fs-16"></i></span>
                      <span class="nft-tag-text">New Trends</span>
                  </div>
                  <div class="nft-tag nft-tag-info">
                      <a href="javascript:void(0);" class="stretched-link"></a>
                      <span class="nft-tag-icon"><i class="ti ti-palette fs-16"></i></span>
                      <span class="nft-tag-text">Art Work</span>
                  </div>
                  <div class="nft-tag nft-tag-success">
                      <a href="javascript:void(0);" class="stretched-link"></a>
                      <span class="nft-tag-icon"><i class="ti ti-device-gamepad-2 fs-16"></i></span>
                      <span class="nft-tag-text">Games</span>
                  </div>
                  <div class="nft-tag nft-tag-danger">
                      <a href="javascript:void(0);" class="stretched-link"></a>
                      <span class="nft-tag-icon"><i class="ti ti-tie fs-16"></i></span>
                      <span class="nft-tag-text">Fashion</span>
                  </div>
                  <div class="nft-tag nft-tag-purple">
                      <a href="javascript:void(0);" class="stretched-link"></a>
                      <span class="nft-tag-icon"><i class="ti ti-music fs-16"></i></span>
                      <span class="nft-tag-text">Music</span>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="position-relative mb-3 overflow-hidden rounded">
                                  <img src="../assets/images/nft-images/3.jpg" class="card-img rounded" alt="...">
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
                                                      <img src="../assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                  </span>
                                                  <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">2.78</span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="d-grid">
                                  <button class="btn btn-primary btn-wave">
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
                                  <img src="../assets/images/nft-images/4.jpg" class="card-img rounded" alt="...">
                                  <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                  <div class="nft-content">
                                      <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">Ethereal Echoes</a>
                                      <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                          <div> 
                                              <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                              <span class="fw-medium text-fixed-white d-block lh-1">PixelPioner</span>
                                          </div>
                                          <div class="text-end">
                                              <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                              <div class="d-flex align-items-center">
                                                  <span class="avatar avatar-xs">
                                                      <img src="../assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                  </span>
                                                  <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">1.24</span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="d-grid">
                                  <button class="btn btn-primary btn-wave">
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
                                  <img src="../assets/images/nft-images/5.jpg" class="card-img rounded" alt="...">
                                  <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                  <div class="nft-content">
                                      <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">Rhythm Realms</a>
                                      <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                          <div> 
                                              <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                              <span class="fw-medium text-fixed-white d-block lh-1">CraftedPixel</span>
                                          </div>
                                          <div class="text-end">
                                              <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                              <div class="d-flex align-items-center">
                                                  <span class="avatar avatar-xs">
                                                      <img src="../assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                  </span>
                                                  <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">3.56</span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="d-grid">
                                  <button class="btn btn-primary btn-wave">
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
                                  <img src="../assets/images/nft-images/2.jpg" class="card-img rounded" alt="...">
                                  <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                  <div class="nft-content">
                                      <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">Melodic Muses</a>
                                      <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                          <div> 
                                              <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                              <span class="fw-medium text-fixed-white d-block lh-1">CraftPixel</span>
                                          </div>
                                          <div class="text-end">
                                              <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                              <div class="d-flex align-items-center">
                                                  <span class="avatar avatar-xs">
                                                      <img src="../assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                  </span>
                                                  <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">1.6</span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="d-grid">
                                  <button class="btn btn-primary btn-wave">
                                      Place BId
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-9">
                      <div class="card custom-card">
                          <div class="card-header justify-content-between">
                              <div class="card-title">
                                  NFT Statistics
                              </div>
                              <div class="dropdown">
                                  <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                      <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">Last Month</a></li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">Last Year</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="card-body p-0">
                              <div class="d-flex flex-wrap p-3 border-bottom border-block-end-dashed align-items-center">
                                  <div>
                                      <span class="avatar avatar-md avatar-rounded p-2 bg-light">
                                          <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                      </span>
                                  </div>
                                  <div class="d-sm-flex flex-wrap justify-content-evenly flex-fill">
                                      <div class="m-1">
                                          <span>Symbol</span>
                                          <p class="fw-medium mb-0">ETH</p>
                                      </div>
                                      <div class="m-1">
                                          <span>Price Benchmark</span>
                                          <p class="fw-medium mb-0">-0.39%</p>
                                      </div>
                                      <div class="m-1">
                                          <span>Price (USD)</span>
                                          <p class="text-success fe-semibold mb-0">$1,212.67</p>
                                      </div>
                                      <div class="m-1">
                                          <span>Change (24H)</span>
                                          <p class="text-danger fw-medium mb-0">-0.14%</p>
                                      </div>
                                      <div class="m-1">
                                          <span>Market Cap</span>
                                          <p class="fw-medium mb-0">$148.20B</p>
                                      </div>
                                  </div>
                              </div>
                              <div id="nft-statistics" class="p-3"></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-md-12 col-sm-12">
                      <div class="mb-3 d-flex align-items-center justify-content-between">
                          <h6 class="mb-0">Featured Collections :</h6>
                          <div>
                              <button class="btn btn-sm btn-primary-light btn-wave waves-effect waves-light">View All</button>
                          </div>
                      </div>
                      <div class="swiper pagination-dynamic text-start" id="nft-collections-slide">
                          <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                  <div class="card custom-card">
                                      <div class="card-header">
                                          <div class="d-flex align-items-center justify-content-between flex-fill flex-wrap">
                                              <div>
                                                  <div class="text-muted fs-12 d-flex align-items-center">Collection Rank :
                                                      <span class="text-success fs-15 mb-0 ms-1">#1</span>
                                                  </div>
                                              </div>
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 lh-1">
                                                      <span class="avatar avatar-rounded bg-light p-1 avatar-xs">
                                                          <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                                      </span>
                                                  </div>
                                                  <div>
                                                      <span>1.0979ETH</span>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card-header">
                                          <div class="d-flex align-items-center flex-fill">
                                              <div class="d-flex align-items-center flex-fill flex-fill">
                                                  <div class="me-2 lh-1">
                                                      <span class="avatar avatar-md avatar-rounded">
                                                          <img src="../assets/images/faces/15.jpg" alt=""> 
                                                          <a href="javascript:void(0);" class="badge rounded-pill bg-primary avatar-badge"><i class="ri-check-line align-mmiddle"></i></a>
                                                      </span>
                                                  </div>
                                                  <div>
                                                      <p class="mb-0"><a href="javascript:void(0);">Simon Cowell</a></p>
                                                      <p class="text-muted fs-12 mb-0">@simon</p>
                                                  </div>
                                              </div>
                                              <div class="dropdown">
                                                  <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-primary-light" data-bs-toggle="dropdown">
                                                      <i class="fe fe-more-vertical"></i>
                                                  </a>
                                                  <ul class="dropdown-menu">
                                                      <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                      <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                      <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card-body">
                                          <div class="row g-2">
                                              <div class="col-6">
                                                  <img src="../assets/images/nft-images/06.jpg" alt="" class="nft-featuredcollect-image">
                                              </div>
                                              <div class="col-6">
                                                  <img src="../assets/images/nft-images/07.jpg" alt="" class="nft-featuredcollect-image">
                                              </div>
                                              <div class="col-6">
                                                  <img src="../assets/images/nft-images/08.jpg" alt="" class="nft-featuredcollect-image">
                                              </div>
                                              <div class="col-6">
                                                  <img src="../assets/images/nft-images/09.jpg" alt="" class="nft-featuredcollect-image">
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="card custom-card">
                                      <div class="card-header">
                                          <div class="d-flex align-items-center justify-content-between flex-fill flex-wrap">
                                              <div>
                                                  <div class="text-muted fs-12 d-flex align-items-center">Collection Rank :
                                                      <span class="fw-medium text-success fs-15 mb-0 ms-1">#2</span>
                                                  </div>
                                              </div>
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 lh-1">
                                                      <span class="avatar avatar-rounded bg-light p-1 avatar-xs">
                                                          <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                                      </span>
                                                  </div>
                                                  <div>
                                                      <span class="fw-medium">1.0466ETH</span>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card-header">
                                          <div class="d-flex align-items-center flex-fill">
                                              <div class="d-flex align-items-center flex-fill">
                                                  <div class="me-2 lh-1">
                                                      <span class="avatar avatar-md avatar-rounded">
                                                          <img src="../assets/images/faces/5.jpg" alt=""> 
                                                          <a href="javascript:void(0);" class="badge rounded-pill bg-primary avatar-badge"><i class="ri-check-line align-mmiddle"></i></a>
                                                      </span>
                                                  </div>
                                                  <div>
                                                      <p class="mb-0 fw-medium"><a href="javascript:void(0);">Melissa Smith</a></p>
                                                      <p class="text-muted fs-12 mb-0">@melissa</p>
                                                  </div>
                                              </div>
                                              <div class="dropdown">
                                                  <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-primary-light" data-bs-toggle="dropdown">
                                                      <i class="fe fe-more-vertical"></i>
                                                  </a>
                                                  <ul class="dropdown-menu">
                                                      <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                      <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                      <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card-body">
                                          <div class="row g-2">
                                              <div class="col-6">
                                                  <img src="../assets/images/nft-images/11.jpg" alt="" class="nft-featuredcollect-image">
                                              </div>
                                              <div class="col-6">
                                                  <img src="../assets/images/nft-images/12.jpg" alt="" class="nft-featuredcollect-image">
                                              </div>
                                              <div class="col-6">
                                                  <img src="../assets/images/nft-images/13.jpg" alt="" class="nft-featuredcollect-image">
                                              </div>
                                              <div class="col-6">
                                                  <img src="../assets/images/nft-images/14.jpg" alt="" class="nft-featuredcollect-image">
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="card custom-card">
                                      <div class="card-header">
                                          <div class="d-flex align-items-center justify-content-between flex-fill flex-wrap">
                                              <div>
                                                  <div class="text-muted fs-12 d-flex align-items-center">Collection Rank :
                                                      <span class="fw-medium text-success fs-15 mb-0 ms-1">#3</span>
                                                  </div>
                                              </div>
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 lh-1">
                                                      <span class="avatar avatar-rounded bg-light p-1 avatar-xs">
                                                          <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                                      </span>
                                                  </div>
                                                  <div>
                                                      <span class="fw-medium">1.0355ETH</span>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card-header">
                                          <div class="d-flex align-items-center flex-fill">
                                              <div class="d-flex align-items-center flex-fill">
                                                  <div class="me-2 lh-1">
                                                      <span class="avatar avatar-md avatar-rounded">
                                                          <img src="../assets/images/faces/10.jpg" alt=""> 
                                                          <a href="javascript:void(0);" class="badge rounded-pill bg-primary avatar-badge"><i class="ri-check-line align-mmiddle"></i></a>
                                                      </span>
                                                  </div>
                                                  <div>
                                                      <p class="mb-0 fw-medium"><a href="javascript:void(0);">Json Talor</a></p>
                                                      <p class="text-muted fs-12 mb-0">@taylor</p>
                                                  </div>
                                              </div>
                                              <div class="dropdown">
                                                  <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-primary-light" data-bs-toggle="dropdown">
                                                      <i class="fe fe-more-vertical"></i>
                                                  </a>
                                                  <ul class="dropdown-menu">
                                                      <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                      <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                      <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card-body">
                                          <div class="row g-2">
                                              <div class="col-6">
                                                  <img src="../assets/images/nft-images/10.jpg" alt="" class="nft-featuredcollect-image">
                                              </div>
                                              <div class="col-6">
                                                  <img src="../assets/images/nft-images/15.jpg" alt="" class="nft-featuredcollect-image">
                                              </div>
                                              <div class="col-6">
                                                  <img src="../assets/images/nft-images/17.jpg" alt="" class="nft-featuredcollect-image">
                                              </div>
                                              <div class="col-6">
                                                  <img src="../assets/images/nft-images/16.jpg" alt="" class="nft-featuredcollect-image">
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>  
                  </div>    
                  <div class="col-xl-12">
                      <div class="card custom-card">
                          <div class="card-header justify-content-between">
                              <div class="card-title">
                                  Trending Nft's
                              </div>
                              <div class="d-flex flex-wrap gap-2"> 
                                  <div> 
                                      <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example"> 
                                  </div> 
                                  <div class="dropdown"> 
                                      <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i> 
                                      </a> 
                                      <ul class="dropdown-menu" role="menu"> 
                                          <li><a class="dropdown-item" href="javascript:void(0);">New</a></li> 
                                          <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li> 
                                          <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li> 
                                      </ul> 
                                  </div> 
                              </div>
                          </div>
                          <div class="card-body p-0">
                              <div class="table-responsive">
                                  <table class="table table-hover text-nowrap">
                                      <thead>
                                          <tr>
                                              <th scope="col">Collection</th>
                                              <th scope="col">Rank</th>
                                              <th scope="col">Volume</th>
                                              <th scope="col">24h %</th>
                                              <th scope="col">7d %</th>
                                              <th scope="col">Floor Price</th>
                                              <th scope="col">Items</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="me-2 lh-1">
                                                          <span class="avatar avatar-md avatar-rounded">
                                                              <img src="../assets/images/nft-images/09.jpg" alt="">
                                                          </span>
                                                      </div>
                                                      <div>
                                                          <p class="mb-0 fw-semibold"><a href="javascript:void(0);" title="nft_name">Starter Sense NFT</a></p>
                                                          <a href="javascript:void(0);" class="fs-12 text-muted fw-normal" title="creator_name">@irukasensei229</a>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td><span class="fw-medium text-primary">#1</span></td>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="me-2 lh-1">
                                                          <span class="avatar avatar-xs avatar-rounded">
                                                              <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                                          </span>
                                                      </div>
                                                      <div>
                                                          <p class="mb-0 fw-medium"><a href="javascript:void(0);" title="nft_name">2.56ETH</a></p>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td>
                                                  <span class="text-success"><i class="ti ti-trending-up me-1 align-middle d-inline-block"></i>15.2%</span>
                                              </td>
                                              <td><span class="text-success"><i class="ti ti-trending-up me-1 align-middle d-inline-block"></i>3.1%</span></td>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="me-2 lh-1">
                                                          <span class="avatar avatar-xs avatar-rounded">
                                                              <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                                          </span>
                                                      </div>
                                                      <div>
                                                          <p class="mb-0 fw-medium"><a href="javascript:void(0);" title="nft_name">2.31ETH</a></p>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td>12.4K</td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="me-2 lh-1">
                                                          <span class="avatar avatar-md avatar-rounded">
                                                              <img src="../assets/images/nft-images/10.jpg" alt="">
                                                          </span>
                                                      </div>
                                                      <div>
                                                          <p class="mb-0 fw-semibold"><a href="javascript:void(0);" title="nft_name">Lorem Kekkei</a></p>
                                                          <a href="javascript:void(0);" class="fs-12 text-muted fw-normal" title="creator_name">@clansound209</a>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td><span class="fw-medium text-primary">#2</span></td>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="me-2 lh-1">
                                                          <span class="avatar avatar-xs avatar-rounded">
                                                              <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                                          </span>
                                                      </div>
                                                      <div>
                                                          <p class="mb-0 fw-medium"><a href="javascript:void(0);" title="nft_name">1.25ETH</a></p>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td>
                                                  <span class="text-success"><i class="ti ti-trending-up me-1 align-middle d-inline-block"></i>3.7%</span>
                                              </td>
                                              <td><span class="text-danger"><i class="ti ti-trending-down me-1 align-middle d-inline-block"></i>0.5%</span></td>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="me-2 lh-1">
                                                          <span class="avatar avatar-xs avatar-rounded">
                                                              <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                                          </span>
                                                      </div>
                                                      <div>
                                                          <p class="mb-0 fw-medium"><a href="javascript:void(0);" title="nft_name">0.25ETH</a></p>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td>10.1K</td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="me-2 lh-1">
                                                          <span class="avatar avatar-md avatar-rounded">
                                                              <img src="../assets/images/nft-images/11.jpg" alt="">
                                                          </span>
                                                      </div>
                                                      <div>
                                                          <p class="mb-0 fw-semibold"><a href="javascript:void(0);" title="nft_name">NFT Uchiha</a></p>
                                                          <a href="javascript:void(0);" class="fs-12 text-muted fw-normal" title="creator_name">@sasukeuhi990</a>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td><span class="fw-medium text-primary">#3</span></td>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="me-2 lh-1">
                                                          <span class="avatar avatar-xs avatar-rounded">
                                                              <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                                          </span>
                                                      </div>
                                                      <div>
                                                          <p class="mb-0 fw-medium"><a href="javascript:void(0);" title="nft_name">2,092ETH</a></p>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td><span class="text-danger"><i class="ti ti-trending-down me-1 align-middle d-inline-block"></i>23.1%</span></td>
                                              <td>
                                                  <span class="text-success"><i class="ti ti-trending-up me-1 align-middle d-inline-block"></i>9.12%</span>
                                              </td>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="me-2 lh-1">
                                                          <span class="avatar avatar-xs avatar-rounded">
                                                              <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                                          </span>
                                                      </div>
                                                      <div>
                                                          <p class="mb-0 fw-medium"><a href="javascript:void(0);" title="nft_name"> 2,000ETH</a></p>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td>52.7K</td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="me-2 lh-1">
                                                          <span class="avatar avatar-md avatar-rounded">
                                                              <img src="../assets/images/nft-images/12.jpg" alt="">
                                                          </span>
                                                      </div>
                                                      <div>
                                                          <p class="mb-0 fw-semibold"><a href="javascript:void(0);" title="nft_name">
                                                              Lorem Ipsum Uch</a></p>
                                                          <a href="javascript:void(0);" class="fs-12 text-muted fw-normal" title="creator_name">@kakashi092</a>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td><span class="fw-medium text-primary">#4</span></td>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="me-2 lh-1">
                                                          <span class="avatar avatar-xs avatar-rounded">
                                                              <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                                          </span>
                                                      </div>
                                                      <div>
                                                          <p class="mb-0 fw-medium"><a href="javascript:void(0);" title="nft_name"> 36.25ETH</a></p>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td><span class="text-danger"><i class="ti ti-trending-down me-1 align-middle d-inline-block"></i>5.2%</span></td>
                                              <td>
                                                  <span class="text-danger"><i class="ti ti-trending-down me-1 align-middle d-inline-block"></i>4.1%</span>
                                              </td>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="me-2 lh-1">
                                                          <span class="avatar avatar-xs avatar-rounded">
                                                              <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                                          </span>
                                                      </div>
                                                      <div>
                                                          <p class="mb-0 fw-medium"><a href="javascript:void(0);" title="nft_name">30.12ETH</a></p>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td>31.4K</td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="me-2 lh-1">
                                                          <span class="avatar avatar-md avatar-rounded">
                                                              <img src="../assets/images/nft-images/13.jpg" alt="">
                                                          </span>
                                                      </div>
                                                      <div>
                                                          <p class="mb-0 fw-semibold"><a href="javascript:void(0);" title="nft_name">
                                                              Ivan Shomer Har</a></p>
                                                          <a href="javascript:void(0);" class="fs-12 text-muted fw-normal" title="creator_name">@narutouze025</a>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td><span class="fw-medium text-primary">#5</span></td>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="me-2 lh-1">
                                                          <span class="avatar avatar-xs avatar-rounded">
                                                              <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                                          </span>
                                                      </div>
                                                      <div>
                                                          <p class="mb-0 fw-medium"><a href="javascript:void(0);" title="nft_name">12.52ETH</a></p>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td><span class="text-success"><i class="ti ti-trending-up me-1 align-middle d-inline-block"></i>7.0%</span></td>
                                              <td>
                                                  <span class="text-success"><i class="ti ti-trending-up me-1 align-middle d-inline-block"></i>12.5%</span>
                                              </td>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="me-2 lh-1">
                                                          <span class="avatar avatar-xs avatar-rounded">
                                                              <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                                          </span>
                                                      </div>
                                                      <div>
                                                          <p class="mb-0 fw-medium"><a href="javascript:void(0);" title="nft_name">12.50ETH</a></p>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td>121.5K</td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                          <div class="card-footer border-top-0"> 
                              <div class="d-flex align-items-center"> 
                                  <div> Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i> </div>
                                  <div class="ms-auto"> 
                                  <nav aria-label="Page navigation" class="pagination-style-4"> 
                                      <ul class="pagination mb-0"> 
                                          <li class="page-item disabled"> <a class="page-link" href="javascript:void(0);"> Prev </a> </li>
                                              <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li> 
                                              <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li> 
                                              <li class="page-item"> <a class="page-link text-primary" href="javascript:void(0);"> next </a> </li> 
                                          </ul> 
                                      </nav> 
                                  </div> 
                              </div> 
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="card custom-card overflow-hidden">
                          <div class="card-header justify-content-between">
                              <div class="card-title">
                                  History
                              </div>
                              <div class="dropdown">
                                  <a href="javascript:void(0);" class="btn-light btn btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                      View All<i class="ri-arrow-down-s-line align-middle ms-1"></i>
                                  </a>
                                  <ul class="dropdown-menu" role="menu">
                                      <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                      <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="card-body p-0">
                              <ul class="list-group list-group-flush mb-0">
                                  <li class="list-group-item">
                                      <a href="javascript:void(0);">
                                          <div class="d-flex flex-wrap align-items-center justify-content-between">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 lh-1">
                                                      <span class="avatar avatar-md">
                                                          <img src="../assets/images/nft-images/02.jpg" alt="">
                                                      </span>
                                                  </div>
                                                  <div>
                                                      <p class="fw-semibold mb-0 fs-14">Kakasha Si</p>
                                                      <span class="text-muted fs-12">@sensei011</span>
                                                  </div>
                                              </div>
                                              <div>
                                                  <p class="mb-0 fw-semibold d-flex align-items-center fs-16">0.234<span class="text-muted fs-12 mt-1 ms-1">ETH</span></p>
                                              </div>
                                          </div>
                                      </a>
                                  </li>
                                  <li class="list-group-item">
                                      <a href="javascript:void(0);">
                                          <div class="d-flex flex-wrap align-items-center justify-content-between">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 lh-1">
                                                      <span class="avatar avatar-md">
                                                          <img src="../assets/images/nft-images/03.jpg" alt="">
                                                      </span>
                                                  </div>
                                                  <div>
                                                      <p class="fw-semibold mb-0 fs-14">Oorichimaru lo</p>
                                                      <span class="text-muted fs-12">@ooro001</span>
                                                  </div>
                                              </div>
                                              <div>
                                                  <p class="mb-0 fw-semibold d-flex align-items-center fs-16">0.334<span class="text-muted fs-12 mt-1 ms-1">ETH</span></p>
                                              </div>
                                          </div>
                                      </a>
                                  </li>
                                  <li class="list-group-item">
                                      <a href="javascript:void(0);">
                                          <div class="d-flex flex-wrap align-items-center justify-content-between">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 lh-1">
                                                      <span class="avatar avatar-md">
                                                          <img src="../assets/images/nft-images/04.jpg" alt="">
                                                      </span>
                                                  </div>
                                                  <div>
                                                      <p class="fw-semibold mb-0 fs-14">SakuraYM</p>
                                                      <span class="text-muted fs-12">@sakura903</span>
                                                  </div>
                                              </div>
                                              <div>
                                                  <p class="mb-0 fw-semibold d-flex align-items-center fs-16">0.2534<span class="text-muted fs-12 mt-1 ms-1">ETH</span></p>
                                              </div>
                                          </div>
                                      </a>
                                  </li>
                                  <li class="list-group-item">
                                      <a href="javascript:void(0);">
                                          <div class="d-flex flex-wrap align-items-center justify-content-between">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 lh-1">
                                                      <span class="avatar avatar-md">
                                                          <img src="../assets/images/nft-images/05.jpg" alt="">
                                                      </span>
                                                  </div>
                                                  <div>
                                                      <p class="fw-semibold mb-0 fs-14">Sasuke Uchiha</p>
                                                      <span class="text-muted fs-12">@sasuke777</span>
                                                  </div>
                                              </div>
                                              <div>
                                                  <p class="mb-0 fw-semibold d-flex align-items-center fs-16">0.3504<span class="text-muted fs-12 mt-1 ms-1">ETH</span></p>
                                              </div>
                                          </div>
                                      </a>
                                  </li>
                                  <li class="list-group-item">
                                      <a href="javascript:void(0);">
                                          <div class="d-flex flex-wrap align-items-center justify-content-between">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 lh-1">
                                                      <span class="avatar avatar-md">
                                                          <img src="../assets/images/nft-images/06.jpg" alt="">
                                                      </span>
                                                  </div>
                                                  <div>
                                                      <p class="fw-semibold mb-0 fs-14">Naruto Uzumaki</p>
                                                      <span class="text-muted fs-12">@naruto111</span>
                                                  </div>
                                              </div>
                                              <div>
                                                  <p class="mb-0 fw-semibold d-flex align-items-center fs-16">0.2504<span class="text-muted fs-12 mt-1 ms-1">ETH</span></p>
                                              </div>
                                          </div>
                                      </a>
                                  </li>
                                  <li class="list-group-item">
                                      <a href="javascript:void(0);">
                                          <div class="d-flex flex-wrap align-items-center justify-content-between">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 lh-1">
                                                      <span class="avatar avatar-md">
                                                          <img src="../assets/images/nft-images/07.jpg" alt="">
                                                      </span>
                                                  </div>
                                                  <div>
                                                      <p class="fw-semibold mb-0 fs-14">Uchiha Uzumaki</p>
                                                      <span class="text-muted fs-12">@uzumaki111</span>
                                                  </div>
                                              </div>
                                              <div>
                                                  <p class="mb-0 fw-semibold d-flex align-items-center fs-16">0.2504<span class="text-muted fs-12 mt-1 ms-1">ETH</span></p>
                                              </div>
                                          </div>
                                      </a>
                                  </li>
                                  <li class="list-group-item">
                                      <a href="javascript:void(0);">
                                          <div class="d-flex flex-wrap align-items-center justify-content-between">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 lh-1">
                                                      <span class="avatar avatar-md">
                                                          <img src="../assets/images/nft-images/08.jpg" alt="">
                                                      </span>
                                                  </div>
                                                  <div>
                                                      <p class="fw-semibold mb-0 fs-14">Nagiro Ohinavo</p>
                                                      <span class="text-muted fs-12">@nagiro096</span>
                                                  </div>
                                              </div>
                                              <div>
                                                  <p class="mb-0 fw-semibold d-flex align-items-center fs-16">0.3564<span class="text-muted fs-12 mt-1 ms-1">ETH</span></p>
                                              </div>
                                          </div>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-12">
                      <div class="card custom-card overflow-hidden">
                          <div class="card-header justify-content-between">
                              <div class="card-title">
                                  Top Creators NFTs
                              </div>
                              <div class="dropdown">
                                  <a href="javascript:void(0);" class="btn-light btn btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                      View All<i class="ri-arrow-down-s-line align-middle ms-1"></i>
                                  </a>
                                  <ul class="dropdown-menu" role="menu">
                                      <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                      <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="card-body p-0">
                              <ul class="list-group list-group-flush mb-0">
                                  <li class="list-group-item d-flex">
                                      <a href="javascript:void(0);">
                                          <div class="d-flex flex-wrap align-items-center justify-content-between">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 lh-1">
                                                      <span class="avatar avatar-md">
                                                          <img src="../assets/images/faces/10.jpg" alt="">
                                                      </span>
                                                  </div>
                                                  <div>
                                                      <p class="fw-semibold mb-0 fs-14">Kakasha Si</p>
                                                      <span class="text-muted fs-12">@sensei011</span>
                                                  </div>
                                              </div>
                                          </div>
                                      </a>
                                      <div class="ms-auto my-auto">
                                          <a href="javascript:void(0);" class="btn btn-primary-light btn-sm ">Follow</a>
                                      </div>
                                  </li>
                                  <li class="list-group-item d-flex">
                                      <a href="javascript:void(0);">
                                          <div class="d-flex flex-wrap align-items-center justify-content-between">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 lh-1">
                                                      <span class="avatar avatar-md">
                                                          <img src="../assets/images/faces/1.jpg" alt="">
                                                      </span>
                                                  </div>
                                                  <div>
                                                      <p class="fw-semibold mb-0 fs-14">Oorichimaru lo</p>
                                                      <span class="text-muted fs-12">@ooro001</span>
                                                  </div>
                                              </div>
                                          </div>
                                      </a>
                                      <div class="ms-auto my-auto">
                                          <a href="javascript:void(0);" class="btn btn-primary-light btn-sm ">Follow</a>
                                      </div>
                                  </li>
                                  <li class="list-group-item d-flex">
                                      <a href="javascript:void(0);">
                                          <div class="d-flex flex-wrap align-items-center justify-content-between">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 lh-1">
                                                      <span class="avatar avatar-md">
                                                          <img src="../assets/images/faces/12.jpg" alt="">
                                                      </span>
                                                  </div>
                                                  <div>
                                                      <p class="fw-semibold mb-0 fs-14">SakuraYM</p>
                                                      <span class="text-muted fs-12">@sakura903</span>
                                                  </div>
                                              </div>
                                          </div>
                                      </a>
                                      <div class="ms-auto my-auto">
                                          <a href="javascript:void(0);" class="btn btn-primary-light btn-sm ">Follow</a>
                                      </div>
                                  </li>
                                  <li class="list-group-item d-flex">
                                      <a href="javascript:void(0);">
                                          <div class="d-flex flex-wrap align-items-center justify-content-between">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 lh-1">
                                                      <span class="avatar avatar-md">
                                                          <img src="../assets/images/faces/4.jpg" alt="">
                                                      </span>
                                                  </div>
                                                  <div>
                                                      <p class="fw-semibold mb-0 fs-14">Sasuke Uchiha</p>
                                                      <span class="text-muted fs-12">@sasuke777</span>
                                                  </div>
                                              </div>
                                          </div>
                                      </a>
                                      <div class="ms-auto my-auto">
                                          <a href="javascript:void(0);" class="btn btn-primary-light btn-sm ">Follow</a>
                                      </div>
                                  </li>
                                  <li class="list-group-item d-flex">
                                      <a href="javascript:void(0);">
                                          <div class="d-flex flex-wrap align-items-center justify-content-between">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 lh-1">
                                                      <span class="avatar avatar-md">
                                                          <img src="../assets/images/faces/15.jpg" alt="">
                                                      </span>
                                                  </div>
                                                  <div>
                                                      <p class="fw-semibold mb-0 fs-14">Naruto Uzumaki</p>
                                                      <span class="text-muted fs-12">@naruto111</span>
                                                  </div>
                                              </div>
                                          </div>
                                      </a>
                                      <div class="ms-auto my-auto">
                                          <a href="javascript:void(0);" class="btn btn-primary-light btn-sm ">Follow</a>
                                      </div>
                                  </li>
                                  <li class="list-group-item d-flex">
                                      <a href="javascript:void(0);">
                                          <div class="d-flex flex-wrap align-items-center justify-content-between">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 lh-1">
                                                      <span class="avatar avatar-md">
                                                          <img src="../assets/images/faces/7.jpg" alt="">
                                                      </span>
                                                  </div>
                                                  <div>
                                                      <p class="fw-semibold mb-0 fs-14">Uchiha Uzumaki</p>
                                                      <span class="text-muted fs-12">@uzumaki111</span>
                                                  </div>
                                              </div>
                                          </div>
                                      </a>
                                      <div class="ms-auto my-auto">
                                          <a href="javascript:void(0);" class="btn btn-primary-light btn-sm ">Follow</a>
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
                                  Personal Listings
                              </div>
                              <div class="dropdown">
                                  <a href="javascript:void(0);" class="btn btn-light btn-sm text-muted">
                                      View All
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
                                      <a href="javascript:void(0);">
                                          <div class="d-flex flex-wrap align-items-center justify-content-between">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 lh-1">
                                                      <span class="avatar avatar-md">
                                                          <img src="../assets/images/nft-images/14.jpg" alt="">
                                                      </span>
                                                  </div>
                                                  <div>
                                                      <p class="fw-semibold mb-0">Kakasha Si</p>
                                                      <span class="text-muted fs-12 d-inline-flex">@sensei011<span class="ms-2 text-success fs-11"><i class="ri-arrow-up-s-line align-middle me-1"></i>0.45%</span></span>
                                                  </div>
                                              </div>
                                              <div class="text-end">
                                                  <span class="fs-10 text-muted ps-4">PRICE</span>
                                                  <p class="mb-0 fw-medium d-flex align-items-center"><span class="avatar avatar-xs p-1"><img src="../assets/images/crypto-currencies/regular/Bitcoin.svg" alt=""></span>1.75ETH</p>
                                              </div>
                                          </div>
                                      </a>
                                  </li>
                                  <li class="list-group-item">
                                      <a href="javascript:void(0);">
                                          <div class="d-flex flex-wrap align-items-center justify-content-between">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 lh-1">
                                                      <span class="avatar avatar-md">
                                                          <img src="../assets/images/nft-images/15.jpg" alt="">
                                                      </span>
                                                  </div>
                                                  <div>
                                                      <p class="fw-semibold mb-0">Naruto Uzumaki</p>
                                                      <span class="text-muted fs-12 d-inline-flex">@naruto111<span class="ms-2 text-success fs-11"><i class="ri-arrow-up-s-line align-middle me-1"></i>0.24%</span></span>
                                                  </div>
                                              </div>
                                              <div class="text-end">
                                                  <span class="fs-10 text-muted ps-4">PRICE</span>
                                                  <p class="mb-0 fw-medium d-flex align-items-center"><span class="avatar avatar-xs p-1"><img src="../assets/images/crypto-currencies/regular/Bitcoin.svg" alt=""></span>1.15ETH</p>
                                              </div>
                                          </div>
                                      </a>
                                  </li>
                                  <li class="list-group-item">
                                      <a href="javascript:void(0);">
                                          <div class="d-flex flex-wrap align-items-center justify-content-between">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 lh-1">
                                                      <span class="avatar avatar-md">
                                                          <img src="../assets/images/nft-images/16.jpg" alt="">
                                                      </span>
                                                  </div>
                                                  <div>
                                                      <p class="fw-semibold mb-0">Kazimo Aruke</p>
                                                      <span class="text-muted fs-12 d-inline-flex">@kazimo900<span class="ms-2 text-danger fs-11"><i class="ri-arrow-down-s-line align-middle me-1"></i>0.07%</span></span>
                                                  </div>
                                              </div>
                                              <div class="text-end">
                                                  <span class="fs-10 text-muted ps-4">PRICE</span>
                                                  <p class="mb-0 fw-medium d-flex align-items-center"><span class="avatar avatar-xs p-1"><img src="../assets/images/crypto-currencies/regular/Bitcoin.svg" alt=""></span>1.58ETH</p>
                                              </div>
                                          </div>
                                      </a>
                                  </li>
                                  <li class="list-group-item">
                                      <a href="javascript:void(0);">
                                          <div class="d-flex flex-wrap align-items-center justify-content-between">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 lh-1">
                                                      <span class="avatar avatar-md">
                                                          <img src="../assets/images/nft-images/19.jpg" alt="">
                                                      </span>
                                                  </div>
                                                  <div>
                                                      <p class="fw-semibold mb-0">Lorem Ipsum Uch</p>
                                                      <span class="text-muted fs-12 d-inline-flex">@kakashi092<span class="ms-2 text-danger fs-11"><i class="ri-arrow-down-s-line align-middle me-1"></i>1.21%</span></span>
                                                  </div>
                                              </div>
                                              <div class="text-end">
                                                  <span class="fs-10 text-muted ps-4">PRICE</span>
                                                  <p class="mb-0 fw-medium d-flex align-items-center"><span class="avatar avatar-xs p-1"><img src="../assets/images/crypto-currencies/regular/Bitcoin.svg" alt=""></span>1.95ETH</p>
                                              </div>
                                          </div>
                                      </a>
                                  </li>
                                  <li class="list-group-item">
                                      <a href="javascript:void(0);">
                                          <div class="d-flex flex-wrap align-items-center justify-content-between">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-2 lh-1">
                                                      <span class="avatar avatar-md">
                                                          <img src="../assets/images/nft-images/20.jpg" alt="">
                                                      </span>
                                                  </div>
                                                  <div>
                                                      <p class="fw-semibold mb-0">Nagiro Ohinavo</p>
                                                      <span class="text-muted fs-12 d-inline-flex">@nagiro096<span class="ms-2 text-success fs-11"><i class="ri-arrow-up-s-line align-middle me-1"></i>0.99%</span></span>
                                                  </div>
                                              </div>
                                              <div class="text-end">
                                                  <span class="fs-10 text-muted ps-4">PRICE</span>
                                                  <p class="mb-0 fw-medium d-flex align-items-center"><span class="avatar avatar-xs p-1"><img src="../assets/images/crypto-currencies/regular/Bitcoin.svg" alt=""></span>1.12ETH</p>
                                              </div>
                                          </div>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: row-2 -->

  </div>
</div>
<!-- End::app-content -->

@endsection