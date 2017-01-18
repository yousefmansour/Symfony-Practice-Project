<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
        }

        // register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'register',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AppBundle\\Controller\\LoginController::loginAction',  '_route' => 'login',);
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        if (0 === strpos($pathinfo, '/teams')) {
            // team_list
            if ($pathinfo === '/teams') {
                return array (  '_controller' => 'AppBundle\\Controller\\TeamController::listTeamsAction',  '_route' => 'team_list',);
            }

            // team_create
            if ($pathinfo === '/teams/create') {
                return array (  '_controller' => 'AppBundle\\Controller\\TeamController::createTeamAction',  '_route' => 'team_create',);
            }

            // team_view
            if (preg_match('#^/teams/(?P<teamId>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'team_view')), array (  '_controller' => 'AppBundle\\Controller\\TeamController::viewTeamAction',));
            }

            // team_delete
            if (0 === strpos($pathinfo, '/teams/delete') && preg_match('#^/teams/delete/(?P<teamId>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'team_delete')), array (  '_controller' => 'AppBundle\\Controller\\TeamController::deleteTeamAction',));
            }

            // team_leave
            if ($pathinfo === '/teams/leave') {
                return array (  '_controller' => 'AppBundle\\Controller\\PlayerController::leaveTeamAction',  '_route' => 'team_leave',);
            }

            // team_join
            if (0 === strpos($pathinfo, '/teams/join') && preg_match('#^/teams/join/(?P<teamId>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'team_join')), array (  '_controller' => 'AppBundle\\Controller\\PlayerController::joinTeamAction',));
            }

        }

        if (0 === strpos($pathinfo, '/sports')) {
            // sport_list
            if ($pathinfo === '/sports') {
                return array (  '_controller' => 'AppBundle\\Controller\\SportController::listSportAction',  '_route' => 'sport_list',);
            }

            // sport_create
            if ($pathinfo === '/sports/create') {
                return array (  '_controller' => 'AppBundle\\Controller\\SportController::createSportAction',  '_route' => 'sport_create',);
            }

            // sport_delete
            if (0 === strpos($pathinfo, '/sports/delete') && preg_match('#^/sports/delete/(?P<sportId>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sport_delete')), array (  '_controller' => 'AppBundle\\Controller\\SportController::deleteSportAction',));
            }

        }

        if (0 === strpos($pathinfo, '/events')) {
            // event_list
            if ($pathinfo === '/events') {
                return array (  '_controller' => 'AppBundle\\Controller\\EventController::listEventsAction',  '_route' => 'event_list',);
            }

            // event_create
            if ($pathinfo === '/events/create') {
                return array (  '_controller' => 'AppBundle\\Controller\\EventController::createEventAction',  '_route' => 'event_create',);
            }

            // event_delete
            if (0 === strpos($pathinfo, '/events/delete') && preg_match('#^/events/delete/(?P<eventId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_delete')), array (  '_controller' => 'AppBundle\\Controller\\EventController::deleteEventAction',));
            }

            // event_view
            if (0 === strpos($pathinfo, '/events/view') && preg_match('#^/events/view/(?P<eventId>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_view')), array (  '_controller' => 'AppBundle\\Controller\\EventController::viewEventAction',));
            }

            // event_join
            if (0 === strpos($pathinfo, '/events/join') && preg_match('#^/events/join/(?P<eventId>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_join')), array (  '_controller' => 'AppBundle\\Controller\\EventController::joinEventAction',));
            }

            // event_leave
            if (0 === strpos($pathinfo, '/events/leave') && preg_match('#^/events/leave/(?P<eventId>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_leave')), array (  '_controller' => 'AppBundle\\Controller\\EventController::leaveEventAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
