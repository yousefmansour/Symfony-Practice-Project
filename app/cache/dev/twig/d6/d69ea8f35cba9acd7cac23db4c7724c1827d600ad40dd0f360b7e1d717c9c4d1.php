<?php

/* AppBundle:Teams:teams.html.twig */
class __TwigTemplate_7dfd4c83fc2aed0b43c5fc4ca2d7243babead7edbff4c47a0f19ee3a73884c8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:main_layout.html.twig", "AppBundle:Teams:teams.html.twig", 1);
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
        $__internal_a78f6604c253411114b2356f94bf48e150ad1062b98aeef256c533f050312952 = $this->env->getExtension("native_profiler");
        $__internal_a78f6604c253411114b2356f94bf48e150ad1062b98aeef256c533f050312952->enter($__internal_a78f6604c253411114b2356f94bf48e150ad1062b98aeef256c533f050312952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Teams:teams.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a78f6604c253411114b2356f94bf48e150ad1062b98aeef256c533f050312952->leave($__internal_a78f6604c253411114b2356f94bf48e150ad1062b98aeef256c533f050312952_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5911ad68878f3f7532cec390f7b50a9c36e158e902492644bf74f6fde7b9cec6 = $this->env->getExtension("native_profiler");
        $__internal_5911ad68878f3f7532cec390f7b50a9c36e158e902492644bf74f6fde7b9cec6->enter($__internal_5911ad68878f3f7532cec390f7b50a9c36e158e902492644bf74f6fde7b9cec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5911ad68878f3f7532cec390f7b50a9c36e158e902492644bf74f6fde7b9cec6->leave($__internal_5911ad68878f3f7532cec390f7b50a9c36e158e902492644bf74f6fde7b9cec6_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_34d942f28fd73342f19f8eb8900cc138657deeb877c394540744cf040246a6b6 = $this->env->getExtension("native_profiler");
        $__internal_34d942f28fd73342f19f8eb8900cc138657deeb877c394540744cf040246a6b6->enter($__internal_34d942f28fd73342f19f8eb8900cc138657deeb877c394540744cf040246a6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                        <td><a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("team_view", array("id" => $this->getAttribute($this->getAttribute((isset($context["teams"]) ? $context["teams"] : $this->getContext($context, "teams")), $context["i"], array(), "array"), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["teams"]) ? $context["teams"] : $this->getContext($context, "teams")), $context["i"], array(), "array"), "name", array()), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["teams"]) ? $context["teams"] : $this->getContext($context, "teams")), $context["i"], array(), "array"), "players", array())), "html", null, true);
                echo "</td>
                    
                    ";
                // line 49
                if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                    // line 50
                    echo "                        <td><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("team_delete", array("id" => $this->getAttribute($this->getAttribute((isset($context["teams"]) ? $context["teams"] : $this->getContext($context, "teams")), $context["i"], array(), "array"), "id", array()))), "html", null, true);
                    echo "\">Delete</a></td>
                    ";
                }
                // line 52
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "            ";
        }
        // line 55
        echo "        </table>
        ";
        // line 56
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "team", array(), "any", true, true) && (null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "team", array())))) {
            // line 57
            echo "            <div>
                <a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("team_create");
            echo "\">Create new team</a>
            </div>
        ";
        }
        // line 61
        echo "    </div>
";
        
        $__internal_34d942f28fd73342f19f8eb8900cc138657deeb877c394540744cf040246a6b6->leave($__internal_34d942f28fd73342f19f8eb8900cc138657deeb877c394540744cf040246a6b6_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Teams:teams.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 61,  146 => 58,  143 => 57,  141 => 56,  138 => 55,  135 => 54,  128 => 52,  122 => 50,  120 => 49,  115 => 47,  109 => 46,  105 => 45,  97 => 43,  95 => 42,  85 => 34,  79 => 33,  41 => 3,  35 => 2,  11 => 1,);
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
/*                         <td><a href="{{ path('team_view', {'id': teams[i].id}) }}">{{ teams[i].name }}</a></td>*/
/*                         <td>{{ teams[i].players|length }}</td>*/
/*                     */
/*                     {% if is_granted('ROLE_ADMIN') %}*/
/*                         <td><a href="{{ path('team_delete', {'id': teams[i].id}) }}">Delete</a></td>*/
/*                     {% endif %}*/
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
