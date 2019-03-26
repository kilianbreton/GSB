<?php

/* connexion.php */
class __TwigTemplate_143509dce8de26762d7f5a664d56c1087c8c3f5a799b67eeb5edebef2285df68 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "connexion.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "connexion.php"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<link rel=\"stylesheet\" href=\"connexion.css\">
\t<meta charset=\"utf-8\" />
\t<title>Connexion</title>
</head>
\t<body>
\t<a href=\"connexion.php\"><img class=\"logo\" src=\"images/logo.png\"></a>

\t<form action=\"\" method=\"POST\"> <!-- Nom du fichier à changer selon le nom voulu -->
\t\t<input class=\"formulCo\" type=\"login\" name=\"login\" placeholder=\"utilisateur\">
\t\t<input class=\"formulCo\" type=\"password\" name=\"password\" placeholder=\"mot de passe\"> <br>
\t\t<input  class=\"button_co\" type=\"submit\" value=\"Se connecter\">
\t</form>
\t</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "connexion.php";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
\t<link rel=\"stylesheet\" href=\"connexion.css\">
\t<meta charset=\"utf-8\" />
\t<title>Connexion</title>
</head>
\t<body>
\t<a href=\"connexion.php\"><img class=\"logo\" src=\"images/logo.png\"></a>

\t<form action=\"\" method=\"POST\"> <!-- Nom du fichier à changer selon le nom voulu -->
\t\t<input class=\"formulCo\" type=\"login\" name=\"login\" placeholder=\"utilisateur\">
\t\t<input class=\"formulCo\" type=\"password\" name=\"password\" placeholder=\"mot de passe\"> <br>
\t\t<input  class=\"button_co\" type=\"submit\" value=\"Se connecter\">
\t</form>
\t</body>
</html>", "connexion.php", "C:\\Users\\HENQUINET.SIO\\git\\GSB\\templates\\connexion.php");
    }
}
