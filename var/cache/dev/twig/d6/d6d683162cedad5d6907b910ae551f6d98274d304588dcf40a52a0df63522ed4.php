<?php

/* user/show.html.twig */
class __TwigTemplate_0eb4bdc2873cfd0e1b5804876eed180abe30cb3e30439ce86b37e0d5c57e64bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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
        $__internal_e26b08100bc919cc7f8b43f6feb179cea32964d34ffbf3accb0bd8c9ae519dca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e26b08100bc919cc7f8b43f6feb179cea32964d34ffbf3accb0bd8c9ae519dca->enter($__internal_e26b08100bc919cc7f8b43f6feb179cea32964d34ffbf3accb0bd8c9ae519dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_123dcc1d5e41f202b5cb2802a6431395ee530be82193e99f1f1e90004769c544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_123dcc1d5e41f202b5cb2802a6431395ee530be82193e99f1f1e90004769c544->enter($__internal_123dcc1d5e41f202b5cb2802a6431395ee530be82193e99f1f1e90004769c544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e26b08100bc919cc7f8b43f6feb179cea32964d34ffbf3accb0bd8c9ae519dca->leave($__internal_e26b08100bc919cc7f8b43f6feb179cea32964d34ffbf3accb0bd8c9ae519dca_prof);

        
        $__internal_123dcc1d5e41f202b5cb2802a6431395ee530be82193e99f1f1e90004769c544->leave($__internal_123dcc1d5e41f202b5cb2802a6431395ee530be82193e99f1f1e90004769c544_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ec8190579d4bd053951fc92bb3e5291ec11d55b792458d54c990092ed3c0f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ec8190579d4bd053951fc92bb3e5291ec11d55b792458d54c990092ed3c0f6f->enter($__internal_7ec8190579d4bd053951fc92bb3e5291ec11d55b792458d54c990092ed3c0f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_49cf8e231a8c4c1e8f8f9ebb5f7b8db3c69229021b67583b1508e0ae85fd4397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49cf8e231a8c4c1e8f8f9ebb5f7b8db3c69229021b67583b1508e0ae85fd4397->enter($__internal_49cf8e231a8c4c1e8f8f9ebb5f7b8db3c69229021b67583b1508e0ae85fd4397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User</h1>

    
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"), 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "    <h3>";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</h3>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</td>
            </tr>
           
            <tr>
                <th>Mail</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "mail", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>";
        // line 27
        if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "roles", array())) {
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "roles", array()), ", "), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Articles</th>
                <td>
                    <p>";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 33
            echo "        
                         <div class=\"post\">
                            <p><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a> created: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "created", array()), "date", array()), "m/d/Y"), "html", null, true);
            echo "</p>
                             <p>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
            echo "</p>
                        </div>
                        </p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_49cf8e231a8c4c1e8f8f9ebb5f7b8db3c69229021b67583b1508e0ae85fd4397->leave($__internal_49cf8e231a8c4c1e8f8f9ebb5f7b8db3c69229021b67583b1508e0ae85fd4397_prof);

        
        $__internal_7ec8190579d4bd053951fc92bb3e5291ec11d55b792458d54c990092ed3c0f6f->leave($__internal_7ec8190579d4bd053951fc92bb3e5291ec11d55b792458d54c990092ed3c0f6f_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 55,  152 => 53,  146 => 50,  140 => 47,  131 => 40,  121 => 36,  113 => 35,  109 => 33,  105 => 32,  95 => 27,  88 => 23,  80 => 18,  73 => 14,  67 => 10,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>User</h1>

    
{% for message in app.session.flashbag.get('info') | slice(0,1) %}
    <h3>{{ message }}</h3>
{% endfor %}
    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ user.id }}</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>{{ user.username }}</td>
            </tr>
           
            <tr>
                <th>Mail</th>
                <td>{{ user.mail }}</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>{% if user.roles %}{{ user.roles|join(', ') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Articles</th>
                <td>
                    <p>{% for post in posts %}
        
                         <div class=\"post\">
                            <p><a href=\"{{ path('post_show', { 'id': post.id }) }}\">{{ post.title }}</a> created: {{ post.created.date | date(\"m/d/Y\")}}</p>
                             <p>{{ post.content }}</p>
                        </div>
                        </p>
                        {% endfor %}
                </td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "user/show.html.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/app/Resources/views/user/show.html.twig");
    }
}
