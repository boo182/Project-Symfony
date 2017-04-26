<?php

/* :user:mail.html.twig */
class __TwigTemplate_e6652e188966742eda6184b89d83aedc732f82724c4813dda17697e28b0cdafa extends Twig_Template
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
        $__internal_3ef2aac821c24b126060e565bbe8d9920c5c7bf740e9c5583f3126983085d87a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ef2aac821c24b126060e565bbe8d9920c5c7bf740e9c5583f3126983085d87a->enter($__internal_3ef2aac821c24b126060e565bbe8d9920c5c7bf740e9c5583f3126983085d87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:mail.html.twig"));

        $__internal_973334229b375ecc572998760cabe3b477f5c4894cd9706d28881d8e869a7dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_973334229b375ecc572998760cabe3b477f5c4894cd9706d28881d8e869a7dfc->enter($__internal_973334229b375ecc572998760cabe3b477f5c4894cd9706d28881d8e869a7dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:mail.html.twig"));

        // line 1
        echo "

Bonjour ";
        // line 3
        echo twig_escape_filter($this->env, ($context["pseudo"] ?? $this->getContext($context, "pseudo")), "html", null, true);
        echo ",

Toute l'équipe du site se joint à moi pour vous souhaiter
la bienvenue sur notre site !

Revenez nous voir souvent !";
        
        $__internal_3ef2aac821c24b126060e565bbe8d9920c5c7bf740e9c5583f3126983085d87a->leave($__internal_3ef2aac821c24b126060e565bbe8d9920c5c7bf740e9c5583f3126983085d87a_prof);

        
        $__internal_973334229b375ecc572998760cabe3b477f5c4894cd9706d28881d8e869a7dfc->leave($__internal_973334229b375ecc572998760cabe3b477f5c4894cd9706d28881d8e869a7dfc_prof);

    }

    public function getTemplateName()
    {
        return ":user:mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
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

Bonjour {{ pseudo }},

Toute l'équipe du site se joint à moi pour vous souhaiter
la bienvenue sur notre site !

Revenez nous voir souvent !", ":user:mail.html.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/app/Resources/views/user/mail.html.twig");
    }
}
