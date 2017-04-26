<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_bd839a623d41e65c7ad875f8876c26b53612d034a2fd2ba100c18e03a3c8b771 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_8bb4d3c4cf20388e39556d5ccdf6693919ff3c3cc2884cbdcf6be20905b25801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bb4d3c4cf20388e39556d5ccdf6693919ff3c3cc2884cbdcf6be20905b25801->enter($__internal_8bb4d3c4cf20388e39556d5ccdf6693919ff3c3cc2884cbdcf6be20905b25801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1c0e63fce087b52958828c9151f0868a3f09ee79b35cc05d46186b742e9e0a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c0e63fce087b52958828c9151f0868a3f09ee79b35cc05d46186b742e9e0a33->enter($__internal_1c0e63fce087b52958828c9151f0868a3f09ee79b35cc05d46186b742e9e0a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bb4d3c4cf20388e39556d5ccdf6693919ff3c3cc2884cbdcf6be20905b25801->leave($__internal_8bb4d3c4cf20388e39556d5ccdf6693919ff3c3cc2884cbdcf6be20905b25801_prof);

        
        $__internal_1c0e63fce087b52958828c9151f0868a3f09ee79b35cc05d46186b742e9e0a33->leave($__internal_1c0e63fce087b52958828c9151f0868a3f09ee79b35cc05d46186b742e9e0a33_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ac78b55546e1d7b0a880606824d47ad1d6fdb9c54fa6be06ded430b1e39b8663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac78b55546e1d7b0a880606824d47ad1d6fdb9c54fa6be06ded430b1e39b8663->enter($__internal_ac78b55546e1d7b0a880606824d47ad1d6fdb9c54fa6be06ded430b1e39b8663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e254a9850a80bbbc0bf71df2b4554696689dd4661ab3d6a07d50fd2099d2c528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e254a9850a80bbbc0bf71df2b4554696689dd4661ab3d6a07d50fd2099d2c528->enter($__internal_e254a9850a80bbbc0bf71df2b4554696689dd4661ab3d6a07d50fd2099d2c528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e254a9850a80bbbc0bf71df2b4554696689dd4661ab3d6a07d50fd2099d2c528->leave($__internal_e254a9850a80bbbc0bf71df2b4554696689dd4661ab3d6a07d50fd2099d2c528_prof);

        
        $__internal_ac78b55546e1d7b0a880606824d47ad1d6fdb9c54fa6be06ded430b1e39b8663->leave($__internal_ac78b55546e1d7b0a880606824d47ad1d6fdb9c54fa6be06ded430b1e39b8663_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3778361bd3ad4ff9a6de5433776bf4992a2121ee6bb6cdbc74d325813f3a83eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3778361bd3ad4ff9a6de5433776bf4992a2121ee6bb6cdbc74d325813f3a83eb->enter($__internal_3778361bd3ad4ff9a6de5433776bf4992a2121ee6bb6cdbc74d325813f3a83eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_227495f17ff46a2f233d961e1c33150169b92ae124bdbb332aca7a888ac7021a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_227495f17ff46a2f233d961e1c33150169b92ae124bdbb332aca7a888ac7021a->enter($__internal_227495f17ff46a2f233d961e1c33150169b92ae124bdbb332aca7a888ac7021a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_227495f17ff46a2f233d961e1c33150169b92ae124bdbb332aca7a888ac7021a->leave($__internal_227495f17ff46a2f233d961e1c33150169b92ae124bdbb332aca7a888ac7021a_prof);

        
        $__internal_3778361bd3ad4ff9a6de5433776bf4992a2121ee6bb6cdbc74d325813f3a83eb->leave($__internal_3778361bd3ad4ff9a6de5433776bf4992a2121ee6bb6cdbc74d325813f3a83eb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bcf9ebad88843fe35c1060cc5ee06e9ada44d003fb042f650e297803aa9556b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcf9ebad88843fe35c1060cc5ee06e9ada44d003fb042f650e297803aa9556b1->enter($__internal_bcf9ebad88843fe35c1060cc5ee06e9ada44d003fb042f650e297803aa9556b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8a262baa97e360dbdacf454bd34f3c7d074b0583ab36c1c94e630b479dc755df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a262baa97e360dbdacf454bd34f3c7d074b0583ab36c1c94e630b479dc755df->enter($__internal_8a262baa97e360dbdacf454bd34f3c7d074b0583ab36c1c94e630b479dc755df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_8a262baa97e360dbdacf454bd34f3c7d074b0583ab36c1c94e630b479dc755df->leave($__internal_8a262baa97e360dbdacf454bd34f3c7d074b0583ab36c1c94e630b479dc755df_prof);

        
        $__internal_bcf9ebad88843fe35c1060cc5ee06e9ada44d003fb042f650e297803aa9556b1->leave($__internal_bcf9ebad88843fe35c1060cc5ee06e9ada44d003fb042f650e297803aa9556b1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
