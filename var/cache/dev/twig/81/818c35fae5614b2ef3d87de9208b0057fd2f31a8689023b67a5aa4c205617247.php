<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4372f575d57aac305cd82da1036187d1e8d2dee7fb55c077b7a6b12c346cbec3 extends Twig_Template
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
        $__internal_7a7d4d5c162c87e71c385c53936be4a9a38ad51cfa098ec98a84b430eebbc958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a7d4d5c162c87e71c385c53936be4a9a38ad51cfa098ec98a84b430eebbc958->enter($__internal_7a7d4d5c162c87e71c385c53936be4a9a38ad51cfa098ec98a84b430eebbc958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_22f2fec63844c3d55ef9ad905f5924b577947c4c660699c686d11fe7cf736539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f2fec63844c3d55ef9ad905f5924b577947c4c660699c686d11fe7cf736539->enter($__internal_22f2fec63844c3d55ef9ad905f5924b577947c4c660699c686d11fe7cf736539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7a7d4d5c162c87e71c385c53936be4a9a38ad51cfa098ec98a84b430eebbc958->leave($__internal_7a7d4d5c162c87e71c385c53936be4a9a38ad51cfa098ec98a84b430eebbc958_prof);

        
        $__internal_22f2fec63844c3d55ef9ad905f5924b577947c4c660699c686d11fe7cf736539->leave($__internal_22f2fec63844c3d55ef9ad905f5924b577947c4c660699c686d11fe7cf736539_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
