<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_008cdc2257fcd3fbc5ae5ed4c8dcfb742e184ed2ea67c98ced25babbd76d79e5 extends Twig_Template
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
        $__internal_26d0b3a2111470f2c26ecede1b4fa9ef53593ebdfcf4f64f7bad766fe5960be1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26d0b3a2111470f2c26ecede1b4fa9ef53593ebdfcf4f64f7bad766fe5960be1->enter($__internal_26d0b3a2111470f2c26ecede1b4fa9ef53593ebdfcf4f64f7bad766fe5960be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_588daefcac9b52ed6f5a17240ad790015b2639654c4c3f22a79afb966cca9ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_588daefcac9b52ed6f5a17240ad790015b2639654c4c3f22a79afb966cca9ef0->enter($__internal_588daefcac9b52ed6f5a17240ad790015b2639654c4c3f22a79afb966cca9ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_26d0b3a2111470f2c26ecede1b4fa9ef53593ebdfcf4f64f7bad766fe5960be1->leave($__internal_26d0b3a2111470f2c26ecede1b4fa9ef53593ebdfcf4f64f7bad766fe5960be1_prof);

        
        $__internal_588daefcac9b52ed6f5a17240ad790015b2639654c4c3f22a79afb966cca9ef0->leave($__internal_588daefcac9b52ed6f5a17240ad790015b2639654c4c3f22a79afb966cca9ef0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
