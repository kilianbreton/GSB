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

    // line 9
    public function block_praticien($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "praticien"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "praticien"));

        echo "    
 <div class=\"container\">
                 ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["selectprat"]) || array_key_exists("selectprat", $context) ? $context["selectprat"] : (function () { throw new Twig_Error_Runtime('Variable "selectprat" does not exist.', 11, $this->source); })()), 'form_start');
        echo "

   \t\t\t\t ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["selectprat"]) || array_key_exists("selectprat", $context) ? $context["selectprat"] : (function () { throw new Twig_Error_Runtime('Variable "selectprat" does not exist.', 13, $this->source); })()), 'form_end');
        echo "
   \t\t\t\t 

   \t\t\t\t<table class=\"table\">
   \t\t\t\t\t<tr>
       \t\t\t\t\t<td>Numéro : ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prat"]) || array_key_exists("prat", $context) ? $context["prat"] : (function () { throw new Twig_Error_Runtime('Variable "prat" does not exist.', 18, $this->source); })()), "getPraNum", []), "html", null, true);
        echo "  </td>
       \t\t\t\t</tr>
   \t\t\t\t\t<tr>\t
       \t\t\t\t\t<td>Nom : ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prat"]) || array_key_exists("prat", $context) ? $context["prat"] : (function () { throw new Twig_Error_Runtime('Variable "prat" does not exist.', 21, $this->source); })()), "getPraNom", []), "html", null, true);
        echo " </td>
       \t\t\t\t</tr>
       \t\t\t\t<tr>
       \t\t\t\t\t<td>Prenom : ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prat"]) || array_key_exists("prat", $context) ? $context["prat"] : (function () { throw new Twig_Error_Runtime('Variable "prat" does not exist.', 24, $this->source); })()), "getPraPrenom", []), "html", null, true);
        echo " </td>
       \t\t\t\t</tr>
       \t\t\t\t<tr>
       \t\t\t\t\t<td>Adresse : ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prat"]) || array_key_exists("prat", $context) ? $context["prat"] : (function () { throw new Twig_Error_Runtime('Variable "prat" does not exist.', 27, $this->source); })()), "getPraAdresse", []), "html", null, true);
        echo " </td>
       \t\t\t\t</tr>
       \t\t\t\t<tr>
       \t\t\t\t\t<td>Ville : ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prat"]) || array_key_exists("prat", $context) ? $context["prat"] : (function () { throw new Twig_Error_Runtime('Variable "prat" does not exist.', 30, $this->source); })()), "getPraVille", []), "html", null, true);
        echo " </td>
       \t\t\t\t</tr>
       \t\t\t\t<tr>
       \t\t\t\t\t<td>Coeff. notoriété : ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prat"]) || array_key_exists("prat", $context) ? $context["prat"] : (function () { throw new Twig_Error_Runtime('Variable "prat" does not exist.', 33, $this->source); })()), "getPraCoefnotoriete", []), "html", null, true);
        echo " </td>
       \t\t\t\t</tr>
       \t\t\t\t<tr>
       \t\t\t\t\t<td>Code Postal : ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prat"]) || array_key_exists("prat", $context) ? $context["prat"] : (function () { throw new Twig_Error_Runtime('Variable "prat" does not exist.', 36, $this->source); })()), "getPraCp", []), "html", null, true);
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
        return "praticien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 36,  118 => 33,  112 => 30,  106 => 27,  100 => 24,  94 => 21,  88 => 18,  80 => 13,  75 => 11,  63 => 9,  45 => 4,  15 => 2,);
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
", "praticien.html.twig", "C:\\Users\\HENQUINET.SIO\\git\\GSB\\templates\\praticien.html.twig");
    }
}
