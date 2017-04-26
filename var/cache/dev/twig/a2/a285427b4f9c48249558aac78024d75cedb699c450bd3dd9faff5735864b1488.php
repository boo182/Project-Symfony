<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_26d84ac4a45cb43d70c92b1f75afeb473f852183b354ad1e2ed39b3a5764453a extends Twig_Template
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
        $__internal_dd9649bb74fac8e44b6704d4d9788e8cda921ee2362f7680b9b32332b32ea399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd9649bb74fac8e44b6704d4d9788e8cda921ee2362f7680b9b32332b32ea399->enter($__internal_dd9649bb74fac8e44b6704d4d9788e8cda921ee2362f7680b9b32332b32ea399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_088ad1903064ae99169f68f2d2788698b927ac114c05f0c2101eb623b02b72f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_088ad1903064ae99169f68f2d2788698b927ac114c05f0c2101eb623b02b72f4->enter($__internal_088ad1903064ae99169f68f2d2788698b927ac114c05f0c2101eb623b02b72f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_dd9649bb74fac8e44b6704d4d9788e8cda921ee2362f7680b9b32332b32ea399->leave($__internal_dd9649bb74fac8e44b6704d4d9788e8cda921ee2362f7680b9b32332b32ea399_prof);

        
        $__internal_088ad1903064ae99169f68f2d2788698b927ac114c05f0c2101eb623b02b72f4->leave($__internal_088ad1903064ae99169f68f2d2788698b927ac114c05f0c2101eb623b02b72f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
