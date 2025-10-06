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

/* revendication/index.html.twig */
class __TwigTemplate_e42f898f67e3dee798db02d914fa8319 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "revendication/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "revendication/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Revendication index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container mt-5\">
    <h1 class=\"mb-4\">Revendications</h1>

    <div class=\"mb-3 text-end\">
        <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revendication_new");
        yield "\" class=\"btn btn-primary\">
            <i class=\"bi bi-plus-lg\"></i> Créer une nouvelle revendication
        </a>
    </div>

    <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover align-middle\">
            <thead class=\"table-dark\">
                <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Date de création</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["revendications"]) || array_key_exists("revendications", $context) ? $context["revendications"] : (function () { throw new RuntimeError('Variable "revendications" does not exist.', 28, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["revendication"]) {
            // line 29
            yield "                <tr>
                    <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "id", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                    <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "titre", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                    <td>";
            // line 32
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "description", [], "any", false, false, false, 32)) > 50)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "description", [], "any", false, false, false, 32), 0, 50) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "description", [], "any", false, false, false, 32), "html", null, true)));
            yield "</td>
                    <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "dateCreation", [], "any", false, false, false, 33), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                    <td>
                        ";
            // line 35
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "status", [], "any", false, false, false, 35) == "En attente")) {
                // line 36
                yield "                            <span class=\"badge bg-warning text-dark\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "status", [], "any", false, false, false, 36), "html", null, true);
                yield "</span>
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 37
$context["revendication"], "status", [], "any", false, false, false, 37) == "Approuvé")) {
                // line 38
                yield "                            <span class=\"badge bg-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "status", [], "any", false, false, false, 38), "html", null, true);
                yield "</span>
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 39
$context["revendication"], "status", [], "any", false, false, false, 39) == "Rejeté")) {
                // line 40
                yield "                            <span class=\"badge bg-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "status", [], "any", false, false, false, 40), "html", null, true);
                yield "</span>
                        ";
            } else {
                // line 42
                yield "                            <span class=\"badge bg-secondary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "status", [], "any", false, false, false, 42), "html", null, true);
                yield "</span>
                        ";
            }
            // line 44
            yield "                    </td>
                    <td>
                        <a href=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revendication_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info text-white\">
                            <i class=\"bi bi-eye\"></i> Voir
                        </a>
                        <a href=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revendication_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning text-white\">
                            <i class=\"bi bi-pencil\"></i> Éditer
                        </a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 54
        if (!$context['_iterated']) {
            // line 55
            yield "                <tr>
                    <td colspan=\"6\" class=\"text-center\">Aucun enregistrement trouvé</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['revendication'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "revendication/index.html.twig";
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
        return array (  211 => 59,  202 => 55,  200 => 54,  190 => 49,  184 => 46,  180 => 44,  174 => 42,  168 => 40,  166 => 39,  161 => 38,  159 => 37,  154 => 36,  152 => 35,  147 => 33,  143 => 32,  139 => 31,  135 => 30,  132 => 29,  127 => 28,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Revendication index{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"mb-4\">Revendications</h1>

    <div class=\"mb-3 text-end\">
        <a href=\"{{ path('app_revendication_new') }}\" class=\"btn btn-primary\">
            <i class=\"bi bi-plus-lg\"></i> Créer une nouvelle revendication
        </a>
    </div>

    <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover align-middle\">
            <thead class=\"table-dark\">
                <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Date de création</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for revendication in revendications %}
                <tr>
                    <td>{{ revendication.id }}</td>
                    <td>{{ revendication.titre }}</td>
                    <td>{{ revendication.description|length > 50 ? revendication.description|slice(0, 50) ~ '...' : revendication.description }}</td>
                    <td>{{ revendication.dateCreation|date('d/m/Y H:i') }}</td>
                    <td>
                        {% if revendication.status == 'En attente' %}
                            <span class=\"badge bg-warning text-dark\">{{ revendication.status }}</span>
                        {% elseif revendication.status == 'Approuvé' %}
                            <span class=\"badge bg-success\">{{ revendication.status }}</span>
                        {% elseif revendication.status == 'Rejeté' %}
                            <span class=\"badge bg-danger\">{{ revendication.status }}</span>
                        {% else %}
                            <span class=\"badge bg-secondary\">{{ revendication.status }}</span>
                        {% endif %}
                    </td>
                    <td>
                        <a href=\"{{ path('app_revendication_show', {'id': revendication.id}) }}\" class=\"btn btn-sm btn-info text-white\">
                            <i class=\"bi bi-eye\"></i> Voir
                        </a>
                        <a href=\"{{ path('app_revendication_edit', {'id': revendication.id}) }}\" class=\"btn btn-sm btn-warning text-white\">
                            <i class=\"bi bi-pencil\"></i> Éditer
                        </a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"6\" class=\"text-center\">Aucun enregistrement trouvé</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}

", "revendication/index.html.twig", "/home/fitiavana/Musique/symfony/hafa/revendications/templates/revendication/index.html.twig");
    }
}
