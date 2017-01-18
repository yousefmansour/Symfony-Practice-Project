<?php

/* @App/Events/event_view.html.twig */
class __TwigTemplate_51b4bcd1504dcea2c76549bde81d97b788e59cf9159ded87909554d37a622df0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:main_layout.html.twig", "@App/Events/event_view.html.twig", 1);
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
        $__internal_c1220913a3c5353a661ab72edfe9a11fb001b9580a0c08e532e3133836df82a5 = $this->env->getExtension("native_profiler");
        $__internal_c1220913a3c5353a661ab72edfe9a11fb001b9580a0c08e532e3133836df82a5->enter($__internal_c1220913a3c5353a661ab72edfe9a11fb001b9580a0c08e532e3133836df82a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Events/event_view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1220913a3c5353a661ab72edfe9a11fb001b9580a0c08e532e3133836df82a5->leave($__internal_c1220913a3c5353a661ab72edfe9a11fb001b9580a0c08e532e3133836df82a5_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b1db4252c90ddd3094cc93edd064b9eec7916592c6992e00251aa33aeae30c77 = $this->env->getExtension("native_profiler");
        $__internal_b1db4252c90ddd3094cc93edd064b9eec7916592c6992e00251aa33aeae30c77->enter($__internal_b1db4252c90ddd3094cc93edd064b9eec7916592c6992e00251aa33aeae30c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b1db4252c90ddd3094cc93edd064b9eec7916592c6992e00251aa33aeae30c77->leave($__internal_b1db4252c90ddd3094cc93edd064b9eec7916592c6992e00251aa33aeae30c77_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_05d25de4d0b9829fe1eee2712a1a71fbc9afdfcea5006dded1a3041067ac9df2 = $this->env->getExtension("native_profiler");
        $__internal_05d25de4d0b9829fe1eee2712a1a71fbc9afdfcea5006dded1a3041067ac9df2->enter($__internal_05d25de4d0b9829fe1eee2712a1a71fbc9afdfcea5006dded1a3041067ac9df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 34
        echo "        
    <div id=\"team-table\">
        ";
        // line 36
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "teams", array())) > 0)) {
            // line 37
            echo "        <table>
            <tr>
                <th class=\"table-col1\"></th>
                <th>Teams</th>
            </tr>   
                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "teams", array())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 43
                echo "                    <tr>
                        <td>";
                // line 44
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "</td>
                        <td><a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("team_view", array("teamId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "teams", array()), $context["i"], array(), "array"), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "teams", array()), $context["i"], array(), "array"), "name", array()), "html", null, true);
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
        
        $__internal_05d25de4d0b9829fe1eee2712a1a71fbc9afdfcea5006dded1a3041067ac9df2->leave($__internal_05d25de4d0b9829fe1eee2712a1a71fbc9afdfcea5006dded1a3041067ac9df2_prof);

    }

    public function getTemplateName()
    {
        return "@App/Events/event_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 51,  122 => 50,  118 => 48,  107 => 45,  103 => 44,  100 => 43,  96 => 42,  89 => 37,  87 => 36,  83 => 34,  77 => 33,  41 => 4,  35 => 3,  11 => 1,);
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
