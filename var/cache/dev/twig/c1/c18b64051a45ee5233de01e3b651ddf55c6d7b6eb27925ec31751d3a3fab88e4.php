<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_72e86c22b9ef3a7dd334477894772cafea95a7be56b3c6bf095443eac127e837 extends Twig_Template
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
        $__internal_e7199ec93e3a78c14046843179664b671e789ca3f47e1d8561dea0d496471f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7199ec93e3a78c14046843179664b671e789ca3f47e1d8561dea0d496471f90->enter($__internal_e7199ec93e3a78c14046843179664b671e789ca3f47e1d8561dea0d496471f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_d1220919b41140bc5d554f9f09dd1e35453a4d8e3aa41d7de87240f4f7413eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1220919b41140bc5d554f9f09dd1e35453a4d8e3aa41d7de87240f4f7413eae->enter($__internal_d1220919b41140bc5d554f9f09dd1e35453a4d8e3aa41d7de87240f4f7413eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e7199ec93e3a78c14046843179664b671e789ca3f47e1d8561dea0d496471f90->leave($__internal_e7199ec93e3a78c14046843179664b671e789ca3f47e1d8561dea0d496471f90_prof);

        
        $__internal_d1220919b41140bc5d554f9f09dd1e35453a4d8e3aa41d7de87240f4f7413eae->leave($__internal_d1220919b41140bc5d554f9f09dd1e35453a4d8e3aa41d7de87240f4f7413eae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
