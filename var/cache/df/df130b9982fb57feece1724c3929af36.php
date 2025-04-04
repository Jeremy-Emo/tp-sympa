<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* Admin/Article/list.html.twig */
class __TwigTemplate_77ed858d64bc1806fb90191d2d4942fd extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "Admin/Article/list.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Admin > Liste des articles ";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    <table class=\"table\">
        <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Titre</th>
                <th scope=\"col\">Date de Publication</th>
                <th scope=\"col\">Auteur</th>
                <th scope=\"col\">PDF</th>
                <th scope=\"col\">Delete</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 19
            yield "            <tr>
                <td><a href=\"/AdminArticle/update/";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "Id", [], "any", false, false, false, 20), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "Id", [], "any", false, false, false, 20), "html", null, true);
            yield "</a></td>
                <td><a href=\"/Article/show/";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "Id", [], "any", false, false, false, 21), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "Titre", [], "any", false, false, false, 21), "html", null, true);
            yield "</a></td>
                <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "DatePublication", [], "any", false, false, false, 22), "d/m/Y"), "html", null, true);
            yield "</td>
                <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "Auteur", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                <td><a href=\"/Article/pdf/";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "Id", [], "any", false, false, false, 24), "html", null, true);
            yield "\"><i class=\"bi bi-file-pdf\"></i></a></td>
                <td><form method=\"post\" action=\"/AdminArticle/delete\">
                        <input type=\"hidden\" value=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "Id", [], "any", false, false, false, 26), "html", null, true);
            yield "\" name=\"id\">
                        <input type=\"hidden\" value=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["token"] ?? null), "html", null, true);
            yield "\" name=\"token\">
                        <button type=\"submit\" class=\"btn btn-danger\">X</button>
                    </form>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "        </tbody>
    </table>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Admin/Article/list.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  132 => 33,  120 => 27,  116 => 26,  111 => 24,  107 => 23,  103 => 22,  97 => 21,  91 => 20,  88 => 19,  84 => 18,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} Admin > Liste des articles {% endblock %}

{% block body %}
    <table class=\"table\">
        <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Titre</th>
                <th scope=\"col\">Date de Publication</th>
                <th scope=\"col\">Auteur</th>
                <th scope=\"col\">PDF</th>
                <th scope=\"col\">Delete</th>
            </tr>
        </thead>
        <tbody>
        {% for article in articles %}
            <tr>
                <td><a href=\"/AdminArticle/update/{{ article.Id }}\">{{ article.Id }}</a></td>
                <td><a href=\"/Article/show/{{ article.Id }}\">{{ article.Titre }}</a></td>
                <td>{{ article.DatePublication|date('d/m/Y') }}</td>
                <td>{{ article.Auteur }}</td>
                <td><a href=\"/Article/pdf/{{ article.Id }}\"><i class=\"bi bi-file-pdf\"></i></a></td>
                <td><form method=\"post\" action=\"/AdminArticle/delete\">
                        <input type=\"hidden\" value=\"{{ article.Id }}\" name=\"id\">
                        <input type=\"hidden\" value=\"{{ token }}\" name=\"token\">
                        <button type=\"submit\" class=\"btn btn-danger\">X</button>
                    </form>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}", "Admin/Article/list.html.twig", "/var/www/html/src/View/Admin/Article/list.html.twig");
    }
}
