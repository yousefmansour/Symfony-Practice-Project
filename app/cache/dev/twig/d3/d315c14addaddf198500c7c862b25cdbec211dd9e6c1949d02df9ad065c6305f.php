<?php

/* AppBundle:Teams:team_view.html.twig */
class __TwigTemplate_3950ace8f428888f67a2d9f26b7b8bd30a4ceb07d98fb61efb036399bc73545d extends Twig_Template
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
        $__internal_fb870f10da7276c6d387b4dd8c76c67959d27c557b94a3d7a6c1e931c539bf3f = $this->env->getExtension("native_profiler");
        $__internal_fb870f10da7276c6d387b4dd8c76c67959d27c557b94a3d7a6c1e931c539bf3f->enter($__internal_fb870f10da7276c6d387b4dd8c76c67959d27c557b94a3d7a6c1e931c539bf3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Teams:team_view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb870f10da7276c6d387b4dd8c76c67959d27c557b94a3d7a6c1e931c539bf3f->leave($__internal_fb870f10da7276c6d387b4dd8c76c67959d27c557b94a3d7a6c1e931c539bf3f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5f783784bb0cdc071760aa78840c7a5f55ab22743285ef0ede1747c726f2f7b8 = $this->env->getExtension("native_profiler");
        $__internal_5f783784bb0cdc071760aa78840c7a5f55ab22743285ef0ede1747c726f2f7b8->enter($__internal_5f783784bb0cdc071760aa78840c7a5f55ab22743285ef0ede1747c726f2f7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5f783784bb0cdc071760aa78840c7a5f55ab22743285ef0ede1747c726f2f7b8->leave($__internal_5f783784bb0cdc071760aa78840c7a5f55ab22743285ef0ede1747c726f2f7b8_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_d0777346eb623ab6d88659b4f79ec6d8f1415f812b93a1eeaebd7735ee63dbd4 = $this->env->getExtension("native_profiler");
        $__internal_d0777346eb623ab6d88659b4f79ec6d8f1415f812b93a1eeaebd7735ee63dbd4->enter($__internal_d0777346eb623ab6d88659b4f79ec6d8f1415f812b93a1eeaebd7735ee63dbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 34
        echo "    <div id=\"team-table\">
        <h4>Team <i>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "name", array()), "html", null, true);
        echo "</i></h4>
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
        
        $__internal_d0777346eb623ab6d88659b4f79ec6d8f1415f812b93a1eeaebd7735ee63dbd4->leave($__internal_d0777346eb623ab6d88659b4f79ec6d8f1415f812b93a1eeaebd7735ee63dbd4_prof);

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
        return array (  115 => 47,  106 => 44,  102 => 43,  99 => 42,  95 => 41,  86 => 35,  83 => 34,  77 => 33,  41 => 4,  35 => 3,  11 => 1,);
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
/*     <div id="team-table">*/
/*         <h4>Team <i>{{ team.name }}</i></h4>*/
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
