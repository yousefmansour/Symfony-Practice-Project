<?php

/* AppBundle:Teams:team_list.html.twig */
class __TwigTemplate_4ce236c59a5eed1597043de0be0a690ea435942f658f1bc072c744ed5ccd29b6 extends Twig_Template
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
        $__internal_c3f1a0f1e4ce4609b4d6def0ea42e9186bea8b1badeeea6372aee49a22dc7a08 = $this->env->getExtension("native_profiler");
        $__internal_c3f1a0f1e4ce4609b4d6def0ea42e9186bea8b1badeeea6372aee49a22dc7a08->enter($__internal_c3f1a0f1e4ce4609b4d6def0ea42e9186bea8b1badeeea6372aee49a22dc7a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Teams:team_list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3f1a0f1e4ce4609b4d6def0ea42e9186bea8b1badeeea6372aee49a22dc7a08->leave($__internal_c3f1a0f1e4ce4609b4d6def0ea42e9186bea8b1badeeea6372aee49a22dc7a08_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b7416d6763f0155d3ee1b25639d2c9c54c54c3bd4bea9ed14639e8ad8bb912cc = $this->env->getExtension("native_profiler");
        $__internal_b7416d6763f0155d3ee1b25639d2c9c54c54c3bd4bea9ed14639e8ad8bb912cc->enter($__internal_b7416d6763f0155d3ee1b25639d2c9c54c54c3bd4bea9ed14639e8ad8bb912cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b7416d6763f0155d3ee1b25639d2c9c54c54c3bd4bea9ed14639e8ad8bb912cc->leave($__internal_b7416d6763f0155d3ee1b25639d2c9c54c54c3bd4bea9ed14639e8ad8bb912cc_prof);

    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        $__internal_94c0f74001cef30998b44f07dc604eacf5aa25d24fa4a3ebe8d2db7f7de9f3e7 = $this->env->getExtension("native_profiler");
        $__internal_94c0f74001cef30998b44f07dc604eacf5aa25d24fa4a3ebe8d2db7f7de9f3e7->enter($__internal_94c0f74001cef30998b44f07dc604eacf5aa25d24fa4a3ebe8d2db7f7de9f3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        if ((twig_length_filter($this->env, (isset($context["teams"]) ? $context["teams"] : $this->getContext($context, "teams"))) > 0)) {
            // line 46
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["teams"]) ? $context["teams"] : $this->getContext($context, "teams"))) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 47
                echo "                    ";
                $context["team"] = $this->getAttribute((isset($context["teams"]) ? $context["teams"] : $this->getContext($context, "teams")), $context["i"], array(), "array");
                // line 48
                echo "                    ";
                $context["teamId"] = $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "id", array());
                // line 49
                echo "                    <tr>
                        <td class=\"table-min-width\">";
                // line 50
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "</td>
                        ";
                // line 51
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "team", array(), "any", false, true), "name", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "team", array()), "name", array()) === $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "name", array())))) {
                    // line 52
                    echo "                            <td><a class=\"my-team\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("team_view", array("teamId" => (isset($context["teamId"]) ? $context["teamId"] : $this->getContext($context, "teamId")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "name", array()), "html", null, true);
                    echo "</a></td>
                        ";
                } else {
                    // line 54
                    echo "                            <td><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("team_view", array("teamId" => (isset($context["teamId"]) ? $context["teamId"] : $this->getContext($context, "teamId")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "name", array()), "html", null, true);
                    echo "</a></td>
                        ";
                }
                // line 56
                echo "                        
                        <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "players", array())), "html", null, true);
                echo "</td>

                    ";
                // line 59
                if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                    // line 60
                    echo "                        <td><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("team_delete", array("teamId" => (isset($context["teamId"]) ? $context["teamId"] : $this->getContext($context, "teamId")))), "html", null, true);
                    echo "\">Delete</a></td>
                    ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(                // line 61
(isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "team", array(), "any", false, true), "id", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "team", array()), "id", array()) === (isset($context["teamId"]) ? $context["teamId"] : $this->getContext($context, "teamId"))))) {
                    // line 62
                    echo "                        <td><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("team_leave");
                    echo "\">Leave</a></td>
                    ";
                } else {
                    // line 64
                    echo "                        <td><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("team_join", array("teamId" => $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "id", array()))), "html", null, true);
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
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "team", array(), "any", true, true) && (null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "team", array())))) {
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
        
        $__internal_94c0f74001cef30998b44f07dc604eacf5aa25d24fa4a3ebe8d2db7f7de9f3e7->leave($__internal_94c0f74001cef30998b44f07dc604eacf5aa25d24fa4a3ebe8d2db7f7de9f3e7_prof);

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
        return array (  190 => 75,  184 => 72,  181 => 71,  179 => 70,  176 => 69,  173 => 68,  165 => 65,  159 => 64,  153 => 62,  151 => 61,  146 => 60,  144 => 59,  139 => 57,  136 => 56,  128 => 54,  120 => 52,  118 => 51,  114 => 50,  111 => 49,  108 => 48,  105 => 47,  100 => 46,  98 => 45,  89 => 38,  83 => 37,  41 => 3,  35 => 2,  11 => 1,);
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
