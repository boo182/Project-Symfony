<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_fcf1994925ed13ae50ceaaa9fa1630895b6d8f504524ff1d777acdd3b5e606fa extends Twig_Template
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
        $__internal_e745dfe7dff74dbeb6e374019636061ccdac619840a4a33c5815151d1df4c9eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e745dfe7dff74dbeb6e374019636061ccdac619840a4a33c5815151d1df4c9eb->enter($__internal_e745dfe7dff74dbeb6e374019636061ccdac619840a4a33c5815151d1df4c9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_dd6d2b6d15c5a4f13c2f044bc63f16798dc8272395ab887d1d7e32054b695a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd6d2b6d15c5a4f13c2f044bc63f16798dc8272395ab887d1d7e32054b695a6e->enter($__internal_dd6d2b6d15c5a4f13c2f044bc63f16798dc8272395ab887d1d7e32054b695a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_e745dfe7dff74dbeb6e374019636061ccdac619840a4a33c5815151d1df4c9eb->leave($__internal_e745dfe7dff74dbeb6e374019636061ccdac619840a4a33c5815151d1df4c9eb_prof);

        
        $__internal_dd6d2b6d15c5a4f13c2f044bc63f16798dc8272395ab887d1d7e32054b695a6e->leave($__internal_dd6d2b6d15c5a4f13c2f044bc63f16798dc8272395ab887d1d7e32054b695a6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
