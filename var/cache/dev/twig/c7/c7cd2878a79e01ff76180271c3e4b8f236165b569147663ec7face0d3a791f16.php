<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_9b3fcb0f1f9e83f102d3702cd882f270fdc0531dd8ba2cf7cd7514f211e5e221 extends Twig_Template
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
        $__internal_0b1dbe8bcf6b55e44fedcd8d5237a5f43d76745d7d6426adb8ac196e93c00752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b1dbe8bcf6b55e44fedcd8d5237a5f43d76745d7d6426adb8ac196e93c00752->enter($__internal_0b1dbe8bcf6b55e44fedcd8d5237a5f43d76745d7d6426adb8ac196e93c00752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_4bb1f13f2ce35845553ae382e15a29133c76d9916b06f9d87fbcd1b0de10312a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb1f13f2ce35845553ae382e15a29133c76d9916b06f9d87fbcd1b0de10312a->enter($__internal_4bb1f13f2ce35845553ae382e15a29133c76d9916b06f9d87fbcd1b0de10312a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_0b1dbe8bcf6b55e44fedcd8d5237a5f43d76745d7d6426adb8ac196e93c00752->leave($__internal_0b1dbe8bcf6b55e44fedcd8d5237a5f43d76745d7d6426adb8ac196e93c00752_prof);

        
        $__internal_4bb1f13f2ce35845553ae382e15a29133c76d9916b06f9d87fbcd1b0de10312a->leave($__internal_4bb1f13f2ce35845553ae382e15a29133c76d9916b06f9d87fbcd1b0de10312a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
