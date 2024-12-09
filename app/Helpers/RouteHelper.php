<?php
  
namespace App\Helpers;

class RouteHelper
{
  public static function getDashboardRouteLists(): array
  {
    return [
      'sales',
      'analytics',
      'ecommerce',
      'crm',
      'crypto',
      'nft',
      'projects',
      'jobs',
      'hrm',
      'courses',
      'stocks',
      'medical',
      'pos-system',
      'podcast',
      'school',
      'social-media',
    ];
  }
  public static function getEcommerceRouteLists(): array
  {
    return [
      'ecommerce-addproduct',
      'ecommerce-cart',
      'ecommerce-checkout',
      'ecommerce-editproduct',
      'ecommerce-orderdetail',
      'ecommerce-orders',
      'ecommerce-products',
      'ecommerce-productsdetails',
      'ecommerce-productslists',
      'ecommerce-wishlists',
    ];
  }
  public static function getProjectsRouteLists(): array
  {
    return [
      'projects-lists',
      'projects-overview',
      'projects-create',
    ];
  }
  public static function getTaskRouteLists(): array
  {
    return [
      'task-kanban-board',
      'task-list-view',
      'task-details',
    ];
  }
  public static function getJobsRouteLists():array
  {
    return [
      'jobs-details',
      'jobs-search-company',
      'jobs-search-jobs',
      'jobs-post',
      'jobs-lists',
      'jobs-search-candidate',
      'jobs-candidate-details',
    ];
  }
  public static function getNftRouteLists():array
  {
    return [
      'nft-marketplace',
      'nft-details',
      'nft-create',
      'nft-wallet-integration',
      'nft-live-auction',
    ];
  }
  public static function getCrmRouteLists():array
  {
    return [
      'crm-contacts',
      'crm-companies',
      'crm-deals',
      'crm-leads',
    ];
  }
  public static function getCryptoRouteLists():array
  {
    return [
      'crypto-transactions',
      'crypto-currency-exchange',
      'crypto-buy-sell',
      'crypto-marketcap',
      'crypto-wallet',
    ];
  }

  // Tambahin lagi route route lainnya disini kalau mau ada tambahan di apps, dan lebih bagus sebenarnya taruh disini
  public static function getAppsRouteLists():array
  {
    return array_merge(
      [
        'full-calendar',
        'gallery',
        'sweet-alerts',
      ],
      self::getEcommerceRouteLists(),
      self::getProjectsRouteLists(),
      self::getTaskRouteLists(),
      self::getJobsRouteLists(),
      self::getNftRouteLists(),
      self::getCrmRouteLists(),
      self::getCryptoRouteLists(),
    );
  }

  public static function getBlogsRouteLists():array
  {
    return [
      'pages-blog-index',
      'pages-blog-details',
      'pages-blog-create',
    ];
  }
  public static function getEmailRouteLists():array
  {
    return [
      'pages-email-mail-app',
      'pages-email-mail-settings',
    ];
  }
  public static function getInvoiceRouteLists():array
  {
    return [
      'pages-invoice-create',
      'pages-invoice-details',
      'pages-invoice-list',
    ];
  }

  public static function getPagesRouteLists():array
  {
    return array_merge(
      [
        'pages-chat',
        'pages-empty',
        'pages-faq',
        'pages-file-manager',
        'pages-pricing',
        'pages-profile',
        'pages-profile-settings',
        'pages-landing-page',
        'pages-reviews',
        'pages-search',
        'pages-team',
        'pages-terms-conditions',
        'pages-timeline',
        'pages-todolist',
      ],
      self::getBlogsRouteLists(),
      self::getEmailRouteLists(),
      self::getInvoiceRouteLists(),
    );
  }

  public static function getFormsRouteLists():array
  {
    return [
      'forms-advanced',
      'forms-elements-inputs',
      'forms-elements-checksandradio',
      'forms-elements-input-group',
      'forms-elements-form-select',
      'forms-elements-range-slider',
      'forms-elements-input-masks',
      'forms-elements-file-uploads',
      'forms-elements-date-time-picker',
      'forms-elements-color-pickers',
      'forms-floating-label',
      'forms-layout',
      'forms-wizards',
      'forms-quil-editor',
      'forms-validation',
      'forms-select2',
    ];
  }
}