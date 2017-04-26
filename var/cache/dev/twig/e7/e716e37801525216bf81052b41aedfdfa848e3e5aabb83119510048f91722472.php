<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_9d79f3e9208511f9246141a0c42bd305a39ab6d6b3d69fdaf779a129d19daad7 extends Twig_Template
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
        $__internal_f3263dbd43fbe3d6d40576956f02c1806d54329095fabb2c12952892d0e0e431 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3263dbd43fbe3d6d40576956f02c1806d54329095fabb2c12952892d0e0e431->enter($__internal_f3263dbd43fbe3d6d40576956f02c1806d54329095fabb2c12952892d0e0e431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_a89b7fdb3a63adc465bd50bc6e02ba75c61e82d8c7427b4258e53e007b5283ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a89b7fdb3a63adc465bd50bc6e02ba75c61e82d8c7427b4258e53e007b5283ee->enter($__internal_a89b7fdb3a63adc465bd50bc6e02ba75c61e82d8c7427b4258e53e007b5283ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f3263dbd43fbe3d6d40576956f02c1806d54329095fabb2c12952892d0e0e431->leave($__internal_f3263dbd43fbe3d6d40576956f02c1806d54329095fabb2c12952892d0e0e431_prof);

        
        $__internal_a89b7fdb3a63adc465bd50bc6e02ba75c61e82d8c7427b4258e53e007b5283ee->leave($__internal_a89b7fdb3a63adc465bd50bc6e02ba75c61e82d8c7427b4258e53e007b5283ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
