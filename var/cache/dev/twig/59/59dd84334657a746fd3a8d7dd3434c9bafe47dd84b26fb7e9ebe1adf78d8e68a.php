<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_02fe47fdd4604ba9d5baeb22e3ca82f2aa72ae15cc686e24e6bda415f5967a09 extends Twig_Template
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
        $__internal_8c770a7fb6f58028637f87a968213e6a6ace0ce1f28ef1938f757bcb63b6dff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c770a7fb6f58028637f87a968213e6a6ace0ce1f28ef1938f757bcb63b6dff0->enter($__internal_8c770a7fb6f58028637f87a968213e6a6ace0ce1f28ef1938f757bcb63b6dff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_a6c23fd0f61741daa28e352cf3c589bb3970bb5b87063eba119192b5fa5dc62d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c23fd0f61741daa28e352cf3c589bb3970bb5b87063eba119192b5fa5dc62d->enter($__internal_a6c23fd0f61741daa28e352cf3c589bb3970bb5b87063eba119192b5fa5dc62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_8c770a7fb6f58028637f87a968213e6a6ace0ce1f28ef1938f757bcb63b6dff0->leave($__internal_8c770a7fb6f58028637f87a968213e6a6ace0ce1f28ef1938f757bcb63b6dff0_prof);

        
        $__internal_a6c23fd0f61741daa28e352cf3c589bb3970bb5b87063eba119192b5fa5dc62d->leave($__internal_a6c23fd0f61741daa28e352cf3c589bb3970bb5b87063eba119192b5fa5dc62d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
