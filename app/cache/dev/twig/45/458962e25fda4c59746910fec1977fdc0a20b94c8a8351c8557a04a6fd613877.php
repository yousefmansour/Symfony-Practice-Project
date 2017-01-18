<?php

/* @App/Teams/teams.html.twig */
class __TwigTemplate_0a34e0f5de158a7a1a5f292e288a562ecd243de7845f22d8b4b50357b0ce6fe1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:main_layout.html.twig", "@App/Teams/teams.html.twig", 1);
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
        $__internal_7a58afb1f460bc743980179200cbbfc7a19073cfb0b7b9427c568da2bb2be699 = $this->env->getExtension("native_profiler");
        $__internal_7a58afb1f460bc743980179200cbbfc7a19073cfb0b7b9427c568da2bb2be699->enter($__internal_7a58afb1f460bc743980179200cbbfc7a19073cfb0b7b9427c568da2bb2be699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Teams/teams.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a58afb1f460bc743980179200cbbfc7a19073cfb0b7b9427c568da2bb2be699->leave($__internal_7a58afb1f460bc743980179200cbbfc7a19073cfb0b7b9427c568da2bb2be699_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a44ad2ff75862b3030ec4a21e167db4358f1da63f535092e39674361bd710a33 = $this->env->getExtension("native_profiler");
        $__internal_a44ad2ff75862b3030ec4a21e167db4358f1da63f535092e39674361bd710a33->enter($__internal_a44ad2ff75862b3030ec4a21e167db4358f1da63f535092e39674361bd710a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        a {
            color: black;
        }
        
        .table-col1 {
            min-width: 15px;
        }
        
    </style>
";
        
        $__internal_a44ad2ff75862b3030ec4a21e167db4358f1da63f535092e39674361bd710a33->leave($__internal_a44ad2ff75862b3030ec4a21e167db4358f1da63f535092e39674361bd710a33_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_9673505f36888c35d50e07e0faca4c3d653e4e9fb3410acc98ea1391481db4b7 = $this->env->getExtension("native_profiler");
        $__internal_9673505f36888c35d50e07e0faca4c3d653e4e9fb3410acc98ea1391481db4b7->enter($__internal_9673505f36888c35d50e07e0faca4c3d653e4e9fb3410acc98ea1391481db4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 34
        echo "    
    <div id=\"teams-table\">
        <table>
            <tr>
                <th class=\"table-col1\"></th>
                <th>Name</th>
                <th>Players</th>
            </tr>
            ";
        // line 42
        if ((twig_length_filter($this->env, (isset($context["teams"]) ? $context["teams"] : $this->getContext($context, "teams"))) > 0)) {
            // line 43
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["teams"]) ? $context["teams"] : $this->getContext($context, "teams"))) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "                   
                    <tr>
                        <td class=\"table-col1\">";
                // line 45
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "</td>
                        <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["teams"]) ? $context["teams"] : $this->getContext($context, "teams")), $context["i"], array(), "array"), "name", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["teams"]) ? $context["teams"] : $this->getContext($context, "teams")), $context["i"], array(), "array"), "players", array())), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            ";
        }
        // line 51
        echo "        </table>
        ";
        // line 52
        if ((null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "team", array()))) {
            // line 53
            echo "            <div>
                <a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("team_create");
            echo "\">Create new team</a>
            </div>
        ";
        }
        // line 57
        echo "    </div>
";
        
        $__internal_9673505f36888c35d50e07e0faca4c3d653e4e9fb3410acc98ea1391481db4b7->leave($__internal_9673505f36888c35d50e07e0faca4c3d653e4e9fb3410acc98ea1391481db4b7_prof);

    }

    public function getTemplateName()
    {
        return "@App/Teams/teams.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 57,  133 => 54,  130 => 53,  128 => 52,  125 => 51,  122 => 50,  113 => 47,  109 => 46,  105 => 45,  97 => 43,  95 => 42,  85 => 34,  79 => 33,  41 => 3,  35 => 2,  11 => 1,);
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
/*         a {*/
/*             color: black;*/
/*         }*/
/*         */
/*         .table-col1 {*/
/*             min-width: 15px;*/
/*         }*/
/*         */
/*     </style>*/
/* {% endblock %}*/
/* {% block content %}*/
/*     */
/*     <div id="teams-table">*/
/*         <table>*/
/*             <tr>*/
/*                 <th class="table-col1"></th>*/
/*                 <th>Name</th>*/
/*                 <th>Players</th>*/
/*             </tr>*/
/*             {% if teams|length > 0 %}*/
/*                 {% for i in 0..teams|length - 1 %}                   */
/*                     <tr>*/
/*                         <td class="table-col1">{{ i+1 }}</td>*/
/*                         <td>{{ teams[i].name }}</td>*/
/*                         <td>{{ teams[i].players|length }}</td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*         </table>*/
/*         {% if app.user.team is null %}*/
/*             <div>*/
/*                 <a href="{{ path('team_create') }}">Create new team</a>*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
