<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_37f668905e2e7628dce9aaebcfb0172ba9ea505753ed820d901e53bf77fbdfaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8fdc3ca02c3b91cab8099ce4f6efdfc5db3ce53f8585936c39b3e74dd6ec2c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8fdc3ca02c3b91cab8099ce4f6efdfc5db3ce53f8585936c39b3e74dd6ec2c4->enter($__internal_a8fdc3ca02c3b91cab8099ce4f6efdfc5db3ce53f8585936c39b3e74dd6ec2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_b3bc89e55c1d98ed7688199aa5a81eb4b95bac873b2b6e8fff2e6be7cacd7e7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3bc89e55c1d98ed7688199aa5a81eb4b95bac873b2b6e8fff2e6be7cacd7e7e->enter($__internal_b3bc89e55c1d98ed7688199aa5a81eb4b95bac873b2b6e8fff2e6be7cacd7e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8fdc3ca02c3b91cab8099ce4f6efdfc5db3ce53f8585936c39b3e74dd6ec2c4->leave($__internal_a8fdc3ca02c3b91cab8099ce4f6efdfc5db3ce53f8585936c39b3e74dd6ec2c4_prof);

        
        $__internal_b3bc89e55c1d98ed7688199aa5a81eb4b95bac873b2b6e8fff2e6be7cacd7e7e->leave($__internal_b3bc89e55c1d98ed7688199aa5a81eb4b95bac873b2b6e8fff2e6be7cacd7e7e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ee8d4ee8e5f46c2f58fd12a53c27a0fc0f6603de07b559d0bc17838c4f784c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee8d4ee8e5f46c2f58fd12a53c27a0fc0f6603de07b559d0bc17838c4f784c1->enter($__internal_1ee8d4ee8e5f46c2f58fd12a53c27a0fc0f6603de07b559d0bc17838c4f784c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7f1db7cbea91c05dd7a39a865fbda4f730fea41a187e0e10a3b93cdc8adeb47a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f1db7cbea91c05dd7a39a865fbda4f730fea41a187e0e10a3b93cdc8adeb47a->enter($__internal_7f1db7cbea91c05dd7a39a865fbda4f730fea41a187e0e10a3b93cdc8adeb47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7f1db7cbea91c05dd7a39a865fbda4f730fea41a187e0e10a3b93cdc8adeb47a->leave($__internal_7f1db7cbea91c05dd7a39a865fbda4f730fea41a187e0e10a3b93cdc8adeb47a_prof);

        
        $__internal_1ee8d4ee8e5f46c2f58fd12a53c27a0fc0f6603de07b559d0bc17838c4f784c1->leave($__internal_1ee8d4ee8e5f46c2f58fd12a53c27a0fc0f6603de07b559d0bc17838c4f784c1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b94bfa4655f5b6075c7d560fcf73ea7d8c1ebadc37100f6231bca0fef01cca61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b94bfa4655f5b6075c7d560fcf73ea7d8c1ebadc37100f6231bca0fef01cca61->enter($__internal_b94bfa4655f5b6075c7d560fcf73ea7d8c1ebadc37100f6231bca0fef01cca61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc20eaadf2db097899bb7e59cbe54e487da725866fcf7387d04415753cf1e11e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc20eaadf2db097899bb7e59cbe54e487da725866fcf7387d04415753cf1e11e->enter($__internal_dc20eaadf2db097899bb7e59cbe54e487da725866fcf7387d04415753cf1e11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_dc20eaadf2db097899bb7e59cbe54e487da725866fcf7387d04415753cf1e11e->leave($__internal_dc20eaadf2db097899bb7e59cbe54e487da725866fcf7387d04415753cf1e11e_prof);

        
        $__internal_b94bfa4655f5b6075c7d560fcf73ea7d8c1ebadc37100f6231bca0fef01cca61->leave($__internal_b94bfa4655f5b6075c7d560fcf73ea7d8c1ebadc37100f6231bca0fef01cca61_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
