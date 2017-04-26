<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_887883c9f301106d5dff3bb4f9fb1d48229abbcd40cf87a90e177a99e6ab75eb extends Twig_Template
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
        $__internal_baea312e97e785dec79d61cec61710a087e139b45968afa1c52c7b2be53a1ed2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baea312e97e785dec79d61cec61710a087e139b45968afa1c52c7b2be53a1ed2->enter($__internal_baea312e97e785dec79d61cec61710a087e139b45968afa1c52c7b2be53a1ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_72db802d4bfcbc071110569bcb79fa033899427ac103accc8a63c260a02b2d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72db802d4bfcbc071110569bcb79fa033899427ac103accc8a63c260a02b2d2f->enter($__internal_72db802d4bfcbc071110569bcb79fa033899427ac103accc8a63c260a02b2d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_baea312e97e785dec79d61cec61710a087e139b45968afa1c52c7b2be53a1ed2->leave($__internal_baea312e97e785dec79d61cec61710a087e139b45968afa1c52c7b2be53a1ed2_prof);

        
        $__internal_72db802d4bfcbc071110569bcb79fa033899427ac103accc8a63c260a02b2d2f->leave($__internal_72db802d4bfcbc071110569bcb79fa033899427ac103accc8a63c260a02b2d2f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
