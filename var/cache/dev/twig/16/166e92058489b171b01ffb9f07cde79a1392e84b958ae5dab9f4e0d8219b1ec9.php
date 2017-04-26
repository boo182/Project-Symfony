<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f2af994afc1a590952d7500cbef3cccd31c51acf2cb9beff593cb81aaa88ebd9 extends Twig_Template
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
        $__internal_6d1886116d43f08fe00de7a0515bec5c9c60a698e4a33083f40fc930bc61e849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d1886116d43f08fe00de7a0515bec5c9c60a698e4a33083f40fc930bc61e849->enter($__internal_6d1886116d43f08fe00de7a0515bec5c9c60a698e4a33083f40fc930bc61e849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_b0426406c2f7d8764a34fee7f80c264a528f4d4d63bd6d03412480b7fdabb613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0426406c2f7d8764a34fee7f80c264a528f4d4d63bd6d03412480b7fdabb613->enter($__internal_b0426406c2f7d8764a34fee7f80c264a528f4d4d63bd6d03412480b7fdabb613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6d1886116d43f08fe00de7a0515bec5c9c60a698e4a33083f40fc930bc61e849->leave($__internal_6d1886116d43f08fe00de7a0515bec5c9c60a698e4a33083f40fc930bc61e849_prof);

        
        $__internal_b0426406c2f7d8764a34fee7f80c264a528f4d4d63bd6d03412480b7fdabb613->leave($__internal_b0426406c2f7d8764a34fee7f80c264a528f4d4d63bd6d03412480b7fdabb613_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
