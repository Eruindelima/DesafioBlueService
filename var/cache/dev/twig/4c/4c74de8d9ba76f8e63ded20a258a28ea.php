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

/* store/show.html.twig */
class __TwigTemplate_2f0d309798f37efe0fee6d7b80312137 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "store/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "store/show.html.twig"));

        $this->parent = $this->loadTemplate("base_loja.html.twig", "store/show.html.twig", 1);
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

        echo "Produto - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new RuntimeError('Variable "produto" does not exist.', 3, $this->source); })()), "nome", [], "any", false, false, false, 3), "html", null, true);
        
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
<div class=\"row\">
    <div class=\"col-5 col-xs-12\">
        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new RuntimeError('Variable "produto" does not exist.', 9, $this->source); })()), "imagem", [], "any", false, false, false, 9), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new RuntimeError('Variable "produto" does not exist.', 9, $this->source); })()), "nome", [], "any", false, false, false, 9), "html", null, true);
        echo "\" class=\"img-thumbnail card-img-top\" />
    </div>

    <div class=\"col-7\">
        <h1 class=\"fs-2\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new RuntimeError('Variable "produto" does not exist.', 13, $this->source); })()), "nome", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
        <p class=\"fs-5 text\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new RuntimeError('Variable "produto" does not exist.', 14, $this->source); })()), "descricao", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
        <p class=\"fs-4 text\">R\$ ";
        // line 15
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new RuntimeError('Variable "produto" does not exist.', 15, $this->source); })()), "preco", [], "any", false, false, false, 15), 2, ",", "."), "html", null, true);
        echo "</p>

        <p>
            <span class=\"fw-bolder\">Cor: </span> ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new RuntimeError('Variable "produto" does not exist.', 18, $this->source); })()), "getCaracteristica", [], "any", false, false, false, 18), "cor", [], "any", false, false, false, 18), "html", null, true);
        echo "
            <br />
            <span class=\"fw-bolder\">Número: </span> ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new RuntimeError('Variable "produto" does not exist.', 20, $this->source); })()), "getCaracteristica", [], "any", false, false, false, 20), "numero", [], "any", false, false, false, 20), "html", null, true);
        echo "
        </p>

        <p>
            <span class=\"fw-bolder\">Categorias: </span>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new RuntimeError('Variable "produto" does not exist.', 25, $this->source); })()), "getProdutoCategoria", [], "method", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 26
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "nome", [], "any", false, false, false, 26), "html", null, true);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </p>
    </div>
</div>

<div class=\"row\">
    <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produtos_relacionados"]) || array_key_exists("produtos_relacionados", $context) ? $context["produtos_relacionados"] : (function () { throw new RuntimeError('Variable "produtos_relacionados" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produto_relacionados"]) {
            // line 35
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["produto_relacionados"], "id", [], "any", false, false, false, 35) != twig_get_attribute($this->env, $this->source, (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new RuntimeError('Variable "produto" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35))) {
                // line 36
                echo "        <div class=\"col\">
            <div class=\"card h-100\">
                <img src=\"";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto_relacionados"], "imagem", [], "any", false, false, false, 38), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto_relacionados"], "nome", [], "any", false, false, false, 38), "html", null, true);
                echo "\" class=\"img-thumbnail card-img-top\" />
                <div class=\"card-body\">
                    <p class=\"card-title fs-5 fw-semibold text\">";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto_relacionados"], "nome", [], "any", false, false, false, 40), "html", null, true);
                echo "</p>
                    <p class=\"card-text fw-semibold\">R\$ ";
                // line 41
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto_relacionados"], "preco", [], "any", false, false, false, 41), 2, ",", "."), "html", null, true);
                echo "</p>

                    <div class=\"d-flex flex-column justify-content-between\">
                        <div>
                            <span class=\"fw-semibold\">Número: </span> ";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produto_relacionados"], "getCaracteristica", [], "any", false, false, false, 45), "numero", [], "any", false, false, false, 45), "html", null, true);
                echo "
                        </div>

                        <div>
                            <span class=\"fw-semibold\">Cor: </span> ";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produto_relacionados"], "getCaracteristica", [], "any", false, false, false, 49), "cor", [], "any", false, false, false, 49), "html", null, true);
                echo "
                        </div>

                        <div>
                            <span class=\"fw-semibold\">Categorias: </span>
                            ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["produto_relacionados"], "getProdutoCategoria", [], "method", false, false, false, 54));
                foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
                    // line 55
                    echo "                           <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_store_categoria_view", ["categoria" => twig_get_attribute($this->env, $this->source, $context["categoria"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "nome", [], "any", false, false, false, 55), "html", null, true);
                    echo "</a>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "                        </div>

                        <a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_store_view", ["slug" => twig_get_attribute($this->env, $this->source, $context["produto_relacionados"], "slug", [], "any", false, false, false, 59)]), "html", null, true);
                echo "\"
                            class=\"card-link btn btn-outline-primary mt-4\">Adicionar ao carrinho</a>
                    </div>


                </div>
            </div>
        </div>
        ";
            }
            // line 68
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produto_relacionados'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "store/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 69,  226 => 68,  214 => 59,  210 => 57,  199 => 55,  195 => 54,  187 => 49,  180 => 45,  173 => 41,  169 => 40,  162 => 38,  158 => 36,  155 => 35,  151 => 34,  143 => 28,  134 => 26,  130 => 25,  122 => 20,  117 => 18,  111 => 15,  107 => 14,  103 => 13,  94 => 9,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_loja.html.twig' %}

{% block title %}Produto - {{ produto.nome }}{% endblock %}

{% block body %}

<div class=\"row\">
    <div class=\"col-5 col-xs-12\">
        <img src=\"{{produto.imagem}}\" alt=\"{{produto.nome}}\" class=\"img-thumbnail card-img-top\" />
    </div>

    <div class=\"col-7\">
        <h1 class=\"fs-2\">{{ produto.nome }}</h1>
        <p class=\"fs-5 text\">{{ produto.descricao }}</p>
        <p class=\"fs-4 text\">R\$ {{produto.preco|number_format(2, ',', '.')}}</p>

        <p>
            <span class=\"fw-bolder\">Cor: </span> {{ produto.getCaracteristica.cor }}
            <br />
            <span class=\"fw-bolder\">Número: </span> {{ produto.getCaracteristica.numero }}
        </p>

        <p>
            <span class=\"fw-bolder\">Categorias: </span>
            {% for categoria in produto.getProdutoCategoria() %}
            {{categoria.nome}}
            {% endfor %}
        </p>
    </div>
</div>

<div class=\"row\">
    <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
        {% for produto_relacionados in produtos_relacionados %}
        {% if(produto_relacionados.id != produto.id) %}
        <div class=\"col\">
            <div class=\"card h-100\">
                <img src=\"{{produto_relacionados.imagem}}\" alt=\"{{produto_relacionados.nome}}\" class=\"img-thumbnail card-img-top\" />
                <div class=\"card-body\">
                    <p class=\"card-title fs-5 fw-semibold text\">{{produto_relacionados.nome}}</p>
                    <p class=\"card-text fw-semibold\">R\$ {{produto_relacionados.preco|number_format(2, ',', '.')}}</p>

                    <div class=\"d-flex flex-column justify-content-between\">
                        <div>
                            <span class=\"fw-semibold\">Número: </span> {{produto_relacionados.getCaracteristica.numero}}
                        </div>

                        <div>
                            <span class=\"fw-semibold\">Cor: </span> {{produto_relacionados.getCaracteristica.cor}}
                        </div>

                        <div>
                            <span class=\"fw-semibold\">Categorias: </span>
                            {% for categoria in produto_relacionados.getProdutoCategoria() %}
                           <a href=\"{{path('app_store_categoria_view', {'categoria': categoria.id})}}\">{{categoria.nome}}</a>
                            {% endfor %}
                        </div>

                        <a href=\"{{ path('app_store_view', {'slug': produto_relacionados.slug}) }}\"
                            class=\"card-link btn btn-outline-primary mt-4\">Adicionar ao carrinho</a>
                    </div>


                </div>
            </div>
        </div>
        {% endif %}
        {% endfor %}
    </div>
</div>
{% endblock %}", "store/show.html.twig", "/Users/eruindelimasilva/Desktop/dev/DesafioBlueService/templates/store/show.html.twig");
    }
}
