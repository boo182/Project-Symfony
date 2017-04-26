<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_bfcd7ebbc4ae234c8902f682fa5345e37c2491e5a004861821b2d696e7e70038 extends Twig_Template
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
        $__internal_332b154a3722421cd6ed363c70dada53e298e5eaf97692d09d3c35f07eafd098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_332b154a3722421cd6ed363c70dada53e298e5eaf97692d09d3c35f07eafd098->enter($__internal_332b154a3722421cd6ed363c70dada53e298e5eaf97692d09d3c35f07eafd098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_bf2a494a1fb0eff6ae7ee59ef4781277304d833cc92300cf015529640a7fd6e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf2a494a1fb0eff6ae7ee59ef4781277304d833cc92300cf015529640a7fd6e7->enter($__internal_bf2a494a1fb0eff6ae7ee59ef4781277304d833cc92300cf015529640a7fd6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_332b154a3722421cd6ed363c70dada53e298e5eaf97692d09d3c35f07eafd098->leave($__internal_332b154a3722421cd6ed363c70dada53e298e5eaf97692d09d3c35f07eafd098_prof);

        
        $__internal_bf2a494a1fb0eff6ae7ee59ef4781277304d833cc92300cf015529640a7fd6e7->leave($__internal_bf2a494a1fb0eff6ae7ee59ef4781277304d833cc92300cf015529640a7fd6e7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
