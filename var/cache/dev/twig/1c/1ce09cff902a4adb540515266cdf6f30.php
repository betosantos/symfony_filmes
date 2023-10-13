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

/* registration/register.html.twig */
class __TwigTemplate_da464158af6c78f59eae973e5458f2d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt-br\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"description\" content=\"Formulário de Login\">
\t\t<meta name=\"author\" content=\"José Roberto O.\">
\t\t<meta name=\"keywords\" content=\"Form Login\">
\t\t<title>Formulário de Registro de Usuário</title>
\t\t<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/mdi-font/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
\t\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/font-awesome-4.7/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

\t\t<style>
\t\t\t.btn-primary {
\t\t\t\tbackground: #f4476b;
\t\t\t\tborder: none;
\t\t\t\tborder-radius: 4px;
\t\t\t\tpadding: 11px;
\t\t\t\tbox-shadow: none;
\t\t\t\tmargin-top: 35px;
\t\t\t\ttext-shadow: none;
\t\t\t\toutline: none !important;
\t\t\t}
\t\t\t.btn-block {
\t\t\t\tdisplay: block;
\t\t\t\twidth: 100%;
\t\t\t}
\t\t</style>
\t</head>

\t<body>
\t\t<div class=\"page-wrapper bg-blue p-t-100 p-b-100 font-robo\">
\t\t\t<div class=\"wrapper wrapper--w680\">
\t\t\t\t<div class=\"card card-1\">
\t\t\t\t\t<div class=\"card-heading\"></div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h2 class=\"title\">Cadastro de Usuário</h2>

\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), 'form_start');
        echo "

\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "nome", [], "any", false, false, false, 45), 'row', ["attr" => ["class" => "input--style-1"]]);
        echo "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), 'row', ["attr" => ["class" => "input--style-1"]]);
        echo "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "telefone", [], "any", false, false, false, 53), 'row', ["attr" => ["class" => "input--style-1"]]);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "password", [], "any", false, false, false, 58), "first", [], "any", false, false, false, 58), 'row');
        echo "                            
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), "password", [], "any", false, false, false, 62), "second", [], "any", false, false, false, 62), 'row');
        echo "                            
\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-block\" type=\"submit\">Cadastrar</button>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t</form>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/global.js"), "html", null, true);
        echo "\"></script>
\t\t <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js\"></script>
\t</body>
</html>
</head>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 80,  153 => 79,  142 => 71,  130 => 62,  123 => 58,  115 => 53,  108 => 49,  101 => 45,  95 => 42,  63 => 13,  58 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"pt-br\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"description\" content=\"Formulário de Login\">
\t\t<meta name=\"author\" content=\"José Roberto O.\">
\t\t<meta name=\"keywords\" content=\"Form Login\">
\t\t<title>Formulário de Registro de Usuário</title>
\t\t<link href=\"{{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css') }}\" rel=\"stylesheet\" media=\"all\">
\t\t<link href=\"{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }}\" rel=\"stylesheet\" media=\"all\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i\" rel=\"stylesheet\">
\t\t<link href=\"{{ asset('css/main.css') }}\" rel=\"stylesheet\" media=\"all\">

\t\t<style>
\t\t\t.btn-primary {
\t\t\t\tbackground: #f4476b;
\t\t\t\tborder: none;
\t\t\t\tborder-radius: 4px;
\t\t\t\tpadding: 11px;
\t\t\t\tbox-shadow: none;
\t\t\t\tmargin-top: 35px;
\t\t\t\ttext-shadow: none;
\t\t\t\toutline: none !important;
\t\t\t}
\t\t\t.btn-block {
\t\t\t\tdisplay: block;
\t\t\t\twidth: 100%;
\t\t\t}
\t\t</style>
\t</head>

\t<body>
\t\t<div class=\"page-wrapper bg-blue p-t-100 p-b-100 font-robo\">
\t\t\t<div class=\"wrapper wrapper--w680\">
\t\t\t\t<div class=\"card card-1\">
\t\t\t\t\t<div class=\"card-heading\"></div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h2 class=\"title\">Cadastro de Usuário</h2>

\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t{{ form_start(registrationForm) }}

\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t{{ form_row(registrationForm.nome, {'attr': {'class': 'input--style-1'}}) }}
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t{{ form_row(registrationForm.email, {'attr': {'class': 'input--style-1'}}) }}
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t{{ form_row(registrationForm.telefone, {'attr': {'class': 'input--style-1'}}) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t{{ form_row(registrationForm.password.first) }}                            
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t{{ form_row(registrationForm.password.second) }}                            
\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-block\" type=\"submit\">Cadastrar</button>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t{{ form_end(registrationForm) }}
\t\t\t\t\t\t</form>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t <script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
\t\t <script src=\"{{ asset('js/global.js') }}\"></script>
\t\t <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js\"></script>
\t</body>
</html>
</head>
</html>
", "registration/register.html.twig", "/home/beto/sinfonia/templates/registration/register.html.twig");
    }
}
