<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/app-manager')) {
            // save_customer
            if ('/app-manager/save-customer' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_save_customer;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CustomerController::saveCustomerAction',  '_route' => 'save_customer',);
            }
            not_save_customer:

            // export_stock_inwards
            if ('/app-manager/stock-inwards' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_export_stock_inwards;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::exportStockInwardsAction',  '_route' => 'export_stock_inwards',);
            }
            not_export_stock_inwards:

            if (0 === strpos($pathinfo, '/app-manager/c')) {
                if (0 === strpos($pathinfo, '/app-manager/category')) {
                    // category_main_create
                    if ('/app-manager/category/new-parent-category' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_category_main_create;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::createCategoryAction',  '_route' => 'category_main_create',);
                    }
                    not_category_main_create:

                    // nested_category_create
                    if ('/app-manager/category/create-nested' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_nested_category_create;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::createNestedAction',  '_route' => 'nested_category_create',);
                    }
                    not_nested_category_create:

                    // nested_edit
                    if (preg_match('#^/app\\-manager/category/(?P<id>[^/]++)/nested\\-edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_nested_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'nested_edit')), array (  '_controller' => 'AppBundle\\Controller\\ManagerController::nestedEditAction',));
                    }
                    not_nested_edit:

                    // nested_category_list
                    if ('/app-manager/category/list-nested' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_nested_category_list;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::listNestedAction',  '_route' => 'nested_category_list',);
                    }
                    not_nested_category_list:

                    // category_sub_create
                    if ('/app-manager/category/new-sub-category' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_category_sub_create;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::createSubCategoryAction',  '_route' => 'category_sub_create',);
                    }
                    not_category_sub_create:

                    // category_edit
                    if (preg_match('#^/app\\-manager/category/(?P<id>[^/]++)/edit\\-category$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_category_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 'AppBundle\\Controller\\ManagerController::editSubCategoryAction',));
                    }
                    not_category_edit:

                    // category_main_edit
                    if (preg_match('#^/app\\-manager/category/(?P<id>[^/]++)/edit\\-main\\-category$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_category_main_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_main_edit')), array (  '_controller' => 'AppBundle\\Controller\\ManagerController::editCategoryAction',));
                    }
                    not_category_main_edit:

                    if (0 === strpos($pathinfo, '/app-manager/category/a')) {
                        // category_main_list
                        if ('/app-manager/category/all-parent-category' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_category_main_list;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::listCategoryAction',  '_route' => 'category_main_list',);
                        }
                        not_category_main_list:

                        // category_sub_list
                        if ('/app-manager/category/all-sub-category' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_category_sub_list;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::listSubCategoryAction',  '_route' => 'category_sub_list',);
                        }
                        not_category_sub_list:

                        if (0 === strpos($pathinfo, '/app-manager/category/ajax-')) {
                            // category_ajax_main_list
                            if ('/app-manager/category/ajax-parent-category' === $pathinfo) {
                                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                    $allow = array_merge($allow, array('GET', 'POST'));
                                    goto not_category_ajax_main_list;
                                }

                                return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::listCategoryAjaxAction',  '_route' => 'category_ajax_main_list',);
                            }
                            not_category_ajax_main_list:

                            // category_ajax_sub_list
                            if ('/app-manager/category/ajax-sub-category' === $pathinfo) {
                                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                    $allow = array_merge($allow, array('GET', 'POST'));
                                    goto not_category_ajax_sub_list;
                                }

                                return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::listSubCategoryAjaxAction',  '_route' => 'category_ajax_sub_list',);
                            }
                            not_category_ajax_sub_list:

                            // category_ajax_nested_list
                            if ('/app-manager/category/ajax-nested-category' === $pathinfo) {
                                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                    $allow = array_merge($allow, array('GET', 'POST'));
                                    goto not_category_ajax_nested_list;
                                }

                                return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::listNestedCategoryAjaxAction',  '_route' => 'category_ajax_nested_list',);
                            }
                            not_category_ajax_nested_list:

                        }

                    }

                }

                // csv_delete
                if (0 === strpos($pathinfo, '/app-manager/csv-delete') && preg_match('#^/app\\-manager/csv\\-delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_csv_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'csv_delete')), array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::deleteCSVAction',));
                }
                not_csv_delete:

                if (0 === strpos($pathinfo, '/app-manager/customer')) {
                    // users_list
                    if ('/app-manager/customer/all-users' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_users_list;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\CustomerController::listUserAction',  '_route' => 'users_list',);
                    }
                    not_users_list:

                    // customer_page
                    if ('/app-manager/customer-page' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_customer_page;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\CustomerController::customerPageAction',  '_route' => 'customer_page',);
                    }
                    not_customer_page:

                    // users_view
                    if (preg_match('#^/app\\-manager/customer/(?P<id>[^/]++)/view$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_users_view;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_view')), array (  '_controller' => 'AppBundle\\Controller\\CustomerController::viewUsersAction',));
                    }
                    not_users_view:

                }

            }

            elseif (0 === strpos($pathinfo, '/app-manager/b')) {
                if (0 === strpos($pathinfo, '/app-manager/brand')) {
                    // brand_create
                    if ('/app-manager/brand/new-brand' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_brand_create;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\BrandController::createBrandAction',  '_route' => 'brand_create',);
                    }
                    not_brand_create:

                    // ajax_brand_list
                    if ('/app-manager/brand/ajax-brand-list' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_ajax_brand_list;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\BrandController::ajaxBrandListAction',  '_route' => 'ajax_brand_list',);
                    }
                    not_ajax_brand_list:

                    // brand_list
                    if ('/app-manager/brand/all-brands' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_brand_list;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\BrandController::listBrandsAction',  '_route' => 'brand_list',);
                    }
                    not_brand_list:

                    // brand_edit
                    if (0 === strpos($pathinfo, '/app-manager/brand-edit') && preg_match('#^/app\\-manager/brand\\-edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_brand_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'brand_edit')), array (  '_controller' => 'AppBundle\\Controller\\BrandController::brandEditAction',));
                    }
                    not_brand_edit:

                }

                // bulk_action_brands
                if ('/app-manager/bulk-action-brands' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_bulk_action_brands;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\BrandController::bulkActionBrandsAction',  '_route' => 'bulk_action_brands',);
                }
                not_bulk_action_brands:

                // bulk_action_items
                if ('/app-manager/bulk-action-items' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_bulk_action_items;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::bulkActionitemsAction',  '_route' => 'bulk_action_items',);
                }
                not_bulk_action_items:

            }

            // update_return
            if ('/app-manager/return/update' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_update_return;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ReturnController::updateAction',  '_route' => 'update_return',);
            }
            not_update_return:

            // report_view
            if ('/app-manager/report/view' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_report_view;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CustomerController::reportUserAction',  '_route' => 'report_view',);
            }
            not_report_view:

            // delivery_location
            if ('/app-manager/delivery-location' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_delivery_location;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::locationAction',  '_route' => 'delivery_location',);
            }
            not_delivery_location:

            // view_location
            if (0 === strpos($pathinfo, '/app-manager/view-location') && preg_match('#^/app\\-manager/view\\-location/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_view_location;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'view_location')), array (  '_controller' => 'AppBundle\\Controller\\ManagerController::ViewLocationAction',));
            }
            not_view_location:

            if (0 === strpos($pathinfo, '/app-manager/view-menu')) {
                // restaurant_view_menu_item
                if ('/app-manager/view-menu' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::viewMenuItemAction',  '_route' => 'restaurant_view_menu_item',);
                }

                // view_menu_item
                if ('/app-manager/view-menu-ajax' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::viewMenuItemAjaxAction',  '_route' => 'view_menu_item',);
                }

                // restaurant_view_single_menu_item
                if (0 === strpos($pathinfo, '/app-manager/view-menu/details') && preg_match('#^/app\\-manager/view\\-menu/details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'restaurant_view_single_menu_item')), array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::viewMenuItemDetailAction',));
                }

            }

            // location_delete
            if (0 === strpos($pathinfo, '/app-manager/location-delete') && preg_match('#^/app\\-manager/location\\-delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_location_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'location_delete')), array (  '_controller' => 'AppBundle\\Controller\\ManagerController::deleteLocationAction',));
            }
            not_location_delete:

            // thermal_print
            if (0 === strpos($pathinfo, '/app-manager/thermal-print') && preg_match('#^/app\\-manager/thermal\\-print/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_thermal_print;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thermal_print')), array (  '_controller' => 'AppBundle\\Controller\\OrderController::thermalPrintAction',));
            }
            not_thermal_print:

            // filter_order_list
            if ('/app-manager/filter-order-list' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_filter_order_list;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\OrderController::filterOrderListAction',  '_route' => 'filter_order_list',);
            }
            not_filter_order_list:

            // normal_print
            if (0 === strpos($pathinfo, '/app-manager/normal-print') && preg_match('#^/app\\-manager/normal\\-print/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_normal_print;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'normal_print')), array (  '_controller' => 'AppBundle\\Controller\\OrderController::normalPrintAction',));
            }
            not_normal_print:

            if (0 === strpos($pathinfo, '/app-manager/me')) {
                if (0 === strpos($pathinfo, '/app-manager/membership')) {
                    // add_membership
                    if ('/app-manager/membership/add-membership' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_add_membership;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::addMembershipAction',  '_route' => 'add_membership',);
                    }
                    not_add_membership:

                    // create_membership
                    if ('/app-manager/membership/create' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_create_membership;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::createMembershipAction',  '_route' => 'create_membership',);
                    }
                    not_create_membership:

                    // manage_membership
                    if ('/app-manager/membership/manage-membership' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_manage_membership;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::manageMembershipAction',  '_route' => 'manage_membership',);
                    }
                    not_manage_membership:

                }

                elseif (0 === strpos($pathinfo, '/app-manager/menu-item')) {
                    // bulk_import
                    if ('/app-manager/menu-item/bulk-import' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_bulk_import;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::bulkImportAction',  '_route' => 'bulk_import',);
                    }
                    not_bulk_import:

                    // bulk_update
                    if ('/app-manager/menu-item/bulk-update' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_bulk_update;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::bulkUpdateAction',  '_route' => 'bulk_update',);
                    }
                    not_bulk_update:

                    // restaurant_add_menu_item
                    if ('/app-manager/menu-item' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::addMenuItemAction',  '_route' => 'restaurant_add_menu_item',);
                    }

                    // restaurant_edit_menu_item
                    if (preg_match('#^/app\\-manager/menu\\-item/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'restaurant_edit_menu_item')), array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::editMenuItemAction',));
                    }

                }

                // bulk_update_menu_item
                if ('/app-manager/menu-category' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::menuCategoryAction',  '_route' => 'bulk_update_menu_item',);
                }

            }

            // add_location
            if ('/app-manager/add-location' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_add_location;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::addLocationAction',  '_route' => 'add_location',);
            }
            not_add_location:

            // update_location
            if ('/app-manager/update-location' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_update_location;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::updateLocationAction',  '_route' => 'update_location',);
            }
            not_update_location:

            // product_variation
            if ('/app-manager/product-variation' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_product_variation;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::productVariationAction',  '_route' => 'product_variation',);
            }
            not_product_variation:

            if (0 === strpos($pathinfo, '/app-manager/products/import')) {
                // import_products
                if ('/app-manager/products/import' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_import_products;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::importProductAction',  '_route' => 'import_products',);
                }
                not_import_products:

                // import_root_items
                if ('/app-manager/products/import-root-items' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_import_root_items;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::importRootItemsAction',  '_route' => 'import_root_items',);
                }
                not_import_root_items:

            }

            elseif (0 === strpos($pathinfo, '/app-manager/import-csv')) {
                // manage_import_csv
                if ('/app-manager/import-csv' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_manage_import_csv;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::importCSVAction',  '_route' => 'manage_import_csv',);
                }
                not_manage_import_csv:

                // manage_import_csv_branch
                if ('/app-manager/import-csv-branch' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_manage_import_csv_branch;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::importCSVBranchAction',  '_route' => 'manage_import_csv_branch',);
                }
                not_manage_import_csv_branch:

            }

            elseif (0 === strpos($pathinfo, '/app-manager/import-pricing')) {
                // manage_import_pricing
                if ('/app-manager/import-pricing' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_manage_import_pricing;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::importPricingAction',  '_route' => 'manage_import_pricing',);
                }
                not_manage_import_pricing:

                // manage_import_pricing_branch
                if ('/app-manager/import-pricing-branch' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_manage_import_pricing_branch;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::importBranchPricingAction',  '_route' => 'manage_import_pricing_branch',);
                }
                not_manage_import_pricing_branch:

            }

            elseif (0 === strpos($pathinfo, '/app-manager/get-')) {
                if (0 === strpos($pathinfo, '/app-manager/get-csv')) {
                    // get_csv
                    if ('/app-manager/get-csv' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_get_csv;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::getCsvAction',  '_route' => 'get_csv',);
                    }
                    not_get_csv:

                    // get_csv_branch
                    if ('/app-manager/get-csv-branch' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_get_csv_branch;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::getCsvBranchAction',  '_route' => 'get_csv_branch',);
                    }
                    not_get_csv_branch:

                }

                // get_category_csv
                if ('/app-manager/get-category-csv' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_get_category_csv;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::getCategoryCsvAction',  '_route' => 'get_category_csv',);
                }
                not_get_category_csv:

                // get_single_stock
                if ('/app-manager/get-single-stock' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_get_single_stock;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::getSingleStockAction',  '_route' => 'get_single_stock',);
                }
                not_get_single_stock:

            }

            elseif (0 === strpos($pathinfo, '/app-manager/e')) {
                if (0 === strpos($pathinfo, '/app-manager/export')) {
                    if (0 === strpos($pathinfo, '/app-manager/export_')) {
                        // export_subcategory
                        if ('/app-manager/export_subcategory' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_export_subcategory;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\StockController::exportSubcategoryAction',  '_route' => 'export_subcategory',);
                        }
                        not_export_subcategory:

                        // export_category
                        if ('/app-manager/export_category' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_export_category;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\StockController::exportCategoryAction',  '_route' => 'export_category',);
                        }
                        not_export_category:

                        // export_nestedcategory
                        if ('/app-manager/export_nestedcategory' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_export_nestedcategory;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\StockController::exportNestedCategoryAction',  '_route' => 'export_nestedcategory',);
                        }
                        not_export_nestedcategory:

                    }

                    // export_brands
                    if ('/app-manager/export-brands' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_export_brands;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\StockController::exportBrandsAction',  '_route' => 'export_brands',);
                    }
                    not_export_brands:

                    // export_stock
                    if ('/app-manager/export-stock' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_export_stock;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\StockController::exportStockAction',  '_route' => 'export_stock',);
                    }
                    not_export_stock:

                }

                // single_update_menu_item
                if (0 === strpos($pathinfo, '/app-manager/edit-bulk-items') && preg_match('#^/app\\-manager/edit\\-bulk\\-items/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'single_update_menu_item')), array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::editBulkAction',));
                }

                // ajax_update_menu_item
                if (0 === strpos($pathinfo, '/app-manager/edit-ajax-items') && preg_match('#^/app\\-manager/edit\\-ajax\\-items/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajax_update_menu_item')), array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::editBulkAjaxAction',));
                }

            }

            // restaurant_all_orders_list
            if (preg_match('#^/app\\-manager/(?P<status>[^/]++)/orders$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'restaurant_all_orders_list')), array (  '_controller' => 'AppBundle\\Controller\\OrderController::reportAction',));
            }

            // getpickup__location
            if ('/app-manager/get-pickup-location' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_getpickup__location;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::getpickuplocationAction',  '_route' => 'getpickup__location',);
            }
            not_getpickup__location:

            // update_pickup_status
            if ('/app-manager/update-pickup-status' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_update_pickup_status;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\OrderController::updatePickUpStatusAction',  '_route' => 'update_pickup_status',);
            }
            not_update_pickup_status:

            // restaurant_all_pickup_list
            if (preg_match('#^/app\\-manager/(?P<status>[^/]++)/pickup$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'restaurant_all_pickup_list')), array (  '_controller' => 'AppBundle\\Controller\\OrderController::pickupListAction',));
            }

            // restaurant_all_express_list
            if (preg_match('#^/app\\-manager/(?P<status>[^/]++)/express$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'restaurant_all_express_list')), array (  '_controller' => 'AppBundle\\Controller\\OrderController::expressListAction',));
            }

            // restaurant_all_orders_count
            if (preg_match('#^/app\\-manager/(?P<status>[^/]++)/status$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'restaurant_all_orders_count')), array (  '_controller' => 'AppBundle\\Controller\\OrderController::statusAction',));
            }

            // pickup_location
            if ('/app-manager/pickup-location' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::pickupLocationAction',  '_route' => 'pickup_location',);
            }

            // delete_pickup
            if (0 === strpos($pathinfo, '/app-manager/delete-pickup') && preg_match('#^/app\\-manager/delete\\-pickup/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_pickup')), array (  '_controller' => 'AppBundle\\Controller\\ManagerController::deletePickupAction',));
            }

            // create_pickup_location
            if ('/app-manager/create-pickup-location' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::createpickupLocationAction',  '_route' => 'create_pickup_location',);
            }

            // edit_pickup_location
            if ('/app-manager/edit-pickup-location' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::editpickupLocationAction',  '_route' => 'edit_pickup_location',);
            }

            // restaurant_orders_list
            if (preg_match('#^/app\\-manager/(?P<status>[^/]++)/orders\\-reports$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'restaurant_orders_list')), array (  '_controller' => 'AppBundle\\Controller\\OrderController::reportJsonAction',));
            }

            // restaurant_orders_panel_update
            if (preg_match('#^/app\\-manager/(?P<id>[^/]++)/order\\-update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'restaurant_orders_panel_update')), array (  '_controller' => 'AppBundle\\Controller\\OrderController::editOrderAction',));
            }

            if (0 === strpos($pathinfo, '/app-manager/p')) {
                if (0 === strpos($pathinfo, '/app-manager/pickup')) {
                    // restaurant_pickup_panel_update
                    if (preg_match('#^/app\\-manager/pickup/(?P<id>[^/]++)/pickup\\-update$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'restaurant_pickup_panel_update')), array (  '_controller' => 'AppBundle\\Controller\\OrderController::editPickupAction',));
                    }

                    // pickup_slots
                    if (0 === strpos($pathinfo, '/app-manager/pickup-slots') && preg_match('#^/app\\-manager/pickup\\-slots/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pickup_slots')), array (  '_controller' => 'AppBundle\\Controller\\ManagerController::allPickupSlotsAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/app-manager/promocode')) {
                    // manage_promocode
                    if ('/app-manager/promocode' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PromocodeController::listPromoAction',  '_route' => 'manage_promocode',);
                    }

                    // add_new_promocode
                    if ('/app-manager/promocode/update' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PromocodeController::addnewAction',  '_route' => 'add_new_promocode',);
                    }

                }

                // manage_restaurant_stock
                if ('/app-manager/purchase-inwards' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\StockController::stockAction',  '_route' => 'manage_restaurant_stock',);
                }

                if (0 === strpos($pathinfo, '/app-manager/purchase-return')) {
                    // manage_restaurant_stock_return
                    if ('/app-manager/purchase-return-list' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\StockController::stockReturnAction',  '_route' => 'manage_restaurant_stock_return',);
                    }

                    // manage_restaurant_purchase_return
                    if ('/app-manager/purchase-return' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\StockController::stockReturnFormAction',  '_route' => 'manage_restaurant_purchase_return',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/app-manager/pages')) {
                    // pages_about
                    if ('/app-manager/pages/about' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_pages_about;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::pageAboutAction',  '_route' => 'pages_about',);
                    }
                    not_pages_about:

                    // pages_privacy
                    if ('/app-manager/pages/privacy-policy' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_pages_privacy;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::privacyPolicyAction',  '_route' => 'pages_privacy',);
                    }
                    not_pages_privacy:

                    // pages_terms
                    if ('/app-manager/pages/terms-condition' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_pages_terms;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::termsAction',  '_route' => 'pages_terms',);
                    }
                    not_pages_terms:

                    // pages_return
                    if ('/app-manager/pages/return' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_pages_return;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::returnAction',  '_route' => 'pages_return',);
                    }
                    not_pages_return:

                    // pages_refund
                    if ('/app-manager/pages/refund' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_pages_refund;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::refundAction',  '_route' => 'pages_refund',);
                    }
                    not_pages_refund:

                    // pages_wallet
                    if ('/app-manager/pages/wallet' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_pages_wallet;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::walletAction',  '_route' => 'pages_wallet',);
                    }
                    not_pages_wallet:

                    // update_page_details
                    if ('/app-manager/pages/update' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_update_page_details;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::pageUpdateAction',  '_route' => 'update_page_details',);
                    }
                    not_update_page_details:

                }

            }

            elseif (0 === strpos($pathinfo, '/app-manager/re')) {
                if (0 === strpos($pathinfo, '/app-manager/report')) {
                    // profit_report
                    if ('/app-manager/report/profit' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\ReportsController::profitAction',  '_route' => 'profit_report',);
                    }

                    if (0 === strpos($pathinfo, '/app-manager/report/itemwise-sales-report')) {
                        // itemwise_report
                        if ('/app-manager/report/itemwise-sales-report' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\ReportsController::itemSalesReportAction',  '_route' => 'itemwise_report',);
                        }

                        // view_item_sale
                        if (preg_match('#^/app\\-manager/report/itemwise\\-sales\\-report/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'view_item_sale')), array (  '_controller' => 'AppBundle\\Controller\\ReportsController::itemSalesReportListAction',));
                        }

                    }

                    // manage_app_foodra_order_report
                    if ('/app-manager/report/sales' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\ReportsController::orderAction',  '_route' => 'manage_app_foodra_order_report',);
                    }

                    // manage_app_foodra_all_stock_report
                    if ('/app-manager/report/stock' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\StockController::allstockReportsAction',  '_route' => 'manage_app_foodra_all_stock_report',);
                    }

                    // manage_app_foodra_stock_report
                    if ('/app-manager/report/out-of-stock' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\StockController::stockReportsAction',  '_route' => 'manage_app_foodra_stock_report',);
                    }

                    if (0 === strpos($pathinfo, '/app-manager/report/brandwise-sales-report')) {
                        // brandwise_report
                        if ('/app-manager/report/brandwise-sales-report' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\ReportsController::brandSalesReportAction',  '_route' => 'brandwise_report',);
                        }

                        // view_brand_sale
                        if (preg_match('#^/app\\-manager/report/brandwise\\-sales\\-report/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'view_brand_sale')), array (  '_controller' => 'AppBundle\\Controller\\ReportsController::brandSalesReportListAction',));
                        }

                    }

                }

                elseif (0 === strpos($pathinfo, '/app-manager/returns')) {
                    // restaurant_return
                    if (0 === strpos($pathinfo, '/app-manager/returns/returns') && preg_match('#^/app\\-manager/returns/returns/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'restaurant_return')), array (  '_controller' => 'AppBundle\\Controller\\ReturnController::newReturnsAction',));
                    }

                    // restaurant_view_return
                    if (0 === strpos($pathinfo, '/app-manager/returns/view') && preg_match('#^/app\\-manager/returns/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'restaurant_view_return')), array (  '_controller' => 'AppBundle\\Controller\\ReturnController::viewReturnAction',));
                    }

                    // restaurant_view_ajax
                    if ('/app-manager/returns/ajax' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\ReturnController::ajaxAction',  '_route' => 'restaurant_view_ajax',);
                    }

                }

                // manage_restaurant_return_stock_item
                if ('/app-manager/return-stock-item' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\StockController::returnStockItemAction',  '_route' => 'manage_restaurant_return_stock_item',);
                }

            }

            elseif (0 === strpos($pathinfo, '/app-manager/filter')) {
                if (0 === strpos($pathinfo, '/app-manager/filter-')) {
                    // filter_profit
                    if ('/app-manager/filter-profit' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\ReportsController::profitFilterAction',  '_route' => 'filter_profit',);
                    }

                    // filter_notification_user
                    if ('/app-manager/filter-notification-user' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_filter_notification_user;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\FirebaseController::filterNotifcationUserAction',  '_route' => 'filter_notification_user',);
                    }
                    not_filter_notification_user:

                    // filter_items
                    if ('/app-manager/filter-items' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_filter_items;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ReportsController::filterItemsAction',  '_route' => 'filter_items',);
                    }
                    not_filter_items:

                    // filter_delivery
                    if ('/app-manager/filter-delivery' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_filter_delivery;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ReportsController::filterDeliveryAction',  '_route' => 'filter_delivery',);
                    }
                    not_filter_delivery:

                    // filter_order_list_ajax
                    if ('/app-manager/filter-order-list-ajax' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_filter_order_list_ajax;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\OrderController::filterOrderListAjaxAction',  '_route' => 'filter_order_list_ajax',);
                    }
                    not_filter_order_list_ajax:

                    // filter_brands
                    if ('/app-manager/filter-brands' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_filter_brands;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ReportsController::filterBrandsAction',  '_route' => 'filter_brands',);
                    }
                    not_filter_brands:

                }

                // filter_order
                if ('/app-manager/filter/order' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_filter_order;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ReportsController::filterOrderAction',  '_route' => 'filter_order',);
                }
                not_filter_order:

                // filter_gst_report
                if ('/app-manager/filter/gst' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_filter_gst_report;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ReportsController::filterGstReportAction',  '_route' => 'filter_gst_report',);
                }
                not_filter_gst_report:

            }

            elseif (0 === strpos($pathinfo, '/app-manager/del')) {
                if (0 === strpos($pathinfo, '/app-manager/delivery-slots')) {
                    // delivery_slots
                    if (preg_match('#^/app\\-manager/delivery\\-slots/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delivery_slots')), array (  '_controller' => 'AppBundle\\Controller\\ManagerController::allDeliverySlotsAction',));
                    }

                    // all_delivery_slots
                    if ('/app-manager/delivery-slots' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::deliverySlotsAction',  '_route' => 'all_delivery_slots',);
                    }

                }

                // delivery_boy_reports
                if ('/app-manager/delivery-reports' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_delivery_boy_reports;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ReportsController::deliveryBoyReportAction',  '_route' => 'delivery_boy_reports',);
                }
                not_delivery_boy_reports:

                // delete_menu_items
                if ('/app-manager/delete-menu-items' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_delete_menu_items;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::deleteMenuItemAction',  '_route' => 'delete_menu_items',);
                }
                not_delete_menu_items:

            }

            // do_order
            if ('/app-manager/do-order' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_do_order;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\OrderController::doOrderAction',  '_route' => 'do_order',);
            }
            not_do_order:

            if (0 === strpos($pathinfo, '/app-manager/a')) {
                if (0 === strpos($pathinfo, '/app-manager/add-stock')) {
                    // add_stock_csv
                    if ('/app-manager/add-stock-csv' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_add_stock_csv;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\StockController::addStockCsvAction',  '_route' => 'add_stock_csv',);
                    }
                    not_add_stock_csv:

                    // manage_restaurant_add_stock
                    if ('/app-manager/add-stock' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\StockController::addStockAction',  '_route' => 'manage_restaurant_add_stock',);
                    }

                    // manage_restaurant_add_stock_item
                    if ('/app-manager/add-stock-item' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\StockController::addStockItemAction',  '_route' => 'manage_restaurant_add_stock_item',);
                    }

                }

                // ajax_stock_list
                if ('/app-manager/ajax-all-stock' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\StockController::ajaxAllStockAction',  '_route' => 'ajax_stock_list',);
                }

                // ajax_out_stock_list
                if ('/app-manager/ajax-out-stock-list' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\StockController::ajaxoutStockListAction',  '_route' => 'ajax_out_stock_list',);
                }

                // app_home_page
                if ('/app-manager/app-home-page' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_app_home_page;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::appHomePageAction',  '_route' => 'app_home_page',);
                }
                not_app_home_page:

                // all_tickets
                if (0 === strpos($pathinfo, '/app-manager/all-tickets') && preg_match('#^/app\\-manager/all\\-tickets/(?P<status>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_all_tickets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'all_tickets')), array (  '_controller' => 'AppBundle\\Controller\\TicketsController::listAction',));
                }
                not_all_tickets:

            }

            elseif (0 === strpos($pathinfo, '/app-manager/s')) {
                // manage_restaurant_stock_detail
                if (0 === strpos($pathinfo, '/app-manager/stock-detail') && preg_match('#^/app\\-manager/stock\\-detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'manage_restaurant_stock_detail')), array (  '_controller' => 'AppBundle\\Controller\\StockController::stockDetailAction',));
                }

                // manage_restaurant_get_var
                if ('/app-manager/stock/get-var' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_manage_restaurant_get_var;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\StockController::getVarAction',  '_route' => 'manage_restaurant_get_var',);
                }
                not_manage_restaurant_get_var:

                // sub_category_status
                if (0 === strpos($pathinfo, '/app-manager/sub-category-status') && preg_match('#^/app\\-manager/sub\\-category\\-status/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_sub_category_status;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sub_category_status')), array (  '_controller' => 'AppBundle\\Controller\\ManagerController::subcategoryStatusAction',));
                }
                not_sub_category_status:

                // sms_manage_template
                if ('/app-manager/sms/manage-tempalte' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_sms_manage_template;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SmsController::ManageTemplateAction',  '_route' => 'sms_manage_template',);
                }
                not_sms_manage_template:

                // site_setting
                if ('/app-manager/site-setting' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_site_setting;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::siteSettingAction',  '_route' => 'site_setting',);
                }
                not_site_setting:

                if (0 === strpos($pathinfo, '/app-manager/se')) {
                    // send_push_notification
                    if (0 === strpos($pathinfo, '/app-manager/send-push-notification') && preg_match('#^/app\\-manager/send\\-push\\-notification/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_send_push_notification;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'send_push_notification')), array (  '_controller' => 'AppBundle\\Controller\\FirebaseController::sendPushnotificationAction',));
                    }
                    not_send_push_notification:

                    // send_notification
                    if ('/app-manager/send-notification' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_send_notification;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\FirebaseController::sendNotificationAction',  '_route' => 'send_notification',);
                    }
                    not_send_notification:

                    // search_data
                    if ('/app-manager/search' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_search_data;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::searchAction',  '_route' => 'search_data',);
                    }
                    not_search_data:

                }

                // app_shop_details
                if ('/app-manager/shop-details' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_app_shop_details;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::shopDetailsAction',  '_route' => 'app_shop_details',);
                }
                not_app_shop_details:

                // sales
                if ('/app-manager/sales' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_sales;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::salesAction',  '_route' => 'sales',);
                }
                not_sales:

            }

            elseif (0 === strpos($pathinfo, '/app-manager/c')) {
                // category_status
                if (0 === strpos($pathinfo, '/app-manager/category-status') && preg_match('#^/app\\-manager/category\\-status/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_category_status;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_status')), array (  '_controller' => 'AppBundle\\Controller\\ManagerController::categoryStatusAction',));
                }
                not_category_status:

                if (0 === strpos($pathinfo, '/app-manager/create-')) {
                    // create_slot
                    if (0 === strpos($pathinfo, '/app-manager/create-slot') && preg_match('#^/app\\-manager/create\\-slot/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_create_slot;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'create_slot')), array (  '_controller' => 'AppBundle\\Controller\\ManagerController::createSlotAction',));
                    }
                    not_create_slot:

                    // create_tray_number
                    if ('/app-manager/create-tray-number' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_create_tray_number;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\OrderController::createTrayNumberAction',  '_route' => 'create_tray_number',);
                    }
                    not_create_tray_number:

                    // create_home_page
                    if ('/app-manager/create-home-page' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_create_home_page;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::createHomePageAction',  '_route' => 'create_home_page',);
                    }
                    not_create_home_page:

                    // create_category
                    if ('/app-manager/create-category' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_create_category;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::addCategoryAction',  '_route' => 'create_category',);
                    }
                    not_create_category:

                }

                // customer_create
                if ('/app-manager/customer/create' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_customer_create;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CustomerController::createCustomerAction',  '_route' => 'customer_create',);
                }
                not_customer_create:

                // insert_customer
                if ('/app-manager/customer/insert' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_insert_customer;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CustomerController::insertCustomerAction',  '_route' => 'insert_customer',);
                }
                not_insert_customer:

            }

            elseif (0 === strpos($pathinfo, '/app-manager/b')) {
                // brand_status
                if (0 === strpos($pathinfo, '/app-manager/brand-status') && preg_match('#^/app\\-manager/brand\\-status/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_brand_status;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'brand_status')), array (  '_controller' => 'AppBundle\\Controller\\BrandController::brandStatusAction',));
                }
                not_brand_status:

                // block_slot
                if (0 === strpos($pathinfo, '/app-manager/block-slot') && preg_match('#^/app\\-manager/block\\-slot/(?P<id>[^/]++)/(?P<date>[^/]++)/(?P<area>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_block_slot;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'block_slot')), array (  '_controller' => 'AppBundle\\Controller\\ManagerController::blockSlotAction',));
                }
                not_block_slot:

                if (0 === strpos($pathinfo, '/app-manager/bulk-action-')) {
                    // bulk_action_category
                    if ('/app-manager/bulk-action-category' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_bulk_action_category;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::bulkActionCategoryAction',  '_route' => 'bulk_action_category',);
                    }
                    not_bulk_action_category:

                    // bulk_action_sub_category
                    if ('/app-manager/bulk-action-sub-category' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_bulk_action_sub_category;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::bulkActionSubCategoryAction',  '_route' => 'bulk_action_sub_category',);
                    }
                    not_bulk_action_sub_category:

                    // bulk_action_nested_category
                    if ('/app-manager/bulk-action-nested-category' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_bulk_action_nested_category;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::bulkActionNestedCategoryAction',  '_route' => 'bulk_action_nested_category',);
                    }
                    not_bulk_action_nested_category:

                }

            }

            // category_nested_status
            if (0 === strpos($pathinfo, '/app-manager/nested-status') && preg_match('#^/app\\-manager/nested\\-status/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_category_nested_status;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_nested_status')), array (  '_controller' => 'AppBundle\\Controller\\ManagerController::nestedStatusAction',));
            }
            not_category_nested_status:

            if (0 === strpos($pathinfo, '/app-manager/m')) {
                // menu_status
                if (0 === strpos($pathinfo, '/app-manager/menu-status') && preg_match('#^/app\\-manager/menu\\-status/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_menu_status;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_status')), array (  '_controller' => 'AppBundle\\Controller\\ManagerController::menuStatusAction',));
                }
                not_menu_status:

                // manage_category
                if ('/app-manager/manage-categories' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_manage_category;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::manageCategoriesAction',  '_route' => 'manage_category',);
                }
                not_manage_category:

                if (0 === strpos($pathinfo, '/app-manager/manage-category')) {
                    // manage_category_get
                    if (preg_match('#^/app\\-manager/manage\\-category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_manage_category_get;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'manage_category_get')), array (  '_controller' => 'AppBundle\\Controller\\ManagerController::manageSubCategoriesAction',));
                    }
                    not_manage_category_get:

                    // manage_category_get_nested
                    if (preg_match('#^/app\\-manager/manage\\-category/(?P<parent>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_manage_category_get_nested;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'manage_category_get_nested')), array (  '_controller' => 'AppBundle\\Controller\\ManagerController::manageNestedCategoriesAction',));
                    }
                    not_manage_category_get_nested:

                }

            }

            // unblock_slot
            if (0 === strpos($pathinfo, '/app-manager/unblock-slot') && preg_match('#^/app\\-manager/unblock\\-slot/(?P<id>[^/]++)/(?P<date>[^/]++)/(?P<area>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_unblock_slot;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'unblock_slot')), array (  '_controller' => 'AppBundle\\Controller\\ManagerController::unblockSlotAction',));
            }
            not_unblock_slot:

            if (0 === strpos($pathinfo, '/app-manager/update-')) {
                if (0 === strpos($pathinfo, '/app-manager/update-t')) {
                    // update_tray_quantity
                    if ('/app-manager/update-tray-quantity' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_update_tray_quantity;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\OrderController::updateTrayNumberAction',  '_route' => 'update_tray_quantity',);
                    }
                    not_update_tray_quantity:

                    // update_template
                    if ('/app-manager/update-tempalte' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_update_template;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\SmsController::updateTemplateAction',  '_route' => 'update_template',);
                    }
                    not_update_template:

                    // update_ticket
                    if ('/app-manager/update-tickets' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_update_ticket;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\TicketsController::updateAction',  '_route' => 'update_ticket',);
                    }
                    not_update_ticket:

                }

                elseif (0 === strpos($pathinfo, '/app-manager/update-order')) {
                    // update_order_status
                    if ('/app-manager/update-order-status' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_update_order_status;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\OrderController::updateOrderStatusAction',  '_route' => 'update_order_status',);
                    }
                    not_update_order_status:

                    // update_order
                    if ('/app-manager/update-order' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_update_order;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\OrderController::updateOrderAction',  '_route' => 'update_order',);
                    }
                    not_update_order:

                }

                // update_site_details
                if ('/app-manager/update-site-details' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_update_site_details;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::siteDetailsAction',  '_route' => 'update_site_details',);
                }
                not_update_site_details:

                // update_shop_details
                if ('/app-manager/update-shop-details' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_update_shop_details;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::updateShopDetailsAction',  '_route' => 'update_shop_details',);
                }
                not_update_shop_details:

                if (0 === strpos($pathinfo, '/app-manager/update-payment')) {
                    // update_payment
                    if ('/app-manager/update-payment' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_update_payment;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\OrderController::updatePaymentAction',  '_route' => 'update_payment',);
                    }
                    not_update_payment:

                    // update_payment_pending
                    if ('/app-manager/update-payment-pending' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_update_payment_pending;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\OrderController::updatePaymentPendingAction',  '_route' => 'update_payment_pending',);
                    }
                    not_update_payment_pending:

                }

                // update_loyalty
                if ('/app-manager/update-loyalty' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_update_loyalty;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\LoyaltyController::editAction',  '_route' => 'update_loyalty',);
                }
                not_update_loyalty:

                // update_category
                if ('/app-manager/update-category' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_update_category;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::updateCategoryAction',  '_route' => 'update_category',);
                }
                not_update_category:

            }

            // edit_slots
            if (0 === strpos($pathinfo, '/app-manager/edit-slot') && preg_match('#^/app\\-manager/edit\\-slot/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_edit_slots;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_slots')), array (  '_controller' => 'AppBundle\\Controller\\ManagerController::editSlotAction',));
            }
            not_edit_slots:

            // export_order
            if ('/app-manager/export-order' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_export_order;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\OrderController::exportOrderAction',  '_route' => 'export_order',);
            }
            not_export_order:

            // create_order
            if ('/app-manager/orders/create' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_create_order;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\OrderController::createOrderAction',  '_route' => 'create_order',);
            }
            not_create_order:

            if (0 === strpos($pathinfo, '/app-manager/get-')) {
                // get_customer_data
                if ('/app-manager/get-customer-data' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_get_customer_data;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::getCustomerdataAction',  '_route' => 'get_customer_data',);
                }
                not_get_customer_data:

                // get_time_by_location
                if ('/app-manager/get-time-by-location' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_get_time_by_location;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::getTimeByLocationAction',  '_route' => 'get_time_by_location',);
                }
                not_get_time_by_location:

                // get_slot_by_id
                if ('/app-manager/get-slot-by-id' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_get_slot_by_id;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\OrderController::getSlotByIdAction',  '_route' => 'get_slot_by_id',);
                }
                not_get_slot_by_id:

                // get_sales
                if ('/app-manager/get-sales' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_get_sales;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::getSalesAction',  '_route' => 'get_sales',);
                }
                not_get_sales:

            }

            // list_notification
            if ('/app-manager/list-notification' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_list_notification;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\FirebaseController::listNotificationAction',  '_route' => 'list_notification',);
            }
            not_list_notification:

            // loyalty
            if ('/app-manager/loyalty' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_loyalty;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\LoyaltyController::manageAction',  '_route' => 'loyalty',);
            }
            not_loyalty:

            if (0 === strpos($pathinfo, '/app-manager/view-')) {
                // view_notification
                if (0 === strpos($pathinfo, '/app-manager/view-notification') && preg_match('#^/app\\-manager/view\\-notification/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_view_notification;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'view_notification')), array (  '_controller' => 'AppBundle\\Controller\\FirebaseController::viewNotificationAction',));
                }
                not_view_notification:

                // view_tickets
                if (0 === strpos($pathinfo, '/app-manager/view-tickets') && preg_match('#^/app\\-manager/view\\-tickets/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_view_tickets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'view_tickets')), array (  '_controller' => 'AppBundle\\Controller\\TicketsController::viewAction',));
                }
                not_view_tickets:

                // view_customer_report_month
                if (0 === strpos($pathinfo, '/app-manager/view-customer-report-month') && preg_match('#^/app\\-manager/view\\-customer\\-report\\-month/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_view_customer_report_month;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'view_customer_report_month')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::viewCustomerReportMonthAction',));
                }
                not_view_customer_report_month:

                // view_order_report_month
                if (0 === strpos($pathinfo, '/app-manager/view-order-report-month') && preg_match('#^/app\\-manager/view\\-order\\-report\\-month/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_view_order_report_month;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'view_order_report_month')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::viewOrderReportMonthAction',));
                }
                not_view_order_report_month:

                // view_order_sale_report_month
                if (0 === strpos($pathinfo, '/app-manager/view-order-sale-report-month') && preg_match('#^/app\\-manager/view\\-order\\-sale\\-report\\-month/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_view_order_sale_report_month;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'view_order_sale_report_month')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::viewOrderSaleReportMonthAction',));
                }
                not_view_order_sale_report_month:

            }

            // transaction_list
            if ('/app-manager/transaction-list' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_transaction_list;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::transactionListAction',  '_route' => 'transaction_list',);
            }
            not_transaction_list:

            // tickets
            if (0 === strpos($pathinfo, '/app-manager/tickets') && preg_match('#^/app\\-manager/tickets/(?P<status>[^/]++)/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_tickets;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tickets')), array (  '_controller' => 'AppBundle\\Controller\\TicketsController::allAction',));
            }
            not_tickets:

            // branch_import_csv
            if ('/app-manager/import-products' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_branch_import_csv;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::branchImportCsvAction',  '_route' => 'branch_import_csv',);
            }
            not_branch_import_csv:

            // admin_login
            if ('/app-manager' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'admin_login');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::loginAction',  '_route' => 'admin_login',);
            }

            // admin_login_check
            if ('/app-manager/login-check' === $pathinfo) {
                return array('_route' => 'admin_login_check');
            }

            // admin_logout
            if ('/app-manager/logout' === $pathinfo) {
                return array('_route' => 'admin_logout');
            }

            if (0 === strpos($pathinfo, '/app-manager/admin')) {
                // admin_view
                if (0 === strpos($pathinfo, '/app-manager/admin/view-admin') && preg_match('#^/app\\-manager/admin/view\\-admin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_admin_view;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_view')), array (  '_controller' => 'AppBundle\\Controller\\UserController::viewAdminAction',));
                }
                not_admin_view:

                // admin_list
                if ('/app-manager/admin/all-admins' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_admin_list;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::listAdminAction',  '_route' => 'admin_list',);
                }
                not_admin_list:

                // admin_create
                if ('/app-manager/admin/new-admin' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_admin_create;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::createAdminAction',  '_route' => 'admin_create',);
                }
                not_admin_create:

                // admin_edit
                if (0 === strpos($pathinfo, '/app-manager/admin/edit-admin') && preg_match('#^/app\\-manager/admin/edit\\-admin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_admin_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_edit')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editAdminAction',));
                }
                not_admin_edit:

                // admin_activate
                if (0 === strpos($pathinfo, '/app-manager/admins/activate-admin') && preg_match('#^/app\\-manager/admins/activate\\-admin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_admin_activate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_activate')), array (  '_controller' => 'AppBundle\\Controller\\UserController::activateAdminAction',));
                }
                not_admin_activate:

            }

            elseif (0 === strpos($pathinfo, '/app-manager/d')) {
                // delivery_boy_create
                if ('/app-manager/delivery-boy/new-delivery-boy' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_delivery_boy_create;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::createDeliveryBoyAction',  '_route' => 'delivery_boy_create',);
                }
                not_delivery_boy_create:

                // delivery_boy_edit
                if (0 === strpos($pathinfo, '/app-manager/delivery-boy/edit-delivery-boy') && preg_match('#^/app\\-manager/delivery\\-boy/edit\\-delivery\\-boy/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_delivery_boy_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delivery_boy_edit')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editDeliveryBoyAction',));
                }
                not_delivery_boy_edit:

                // developer_dashboard
                if ('/app-manager/dashboard' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::dashboardAction',  '_route' => 'developer_dashboard',);
                }

            }

            elseif (0 === strpos($pathinfo, '/app-manager/branch')) {
                // branch_activate
                if (0 === strpos($pathinfo, '/app-manager/branch/activate') && preg_match('#^/app\\-manager/branch/activate/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_branch_activate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'branch_activate')), array (  '_controller' => 'AppBundle\\Controller\\UserController::branchActivateAction',));
                }
                not_branch_activate:

                // restaurant_list
                if ('/app-manager/branch/all' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_restaurant_list;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::allRestaurantAction',  '_route' => 'restaurant_list',);
                }
                not_restaurant_list:

                // view_branch_report
                if (0 === strpos($pathinfo, '/app-manager/branch/view') && preg_match('#^/app\\-manager/branch/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_view_branch_report;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'view_branch_report')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::branchViewAction',));
                }
                not_view_branch_report:

                // branch_report
                if ('/app-manager/branch-report' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_branch_report;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::allRestaurantAction',  '_route' => 'branch_report',);
                }
                not_branch_report:

            }

            // banner_delete
            if (0 === strpos($pathinfo, '/app-manager/banner-delete') && preg_match('#^/app\\-manager/banner\\-delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_banner_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'banner_delete')), array (  '_controller' => 'AppBundle\\Controller\\ManagerController::deleteBannerAction',));
            }
            not_banner_delete:

            // customer_activate
            if (0 === strpos($pathinfo, '/app-manager/customer/activate-customer') && preg_match('#^/app\\-manager/customer/activate\\-customer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_customer_activate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_activate')), array (  '_controller' => 'AppBundle\\Controller\\CustomerController::activateCustomerAction',));
            }
            not_customer_activate:

            // restaurant_create
            if ('/app-manager/shop/create-shop' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_restaurant_create;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::createRestaurantAction',  '_route' => 'restaurant_create',);
            }
            not_restaurant_create:

            // restaurant_edit
            if (0 === strpos($pathinfo, '/app-manager/edit-branch') && preg_match('#^/app\\-manager/edit\\-branch/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_restaurant_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'restaurant_edit')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::editRestaurantAction',));
            }
            not_restaurant_edit:

            // restaurant_view
            if (preg_match('#^/app\\-manager/(?P<id>[^/]++)/profile$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_restaurant_view;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'restaurant_view')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::viewRestaurantAction',));
            }
            not_restaurant_view:

            // restaurant_admin_create
            if (preg_match('#^/app\\-manager/(?P<id>[^/]++)/new\\-admin$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_restaurant_admin_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'restaurant_admin_create')), array (  '_controller' => 'AppBundle\\Controller\\UserController::createRestaurantAdminAction',));
            }
            not_restaurant_admin_create:

            // restaurant_admin_edit
            if (preg_match('#^/app\\-manager/(?P<id>[^/]++)/edit\\-admin$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_restaurant_admin_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'restaurant_admin_edit')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editRestaurantAdminAction',));
            }
            not_restaurant_admin_edit:

            if (0 === strpos($pathinfo, '/app-manager/customer')) {
                // customer_list
                if ('/app-manager/customer/all' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_customer_list;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CustomerController::listAction',  '_route' => 'customer_list',);
                }
                not_customer_list:

                // customer_view
                if (preg_match('#^/app\\-manager/customer/(?P<id>[^/]++)/view$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_customer_view;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_view')), array (  '_controller' => 'AppBundle\\Controller\\CustomerController::viewAction',));
                }
                not_customer_view:

            }

            // advertisement_new
            if ('/app-manager/create-banner' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_advertisement_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AdvertisementController::createBannerAction',  '_route' => 'advertisement_new',);
            }
            not_advertisement_new:

            // advertisement_type_manager
            if ('/app-manager/advertisement-type' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_advertisement_type_manager;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AdvertisementController::manageTypeAction',  '_route' => 'advertisement_type_manager',);
            }
            not_advertisement_type_manager:

            if (0 === strpos($pathinfo, '/app-manager/manage-advertisement')) {
                // advertisement_manager
                if ('/app-manager/manage-advertisement' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_advertisement_manager;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AdvertisementController::viewBannerAction',  '_route' => 'advertisement_manager',);
                }
                not_advertisement_manager:

                // advertisement_manager_ajax
                if ('/app-manager/manage-advertisement-ajax' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_advertisement_manager_ajax;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AdvertisementController::viewBannerAjaxAction',  '_route' => 'advertisement_manager_ajax',);
                }
                not_advertisement_manager_ajax:

            }

        }

        elseif (0 === strpos($pathinfo, '/api/app-manager/get-functionality')) {
            if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/restaurant')) {
                if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/restaurant/r')) {
                    if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/restaurant/ratings')) {
                        // api_restaurant_ratings
                        if ('/api/app-manager/get-functionality/restaurant/ratings' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_api_restaurant_ratings;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::restaurantRatingsAction',  '_route' => 'api_restaurant_ratings',);
                        }
                        not_api_restaurant_ratings:

                        // api_restaurant_ratings_list
                        if ('/api/app-manager/get-functionality/restaurant/ratings-list' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_api_restaurant_ratings_list;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getRestaurantRatingsAction',  '_route' => 'api_restaurant_ratings_list',);
                        }
                        not_api_restaurant_ratings_list:

                    }

                    // api_restaurant_remove_item_to_list
                    if ('/api/app-manager/get-functionality/restaurant/remove-item-from-list' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_restaurant_remove_item_to_list;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::removeItemFromListAction',  '_route' => 'api_restaurant_remove_item_to_list',);
                    }
                    not_api_restaurant_remove_item_to_list:

                    // api_restaurant_remove_shopping_list
                    if ('/api/app-manager/get-functionality/restaurant/remove-shopping-list' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_restaurant_remove_shopping_list;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::removeShoppingListAction',  '_route' => 'api_restaurant_remove_shopping_list',);
                    }
                    not_api_restaurant_remove_shopping_list:

                }

                elseif (0 === strpos($pathinfo, '/api/app-manager/get-functionality/restaurant/de')) {
                    // api_restaurant_details
                    if ('/api/app-manager/get-functionality/restaurant/details' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_restaurant_details;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getRestaurantDetailsAction',  '_route' => 'api_restaurant_details',);
                    }
                    not_api_restaurant_details:

                    // api_restaurant_delete_item
                    if ('/api/app-manager/get-functionality/restaurant/delete-item-from-list' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_restaurant_delete_item;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::deleteItemToListAction',  '_route' => 'api_restaurant_delete_item',);
                    }
                    not_api_restaurant_delete_item:

                    if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/restaurant/delivery-boy-')) {
                        // api_restaurant_delivery_boy_login
                        if ('/api/app-manager/get-functionality/restaurant/delivery-boy-login' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_api_restaurant_delivery_boy_login;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::deliveryLoginAction',  '_route' => 'api_restaurant_delivery_boy_login',);
                        }
                        not_api_restaurant_delivery_boy_login:

                        // api_restaurant_delivery_boy_neworder
                        if ('/api/app-manager/get-functionality/restaurant/delivery-boy-neworder' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_api_restaurant_delivery_boy_neworder;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::deliveryNewOrderAction',  '_route' => 'api_restaurant_delivery_boy_neworder',);
                        }
                        not_api_restaurant_delivery_boy_neworder:

                        // api_restaurant_delivery_boy_status
                        if ('/api/app-manager/get-functionality/restaurant/delivery-boy-status' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_api_restaurant_delivery_boy_status;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::deliveryStatusAction',  '_route' => 'api_restaurant_delivery_boy_status',);
                        }
                        not_api_restaurant_delivery_boy_status:

                        // api_restaurant_delivery_boy_completed
                        if ('/api/app-manager/get-functionality/restaurant/delivery-boy-completed' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_api_restaurant_delivery_boy_completed;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::deliveryCompletedAction',  '_route' => 'api_restaurant_delivery_boy_completed',);
                        }
                        not_api_restaurant_delivery_boy_completed:

                    }

                }

                // api_get_privacy_policy
                if ('/api/app-manager/get-functionality/restaurant/privacy-policy' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_api_get_privacy_policy;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getPrivacyPolicyAction',  '_route' => 'api_get_privacy_policy',);
                }
                not_api_get_privacy_policy:

                if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/restaurant/search-')) {
                    // api_restaurant_product_search
                    if ('/api/app-manager/get-functionality/restaurant/search-products' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_restaurant_product_search;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::searchProductAction',  '_route' => 'api_restaurant_product_search',);
                    }
                    not_api_restaurant_product_search:

                    // api_restaurant_categorized_product_search
                    if ('/api/app-manager/get-functionality/restaurant/search-product/category' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_restaurant_categorized_product_search;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::searchCategorizedProductAction',  '_route' => 'api_restaurant_categorized_product_search',);
                    }
                    not_api_restaurant_categorized_product_search:

                    // api_restaurant_search_product
                    if ('/api/app-manager/get-functionality/restaurant/search-items' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_restaurant_search_product;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ApiController::searchProductAllAction',  '_route' => 'api_restaurant_search_product',);
                    }
                    not_api_restaurant_search_product:

                }

                // api_restaurant_product_list
                if ('/api/app-manager/get-functionality/restaurant/list-all-products' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_api_restaurant_product_list;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::listProductsAction',  '_route' => 'api_restaurant_product_list',);
                }
                not_api_restaurant_product_list:

                if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/restaurant/get-')) {
                    if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/restaurant/get-categories')) {
                        // api_restaurant_all_category
                        if ('/api/app-manager/get-functionality/restaurant/get-categories' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_api_restaurant_all_category;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getAllCategoriesAction',  '_route' => 'api_restaurant_all_category',);
                        }
                        not_api_restaurant_all_category:

                        // api_restaurant_all_category_id
                        if ('/api/app-manager/get-functionality/restaurant/get-categories-id' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_api_restaurant_all_category_id;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getAllCategoriesIdAction',  '_route' => 'api_restaurant_all_category_id',);
                        }
                        not_api_restaurant_all_category_id:

                    }

                    elseif (0 === strpos($pathinfo, '/api/app-manager/get-functionality/restaurant/get-menuitem')) {
                        // api_restaurant_get_menu_item_by_brand
                        if ('/api/app-manager/get-functionality/restaurant/get-menuitem-by-brand' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_api_restaurant_get_menu_item_by_brand;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\ApiController::getMenuItemByBrandAction',  '_route' => 'api_restaurant_get_menu_item_by_brand',);
                        }
                        not_api_restaurant_get_menu_item_by_brand:

                        // api_restaurant_get_menu_item
                        if ('/api/app-manager/get-functionality/restaurant/get-menuitem' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_api_restaurant_get_menu_item;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\ApiController::getMenuItemAction',  '_route' => 'api_restaurant_get_menu_item',);
                        }
                        not_api_restaurant_get_menu_item:

                    }

                    // api_restaurant_get_order_status
                    if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/restaurant/get-order-status') && preg_match('#^/api/app\\-manager/get\\-functionality/restaurant/get\\-order\\-status/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_restaurant_get_order_status;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_restaurant_get_order_status')), array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getOrderStatusAction',));
                    }
                    not_api_restaurant_get_order_status:

                    // api_restaurant_getAll_shopping_list
                    if ('/api/app-manager/get-functionality/restaurant/get-all-shopping-list' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_restaurant_getAll_shopping_list;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getAllShoppingListsAction',  '_route' => 'api_restaurant_getAll_shopping_list',);
                    }
                    not_api_restaurant_getAll_shopping_list:

                    // api_restaurant_get_ads
                    if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/restaurant/get-ads') && preg_match('#^/api/app\\-manager/get\\-functionality/restaurant/get\\-ads/(?P<id>[^/]++)/(?P<branch>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_restaurant_get_ads;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_restaurant_get_ads')), array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getadsAction',));
                    }
                    not_api_restaurant_get_ads:

                    // api_restaurant_getsubcategory
                    if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/restaurant/get-sub-category') && preg_match('#^/api/app\\-manager/get\\-functionality/restaurant/get\\-sub\\-category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_restaurant_getsubcategory;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_restaurant_getsubcategory')), array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getSubCategoryIdAction',));
                    }
                    not_api_restaurant_getsubcategory:

                    // api_restaurant_get_featured
                    if ('/api/app-manager/get-functionality/restaurant/get-featured' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_restaurant_get_featured;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ApiController::getFeaturedAction',  '_route' => 'api_restaurant_get_featured',);
                    }
                    not_api_restaurant_get_featured:

                    // api_restaurant_get_recent_products
                    if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/restaurant/get-recent-products') && preg_match('#^/api/app\\-manager/get\\-functionality/restaurant/get\\-recent\\-products/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_restaurant_get_recent_products;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_restaurant_get_recent_products')), array (  '_controller' => 'AppBundle\\Controller\\ApiController::getRecentProductsAction',));
                    }
                    not_api_restaurant_get_recent_products:

                    // api_restaurant_get_discount
                    if ('/api/app-manager/get-functionality/restaurant/get-discount' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_restaurant_get_discount;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ApiController::getDiscountAction',  '_route' => 'api_restaurant_get_discount',);
                    }
                    not_api_restaurant_get_discount:

                    // api_restaurant_get_brands
                    if ('/api/app-manager/get-functionality/restaurant/get-brands' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_restaurant_get_brands;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getBrandsAction',  '_route' => 'api_restaurant_get_brands',);
                    }
                    not_api_restaurant_get_brands:

                }

                // api_restaurant_getcategory
                if ('/api/app-manager/get-functionality/restaurant/getcategory' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_api_restaurant_getcategory;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getCategoryAction',  '_route' => 'api_restaurant_getcategory',);
                }
                not_api_restaurant_getcategory:

                // api_restaurant_all_shopping_list
                if ('/api/app-manager/get-functionality/restaurant/my-shopping-list' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_api_restaurant_all_shopping_list;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::myShoppingListsAction',  '_route' => 'api_restaurant_all_shopping_list',);
                }
                not_api_restaurant_all_shopping_list:

                // api_restaurant_create_list
                if ('/api/app-manager/get-functionality/restaurant/create-shopping-list' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_api_restaurant_create_list;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::createListAction',  '_route' => 'api_restaurant_create_list',);
                }
                not_api_restaurant_create_list:

                // api_restaurant_add_item_to_list
                if ('/api/app-manager/get-functionality/restaurant/add-item-to-list' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_api_restaurant_add_item_to_list;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::addItemToListAction',  '_route' => 'api_restaurant_add_item_to_list',);
                }
                not_api_restaurant_add_item_to_list:

                // api_restaurant_banner
                if ('/api/app-manager/get-functionality/restaurant/banner' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_api_restaurant_banner;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::bannerAction',  '_route' => 'api_restaurant_banner',);
                }
                not_api_restaurant_banner:

            }

            // api_get_new_return
            if ('/api/app-manager/get-functionality/return/new-return' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_api_get_new_return;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::newReturnAction',  '_route' => 'api_get_new_return',);
            }
            not_api_get_new_return:

            if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/get-')) {
                if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/get-b')) {
                    // api_get_brands_data
                    if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/get-brands-data') && preg_match('#^/api/app\\-manager/get\\-functionality/get\\-brands\\-data/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_get_brands_data;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_brands_data')), array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getbrandsdataAction',));
                    }
                    not_api_get_brands_data:

                    // get_branch_detail
                    if ('/api/app-manager/get-functionality/get-branch-detail' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_get_branch_detail;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getBranchDetailAction',  '_route' => 'get_branch_detail',);
                    }
                    not_get_branch_detail:

                    // api_get_banner_data
                    if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/get-banner-data') && preg_match('#^/api/app\\-manager/get\\-functionality/get\\-banner\\-data/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_get_banner_data;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_banner_data')), array (  '_controller' => 'AppBundle\\Controller\\ApiController::getBannerDataAction',));
                    }
                    not_api_get_banner_data:

                }

                // api_get_items
                if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/get-items') && preg_match('#^/api/app\\-manager/get\\-functionality/get\\-items/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_api_get_items;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_items')), array (  '_controller' => 'AppBundle\\Controller\\ApiController::getItemsAction',));
                }
                not_api_get_items:

                // api_get_categories
                if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/get-categories') && preg_match('#^/api/app\\-manager/get\\-functionality/get\\-categories/(?P<id>[^/]++)/(?P<branch>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_api_get_categories;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_categories')), array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getCategoriesAction',));
                }
                not_api_get_categories:

                // get_customer_order
                if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/get-customer-order') && preg_match('#^/api/app\\-manager/get\\-functionality/get\\-customer\\-order/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_get_customer_order;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_customer_order')), array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getCustomerOrderAction',));
                }
                not_get_customer_order:

                if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/get-n')) {
                    // api_get_notification
                    if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/get-notification') && preg_match('#^/api/app\\-manager/get\\-functionality/get\\-notification/(?P<id>[^/]++)/(?P<branch>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_get_notification;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_notification')), array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getNotificationAction',));
                    }
                    not_api_get_notification:

                    // api_get_nearby_store
                    if ('/api/app-manager/get-functionality/get-nearby-store' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_get_nearby_store;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getNearByStoreAction',  '_route' => 'api_get_nearby_store',);
                    }
                    not_api_get_nearby_store:

                    // api_get_nearby_pickup_store
                    if ('/api/app-manager/get-functionality/get-nearby-pickup-store' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_get_nearby_pickup_store;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getNearByPickupStoreAction',  '_route' => 'api_get_nearby_pickup_store',);
                    }
                    not_api_get_nearby_pickup_store:

                }

                // api_get_resturant
                if ('/api/app-manager/get-functionality/get-resturant' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_api_get_resturant;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::resturantAction',  '_route' => 'api_get_resturant',);
                }
                not_api_get_resturant:

                // api_get_returns
                if ('/api/app-manager/get-functionality/get-returns' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_api_get_returns;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CustomerApiController::getReturnsAction',  '_route' => 'api_get_returns',);
                }
                not_api_get_returns:

                if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/get-membership')) {
                    // api_get_membership
                    if ('/api/app-manager/get-functionality/get-membership' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_get_membership;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getMembershipAction',  '_route' => 'api_get_membership',);
                    }
                    not_api_get_membership:

                    // api_get_membership_detail
                    if ('/api/app-manager/get-functionality/get-membership_detail' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_get_membership_detail;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getmembershipDetailAction',  '_route' => 'api_get_membership_detail',);
                    }
                    not_api_get_membership_detail:

                }

                // api_get_delivery_slots
                if ('/api/app-manager/get-functionality/get-delivery-slots' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_api_get_delivery_slots;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getDeliverySlotsAction',  '_route' => 'api_get_delivery_slots',);
                }
                not_api_get_delivery_slots:

                // api_get_delivery_charges
                if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/get-delivery-charges') && preg_match('#^/api/app\\-manager/get\\-functionality/get\\-delivery\\-charges/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_api_get_delivery_charges;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_delivery_charges')), array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getDeliveryChargesAction',));
                }
                not_api_get_delivery_charges:

                // get_user_status
                if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/get-user-status') && preg_match('#^/api/app\\-manager/get\\-functionality/get\\-user\\-status/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_get_user_status;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_user_status')), array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getuserstatusAction',));
                }
                not_get_user_status:

                // api_get_loyalty
                if ('/api/app-manager/get-functionality/get-loyalty' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_api_get_loyalty;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getLoyaltyAction',  '_route' => 'api_get_loyalty',);
                }
                not_api_get_loyalty:

                // api_get_pickup_slot
                if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/get-pickup-slot') && preg_match('#^/api/app\\-manager/get\\-functionality/get\\-pickup\\-slot/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_api_get_pickup_slot;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_pickup_slot')), array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getPickupSlotAction',));
                }
                not_api_get_pickup_slot:

                // get_ticket
                if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/get-ticket') && preg_match('#^/api/app\\-manager/get\\-functionality/get\\-ticket/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_get_ticket;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_ticket')), array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getTicketAction',));
                }
                not_get_ticket:

                // api_customer_get_address
                if ('/api/app-manager/get-functionality/get-address' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_api_customer_get_address;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ApiController::getCustomerDefaultAddressAction',  '_route' => 'api_customer_get_address',);
                }
                not_api_customer_get_address:

                // api_get_subcategory_shop
                if ('/api/app-manager/get-functionality/get-subcategory-shop' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ApiController::getShopSubCategoriesAction',  '_route' => 'api_get_subcategory_shop',);
                }

                // web_getShopDetails
                if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/get-shop-details') && preg_match('#^/api/app\\-manager/get\\-functionality/get\\-shop\\-details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_web_getShopDetails;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'web_getShopDetails')), array (  '_controller' => 'AppBundle\\Controller\\WebApiController::getShopDetailsAction',));
                }
                not_web_getShopDetails:

            }

            elseif (0 === strpos($pathinfo, '/api/app-manager/get-functionality/getnew')) {
                // web_getneworder
                if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/getneworder') && preg_match('#^/api/app\\-manager/get\\-functionality/getneworder/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_web_getneworder;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'web_getneworder')), array (  '_controller' => 'AppBundle\\Controller\\WebApiController::getneworderAction',));
                }
                not_web_getneworder:

                // web_getnewpikup
                if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/getnewpickup') && preg_match('#^/api/app\\-manager/get\\-functionality/getnewpickup/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_web_getnewpikup;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'web_getnewpikup')), array (  '_controller' => 'AppBundle\\Controller\\WebApiController::getnewpickupAction',));
                }
                not_web_getnewpikup:

                // web_getnewexpress
                if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/getnewexpress') && preg_match('#^/api/app\\-manager/get\\-functionality/getnewexpress/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_web_getnewexpress;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'web_getnewexpress')), array (  '_controller' => 'AppBundle\\Controller\\WebApiController::getnewExpressAction',));
                }
                not_web_getnewexpress:

            }

            elseif (0 === strpos($pathinfo, '/api/app-manager/get-functionality/update-')) {
                // api_update_notification
                if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/update-notification') && preg_match('#^/api/app\\-manager/get\\-functionality/update\\-notification/(?P<id>[^/]++)/(?P<status>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_api_update_notification;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_update_notification')), array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::updateNotificationAction',));
                }
                not_api_update_notification:

                // api_update_payment_status
                if ('/api/app-manager/get-functionality/update-payment-status' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_api_update_payment_status;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::updatePaymentStatusAction',  '_route' => 'api_update_payment_status',);
                }
                not_api_update_payment_status:

                // update_picker_status
                if ('/api/app-manager/get-functionality/update-picker-status' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_update_picker_status;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::updatePickerStatusAction',  '_route' => 'update_picker_status',);
                }
                not_update_picker_status:

                // api_update_return
                if ('/api/app-manager/get-functionality/update-return' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_api_update_return;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::updateReturnAction',  '_route' => 'api_update_return',);
                }
                not_api_update_return:

            }

            // api_get_prepaid_balance
            if ('/api/app-manager/get-functionality/user/get-prepaid-balance' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_api_get_prepaid_balance;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getPrepaidBalanceAction',  '_route' => 'api_get_prepaid_balance',);
            }
            not_api_get_prepaid_balance:

            if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/p')) {
                // api_get_pickup_location
                if ('/api/app-manager/get-functionality/pickup-location' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_api_get_pickup_location;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getPickupLocationAction',  '_route' => 'api_get_pickup_location',);
                }
                not_api_get_pickup_location:

                if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/picker-')) {
                    // picker_login
                    if ('/api/app-manager/get-functionality/picker-login' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_picker_login;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::pickerLoginAction',  '_route' => 'picker_login',);
                    }
                    not_picker_login:

                    // picker_orders
                    if ('/api/app-manager/get-functionality/picker-orders' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_picker_orders;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::pickerOrdersAction',  '_route' => 'picker_orders',);
                    }
                    not_picker_orders:

                    // picker_orders_count
                    if ('/api/app-manager/get-functionality/picker-order-count' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_picker_orders_count;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::pickerOrderCountAction',  '_route' => 'picker_orders_count',);
                    }
                    not_picker_orders_count:

                    // picker_orders_completed
                    if ('/api/app-manager/get-functionality/picker-completed-orders' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_picker_orders_completed;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::pickerCompletedOrdersAction',  '_route' => 'picker_orders_completed',);
                    }
                    not_picker_orders_completed:

                    // picker_delivery_assign
                    if ('/api/app-manager/get-functionality/picker-delivery-assign' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_picker_delivery_assign;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::pickerDeliveryAssignAction',  '_route' => 'picker_delivery_assign',);
                    }
                    not_picker_delivery_assign:

                }

                // api_promocode
                if ('/api/app-manager/get-functionality/promocode' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_api_promocode;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::promocodeCheckAction',  '_route' => 'api_promocode',);
                }
                not_api_promocode:

                if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/profile')) {
                    // api_get_userdata
                    if ('/api/app-manager/get-functionality/profile/get-userdata' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_get_userdata;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getUserdataAction',  '_route' => 'api_get_userdata',);
                    }
                    not_api_get_userdata:

                    // api_get_new_order
                    if ('/api/app-manager/get-functionality/profile/get-new-order' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_get_new_order;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getNewOrderAction',  '_route' => 'api_get_new_order',);
                    }
                    not_api_get_new_order:

                    // api_update_profile
                    if ('/api/app-manager/get-functionality/profile/update-profile' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_update_profile;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::updateProfileAction',  '_route' => 'api_update_profile',);
                    }
                    not_api_update_profile:

                    // api_customer_update_profile
                    if ('/api/app-manager/get-functionality/profile/update-customer-profile' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_customer_update_profile;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ApiController::updateCustomerProfileAction',  '_route' => 'api_customer_update_profile',);
                    }
                    not_api_customer_update_profile:

                }

                // api_pp_promocode
                if ('/api/app-manager/get-functionality/pp-promocode' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_api_pp_promocode;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::promocodesAction',  '_route' => 'api_pp_promocode',);
                }
                not_api_pp_promocode:

                // payment_mode
                if ('/api/app-manager/get-functionality/payment-mode' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_payment_mode;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::paymentModeAction',  '_route' => 'payment_mode',);
                }
                not_payment_mode:

            }

            elseif (0 === strpos($pathinfo, '/api/app-manager/get-functionality/c')) {
                if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/customer')) {
                    // api_customer_pre_register
                    if ('/api/app-manager/get-functionality/customer/pre-register' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_customer_pre_register;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\CustomerApiController::preRegisterAction',  '_route' => 'api_customer_pre_register',);
                    }
                    not_api_customer_pre_register:

                    // api_customer_email_check
                    if ('/api/app-manager/get-functionality/customer/email-check' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_customer_email_check;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\CustomerApiController::emailCheckAction',  '_route' => 'api_customer_email_check',);
                    }
                    not_api_customer_email_check:

                    // api_customer_login_email
                    if ('/api/app-manager/get-functionality/customer/email-login' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_customer_login_email;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\CustomerApiController::emailLoginAction',  '_route' => 'api_customer_login_email',);
                    }
                    not_api_customer_login_email:

                    // api_customer_mobile_check
                    if ('/api/app-manager/get-functionality/customer/mobile-check' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_customer_mobile_check;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\CustomerApiController::mobileCheckAction',  '_route' => 'api_customer_mobile_check',);
                    }
                    not_api_customer_mobile_check:

                    if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/customer/re')) {
                        // api_customer_register
                        if ('/api/app-manager/get-functionality/customer/register' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_api_customer_register;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\CustomerApiController::registerAction',  '_route' => 'api_customer_register',);
                        }
                        not_api_customer_register:

                        if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/customer/resend-otp')) {
                            // api_customer_resend_otp
                            if ('/api/app-manager/get-functionality/customer/resend-otp' === $pathinfo) {
                                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                    $allow = array_merge($allow, array('GET', 'POST'));
                                    goto not_api_customer_resend_otp;
                                }

                                return array (  '_controller' => 'AppBundle\\Controller\\CustomerApiController::resendOtpAction',  '_route' => 'api_customer_resend_otp',);
                            }
                            not_api_customer_resend_otp:

                            // api_customer_resend_otp_30
                            if ('/api/app-manager/get-functionality/customer/resend-otp-30' === $pathinfo) {
                                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                    $allow = array_merge($allow, array('GET', 'POST'));
                                    goto not_api_customer_resend_otp_30;
                                }

                                return array (  '_controller' => 'AppBundle\\Controller\\CustomerApiController::resendOtp30Action',  '_route' => 'api_customer_resend_otp_30',);
                            }
                            not_api_customer_resend_otp_30:

                            // api_customer_resend_otp_call
                            if ('/api/app-manager/get-functionality/customer/resend-otp-call' === $pathinfo) {
                                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                    $allow = array_merge($allow, array('GET', 'POST'));
                                    goto not_api_customer_resend_otp_call;
                                }

                                return array (  '_controller' => 'AppBundle\\Controller\\CustomerApiController::resendOtpCallAction',  '_route' => 'api_customer_resend_otp_call',);
                            }
                            not_api_customer_resend_otp_call:

                        }

                        // api_customer_verify_mobile_number
                        if ('/api/app-manager/get-functionality/customer/reset-password/verify-mobile' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_api_customer_verify_mobile_number;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\CustomerApiController::verifyMobileAction',  '_route' => 'api_customer_verify_mobile_number',);
                        }
                        not_api_customer_verify_mobile_number:

                    }

                    // api_customer_basic_details
                    if ('/api/app-manager/get-functionality/customer/get-profile' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_customer_basic_details;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\CustomerApiController::getBasicProfileAction',  '_route' => 'api_customer_basic_details',);
                    }
                    not_api_customer_basic_details:

                    if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/customer/address')) {
                        // api_customer_add_address
                        if ('/api/app-manager/get-functionality/customer/address/add-new' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_api_customer_add_address;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\CustomerApiController::addAddressAction',  '_route' => 'api_customer_add_address',);
                        }
                        not_api_customer_add_address:

                        // api_customer_update_address
                        if ('/api/app-manager/get-functionality/customer/address/update' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_api_customer_update_address;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\CustomerApiController::addAddressAction',  '_route' => 'api_customer_update_address',);
                        }
                        not_api_customer_update_address:

                        // api_customer_remove_address
                        if ('/api/app-manager/get-functionality/customer/address/remove' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_api_customer_remove_address;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\CustomerApiController::removeAddressAction',  '_route' => 'api_customer_remove_address',);
                        }
                        not_api_customer_remove_address:

                    }

                    // api_customer_order_list
                    if ('/api/app-manager/get-functionality/customer/order/list' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_customer_order_list;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\CustomerApiController::getOrderListAction',  '_route' => 'api_customer_order_list',);
                    }
                    not_api_customer_order_list:

                    // api_customer_single_order_list
                    if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/customer/single-order/list') && preg_match('#^/api/app\\-manager/get\\-functionality/customer/single\\-order/list/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_customer_single_order_list;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_customer_single_order_list')), array (  '_controller' => 'AppBundle\\Controller\\CustomerApiController::getSingleOrderListAction',));
                    }
                    not_api_customer_single_order_list:

                }

                elseif (0 === strpos($pathinfo, '/api/app-manager/get-functionality/check-')) {
                    // api_check_promocode
                    if ('/api/app-manager/get-functionality/check-promocode' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_check_promocode;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::checkPromocodeAction',  '_route' => 'api_check_promocode',);
                    }
                    not_api_check_promocode:

                    // api_check_location
                    if ('/api/app-manager/get-functionality/check-location' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_api_check_location;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::checkLocationAction',  '_route' => 'api_check_location',);
                    }
                    not_api_check_location:

                    if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/check-loyalty')) {
                        // api_check_loyaltys
                        if ('/api/app-manager/get-functionality/check-loyalty' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_api_check_loyaltys;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::loyaltyAction',  '_route' => 'api_check_loyaltys',);
                        }
                        not_api_check_loyaltys:

                        // api_check_loyalty
                        if (preg_match('#^/api/app\\-manager/get\\-functionality/check\\-loyalty/(?P<id>[^/]++)/(?P<branch>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_api_check_loyalty;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_check_loyalty')), array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::checkLoyaltyAction',));
                        }
                        not_api_check_loyalty:

                    }

                    // check_tray
                    if ('/api/app-manager/get-functionality/check-tray' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_check_tray;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::checkTrayAction',  '_route' => 'check_tray',);
                    }
                    not_check_tray:

                }

                // api_cancel_order
                if ('/api/app-manager/get-functionality/cancel-order' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_api_cancel_order;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::cancelOrderAction',  '_route' => 'api_cancel_order',);
                }
                not_api_cancel_order:

                // api_cartcheck
                if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/cart-check') && preg_match('#^/api/app\\-manager/get\\-functionality/cart\\-check/(?P<branch>[^/]++)/(?P<item>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_api_cartcheck;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_cartcheck')), array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::checkCartAction',));
                }
                not_api_cartcheck:

                // create_ticket
                if ('/api/app-manager/get-functionality/create-ticket' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_create_ticket;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::createTicketAction',  '_route' => 'create_ticket',);
                }
                not_create_ticket:

                // clear_holded_membership
                if ('/api/app-manager/get-functionality/clear-holded-membership' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_clear_holded_membership;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ApiController::clearHoldedMembershipAction',  '_route' => 'clear_holded_membership',);
                }
                not_clear_holded_membership:

            }

            // api_get_item_by_barcode
            if ('/api/app-manager/get-functionality/item-by-barcode' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_api_get_item_by_barcode;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getBarcodeAction',  '_route' => 'api_get_item_by_barcode',);
            }
            not_api_get_item_by_barcode:

            if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/s')) {
                // api_single_product
                if ('/api/app-manager/get-functionality/single-product' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_api_single_product;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ApiController::singleProductAction',  '_route' => 'api_single_product',);
                }
                not_api_single_product:

                // api_customer_set_default_address
                if ('/api/app-manager/get-functionality/set-default-address' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_api_customer_set_default_address;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ApiController::setCustomerDefaultAddressAction',  '_route' => 'api_customer_set_default_address',);
                }
                not_api_customer_set_default_address:

                // set_nested_category
                if ('/api/app-manager/get-functionality/set-nested-category' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_set_nested_category;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ApiController::setNestedCategoryAction',  '_route' => 'set_nested_category',);
                }
                not_set_nested_category:

            }

            elseif (0 === strpos($pathinfo, '/api/app-manager/get-functionality/order/new-order')) {
                // api_make_customer_order
                if ('/api/app-manager/get-functionality/order/new-order' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_api_make_customer_order;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::makeOrderAction',  '_route' => 'api_make_customer_order',);
                }
                not_api_make_customer_order:

                // api_promocode_test
                if ('/api/app-manager/get-functionality/order/new-order/promo-test' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_api_promocode_test;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::makeOrderAction',  '_route' => 'api_promocode_test',);
                }
                not_api_promocode_test:

            }

            // api_get_logs
            if ('/api/app-manager/get-functionality/wallet/get-logs' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_api_get_logs;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::getLogsAction',  '_route' => 'api_get_logs',);
            }
            not_api_get_logs:

            // api_add_primary_location
            if ('/api/app-manager/get-functionality/add-primary-location' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_api_add_primary_location;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CustomerApiController::addPrimaryLocationAction',  '_route' => 'api_add_primary_location',);
            }
            not_api_add_primary_location:

            if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/admin')) {
                // web_set_featured_restaurant
                if ('/api/app-manager/get-functionality/admin/set-featured' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_web_set_featured_restaurant;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\WebApiController::setFeaturedRestaurantAction',  '_route' => 'web_set_featured_restaurant',);
                }
                not_web_set_featured_restaurant:

                if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/admin/get-')) {
                    // web_get_pending_delayed_order_count
                    if ('/api/app-manager/get-functionality/admin/get-order-count' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_web_get_pending_delayed_order_count;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\WebApiController::getOrderCountAction',  '_route' => 'web_get_pending_delayed_order_count',);
                    }
                    not_web_get_pending_delayed_order_count:

                    // web_get_dash_stats
                    if ('/api/app-manager/get-functionality/admin/get-dash-stats' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_web_get_dash_stats;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\WebApiController::getDashStatsAction',  '_route' => 'web_get_dash_stats',);
                    }
                    not_web_get_dash_stats:

                    // web_get_dash_top_stats
                    if ('/api/app-manager/get-functionality/admin/get-top-stats' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_web_get_dash_top_stats;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\WebApiController::getTopDashStatsAction',  '_route' => 'web_get_dash_top_stats',);
                    }
                    not_web_get_dash_top_stats:

                    // web_get_dash_monthly_stats
                    if ('/api/app-manager/get-functionality/admin/get-monthly-stats' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_web_get_dash_monthly_stats;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\WebApiController::getMonthlyDashStatsAction',  '_route' => 'web_get_dash_monthly_stats',);
                    }
                    not_web_get_dash_monthly_stats:

                }

                // web_get_order_report_from_range
                if ('/api/app-manager/get-functionality/admin/range/get-order-report' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_web_get_order_report_from_range;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\WebApiController::getOrderReportAction',  '_route' => 'web_get_order_report_from_range',);
                }
                not_web_get_order_report_from_range:

                if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/admin/re')) {
                    // web_get_restaurant_pay_pending_list
                    if ('/api/app-manager/get-functionality/admin/restaurant/get-pay-pending/list' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_web_get_restaurant_pay_pending_list;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\WebApiController::getRestaurantPayPendingListAction',  '_route' => 'web_get_restaurant_pay_pending_list',);
                    }
                    not_web_get_restaurant_pay_pending_list:

                    // web_pay_restaurant_pay_pending_list
                    if ('/api/app-manager/get-functionality/admin/restaurant/pay-pending' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_web_pay_restaurant_pay_pending_list;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\WebApiController::payPendingRestaurantBillAction',  '_route' => 'web_pay_restaurant_pay_pending_list',);
                    }
                    not_web_pay_restaurant_pay_pending_list:

                    // web_remove_restaurant_review
                    if ('/api/app-manager/get-functionality/admin/remove-review' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_web_remove_restaurant_review;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\WebApiController::removeRestaurantReviewAction',  '_route' => 'web_remove_restaurant_review',);
                    }
                    not_web_remove_restaurant_review:

                }

                // web_get_delivery_boy_pay_pending_list
                if ('/api/app-manager/get-functionality/admin/delivery-boy/get-pay-pending/list' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_web_get_delivery_boy_pay_pending_list;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\WebApiController::getDeliveryPayPendingListAction',  '_route' => 'web_get_delivery_boy_pay_pending_list',);
                }
                not_web_get_delivery_boy_pay_pending_list:

                // web_pay_delivery_boy_pay_pending_list
                if ('/api/app-manager/get-functionality/admin/delivery-boy/pay-pending' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_web_pay_delivery_boy_pay_pending_list;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\WebApiController::payPendingDeliveryBillAction',  '_route' => 'web_pay_delivery_boy_pay_pending_list',);
                }
                not_web_pay_delivery_boy_pay_pending_list:

                // web_get_customer_list
                if ('/api/app-manager/get-functionality/admin/customer-list' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_web_get_customer_list;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\WebApiController::customerListAction',  '_route' => 'web_get_customer_list',);
                }
                not_web_get_customer_list:

            }

            // edit_order_picker
            if ('/api/app-manager/get-functionality/edit-order-picker' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_edit_order_picker;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::editOrderPickerAction',  '_route' => 'edit_order_picker',);
            }
            not_edit_order_picker:

            // view_order
            if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/view-order') && preg_match('#^/api/app\\-manager/get\\-functionality/view\\-order/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_view_order;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'view_order')), array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::viewOrderAction',));
            }
            not_view_order:

            // get_customer_order_details
            if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/view-customer-order-details') && preg_match('#^/api/app\\-manager/get\\-functionality/view\\-customer\\-order\\-details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_get_customer_order_details;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_customer_order_details')), array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::viewOrderDetailsAction',));
            }
            not_get_customer_order_details:

            // delivery_boy_list
            if (0 === strpos($pathinfo, '/api/app-manager/get-functionality/delivery-boy-list') && preg_match('#^/api/app\\-manager/get\\-functionality/delivery\\-boy\\-list/(?P<branch>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_delivery_boy_list;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delivery_boy_list')), array (  '_controller' => 'AppBundle\\Controller\\RestaurantApiController::deliveryBoyListAction',));
            }
            not_delivery_boy_list:

        }

        elseif (0 === strpos($pathinfo, '/restaurant-manager')) {
            // restaurant_side_all_orders_list
            if (preg_match('#^/restaurant\\-manager/(?P<status>[^/]++)/(?P<restId>[^/]++)/orders$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'restaurant_side_all_orders_list')), array (  '_controller' => 'AppBundle\\Controller\\OrderController::reportAction',));
            }

            // restaurant_side_orders_panel_update
            if (0 === strpos($pathinfo, '/restaurant-manager/single') && preg_match('#^/restaurant\\-manager/single/(?P<id>[^/]++)/order\\-update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'restaurant_side_orders_panel_update')), array (  '_controller' => 'AppBundle\\Controller\\OrderController::editOrderAction',));
            }

            // manage_restaurant_order_report
            if ('/restaurant-manager/report/orders' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ReportsController::orderAction',  '_route' => 'manage_restaurant_order_report',);
            }

            // manage_restaurant_variation_ajax
            if ('/restaurant-manager/variation-ajax' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::variationAjaxAction',  '_route' => 'manage_restaurant_variation_ajax',);
            }

            if (0 === strpos($pathinfo, '/restaurant-manager/wallet')) {
                // settle_commision
                if ('/restaurant-manager/wallet/settle-commision' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::settleCommisionAction',  '_route' => 'settle_commision',);
                }

                if (0 === strpos($pathinfo, '/restaurant-manager/wallet/add-')) {
                    if (0 === strpos($pathinfo, '/restaurant-manager/wallet/add-credits')) {
                        // add_credit_to_wallet
                        if ('/restaurant-manager/wallet/add-credits' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::addCreditsAction',  '_route' => 'add_credit_to_wallet',);
                        }

                        // add_credit_to_wallet_postpaid
                        if ('/restaurant-manager/wallet/add-credits-postpaid' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::addCreditsPostpaidAction',  '_route' => 'add_credit_to_wallet_postpaid',);
                        }

                    }

                    // add_credit_to_loyalty
                    if ('/restaurant-manager/wallet/add-loyalty' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::addCreditsLoyatyAction',  '_route' => 'add_credit_to_loyalty',);
                    }

                    // add_duration_postpaid
                    if ('/restaurant-manager/wallet/add-duration-postpaid' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::addDurationPostpaidAction',  '_route' => 'add_duration_postpaid',);
                    }

                }

                // reccive_postpaid_payments
                if ('/restaurant-manager/wallet/reccive-postpaid-payments' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::reccivePostpaidAction',  '_route' => 'reccive_postpaid_payments',);
                }

                // block_duration_postpaid
                if ('/restaurant-manager/wallet/block-duration-postpaid' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::blockDurationPostpaidAction',  '_route' => 'block_duration_postpaid',);
                }

            }

            // manage_restaurant_main_ajax
            if ('/restaurant-manager/main-ajax' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::mainAjaxAction',  '_route' => 'manage_restaurant_main_ajax',);
            }

            if (0 === strpos($pathinfo, '/restaurant-manager/get-')) {
                // manage_restaurant_get_cat
                if ('/restaurant-manager/get-cat' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_manage_restaurant_get_cat;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::getCatAction',  '_route' => 'manage_restaurant_get_cat',);
                }
                not_manage_restaurant_get_cat:

                // manage_restaurant_get_del
                if ('/restaurant-manager/get-del' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_manage_restaurant_get_del;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::getDelAction',  '_route' => 'manage_restaurant_get_del',);
                }
                not_manage_restaurant_get_del:

                // manage_restaurant_get_picker
                if ('/restaurant-manager/get-picker' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_manage_restaurant_get_picker;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::getPickerAction',  '_route' => 'manage_restaurant_get_picker',);
                }
                not_manage_restaurant_get_picker:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
