<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_f9796e39818c4a302377ecff98baf95854aecd047486baab7ec6833ff2aee74c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6c60907272f5a8c645ca39b3244754abe2e6929b9f7578ca5fad5cb03469896 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6c60907272f5a8c645ca39b3244754abe2e6929b9f7578ca5fad5cb03469896->enter($__internal_a6c60907272f5a8c645ca39b3244754abe2e6929b9f7578ca5fad5cb03469896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_75c78745155b56373f64f08c246540f0290a85d8d301d46b0e477651b2bd68aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c78745155b56373f64f08c246540f0290a85d8d301d46b0e477651b2bd68aa->enter($__internal_75c78745155b56373f64f08c246540f0290a85d8d301d46b0e477651b2bd68aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6c60907272f5a8c645ca39b3244754abe2e6929b9f7578ca5fad5cb03469896->leave($__internal_a6c60907272f5a8c645ca39b3244754abe2e6929b9f7578ca5fad5cb03469896_prof);

        
        $__internal_75c78745155b56373f64f08c246540f0290a85d8d301d46b0e477651b2bd68aa->leave($__internal_75c78745155b56373f64f08c246540f0290a85d8d301d46b0e477651b2bd68aa_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ed5dcbb5902a841344c299e9c10526632091f38caec5dfcd10d6b2b489f48d85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed5dcbb5902a841344c299e9c10526632091f38caec5dfcd10d6b2b489f48d85->enter($__internal_ed5dcbb5902a841344c299e9c10526632091f38caec5dfcd10d6b2b489f48d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_2973a3aa449fe8fd42a44ab03ff98c615bc656406099c4c81db9d77853afac39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2973a3aa449fe8fd42a44ab03ff98c615bc656406099c4c81db9d77853afac39->enter($__internal_2973a3aa449fe8fd42a44ab03ff98c615bc656406099c4c81db9d77853afac39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_2973a3aa449fe8fd42a44ab03ff98c615bc656406099c4c81db9d77853afac39->leave($__internal_2973a3aa449fe8fd42a44ab03ff98c615bc656406099c4c81db9d77853afac39_prof);

        
        $__internal_ed5dcbb5902a841344c299e9c10526632091f38caec5dfcd10d6b2b489f48d85->leave($__internal_ed5dcbb5902a841344c299e9c10526632091f38caec5dfcd10d6b2b489f48d85_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a7f3a4de8a797125e79f2f915fd394eb91cbc8a67b65f82a84dd3a0de309c205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7f3a4de8a797125e79f2f915fd394eb91cbc8a67b65f82a84dd3a0de309c205->enter($__internal_a7f3a4de8a797125e79f2f915fd394eb91cbc8a67b65f82a84dd3a0de309c205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0f7371213157a4eb9b60d9ea933f157b050aac6bf8493202f6a1d401bb5cb363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f7371213157a4eb9b60d9ea933f157b050aac6bf8493202f6a1d401bb5cb363->enter($__internal_0f7371213157a4eb9b60d9ea933f157b050aac6bf8493202f6a1d401bb5cb363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_0f7371213157a4eb9b60d9ea933f157b050aac6bf8493202f6a1d401bb5cb363->leave($__internal_0f7371213157a4eb9b60d9ea933f157b050aac6bf8493202f6a1d401bb5cb363_prof);

        
        $__internal_a7f3a4de8a797125e79f2f915fd394eb91cbc8a67b65f82a84dd3a0de309c205->leave($__internal_a7f3a4de8a797125e79f2f915fd394eb91cbc8a67b65f82a84dd3a0de309c205_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
