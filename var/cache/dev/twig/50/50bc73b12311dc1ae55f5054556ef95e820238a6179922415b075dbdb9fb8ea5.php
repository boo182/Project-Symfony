<?php

/* user/edit.html.twig */
class __TwigTemplate_3a6e0eed8af124af173dd6474ef65410761c8453e78d7b7ff64ff1c1880f7517 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
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
        $__internal_f0da5eb4017ebda2eb6a40472941f5fbd2c7b7ea250fcb889bcded1a0b0852e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0da5eb4017ebda2eb6a40472941f5fbd2c7b7ea250fcb889bcded1a0b0852e6->enter($__internal_f0da5eb4017ebda2eb6a40472941f5fbd2c7b7ea250fcb889bcded1a0b0852e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_2d676d1cdefc8f436e913a1c83aef769919eb8ccc8121926367cacae5a240de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d676d1cdefc8f436e913a1c83aef769919eb8ccc8121926367cacae5a240de8->enter($__internal_2d676d1cdefc8f436e913a1c83aef769919eb8ccc8121926367cacae5a240de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0da5eb4017ebda2eb6a40472941f5fbd2c7b7ea250fcb889bcded1a0b0852e6->leave($__internal_f0da5eb4017ebda2eb6a40472941f5fbd2c7b7ea250fcb889bcded1a0b0852e6_prof);

        
        $__internal_2d676d1cdefc8f436e913a1c83aef769919eb8ccc8121926367cacae5a240de8->leave($__internal_2d676d1cdefc8f436e913a1c83aef769919eb8ccc8121926367cacae5a240de8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3907acfcc0813ed0d21c39cb83f211e5c26d1690b1fe94a1986be2a16f2a3dd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3907acfcc0813ed0d21c39cb83f211e5c26d1690b1fe94a1986be2a16f2a3dd9->enter($__internal_3907acfcc0813ed0d21c39cb83f211e5c26d1690b1fe94a1986be2a16f2a3dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a71e6e33f68c3447d9ec4c8a399e886e146774e31c2ec82b57cb3efbdae0f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a71e6e33f68c3447d9ec4c8a399e886e146774e31c2ec82b57cb3efbdae0f59->enter($__internal_1a71e6e33f68c3447d9ec4c8a399e886e146774e31c2ec82b57cb3efbdae0f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User edit</h1>
";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array"), "html", null, true);
        echo "



";
        // line 9
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array") == "ROLE_ADMIN")) {
            // line 10
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
            echo "
        ";
            // line 11
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
            echo "
         <input type=\"submit\" value=\"Edit\" /> 
    ";
            // line 13
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
            echo "
    
    ";
            // line 15
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
            echo "
        <input type=\"submit\" value=\"Delete\">
    ";
            // line 17
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
            echo "
    
";
        } else {
            // line 20
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
            echo "
            ";
            // line 21
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'errors');
            echo "

    <div>
        <h4> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " </h4>
    </div>

    <div>
        ";
            // line 28
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "password", array()), 'errors');
            echo "
        ";
            // line 29
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "password", array()), 'widget');
            echo "
    </div>

    <div>
        ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "mail", array()), 'label');
            echo "
        ";
            // line 34
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "mail", array()), 'errors');
            echo "
        ";
            // line 35
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "mail", array()), 'widget');
            echo "
    </div>
        
        <input type=\"submit\" value=\"Edit\" />
    ";
            // line 39
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
            echo "

";
        }
        // line 42
        echo "
    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li> 
    </ul>
";
        
        $__internal_1a71e6e33f68c3447d9ec4c8a399e886e146774e31c2ec82b57cb3efbdae0f59->leave($__internal_1a71e6e33f68c3447d9ec4c8a399e886e146774e31c2ec82b57cb3efbdae0f59_prof);

        
        $__internal_3907acfcc0813ed0d21c39cb83f211e5c26d1690b1fe94a1986be2a16f2a3dd9->leave($__internal_3907acfcc0813ed0d21c39cb83f211e5c26d1690b1fe94a1986be2a16f2a3dd9_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 45,  137 => 42,  131 => 39,  124 => 35,  120 => 34,  116 => 33,  109 => 29,  105 => 28,  98 => 24,  92 => 21,  87 => 20,  81 => 17,  76 => 15,  71 => 13,  66 => 11,  61 => 10,  59 => 9,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>User edit</h1>
{{ app.user.roles[0] }}



{% if app.user.roles[0] == 'ROLE_ADMIN' %}
    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
         <input type=\"submit\" value=\"Edit\" /> 
    {{ form_end(edit_form) }}
    
    {{ form_start(delete_form) }}
        <input type=\"submit\" value=\"Delete\">
    {{ form_end(delete_form) }}
    
{% else %}
        {{ form_start(edit_form) }}
            {{ form_errors(edit_form) }}

    <div>
        <h4> {{ app.user.username }} </h4>
    </div>

    <div>
        {{ form_errors(edit_form.password) }}
        {{ form_widget(edit_form.password) }}
    </div>

    <div>
        {{ form_label(edit_form.mail) }}
        {{ form_errors(edit_form.mail) }}
        {{ form_widget(edit_form.mail) }}
    </div>
        
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

{% endif %}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li> 
    </ul>
{% endblock %}
", "user/edit.html.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/app/Resources/views/user/edit.html.twig");
    }
}
