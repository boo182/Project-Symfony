<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_d98e059dec94411996bf41f2474b2307753580b1e1cce53146d32434edb61019 extends Twig_Template
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
        $__internal_b64c378737b77c2eabb19883d15be7410269f3c9b85e7c2c8a2b5d691e520500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b64c378737b77c2eabb19883d15be7410269f3c9b85e7c2c8a2b5d691e520500->enter($__internal_b64c378737b77c2eabb19883d15be7410269f3c9b85e7c2c8a2b5d691e520500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_096b7cf4582745df941e7a362075f7a0b9b3e0dbc13fa8785e69b745dadbfafc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_096b7cf4582745df941e7a362075f7a0b9b3e0dbc13fa8785e69b745dadbfafc->enter($__internal_096b7cf4582745df941e7a362075f7a0b9b3e0dbc13fa8785e69b745dadbfafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_b64c378737b77c2eabb19883d15be7410269f3c9b85e7c2c8a2b5d691e520500->leave($__internal_b64c378737b77c2eabb19883d15be7410269f3c9b85e7c2c8a2b5d691e520500_prof);

        
        $__internal_096b7cf4582745df941e7a362075f7a0b9b3e0dbc13fa8785e69b745dadbfafc->leave($__internal_096b7cf4582745df941e7a362075f7a0b9b3e0dbc13fa8785e69b745dadbfafc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
