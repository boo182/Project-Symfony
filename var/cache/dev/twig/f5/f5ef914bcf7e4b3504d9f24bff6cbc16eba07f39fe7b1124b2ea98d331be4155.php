<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_c9d1b5eb893d45f011b462503c840f22713ac80a6ee06cdffc93c51227ba15cf extends Twig_Template
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
        $__internal_5f0374b69d6264a33742fcd035052072642cabb941f6bbc9ac0f2dbcff347182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f0374b69d6264a33742fcd035052072642cabb941f6bbc9ac0f2dbcff347182->enter($__internal_5f0374b69d6264a33742fcd035052072642cabb941f6bbc9ac0f2dbcff347182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_1be99df473ce4cdc76c0190e445cb7ffff4be0d216350cd25cb5dddbeaf9298b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be99df473ce4cdc76c0190e445cb7ffff4be0d216350cd25cb5dddbeaf9298b->enter($__internal_1be99df473ce4cdc76c0190e445cb7ffff4be0d216350cd25cb5dddbeaf9298b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5f0374b69d6264a33742fcd035052072642cabb941f6bbc9ac0f2dbcff347182->leave($__internal_5f0374b69d6264a33742fcd035052072642cabb941f6bbc9ac0f2dbcff347182_prof);

        
        $__internal_1be99df473ce4cdc76c0190e445cb7ffff4be0d216350cd25cb5dddbeaf9298b->leave($__internal_1be99df473ce4cdc76c0190e445cb7ffff4be0d216350cd25cb5dddbeaf9298b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
