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

/* security/login.html.twig */
class __TwigTemplate_a8cfb62943ad42771226d9def80974be extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>Área Restrita</title>
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css\">

\t\t<style>
\t\t\t.register-photo {
\t\t\t\tbackground: #f1f7fc;
\t\t\t\tpadding: 80px 0;
\t\t\t}

\t\t\t.register-photo .image-holder {
\t\t\t\tdisplay: table-cell;
\t\t\t\twidth: auto;
\t\t\t\tbackground: url('../imagens/login.jpg');
\t\t\t\tbackground-size: cover;
\t\t\t\tbackground-position: top;
\t\t\t}

\t\t\t.register-photo .form-container {
\t\t\t\tdisplay: table;
\t\t\t\tmax-width: 900px;
\t\t\t\twidth: 90%;
\t\t\t\tmargin: 0 auto;
\t\t\t\tbox-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
\t\t\t}

\t\t\t.register-photo form {
\t\t\t\tdisplay: table-cell;
\t\t\t\twidth: 400px;
\t\t\t\tbackground-color: #ffffff;
\t\t\t\tpadding: 40px 60px;
\t\t\t\tcolor: #505e6c;
\t\t\t}

\t\t\t@media(max-width:991px) {
\t\t\t\t.register-photo form {
\t\t\t\t\tpadding: 40px;
\t\t\t\t}
\t\t\t}

\t\t\t.register-photo form h2 {
\t\t\t\tfont-size: 24px;
\t\t\t\tline-height: 1.5;
\t\t\t\tmargin-bottom: 30px;
\t\t\t}

\t\t\t.register-photo form .form-control {
\t\t\t\tbackground: #f7f9fc;
\t\t\t\tborder: none;
\t\t\t\tborder-bottom: 1px solid #dfe7f1;
\t\t\t\tborder-radius: 0;
\t\t\t\tbox-shadow: none;
\t\t\t\toutline: none;
\t\t\t\tcolor: inherit;
\t\t\t\ttext-indent: 6px;
\t\t\t\theight: 40px;
\t\t\t}

\t\t\t.register-photo form .form-check {
\t\t\t\tfont-size: 13px;
\t\t\t\tline-height: 20px;
\t\t\t}

\t\t\t.register-photo form .btn-primary {
\t\t\t\tbackground: #f4476b;
\t\t\t\tborder: none;
\t\t\t\tborder-radius: 4px;
\t\t\t\tpadding: 11px;
\t\t\t\tbox-shadow: none;
\t\t\t\tmargin-top: 35px;
\t\t\t\ttext-shadow: none;
\t\t\t\toutline: none !important;
\t\t\t}

\t\t\t.register-photo form .btn-primary:hover,
\t\t\t.register-photo form .btn-primary:active {
\t\t\t\tbackground: #eb3b60;
\t\t\t}

\t\t\t.register-photo form .btn-primary:active {
\t\t\t\ttransform: translateY(1px);
\t\t\t}

\t\t\t.register-photo form .already {
\t\t\t\tdisplay: block;
\t\t\t\ttext-align: center;
\t\t\t\tfont-size: 12px;
\t\t\t\tcolor: #6f7a85;
\t\t\t\topacity: 0.9;
\t\t\t\ttext-decoration: none;
\t\t\t}
\t\t</style>
\t</head>


\t<body>
\t\t<div class=\"register-photo\">
\t\t\t<div class=\"form-container\">
\t\t\t\t<div class=\"image-holder\"></div>
\t\t\t\t<form method=\"post\">

\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<img src=\"../imagens/cadeado.jpg\" width=\"60\" heigth=\"60\">
\t\t\t\t\t</div>

\t\t\t\t\t<h3 class=\"text-center\">
\t\t\t\t\t\t<strong>Área Restrita</strong>
\t\t\t\t\t\t<p>Informe seu Login e Senha</p>
\t\t\t\t\t</h3>

\t\t\t\t\t";
        // line 115
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 115, $this->source); })())) {
            // line 116
            echo "\t\t\t\t\t\t<div class=\"alert alert-danger text-center\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 116, $this->source); })()), "messageKey", [], "any", false, false, false, 116), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 116, $this->source); })()), "messageData", [], "any", false, false, false, 116), "security"), "html", null, true);
            echo "</div>
\t\t\t\t\t";
        }
        // line 118
        echo "
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"email\" name=\"_username\" id=\"username\" value=\"";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 120, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Email\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" name=\"_password\" id=\"password\" placeholder=\"Senha\">
\t\t\t\t\t</div>

\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<button class=\"btn btn-primary btn-block\" type=\"submit\">Acessar</button>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"already\">Não tem conta? Cadastre-se</a>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>


\t\t <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t\t <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js\"></script>
\t</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 132,  181 => 127,  171 => 120,  167 => 118,  161 => 116,  159 => 115,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>Área Restrita</title>
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css\">

\t\t<style>
\t\t\t.register-photo {
\t\t\t\tbackground: #f1f7fc;
\t\t\t\tpadding: 80px 0;
\t\t\t}

\t\t\t.register-photo .image-holder {
\t\t\t\tdisplay: table-cell;
\t\t\t\twidth: auto;
\t\t\t\tbackground: url('../imagens/login.jpg');
\t\t\t\tbackground-size: cover;
\t\t\t\tbackground-position: top;
\t\t\t}

\t\t\t.register-photo .form-container {
\t\t\t\tdisplay: table;
\t\t\t\tmax-width: 900px;
\t\t\t\twidth: 90%;
\t\t\t\tmargin: 0 auto;
\t\t\t\tbox-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
\t\t\t}

\t\t\t.register-photo form {
\t\t\t\tdisplay: table-cell;
\t\t\t\twidth: 400px;
\t\t\t\tbackground-color: #ffffff;
\t\t\t\tpadding: 40px 60px;
\t\t\t\tcolor: #505e6c;
\t\t\t}

\t\t\t@media(max-width:991px) {
\t\t\t\t.register-photo form {
\t\t\t\t\tpadding: 40px;
\t\t\t\t}
\t\t\t}

\t\t\t.register-photo form h2 {
\t\t\t\tfont-size: 24px;
\t\t\t\tline-height: 1.5;
\t\t\t\tmargin-bottom: 30px;
\t\t\t}

\t\t\t.register-photo form .form-control {
\t\t\t\tbackground: #f7f9fc;
\t\t\t\tborder: none;
\t\t\t\tborder-bottom: 1px solid #dfe7f1;
\t\t\t\tborder-radius: 0;
\t\t\t\tbox-shadow: none;
\t\t\t\toutline: none;
\t\t\t\tcolor: inherit;
\t\t\t\ttext-indent: 6px;
\t\t\t\theight: 40px;
\t\t\t}

\t\t\t.register-photo form .form-check {
\t\t\t\tfont-size: 13px;
\t\t\t\tline-height: 20px;
\t\t\t}

\t\t\t.register-photo form .btn-primary {
\t\t\t\tbackground: #f4476b;
\t\t\t\tborder: none;
\t\t\t\tborder-radius: 4px;
\t\t\t\tpadding: 11px;
\t\t\t\tbox-shadow: none;
\t\t\t\tmargin-top: 35px;
\t\t\t\ttext-shadow: none;
\t\t\t\toutline: none !important;
\t\t\t}

\t\t\t.register-photo form .btn-primary:hover,
\t\t\t.register-photo form .btn-primary:active {
\t\t\t\tbackground: #eb3b60;
\t\t\t}

\t\t\t.register-photo form .btn-primary:active {
\t\t\t\ttransform: translateY(1px);
\t\t\t}

\t\t\t.register-photo form .already {
\t\t\t\tdisplay: block;
\t\t\t\ttext-align: center;
\t\t\t\tfont-size: 12px;
\t\t\t\tcolor: #6f7a85;
\t\t\t\topacity: 0.9;
\t\t\t\ttext-decoration: none;
\t\t\t}
\t\t</style>
\t</head>


\t<body>
\t\t<div class=\"register-photo\">
\t\t\t<div class=\"form-container\">
\t\t\t\t<div class=\"image-holder\"></div>
\t\t\t\t<form method=\"post\">

\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<img src=\"../imagens/cadeado.jpg\" width=\"60\" heigth=\"60\">
\t\t\t\t\t</div>

\t\t\t\t\t<h3 class=\"text-center\">
\t\t\t\t\t\t<strong>Área Restrita</strong>
\t\t\t\t\t\t<p>Informe seu Login e Senha</p>
\t\t\t\t\t</h3>

\t\t\t\t\t{% if error %}
\t\t\t\t\t\t<div class=\"alert alert-danger text-center\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"email\" name=\"_username\" id=\"username\" value=\"{{ last_username }}\" placeholder=\"Email\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" name=\"_password\" id=\"password\" placeholder=\"Senha\">
\t\t\t\t\t</div>

\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<button class=\"btn btn-primary btn-block\" type=\"submit\">Acessar</button>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"{{ path('app_register') }}\" class=\"already\">Não tem conta? Cadastre-se</a>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>


\t\t <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t\t <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js\"></script>
\t</body>

</html>
", "security/login.html.twig", "/home/beto/sinfonia/templates/security/login.html.twig");
    }
}
