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

/* registration/register_old.html.twig */
class __TwigTemplate_5c381d048d037a241d2cae850d0fe5ca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register_old.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register_old.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>Untitled</title>
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
\t\t\t\t\t<h2 class=\"text-center\">
\t\t\t\t\t\t<strong>Área Restrita</strong>
\t\t\t\t\t\t<p>Login e Senha</p>
\t\t\t\t\t</h2>

\t\t\t\t\t";
        // line 110
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 110, $this->source); })()), 'form_start');
        echo "

                        <div class=\"form-group\">
                            ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 113, $this->source); })()), "email", [], "any", false, false, false, 113), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 117, $this->source); })()), "plainPassword", [], "any", false, false, false, 117), 'row', ["attr" => ["class" => "form-control"], "label" => "Senha"]);
        // line 121
        echo "
                        </div>

                        <button type=\"submit\" class=\"btn\">Register</button>

\t\t\t\t\t";
        // line 126
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 126, $this->source); })()), 'form_end');
        echo "
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
        return "registration/register_old.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 126,  169 => 121,  167 => 117,  160 => 113,  154 => 110,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>Untitled</title>
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
\t\t\t\t\t<h2 class=\"text-center\">
\t\t\t\t\t\t<strong>Área Restrita</strong>
\t\t\t\t\t\t<p>Login e Senha</p>
\t\t\t\t\t</h2>

\t\t\t\t\t{{ form_start(registrationForm) }}

                        <div class=\"form-group\">
                            {{ form_row(registrationForm.email, {'attr': {'class': 'form-control'}}) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_row(registrationForm.plainPassword, {
                                    'attr': {'class': 'form-control'}, 
                                    label:'Senha'
                                }) 
                            }}
                        </div>

                        <button type=\"submit\" class=\"btn\">Register</button>

\t\t\t\t\t{{ form_end(registrationForm) }}
\t\t\t\t</form>


\t\t\t</div>
\t\t</div>

\t\t <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t\t <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js\"></script>
\t</body>

</html>
", "registration/register_old.html.twig", "/home/beto/sinfonia/templates/registration/register_old.html.twig");
    }
}
