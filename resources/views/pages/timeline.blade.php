@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Page Header -->
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Timeline</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Timeline</li>
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

          <!-- Start:: row-1 -->
          <div class="row">
          <div class="col-xl-12">
              <div class="card custom-card">
                  <div class="card-header">
                    <div class="card-title">
                      Timeline 1
                    </div>
                  </div>
                  <div class="card-body">
                  <ul class="notification">
                      <li>
                          <div class="notification-time">
                              <span class="date">Friday</span>
                              <span class="time">02:31</span>
                          </div>
                          <div class="notification-icon">
                              <span class="avatar avatar-lg p-1 border border-primary border-opacity-25 rounded-pill">
                                  <span class="avatar avatar-md avatar-rounded bg-primary-transparent svg-primary">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M81.77,55c5.35-6.66,6.67-11.16,6.12-13.14-.42-1.49-2.41-2.26-2.43-2.26A8,8,0,0,1,88,24a8.11,8.11,0,0,1,2.38.36c1,.31,9.91,3.33,12.79,12.76,2.46,8.07-.55,17.45-8.94,27.89-5.35,6.66-6.67,11.16-6.12,13.14.42,1.49,2.37,2.24,2.39,2.25A8,8,0,0,1,88,96a8.11,8.11,0,0,1-2.38-.36c-1-.31-9.91-3.33-12.79-12.76C70.37,74.81,73.38,65.43,81.77,55Zm31.06,27.89c2.88,9.43,11.79,12.45,12.79,12.76A8.11,8.11,0,0,0,128,96a8,8,0,0,0,2.5-15.6s-2-.76-2.39-2.25c-.55-2,.77-6.48,6.12-13.14,8.39-10.44,11.4-19.82,8.94-27.89-2.88-9.43-11.78-12.45-12.79-12.76A8.11,8.11,0,0,0,128,24a8,8,0,0,0-2.54,15.59s2,.77,2.43,2.26c.55,2-.77,6.48-6.12,13.14C113.38,65.43,110.37,74.81,112.83,82.88Zm40,0c2.88,9.43,11.79,12.45,12.79,12.76A8.11,8.11,0,0,0,168,96a8,8,0,0,0,2.5-15.6s-2-.76-2.39-2.25c-.55-2,.77-6.48,6.12-13.14,8.39-10.44,11.4-19.82,8.94-27.89-2.88-9.43-11.78-12.45-12.79-12.76A8.11,8.11,0,0,0,168,24a8,8,0,0,0-2.54,15.59s2,.77,2.43,2.26c.55,2-.77,6.48-6.12,13.14C153.38,65.43,150.37,74.81,152.83,82.88ZM224,112H32a8,8,0,0,0-8,8,104.35,104.35,0,0,0,56,92.28V216a16,16,0,0,0,16,16h64a16,16,0,0,0,16-16v-3.72A104.35,104.35,0,0,0,232,120,8,8,0,0,0,224,112Z"></path></svg>
                                    </span>
                              </span>
                          </div>
                          <div class="notification-body">
                              <div class="d-flex align-items-start gap-3 flex-wrap p-3 rounded bg-light">
                                  <div>
                                      <span class="avatar avatar-lg online">
                                          <img src="{{ asset('') }}/assets/images/faces/1.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="flex-fill w-50">
                                      <h5 class="mb-1 fs-15 fw-medium text-dark">Event: Launch Party</h5>
                                      <p class="mb-0 text-muted">Join us for a night of celebration as we unveil our latest product/service. There will be music, food, and exciting surprises!</p>
                                  </div>
                                  <div>
                                      <span class="badge bg-primary">
                                          April 15, 2024
                                      </span>
                                  </div>
                              </div>
                          </div>
                        </li>
                        <li>
                          <div class="notification-time">
                              <span class="date">Monday</span>
                              <span class="time">08:47</span>
                          </div>
                          <div class="notification-icon">
                              <span class="avatar avatar-lg p-1 border border-secondary border-opacity-25 rounded-pill">
                                  <span class="avatar avatar-md avatar-rounded bg-secondary-transparent svg-secondary">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M248,208H232V96a8,8,0,0,0,0-16H184V48a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16V208H24a8,8,0,0,0,0,16H248a8,8,0,0,0,0-16ZM80,72H96a8,8,0,0,1,0,16H80a8,8,0,0,1,0-16Zm-8,48a8,8,0,0,1,8-8H96a8,8,0,0,1,0,16H80A8,8,0,0,1,72,120Zm64,88H88V160h48Zm8-80H128a8,8,0,0,1,0-16h16a8,8,0,0,1,0,16Zm0-40H128a8,8,0,0,1,0-16h16a8,8,0,0,1,0,16Zm72,120H184V96h32Z"></path></svg>
                                    </span>
                              </span>
                          </div>
                          <div class="notification-body">
                              <div class="d-flex align-items-start gap-3 flex-wrap p-3 rounded bg-light">
                                  <div>
                                      <span class="avatar avatar-lg online">
                                          <img src="{{ asset('') }}/assets/images/faces/15.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="flex-fill w-50">
                                      <h5 class="mb-1 fs-15 fw-medium text-dark">Milestone: Company Establishment</h5>
                                      <p class="mb-0 fs-13  text-muted">Our journey began on this day when we officially established [Your Company Name]. Cheers to the years of growth and success!</p>
                                  </div>
                                  <div>
                                      <span class="badge bg-secondary">
                                          January 1, 2020
                                      </span>
                                  </div>
                              </div>
                          </div>
                        </li>
                        <li>
                          <div class="notification-time">
                              <span class="date">Yesterday</span>
                              <span class="time">18:43</span>
                          </div>
                          <div class="notification-icon">
                              <span class="avatar avatar-lg p-1 border border-success border-opacity-25 rounded-pill">
                                  <span class="avatar avatar-md avatar-rounded bg-success-transparent svg-success">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M64.12,147.8a4,4,0,0,1-4,4.2H16a8,8,0,0,1-7.8-6.17,8.35,8.35,0,0,1,1.62-6.93A67.79,67.79,0,0,1,37,117.51a40,40,0,1,1,66.46-35.8,3.94,3.94,0,0,1-2.27,4.18A64.08,64.08,0,0,0,64,144C64,145.28,64,146.54,64.12,147.8Zm182-8.91A67.76,67.76,0,0,0,219,117.51a40,40,0,1,0-66.46-35.8,3.94,3.94,0,0,0,2.27,4.18A64.08,64.08,0,0,1,192,144c0,1.28,0,2.54-.12,3.8a4,4,0,0,0,4,4.2H240a8,8,0,0,0,7.8-6.17A8.33,8.33,0,0,0,246.17,138.89Zm-89,43.18a48,48,0,1,0-58.37,0A72.13,72.13,0,0,0,65.07,212,8,8,0,0,0,72,224H184a8,8,0,0,0,6.93-12A72.15,72.15,0,0,0,157.19,182.07Z"></path></svg>
                                    </span>
                              </span>
                          </div>
                          <div class="notification-body">
                              <div class="d-flex align-items-start gap-3 flex-wrap p-3 rounded bg-light">
                                  <div>
                                      <span class="avatar avatar-lg online">
                                          <img src="{{ asset('') }}/assets/images/faces/2.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="flex-fill w-50">
                                      <h5 class="mb-1 fs-15 fw-medium text-dark">Achievement: 10,000 Followers</h5>
                                      <p class="mb-0 fs-13  text-muted">We've hit a milestone! Thanks to each and every one of our followers for being part of our community. Here's to the next 10,000!</p>
                                  </div>
                                  <div>
                                      <span class="badge bg-success">
                                          June 1, 2022
                                      </span>
                                  </div>
                              </div>
                          </div>
                        </li>
                      <li>
                          <div class="notification-time">
                            <span class="date">Today</span>
                            <span class="time">03:18</span>
                          </div>
                          <div class="notification-icon">
                          <span class="avatar avatar-lg p-1 border border-info border-opacity-25 rounded-pill">
                              <span class="avatar avatar-md avatar-rounded bg-info-transparent svg-info">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M111.49,52.63a15.8,15.8,0,0,0-26,5.77L33,202.78A15.83,15.83,0,0,0,47.76,224a16,16,0,0,0,5.46-1l144.37-52.5a15.8,15.8,0,0,0,5.78-26ZM65.14,161.13l19.2-52.79,63.32,63.32-52.8,19.2ZM160,72a37.8,37.8,0,0,1,3.84-15.58C169.14,45.83,179.14,40,192,40c6.7,0,11-2.29,13.65-7.21A22,22,0,0,0,208,23.94,8,8,0,0,1,224,24c0,12.86-8.52,32-32,32-6.7,0-11,2.29-13.65,7.21A22,22,0,0,0,176,72.06,8,8,0,0,1,160,72ZM136,40V16a8,8,0,0,1,16,0V40a8,8,0,0,1-16,0Zm101.66,82.34a8,8,0,1,1-11.32,11.31l-16-16a8,8,0,0,1,11.32-11.32Zm4.87-42.75-24,8a8,8,0,0,1-5.06-15.18l24-8a8,8,0,0,1,5.06,15.18Z"></path></svg>
                                </span>
                          </span>
                          </div>
                          <div class="notification-body">
                              <div class="d-flex align-items-start gap-3 flex-wrap p-3 rounded bg-light">
                                  <div>
                                      <span class="avatar avatar-lg online">
                                          <img src="{{ asset('') }}/assets/images/faces/8.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="flex-fill w-50">
                                      <h5 class="mb-1 fs-15 fw-medium text-dark">Product Launch: Innovation X</h5>
                                      <p class="mb-0 fs-13  text-muted">Introducing Innovation X, our latest creation that will revolutionize the way you [brief description of the product/service]. Get ready for a new era!</p>
                                  </div>
                                  <div>
                                      <span class="badge bg-info">
                                          September 10, 2024
                                      </span>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div class="notification-time">
                            <span class="date">Today</span>
                            <span class="time">04:11</span>
                          </div>
                          <div class="notification-icon">
                              <span class="avatar avatar-lg p-1 border border-pink border-opacity-25 rounded-pill">
                                  <span class="avatar avatar-md avatar-rounded bg-pink-transparent svg-pink">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,64V56a8,8,0,0,1,16,0v8a8,8,0,0,1-16,0Zm82.56,103.07a143.52,143.52,0,0,1-24.77,16.51,4,4,0,0,1-3.58,0,143.52,143.52,0,0,1-24.77-16.51C84.56,153,76,138.51,76,124a28,28,0,0,1,52-14.41A28,28,0,0,1,180,124C180,138.51,171.44,153,154.56,167.07ZM184,64a8,8,0,0,1-16,0V56a8,8,0,0,1,16,0Z"></path></svg>
                                    </span>
                              </span>
                          </div>
                          <div class="notification-body">
                              <div class="d-flex align-items-start gap-3 flex-wrap p-3 rounded bg-light">
                                  <div>
                                      <span class="avatar avatar-lg online">
                                          <img src="{{ asset('') }}/assets/images/faces/6.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="flex-fill w-50">
                                      <h5 class="mb-1 fs-15 fw-medium text-dark">Community Engagement: Charity Event</h5>
                                      <p class="mb-0 fs-13  text-muted">Proud to give back to the community! Our team organized a charity event to support [Charity Name]. Together, we can make a difference.</p>
                                  </div>
                                  <div>
                                      <span class="badge bg-pink">
                                          December 12, 2022
                                      </span>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div class="notification-time">
                              <span class="date">Today</span>
                              <span class="time">12:24</span>
                          </div>
                          <div class="notification-icon">
                              <span class="avatar avatar-lg p-1 border border-warning border-opacity-25 rounded-pill">
                                  <span class="avatar avatar-md avatar-rounded bg-warning-transparent svg-warning">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M164.47,195.63a8,8,0,0,1-6.7,12.37H10.23a8,8,0,0,1-6.7-12.37,95.83,95.83,0,0,1,47.22-37.71,60,60,0,1,1,66.5,0A95.83,95.83,0,0,1,164.47,195.63Zm87.91-.15a95.87,95.87,0,0,0-47.13-37.56A60,60,0,0,0,144.7,54.59a4,4,0,0,0-1.33,6A75.83,75.83,0,0,1,147,150.53a4,4,0,0,0,1.07,5.53,112.32,112.32,0,0,1,29.85,30.83,23.92,23.92,0,0,1,3.65,16.47,4,4,0,0,0,3.95,4.64h60.3a8,8,0,0,0,7.73-5.93A8.22,8.22,0,0,0,252.38,195.48Z"></path></svg>
                                    </span>
                              </span>
                          </div>
                          <div class="notification-body">
                              <div class="d-flex align-items-start gap-3 flex-wrap p-3 rounded bg-light">
                                  <div>
                                      <span class="avatar avatar-lg online">
                                          <img src="{{ asset('') }}/assets/images/faces/13.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="flex-fill w-50">
                                      <h5 class="mb-1 fs-15 fw-medium text-dark">Team Building Retreat</h5>
                                      <p class="mb-0 fs-13  text-muted">Our team took a break to recharge and bond. We came back stronger and more motivated than ever to bring you top-notch products/services!</p>
                                  </div>
                                  <div>
                                      <span class="badge bg-warning">
                                          November 5-7, 2021
                                      </span>
                                  </div>
                              </div>
                          </div>
                        </li>
                        <li>
                          <div class="notification-time">
                              <span class="date">today</span>
                              <span class="time">02:52</span>
                          </div>
                          <div class="notification-icon">
                              <span class="avatar avatar-lg p-1 border border-danger border-opacity-25 rounded-pill">
                                  <span class="avatar avatar-md avatar-rounded bg-danger-transparent svg-danger">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M232,64V48a16,16,0,0,0-16-16H40A16,16,0,0,0,24,48V64A16,16,0,0,0,40,80v96H32a8,8,0,0,0,0,16h88v17.38a24,24,0,1,0,16,0V192h88a8,8,0,0,0,0-16h-8V80A16,16,0,0,0,232,64ZM104,144a8,8,0,0,1-16,0V128a8,8,0,0,1,16,0Zm24,96a8,8,0,1,1,8-8A8,8,0,0,1,128,240Zm8-96a8,8,0,0,1-16,0V120a8,8,0,0,1,16,0Zm32,0a8,8,0,0,1-16,0V112a8,8,0,0,1,16,0ZM40,64V48H216V64H40Z"></path></svg>
                                    </span>
                              </span>
                          </div>
                          <div class="notification-body">
                              <div class="d-flex align-items-start gap-3 flex-wrap p-3 rounded bg-light">
                                  <div>
                                      <span class="avatar avatar-lg online">
                                          <img src="{{ asset('') }}/assets/images/faces/11.jpg" alt="">
                                      </span>
                                  </div>
                                  <div class="flex-fill w-50">
                                      <h5 class="mb-1 fs-15 fw-medium text-dark">Industry Conference: Blue Ribbon Conference</h5>
                                      <p class="mb-0 fs-13  text-muted">Our team attended Blue Ribbon Conference, gaining valuable insights and networking with industry leaders. Exciting times ahead!</p>
                                  </div>
                                  <div>
                                      <span class="badge bg-danger">
                                          March 5-8, 2022
                                      </span>
                                  </div>
                              </div>
                          </div>
                        </li>
                    </ul>
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: row-1 -->

        <!-- Start:: row-2 -->
      <div class="row">
          <div class="col-xl-12">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">TIMELINE 2</div>
                  </div>
                  <div class="card-body">
                      <div class="timeline-steps">
                          <div class="timeline-step">
                              <div class="timeline-content" data-toggle="popover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2003">
                                  <div class="inner-circle primary"><span>1</span></div>
                                  <div class="card custom-card mb-0 border border-opacity-25 border-primary content-top p-2">
                                      <div class="card-body bg-primary-transparent">
                                          <span class="avatar avatar-md p-1 bg-white avatar-rounded">
                                              <img src="{{ asset('') }}/assets/images/faces/11.jpg" alt="">
                                          </span>
                                          <p class="fw-medium mt-1 mb-1"> October 6, 2024</p>
                                          <p class="mb-1 fw-semibold text-default">Planning: <span class="text-muted fw-normal mb-0 mb-lg-0">Research and competitor analysis.</span>  </p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="timeline-step">
                              <div class="timeline-content" data-toggle="popover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2004">
                                  <div class="inner-circle secondary"><span>2</span></div>
                                  <div class="card custom-card mb-0 border border-opacity-25 border-secondary content-top p-2">
                                      <div class="card-body bg-secondary-transparent">
                                          <span class="avatar avatar-md p-1 bg-white avatar-rounded">
                                              <img src="{{ asset('') }}/assets/images/faces/1.jpg" alt="">
                                          </span>
                                          <p class="fw-medium mt-1 mb-1">September 12, 2024</p>
                                          <p class="mb-1 fw-semibold text-default">Design: <span class="text-muted fw-normal mb-0 mb-lg-0">Frontend and backend components.</span> </p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="timeline-step">
                              <div class="timeline-content" data-toggle="popover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2005">
                                  <div class="inner-circle success"><span>3</span></div>
                                  <div class="card custom-card mb-0 border border-opacity-25 border-success content-top p-2">
                                      <div class="card-body bg-success-transparent">
                                          <span class="avatar avatar-md avatar-rounded p-1 bg-white">
                                              <img src="{{ asset('') }}/assets/images/faces/12.jpg" alt="">
                                          </span>
                                          <p class="fw-medium mt-1 mb-1">July 20, 2024</p>
                                          <p class="mb-1 fw-semibold text-default">Testing: <span class="text-muted fw-normal mb-0 mb-lg-0">Conducted comprehensive testing.</span></p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="timeline-step">
                              <div class="timeline-content" data-toggle="popover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2010">
                                  <div class="inner-circle info"><span>4</span></div>
                                  <div class="card custom-card mb-0 border border-opacity-25 border-info content-top p-2">
                                      <div class="card-body bg-info-transparent">
                                          <span class="avatar avatar-md avatar-rounded p-1 bg-white">
                                              <img src="{{ asset('') }}/assets/images/faces/3.jpg" alt="">
                                          </span>
                                          <p class="fw-medium mt-1 mb-1">May 18, 2024</p>
                                          <p class="mb-1 fw-semibold text-default">Deployment: <span class="text-muted fw-normal mb-0 mb-lg-0">Conducted final checks.</span></p> 
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="timeline-step mb-0">
                              <div class="timeline-content" data-toggle="popover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2020">
                                  <div class="inner-circle warning"><span>5</span></div>
                                  <div class="card custom-card mb-0 border border-opacity-25 border-warning p-2">
                                      <div class="card-body bg-warning-transparent">
                                          <span class="avatar avatar-md p-1 bg-white avatar-rounded">
                                              <img src="{{ asset('') }}/assets/images/faces/14.jpg" alt="">
                                          </span>
                                          <p class="fw-medium mt-1 mb-1"> April 5, 2024</p>
                                          <p class="mb-1 fw-semibold text-default">Post-Launch: <span class="text-muted fw-normal mb-0 mb-lg-0">Provided ongoing support.</span></p>
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
      
      <!-- Start:: row-3 -->
      <div class="row mb-5">
          <div class="col-xl-12">
              <div class="card custom-card">
                  <div class="card-header">
                    <div class="card-title">
                        Timeline 3
                    </div>
                  </div>
                  <div class="card-body">
                      <div class="timeline">
                          <div class="container">
                              <div class="row">
                                  <div class="col-lg-12">
                                      <div class="timeline-container">
                                          <div class="timeline-end">
                                              <span class="avatar avatar-lg avatar-rounded bg-primary-transparent backdrop-blur d-inline-flex align-items-center"> <span class="avatar avatar-md bg-primary svg-white avatar-rounded  d-inline-flex align-items-center"> <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M176,120c0,32-48,56-48,56s-48-24-48-56a24,24,0,0,1,48,0,24,24,0,0,1,48,0Z" opacity="0.2"></path><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm0,176H48V48H72v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V208ZM152,88a31.91,31.91,0,0,0-24,10.86A32,32,0,0,0,72,120c0,36.52,50.28,62.08,52.42,63.16a8,8,0,0,0,7.16,0C133.72,182.08,184,156.52,184,120A32,32,0,0,0,152,88Zm-24,78.93c-13.79-7.79-40-26.75-40-46.93a16,16,0,0,1,32,0,8,8,0,0,0,16,0,16,16,0,0,1,32,0C168,140.19,141.79,159.15,128,166.93Z"></path></svg> </span> </span>
                                          </div>
                                          <div class="timeline-continue">
                                              <div class="row timeline-right">
                                                  <div class="col-md-6">
                                                      <p class="timeline-date">
                                                        Step 1
                                                      </p>
                                                      <span class="timeline-time fs-12 text-muted fw-medium d-block">
                                                          12:37PM
                                                      </span>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <div class="timeline-box">
                                                          <div class="datebox">
                                                                2024-03-10
                                                          </div>
                                                          <div class="dropdown float-end">
                                                              <a aria-label="anchor" href="javascript:void(0);" class="p-2 fs-16 text-muted" data-bs-toggle="dropdown">
                                                                  <i class="fe fe-more-vertical"></i>
                                                              </a>
                                                              <ul class="dropdown-menu">
                                                                  <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                                  <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                                  <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                              </ul>
                                                          </div>
                                                          <div class="d-flex align-items-center gap-2 mb-2 mt-4"> 
                                                              <span class="avatar avatar-xs avatar-rounded"><img src="{{ asset('') }}/assets/images/faces/1.jpg" alt="img"></span>
                                                              <span class="fw-semibold fs-13">Wide Warner</span>
                                                          </div>
                                                          <p class="fw-medium fs-14 mb-1">Melissa Blue liked your post travel excites.</p>
                                                          <span class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, repellendus rem rerum excepturi aperiam ipsam.</span>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="row timeline-left">
                                                  <div class="col-md-6">
                                                      <div class="timeline-box ms-md-auto">
                                                          <div class="datebox">
                                                              2024-10-05
                                                        </div>
                                                        <div class="dropdown float-md-start float-end">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="p-2 fs-16 text-muted" data-bs-toggle="dropdown">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-flex align-items-center  justify-content-md-end gap-2 mb-2 mt-4"> 
                                                            <span class="avatar avatar-xs avatar-rounded"><img src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img"></span>
                                                            <span class="fw-semibold fs-13">Alicia Mike</span>
                                                        </div>
                                                        <p class="mb-1">
                                                          <b>You</b> Commented on <b>Peter Engola</b> post <a class="text-secondary" href="javascript:void(0);"><u>#Mother Nature</u></a>.
                                                      </p>
                                                        <span class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, repellendus rem rerum excepturi aperiam ipsam.</span>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <p class="timeline-date">
                                                          Step 2
                                                      </p>
                                                      <span class="timeline-time fs-12 text-muted fw-medium d-block text-start">
                                                          10:15AM
                                                      </span>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col-12">
                                                      <div class="timeline-year">
                                                          <span class="avatar avatar-lg avatar-rounded bg-secondary-transparent backdrop-blur d-inline-flex align-items-center"> <span class="avatar avatar-md bg-secondary svg-white avatar-rounded  d-inline-flex align-items-center"> <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M216,83.31V208a8,8,0,0,1-8,8H176V152a8,8,0,0,0-8-8H88a8,8,0,0,0-8,8v64H48a8,8,0,0,1-8-8V48a8,8,0,0,1,8-8H172.69a8,8,0,0,1,5.65,2.34l35.32,35.32A8,8,0,0,1,216,83.31Z" opacity="0.2"></path><path d="M219.31,72,184,36.69A15.86,15.86,0,0,0,172.69,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V83.31A15.86,15.86,0,0,0,219.31,72ZM168,208H88V152h80Zm40,0H184V152a16,16,0,0,0-16-16H88a16,16,0,0,0-16,16v56H48V48H172.69L208,83.31ZM160,72a8,8,0,0,1-8,8H96a8,8,0,0,1,0-16h56A8,8,0,0,1,160,72Z"></path></svg> </span> </span>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="row timeline-right">
                                                  <div class="col-md-6">
                                                      <p class="timeline-date">
                                                          Step 3
                                                      </p>
                                                      <span class="timeline-time fs-12 text-muted fw-medium d-block">
                                                          17:25PM
                                                      </span>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <div class="timeline-box">
                                                          <div class="datebox">
                                                                2024-09-21
                                                          </div>
                                                          <div class="dropdown float-end">
                                                              <a aria-label="anchor" href="javascript:void(0);" class="p-2 fs-16 text-muted" data-bs-toggle="dropdown">
                                                                  <i class="fe fe-more-vertical"></i>
                                                              </a>
                                                              <ul class="dropdown-menu">
                                                                  <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                                  <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                                  <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                              </ul>
                                                          </div>
                                                          <div class="d-flex align-items-center gap-2 mb-2 mt-4"> 
                                                              <span class="avatar avatar-xs avatar-rounded"><img src="{{ asset('') }}/assets/images/faces/3.jpg" alt="img"></span>
                                                              <span class="fw-semibold fs-13">Mukesh Karna</span>
                                                          </div>
                                                          <p class="text-muted mb-2">
                                                              <span class="text-default"><b>Alicia Keys</b> shared a document with <b>you</b></span>.
                                                          </p>
                                                          <span class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ipsam.</span>
                                                          <p class="profile-activity-media mb-0">
                                                              <a href="javascript:void(0);">
                                                                  <img src="{{ asset('') }}/assets/images/media/file-manager/3.png" alt="">
                                                              </a>  
                                                              <span class="fs-11 text-muted">432.87KB</span>
                                                          </p>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="row timeline-left">
                                                  <div class="col-md-6">
                                                      <div class="timeline-box ms-md-auto">
                                                          <div class="datebox">
                                                              2024-02-05
                                                        </div>
                                                        <div class="dropdown float-md-start float-end">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="p-2 fs-16 text-muted" data-bs-toggle="dropdown">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-md-end gap-2 mb-2 mt-4"> 
                                                            <span class="avatar avatar-xs avatar-rounded"><img src="{{ asset('') }}/assets/images/faces/6.jpg" alt="img"></span>
                                                            <span class="fw-semibold fs-13">Dwayne Bero</span>
                                                        </div>
                                                        <p class="mb-1">
                                                          Admin and other team accepted your work request
                                                      </p>
                                                        <span class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, repellendus rem rerum excepturi aperiam ipsam.</span>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <p class="timeline-date">
                                                        Step 4
                                                      </p>
                                                      <span class="timeline-time fs-12 text-muted fw-medium d-block text-start">
                                                          11:55AM
                                                      </span>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col-12">
                                                      <div class="timeline-year">
                                                          <span class="avatar avatar-lg avatar-rounded bg-success-transparent backdrop-blur d-inline-flex align-items-center"> <span class="avatar avatar-md bg-success svg-white avatar-rounded  d-inline-flex align-items-center"> <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M224,56v82.06l-23.72-23.72a8,8,0,0,0-11.31,0L163.31,140,113.66,90.34a8,8,0,0,0-11.32,0L64,128.69V56a8,8,0,0,1,8-8H216A8,8,0,0,1,224,56Z" opacity="0.2"></path><path d="M216,40H72A16,16,0,0,0,56,56V72H40A16,16,0,0,0,24,88V200a16,16,0,0,0,16,16H184a16,16,0,0,0,16-16V184h16a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40ZM72,56H216v62.75l-10.07-10.06a16,16,0,0,0-22.63,0l-20,20-44-44a16,16,0,0,0-22.62,0L72,109.37ZM184,200H40V88H56v80a16,16,0,0,0,16,16H184Zm32-32H72V132l36-36,49.66,49.66a8,8,0,0,0,11.31,0L194.63,120,216,141.38V168ZM160,84a12,12,0,1,1,12,12A12,12,0,0,1,160,84Z"></path></svg> </span> </span>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="row timeline-right">
                                                  <div class="col-md-6">
                                                      <p class="timeline-date">
                                                        Step 5
                                                      </p>
                                                      <span class="timeline-time fs-12 text-muted fw-medium d-block">
                                                          07:45AM
                                                      </span>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <div class="timeline-box">
                                                          <div class="datebox">
                                                              2024-11-12
                                                        </div>
                                                        <div class="dropdown float-end">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="p-2 fs-16 text-muted" data-bs-toggle="dropdown">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-flex align-items-center gap-2 mb-2 mt-4"> 
                                                          <span class="avatar avatar-xs avatar-rounded"><img src="{{ asset('') }}/assets/images/faces/7.jpg" alt="img"></span>
                                                          <span class="fw-semibold fs-13">Alister Chuk</span>
                                                      </div>
                                                          <p class="text-muted mb-1">
                                                              <span class="text-default"><b>Melissa Blue</b> liked your post <b>travel excites</b></span>.
                                                          </p>
                                                          <p class="text-muted">you are already feeling the tense atmosphere of the video playing in the background</p>
                                                          <p class="profile-activity-media mb-0">
                                                              <a href="javascript:void(0);">
                                                                  <img src="{{ asset('') }}/assets/images/media/media-59.jpg" class="m-1" alt="">
                                                              </a>  
                                                              <a href="javascript:void(0);">
                                                                  <img src="{{ asset('') }}/assets/images/media/media-60.jpg" class="m-1" alt="">
                                                              </a>  
                                                              <a href="javascript:void(0);">
                                                                  <img src="{{ asset('') }}/assets/images/media/media-61.jpg" class="m-1" alt="">
                                                              </a>  
                                                          </p>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="row timeline-left">
                                                  <div class="col-md-6">
                                                      <div class="timeline-box ms-md-auto">
                                                          <div class="datebox">
                                                              2024-04-15
                                                        </div>
                                                        <div class="dropdown float-md-start float-end">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="p-2 fs-16 text-muted" data-bs-toggle="dropdown">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-md-end gap-2 mb-2 mt-4"> 
                                                            <span class="avatar avatar-xs avatar-rounded"><img src="{{ asset('') }}/assets/images/faces/8.jpg" alt="img"></span>
                                                            <span class="fw-semibold fs-13">Monika Karan</span>
                                                        </div>
                                                        <p class="mb-1">
                                                          Social network accounts are at risk check your <span class="text-success">Login</span> Details
                                                      </p>
                                                        <span class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, repellendus rem rerum excepturi aperiam ipsam.</span>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <p class="timeline-date">
                                                      Step 6
                                                      </p>
                                                      <span class="timeline-time fs-12 text-muted fw-medium d-block text-start">
                                                          15:56PM
                                                      </span>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="timeline-start">
                                              <span class="avatar avatar-lg avatar-rounded bg-info-transparent backdrop-blur d-inline-flex align-items-center"> <span class="avatar avatar-md bg-info svg-white avatar-rounded  d-inline-flex align-items-center"> <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M224,128a96,96,0,1,1-96-96A96,96,0,0,1,224,128Z" opacity="0.2"></path><path d="M173.66,98.34a8,8,0,0,1,0,11.32l-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35A8,8,0,0,1,173.66,98.34ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z"></path></svg> </span> </span>
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
      <!-- End:: row-3 -->

  </div>
</div>
<!-- End::app-content -->

@endsection