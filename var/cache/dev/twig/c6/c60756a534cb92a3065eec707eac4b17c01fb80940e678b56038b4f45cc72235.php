<?php

/* praticiens.html.twig */
class __TwigTemplate_21651352a3a6a103f8c6154a6694ad3e11e8cad905daafbb49dc8f5fe14230f3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "praticiens.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "praticiens.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "praticiens.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "   
    \t   \t\t
   \t\t
   <div class=\"container\">        
        <table id=\"table_id\" class=\"display\" style=\"width:100%\">
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
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["praticiens"]) || array_key_exists("praticiens", $context) ? $context["praticiens"] : (function () { throw new Twig_Error_Runtime('Variable "praticiens" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prati"]) {
            // line 25
            echo "               \t   <tr>
                    \t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prati"], "getPraNom", []), "html", null, true);
            echo "</td>

                   \t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prati"], "getPraPrenom", []), "html", null, true);
            echo "</td>

                    \t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prati"], "getPraAdresse", []), "html", null, true);
            echo "</td>

                   \t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prati"], "getPraVille", []), "html", null, true);
            echo "</td>

                    \t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prati"], "getPraCp", []), "html", null, true);
            echo "</td>

                    \t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prati"], "getPraCoefnotoriete", []), "html", null, true);
            echo "</td>

                    \t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prati"], "getTypCode", []), "html", null, true);
            echo "</td>
                    </tr> 
    \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prati'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
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
        return "praticiens.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 41,  109 => 38,  104 => 36,  99 => 34,  94 => 32,  89 => 30,  84 => 28,  79 => 26,  76 => 25,  72 => 24,  44 => 6,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'index.html.twig' %}




{% block content %}   
    \t   \t\t
   \t\t
   <div class=\"container\">        
        <table id=\"table_id\" class=\"display\" style=\"width:100%\">
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

{% endblock %}", "praticiens.html.twig", "C:\\wamp64\\www\\GSB\\templates\\praticiens.html.twig");
    }
}
