<?php

/* admin/rapports/rapports.html.twig */
class __TwigTemplate_fe62f519f1c36827611c07167e06d92630d7ce24fc66c02c0917c65585698fb6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/rapports/rapports.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "admin/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/rapports/rapports.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/rapports/rapports.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "   
    \t   \t\t
   \t\t
   <div class=\"container\">        
        <table id=\"table_id\" class=\"display\" style=\"width:100%\">
            <thead class=\"thead-dark\">
                <tr>
                    <th>N°</th>
                    <th>Matricule</th>
                    <th>Praticien</th>
                    <th>Date</th>
                    <th>Motif</th>
                    <th>Bilan</th>
                    <th>Afficher</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            
            <tbody>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rapports"]) || array_key_exists("rapports", $context) ? $context["rapports"] : (function () { throw new Twig_Error_Runtime('Variable "rapports" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rapport"]) {
            // line 23
            echo "               \t   <tr>
                    \t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rapport"], "getRapNum", []), "html", null, true);
            echo "</td>

                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rapport"], "getVisMatricule", []), "html", null, true);
            echo "</td>

                   \t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rapport"], "getPraNum", []), "html", null, true);
            echo "</td>

                    \t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rapport"], "getRapDate", []), "html", null, true);
            echo "</td>

                   \t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rapport"], "getRapMotif", []), "html", null, true);
            echo "</td>

                    \t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rapport"], "getRapBilan", []), "html", null, true);
            echo "</td>

                        <td><a href=\"/showrapport/";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rapport"], "getRapNum", []), "html", null, true);
            echo "\" class=\"btn btn-primary\">Afficher</a></td>

                        <td><a href=\"/admin/delrapport/";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rapport"], "getVisMatricule", []), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rapport"], "getRapNum", []), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Supprimer</a></td>
                    </tr> 
    \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rapport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            <tbody>
        
        </table>
        <div class=\"text-right\">
            <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newrapport");
        echo "\" class=\"btn btn-primary\">Créer</a>
        </div>
\t
\t</div>
\t
\t

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/rapports/rapports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 45,  126 => 41,  115 => 38,  110 => 36,  105 => 34,  100 => 32,  95 => 30,  90 => 28,  85 => 26,  80 => 24,  77 => 23,  73 => 22,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/index.html.twig' %}

{% block content %}   
    \t   \t\t
   \t\t
   <div class=\"container\">        
        <table id=\"table_id\" class=\"display\" style=\"width:100%\">
            <thead class=\"thead-dark\">
                <tr>
                    <th>N°</th>
                    <th>Matricule</th>
                    <th>Praticien</th>
                    <th>Date</th>
                    <th>Motif</th>
                    <th>Bilan</th>
                    <th>Afficher</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            
            <tbody>
            {% for rapport in rapports %}
               \t   <tr>
                    \t<td>{{ rapport.getRapNum}}</td>

                        <td>{{ rapport.getVisMatricule}}</td>

                   \t\t<td>{{ rapport.getPraNum}}</td>

                    \t<td>{{ rapport.getRapDate }}</td>

                   \t\t<td>{{ rapport.getRapMotif}}</td>

                    \t<td>{{ rapport.getRapBilan }}</td>

                        <td><a href=\"/showrapport/{{rapport.getRapNum}}\" class=\"btn btn-primary\">Afficher</a></td>

                        <td><a href=\"/admin/delrapport/{{rapport.getVisMatricule}}/{{rapport.getRapNum}}\" class=\"btn btn-secondary\">Supprimer</a></td>
                    </tr> 
    \t\t{% endfor %}
            <tbody>
        
        </table>
        <div class=\"text-right\">
            <a href=\"{{ path('newrapport') }}\" class=\"btn btn-primary\">Créer</a>
        </div>
\t
\t</div>
\t
\t

{% endblock %}", "admin/rapports/rapports.html.twig", "C:\\wamp64\\www\\GSB\\templates\\admin\\rapports\\rapports.html.twig");
    }
}
