<?php

/* praticien.html.twig */
class __TwigTemplate_9526530f69646363ad46522276cf7331eb0a8cda021c47b71d751249b5c3f959 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "praticien.html.twig", 2);
        $this->blocks = [
            'h1' => [$this, 'block_h1'],
            'praticien' => [$this, 'block_praticien'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "praticien.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "praticien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_h1($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h1"));

        echo "Praticien";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_praticien($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "praticien"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "praticien"));

        echo "   
    \t   \t\t
   \t\t
   <div class=\"container\">        
        <table id=\"table_id\" class=\"table\" style=\"width:100%\">
            <thead class=\"thead-dark\">
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>CP</th>
                    <th>Coef</th>
                    <th>Type</th>
                </tr>
            </thead>
            
            <tbody>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["praticiens"]) || array_key_exists("praticiens", $context) ? $context["praticiens"] : (function () { throw new Twig_Error_Runtime('Variable "praticiens" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prati"]) {
            // line 26
            echo "               \t   <tr>
                    \t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prati"], "getPraNom", []), "html", null, true);
            echo "</td>

                   \t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prati"], "getPraPrenom", []), "html", null, true);
            echo "</td>

                    \t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prati"], "getPraAdresse", []), "html", null, true);
            echo "</td>

                   \t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prati"], "getPraVille", []), "html", null, true);
            echo "</td>

                    \t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prati"], "getPraCp", []), "html", null, true);
            echo "</td>

                    \t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prati"], "getPraCoefnotoriete", []), "html", null, true);
            echo "</td>

                    \t<td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prati"], "getTypCode", []), "html", null, true);
            echo "</td>
                    </tr> 
    \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prati'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
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
        return "praticien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 42,  128 => 39,  123 => 37,  118 => 35,  113 => 33,  108 => 31,  103 => 29,  98 => 27,  95 => 26,  91 => 25,  63 => 7,  45 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("  
{% extends 'base.html.twig' %}

{% block h1 %}Praticien{% endblock %}


{% block praticien %}   
    \t   \t\t
   \t\t
   <div class=\"container\">        
        <table id=\"table_id\" class=\"table\" style=\"width:100%\">
            <thead class=\"thead-dark\">
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>CP</th>
                    <th>Coef</th>
                    <th>Type</th>
                </tr>
            </thead>
            
            <tbody>
            {% for prati in praticiens %}
               \t   <tr>
                    \t<td>{{ prati.getPraNom }}</td>

                   \t\t<td>{{ prati.getPraPrenom }}</td>

                    \t<td>{{ prati.getPraAdresse }}</td>

                   \t\t<td>{{ prati.getPraVille }}</td>

                    \t<td>{{ prati.getPraCp }}</td>

                    \t<td>{{ prati.getPraCoefnotoriete }}</td>

                    \t<td>{{ prati.getTypCode }}</td>
                    </tr> 
    \t\t{% endfor %}
            <tbody>
        
        </table>
\t</div>
\t
\t

{% endblock %}", "praticien.html.twig", "C:\\Users\\HENQUINET.SIO\\git\\GSB\\templates\\praticien.html.twig");
    }
}
