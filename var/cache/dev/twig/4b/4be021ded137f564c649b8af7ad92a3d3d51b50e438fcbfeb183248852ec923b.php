<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_ab21dcc6286500afd891e04a6108da091a610407550dcd122451ff8e3d76f613 extends Twig_Template
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
        $__internal_ba67462064caa3d9b9d28b3416b7ea696bf2efb1969d1fd241c1436c93c94e3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba67462064caa3d9b9d28b3416b7ea696bf2efb1969d1fd241c1436c93c94e3c->enter($__internal_ba67462064caa3d9b9d28b3416b7ea696bf2efb1969d1fd241c1436c93c94e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_5377f72f808842e5d5f026de1d19bfb53ed5eb366ed31c6cfcfcdd86b76c382c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5377f72f808842e5d5f026de1d19bfb53ed5eb366ed31c6cfcfcdd86b76c382c->enter($__internal_5377f72f808842e5d5f026de1d19bfb53ed5eb366ed31c6cfcfcdd86b76c382c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ba67462064caa3d9b9d28b3416b7ea696bf2efb1969d1fd241c1436c93c94e3c->leave($__internal_ba67462064caa3d9b9d28b3416b7ea696bf2efb1969d1fd241c1436c93c94e3c_prof);

        
        $__internal_5377f72f808842e5d5f026de1d19bfb53ed5eb366ed31c6cfcfcdd86b76c382c->leave($__internal_5377f72f808842e5d5f026de1d19bfb53ed5eb366ed31c6cfcfcdd86b76c382c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
