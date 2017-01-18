<?php

/* AppBundle:Teams:team_view.html.twig */
class __TwigTemplate_f8f18d119d278cfb4a6224e9a7b2899e763c180b3b4a1c79ffede19904e78285 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:main_layout.html.twig", "AppBundle:Teams:team_view.html.twig", 1);
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
        <table>
            <tr>
                <th class=\"table-col1\"></th>
                <th>Players</th>
            </tr>
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "players", array())) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 42
            echo "                <tr>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["team"]) ? $context["team"] : null), "players", array()), $context["i"], array(), "array"), "username", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </table>
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Teams:team_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 47,  88 => 44,  84 => 43,  81 => 42,  77 => 41,  68 => 34,  65 => 33,  32 => 4,  29 => 3,  11 => 1,);
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
/*         <table>*/
/*             <tr>*/
/*                 <th class="table-col1"></th>*/
/*                 <th>Players</th>*/
/*             </tr>*/
/*             {% for i in 0..team.players|length - 1 %}*/
/*                 <tr>*/
/*                     <td>{{ i+1 }}</td>*/
/*                     <td>{{ team.players[i].username }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </table>*/
/*     </div>*/
/*     */
/* {% endblock %}*/
