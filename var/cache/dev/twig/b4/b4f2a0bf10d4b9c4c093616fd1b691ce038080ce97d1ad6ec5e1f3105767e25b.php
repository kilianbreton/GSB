<?php

/* medicament.html.twig */
class __TwigTemplate_5882f2c3f3f0f76b69d3e148afdd8903710b3cde7ed8aa6832bda00f098863a5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "medicament.html.twig", 2);
        $this->blocks = [
            'h1' => [$this, 'block_h1'],
            'medicament' => [$this, 'block_medicament'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
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

    // line 4
    public function block_h1($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h1"));

        echo "Médicament";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_medicament($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "medicament"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "medicament"));

        echo "    
 <div class=\"container\">
                 ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["selectmed"]) || array_key_exists("selectmed", $context) ? $context["selectmed"] : (function () { throw new Twig_Error_Runtime('Variable "selectmed" does not exist.', 10, $this->source); })()), 'form_start');
        echo "

   \t\t\t\t ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["selectmed"]) || array_key_exists("selectmed", $context) ? $context["selectmed"] : (function () { throw new Twig_Error_Runtime('Variable "selectmed" does not exist.', 12, $this->source); })()), 'form_end');
        echo "
   \t\t\t\t 
   \t\t\t\t  <table class=\"table\">
   \t\t\t\t\t<thead class=\"thead-dark\">
           \t\t\t\t<tr>
                            <th>Dépot légal</th>
                            <th>Nom</th>
                            <th>Code</th>
                            <th>Composition</th>
                            <th>Effets</th>
                            <th>Contre indications</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medoc"]) || array_key_exists("medoc", $context) ? $context["medoc"] : (function () { throw new Twig_Error_Runtime('Variable "medoc" does not exist.', 27, $this->source); })()), "getMedDepotlegal", []), "html", null, true);
        echo "</th>
                            <th>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medoc"]) || array_key_exists("medoc", $context) ? $context["medoc"] : (function () { throw new Twig_Error_Runtime('Variable "medoc" does not exist.', 28, $this->source); })()), "getMedNomcommercial", []), "html", null, true);
        echo "</th>
                            <th>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medoc"]) || array_key_exists("medoc", $context) ? $context["medoc"] : (function () { throw new Twig_Error_Runtime('Variable "medoc" does not exist.', 29, $this->source); })()), "getFamCode", []), "html", null, true);
        echo "</th>
                            <th>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medoc"]) || array_key_exists("medoc", $context) ? $context["medoc"] : (function () { throw new Twig_Error_Runtime('Variable "medoc" does not exist.', 30, $this->source); })()), "getMedComposition", []), "html", null, true);
        echo "</th>
                            <th>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medoc"]) || array_key_exists("medoc", $context) ? $context["medoc"] : (function () { throw new Twig_Error_Runtime('Variable "medoc" does not exist.', 31, $this->source); })()), "getMedEffets", []), "html", null, true);
        echo "</th>
                            <th>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medoc"]) || array_key_exists("medoc", $context) ? $context["medoc"] : (function () { throw new Twig_Error_Runtime('Variable "medoc" does not exist.', 32, $this->source); })()), "getMedContreindic", []), "html", null, true);
        echo "</th>
                   \t\t</tr> 
               \t\t</tbody>
   \t\t\t\t</table>

   </div>\t\t\t\t    
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
        return array (  118 => 32,  114 => 31,  110 => 30,  106 => 29,  102 => 28,  98 => 27,  80 => 12,  75 => 10,  63 => 8,  45 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block h1 %}Médicament{% endblock %}



{% block medicament %}    
 <div class=\"container\">
                 {{ form_start(selectmed) }}

   \t\t\t\t {{ form_end(selectmed) }}
   \t\t\t\t 
   \t\t\t\t  <table class=\"table\">
   \t\t\t\t\t<thead class=\"thead-dark\">
           \t\t\t\t<tr>
                            <th>Dépot légal</th>
                            <th>Nom</th>
                            <th>Code</th>
                            <th>Composition</th>
                            <th>Effets</th>
                            <th>Contre indications</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>{{ medoc.getMedDepotlegal }}</th>
                            <th>{{ medoc.getMedNomcommercial }}</th>
                            <th>{{ medoc.getFamCode }}</th>
                            <th>{{ medoc.getMedComposition }}</th>
                            <th>{{ medoc.getMedEffets }}</th>
                            <th>{{ medoc.getMedContreindic }}</th>
                   \t\t</tr> 
               \t\t</tbody>
   \t\t\t\t</table>

   </div>\t\t\t\t    
{% endblock %}
", "medicament.html.twig", "C:\\Users\\HENQUINET.SIO\\git\\GSB\\templates\\medicament.html.twig");
    }
}
