<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2919079727d4c0081f9ea66c16c5f15aaccc8a6ee6975ab8487472aa858d6c7d extends Twig_Template
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
        $__internal_f9b24b2fa6dceecfaa5fc71091ff5177e6f8585dd1c470923b6fe3f99e6ffb67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9b24b2fa6dceecfaa5fc71091ff5177e6f8585dd1c470923b6fe3f99e6ffb67->enter($__internal_f9b24b2fa6dceecfaa5fc71091ff5177e6f8585dd1c470923b6fe3f99e6ffb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_3ae7ce3c579538aa44ed0f8f023e1d508518d13784abf29bfc20762aabec0c3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ae7ce3c579538aa44ed0f8f023e1d508518d13784abf29bfc20762aabec0c3e->enter($__internal_3ae7ce3c579538aa44ed0f8f023e1d508518d13784abf29bfc20762aabec0c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_f9b24b2fa6dceecfaa5fc71091ff5177e6f8585dd1c470923b6fe3f99e6ffb67->leave($__internal_f9b24b2fa6dceecfaa5fc71091ff5177e6f8585dd1c470923b6fe3f99e6ffb67_prof);

        
        $__internal_3ae7ce3c579538aa44ed0f8f023e1d508518d13784abf29bfc20762aabec0c3e->leave($__internal_3ae7ce3c579538aa44ed0f8f023e1d508518d13784abf29bfc20762aabec0c3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
