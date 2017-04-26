<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_439babb4dd694130755fe84d4f6f45cedc5495227eefcfcfb935f592abc1cfcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd1054ad3073d5e842d4cd659805470a46b112ba9737a1fd0710ec18a6ae8704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd1054ad3073d5e842d4cd659805470a46b112ba9737a1fd0710ec18a6ae8704->enter($__internal_cd1054ad3073d5e842d4cd659805470a46b112ba9737a1fd0710ec18a6ae8704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_c01920546c27c3c4395b84ff8182db8fe68b5b90bc1bb7e0c2044ac508b1b4d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c01920546c27c3c4395b84ff8182db8fe68b5b90bc1bb7e0c2044ac508b1b4d3->enter($__internal_c01920546c27c3c4395b84ff8182db8fe68b5b90bc1bb7e0c2044ac508b1b4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cd1054ad3073d5e842d4cd659805470a46b112ba9737a1fd0710ec18a6ae8704->leave($__internal_cd1054ad3073d5e842d4cd659805470a46b112ba9737a1fd0710ec18a6ae8704_prof);

        
        $__internal_c01920546c27c3c4395b84ff8182db8fe68b5b90bc1bb7e0c2044ac508b1b4d3->leave($__internal_c01920546c27c3c4395b84ff8182db8fe68b5b90bc1bb7e0c2044ac508b1b4d3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_df5e86bfa31d0ce4f2f96e793f52f33cf63ca488a8ee88e0d349cc00338c5f01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df5e86bfa31d0ce4f2f96e793f52f33cf63ca488a8ee88e0d349cc00338c5f01->enter($__internal_df5e86bfa31d0ce4f2f96e793f52f33cf63ca488a8ee88e0d349cc00338c5f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_48cfe3b9ea1a5ed6907c4061664e4e90fce9e022242389dddd37ec81ba29afc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48cfe3b9ea1a5ed6907c4061664e4e90fce9e022242389dddd37ec81ba29afc8->enter($__internal_48cfe3b9ea1a5ed6907c4061664e4e90fce9e022242389dddd37ec81ba29afc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_48cfe3b9ea1a5ed6907c4061664e4e90fce9e022242389dddd37ec81ba29afc8->leave($__internal_48cfe3b9ea1a5ed6907c4061664e4e90fce9e022242389dddd37ec81ba29afc8_prof);

        
        $__internal_df5e86bfa31d0ce4f2f96e793f52f33cf63ca488a8ee88e0d349cc00338c5f01->leave($__internal_df5e86bfa31d0ce4f2f96e793f52f33cf63ca488a8ee88e0d349cc00338c5f01_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
