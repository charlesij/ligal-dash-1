@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Page Header -->
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Form Advanced</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Form Advanced</li>
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
                        Telephone Input
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="row gy-4">
                          <div class="col-xl-3 col-sm-6">
                              <label for="phone" class="form-label d-block">Basic Telephone Input</label>
                              <input class="form-control" id="phone" type="tel">
                          </div>
                          <div class="col-xl-5 col-sm-6">
                              <label for="phone-validation" class="form-label d-block">Telephone Input with valdation</label>
                              <input id="phone-validation" type="tel" class="form-control mb-1">
                              <button id="btn" type="button" class="btn btn-primary btn-wave telephone-input-btn mb-1">Validate</button>
                              <span id="valid-msg" class="hide">✓ Valid</span>
                              <span id="error-msg" class="hide"></span>
                          </div>
                          <div class="col-xl-4 col-sm-6">
                              <label for="phone-only-countries" class="form-label d-block">Telephone Input With Only Countries</label>
                              <input id="phone-only-countries" type="tel" class="form-control">
                          </div>
                          <div class="col-xl-4 col-sm-6">
                              <label for="phone-only-countries" class="form-label d-block">Telephone Input With Only Countries</label>
                              <form id="form">
                                  <p id="message" class="mb-1"></p>
                                  <input id="phone-hidden-input" type="tel" class="form-control mb-1">
                                  <button type="submit" class="btn btn-primary btn-wave telephone-input-btn mb-1">Submit</button>
                              </form>
                          </div>
                          <div class="col-xl-4 col-sm-6">
                              <label for="phone-existing-number" class="form-label d-block">Display Existing Number</label>
                              <input class="form-control" id="phone-existing-number" type="tel" value="+447733312345">
                          </div>
                          <div class="col-xl-4 col-sm-6">
                              <label for="phone-show-selected-dial-code" class="form-label d-block">With Selected Dial Code</label>
                              <input class="form-control" id="phone-show-selected-dial-code" type="tel">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: row-1 -->

        <!-- Start::row-2 -->
        <div class="row">
          <div class="col-xl-12">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">Auto Complete</div>
                  </div>
                  <div class="card-body">
                      <div class="row gy-3">
                          <div class="col-xl-4">
                              <label for="autoComplete" class="form-label">Search Results Of Food & Drinks Combo</label>
                              <input type="search" class="form-control" id="autoComplete" placeholder="Placeholder" spellcheck=false autocomplete="off" autocapitalize="off">
                          </div>
                          <div class="col-xl-4">
                              <label for="autoComplete-color" class="form-label">Advanced Search Results For Colors</label>
                              <input type="search" class="form-control" id="autoComplete-color" spellcheck=false autocomplete="off" autocapitalize="off">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--End::row-2 -->

      <!-- Start:: row-3 -->
      <div class="row">
          <div class="col-xl-12">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">
                          Tagify Js
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="row gy-3">
                          <div class="col-xl-6">
                              <label class="form-label d-block">Basic Tagify</label>
                              <input name='basic' value='tag1, tag2' autofocus class="form-control">
                          </div>
                          <div class="col-xl-6">
                              <label class="form-label d-block">Tagify With Custom Suggestions</label>
                              <input name='input-custom-dropdown' class="form-control some_class_name" placeholder='write some tags' value='css, html, javascript'>
                          </div>
                          <div class="col-xl-6">
                              <label class="form-label d-block">Diasbled User Input</label>
                              <input name='tags-disabled-user-input' placeholder='Select tags from the list' value="1" class="form-control">
                          </div>
                          <div class="col-xl-6">
                              <label class="form-label d-block">Drag & Sort</label>
                              <input name='drag-sort' class="form-control" value='tag 1, tag 2, tag 3, tag 4, tag 5, tag 6' >
                          </div>
                          <div class="col-xl-6">
                              <label class="form-label d-block">Tagify With Users List</label>
                              <input name='users-list-tags' value='abatisse2@nih.gov, Justinian Hattersley' class="form-control">
                          </div>
                          <div class="col-xl-6">
                              <label class="form-label d-block">Tagify Single-Value Select</label>
                              <input name='tags-select-mode' class='selectMode form-control' placeholder="Please select" >
                          </div>
                          <div class="col-xl-6">
                              <label class="form-label d-block">Readonly Tags</label>
                              <input name='tags4' class="form-control" readonly value='tag1, tag 2, another tag'>
                          </div>
                          <div class="col-xl-6">
                              <label class="form-label d-block">Readonly Mix</label>
                              <input name='tags-readonly-mix'  type="text" class='readonlyMix form-control' placeholder="Type something" value='[
                                  {
                                      "value"    : "foo",
                                      "readonly" : true,
                                      "title"    : "read-only tag"
                                  },
                                  {
                                      "value"    : "bar"
                                  },
                                  {
                                      "value"    : "Locked tag",
                                      "readonly" : true,
                                      "title"    : "Another readonly tag"
                                  }
                              ]'>
                          </div>
                          <div class="col-xl-12">
                              <label class="form-label d-block">Tagify With Mix Text & Tags</label>
                              <textarea name='mix' class="form-control">[[{"id":200, "value":"cartman", "title":"Eric Cartman"}]] and [[kyle]] do not know [[{"value":"homer simpson", "readonly":true}]] because he's a relic.</textarea>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: row-3 -->

      <!-- Start:: row-4 -->
      <div class="row">
          <div class="col-xl-12">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">Dual List Box</div>
                  </div>
                  <div class="card-body">
                      <div class="row gy-4">
                          <div class="col-xl-4">
                              <h6>Select by class :</h6>
                              <select class="select1" multiple>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                  <option value="4">Four</option>
                                  <option value="5">Five</option>
                                  <option value="6">Six</option>
                                  <option value="7">Seven</option>
                                  <option value="8">Eight</option>
                                  <option value="9">Nine</option>
                                  <option value="10">Ten</option>
                              </select>
                          </div>
                          <div class="col-xl-4">
                              <h6>Add options and add eventListeners :</h6>
                              <select class="select2" multiple>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                              </select>
                          </div>
                          <div class="col-xl-4">
                              <h6>Remove all the buttons from being rendered :</h6>
                              <select class="select3" multiple>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                              </select>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: row-4 -->

  </div>
</div>
<!-- End::app-content -->

@endsection