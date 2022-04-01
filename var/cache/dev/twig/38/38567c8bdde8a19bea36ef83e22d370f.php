<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_c97c827f3322266d988c416ee3df3f77 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
        ";
        // line 9
        echo "       
    </head>
    <body>
       
       <header>
          <div>
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"#\">Navbar</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo ">About Me</a>
        </li>
         <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href= ";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_design");
        echo " id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
             Design
          </a>
          <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
            <li><a class=\"dropdown-item\" href=";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_design");
        echo ">Tous les design</a></li>
           ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["DesignCategorieList"]) || array_key_exists("DesignCategorieList", $context) ? $context["DesignCategorieList"] : (function () { throw new RuntimeError('Variable "DesignCategorieList" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Categorie"]) {
            // line 33
            echo "                <li><a class=\"dropdown-item\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Categorie"], "categorieName", [], "any", false, false, false, 33), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "          </ul>
        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_graphism");
        echo " id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Graphism
          </a>
          <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
            <li><a class=\"dropdown-item\" href=";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_graphism");
        echo ">Tous les graphism</a></li>
           ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["GraphismCategorieList"]) || array_key_exists("GraphismCategorieList", $context) ? $context["GraphismCategorieList"] : (function () { throw new RuntimeError('Variable "GraphismCategorieList" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Graphism"]) {
            // line 44
            echo "                <li><a class=\"dropdown-item\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Graphism"], "categorieName", [], "any", false, false, false, 44), "html", null, true);
            echo "</a></li>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Graphism'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "          </ul>
        </li>
         <li class=\"nav-item\">
          <a class=\"nav-link\" href=";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo ">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
       </div>
       </header>
       <main>
         <div>
             ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "         </div>
       </main>
        <footer>
            ";
        // line 63
        $this->displayBlock('footer', $context, $blocks);
        echo " 
        </footer>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 59
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 63
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 63,  194 => 59,  175 => 5,  159 => 63,  154 => 60,  152 => 59,  139 => 49,  134 => 46,  125 => 44,  121 => 43,  117 => 42,  110 => 38,  105 => 35,  96 => 33,  92 => 32,  88 => 31,  81 => 27,  75 => 24,  58 => 9,  52 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
       
    </head>
    <body>
       
       <header>
          <div>
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"#\">Navbar</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href={{path(\"app_about\")}}>About Me</a>
        </li>
         <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href= {{path(\"app_design\")}} id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
             Design
          </a>
          <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
            <li><a class=\"dropdown-item\" href={{path(\"app_design\")}}>Tous les design</a></li>
           {% for Categorie in DesignCategorieList %}
                <li><a class=\"dropdown-item\">{{Categorie.categorieName}}</a></li>
            {% endfor %}
          </ul>
        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href={{path(\"app_graphism\")}} id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Graphism
          </a>
          <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
            <li><a class=\"dropdown-item\" href={{path(\"app_graphism\")}}>Tous les graphism</a></li>
           {% for Graphism in GraphismCategorieList %}
                <li><a class=\"dropdown-item\">{{Graphism.categorieName}}</a></li>
           {% endfor %}
          </ul>
        </li>
         <li class=\"nav-item\">
          <a class=\"nav-link\" href={{path(\"app_contact\")}}>Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
       </div>
       </header>
       <main>
         <div>
             {% block body %}{% endblock %}
         </div>
       </main>
        <footer>
            {% block footer %}{% endblock %} 
        </footer>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\ProjetFormation\\project\\templates\\base.html.twig");
    }
}
