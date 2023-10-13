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

/* users/form.html.twig */
class __TwigTemplate_42814036098bb8f65d110d6946240592 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/adminbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/form.html.twig"));

        $this->parent = $this->loadTemplate("admin/adminbase.html.twig", "users/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Categoria index
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "
\t<div
\t\tclass=\"content-wrapper mt-3\">
\t\t<!-- Main content -->
\t\t<section
\t\t\tclass=\"content\">
\t\t\t<!-- Default box -->
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<h3 class=\"card-title\">Cadastrar Usuário</h3>

\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\" title=\"Collapse\">
\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\" title=\"Remove\">
\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t<form>
\t\t\t\t\t\t";
        // line 34
        echo "
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"titulo\" class=\"form-label\">Nome Usuário</label>                            
\t\t\t\t\t\t\t<input class=\"form-control\" id=\"titulo\" name=\"titulo\" type=\"text\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "nome", [], "any", false, false, false, 37), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t\t\t<a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_filmes");
        echo "\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary mt-2\">";
        // line 42
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 42, $this->source); })()), "Voltar")) : ("Voltar")), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t</form>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /.card -->
\t\t</section>
\t\t<!-- /.content -->
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "users/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 42,  126 => 41,  119 => 37,  114 => 34,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/adminbase.html.twig' %}

{% block title %}Categoria index
{% endblock %}

{% block content %}

\t<div
\t\tclass=\"content-wrapper mt-3\">
\t\t<!-- Main content -->
\t\t<section
\t\t\tclass=\"content\">
\t\t\t<!-- Default box -->
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<h3 class=\"card-title\">Cadastrar Usuário</h3>

\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\" title=\"Collapse\">
\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\" title=\"Remove\">
\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t<form>
\t\t\t\t\t\t{# <div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"disabledTextInput\" class=\"form-label\">Disabled input</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"Disabled input\">
\t\t\t\t\t\t</div> #}

\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"titulo\" class=\"form-label\">Nome Usuário</label>                            
\t\t\t\t\t\t\t<input class=\"form-control\" id=\"titulo\" name=\"titulo\" type=\"text\" value=\"{{ user.nome }}\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t\t\t<a href=\"{{ path('admin_filmes') }}\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary mt-2\">{{ button_label|default('Voltar') }}</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t</form>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /.card -->
\t\t</section>
\t\t<!-- /.content -->
\t</div>
{% endblock %}
", "users/form.html.twig", "/home/beto/sinfonia/templates/users/form.html.twig");
    }
}
