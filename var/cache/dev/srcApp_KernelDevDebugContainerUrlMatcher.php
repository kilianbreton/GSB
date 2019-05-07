<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
            '/praticien' => [[['_route' => 'praticien', '_controller' => 'App\\Controller\\PraticienController::index'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
            '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
            '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\Admin\\AdminVisiteursController::editMe'], null, null, null, false, false, null]],
            '/rapports' => [[['_route' => 'rapport', '_controller' => 'App\\Controller\\RapportVisiteController::list'], null, null, null, false, false, null]],
            '/newrapport' => [[['_route' => 'newrapport', '_controller' => 'App\\Controller\\RapportVisiteController::index'], null, null, null, false, false, null]],
            '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminIndexController::index'], null, null, null, false, false, null]],
            '/admin/visiteur' => [[['_route' => 'admin.visiteurs', '_controller' => 'App\\Controller\\Admin\\AdminVisiteursController::index'], null, null, null, false, false, null]],
            '/admin/new_vis' => [[['_route' => 'new.visiteurs', '_controller' => 'App\\Controller\\Admin\\AdminVisiteursController::new'], null, null, null, false, false, null]],
            '/admin/praticien' => [[['_route' => 'admin.praticien', '_controller' => 'App\\Controller\\Admin\\AdminPraticienController::index'], null, null, null, false, false, null]],
            '/admin/new_prat' => [[['_route' => 'new.praticien', '_controller' => 'App\\Controller\\Admin\\AdminPraticienController::new'], null, null, null, false, false, null]],
            '/admin/rapports' => [[['_route' => 'admin.rapports', '_controller' => 'App\\Controller\\Admin\\AdminRapportController:index'], null, null, null, false, false, null]],
            '/medicaments' => [[['_route' => 'medicaments', '_controller' => 'App\\Controller\\MedicamentController:index'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/showrapport/([^/]++)(*:190)'
                    .'|/admin/(?'
                        .'|del(?'
                            .'|_(?'
                                .'|vis/([^/]++)(*:230)'
                                .'|prat/([^/]++)(*:251)'
                            .')'
                            .'|rapport/([^/]++)/([^/]++)(*:285)'
                        .')'
                        .'|edit_(?'
                            .'|vis/([^/]++)(*:314)'
                            .'|prat/([^/]++)(*:335)'
                        .')'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            190 => [[['_route' => 'showrapport', '_controller' => 'App\\Controller\\RapportVisiteController::show'], ['id'], null, null, false, true, null]],
            230 => [[['_route' => 'del.visiteurs', '_controller' => 'App\\Controller\\Admin\\AdminVisiteursController::delete'], ['id'], null, null, false, true, null]],
            251 => [[['_route' => 'del.praticien', '_controller' => 'App\\Controller\\Admin\\AdminPraticienController::delete'], ['id'], null, null, false, true, null]],
            285 => [[['_route' => 'admin.delrap', '_controller' => 'App\\Controller\\Admin\\AdminRapportController:del'], ['idv', 'idr'], null, null, false, true, null]],
            314 => [[['_route' => 'edit.visiteurs', '_controller' => 'App\\Controller\\Admin\\AdminVisiteursController::edit'], ['id'], null, null, false, true, null]],
            335 => [[['_route' => 'edit.praticien', '_controller' => 'App\\Controller\\Admin\\AdminPraticienController::edit'], ['id'], null, null, false, true, null]],
        ];
    }
}
