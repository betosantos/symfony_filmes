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

/* home/index.html.twig */
class __TwigTemplate_1b22df2cb4953c85869991cabac75c26 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 1
        echo "
\t<div class=\"example-wrapper container\">
\t\t<h1>Hello ✅</h1>

\t\t";
        // line 5
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5)) {
            // line 6
            echo "\t\t\t<div class=\"mb-3\">
\t\t\t\tVocê está logado como:
\t\t\t\t";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "userIdentifier", [], "any", false, false, false, 8), "html", null, true);
            echo ",
\t\t\t\t<a href=\"";
            // line 9
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
\t\t\t</div>
\t\t";
        } else {
            // line 12
            echo "\t\t\t<div class=\"mb-3\">
\t\t\t\tVocê não esta logado no sistema!!!
\t\t\t</div>
\t\t";
        }
        // line 16
        echo "

\t\tThis friendly message is coming from:
\t\t<ul>
\t\t\t<li>Your controller at
\t\t\t\t<code>
\t\t\t\t\t<a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/beto/sinfonia/src/Controller/HomeController.php", 0), "html", null, true);
        echo "\">src/Controller/HomeController.php</a>
\t\t\t\t</code>
\t\t\t</li>
\t\t\t<li>Your template at
\t\t\t\t<code>
\t\t\t\t\t<a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/beto/sinfonia/templates/home/index.html.twig", 0), "html", null, true);
        echo "\">templates/home/index.html.twig</a>
\t\t\t\t</code>
\t\t\t</li>
\t\t</ul>
\t</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  79 => 22,  71 => 16,  65 => 12,  59 => 9,  55 => 8,  51 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
\t<div class=\"example-wrapper container\">
\t\t<h1>Hello ✅</h1>

\t\t{% if app.user %}
\t\t\t<div class=\"mb-3\">
\t\t\t\tVocê está logado como:
\t\t\t\t{{ app.user.userIdentifier }},
\t\t\t\t<a href=\"{{ path('app_logout') }}\">Logout</a>
\t\t\t</div>
\t\t{% else %}
\t\t\t<div class=\"mb-3\">
\t\t\t\tVocê não esta logado no sistema!!!
\t\t\t</div>
\t\t{% endif %}


\t\tThis friendly message is coming from:
\t\t<ul>
\t\t\t<li>Your controller at
\t\t\t\t<code>
\t\t\t\t\t<a href=\"{{ '/home/beto/sinfonia/src/Controller/HomeController.php'|file_link(0) }}\">src/Controller/HomeController.php</a>
\t\t\t\t</code>
\t\t\t</li>
\t\t\t<li>Your template at
\t\t\t\t<code>
\t\t\t\t\t<a href=\"{{ '/home/beto/sinfonia/templates/home/index.html.twig'|file_link(0) }}\">templates/home/index.html.twig</a>
\t\t\t\t</code>
\t\t\t</li>
\t\t</ul>
\t</div>

", "home/index.html.twig", "/home/beto/sinfonia/templates/home/index.html.twig");
    }
}
