<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_27a8cb69c9534f670bbfcce0618b07763f5006116351320413eeef4ff1a0a0b4 extends Twig_Template
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
        $__internal_a7ddfe3e330298b8b9f355574fe86e37b4e13fadb882d51f4bbca449cd349a93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7ddfe3e330298b8b9f355574fe86e37b4e13fadb882d51f4bbca449cd349a93->enter($__internal_a7ddfe3e330298b8b9f355574fe86e37b4e13fadb882d51f4bbca449cd349a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_5d1539c745cbbab3467855ad4efcb2b6a13612e387765713db19f188942c9852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d1539c745cbbab3467855ad4efcb2b6a13612e387765713db19f188942c9852->enter($__internal_5d1539c745cbbab3467855ad4efcb2b6a13612e387765713db19f188942c9852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a7ddfe3e330298b8b9f355574fe86e37b4e13fadb882d51f4bbca449cd349a93->leave($__internal_a7ddfe3e330298b8b9f355574fe86e37b4e13fadb882d51f4bbca449cd349a93_prof);

        
        $__internal_5d1539c745cbbab3467855ad4efcb2b6a13612e387765713db19f188942c9852->leave($__internal_5d1539c745cbbab3467855ad4efcb2b6a13612e387765713db19f188942c9852_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
