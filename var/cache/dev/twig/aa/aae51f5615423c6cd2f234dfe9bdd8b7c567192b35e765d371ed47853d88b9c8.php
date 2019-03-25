<?php

/* admin/praticiens/praticien.html.twig */
class __TwigTemplate_28b0ff3d13b558b666fd5e80f0cbba3c0577d1888ff065168a75012ab8ae76e1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/praticiens/praticien.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/praticiens/praticien.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/praticiens/praticien.html.twig"));

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
                    <th>Nom</th>
                    <th>Prenom</th>
            
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>CP</th>
                    <th>Coef</th>
                    <th>Type</th>
                </tr>
            </thead>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["praticiens"]) || array_key_exists("praticiens", $context) ? $context["praticiens"] : (function () { throw new Twig_Error_Runtime('Variable "praticiens" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prat"]) {
            // line 18
            echo "            <tbody>
                <tr>
                    <th>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prat"], "getPraNom", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prat"], "getPraPrenom", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prat"], "getPraAdresse", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prat"], "getPraVille", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prat"], "getPraCp", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prat"], "getPraCoefnotoriete", []), "html", null, true);
            echo "</th>
                    <th>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prat"], "getTypCode", []), "html", null, true);
            echo "</th>
                   
                    <th>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit.visiteurs", ["id" => twig_get_attribute($this->env, $this->source, $context["prat"], "getPraNum", [])]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Editer</a>
                        <form method=\"POST\" action=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("del.visiteurs", ["id" => twig_get_attribute($this->env, $this->source, $context["prat"], "getPraNum", [])]), "html", null, true);
            echo "\" style=\"display: inline-block\" onsubmit=\"return confirm('Êtes vous sûr ?')\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <input type=\"hidden\" name=\"_TOKEN\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_vis" . twig_get_attribute($this->env, $this->source, $context["prat"], "getPraNum", []))), "html", null, true);
            echo "\">
                            <button class=\"btn btn-danger\">Supprimer</button>
                        </form>
                    </th>
                </tr> 
            <tbody>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </table>
        <div class=\"text-right\">
            <a href=\"";
        // line 41
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
        return "admin/praticiens/praticien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 41,  129 => 39,  116 => 32,  111 => 30,  107 => 29,  101 => 26,  97 => 25,  93 => 24,  89 => 23,  85 => 22,  81 => 21,  77 => 20,  73 => 18,  69 => 17,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"container\">
        <table class=\"table table-striped\">
            <thead>
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
            {% for prat in praticiens %}
            <tbody>
                <tr>
                    <th>{{ prat.getPraNom }}</th>
                    <th>{{ prat.getPraPrenom }}</th>
                    <th>{{ prat.getPraAdresse }}</th>
                    <th>{{ prat.getPraVille }}</th>
                    <th>{{ prat.getPraCp }}</th>
                    <th>{{ prat.getPraCoefnotoriete }}</th>
                    <th>{{ prat.getTypCode }}</th>
                   
                    <th>
                        <a href=\"{{ path('edit.visiteurs', {id: prat.getPraNum}) }}\" class=\"btn btn-secondary\">Editer</a>
                        <form method=\"POST\" action=\"{{ path('del.visiteurs', {id: prat.getPraNum}) }}\" style=\"display: inline-block\" onsubmit=\"return confirm('Êtes vous sûr ?')\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <input type=\"hidden\" name=\"_TOKEN\" value=\"{{ csrf_token(\"delete_vis\" ~ prat.getPraNum) }}\">
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
{% endblock %}", "admin/praticiens/praticien.html.twig", "C:\\wamp64\\www\\gsbMVC\\GSB\\templates\\admin\\praticiens\\praticien.html.twig");
    }
}
