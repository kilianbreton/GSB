<?php

/* medicament.html.twig */
class __TwigTemplate_38d90509ff12b274b6c8d2e3f108f785b78c486a93c52b76fb4aef28201dfad5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "medicament.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "medicament.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "medicament.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"container\">
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Depot Legal</th>
                    <th>Famille</th>
                    <th>Composition</th>
                    <th>Effets</th>
                    <th>Contre indication</th>
                    <th>Coef</th>
                    <th>Type</th>
                </tr>
            </thead>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medicaments"]) || array_key_exists("medicaments", $context) ? $context["medicaments"] : (function () { throw new Twig_Error_Runtime('Variable "medicaments" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["medic"]) {
            // line 17
            echo "            <tbody>
                <tr>
                    <th>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medic"], "getMedDepotLegal", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medic"], "getMedNomCommercial", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medic"], "getFamCode", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medic"], "getMedComposition", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medic"], "getMedEffets", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medic"], "getMedContreIndic", []), "html", null, true);
            echo "</th>
                    
                   
                </tr> 
            <tbody>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </table>
     
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "medicament.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 30,  96 => 24,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  72 => 17,  68 => 16,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'index.html.twig' %}
{% block content %}
    <div class=\"container\">
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Depot Legal</th>
                    <th>Famille</th>
                    <th>Composition</th>
                    <th>Effets</th>
                    <th>Contre indication</th>
                    <th>Coef</th>
                    <th>Type</th>
                </tr>
            </thead>
            {% for medic in medicaments %}
            <tbody>
                <tr>
                    <th>{{ medic.getMedDepotLegal }}</th>
                    <th>{{ medic.getMedNomCommercial }}</th>
                    <th>{{ medic.getFamCode }}</th>
                    <th>{{ medic.getMedComposition }}</th>
                    <th>{{ medic.getMedEffets }}</th>
                    <th>{{ medic.getMedContreIndic }}</th>
                    
                   
                </tr> 
            <tbody>
            {% endfor %}
        </table>
     
    </div>
{% endblock %}", "medicament.html.twig", "C:\\wamp64\\www\\gsbMVC\\GSB\\templates\\medicament.html.twig");
    }
}
