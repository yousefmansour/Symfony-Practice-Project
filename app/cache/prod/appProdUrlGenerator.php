<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LoginController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'team_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\TeamController::listTeamsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/teams',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'team_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\TeamController::createTeamAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/teams/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'team_view' => array (  0 =>   array (    0 => 'teamId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\TeamController::viewTeamAction',  ),  2 =>   array (    'teamId' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'teamId',    ),    1 =>     array (      0 => 'text',      1 => '/teams',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'team_delete' => array (  0 =>   array (    0 => 'teamId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\TeamController::deleteTeamAction',  ),  2 =>   array (    'teamId' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'teamId',    ),    1 =>     array (      0 => 'text',      1 => '/teams/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'team_leave' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PlayerController::leaveTeamAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/teams/leave',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'team_join' => array (  0 =>   array (    0 => 'teamId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PlayerController::joinTeamAction',  ),  2 =>   array (    'teamId' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'teamId',    ),    1 =>     array (      0 => 'text',      1 => '/teams/join',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sport_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SportController::listSportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sports',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sport_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SportController::createSportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sports/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sport_delete' => array (  0 =>   array (    0 => 'sportId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SportController::deleteSportAction',  ),  2 =>   array (    'sportId' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'sportId',    ),    1 =>     array (      0 => 'text',      1 => '/sports/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'event_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EventController::listEventsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/events',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'event_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EventController::createEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/events/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'event_delete' => array (  0 =>   array (    0 => 'eventId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EventController::deleteEventAction',  ),  2 =>   array (    'sportId' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'eventId',    ),    1 =>     array (      0 => 'text',      1 => '/events/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'event_view' => array (  0 =>   array (    0 => 'eventId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EventController::viewEventAction',  ),  2 =>   array (    'eventId' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'eventId',    ),    1 =>     array (      0 => 'text',      1 => '/events/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'event_join' => array (  0 =>   array (    0 => 'eventId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EventController::joinEventAction',  ),  2 =>   array (    'eventId' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'eventId',    ),    1 =>     array (      0 => 'text',      1 => '/events/join',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'event_leave' => array (  0 =>   array (    0 => 'eventId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EventController::leaveEventAction',  ),  2 =>   array (    'eventId' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'eventId',    ),    1 =>     array (      0 => 'text',      1 => '/events/leave',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
