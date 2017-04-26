<?php

/* user/index.html.twig */
class __TwigTemplate_368b5c229f2387eda4583d615609a50a04de8a539764d0c2e3518c908d0386c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
        $__internal_8c9af68cbc28dc6361c5324f31285d339129177fae94297974f4d98cf292d405 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c9af68cbc28dc6361c5324f31285d339129177fae94297974f4d98cf292d405->enter($__internal_8c9af68cbc28dc6361c5324f31285d339129177fae94297974f4d98cf292d405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_1c723231a0f8540d4b3bbffbd3bdf78ea09677993d32f369bf2e158b2644424d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c723231a0f8540d4b3bbffbd3bdf78ea09677993d32f369bf2e158b2644424d->enter($__internal_1c723231a0f8540d4b3bbffbd3bdf78ea09677993d32f369bf2e158b2644424d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c9af68cbc28dc6361c5324f31285d339129177fae94297974f4d98cf292d405->leave($__internal_8c9af68cbc28dc6361c5324f31285d339129177fae94297974f4d98cf292d405_prof);

        
        $__internal_1c723231a0f8540d4b3bbffbd3bdf78ea09677993d32f369bf2e158b2644424d->leave($__internal_1c723231a0f8540d4b3bbffbd3bdf78ea09677993d32f369bf2e158b2644424d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_84431bbad3026be6833df5ae77c4fd9f7199b6ba087ab6f3a6491f33ffd4e73b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84431bbad3026be6833df5ae77c4fd9f7199b6ba087ab6f3a6491f33ffd4e73b->enter($__internal_84431bbad3026be6833df5ae77c4fd9f7199b6ba087ab6f3a6491f33ffd4e73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3f85ed9a577d70be3e4d51062aa17c5436dd936b37876ccaeb6a745fec74486a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f85ed9a577d70be3e4d51062aa17c5436dd936b37876ccaeb6a745fec74486a->enter($__internal_3f85ed9a577d70be3e4d51062aa17c5436dd936b37876ccaeb6a745fec74486a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                
                
                <th>Mail</th>
                <th>Roles</th>
                
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 20
            echo "            <tr>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</a></td>
                
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "mail", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["user"], "roles", array())) {
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($context["user"], "roles", array()), ", "), "html", null, true);
            }
            echo "</td>
                <td>
                
                 
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_3f85ed9a577d70be3e4d51062aa17c5436dd936b37876ccaeb6a745fec74486a->leave($__internal_3f85ed9a577d70be3e4d51062aa17c5436dd936b37876ccaeb6a745fec74486a_prof);

        
        $__internal_84431bbad3026be6833df5ae77c4fd9f7199b6ba087ab6f3a6491f33ffd4e73b->leave($__internal_84431bbad3026be6833df5ae77c4fd9f7199b6ba087ab6f3a6491f33ffd4e73b_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 37,  103 => 32,  88 => 25,  84 => 24,  77 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                
                
                <th>Mail</th>
                <th>Roles</th>
                
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td>{{ user.id }}</td>
                <td><a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.username }}</a></td>
                
                <td>{{ user.mail }}</td>
                <td>{% if user.roles %}{{ user.roles|join(', ') }}{% endif %}</td>
                <td>
                
                 
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_new') }}\">Create a new user</a>
        </li>
    </ul>
{% endblock %}
", "user/index.html.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/app/Resources/views/user/index.html.twig");
    }
}
