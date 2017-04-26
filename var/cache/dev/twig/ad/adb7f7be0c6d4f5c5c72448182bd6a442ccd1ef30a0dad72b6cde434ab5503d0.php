<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_db688c6560cb5c6970dec47f82619ccf7023653b63fbf5b810231de242d038d6 extends Twig_Template
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
        $__internal_b47bc6ce64a2150a61412ad77c5e32c4c9b6c61e8f1188ca85d24210838c111b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b47bc6ce64a2150a61412ad77c5e32c4c9b6c61e8f1188ca85d24210838c111b->enter($__internal_b47bc6ce64a2150a61412ad77c5e32c4c9b6c61e8f1188ca85d24210838c111b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_2bf2135764dee5198108796b39fcccf6967003a8eea880b4186d8c80163bd2d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf2135764dee5198108796b39fcccf6967003a8eea880b4186d8c80163bd2d1->enter($__internal_2bf2135764dee5198108796b39fcccf6967003a8eea880b4186d8c80163bd2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b47bc6ce64a2150a61412ad77c5e32c4c9b6c61e8f1188ca85d24210838c111b->leave($__internal_b47bc6ce64a2150a61412ad77c5e32c4c9b6c61e8f1188ca85d24210838c111b_prof);

        
        $__internal_2bf2135764dee5198108796b39fcccf6967003a8eea880b4186d8c80163bd2d1->leave($__internal_2bf2135764dee5198108796b39fcccf6967003a8eea880b4186d8c80163bd2d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
