<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_adf68b964f531ad4e7f0260efac69a23a7361a4ce0a3ca16970d15a9a1e84a8c extends Twig_Template
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
        $__internal_e5dc886cba990f699a10259160007e4436024ca09d60dfa953eabf5a42add36f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5dc886cba990f699a10259160007e4436024ca09d60dfa953eabf5a42add36f->enter($__internal_e5dc886cba990f699a10259160007e4436024ca09d60dfa953eabf5a42add36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_ca72171191ebef51979b5a732b700eea0e56efa22da6132e923704b9dd775523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca72171191ebef51979b5a732b700eea0e56efa22da6132e923704b9dd775523->enter($__internal_ca72171191ebef51979b5a732b700eea0e56efa22da6132e923704b9dd775523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e5dc886cba990f699a10259160007e4436024ca09d60dfa953eabf5a42add36f->leave($__internal_e5dc886cba990f699a10259160007e4436024ca09d60dfa953eabf5a42add36f_prof);

        
        $__internal_ca72171191ebef51979b5a732b700eea0e56efa22da6132e923704b9dd775523->leave($__internal_ca72171191ebef51979b5a732b700eea0e56efa22da6132e923704b9dd775523_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
