<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_11148cd946ddc855793cd1d60500c40ac9b1bf7a7b2d256fdd955d5d31a385d5 extends Twig_Template
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
        $__internal_7b7220046ed8487eaf1ce202b2b3a8b0679d83501bc5020c35813f0d8cc219d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b7220046ed8487eaf1ce202b2b3a8b0679d83501bc5020c35813f0d8cc219d3->enter($__internal_7b7220046ed8487eaf1ce202b2b3a8b0679d83501bc5020c35813f0d8cc219d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_f8d363fdeee81681e1fcf92aad9978f43a5511bbd88979031cc71994d07f4fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d363fdeee81681e1fcf92aad9978f43a5511bbd88979031cc71994d07f4fc5->enter($__internal_f8d363fdeee81681e1fcf92aad9978f43a5511bbd88979031cc71994d07f4fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7b7220046ed8487eaf1ce202b2b3a8b0679d83501bc5020c35813f0d8cc219d3->leave($__internal_7b7220046ed8487eaf1ce202b2b3a8b0679d83501bc5020c35813f0d8cc219d3_prof);

        
        $__internal_f8d363fdeee81681e1fcf92aad9978f43a5511bbd88979031cc71994d07f4fc5->leave($__internal_f8d363fdeee81681e1fcf92aad9978f43a5511bbd88979031cc71994d07f4fc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
