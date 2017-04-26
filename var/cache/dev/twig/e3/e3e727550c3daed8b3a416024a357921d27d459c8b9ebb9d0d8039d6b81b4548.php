<?php

/* post/new.html.twig */
class __TwigTemplate_18e817fce994ac8929274390d8ae054d6850db28df486d3e36afc77b05dd4811 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/new.html.twig", 1);
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
        $__internal_5d9b5750107a453982468d43916343fec44896b08cc916c34d7540e68d15262c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d9b5750107a453982468d43916343fec44896b08cc916c34d7540e68d15262c->enter($__internal_5d9b5750107a453982468d43916343fec44896b08cc916c34d7540e68d15262c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/new.html.twig"));

        $__internal_47c90e208fbc3e9d21768778b9bac670ebda2407148dba45056992fb97bd7e47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47c90e208fbc3e9d21768778b9bac670ebda2407148dba45056992fb97bd7e47->enter($__internal_47c90e208fbc3e9d21768778b9bac670ebda2407148dba45056992fb97bd7e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d9b5750107a453982468d43916343fec44896b08cc916c34d7540e68d15262c->leave($__internal_5d9b5750107a453982468d43916343fec44896b08cc916c34d7540e68d15262c_prof);

        
        $__internal_47c90e208fbc3e9d21768778b9bac670ebda2407148dba45056992fb97bd7e47->leave($__internal_47c90e208fbc3e9d21768778b9bac670ebda2407148dba45056992fb97bd7e47_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9882bfe079a22d05b76e304c6c9ecdd57f71b4fcd8cd75417adc80177bcd9e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9882bfe079a22d05b76e304c6c9ecdd57f71b4fcd8cd75417adc80177bcd9e5->enter($__internal_c9882bfe079a22d05b76e304c6c9ecdd57f71b4fcd8cd75417adc80177bcd9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2122627f7a4ce14d28eacb67c41bed3db59261dcc8b4e3ad294e8a6c297c9084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2122627f7a4ce14d28eacb67c41bed3db59261dcc8b4e3ad294e8a6c297c9084->enter($__internal_2122627f7a4ce14d28eacb67c41bed3db59261dcc8b4e3ad294e8a6c297c9084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_2122627f7a4ce14d28eacb67c41bed3db59261dcc8b4e3ad294e8a6c297c9084->leave($__internal_2122627f7a4ce14d28eacb67c41bed3db59261dcc8b4e3ad294e8a6c297c9084_prof);

        
        $__internal_c9882bfe079a22d05b76e304c6c9ecdd57f71b4fcd8cd75417adc80177bcd9e5->leave($__internal_c9882bfe079a22d05b76e304c6c9ecdd57f71b4fcd8cd75417adc80177bcd9e5_prof);

    }

    public function getTemplateName()
    {
        return "post/new.html.twig";
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
    <h1>Post creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('post_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "post/new.html.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/app/Resources/views/post/new.html.twig");
    }
}
