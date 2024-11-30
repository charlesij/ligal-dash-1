<?php

use Illuminate\Support\Facades\Route;

function goToPage($page) {
    return function () use ($page) {
        return view($page);
    };
}

Route::get('/', function() {
    return redirect('/sales');
});

/** Dashboards */
Route::get('/sales', goToPage('dashboard.sales'))->name('sales');
Route::get('/analytics', goToPage('dashboard.analytics'))->name('analytics');
Route::get('/ecommerce', goToPage('dashboard.ecommerce'))->name('ecommerce');
Route::get('/crm', goToPage('dashboard.crm'))->name('crm');
Route::get('/crypto', goToPage('dashboard.crypto'))->name('crypto');
Route::get('/nft', goToPage('dashboard.nft'))->name('nft');
Route::get('/projects', goToPage('dashboard.projects'))->name('projects');
Route::get('/jobs', goToPage('dashboard.jobs'))->name('jobs');
Route::get('/hrm', goToPage('dashboard.hrm'))->name('hrm');
Route::get('/courses', goToPage('dashboard.courses'))->name('courses');
Route::get('/stocks', goToPage('dashboard.stocks'))->name('stocks');
Route::get('/medical', goToPage('dashboard.medical'))->name('medical');
Route::get('/pos-system', goToPage('dashboard.pos-system'))->name('pos-system');
Route::get('/podcast', goToPage('dashboard.podcast'))->name('podcast');
Route::get('/school', goToPage('dashboard.school'))->name('school');
Route::get('/social-media', goToPage('dashboard.social-media'))->name('social-media');

/** Web Apps */
Route::get('/apps/full-calendar', goToPage('apps.full-calendar'))->name('full-calendar');
Route::get('/apps/gallery', goToPage('apps.gallery'))->name('gallery');
Route::get('/apps/sweet-alerts', goToPage('apps.sweet-alerts'))->name('sweet-alerts');
Route::get('/apps/ecommerce/addproduct', goToPage('apps.ecommerce.addproduct'))->name('ecommerce-addproduct');
Route::get('/apps/ecommerce/cart', goToPage('apps.ecommerce.cart'))->name('ecommerce-cart');
Route::get('/apps/ecommerce/checkout', goToPage('apps.ecommerce.checkout'))->name('ecommerce-checkout');
Route::get('/apps/ecommerce/editproduct', goToPage('apps.ecommerce.editproduct'))->name('ecommerce-editproduct');
Route::get('/apps/ecommerce/orderdetail', goToPage('apps.ecommerce.orderdetail'))->name('ecommerce-orderdetail');
Route::get('/apps/ecommerce/orders', goToPage('apps.ecommerce.orders'))->name('ecommerce-orders');
Route::get('/apps/ecommerce/products', goToPage('apps.ecommerce.products'))->name('ecommerce-products');
Route::get('/apps/ecommerce/productsdetails', goToPage('apps.ecommerce.productsdetails'))->name('ecommerce-productsdetails');
Route::get('/apps/ecommerce/productslists', goToPage('apps.ecommerce.productslists'))->name('ecommerce-productslists');
Route::get('/apps/ecommerce/wishlists', goToPage('apps.ecommerce.wishlists'))->name('ecommerce-wishlists');
Route::get('/apps/projects/lists', goToPage('apps.projects.lists'))->name('projects-lists');
Route::get('/apps/projects/overview', goToPage('apps.projects.overview'))->name('projects-overview');
Route::get('/apps/projects/create', goToPage('apps.projects.create'))->name('projects-create');
Route::get('/apps/task/kanban-board', goToPage('apps.task.kanban-board'))->name('task-kanban-board');
Route::get('/apps/task/list-view', goToPage('apps.task.list-view'))->name('task-list-view');
Route::get('/apps/task/details', goToPage('apps.task.details'))->name('task-details');
Route::get('/apps/jobs/details', goToPage('apps.jobs.details'))->name('jobs-details');
Route::get('/apps/jobs/search-company', goToPage('apps.jobs.search-company'))->name('jobs-search-company');
Route::get('/apps/jobs/search-jobs', goToPage('apps.jobs.search-jobs'))->name('jobs-search-jobs');
Route::get('/apps/jobs/post', goToPage('apps.jobs.post'))->name('jobs-post');
Route::get('/apps/jobs/lists', goToPage('apps.jobs.lists'))->name('jobs-lists');
Route::get('/apps/jobs/search-candidate', goToPage('apps.jobs.search-candidate'))->name('jobs-search-candidate');
Route::get('/apps/jobs/candidate-details', goToPage('apps.jobs.candidate-details'))->name('jobs-candidate-details');
Route::get('/apps/nft/marketplace', goToPage('apps.nft.marketplace'))->name('nft-marketplace');
Route::get('/apps/nft/details', goToPage('apps.nft.details'))->name('nft-details');
Route::get('/apps/nft/create', goToPage('apps.nft.create'))->name('nft-create');
Route::get('/apps/nft/wallet-integration', goToPage('apps.nft.wallet-integration'))->name('nft-wallet-integration');
Route::get('/apps/nft/live-auction', goToPage('apps.nft.live-auction'))->name('nft-live-auction');
Route::get('/apps/crm/contacts', goToPage('apps.crm.contacts'))->name('crm-contacts');
Route::get('/apps/crm/companies', goToPage('apps.crm.companies'))->name('crm-companies');
Route::get('/apps/crm/deals', goToPage('apps.crm.deals'))->name('crm-deals');
Route::get('/apps/crm/leads', goToPage('apps.crm.leads'))->name('crm-leads');
Route::get('/apps/crypto/transactions', goToPage('apps.crypto.transactions'))->name('crypto-transactions');
Route::get('/apps/crypto/currency-exchange', goToPage('apps.crypto.currency-exchange'))->name('crypto-currency-exchange');
Route::get('/apps/crypto/buy-sell', goToPage('apps.crypto.buy-sell'))->name('crypto-buy-sell');
Route::get('/apps/crypto/marketcap', goToPage('apps.crypto.marketcap'))->name('crypto-marketcap');
Route::get('/apps/crypto/wallet', goToPage('apps.crypto.wallet'))->name('crypto-wallet');

/** Authentication */
Route::get('/authentication/coming-soon', goToPage('authentication.coming-soon'))->name('authentication-coming-soon');
Route::get('/authentication/create-password-basic', goToPage('authentication.create-password-basic'))->name('authentication-create-password-basic');
Route::get('/authentication/create-password-cover', goToPage('authentication.create-password-cover'))->name('authentication-create-password-cover');
Route::get('/authentication/lock-screen-basic', goToPage('authentication.lock-screen-basic'))->name('authentication-lock-screen-basic');
Route::get('/authentication/lock-screen-cover', goToPage('authentication.lock-screen-cover'))->name('authentication-lock-screen-cover');
Route::get('/authentication/reset-password-basic', goToPage('authentication.reset-password-basic'))->name('authentication-reset-password-basic');
Route::get('/authentication/reset-password-cover', goToPage('authentication.reset-password-cover'))->name('authentication-reset-password-cover');
Route::get('/authentication/sign-up-basic', goToPage('authentication.sign-up-basic'))->name('authentication-sign-up-basic');
Route::get('/authentication/sign-up-cover', goToPage('authentication.sign-up-cover'))->name('authentication-sign-up-cover');
Route::get('/authentication/sign-in-basic', goToPage('authentication.sign-in-basic'))->name('authentication-sign-in-basic');
Route::get('/authentication/sign-in-cover', goToPage('authentication.sign-in-cover'))->name('authentication-sign-in-cover');
Route::get('/authentication/two-step-verification-basic', goToPage('authentication.two-step-verification-basic'))->name('authentication-two-step-verification-basic');
Route::get('/authentication/two-step-verification-cover', goToPage('authentication.two-step-verification-cover'))->name('authentication-two-step-verification-cover');
Route::get('/authentication/maintenance', goToPage('authentication.maintenance'))->name('authentication-maintenance');

/** Error */
Route::get('/error/401', goToPage('error.401'))->name('error-401');
Route::get('/error/404', goToPage('error.404'))->name('error-404');
Route::get('/error/500', goToPage('error.500'))->name('error-500');

/** Pages */
Route::get('/pages/blog/index', goToPage('pages.blog.index'))->name('pages-blog-index');
Route::get('/pages/blog/details', goToPage('pages.blog.details'))->name('pages-blog-details');
Route::get('/pages/blog/create', goToPage('pages.blog.create'))->name('pages-blog-create');
Route::get('/pages/chat', goToPage('pages.chat'))->name('pages-chat');
Route::get('/pages/email/mail-app', goToPage('pages.email.mail-app'))->name('pages-email-mail-app');
Route::get('/pages/email/mail-settings', goToPage('pages.email.mail-settings'))->name('pages-email-mail-settings');
Route::get('/pages/empty', goToPage('pages.empty'))->name('pages-empty');
Route::get('/pages/faq', goToPage('pages.faq'))->name('pages-faq');
Route::get('/pages/file-manager', goToPage('pages.file-manager'))->name('pages-file-manager');
Route::get('/pages/invoice/create', goToPage('pages.invoice.create'))->name('pages-invoice-create');
Route::get('/pages/invoice/details', goToPage('pages.invoice.details'))->name('pages-invoice-details');
Route::get('/pages/invoice/list', goToPage('pages.invoice.list'))->name('pages-invoice-list');
Route::get('/pages/pricing', goToPage('pages.pricing'))->name('pages-pricing');
Route::get('/pages/profile', goToPage('pages.profile'))->name('pages-profile');
Route::get('/pages/profile-settings', goToPage('pages.profile-settings'))->name('pages-profile-settings');
Route::get('/pages/landing-page', goToPage('pages.landing-page'))->name('pages-landing-page');
Route::get('/pages/reviews', goToPage('pages.reviews'))->name('pages-reviews');
Route::get('/pages/search', goToPage('pages.search'))->name('pages-search');
Route::get('/pages/team', goToPage('pages.team'))->name('pages-team');
Route::get('/pages/terms-conditions', goToPage('pages.terms-conditions'))->name('pages-terms-conditions');
Route::get('/pages/timeline', goToPage('pages.timeline'))->name('pages-timeline');
Route::get('/pages/todolist', goToPage('pages.todolist'))->name('pages-todolist');

/** Forms */
Route::get('/forms/advanced', goToPage('forms.advanced'))->name('forms-advanced');
Route::get('/forms/elements/inputs', goToPage('forms.elements.inputs'))->name('forms-elements-inputs');
Route::get('/forms/elements/checksandradio', goToPage('forms.elements.checksandradio'))->name('forms-elements-checksandradio');
Route::get('/forms/elements/input-group', goToPage('forms.elements.input-group'))->name('forms-elements-input-group');
Route::get('/forms/elements/form-select', goToPage('forms.elements.form-select'))->name('forms-elements-form-select');
Route::get('/forms/elements/range-slider', goToPage('forms.elements.range-slider'))->name('forms-elements-range-slider');
Route::get('/forms/elements/input-masks', goToPage('forms.elements.input-masks'))->name('forms-elements-input-masks');
Route::get('/forms/elements/file-uploads', goToPage('forms.elements.file-uploads'))->name('forms-elements-file-uploads');
Route::get('/forms/elements/date-time-picker', goToPage('forms.elements.date-time-picker'))->name('forms-elements-date-time-picker');
Route::get('/forms/elements/color-pickers', goToPage('forms.elements.color-pickers'))->name('forms-elements-color-pickers');
Route::get('/forms/floating-label', goToPage('forms.floating-label'))->name('forms-floating-label');
Route::get('/forms/layout', goToPage('forms.layout'))->name('forms-layout');
Route::get('/forms/wizards', goToPage('forms.wizards'))->name('forms-wizards');
Route::get('/forms/quil-editor', goToPage('forms.quil-editor'))->name('forms-quil-editor');
Route::get('/forms/validation', goToPage('forms.validation'))->name('forms-validation');
Route::get('/forms/select2', goToPage('forms.select2'))->name('forms-select2');

/** UI Elements */
Route::get('/uielements/alerts', goToPage('uielements.alerts'))->name('uielements-alerts');
Route::get('/uielements/badge', goToPage('uielements.badge'))->name('uielements-badge');
Route::get('/uielements/breadcrumb', goToPage('uielements.breadcrumb'))->name('uielements-breadcrumb');
Route::get('/uielements/buttons', goToPage('uielements.buttons'))->name('uielements-buttons');
Route::get('/uielements/button-group', goToPage('uielements.button-group'))->name('uielements-button-group');
Route::get('/uielements/cards', goToPage('uielements.cards'))->name('uielements-cards');
Route::get('/uielements/dropdowns', goToPage('uielements.dropdowns'))->name('uielements-dropdowns');
Route::get('/uielements/images-figures', goToPage('uielements.images-figures'))->name('uielements-images-figures');
Route::get('/uielements/links-interactions', goToPage('uielements.links-interactions'))->name('uielements-links-interactions');
Route::get('/uielements/list-group', goToPage('uielements.list-group'))->name('uielements-list-group');
Route::get('/uielements/navs-tabs', goToPage('uielements.navs-tabs'))->name('uielements-navs-tabs');
Route::get('/uielements/object-fit', goToPage('uielements.object-fit'))->name('uielements-object-fit');
Route::get('/uielements/pagination', goToPage('uielements.pagination'))->name('uielements-pagination');
Route::get('/uielements/popovers', goToPage('uielements.popovers'))->name('uielements-popovers');
Route::get('/uielements/progress', goToPage('uielements.progress'))->name('uielements-progress');
Route::get('/uielements/spinners', goToPage('uielements.spinners'))->name('uielements-spinners');
Route::get('/uielements/toasts', goToPage('uielements.toasts'))->name('uielements-toasts');
Route::get('/uielements/tooltips', goToPage('uielements.tooltips'))->name('uielements-tooltips');
Route::get('/uielements/typography', goToPage('uielements.typography'))->name('uielements-typography');

/** Advanced UI */
Route::get('/advancedui/accordions-collapse', goToPage('advancedui.accordions-collapse'))->name('advancedui-accordions-collapse');
Route::get('/advancedui/carousel', goToPage('advancedui.carousel'))->name('advancedui-carousel');
Route::get('/advancedui/draggable-cards', goToPage('advancedui.draggable-cards'))->name('advancedui-draggable-cards');
Route::get('/advancedui/media-player', goToPage('advancedui.media-player'))->name('advancedui-media-player');
Route::get('/advancedui/modals-closes', goToPage('advancedui.modals-closes'))->name('advancedui-modals-closes');
Route::get('/advancedui/navbar', goToPage('advancedui.navbar'))->name('advancedui-navbar');
Route::get('/advancedui/offcanvas', goToPage('advancedui.offcanvas'))->name('advancedui-offcanvas');
Route::get('/advancedui/placeholders', goToPage('advancedui.placeholders'))->name('advancedui-placeholders');
Route::get('/advancedui/ratings', goToPage('advancedui.ratings'))->name('advancedui-ratings');
Route::get('/advancedui/ribbons', goToPage('advancedui.ribbons'))->name('advancedui-ribbons');
Route::get('/advancedui/scrollspy', goToPage('advancedui.scrollspy'))->name('advancedui-scrollspy');
Route::get('/advancedui/sortableJS', goToPage('advancedui.sortableJS'))->name('advancedui-sortableJS');
Route::get('/advancedui/swiperJS', goToPage('advancedui.swiperJS'))->name('advancedui-swiperJS');
Route::get('/advancedui/tour', goToPage('advancedui.tour'))->name('advancedui-tour');
Route::get('/advancedui/tree-view', goToPage('advancedui.tree-view'))->name('advancedui-tree-view');

/** Utilities */
Route::get('/utilities/avatars', goToPage('utilities.avatars'))->name('utilities-avatars');
Route::get('/utilities/borders', goToPage('utilities.borders'))->name('utilities-borders');
Route::get('/utilities/breakpoints', goToPage('utilities.breakpoints'))->name('utilities-breakpoints');
Route::get('/utilities/colors', goToPage('utilities.colors'))->name('utilities-colors');
Route::get('/utilities/columns', goToPage('utilities.columns'))->name('utilities-columns');
Route::get('/utilities/css-grid', goToPage('utilities.css-grid'))->name('utilities-css-grid');
Route::get('/utilities/flex', goToPage('utilities.flex'))->name('utilities-flex');
Route::get('/utilities/gutters', goToPage('utilities.gutters'))->name('utilities-gutters');
Route::get('/utilities/helpers', goToPage('utilities.helpers'))->name('utilities-helpers');
Route::get('/utilities/position', goToPage('utilities.position'))->name('utilities-position');
Route::get('/utilities/additional-content', goToPage('utilities.additional-content'))->name('utilities-additional-content');

/** Widgets */
Route::get('/widgets', goToPage('widgets'))->name('widgets');

/** Maps */
Route::get('/maps/vector', goToPage('maps.vector'))->name('maps-vector');
Route::get('/maps/leaflet', goToPage('maps.leaflet'))->name('maps-leaflet');
Route::get('/maps/google', goToPage('maps.google'))->name('maps-google');

/** Icons */
Route::get('/icons', goToPage('icons'))->name('icons');

/** Charts */
Route::get('/charts/apex/line', goToPage('charts.apex.line'))->name('charts-apex-line');
Route::get('/charts/apex/area', goToPage('charts.apex.area'))->name('charts-apex-area');
Route::get('/charts/apex/column', goToPage('charts.apex.column'))->name('charts-apex-column');
Route::get('/charts/apex/bar', goToPage('charts.apex.bar'))->name('charts-apex-bar');
Route::get('/charts/apex/mixed', goToPage('charts.apex.mixed'))->name('charts-apex-mixed');
Route::get('/charts/apex/range', goToPage('charts.apex.range'))->name('charts-apex-range');
Route::get('/charts/apex/timeline', goToPage('charts.apex.timeline'))->name('charts-apex-timeline');
Route::get('/charts/apex/funnel', goToPage('charts.apex.funnel'))->name('charts-apex-funnel');
Route::get('/charts/apex/candlestick', goToPage('charts.apex.candlestick'))->name('charts-apex-candlestick');
Route::get('/charts/apex/boxplot', goToPage('charts.apex.boxplot'))->name('charts-apex-boxplot');
Route::get('/charts/apex/bubble', goToPage('charts.apex.bubble'))->name('charts-apex-bubble');
Route::get('/charts/apex/scatter', goToPage('charts.apex.scatter'))->name('charts-apex-scatter');
Route::get('/charts/apex/heatmap', goToPage('charts.apex.heatmap'))->name('charts-apex-heatmap');
Route::get('/charts/apex/treemap', goToPage('charts.apex.treemap'))->name('charts-apex-treemap');
Route::get('/charts/apex/pie', goToPage('charts.apex.pie'))->name('charts-apex-pie');
Route::get('/charts/apex/radialbar', goToPage('charts.apex.radialbar'))->name('charts-apex-radialbar');
Route::get('/charts/apex/radar', goToPage('charts.apex.radar'))->name('charts-apex-radar');
Route::get('/charts/apex/polararea', goToPage('charts.apex.polararea'))->name('charts-apex-polararea');
Route::get('/charts/chartjs', goToPage('charts.chartjs'))->name('charts-chartjs');
Route::get('/charts/echart', goToPage('charts.echart'))->name('charts-echart');

/** Tables */
Route::get('/tables', goToPage('tables'))->name('tables');
Route::get('/tables/gridjs', goToPage('tables.gridjs'))->name('tables-gridjs');
Route::get('/tables/data', goToPage('tables.data'))->name('tables-data');
