<?php

/* AppBundle:Teams:view_team.html.twig */
class __TwigTemplate_61848e1289aabdfc1b0b5fae25fedaa7ca59ca373362b417f7ff244e8344706a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:main_layout.html.twig", "AppBundle:Teams:view_team.html.twig", 1);
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
        $__internal_b29ca12a116d5e2c62bb3d311f1ef87b98e1cc0f1f33162bb4c2546d4a594243 = $this->env->getExtension("native_profiler");
        $__internal_b29ca12a116d5e2c62bb3d311f1ef87b98e1cc0f1f33162bb4c2546d4a594243->enter($__internal_b29ca12a116d5e2c62bb3d311f1ef87b98e1cc0f1f33162bb4c2546d4a594243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Teams:view_team.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b29ca12a116d5e2c62bb3d311f1ef87b98e1cc0f1f33162bb4c2546d4a594243->leave($__internal_b29ca12a116d5e2c62bb3d311f1ef87b98e1cc0f1f33162bb4c2546d4a594243_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6dd980fe0b3736b41561ad6be1442c5383f8bc99ff0d134bdad66e660cb5e2ad = $this->env->getExtension("native_profiler");
        $__internal_6dd980fe0b3736b41561ad6be1442c5383f8bc99ff0d134bdad66e660cb5e2ad->enter($__internal_6dd980fe0b3736b41561ad6be1442c5383f8bc99ff0d134bdad66e660cb5e2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6dd980fe0b3736b41561ad6be1442c5383f8bc99ff0d134bdad66e660cb5e2ad->leave($__internal_6dd980fe0b3736b41561ad6be1442c5383f8bc99ff0d134bdad66e660cb5e2ad_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_8d9107f383451298619c8d416b95019474b93a2a916087ac5c1cb8c05e0bdcdf = $this->env->getExtension("native_profiler");
        $__internal_8d9107f383451298619c8d416b95019474b93a2a916087ac5c1cb8c05e0bdcdf->enter($__internal_8d9107f383451298619c8d416b95019474b93a2a916087ac5c1cb8c05e0bdcdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_8d9107f383451298619c8d416b95019474b93a2a916087ac5c1cb8c05e0bdcdf->leave($__internal_8d9107f383451298619c8d416b95019474b93a2a916087ac5c1cb8c05e0bdcdf_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Teams:view_team.html.twig";
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
