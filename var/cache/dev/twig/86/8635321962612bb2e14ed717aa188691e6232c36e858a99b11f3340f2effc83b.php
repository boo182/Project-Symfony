<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f44077459a34304bb17588a895f3a44c016cc0955be6875e45f6570bdd1956c5 extends Twig_Template
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
        $__internal_35a8016db2bc320f773e3935ab7674b36ea6a7257127daec2e11eef8c1c378de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35a8016db2bc320f773e3935ab7674b36ea6a7257127daec2e11eef8c1c378de->enter($__internal_35a8016db2bc320f773e3935ab7674b36ea6a7257127daec2e11eef8c1c378de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_095b3e5595e1c99b4b1cba460f1678ef082815bc10064c9900d8d3c80ce8b351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_095b3e5595e1c99b4b1cba460f1678ef082815bc10064c9900d8d3c80ce8b351->enter($__internal_095b3e5595e1c99b4b1cba460f1678ef082815bc10064c9900d8d3c80ce8b351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_35a8016db2bc320f773e3935ab7674b36ea6a7257127daec2e11eef8c1c378de->leave($__internal_35a8016db2bc320f773e3935ab7674b36ea6a7257127daec2e11eef8c1c378de_prof);

        
        $__internal_095b3e5595e1c99b4b1cba460f1678ef082815bc10064c9900d8d3c80ce8b351->leave($__internal_095b3e5595e1c99b4b1cba460f1678ef082815bc10064c9900d8d3c80ce8b351_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
