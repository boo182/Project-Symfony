<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b4ad2d6449a54b396adc7eb7f6a55caf3172798308c5253e76ab521f69e740f9 extends Twig_Template
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
        $__internal_730c731d178ec3ade8f0981d32ee26b4cc9e1810c0db1c57fc43ff745b1974f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_730c731d178ec3ade8f0981d32ee26b4cc9e1810c0db1c57fc43ff745b1974f3->enter($__internal_730c731d178ec3ade8f0981d32ee26b4cc9e1810c0db1c57fc43ff745b1974f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_39f0b552f8f1de2a843232dbf5fa57ae8f122069c902db01a0da7b3f54aebd9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f0b552f8f1de2a843232dbf5fa57ae8f122069c902db01a0da7b3f54aebd9f->enter($__internal_39f0b552f8f1de2a843232dbf5fa57ae8f122069c902db01a0da7b3f54aebd9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_730c731d178ec3ade8f0981d32ee26b4cc9e1810c0db1c57fc43ff745b1974f3->leave($__internal_730c731d178ec3ade8f0981d32ee26b4cc9e1810c0db1c57fc43ff745b1974f3_prof);

        
        $__internal_39f0b552f8f1de2a843232dbf5fa57ae8f122069c902db01a0da7b3f54aebd9f->leave($__internal_39f0b552f8f1de2a843232dbf5fa57ae8f122069c902db01a0da7b3f54aebd9f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
