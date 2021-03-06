<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e32fe7bbc587592d7d02b52fb0d248e7f6247282752466e0f9c5031b2c7e618c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe636d7a05c457156d315c5e188643b01dd3248377d84148ba0248e5eeb3a72e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe636d7a05c457156d315c5e188643b01dd3248377d84148ba0248e5eeb3a72e->enter($__internal_fe636d7a05c457156d315c5e188643b01dd3248377d84148ba0248e5eeb3a72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_85e3f4aef01c422ab342fabd7a6f403cf045f206c60df4cc7264c1b601e00be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e3f4aef01c422ab342fabd7a6f403cf045f206c60df4cc7264c1b601e00be5->enter($__internal_85e3f4aef01c422ab342fabd7a6f403cf045f206c60df4cc7264c1b601e00be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe636d7a05c457156d315c5e188643b01dd3248377d84148ba0248e5eeb3a72e->leave($__internal_fe636d7a05c457156d315c5e188643b01dd3248377d84148ba0248e5eeb3a72e_prof);

        
        $__internal_85e3f4aef01c422ab342fabd7a6f403cf045f206c60df4cc7264c1b601e00be5->leave($__internal_85e3f4aef01c422ab342fabd7a6f403cf045f206c60df4cc7264c1b601e00be5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f119f34aad055523f7fde2a24f7f574b524933948a1b5d1e16db281b2297e236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f119f34aad055523f7fde2a24f7f574b524933948a1b5d1e16db281b2297e236->enter($__internal_f119f34aad055523f7fde2a24f7f574b524933948a1b5d1e16db281b2297e236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_28a68684991f6a31ec44ffe0226864249aa3d0e7bf82c088c630275e8c0cc049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a68684991f6a31ec44ffe0226864249aa3d0e7bf82c088c630275e8c0cc049->enter($__internal_28a68684991f6a31ec44ffe0226864249aa3d0e7bf82c088c630275e8c0cc049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_28a68684991f6a31ec44ffe0226864249aa3d0e7bf82c088c630275e8c0cc049->leave($__internal_28a68684991f6a31ec44ffe0226864249aa3d0e7bf82c088c630275e8c0cc049_prof);

        
        $__internal_f119f34aad055523f7fde2a24f7f574b524933948a1b5d1e16db281b2297e236->leave($__internal_f119f34aad055523f7fde2a24f7f574b524933948a1b5d1e16db281b2297e236_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_defc21249636fd6052bcf9ec709e992dd26920c129e1d71022714f0e244dcc61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_defc21249636fd6052bcf9ec709e992dd26920c129e1d71022714f0e244dcc61->enter($__internal_defc21249636fd6052bcf9ec709e992dd26920c129e1d71022714f0e244dcc61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f13cf8c2ac230daba5245278d9da9cd5714bf6686c2b590944ee6d534593a458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f13cf8c2ac230daba5245278d9da9cd5714bf6686c2b590944ee6d534593a458->enter($__internal_f13cf8c2ac230daba5245278d9da9cd5714bf6686c2b590944ee6d534593a458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f13cf8c2ac230daba5245278d9da9cd5714bf6686c2b590944ee6d534593a458->leave($__internal_f13cf8c2ac230daba5245278d9da9cd5714bf6686c2b590944ee6d534593a458_prof);

        
        $__internal_defc21249636fd6052bcf9ec709e992dd26920c129e1d71022714f0e244dcc61->leave($__internal_defc21249636fd6052bcf9ec709e992dd26920c129e1d71022714f0e244dcc61_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_de6aac070704a964b1539a587c2e475c2305bf0376a7390d856d36b988b137fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de6aac070704a964b1539a587c2e475c2305bf0376a7390d856d36b988b137fc->enter($__internal_de6aac070704a964b1539a587c2e475c2305bf0376a7390d856d36b988b137fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dbc87a8388805616e8ca0efc90275dedf794eb1bb0a046724818244cccb25737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc87a8388805616e8ca0efc90275dedf794eb1bb0a046724818244cccb25737->enter($__internal_dbc87a8388805616e8ca0efc90275dedf794eb1bb0a046724818244cccb25737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dbc87a8388805616e8ca0efc90275dedf794eb1bb0a046724818244cccb25737->leave($__internal_dbc87a8388805616e8ca0efc90275dedf794eb1bb0a046724818244cccb25737_prof);

        
        $__internal_de6aac070704a964b1539a587c2e475c2305bf0376a7390d856d36b988b137fc->leave($__internal_de6aac070704a964b1539a587c2e475c2305bf0376a7390d856d36b988b137fc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
