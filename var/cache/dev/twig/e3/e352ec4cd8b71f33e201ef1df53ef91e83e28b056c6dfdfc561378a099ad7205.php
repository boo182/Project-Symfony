<?php

/* TwigBundle::Error403.html.twig */
class __TwigTemplate_a4d584fd5a006b9b8666e98d426a3e4684cbdc100898cd29f1a50adf4a298a91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "TwigBundle::Error403.html.twig", 2);
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
        $__internal_7ef56bf3a93d9952ee43e643b9bf91a97bb5bb9919b575478ed2ce318780e4cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ef56bf3a93d9952ee43e643b9bf91a97bb5bb9919b575478ed2ce318780e4cb->enter($__internal_7ef56bf3a93d9952ee43e643b9bf91a97bb5bb9919b575478ed2ce318780e4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::Error403.html.twig"));

        $__internal_ebff9e0d03b58f64144b6017251e21117fd53e70f01edfb0381038e0d9a1b688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebff9e0d03b58f64144b6017251e21117fd53e70f01edfb0381038e0d9a1b688->enter($__internal_ebff9e0d03b58f64144b6017251e21117fd53e70f01edfb0381038e0d9a1b688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::Error403.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ef56bf3a93d9952ee43e643b9bf91a97bb5bb9919b575478ed2ce318780e4cb->leave($__internal_7ef56bf3a93d9952ee43e643b9bf91a97bb5bb9919b575478ed2ce318780e4cb_prof);

        
        $__internal_ebff9e0d03b58f64144b6017251e21117fd53e70f01edfb0381038e0d9a1b688->leave($__internal_ebff9e0d03b58f64144b6017251e21117fd53e70f01edfb0381038e0d9a1b688_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_382f3cc0bfca3babfc75c2a004de09d7dfb0ad427f55e00f389cebf0e2582714 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382f3cc0bfca3babfc75c2a004de09d7dfb0ad427f55e00f389cebf0e2582714->enter($__internal_382f3cc0bfca3babfc75c2a004de09d7dfb0ad427f55e00f389cebf0e2582714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3787b99b2fc1d59c2e4e30211f5b4507f4034e1c5dfab6e8ee7420a1eb4385b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3787b99b2fc1d59c2e4e30211f5b4507f4034e1c5dfab6e8ee7420a1eb4385b5->enter($__internal_3787b99b2fc1d59c2e4e30211f5b4507f4034e1c5dfab6e8ee7420a1eb4385b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>ERROR 403 Action Denied</h1>

    ";
        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 8
            echo "        ";
            // line 9
            echo "    ";
        }
        // line 10
        echo "
    <p>
        You are not allowed to make that change HACKER <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">return to the homepage</a>.
    </p>
";
        
        $__internal_3787b99b2fc1d59c2e4e30211f5b4507f4034e1c5dfab6e8ee7420a1eb4385b5->leave($__internal_3787b99b2fc1d59c2e4e30211f5b4507f4034e1c5dfab6e8ee7420a1eb4385b5_prof);

        
        $__internal_382f3cc0bfca3babfc75c2a004de09d7dfb0ad427f55e00f389cebf0e2582714->leave($__internal_382f3cc0bfca3babfc75c2a004de09d7dfb0ad427f55e00f389cebf0e2582714_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::Error403.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  60 => 10,  57 => 9,  55 => 8,  53 => 7,  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block body %}
    <h1>ERROR 403 Action Denied</h1>

    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        {# ... #}
    {% endif %}

    <p>
        You are not allowed to make that change HACKER <a href=\"{{ path('homepage') }}\">return to the homepage</a>.
    </p>
{% endblock %}", "TwigBundle::Error403.html.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/app/Resources/TwigBundle/views/Error403.html.twig");
    }
}
