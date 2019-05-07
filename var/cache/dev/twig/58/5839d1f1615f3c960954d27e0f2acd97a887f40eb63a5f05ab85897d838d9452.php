<?php

/* rapport.show.html.twig */
class __TwigTemplate_20fdd2efff183fd848145421a58bc27fd4f26746ebe43a06113777b3482c18d3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "rapport.show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rapport.show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rapport.show.html.twig"));

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
   <div class=\"container\">        
        
        <h1>Rapport de visite N° ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new Twig_Error_Runtime('Variable "rapport" does not exist.', 6, $this->source); })()), "getRapNum", []), "html", null, true);
        echo "</h1>

        <h3>Praticien : </h3>

        <h4>Motif :</h4>
        <p>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new Twig_Error_Runtime('Variable "rapport" does not exist.', 11, $this->source); })()), "getRapMotif", []), "html", null, true);
        echo "</p>

        <h4>Bilan :</h4>
        <p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new Twig_Error_Runtime('Variable "rapport" does not exist.', 14, $this->source); })()), "getRapBilan", []), "html", null, true);
        echo "</p>


        <table id=\"table_id\" class=\"display\" style=\"width:100%\">
            <thead class=\"thead-dark\">
                <tr>
                    <th>Depot Legal</th>
                    <th>Nom</th>
                    <th>Qte</th>
                </tr>
            </thead>
            
            <tbody>
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medics"]) || array_key_exists("medics", $context) ? $context["medics"] : (function () { throw new Twig_Error_Runtime('Variable "medics" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 28
            echo "               \t<tr>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["m"], 0, [], "array"), 0, [], "array"), "getMedDepotlegal", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["m"], 0, [], "array"), 0, [], "array"), "getMedNomCommercial", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], 1, [], "array"), "html", null, true);
            echo "</td>
                    
                </tr> 
    \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            <tbody>
        
        </table>
\t</div>
\t
\t

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "rapport.show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 35,  102 => 31,  98 => 30,  94 => 29,  91 => 28,  87 => 27,  71 => 14,  65 => 11,  57 => 6,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'index.html.twig' %}

{% block content %}   
   <div class=\"container\">        
        
        <h1>Rapport de visite N° {{rapport.getRapNum}}</h1>

        <h3>Praticien : </h3>

        <h4>Motif :</h4>
        <p>{{rapport.getRapMotif}}</p>

        <h4>Bilan :</h4>
        <p>{{rapport.getRapBilan}}</p>


        <table id=\"table_id\" class=\"display\" style=\"width:100%\">
            <thead class=\"thead-dark\">
                <tr>
                    <th>Depot Legal</th>
                    <th>Nom</th>
                    <th>Qte</th>
                </tr>
            </thead>
            
            <tbody>
            {% for m in medics %}
               \t<tr>
                    <td>{{m[0][0].getMedDepotlegal}}</td>
                    <td>{{m[0][0].getMedNomCommercial}}</td>
                    <td>{{m[1]}}</td>
                    
                </tr> 
    \t\t{% endfor %}
            <tbody>
        
        </table>
\t</div>
\t
\t

{% endblock %}", "rapport.show.html.twig", "C:\\wamp64\\www\\GSB\\templates\\rapport.show.html.twig");
    }
}
