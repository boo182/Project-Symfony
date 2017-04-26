<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9eb9427f0681f6c757aa23cac29e88c7097157c7b3953dd68cb0443bf377623f extends Twig_Template
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
        $__internal_f97ac64147d1fc110a0b2480ff978902ed4734e7ff4cd6da238b557490c67c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f97ac64147d1fc110a0b2480ff978902ed4734e7ff4cd6da238b557490c67c98->enter($__internal_f97ac64147d1fc110a0b2480ff978902ed4734e7ff4cd6da238b557490c67c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_bf33f6fde6eaea5dc03c349f10e94a18782147026efa7cf9fa965642c91372c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf33f6fde6eaea5dc03c349f10e94a18782147026efa7cf9fa965642c91372c0->enter($__internal_bf33f6fde6eaea5dc03c349f10e94a18782147026efa7cf9fa965642c91372c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_f97ac64147d1fc110a0b2480ff978902ed4734e7ff4cd6da238b557490c67c98->leave($__internal_f97ac64147d1fc110a0b2480ff978902ed4734e7ff4cd6da238b557490c67c98_prof);

        
        $__internal_bf33f6fde6eaea5dc03c349f10e94a18782147026efa7cf9fa965642c91372c0->leave($__internal_bf33f6fde6eaea5dc03c349f10e94a18782147026efa7cf9fa965642c91372c0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
