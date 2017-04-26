<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_cfc281957affe760700d03ddb0be7e8d39c7872eaac2adebd74b98c052471095 extends Twig_Template
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
        $__internal_a296d4e5e2fe14545c23c25711fafc9561cf7b5b0412d7c8598f991ad5002124 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a296d4e5e2fe14545c23c25711fafc9561cf7b5b0412d7c8598f991ad5002124->enter($__internal_a296d4e5e2fe14545c23c25711fafc9561cf7b5b0412d7c8598f991ad5002124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_496b26637ab425af17dda9244022d8487eb6bf03f251bddb873372b9c33a33de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_496b26637ab425af17dda9244022d8487eb6bf03f251bddb873372b9c33a33de->enter($__internal_496b26637ab425af17dda9244022d8487eb6bf03f251bddb873372b9c33a33de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_a296d4e5e2fe14545c23c25711fafc9561cf7b5b0412d7c8598f991ad5002124->leave($__internal_a296d4e5e2fe14545c23c25711fafc9561cf7b5b0412d7c8598f991ad5002124_prof);

        
        $__internal_496b26637ab425af17dda9244022d8487eb6bf03f251bddb873372b9c33a33de->leave($__internal_496b26637ab425af17dda9244022d8487eb6bf03f251bddb873372b9c33a33de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
