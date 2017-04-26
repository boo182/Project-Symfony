<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_0525e73710e966f774f6e30b0e64a9190e0ecc342637bb72ca2d8b51e7996982 extends Twig_Template
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
        $__internal_ef0fe98afd5e08491d413d55c5bc01e3f8479e5b1d1a1ac21eebd35d1e84ce7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef0fe98afd5e08491d413d55c5bc01e3f8479e5b1d1a1ac21eebd35d1e84ce7e->enter($__internal_ef0fe98afd5e08491d413d55c5bc01e3f8479e5b1d1a1ac21eebd35d1e84ce7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_666ff581ea960ae7652cb0051ffafa906cc1e9b5dadff8bab546e54204054650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666ff581ea960ae7652cb0051ffafa906cc1e9b5dadff8bab546e54204054650->enter($__internal_666ff581ea960ae7652cb0051ffafa906cc1e9b5dadff8bab546e54204054650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ef0fe98afd5e08491d413d55c5bc01e3f8479e5b1d1a1ac21eebd35d1e84ce7e->leave($__internal_ef0fe98afd5e08491d413d55c5bc01e3f8479e5b1d1a1ac21eebd35d1e84ce7e_prof);

        
        $__internal_666ff581ea960ae7652cb0051ffafa906cc1e9b5dadff8bab546e54204054650->leave($__internal_666ff581ea960ae7652cb0051ffafa906cc1e9b5dadff8bab546e54204054650_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
