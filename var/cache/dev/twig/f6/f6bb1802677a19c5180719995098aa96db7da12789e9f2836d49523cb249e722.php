<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b6991726562a754abea0300e6d209728accf2bd9e29b42a8c773899a9d32afc0 extends Twig_Template
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
        $__internal_565a7e74ea9853f905c6d5a57db879700d3e4a20d895784e2b3ab69a224e8ad1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_565a7e74ea9853f905c6d5a57db879700d3e4a20d895784e2b3ab69a224e8ad1->enter($__internal_565a7e74ea9853f905c6d5a57db879700d3e4a20d895784e2b3ab69a224e8ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_960025aefdd86d45a28a79f1fc1775f1a843440058279ac1f8de188b9f336486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960025aefdd86d45a28a79f1fc1775f1a843440058279ac1f8de188b9f336486->enter($__internal_960025aefdd86d45a28a79f1fc1775f1a843440058279ac1f8de188b9f336486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_565a7e74ea9853f905c6d5a57db879700d3e4a20d895784e2b3ab69a224e8ad1->leave($__internal_565a7e74ea9853f905c6d5a57db879700d3e4a20d895784e2b3ab69a224e8ad1_prof);

        
        $__internal_960025aefdd86d45a28a79f1fc1775f1a843440058279ac1f8de188b9f336486->leave($__internal_960025aefdd86d45a28a79f1fc1775f1a843440058279ac1f8de188b9f336486_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
