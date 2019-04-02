<?php

/* admin/rapports/rapports.html.twig */
class __TwigTemplate_59aa88b3cf10d8085fc35eb8d7cd4dd10ae55a00089df1cc7794b0c1282a73ba extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/rapports/rapports.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/rapports/rapports.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/rapports/rapports.html.twig"));

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
                    <th>Num</th>
                    <th>Visiteur</th>
                    <th>Praticien</th>
                    <th>Date</th>
                    <th>Motif</th>
                    <th>Bilan</th>
                    <th>PDF</th>
                </tr>
            </thead>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rapports"]) || array_key_exists("rapports", $context) ? $context["rapports"] : (function () { throw new Twig_Error_Runtime('Variable "rapports" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rap"]) {
            // line 17
            echo "            <tbody>
                <tr>
                    <th>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rap"], "getRapNum", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rap"], "getVisMatricule", []), "getVisLogin", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rap"], "getPraNum", []), "getPraNom", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rap"], "getRapDateStr", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rap"], "getRapMotif", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rap"], "getRapBilan", []), "html", null, true);
            echo "</th>
                    <th><a href=\"#\">PDF</a></th>
                   
                    <th>
                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit.praticien", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rap"], "getPraNum", []), "getPraNum", [])]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Editer</a>
                        <form method=\"POST\" action=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("del.praticien", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rap"], "getPraNum", []), "getPraNum", [])]), "html", null, true);
            echo "\" style=\"display: inline-block\" onsubmit=\"return confirm('Êtes vous sûr ?')\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <input type=\"hidden\" name=\"_TOKEN\" value=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_vis" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rap"], "getPraNum", []), "getPraNum", []))), "html", null, true);
            echo "\">
                            <button class=\"btn btn-danger\">Supprimer</button>
                        </form>
                    </th>
                </tr> 
            <tbody>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </table>
        <div class=\"text-right\">
            <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new.praticien");
        echo "\" class=\"btn btn-primary\">Créer</a>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/rapports/rapports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 40,  125 => 38,  112 => 31,  107 => 29,  103 => 28,  96 => 24,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  72 => 17,  68 => 16,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/index.html.twig' %}
{% block content %}
    <div class=\"container\">
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Num</th>
                    <th>Visiteur</th>
                    <th>Praticien</th>
                    <th>Date</th>
                    <th>Motif</th>
                    <th>Bilan</th>
                    <th>PDF</th>
                </tr>
            </thead>
            {% for rap in rapports %}
            <tbody>
                <tr>
                    <th>{{ rap.getRapNum }}</th>
                    <th>{{ rap.getVisMatricule.getVisLogin }}</th>
                    <th>{{ rap.getPraNum.getPraNom }}</th>
                    <th>{{ rap.getRapDateStr }}</th>
                    <th>{{ rap.getRapMotif }}</th>
                    <th>{{ rap.getRapBilan}}</th>
                    <th><a href=\"#\">PDF</a></th>
                   
                    <th>
                        <a href=\"{{ path('edit.praticien', {id: rap.getPraNum.getPraNum }) }}\" class=\"btn btn-secondary\">Editer</a>
                        <form method=\"POST\" action=\"{{ path('del.praticien', {id: rap.getPraNum.getPraNum}) }}\" style=\"display: inline-block\" onsubmit=\"return confirm('Êtes vous sûr ?')\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <input type=\"hidden\" name=\"_TOKEN\" value=\"{{ csrf_token(\"delete_vis\" ~ rap.getPraNum.getPraNum) }}\">
                            <button class=\"btn btn-danger\">Supprimer</button>
                        </form>
                    </th>
                </tr> 
            <tbody>
            {% endfor %}
        </table>
        <div class=\"text-right\">
            <a href=\"{{ path('new.praticien') }}\" class=\"btn btn-primary\">Créer</a>
        </div>
    </div>
{% endblock %}", "admin/rapports/rapports.html.twig", "C:\\wamp64\\www\\gsbMVC\\GSB\\templates\\admin\\rapports\\rapports.html.twig");
    }
}
