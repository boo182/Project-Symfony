<?php

/* user/profile.html.twig */
class __TwigTemplate_3e1d48fe5508667c2e85b0d7ff078978b53f7fe6ddab1f7973f36993f0cea596 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "user/profile.html.twig", 1);
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
        $__internal_7a6166cb9ffd3c346971b491474df1a4cf5dacb4ed13dc9711d598aac91ac00c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a6166cb9ffd3c346971b491474df1a4cf5dacb4ed13dc9711d598aac91ac00c->enter($__internal_7a6166cb9ffd3c346971b491474df1a4cf5dacb4ed13dc9711d598aac91ac00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $__internal_0f1d613d457d9547a38896a8ae41359bf319408aac31611cb8a6d12fb0cbb0eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1d613d457d9547a38896a8ae41359bf319408aac31611cb8a6d12fb0cbb0eb->enter($__internal_0f1d613d457d9547a38896a8ae41359bf319408aac31611cb8a6d12fb0cbb0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a6166cb9ffd3c346971b491474df1a4cf5dacb4ed13dc9711d598aac91ac00c->leave($__internal_7a6166cb9ffd3c346971b491474df1a4cf5dacb4ed13dc9711d598aac91ac00c_prof);

        
        $__internal_0f1d613d457d9547a38896a8ae41359bf319408aac31611cb8a6d12fb0cbb0eb->leave($__internal_0f1d613d457d9547a38896a8ae41359bf319408aac31611cb8a6d12fb0cbb0eb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_43718f2613cb018f0ce7acc46e4b75066e5daee1261f1d49d02e98ea4844d10c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43718f2613cb018f0ce7acc46e4b75066e5daee1261f1d49d02e98ea4844d10c->enter($__internal_43718f2613cb018f0ce7acc46e4b75066e5daee1261f1d49d02e98ea4844d10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2745948daa65cdaaffdba64b4c2ddb39f4b61dee18c0809836655620228c4f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2745948daa65cdaaffdba64b4c2ddb39f4b61dee18c0809836655620228c4f9c->enter($__internal_2745948daa65cdaaffdba64b4c2ddb39f4b61dee18c0809836655620228c4f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CABlogBundle:BlogController:profile";
        
        $__internal_2745948daa65cdaaffdba64b4c2ddb39f4b61dee18c0809836655620228c4f9c->leave($__internal_2745948daa65cdaaffdba64b4c2ddb39f4b61dee18c0809836655620228c4f9c_prof);

        
        $__internal_43718f2613cb018f0ce7acc46e4b75066e5daee1261f1d49d02e98ea4844d10c->leave($__internal_43718f2613cb018f0ce7acc46e4b75066e5daee1261f1d49d02e98ea4844d10c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8c467442bf15927249aee5cad5134493c12e4132d8fcd0a1691478f377bf9de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8c467442bf15927249aee5cad5134493c12e4132d8fcd0a1691478f377bf9de->enter($__internal_a8c467442bf15927249aee5cad5134493c12e4132d8fcd0a1691478f377bf9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6296c004ee29001602ce9212208c03d0a6a9b54143deb111d935b9a6d35a6f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6296c004ee29001602ce9212208c03d0a6a9b54143deb111d935b9a6d35a6f9c->enter($__internal_6296c004ee29001602ce9212208c03d0a6a9b54143deb111d935b9a6d35a6f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["posts"] ?? $this->getContext($context, "posts")));
        echo "
\t
\t<h1>Welcome to the BlogController of ";
        // line 8
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "</h1>
\t<p>";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 10
            echo "\t\t
\t\t<div class=\"post\">
<p><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a> created: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "created", array()), "date", array()), "m/d/Y"), "html", null, true);
            echo "</p>
<p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
            echo "</p>
</div>

\t    
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</p>
\t\t
\t
\t
\t

";
        
        $__internal_6296c004ee29001602ce9212208c03d0a6a9b54143deb111d935b9a6d35a6f9c->leave($__internal_6296c004ee29001602ce9212208c03d0a6a9b54143deb111d935b9a6d35a6f9c_prof);

        
        $__internal_a8c467442bf15927249aee5cad5134493c12e4132d8fcd0a1691478f377bf9de->leave($__internal_a8c467442bf15927249aee5cad5134493c12e4132d8fcd0a1691478f377bf9de_prof);

    }

    public function getTemplateName()
    {
        return "user/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 17,  94 => 13,  86 => 12,  82 => 10,  78 => 9,  74 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}CABlogBundle:BlogController:profile{% endblock %}

{% block body %}
\t{{ dump(posts) }}
\t
\t<h1>Welcome to the BlogController of {{ id }}</h1>
\t<p>{% for post in posts %}
\t\t
\t\t<div class=\"post\">
<p><a href=\"{{ path('post_show', { 'id': post.id }) }}\">{{ post.title }}</a> created: {{ post.created.date | date(\"m/d/Y\")}}</p>
<p>{{ post.content }}</p>
</div>

\t    
\t{% endfor %}</p>
\t\t
\t
\t
\t

{% endblock %}
", "user/profile.html.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/app/Resources/views/user/profile.html.twig");
    }
}
