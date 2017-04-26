<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_acfe819b6f4a7232b54f39cdbb3388fd6f0d690a404297663cb5171468e5c743 extends Twig_Template
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
        $__internal_126217350b71888536b1318a558b6e4563578573fb72c64d14844acd90b83f10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_126217350b71888536b1318a558b6e4563578573fb72c64d14844acd90b83f10->enter($__internal_126217350b71888536b1318a558b6e4563578573fb72c64d14844acd90b83f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_a6f11cca0a4a25dbac70c2ca90fbd8531f8be7c5a09f084ba31d70ccd3a20169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f11cca0a4a25dbac70c2ca90fbd8531f8be7c5a09f084ba31d70ccd3a20169->enter($__internal_a6f11cca0a4a25dbac70c2ca90fbd8531f8be7c5a09f084ba31d70ccd3a20169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_126217350b71888536b1318a558b6e4563578573fb72c64d14844acd90b83f10->leave($__internal_126217350b71888536b1318a558b6e4563578573fb72c64d14844acd90b83f10_prof);

        
        $__internal_a6f11cca0a4a25dbac70c2ca90fbd8531f8be7c5a09f084ba31d70ccd3a20169->leave($__internal_a6f11cca0a4a25dbac70c2ca90fbd8531f8be7c5a09f084ba31d70ccd3a20169_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
