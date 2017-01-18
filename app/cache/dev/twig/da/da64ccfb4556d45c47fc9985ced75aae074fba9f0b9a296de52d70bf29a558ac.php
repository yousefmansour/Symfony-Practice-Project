<?php

/* @App/Teams/view_team.html.twig */
class __TwigTemplate_1a02a0f9947ecaa4c49ed72f115a115bd770196cfaba56af1cd935ed2b37ad2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:main_layout.html.twig", "@App/Teams/view_team.html.twig", 1);
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
        $__internal_0e0da4ef36e218d7c74c6df8069d12a3d5f054914cfca2553c25bf3aaa86f60a = $this->env->getExtension("native_profiler");
        $__internal_0e0da4ef36e218d7c74c6df8069d12a3d5f054914cfca2553c25bf3aaa86f60a->enter($__internal_0e0da4ef36e218d7c74c6df8069d12a3d5f054914cfca2553c25bf3aaa86f60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Teams/view_team.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e0da4ef36e218d7c74c6df8069d12a3d5f054914cfca2553c25bf3aaa86f60a->leave($__internal_0e0da4ef36e218d7c74c6df8069d12a3d5f054914cfca2553c25bf3aaa86f60a_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5061946479e46b42d500aea28d27c2b38122de5449832bda5c8dfbdcc3ac498b = $this->env->getExtension("native_profiler");
        $__internal_5061946479e46b42d500aea28d27c2b38122de5449832bda5c8dfbdcc3ac498b->enter($__internal_5061946479e46b42d500aea28d27c2b38122de5449832bda5c8dfbdcc3ac498b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
            color: black;
        }
        
        .table-col1 {
            min-width: 15px;
        }
    </style>
";
        
        $__internal_5061946479e46b42d500aea28d27c2b38122de5449832bda5c8dfbdcc3ac498b->leave($__internal_5061946479e46b42d500aea28d27c2b38122de5449832bda5c8dfbdcc3ac498b_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_dcff3d5e276741ea925f7c129526cb21168771df63249196d53850e6bb0278a7 = $this->env->getExtension("native_profiler");
        $__internal_dcff3d5e276741ea925f7c129526cb21168771df63249196d53850e6bb0278a7->enter($__internal_dcff3d5e276741ea925f7c129526cb21168771df63249196d53850e6bb0278a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_dcff3d5e276741ea925f7c129526cb21168771df63249196d53850e6bb0278a7->leave($__internal_dcff3d5e276741ea925f7c129526cb21168771df63249196d53850e6bb0278a7_prof);

    }

    public function getTemplateName()
    {
        return "@App/Teams/view_team.html.twig";
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
/*             color: black;*/
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
/* {% endblock %}*/
