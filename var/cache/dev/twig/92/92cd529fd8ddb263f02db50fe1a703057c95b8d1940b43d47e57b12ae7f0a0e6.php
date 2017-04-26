<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_9fe76bd1c2f3bda8d87e9c28cbe4da71db0d8b271dd71a98eb5ec2a2aa1717fa extends Twig_Template
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
        $__internal_559af6afdbd8d3a0e8299cb237eb12d55deb533225e82abbb19560b725534323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_559af6afdbd8d3a0e8299cb237eb12d55deb533225e82abbb19560b725534323->enter($__internal_559af6afdbd8d3a0e8299cb237eb12d55deb533225e82abbb19560b725534323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_5d3e8c8808f30802b9c6a76440d691eee0532803ec1623ab7def30a0dea812ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3e8c8808f30802b9c6a76440d691eee0532803ec1623ab7def30a0dea812ec->enter($__internal_5d3e8c8808f30802b9c6a76440d691eee0532803ec1623ab7def30a0dea812ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_559af6afdbd8d3a0e8299cb237eb12d55deb533225e82abbb19560b725534323->leave($__internal_559af6afdbd8d3a0e8299cb237eb12d55deb533225e82abbb19560b725534323_prof);

        
        $__internal_5d3e8c8808f30802b9c6a76440d691eee0532803ec1623ab7def30a0dea812ec->leave($__internal_5d3e8c8808f30802b9c6a76440d691eee0532803ec1623ab7def30a0dea812ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
