@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Page Header -->
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Market Place</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                          <li class="breadcrumb-item"><a href="javascript:void(0);">NFT</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Market Place</li>
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
          <div class="col-xl-12">
              <div class="card custom-card">
                  <div class="card-body">
                      <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                          <div>
                              <ul class="nav nav-tabs mb-0 tab-style-8 scaleX" role="tablist">
                                  <li class="nav-item" role="presentation">
                                      <a class="nav-link active d-flex align-items-center gap-1" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-all" aria-selected="true"><i class="ri-global-line fs-15 fw-normal me-1"></i>All</a>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                      <a class="nav-link d-flex align-items-center gap-1" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-art" aria-selected="false" tabindex="-1"><i class="ri-palette-line fs-15 fw-normal me-1"></i>Art</a>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                      <a class="nav-link d-flex align-items-center gap-1" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-gaming" aria-selected="false" tabindex="-1"><i class="ri-discord-line fs-15 fw-normal me-1"></i>Gaming</a>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                      <a class="nav-link d-flex align-items-center gap-1" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-domain" aria-selected="false" tabindex="-1"><i class="ri-firebase-line fs-15 fw-normal me-1"></i>Domain</a>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                      <a class="nav-link d-flex align-items-center gap-1" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-music" aria-selected="false" tabindex="-1"><i class="ri-music-2-line fs-15 fw-normal me-1"></i>Music</a>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                      <a class="nav-link d-flex align-items-center gap-1 text-nowrap" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-realestate" aria-selected="false" tabindex="-1"><i class="ri-home-3-line fs-15 fw-normal me-1"></i>Real Estate</a>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                      <a class="nav-link d-flex align-items-center gap-1" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-sports" aria-selected="false" tabindex="-1"><i class="ri-football-line fs-15 fw-normal me-1"></i>Sports</a>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                      <a class="nav-link d-flex align-items-center gap-1" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-fashion" aria-selected="false" tabindex="-1"><i class="ri-t-shirt-line fs-15 fw-normal me-1"></i>Fashion</a>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                      <a class="nav-link d-flex align-items-center gap-1" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-avatars" aria-selected="false" tabindex="-1"><i class="ri-award-line fs-15 fw-normal me-1"></i>Avatars</a>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                      <a class="nav-link d-flex align-items-center gap-1" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-memes" aria-selected="false" tabindex="-1"><i class="ri-emoji-sticker-line fs-15 fw-normal me-1"></i>Memes</a>
                                  </li>
                              </ul>
                          </div>
                          <div class="d-flex gap-2">
                              <button type="button" class="btn btn-sm btn-secondary btn-wave">Filters</button>
                              <div class="dropdown">
                                  <a href="javascript:void(0);" class="btn btn-sm btn-wave btn-primary waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                      Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                  </a>
                                  <ul class="dropdown-menu" role="menu">
                                      <li><a class="dropdown-item" href="javascript:void(0);">New Collection</a></li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">High - Low</a></li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">Low - High</a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--End::row-1 -->

      <!-- Start:: row-2 -->
      <div class="row">
          <div class="col-xl-12">
              <div class="tab-content">
                  <div class="tab-pane show active p-0 border-0" id="nft-all" role="tabpanel">
                      <div class="row row-cols-xxl-5 row-cols-xl-3 row-cols-md-2 row-cols-1">
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="position-relative mb-3 overflow-hidden rounded">
                                          <img src="{{ asset('') }}assets/images/nft-images/3.jpg" class="card-img rounded" alt="...">
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
                                                              <img src="{{ asset('') }}assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
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
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="position-relative mb-3 overflow-hidden rounded">
                                          <img src="{{ asset('') }}assets/images/nft-images/2.jpg" class="card-img rounded" alt="...">
                                          <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                          <div class="nft-content">
                                              <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">Melodic Muses</a>
                                              <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                  <div> 
                                                      <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                      <span class="fw-medium text-fixed-white d-block lh-1">CraftPixelWorks</span>
                                                  </div>
                                                  <div class="text-end">
                                                      <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                      <div class="d-flex align-items-center">
                                                          <span class="avatar avatar-xs">
                                                              <img src="{{ asset('') }}assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                          </span>
                                                          <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">1.65</span>
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
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="position-relative mb-3 overflow-hidden rounded">
                                          <img src="{{ asset('') }}assets/images/nft-images/5.jpg" class="card-img rounded" alt="...">
                                          <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                          <div class="nft-content">
                                              <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">Rhythm Realms</a>
                                              <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                  <div> 
                                                      <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                      <span class="fw-medium text-fixed-white d-block lh-1">CraftedPixels</span>
                                                  </div>
                                                  <div class="text-end">
                                                      <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                      <div class="d-flex align-items-center">
                                                          <span class="avatar avatar-xs">
                                                              <img src="{{ asset('') }}assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                          </span>
                                                          <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">1.85</span>
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
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="position-relative mb-3 overflow-hidden rounded">
                                          <img src="{{ asset('') }}assets/images/nft-images/4.jpg" class="card-img rounded" alt="...">
                                          <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                          <div class="nft-content">
                                              <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">Ethereal Echoes</a>
                                              <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                  <div> 
                                                      <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                      <span class="fw-medium text-fixed-white d-block lh-1">PixelPioneer</span>
                                                  </div>
                                                  <div class="text-end">
                                                      <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                      <div class="d-flex align-items-center">
                                                          <span class="avatar avatar-xs">
                                                              <img src="{{ asset('') }}assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                          </span>
                                                          <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">1.86</span>
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
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="position-relative mb-3 overflow-hidden rounded">
                                          <img src="{{ asset('') }}assets/images/nft-images/5.jpg" class="card-img rounded" alt="...">
                                          <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                          <div class="nft-content">
                                              <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">Sonic Journeys</a>
                                              <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                  <div> 
                                                      <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                      <span class="fw-medium text-fixed-white d-block lh-1">PixelCraftPro</span>
                                                  </div>
                                                  <div class="text-end">
                                                      <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                      <div class="d-flex align-items-center">
                                                          <span class="avatar avatar-xs">
                                                              <img src="{{ asset('') }}assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                          </span>
                                                          <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">2.64</span>
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
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="position-relative mb-3 overflow-hidden rounded">
                                          <img src="{{ asset('') }}assets/images/nft-images/6.jpg" class="card-img rounded" alt="...">
                                          <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                          <div class="nft-content">
                                              <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">Oceanic Wonders</a>
                                              <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                  <div> 
                                                      <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                      <span class="fw-medium text-fixed-white d-block lh-1">ArtfulPixels</span>
                                                  </div>
                                                  <div class="text-end">
                                                      <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                      <div class="d-flex align-items-center">
                                                          <span class="avatar avatar-xs">
                                                              <img src="{{ asset('') }}assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                          </span>
                                                          <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">3.66</span>
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
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="position-relative mb-3 overflow-hidden rounded">
                                          <img src="{{ asset('') }}assets/images/nft-images/7.jpg" class="card-img rounded" alt="...">
                                          <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                          <div class="nft-content">
                                              <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">Nebula Dreams</a>
                                              <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                  <div> 
                                                      <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                      <span class="fw-medium text-fixed-white d-block lh-1">CodeCrafted</span>
                                                  </div>
                                                  <div class="text-end">
                                                      <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                      <div class="d-flex align-items-center">
                                                          <span class="avatar avatar-xs">
                                                              <img src="{{ asset('') }}assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                          </span>
                                                          <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">1.45</span>
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
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="position-relative mb-3 overflow-hidden rounded">
                                          <img src="{{ asset('') }}assets/images/nft-images/8.jpg" class="card-img rounded" alt="...">
                                          <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                          <div class="nft-content">
                                              <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">Prismatic Drift</a>
                                              <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                  <div> 
                                                      <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                      <span class="fw-medium text-fixed-white d-block lh-1">TechArtistry</span>
                                                  </div>
                                                  <div class="text-end">
                                                      <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                      <div class="d-flex align-items-center">
                                                          <span class="avatar avatar-xs">
                                                              <img src="{{ asset('') }}assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                          </span>
                                                          <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">7.45</span>
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
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="position-relative mb-3 overflow-hidden rounded">
                                          <img src="{{ asset('') }}assets/images/nft-images/9.jpg" class="card-img rounded" alt="...">
                                          <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                          <div class="nft-content">
                                              <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">Bit Bubbles</a>
                                              <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                  <div> 
                                                      <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                      <span class="fw-medium text-fixed-white d-block lh-1">CraftedPixelPro</span>
                                                  </div>
                                                  <div class="text-end">
                                                      <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                      <div class="d-flex align-items-center">
                                                          <span class="avatar avatar-xs">
                                                              <img src="{{ asset('') }}assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                          </span>
                                                          <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">2.54</span>
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
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="position-relative mb-3 overflow-hidden rounded">
                                          <img src="{{ asset('') }}assets/images/nft-images/10.jpg" class="card-img rounded" alt="...">
                                          <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                          <div class="nft-content">
                                              <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">Celestial Beasts</a>
                                              <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                  <div> 
                                                      <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                      <span class="fw-medium text-fixed-white d-block lh-1">PixelCraftElite</span>
                                                  </div>
                                                  <div class="text-end">
                                                      <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                      <div class="d-flex align-items-center">
                                                          <span class="avatar avatar-xs">
                                                              <img src="{{ asset('') }}assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                          </span>
                                                          <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">3.53</span>
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
                          <div>
                              <nav aria-label="Page navigation">
                                  <ul class="pagination mb-4">
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
                  </div>
                  <div class="tab-pane p-0 border-0" id="nft-art" role="tabpanel">
                      <div class="row row-cols-xxl-5 row-cols-xl-3 row-cols-md-2 row-cols-1">
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="position-relative mb-3 overflow-hidden rounded">
                                          <img src="{{ asset('') }}assets/images/nft-images/8.jpg" class="card-img rounded" alt="...">
                                          <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                          <div class="nft-content">
                                              <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">Earthly Essence</a>
                                              <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                  <div> 
                                                      <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                      <span class="fw-medium text-fixed-white d-block lh-1">PixelCraftPro</span>
                                                  </div>
                                                  <div class="text-end">
                                                      <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                      <div class="d-flex align-items-center">
                                                          <span class="avatar avatar-xs">
                                                              <img src="{{ asset('') }}assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                          </span>
                                                          <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">1.54</span>
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
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="position-relative mb-3 overflow-hidden rounded">
                                          <img src="{{ asset('') }}assets/images/nft-images/5.jpg" class="card-img rounded" alt="...">
                                          <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                          <div class="nft-content">
                                              <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">Code Canvas</a>
                                              <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                  <div> 
                                                      <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                      <span class="fw-medium text-fixed-white d-block lh-1">PixelCraftPro</span>
                                                  </div>
                                                  <div class="text-end">
                                                      <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                      <div class="d-flex align-items-center">
                                                          <span class="avatar avatar-xs">
                                                              <img src="{{ asset('') }}assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                          </span>
                                                          <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">0.56</span>
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
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="position-relative mb-3 overflow-hidden rounded">
                                          <img src="{{ asset('') }}assets/images/nft-images/2.jpg" class="card-img rounded" alt="...">
                                          <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                          <div class="nft-content">
                                              <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">Abstract Wonders</a>
                                              <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                  <div> 
                                                      <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                      <span class="fw-medium text-fixed-white d-block lh-1">PixelCraftPro</span>
                                                  </div>
                                                  <div class="text-end">
                                                      <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                      <div class="d-flex align-items-center">
                                                          <span class="avatar avatar-xs">
                                                              <img src="{{ asset('') }}assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                          </span>
                                                          <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">9.56</span>
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
                  <div class="tab-pane p-0 border-0" id="nft-gaming" role="tabpanel">
                      <div class="row row-cols-xxl-5 row-cols-xl-3 row-cols-md-2 row-cols-1">
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="position-relative mb-3 overflow-hidden rounded">
                                          <img src="{{ asset('') }}assets/images/nft-images/9.jpg" class="card-img rounded" alt="...">
                                          <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                          <div class="nft-content">
                                              <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">Ancient Echoes</a>
                                              <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                  <div> 
                                                      <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                      <span class="fw-medium text-fixed-white d-block lh-1">ClassyInnovator</span>
                                                  </div>
                                                  <div class="text-end">
                                                      <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                      <div class="d-flex align-items-center">
                                                          <span class="avatar avatar-xs">
                                                              <img src="{{ asset('') }}assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                          </span>
                                                          <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">3.75</span>
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
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="position-relative mb-3 overflow-hidden rounded">
                                          <img src="{{ asset('') }}assets/images/nft-images/4.jpg" class="card-img rounded" alt="...">
                                          <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                          <div class="nft-content">
                                              <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">Timeless Treasures</a>
                                              <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                  <div> 
                                                      <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                      <span class="fw-medium text-fixed-white d-block lh-1">MasterCraftPro</span>
                                                  </div>
                                                  <div class="text-end">
                                                      <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                      <div class="d-flex align-items-center">
                                                          <span class="avatar avatar-xs">
                                                              <img src="{{ asset('') }}assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                          </span>
                                                          <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">0.78</span>
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
                  <div class="tab-pane p-0 border-0" id="nft-domain" role="tabpanel">
                      <div class="row row-cols-xxl-5 row-cols-xl-3 row-cols-md-2 row-cols-1">
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="position-relative mb-3 overflow-hidden rounded">
                                          <img src="{{ asset('') }}assets/images/nft-images/6.jpg" class="card-img rounded" alt="...">
                                          <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                          <div class="nft-content">
                                              <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">Cultural Icons</a>
                                              <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                  <div> 
                                                      <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                      <span class="fw-medium text-fixed-white d-block lh-1">LegendaryCrafter</span>
                                                  </div>
                                                  <div class="text-end">
                                                      <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                      <div class="d-flex align-items-center">
                                                          <span class="avatar avatar-xs">
                                                              <img src="{{ asset('') }}assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                          </span>
                                                          <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">2.75</span>
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
                  <div class="tab-pane p-0 border-0" id="nft-music" role="tabpanel">
                      <div class="row row-cols-xxl-5 row-cols-xl-3 row-cols-md-2 row-cols-1">
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="position-relative mb-3 overflow-hidden rounded">
                                          <img src="{{ asset('') }}assets/images/nft-images/9.jpg" class="card-img rounded" alt="...">
                                          <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                          <div class="nft-content">
                                              <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">Legacy Legends</a>
                                              <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                  <div> 
                                                      <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                      <span class="fw-medium text-fixed-white d-block lh-1">GameWizardry</span>
                                                  </div>
                                                  <div class="text-end">
                                                      <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                      <div class="d-flex align-items-center">
                                                          <span class="avatar avatar-xs">
                                                              <img src="{{ asset('') }}assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                          </span>
                                                          <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">9.65</span>
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
                  <div class="tab-pane p-0 border-0" id="nft-realestate" role="tabpanel">
                      <div class="row row-cols-xxl-5 row-cols-xl-3 row-cols-md-2 row-cols-1">
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="position-relative mb-3 overflow-hidden rounded">
                                          <img src="{{ asset('') }}assets/images/nft-images/3.jpg" class="card-img rounded" alt="...">
                                          <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                          <div class="nft-content">
                                              <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">Historic Visions</a>
                                              <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                  <div> 
                                                      <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                      <span class="fw-medium text-fixed-white d-block lh-1">ArtCrafted</span>
                                                  </div>
                                                  <div class="text-end">
                                                      <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                      <div class="d-flex align-items-center">
                                                          <span class="avatar avatar-xs">
                                                              <img src="{{ asset('') }}assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                          </span>
                                                          <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">1.85</span>
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
                  <div class="tab-pane p-0 border-0" id="nft-sports" role="tabpanel">
                      <div class="row row-cols-xxl-5 row-cols-xl-3 row-cols-md-2 row-cols-1">
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="position-relative mb-3 overflow-hidden rounded">
                                          <img src="{{ asset('') }}assets/images/nft-images/4.jpg" class="card-img rounded" alt="...">
                                          <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                          <div class="nft-content">
                                              <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">Dragon’s Breath</a>
                                              <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                  <div> 
                                                      <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                      <span class="fw-medium text-fixed-white d-block lh-1">ArtInnovator</span>
                                                  </div>
                                                  <div class="text-end">
                                                      <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                      <div class="d-flex align-items-center">
                                                          <span class="avatar avatar-xs">
                                                              <img src="{{ asset('') }}assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                          </span>
                                                          <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">4.22</span>
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
                  <div class="tab-pane p-0 border-0" id="nft-fashion" role="tabpanel">
                      <div class="row row-cols-xxl-5 row-cols-xl-3 row-cols-md-2 row-cols-1">
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="position-relative mb-3 overflow-hidden rounded">
                                          <img src="{{ asset('') }}assets/images/nft-images/7.jpg" class="card-img rounded" alt="...">
                                          <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                          <div class="nft-content">
                                              <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">Ancient Echoes</a>
                                              <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                  <div> 
                                                      <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                      <span class="fw-medium text-fixed-white d-block lh-1">TechCrafter</span>
                                                  </div>
                                                  <div class="text-end">
                                                      <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                      <div class="d-flex align-items-center">
                                                          <span class="avatar avatar-xs">
                                                              <img src="{{ asset('') }}assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                          </span>
                                                          <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">1.78</span>
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
                  <div class="tab-pane p-0 border-0" id="nft-avatars" role="tabpanel">
                      <div class="row row-cols-xxl-5 row-cols-xl-3 row-cols-md-2 row-cols-1">
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="position-relative mb-3 overflow-hidden rounded">
                                          <img src="{{ asset('') }}assets/images/nft-images/5.jpg" class="card-img rounded" alt="...">
                                          <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                          <div class="nft-content">
                                              <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">Epic Personas</a>
                                              <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                  <div> 
                                                      <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                      <span class="fw-medium text-fixed-white d-block lh-1">CyberCraftPro</span>
                                                  </div>
                                                  <div class="text-end">
                                                      <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                      <div class="d-flex align-items-center">
                                                          <span class="avatar avatar-xs">
                                                              <img src="{{ asset('') }}assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                          </span>
                                                          <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">5.78</span>
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
                  <div class="tab-pane p-0 border-0" id="nft-memes" role="tabpanel">
                      <div class="row row-cols-xxl-5 row-cols-xl-3 row-cols-md-2 row-cols-1">
                          <div class="col">
                              <div class="card custom-card">
                                  <div class="card-body">
                                      <div class="position-relative mb-3 overflow-hidden rounded">
                                          <img src="{{ asset('') }}assets/images/nft-images/2.jpg" class="card-img rounded" alt="...">
                                          <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                          <div class="nft-content">
                                              <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">Sonic Journeys</a>
                                              <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                  <div> 
                                                      <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                      <span class="fw-medium text-fixed-white d-block lh-1">TechSavvyXpert</span>
                                                  </div>
                                                  <div class="text-end">
                                                      <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                      <div class="d-flex align-items-center">
                                                          <span class="avatar avatar-xs">
                                                              <img src="{{ asset('') }}assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
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
          </div>
      </div>
      <!-- End:: row-2 -->

  </div>
</div>
<!-- End::app-content -->

@endsection