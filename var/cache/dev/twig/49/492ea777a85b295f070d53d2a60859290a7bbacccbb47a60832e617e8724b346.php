<?php

/* post/edit.html.twig */
class __TwigTemplate_0054247b1b472787e635d34c7c580461982dd745c9fbb455e64d57cf501fcd98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4226051aaff4779afcad7261a8e141ca5d1d223cad462175a4bb9761e1606a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4226051aaff4779afcad7261a8e141ca5d1d223cad462175a4bb9761e1606a4->enter($__internal_c4226051aaff4779afcad7261a8e141ca5d1d223cad462175a4bb9761e1606a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/edit.html.twig"));

        $__internal_63ac96df6f673a360ebf08296448418f6bde4cc6e6c606dd8e25660b259fc1f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63ac96df6f673a360ebf08296448418f6bde4cc6e6c606dd8e25660b259fc1f8->enter($__internal_63ac96df6f673a360ebf08296448418f6bde4cc6e6c606dd8e25660b259fc1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4226051aaff4779afcad7261a8e141ca5d1d223cad462175a4bb9761e1606a4->leave($__internal_c4226051aaff4779afcad7261a8e141ca5d1d223cad462175a4bb9761e1606a4_prof);

        
        $__internal_63ac96df6f673a360ebf08296448418f6bde4cc6e6c606dd8e25660b259fc1f8->leave($__internal_63ac96df6f673a360ebf08296448418f6bde4cc6e6c606dd8e25660b259fc1f8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_607b14258ff9cda4344bfd3e3726dac243029b4796b9840887f8814074b2a3a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_607b14258ff9cda4344bfd3e3726dac243029b4796b9840887f8814074b2a3a7->enter($__internal_607b14258ff9cda4344bfd3e3726dac243029b4796b9840887f8814074b2a3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ffc5949d70241a43cd73d4a223fa66892e9d242db852f8d5294266a91ba9ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ffc5949d70241a43cd73d4a223fa66892e9d242db852f8d5294266a91ba9ce2->enter($__internal_0ffc5949d70241a43cd73d4a223fa66892e9d242db852f8d5294266a91ba9ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0ffc5949d70241a43cd73d4a223fa66892e9d242db852f8d5294266a91ba9ce2->leave($__internal_0ffc5949d70241a43cd73d4a223fa66892e9d242db852f8d5294266a91ba9ce2_prof);

        
        $__internal_607b14258ff9cda4344bfd3e3726dac243029b4796b9840887f8814074b2a3a7->leave($__internal_607b14258ff9cda4344bfd3e3726dac243029b4796b9840887f8814074b2a3a7_prof);

    }

    public function getTemplateName()
    {
        return "post/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Post edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('post_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "post/edit.html.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/app/Resources/views/post/edit.html.twig");
    }
}
