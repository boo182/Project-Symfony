<?php

/* CABlogBundle:SessionController:login.html.twig */
class __TwigTemplate_3b2053427d873c3584e441c3a7b9a0b5d5b5c80888167b7f66ed57ab9df8a6ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CABlogBundle:SessionController:login.html.twig", 1);
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
        $__internal_afd2d031813f8f77d9db1edbf3c740188ebe47d8444a41f56e1f3dec1a9c9c00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afd2d031813f8f77d9db1edbf3c740188ebe47d8444a41f56e1f3dec1a9c9c00->enter($__internal_afd2d031813f8f77d9db1edbf3c740188ebe47d8444a41f56e1f3dec1a9c9c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CABlogBundle:SessionController:login.html.twig"));

        $__internal_51888cccc42edcfbb2064f3215173942517c899050142572b4fa4cd99fe79067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51888cccc42edcfbb2064f3215173942517c899050142572b4fa4cd99fe79067->enter($__internal_51888cccc42edcfbb2064f3215173942517c899050142572b4fa4cd99fe79067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CABlogBundle:SessionController:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afd2d031813f8f77d9db1edbf3c740188ebe47d8444a41f56e1f3dec1a9c9c00->leave($__internal_afd2d031813f8f77d9db1edbf3c740188ebe47d8444a41f56e1f3dec1a9c9c00_prof);

        
        $__internal_51888cccc42edcfbb2064f3215173942517c899050142572b4fa4cd99fe79067->leave($__internal_51888cccc42edcfbb2064f3215173942517c899050142572b4fa4cd99fe79067_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a74b9942cb74724917c16063f3d6381c71c34237d8e22b104fa8c82616cf053e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a74b9942cb74724917c16063f3d6381c71c34237d8e22b104fa8c82616cf053e->enter($__internal_a74b9942cb74724917c16063f3d6381c71c34237d8e22b104fa8c82616cf053e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e5e5c7654364fe2ab7b6e65e08d039a6b06d0192e59f0d32317857679e24c2d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e5c7654364fe2ab7b6e65e08d039a6b06d0192e59f0d32317857679e24c2d1->enter($__internal_e5e5c7654364fe2ab7b6e65e08d039a6b06d0192e59f0d32317857679e24c2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CABlogBundle:SessionController:login";
        
        $__internal_e5e5c7654364fe2ab7b6e65e08d039a6b06d0192e59f0d32317857679e24c2d1->leave($__internal_e5e5c7654364fe2ab7b6e65e08d039a6b06d0192e59f0d32317857679e24c2d1_prof);

        
        $__internal_a74b9942cb74724917c16063f3d6381c71c34237d8e22b104fa8c82616cf053e->leave($__internal_a74b9942cb74724917c16063f3d6381c71c34237d8e22b104fa8c82616cf053e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b4beddf4dd4c9d7bd06eb66ec0ee9c5fe04fc4b2a0fe5277e9cdea67feb5486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b4beddf4dd4c9d7bd06eb66ec0ee9c5fe04fc4b2a0fe5277e9cdea67feb5486->enter($__internal_1b4beddf4dd4c9d7bd06eb66ec0ee9c5fe04fc4b2a0fe5277e9cdea67feb5486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e3d6d32379246016918321564123527f2ad8ddf9a33432eb25d000e5ae21947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e3d6d32379246016918321564123527f2ad8ddf9a33432eb25d000e5ae21947->enter($__internal_4e3d6d32379246016918321564123527f2ad8ddf9a33432eb25d000e5ae21947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the SessionController:login page</h1>

  ";
        // line 8
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 9
            echo "    <div id=\"connection_error\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 11
        echo "
  <form action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br />
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
    <label for=\"remember_me\">Keep me logged in</label>
    <br />
    <input type=\"submit\" value=\"Connexion\" />
  </form>

";
        
        $__internal_4e3d6d32379246016918321564123527f2ad8ddf9a33432eb25d000e5ae21947->leave($__internal_4e3d6d32379246016918321564123527f2ad8ddf9a33432eb25d000e5ae21947_prof);

        
        $__internal_1b4beddf4dd4c9d7bd06eb66ec0ee9c5fe04fc4b2a0fe5277e9cdea67feb5486->leave($__internal_1b4beddf4dd4c9d7bd06eb66ec0ee9c5fe04fc4b2a0fe5277e9cdea67feb5486_prof);

    }

    public function getTemplateName()
    {
        return "CABlogBundle:SessionController:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 14,  83 => 12,  80 => 11,  74 => 9,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}CABlogBundle:SessionController:login{% endblock %}

{% block body %}
<h1>Welcome to the SessionController:login page</h1>

  {% if error %}
    <div id=\"connection_error\">{{ error.message }}</div>
  {% endif %}

  <form action=\"{{ path('login') }}\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br />
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
    <label for=\"remember_me\">Keep me logged in</label>
    <br />
    <input type=\"submit\" value=\"Connexion\" />
  </form>

{% endblock %}
", "CABlogBundle:SessionController:login.html.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/src/CA/BlogBundle/Resources/views/SessionController/login.html.twig");
    }
}
