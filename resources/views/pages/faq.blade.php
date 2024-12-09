@extends('layout.main')
@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Page Header -->
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Faq's</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Faq's</li>
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

      <div class="container">

      <!-- Start:: row-2 -->
      <div class="row">
          <div class="col-xl-12">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="bg-white rounded overflow-hidden mb-4">
                          <div class="d-block faq-header p-3 border-bottom">
                              <div class="text-center">
                                  <h3 class="text-primary text-decoration-underline fw-semibold mb-2">FAQs</h3>
                                  <h4 class="mb-2 fw-semibold">Frequently Asked Questions</h4>
                                  <p class="fs-14 mb-2 text-muted">Whenever you're facing technical issues, seeking advice, or simply looking for guidance, our platform is here to lend a helping hand.</p>
                              </div>
                          </div>
                          <div class="p-3">
                              <div class="row">
                                  <div class="col-xl-3">
                                  <ul class="nav nav-tabs flex-columns nav-tabs-header faq-tab w-100 d-inline-block p-0" role="tablist">
                                      <li class="nav-item m-1 mb-2" role="presentation">
                                          <a class="nav-link px-3 py-2 active" data-bs-toggle="tab" role="tab" aria-current="page" href="#theme-customization" aria-selected="true"> 
                                              Order Placement</a>
                                      </li>
                                      <li class="nav-item m-1 mb-2" role="presentation">
                                          <a class="nav-link px-3 py-2" data-bs-toggle="tab" role="tab" aria-current="page" href="#user-management" aria-selected="false" tabindex="-1">Order Status</a>
                                      </li>
                                      <li class="nav-item m-1 mb-2" role="presentation">
                                          <a class="nav-link px-3 py-2" data-bs-toggle="tab" role="tab" aria-current="page" href="#data-export" aria-selected="false" tabindex="-1">Shipping and Delivery</a>
                                      </li>
                                      <li class="nav-item m-1" role="presentation">
                                          <a class="nav-link px-3 py-2" data-bs-toggle="tab" role="tab" aria-current="page" href="#troubleshooting" aria-selected="false" tabindex="-1">Returns and Cancellations </a>
                                      </li>
                                      <li class="nav-item m-1 mb-2" role="presentation">
                                          <a class="nav-link px-3 py-2" data-bs-toggle="tab" role="tab" aria-current="page" href="#security-authentication" aria-selected="false" tabindex="-1">Product and Pricing</a>
                                      </li>
                                      <li class="nav-item m-1 mb-2" role="presentation">
                                          <a class="nav-link px-3 py-2" data-bs-toggle="tab" role="tab" aria-current="page" href="#general-settings" aria-selected="false" tabindex="-1">Account and Privacy</a>
                                      </li>
                                  </ul>
                                  </div>
                                  <div class="col-xl-9">
                                  <div class="tab-content">
                                      <div class="tab-pane show active border-0 p-0" id="theme-customization"
                                          role="tabpanel">
                                          <div class="d-flex mb-3 align-items-center justify-content-between">
                                              <div class="d-flex align-items-center gap-3 lh-1">
                                                  <span class="avatar avatar-md bg-primary-transparent"><i class="ri-box-3-line fs-18"></i></span>
                                                  <div>
                                                      <p class="mb-1 fs-15 fw-semibold">Order Placing</p>
                                                      <span class="text-muted fs-13">Get help with Order Placing</span>
                                                  </div>
                                              </div>
                                              <a href="javascript:void(0);" class="fw-medium text-decoration-underline text-primary">View All <i class="ri-arrow-right-line"></i></a>
                                          </div>
                                          <div class="accordion faq-accordion accordions-items-seperate" id="accordionFAQ1">
                                              <div class="accordion-item">
                                                  <h2 class="accordion-header" id="headingcustomicon2Two">
                                                      <button class="accordion-button collapsed" type="button"
                                                          data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Two"
                                                          aria-expanded="false" aria-controls="collapsecustomicon2Two">
                                                          1. How do I place an order?
                                                      </button>
                                                  </h2>
                                                  <div id="collapsecustomicon2Two" class="accordion-collapse collapse"
                                                      aria-labelledby="headingcustomicon2Two"
                                                      data-bs-parent="#accordionFAQ1">
                                                      <div class="accordion-body">
                                                          You can place an order by selecting the items you wish to purchase, adding them to your cart, and proceeding to checkout. Follow the prompts to enter your shipping and payment information.
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="accordion-item">
                                                  <h2 class="accordion-header" id="headingcustomicon2Three">
                                                      <button class="accordion-button collapsed" type="button"
                                                          data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Three"
                                                          aria-expanded="false" aria-controls="collapsecustomicon2Three">
                                                          2. Can I modify my order after placing it?
                                                      </button>
                                                  </h2>
                                                  <div id="collapsecustomicon2Three" class="accordion-collapse collapse"
                                                      aria-labelledby="headingcustomicon2Three"
                                                      data-bs-parent="#accordionFAQ1">
                                                      <div class="accordion-body">
                                                          Once your order has been placed, it may be possible to make changes before it is processed. Please contact our customer support team as soon as possible to request any modifications.
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="accordion-item">
                                                  <h2 class="accordion-header" id="headingcustomicon2Four">
                                                      <button class="accordion-button collapsed" type="button"
                                                          data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Four"
                                                          aria-expanded="false" aria-controls="collapsecustomicon2Four">
                                                          3. What payment methods do you accept?
                                                      </button>
                                                  </h2>
                                                  <div id="collapsecustomicon2Four" class="accordion-collapse collapse"
                                                      aria-labelledby="headingcustomicon2Four"
                                                      data-bs-parent="#accordionFAQ1">
                                                      <div class="accordion-body">
                                                          We accept a variety of payment methods including credit/debit cards, PayPal, and other online payment gateways. Please refer to our payment options at checkout for more details.
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="accordion-item">
                                                  <h2 class="accordion-header" id="headingcustomicon2Five">
                                                      <button class="accordion-button collapsed" type="button"
                                                          data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Five"
                                                          aria-expanded="false" aria-controls="collapsecustomicon2Five">
                                                          4. How do I use a discount code or gift card?
                                                      </button>
                                                  </h2>
                                                  <div id="collapsecustomicon2Five" class="accordion-collapse collapse"
                                                      aria-labelledby="headingcustomicon2Five"
                                                      data-bs-parent="#accordionFAQ1">
                                                      <div class="accordion-body">
                                                          During checkout, you’ll see a field where you can enter your discount code or gift card number. Simply type in the code and click “Apply” to see the updated total. Make sure to check the terms and conditions of the discount code or gift card for any restrictions.
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="tab-pane border-0 p-0" id="user-management"
                                          role="tabpanel">
                                          <div class="d-flex mb-3 align-items-center justify-content-between">
                                              <div class="d-flex align-items-center gap-3 lh-1">
                                                  <span class="avatar avatar-md bg-secondary-transparent"><i class="ri-hourglass-line fs-18"></i></span>
                                                  <div>
                                                      <p class="mb-1 fs-15 fw-semibold">Order Status</p>
                                                      <span class="text-muted fs-13">Get help To Know Order Status</span>
                                                  </div>
                                              </div>
                                              <a href="javascript:void(0);" class="fw-medium text-decoration-underline text-primary">View All <i class="ri-arrow-right-line"></i></a>
                                          </div>
                                          <div class="accordion  faq-accordion  accordions-items-seperate" id="accordionFAQ2">
                                              <div class="accordion-item">
                                                  <h2 class="accordion-header" id="headingcustomicon2Seven">
                                                      <button class="accordion-button collapsed" type="button"
                                                          data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Seven"
                                                          aria-expanded="false" aria-controls="collapsecustomicon2Seven">
                                                          1. How can I check the status of my order?
                                                      </button>
                                                  </h2>
                                                  <div id="collapsecustomicon2Seven" class="accordion-collapse collapse"
                                                      aria-labelledby="headingcustomicon2Seven"
                                                      data-bs-parent="#accordionFAQ2">
                                                      <div class="accordion-body">
                                                          You can check your order status by logging into your account and navigating to the "Orders" section. You will find updates on your order’s progress, including shipping details.
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="accordion-item">
                                                  <h2 class="accordion-header" id="headingcustomicon2Eight">
                                                      <button class="accordion-button collapsed" type="button"
                                                          data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Eight"
                                                          aria-expanded="false" aria-controls="collapsecustomicon2Eight">
                                                          2. What does "Pending" mean for my order status?
                                                      </button>
                                                  </h2>
                                                  <div id="collapsecustomicon2Eight" class="accordion-collapse collapse"
                                                      aria-labelledby="headingcustomicon2Eight"
                                                      data-bs-parent="#accordionFAQ2">
                                                      <div class="accordion-body">
                                                          The "Pending" status indicates that your order has been received but has not yet been processed or confirmed. We are currently reviewing your order details and preparing it for processing.
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="accordion-item">
                                                  <h2 class="accordion-header" id="headingcustomicon2Nine">
                                                      <button class="accordion-button collapsed" type="button"
                                                          data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Nine"
                                                          aria-expanded="false" aria-controls="collapsecustomicon2Nine">
                                                          3. What is "Partially Shipped" status?
                                                      </button>
                                                  </h2>
                                                  <div id="collapsecustomicon2Nine" class="accordion-collapse collapse"
                                                      aria-labelledby="headingcustomicon2Nine"
                                                      data-bs-parent="#accordionFAQ2">
                                                      <div class="accordion-body">
                                                          "Partially Shipped" indicates that part of your order has been shipped, while the remaining items are still being processed. This may happen if you ordered multiple items and some are available sooner than others.
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="accordion-item">
                                                  <h2 class="accordion-header" id="headingcustomicon2Ten">
                                                      <button class="accordion-button collapsed" type="button"
                                                          data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Ten"
                                                          aria-expanded="false" aria-controls="collapsecustomicon2Ten">
                                                          4. Why is my order delayed?
                                                      </button>
                                                  </h2>
                                                  <div id="collapsecustomicon2Ten" class="accordion-collapse collapse"
                                                      aria-labelledby="headingcustomicon2Ten"
                                                      data-bs-parent="#accordionFAQ2">
                                                      <div class="accordion-body">
                                                          Delays can occur for a variety of reasons, including high order volumes, shipping carrier delays, or unexpected issues such as weather conditions. We strive to deliver your order as quickly as possible and will notify you of any significant delays.
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="tab-pane border-0 p-0" id="data-export"
                                          role="tabpanel">
                                          <div class="d-flex mb-3 align-items-center justify-content-between">
                                              <div class="d-flex align-items-center gap-3 lh-1">
                                                  <span class="avatar avatar-md bg-success-transparent"><i class="ri-truck-line fs-18"></i></span>
                                                  <div>
                                                      <p class="mb-1 fs-15 fw-semibold">Shipping & Delevery</p>
                                                      <span class="text-muted fs-13">Get help to know Delevery Details.</span>
                                                  </div>
                                              </div>
                                              <a href="javascript:void(0);" class="fw-medium text-decoration-underline text-primary">View All <i class="ri-arrow-right-line"></i></a>
                                          </div>
                                          <div class="accordion  faq-accordion  accordions-items-seperate" id="accordionFAQ3">
                                              <div class="accordion-item">
                                                  <h2 class="accordion-header" id="headingcustomicon2Twelve">
                                                      <button class="accordion-button collapsed" type="button"
                                                          data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Twelve"
                                                          aria-expanded="false" aria-controls="collapsecustomicon2Twelve">
                                                          1. How long will it take to receive my order?
                                                      </button>
                                                  </h2>
                                                  <div id="collapsecustomicon2Twelve" class="accordion-collapse collapse"
                                                      aria-labelledby="headingcustomicon2Twelve"
                                                      data-bs-parent="#accordionFAQ3">
                                                      <div class="accordion-body">
                                                          Delivery times vary based on your location and the shipping method selected. Estimated delivery times will be provided at checkout and in your order confirmation email.
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="accordion-item">
                                                  <h2 class="accordion-header" id="headingcustomicon2Thirteen">
                                                      <button class="accordion-button collapsed" type="button"
                                                          data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Thirteen"
                                                          aria-expanded="false" aria-controls="collapsecustomicon2Thirteen">
                                                          2. Can I track my shipment?
                                                      </button>
                                                  </h2>
                                                  <div id="collapsecustomicon2Thirteen" class="accordion-collapse collapse"
                                                      aria-labelledby="headingcustomicon2Thirteen"
                                                      data-bs-parent="#accordionFAQ3">
                                                      <div class="accordion-body">
                                                          Yes, once your order has been shipped, you will receive a tracking number via email. You can use this number to track your shipment through our courier’s website.
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="accordion-item">
                                                  <h2 class="accordion-header" id="headingcustomicon2Fourteen">
                                                      <button class="accordion-button collapsed" type="button"
                                                          data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Fourteen"
                                                          aria-expanded="false" aria-controls="collapsecustomicon2Fourteen">
                                                        3. What should I do if my order hasn’t arrived?
                                                      </button>
                                                  </h2>
                                                  <div id="collapsecustomicon2Fourteen" class="accordion-collapse collapse"
                                                      aria-labelledby="headingcustomicon2Fourteen"
                                                      data-bs-parent="#accordionFAQ3">
                                                      <div class="accordion-body">
                                                          If your order has not arrived within the estimated delivery time, please contact our customer support team for assistance. Make sure to have your order number ready.
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="accordion-item">
                                                  <h2 class="accordion-header" id="headingcustomicon2Fifteen">
                                                      <button class="accordion-button collapsed" type="button"
                                                          data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Fifteen"
                                                          aria-expanded="false" aria-controls="collapsecustomicon2Fifteen">
                                                          4. What shipping methods do you offer?
                                                      </button>
                                                  </h2>
                                                  <div id="collapsecustomicon2Fifteen" class="accordion-collapse collapse"
                                                      aria-labelledby="headingcustomicon2Fifteen"
                                                      data-bs-parent="#accordionFAQ3">
                                                      <div class="accordion-body">
                                                          We offer various shipping methods including standard, expedited, and express shipping. The available options will be presented to you at checkout based on your location and the items in your cart.
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="tab-pane border-0 p-0" id="security-authentication"
                                          role="tabpanel">
                                          <div class="d-flex mb-3 align-items-center justify-content-between">
                                              <div class="d-flex align-items-center gap-3 lh-1">
                                                  <span class="avatar avatar-md bg-info-transparent"><i class="ri-price-tag-3-line fs-18"></i></span>
                                                  <div>
                                                      <p class="mb-1 fs-15 fw-semibold">Product Pricing</p>
                                                      <span class="text-muted fs-13">Get help to with Product Pricing.</span>
                                                  </div>
                                              </div>
                                              <a href="javascript:void(0);" class="fw-medium text-decoration-underline text-primary">View All <i class="ri-arrow-right-line"></i></a>
                                          </div>
                                          <div class="accordion  faq-accordion  accordions-items-seperate" id="accordionFAQ4">
                                              <div class="accordion-item">
                                                  <h2 class="accordion-header" id="headingcustomicon2Seventeen">
                                                      <button class="accordion-button collapsed" type="button"
                                                          data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Seventeen"
                                                          aria-expanded="false" aria-controls="collapsecustomicon2Seventeen">
                                                          1. Are all products available for immediate purchase?
                                                      </button>
                                                  </h2>
                                                  <div id="collapsecustomicon2Seventeen" class="accordion-collapse collapse"
                                                      aria-labelledby="headingcustomicon2Seventeen"
                                                      data-bs-parent="#accordionFAQ4">
                                                      <div class="accordion-body">
                                                          While most products are available for immediate purchase, some items may be on backorder or have limited stock. Availability will be indicated on the product page.
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="accordion-item">
                                                  <h2 class="accordion-header" id="headingcustomicon2Eighteen">
                                                      <button class="accordion-button collapsed" type="button"
                                                          data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Eighteen"
                                                          aria-expanded="false" aria-controls="collapsecustomicon2Eighteen">
                                                          2. Do you offer discounts or promotions?
                                                      </button>
                                                  </h2>
                                                  <div id="collapsecustomicon2Eighteen" class="accordion-collapse collapse"
                                                      aria-labelledby="headingcustomicon2Eighteen"
                                                      data-bs-parent="#accordionFAQ4">
                                                      <div class="accordion-body">
                                                          Yes, we periodically offer discounts and promotions. Sign up for our newsletter or follow us on social media to stay informed about upcoming deals.
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="accordion-item">
                                                  <h2 class="accordion-header" id="headingcustomicon2Nineteen">
                                                      <button class="accordion-button collapsed" type="button"
                                                          data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Nineteen"
                                                          aria-expanded="false" aria-controls="collapsecustomicon2Nineteen">
                                                          3. Do you offer customization or personalization options?
                                                      </button>
                                                  </h2>
                                                  <div id="collapsecustomicon2Nineteen" class="accordion-collapse collapse"
                                                      aria-labelledby="headingcustomicon2Nineteen"
                                                      data-bs-parent="#accordionFAQ4">
                                                      <div class="accordion-body">
                                                          Yes, we offer customization and personalization options for select products. You can find these options on the product page, where you can specify your preferences
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="accordion-item">
                                                  <h2 class="accordion-header" id="headingcustomicon2Twenty">
                                                      <button class="accordion-button collapsed" type="button"
                                                          data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Twenty"
                                                          aria-expanded="false" aria-controls="collapsecustomicon2Twenty">
                                                          4. Can I request a sample before purchasing?
                                                      </button>
                                                  </h2>
                                                  <div id="collapsecustomicon2Twenty" class="accordion-collapse collapse"
                                                      aria-labelledby="headingcustomicon2Twenty"
                                                      data-bs-parent="#accordionFAQ4">
                                                      <div class="accordion-body">
                                                          For certain products, such as fabric swatches or paint samples, we offer sample requests. Please check the product page or contact our customer support team to inquire about sample availability and request process.
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="tab-pane border-0 p-0" id="general-settings"
                                          role="tabpanel">
                                          <div class="d-flex mb-3 align-items-center justify-content-between">
                                              <div class="d-flex align-items-center gap-3 lh-1">
                                                  <span class="avatar avatar-md bg-danger-transparent"><i class="ri-settings-2-line fs-18"></i></span>
                                                  <div>
                                                      <p class="mb-1 fs-15 fw-semibold">Acount Privacy</p>
                                                      <span class="text-muted fs-13">Get help to with Account Privacy.</span>
                                                  </div>
                                              </div>
                                              <a href="javascript:void(0);" class="fw-medium text-decoration-underline text-primary">View All <i class="ri-arrow-right-line"></i></a>
                                          </div>
                                          <div class="accordion  faq-accordion  accordions-items-seperate" id="accordionFAQ5">
                                              <div class="accordion-item">
                                                  <h2 class="accordion-header" id="headingcustomicon2TwentyTwo">
                                                      <button class="accordion-button collapsed" type="button"
                                                          data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2TwentyTwo"
                                                          aria-expanded="false" aria-controls="collapsecustomicon2TwentyTwo">
                                                          1. Do I need an account to place an order?
                                                      </button>
                                                  </h2>
                                                  <div id="collapsecustomicon2TwentyTwo" class="accordion-collapse collapse"
                                                      aria-labelledby="headingcustomicon2TwentyTwo"
                                                      data-bs-parent="#accordionFAQ5">
                                                      <div class="accordion-body">
                                                          You can place an order as a guest, but creating an account allows you to track orders, save shipping information, and receive special offers.
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="accordion-item">
                                                  <h2 class="accordion-header" id="headingcustomicon2TwentyThree">
                                                      <button class="accordion-button collapsed" type="button"
                                                          data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2TwentyThree"
                                                          aria-expanded="false" aria-controls="collapsecustomicon2TwentyThree">
                                                          2. Is my payment information secure?
                                                      </button>
                                                  </h2>
                                                  <div id="collapsecustomicon2TwentyThree" class="accordion-collapse collapse"
                                                      aria-labelledby="headingcustomicon2TwentyThree"
                                                      data-bs-parent="#accordionFAQ5">
                                                      <div class="accordion-body">
                                                          Yes, you can set a default landing page. In the "User Settings" or "General Settings," find the option to specify the default page users will see upon login.
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="accordion-item">
                                                  <h2 class="accordion-header" id="headingcustomicon2TwentyFour">
                                                      <button class="accordion-button collapsed" type="button"
                                                          data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2TwentyFour"
                                                          aria-expanded="false" aria-controls="collapsecustomicon2TwentyFour">
                                                      3. What should I do if I forget my password?
                                                      </button>
                                                  </h2>
                                                  <div id="collapsecustomicon2TwentyFour" class="accordion-collapse collapse"
                                                      aria-labelledby="headingcustomicon2TwentyFour"
                                                      data-bs-parent="#accordionFAQ5">
                                                      <div class="accordion-body">
                                                          If you've forgotten your password, click on the "Forgot Password" link on the login page. Enter your registered email address, and we'll send you a link to reset your password. Follow the instructions in the email to set a new password.
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="accordion-item">
                                                  <h2 class="accordion-header" id="headingcustomicon2TwentyFive">
                                                      <button class="accordion-button collapsed" type="button"
                                                          data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2TwentyFive"
                                                          aria-expanded="false" aria-controls="collapsecustomicon2TwentyFive">
                                                4. How do I update my account information?
                                                      </button>
                                                  </h2>
                                                  <div id="collapsecustomicon2TwentyFive" class="accordion-collapse collapse"
                                                      aria-labelledby="headingcustomicon2TwentyFive"
                                                      data-bs-parent="#accordionFAQ5">
                                                      <div class="accordion-body">
                                                          To update your account information, log in to your account and navigate to the "Account Settings" or "Profile" section. Here, you can update your personal details, contact information, and preferences. Be sure to save your changes before exiting.
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="tab-pane border-0 p-0" id="troubleshooting"
                                          role="tabpanel">
                                          <div class="d-flex mb-3 align-items-center justify-content-between">
                                              <div class="d-flex align-items-center gap-3 lh-1">
                                                  <span class="avatar avatar-md bg-warning-transparent"><i class="ri-close-circle-line fs-18"></i></span>
                                                  <div>
                                                      <p class="mb-1 fs-15 fw-semibold">Return & Cancellations</p>
                                                      <span class="text-muted fs-13">Get help to with Cancellations Details.</span>
                                                  </div>
                                              </div>
                                              <a href="javascript:void(0);" class="fw-medium text-decoration-underline text-primary">View All <i class="ri-arrow-right-line"></i></a>
                                          </div>
                                          <div class="accordion  faq-accordion  accordions-items-seperate" id="accordionFAQ6">
                                              <div class="accordion-item">
                                                  <h2 class="accordion-header" id="headingcustomicon2TwentySeven">
                                                      <button class="accordion-button collapsed" type="button"
                                                          data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2TwentySeven"
                                                          aria-expanded="false" aria-controls="collapsecustomicon2TwentySeven">
                                                          1. Can I cancel my order?
                                                      </button>
                                                  </h2>
                                                  <div id="collapsecustomicon2TwentySeven" class="accordion-collapse collapse"
                                                      aria-labelledby="headingcustomicon2TwentySeven"
                                                      data-bs-parent="#accordionFAQ6">
                                                      <div class="accordion-body">
                                                          Orders can be cancelled if they have not yet been processed. Please contact customer support as soon as possible to cancel your order.
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="accordion-item">
                                                  <h2 class="accordion-header" id="headingcustomicon2TwentyEight">
                                                      <button class="accordion-button collapsed" type="button"
                                                          data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2TwentyEight"
                                                          aria-expanded="false" aria-controls="collapsecustomicon2TwentyEight">
                                                          2. How do I return an item?
                                                      </button>
                                                  </h2>
                                                  <div id="collapsecustomicon2TwentyEight" class="accordion-collapse collapse"
                                                      aria-labelledby="headingcustomicon2TwentyEight"
                                                      data-bs-parent="#accordionFAQ6">
                                                      <div class="accordion-body">
                                                          If you are not satisfied with your purchase, you can return it within the specified return period. Please visit our returns page for instructions on how to initiate a return.
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="accordion-item">
                                                  <h2 class="accordion-header" id="headingcustomicon2TwentyNine">
                                                      <button class="accordion-button collapsed" type="button"
                                                          data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2TwentyNine"
                                                          aria-expanded="false" aria-controls="collapsecustomicon2TwentyNine">
                                                          3. Will I receive a refund for my cancelled order?
                                                      </button>
                                                  </h2>
                                                  <div id="collapsecustomicon2TwentyNine" class="accordion-collapse collapse"
                                                      aria-labelledby="headingcustomicon2TwentyNine"
                                                      data-bs-parent="#accordionFAQ6">
                                                      <div class="accordion-body">
                                                          Yes, if your order is cancelled, a refund will be issued to your original payment method. The time it takes for the refund to appear will depend on your payment provider.
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="accordion-item">
                                                  <h2 class="accordion-header" id="headingcustomicon2Thirty">
                                                      <button class="accordion-button collapsed" type="button"
                                                          data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Thirty"
                                                          aria-expanded="false" aria-controls="collapsecustomicon2Thirty">
                                                          4. What is your return policy?
                                                      </button>
                                                  </h2>
                                                  <div id="collapsecustomicon2Thirty" class="accordion-collapse collapse"
                                                      aria-labelledby="headingcustomicon2Thirty"
                                                      data-bs-parent="#accordionFAQ6">
                                                      <div class="accordion-body">
                                                          We accept returns within 30 days of the delivery date for most items, provided they are unused, in their original packaging, and with all tags attached.
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
                      <div class="col-xl-12">
                          <div class="card custom-card shadow-none bg-primary-transparent">
                              <div class="card-body p-4 text-center">
                                          <div>
                                              <div class="avatar-list-stacked mb-2">
                                                  <span class="avatar avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img" class="p-1 bg-light">
                                                  </span>
                                                  <span class="avatar avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/faces/8.jpg" alt="img" class="p-1 bg-light">
                                                  </span>
                                                  <span class="avatar avatar-rounded">
                                                      <img src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img" class="p-1 bg-light">
                                                  </span>
                                              </div>
                                              <h5 class="fw-semibold mb-2">Still Have Questions? We're Here to Help!</h5>
                                              <span class="d-block fs-13 text-muted">
                                                  Contact our support team for personalized assistance. Your satisfaction is our priority!
                                                  Write your question below and we'll get back to you shortly.
                                              </span>
                                              <button class="btn btn-primary mt-3">Chat With Us</button>
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
</div>
<!-- End::app-content -->

@endsection