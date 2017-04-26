<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_6234ed2d1b80a3d025fbc947a015147b38dd903d27074f48fada43ff754e9afd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_438ee6d29dc4ad2db86b0bee063ad97883538ea41d2b67e1ca82e8930f4e0252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_438ee6d29dc4ad2db86b0bee063ad97883538ea41d2b67e1ca82e8930f4e0252->enter($__internal_438ee6d29dc4ad2db86b0bee063ad97883538ea41d2b67e1ca82e8930f4e0252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_fd26c2232b027c80aa12092772cd6bdc3349a6e5f85a54bddb85753477d6c686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd26c2232b027c80aa12092772cd6bdc3349a6e5f85a54bddb85753477d6c686->enter($__internal_fd26c2232b027c80aa12092772cd6bdc3349a6e5f85a54bddb85753477d6c686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_438ee6d29dc4ad2db86b0bee063ad97883538ea41d2b67e1ca82e8930f4e0252->leave($__internal_438ee6d29dc4ad2db86b0bee063ad97883538ea41d2b67e1ca82e8930f4e0252_prof);

        
        $__internal_fd26c2232b027c80aa12092772cd6bdc3349a6e5f85a54bddb85753477d6c686->leave($__internal_fd26c2232b027c80aa12092772cd6bdc3349a6e5f85a54bddb85753477d6c686_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_03f75c875d79444233eaef947293510fc096a5d8a81c0f89b1aec6e59a440059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03f75c875d79444233eaef947293510fc096a5d8a81c0f89b1aec6e59a440059->enter($__internal_03f75c875d79444233eaef947293510fc096a5d8a81c0f89b1aec6e59a440059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e1254f024bd70aad835ab3157b05f1680fad93c8e68f05b6a42a06855e3d5d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1254f024bd70aad835ab3157b05f1680fad93c8e68f05b6a42a06855e3d5d7b->enter($__internal_e1254f024bd70aad835ab3157b05f1680fad93c8e68f05b6a42a06855e3d5d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e1254f024bd70aad835ab3157b05f1680fad93c8e68f05b6a42a06855e3d5d7b->leave($__internal_e1254f024bd70aad835ab3157b05f1680fad93c8e68f05b6a42a06855e3d5d7b_prof);

        
        $__internal_03f75c875d79444233eaef947293510fc096a5d8a81c0f89b1aec6e59a440059->leave($__internal_03f75c875d79444233eaef947293510fc096a5d8a81c0f89b1aec6e59a440059_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_494de84ad31f1ede5c22fcf346b25ec807a628a04371b21232d4fa022663a9e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_494de84ad31f1ede5c22fcf346b25ec807a628a04371b21232d4fa022663a9e7->enter($__internal_494de84ad31f1ede5c22fcf346b25ec807a628a04371b21232d4fa022663a9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_247c80510a08c6b917630699daeb29315cbc3a3d45cd279a639abc9fc80c0588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_247c80510a08c6b917630699daeb29315cbc3a3d45cd279a639abc9fc80c0588->enter($__internal_247c80510a08c6b917630699daeb29315cbc3a3d45cd279a639abc9fc80c0588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_247c80510a08c6b917630699daeb29315cbc3a3d45cd279a639abc9fc80c0588->leave($__internal_247c80510a08c6b917630699daeb29315cbc3a3d45cd279a639abc9fc80c0588_prof);

        
        $__internal_494de84ad31f1ede5c22fcf346b25ec807a628a04371b21232d4fa022663a9e7->leave($__internal_494de84ad31f1ede5c22fcf346b25ec807a628a04371b21232d4fa022663a9e7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
