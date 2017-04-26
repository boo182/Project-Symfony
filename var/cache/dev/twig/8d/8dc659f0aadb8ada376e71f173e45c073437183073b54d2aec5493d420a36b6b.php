<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2b862ac6c2dbcc245bd37b96112245747335c672e73677a420556821d1a3cb83 extends Twig_Template
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
        $__internal_04c3bfac1b23a128615661b41803944439fa5dfad063d5dc62b00def89d11443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04c3bfac1b23a128615661b41803944439fa5dfad063d5dc62b00def89d11443->enter($__internal_04c3bfac1b23a128615661b41803944439fa5dfad063d5dc62b00def89d11443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_7bb08ce0c0d2bd54537c11ab2eec159087731f0077a1905ea516eb285322822d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb08ce0c0d2bd54537c11ab2eec159087731f0077a1905ea516eb285322822d->enter($__internal_7bb08ce0c0d2bd54537c11ab2eec159087731f0077a1905ea516eb285322822d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_04c3bfac1b23a128615661b41803944439fa5dfad063d5dc62b00def89d11443->leave($__internal_04c3bfac1b23a128615661b41803944439fa5dfad063d5dc62b00def89d11443_prof);

        
        $__internal_7bb08ce0c0d2bd54537c11ab2eec159087731f0077a1905ea516eb285322822d->leave($__internal_7bb08ce0c0d2bd54537c11ab2eec159087731f0077a1905ea516eb285322822d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
