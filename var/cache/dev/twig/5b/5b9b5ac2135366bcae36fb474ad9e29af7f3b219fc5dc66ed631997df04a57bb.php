<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_5976661a6a8ff4f557e6cc64ba11986b2678b302275d9a9286d58000dfd2b928 extends Twig_Template
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
        $__internal_dce523c7f71b109562ff9955f050399890aa09d6db99e866b5540c5b2cd1b04d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dce523c7f71b109562ff9955f050399890aa09d6db99e866b5540c5b2cd1b04d->enter($__internal_dce523c7f71b109562ff9955f050399890aa09d6db99e866b5540c5b2cd1b04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_62fcc594f34d912738e7ad012d6d59be916d059005ef7ace33fe6791e1503e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62fcc594f34d912738e7ad012d6d59be916d059005ef7ace33fe6791e1503e1b->enter($__internal_62fcc594f34d912738e7ad012d6d59be916d059005ef7ace33fe6791e1503e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_dce523c7f71b109562ff9955f050399890aa09d6db99e866b5540c5b2cd1b04d->leave($__internal_dce523c7f71b109562ff9955f050399890aa09d6db99e866b5540c5b2cd1b04d_prof);

        
        $__internal_62fcc594f34d912738e7ad012d6d59be916d059005ef7ace33fe6791e1503e1b->leave($__internal_62fcc594f34d912738e7ad012d6d59be916d059005ef7ace33fe6791e1503e1b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
