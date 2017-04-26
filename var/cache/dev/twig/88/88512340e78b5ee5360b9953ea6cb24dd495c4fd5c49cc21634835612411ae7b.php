<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_9cdd3f8a4cea117afd5817428ba1c79d7bfddb675cfef2859e23d941b66a5f08 extends Twig_Template
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
        $__internal_b13e3aef00d46f5c78eaead9835104eabdebe7d0d36a5161aec761cd4e8ae0e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b13e3aef00d46f5c78eaead9835104eabdebe7d0d36a5161aec761cd4e8ae0e3->enter($__internal_b13e3aef00d46f5c78eaead9835104eabdebe7d0d36a5161aec761cd4e8ae0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_87a8ad37a71bf7a4943d0f7095d2ca72613aaff693d05737a0b5a59df075cb82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a8ad37a71bf7a4943d0f7095d2ca72613aaff693d05737a0b5a59df075cb82->enter($__internal_87a8ad37a71bf7a4943d0f7095d2ca72613aaff693d05737a0b5a59df075cb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b13e3aef00d46f5c78eaead9835104eabdebe7d0d36a5161aec761cd4e8ae0e3->leave($__internal_b13e3aef00d46f5c78eaead9835104eabdebe7d0d36a5161aec761cd4e8ae0e3_prof);

        
        $__internal_87a8ad37a71bf7a4943d0f7095d2ca72613aaff693d05737a0b5a59df075cb82->leave($__internal_87a8ad37a71bf7a4943d0f7095d2ca72613aaff693d05737a0b5a59df075cb82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
