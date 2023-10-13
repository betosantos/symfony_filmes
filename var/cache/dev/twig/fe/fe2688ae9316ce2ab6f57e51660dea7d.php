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

/* filmes/show.html.twig */
class __TwigTemplate_9005a59302fdf22f3b263c05cd0426c6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "filmes/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "filmes/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/adminbase.html.twig", "filmes/show.html.twig", 1);
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

        echo "Filme ";
        
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
        echo "\t<div
\t\tclass=\"content-wrapper mt-3\">
\t\t<!-- Main content -->
\t\t<section
\t\t\tclass=\"content\">
\t\t\t<!-- Default box -->
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<h3 class=\"card-title\">Detalhes do Filme</h3>

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

\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t<div class=\"col-4\">\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, (isset($context["filme"]) || array_key_exists("filme", $context) ? $context["filme"] : (function () { throw new RuntimeError('Variable "filme" does not exist.', 31, $this->source); })()), "foto", [], "any", false, false, false, 31) == null)) {
            // line 32
            echo "\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagens/semfoto.png"), "html", null, true);
            echo "\" width=\"150\" heigth=\"150\">
\t\t\t\t\t\t\t\t";
        } else {
            // line 34
            echo "\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/filmes/" . twig_get_attribute($this->env, $this->source, (isset($context["filme"]) || array_key_exists("filme", $context) ? $context["filme"] : (function () { throw new RuntimeError('Variable "filme" does not exist.', 34, $this->source); })()), "foto", [], "any", false, false, false, 34))), "html", null, true);
            echo "\" width=\"150\" heigth=\"150\">
\t\t\t\t\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"titulo\" class=\"form-label\">Título do Filme</label>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"titulo\" name=\"titulo\" type=\"text\" placeholder=\"Título do Filme\" aria-label=\"Titulo do Filme\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["filme"]) || array_key_exists("filme", $context) ? $context["filme"] : (function () { throw new RuntimeError('Variable "filme" does not exist.', 40, $this->source); })()), "titulo", [], "any", false, false, false, 40), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"titulo\" class=\"form-label\">Categoria</label>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"categoria\" name=\"categoria\" type=\"text\" placeholder=\"Título do Filme\" aria-label=\"\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["filme"]) || array_key_exists("filme", $context) ? $context["filme"] : (function () { throw new RuntimeError('Variable "filme" does not exist.', 45, $this->source); })()), "categoria", [], "any", false, false, false, 45), "nome", [], "any", false, false, false, 45), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"descricao\" class=\"form-label\">Descrição</label>
\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"descricao\" name=\"descricao\" rows=\"3\">";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["filme"]) || array_key_exists("filme", $context) ? $context["filme"] : (function () { throw new RuntimeError('Variable "filme" does not exist.', 50, $this->source); })()), "descricao", [], "any", false, false, false, 50), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"container text-center\">\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-start\">
\t\t\t\t\t\t\t\t\t";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 57
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, $context["photo"], "foto", [], "any", false, false, false, 58))), "html", null, true);
            echo "\" width=\"180\" heigth=\"180\"/>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_filmes");
        echo "\"><button class=\"btn btn-primary mt-2\">";
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 66, $this->source); })()), "Voltar")) : ("Voltar")), "html", null, true);
        echo "</button></a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

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
        return "filmes/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 66,  176 => 61,  167 => 58,  164 => 57,  160 => 56,  151 => 50,  143 => 45,  135 => 40,  129 => 36,  123 => 34,  117 => 32,  115 => 31,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/adminbase.html.twig' %}

{% block title %}Filme {% endblock %}

{% block content %}
\t<div
\t\tclass=\"content-wrapper mt-3\">
\t\t<!-- Main content -->
\t\t<section
\t\t\tclass=\"content\">
\t\t\t<!-- Default box -->
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<h3 class=\"card-title\">Detalhes do Filme</h3>

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

\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t<div class=\"col-4\">\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{% if(filme.foto == null) %}
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('imagens/semfoto.png') }}\" width=\"150\" heigth=\"150\">
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/filmes/' ~ filme.foto) }}\" width=\"150\" heigth=\"150\">
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"titulo\" class=\"form-label\">Título do Filme</label>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"titulo\" name=\"titulo\" type=\"text\" placeholder=\"Título do Filme\" aria-label=\"Titulo do Filme\" value=\"{{ filme.titulo }}\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"titulo\" class=\"form-label\">Categoria</label>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"categoria\" name=\"categoria\" type=\"text\" placeholder=\"Título do Filme\" aria-label=\"\" value=\"{{ filme.categoria.nome }}\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"descricao\" class=\"form-label\">Descrição</label>
\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"descricao\" name=\"descricao\" rows=\"3\">{{ filme.descricao }}</textarea>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"container text-center\">\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-start\">
\t\t\t\t\t\t\t\t\t{% for photo in photos %}
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/photos/' ~ photo.foto) }}\" width=\"180\" heigth=\"180\"/>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('admin_filmes') }}\"><button class=\"btn btn-primary mt-2\">{{ button_label|default('Voltar') }}</button></a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /.card -->
\t\t</section>
\t\t<!-- /.content -->
\t</div>
{% endblock %}
", "filmes/show.html.twig", "/home/beto/sinfonia/templates/filmes/show.html.twig");
    }
}
