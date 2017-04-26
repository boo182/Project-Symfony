<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_bd94edd8a045875b07481df56b2c40bde00dae3addef2b02f43bce2c92b6a189 extends Twig_Template
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
        $__internal_b76162102ffce3b0008e2d504d15f013d1139518b323e6d01d4bcc82ccf9ba2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b76162102ffce3b0008e2d504d15f013d1139518b323e6d01d4bcc82ccf9ba2d->enter($__internal_b76162102ffce3b0008e2d504d15f013d1139518b323e6d01d4bcc82ccf9ba2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_6a93073f963ef82e2a8eeb616a3bf725973ee6ed5c8b5a8bd6967f04eef96aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a93073f963ef82e2a8eeb616a3bf725973ee6ed5c8b5a8bd6967f04eef96aba->enter($__internal_6a93073f963ef82e2a8eeb616a3bf725973ee6ed5c8b5a8bd6967f04eef96aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b76162102ffce3b0008e2d504d15f013d1139518b323e6d01d4bcc82ccf9ba2d->leave($__internal_b76162102ffce3b0008e2d504d15f013d1139518b323e6d01d4bcc82ccf9ba2d_prof);

        
        $__internal_6a93073f963ef82e2a8eeb616a3bf725973ee6ed5c8b5a8bd6967f04eef96aba->leave($__internal_6a93073f963ef82e2a8eeb616a3bf725973ee6ed5c8b5a8bd6967f04eef96aba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
