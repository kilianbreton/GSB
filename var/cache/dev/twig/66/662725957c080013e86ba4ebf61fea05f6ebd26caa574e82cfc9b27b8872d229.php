<?php

/* listePraticien.html.twig */
class __TwigTemplate_cbf2671602f0fb1317f05155f472ab29bc2c45203ac10eab917a9d4a3c2f83cd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "listePraticien.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listePraticien.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listePraticien.html.twig"));

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
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["selectprat"]) || array_key_exists("selectprat", $context) ? $context["selectprat"] : (function () { throw new Twig_Error_Runtime('Variable "selectprat" does not exist.', 12, $this->source); })()), 'form_end');
        echo "
   \t\t\t\t 

   \t\t\t\t<table class=\"table\">
   \t\t\t\t\t<tr>
       \t\t\t\t\t<td>Numéro : ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prat"]) || array_key_exists("prat", $context) ? $context["prat"] : (function () { throw new Twig_Error_Runtime('Variable "prat" does not exist.', 17, $this->source); })()), "getPraNum", []), "html", null, true);
        echo "  </td>
       \t\t\t\t</tr>
   \t\t\t\t\t<tr>\t
       \t\t\t\t\t<td>Nom : ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prat"]) || array_key_exists("prat", $context) ? $context["prat"] : (function () { throw new Twig_Error_Runtime('Variable "prat" does not exist.', 20, $this->source); })()), "getPraNom", []), "html", null, true);
        echo " </td>
       \t\t\t\t</tr>
       \t\t\t\t<tr>
       \t\t\t\t\t<td>Prenom : ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prat"]) || array_key_exists("prat", $context) ? $context["prat"] : (function () { throw new Twig_Error_Runtime('Variable "prat" does not exist.', 23, $this->source); })()), "getPraPrenom", []), "html", null, true);
        echo " </td>
       \t\t\t\t</tr>
       \t\t\t\t<tr>
       \t\t\t\t\t<td>Adresse : ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prat"]) || array_key_exists("prat", $context) ? $context["prat"] : (function () { throw new Twig_Error_Runtime('Variable "prat" does not exist.', 26, $this->source); })()), "getPraAdresse", []), "html", null, true);
        echo " </td>
       \t\t\t\t</tr>
       \t\t\t\t<tr>
       \t\t\t\t\t<td>Ville : ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prat"]) || array_key_exists("prat", $context) ? $context["prat"] : (function () { throw new Twig_Error_Runtime('Variable "prat" does not exist.', 29, $this->source); })()), "getPraVille", []), "html", null, true);
        echo " </td>
       \t\t\t\t</tr>
       \t\t\t\t<tr>
       \t\t\t\t\t<td>Coeff. notoriété : ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prat"]) || array_key_exists("prat", $context) ? $context["prat"] : (function () { throw new Twig_Error_Runtime('Variable "prat" does not exist.', 32, $this->source); })()), "getPraCoefnotoriete", []), "html", null, true);
        echo " </td>
       \t\t\t\t</tr>
       \t\t\t\t<tr>
       \t\t\t\t\t<td>Code Postal : ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prat"]) || array_key_exists("prat", $context) ? $context["prat"] : (function () { throw new Twig_Error_Runtime('Variable "prat" does not exist.', 35, $this->source); })()), "getPraCp", []), "html", null, true);
        echo " </td>
       \t\t\t\t</tr>
   \t\t\t\t</table>
   </div>\t\t\t\t    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "listePraticien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 35,  118 => 32,  112 => 29,  106 => 26,  100 => 23,  94 => 20,  88 => 17,  80 => 12,  75 => 10,  63 => 8,  45 => 4,  15 => 2,);
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
   \t\t\t\t 

   \t\t\t\t<table class=\"table\">
   \t\t\t\t\t<tr>
       \t\t\t\t\t<td>Numéro : {{ prat.getPraNum }}  </td>
       \t\t\t\t</tr>
   \t\t\t\t\t<tr>\t
       \t\t\t\t\t<td>Nom : {{ prat.getPraNom }} </td>
       \t\t\t\t</tr>
       \t\t\t\t<tr>
       \t\t\t\t\t<td>Prenom : {{ prat.getPraPrenom }} </td>
       \t\t\t\t</tr>
       \t\t\t\t<tr>
       \t\t\t\t\t<td>Adresse : {{ prat.getPraAdresse }} </td>
       \t\t\t\t</tr>
       \t\t\t\t<tr>
       \t\t\t\t\t<td>Ville : {{ prat.getPraVille }} </td>
       \t\t\t\t</tr>
       \t\t\t\t<tr>
       \t\t\t\t\t<td>Coeff. notoriété : {{ prat.getPraCoefnotoriete }} </td>
       \t\t\t\t</tr>
       \t\t\t\t<tr>
       \t\t\t\t\t<td>Code Postal : {{ prat.getPraCp }} </td>
       \t\t\t\t</tr>
   \t\t\t\t</table>
   </div>\t\t\t\t    
{% endblock %}
", "listePraticien.html.twig", "C:\\Users\\HENQUINET.SIO\\git\\GSB\\templates\\listePraticien.html.twig");
    }
}
