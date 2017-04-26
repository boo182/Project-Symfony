<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_81af507a7ea12d70a823f5e96361d0e343d20806cf1d8437f43b7f3f4d4568c8 extends Twig_Template
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
        $__internal_c6f6068f4369d17ac40309a9e71410535549856010892c2968699f8d12cbc875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6f6068f4369d17ac40309a9e71410535549856010892c2968699f8d12cbc875->enter($__internal_c6f6068f4369d17ac40309a9e71410535549856010892c2968699f8d12cbc875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_310c07903df26e7d8ee9e1024f692595db6673cb0fb1c3aceae8d724479cf82a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_310c07903df26e7d8ee9e1024f692595db6673cb0fb1c3aceae8d724479cf82a->enter($__internal_310c07903df26e7d8ee9e1024f692595db6673cb0fb1c3aceae8d724479cf82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_c6f6068f4369d17ac40309a9e71410535549856010892c2968699f8d12cbc875->leave($__internal_c6f6068f4369d17ac40309a9e71410535549856010892c2968699f8d12cbc875_prof);

        
        $__internal_310c07903df26e7d8ee9e1024f692595db6673cb0fb1c3aceae8d724479cf82a->leave($__internal_310c07903df26e7d8ee9e1024f692595db6673cb0fb1c3aceae8d724479cf82a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
