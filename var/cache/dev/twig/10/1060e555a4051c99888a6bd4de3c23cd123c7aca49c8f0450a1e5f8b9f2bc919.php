<?php

/* rapportvisite.html.twig */
class __TwigTemplate_99a6b9519c3b1c3facce2d27d1cdbc61e75f5b8886e474cb9add943de33d53a0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "rapportvisite.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rapportvisite.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rapportvisite.html.twig"));

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
        echo "RAPPORT VISTE

  ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
\t";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->source); })()), 'widget');
        echo "
       <button class=\"btn btn-primary\">";
        // line 7
        echo twig_escape_filter($this->env, (((isset($context["button"]) || array_key_exists("button", $context))) ? (_twig_default_filter((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new Twig_Error_Runtime('Variable "button" does not exist.', 7, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
  ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->source); })()), 'form_end');
        echo "
  <a id='envoyerXHR' href=\"javascript:envoyerMedicaments();\">Envoyer</a> 
  <input type='submit' id='submit' hidden/>
  <br/>
  <select id='med_select'>
\t    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["meds"]) || array_key_exists("meds", $context) ? $context["meds"] : (function () { throw new Twig_Error_Runtime('Variable "meds" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["med"]) {
            // line 14
            echo "       <option id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["med"], "getMedDepotLegal", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["med"], "getMedNomCommercial", []), "html", null, true);
            echo "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['med'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "  </select>
  <br/>
  quantite : <input id='qte' />
  <input id='listemedic' hidden />
    <script>
  
  \tfunction envoyerMedicaments(){
  \t\tvar xhr = new XMLHttpRequest();
  \t\txhr.open(\"POST\", '/rapportvisite', true);

  \t\t//Send the proper header information along with the request
  \t\txhr.setRequestHeader(\"Content-Type\", \"application/x-www-form-urlencoded\");

  \t\txhr.onreadystatechange = function() { // Call a function when the state changes.
  \t\t    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
  \t\t        // Request finished. Do processing here.
  \t\t    }
  \t\t}
  \t\txhr.send(\"listemedic=\"+listemedic.value);
\t
  \t\tdocument.getElementById('submit').click();
  \t }
\t
\t
\tfunction ajouterLigne()
\t{
\t\tvar med = document.getElementById('med_select');
\t\tvar medicindex = med.selectedIndex;
\t\tvar medic = med.value;
\t\t//var selected = document.getElementById(\"mySelect\").options[medicindex].id
\t\tvar qte = document.getElementById('qte').value
\t\tvar tableau = document.getElementById(\"tableau\");
\t\tvar listemedic = document.getElementById(\"rapport_visite_data\");
\t\t
\t\tlistemedic.value = listemedic.value + medicindex + \",\" + qte + \";\";
\t\tvar ligne = tableau.insertRow(-1);//on a ajouté une ligne

\t\tvar colonne1 = ligne.insertCell(0);//on a une ajouté une cellule
\t\tcolonne1.innerHTML += medic;//on y met le contenu de titre

\t\tvar colonne2 = ligne.insertCell(1);//on ajoute la seconde cellule
\t\tcolonne2.innerHTML += qte;
\t\t
\t}
\t
\tfunction effacerTableau()
\t{
\t\tlistemedic.value = '';
\t\tvar tableau = document.getElementById(\"tableau\");
\t\tvar tableRows = tableau.getElementsByTagName('tr');
\t\tvar rowCount = tableRows.length;
\t\tfor(var x = rowCount-1; x>0; x--){
\t\t\ttableau.deleteRow(x);
\t\t}
\t\t
\t}
    
</script>
</div>
<a id=\"myLink\" href=\"javascript:ajouterLigne();\">Ajouter</a> <!-- appelle la fonction javascript ajouterligne()-->
\t<div id=\"tab_ech\">
\t\tOffre d'echantillons : <br/>
\t\t\t
\t\t<table id=\"tableau\" border='1px solid black'>
\t\t\t<tr>
\t\t\t\t<th>Medicament</th>
\t\t\t\t<th>Nombre d'echantillons</th>
\t\t\t</tr>
\t\t</table>
\t</div>
\t<a id=\"myLink\" href=\"javascript:effacerTableau();\">Effacer le tableau</a>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "rapportvisite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 16,  81 => 14,  77 => 13,  69 => 8,  65 => 7,  61 => 6,  57 => 5,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'index.html.twig' %}
{% block content %}
RAPPORT VISTE

  {{ form_start(form) }}
\t{{ form_widget(form) }}
       <button class=\"btn btn-primary\">{{ button|default('Enregistrer') }}</button>
  {{ form_end(form) }}
  <a id='envoyerXHR' href=\"javascript:envoyerMedicaments();\">Envoyer</a> 
  <input type='submit' id='submit' hidden/>
  <br/>
  <select id='med_select'>
\t    {% for med in meds %}
       <option id=\"{{ med.getMedDepotLegal }}\">{{med.getMedNomCommercial}}</option>
      {% endfor %}
  </select>
  <br/>
  quantite : <input id='qte' />
  <input id='listemedic' hidden />
    <script>
  
  \tfunction envoyerMedicaments(){
  \t\tvar xhr = new XMLHttpRequest();
  \t\txhr.open(\"POST\", '/rapportvisite', true);

  \t\t//Send the proper header information along with the request
  \t\txhr.setRequestHeader(\"Content-Type\", \"application/x-www-form-urlencoded\");

  \t\txhr.onreadystatechange = function() { // Call a function when the state changes.
  \t\t    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
  \t\t        // Request finished. Do processing here.
  \t\t    }
  \t\t}
  \t\txhr.send(\"listemedic=\"+listemedic.value);
\t
  \t\tdocument.getElementById('submit').click();
  \t }
\t
\t
\tfunction ajouterLigne()
\t{
\t\tvar med = document.getElementById('med_select');
\t\tvar medicindex = med.selectedIndex;
\t\tvar medic = med.value;
\t\t//var selected = document.getElementById(\"mySelect\").options[medicindex].id
\t\tvar qte = document.getElementById('qte').value
\t\tvar tableau = document.getElementById(\"tableau\");
\t\tvar listemedic = document.getElementById(\"rapport_visite_data\");
\t\t
\t\tlistemedic.value = listemedic.value + medicindex + \",\" + qte + \";\";
\t\tvar ligne = tableau.insertRow(-1);//on a ajouté une ligne

\t\tvar colonne1 = ligne.insertCell(0);//on a une ajouté une cellule
\t\tcolonne1.innerHTML += medic;//on y met le contenu de titre

\t\tvar colonne2 = ligne.insertCell(1);//on ajoute la seconde cellule
\t\tcolonne2.innerHTML += qte;
\t\t
\t}
\t
\tfunction effacerTableau()
\t{
\t\tlistemedic.value = '';
\t\tvar tableau = document.getElementById(\"tableau\");
\t\tvar tableRows = tableau.getElementsByTagName('tr');
\t\tvar rowCount = tableRows.length;
\t\tfor(var x = rowCount-1; x>0; x--){
\t\t\ttableau.deleteRow(x);
\t\t}
\t\t
\t}
    
</script>
</div>
<a id=\"myLink\" href=\"javascript:ajouterLigne();\">Ajouter</a> <!-- appelle la fonction javascript ajouterligne()-->
\t<div id=\"tab_ech\">
\t\tOffre d'echantillons : <br/>
\t\t\t
\t\t<table id=\"tableau\" border='1px solid black'>
\t\t\t<tr>
\t\t\t\t<th>Medicament</th>
\t\t\t\t<th>Nombre d'echantillons</th>
\t\t\t</tr>
\t\t</table>
\t</div>
\t<a id=\"myLink\" href=\"javascript:effacerTableau();\">Effacer le tableau</a>
</div>
{% endblock %}", "rapportvisite.html.twig", "C:\\wamp64\\www\\gsbMVC\\GSB\\templates\\rapportvisite.html.twig");
    }
}
