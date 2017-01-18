<?php

/* AppBundle:Events:event_list.html.twig */
class __TwigTemplate_902692feb81569b8d91e9eb0de8cc2939a8655bb5973f0665e0c3cd5de95e7cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:main_layout.html.twig", "AppBundle:Events:event_list.html.twig", 1);
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
        $__internal_b313e0e77dcc97d7dff16e5712d3b314f7a0d0c7f8d8ed825f473c96ba988cdf = $this->env->getExtension("native_profiler");
        $__internal_b313e0e77dcc97d7dff16e5712d3b314f7a0d0c7f8d8ed825f473c96ba988cdf->enter($__internal_b313e0e77dcc97d7dff16e5712d3b314f7a0d0c7f8d8ed825f473c96ba988cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Events:event_list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b313e0e77dcc97d7dff16e5712d3b314f7a0d0c7f8d8ed825f473c96ba988cdf->leave($__internal_b313e0e77dcc97d7dff16e5712d3b314f7a0d0c7f8d8ed825f473c96ba988cdf_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3f7bf025f03d360f32cbd86c833abb3a29e9adc226ebf5bf6cced07dec019832 = $this->env->getExtension("native_profiler");
        $__internal_3f7bf025f03d360f32cbd86c833abb3a29e9adc226ebf5bf6cced07dec019832->enter($__internal_3f7bf025f03d360f32cbd86c833abb3a29e9adc226ebf5bf6cced07dec019832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_3f7bf025f03d360f32cbd86c833abb3a29e9adc226ebf5bf6cced07dec019832->leave($__internal_3f7bf025f03d360f32cbd86c833abb3a29e9adc226ebf5bf6cced07dec019832_prof);

    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        $__internal_56de35a4ec25f572f6b964988d3b7d03c9561b7a2bd5e26ba4ee0a364698cff1 = $this->env->getExtension("native_profiler");
        $__internal_56de35a4ec25f572f6b964988d3b7d03c9561b7a2bd5e26ba4ee0a364698cff1->enter($__internal_56de35a4ec25f572f6b964988d3b7d03c9561b7a2bd5e26ba4ee0a364698cff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 40
        echo "    <div id=\"events-table\">
        <table>
            <tr>
                <th class=\"table-min-width\"></th>
                <th>Event</th>
                <th>Sport</th>
                <th>Time</th>
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
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "time", array()), "d/m/y H:i"), "html", null, true);
                echo "</td>
                        <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "teams", array())), "html", null, true);
                echo "</td>

                    ";
                // line 64
                if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                    // line 65
                    echo "                        <td><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_delete", array("eventId" => (isset($context["eventId"]) ? $context["eventId"] : $this->getContext($context, "eventId")))), "html", null, true);
                    echo "\">Delete</a></td>
                    ";
                } elseif ($this->getAttribute($this->getAttribute(                // line 66
(isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "team", array(), "any", true, true)) {
                    // line 67
                    echo "                        ";
                    if (twig_in_filter((isset($context["eventId"]) ? $context["eventId"] : $this->getContext($context, "eventId")), (isset($context["teamEvents"]) ? $context["teamEvents"] : $this->getContext($context, "teamEvents")))) {
                        echo " 
                            <td><a href=\"";
                        // line 68
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_leave", array("eventId" => (isset($context["eventId"]) ? $context["eventId"] : $this->getContext($context, "eventId")))), "html", null, true);
                        echo "\">Leave</a></td>
                        ";
                    } else {
                        // line 70
                        echo "                            <td><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_join", array("eventId" => (isset($context["eventId"]) ? $context["eventId"] : $this->getContext($context, "eventId")))), "html", null, true);
                        echo "\">Join</a></td>
                        ";
                    }
                    // line 72
                    echo "                    ";
                }
                // line 73
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "            ";
        }
        // line 76
        echo "        </table>
        ";
        // line 77
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 78
            echo "            <div>
                <a href=\"";
            // line 79
            echo $this->env->getExtension('routing')->getPath("event_create");
            echo "\">Create new event</a>
            </div>
        ";
        }
        // line 82
        echo "    </div>
";
        
        $__internal_56de35a4ec25f572f6b964988d3b7d03c9561b7a2bd5e26ba4ee0a364698cff1->leave($__internal_56de35a4ec25f572f6b964988d3b7d03c9561b7a2bd5e26ba4ee0a364698cff1_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Events:event_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 82,  201 => 79,  198 => 78,  196 => 77,  193 => 76,  190 => 75,  183 => 73,  180 => 72,  174 => 70,  169 => 68,  164 => 67,  162 => 66,  157 => 65,  155 => 64,  150 => 62,  146 => 61,  141 => 60,  133 => 58,  126 => 56,  122 => 55,  118 => 54,  115 => 53,  112 => 52,  109 => 51,  104 => 50,  102 => 49,  91 => 40,  85 => 39,  41 => 3,  35 => 2,  11 => 1,);
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
/*     <div id="events-table">*/
/*         <table>*/
/*             <tr>*/
/*                 <th class="table-min-width"></th>*/
/*                 <th>Event</th>*/
/*                 <th>Sport</th>*/
/*                 <th>Time</th>*/
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
/*                          <td>{{ event.time|date('d/m/y H:i') }}</td>*/
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
