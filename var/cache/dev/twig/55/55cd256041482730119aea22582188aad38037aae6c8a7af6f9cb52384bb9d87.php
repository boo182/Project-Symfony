<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_0f6fa22dfefa33db02780db5f92d95bd2c874f0014d7ea6af11ad49528efa836 extends Twig_Template
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
        $__internal_31d69b75acf2c5e5462913df74ad1cc5b0989ac6c3e46f9ec588ecbbeef0b9d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31d69b75acf2c5e5462913df74ad1cc5b0989ac6c3e46f9ec588ecbbeef0b9d2->enter($__internal_31d69b75acf2c5e5462913df74ad1cc5b0989ac6c3e46f9ec588ecbbeef0b9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_85b7d9489927855d551c7c1bc6135d566b1030d16bfe64c8c50268556fed5b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b7d9489927855d551c7c1bc6135d566b1030d16bfe64c8c50268556fed5b5f->enter($__internal_85b7d9489927855d551c7c1bc6135d566b1030d16bfe64c8c50268556fed5b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_31d69b75acf2c5e5462913df74ad1cc5b0989ac6c3e46f9ec588ecbbeef0b9d2->leave($__internal_31d69b75acf2c5e5462913df74ad1cc5b0989ac6c3e46f9ec588ecbbeef0b9d2_prof);

        
        $__internal_85b7d9489927855d551c7c1bc6135d566b1030d16bfe64c8c50268556fed5b5f->leave($__internal_85b7d9489927855d551c7c1bc6135d566b1030d16bfe64c8c50268556fed5b5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
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
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
