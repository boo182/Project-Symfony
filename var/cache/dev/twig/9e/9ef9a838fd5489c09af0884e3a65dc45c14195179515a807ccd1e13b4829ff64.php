<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7327538189c56aaeb1355365ef104871292efa945038fe0958a5a2947819ebec extends Twig_Template
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
        $__internal_a9eb4e20742e04082b7479f973c2223375c2fc1f784bc6b6ca88ee266adff1f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9eb4e20742e04082b7479f973c2223375c2fc1f784bc6b6ca88ee266adff1f4->enter($__internal_a9eb4e20742e04082b7479f973c2223375c2fc1f784bc6b6ca88ee266adff1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_1f17b1a276475c112c98c3a7fb65522ff0d81e69dc2d377f425c1ca5379415b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f17b1a276475c112c98c3a7fb65522ff0d81e69dc2d377f425c1ca5379415b2->enter($__internal_1f17b1a276475c112c98c3a7fb65522ff0d81e69dc2d377f425c1ca5379415b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a9eb4e20742e04082b7479f973c2223375c2fc1f784bc6b6ca88ee266adff1f4->leave($__internal_a9eb4e20742e04082b7479f973c2223375c2fc1f784bc6b6ca88ee266adff1f4_prof);

        
        $__internal_1f17b1a276475c112c98c3a7fb65522ff0d81e69dc2d377f425c1ca5379415b2->leave($__internal_1f17b1a276475c112c98c3a7fb65522ff0d81e69dc2d377f425c1ca5379415b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
