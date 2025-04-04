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

/* Admin/Article/add.html.twig */
class __TwigTemplate_cd7e5194d891912540cd53770fa4002d extends Template
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
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "Admin/Article/add.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "ADMIN - ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield " - Ajout d'un Article ";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield " <link rel=\"stylesheet\" href=\"/assets/css/style_article_add.css\">
";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "    <h1>Ajout Article</h1>

    <form method=\"post\" enctype=\"multipart/form-data\">

        <div class=\"mb-3\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Saisir un titre\" name=\"Titre\">
        </div>

        <div class=\"mb-3\">
            <textarea class=\"form-control\" name=\"Description\" rows=\"3\"></textarea>
        </div>

        <div class=\"mb-3\">
            <input type=\"date\" class=\"form-control\" name=\"DatePublication\">
        </div>

        <div class=\"mb-3\">
            <select class=\"form-select\" name=\"Auteur\">
                <option value=\"Thomas\">Thomas</option>
                <option value=\"Timéo\">Timéo</option>
                <option value=\"Alexandre\">Alexandre</option>
                <option value=\"Antoine\">Antoine</option>
                <option value=\"Laura\">Laura</option>
            </select>
        </div>

        <div class=\"mb-3\">
            <input type=\"file\" class=\"custom-file-input\" name=\"Image\">
        </div>


        <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
    </form>


";
        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 47
        yield "    <script src=\"/assets/js/script_article_add.js\"></script>
 ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Admin/Article/add.html.twig";
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
        return array (  134 => 47,  127 => 46,  87 => 9,  80 => 8,  74 => 5,  67 => 4,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}ADMIN - {{ parent() }} - Ajout d'un Article {% endblock %}

{% block css %}
 <link rel=\"stylesheet\" href=\"/assets/css/style_article_add.css\">
{% endblock %}

{% block body %}
    <h1>Ajout Article</h1>

    <form method=\"post\" enctype=\"multipart/form-data\">

        <div class=\"mb-3\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Saisir un titre\" name=\"Titre\">
        </div>

        <div class=\"mb-3\">
            <textarea class=\"form-control\" name=\"Description\" rows=\"3\"></textarea>
        </div>

        <div class=\"mb-3\">
            <input type=\"date\" class=\"form-control\" name=\"DatePublication\">
        </div>

        <div class=\"mb-3\">
            <select class=\"form-select\" name=\"Auteur\">
                <option value=\"Thomas\">Thomas</option>
                <option value=\"Timéo\">Timéo</option>
                <option value=\"Alexandre\">Alexandre</option>
                <option value=\"Antoine\">Antoine</option>
                <option value=\"Laura\">Laura</option>
            </select>
        </div>

        <div class=\"mb-3\">
            <input type=\"file\" class=\"custom-file-input\" name=\"Image\">
        </div>


        <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
    </form>


{% endblock %}

{% block javascript %}
    <script src=\"/assets/js/script_article_add.js\"></script>
 {% endblock %}", "Admin/Article/add.html.twig", "/var/www/html/src/View/Admin/Article/add.html.twig");
    }
}
