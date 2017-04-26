<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_e19945631fbccf073be34e34efbbb6682d7b6a5587abb5ecd23dd7bdcb80521a extends Twig_Template
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
        $__internal_df23f11f71e72423f0bb1c11fe4e35e9bb62d265c22ecbc65ff1fa7e6eb3339a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df23f11f71e72423f0bb1c11fe4e35e9bb62d265c22ecbc65ff1fa7e6eb3339a->enter($__internal_df23f11f71e72423f0bb1c11fe4e35e9bb62d265c22ecbc65ff1fa7e6eb3339a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_c8ea0e1f247ebbb5043863469e61e49b54e7fa330a9f2c449b9ead6cbbd6f2ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ea0e1f247ebbb5043863469e61e49b54e7fa330a9f2c449b9ead6cbbd6f2ae->enter($__internal_c8ea0e1f247ebbb5043863469e61e49b54e7fa330a9f2c449b9ead6cbbd6f2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_df23f11f71e72423f0bb1c11fe4e35e9bb62d265c22ecbc65ff1fa7e6eb3339a->leave($__internal_df23f11f71e72423f0bb1c11fe4e35e9bb62d265c22ecbc65ff1fa7e6eb3339a_prof);

        
        $__internal_c8ea0e1f247ebbb5043863469e61e49b54e7fa330a9f2c449b9ead6cbbd6f2ae->leave($__internal_c8ea0e1f247ebbb5043863469e61e49b54e7fa330a9f2c449b9ead6cbbd6f2ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
