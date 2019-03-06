<?php

/* visiteurs.html.twig */
class __TwigTemplate_f43b63fdd2ff37bc8c06470c3d3b0f3aecb78fec9c7704d2370e05b6a18243bf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "visiteurs.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "visiteurs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "visiteurs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "        <table>
        <tr>
            <th>Mat</th>
            <th>Login</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Adresse</th>
            <th>CP</th>
            <th>Ville</th>
            <th>Date d'embauche</th>
            <th>Labo</th>
            <th>Secteur</th>
        </tr>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["visiteurs"]) || array_key_exists("visiteurs", $context) ? $context["visiteurs"] : (function () { throw new Twig_Error_Runtime('Variable "visiteurs" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vis"]) {
            // line 17
            echo "            <tr>
                <th>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vis"], "getMat", []), "html", null, true);
            echo "</th>
                <th>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vis"], "getLogin", []), "html", null, true);
            echo "</th>
                <th>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vis"], "getNom", []), "html", null, true);
            echo "</th>
                <th>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vis"], "getPrenom", []), "html", null, true);
            echo "</th>
                <th>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vis"], "getAdresse", []), "html", null, true);
            echo "</th>
                <th>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vis"], "getCp", []), "html", null, true);
            echo "</th>
                <th>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vis"], "getVille", []), "html", null, true);
            echo "</th>
                <th>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vis"], "getDateEmbauche", []), "html", null, true);
            echo "</th>
                <th>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vis"], "getLabCode", []), "html", null, true);
            echo "</th>
                <th>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vis"], "getSecCode", []), "html", null, true);
            echo "</th>
                
            </tr> 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "visiteurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 27,  107 => 26,  103 => 25,  99 => 24,  95 => 23,  91 => 22,  87 => 21,  83 => 20,  79 => 19,  75 => 18,  72 => 17,  68 => 16,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
        <table>
        <tr>
            <th>Mat</th>
            <th>Login</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Adresse</th>
            <th>CP</th>
            <th>Ville</th>
            <th>Date d'embauche</th>
            <th>Labo</th>
            <th>Secteur</th>
        </tr>
        {% for vis in visiteurs %}
            <tr>
                <th>{{ vis.getMat }}</th>
                <th>{{ vis.getLogin }}</th>
                <th>{{ vis.getNom }}</th>
                <th>{{ vis.getPrenom }}</th>
                <th>{{ vis.getAdresse }}</th>
                <th>{{ vis.getCp }}</th>
                <th>{{ vis.getVille }}</th>
                <th>{{ vis.getDateEmbauche }}</th>
                <th>{{ vis.getLabCode }}</th>
                <th>{{ vis.getSecCode }}</th>
                
            </tr> 
        {% endfor %}
{% endblock %}", "visiteurs.html.twig", "C:\\wamp64\\www\\gsbMVC\\GSB\\templates\\visiteurs.html.twig");
    }
}
