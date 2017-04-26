<?php

/* post/index.html.twig */
class __TwigTemplate_a8793bddfab93913ab1517eb5132a0327af5e47805e740dbe33efecd86882273 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/index.html.twig", 1);
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
        $__internal_22b1ab61c67b62958bdadba8280d264c8c909b39f76c2b535e0bee5069045097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22b1ab61c67b62958bdadba8280d264c8c909b39f76c2b535e0bee5069045097->enter($__internal_22b1ab61c67b62958bdadba8280d264c8c909b39f76c2b535e0bee5069045097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $__internal_8392db9e29ed869bdcf693e27c26d7c3ce7933560dbebacf19d4822614097fbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8392db9e29ed869bdcf693e27c26d7c3ce7933560dbebacf19d4822614097fbf->enter($__internal_8392db9e29ed869bdcf693e27c26d7c3ce7933560dbebacf19d4822614097fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22b1ab61c67b62958bdadba8280d264c8c909b39f76c2b535e0bee5069045097->leave($__internal_22b1ab61c67b62958bdadba8280d264c8c909b39f76c2b535e0bee5069045097_prof);

        
        $__internal_8392db9e29ed869bdcf693e27c26d7c3ce7933560dbebacf19d4822614097fbf->leave($__internal_8392db9e29ed869bdcf693e27c26d7c3ce7933560dbebacf19d4822614097fbf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_774657fe9cc978dce9ca352e8b41d19c1d408cbaef82688e69662ba82848faf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_774657fe9cc978dce9ca352e8b41d19c1d408cbaef82688e69662ba82848faf8->enter($__internal_774657fe9cc978dce9ca352e8b41d19c1d408cbaef82688e69662ba82848faf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f327ec8e36d64161f2172839a35ecd83418dd21fe33ff10960e7da5e1b27cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f327ec8e36d64161f2172839a35ecd83418dd21fe33ff10960e7da5e1b27cdf->enter($__internal_9f327ec8e36d64161f2172839a35ecd83418dd21fe33ff10960e7da5e1b27cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Posts list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
                <th>Created</th>
                <th>Updated</th>
               ";
        // line 14
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            echo " <th>Actions</th> ";
        }
        // line 15
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["post"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["post"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
               
                <td>
                 ";
            // line 27
            if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
                // line 28
                echo "                    <ul>
                        <li>
                            <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "\">show</a>
                        </li>
                        ";
                // line 32
                if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) == $this->getAttribute($context["post"], "user", array()))) {
                    // line 33
                    echo "                        <li>
                            <a href=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                    echo "\">edit
                            </a>
                            ";
                }
                // line 37
                echo "                        </li>
                    </ul>
                    ";
            }
            // line 40
            echo "                </td>
                
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_new");
        echo "\">Create a new post</a>
        </li>
    </ul>
";
        
        $__internal_9f327ec8e36d64161f2172839a35ecd83418dd21fe33ff10960e7da5e1b27cdf->leave($__internal_9f327ec8e36d64161f2172839a35ecd83418dd21fe33ff10960e7da5e1b27cdf_prof);

        
        $__internal_774657fe9cc978dce9ca352e8b41d19c1d408cbaef82688e69662ba82848faf8->leave($__internal_774657fe9cc978dce9ca352e8b41d19c1d408cbaef82688e69662ba82848faf8_prof);

    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 49,  141 => 44,  132 => 40,  127 => 37,  121 => 34,  118 => 33,  116 => 32,  111 => 30,  107 => 28,  105 => 27,  97 => 24,  91 => 23,  87 => 22,  83 => 21,  77 => 20,  74 => 19,  70 => 18,  65 => 15,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Posts list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
                <th>Created</th>
                <th>Updated</th>
               {% if app.user%} <th>Actions</th> {% endif %}
            </tr>
        </thead>
        <tbody>
        {% for post in posts %}
            <tr>
                <td><a href=\"{{ path('post_show', { 'id': post.id }) }}\">{{ post.id }}</a></td>
                <td>{{ post.title }}</td>
                <td>{{ post.content }}</td>
                <td>{% if post.created %}{{ post.created|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if post.updated %}{{ post.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
               
                <td>
                 {% if app.user%}
                    <ul>
                        <li>
                            <a href=\"{{ path('post_show', { 'id': post.id }) }}\">show</a>
                        </li>
                        {% if app.user == post.user %}
                        <li>
                            <a href=\"{{ path('post_edit', { 'id': post.id }) }}\">edit
                            </a>
                            {% endif %}
                        </li>
                    </ul>
                    {% endif %}
                </td>
                
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('post_new') }}\">Create a new post</a>
        </li>
    </ul>
{% endblock %}
", "post/index.html.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/app/Resources/views/post/index.html.twig");
    }
}
