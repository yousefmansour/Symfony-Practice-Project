<?php

/* AppBundle:Events:event_view.html.twig */
class __TwigTemplate_0097e087914ccdc9eb48ff8ad7d634de282a81e3cbf0ee23637d52023ba40305 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:main_layout.html.twig", "AppBundle:Events:event_view.html.twig", 1);
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
        $__internal_83fae8f8249197fc9b1f24f3439d4461081ba2ab0052b822a89d0707f4b08299 = $this->env->getExtension("native_profiler");
        $__internal_83fae8f8249197fc9b1f24f3439d4461081ba2ab0052b822a89d0707f4b08299->enter($__internal_83fae8f8249197fc9b1f24f3439d4461081ba2ab0052b822a89d0707f4b08299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Events:event_view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83fae8f8249197fc9b1f24f3439d4461081ba2ab0052b822a89d0707f4b08299->leave($__internal_83fae8f8249197fc9b1f24f3439d4461081ba2ab0052b822a89d0707f4b08299_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_efa3b4f3ce428f942707afc9da772dd5c366dd583db9adaadf969421cceecc0b = $this->env->getExtension("native_profiler");
        $__internal_efa3b4f3ce428f942707afc9da772dd5c366dd583db9adaadf969421cceecc0b->enter($__internal_efa3b4f3ce428f942707afc9da772dd5c366dd583db9adaadf969421cceecc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_efa3b4f3ce428f942707afc9da772dd5c366dd583db9adaadf969421cceecc0b->leave($__internal_efa3b4f3ce428f942707afc9da772dd5c366dd583db9adaadf969421cceecc0b_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_8ea209d65f96deae9de7f1d6f3e574420717a9300b2b429e632b4f5496161dfa = $this->env->getExtension("native_profiler");
        $__internal_8ea209d65f96deae9de7f1d6f3e574420717a9300b2b429e632b4f5496161dfa->enter($__internal_8ea209d65f96deae9de7f1d6f3e574420717a9300b2b429e632b4f5496161dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 34
        echo "    <div id=\"team-table\">
        <h4>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name", array()), "html", null, true);
        echo "</h4>    
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
        
        $__internal_8ea209d65f96deae9de7f1d6f3e574420717a9300b2b429e632b4f5496161dfa->leave($__internal_8ea209d65f96deae9de7f1d6f3e574420717a9300b2b429e632b4f5496161dfa_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Events:event_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 51,  125 => 50,  121 => 48,  110 => 45,  106 => 44,  103 => 43,  99 => 42,  92 => 37,  90 => 36,  86 => 35,  83 => 34,  77 => 33,  41 => 4,  35 => 3,  11 => 1,);
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
/*         <h4>{{ event.name }}</h4>    */
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
