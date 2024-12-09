@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Page Header -->
      <div
          class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Mail App</h1>
              <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item">
                      <a href="javascript:void(0);">
                          Pages
                      </a>
                  </li>
                  <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Email</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Mail App</li>
              </ol>
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

      <div class="main-mail-container mb-2 gap-2 d-flex">
          <div class="mail-navigation border">
              <div class="d-grid align-items-top p-3 border-bottom">
                  <button class="btn btn-primary d-flex align-items-center justify-content-center"
                      data-bs-toggle="modal" data-bs-target="#mail-Compose">
                      <i class="ri-add-circle-line fs-16 align-middle me-1"></i>Compose Mail
                  </button>
                  <div class="modal modal-lg fade" id="mail-Compose" tabindex="-1"
                      aria-labelledby="mail-ComposeLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h6 class="modal-title" id="mail-ComposeLabel">Compose Mail</h6>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal"
                                      aria-label="Close"></button>
                              </div>
                              <div class="modal-body px-4">
                                  <div class="row">
                                      <div class="col-xl-6 mb-2">
                                          <label for="fromMail" class="form-label">From<sup><i
                                                      class="ri-star-s-fill text-success fs-8"></i></sup></label>
                                          <input type="email" class="form-control" id="fromMail"
                                              value="jackmiller2345@gmail.com">
                                      </div>
                                      <div class="col-xl-6 mb-2">
                                          <label for="toMail" class="form-label">To<sup><i
                                                      class="ri-star-s-fill text-success fs-8"></i></sup></label>
                                          <select class="form-control" name="toMail" id="toMail" multiple>
                                              <option value="Choice 1" selected>jay@gmail.com</option>
                                              <option value="Choice 2">kia@gmail.com</option>
                                              <option value="Choice 3">don@gmail.com</option>
                                              <option value="Choice 4">kimo@gmail.com</option>
                                          </select>
                                      </div>
                                      <div class="col-xl-6 mb-2">
                                          <label for="mailCC"
                                              class="form-label text-dark fw-medium">Cc</label>
                                          <input type="email" class="form-control" id="mailCC">
                                      </div>
                                      <div class="col-xl-6 mb-2">
                                          <label for="mailBcc"
                                              class="form-label text-dark fw-medium">Bcc</label>
                                          <input type="email" class="form-control" id="mailBcc">
                                      </div>
                                      <div class="col-xl-12 mb-2">
                                          <label for="Subject" class="form-label">Subject</label>
                                          <input type="text" class="form-control" id="Subject"
                                              placeholder="Subject">
                                      </div>
                                      <div class="col-xl-12">
                                          <label class="col-form-label">Content :</label>
                                          <div class="mail-compose">
                                              <div id="mail-compose-editor"></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-light"
                                      data-bs-dismiss="modal">Cancel</button>
                                  <button type="button" class="btn btn-primary">Send</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div>
                  <ul class="list-unstyled mail-main-nav" id="mail-main-nav">
                      <li class="px-0 pt-0">
                          <span class="fs-11 text-muted op-7 fw-medium">MAILS</span>
                      </li>
                      <li class="active mail-type">
                          <a href="javascript:void(0);">
                              <div class="d-flex align-items-center">
                                  <span class="me-2 lh-1">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                          fill="#000000" viewBox="0 0 256 256">
                                          <path d="M224,56l-96,88L32,56Z" opacity="0.2"></path>
                                          <path
                                              d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-96,85.15L52.57,64H203.43ZM98.71,128,40,181.81V74.19Zm11.84,10.85,12,11.05a8,8,0,0,0,10.82,0l12-11.05,58,53.15H52.57ZM157.29,128,216,74.18V181.82Z">
                                          </path>
                                      </svg>
                                  </span>
                                  <span class="flex-fill text-nowrap">
                                      All Mails
                                  </span>
                                  <span class="badge bg-primary rounded-pill">6,446</span>
                              </div>
                          </a>
                      </li>
                      <li class="mail-type">
                          <a href="javascript:void(0);">
                              <div class="d-flex align-items-center">
                                  <span class="me-2 lh-1">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                          fill="#000000" viewBox="0 0 256 256">
                                          <path d="M216,72V208a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V72Z"
                                              opacity="0.2"></path>
                                          <path
                                              d="M223.16,68.42l-16-32A8,8,0,0,0,200,32H56a8,8,0,0,0-7.16,4.42l-16,32A8.08,8.08,0,0,0,32,72V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V72A8.08,8.08,0,0,0,223.16,68.42ZM60.94,48H195.06l8,16H52.94ZM208,208H48V80H208V208Zm-42.34-61.66a8,8,0,0,1,0,11.32l-32,32a8,8,0,0,1-11.32,0l-32-32a8,8,0,0,1,11.32-11.32L120,164.69V104a8,8,0,0,1,16,0v60.69l18.34-18.35A8,8,0,0,1,165.66,146.34Z">
                                          </path>
                                      </svg>
                                  </span>
                                  <span class="flex-fill text-nowrap">
                                      Inbox
                                  </span>
                                  <span class="badge bg-secondary rounded-pill">26</span>
                              </div>
                          </a>
                      </li>
                      <li class="mail-type">
                          <a href="javascript:void(0);">
                              <div class="d-flex align-items-center">
                                  <span class="me-2 lh-1">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                          fill="#000000" viewBox="0 0 256 256">
                                          <path
                                              d="M223.69,42.18l-58.22,192a8,8,0,0,1-14.92,1.25L108,148,20.58,105.45a8,8,0,0,1,1.25-14.92l192-58.22A8,8,0,0,1,223.69,42.18Z"
                                              opacity="0.2"></path>
                                          <path
                                              d="M227.32,28.68a16,16,0,0,0-15.66-4.08l-.15,0L19.57,82.84a16,16,0,0,0-2.49,29.8L102,154l41.3,84.87A15.86,15.86,0,0,0,157.74,248q.69,0,1.38-.06a15.88,15.88,0,0,0,14-11.51l58.2-191.94c0-.05,0-.1,0-.15A16,16,0,0,0,227.32,28.68ZM157.83,231.85l-.05.14,0-.07-40.06-82.3,48-48a8,8,0,0,0-11.31-11.31l-48,48L24.08,98.25l-.07,0,.14,0L216,40Z">
                                          </path>
                                      </svg>
                                  </span>
                                  <span class="flex-fill text-nowrap">
                                      Sent
                                  </span>
                              </div>
                          </a>
                      </li>
                      <li class="mail-type">
                          <a href="javascript:void(0);">
                              <div class="d-flex align-items-center">
                                  <span class="me-2 lh-1">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                          fill="#000000" viewBox="0 0 256 256">
                                          <path
                                              d="M216,83.31V208a8,8,0,0,1-8,8H176V152a8,8,0,0,0-8-8H88a8,8,0,0,0-8,8v64H48a8,8,0,0,1-8-8V48a8,8,0,0,1,8-8H172.69a8,8,0,0,1,5.65,2.34l35.32,35.32A8,8,0,0,1,216,83.31Z"
                                              opacity="0.2"></path>
                                          <path
                                              d="M219.31,72,184,36.69A15.86,15.86,0,0,0,172.69,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V83.31A15.86,15.86,0,0,0,219.31,72ZM168,208H88V152h80Zm40,0H184V152a16,16,0,0,0-16-16H88a16,16,0,0,0-16,16v56H48V48H172.69L208,83.31ZM160,72a8,8,0,0,1-8,8H96a8,8,0,0,1,0-16h56A8,8,0,0,1,160,72Z">
                                          </path>
                                      </svg>
                                  </span>
                                  <span class="flex-fill text-nowrap">
                                      Drafts
                                  </span>
                              </div>
                          </a>
                      </li>
                      <li class="mail-type">
                          <a href="javascript:void(0);">
                              <div class="d-flex align-items-center">
                                  <span class="me-2 lh-1">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                          fill="#000000" viewBox="0 0 256 256">
                                          <path d="M224,128a96,96,0,1,1-96-96A96,96,0,0,1,224,128Z"
                                              opacity="0.2"></path>
                                          <path
                                              d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm-8-80V80a8,8,0,0,1,16,0v56a8,8,0,0,1-16,0Zm20,36a12,12,0,1,1-12-12A12,12,0,0,1,140,172Z">
                                          </path>
                                      </svg>
                                  </span>
                                  <span class="flex-fill text-nowrap">
                                      Spam
                                  </span>
                                  <span class="badge bg-success rounded-pill">6</span>
                              </div>
                          </a>
                      </li>
                      <li class="mail-type">
                          <a href="javascript:void(0);">
                              <div class="d-flex align-items-center">
                                  <span class="me-2 lh-1">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                          fill="#000000" viewBox="0 0 256 256">
                                          <path
                                              d="M168,72V224l-56-40L56,224V72a8,8,0,0,1,8-8h96A8,8,0,0,1,168,72Z"
                                              opacity="0.2"></path>
                                          <path
                                              d="M160,56H64A16,16,0,0,0,48,72V224a8,8,0,0,0,12.65,6.51L112,193.83l51.36,36.68A8,8,0,0,0,176,224V72A16,16,0,0,0,160,56Zm0,152.46-43.36-31a8,8,0,0,0-9.3,0L64,208.45V72h96ZM208,40V192a8,8,0,0,1-16,0V40H88a8,8,0,0,1,0-16H192A16,16,0,0,1,208,40Z">
                                          </path>
                                      </svg>
                                  </span>
                                  <span class="flex-fill text-nowrap">
                                      Important
                                  </span>
                              </div>
                          </a>
                      </li>
                      <li class="mail-type">
                          <a href="javascript:void(0);">
                              <div class="d-flex align-items-center">
                                  <span class="me-2 lh-1">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                          fill="#000000" viewBox="0 0 256 256">
                                          <path d="M200,56V208a8,8,0,0,1-8,8H64a8,8,0,0,1-8-8V56Z"
                                              opacity="0.2"></path>
                                          <path
                                              d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z">
                                          </path>
                                      </svg>
                                  </span>
                                  <span class="flex-fill text-nowrap">
                                      Trash
                                  </span>
                              </div>
                          </a>
                      </li>
                      <li class="mail-type">
                          <a href="javascript:void(0);">
                              <div class="d-flex align-items-center">
                                  <span class="me-2 lh-1">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                          fill="#000000" viewBox="0 0 256 256">
                                          <path d="M216,96v96a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V96Z"
                                              opacity="0.2"></path>
                                          <path
                                              d="M224,48H32A16,16,0,0,0,16,64V88a16,16,0,0,0,16,16v88a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V104a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48ZM208,192H48V104H208ZM224,88H32V64H224V88ZM96,136a8,8,0,0,1,8-8h48a8,8,0,0,1,0,16H104A8,8,0,0,1,96,136Z">
                                          </path>
                                      </svg>
                                  </span>
                                  <span class="flex-fill text-nowrap">
                                      Archive
                                  </span>
                              </div>
                          </a>
                      </li>
                      <li class="mail-type">
                          <a href="javascript:void(0);">
                              <div class="d-flex align-items-center">
                                  <span class="me-2 lh-1">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                          fill="#000000" viewBox="0 0 256 256">
                                          <path
                                              d="M229.06,108.79l-48.7,42,14.88,62.79a8.4,8.4,0,0,1-12.52,9.17L128,189.09,73.28,222.74a8.4,8.4,0,0,1-12.52-9.17l14.88-62.79-48.7-42A8.46,8.46,0,0,1,31.73,94L95.64,88.8l24.62-59.6a8.36,8.36,0,0,1,15.48,0l24.62,59.6L224.27,94A8.46,8.46,0,0,1,229.06,108.79Z"
                                              opacity="0.2"></path>
                                          <path
                                              d="M239.18,97.26A16.38,16.38,0,0,0,224.92,86l-59-4.76L143.14,26.15a16.36,16.36,0,0,0-30.27,0L90.11,81.23,31.08,86a16.46,16.46,0,0,0-9.37,28.86l45,38.83L53,211.75a16.38,16.38,0,0,0,24.5,17.82L128,198.49l50.53,31.08A16.4,16.4,0,0,0,203,211.75l-13.76-58.07,45-38.83A16.43,16.43,0,0,0,239.18,97.26Zm-15.34,5.47-48.7,42a8,8,0,0,0-2.56,7.91l14.88,62.8a.37.37,0,0,1-.17.48c-.18.14-.23.11-.38,0l-54.72-33.65a8,8,0,0,0-8.38,0L69.09,215.94c-.15.09-.19.12-.38,0a.37.37,0,0,1-.17-.48l14.88-62.8a8,8,0,0,0-2.56-7.91l-48.7-42c-.12-.1-.23-.19-.13-.5s.18-.27.33-.29l63.92-5.16A8,8,0,0,0,103,91.86l24.62-59.61c.08-.17.11-.25.35-.25s.27.08.35.25L153,91.86a8,8,0,0,0,6.75,4.92l63.92,5.16c.15,0,.24,0,.33.29S224,102.63,223.84,102.73Z">
                                          </path>
                                      </svg>
                                  </span>
                                  <span class="flex-fill text-nowrap">
                                      Starred
                                  </span>
                                  <span class="badge bg-info rounded-pill">16</span>
                              </div>
                          </a>
                      </li>
                      <li class="px-0">
                          <span class="fs-11 text-muted op-7 fw-medium">SETTINGS</span>
                      </li>
                      <li>
                          <a href="javascript:void(0);">
                              <div class="d-flex align-items-center">
                                  <span class="me-2 lh-1">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                          fill="#000000" viewBox="0 0 256 256">
                                          <path
                                              d="M230.1,108.76,198.25,90.62c-.64-1.16-1.31-2.29-2-3.41l-.12-36A104.61,104.61,0,0,0,162,32L130,49.89c-1.34,0-2.69,0-4,0L94,32A104.58,104.58,0,0,0,59.89,51.25l-.16,36c-.7,1.12-1.37,2.26-2,3.41l-31.84,18.1a99.15,99.15,0,0,0,0,38.46l31.85,18.14c.64,1.16,1.31,2.29,2,3.41l.12,36A104.61,104.61,0,0,0,94,224l32-17.87c1.34,0,2.69,0,4,0L162,224a104.58,104.58,0,0,0,34.08-19.25l.16-36c.7-1.12,1.37-2.26,2-3.41l31.84-18.1A99.15,99.15,0,0,0,230.1,108.76ZM128,168a40,40,0,1,1,40-40A40,40,0,0,1,128,168Z"
                                              opacity="0.2"></path>
                                          <path
                                              d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Zm109.94-52.79a8,8,0,0,0-3.89-5.4l-29.83-17-.12-33.62a8,8,0,0,0-2.83-6.08,111.91,111.91,0,0,0-36.72-20.67,8,8,0,0,0-6.46.59L128,41.85,97.88,25a8,8,0,0,0-6.47-.6A111.92,111.92,0,0,0,54.73,45.15a8,8,0,0,0-2.83,6.07l-.15,33.65-29.83,17a8,8,0,0,0-3.89,5.4,106.47,106.47,0,0,0,0,41.56,8,8,0,0,0,3.89,5.4l29.83,17,.12,33.63a8,8,0,0,0,2.83,6.08,111.91,111.91,0,0,0,36.72,20.67,8,8,0,0,0,6.46-.59L128,214.15,158.12,231a7.91,7.91,0,0,0,3.9,1,8.09,8.09,0,0,0,2.57-.42,112.1,112.1,0,0,0,36.68-20.73,8,8,0,0,0,2.83-6.07l.15-33.65,29.83-17a8,8,0,0,0,3.89-5.4A106.47,106.47,0,0,0,237.94,107.21Zm-15,34.91-28.57,16.25a8,8,0,0,0-3,3c-.58,1-1.19,2.06-1.81,3.06a7.94,7.94,0,0,0-1.22,4.21l-.15,32.25a95.89,95.89,0,0,1-25.37,14.3L134,199.13a8,8,0,0,0-3.91-1h-.19c-1.21,0-2.43,0-3.64,0a8.1,8.1,0,0,0-4.1,1l-28.84,16.1A96,96,0,0,1,67.88,201l-.11-32.2a8,8,0,0,0-1.22-4.22c-.62-1-1.23-2-1.8-3.06a8.09,8.09,0,0,0-3-3.06l-28.6-16.29a90.49,90.49,0,0,1,0-28.26L61.67,97.63a8,8,0,0,0,3-3c.58-1,1.19-2.06,1.81-3.06a7.94,7.94,0,0,0,1.22-4.21l.15-32.25a95.89,95.89,0,0,1,25.37-14.3L122,56.87a8,8,0,0,0,4.1,1c1.21,0,2.43,0,3.64,0a8,8,0,0,0,4.1-1l28.84-16.1A96,96,0,0,1,188.12,55l.11,32.2a8,8,0,0,0,1.22,4.22c.62,1,1.23,2,1.8,3.06a8.09,8.09,0,0,0,3,3.06l28.6,16.29A90.49,90.49,0,0,1,222.9,142.12Z">
                                          </path>
                                      </svg>
                                  </span>
                                  <span class="flex-fill text-nowrap">
                                      Settings
                                  </span>
                              </div>
                          </a>
                      </li>
                      <li class="px-0">
                          <span class="fs-11 text-muted op-7 fw-medium">LABELS</span>
                      </li>
                      <li>
                          <a href="javascript:void(0);">
                              <div class="d-flex align-items-center">
                                  <span class="me-2 lh-1">
                                      <i
                                          class="ri-circle-line fw-bold align-middle fs-10 fw-medium text-primary"></i>
                                  </span>
                                  <span class="flex-fill text-nowrap">
                                      Mail
                                  </span>
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="javascript:void(0);">
                              <div class="d-flex align-items-center">
                                  <span class="me-2 lh-1">
                                      <i
                                          class="ri-circle-line fw-bold align-middle fs-10 fw-medium text-secondary"></i>
                                  </span>
                                  <span class="flex-fill text-nowrap">
                                      Home
                                  </span>
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="javascript:void(0);">
                              <div class="d-flex align-items-center">
                                  <span class="me-2 lh-1">
                                      <i
                                          class="ri-circle-line fw-bold align-middle fs-10 fw-medium text-success"></i>
                                  </span>
                                  <span class="flex-fill text-nowrap">
                                      Work
                                  </span>
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="javascript:void(0);">
                              <div class="d-flex align-items-center">
                                  <span class="me-2 lh-1">
                                      <i
                                          class="ri-circle-line fw-bold align-middle fs-10 fw-medium text-info"></i>
                                  </span>
                                  <span class="flex-fill text-nowrap">
                                      Friends
                                  </span>
                              </div>
                          </a>
                      </li>
                      <li class="px-0">
                          <span class="fs-11 text-muted op-7 fw-medium">Up Coming Events</span>
                      </li>
                      <li class="p-0 mb-2">
                          <a href="javascript:void(0);">
                              <div class="d-flex align-items-center lh-1 p-2 border rounded">
                                  <div class="me-2">
                                      <span class="avatar avatar-md bg-primary-transparent">
                                          <i class="ri-group-line fs-14"></i>
                                      </span>
                                  </div>
                                  <div>
                                      <p class="text-default fw-medium mb-2 fs-14">Blockers For Interview</p>
                                      <p class="fs-13 text-muted mb-0">10:30AM-12:30PM</p>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li class="p-0 mb-2">
                          <a href="javascript:void(0);">
                              <div class="d-flex align-items-center lh-1 p-2 border rounded">
                                  <div class="me-2">
                                      <span class="avatar avatar-md bg-secondary-transparent">
                                          <i class="ri-calendar-schedule-line fs-14"></i>
                                      </span>
                                  </div>
                                  <div>
                                      <p class="text-default fw-medium mb-2 fs-14">Design Team Meeting</p>
                                      <p class="fs-13 text-muted mb-0">9:00AM-1:30PM</p>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li class="p-0">
                          <a href="javascript:void(0);">
                              <div class="d-flex align-items-center lh-1 p-2 border rounded">
                                  <div class="me-2">
                                      <span class="avatar avatar-md bg-success-transparent">
                                          <i class="ri-gift-2-line fs-14"></i>
                                      </span>
                                  </div>
                                  <div>
                                      <p class="text-default fw-medium mb-2 fs-14">Office Aniversiry Event</p>
                                      <p class="fs-13 text-muted mb-0">10:00AM-6:30PM</p>
                                  </div>
                              </div>
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
          <div class="total-mails border">
              <div class="p-3 border-bottom flex-wrap gap-2">
                  <div class="d-flex gap-2">
                      <div class="input-group">
                          <input type="text" class="form-control shadow-none w-full"
                              placeholder="Search Email" aria-describedby="button-addon">
                          <button class="btn btn-primary" type="button" id="button-addon"><i
                                  class="ri-search-line"></i></button>
                      </div>
                      <button class="btn btn-icon btn-light me-1 d-lg-none d-block total-mails-close">
                          <i class="ri-close-line"></i>
                      </button>
                      <div class="dropdown">
                          <button class="btn btn-icon btn-secondary btn-wave" type="button"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="ti ti-dots-vertical"></i>
                          </button>
                          <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="javascript:void(0);">Recent</a></li>
                              <li><a class="dropdown-item" href="javascript:void(0);">Unread</a></li>
                              <li><a class="dropdown-item" href="javascript:void(0);">Mark All Read</a></li>
                              <li><a class="dropdown-item" href="javascript:void(0);">Spam</a></li>
                              <li><a class="dropdown-item" href="javascript:void(0);">Delete All</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="px-3 py-2 d-flex align-items-center border-bottom flex-wrap gap-2">
                  <div class="me-3">
                      <input class="form-check-input check-all" type="checkbox" id="checkAll" value=""
                          aria-label="...">
                  </div>
                  <div class="flex-fill">
                      <h6 class="fw-medium mb-0">All Mails</h6>
                  </div>
                  <ul class="nav nav-pills nav-style-3 mb-0" role="tablist">
                      <li class="nav-item" role="presentation"> <a class="nav-link active rounded py-1"
                              data-bs-toggle="tab" role="tab" aria-current="page" href="#home-right"
                              aria-selected="true">Primary (122)</a> </li>
                      <li class="nav-item" role="presentation"> <a class="nav-link rounded py-1" data-bs-toggle="tab"
                                      role="tab" aria-current="page" href="#services-right" aria-selected="false"
                                      tabindex="-1">Social</a> </li>
                      <li class="nav-item" role="presentation"> <a class="nav-link rounded py-1" data-bs-toggle="tab"
                              role="tab" aria-current="page" href="#about-right" aria-selected="false"
                              tabindex="-1">Promotion</a> </li>
                  </ul>
              </div>
              <div class="mail-messages" id="mail-messages">
                  <ul class="list-unstyled mb-0 mail-messages-container">
                      <li>
                          <div class="d-flex align-items-top flex-wrap">
                              <div class="me-3 mt-1">
                                  <input class="form-check-input" type="checkbox" id="checkboxNoLabel1"
                                      value="" aria-label="...">
                              </div>
                              <div>
                                  <i class="ri-star-line fs-16 text-warning me-3"></i>
                              </div>
                              <div class="me-1 lh-1">
                                  <span class="avatar avatar-md me-2 avatar-rounded mail-msg-avatar">
                                      <img src="{{ asset('') }}/assets/images/faces/5.jpg" alt="">
                                  </span>
                              </div>
                              <div class="flex-fill">
                                  <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                      data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                      <p class="mb-0 fs-13 fw-medium">
                                          Amelia Turner <span
                                              class="float-end text-muted fw-normal fs-11">1:32PM</span>
                                      </p>
                                  </a>
                                  <div class="mail-msg mb-0">
                                      <div class="fs-13 text-muted text-wrap text-truncate mail-msg-content">
                                          Dear Team, kindly review the attached quarterly report before our
                                          meeting at 2 PM tomorrow. Your insights are appreciated.
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="active">
                          <div class="d-flex align-items-top flex-wrap">
                              <div class="me-3 mt-1">
                                  <input class="form-check-input" type="checkbox" id="checkboxNoLabel2"
                                      value="" aria-label="..." checked>
                              </div>
                              <div>
                                  <i class="ri-star-line fs-16 text-warning me-3"></i>
                              </div>
                              <div class="me-1 lh-1">
                                  <span class="avatar avatar-md me-2 avatar-rounded mail-msg-avatar">
                                      <img src="{{ asset('') }}/assets/images/faces/12.jpg" alt="">
                                  </span>
                              </div>
                              <div class="flex-fill">
                                  <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                      data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                      <p class="mb-0 fs-13 fw-medium">
                                          Liam Parker <span
                                              class="float-end text-muted fw-normal fs-11"><span
                                              class="me-2"><i
                                                  class="ri-attachment-2 align-middle fs-13"></i></span>10:27AM</span>
                                      </p>
                                  </a>
                                  <div class="mail-msg mb-0">
                                      <div class="fs-13 text-muted text-wrap text-truncate mail-msg-content">
                                          Good day, this is to confirm the successful submission of our
                                          proposal for the upcoming client presentation. Await further
                                          instructions.
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div class="d-flex align-items-top flex-wrap">
                              <div class="me-3 mt-1">
                                  <input class="form-check-input" type="checkbox" id="checkboxNoLabel3"
                                      value="" aria-label="...">
                              </div>
                              <div>
                                  <i class="ri-star-line fs-16 text-muted me-3"></i>
                              </div>
                              <div class="me-1 lh-1">
                                  <span
                                      class="avatar avatar-md me-2 avatar-rounded bg-primary mail-msg-avatar">
                                      OF
                                  </span>
                              </div>
                              <div class="flex-fill">
                                  <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                      data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                      <p class="mb-0 fs-13 fw-medium">
                                          Owen Foster <span
                                              class="float-end text-muted fw-normal fs-11">13 Nov,
                                              10:27AM</span>
                                      </p>
                                  </a>
                                  <div class="mail-msg mb-0">
                                      <div class="fs-13 text-muted text-wrap text-truncate mail-msg-content">
                                          Colleagues, I am requesting a brief meeting tomorrow to discuss a
                                          necessary adjustment to our project schedule. Your availability
                                          appreciated.
                                      </div>
                                  </div>
                                  <span class="badge bg-outline-primary"><i class="ri-inbox-line fs-11 me-1"></i>Work</span>
                                  <span class="badge bg-outline-secondary"><i class="ri-group-line fs-11 me-1"></i>Group</span>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div class="d-flex align-items-top flex-wrap">
                              <div class="me-3 mt-1">
                                  <input class="form-check-input" type="checkbox" id="checkboxNoLabel54"
                                      value="" aria-label="..." checked>
                              </div>
                              <div>
                                  <i class="ri-star-line fs-16 text-muted me-3"></i>
                              </div>
                              <div class="me-1 lh-1">
                                  <span class="avatar avatar-md me-2 avatar-rounded mail-msg-avatar">
                                      <img src="{{ asset('') }}/assets/images/faces/7.jpg" alt="">
                                  </span>
                              </div>
                              <div class="flex-fill">
                                  <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                      data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                      <p class="mb-0 fs-13 fw-medium">
                                          Isabella Carter <span
                                              class="float-end text-muted fw-normal fs-11"><span
                                              class="me-2"><i
                                                  class="ri-attachment-2 align-middle fs-13"></i></span>24 Oct,
                                              5:45PM</span>
                                      </p>
                                  </a>
                                  <div class="mail-msg mb-0">
                                      <div class="fs-13 text-muted text-wrap text-truncate mail-msg-content">
                                          Greetings, I invite you to join an industry webinar on [Topic] this
                                          Friday at 3 PM. Your participation would be valuable. RSVP at your
                                          earliest convenience.
                                      </div>
                                  </div>
                                  <span class="badge bg-outline-success"><i class="ri-briefcase-line fs-11 me-1"></i>Social</span>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div class="d-flex align-items-top flex-wrap">
                              <div class="me-3 mt-1">
                                  <input class="form-check-input" type="checkbox" id="checkboxNoLabel14"
                                      value="" aria-label="...">
                              </div>
                              <div>
                                  <i class="ri-star-line fs-16 text-warning me-3"></i>
                              </div>
                              <div class="me-1 lh-1">
                                  <span class="avatar avatar-md me-2 avatar-rounded mail-msg-avatar">
                                      <img src="{{ asset('') }}/assets/images/faces/15.jpg" alt="">
                                  </span>
                              </div>
                              <div class="flex-fill">
                                  <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                      data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                      <p class="mb-0 fs-13 fw-medium">
                                          Mason Wallace <span class="float-end text-muted fw-normal fs-11">12
                                              Sep, 11:24AM</span>
                                      </p>
                                  </a>
                                  <div class="mail-msg mb-0">
                                      <div class="fs-13 text-muted text-wrap text-truncate mail-msg-content">
                                          Team, our budget proposal is pending approval. Please review the
                                          final draft attached and share any last-minute feedback before
                                          tomorrow's meeting.
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div class="d-flex align-items-top flex-wrap">
                              <div class="me-3 mt-1">
                                  <input class="form-check-input" type="checkbox" id="checkboxNoLabel24"
                                      value="" aria-label="...">
                              </div>
                              <div>
                                  <i class="ri-star-line fs-16 text-muted me-3"></i>
                              </div>
                              <div class="me-1 lh-1">
                                  <span
                                      class="avatar avatar-md me-2 avatar-rounded bg-secondary mail-msg-avatar">
                                      LP
                                  </span>
                              </div>
                              <div class="flex-fill">
                                  <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                      data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                      <p class="mb-0 fs-13 fw-medium">
                                          Leo Phillips <span
                                              class="float-end text-muted fw-normal fs-11"><span
                                              class="me-2"><i
                                                  class="ri-attachment-2 align-middle fs-13"></i></span>11 Sep,
                                              10:32AM</span>
                                      </p>
                                  </a>
                                  <p class="fs-13 mb-0">
                                  <div class="mail-msg mb-0">
                                      <div class="fs-13 text-muted text-wrap text-truncate mail-msg-content">
                                          Hello Team, let's convene for a project update meeting on Thursday
                                          at 10 AM. Please come prepared with progress reports and potential
                                          roadblocks.
                                      </div>
                                  </div>
                                  <span class="badge bg-outline-info"><i class="ri-checkbox-circle-line fs-11 me-1"></i>Personal</span>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div class="d-flex align-items-top flex-wrap">
                              <div class="me-3 mt-1">
                                  <input class="form-check-input" type="checkbox" id="checkboxNoLabel34"
                                      value="" aria-label="...">
                              </div>
                              <div>
                                  <i class="ri-star-line fs-16 text-warning me-3"></i>
                              </div>
                              <div class="me-1 lh-1">
                                  <span
                                      class="avatar avatar-md me-2 avatar-rounded bg-success mail-msg-avatar">
                                      LB
                                  </span>
                              </div>
                              <div class="flex-fill">
                                  <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                      data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                      <p class="mb-0 fs-13 fw-medium">
                                          Logan Brooks <span class="float-end text-muted fw-normal fs-11">08
                                              Aug, 08:12AM</span>
                                      </p>
                                  </a>
                                  <p class="fs-13 mb-0">
                                  <div class="mail-msg mb-0">
                                      <div class="fs-13 text-muted text-wrap text-truncate mail-msg-content">
                                          Dear [Name], I am reaching out to explore potential collaboration
                                          opportunities between our organizations. Would you be available for
                                          a brief discussion next week?
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div class="d-flex align-items-top flex-wrap">
                              <div class="me-3 mt-1">
                                  <input class="form-check-input" type="checkbox" id="checkboxNoLabel44"
                                      value="" aria-label="...">
                              </div>
                              <div>
                                  <i class="ri-star-line fs-16 text-warning me-3"></i>
                              </div>
                              <div class="me-1 lh-1">
                                  <span class="avatar avatar-md me-2 avatar-rounded mail-msg-avatar">
                                      <img src="{{ asset('') }}/assets/images/faces/13.jpg" alt="">
                                  </span>
                              </div>
                              <div class="flex-fill">
                                  <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                      data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                      <p class="mb-0 fs-13 fw-medium">
                                          Jackson Rivera <span class="float-end text-muted fw-normal fs-11">16
                                              July, 05:52PM</span>
                                      </p>
                                  </a>
                                  <p class="fs-13 mb-0">
                                  <div class="mail-msg mb-0">
                                      <div class="fs-13 text-muted text-wrap text-truncate mail-msg-content">
                                          Greetings, your registration for the upcoming training session on
                                          [Topic] has been confirmed. Details and pre-read materials are
                                          attached. Ensure your readiness.
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- End::app-content -->

@endsection