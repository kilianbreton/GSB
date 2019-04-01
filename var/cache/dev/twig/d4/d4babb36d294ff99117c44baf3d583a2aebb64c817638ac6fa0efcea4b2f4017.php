<?php

/* admin/visiteurs/visiteurs.html.twig */
class __TwigTemplate_dfd794e6d4794309e04af16cdc7123349239ec665e32c7f5621290f2b5caec1d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/visiteurs/visiteurs.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "admin/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/visiteurs/visiteurs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/visiteurs/visiteurs.html.twig"));

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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vis"], "getVisMatricule", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vis"], "getVisLogin", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vis"], "getVisNom", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vis"], "getVisPrenom", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vis"], "getVisAdresse", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vis"], "getVisCp", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vis"], "getVisVille", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vis"], "getVisDateembaucheStr", []), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit.visiteurs", ["id" => twig_get_attribute($this->env, $this->source, $context["vis"], "getVisMatricule", [])]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Editer</a>
                        <form method=\"POST\" action=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("del.visiteurs", ["id" => twig_get_attribute($this->env, $this->source, $context["vis"], "getVisMatricule", [])]), "html", null, true);
            echo "\" style=\"display: inline-block\" onsubmit=\"return confirm('Êtes vous sûr ?')\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <input type=\"hidden\" name=\"_TOKEN\" value=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_vis" . twig_get_attribute($this->env, $this->source, $context["vis"], "getVisMatricule", []))), "html", null, true);
            echo "\">
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
        <div class=\"text-right\">
            <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new.visiteurs");
        echo "\" class=\"btn btn-primary\">Créer</a>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/visiteurs/visiteurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 46,  143 => 44,  130 => 37,  125 => 35,  121 => 34,  116 => 32,  112 => 31,  108 => 30,  104 => 29,  100 => 28,  96 => 27,  92 => 26,  88 => 25,  84 => 24,  80 => 23,  76 => 21,  72 => 20,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/index.html.twig' %}
{% block content %}
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
                    <th>{{ vis.getVisMatricule }}</th>
                    <th>{{ vis.getVisLogin }}</th>
                    <th>{{ vis.getVisNom }}</th>
                    <th>{{ vis.getVisPrenom }}</th>
                    <th>{{ vis.getVisAdresse }}</th>
                    <th>{{ vis.getVisCp }}</th>
                    <th>{{ vis.getVisVille }}</th>
                    <th>{{ vis.getVisDateembaucheStr }}</th>
                    <th>{{ vis.getLabCode }}</th>
                    <th>{{ vis.getSecCode }}</th>
                    <th>
                        <a href=\"{{ path('edit.visiteurs', {id: vis.getVisMatricule}) }}\" class=\"btn btn-secondary\">Editer</a>
                        <form method=\"POST\" action=\"{{ path('del.visiteurs', {id: vis.getVisMatricule}) }}\" style=\"display: inline-block\" onsubmit=\"return confirm('Êtes vous sûr ?')\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <input type=\"hidden\" name=\"_TOKEN\" value=\"{{ csrf_token(\"delete_vis\" ~ vis.getVisMatricule) }}\">
                            <button class=\"btn btn-danger\">Supprimer</button>
                        </form>
                    </th>
                </tr> 
            <tbody>
            {% endfor %}
        </table>
        <div class=\"text-right\">
            <a href=\"{{ path('new.visiteurs') }}\" class=\"btn btn-primary\">Créer</a>
        </div>
    </div>
{% endblock %}", "admin/visiteurs/visiteurs.html.twig", "C:\\wamp64\\www\\gsbMVC\\GSB\\templates\\admin\\visiteurs\\visiteurs.html.twig");
    }
}
