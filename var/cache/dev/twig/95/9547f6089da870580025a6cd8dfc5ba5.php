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

/* filmes/index.html.twig */
class __TwigTemplate_456f9e532c014870e3bf5233bbdd7aca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "filmes/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "filmes/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/adminbase.html.twig", "filmes/index.html.twig", 1);
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

        echo "Filmes
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
\t<!-- Content Wrapper. Contains page content -->
\t<div
\t\tclass=\"content-wrapper mt-3\">
\t\t<!-- Main content -->
\t\t<section
\t\t\tclass=\"content\">
\t\t\t<!-- Default box -->
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<h3 class=\"card-title\">Filmes</h3>

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
        // line 34
        echo "\t\t\t\t\t\t\t\t<th>Capa</th>
\t\t\t\t\t\t\t\t<th>Categoria</th>
\t\t\t\t\t\t\t\t<th>Titulo</th>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<th class=\"float-right\">Ações</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filmes"]) || array_key_exists("filmes", $context) ? $context["filmes"] : (function () { throw new RuntimeError('Variable "filmes" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["filme"]) {
            // line 42
            echo "\t\t\t\t\t\t\t\t<tr>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, $context["filme"], "foto", [], "any", false, false, false, 44) == null)) {
                // line 45
                echo "\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagens/semfoto.png"), "html", null, true);
                echo "\" width=\"50\" heigth=\"50\">
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 47
                echo "\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/filmes/" . twig_get_attribute($this->env, $this->source, $context["filme"], "foto", [], "any", false, false, false, 47))), "html", null, true);
                echo "\" width=\"50\" heigth=\"50\">
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["filme"], "categoria", [], "any", false, false, false, 50), "nome", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_filmes_show", ["id" => twig_get_attribute($this->env, $this->source, $context["filme"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filme"], "titulo", [], "any", false, false, false, 52), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t</td>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td class=\"d-flex justify-content-end\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_filmes_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["filme"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-marker fa-lg\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("confirm_filmes_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["filme"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\" style=\"color:red;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash fa-lg\"></i>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("photos", ["id" => twig_get_attribute($this->env, $this->source, $context["filme"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\" style=\"color:yellow;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash fa-lg\"></i>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 70
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"4\">Não há registros Cadastrados.</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>


\t\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t\t<a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_filmes_new");
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
        return "filmes/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 79,  200 => 74,  191 => 70,  179 => 63,  172 => 59,  165 => 55,  157 => 52,  152 => 50,  149 => 49,  143 => 47,  137 => 45,  135 => 44,  131 => 42,  126 => 41,  117 => 34,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/adminbase.html.twig' %}

{% block title %}Filmes
{% endblock %}

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
\t\t\t\t\t<h3 class=\"card-title\">Filmes</h3>

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
\t\t\t\t\t\t\t\t<th>Capa</th>
\t\t\t\t\t\t\t\t<th>Categoria</th>
\t\t\t\t\t\t\t\t<th>Titulo</th>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<th class=\"float-right\">Ações</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t{% for filme in filmes %}
\t\t\t\t\t\t\t\t<tr>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t{% if(filme.foto == null) %}
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('imagens/semfoto.png') }}\" width=\"50\" heigth=\"50\">
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/filmes/' ~ filme.foto) }}\" width=\"50\" heigth=\"50\">
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>{{ filme.categoria.nome }}</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_filmes_show', {'id': filme.id }) }}\">{{ filme.titulo }}</a>
\t\t\t\t\t\t\t\t\t</td>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td class=\"d-flex justify-content-end\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_filmes_edit', {'id': filme.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-marker fa-lg\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('confirm_filmes_delete', {'id': filme.id}) }}\" style=\"color:red;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash fa-lg\"></i>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('photos', {'id': filme.id}) }}\" style=\"color:yellow;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash fa-lg\"></i>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"4\">Não há registros Cadastrados.</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>


\t\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t\t<a href=\"{{ path('admin_filmes_new')}}\">
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
", "filmes/index.html.twig", "/home/beto/sinfonia/templates/filmes/index.html.twig");
    }
}
