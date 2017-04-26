<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_3a661ebe73fff3d18a348cf3043f93fbb24469c839d6b205865544eb9ecb6155 extends Twig_Template
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
        $__internal_972013d21cdd71a207ca3362e5708af0834c95318e57d17bc286fb4e390a9bc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_972013d21cdd71a207ca3362e5708af0834c95318e57d17bc286fb4e390a9bc7->enter($__internal_972013d21cdd71a207ca3362e5708af0834c95318e57d17bc286fb4e390a9bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_10e65196eae47732b0e537e95e987ee1ad1d4fff92453a797e178a390432ec91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e65196eae47732b0e537e95e987ee1ad1d4fff92453a797e178a390432ec91->enter($__internal_10e65196eae47732b0e537e95e987ee1ad1d4fff92453a797e178a390432ec91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_972013d21cdd71a207ca3362e5708af0834c95318e57d17bc286fb4e390a9bc7->leave($__internal_972013d21cdd71a207ca3362e5708af0834c95318e57d17bc286fb4e390a9bc7_prof);

        
        $__internal_10e65196eae47732b0e537e95e987ee1ad1d4fff92453a797e178a390432ec91->leave($__internal_10e65196eae47732b0e537e95e987ee1ad1d4fff92453a797e178a390432ec91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
