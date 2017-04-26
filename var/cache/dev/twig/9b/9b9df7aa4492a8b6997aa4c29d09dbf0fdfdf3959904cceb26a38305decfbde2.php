<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_02e82817eba516ee8b0104632d3428a786a93df59bab57737fbd191ef93dbbb8 extends Twig_Template
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
        $__internal_10699b4946b1817ab3d1d9452ee56dde083e7a507eb682bca1ffbf886d1be0e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10699b4946b1817ab3d1d9452ee56dde083e7a507eb682bca1ffbf886d1be0e9->enter($__internal_10699b4946b1817ab3d1d9452ee56dde083e7a507eb682bca1ffbf886d1be0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_44f425d42d693b92e3c2a124e5c60011b9d653817bed6eb5d727b9ef7922f7b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f425d42d693b92e3c2a124e5c60011b9d653817bed6eb5d727b9ef7922f7b6->enter($__internal_44f425d42d693b92e3c2a124e5c60011b9d653817bed6eb5d727b9ef7922f7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_10699b4946b1817ab3d1d9452ee56dde083e7a507eb682bca1ffbf886d1be0e9->leave($__internal_10699b4946b1817ab3d1d9452ee56dde083e7a507eb682bca1ffbf886d1be0e9_prof);

        
        $__internal_44f425d42d693b92e3c2a124e5c60011b9d653817bed6eb5d727b9ef7922f7b6->leave($__internal_44f425d42d693b92e3c2a124e5c60011b9d653817bed6eb5d727b9ef7922f7b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
