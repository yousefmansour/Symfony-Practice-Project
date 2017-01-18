<?php

/* AppBundle:Events:event_view.html.twig */
class __TwigTemplate_e2bbd79b58bc9ff0899e6c0240f04c04ae8e7d2b10757e8193238b1a89726c34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:main_layout.html.twig", "AppBundle:Events:event_view.html.twig", 1);
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

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        #team-table {
            text-align: center;
        }
        #team-table table {
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
        a {
            color: blue;
        }
        
        .table-col1 {
            min-width: 15px;
        }
    </style>
";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        // line 34
        echo "        
    <div id=\"team-table\">
        ";
        // line 36
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "teams", array())) > 0)) {
            // line 37
            echo "        <table>
            <tr>
                <th class=\"table-col1\"></th>
                <th>Teams</th>
            </tr>   
                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "teams", array())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 43
                echo "                    <tr>
                        <td>";
                // line 44
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "</td>
                        <td><a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("team_view", array("teamId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "teams", array()), $context["i"], array(), "array"), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "teams", array()), $context["i"], array(), "array"), "name", array()), "html", null, true);
                echo "</a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        </table>
        ";
        } else {
            // line 50
            echo "            <h3>No teams have registered for this event yet.</h3>
        ";
        }
        // line 51
        echo "        
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Events:event_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 51,  107 => 50,  103 => 48,  92 => 45,  88 => 44,  85 => 43,  81 => 42,  74 => 37,  72 => 36,  68 => 34,  65 => 33,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle:Layouts:main_layout.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <style>*/
/*         #team-table {*/
/*             text-align: center;*/
/*         }*/
/*         #team-table table {*/
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
/*         a {*/
/*             color: blue;*/
/*         }*/
/*         */
/*         .table-col1 {*/
/*             min-width: 15px;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*         */
/*     <div id="team-table">*/
/*         {% if event.teams|length > 0 %}*/
/*         <table>*/
/*             <tr>*/
/*                 <th class="table-col1"></th>*/
/*                 <th>Teams</th>*/
/*             </tr>   */
/*                 {% for i in 0..event.teams|length - 1 %}*/
/*                     <tr>*/
/*                         <td>{{ i+1 }}</td>*/
/*                         <td><a href="{{ path('team_view', {'teamId' : event.teams[i].id}) }}">{{ event.teams[i].name }}</a></td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*         </table>*/
/*         {% else %}*/
/*             <h3>No teams have registered for this event yet.</h3>*/
/*         {% endif %}        */
/*     </div>*/
/*     */
/* {% endblock %}*/
