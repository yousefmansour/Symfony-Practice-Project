<?php

/* @App/Teams/team_view.html.twig */
class __TwigTemplate_7fcc88addb89b0f5682d271141f4b1f2ccb374792f85f390fe52e64f7c7b0cd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:main_layout.html.twig", "@App/Teams/team_view.html.twig", 1);
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
        $__internal_f52a64596cb342064c93c32961c0f954aa269e5e88c6cd016076a3cc3aa90ad3 = $this->env->getExtension("native_profiler");
        $__internal_f52a64596cb342064c93c32961c0f954aa269e5e88c6cd016076a3cc3aa90ad3->enter($__internal_f52a64596cb342064c93c32961c0f954aa269e5e88c6cd016076a3cc3aa90ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Teams/team_view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f52a64596cb342064c93c32961c0f954aa269e5e88c6cd016076a3cc3aa90ad3->leave($__internal_f52a64596cb342064c93c32961c0f954aa269e5e88c6cd016076a3cc3aa90ad3_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_018e24c15f3d0533cbf67f26bf7b6f28bf1958766c516831e6243191f894ba6b = $this->env->getExtension("native_profiler");
        $__internal_018e24c15f3d0533cbf67f26bf7b6f28bf1958766c516831e6243191f894ba6b->enter($__internal_018e24c15f3d0533cbf67f26bf7b6f28bf1958766c516831e6243191f894ba6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_018e24c15f3d0533cbf67f26bf7b6f28bf1958766c516831e6243191f894ba6b->leave($__internal_018e24c15f3d0533cbf67f26bf7b6f28bf1958766c516831e6243191f894ba6b_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_5aa6b5519b1e2e2b3a69875e6b8f7d015f6c909871f98c11bf764ed5541c554d = $this->env->getExtension("native_profiler");
        $__internal_5aa6b5519b1e2e2b3a69875e6b8f7d015f6c909871f98c11bf764ed5541c554d->enter($__internal_5aa6b5519b1e2e2b3a69875e6b8f7d015f6c909871f98c11bf764ed5541c554d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "players", array())) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 42
            echo "                <tr>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "players", array()), $context["i"], array(), "array"), "username", array()), "html", null, true);
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
        
        $__internal_5aa6b5519b1e2e2b3a69875e6b8f7d015f6c909871f98c11bf764ed5541c554d->leave($__internal_5aa6b5519b1e2e2b3a69875e6b8f7d015f6c909871f98c11bf764ed5541c554d_prof);

    }

    public function getTemplateName()
    {
        return "@App/Teams/team_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 47,  103 => 44,  99 => 43,  96 => 42,  92 => 41,  83 => 34,  77 => 33,  41 => 4,  35 => 3,  11 => 1,);
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
