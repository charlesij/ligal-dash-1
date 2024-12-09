@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Page Header -->
      <div
          class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Search</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Search</li>
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
                  <div class="card-body p-0">
                      <div class="input-group p-3 pb-2">
                          <input type="text" class="form-control form-control-lg"
                              placeholder="Search Here ..." aria-label="Search Here ..."
                              aria-describedby="button-addon1">
                          <button class="btn btn-primary btn-wave" type="button"
                              id="button-addon1">Search</button>
                      </div>
                      <div class="text-muted me-2 px-3 mb-3">About 12,546,90000 results (0.56 Seconds)</div>
                      <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 px-3">
                          <ul class="nav nav-pills nav-style-2 mb-3 gap-2" role="tablist">
                              <li class="nav-item" role="presentation">
                                  <a class="nav-link px-4 py-2 active  border fw-medium text-muted"
                                      data-bs-toggle="tab" role="tab" aria-current="page" href="#search-all"
                                      aria-selected="true"><i class="ri-search-line me-2 "></i>All</a>
                              </li>
                              <li class="nav-item" role="presentation">
                                  <a class="nav-link px-4 py-2 border fw-medium text-muted"
                                      data-bs-toggle="tab" role="tab" aria-current="page"
                                      href="#search-images" aria-selected="false" tabindex="-1"><i
                                          class="ri-image-line me-2"></i>Images</a>
                              </li>
                              <li class="nav-item" role="presentation">
                                  <a class="nav-link px-4 py-2  border fw-medium text-muted"
                                      data-bs-toggle="tab" role="tab" aria-current="page" href="#search-books"
                                      aria-selected="false" tabindex="-1"><i
                                          class="ri-book-line me-2"></i>Books</a>
                              </li>
                              <li class="nav-item" role="presentation">
                                  <a class="nav-link px-4 py-2  border fw-medium text-muted"
                                      data-bs-toggle="tab" role="tab" aria-current="page" href="#search-news"
                                      aria-selected="false" tabindex="-1"><i
                                          class="ri-newspaper-line me-2"></i>News</a>
                              </li>
                              <li class="nav-item" role="presentation">
                                  <a class="nav-link px-4 py-2  border fw-medium text-muted"
                                      data-bs-toggle="tab" role="tab" aria-current="page"
                                      href="#search-videos" aria-selected="false" tabindex="-1"><i
                                          class="ri-live-line me-2"></i>Videos</a>
                              </li>
                          </ul>
                          <div class="ms-auto d-flex gap-2 mb-3">
                              <div class="dropdown"> <a href="javascript:void(0);"
                                      class="btn text-default btn-light text-muted dropdown-toggle"
                                      data-bs-toggle="dropdown" aria-expanded="true"> Sort By</a>
                                  <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="javascript:void(0);">Alphabets</a>
                                      </li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">First Word</a>
                                      </li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">Numeric</a></li>
                                  </ul>
                              </div>
                              <div class="dropdown"> <a href="javascript:void(0);"
                                      class="btn btn-primary dropdown-toggle"
                                      data-bs-toggle="dropdown" aria-expanded="true"> Filter By</a>
                                  <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="javascript:void(0);">Alphabets</a>
                                      </li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">First Word</a>
                                      </li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">Numeric</a></li>
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
                  <div class="tab-pane p-0 border-0 show active" id="search-all" role="tabpanel">
                      <div class="row">
                        <div class="col-xl-4">
                          <div class="card custom-card overflow-hidden">
                              <div class="card-body">
                                  <div class="d-flex align-items-start justify-content-between p-3 bg-light">
                                      <div>
                                          <div class="mb-2">
                                              <span class="d-block fw-medium"><a
                                                      href="javascript:void(0);">Tech Unleashed</a></span>
                                              <a href="javascript:void(0);" class="link-success">
                                                  http://www.besttechgadgets.com</a>
                                          </div>
                                          <div class="mb-2">
                                              <h6 class="fw-semibold mb-1"><a href="javascript:void(0)"
                                                      class="searched-item-main-link">The Latest Gadgets Revolutionizing the Industry</a></h6>
                                              <span class="d-block text-muted">Discover cutting-edge
                                                  technology and must-have gadgets. Stay ahead in the tech
                                                  world with our carefully curated list of innovative
                                                  devices.</span>
                                          </div>
                                          <div class="d-flex align-items-center gap-3 flex-wrap">
                                              <a href="javascript:void(0);"
                                                  class="link-primary link-offset-2 link-underline-opacity-10 link-underline-opacity-100-hover text-decoration-underline">Shop
                                                  Now</a>
                                              <a href="javascript:void(0);"
                                                  class="link-primary link-offset-2 link-underline-opacity-10 link-underline-opacity-100-hover text-decoration-underline">Top
                                                  10 Picks</a>
                                          </div>
                                      </div>
                                      <div class="dropdown">
                                          <a aria-label="anchor" href="javascript:void(0);"
                                              data-bs-toggle="dropdown">
                                              <i class="ri-more-2-fill fs-5 text-muted"></i>
                                          </a>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a class="dropdown-item"
                                                      href="javascript:void(0);">Week</a></li>
                                              <li><a class="dropdown-item"
                                                      href="javascript:void(0);">Day</a></li>
                                              <li><a class="dropdown-item"
                                                      href="javascript:void(0);">Year</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="col-xl-4">
                          <div class="card custom-card overflow-hidden">
                              <div class="card-body">
                                  <div class="d-flex align-items-start justify-content-between p-3 bg-light">
                                      <div>
                                          <div class="mb-2">
                                              <span class="d-block fw-medium"><a
                                                      href="javascript:void(0);">Guilt-Free Goodness</a></span>
                                              <a href="javascript:void(0);"
                                                  class="link-success">http://www.healthyrecipeshub.com</a>
                                          </div>
                                          <div class="mb-2">
                                              <h6 class="fw-semibold mb-1"><a href="javascript:void(0)"
                                                      class="searched-item-main-link"> Tasty Recipes for a Health-Conscious Lifestyle</a></h6>
                                              <span class="d-block text-muted">Find a variety of
                                                  nutritious recipes to support your well-being. From
                                                  breakfast to dinner, we have a tasty meals
                                                  that prioritize your health.</span>
                                          </div>
                                          <div class="d-flex align-items-center gap-3 flex-wrap">
                                              <a href="javascript:void(0);"
                                                  class="link-primary link-offset-2 link-underline-opacity-10 link-underline-opacity-100-hover text-decoration-underline">Browse
                                                  Recipes</a>
                                              <a href="javascript:void(0);"
                                                  class="link-primary link-offset-2 link-underline-opacity-10 link-underline-opacity-100-hover text-decoration-underline">Nutrition
                                                  Tips</a>
                                          </div>
                                      </div>
                                      <div class="dropdown">
                                          <a aria-label="anchor" href="javascript:void(0);"
                                              data-bs-toggle="dropdown">
                                              <i class="ri-more-2-fill fs-5 text-muted"></i>
                                          </a>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a class="dropdown-item"
                                                      href="javascript:void(0);">Week</a></li>
                                              <li><a class="dropdown-item"
                                                      href="javascript:void(0);">Day</a></li>
                                              <li><a class="dropdown-item"
                                                      href="javascript:void(0);">Year</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="col-xl-4">
                          <div class="card custom-card overflow-hidden">
                              <div class="card-body">
                                  <div class="d-flex align-items-start justify-content-between p-3 bg-light">
                                      <div>
                                          <div class="mb-2">
                                              <span class="d-block fw-medium"><a
                                                      href="javascript:void(0);">Globetrotter’s Dream</a></span>
                                              <a href="javascript:void(0);"
                                                  class="link-success">http://www.travelexplorer.com</a>
                                          </div>
                                          <div class="mb-2">
                                              <h6 class="fw-semibold mb-1"><a href="javascript:void(0)"
                                                      class="searched-item-main-link">Experience Unforgettable Adventures Across Continents</a></h6>
                                              <span class="d-block text-muted">Plan your next adventure
                                                  with Travel Explorer. Discover hidden gems, travel tips,
                                                  and  destinations to create memories that last a
                                                  lifetime.</span>
                                          </div>
                                          <div class="d-flex align-items-center gap-3 flex-wrap">
                                              <a href="javascript:void(0);"
                                                  class="link-primary link-offset-2 link-underline-opacity-10 link-underline-opacity-100-hover text-decoration-underline">Explore
                                                  Destinations</a>
                                              <a href="javascript:void(0);"
                                                  class="link-primary link-offset-2 link-underline-opacity-10 link-underline-opacity-100-hover text-decoration-underline">Travel
                                                  Guides</a>
                                          </div>
                                      </div>
                                      <div class="dropdown">
                                          <a aria-label="anchor" href="javascript:void(0);"
                                              data-bs-toggle="dropdown">
                                              <i class="ri-more-2-fill fs-5 text-muted"></i>
                                          </a>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a class="dropdown-item"
                                                      href="javascript:void(0);">Week</a></li>
                                              <li><a class="dropdown-item"
                                                      href="javascript:void(0);">Day</a></li>
                                              <li><a class="dropdown-item"
                                                      href="javascript:void(0);">Year</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="col-xl-4">
                          <div class="card custom-card overflow-hidden">
                              <div class="card-body">
                                  <div class="d-flex align-items-start justify-content-between p-3 bg-light">
                                      <div>
                                          <div class="mb-2">
                                              <span class="d-block fw-medium"><a
                                                      href="javascript:void(0);">A Blissful Journey Through the Lens</a></span>
                                              <a href="javascript:void(0);"
                                                  class="link-success">http://www.natureblissphotos.com</a>
                                          </div>
                                          <div class="mb-3">
                                              <span class="mb-2 d-block"><a href="javascript:void(0)"
                                                      class="fw-medium">Search Related Images :</a></span>
                                              <div class="d-flex align-items-start gap-3 flex-wrap">
                                                  <div>
                                                      <figure class="figure mb-0">
                                                          <a class="avatar "
                                                              href="javascript:void(0);">
                                                              <img class="img-fluid rounded card-img"
                                                                  src="{{ asset('') }}/assets/images/media/media-59.jpg"
                                                                  alt="...">
                                                          </a>
                                                      </figure>
                                                  </div>
                                                  <div>
                                                      <figure class="figure mb-0">
                                                          <a class="avatar "
                                                              href="javascript:void(0);">
                                                              <img class="img-fluid rounded card-img"
                                                                  src="{{ asset('') }}/assets/images/media/media-60.jpg"
                                                                  alt="...">
                                                          </a>
                                                      </figure>
                                                  </div>
                                                  <div>
                                                      <figure class="figure mb-0">
                                                          <a class="avatar "
                                                              href="javascript:void(0);">
                                                              <img class="img-fluid rounded card-img"
                                                                  src="{{ asset('') }}/assets/images/media/media-61.jpg"
                                                                  alt="...">
                                                          </a>
                                                      </figure>
                                                  </div>
                                                  <div>
                                                      <figure class="figure mb-0">
                                                          <a class="avatar "
                                                              href="javascript:void(0);">
                                                              <img class="img-fluid rounded card-img"
                                                                  src="{{ asset('') }}/assets/images/media/media-62.jpg"
                                                                  alt="...">
                                                          </a>
                                                      </figure>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="d-flex align-items-center gap-3 flex-wrap">
                                              <a href="javascript:void(0);"
                                                  class="link-primary link-offset-2 link-underline-opacity-10 link-underline-opacity-100-hover text-decoration-underline">Shop
                                                  Now</a>
                                              <a href="javascript:void(0);"
                                                  class="link-primary link-offset-2 link-underline-opacity-10 link-underline-opacity-100-hover text-decoration-underline">Trend
                                                  Alerts</a>
                                          </div>
                                      </div>
                                      <div class="dropdown">
                                          <a aria-label="anchor" href="javascript:void(0);"
                                              data-bs-toggle="dropdown">
                                              <i class="ri-more-2-fill fs-5 text-muted"></i>
                                          </a>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a class="dropdown-item"
                                                      href="javascript:void(0);">Week</a></li>
                                              <li><a class="dropdown-item"
                                                      href="javascript:void(0);">Day</a></li>
                                              <li><a class="dropdown-item"
                                                      href="javascript:void(0);">Year</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="col-xl-4">
                          <div class="card custom-card overflow-hidden">
                              <div class="card-body">
                                  <div class="d-flex align-items-start justify-content-between p-3 bg-light">
                                      <div>
                                          <div class="mb-2">
                                              <span class="d-block fw-medium"><a
                                                      href="javascript:void(0);">Style Revolution</a></span>
                                              <a href="javascript:void(0);"
                                                  class="link-success">http://www.fashionfinds.com</a>
                                          </div>
                                          <div class="mb-2">
                                              <h6 class="fw-semibold mb-1"><a href="javascript:void(0)"
                                                      class="searched-item-main-link">Upgrade Your Wardrobe with the Hottest Trends</a></h6>
                                              <span class="d-block text-muted">Stay in vogue with Fashion
                                                  Finds. Explore a curated selection of clothing,
                                                  accessories, and style tips to express your unique
                                                  fashion sense.</span>
                                          </div>
                                          <div class="d-flex align-items-center gap-3 flex-wrap">
                                              <a href="javascript:void(0);"
                                                  class="link-primary link-offset-2 link-underline-opacity-10 link-underline-opacity-100-hover text-decoration-underline">Shop
                                                  Now</a>
                                              <a href="javascript:void(0);"
                                                  class="link-primary link-offset-2 link-underline-opacity-10 link-underline-opacity-100-hover text-decoration-underline">Trend
                                                  Alerts</a>
                                          </div>
                                      </div>
                                      <div class="dropdown">
                                          <a aria-label="anchor" href="javascript:void(0);"
                                              data-bs-toggle="dropdown">
                                              <i class="ri-more-2-fill fs-5 text-muted"></i>
                                          </a>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a class="dropdown-item"
                                                      href="javascript:void(0);">Week</a></li>
                                              <li><a class="dropdown-item"
                                                      href="javascript:void(0);">Day</a></li>
                                              <li><a class="dropdown-item"
                                                      href="javascript:void(0);">Year</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="col-xl-4">
                          <div class="card custom-card overflow-hidden">
                              <div class="card-body">
                                  <div class="d-flex align-items-start justify-content-between p-3 bg-light">
                                      <div>
                                          <div class="mb-2">
                                              <span class="d-block fw-medium"><a
                                                      href="javascript:void(0);">Interstellar Reading</a></span>
                                              <a href="javascript:void(0);"
                                                  class="link-success">http://www.sci-fibooks.com</a>
                                          </div>
                                          <div class="mb-2">
                                              <h6 class="fw-semibold mb-1"><a href="javascript:void(0)"
                                                      class="searched-item-main-link"> The Best Science Books for a Journey Beyond Earth</a></h6>
                                              <span class="d-block text-muted">Dive into the realms of
                                                  imagination with our collection of mind-bending science
                                                  fiction novels. Embark on epic adventures beyond the
                                                  stars.</span>
                                          </div>
                                          <div class="d-flex align-items-center gap-3 flex-wrap">
                                              <a href="javascript:void(0);"
                                                  class="link-primary link-offset-2 link-underline-opacity-10 link-underline-opacity-100-hover text-decoration-underline">Explore
                                                  Books</a>
                                              <a href="javascript:void(0);"
                                                  class="link-primary link-offset-2 link-underline-opacity-10 link-underline-opacity-100-hover text-decoration-underline">Author
                                                  Interviews</a>
                                          </div>
                                      </div>
                                      <div class="dropdown">
                                          <a aria-label="anchor" href="javascript:void(0);"
                                              data-bs-toggle="dropdown">
                                              <i class="ri-more-2-fill fs-5 text-muted"></i>
                                          </a>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a class="dropdown-item"
                                                      href="javascript:void(0);">Week</a></li>
                                              <li><a class="dropdown-item"
                                                      href="javascript:void(0);">Day</a></li>
                                              <li><a class="dropdown-item"
                                                      href="javascript:void(0);">Year</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                      </div>
                      <ul class="pagination justify-content-end">
                          <li class="page-item disabled">
                              <a class="page-link">Previous</a>
                          </li>
                          <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                          <li class="page-item active"><a class="page-link" href="javascript:void(0);">2</a></li>
                          <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                          <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">Next</a>
                          </li>
                      </ul>
                  </div>
                  <div class="tab-pane border-0 p-0" id="search-images" role="tabpanel">
                      <div class="card custom-card">
                          <div class="card-body pb-0">
                              <div class="d-flex gap-3 mb-3 flex-wrap">
                                    <div class="border p-2 d-flex gap-2 align-items-center rounded">
                                      <span class="avatar avatar-sm">
                                          <img src="{{ asset('') }}/assets/images/media/media-25.jpg" alt="img">
                                      </span>
                                      <span>Background</span>
                                    </div>
                                    <div class="border p-2 d-flex gap-2 align-items-center rounded">
                                      <span class="avatar avatar-sm">
                                          <img src="{{ asset('') }}/assets/images/media/media-26.jpg" alt="img">
                                      </span>
                                      <span>Green Nature</span>
                                    </div>
                                    <div class="border p-2 d-flex gap-2 align-items-center rounded">
                                      <span class="avatar avatar-sm">
                                          <img src="{{ asset('') }}/assets/images/media/media-27.jpg" alt="img">
                                      </span>
                                      <span>Templates</span>
                                    </div>
                                    <div class="border p-2 d-flex gap-2 align-items-center rounded">
                                      <span class="avatar avatar-sm">
                                          <img src="{{ asset('') }}/assets/images/media/media-28.jpg" alt="img">
                                      </span>
                                      <span>Decoration</span>
                                    </div>
                                    <div class="border p-2 d-flex gap-2 align-items-center rounded">
                                      <span class="avatar avatar-sm">
                                          <img src="{{ asset('') }}/assets/images/media/media-29.jpg" alt="img">
                                      </span>
                                      <span>Technology</span>
                                    </div>
                                    <div class="border p-2 d-flex gap-2 align-items-center rounded">
                                      <span class="avatar avatar-sm">
                                          <img src="{{ asset('') }}/assets/images/media/media-30.jpg" alt="img">
                                      </span>
                                      <span>Web Page</span>
                                    </div>
                                    <div class="border p-2 d-flex gap-2 align-items-center rounded">
                                      <span class="avatar avatar-sm">
                                          <img src="{{ asset('') }}/assets/images/media/media-31.jpg" alt="img">
                                      </span>
                                      <span>Responsive</span>
                                    </div>
                              </div>
                              <div class="row">
                                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                      <a href="{{ asset('') }}/assets/images/media/media-40.jpg"
                                          class="glightbox card search-images-card" data-gallery="gallery1">
                                          <img src="{{ asset('') }}/assets/images/media/media-40.jpg" alt="image">
                                          <div class="p-3 text-center">
                                              <div class="d-flex align-items-center justify-content-center gap-1">
                                                  <div class="avatar avatar-sm bg-light border avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/company-logos/6.png" alt="">
                                                  </div>
                                                  <div class="figure-caption fs-13 mb-1 fw-semibold text-default">
                                                      Tech Gadgets</div>
                                              </div>
                                              <div class="fs-12 text-muted">Innovative Marvels</div>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                      <a href="{{ asset('') }}/assets/images/media/media-41.jpg"
                                          class="glightbox card search-images-card" data-gallery="gallery1">
                                          <img src="{{ asset('') }}/assets/images/media/media-41.jpg" alt="image">
                                          <div class="p-3 text-center">
                                              <div class="d-flex align-items-center justify-content-center gap-1">
                                                  <div class="avatar avatar-sm bg-light border avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/company-logos/6.png" alt="">
                                                  </div>
                                                  <div class="figure-caption fs-13 mb-1 fw-semibold text-default">
                                                      Healthy Recipes</div>
                                              </div>
                                              <div class="fs-12 text-muted">Nutrient Nourish</div>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                      <a href="{{ asset('') }}/assets/images/media/media-42.jpg"
                                          class="glightbox card search-images-card" data-gallery="gallery1">
                                          <img src="{{ asset('') }}/assets/images/media/media-42.jpg" alt="image">
                                          <div class="p-3 text-center">
                                              <div class="d-flex align-items-center justify-content-center gap-1">
                                                  <div class="avatar avatar-sm bg-light border avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/company-logos/6.png" alt="">
                                                  </div>
                                                  <div class="figure-caption fs-13 mb-1 fw-semibold text-default">
                                                      Travel Explorer</div>
                                              </div>
                                              <div class="fs-12 text-muted">Global Wander</div>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                      <a href="{{ asset('') }}/assets/images/media/media-43.jpg"
                                          class="glightbox card search-images-card" data-gallery="gallery1">
                                          <img src="{{ asset('') }}/assets/images/media/media-43.jpg" alt="image">
                                          <div class="p-3 text-center">
                                              <div class="d-flex align-items-center justify-content-center gap-1">
                                                  <div class="avatar avatar-sm bg-light border avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/company-logos/6.png" alt="">
                                                  </div>
                                                  <div class="figure-caption fs-13 mb-1 fw-semibold text-default">
                                                      Fashion Finds</div>
                                              </div>
                                              <div class="fs-12 text-muted">Chic Styles</div>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                      <a href="{{ asset('') }}/assets/images/media/media-44.jpg"
                                          class="glightbox card search-images-card" data-gallery="gallery1">
                                          <img src="{{ asset('') }}/assets/images/media/media-44.jpg" alt="image">
                                          <div class="p-3 text-center">
                                              <div class="d-flex align-items-center justify-content-center gap-1">
                                                  <div class="avatar avatar-sm bg-light border avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/company-logos/6.png" alt="">
                                                  </div>
                                                  <div class="figure-caption fs-13 mb-1 fw-semibold text-default">
                                                      Nature Photography</div>
                                              </div>
                                              <div class="fs-12 text-muted">Wild Beauty</div>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                      <a href="{{ asset('') }}/assets/images/media/media-45.jpg"
                                          class="glightbox card search-images-card" data-gallery="gallery1">
                                          <img src="{{ asset('') }}/assets/images/media/media-45.jpg" alt="image">
                                          <div class="p-3 text-center">
                                              <div class="d-flex align-items-center justify-content-center gap-1">
                                                  <div class="avatar avatar-sm bg-light border avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/company-logos/6.png" alt="">
                                                  </div>
                                                  <div class="figure-caption fs-13 mb-1 fw-semibold text-default">
                                                      Future Tales</div>
                                              </div>
                                              <div class="fs-12 text-muted">Innovative Marvels</div>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                      <a href="{{ asset('') }}/assets/images/media/media-46.jpg"
                                          class="glightbox card search-images-card" data-gallery="gallery1">
                                          <img src="{{ asset('') }}/assets/images/media/media-46.jpg" alt="image">
                                          <div class="p-3 text-center">
                                              <div class="d-flex align-items-center justify-content-center gap-1">
                                                  <div class="avatar avatar-sm bg-light border avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/company-logos/6.png" alt="">
                                                  </div>
                                                  <div class="figure-caption fs-13 mb-1 fw-semibold text-default">
                                                      Science Fiction Books</div>
                                              </div>
                                              <div class="fs-12 text-muted">Future Tales</div>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                      <a href="{{ asset('') }}/assets/images/media/media-60.jpg"
                                          class="glightbox card search-images-card" data-gallery="gallery1">
                                          <img src="{{ asset('') }}/assets/images/media/media-60.jpg" alt="image">
                                          <div class="p-3 text-center">
                                              <div class="d-flex align-items-center justify-content-center gap-1">
                                                  <div class="avatar avatar-sm bg-light border avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/company-logos/6.png" alt="">
                                                  </div>
                                                  <div class="figure-caption fs-13 mb-1 fw-semibold text-default">
                                                      Fitness Fanatics</div>
                                              </div>
                                              <div class="fs-12 text-muted">Active Vibes</div>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="col-xl-12 mb-4">
                                      <button class="btn btn-info-light btn-loader mx-auto">
                                          <span class="me-2">Loading</span>
                                          <span class="loading"><i class="ri-loader-4-line fs-16"></i></span>
                                      </button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="tab-pane border-0 p-0" id="search-books" role="tabpanel">
                      <div class="card custom-card">
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-xl-4">
                                      <div class="card custom-card shadow-none border">
                                          <div class="card-body">
                                              <div
                                                  class="d-flex align-items-start flex-wrap gap-3 justify-content-between">
                                                  <div class="d-flex align-items-center">
                                                      <div>
                                                          <span
                                                              class="avatar avatar-lg avatar-rounded bg-primary bg-opacity-10 border">
                                                              <img src="{{ asset('') }}/assets/images/media/books/6.jpg"
                                                                  alt="">
                                                          </span>
                                                      </div>
                                                      <div class="ms-2">
                                                          <h6
                                                              class="fw-medium mb-0 d-flex align-items-center">
                                                              <a href="javascript:void(0);">The Universe in a Nutshell</a></h6>
                                                          <a href="javascript:void(0);">F. Scott
                                                              Fitzgerald</a>
                                                      </div>
                                                  </div>
                                                  <div class="btn-list">
                                                      <a href="javascript:void(0);"
                                                          class="btn btn-sm btn-icon btn-primary-light"
                                                          data-bs-toggle="tooltip" data-bs-placement="top"
                                                          aria-label="Add to favourite"
                                                          data-bs-original-title="Add to favourite"><span><i
                                                                  class="ri-heart-3-fill align-middle"></i></span></a>
                                                      <a href="javascript:void(0);"
                                                          class="btn btn-sm btn-icon btn-secondary-light"
                                                          data-bs-toggle="tooltip" data-bs-placement="top"
                                                          aria-label="Featured Book"
                                                          data-bs-original-title="Featured Book"><span><i
                                                                  class="ri-star-fill"></i></span></a>
                                                  </div>
                                              </div>
                                              <div class="popular-tags my-3">
                                                  <a href="javascript:void(0);"
                                                      class="badge rounded-pill bg-primary-transparent">Classic</a>
                                                  <a href="javascript:void(0);"
                                                      class="badge rounded-pill bg-secondary-transparent">Fiction</a>
                                                  <a href="javascript:void(0);"
                                                      class="badge rounded-pill bg-success-transparent">Jazz
                                                      Age</a>
                                              </div>
                                              <div class="d-flex justify-content-between flex-wrap gap-2">
                                                  <div><span class="text-muted">Published On</span> - <span
                                                          class="fw-medium mb-0">May 10, 1925</span></div>
                                                  <a href="javascript:void(0);"
                                                      class="text-primary fw-semibold fs-14">
                                                      Preview <i class="fe fe-arrow-right"></i>
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-xl-4">
                                      <div class="card custom-card shadow-none border">
                                          <div class="card-body">
                                              <div
                                                  class="d-flex align-items-start flex-wrap gap-3 justify-content-between">
                                                  <div class="d-flex align-items-center">
                                                      <div>
                                                          <span
                                                              class="avatar avatar-lg avatar-rounded bg-primary bg-opacity-10 border">
                                                              <img src="{{ asset('') }}/assets/images/media/books/1.jpg"
                                                                  alt="">
                                                          </span>
                                                      </div>
                                                      <div class="ms-2">
                                                          <h6
                                                              class="fw-medium mb-0 d-flex align-items-center">
                                                              <a href="javascript:void(0);">Quantum Physics for Dummies</a></h6>
                                                          <a href="javascript:void(0);">Harper Lee</a>
                                                      </div>
                                                  </div>
                                                  <div class="btn-list">
                                                      <a href="javascript:void(0);"
                                                      class="btn btn-sm btn-icon btn-primary-light"
                                                      data-bs-toggle="tooltip" data-bs-placement="top"
                                                      aria-label="Add to favourite"
                                                      data-bs-original-title="Add to favourite"><span><i
                                                              class="ri-heart-3-fill align-middle"></i></span></a>
                                                  <a href="javascript:void(0);"
                                                      class="btn btn-sm btn-icon btn-secondary-light"
                                                      data-bs-toggle="tooltip" data-bs-placement="top"
                                                      aria-label="Featured Book"
                                                      data-bs-original-title="Featured Book"><span><i
                                                              class="ri-star-fill"></i></span></a>
                                                  </div>
                                              </div>
                                              <div class="popular-tags my-3">
                                                  <a href="javascript:void(0);"
                                                      class="badge rounded-pill bg-primary-transparent">Fiction</a>
                                                  <a href="javascript:void(0);"
                                                      class="badge rounded-pill bg-secondary-transparent">Legal</a>
                                                  <a href="javascript:void(0);"
                                                      class="badge rounded-pill bg-success-transparent">Southern
                                                      Gothic</a>
                                              </div>
                                              <div class="d-flex justify-content-between flex-wrap gap-2">
                                                  <div><span class="text-muted">Published On</span> - <span
                                                          class="fw-medium mb-0">July 11, 1960</span></div>
                                                  <a href="javascript:void(0);"
                                                      class="text-primary fw-semibold fs-14">
                                                      Preview <i class="fe fe-arrow-right"></i>
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-xl-4">
                                      <div class="card custom-card shadow-none border">
                                          <div class="card-body">
                                              <div
                                                  class="d-flex align-items-start flex-wrap gap-3 justify-content-between">
                                                  <div class="d-flex align-items-center">
                                                      <div>
                                                          <span
                                                              class="avatar avatar-lg avatar-rounded bg-primary bg-opacity-10 border">
                                                              <img src="{{ asset('') }}/assets/images/media/books/2.jpg"
                                                                  alt="">
                                                          </span>
                                                      </div>
                                                      <div class="ms-2">
                                                          <h6
                                                              class="fw-medium mb-0 d-flex align-items-center">
                                                              <a href="javascript:void(0);">The Immortal Life of Henrietta Lacks</a></h6>
                                                          <a href="javascript:void(0);">George Orwell</a>
                                                      </div>
                                                  </div>
                                                  <div class="btn-list">
                                                      <a href="javascript:void(0);"
                                                      class="btn btn-sm btn-icon btn-primary-light"
                                                      data-bs-toggle="tooltip" data-bs-placement="top"
                                                      aria-label="Add to favourite"
                                                      data-bs-original-title="Add to favourite"><span><i
                                                              class="ri-heart-3-fill align-middle"></i></span></a>
                                                  <a href="javascript:void(0);"
                                                      class="btn btn-sm btn-icon btn-secondary-light"
                                                      data-bs-toggle="tooltip" data-bs-placement="top"
                                                      aria-label="Featured Book"
                                                      data-bs-original-title="Featured Book"><span><i
                                                              class="ri-star-fill"></i></span></a>
                                                  </div>
                                              </div>
                                              <div class="popular-tags my-3">
                                                  <a href="javascript:void(0);"
                                                      class="badge rounded-pill bg-primary-transparent">Dystopian</a>
                                                  <a href="javascript:void(0);"
                                                      class="badge rounded-pill bg-secondary-transparent">Political</a>
                                                  <a href="javascript:void(0);"
                                                      class="badge rounded-pill bg-success-transparent">Science
                                                      Fiction</a>
                                              </div>
                                              <div class="d-flex justify-content-between flex-wrap gap-2">
                                                  <div><span class="text-muted">Published On</span> - <span
                                                          class="fw-medium mb-0">June 8, 1949</span></div>
                                                  <a href="javascript:void(0);"
                                                      class="text-primary fw-semibold fs-14">
                                                      Preview <i class="fe fe-arrow-right"></i>
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-xl-4">
                                      <div class="card custom-card shadow-none border">
                                          <div class="card-body">
                                              <div
                                                  class="d-flex align-items-start flex-wrap gap-3 justify-content-between">
                                                  <div class="d-flex align-items-center">
                                                      <div>
                                                          <span
                                                              class="avatar avatar-lg avatar-rounded bg-primary bg-opacity-10 border">
                                                              <img src="{{ asset('') }}/assets/images/media/books/3.jpg"
                                                                  alt="">
                                                          </span>
                                                      </div>
                                                      <div class="ms-2">
                                                          <h6
                                                              class="fw-medium mb-0 d-flex align-items-center">
                                                              <a href="javascript:void(0);">An Intimate History</a>
                                                          </h6>
                                                          <a href="javascript:void(0);">J.R.R. Tolkien</a>
                                                      </div>
                                                  </div>
                                                  <div class="btn-list">
                                                      <a href="javascript:void(0);"
                                                          class="btn btn-sm btn-icon btn-primary-light"
                                                          data-bs-toggle="tooltip" data-bs-placement="top"
                                                          aria-label="Add to favourite"
                                                          data-bs-original-title="Add to favourite"><span><i
                                                                  class="ri-heart-3-fill align-middle"></i></span></a>
                                                      <a href="javascript:void(0);"
                                                          class="btn btn-sm btn-icon btn-secondary-light"
                                                          data-bs-toggle="tooltip" data-bs-placement="top"
                                                          aria-label="Featured Book"
                                                          data-bs-original-title="Featured Book"><span><i
                                                                  class="ri-star-fill"></i></span></a>
                                                  </div>
                                              </div>
                                              <div class="popular-tags my-3">
                                                  <a href="javascript:void(0);"
                                                      class="badge rounded-pill bg-primary-transparent">Fantasy</a>
                                                  <a href="javascript:void(0);"
                                                      class="badge rounded-pill bg-secondary-transparent">Adventure</a>
                                              </div>
                                              <div class="d-flex justify-content-between flex-wrap gap-2">
                                                  <div><span class="text-muted">Published On</span> - <span
                                                          class="fw-medium mb-0">September 21, 1937</span>
                                                  </div>
                                                  <a href="javascript:void(0);"
                                                      class="text-primary fw-semibold fs-14">
                                                      Preview <i class="fe fe-arrow-right"></i>
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-xl-4">
                                      <div class="card custom-card shadow-none border">
                                          <div class="card-body">
                                              <div
                                                  class="d-flex align-items-start flex-wrap gap-3 justify-content-between">
                                                  <div class="d-flex align-items-center">
                                                      <div>
                                                          <span
                                                              class="avatar avatar-lg avatar-rounded bg-primary bg-opacity-10 border">
                                                              <img src="{{ asset('') }}/assets/images/media/books/4.jpg"
                                                                  alt="">
                                                          </span>
                                                      </div>
                                                      <div class="ms-2">
                                                          <h6
                                                              class="fw-medium mb-0 d-flex align-items-center">
                                                              <a href="javascript:void(0);">The Big Picture</a></h6>
                                                          <a href="javascript:void(0);">Dan Brown</a>
                                                      </div>
                                                  </div>
                                                  <div class="btn-list">
                                                      <a href="javascript:void(0);"
                                                      class="btn btn-sm btn-icon btn-primary-light"
                                                      data-bs-toggle="tooltip" data-bs-placement="top"
                                                      aria-label="Add to favourite"
                                                      data-bs-original-title="Add to favourite"><span><i
                                                              class="ri-heart-3-fill align-middle"></i></span></a>
                                                  <a href="javascript:void(0);"
                                                      class="btn btn-sm btn-icon btn-secondary-light"
                                                      data-bs-toggle="tooltip" data-bs-placement="top"
                                                      aria-label="Featured Book"
                                                      data-bs-original-title="Featured Book"><span><i
                                                              class="ri-star-fill"></i></span></a>
                                                  </div>
                                              </div>
                                              <div class="popular-tags my-3">
                                                  <a href="javascript:void(0);"
                                                      class="badge rounded-pill bg-primary-transparent">Mystery</a>
                                                  <a href="javascript:void(0);"
                                                      class="badge rounded-pill bg-secondary-transparent">Thriller</a>
                                                  <a href="javascript:void(0);"
                                                      class="badge rounded-pill bg-success-transparent">Conspiracy</a>
                                              </div>
                                              <div class="d-flex justify-content-between flex-wrap gap-2">
                                                  <div><span class="text-muted">Published On</span> - <span
                                                          class="fw-medium mb-0">March 18, 2003</span></div>
                                                  <a href="javascript:void(0);"
                                                      class="text-primary fw-semibold fs-14">
                                                      Preview <i class="fe fe-arrow-right"></i>
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-xl-4">
                                      <div class="card custom-card shadow-none border">
                                          <div class="card-body">
                                              <div
                                                  class="d-flex align-items-start flex-wrap gap-3 justify-content-between">
                                                  <div class="d-flex align-items-center">
                                                      <div>
                                                          <span
                                                              class="avatar avatar-lg avatar-rounded bg-primary bg-opacity-10 border">
                                                              <img src="{{ asset('') }}/assets/images/media/books/5.jpg"
                                                                  alt="">
                                                          </span>
                                                      </div>
                                                      <div class="ms-2">
                                                          <h6
                                                              class="fw-medium mb-0 d-flex align-items-center">
                                                              <a href="javascript:void(0);">Why Evolution Is True</a></h6>
                                                          <a href="javascript:void(0);">Jane Austen</a>
                                                      </div>
                                                  </div>
                                                  <div class="btn-list">
                                                      <a href="javascript:void(0);"
                                                          class="btn btn-sm btn-icon btn-primary-light"
                                                          data-bs-toggle="tooltip" data-bs-placement="top"
                                                          aria-label="Add to favourite"
                                                          data-bs-original-title="Add to favourite"><span><i
                                                                  class="ri-heart-3-fill align-middle"></i></span></a>
                                                      <a href="javascript:void(0);"
                                                          class="btn btn-sm btn-icon btn-secondary-light"
                                                          data-bs-toggle="tooltip" data-bs-placement="top"
                                                          aria-label="Featured Book"
                                                          data-bs-original-title="Featured Book"><span><i
                                                                  class="ri-star-fill"></i></span></a>
                                                  </div>
                                              </div>
                                              <div class="popular-tags my-3">
                                                  <a href="javascript:void(0);"
                                                      class="badge rounded-pill bg-primary-transparent text-primary">Classic</a>
                                                  <a href="javascript:void(0);"
                                                      class="badge rounded-pill bg-secondary-transparent text-secondary">Romance</a>
                                              </div>
                                              <div class="d-flex justify-content-between flex-wrap gap-2">
                                                  <div><span class="text-muted">Published On</span> - <span
                                                          class="fw-medium mb-0">January 28, 1813</span></div>
                                                  <a href="javascript:void(0);"
                                                      class="text-primary fw-semibold fs-14">
                                                      Preview <i class="fe fe-arrow-right"></i>
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-xl-12">
                                      <button class="btn btn-info-light btn-loader mx-auto">
                                          <span class="me-2">Loading</span>
                                          <span class="loading"><i class="ri-loader-4-line fs-16"></i></span>
                                      </button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="tab-pane border-0 p-0" id="search-news" role="tabpanel">
                      <div class="row">
                          <div class="col-xl-6">
                              <div class="card custom-card">
                                  <div class="card-body">
                                  <div class="d-flex gap-3 align-items-center flex-wrap">
                                      <span class="avatar avatar-xxl"><img src="{{ asset('') }}/assets/images/media/media-26.jpg" alt="img"></span>
                                      <div>
                                          <a href="javascript:void(0);" class="stretched-link"></a>
                                          <span class="badge bg-primary-transparent mb-2">Business</span>
                                          <div class="mb-1">
                                              <span class="h6 fw-semibold mb-0">Scientists Discover New
                                                  Species of Glowing Fish in Unexplored Ocean Depths</span>
                                          </div>
                                          <div class="d-flex gap-4 align-items-center">
                                              <span class="d-block fs-13"><i class="ri-shield-user-line text-muted me-1"></i>25,Jan 2024 - 12:45AM</span>
                                              <span class="d-block fs-13"><i class="ri-calendar-line text-muted me-1"></i>25,Jan 2024 - 12:45AM</span>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <div class="card custom-card">
                                  <div class="card-body">
                                  <div class="d-flex gap-3 align-items-center flex-wrap">
                                      <span class="avatar avatar-xxl"><img src="{{ asset('') }}/assets/images/media/media-27.jpg" alt="img"></span>
                                      <div>
                                          <a href="javascript:void(0);" class="stretched-link"></a>
                                          <span class="badge bg-secondary-transparent mb-2">Technical</span>
                                          <div class="mb-1">
                                              <span class="h6 fw-semibold mb-0">Tech Giants Collaborate on
                                                  Revolutionary AI Project for Environmental Conservation</span>
                                          </div>
                                          <div class="d-flex gap-4 align-items-center">
                                              <span class="d-block fs-13"><i class="ri-shield-user-line text-muted me-1"></i>25,Jan 2024 - 12:45AM</span>
                                              <span class="d-block fs-13"><i class="ri-calendar-line text-muted me-1"></i>25,Jan 2024 - 12:45AM</span>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <div class="card custom-card">
                                  <div class="card-body">
                                  <div class="d-flex gap-3 align-items-center flex-wrap">
                                      <span class="avatar avatar-xxl"><img src="{{ asset('') }}/assets/images/media/media-28.jpg" alt="img"></span>
                                      <div>
                                          <a href="javascript:void(0);" class="stretched-link"></a>
                                          <span class="badge bg-success-transparent mb-2">Gaming</span>
                                          <div class="mb-1">
                                              <span class="h6 fw-semibold mb-0">Historic Space Mission:
                                                  Astronauts Successfully Land on Mars</span>
                                          </div>
                                          <div class="d-flex gap-4 align-items-center">
                                              <span class="d-block fs-13"><i class="ri-shield-user-line text-muted me-1"></i>25,Jan 2024 - 12:45AM</span>
                                              <span class="d-block fs-13"><i class="ri-calendar-line text-muted me-1"></i>25,Jan 2024 - 12:45AM</span>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <div class="card custom-card">
                                  <div class="card-body">
                                  <div class="d-flex gap-3 align-items-center flex-wrap">
                                      <span class="avatar avatar-xxl"><img src="{{ asset('') }}/assets/images/media/media-29.jpg" alt="img"></span>
                                      <div>
                                          <a href="javascript:void(0);" class="stretched-link"></a>
                                          <span class="badge bg-info-transparent mb-2">News</span>
                                          <div class="mb-1">
                                              <span class="h6 fw-semibold mb-0">Global Summit Addresses
                                                  Cybersecurity Threats in an Interconnected World</span>
                                          </div>
                                          <div class="d-flex gap-4 align-items-center">
                                              <span class="d-block fs-13"><i class="ri-shield-user-line text-muted me-1"></i>25,Jan 2024 - 12:45AM</span>
                                              <span class="d-block fs-13"><i class="ri-calendar-line text-muted me-1"></i>25,Jan 2024 - 12:45AM</span>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <div class="card custom-card">
                                  <div class="card-body">
                                  <div class="d-flex gap-3 align-items-center flex-wrap">
                                      <span class="avatar avatar-xxl"><img src="{{ asset('') }}/assets/images/media/media-30.jpg" alt="img"></span>
                                      <div>
                                          <a href="javascript:void(0);" class="stretched-link"></a>
                                          <span class="badge bg-warning-transparent mb-2">Cultural</span>
                                          <div class="mb-1">
                                              <span class="h6 fw-semibold mb-0">Cultural Phenomenon:
                                                  Virtual Reality Concerts Take the Music Industry by Storm</span>
                                          </div>
                                          <div class="d-flex gap-4 align-items-center">
                                              <span class="d-block fs-13"><i class="ri-shield-user-line text-muted me-1"></i>25,Jan 2024 - 12:45AM</span>
                                              <span class="d-block fs-13"><i class="ri-calendar-line text-muted me-1"></i>25,Jan 2024 - 12:45AM</span>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <div class="card custom-card">
                                  <div class="card-body">
                                  <div class="d-flex gap-3 align-items-center flex-wrap">
                                      <span class="avatar avatar-xxl"><img src="{{ asset('') }}/assets/images/media/media-31.jpg" alt="img"></span>
                                      <div>
                                          <a href="javascript:void(0);" class="stretched-link"></a>
                                          <span class="badge bg-danger-transparent mb-2">Music</span>
                                          <div class="mb-1">
                                              <span class="h6 fw-semibold mb-0">
                                                  Record-Breaking Heatwave Sweeps Across Europe
                                                  </span>
                                          </div>
                                          <div class="d-flex gap-4 align-items-center">
                                              <span class="d-block fs-13"><i class="ri-shield-user-line text-muted me-1"></i>25,Jan 2024 - 12:45AM</span>
                                              <span class="d-block fs-13"><i class="ri-calendar-line text-muted me-1"></i>25,Jan 2024 - 12:45AM</span>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <div class="card custom-card">
                                  <div class="card-body">
                                  <div class="d-flex gap-3 align-items-center flex-wrap">
                                      <span class="avatar avatar-xxl"><img src="{{ asset('') }}/assets/images/media/media-32.jpg" alt="img"></span>
                                      <div>
                                          <a href="javascript:void(0);" class="stretched-link"></a>
                                          <span class="badge bg-danger-transparent mb-2">Social</span>
                                          <div class="mb-1">
                                              <span class="h6 fw-semibold mb-0">
                                                  New Legislation Aims to Tackle Growing Plastic Waste Crisis
                                                  </span>
                                          </div>
                                          <div class="d-flex gap-4 align-items-center">
                                              <span class="d-block fs-13"><i class="ri-shield-user-line text-muted me-1"></i>25,Jan 2024 - 12:45AM</span>
                                              <span class="d-block fs-13"><i class="ri-calendar-line text-muted me-1"></i>25,Jan 2024 - 12:45AM</span>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <div class="card custom-card">
                                  <div class="card-body">
                                  <div class="d-flex gap-3 align-items-center flex-wrap">
                                      <span class="avatar avatar-xxl"><img src="{{ asset('') }}/assets/images/media/media-33.jpg" alt="img"></span>
                                      <div>
                                          <a href="javascript:void(0);" class="stretched-link"></a>
                                          <span class="badge bg-primary-transparent mb-2">Nature</span>
                                          <div class="mb-1">
                                              <span class="h6 fw-semibold mb-0">
                                                  Global Leaders Gather to Address Rising Geopolitical Tension
                                                  </span>
                                          </div>
                                          <div class="d-flex gap-4 align-items-center">
                                              <span class="d-block fs-13"><i class="ri-shield-user-line text-muted me-1"></i>25,Jan 2024 - 12:45AM</span>
                                              <span class="d-block fs-13"><i class="ri-calendar-line text-muted me-1"></i>25,Jan 2024 - 12:45AM</span>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                      <ul class="pagination justify-content-end">
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
                  </div>
                  <div class="tab-pane border-0 p-0" id="search-videos" role="tabpanel">
                      <div class="card custom-card">
                          <div class="card-body pb-0">
                              <div class="row gy-4">
                                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                      <div class="p-3 border rounded">
                                          <div class="ratio ratio-16x9">
                                              <iframe
                                                  src="https://www.youtube.com/embed/JP_os1DC1MQ?si=qyUJRBl7ZJBhR_P5"
                                                  title="YouTube video player"
                                                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                  allowfullscreen></iframe>
                                          </div>
                                          <div class="p-2 bg-light">
                                              <div class="d-flex align-items-center gap-1">
                                                  <div
                                                      class="figure-caption fs-13 fw-medium text-default text-truncate">
                                                      YNEX - HTML Installation & Usage process</div>
                                              </div>
                                              <a href="https://wcsrm.com/demo/ynex/" target="_blank"
                                                  class="fs-12 link-primary text-decoration-underline">https://wcsrm.com/demo/ynex/</a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                      <div class="p-3 border rounded">
                                          <div class="ratio ratio-16x9">
                                              <iframe
                                                  src="https://www.youtube.com/embed/-lDlbQ7DiCI?si=-GRS_5Dco6Qc5ius"
                                                  title="YouTube video player"
                                                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                  allowfullscreen></iframe>
                                          </div>
                                          <div class="p-2 bg-light">
                                              <div class="d-flex align-items-center gap-1">
                                                  <div
                                                      class="figure-caption fs-13 fw-medium text-default text-truncate">
                                                      Sash - Admin and Dashboard Multipurpose HTML Advanced
                                                      Template</div>
                                              </div>
                                              <a href="https://wcsrm.com/demo/sash/" target="_blank"
                                                  class="fs-12 link-primary text-decoration-underline">https://wcsrm.com/demo/sash/</a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                      <div class="p-3 border rounded">
                                          <div class="ratio ratio-16x9">
                                              <iframe
                                                  src="https://www.youtube.com/embed/HWvHA2FY8Ok?si=Bf-6pyMAcBG-_dR0"
                                                  title="YouTube video player"
                                                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                  allowfullscreen></iframe>
                                          </div>
                                          <div class="p-2 bg-light">
                                              <div class="d-flex align-items-center gap-1">
                                                  <div
                                                      class="figure-caption fs-13 fw-medium text-default text-truncate">
                                                      Valex - Bootstrap 5 Admin & Dashboard HTML Template</div>
                                              </div>
                                              <a href="https://www.wcsrm.com/demo/valex/" target="_blank"
                                                  class="fs-12 link-primary text-decoration-underline">https://www.wcsrm.com/demo/valex/</a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                      <div class="p-3 border rounded">
                                          <div class="ratio ratio-16x9">
                                              <iframe
                                                  src="https://www.youtube.com/embed/Zx1HjMhcQdE?si=Nhbu6XA2PoyAlYhy"
                                                  title="YouTube video player"
                                                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                  allowfullscreen></iframe>
                                          </div>
                                          <div class="p-2 bg-light">
                                              <div class="d-flex align-items-center gap-1">
                                                  <div
                                                      class="figure-caption fs-13 fw-medium text-default text-truncate">
                                                      Azea - Admin & Dashboard Bootstrap 5 HTML5 Template</div>
                                              </div>
                                              <a href="https://wcsrm.com/demo/ynex/" target="_blank"
                                                  class="fs-12 link-primary text-decoration-underline">https://wcsrm.com/demo/azea/</a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                      <div class="p-3 border rounded">
                                          <div class="ratio ratio-16x9">
                                              <iframe
                                                  src="https://www.youtube.com/embed/prSkLfxlFDY?si=IKoJ0AUUYA9-UToN"
                                                  title="YouTube video player"
                                                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                  allowfullscreen></iframe>
                                          </div>
                                          <div class="p-2 bg-light">
                                              <div class="d-flex align-items-center gap-1">
                                                  <div
                                                      class="figure-caption fs-13 fw-medium text-default text-truncate">
                                                      Uhelp - Installation Process - Helpdesk Technical Assistance
                                                      Laravel Support Ticketing System</div>
                                              </div>
                                              <a href="https://wcsrm.com/demo/ynex/" target="_blank"
                                                  class="fs-12 link-primary text-decoration-underline">https://wcsrm.com/demo/ynex/</a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                      <div class="p-3 border rounded">
                                          <div class="ratio ratio-16x9">
                                              <iframe
                                                  src="https://www.youtube.com/embed/bVRW4Li8inE?si=pOpS9ep2Hn3cGL3y"
                                                  title="YouTube video player"
                                                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                  allowfullscreen></iframe>
                                          </div>
                                          <div class="p-2 bg-light">
                                              <div class="d-flex align-items-center gap-1">
                                                  <div
                                                      class="figure-caption fs-13 fw-medium text-default text-truncate">
                                                      Zanex - Bootstrap 5 Admin & Dashboard HTML5 Template</div>
                                              </div>
                                              <a href="https://wcsrm.com/demo/zanex/" target="_blank"
                                                  class="fs-12 link-primary text-decoration-underline">https://wcsrm.com/demo/zanex/</a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                      <div class="p-3 border rounded">
                                          <div class="ratio ratio-16x9">
                                              <iframe
                                                  src="https://www.youtube.com/embed/HyFRnNIovUA?si=F--5ve0s5zfLuZK5"
                                                  title="YouTube video player"
                                                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                  allowfullscreen></iframe>
                                          </div>
                                          <div class="p-2 bg-light">
                                              <div class="d-flex align-items-center gap-1">
                                                  <div
                                                      class="figure-caption fs-13 fw-medium text-default text-truncate">
                                                      Dayone - Bootstrap 5 HRM, Employee & Project Admin Dashboard
                                                      HTML Template</div>
                                              </div>
                                              <a href="https://wcsrm.com/demo/dayone/" target="_blank"
                                                  class="fs-12 link-primary text-decoration-underline">https://wcsrm.com/demo/dayone/</a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                      <div class="p-3 border rounded">
                                          <div class="ratio ratio-16x9">
                                              <iframe
                                                  src="https://www.youtube.com/embed/Yk6xPgb3cfk?si=JmFGOtV5jjFvDCbS"
                                                  title="YouTube video player"
                                                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                  allowfullscreen></iframe>
                                          </div>
                                          <div class="p-2 bg-light">
                                              <div class="d-flex align-items-center gap-1">
                                                  <div
                                                      class="figure-caption fs-13 fw-medium text-default text-truncate">
                                                      Nowa - Admin and Dashboard Multipurpose HTML Advanced
                                                      Template</div>
                                              </div>
                                              <a href="https://wcsrm.com/demo/nowa/" target="_blank"
                                                  class="fs-12 link-primary text-decoration-underline">https://wcsrm.com/demo/nowa/</a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-xl-12 my-4">
                                      <button class="btn btn-info-light btn-loader mx-auto">
                                          <span class="me-2">Loading</span>
                                          <span class="loading"><i class="ri-loader-4-line fs-16"></i></span>
                                      </button>
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