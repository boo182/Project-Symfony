<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c4cd8584726b4cbf296055e79b04044973c6c2263a7a920197d8904fd438803e extends Twig_Template
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
        $__internal_ba2bd9579401d86fa2b7b3eefd1ea6b8a8c214d9c5144e810036d53862680049 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba2bd9579401d86fa2b7b3eefd1ea6b8a8c214d9c5144e810036d53862680049->enter($__internal_ba2bd9579401d86fa2b7b3eefd1ea6b8a8c214d9c5144e810036d53862680049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_fabaac2088f4ee8e7ce97a85e84472a8a9289729fe070f8232c5eca2ddcec535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fabaac2088f4ee8e7ce97a85e84472a8a9289729fe070f8232c5eca2ddcec535->enter($__internal_fabaac2088f4ee8e7ce97a85e84472a8a9289729fe070f8232c5eca2ddcec535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_ba2bd9579401d86fa2b7b3eefd1ea6b8a8c214d9c5144e810036d53862680049->leave($__internal_ba2bd9579401d86fa2b7b3eefd1ea6b8a8c214d9c5144e810036d53862680049_prof);

        
        $__internal_fabaac2088f4ee8e7ce97a85e84472a8a9289729fe070f8232c5eca2ddcec535->leave($__internal_fabaac2088f4ee8e7ce97a85e84472a8a9289729fe070f8232c5eca2ddcec535_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
