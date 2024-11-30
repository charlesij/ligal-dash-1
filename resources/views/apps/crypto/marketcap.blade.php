@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Page Header -->
      <div
          class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Marketcap</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Crypto</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Marketcap</li>
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
          <div class="col-xxl-3 col-xl-6 col-lg-12">
              <div class="card custom-card">
                  <div class="card-body">
                      <div class="p-3 bg-light">
                          <div class="d-flex align-items-center justify-content-between mb-3 flex-wrap">
                              <div class="d-flex align-items-center">
                                  <div class="me-2">
                                      <span class="avatar avatar-md avatar-rounded bg-primary p-2 svg-white">
                                          <svg xmlns="http://www.w3.org/2000/svg"
                                              enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                              <path
                                                  d="M14.075,24v-3.188c3.779-0.207,6.305-1.167,6.642-4.756c0.264-2.88-1.084-4.165-3.223-4.682l0.001-0.002c1.289-0.665,2.109-1.846,1.919-3.811c-0.249-2.688-2.438-3.589-5.339-3.84V0h-2.256v3.619c-0.586,0-1.186,0.015-1.787,0.03V0.001H7.776v3.722c-0.829,0.025-1.795,0.013-4.526,0v2.422c1.781-0.032,2.715-0.147,2.929,1.004V17.34c-0.136,0.914-0.861,0.782-2.475,0.753L3.25,20.796c4.113,0,4.526,0.015,4.526,0.015v3.188h2.256v-3.143c0.615,0.015,1.216,0.015,1.787,0.015V24H14.075z M10.077,6.306c1.274,0,5.259-0.399,5.259,2.275c0,2.555-3.985,2.26-5.259,2.26V6.306z M10.077,18.106v-4.992c1.523,0,6.188-0.428,6.188,2.496C16.265,18.431,11.6,18.106,10.077,18.106z">
                                              </path>
                                          </svg>
                                      </span>
                                  </div>
                                  <div class="mb-0 fw-medium">
                                      Bitcoin - BTC
                                  </div>
                              </div>
                              <p class="text-success mb-0 font-weight-normal tx-13">
                                  <span class="numberfont">+280.30(0.96%)</span> today
                              </p>
                          </div>
                          <div class="d-flex align-items-end justify-content-between flex-wrap">
                              <div>
                                  <p class="mb-1">BTC / USD</p>
                                  <p class="fs-20 mb-0 fw-medium lh-1 text-primary">$35,876.29</p>
                              </div>
                              <div id="btc-chart"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6 col-lg-12">
              <div class="card custom-card">
                  <div class="card-body">
                      <div class="p-3 bg-light">
                          <div class="d-flex align-items-center justify-content-between mb-3 flex-wrap">
                              <div class="d-flex align-items-center">
                                  <div class="me-2">
                                      <span
                                          class="avatar avatar-md avatar-rounded bg-secondary p-2 svg-white">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                                              <path
                                                  d="M65.7 96.4V128l39.2-55.1zM103.4 62.7L65.7 0v45.6zM65.7 49.2v38.9l37.4-21.9zM24.7 62.7L62.4 0v45.6zM62.4 49.2v38.9L24.9 66.2zM62.3 96.4V128L23.1 72.9z">
                                              </path>
                                          </svg>
                                      </span>
                                  </div>
                                  <div class="mb-0 fw-medium">
                                      Etherium - ETH
                                  </div>
                              </div>
                              <p class="text-danger mb-0 font-weight-normal tx-13">
                                  <span class="numberfont">-2,044.24(1.32%)</span> today
                              </p>
                          </div>
                          <div class="d-flex align-items-end justify-content-between flex-wrap">
                              <div>
                                  <p class="mb-1">ETH / USD</p>
                                  <p class="fs-20 mb-0 fw-medium lh-1 text-secondary">$31,244.12</p>
                              </div>
                              <div id="eth-chart"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6 col-lg-12">
              <div class="card custom-card">
                  <div class="card-body">
                      <div class="p-3 bg-light">
                          <div class="d-flex align-items-center justify-content-between mb-3 flex-wrap">
                              <div class="d-flex align-items-center">
                                  <div class="me-2">
                                      <span class="avatar avatar-md avatar-rounded bg-success svg-white p-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                                              <path
                                                  d="M3 99.8C5 94 6.8 88.6 8.8 83.1c.2-.5 1.2-1 1.8-1 3.3-.1 6.6 0 9.9 0h64.6c1.7 0 2.5-.5 3-2.2 3.6-10.6 7.3-21.2 11-31.8.2-.6.3-1.1.6-2H21.4c2-5.9 3.9-11.4 5.9-16.9.2-.4 1-.8 1.5-.8 2-.1 3.9 0 5.9 0 26.5 0 53 .2 79.6-.1 7.9-.1 16.3 6 12.9 17.6-2.5 8.7-5.8 17.1-8.7 25.6-1 2.9-2 5.9-3 8.7-3.7 10.2-11.2 16.3-21.5 19.2-.9.3-1.9.3-2.9.3H5.2c-.6.1-1.3.1-2.2.1z">
                                              </path>
                                              <path
                                                  d="M52.6 55.6c-2 5.6-3.9 10.9-5.9 16-.1.4-.9.7-1.4.7H.8c-.2 0-.4-.1-.8-.3 1.9-5.2 3.7-10.3 5.7-15.4.2-.5 1-1 1.5-1h45.4z">
                                              </path>
                                          </svg>
                                      </span>
                                  </div>
                                  <div class="mb-0 fw-medium">
                                      Dash - DASH
                                  </div>
                              </div>
                              <p class="text-success mb-0 font-weight-normal tx-13">
                                  <span class="numberfont">+1,056.24(1.62%)</span> today
                              </p>
                          </div>
                          <div class="d-flex align-items-end justify-content-between flex-wrap">
                              <div>
                                  <p class="mb-1">DASH / USD</p>
                                  <p class="fs-20 mb-0 fw-medium lh-1 text-success">$26,345.000</p>
                              </div>
                              <div id="dash-chart"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6 col-lg-12">
              <div class="card custom-card">
                  <div class="card-body">
                      <div class="p-3 bg-light">
                          <div class="d-flex align-items-center justify-content-between mb-3 flex-wrap">
                              <div class="d-flex align-items-center">
                                  <div class="me-2">
                                      <span class="avatar avatar-md avatar-rounded bg-info svg-white p-2">
                                          <svg xmlns="http://www.w3.org/2000/svg"
                                              enable-background="new 0 0 32 32" viewBox="0 0 32 32">
                                              <path
                                                  d="M21.022 3.305c.481 2.917 8.449 5.085 3.016 13.286-.086.129-.294.079-.314-.075-.435-3.378-1.004-5.469-3.349-6.963-.052-.033-.112-.048-.171-.033-.869.218-3.112 1.461-4.123 2.863-.052.072-.137.107-.224.09-1.878-.37-3.788-1.111-4.744-2.376-.068-.09-.186-.123-.284-.067-1.344.768-2.697 2.537-2.82 6.577-.005.169-.232.23-.314.082C4.249 10.48 6.491 6.091 11.736 4.097c.135-.051.281.034.312.175.456 2.061 2.844 3.936 3.67 4.532.132.095.303.015.332-.145.457-2.496 2.757-4.809 4.665-5.559C20.858 3.045 20.997 3.154 21.022 3.305zM16.5 21H15v-1h1.5c.275 0 .5.224.5.5S16.775 21 16.5 21zM18 23.5c0 .276-.225.5-.5.5.146 0-2.347 0-2.5 0v-1c-.103 0 2.321 0 2.5 0C17.775 23 18 23.224 18 23.5z">
                                              </path>
                                              <path
                                                  d="M16,14c-4.418,0-8,3.582-8,8s3.582,8,8,8s8-3.582,8-8S20.418,14,16,14z M17.35,26H17v1.5h-1V26h-1v1.5h-1V26h-0.5
                                              c-0.276,0-0.5-0.224-0.5-0.5c0-0.154,0-7.246,0-7c0-0.276,0.224-0.5,0.5-0.5H14v-1.5h1V18h1v-1.5h1v1.551
                                              c1.45,0.296,2.406,1.837,1.829,3.34c0.767,0.485,1.258,1.37,1.159,2.364C19.857,25.058,18.66,26,17.35,26z">
                                              </path>
                                          </svg>
                                      </span>
                                  </div>
                                  <div class="mb-0 fw-medium">
                                      BitSend - BSD
                                  </div>
                              </div>
                              <p class="text-danger mb-0 font-weight-normal tx-13">
                                  <span class="numberfont">-3,124.24(1.32%)</span> today
                              </p>
                          </div>
                          <div class="d-flex align-items-end justify-content-between flex-wrap">
                              <div>
                                  <p class="mb-1">BSD / USD</p>
                                  <p class="fs-20 mb-0 fw-medium lh-1 text-info">$32,856.000</p>
                              </div>
                              <div id="bsd-chart"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--End::row-1 -->

      <!-- Start::row-2  -->
      <div class="row">
          <div class="col-xxl-9">
              <div class="card custom-card">
                  <div class="card-header justify-content-between">
                      <div class="card-title">
                          Crypto MarketCap
                      </div>
                      <div class="d-flex flex-wrap gap-2">
                          <div>
                              <input class="form-control form-control-sm" type="text"
                                  placeholder="Search Here" aria-label=".form-control-sm example">
                          </div>
                          <div class="dropdown">
                              <a href="javascript:void(0);"
                                  class="btn btn-primary btn-sm btn-wave waves-effect waves-light"
                                  data-bs-toggle="dropdown" aria-expanded="false">
                                  Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                              </a>
                              <ul class="dropdown-menu" role="menu">
                                  <li><a class="dropdown-item" href="javascript:void(0);">Market Cap</a></li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">Price</a></li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">Trading Volume</a>
                                  </li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">Price Change
                                          (24h)</a></li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">Rank</a></li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">A - Z</a></li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">All-Time High
                                          (ATH)</a></li>
                              </ul>
                          </div>
                          <div>
                              <button class="btn btn-secondary btn-sm btn-wave waves-effect waves-light">View
                                  All</button>
                          </div>
                      </div>
                  </div>
                  <div class="card-body p-0">
                      <div class="table-responsive">
                          <table class="table text-nowrap">
                              <thead>
                                  <tr>
                                      <th scope="col" class="fw-medium">#</th>
                                      <th scope="col">Crypto Name</th>
                                      <th scope="col">MarketCap</th>
                                      <th scope="col">Price<span class="text-muted ms-1">(USD)</span></th>
                                      <th scope="col">1h Change</th>
                                      <th scope="col">24h Change</th>
                                      <th scope="col">Volume (24h)</th>
                                      <th scope="col">Circulating Supply</th>
                                      <th scope="col">Trade</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-xs avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/crypto-currencies/square-color/Bitcoin.svg"
                                                          alt="">
                                                  </span>
                                              </div>
                                              <div class="fw-medium"><a href="javascript:void(0);">Bitcoin
                                                      (BTC)</a></div>
                                          </div>
                                      </td>
                                      <td>
                                          <span class="fw-medium">$582.23B</span>
                                      </td>
                                      <td>
                                          <span class="fw-medium">
                                              <a href="javascript:void(0);">$29,948.80</a>
                                          </span>
                                      </td>
                                      <td>
                                          <span class="text-danger fw-medium"><i
                                                  class="ti ti-arrow-narrow-down fs-15 fw-medium"></i>0.483%</span>
                                      </td>
                                      <td>
                                          <span class="text-success fw-medium"><i
                                                  class="ti ti-arrow-narrow-up fs-15 fw-medium"></i>0.239%</span>
                                      </td>
                                      <td>
                                          <a href="javascript:void(0)">
                                              <span class="d-block fw-medium">$11.79B USD</span>
                                          </a>
                                      </td>
                                      <td>
                                          <a href="javascript:void(0);">
                                              <span class="fw-medium d-block mb-2">
                                                  19.43M of (21M)
                                              </span>
                                              <div class="progress-stacked progress-xs w-75">
                                                  <div class="progress-bar bg-primary op-5" role="progressbar"
                                                      style="width: 88%" aria-valuenow="10" aria-valuemin="0"
                                                      aria-valuemax="100"></div>
                                                  <div class="progress-bar bg-secondary op-5"
                                                      role="progressbar" style="width: 12%" aria-valuenow="15"
                                                      aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                          </a>
                                      </td>
                                      <td>
                                          <button class="btn btn-light btn-sm text-default">Trade Now</button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-xs avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/crypto-currencies/square-color/Ethereum.svg"
                                                          alt="">
                                                  </span>
                                              </div>
                                              <div class="fw-medium"><a href="javascript:void(0);">Etherium
                                                      (ETH)</a></div>
                                          </div>
                                      </td>
                                      <td>
                                          <span class="fw-medium">$226.91B</span>
                                      </td>
                                      <td>
                                          <span class="fw-medium">
                                              <a href="javascript:void(0);">$1,895.96</a>
                                          </span>
                                      </td>
                                      <td>
                                          <span class="text-danger fw-medium"><i
                                                  class="ti ti-arrow-narrow-down fs-15 fw-medium"></i>0.87%</span>
                                      </td>
                                      <td>
                                          <span class="text-danger fw-medium"><i
                                                  class="ti ti-arrow-narrow-down fs-15 fw-medium"></i>0.29%</span>
                                      </td>
                                      <td>
                                          <a href="javascript:void(0)">
                                              <span class="d-block fw-medium">$2.83B USD</span>
                                          </a>
                                      </td>
                                      <td>
                                          <a href="javascript:void(0);">
                                              <span class="fw-medium d-block">
                                                  120M
                                              </span>
                                          </a>
                                          <div class="progress-stacked progress-xs w-75">
                                              <div class="progress-bar bg-primary op-5" role="progressbar"
                                                  style="width: 65%" aria-valuenow="10" aria-valuemin="0"
                                                  aria-valuemax="100"></div>
                                              <div class="progress-bar bg-secondary op-5"
                                                  role="progressbar" style="width: 35%" aria-valuenow="0"
                                                  aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                      </td>
                                      <td>
                                          <button class="btn btn-light btn-sm text-default">Trade Now</button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>3</td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-xs avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/crypto-currencies/square-color/Golem.svg"
                                                          alt="">
                                                  </span>
                                              </div>
                                              <div class="fw-medium"><a href="javascript:void(0);">Golem
                                                      (GLM)</a></div>
                                          </div>
                                      </td>
                                      <td>
                                          <span class="fw-medium">$202.07M</span>
                                      </td>
                                      <td>
                                          <span class="fw-medium">
                                              <a href="javascript:void(0);">$0.201472</a>
                                          </span>
                                      </td>
                                      <td>
                                          <span class="text-success fw-medium"><i
                                                  class="ti ti-arrow-narrow-up fs-15 fw-medium"></i>0.61%</span>
                                      </td>
                                      <td>
                                          <span class="text-danger fw-medium"><i
                                                  class="ti ti-arrow-narrow-down fs-15 fw-medium"></i>34.96%</span>
                                      </td>
                                      <td>
                                          <a href="javascript:void(0)">
                                              <span class="d-block fw-medium">$2,112,645 USD</span>
                                          </a>
                                      </td>
                                      <td>
                                          <a href="javascript:void(0);">
                                              <span class="fw-medium d-block mb-2">
                                                  1,000M
                                              </span>
                                              <div class="progress-stacked progress-xs w-75">
                                                  <div class="progress-bar  bg-primary op-5"
                                                      role="progressbar" style="width: 100%"
                                                      aria-valuenow="100" aria-valuemin="0"
                                                      aria-valuemax="100"></div>
                                              </div>
                                          </a>
                                      </td>
                                      <td>
                                          <button class="btn btn-light btn-sm text-default">Trade Now</button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>4</td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-xs avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/crypto-currencies/square-color/Dash.svg"
                                                          alt="">
                                                  </span>
                                              </div>
                                              <div class="fw-medium"><a href="javascript:void(0);">Dash
                                                      (DASH)</a></div>
                                          </div>
                                      </td>
                                      <td>
                                          <span class="fw-medium">$365.877M</span>
                                      </td>
                                      <td>
                                          <span class="fw-medium">
                                              <a href="javascript:void(0);">$32.13</a>
                                          </span>
                                      </td>
                                      <td>
                                          <span class="text-success fw-medium"><i
                                                  class="ti ti-arrow-narrow-up fs-15 fw-medium"></i>0.59%</span>
                                      </td>
                                      <td>
                                          <span class="text-success fw-medium"><i
                                                  class="ti ti-arrow-narrow-down fs-15 fw-medium"></i>1.24%</span>
                                      </td>
                                      <td>
                                          <a href="javascript:void(0)">
                                              <span class="d-block fw-medium">$3.61M USD</span>
                                          </a>
                                      </td>
                                      <td>
                                          <a href="javascript:void(0);">
                                              <span class="fw-medium d-block mb-2">
                                                  11.37M of (18.92M)
                                              </span>
                                              <div class="progress-stacked progress-xs w-75">
                                                  <div class="progress-bar bg-primary op-5" role="progressbar"
                                                      style="width:56%" aria-valuenow="10" aria-valuemin="0"
                                                      aria-valuemax="100"></div>
                                                  <div class="progress-bar bg-secondary op-5"
                                                      role="progressbar" style="width: 44%" aria-valuenow="15"
                                                      aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                          </a>
                                      </td>
                                      <td>
                                          <button class="btn btn-light btn-sm text-default">Trade Now</button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>5</td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-xs avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/crypto-currencies/square-color/Litecoin.svg"
                                                          alt="">
                                                  </span>
                                              </div>
                                              <div class="fw-medium"><a href="javascript:void(0);">Litecoin
                                                      (LTC)</a></div>
                                          </div>
                                      </td>
                                      <td>
                                          <span class="fw-medium">$6.80B</span>
                                      </td>
                                      <td>
                                          <span class="fw-medium">
                                              <a href="javascript:void(0);">$92.98</a>
                                          </span>
                                      </td>
                                      <td>
                                          <span class="text-danger fw-medium"><i
                                                  class="ti ti-arrow-narrow-up fs-15 fw-medium"></i>0.90%</span>
                                      </td>
                                      <td>
                                          <span class="text-success fw-medium"><i
                                                  class="ti ti-arrow-narrow-down fs-15 fw-medium"></i>2.22%</span>
                                      </td>
                                      <td>
                                          <a href="javascript:void(0)">
                                              <span class="d-block fw-medium">$11.46B USD</span>
                                          </a>
                                      </td>
                                      <td>
                                          <a href="javascript:void(0);">
                                              <span class="fw-medium d-block mb-2">
                                                  73.40M
                                              </span>
                                              <div class="progress-stacked progress-xs w-75">
                                                  <div class="progress-bar  bg-primary op-5"
                                                      role="progressbar" style="width:100%" aria-valuenow="10"
                                                      aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                          </a>
                                      </td>
                                      <td>
                                          <button class="btn btn-light btn-sm text-default">Trade Now</button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>6</td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-xs avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/crypto-currencies/square-color/Ripple.svg"
                                                          alt="">
                                                  </span>
                                              </div>
                                              <div class="fw-medium"><a href="javascript:void(0);">Ripple
                                                      (XRP)</a></div>
                                          </div>
                                      </td>
                                      <td>
                                          <span class="fw-medium">$42.48B</span>
                                      </td>
                                      <td>
                                          <span class="fw-medium">
                                              <a href="javascript:void(0);">$0.83</a>
                                          </span>
                                      </td>
                                      <td>
                                          <span class="text-success fw-medium"><i
                                                  class="ti ti-arrow-narrow-up fs-15 fw-medium"></i>0.01%</span>
                                      </td>
                                      <td>
                                          <span class="text-success fw-medium"><i
                                                  class="ti ti-arrow-narrow-down fs-15 fw-medium"></i>0.91%</span>
                                      </td>
                                      <td>
                                          <a href="javascript:void(0)">
                                              <span class="d-block fw-medium">$2.99B USD</span>
                                          </a>
                                      </td>
                                      <td>
                                          <a href="javascript:void(0);">
                                              <span class="fw-medium d-block mb-2">
                                                  52.54B of (100B)
                                              </span>
                                              <div class="progress-stacked progress-xs w-75">
                                                  <div class="progress-bar  bg-primary op-5"
                                                      role="progressbar" style="width:52%" aria-valuenow="52"
                                                      aria-valuemin="0" aria-valuemax="100"></div>
                                                  <div class="progress-bar  bg-secondary op-5"
                                                      role="progressbar" style="width: 48%" aria-valuenow="48"
                                                      aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                          </a>
                                      </td>
                                      <td>
                                          <button class="btn btn-light btn-sm text-default">Trade Now</button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>7</td>
                                      <td>
                                          <div class="d-flex align-items-center gap-2">
                                              <div class="lh-1">
                                                  <span class="avatar avatar-xs avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/crypto-currencies/square-color/EOS.svg"
                                                          alt="">
                                                  </span>
                                              </div>
                                              <div class="fw-medium"><a href="javascript:void(0);">EOS</a>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <span class="fw-medium">$85.2M</span>
                                      </td>
                                      <td>
                                          <span class="fw-medium">
                                              <a href="javascript:void(0);">$0.765957</a>
                                          </span>
                                      </td>
                                      <td>
                                          <span class="text-danger fw-medium"><i
                                                  class="ti ti-arrow-narrow-up fs-15 fw-medium"></i>0.61%</span>
                                      </td>
                                      <td>
                                          <span class="text-danger fw-medium"><i
                                                  class="ti ti-arrow-narrow-down fs-15 fw-medium"></i>20.65%</span>
                                      </td>
                                      <td>
                                          <a href="javascript:void(0)">
                                              <span class="d-block fw-medium">$116.91M USD</span>
                                          </a>
                                      </td>
                                      <td>
                                          <a href="javascript:void(0);">
                                              <span class="fw-medium d-block mb-2">
                                                  10.1B of (105B)
                                              </span>
                                              <div class="progress-stacked progress-xs w-75">
                                                  <div class="progress-bar  bg-primary op-5"
                                                      role="progressbar" style="width:10%" aria-valuenow="10"
                                                      aria-valuemin="0" aria-valuemax="100"></div>
                                                  <div class="progress-bar bg-secondary op-5"
                                                      role="progressbar" style="width: 90%" aria-valuenow="90"
                                                      aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                          </a>
                                      </td>
                                      <td>
                                          <button class="btn btn-light btn-sm text-default">Trade Now</button>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
                  <div class="card-footer border-top-0">
                      <nav aria-label="Page navigation">
                          <ul class="pagination mb-0 float-end">
                              <li class="page-item disabled">
                                  <a class="page-link">Previous</a>
                              </li>
                              <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                              <li class="page-item active" aria-current="page">
                                  <a class="page-link" href="javascript:void(0);">2</a>
                              </li>
                              <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                              <li class="page-item">
                                  <a class="page-link" href="javascript:void(0);">Next</a>
                              </li>
                          </ul>
                      </nav>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3">
              <div class="card custom-card">
                  <div class="card-header justify-content-between">
                      <div class="card-title">
                          My Top Currencies
                      </div>
                      <div> <a href="javascript:void(0);"
                              class="fw-medium text-primary tag-link fs-13 text-decoration-underline">View
                              All</a> </div>
                  </div>
                  <div class="card-body p-0">
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                              <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                  <div class="d-flex align-items-center gap-2">
                                      <div> <span class="avatar avatar-sm p-1 bg-light"> <img
                                                  src="{{ asset('') }}/assets/images/crypto-currencies/regular/Bitcoin.svg"
                                                  alt=""> </span> </div>
                                      <div> <span class="d-block fw-medium">Bitcoin</span> <span
                                              class="d-block text-muted fs-12 fw-normal">$29,948.80</span>
                                      </div>
                                  </div>
                                  <div> <span class="fs-12 text-muted">Max Limit</span> <span
                                          class="fw-medium d-block">50 BTC</span> </div>
                                  <div> <span class="fs-12 text-muted">My Volume</span> <span
                                          class="fw-medium d-block">31.2450 BTC</span> </div>
                              </div>
                          </li>
                          <li class="list-group-item">
                              <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                  <div class="d-flex align-items-center gap-2">
                                      <div> <span class="avatar avatar-sm p-1 bg-light"> <img
                                                  src="{{ asset('') }}/assets/images/crypto-currencies/regular/litecoin.svg"
                                                  alt=""> </span> </div>
                                      <div> <span class="d-block fw-medium">Litecon</span> <span
                                              class="d-block text-muted fs-12 fw-normal">$9332.98</span>
                                      </div>
                                  </div>
                                  <div> <span class="fs-12 text-muted">Max Limit</span> <span
                                          class="fw-medium d-block">200 LTC</span> </div>
                                  <div class="text-end"> <span class="fs-12 text-muted">My Volume</span> <span
                                          class="fw-medium d-block">38.0023 LTC</span> </div>
                              </div>
                          </li>
                          <li class="list-group-item">
                              <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                  <div class="d-flex align-items-center gap-2">
                                      <div> <span class="avatar avatar-sm p-1 bg-light"> <img
                                                  src="{{ asset('') }}/assets/images/crypto-currencies/regular/Ethereum.svg"
                                                  alt=""> </span> </div>
                                      <div> <span class="d-block fw-medium">Etherium</span> <span
                                              class="d-block text-muted fs-12 fw-normal">$1,895.96</span>
                                      </div>
                                  </div>
                                  <div> <span class="fs-12 text-muted">Max Limit</span> <span
                                          class="fw-medium d-block">100 ETH</span> </div>
                                  <div> <span class="fs-12 text-muted">My Volume</span> <span
                                          class="fw-medium d-block">69.2412 BTC</span> </div>
                              </div>
                          </li>
                          <li class="list-group-item">
                              <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                  <div class="d-flex align-items-center gap-2">
                                      <div> <span class="avatar avatar-sm p-1 bg-light"> <img
                                                  src="{{ asset('') }}/assets/images/crypto-currencies/regular/Golem.svg"
                                                  alt=""> </span> </div>
                                      <div> <span class="d-block fw-medium">Golem</span> <span
                                              class="d-block text-muted fs-12 fw-normal">$1,895.96</span>
                                      </div>
                                  </div>
                                  <div> <span class="fs-12 text-muted">Max Limit</span> <span
                                          class="fw-medium d-block">130 GLM</span> </div>
                                  <div> <span class="fs-12 text-muted">My Volume</span> <span
                                          class="fw-medium d-block">69.2412 GLM</span> </div>
                              </div>
                          </li>
                          <li class="list-group-item">
                              <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                  <div class="d-flex align-items-center gap-2">
                                      <div> <span class="avatar avatar-sm p-1 bg-light"> <img
                                                  src="{{ asset('') }}/assets/images/crypto-currencies/regular/Dash.svg"
                                                  alt=""> </span> </div>
                                      <div> <span class="d-block fw-medium">Dash</span> <span
                                              class="d-block text-muted fs-12 fw-normal">$1,895.96</span>
                                      </div>
                                  </div>
                                  <div> <span class="fs-12 text-muted">Max Limit</span> <span
                                          class="fw-medium d-block">300 DASH</span> </div>
                                  <div> <span class="fs-12 text-muted">My Volume</span> <span
                                          class="fw-medium d-block">19.8463 DASH</span> </div>
                              </div>
                          </li>
                          <li class="list-group-item">
                              <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                  <div class="d-flex align-items-center gap-2">
                                      <div> <span class="avatar avatar-sm p-1 bg-light"> <img
                                                  src="{{ asset('') }}/assets/images/crypto-currencies/regular/litecoin.svg"
                                                  alt=""> </span> </div>
                                      <div> <span class="d-block fw-medium">Litecoin</span> <span
                                              class="d-block text-muted fs-12 fw-normal">$1,895.96</span>
                                      </div>
                                  </div>
                                  <div> <span class="fs-12 text-muted">Max Limit</span> <span
                                          class="fw-medium d-block">250 LTC</span> </div>
                                  <div> <span class="fs-12 text-muted">My Volume</span> <span
                                          class="fw-medium d-block">34.8568 LTC</span> </div>
                              </div>
                          </li>
                          <li class="list-group-item">
                              <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                  <div class="d-flex align-items-center gap-2">
                                      <div> <span class="avatar avatar-sm p-1 bg-light"> <img
                                                  src="{{ asset('') }}/assets/images/crypto-currencies/regular/Ripple.svg"
                                                  alt=""> </span> </div>
                                      <div> <span class="d-block fw-medium">Ripple</span> <span
                                              class="d-block text-muted fs-12 fw-normal">$1,895.96</span>
                                      </div>
                                  </div>
                                  <div> <span class="fs-12 text-muted">Max Limit</span> <span
                                          class="fw-medium d-block">140 XRP</span> </div>
                                  <div> <span class="fs-12 text-muted">My Volume</span> <span
                                          class="fw-medium d-block">23.4749 XRP</span> </div>
                              </div>
                          </li>
                          <li class="list-group-item">
                              <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                  <div class="d-flex align-items-center gap-2">
                                      <div> <span class="avatar avatar-sm p-1 bg-light"> <img
                                                  src="{{ asset('') }}/assets/images/crypto-currencies/regular/EOS.svg"
                                                  alt=""> </span> </div>
                                      <div> <span class="d-block fw-medium">EOS</span> <span
                                              class="d-block text-muted fs-12 fw-normal">$1,895.96</span>
                                      </div>
                                  </div>
                                  <div> <span class="fs-12 text-muted">Max Limit</span> <span
                                          class="fw-medium d-block">160 EOS</span> </div>
                                  <div> <span class="fs-12 text-muted">My Volume</span> <span
                                          class="fw-medium d-block">69.2412 EOS</span> </div>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <!-- End::row-2  -->

  </div>
</div>
<!-- End::app-content -->

@endsection