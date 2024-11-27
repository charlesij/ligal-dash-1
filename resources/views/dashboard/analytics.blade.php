@extends('layout.main')
@section('content')

  <!-- Start::app-content -->
  <div class="main-content app-content">
    <div class="container-fluid">

      <!-- Start::page-header -->
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
        <div>
          <h1 class="page-title fw-medium fs-18 mb-2">Analytics</h1>
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
              <a href="javascript:void(0);">
                  Dashboards
              </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Analytics</li>
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
        <div class="col-xxl-9">
          <div class="row">
            <div class="col-xl-3">
              <div class="card custom-card">
                <div class="card-body">
                  <div class="">
                    <div class="d-flex justify-content-between">
                      <span class="avatar avatar-md avatar-rounded bg-primary-transparent svg-primary mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z"></path></svg>
                      </span>
                      <span class="fw-medium fs-13 text-muted">Total Followers</span>
                    </div>
                  </div>
                  <div class="d-flex align-items-end justify-content-between">
                    <div>
                      <h3 class="fw-semibold">12,432</h3>
                      <span class="fs-12 text-muted"><span class="text-success fs-12 d-inline-flex align-items-center me-1"><i class="ti ti-trending-up me-1"></i>+0.892 </span>Increased</span>
                    </div>
                    <div id="total-followers"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3">
                <div class="card custom-card ">
                    <div class="card-body">
                        <div class="">
                            <div class="d-flex justify-content-between">
                                <span class="avatar avatar-md avatar-rounded bg-secondary-transparent svg-secondary mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M232,208a8,8,0,0,1-8,8H32a8,8,0,0,1-8-8V48a8,8,0,0,1,16,0V156.69l50.34-50.35a8,8,0,0,1,11.32,0L128,132.69,180.69,80H160a8,8,0,0,1,0-16h40a8,8,0,0,1,8,8v40a8,8,0,0,1-16,0V91.31l-58.34,58.35a8,8,0,0,1-11.32,0L96,123.31l-56,56V200H224A8,8,0,0,1,232,208Z"></path></svg>
                                </span>
                                <span class="fw-medium fs-13 text-muted">Bounce Rate</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-end justify-content-between">
                            <div>
                                <h3 class="fw-semibold">12,432</h3>
                                <span class="fs-12 text-muted"><span class="text-success fs-12 d-inline-flex align-items-center me-1"><i class="ti ti-trending-up me-1"></i>+0.892 </span>Increased</span>
                            </div>
                            <div id="bounce-rate"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card custom-card ">
                    <div class="card-body">
                        <div class="">
                            <div class="d-flex justify-content-between">
                                <span class="avatar avatar-md avatar-rounded bg-success-transparent svg-success mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M152,120H136V56h8a32,32,0,0,1,32,32,8,8,0,0,0,16,0,48.05,48.05,0,0,0-48-48h-8V24a8,8,0,0,0-16,0V40h-8a48,48,0,0,0,0,96h8v64H104a32,32,0,0,1-32-32,8,8,0,0,0-16,0,48.05,48.05,0,0,0,48,48h16v16a8,8,0,0,0,16,0V216h16a48,48,0,0,0,0-96Zm-40,0a32,32,0,0,1,0-64h8v64Zm40,80H136V136h16a32,32,0,0,1,0,64Z"></path></svg>
                                </span>
                                <span class="fw-medium fs-13 text-muted">Conversion Rate</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-end justify-content-between">
                            <div>
                                <h3 class="fw-semibold">12,432</h3>
                                <span class="fs-12 text-muted"><span class="text-success fs-12 d-inline-flex align-items-center me-1"><i class="ti ti-trending-up me-1"></i>+0.892 </span>Increased</span>
                            </div>
                            <div id="conversion-rate"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card custom-card ">
                    <div class="card-body">
                        <div class="">
                            <div class="d-flex justify-content-between">
                                <span class="avatar avatar-md avatar-rounded bg-info-transparent svg-info mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M232,136.66A104.12,104.12,0,1,1,119.34,24,8,8,0,0,1,120.66,40,88.12,88.12,0,1,0,216,135.34,8,8,0,0,1,232,136.66ZM120,72v56a8,8,0,0,0,8,8h56a8,8,0,0,0,0-16H136V72a8,8,0,0,0-16,0Zm40-24a12,12,0,1,0-12-12A12,12,0,0,0,160,48Zm36,24a12,12,0,1,0-12-12A12,12,0,0,0,196,72Zm24,36a12,12,0,1,0-12-12A12,12,0,0,0,220,108Z"></path></svg>
                                </span>
                                <span class="fw-medium fs-13 text-muted">Session Duration</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-end justify-content-between">
                            <div>
                                <h3 class="fw-semibold">3hrs</h3>
                                <span class="fs-12 text-muted"><span class="text-success fs-12 d-inline-flex align-items-center me-1"><i class="ti ti-trending-up me-1"></i>+0.892 </span>Increased</span>
                            </div>
                            <div id="session-duration"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">
                            Session Duration By Users
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="session-users"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card custom-card">
                    <div class="card-header justify-content-between flex-wrap">
                        <div class="card-title">
                            Activity
                        </div>
                        <div class="dropdown">
                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icon btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li class=""><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                <li class=""><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled analytics-activity">
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-primary-transparent">
                                            <i class="bx bx-bullseye fs-5"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="d-block fw-semibold">Total Visits</span>
                                        <span class="fs-13 text-muted">Increased by <span class="text-success fw-medium ms-1">1.75%<i class="ti ti-arrow-narrow-up"></i></span></span>
                                    </div>
                                    <div>
                                        <span class="d-block h6 mb-0 fw-semibold">23,124</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-secondary-transparent">
                                            <i class="bx bx-cube-alt fs-5"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="d-block fw-semibold">Total Products</span>
                                        <span class="fs-13 text-muted">Decreased by <span class="text-danger fw-medium ms-1">0.85%<i class="ti ti-arrow-narrow-down"></i></span></span>
                                    </div>
                                    <div>
                                        <span class="d-block h6 mb-0 fw-semibold">1.3k</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-success-transparent">
                                            <i class="bx bx-wallet-alt fs-5"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="d-block fw-semibold">Total Sales</span>
                                        <span class="fs-13 text-muted">Increased by <span class="text-success fw-medium ms-1">3.74%<i class="ti ti-arrow-narrow-up"></i></span></span>
                                    </div>
                                    <div>
                                        <span class="d-block h6 mb-0 fw-semibold">23.89k</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-warning-transparent">
                                            <i class="bx bx-money-withdraw fs-5"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="d-block fw-semibold">Total Revenue</span>
                                        <span class="fs-13 text-muted">Increased by <span class="text-success fw-medium ms-1">0.23%<i class="ti ti-arrow-narrow-up"></i></span></span>
                                    </div>
                                    <div>
                                        <span class="d-block h6 mb-0 fw-semibold">$187.38k</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-info-transparent">
                                            <i class="bx bx-download fs-5"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="d-block fw-semibold">Total profit</span>
                                        <span class="fs-13 text-muted">Decreased by <span class="text-danger fw-medium ms-1">4.95%<i class="ti ti-arrow-narrow-down"></i></span></span>
                                    </div>
                                    <div>
                                        <span class="d-block h6 mb-0 fw-semibold">$84.33k</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-danger-transparent">
                                            <i class="bx bx-money fs-5"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="d-block fw-semibold">Total Income</span>
                                        <span class="fs-13 text-muted">Increased by <span class="text-success fw-medium ms-1">1.75%<i class="ti ti-arrow-narrow-up"></i></span></span>
                                    </div>
                                    <div>
                                        <span class="d-block h6 mb-0 fw-semibold">$983k</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-xxl-3">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">
                                Visitors
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="visitors"></div>
                            <div class="d-flex justify-content-center gap-5 mt-3">
                                <div class="d-flex">
                                    <div class="text-center">
                                        <p class="mb-1 text-muted"> <i class="bx bxs-circle text-primary fs-10 me-1"></i>Online visitors</p>
                                        <h5 class="mb-0 fw-semibold">1,86,758 </h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="text-center">
                                        <p class="mb-1 text-muted"> <i class="bx bxs-circle text-secondary fs-10 me-1"></i>Offline visitors</p>
                                        <h5 class="mb-0 fw-semibold">32,389</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-1">
                                <h6 class="fw-semibold mb-0">Audience Report</h6>
                                <div>
                                    <span class="avatar avatar-md bg-primary"><i class="fe fe-activity"></i></span>
                                </div>
                            </div>
                            <div class="d-flex align-items-end">
                                <div class="flex-1 w-100">
                                    <h3 class="fw-semibold mb-1">12,890<span class="text-success fs-13 ms-2"><i class="fe fe-arrow-up-right me-2 fs-12"></i>10.5%</span></h3>
                                    <span class="d-block text-muted">Currently active now</span>
                                </div>
                            </div>
                            <div id="audience-report"></div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>                
      <!-- End:: row-1 -->      
      
      <!-- Start:: row-2 -->
      <div class="row">
          <div class="col-xxl-3 col-xl-6">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">
                          Sessions Duration By Time
                      </div>
                  </div>
                  <div class="card-body">
                      <div id="sessions-time"></div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6">
              <div class="card custom-card overflow-hidden">
                  <div class="card-header">
                      <div class="card-title">
                          Browser Usuage
                      </div>
                  </div>
                  <div class="card-body p-0">
                      <div class="table-responsive">
                          <table class="table">
                              <thead class="table-header-light">
                                  <tr>
                                      <th >Browser</th>
                                      <th class="text-center">Sessions</th>
                                      <th class="text-end">Bounce Rate</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <div class="me-2">
                                                  <span class="avatar avatar-sm bg-primary avatar-rounded"><i class="ri-chrome-line fs-18"></i></span>
                                              </div>
                                              <p class="mb-0">Chrome</p>
                                          </div>
                                      </td>
                                      <td class="text-center"><span class="fs-14">23,379</span></td>
                                      <td class="text-end"><span class="fw-semibold d-inline-flex align-items-center text-success"><i class="fe fe-arrow-up-right me-1"></i>+5.37%</span></td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <div class="me-2">
                                                  <span class="avatar avatar-sm bg-secondary avatar-rounded"><i class="ri-safari-line fs-18"></i></span>
                                              </div>
                                              <p class="mb-0">Safari</p>
                                          </div>
                                      </td>
                                      <td class="text-center">20,937</td>
                                      <td class="text-end"><span class="fw-semibold d-inline-flex align-items-center text-success"><i class="fe fe-arrow-up-right me-1"></i>+1.74%</span></td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <div class="me-2">
                                                  <span class="avatar avatar-sm bg-success avatar-rounded"><i class="ri-opera-line fs-18"></i></span>
                                              </div>
                                              <p class="mb-0">Opera</p>
                                          </div>
                                      </td>
                                      <td class="text-center">20,848</td>
                                      <td class="text-end"><span class="fw-semibold d-inline-flex align-items-center text-danger"><i class="fe fe-arrow-down-right me-1"></i>-11.43%</span></td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <div class="me-2">
                                                  <span class="avatar avatar-sm bg-info avatar-rounded"><i class="ri-firefox-fill fs-18"></i></span>
                                              </div>
                                              <p class="mb-0">Firefox</p>
                                          </div>
                                      </td>
                                      <td class="text-center">18,120</td>
                                      <td class="text-end"><span class="fw-semibold d-inline-flex align-items-center text-success"><i class="fe fe-arrow-up-right me-1"></i>7.61%</span></td>
                                  </tr>
                                  <tr>
                                      <td class="border-bottom-0">
                                          <div class="d-flex align-items-center">
                                              <div class="me-2">
                                                  <span class="avatar avatar-sm bg-warning avatar-rounded"><i class="ri-edge-fill fs-18"></i></span>
                                              </div>
                                              <p class="mb-0">Edge</p>
                                          </div>
                                      </td>
                                      <td class="text-center border-bottom-0">14,986</td>
                                      <td class="text-end border-bottom-0"><span class="fw-semibold d-inline-flex align-items-center text-danger"><i class="fe fe-arrow-up-right me-1"></i>-1.14%</span></td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">Sessions By Country</div>
                  </div>
                  <div class="card-body pb-0">
                      <div id="sessionsCountry"></div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6">
              <div class="card custom-card">
                  <div class="card-header justify-content-between">
                      <div class="card-title">
                          Visitors By Countries
                      </div>
                      <button class="btn btn-sm btn-light border">View All</button>
                  </div>
                  <div class="card-body">
                      <ul class="list-unstyled mb-0 analytics-visitors-countries">
                          <li>
                              <div class="d-flex align-items-center">
                                  <div class="lh-1">
                                      <span class="avatar avatar-xs avatar-rounded text-default">
                                          <img src="../assets/images/flags/us_flag.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="ms-3 flex-fill lh-1">
                                      <span class="fs-14">United States</span>
                                  </div>
                                  <div>
                                      <h6 class="fw-semibold">32,190</h6>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center">
                                  <div class="lh-1">
                                      <span class="avatar avatar-xs avatar-rounded text-default">
                                          <img src="../assets/images/flags/argentina_flag.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="ms-3 flex-fill lh-1">
                                      <span class="fs-14">Argentina</span>
                                  </div>
                                  <div>
                                      <h6 class="fw-semibold">8,798</h6>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center">
                                  <div class="lh-1">
                                      <span class="avatar avatar-xs avatar-rounded text-default">
                                          <img src="../assets/images/flags/canada_flag.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="ms-3 flex-fill lh-1">
                                      <span class="fs-14">Canada</span>
                                  </div>
                                  <div>
                                      <h6 class="fw-semibold">16,885</h6>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center">
                                  <div class="lh-1">
                                      <span class="avatar avatar-xs avatar-rounded text-default">
                                          <img src="../assets/images/flags/india_flag.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="ms-3 flex-fill lh-1">
                                      <span class="fs-14">India</span>
                                  </div>
                                  <div>
                                      <h6 class="fw-semibold">14,885</h6>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center">
                                  <div class="lh-1">
                                      <span class="avatar avatar-xs avatar-rounded text-default">
                                          <img src="../assets/images/flags/italy_flag.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="ms-3 flex-fill lh-1">
                                      <span class="fs-14">Italy</span>
                                  </div>
                                  <div>
                                      <h6 class="fw-semibold">17,578</h6>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="d-flex align-items-center">
                                  <div class="lh-1">
                                      <span class="avatar avatar-xs avatar-rounded text-default">
                                          <img src="../assets/images/flags/germany_flag.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="ms-3 flex-fill lh-1">
                                      <span class="fs-14">Germany</span>
                                  </div>
                                  <div>
                                      <h6 class="fw-semibold">10,118</h6>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: row-2 -->

      <!-- Start:: row-3 -->
      <div class="row">
          <div class="col-xl-8">
              <div class="card custom-card overflow-hidden">
                  <div class="card-header">
                      <div class="card-title">
                          Visitors By Channel Report
                      </div>
                  </div>
                  <div class="card-body p-0">
                      <div class="table-responsive">
                          <table class="table table-hover text-nowrap">
                              <thead>
                                  <tr>
                                      <th scope="col" class="text-center">S.No</th>
                                      <th scope="col">Channel</th>
                                      <th scope="col">Bounce Rate</th>
                                      <th scope="col" class="text-center">Target Reached</th>
                                      <th scope="col" class="text-center">Sessions</th>
                                      <th scope="col" class="text-center">Pages Per Session</th>
                                      <th scope="col">Avg Session Duration</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <th scope="row" class="text-center">
                                          1
                                      </th>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-sm bg-primary-transparent avatar-rounded">
                                                  <i class="ri-search-2-line fs-15 fw-semibiold text-primary"></i>
                                              </span>
                                              <span class="ms-2">
                                                  Organic Search
                                              </span>
                                          </div>
                                      </td>
                                      <td>32.09%</td>
                                      <td class="text-center">782</td>
                                      <td class="text-center">
                                          <span class="badge bg-primary-transparent">278</span>
                                      </td>
                                      <td class="text-center">
                                          2.9
                                      </td>
                                      <td>
                                          0 hrs : 0 mins : 32 secs
                                      </td>
                                  </tr>
                                  <tr>
                                      <th scope="row" class="text-center">
                                          2
                                      </th>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-sm bg-secondary-transparent avatar-rounded">
                                                  <i class="ri-globe-line fs-15 fw-semibiold text-secondary"></i>
                                              </span>
                                              <span class="ms-2">
                                                  Direct
                                              </span>
                                          </div>
                                      </td>
                                      <td>39.38%</td>
                                      <td class="text-center">882</td>
                                      <td class="text-center">
                                          <span class="badge bg-secondary-transparent">782</span>
                                      </td>
                                      <td class="text-center">
                                          1.5
                                      </td>
                                      <td>
                                          0 hrs : 2 mins : 45 secs
                                      </td>
                                  </tr>
                                  <tr>
                                      <th scope="row" class="text-center">
                                          3
                                      </th>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-sm bg-success-transparent avatar-rounded">
                                                  <i class="ri-share-forward-line fs-15 fw-semibiold text-success"></i>
                                              </span>
                                              <span class="ms-2">
                                                  Referral
                                              </span>
                                          </div>
                                      </td>
                                      <td>22.67%</td>
                                      <td class="text-center">322</td>
                                      <td class="text-center">
                                          <span class="badge bg-success-transparent">622</span>
                                      </td>
                                      <td class="text-center">
                                          3.2
                                      </td>
                                      <td>
                                          0 hrs : 38 mins : 28 secs
                                      </td>
                                  </tr>
                                  <tr>
                                      <th scope="row" class="text-center">
                                          4
                                      </th>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-sm bg-info-transparent avatar-rounded">
                                                  <i class="ri-reactjs-line fs-15 fw-semibiold text-info"></i>
                                              </span>
                                              <span class="ms-2">
                                                  Social
                                              </span>
                                          </div>
                                      </td>
                                      <td>25.11%</td>
                                      <td class="text-center">389</td>
                                      <td class="text-center">
                                          <span class="badge bg-info-transparent">142</span>
                                      </td>
                                      <td class="text-center">
                                          1.4
                                      </td>
                                      <td>
                                          0 hrs : 12 mins : 89 secs
                                      </td>
                                  </tr>
                                  <tr>
                                      <th scope="row" class="text-center">
                                          5
                                      </th>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-sm bg-warning-transparent avatar-rounded">
                                                  <i class="ri-mail-line fs-15 fw-semibiold text-warning"></i>
                                              </span>
                                              <span class="ms-2">
                                                  Email
                                              </span>
                                          </div>
                                      </td>
                                      <td>23.79%</td>
                                      <td class="text-center">378</td>
                                      <td class="text-center">
                                          <span class="badge bg-warning-transparent">178</span>
                                      </td>
                                      <td class="text-center">
                                          1.6
                                      </td>
                                      <td>
                                          0 hrs : 14 mins : 27 secs
                                      </td>
                                  </tr>
                                  <tr>
                                      <th scope="row" class="text-center border-bottom-0">
                                          6
                                      </th>
                                      <td class="border-bottom-0">
                                          <div class="d-flex align-items-center">
                                              <span class="avatar avatar-sm bg-danger-transparent avatar-rounded">
                                                  <i class="ri-bank-card-line fs-15 fw-semibiold text-danger"></i>
                                              </span>
                                              <span class="ms-2">
                                                  Paid Search
                                              </span>
                                          </div>
                                      </td>
                                      <td class="border-bottom-0">28.77%</td>
                                      <td class="text-center border-bottom-0">488</td>
                                      <td class="text-center border-bottom-0">
                                          <span class="badge bg-danger-transparent">578</span>
                                      </td>
                                      <td class="text-center border-bottom-0">
                                          2.5
                                      </td>
                                      <td class="border-bottom-0">
                                          0 hrs : 16 mins : 28 secs
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xl-4">
              <div class="card custom-card overflow-hidden">
                  <div class="card-header">
                      <div class="card-title">
                          Top Pages
                      </div>
                  </div>
                  <div class="card-body p-0">
                      <div class="table-responsive">
                          <table class="table text-nowrap">
                              <thead>
                                  <tr>
                                      <th>Website</th>
                                      <th>Visits</th>
                                      <th class="text-end">Visit Change(%)</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td><a href="javascript:void(0);" class="d-inline-flex align-items-center"><i class="fe fe-globe me-2 fs-5 align-middle text-primary"></i>www.pinnacleweb.com/home</a></td>
                                      <td>1500</td>
                                      <td class="text-end"><span class="tx-12 font-weight-semibold d-inline-flex align-items-center text-success"><i class="fe fe-arrow-up-right me-1"></i>+5.37%</span></td>
                                  </tr>
                                  <tr>
                                      <td><a href="javascript:void(0);" class="d-inline-flex align-items-center"><i class="fe fe-slack me-2 fs-5 align-middle text-secondary"></i>www.orbitosite.com/about</a></td>
                                      <td>1200</td>
                                      <td class="text-end"><span class="tx-12 font-weight-semibold d-inline-flex align-items-center text-danger"><i class="fe fe-arrow-down-right me-1"></i>-2.08%</span></td>
                                  </tr>
                                  <tr>
                                      <td><a href="javascript:void(0);" class="d-inline-flex align-items-center"><i class="fe fe-zap me-2 fs-5 align-middle text-success"></i>www.apexpages.com/contact</a></td>
                                      <td>1000</td>
                                      <td class="text-end"><span class="tx-12 font-weight-semibold d-inline-flex align-items-center text-success"><i class="fe fe-arrow-down-right me-1"></i>+10.00%</span></td>
                                  </tr>
                                  <tr>
                                      <td><a href="javascript:void(0);" class="d-inline-flex align-items-center"><i class="fe fe-codepen me-2 fs-5 align-middle text-info"></i>www.novawebsolutions.com/products</a></td>
                                      <td>900</td>
                                      <td class="text-end"><span class="tx-12 font-weight-semibold d-inline-flex align-items-center text-success"><i class="fe fe-arrow-up-right me-1"></i>+2.27%</span></td>
                                  </tr>
                                  <tr>
                                      <td><a href="javascript:void(0);" class="d-inline-flex align-items-center"><i class="fe fe-globe me-2 fs-5 align-middle text-warning"></i>www.infinityservices.com/services</a></td>
                                      <td>850</td>
                                      <td class="text-end"><span class="tx-12 font-weight-semibold d-inline-flex align-items-center text-danger"><i class="fe fe-arrow-down-right me-1"></i>-3.41%</span></td>
                                  </tr>
                                  <tr>
                                      <td><a href="javascript:void(0);" class="d-inline-flex align-items-center"><i class="fe fe-codepen me-2 fs-5 align-middle text-danger"></i>www.echoblogworld.com/blog</a></td>
                                      <td>800</td>
                                      <td class="text-end"><span class="tx-12 font-weight-semibold d-inline-flex align-items-center text-success"><i class="fe fe-arrow-up-right me-1"></i>+7.53%</span></td>
                                  </tr>
                                  <tr>
                                      <td class="border-bottom-0"><a href="javascript:void(0);" class="d-inline-flex align-items-center"><i class="fe fe-slack me-2 fs-5 align-middle text-teal"></i>www.questforanswers.com/faq</a></td>
                                      <td class="border-bottom-0">700</td>
                                      <td class="text-end border-bottom-0"><span class="tx-12 font-weight-semibold d-inline-flex align-items-center text-danger"><i class="fe fe-arrow-down-right me-1"></i>-0.50%</span></td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: row-3 -->

    </div>
  </div>
  <!-- End::app-content -->
  
@endsection