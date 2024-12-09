@php
use App\Helpers\RouteHelper;
@endphp

<!-- Start::app-sidebar -->
<aside class="app-sidebar sticky" id="sidebar">

  <!-- Start::main-sidebar-header -->
  <div class="main-sidebar-header">
		<a href="{{ route('sales') }}" class="header-logo">
			<img src="{{ asset('assets/images/brand-logos/logo-ligal.png') }}" alt="logo" class="desktop-logo">
			<img src="{{ asset('assets/images/brand-logos/logo-ligal-sm.png') }}" alt="logo" class="toggle-dark">
			<img src="{{ asset('assets/images/brand-logos/logo-ligal.png') }}" alt="logo" class="desktop-dark">
			<img src="{{ asset('assets/images/brand-logos/logo-ligal-sm.png') }}" alt="logo" class="toggle-logo">
		</a>
  </div>
  <!-- End::main-sidebar-header -->

  <!-- Start::main-sidebar -->
  <div class="main-sidebar" id="sidebar-scroll">

      <!-- Start::nav -->
      <nav class="main-menu-container nav nav-pills flex-column sub-open">
          <div class="slide-left" id="slide-left">
              <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
          </div>
          <ul class="main-menu">
              <!-- Start::slide__category -->
              <li class="slide__category"><span class="category-name">Dashboards</span></li>
              <!-- End::slide__category -->

              <!-- Start::slide -->

              <li class="slide has-sub {{ request()->routeIs(RouteHelper::getDashboardRouteLists()) ? 'open' : '' }}">
                  <a href="javascript:void(0);" class="side-menu__item {{ request()->routeIs(RouteHelper::getDashboardRouteLists()) ? 'active' : '' }}">
                      <i class="ri-arrow-right-s-line side-menu__angle"></i>
                      <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M104,216V152h48v64h64V120a8,8,0,0,0-2.34-5.66l-80-80a8,8,0,0,0-11.32,0l-80,80A8,8,0,0,0,40,120v96Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                      <span class="side-menu__label">Dashboards</span>
                  </a>
                  <ul class="slide-menu child1" style="{{ request()->routeIs(RouteHelper::getDashboardRouteLists()) ? 'display:block' : '' }}">
                      <li class="slide side-menu__label1">
                          <a href="javascript:void(0)">Dashboards</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('sales') }}" class="side-menu__item {{ request()->routeIs('sales') ? 'active' : '' }}">Sales</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('analytics') }}" class="side-menu__item {{ request()->routeIs('analytics') ? 'active' : '' }}">Analytics</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('ecommerce') }}" class="side-menu__item {{ request()->routeIs('ecommerce') ? 'active' : '' }}">Ecommerce</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('crm') }}" class="side-menu__item {{ request()->routeIs('crm') ? 'active' : '' }}">CRM</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('crypto') }}" class="side-menu__item {{ request()->routeIs('crypto') ? 'active' : '' }}">Crypto</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('nft') }}" class="side-menu__item {{ request()->routeIs('nft') ? 'active' : '' }}">NFT</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('projects') }}" class="side-menu__item {{ request()->routeIs('projects') ? 'active' : '' }}">Projects</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('jobs') }}" class="side-menu__item {{ request()->routeIs('jobs') ? 'active' : '' }}">Jobs</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('hrm') }}" class="side-menu__item {{ request()->routeIs('hrm') ? 'active' : '' }}">HRM</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('courses') }}" class="side-menu__item {{ request()->routeIs('courses') ? 'active' : '' }}">Courses</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('stocks') }}" class="side-menu__item {{ request()->routeIs('stocks') ? 'active' : '' }}">Stocks</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('medical') }}" class="side-menu__item {{ request()->routeIs('medical') ? 'active' : '' }}">Medical</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('pos-system') }}" class="side-menu__item {{ request()->routeIs('pos-system') ? 'active' : '' }}">POS System</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('podcast') }}" class="side-menu__item {{ request()->routeIs('podcast') ? 'active' : '' }}">Podcast</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('school') }}" class="side-menu__item {{ request()->routeIs('school') ? 'active' : '' }}">School</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('social-media') }}" class="side-menu__item {{ request()->routeIs('social-media') ? 'active' : '' }}">Social Media</a>
                      </li>
                  </ul>
              </li>
              <!-- End::slide -->

              <!-- Start::slide__category -->
              <li class="slide__category"><span class="category-name">Web Apps</span></li>
              <!-- End::slide__category -->

              <!-- Start::slide -->
              <li class="slide has-sub {{ request()->routeIs(RouteHelper::getAppsRouteLists()) ? 'open' : '' }}">
                  <a href="javascript:void(0);" class="side-menu__item {{ request()->routeIs(RouteHelper::getAppsRouteLists()) ? 'active' : '' }}">
                      <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><rect x="48" y="48" width="64" height="64" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="144" y="48" width="64" height="64" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="48" y="144" width="64" height="64" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="144" y="144" width="64" height="64" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                      <span class="side-menu__label">Apps</span>
                      <i class="ri-arrow-right-s-line side-menu__angle"></i>
                  </a>
                  <ul class="slide-menu child1" style="{{ request()->routeIs(RouteHelper::getAppsRouteLists()) ? 'display:block' : '' }}">
                      <li class="slide side-menu__label1">
                          <a href="javascript:void(0)">Apps</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('full-calendar') }}" class="side-menu__item {{ request()->routeIs('full-calendar') ? 'active' : '' }}">Full Calendar</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('gallery') }}" class="side-menu__item {{ request()->routeIs('gallery') ? 'active' : '' }}">Gallery</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('sweet-alerts') }}" class="side-menu__item {{ request()->routeIs('sweet-alerts') ? 'active' : '' }}">Sweet Alerts</a>
                      </li>
                      <li class="slide has-sub {{ request()->routeIs(RouteHelper::getEcommerceRouteLists()) ? 'open' : '' }}">
                          <a href="javascript:void(0);" class="side-menu__item {{ request()->routeIs(RouteHelper::getEcommerceRouteLists()) ? 'active' : '' }}">Ecommerce
                              <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                          <ul class="slide-menu child2" style="{{ request()->routeIs(RouteHelper::getEcommerceRouteLists()) ? 'display:block' : '' }}">
                              <li class="slide">
                                  <a href="{{ route('ecommerce-addproduct') }}" class="side-menu__item {{ request()->routeIs('ecommerce-addproduct') ? 'active' : '' }}">Add Product</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('ecommerce-cart') }}" class="side-menu__item {{ request()->routeIs('ecommerce-cart') ? 'active' : '' }}">Cart</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('ecommerce-checkout') }}" class="side-menu__item {{ request()->routeIs('ecommerce-checkout') ? 'active' : '' }}">Checkout</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('ecommerce-editproduct') }}" class="side-menu__item {{ request()->routeIs('ecommerce-editproduct') ? 'active' : '' }}">Edit Product</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('ecommerce-orderdetail') }}" class="side-menu__item {{ request()->routeIs('ecommerce-orderdetail') ? 'active' : '' }}">Order Details</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('ecommerce-orders') }}" class="side-menu__item {{ request()->routeIs('ecommerce-orders') ? 'active' : '' }}">Orders</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('ecommerce-products') }}" class="side-menu__item {{ request()->routeIs('ecommerce-products') ? 'active' : '' }}">Products</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('ecommerce-productsdetails') }}" class="side-menu__item {{ request()->routeIs('ecommerce-productsdetails') ? 'active' : '' }}">Products Details</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('ecommerce-productslists') }}" class="side-menu__item {{ request()->routeIs('ecommerce-productslists') ? 'active' : '' }}">Products List</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('ecommerce-wishlists') }}" class="side-menu__item {{ request()->routeIs('ecommerce-wishlists') ? 'active' : '' }}">WishList</a>
                              </li>
                          </ul>
                      </li>
                      <li class="slide has-sub {{ request()->routeIs(RouteHelper::getProjectsRouteLists()) ? 'open' : '' }}">
                          <a href="javascript:void(0);" class="side-menu__item {{ request()->routeIs(RouteHelper::getProjectsRouteLists()) ? 'active' : '' }}">Projects
                              <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                          <ul class="slide-menu child2" style="{{ request()->routeIs(RouteHelper::getProjectsRouteLists()) ? 'display:block' : '' }}">
                              <li class="slide">
                                  <a href="{{ route('projects-lists') }}" class="side-menu__item {{ request()->routeIs('projects-lists') ? 'active' : '' }}">Projects List</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('projects-overview') }}" class="side-menu__item {{ request()->routeIs('projects-overview') ? 'active' : '' }}">Project Overview</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('projects-create') }}" class="side-menu__item {{ request()->routeIs('projects-create') ? 'active' : '' }}">Create Project</a>
                              </li>
                          </ul>
                      </li>
                      <li class="slide has-sub {{ request()->routeIs(RouteHelper::getTaskRouteLists()) ? 'open' : '' }}">
                          <a href="javascript:void(0);" class="side-menu__item {{ request()->routeIs(RouteHelper::getTaskRouteLists()) ? 'active' : '' }}">Task
                              <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                          <ul class="slide-menu child2" style="{{ request()->routeIs(RouteHelper::getTaskRouteLists()) ? 'display:block' : '' }}">
                              <li class="slide">
                                  <a href="{{ route('task-kanban-board') }}" class="side-menu__item {{ request()->routeIs('task-kanban-board') ? 'active' : '' }}">Kanban Board</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('task-list-view') }}" class="side-menu__item {{ request()->routeIs('task-list-view') ? 'active' : '' }}">List View</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('task-details') }}" class="side-menu__item {{ request()->routeIs('task-details') ? 'active' : '' }}">Task Details</a>
                              </li>
                          </ul>
                      </li>
                      <li class="slide has-sub {{ request()->routeIs(RouteHelper::getJobsRouteLists()) ? 'open' : '' }}">
                          <a href="javascript:void(0);" class="side-menu__item {{ request()->routeIs(RouteHelper::getJobsRouteLists()) ? 'active' : '' }}">Jobs
                              <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                          <ul class="slide-menu child2" style="{{ request()->routeIs(RouteHelper::getJobsRouteLists()) ? 'display:block' : '' }}">
                              <li class="slide">
                                  <a href="{{ route('jobs-details') }}" class="side-menu__item {{ request()->routeIs('jobs-details') ? 'active' : '' }}">Job Details</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('jobs-search-company') }}" class="side-menu__item {{ request()->routeIs('jobs-search-company') ? 'active' : '' }}">Search Company</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('jobs-search-jobs') }}" class="side-menu__item {{ request()->routeIs('jobs-search-jobs') ? 'active' : '' }}">Search Jobs</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('jobs-post') }}" class="side-menu__item {{ request()->routeIs('jobs-post') ? 'active' : '' }}">Job Post</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('jobs-lists') }}" class="side-menu__item {{ request()->routeIs('jobs-lists') ? 'active' : '' }}">Jobs List</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('jobs-search-candidate') }}" class="side-menu__item {{ request()->routeIs('jobs-search-candidate') ? 'active' : '' }}">Search Candidate</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('jobs-candidate-details') }}" class="side-menu__item {{ request()->routeIs('jobs-candidate-details') ? 'active' : '' }}">Candidate Details</a>
                              </li>
                          </ul>
                      </li>
                      <li class="slide has-sub {{ request()->routeIs(RouteHelper::getNftRouteLists()) ? 'open' : '' }}">
                          <a href="javascript:void(0);" class="side-menu__item {{ request()->routeIs(RouteHelper::getNftRouteLists()) ? 'active' : '' }}">NFT
                              <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                          <ul class="slide-menu child2" style="{{ request()->routeIs(RouteHelper::getNftRouteLists()) ? 'display:block' : '' }}">
                              <li class="slide">
                                  <a href="{{ route('nft-marketplace') }}" class="side-menu__item {{ request()->routeIs('nft-marketplace') ? 'active' : '' }}">Marketplace</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('nft-details') }}" class="side-menu__item {{ request()->routeIs('nft-details') ? 'active' : '' }}">NFT Details</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('nft-create') }}" class="side-menu__item {{ request()->routeIs('nft-create') ? 'active' : '' }}">Create NFT</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('nft-wallet-integration') }}" class="side-menu__item {{ request()->routeIs('nft-wallet-integration') ? 'active' : '' }}">Wallet Integration</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('nft-live-auction') }}" class="side-menu__item {{ request()->routeIs('nft-live-auction') ? 'active' : '' }}">Live Auction</a>
                              </li>
                          </ul>
                      </li>
                      <li class="slide has-sub {{ request()->routeIs(RouteHelper::getCrmRouteLists()) ? 'open' : '' }}">
                          <a href="javascript:void(0);" class="side-menu__item {{ request()->routeIs(RouteHelper::getCrmRouteLists()) ? 'active' : '' }}">CRM
                              <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                          <ul class="slide-menu child2" style="{{ request()->routeIs(RouteHelper::getCrmRouteLists()) ? 'display:block' : '' }}">
                              <li class="slide">
                                  <a href="{{ route('crm-contacts') }}" class="side-menu__item {{ request()->routeIs('crm-contacts') ? 'active' : '' }}">Contacts</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('crm-companies') }}" class="side-menu__item {{ request()->routeIs('crm-companies') ? 'active' : '' }}">Companies</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('crm-deals') }}" class="side-menu__item {{ request()->routeIs('crm-deals') ? 'active' : '' }}">Deals</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('crm-leads') }}" class="side-menu__item {{ request()->routeIs('crm-leads') ? 'active' : '' }}">Leads</a>
                              </li>
                          </ul>
                      </li>
                      <li class="slide has-sub {{ request()->routeIs(RouteHelper::getCryptoRouteLists()) ? 'open' : '' }}">
                          <a href="javascript:void(0);" class="side-menu__item {{ request()->routeIs(RouteHelper::getCryptoRouteLists()) ? 'active' : '' }}">Crypto
                              <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                          <ul class="slide-menu child2" style="{{ request()->routeIs(RouteHelper::getCryptoRouteLists()) ? 'display:block' : '' }}">
                              <li class="slide">
                                  <a href="{{ route('crypto-transactions') }}" class="side-menu__item {{ request()->routeIs('crypto-transactions') ? 'active' : '' }}">Transactions</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('crypto-currency-exchange') }}" class="side-menu__item {{ request()->routeIs('crypto-currency-exchange') ? 'active' : '' }}">Currency Exchange</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('crypto-buy-sell') }}" class="side-menu__item {{ request()->routeIs('crypto-buy-sell') ? 'active' : '' }}">Buy & Sell</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('crypto-marketcap') }}" class="side-menu__item {{ request()->routeIs('crypto-marketcap') ? 'active' : '' }}">Marketcap</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('crypto-wallet') }}" class="side-menu__item {{ request()->routeIs('crypto-wallet') ? 'active' : '' }}">Wallet</a>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </li>
              <!-- End::slide -->

              <!-- Start::slide -->
              <li class="slide has-sub">
                  <a href="javascript:void(0);" class="side-menu__item">
                      <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polyline points="32 176 128 232 224 176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="32 128 128 184 224 128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polygon points="32 80 128 136 224 80 128 24 32 80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                      <span class="side-menu__label">Nested Menu</span>
                      <i class="ri-arrow-right-s-line side-menu__angle"></i>
                  </a>
                  <ul class="slide-menu child1">
                      <li class="slide side-menu__label1">
                          <a href="javascript:void(0)">Nested Menu</a>
                      </li>
                      <li class="slide">
                          <a href="javascript:void(0);" class="side-menu__item">Nested-1</a>
                      </li>
                      <li class="slide has-sub">
                          <a href="javascript:void(0);" class="side-menu__item">Nested-2
                              <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                          <ul class="slide-menu child2">
                              <li class="slide">
                                  <a href="javascript:void(0);" class="side-menu__item">Nested-2.1</a>
                              </li>
                              <li class="slide has-sub">
                                  <a href="javascript:void(0);" class="side-menu__item">Nested-2.2
                                      <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                                  <ul class="slide-menu child3">
                                      <li class="slide">
                                          <a href="javascript:void(0);" class="side-menu__item">Nested-2.2.1</a>
                                      </li>
                                      <li class="slide">
                                          <a href="javascript:void(0);" class="side-menu__item">Nested-2.2.2</a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </li>
              <!-- End::slide -->

              <!-- Start::slide__category -->
              <li class="slide__category"><span class="category-name">Crafted</span></li>
              <!-- End::slide__category -->

              <!-- Start::slide -->
              <li class="slide has-sub">
                  <a href="javascript:void(0);" class="side-menu__item">
                      <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><rect x="40" y="88" width="176" height="128" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="128" cy="152" r="12"/><path d="M88,88V56a40,40,0,0,1,80,0V88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                      <span class="side-menu__label">Authentication</span>
                      <i class="ri-arrow-right-s-line side-menu__angle"></i>
                  </a>
                  <ul class="slide-menu child1">
                      <li class="slide side-menu__label1">
                          <a href="javascript:void(0)">Authentication</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('authentication-coming-soon') }}" class="side-menu__item">Coming Soon</a>
                      </li>
                      <li class="slide has-sub">
                          <a href="javascript:void(0);" class="side-menu__item">Create Password
                              <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                          <ul class="slide-menu child2">
                              <li class="slide">
                                  <a href="{{ route('authentication-create-password-basic') }}" class="side-menu__item">Basic</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('authentication-create-password-cover') }}" class="side-menu__item">Cover</a>
                              </li>
                          </ul>
                      </li>      
                      <li class="slide has-sub">
                          <a href="javascript:void(0);" class="side-menu__item">Lock Screen
                              <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                          <ul class="slide-menu child2">
                              <li class="slide">
                                  <a href="{{ route('authentication-lock-screen-basic') }}" class="side-menu__item">Basic</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('authentication-lock-screen-cover') }}" class="side-menu__item">Cover</a>
                              </li>
                          </ul>
                      </li>     
                      <li class="slide has-sub">
                          <a href="javascript:void(0);" class="side-menu__item">Reset Password
                              <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                          <ul class="slide-menu child2">
                              <li class="slide">
                                  <a href="{{ route('authentication-reset-password-basic') }}" class="side-menu__item">Basic</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('authentication-reset-password-cover') }}" class="side-menu__item">Cover</a>
                              </li>
                          </ul>
                      </li>     
                      <li class="slide has-sub">
                          <a href="javascript:void(0);" class="side-menu__item">Sign Up
                              <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                          <ul class="slide-menu child2">
                              <li class="slide">
                                  <a href="{{ route('authentication-sign-up-basic') }}" class="side-menu__item">Basic</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('authentication-sign-up-cover') }}" class="side-menu__item">Cover</a>
                              </li>
                          </ul>
                      </li>  
                      <li class="slide has-sub">
                          <a href="javascript:void(0);" class="side-menu__item">Sign In
                              <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                          <ul class="slide-menu child2">
                              <li class="slide">
                                  <a href="{{ route('authentication-sign-in-basic') }}" class="side-menu__item">Basic</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('authentication-sign-in-cover') }}" class="side-menu__item">Cover</a>
                              </li>
                          </ul>
                      </li> 
                      <li class="slide has-sub">
                          <a href="javascript:void(0);" class="side-menu__item">Two Step Verification
                              <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                          <ul class="slide-menu child2">
                              <li class="slide">
                                  <a href="{{ route('authentication-two-step-verification-basic') }}" class="side-menu__item">Basic</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('authentication-two-step-verification-cover') }}" class="side-menu__item">Cover</a>
                              </li>
                          </ul>
                      </li> 
                      <li class="slide">
                          <a href="{{ route('authentication-maintenance') }}" class="side-menu__item">Under Maintenance</a>
                      </li>
                  </ul>
              </li>
              <!-- End::slide -->

              <!-- Start::slide -->
              <li class="slide has-sub">
                  <a href="javascript:void(0);" class="side-menu__item">
                      <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="128" cy="128" r="96" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="16"/><line x1="128" y1="136" x2="128" y2="80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="128" cy="172" r="12"/></svg>
                      <span class="side-menu__label">Error</span>
                      <i class="ri-arrow-right-s-line side-menu__angle"></i>
                  </a>
                  <ul class="slide-menu child1">
                      <li class="slide side-menu__label1">
                          <a href="javascript:void(0)">Error</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('error-401') }}" class="side-menu__item">401 - Error</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('error-404') }}" class="side-menu__item">404 - Error</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('error-500') }}" class="side-menu__item">500 - Error</a>
                      </li>
                  </ul>
              </li>
              <!-- End::slide -->

              <!-- Start::slide -->
              <li class="slide has-sub {{ request()->routeIs(RouteHelper::getPagesRouteLists()) ? 'open' : '' }}">
                  <a href="javascript:void(0);" class="side-menu__item {{ request()->routeIs(RouteHelper::getPagesRouteLists()) ? 'active' : '' }}">
                      <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><rect x="32" y="48" width="192" height="160" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="80" y1="96" x2="176" y2="96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="80" y1="128" x2="176" y2="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="80" y1="160" x2="176" y2="160" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                      <span class="side-menu__label">Pages</span>
                      <i class="ri-arrow-right-s-line side-menu__angle"></i>
                  </a>
                  <ul class="slide-menu child1 pages-ul" style="{{ request()->routeIs(RouteHelper::getPagesRouteLists()) ? 'display:block' : '' }}">
                      <li class="slide side-menu__label1">
                          <a href="javascript:void(0)">Pages</a>
                      </li>
                      <li class="slide has-sub {{ request()->routeIs(RouteHelper::getBlogsRouteLists()) ? 'open' : '' }}">
                          <a href="javascript:void(0);" class="side-menu__item {{ request()->routeIs(RouteHelper::getBlogsRouteLists()) ? 'active' : '' }}">Blog
                              <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                          <ul class="slide-menu child2" style="{{ request()->routeIs(RouteHelper::getBlogsRouteLists()) ? 'display:block' : '' }}">
                              <li class="slide">
                                  <a href="{{ route('pages-blog-index') }}" class="side-menu__item {{ request()->routeIs('pages-blog-index') ? 'active' : '' }}">Blog</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('pages-blog-details') }}" class="side-menu__item {{ request()->routeIs('pages-blog-details') ? 'active' : '' }}">Blog Details</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('pages-blog-create') }}" class="side-menu__item {{ request()->routeIs('pages-blog-create') ? 'active' : '' }}">Create Blog</a>
                              </li>
                          </ul>
                      </li>
                      <li class="slide">
                          <a href="{{ route('pages-chat') }}" class="side-menu__item {{ request()->routeIs('pages-chat') ? 'active' : '' }}">Chat</a>
                      </li>
                      <li class="slide has-sub {{ request()->routeIs(RouteHelper::getEmailRouteLists()) ? 'open' : '' }}">
                          <a href="javascript:void(0);" class="side-menu__item {{ request()->routeIs(RouteHelper::getEmailRouteLists()) ? 'active' : '' }}">Email
                              <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                          <ul class="slide-menu child2" style="{{ request()->routeIs(RouteHelper::getEmailRouteLists()) ? 'display:block' : '' }}">
                              <li class="slide">
                                  <a href="{{ route('pages-email-mail-app') }}" class="side-menu__item {{ request()->routeIs('pages-email-mail-app') ? 'active' : '' }}">Mail App</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('pages-email-mail-settings') }}" class="side-menu__item {{ request()->routeIs('pages-email-mail-settings') ? 'active' : '' }}">Mail Settings</a>
                              </li>
                          </ul>
                      </li>
                      <li class="slide">
                          <a href="{{ route('pages-empty') }}" class="side-menu__item {{ request()->routeIs('pages-empty') ? 'active' : '' }}">Empty</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('pages-faq') }}" class="side-menu__item {{ request()->routeIs('pages-faq') ? 'active' : '' }}">FAQ's</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('pages-file-manager') }}" class="side-menu__item {{ request()->routeIs('pages-file-manager') ? 'active' : '' }}">File Manager</a>
                      </li>
                      <li class="slide has-sub {{ request()->routeIs(RouteHelper::getInvoiceRouteLists()) ? 'open' : '' }}">
                          <a href="javascript:void(0);" class="side-menu__item {{ request()->routeIs(RouteHelper::getInvoiceRouteLists()) ? 'active' : '' }}">Invoice
                              <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                          <ul class="slide-menu child2" style="{{ request()->routeIs(RouteHelper::getInvoiceRouteLists()) ? 'dipslay:block' : '' }}">
                              <li class="slide">
                                  <a href="{{ route('pages-invoice-create') }}" class="side-menu__item {{ request()->routeIs('pages-invoice-create') ? 'active' : '' }}">Create Invoice</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('pages-invoice-details') }}" class="side-menu__item {{ request()->routeIs('pages-invoice-details') ? 'active' : '' }}">Invoice Details</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('pages-invoice-list') }}" class="side-menu__item {{ request()->routeIs('pages-invoice-list') ? 'active' : '' }}">Invoice List</a>
                              </li>
                          </ul>
                      </li>
                      <li class="slide">
                          <a href="{{ route('pages-pricing') }}" class="side-menu__item {{ request()->routeIs('pages-pricing') ? 'active' : '' }}">Pricing</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('pages-profile') }}" class="side-menu__item {{ request()->routeIs('pages-profile') ? 'active' : '' }}">Profile</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('pages-profile-settings') }}" class="side-menu__item {{ request()->routeIs('pages-profile-settings') ? 'active' : '' }}">Profile Settings</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('pages-landing-page') }}" class="side-menu__item {{ request()->routeIs('pages-landing-page') ? 'active' : '' }}">Landing Page</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('pages-reviews') }}" class="side-menu__item {{ request()->routeIs('pages-reviews') ? 'active' : '' }}">Reviews</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('pages-search') }}" class="side-menu__item {{ request()->routeIs('pages-search') ? 'active' : '' }}">Search</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('pages-team') }}" class="side-menu__item {{ request()->routeIs('pages-team') ? 'active' : '' }}">Team</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('pages-terms-conditions') }}" class="side-menu__item {{ request()->routeIs('pages-terms-conditions') ? 'active' : '' }}">Terms & Conditions</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('pages-timeline') }}" class="side-menu__item {{ request()->routeIs('pages-timeline') ? 'active' : '' }}">Timeline</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('pages-todolist') }}" class="side-menu__item {{ request()->routeIs('pages-todolist') ? 'active' : '' }}">To Do List</a>
                      </li>
                  </ul>
              </li>
              <!-- End::slide -->

              <!-- Start::slide__category -->
              <li class="slide__category"><span class="category-name">Modules</span></li>
              <!-- End::slide__category -->

              <!-- Start::slide -->
              <li class="slide has-sub  {{ request()->routeIs(RouteHelper::getFormsRouteLists()) ? 'open' : '' }}">
                  <a href="javascript:void(0);" class="side-menu__item  {{ request()->routeIs(RouteHelper::getFormsRouteLists()) ? 'active' : '' }}">
                      <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M32,216V56a8,8,0,0,1,8-8H216a8,8,0,0,1,8,8V216l-32-16-32,16-32-16L96,216,64,200Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="144" y1="112" x2="192" y2="112" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="144" y1="144" x2="192" y2="144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="64" y="96" width="48" height="64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                      <span class="side-menu__label">Forms</span>
                      <i class="ri-arrow-right-s-line side-menu__angle"></i>
                  </a>
                  <ul class="slide-menu child1" style="{{ request()->routeIs(RouteHelper::getFormsRouteLists()) ? 'display:block' : ''}}">
                      <li class="slide side-menu__label1">
                          <a href="javascript:void(0)">Forms</a>
                      </li>
                      <li class="slide">
                          <a href="{{ route('forms-advanced') }}" class="side-menu__item {{ request()->routeIs('forms-advanced') ? 'active' : ''}}">Form Advanced</a>
                      </li>
                      <li class="slide has-sub">
                          <a href="javascript:void(0);" class="side-menu__item">Form Elements
                              <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                          <ul class="slide-menu child2">
                              <li class="slide">
                                  <a href="{{ route('forms-elements-inputs') }}" class="side-menu__item {{ request()->routeIs('forms-elements-input') ? 'active' : '' }}">Inputs</a>
                              </li>
                              <li class="slide">
                                  <a href="{{ route('forms-elements-checksandradio') }}" class="side-menu__item {{ request()->routeIs('forms-elements-checksandradio') ? 'active' : '' }}">Checks & Radios</a>
                              </li>
                              <li class="slide">
                                  <a href="form_input_group.html" class="side-menu__item">Input Group</a>
                              </li>
                              <li class="slide">
                                  <a href="form_select.html" class="side-menu__item">Form Select</a>
                              </li>
                              <li class="slide">
                                  <a href="form_range.html" class="side-menu__item">Range Slider</a>
                              </li>
                              <li class="slide">
                                  <a href="form_input_masks.html" class="side-menu__item">Input Masks</a>
                              </li>
                              <li class="slide">
                                  <a href="form_file_uploads.html" class="side-menu__item">File Uploads</a>
                              </li>
                              <li class="slide">
                                  <a href="form_dateTime_pickers.html" class="side-menu__item">Date,Time Picker</a>
                              </li>
                              <li class="slide">
                                  <a href="form_color_pickers.html" class="side-menu__item">Color Pickers</a>
                              </li>
                          </ul>
                      </li>
                      <li class="slide">
                          <a href="floating_labels.html" class="side-menu__item">Floating Labels</a>
                      </li>
                      <li class="slide">
                          <a href="form_layout.html" class="side-menu__item">Form Layouts</a>
                      </li>
                      <li class="slide">
                          <a href="form_wizards.html" class="side-menu__item">Form Wizards</a>
                      </li>
                      <li class="slide">
                          <a href="quill_editor.html" class="side-menu__item">Quill Editor</a>
                      </li>
                      <li class="slide">
                          <a href="form_validation.html" class="side-menu__item">Validation</a>
                      </li>
                      <li class="slide">
                          <a href="form_select2.html" class="side-menu__item">Select2</a>
                      </li>
                  </ul>
              </li>
              <!-- End::slide -->

              <!-- Start::slide -->
              <li class="slide has-sub">
                  <a href="javascript:void(0);" class="side-menu__item">
                      <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><rect x="24" y="56" width="208" height="40" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M216,96v96a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="104" y1="136" x2="152" y2="136" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                      <span class="side-menu__label">Ui Elements</span>
                      <i class="ri-arrow-right-s-line side-menu__angle"></i>
                  </a>
                  <ul class="slide-menu child1 mega-menu">
                      <li class="slide side-menu__label1">
                          <a href="javascript:void(0)">Ui Elements</a>
                      </li>
                      <li class="slide">
                          <a href="alerts.html" class="side-menu__item">Alerts</a>
                      </li>
                      <li class="slide">
                          <a href="badge.html" class="side-menu__item">Badge</a>
                      </li>
                      <li class="slide">
                          <a href="breadcrumb.html" class="side-menu__item">Breadcrumb</a>
                      </li>
                      <li class="slide">
                          <a href="buttons.html" class="side-menu__item">Buttons</a>
                      </li>
                      <li class="slide">
                          <a href="buttongroup.html" class="side-menu__item">Button Group</a>
                      </li>
                      <li class="slide">
                          <a href="cards.html" class="side-menu__item">Cards</a>
                      </li>
                      <li class="slide">
                          <a href="dropdowns.html" class="side-menu__item">Dropdowns</a>
                      </li>
                      <li class="slide">
                          <a href="images_figures.html" class="side-menu__item">Images & Figures</a>
                      </li>
                      <li class="slide">
                          <a href="links_interactions.html" class="side-menu__item">Links & Interactions</a>
                      </li>
                      <li class="slide">
                          <a href="listgroup.html" class="side-menu__item">List Group</a>
                      </li>
                      <li class="slide">
                          <a href="navs_tabs.html" class="side-menu__item">Navs & Tabs</a>
                      </li>
                      <li class="slide">
                          <a href="object-fit.html" class="side-menu__item">Object Fit</a>
                      </li>
                      <li class="slide">
                          <a href="pagination.html" class="side-menu__item">Pagination</a>
                      </li>
                      <li class="slide">
                          <a href="popovers.html" class="side-menu__item">Popovers</a>
                      </li>
                      <li class="slide">
                          <a href="progress.html" class="side-menu__item">Progress</a>
                      </li>
                      <li class="slide">
                          <a href="spinners.html" class="side-menu__item">Spinners</a>
                      </li>
                      <li class="slide">
                          <a href="toasts.html" class="side-menu__item">Toasts</a>
                      </li>
                      <li class="slide">
                          <a href="tooltips.html" class="side-menu__item">Tooltips</a>
                      </li>
                      <li class="slide">
                          <a href="typography.html" class="side-menu__item">Typography</a>
                      </li>
                  </ul>
              </li>
              <!-- End::slide -->

              <!-- Start::slide -->
              <li class="slide has-sub">
                  <a href="javascript:void(0);" class="side-menu__item">
                      <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M40.49,205.52,93,61.14a7.79,7.79,0,0,1,12.84-2.85l91.88,91.88A7.79,7.79,0,0,1,194.86,163L50.48,215.51A7.79,7.79,0,0,1,40.49,205.52Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M168,72s0-24,24-24,24-24,24-24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="144" y1="16" x2="144" y2="40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="216" y1="112" x2="232" y2="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="216" y1="80" x2="240" y2="72" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="78.09" y1="102.09" x2="153.91" y2="177.91" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="101.11" y1="197.11" x2="58.89" y2="154.89" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                      <span class="side-menu__label">Advanced UI</span>
                      <i class="ri-arrow-right-s-line side-menu__angle"></i>
                  </a>
                  <ul class="slide-menu child1">
                      <li class="slide side-menu__label1">
                          <a href="javascript:void(0)">Advanced Ui</a>
                      </li>
                      <li class="slide">
                          <a href="accordions_collpase.html" class="side-menu__item">Accordions & Collapse</a>
                      </li>
                      <li class="slide">
                          <a href="carousel.html" class="side-menu__item">Carousel</a>
                      </li>
                      <li class="slide">
                          <a href="draggable-cards.html" class="side-menu__item">Draggable Cards</a>
                      </li>
                      <li class="slide">
                          <a href="media-player.html" class="side-menu__item">Media Player</a>
                      </li>
                      <li class="slide">
                          <a href="modals_closes.html" class="side-menu__item">Modals & Closes</a>
                      </li>
                      <li class="slide">
                          <a href="navbar.html" class="side-menu__item">Navbar</a>
                      </li>
                      <li class="slide">
                          <a href="offcanvas.html" class="side-menu__item">Offcanvas</a>
                      </li>
                      <li class="slide">
                          <a href="placeholders.html" class="side-menu__item">Placeholders</a>
                      </li>
                      <li class="slide">
                          <a href="ratings.html" class="side-menu__item">Ratings</a>
                      </li>
                      <li class="slide">
                          <a href="ribbons.html" class="side-menu__item">Ribbons</a>
                      </li>
                      <li class="slide">
                          <a href="scrollspy.html" class="side-menu__item">Scrollspy</a>
                      </li>
                      <li class="slide">
                          <a href="sortable-list.html" class="side-menu__item">Sortable JS</a>
                      </li>
                      <li class="slide">
                          <a href="swiperjs.html" class="side-menu__item">Swiper JS</a>
                      </li>
                      <li class="slide">
                          <a href="tour.html" class="side-menu__item">Tour</a>
                      </li>
                      <li class="slide">
                          <a href="treeview.html" class="side-menu__item">Tree View</a>
                      </li>
                  </ul>
              </li>
              <!-- End::slide -->

              <!-- Start::slide -->
              <li class="slide has-sub">
                  <a href="javascript:void(0);" class="side-menu__item">
                      <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="128" cy="96" r="80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="128" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="176 160 176 240 127.99 216 80 240 80 160.01" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                      <span class="side-menu__label">Utilities</span>
                      <i class="ri-arrow-right-s-line side-menu__angle"></i>
                  </a>
                  <ul class="slide-menu child1">
                      <li class="slide side-menu__label1">
                          <a href="javascript:void(0)">Utilities</a>
                      </li>
                      <li class="slide">
                          <a href="avatars.html" class="side-menu__item">Avatars</a>
                      </li>
                      <li class="slide">
                          <a href="borders.html" class="side-menu__item">Borders</a>
                      </li>
                      <li class="slide">
                          <a href="breakpoints.html" class="side-menu__item">Breakpoints</a>
                      </li>
                      <li class="slide">
                          <a href="colors.html" class="side-menu__item">Colors</a>
                      </li>
                      <li class="slide">
                          <a href="columns.html" class="side-menu__item">Columns</a>
                      </li>
                      <li class="slide">
                          <a href="css_grid.html" class="side-menu__item">Css Grid</a>
                      </li>
                      <li class="slide">
                          <a href="flex.html" class="side-menu__item">Flex</a>
                      </li>
                      <li class="slide">
                          <a href="gutters.html" class="side-menu__item">Gutters</a>
                      </li>
                      <li class="slide">
                          <a href="helpers.html" class="side-menu__item">Helpers</a>
                      </li>
                      <li class="slide">
                          <a href="position.html" class="side-menu__item">Position</a>
                      </li>
                      <li class="slide">
                          <a href="more.html" class="side-menu__item">Additional Content</a>
                      </li>
                  </ul>
              </li>
              <!-- End::slide -->

              <!-- Start::slide -->
              <li class="slide">
                  <a href="widgets.html" class="side-menu__item">
                      <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><rect x="32" y="80" width="192" height="48" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M208,128v72a8,8,0,0,1-8,8H56a8,8,0,0,1-8-8V128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="128" y1="80" x2="128" y2="208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M176.79,31.21c9.34,9.34,9.89,25.06,0,33.82C159.88,80,128,80,128,80s0-31.88,15-48.79C151.73,21.32,167.45,21.87,176.79,31.21Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M79.21,31.21c-9.34,9.34-9.89,25.06,0,33.82C96.12,80,128,80,128,80s0-31.88-15-48.79C104.27,21.32,88.55,21.87,79.21,31.21Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                      <span class="side-menu__label">Widgets</span>
                  </a>
              </li>
              <!-- End::slide -->
              
              <!-- Start::slide__category -->
              <li class="slide__category"><span class="category-name">Tools & Components</span></li>
              <!-- End::slide__category -->

              <!-- Start::slide -->
              <li class="slide has-sub">
                  <a href="javascript:void(0);" class="side-menu__item">
                      <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="128" cy="128" r="96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polygon points="176 80 112 112 80 176 144 144 176 80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                      <span class="side-menu__label">Maps</span>
                      <i class="ri-arrow-right-s-line side-menu__angle"></i>
                  </a>
                  <ul class="slide-menu child1">
                      <li class="slide side-menu__label1">
                          <a href="javascript:void(0)">Maps</a>
                      </li>
                      <li class="slide">
                          <a href="vector-maps.html" class="side-menu__item">Vector Maps</a>
                      </li>
                      <li class="slide">
                          <a href="leaflet-maps.html" class="side-menu__item">Leaflet Maps</a>
                      </li>
                      <li class="slide">
                          <a href="google-maps.html" class="side-menu__item">Google Maps</a>
                      </li>
                  </ul>
              </li>
              <!-- End::slide -->

              <!-- Start::slide -->
              <li class="slide">
                  <a href="icons.html" class="side-menu__item">
                      <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polyline points="48 139.59 48 216 208 216 208 139.59" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M54,40H202a8,8,0,0,1,7.69,5.8L224,96H32L46.34,45.8A8,8,0,0,1,54,40Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M96,96v16a32,32,0,0,1-64,0V96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M160,96v16a32,32,0,0,1-64,0V96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M224,96v16a32,32,0,0,1-64,0V96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                      <span class="side-menu__label">Icons</span>
                  </a>
              </li>
              <!-- End::slide -->

               <!-- Start::slide -->
              <li class="slide has-sub">
                  <a href="javascript:void(0);" class="side-menu__item">
                      <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polyline points="224 208 32 208 32 48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="200 72 128 144 96 112 32 176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="200 112 200 72 160 72" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                      <span class="side-menu__label">Charts</span>
                      <i class="ri-arrow-right-s-line side-menu__angle"></i>
                  </a>
                  <ul class="slide-menu child1">
                      <li class="slide side-menu__label1">
                          <a href="javascript:void(0)">Charts</a>
                      </li>
                      <li class="slide has-sub">
                          <a href="javascript:void(0);" class="side-menu__item">Apex Charts
                              <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                          <ul class="slide-menu child2">
                              <li class="slide">
                                  <a href="apex-line-charts.html" class="side-menu__item">Line Charts</a>
                              </li>
                              <li class="slide">
                                  <a href="apex-area-charts.html" class="side-menu__item">Area Charts</a>
                              </li>
                              <li class="slide">
                                  <a href="apex-column-charts.html" class="side-menu__item">Column Charts</a>
                              </li>
                              <li class="slide">
                                  <a href="apex-bar-charts.html" class="side-menu__item">Bar Charts</a>
                              </li>
                              <li class="slide">
                                  <a href="apex-mixed-charts.html" class="side-menu__item">Mixed Charts</a>
                              </li>
                              <li class="slide">
                                  <a href="apex-rangearea-charts.html" class="side-menu__item">Range Area Charts</a>
                              </li>
                              <li class="slide">
                                  <a href="apex-timeline-charts.html" class="side-menu__item">Timeline Charts</a>
                              </li>
                              <li class="slide">
                                  <a href="apex-funnel-charts.html" class="side-menu__item">Funnel Charts</a>
                              </li>
                              <li class="slide">
                                  <a href="apex-candlestick-charts.html" class="side-menu__item">CandleStick
                                      Charts</a>
                              </li>
                              <li class="slide">
                                  <a href="apex-boxplot-charts.html" class="side-menu__item">Boxplot Charts</a>
                              </li>
                              <li class="slide">
                                  <a href="apex-bubble-charts.html" class="side-menu__item">Bubble Charts</a>
                              </li>
                              <li class="slide">
                                  <a href="apex-scatter-charts.html" class="side-menu__item">Scatter Charts</a>
                              </li>
                              <li class="slide">
                                  <a href="apex-heatmap-charts.html" class="side-menu__item">Heatmap Charts</a>
                              </li>
                              <li class="slide">
                                  <a href="apex-treemap-charts.html" class="side-menu__item">Treemap Charts</a>
                              </li>
                              <li class="slide">
                                  <a href="apex-pie-charts.html" class="side-menu__item">Pie Charts</a>
                              </li>
                              <li class="slide">
                                  <a href="apex-radialbar-charts.html" class="side-menu__item">Radialbar Charts</a>
                              </li>
                              <li class="slide">
                                  <a href="apex-radar-charts.html" class="side-menu__item">Radar Charts</a>
                              </li>
                              <li class="slide">
                                  <a href="apex-polararea-charts.html" class="side-menu__item">Polararea Charts</a>
                              </li>
                          </ul>
                      </li>
                      <li class="slide">
                          <a href="chartjs-charts.html" class="side-menu__item">Chartjs Charts</a>
                      </li>
                      <li class="slide">
                          <a href="echarts.html" class="side-menu__item">Echart Charts</a>
                      </li>
                  </ul>
              </li>
              <!-- End::slide -->

              <!-- Start::slide -->
              <li class="slide has-sub">
                  <a href="javascript:void(0);" class="side-menu__item">
                      <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M32,56H224a0,0,0,0,1,0,0V192a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8V56A0,0,0,0,1,32,56Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="32" y1="104" x2="224" y2="104" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="32" y1="152" x2="224" y2="152" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="88" y1="104" x2="88" y2="200" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                      <span class="side-menu__label">Tables</span>
                      <i class="ri-arrow-right-s-line side-menu__angle"></i>
                  </a>
                  <ul class="slide-menu child1">
                      <li class="slide side-menu__label1">
                          <a href="javascript:void(0)">Tables</a>
                      </li>
                      <li class="slide">
                          <a href="tables.html" class="side-menu__item">Tables</a>
                      </li>
                      <li class="slide">
                          <a href="grid-tables.html" class="side-menu__item">Grid JS Tables</a>
                      </li>
                      <li class="slide">
                          <a href="data-tables.html" class="side-menu__item">Data Tables</a>
                      </li>
                  </ul>
              </li>
              <!-- End::slide -->

          </ul>
          <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
      </nav>
      <!-- End::nav -->

  </div>
  <!-- End::main-sidebar -->

</aside>
<!-- End::app-sidebar -->