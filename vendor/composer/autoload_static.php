<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit86344c9ce8ce3fa0f49736e7e62fe6e5
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MelhorEnvio\\Services\\' => 21,
            'MelhorEnvio\\Models\\' => 19,
            'MelhorEnvio\\Interfaces\\' => 23,
            'MelhorEnvio\\Helpers\\' => 20,
            'MelhorEnvio\\Factory\\' => 20,
            'MelhorEnvio\\Controllers\\' => 24,
            'MelhorEnvio\\Bases\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MelhorEnvio\\Services\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Services',
        ),
        'MelhorEnvio\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Models',
        ),
        'MelhorEnvio\\Interfaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/interfaces',
        ),
        'MelhorEnvio\\Helpers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Helpers',
        ),
        'MelhorEnvio\\Factory\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Factory',
        ),
        'MelhorEnvio\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controllers',
        ),
        'MelhorEnvio\\Bases\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/bases',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'MelhorEnvio\\Controllers\\AgenciesController' => __DIR__ . '/../..' . '/Controllers/AgenciesController.php',
        'MelhorEnvio\\Controllers\\CartController' => __DIR__ . '/../..' . '/Controllers/CartController.php',
        'MelhorEnvio\\Controllers\\ConfigurationController' => __DIR__ . '/../..' . '/Controllers/ConfigurationController.php',
        'MelhorEnvio\\Controllers\\LocationsController' => __DIR__ . '/../..' . '/Controllers/LocationsController.php',
        'MelhorEnvio\\Controllers\\NoticeFormController' => __DIR__ . '/../..' . '/Controllers/NoticeFormController.php',
        'MelhorEnvio\\Controllers\\OrdersController' => __DIR__ . '/../..' . '/Controllers/OrdersController.php',
        'MelhorEnvio\\Controllers\\PackageController' => __DIR__ . '/../..' . '/Controllers/PackageController.php',
        'MelhorEnvio\\Controllers\\PathController' => __DIR__ . '/../..' . '/Controllers/PathController.php',
        'MelhorEnvio\\Controllers\\PayloadsController' => __DIR__ . '/../..' . '/Controllers/PayloadsController.php',
        'MelhorEnvio\\Controllers\\ProductsController' => __DIR__ . '/../..' . '/Controllers/ProductsController.php',
        'MelhorEnvio\\Controllers\\QuotationController' => __DIR__ . '/../..' . '/Controllers/QuotationController.php',
        'MelhorEnvio\\Controllers\\SessionsController' => __DIR__ . '/../..' . '/Controllers/SessionsController.php',
        'MelhorEnvio\\Controllers\\ShowCalculatorProductPage' => __DIR__ . '/../..' . '/Controllers/ShowCalculatorProductPage.php',
        'MelhorEnvio\\Controllers\\StatusController' => __DIR__ . '/../..' . '/Controllers/StatusController.php',
        'MelhorEnvio\\Controllers\\TokenController' => __DIR__ . '/../..' . '/Controllers/TokenController.php',
        'MelhorEnvio\\Controllers\\UsersController' => __DIR__ . '/../..' . '/Controllers/UsersController.php',
        'MelhorEnvio\\Factory\\ProductServiceFactory' => __DIR__ . '/../..' . '/Factory/ProductServiceFactory.php',
        'MelhorEnvio\\Helpers\\CpfHelper' => __DIR__ . '/../..' . '/Helpers/CpfHelper.php',
        'MelhorEnvio\\Helpers\\DimensionsHelper' => __DIR__ . '/../..' . '/Helpers/DimensionsHelper.php',
        'MelhorEnvio\\Helpers\\EscapeAllowedTags' => __DIR__ . '/../..' . '/Helpers/EscapeAllowedTags.php',
        'MelhorEnvio\\Helpers\\ExtractNumberHelper' => __DIR__ . '/../..' . '/Helpers/ExtractNumberHelper.php',
        'MelhorEnvio\\Helpers\\FormaterHelper' => __DIR__ . '/../..' . '/Helpers/FormaterHelper.php',
        'MelhorEnvio\\Helpers\\MoneyHelper' => __DIR__ . '/../..' . '/Helpers/MoneyHelper.php',
        'MelhorEnvio\\Helpers\\OptionsHelper' => __DIR__ . '/../..' . '/Helpers/OptionsHelper.php',
        'MelhorEnvio\\Helpers\\PostalCodeHelper' => __DIR__ . '/../..' . '/Helpers/PostalCodeHelper.php',
        'MelhorEnvio\\Helpers\\ProductVirtualHelper' => __DIR__ . '/../..' . '/Helpers/ProductVirtualHelper.php',
        'MelhorEnvio\\Helpers\\SanitizeHelper' => __DIR__ . '/../..' . '/Helpers/SanitizeHelper.php',
        'MelhorEnvio\\Helpers\\SessionHelper' => __DIR__ . '/../..' . '/Helpers/SessionHelper.php',
        'MelhorEnvio\\Helpers\\TimeHelper' => __DIR__ . '/../..' . '/Helpers/TimeHelper.php',
        'MelhorEnvio\\Helpers\\TranslateStatusHelper' => __DIR__ . '/../..' . '/Helpers/TranslateStatusHelper.php',
        'MelhorEnvio\\Helpers\\WpNonceValidatorHelper' => __DIR__ . '/../..' . '/Helpers/WpNonceValidatorHelper.php',
        'MelhorEnvio\\Models\\Address' => __DIR__ . '/../..' . '/Models/Address.php',
        'MelhorEnvio\\Models\\Agency' => __DIR__ . '/../..' . '/Models/Agency.php',
        'MelhorEnvio\\Models\\AgencyAzul' => __DIR__ . '/../..' . '/Models/AgencyAzul.php',
        'MelhorEnvio\\Models\\AgencyLatam' => __DIR__ . '/../..' . '/Models/AgencyLatam.php',
        'MelhorEnvio\\Models\\CalculatorShow' => __DIR__ . '/../..' . '/Models/CalculatorShow.php',
        'MelhorEnvio\\Models\\Cart' => __DIR__ . '/../..' . '/Models/Cart.php',
        'MelhorEnvio\\Models\\Log' => __DIR__ . '/../..' . '/Models/Log.php',
        'MelhorEnvio\\Models\\Method' => __DIR__ . '/../..' . '/Models/Method.php',
        'MelhorEnvio\\Models\\Option' => __DIR__ . '/../..' . '/Models/Option.php',
        'MelhorEnvio\\Models\\Order' => __DIR__ . '/../..' . '/Models/Order.php',
        'MelhorEnvio\\Models\\Payload' => __DIR__ . '/../..' . '/Models/Payload.php',
        'MelhorEnvio\\Models\\Product' => __DIR__ . '/../..' . '/Models/Product.php',
        'MelhorEnvio\\Models\\ResponseStatus' => __DIR__ . '/../..' . '/Models/ResponseStatus.php',
        'MelhorEnvio\\Models\\Seller' => __DIR__ . '/../..' . '/Models/Seller.php',
        'MelhorEnvio\\Models\\Session' => __DIR__ . '/../..' . '/Models/Session.php',
        'MelhorEnvio\\Models\\ShippingCompany' => __DIR__ . '/../..' . '/Models/ShippingCompany.php',
        'MelhorEnvio\\Models\\ShippingService' => __DIR__ . '/../..' . '/Models/ShippingService.php',
        'MelhorEnvio\\Models\\Store' => __DIR__ . '/../..' . '/Models/Store.php',
        'MelhorEnvio\\Models\\Token' => __DIR__ . '/../..' . '/Models/Token.php',
        'MelhorEnvio\\Models\\UseInsurance' => __DIR__ . '/../..' . '/Models/UseInsurance.php',
        'MelhorEnvio\\Models\\User' => __DIR__ . '/../..' . '/Models/User.php',
        'MelhorEnvio\\Models\\Version' => __DIR__ . '/../..' . '/Models/Version.php',
        'MelhorEnvio\\Services\\AgenciesSelectedService' => __DIR__ . '/../..' . '/Services/AgenciesSelectedService.php',
        'MelhorEnvio\\Services\\AgenciesService' => __DIR__ . '/../..' . '/Services/AgenciesService.php',
        'MelhorEnvio\\Services\\BalanceService' => __DIR__ . '/../..' . '/Services/BalanceService.php',
        'MelhorEnvio\\Services\\BuyerService' => __DIR__ . '/../..' . '/Services/BuyerService.php',
        'MelhorEnvio\\Services\\CalculateShippingMethodService' => __DIR__ . '/../..' . '/Services/CalculateShippingMethodService.php',
        'MelhorEnvio\\Services\\CartService' => __DIR__ . '/../..' . '/Services/CartService.php',
        'MelhorEnvio\\Services\\CartWooCommerceService' => __DIR__ . '/../..' . '/Services/CartWooCommerceService.php',
        'MelhorEnvio\\Services\\CheckHealthService' => __DIR__ . '/../..' . '/Services/CheckHealthService.php',
        'MelhorEnvio\\Services\\ClearDataStored' => __DIR__ . '/../..' . '/Services/ClearDataStored.php',
        'MelhorEnvio\\Services\\ConfigurationsService' => __DIR__ . '/../..' . '/Services/ConfigurationsService.php',
        'MelhorEnvio\\Services\\InvoiceService' => __DIR__ . '/../..' . '/Services/InvoiceService.php',
        'MelhorEnvio\\Services\\ListOrderService' => __DIR__ . '/../..' . '/Services/ListOrderService.php',
        'MelhorEnvio\\Services\\ListPluginsIncompatiblesService' => __DIR__ . '/../..' . '/Services/ListPluginsIncompatiblesService.php',
        'MelhorEnvio\\Services\\LocationService' => __DIR__ . '/../..' . '/Services/LocationService.php',
        'MelhorEnvio\\Services\\ManageRequestService' => __DIR__ . '/../..' . '/Services/ManageRequestService.php',
        'MelhorEnvio\\Services\\NoticeFormService' => __DIR__ . '/../..' . '/Services/NoticeFormService.php',
        'MelhorEnvio\\Services\\OptionsMethodShippingService' => __DIR__ . '/../..' . '/Services/OptionsMethodShippingService.php',
        'MelhorEnvio\\Services\\OrderInvoicesService' => __DIR__ . '/../..' . '/Services/OrderInvoicesService.php',
        'MelhorEnvio\\Services\\OrderQuotationService' => __DIR__ . '/../..' . '/Services/OrderQuotationService.php',
        'MelhorEnvio\\Services\\OrderService' => __DIR__ . '/../..' . '/Services/OrderService.php',
        'MelhorEnvio\\Services\\OrdersProductsService' => __DIR__ . '/../..' . '/Services/OrdersProductsService.php',
        'MelhorEnvio\\Services\\PackageService' => __DIR__ . '/../..' . '/Services/PackageService.php',
        'MelhorEnvio\\Services\\PayloadService' => __DIR__ . '/../..' . '/Services/PayloadService.php',
        'MelhorEnvio\\Services\\ProcessAdditionalTaxService' => __DIR__ . '/../..' . '/Services/ProcessAdditionalTaxService.php',
        'MelhorEnvio\\Services\\Products\\BundleService' => __DIR__ . '/../..' . '/Services/Products/BundleService.php',
        'MelhorEnvio\\Services\\Products\\CompositeService' => __DIR__ . '/../..' . '/Services/Products/CompositeService.php',
        'MelhorEnvio\\Services\\Products\\InvalidProduct' => __DIR__ . '/../..' . '/Services/Products/InvalidProduct.php',
        'MelhorEnvio\\Services\\Products\\ProductsService' => __DIR__ . '/../..' . '/Services/Products/ProductsService.php',
        'MelhorEnvio\\Services\\QuotationProductPageService' => __DIR__ . '/../..' . '/Services/QuotationProductPageService.php',
        'MelhorEnvio\\Services\\QuotationService' => __DIR__ . '/../..' . '/Services/QuotationService.php',
        'MelhorEnvio\\Services\\RequestService' => __DIR__ . '/../..' . '/Services/RequestService.php',
        'MelhorEnvio\\Services\\RolesService' => __DIR__ . '/../..' . '/Services/RolesService.php',
        'MelhorEnvio\\Services\\RouterService' => __DIR__ . '/../..' . '/Services/RouterService.php',
        'MelhorEnvio\\Services\\SellerService' => __DIR__ . '/../..' . '/Services/SellerService.php',
        'MelhorEnvio\\Services\\SessionNoticeService' => __DIR__ . '/../..' . '/Services/SessionNoticeService.php',
        'MelhorEnvio\\Services\\ShippingClassService' => __DIR__ . '/../..' . '/Services/ShippingClassService.php',
        'MelhorEnvio\\Services\\ShippingMelhorEnvioService' => __DIR__ . '/../..' . '/Services/ShippingMelhorEnvioService.php',
        'MelhorEnvio\\Services\\ShortCodeService' => __DIR__ . '/../..' . '/Services/ShortCodeService.php',
        'MelhorEnvio\\Services\\StoreService' => __DIR__ . '/../..' . '/Services/StoreService.php',
        'MelhorEnvio\\Services\\TestService' => __DIR__ . '/../..' . '/Services/TestService.php',
        'MelhorEnvio\\Services\\TokenService' => __DIR__ . '/../..' . '/Services/TokenService.php',
        'MelhorEnvio\\Services\\TrackingService' => __DIR__ . '/../..' . '/Services/TrackingService.php',
        'MelhorEnvio\\Services\\UserWooCommerceDataService' => __DIR__ . '/../..' . '/Services/UserWooCommerceDataService.php',
        'MelhorEnvio\\Services\\WooCommerceService' => __DIR__ . '/../..' . '/Services/WooCommerceService.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit86344c9ce8ce3fa0f49736e7e62fe6e5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit86344c9ce8ce3fa0f49736e7e62fe6e5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit86344c9ce8ce3fa0f49736e7e62fe6e5::$classMap;

        }, null, ClassLoader::class);
    }
}