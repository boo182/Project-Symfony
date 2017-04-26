<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_4564bbb0347b172a7ba17d471009da9217922626401aee43e1cf2c6cedb9bb71 extends Twig_Template
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
        $__internal_17c8665128c0974a4cb362ffa2817debf92de36fba3e789686aae15c6359d0c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17c8665128c0974a4cb362ffa2817debf92de36fba3e789686aae15c6359d0c0->enter($__internal_17c8665128c0974a4cb362ffa2817debf92de36fba3e789686aae15c6359d0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_7092e0dea873d41c08ba627fb2eec83f80525d40718182dd179fb5790f16db53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7092e0dea873d41c08ba627fb2eec83f80525d40718182dd179fb5790f16db53->enter($__internal_7092e0dea873d41c08ba627fb2eec83f80525d40718182dd179fb5790f16db53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_17c8665128c0974a4cb362ffa2817debf92de36fba3e789686aae15c6359d0c0->leave($__internal_17c8665128c0974a4cb362ffa2817debf92de36fba3e789686aae15c6359d0c0_prof);

        
        $__internal_7092e0dea873d41c08ba627fb2eec83f80525d40718182dd179fb5790f16db53->leave($__internal_7092e0dea873d41c08ba627fb2eec83f80525d40718182dd179fb5790f16db53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
