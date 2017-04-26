<?php

/* user/new.html.twig */
class __TwigTemplate_65c9c59e0fb339cf725a31d69d39f1ba94249c1630a33a285cf09621328f3cac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
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
        $__internal_770387e74093e9a7ce797c9005100bf684d8879b0b8f63a2f2bf2ef47c5dce1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_770387e74093e9a7ce797c9005100bf684d8879b0b8f63a2f2bf2ef47c5dce1d->enter($__internal_770387e74093e9a7ce797c9005100bf684d8879b0b8f63a2f2bf2ef47c5dce1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_c418dbc41829f8d807a7c740ea9dd5467afc7e7c9f313270d3e845f263325247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c418dbc41829f8d807a7c740ea9dd5467afc7e7c9f313270d3e845f263325247->enter($__internal_c418dbc41829f8d807a7c740ea9dd5467afc7e7c9f313270d3e845f263325247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_770387e74093e9a7ce797c9005100bf684d8879b0b8f63a2f2bf2ef47c5dce1d->leave($__internal_770387e74093e9a7ce797c9005100bf684d8879b0b8f63a2f2bf2ef47c5dce1d_prof);

        
        $__internal_c418dbc41829f8d807a7c740ea9dd5467afc7e7c9f313270d3e845f263325247->leave($__internal_c418dbc41829f8d807a7c740ea9dd5467afc7e7c9f313270d3e845f263325247_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_047e46375797934ed61dc417d15309bcdce3babeb965b5abf835cdd3d2291886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_047e46375797934ed61dc417d15309bcdce3babeb965b5abf835cdd3d2291886->enter($__internal_047e46375797934ed61dc417d15309bcdce3babeb965b5abf835cdd3d2291886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d9085f7f80954df67ef03acd19b71875dadea4794c29a89e20b10c3014963d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d9085f7f80954df67ef03acd19b71875dadea4794c29a89e20b10c3014963d5->enter($__internal_5d9085f7f80954df67ef03acd19b71875dadea4794c29a89e20b10c3014963d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_5d9085f7f80954df67ef03acd19b71875dadea4794c29a89e20b10c3014963d5->leave($__internal_5d9085f7f80954df67ef03acd19b71875dadea4794c29a89e20b10c3014963d5_prof);

        
        $__internal_047e46375797934ed61dc417d15309bcdce3babeb965b5abf835cdd3d2291886->leave($__internal_047e46375797934ed61dc417d15309bcdce3babeb965b5abf835cdd3d2291886_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "user/new.html.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/app/Resources/views/user/new.html.twig");
    }
}
