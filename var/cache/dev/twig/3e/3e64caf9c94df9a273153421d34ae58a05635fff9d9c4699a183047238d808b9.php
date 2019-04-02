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
        echo "    <div class=\"container\">
        <table class=\"table table-striped\">
            <thead>
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
                    <th>Actions</th>
                </tr>
            </thead>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["visiteurs"]) || array_key_exists("visiteurs", $context) ? $context["visiteurs"] : (function () { throw new Twig_Error_Runtime('Variable "visiteurs" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vis"]) {
            // line 21
            echo "            <tbody>
                <tr>
                    <th>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vis"], "getMat", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vis"], "getLogin", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vis"], "getNom", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vis"], "getPrenom", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vis"], "getAdresse", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vis"], "getCp", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vis"], "getVille", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vis"], "getDateEmbauche", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vis"], "getLabCode", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vis"], "getSecCode", []), "html", null, true);
            echo "</th>
                    <th>
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit.visiteurs", ["id" => twig_get_attribute($this->env, $this->source, $context["vis"], "getMat", [])]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Editer</a>
                        <form method=\"POST\" action=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("del.visiteurs", ["id" => twig_get_attribute($this->env, $this->source, $context["vis"], "getMat", [])]), "html", null, true);
            echo "\" style=\"display: inline-block\" onsubmit=\"return confirm('Êtes vous sûr ?')\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <input type=\"hidden\" name=\"_TOKEN\" value=\"\">
                            <button class=\"btn btn-danger\">Supprimer</button>
                        </form>
                    </th>
                </tr> 
            <tbody>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </table>
        </div>
";
        
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
        return array (  140 => 44,  125 => 35,  121 => 34,  116 => 32,  112 => 31,  108 => 30,  104 => 29,  100 => 28,  96 => 27,  92 => 26,  88 => 25,  84 => 24,  80 => 23,  76 => 21,  72 => 20,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"container\">
        <table class=\"table table-striped\">
            <thead>
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
                    <th>Actions</th>
                </tr>
            </thead>
            {% for vis in visiteurs %}
            <tbody>
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
                    <th>
                        <a href=\"{{ path('edit.visiteurs', {id: vis.getMat}) }}\" class=\"btn btn-secondary\">Editer</a>
                        <form method=\"POST\" action=\"{{ path('del.visiteurs', {id: vis.getMat}) }}\" style=\"display: inline-block\" onsubmit=\"return confirm('Êtes vous sûr ?')\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <input type=\"hidden\" name=\"_TOKEN\" value=\"\">
                            <button class=\"btn btn-danger\">Supprimer</button>
                        </form>
                    </th>
                </tr> 
            <tbody>
            {% endfor %}
        </table>
        </div>
{% endblock %}", "visiteurs.html.twig", "C:\\wamp64\\www\\gsbMVC\\GSB\\templates\\visiteurs.html.twig");
    }
}