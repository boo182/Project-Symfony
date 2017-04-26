<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_a1525a61a3301f5a07d62f2684d4314e26bd55aa823260813fee4101103f4ce7 extends Twig_Template
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
        $__internal_b415adb47765528307c5d3f08a7b5791fdffdd796d23ed58e82f63f62b6d8b36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b415adb47765528307c5d3f08a7b5791fdffdd796d23ed58e82f63f62b6d8b36->enter($__internal_b415adb47765528307c5d3f08a7b5791fdffdd796d23ed58e82f63f62b6d8b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_a427b10d8ca5ea76b3bbc47e3a54ae194f3ff0e230416405c1aa082df9d4a3ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a427b10d8ca5ea76b3bbc47e3a54ae194f3ff0e230416405c1aa082df9d4a3ba->enter($__internal_a427b10d8ca5ea76b3bbc47e3a54ae194f3ff0e230416405c1aa082df9d4a3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b415adb47765528307c5d3f08a7b5791fdffdd796d23ed58e82f63f62b6d8b36->leave($__internal_b415adb47765528307c5d3f08a7b5791fdffdd796d23ed58e82f63f62b6d8b36_prof);

        
        $__internal_a427b10d8ca5ea76b3bbc47e3a54ae194f3ff0e230416405c1aa082df9d4a3ba->leave($__internal_a427b10d8ca5ea76b3bbc47e3a54ae194f3ff0e230416405c1aa082df9d4a3ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
