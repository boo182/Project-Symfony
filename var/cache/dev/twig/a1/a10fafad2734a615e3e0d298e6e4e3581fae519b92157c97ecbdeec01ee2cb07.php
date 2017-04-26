<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_1cd7c5f205026ed6c821ab0c7ac3f72e7401bb0b041eb8fbca2252352ca93772 extends Twig_Template
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
        $__internal_b5af06a87bbe6cd75749c5f2d036283aec636de32a6b98ef30ee36b178e4f089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5af06a87bbe6cd75749c5f2d036283aec636de32a6b98ef30ee36b178e4f089->enter($__internal_b5af06a87bbe6cd75749c5f2d036283aec636de32a6b98ef30ee36b178e4f089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_1344e3f4b476e01d12ebaea748811ad9e2b692ed13df8ca5389d259e4385fa2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1344e3f4b476e01d12ebaea748811ad9e2b692ed13df8ca5389d259e4385fa2b->enter($__internal_1344e3f4b476e01d12ebaea748811ad9e2b692ed13df8ca5389d259e4385fa2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_b5af06a87bbe6cd75749c5f2d036283aec636de32a6b98ef30ee36b178e4f089->leave($__internal_b5af06a87bbe6cd75749c5f2d036283aec636de32a6b98ef30ee36b178e4f089_prof);

        
        $__internal_1344e3f4b476e01d12ebaea748811ad9e2b692ed13df8ca5389d259e4385fa2b->leave($__internal_1344e3f4b476e01d12ebaea748811ad9e2b692ed13df8ca5389d259e4385fa2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
