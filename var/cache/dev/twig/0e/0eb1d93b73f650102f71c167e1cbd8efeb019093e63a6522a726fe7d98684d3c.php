<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_48fd95720911e6965718a61ede18421169d22f4fd684e4f2367a484ce961a7e9 extends Twig_Template
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
        $__internal_82544fd3bcd5f553decf7b192569068e9edabb1fa9b9a83a422ac04b4155c90d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82544fd3bcd5f553decf7b192569068e9edabb1fa9b9a83a422ac04b4155c90d->enter($__internal_82544fd3bcd5f553decf7b192569068e9edabb1fa9b9a83a422ac04b4155c90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_69a48c960d1d40ae8bf64db2061127dfdccefa068e93726d2a9fda81805ef62e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69a48c960d1d40ae8bf64db2061127dfdccefa068e93726d2a9fda81805ef62e->enter($__internal_69a48c960d1d40ae8bf64db2061127dfdccefa068e93726d2a9fda81805ef62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_82544fd3bcd5f553decf7b192569068e9edabb1fa9b9a83a422ac04b4155c90d->leave($__internal_82544fd3bcd5f553decf7b192569068e9edabb1fa9b9a83a422ac04b4155c90d_prof);

        
        $__internal_69a48c960d1d40ae8bf64db2061127dfdccefa068e93726d2a9fda81805ef62e->leave($__internal_69a48c960d1d40ae8bf64db2061127dfdccefa068e93726d2a9fda81805ef62e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
