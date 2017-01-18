<?php

/* AppBundle:Sports:sport_list.html.twig */
class __TwigTemplate_11ddbed3045dd4542a56a26430c6302b4d44a2d63076361c14694865150ec95d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:main_layout.html.twig", "AppBundle:Sports:sport_list.html.twig", 1);
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
    <div id=\"teams-table\">
        <table>
            <tr>
                <th class=\"table-col1\"></th>
                <th>Name</th>
                <th>Team size</th>
            </tr>
            ";
        // line 42
        if ((twig_length_filter($this->env, (isset($context["sports"]) ? $context["sports"] : null)) > 0)) {
            // line 43
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["sports"]) ? $context["sports"] : null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 44
                echo "                    <tr>
                        <td class=\"table-col1\">";
                // line 45
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "</td>
                        <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sports"]) ? $context["sports"] : null), $context["i"], array(), "array"), "name", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sports"]) ? $context["sports"] : null), $context["i"], array(), "array"), "teamSize", array()), "html", null, true);
                echo "</td>
                        <td><a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sport_delete", array("sportId" => $this->getAttribute($this->getAttribute((isset($context["sports"]) ? $context["sports"] : null), $context["i"], array(), "array"), "id", array()))), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return "AppBundle:Sports:sport_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 55,  114 => 52,  111 => 51,  102 => 48,  98 => 47,  94 => 46,  90 => 45,  87 => 44,  82 => 43,  80 => 42,  70 => 34,  67 => 33,  32 => 3,  29 => 2,  11 => 1,);
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
