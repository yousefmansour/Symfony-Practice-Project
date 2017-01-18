<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
