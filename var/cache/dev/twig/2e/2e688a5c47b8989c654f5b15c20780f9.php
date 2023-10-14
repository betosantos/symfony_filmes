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

/* admin/adminbase.html.twig */
class __TwigTemplate_0803f4e041d3bf58ae1b48467289d009 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adminbase.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adminbase.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt-br\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>Painel Administrativo</title>
\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
\t\t<style>\t
\t\t\ta:hover, a:active {\t\t\t
\t\t\t}\t\t\t\t
\t\t</style>
</head>

<body class=\"hold-transition sidebar-mini\">

<div class=\"wrapper\">
\t<nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
\t\t<ul class=\"navbar-nav\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\">
\t\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item d-none d-sm-inline-block\">
\t\t\t\t<a href=\"../../index3.html\" class=\"nav-link\">Home</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item d-none d-sm-inline-block\">
\t\t\t\t<a href=\"#\" class=\"nav-link\">Contact</a>
\t\t\t</li>
\t\t</ul>

\t\t<!-- Right navbar links -->
\t\t<ul
\t\t\tclass=\"navbar-nav ml-auto\">
\t\t\t<!-- Navbar Search -->
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" data-widget=\"navbar-search\" href=\"#\" role=\"button\">
\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t</a>
\t\t\t\t<div class=\"navbar-search-block\">
\t\t\t\t\t<form class=\"form-inline\">
\t\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t<input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-navbar\" type=\"submit\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button class=\"btn btn-navbar\" type=\"button\" data-widget=\"navbar-search\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</li>

\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
\t\t\t\t\t<i class=\"fas fa-expand-arrows-alt\"></i>
\t\t\t\t</a>
\t\t\t</li>\t\t\t
\t\t</ul>
\t</nav>
\t<!-- /.navbar -->

\t<!-- Main Sidebar Container -->
\t<aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
\t\t<!-- Brand Logo -->
\t\t";
        // line 71
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71)) {
            // line 72
            echo "\t\t<div class=\"brand-link\">
\t\t\t<img src=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagens/logout.jpg"), "html", null, true);
            echo "\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
\t\t\t<a href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" style=\"color:white;\"><span class=\"brand-text font-weight-light info\">Sair</span></a>
\t\t</div>
\t\t";
        }
        // line 77
        echo "
\t\t<!-- Sidebar -->
\t\t<div
\t\t\tclass=\"sidebar\">
\t\t\t<!-- Sidebar user (optional) -->
\t\t\t<div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
\t\t\t\t<div class=\"image\">
\t\t\t\t\t<img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle elevation-2\" alt=\"User Image\">
\t\t\t\t</div>
\t\t\t\t<div class=\"info\">
\t\t\t\t\t";
        // line 87
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87)) {
            // line 88
            echo "\t\t\t\t\t\t<div class=\"mb-3\" style=\"color:white;\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<span>Bem-Vindo:</span><br> 
\t\t\t\t\t\t\t";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90), "nome", [], "any", false, false, false, 90), " "), 0, [], "array", false, false, false, 90), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 92
        echo "\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Sidebar Menu -->
\t\t\t<nav class=\"mt-2\">
\t\t\t\t<ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tDashboard
\t\t\t\t\t\t\t\t<i class=\"right fas fa-angle-left\"></i>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"../../index.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t<p>Dashboard v1</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"../../index2.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t<p>Dashboard v2</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_index");
        echo "\" class=\"nav-link botao\" style=\"color:white;\">
\t\t\t\t\t\t<i class=\"nav-icon fas fa-tachometer-alt\">
\t\t\t\t\t\t\t<span>&nbsp;Usuário</span>
\t\t\t\t\t\t</i>
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categorias_index");
        echo "\" class=\"nav-link botao\" style=\"color:white;\">
\t\t\t\t\t\t<i class=\"nav-icon fas fa-tachometer-alt\">
\t\t\t\t\t\t\t<span>&nbsp;Categorias</span>
\t\t\t\t\t\t</i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_filmes");
        echo "\" class=\"nav-link\" style=\"color:white;\">
\t\t\t\t\t\t<i class=\"nav-icon fas fa-tachometer-alt\">
\t\t\t\t\t\t\t<span>&nbsp;Filmes</span>
\t\t\t\t\t\t</i>
\t\t\t\t\t</a>


\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<!-- /.sidebar-menu -->
\t\t</div>
\t\t<!-- /.sidebar -->
\t</aside>


\t";
        // line 149
        $this->displayBlock('content', $context, $blocks);
        // line 151
        echo "
\t";
        // line 162
        echo "
\t<!-- Control Sidebar -->
\t<aside
\t\tclass=\"control-sidebar control-sidebar-dark\"><!-- Control sidebar content goes here -->
\t</aside>
\t<!-- /.control-sidebar -->
</div>

 <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script> <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
 <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/dist/js/adminlte.min.js"), "html", null, true);
        echo "\"></script> 
 
 </body>
 </html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 149
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 150
        echo "\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/adminbase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 150,  268 => 149,  253 => 171,  247 => 170,  237 => 162,  234 => 151,  232 => 149,  214 => 134,  206 => 129,  197 => 123,  164 => 92,  158 => 90,  154 => 88,  152 => 87,  146 => 84,  137 => 77,  131 => 74,  127 => 73,  124 => 72,  122 => 71,  57 => 9,  53 => 8,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"pt-br\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>Painel Administrativo</title>
\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('admin/dist/css/adminlte.min.css') }}\">
\t\t<style>\t
\t\t\ta:hover, a:active {\t\t\t
\t\t\t}\t\t\t\t
\t\t</style>
</head>

<body class=\"hold-transition sidebar-mini\">

<div class=\"wrapper\">
\t<nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
\t\t<ul class=\"navbar-nav\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\">
\t\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item d-none d-sm-inline-block\">
\t\t\t\t<a href=\"../../index3.html\" class=\"nav-link\">Home</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item d-none d-sm-inline-block\">
\t\t\t\t<a href=\"#\" class=\"nav-link\">Contact</a>
\t\t\t</li>
\t\t</ul>

\t\t<!-- Right navbar links -->
\t\t<ul
\t\t\tclass=\"navbar-nav ml-auto\">
\t\t\t<!-- Navbar Search -->
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" data-widget=\"navbar-search\" href=\"#\" role=\"button\">
\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t</a>
\t\t\t\t<div class=\"navbar-search-block\">
\t\t\t\t\t<form class=\"form-inline\">
\t\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t<input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-navbar\" type=\"submit\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button class=\"btn btn-navbar\" type=\"button\" data-widget=\"navbar-search\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</li>

\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
\t\t\t\t\t<i class=\"fas fa-expand-arrows-alt\"></i>
\t\t\t\t</a>
\t\t\t</li>\t\t\t
\t\t</ul>
\t</nav>
\t<!-- /.navbar -->

\t<!-- Main Sidebar Container -->
\t<aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
\t\t<!-- Brand Logo -->
\t\t{% if app.user %}
\t\t<div class=\"brand-link\">
\t\t\t<img src=\"{{ asset('imagens/logout.jpg') }}\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
\t\t\t<a href=\"{{ path('app_logout') }}\" style=\"color:white;\"><span class=\"brand-text font-weight-light info\">Sair</span></a>
\t\t</div>
\t\t{% endif %}

\t\t<!-- Sidebar -->
\t\t<div
\t\t\tclass=\"sidebar\">
\t\t\t<!-- Sidebar user (optional) -->
\t\t\t<div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
\t\t\t\t<div class=\"image\">
\t\t\t\t\t<img src=\"{{ asset('admin/dist/img/user2-160x160.jpg') }}\" class=\"img-circle elevation-2\" alt=\"User Image\">
\t\t\t\t</div>
\t\t\t\t<div class=\"info\">
\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t<div class=\"mb-3\" style=\"color:white;\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<span>Bem-Vindo:</span><br> 
\t\t\t\t\t\t\t{{ app.user.nome|split(' ')[0] }}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Sidebar Menu -->
\t\t\t<nav class=\"mt-2\">
\t\t\t\t<ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tDashboard
\t\t\t\t\t\t\t\t<i class=\"right fas fa-angle-left\"></i>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"../../index.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t<p>Dashboard v1</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"../../index2.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t<p>Dashboard v2</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<a href=\"{{ path('admin_users_index') }}\" class=\"nav-link botao\" style=\"color:white;\">
\t\t\t\t\t\t<i class=\"nav-icon fas fa-tachometer-alt\">
\t\t\t\t\t\t\t<span>&nbsp;Usuário</span>
\t\t\t\t\t\t</i>
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"{{ path('admin_categorias_index') }}\" class=\"nav-link botao\" style=\"color:white;\">
\t\t\t\t\t\t<i class=\"nav-icon fas fa-tachometer-alt\">
\t\t\t\t\t\t\t<span>&nbsp;Categorias</span>
\t\t\t\t\t\t</i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('admin_filmes') }}\" class=\"nav-link\" style=\"color:white;\">
\t\t\t\t\t\t<i class=\"nav-icon fas fa-tachometer-alt\">
\t\t\t\t\t\t\t<span>&nbsp;Filmes</span>
\t\t\t\t\t\t</i>
\t\t\t\t\t</a>


\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<!-- /.sidebar-menu -->
\t\t</div>
\t\t<!-- /.sidebar -->
\t</aside>


\t{% block content %}
\t{% endblock %}

\t{# 
\t\t\t\t\t\t\t<footer class=\"main-footer\">
\t\t\t\t\t\t\t\t<div class=\"float-right d-none d-sm-block\">
\t\t\t\t\t\t\t\t\t<b>Version</b>
\t\t\t\t\t\t\t\t\t3.2.0
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<strong>Copyright &copy; 2014-2021
\t\t\t\t\t\t\t\t\t<a href=\"https://adminlte.io\">AdminLTE.io</a>.</strong>
\t\t\t\t\t\t\t\tAll rights reserved.
\t\t\t\t\t\t\t</footer> #}

\t<!-- Control Sidebar -->
\t<aside
\t\tclass=\"control-sidebar control-sidebar-dark\"><!-- Control sidebar content goes here -->
\t</aside>
\t<!-- /.control-sidebar -->
</div>

 <script src=\"{{ asset('admin/plugins/jquery/jquery.min.js') }}\"></script> <script src=\"{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
 <script src=\"{{ asset('admin/dist/js/adminlte.min.js') }}\"></script> 
 
 </body>
 </html>
", "admin/adminbase.html.twig", "/home/beto/sinfonia/templates/admin/adminbase.html.twig");
    }
}
