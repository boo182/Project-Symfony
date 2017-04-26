<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_88ad4b6c43b01afc3dfd326c43db95c94382b9621b67d2f97f244a859524ede7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba51932797526b0d920f8816320035e659587ea5291454b7b922a40b9a354ae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba51932797526b0d920f8816320035e659587ea5291454b7b922a40b9a354ae8->enter($__internal_ba51932797526b0d920f8816320035e659587ea5291454b7b922a40b9a354ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_9a27793c49bd750d8b2e9a93d8c47be1ae51e6370ff01f54279b88765783010f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a27793c49bd750d8b2e9a93d8c47be1ae51e6370ff01f54279b88765783010f->enter($__internal_9a27793c49bd750d8b2e9a93d8c47be1ae51e6370ff01f54279b88765783010f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ba51932797526b0d920f8816320035e659587ea5291454b7b922a40b9a354ae8->leave($__internal_ba51932797526b0d920f8816320035e659587ea5291454b7b922a40b9a354ae8_prof);

        
        $__internal_9a27793c49bd750d8b2e9a93d8c47be1ae51e6370ff01f54279b88765783010f->leave($__internal_9a27793c49bd750d8b2e9a93d8c47be1ae51e6370ff01f54279b88765783010f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
