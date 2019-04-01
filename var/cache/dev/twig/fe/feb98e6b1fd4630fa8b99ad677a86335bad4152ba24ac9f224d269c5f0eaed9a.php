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

    // line 8
    public function block_praticien($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "praticien"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "praticien"));

        echo "    
 <div class=\"container\">
                 ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["selectprat"]) || array_key_exists("selectprat", $context) ? $context["selectprat"] : (function () { throw new Twig_Error_Runtime('Variable "selectprat" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
   \t\t\t\t ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["selectprat"]) || array_key_exists("selectprat", $context) ? $context["selectprat"] : (function () { throw new Twig_Error_Runtime('Variable "selectprat" does not exist.', 11, $this->source); })()), 'form_end');
        echo "

   \t\t\t\t<table class=\"table\">
   \t\t\t\t\t<thead class=\"thead-dark\">
           \t\t\t\t<tr>
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
                        <tr>
                            <th>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prat"]) || array_key_exists("prat", $context) ? $context["prat"] : (function () { throw new Twig_Error_Runtime('Variable "prat" does not exist.', 27, $this->source); })()), "getPraNom", []), "html", null, true);
        echo "</th>
                            <th>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prat"]) || array_key_exists("prat", $context) ? $context["prat"] : (function () { throw new Twig_Error_Runtime('Variable "prat" does not exist.', 28, $this->source); })()), "getPraPrenom", []), "html", null, true);
        echo "</th>
                            <th>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prat"]) || array_key_exists("prat", $context) ? $context["prat"] : (function () { throw new Twig_Error_Runtime('Variable "prat" does not exist.', 29, $this->source); })()), "getPraAdresse", []), "html", null, true);
        echo "</th>
                            <th>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prat"]) || array_key_exists("prat", $context) ? $context["prat"] : (function () { throw new Twig_Error_Runtime('Variable "prat" does not exist.', 30, $this->source); })()), "getPraVille", []), "html", null, true);
        echo "</th>
                            <th>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prat"]) || array_key_exists("prat", $context) ? $context["prat"] : (function () { throw new Twig_Error_Runtime('Variable "prat" does not exist.', 31, $this->source); })()), "getPraCp", []), "html", null, true);
        echo "</th>
                            <th>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prat"]) || array_key_exists("prat", $context) ? $context["prat"] : (function () { throw new Twig_Error_Runtime('Variable "prat" does not exist.', 32, $this->source); })()), "getPraCoefnotoriete", []), "html", null, true);
        echo "</th>
                            <th>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prat"]) || array_key_exists("prat", $context) ? $context["prat"] : (function () { throw new Twig_Error_Runtime('Variable "prat" does not exist.', 33, $this->source); })()), "getTypCode", []), "html", null, true);
        echo "</th>
                   \t\t</tr> 
               \t\t</tbody>
   \t\t\t\t</table>
   </div>\t
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
        return array (  122 => 33,  118 => 32,  114 => 31,  110 => 30,  106 => 29,  102 => 28,  98 => 27,  79 => 11,  75 => 10,  63 => 8,  45 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block h1 %}Praticien{% endblock %}



{% block praticien %}    
 <div class=\"container\">
                 {{ form_start(selectprat) }}
   \t\t\t\t {{ form_end(selectprat) }}

   \t\t\t\t<table class=\"table\">
   \t\t\t\t\t<thead class=\"thead-dark\">
           \t\t\t\t<tr>
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
                        <tr>
                            <th>{{ prat.getPraNom }}</th>
                            <th>{{ prat.getPraPrenom }}</th>
                            <th>{{ prat.getPraAdresse }}</th>
                            <th>{{ prat.getPraVille }}</th>
                            <th>{{ prat.getPraCp }}</th>
                            <th>{{ prat.getPraCoefnotoriete }}</th>
                            <th>{{ prat.getTypCode }}</th>
                   \t\t</tr> 
               \t\t</tbody>
   \t\t\t\t</table>
   </div>\t
{% endblock %}", "praticien.html.twig", "C:\\Users\\HENQUINET.SIO\\git\\GSB\\templates\\praticien.html.twig");
    }
}
