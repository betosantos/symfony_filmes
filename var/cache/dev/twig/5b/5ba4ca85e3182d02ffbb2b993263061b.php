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

/* categorias/index.html.twig */
class __TwigTemplate_fe5070588bf1f43062c1712c6979a502 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorias/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorias/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/adminbase.html.twig", "categorias/index.html.twig", 1);
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

        echo "Categorias ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
\t<!-- Content Wrapper. Contains page content -->
\t<div
\t\tclass=\"content-wrapper mt-3\">
\t\t<!-- Main content -->
\t\t<section
\t\t\tclass=\"content\">
\t\t\t<!-- Default box -->
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<h3 class=\"card-title\">Categorias</h3>

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
\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t";
        // line 32
        echo "\t\t\t\t\t\t\t\t<th>Nome</th>
\t\t\t\t\t\t\t\t<th class=\"float-right\">Ações</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["categorium"]) {
            // line 38
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t";
            // line 40
            echo "\t\t\t\t\t\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorias_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["categorium"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorium"], "nome", [], "any", false, false, false, 40), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t\t\t<td class=\"d-flex justify-content-end\">
\t\t\t\t\t\t\t\t\t\t";
            // line 44
            echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorias_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["categorium"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-marker fa-lg\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("confirm_categorias_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["categorium"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\" style=\"color:red;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash fa-lg\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"3\">Registro não encontrado.</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorium'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>

\t\t\t\t\t";
        // line 63
        echo "\t\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t\t<a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorias_new");
        echo "\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary mt-2\">Novo</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /.card -->
\t\t</section>
\t\t<!-- /.content -->
\t</div>
\t<!-- /.content-wrapper -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "categorias/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 64,  173 => 63,  168 => 59,  159 => 55,  148 => 49,  141 => 45,  138 => 44,  130 => 40,  127 => 38,  122 => 37,  115 => 32,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/adminbase.html.twig' %}

{% block title %}Categorias {% endblock %}

{% block content %}

\t<!-- Content Wrapper. Contains page content -->
\t<div
\t\tclass=\"content-wrapper mt-3\">
\t\t<!-- Main content -->
\t\t<section
\t\t\tclass=\"content\">
\t\t\t<!-- Default box -->
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<h3 class=\"card-title\">Categorias</h3>

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
\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t{# <th>Id</th> #}
\t\t\t\t\t\t\t\t<th>Nome</th>
\t\t\t\t\t\t\t\t<th class=\"float-right\">Ações</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t{% for categorium in pagination %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t{# <td>{{ categorium.id }}</td> #}
\t\t\t\t\t\t\t\t\t<td><a href=\"{{ path('app_categorias_edit', {'id': categorium.id}) }}\">{{ categorium.nome }}</a></td>
\t\t\t\t\t\t\t\t\t<td class=\"d-flex justify-content-end\">
\t\t\t\t\t\t\t\t\t\t{# <a href=\"{{ path('app_categorias_show', {'id': categorium.id}) }}\" style=\"color:green;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-clipboard fa-lg\"></i>
\t\t\t\t\t\t\t\t\t\t</a> #}\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_categorias_edit', {'id': categorium.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-marker fa-lg\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('confirm_categorias_delete', {'id': categorium.id}) }}\" style=\"color:red;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash fa-lg\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"3\">Registro não encontrado.</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>

\t\t\t\t\t{# <a href=\"{{ path('app_categorias_new') }}\">Create new</a> #}
\t\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t\t<a href=\"{{ path('app_categorias_new')}}\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary mt-2\">Novo</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /.card -->
\t\t</section>
\t\t<!-- /.content -->
\t</div>
\t<!-- /.content-wrapper -->
{% endblock %}
", "categorias/index.html.twig", "/home/beto/sinfonia/templates/categorias/index.html.twig");
    }
}
