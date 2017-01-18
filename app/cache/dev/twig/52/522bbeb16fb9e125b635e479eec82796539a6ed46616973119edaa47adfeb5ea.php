<?php

/* @App/Events/event_list.html.twig */
class __TwigTemplate_afc028cf379f0ed7727545481972eb80527f63298a4953324b9e4f15d63a742f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:main_layout.html.twig", "@App/Events/event_list.html.twig", 1);
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
        $__internal_1a6cb941e786ae2dce1f1b32c54f75fcf4b2134dca2bb10e73baa05eb5a0d36f = $this->env->getExtension("native_profiler");
        $__internal_1a6cb941e786ae2dce1f1b32c54f75fcf4b2134dca2bb10e73baa05eb5a0d36f->enter($__internal_1a6cb941e786ae2dce1f1b32c54f75fcf4b2134dca2bb10e73baa05eb5a0d36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Events/event_list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a6cb941e786ae2dce1f1b32c54f75fcf4b2134dca2bb10e73baa05eb5a0d36f->leave($__internal_1a6cb941e786ae2dce1f1b32c54f75fcf4b2134dca2bb10e73baa05eb5a0d36f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_93e0c9b36bdf836da28ee35f04c60756570382106213c51ec459d59fd5b6cea5 = $this->env->getExtension("native_profiler");
        $__internal_93e0c9b36bdf836da28ee35f04c60756570382106213c51ec459d59fd5b6cea5->enter($__internal_93e0c9b36bdf836da28ee35f04c60756570382106213c51ec459d59fd5b6cea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    
    <style>
        #events-table {
            text-align: center;
        }
        #events-table table {
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
        
        #events-table a {
            color: blue;
        }
        
        .table-min-width {
            min-width: 15px;
        }
        
        .in-event {
            color: red !important;
        }
        
    </style>
    
";
        
        $__internal_93e0c9b36bdf836da28ee35f04c60756570382106213c51ec459d59fd5b6cea5->leave($__internal_93e0c9b36bdf836da28ee35f04c60756570382106213c51ec459d59fd5b6cea5_prof);

    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        $__internal_907faf98bfb2b67d58c4d29e2d7f00b9769869a9c14802b21f1997ebeebc124f = $this->env->getExtension("native_profiler");
        $__internal_907faf98bfb2b67d58c4d29e2d7f00b9769869a9c14802b21f1997ebeebc124f->enter($__internal_907faf98bfb2b67d58c4d29e2d7f00b9769869a9c14802b21f1997ebeebc124f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 40
        echo "    
    <div id=\"events-table\">
        <table>
            <tr>
                <th class=\"table-min-width\"></th>
                <th>Event</th>
                <th>Sport</th>
                <th>Teams</th>
            </tr>
            ";
        // line 49
        if ((twig_length_filter($this->env, (isset($context["events"]) ? $context["events"] : $this->getContext($context, "events"))) > 0)) {
            // line 50
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["events"]) ? $context["events"] : $this->getContext($context, "events"))) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 51
                echo "                    ";
                $context["event"] = $this->getAttribute((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), $context["i"], array(), "array");
                // line 52
                echo "                    ";
                $context["eventId"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array());
                // line 53
                echo "                    <tr>
                        <td class=\"table-min-width\">";
                // line 54
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "</td>
                        ";
                // line 55
                if (twig_in_filter((isset($context["eventId"]) ? $context["eventId"] : $this->getContext($context, "eventId")), (isset($context["teamEvents"]) ? $context["teamEvents"] : $this->getContext($context, "teamEvents")))) {
                    echo " 
                            <td><a class=\"in-event\" href=\"";
                    // line 56
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_view", array("eventId" => (isset($context["eventId"]) ? $context["eventId"] : $this->getContext($context, "eventId")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name", array()), "html", null, true);
                    echo "</a></td>
                        ";
                } else {
                    // line 58
                    echo "                             <td><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_view", array("eventId" => (isset($context["eventId"]) ? $context["eventId"] : $this->getContext($context, "eventId")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name", array()), "html", null, true);
                    echo "</a></td>
                        ";
                }
                // line 60
                echo "                         <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "sport", array()), "name", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "teams", array())), "html", null, true);
                echo "</td>

                    ";
                // line 63
                if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                    // line 64
                    echo "                        <td><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_delete", array("eventId" => (isset($context["eventId"]) ? $context["eventId"] : $this->getContext($context, "eventId")))), "html", null, true);
                    echo "\">Delete</a></td>
                    ";
                } elseif ($this->getAttribute($this->getAttribute(                // line 65
(isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "team", array(), "any", true, true)) {
                    // line 66
                    echo "                        ";
                    if (twig_in_filter((isset($context["eventId"]) ? $context["eventId"] : $this->getContext($context, "eventId")), (isset($context["teamEvents"]) ? $context["teamEvents"] : $this->getContext($context, "teamEvents")))) {
                        echo " 
                            <td><a href=\"";
                        // line 67
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_leave", array("eventId" => (isset($context["eventId"]) ? $context["eventId"] : $this->getContext($context, "eventId")))), "html", null, true);
                        echo "\">Leave</a></td>
                        ";
                    } else {
                        // line 69
                        echo "                            <td><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_join", array("eventId" => (isset($context["eventId"]) ? $context["eventId"] : $this->getContext($context, "eventId")))), "html", null, true);
                        echo "\">Join</a></td>
                        ";
                    }
                    // line 71
                    echo "                    ";
                }
                // line 72
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "            ";
        }
        // line 75
        echo "        </table>
        ";
        // line 76
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 77
            echo "            <div>
                <a href=\"";
            // line 78
            echo $this->env->getExtension('routing')->getPath("event_create");
            echo "\">Create new event</a>
            </div>
        ";
        }
        // line 81
        echo "    </div>
";
        
        $__internal_907faf98bfb2b67d58c4d29e2d7f00b9769869a9c14802b21f1997ebeebc124f->leave($__internal_907faf98bfb2b67d58c4d29e2d7f00b9769869a9c14802b21f1997ebeebc124f_prof);

    }

    public function getTemplateName()
    {
        return "@App/Events/event_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 81,  197 => 78,  194 => 77,  192 => 76,  189 => 75,  186 => 74,  179 => 72,  176 => 71,  170 => 69,  165 => 67,  160 => 66,  158 => 65,  153 => 64,  151 => 63,  146 => 61,  141 => 60,  133 => 58,  126 => 56,  122 => 55,  118 => 54,  115 => 53,  112 => 52,  109 => 51,  104 => 50,  102 => 49,  91 => 40,  85 => 39,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'AppBundle:Layouts:main_layout.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     */
/*     <style>*/
/*         #events-table {*/
/*             text-align: center;*/
/*         }*/
/*         #events-table table {*/
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
/*         #events-table a {*/
/*             color: blue;*/
/*         }*/
/*         */
/*         .table-min-width {*/
/*             min-width: 15px;*/
/*         }*/
/*         */
/*         .in-event {*/
/*             color: red !important;*/
/*         }*/
/*         */
/*     </style>*/
/*     */
/* {% endblock %}*/
/* {% block content %}*/
/*     */
/*     <div id="events-table">*/
/*         <table>*/
/*             <tr>*/
/*                 <th class="table-min-width"></th>*/
/*                 <th>Event</th>*/
/*                 <th>Sport</th>*/
/*                 <th>Teams</th>*/
/*             </tr>*/
/*             {% if events|length > 0 %}*/
/*                 {% for i in 0..events|length - 1 %}*/
/*                     {% set event = events[i] %}*/
/*                     {% set eventId = event.id %}*/
/*                     <tr>*/
/*                         <td class="table-min-width">{{ i+1 }}</td>*/
/*                         {% if eventId in teamEvents %} */
/*                             <td><a class="in-event" href="{{ path('event_view', {'eventId': eventId}) }}">{{ event.name }}</a></td>*/
/*                         {% else %}*/
/*                              <td><a href="{{ path('event_view', {'eventId': eventId}) }}">{{ event.name }}</a></td>*/
/*                         {% endif %}*/
/*                          <td>{{ event.sport.name }}</td>*/
/*                         <td>{{ event.teams|length }}</td>*/
/* */
/*                     {% if is_granted('ROLE_ADMIN') %}*/
/*                         <td><a href="{{ path('event_delete', {'eventId': eventId}) }}">Delete</a></td>*/
/*                     {% elseif app.user.team is defined %}*/
/*                         {% if eventId in teamEvents %} */
/*                             <td><a href="{{ path('event_leave', {'eventId': eventId}) }}">Leave</a></td>*/
/*                         {% else %}*/
/*                             <td><a href="{{ path('event_join', {'eventId' : eventId}) }}">Join</a></td>*/
/*                         {% endif %}*/
/*                     {% endif %}*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*         </table>*/
/*         {% if is_granted('ROLE_ADMIN') %}*/
/*             <div>*/
/*                 <a href="{{ path('event_create') }}">Create new event</a>*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
