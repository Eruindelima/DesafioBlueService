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

/* caracteristicas/show.html.twig */
class __TwigTemplate_55138e6764df247b5cbf23972ed3a8a4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "caracteristicas/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "caracteristicas/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "caracteristicas/show.html.twig", 1);
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

        echo "Caracteristica - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["caracteristica"]) || array_key_exists("caracteristica", $context) ? $context["caracteristica"] : (function () { throw new RuntimeError('Variable "caracteristica" does not exist.', 3, $this->source); })()), "cor", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1 class=\"fs-5 text\">Caracteristicas</h1>

    <table class=\"table \">
        <tbody>
            <tr>
                <th>#</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["caracteristica"]) || array_key_exists("caracteristica", $context) ? $context["caracteristica"] : (function () { throw new RuntimeError('Variable "caracteristica" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numero</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["caracteristica"]) || array_key_exists("caracteristica", $context) ? $context["caracteristica"] : (function () { throw new RuntimeError('Variable "caracteristica" does not exist.', 16, $this->source); })()), "numero", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cor</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["caracteristica"]) || array_key_exists("caracteristica", $context) ? $context["caracteristica"] : (function () { throw new RuntimeError('Variable "caracteristica" does not exist.', 20, $this->source); })()), "cor", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-outline-primary my-3\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_caracteristicas_index");
        echo "\"><i class=\"bi bi-arrow-left\"></i> Voltar</a>

    <a class=\"btn btn-outline-primary my-3\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_caracteristicas_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["caracteristica"]) || array_key_exists("caracteristica", $context) ? $context["caracteristica"] : (function () { throw new RuntimeError('Variable "caracteristica" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
        echo "\"><i class=\"bi bi-pencil\"></i> Editar</a>

    ";
        // line 29
        echo twig_include($this->env, $context, "caracteristicas/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "caracteristicas/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 29,  125 => 27,  120 => 25,  112 => 20,  105 => 16,  98 => 12,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Caracteristica - {{ caracteristica.cor }} {% endblock %}

{% block body %}
    <h1 class=\"fs-5 text\">Caracteristicas</h1>

    <table class=\"table \">
        <tbody>
            <tr>
                <th>#</th>
                <td>{{ caracteristica.id }}</td>
            </tr>
            <tr>
                <th>Numero</th>
                <td>{{ caracteristica.numero }}</td>
            </tr>
            <tr>
                <th>Cor</th>
                <td>{{ caracteristica.cor }}</td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-outline-primary my-3\" href=\"{{ path('app_caracteristicas_index') }}\"><i class=\"bi bi-arrow-left\"></i> Voltar</a>

    <a class=\"btn btn-outline-primary my-3\" href=\"{{ path('app_caracteristicas_edit', {'id': caracteristica.id}) }}\"><i class=\"bi bi-pencil\"></i> Editar</a>

    {{ include('caracteristicas/_delete_form.html.twig') }}
{% endblock %}
", "caracteristicas/show.html.twig", "/Users/eruindelimasilva/Desktop/dev/DesafioBlueService/templates/caracteristicas/show.html.twig");
    }
}
