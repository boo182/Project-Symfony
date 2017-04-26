<?php

/* post/show.html.twig */
class __TwigTemplate_aa2a2bd0e93818a0d8364ac8ba99a92ee243fe99636eda428da42f708de33147 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eea5b1a69b1382752358e4fdacd67ee4722bf3be891ce45e05c9e235bceb3878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eea5b1a69b1382752358e4fdacd67ee4722bf3be891ce45e05c9e235bceb3878->enter($__internal_eea5b1a69b1382752358e4fdacd67ee4722bf3be891ce45e05c9e235bceb3878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $__internal_d8e517232be8f8f914c37d8e067f67aeb3d30116250f1d69450d67867ba226a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e517232be8f8f914c37d8e067f67aeb3d30116250f1d69450d67867ba226a8->enter($__internal_d8e517232be8f8f914c37d8e067f67aeb3d30116250f1d69450d67867ba226a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eea5b1a69b1382752358e4fdacd67ee4722bf3be891ce45e05c9e235bceb3878->leave($__internal_eea5b1a69b1382752358e4fdacd67ee4722bf3be891ce45e05c9e235bceb3878_prof);

        
        $__internal_d8e517232be8f8f914c37d8e067f67aeb3d30116250f1d69450d67867ba226a8->leave($__internal_d8e517232be8f8f914c37d8e067f67aeb3d30116250f1d69450d67867ba226a8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c1d6ac92cd545999a5d8b9ded09659d5e0851713e46af7f64ede9b83e94921e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c1d6ac92cd545999a5d8b9ded09659d5e0851713e46af7f64ede9b83e94921e->enter($__internal_4c1d6ac92cd545999a5d8b9ded09659d5e0851713e46af7f64ede9b83e94921e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7cde37f45027699103523b935c55eceeb1b778941cb7fc7e4553f8d53b25b550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cde37f45027699103523b935c55eceeb1b778941cb7fc7e4553f8d53b25b550->enter($__internal_7cde37f45027699103523b935c55eceeb1b778941cb7fc7e4553f8d53b25b550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "content", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7cde37f45027699103523b935c55eceeb1b778941cb7fc7e4553f8d53b25b550->leave($__internal_7cde37f45027699103523b935c55eceeb1b778941cb7fc7e4553f8d53b25b550_prof);

        
        $__internal_4c1d6ac92cd545999a5d8b9ded09659d5e0851713e46af7f64ede9b83e94921e->leave($__internal_4c1d6ac92cd545999a5d8b9ded09659d5e0851713e46af7f64ede9b83e94921e_prof);

    }

    public function getTemplateName()
    {
        return "post/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 41,  111 => 39,  105 => 36,  99 => 33,  87 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Post</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ post.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ post.title }}</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>{{ post.content }}</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>{% if post.created %}{{ post.created|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>{% if post.updated %}{{ post.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('post_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('post_edit', { 'id': post.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "post/show.html.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/app/Resources/views/post/show.html.twig");
    }
}
