<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_5676358a40fab78136bbd2be0aa1cebce8bf74e34dcc906a98c692b2dab37f9b extends Twig_Template
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
        $__internal_c90bcf4eb2fe6782112952fa409aece3b806be9fcc2c8cfcdba5a1f01a70ad8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c90bcf4eb2fe6782112952fa409aece3b806be9fcc2c8cfcdba5a1f01a70ad8c->enter($__internal_c90bcf4eb2fe6782112952fa409aece3b806be9fcc2c8cfcdba5a1f01a70ad8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_733784ef09cf5eb41b04d6fd504893fc93e232783898a631feba1bed38341580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_733784ef09cf5eb41b04d6fd504893fc93e232783898a631feba1bed38341580->enter($__internal_733784ef09cf5eb41b04d6fd504893fc93e232783898a631feba1bed38341580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c90bcf4eb2fe6782112952fa409aece3b806be9fcc2c8cfcdba5a1f01a70ad8c->leave($__internal_c90bcf4eb2fe6782112952fa409aece3b806be9fcc2c8cfcdba5a1f01a70ad8c_prof);

        
        $__internal_733784ef09cf5eb41b04d6fd504893fc93e232783898a631feba1bed38341580->leave($__internal_733784ef09cf5eb41b04d6fd504893fc93e232783898a631feba1bed38341580_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
