<?php

/* CABlogBundle:BlogController:index.html.twig */
class __TwigTemplate_2704b60b62dba4b7745d162a1d0615c5ce553d3d81c8ebf7f50dac92d13fb9ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CABlogBundle:BlogController:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4750f2d1c5019a1d495259dc86aae23e0c2415f5d573406eaab383b68c4cc20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4750f2d1c5019a1d495259dc86aae23e0c2415f5d573406eaab383b68c4cc20->enter($__internal_b4750f2d1c5019a1d495259dc86aae23e0c2415f5d573406eaab383b68c4cc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CABlogBundle:BlogController:index.html.twig"));

        $__internal_4901fef904905a332f5f3a9dc6b48b1b3be59da720d030b1327147ad01fb60ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4901fef904905a332f5f3a9dc6b48b1b3be59da720d030b1327147ad01fb60ec->enter($__internal_4901fef904905a332f5f3a9dc6b48b1b3be59da720d030b1327147ad01fb60ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CABlogBundle:BlogController:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4750f2d1c5019a1d495259dc86aae23e0c2415f5d573406eaab383b68c4cc20->leave($__internal_b4750f2d1c5019a1d495259dc86aae23e0c2415f5d573406eaab383b68c4cc20_prof);

        
        $__internal_4901fef904905a332f5f3a9dc6b48b1b3be59da720d030b1327147ad01fb60ec->leave($__internal_4901fef904905a332f5f3a9dc6b48b1b3be59da720d030b1327147ad01fb60ec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_07f0b57abdd41fa58322599d931971b174a2327d1e37258e9be9a38e1edfb032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07f0b57abdd41fa58322599d931971b174a2327d1e37258e9be9a38e1edfb032->enter($__internal_07f0b57abdd41fa58322599d931971b174a2327d1e37258e9be9a38e1edfb032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_758488bb5abb6a1b3dd717fa9a2fb460dae6200342d1f934242b91660a0027c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_758488bb5abb6a1b3dd717fa9a2fb460dae6200342d1f934242b91660a0027c6->enter($__internal_758488bb5abb6a1b3dd717fa9a2fb460dae6200342d1f934242b91660a0027c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CABlogBundle:BlogController:index";
        
        $__internal_758488bb5abb6a1b3dd717fa9a2fb460dae6200342d1f934242b91660a0027c6->leave($__internal_758488bb5abb6a1b3dd717fa9a2fb460dae6200342d1f934242b91660a0027c6_prof);

        
        $__internal_07f0b57abdd41fa58322599d931971b174a2327d1e37258e9be9a38e1edfb032->leave($__internal_07f0b57abdd41fa58322599d931971b174a2327d1e37258e9be9a38e1edfb032_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_00d23ce80db580b673c74ee46067fc8e74f08b502e4bf438e8e5bb9c2f5350a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00d23ce80db580b673c74ee46067fc8e74f08b502e4bf438e8e5bb9c2f5350a4->enter($__internal_00d23ce80db580b673c74ee46067fc8e74f08b502e4bf438e8e5bb9c2f5350a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_219359644352a6e1d2d8fc01872fda0f7640116cc675bfca088a205466a07c57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219359644352a6e1d2d8fc01872fda0f7640116cc675bfca088a205466a07c57->enter($__internal_219359644352a6e1d2d8fc01872fda0f7640116cc675bfca088a205466a07c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

\t
\t
\t\t<h1>Welcome</h1>
\t
\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_slice($this->env, ($context["posts"] ?? $this->getContext($context, "posts")), 0, 10)));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 13
            echo "\t    <div class=\"post\">
\t\t\t";
            // line 14
            if ( !$this->getAttribute($this->getAttribute($context["post"], "user", array(), "any", false, true), "id", array(), "any", true, true)) {
                // line 15
                echo "\t\t\t\t<p><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "</a> ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "created", array()), "date", array()), "m/d/Y"), "html", null, true);
                echo " by unknown</p>
\t\t\t<p>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
                echo "</p>
\t\t\t";
            } else {
                // line 18
                echo "\t\t\t    <p><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "</a> ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "created", array()), "date", array()), "m/d/Y"), "html", null, true);
                echo " by <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("id" => $this->getAttribute($this->getAttribute($context["post"], "user", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "username", array()), "html", null, true);
                echo "</a></p>
\t\t\t<p>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
                echo "</p>
\t\t\t";
            }
            // line 21
            echo "\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t

";
        
        $__internal_219359644352a6e1d2d8fc01872fda0f7640116cc675bfca088a205466a07c57->leave($__internal_219359644352a6e1d2d8fc01872fda0f7640116cc675bfca088a205466a07c57_prof);

        
        $__internal_00d23ce80db580b673c74ee46067fc8e74f08b502e4bf438e8e5bb9c2f5350a4->leave($__internal_00d23ce80db580b673c74ee46067fc8e74f08b502e4bf438e8e5bb9c2f5350a4_prof);

    }

    public function getTemplateName()
    {
        return "CABlogBundle:BlogController:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 23,  117 => 21,  112 => 19,  99 => 18,  94 => 16,  85 => 15,  83 => 14,  80 => 13,  76 => 12,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}CABlogBundle:BlogController:index{% endblock %}

{% block body %}


\t
\t
\t\t<h1>Welcome</h1>
\t
\t{% for post in posts | slice(0, 10) | reverse %}
\t    <div class=\"post\">
\t\t\t{% if post.user.id is not defined %}
\t\t\t\t<p><a href=\"{{ path('post_show', { 'id': post.id }) }}\">{{ post.title }}</a> {{post.created.date | date(\"m/d/Y\") }} by unknown</p>
\t\t\t<p>{{ post.content }}</p>
\t\t\t{% else %}
\t\t\t    <p><a href=\"{{ path('post_show', { 'id': post.id }) }}\">{{ post.title }}</a> {{post.created.date | date(\"m/d/Y\") }} by <a href=\"{{ path('user_profile', { 'id': post.user.id }) }}\">{{ post.user.username }}</a></p>
\t\t\t<p>{{ post.content }}</p>
\t\t\t{% endif %}
\t\t</div>
\t{% endfor %}
\t

{% endblock %}
", "CABlogBundle:BlogController:index.html.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/src/CA/BlogBundle/Resources/views/BlogController/index.html.twig");
    }
}
