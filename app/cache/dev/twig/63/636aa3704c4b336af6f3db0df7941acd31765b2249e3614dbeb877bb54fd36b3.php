<?php

/* @App/Sports/sport_list.html.twig */
class __TwigTemplate_f1c00aefeb6b2241728e30a9ba306ee7ec2ed4a1e9f08405ae4dac52ebd1abfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:main_layout.html.twig", "@App/Sports/sport_list.html.twig", 1);
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
        $__internal_4b5f13a55ed4d60f19569d8542ab3565c160db76369cd10fea027a54bda11e47 = $this->env->getExtension("native_profiler");
        $__internal_4b5f13a55ed4d60f19569d8542ab3565c160db76369cd10fea027a54bda11e47->enter($__internal_4b5f13a55ed4d60f19569d8542ab3565c160db76369cd10fea027a54bda11e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Sports/sport_list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b5f13a55ed4d60f19569d8542ab3565c160db76369cd10fea027a54bda11e47->leave($__internal_4b5f13a55ed4d60f19569d8542ab3565c160db76369cd10fea027a54bda11e47_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a91a658c6574e815f3fa1679b1f7a052fdbc2263ce9a3e5fc6301574dc9322b5 = $this->env->getExtension("native_profiler");
        $__internal_a91a658c6574e815f3fa1679b1f7a052fdbc2263ce9a3e5fc6301574dc9322b5->enter($__internal_a91a658c6574e815f3fa1679b1f7a052fdbc2263ce9a3e5fc6301574dc9322b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        .table-col1 {
            min-width: 15px;
        }
        
    </style>
";
        
        $__internal_a91a658c6574e815f3fa1679b1f7a052fdbc2263ce9a3e5fc6301574dc9322b5->leave($__internal_a91a658c6574e815f3fa1679b1f7a052fdbc2263ce9a3e5fc6301574dc9322b5_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_ddbd16823bb6cedd6841e7070236521358f2d3d6a0a8cb58ca3f231918b41fdf = $this->env->getExtension("native_profiler");
        $__internal_ddbd16823bb6cedd6841e7070236521358f2d3d6a0a8cb58ca3f231918b41fdf->enter($__internal_ddbd16823bb6cedd6841e7070236521358f2d3d6a0a8cb58ca3f231918b41fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 34
        echo "    
    <div id=\"teams-table\">
        <table>
            <tr>
                <th class=\"table-col1\"></th>
                <th>Name</th>
                <th>Team size</th>
            </tr>
            ";
        // line 42
        if ((twig_length_filter($this->env, (isset($context["sports"]) ? $context["sports"] : $this->getContext($context, "sports"))) > 0)) {
            // line 43
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["sports"]) ? $context["sports"] : $this->getContext($context, "sports"))) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 44
                echo "                    <tr>
                        <td class=\"table-col1\">";
                // line 45
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "</td>
                        <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sports"]) ? $context["sports"] : $this->getContext($context, "sports")), $context["i"], array(), "array"), "name", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sports"]) ? $context["sports"] : $this->getContext($context, "sports")), $context["i"], array(), "array"), "teamSize", array()), "html", null, true);
                echo "</td>
                        <td><a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sport_delete", array("sportId" => $this->getAttribute($this->getAttribute((isset($context["sports"]) ? $context["sports"] : $this->getContext($context, "sports")), $context["i"], array(), "array"), "id", array()))), "html", null, true);
                echo "\">Delete</a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "            ";
        }
        // line 52
        echo "        </table>

        <div>
            <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("sport_create");
        echo "\">Add new sport</a>
        </div>
    </div>
";
        
        $__internal_ddbd16823bb6cedd6841e7070236521358f2d3d6a0a8cb58ca3f231918b41fdf->leave($__internal_ddbd16823bb6cedd6841e7070236521358f2d3d6a0a8cb58ca3f231918b41fdf_prof);

    }

    public function getTemplateName()
    {
        return "@App/Sports/sport_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 55,  129 => 52,  126 => 51,  117 => 48,  113 => 47,  109 => 46,  105 => 45,  102 => 44,  97 => 43,  95 => 42,  85 => 34,  79 => 33,  41 => 3,  35 => 2,  11 => 1,);
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
/*         #teams-table a {*/
/*             color: blue;*/
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
/*                 <th>Team size</th>*/
/*             </tr>*/
/*             {% if sports|length > 0 %}*/
/*                 {% for i in 0..sports|length - 1 %}*/
/*                     <tr>*/
/*                         <td class="table-col1">{{ i+1 }}</td>*/
/*                         <td>{{ sports[i].name }}</td>*/
/*                         <td>{{ sports[i].teamSize }}</td>*/
/*                         <td><a href="{{ path('sport_delete', {'sportId': sports[i].id}) }}">Delete</a></td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*         </table>*/
/* */
/*         <div>*/
/*             <a href="{{ path('sport_create') }}">Add new sport</a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
