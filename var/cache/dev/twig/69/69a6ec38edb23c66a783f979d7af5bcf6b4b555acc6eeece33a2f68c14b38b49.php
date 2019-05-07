<?php

/* rapports.html.twig */
class __TwigTemplate_163fe8f462cf6c867b014b1d2ee94b5f4ff3a3828f51322e6364138e22dce445 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "rapports.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rapports.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rapports.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
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
                    <th>N°</th>
                    <th>Praticien</th>
                    <th>Date</th>
                    <th>Motif</th>
                    <th>Bilan</th>
                </tr>
            </thead>
            
            <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rapports"]) || array_key_exists("rapports", $context) ? $context["rapports"] : (function () { throw new Twig_Error_Runtime('Variable "rapports" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rapport"]) {
            // line 20
            echo "               \t   <tr>
                    \t<td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rapport"], "getRapNum", []), "html", null, true);
            echo "</td>

                   \t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rapport"], "getPraNum", []), "html", null, true);
            echo "</td>

                    \t<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rapport"], "getRapDate", []), "html", null, true);
            echo "</td>

                   \t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rapport"], "getRapMotif", []), "html", null, true);
            echo "</td>

                    \t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rapport"], "getRapBilan", []), "html", null, true);
            echo "</td>

                    
                    </tr> 
    \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rapport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
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
        return "rapports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 34,  97 => 29,  92 => 27,  87 => 25,  82 => 23,  77 => 21,  74 => 20,  70 => 19,  44 => 3,  15 => 1,);
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
                    <th>N°</th>
                    <th>Praticien</th>
                    <th>Date</th>
                    <th>Motif</th>
                    <th>Bilan</th>
                </tr>
            </thead>
            
            <tbody>
            {% for rapport in rapports %}
               \t   <tr>
                    \t<td>{{ rapport.getRapNum}}</td>

                   \t\t<td>{{ rapport.getPraNum}}</td>

                    \t<td>{{ rapport.getRapDate }}</td>

                   \t\t<td>{{ rapport.getRapMotif}}</td>

                    \t<td>{{ rapport.getRapBilan }}</td>

                    
                    </tr> 
    \t\t{% endfor %}
            <tbody>
        
        </table>
\t</div>
\t
\t

{% endblock %}", "rapports.html.twig", "C:\\wamp64\\www\\gsbMVC\\GSB\\templates\\rapports.html.twig");
    }
}
