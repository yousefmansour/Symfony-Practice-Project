<?php

/* AppBundle:Teams:team_list.html.twig */
class __TwigTemplate_a73e956fbae3fe8958c4dd532509147384ed0d885efc543ec8ced2ab61e6599a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:main_layout.html.twig", "AppBundle:Teams:team_list.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Layouts:main_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    
    <style>
        #teams-table {
            text-align: center;
        }
        #teams-table table {
            display: inline-block;
        }
        
        table, th, tr, td {
            border: 1px solid black;
        }
        
        th {
            padding: 0px 2px 0px;
        }
        td {
            padding: 0px 2px 0px;
        }
        
        #teams-table a {
            color: blue;
        }
        
        .table-min-width {
            min-width: 15px;
        }
        
        .my-team {
            color: red !important;
        }  
    </style>
";
    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        // line 38
        echo "    <div id=\"teams-table\">
        <table>
            <tr>
                <th class=\"table-min-width\"></th>
                <th>Team</th>
                <th>Players</th>
            </tr>
            ";
        // line 45
        if ((twig_length_filter($this->env, (isset($context["teams"]) ? $context["teams"] : null)) > 0)) {
            // line 46
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["teams"]) ? $context["teams"] : null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 47
                echo "                    ";
                $context["team"] = $this->getAttribute((isset($context["teams"]) ? $context["teams"] : null), $context["i"], array(), "array");
                // line 48
                echo "                    ";
                $context["teamId"] = $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "id", array());
                // line 49
                echo "                    <tr>
                        <td class=\"table-min-width\">";
                // line 50
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "</td>
                        ";
                // line 51
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "team", array(), "any", false, true), "name", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "team", array()), "name", array()) === $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "name", array())))) {
                    // line 52
                    echo "                            <td><a class=\"my-team\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("team_view", array("teamId" => (isset($context["teamId"]) ? $context["teamId"] : null))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "name", array()), "html", null, true);
                    echo "</a></td>
                        ";
                } else {
                    // line 54
                    echo "                            <td><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("team_view", array("teamId" => (isset($context["teamId"]) ? $context["teamId"] : null))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "name", array()), "html", null, true);
                    echo "</a></td>
                        ";
                }
                // line 56
                echo "                        
                        <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "players", array())), "html", null, true);
                echo "</td>

                    ";
                // line 59
                if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                    // line 60
                    echo "                        <td><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("team_delete", array("teamId" => (isset($context["teamId"]) ? $context["teamId"] : null))), "html", null, true);
                    echo "\">Delete</a></td>
                    ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(                // line 61
(isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "team", array(), "any", false, true), "id", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "team", array()), "id", array()) === (isset($context["teamId"]) ? $context["teamId"] : null)))) {
                    // line 62
                    echo "                        <td><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("team_leave");
                    echo "\">Leave</a></td>
                    ";
                } else {
                    // line 64
                    echo "                        <td><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("team_join", array("teamId" => $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "id", array()))), "html", null, true);
                    echo "\">Join</a></td>
                    ";
                }
                // line 65
                echo "    
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "            ";
        }
        // line 69
        echo "        </table>
        ";
        // line 70
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "team", array(), "any", true, true) && (null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "team", array())))) {
            // line 71
            echo "            <div>
                <a href=\"";
            // line 72
            echo $this->env->getExtension('routing')->getPath("team_create");
            echo "\">Create new team</a>
            </div>
        ";
        }
        // line 75
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Teams:team_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 75,  169 => 72,  166 => 71,  164 => 70,  161 => 69,  158 => 68,  150 => 65,  144 => 64,  138 => 62,  136 => 61,  131 => 60,  129 => 59,  124 => 57,  121 => 56,  113 => 54,  105 => 52,  103 => 51,  99 => 50,  96 => 49,  93 => 48,  90 => 47,  85 => 46,  83 => 45,  74 => 38,  71 => 37,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'AppBundle:Layouts:main_layout.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     */
/*     <style>*/
/*         #teams-table {*/
/*             text-align: center;*/
/*         }*/
/*         #teams-table table {*/
/*             display: inline-block;*/
/*         }*/
/*         */
/*         table, th, tr, td {*/
/*             border: 1px solid black;*/
/*         }*/
/*         */
/*         th {*/
/*             padding: 0px 2px 0px;*/
/*         }*/
/*         td {*/
/*             padding: 0px 2px 0px;*/
/*         }*/
/*         */
/*         #teams-table a {*/
/*             color: blue;*/
/*         }*/
/*         */
/*         .table-min-width {*/
/*             min-width: 15px;*/
/*         }*/
/*         */
/*         .my-team {*/
/*             color: red !important;*/
/*         }  */
/*     </style>*/
/* {% endblock %}*/
/* {% block content %}*/
/*     <div id="teams-table">*/
/*         <table>*/
/*             <tr>*/
/*                 <th class="table-min-width"></th>*/
/*                 <th>Team</th>*/
/*                 <th>Players</th>*/
/*             </tr>*/
/*             {% if teams|length > 0 %}*/
/*                 {% for i in 0..teams|length - 1 %}*/
/*                     {% set team = teams[i] %}*/
/*                     {% set teamId = team.id %}*/
/*                     <tr>*/
/*                         <td class="table-min-width">{{ i+1 }}</td>*/
/*                         {% if app.user.team.name is defined and app.user.team.name is same as(team.name) %}*/
/*                             <td><a class="my-team" href="{{ path('team_view', {'teamId': teamId}) }}">{{ team.name }}</a></td>*/
/*                         {% else %}*/
/*                             <td><a href="{{ path('team_view', {'teamId': teamId}) }}">{{ team.name }}</a></td>*/
/*                         {% endif %}*/
/*                         */
/*                         <td>{{ team.players|length }}</td>*/
/* */
/*                     {% if is_granted('ROLE_ADMIN') %}*/
/*                         <td><a href="{{ path('team_delete', {'teamId': teamId}) }}">Delete</a></td>*/
/*                     {% elseif app.user.team.id is defined and app.user.team.id is same as(teamId) %}*/
/*                         <td><a href="{{ path('team_leave') }}">Leave</a></td>*/
/*                     {% else %}*/
/*                         <td><a href="{{ path('team_join', { 'teamId' : team.id }) }}">Join</a></td>*/
/*                     {% endif %}    */
/*                     </tr>*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*         </table>*/
/*         {% if app.user.team is defined and app.user.team is null %}*/
/*             <div>*/
/*                 <a href="{{ path('team_create') }}">Create new team</a>*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
