<?php

/* rapports.html.twig */
class __TwigTemplate_a431cc5f615dbd83dc15d3be60f08f027465f62ba7a2d5a94597061dea8ad553 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "rapports.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rapports.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rapports.html.twig"));

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
                </tr>
            </thead>
            
            <tbody>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rapports"]) || array_key_exists("rapports", $context) ? $context["rapports"] : (function () { throw new Twig_Error_Runtime('Variable "rapports" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rapport"]) {
            // line 22
            echo "               \t   <tr>
                    \t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rapport"], "getRapNum", []), "html", null, true);
            echo "</td>

                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rapport"], "getVisMatricule", []), "html", null, true);
            echo "</td>

                   \t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rapport"], "getPraNum", []), "html", null, true);
            echo "</td>

                    \t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rapport"], "getRapDate", []), "html", null, true);
            echo "</td>

                   \t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rapport"], "getRapMotif", []), "html", null, true);
            echo "</td>

                    \t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rapport"], "getRapBilan", []), "html", null, true);
            echo "</td>

                        <td><a href=\"/showrapport/";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rapport"], "getRapNum", []), "html", null, true);
            echo "\" class=\"btn btn-primary\">Afficher</a></td>
                    </tr> 
    \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rapport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            <tbody>
        
        </table>
        <div class=\"text-right\">
            <a href=\"";
        // line 42
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
        return "rapports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 42,  118 => 38,  109 => 35,  104 => 33,  99 => 31,  94 => 29,  89 => 27,  84 => 25,  79 => 23,  76 => 22,  72 => 21,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'index.html.twig' %}

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

{% endblock %}", "rapports.html.twig", "C:\\wamp64\\www\\GSB\\templates\\rapports.html.twig");
    }
}
