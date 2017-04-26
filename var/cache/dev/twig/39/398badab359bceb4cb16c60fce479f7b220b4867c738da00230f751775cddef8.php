<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_27a14dc2bfef375141ad2a11215d385dc8f936bf01588520927377aafb5b6f7b extends Twig_Template
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
        $__internal_da15fc9c8e82ad6769cf364ee023c9f4929e14e70d8e142cf673023e3c771763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da15fc9c8e82ad6769cf364ee023c9f4929e14e70d8e142cf673023e3c771763->enter($__internal_da15fc9c8e82ad6769cf364ee023c9f4929e14e70d8e142cf673023e3c771763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_39d070d5cb99ef8fe2617629ff0ee1147d8fe6a01657823c658236d42559f339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d070d5cb99ef8fe2617629ff0ee1147d8fe6a01657823c658236d42559f339->enter($__internal_39d070d5cb99ef8fe2617629ff0ee1147d8fe6a01657823c658236d42559f339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_da15fc9c8e82ad6769cf364ee023c9f4929e14e70d8e142cf673023e3c771763->leave($__internal_da15fc9c8e82ad6769cf364ee023c9f4929e14e70d8e142cf673023e3c771763_prof);

        
        $__internal_39d070d5cb99ef8fe2617629ff0ee1147d8fe6a01657823c658236d42559f339->leave($__internal_39d070d5cb99ef8fe2617629ff0ee1147d8fe6a01657823c658236d42559f339_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
