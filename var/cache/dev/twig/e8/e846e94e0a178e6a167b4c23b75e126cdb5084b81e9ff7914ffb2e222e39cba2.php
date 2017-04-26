<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_5a5e50c2c435d3d0b639e08e65f7d45416a064deb9badbcd8d488815526acb26 extends Twig_Template
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
        $__internal_76ead24ad624fc6c150e26f3f33a23a0ebf461d523f742811a6709e3378d739b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76ead24ad624fc6c150e26f3f33a23a0ebf461d523f742811a6709e3378d739b->enter($__internal_76ead24ad624fc6c150e26f3f33a23a0ebf461d523f742811a6709e3378d739b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_308adc0b4b3584f2b56258b32919d3a150dbc86be7f787edb9fa1c8d702077d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_308adc0b4b3584f2b56258b32919d3a150dbc86be7f787edb9fa1c8d702077d9->enter($__internal_308adc0b4b3584f2b56258b32919d3a150dbc86be7f787edb9fa1c8d702077d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_76ead24ad624fc6c150e26f3f33a23a0ebf461d523f742811a6709e3378d739b->leave($__internal_76ead24ad624fc6c150e26f3f33a23a0ebf461d523f742811a6709e3378d739b_prof);

        
        $__internal_308adc0b4b3584f2b56258b32919d3a150dbc86be7f787edb9fa1c8d702077d9->leave($__internal_308adc0b4b3584f2b56258b32919d3a150dbc86be7f787edb9fa1c8d702077d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
