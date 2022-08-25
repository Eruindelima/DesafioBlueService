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

/* store/index.html.twig */
class __TwigTemplate_de914361ebee193e7525c3cca9ff6e89 extends Template
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
        return "base_loja.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "store/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "store/index.html.twig"));

        $this->parent = $this->loadTemplate("base_loja.html.twig", "store/index.html.twig", 1);
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

        echo "BlueService Store";
        
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
        echo "
<div class=\"container\">
    <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produtos"]) || array_key_exists("produtos", $context) ? $context["produtos"] : (function () { throw new RuntimeError('Variable "produtos" does not exist.', 9, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produto"]) {
            // line 10
            echo "        <div class=\"col\">
            <div class=\"card h-100\">
                <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "imagem", [], "any", false, false, false, 12), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "nome", [], "any", false, false, false, 12), "html", null, true);
            echo "\" class=\"img-thumbnail card-img-top\" />
                <div class=\"card-body\">
                    <p class=\"card-title fs-5 fw-semibold text\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "nome", [], "any", false, false, false, 14), "html", null, true);
            echo "</p>
                    <p class=\"card-text\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "descricao", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
                    <p class=\"card-text fw-semibold\">R\$ ";
            // line 16
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "preco", [], "any", false, false, false, 16), 2, ",", "."), "html", null, true);
            echo "</p>

                    <div class=\"d-flex flex-column justify-content-between\">
                        <div>
                            <span class=\"fw-semibold\">Número: </span> ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produto"], "getCaracteristica", [], "any", false, false, false, 20), "numero", [], "any", false, false, false, 20), "html", null, true);
            echo "
                        </div>

                        <div>
                            <span class=\"fw-semibold\">Cor: </span> ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produto"], "getCaracteristica", [], "any", false, false, false, 24), "cor", [], "any", false, false, false, 24), "html", null, true);
            echo "
                        </div>

                        <div>
                            <span class=\"fw-semibold\">Categorias: </span>
                            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["produto"], "getProdutoCategoria", [], "method", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
                // line 30
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "nome", [], "any", false, false, false, 30), "html", null, true);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                        </div>

                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_store_view", ["slug" => twig_get_attribute($this->env, $this->source, $context["produto"], "slug", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" class=\"card-link btn btn-outline-primary mt-4\">Adicionar ao carrinho</a>
                    </div>

                    
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "        no records found
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "store/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 44,  169 => 42,  156 => 34,  152 => 32,  143 => 30,  139 => 29,  131 => 24,  124 => 20,  117 => 16,  113 => 15,  109 => 14,  102 => 12,  98 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_loja.html.twig' %}

{% block title %}BlueService Store{% endblock %}

{% block body %}

<div class=\"container\">
    <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
        {% for produto in produtos %}
        <div class=\"col\">
            <div class=\"card h-100\">
                <img src=\"{{produto.imagem}}\" alt=\"{{produto.nome}}\" class=\"img-thumbnail card-img-top\" />
                <div class=\"card-body\">
                    <p class=\"card-title fs-5 fw-semibold text\">{{produto.nome}}</p>
                    <p class=\"card-text\">{{produto.descricao}}</p>
                    <p class=\"card-text fw-semibold\">R\$ {{produto.preco|number_format(2, ',', '.')}}</p>

                    <div class=\"d-flex flex-column justify-content-between\">
                        <div>
                            <span class=\"fw-semibold\">Número: </span> {{produto.getCaracteristica.numero}}
                        </div>

                        <div>
                            <span class=\"fw-semibold\">Cor: </span> {{produto.getCaracteristica.cor}}
                        </div>

                        <div>
                            <span class=\"fw-semibold\">Categorias: </span>
                            {% for categoria in produto.getProdutoCategoria() %}
                                {{categoria.nome}}
                            {% endfor %}
                        </div>

                        <a href=\"{{ path('app_store_view', {'slug': produto.slug}) }}\" class=\"card-link btn btn-outline-primary mt-4\">Adicionar ao carrinho</a>
                    </div>

                    
                </div>
            </div>
        </div>
        {% else %}
        no records found
        {% endfor %}
    </div>
</div>
{% endblock %}", "store/index.html.twig", "/Users/eruindelimasilva/Desktop/dev/DesafioBlueService/templates/store/index.html.twig");
    }
}
