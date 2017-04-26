<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_5056df37cd35ddfe5da27c18801041ddc89e17b8ad0332e01f64f6ebf60396d3 extends Twig_Template
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
        $__internal_53fe02e1df9427f636f1acef3052bd2f5c4ed5a41b0ea658871eb2f442ed998f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53fe02e1df9427f636f1acef3052bd2f5c4ed5a41b0ea658871eb2f442ed998f->enter($__internal_53fe02e1df9427f636f1acef3052bd2f5c4ed5a41b0ea658871eb2f442ed998f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_e7ff12aa4fc85e53abd48b90ad6bcfe393edb633e70e21de438d66c11f0abe5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ff12aa4fc85e53abd48b90ad6bcfe393edb633e70e21de438d66c11f0abe5a->enter($__internal_e7ff12aa4fc85e53abd48b90ad6bcfe393edb633e70e21de438d66c11f0abe5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_53fe02e1df9427f636f1acef3052bd2f5c4ed5a41b0ea658871eb2f442ed998f->leave($__internal_53fe02e1df9427f636f1acef3052bd2f5c4ed5a41b0ea658871eb2f442ed998f_prof);

        
        $__internal_e7ff12aa4fc85e53abd48b90ad6bcfe393edb633e70e21de438d66c11f0abe5a->leave($__internal_e7ff12aa4fc85e53abd48b90ad6bcfe393edb633e70e21de438d66c11f0abe5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
