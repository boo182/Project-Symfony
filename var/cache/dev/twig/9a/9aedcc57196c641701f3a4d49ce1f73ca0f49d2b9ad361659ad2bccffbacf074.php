<?php

/* ::base.html.twig */
class __TwigTemplate_ecb3622156435dcef755b54ddd8e4732d0aa1bb06c91b31273e3d3ad684eea6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71a0f3607d822fa5def5de12a608fb3deeaf07ae8062c91d4f904bc229c25b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71a0f3607d822fa5def5de12a608fb3deeaf07ae8062c91d4f904bc229c25b9d->enter($__internal_71a0f3607d822fa5def5de12a608fb3deeaf07ae8062c91d4f904bc229c25b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b035b9231c05c1c972173dadc3cbdd349bdfc196719c99955ebdee6fdaa99562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b035b9231c05c1c972173dadc3cbdd349bdfc196719c99955ebdee6fdaa99562->enter($__internal_b035b9231c05c1c972173dadc3cbdd349bdfc196719c99955ebdee6fdaa99562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>

<body>
    ";
        // line 12
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 13
            echo "      <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Log out</a>
    ";
        } else {
            // line 15
            echo "      <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Log in</a>
    ";
        }
        // line 17
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    <footer>Site developpé par ";
        echo twig_escape_filter($this->env, ($context["webmaster"] ?? $this->getContext($context, "webmaster")), "html", null, true);
        echo "</footer>
</body>

</html>
";
        
        $__internal_71a0f3607d822fa5def5de12a608fb3deeaf07ae8062c91d4f904bc229c25b9d->leave($__internal_71a0f3607d822fa5def5de12a608fb3deeaf07ae8062c91d4f904bc229c25b9d_prof);

        
        $__internal_b035b9231c05c1c972173dadc3cbdd349bdfc196719c99955ebdee6fdaa99562->leave($__internal_b035b9231c05c1c972173dadc3cbdd349bdfc196719c99955ebdee6fdaa99562_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_bead963275a4e4231be1cdf0bdbcd1f590668d278879b00e2bc4faf86b2cb040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bead963275a4e4231be1cdf0bdbcd1f590668d278879b00e2bc4faf86b2cb040->enter($__internal_bead963275a4e4231be1cdf0bdbcd1f590668d278879b00e2bc4faf86b2cb040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c8a5996b99a5c8e0c9c9f81a1ed4140f6b1a8f5e11314692ab06206c310fb4c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a5996b99a5c8e0c9c9f81a1ed4140f6b1a8f5e11314692ab06206c310fb4c5->enter($__internal_c8a5996b99a5c8e0c9c9f81a1ed4140f6b1a8f5e11314692ab06206c310fb4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c8a5996b99a5c8e0c9c9f81a1ed4140f6b1a8f5e11314692ab06206c310fb4c5->leave($__internal_c8a5996b99a5c8e0c9c9f81a1ed4140f6b1a8f5e11314692ab06206c310fb4c5_prof);

        
        $__internal_bead963275a4e4231be1cdf0bdbcd1f590668d278879b00e2bc4faf86b2cb040->leave($__internal_bead963275a4e4231be1cdf0bdbcd1f590668d278879b00e2bc4faf86b2cb040_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1dd6f6fa0ff75840dc9914e6418f847fc7f8cea56f70b54fd621fcd26a197aec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dd6f6fa0ff75840dc9914e6418f847fc7f8cea56f70b54fd621fcd26a197aec->enter($__internal_1dd6f6fa0ff75840dc9914e6418f847fc7f8cea56f70b54fd621fcd26a197aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9bbcdfb8f31d1dfb686a00b4875e539c1bc1bfb87df01801a6b7c3e4fc3abda4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bbcdfb8f31d1dfb686a00b4875e539c1bc1bfb87df01801a6b7c3e4fc3abda4->enter($__internal_9bbcdfb8f31d1dfb686a00b4875e539c1bc1bfb87df01801a6b7c3e4fc3abda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9bbcdfb8f31d1dfb686a00b4875e539c1bc1bfb87df01801a6b7c3e4fc3abda4->leave($__internal_9bbcdfb8f31d1dfb686a00b4875e539c1bc1bfb87df01801a6b7c3e4fc3abda4_prof);

        
        $__internal_1dd6f6fa0ff75840dc9914e6418f847fc7f8cea56f70b54fd621fcd26a197aec->leave($__internal_1dd6f6fa0ff75840dc9914e6418f847fc7f8cea56f70b54fd621fcd26a197aec_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf75e20ce9f23e4930d15635e70715f117ef9cc9dc421e61fabf5cdbc313eeeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf75e20ce9f23e4930d15635e70715f117ef9cc9dc421e61fabf5cdbc313eeeb->enter($__internal_cf75e20ce9f23e4930d15635e70715f117ef9cc9dc421e61fabf5cdbc313eeeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_854510e73d714d66d248e72c3ca3b8de2f2684f84a8a4297c7e29299c7214777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854510e73d714d66d248e72c3ca3b8de2f2684f84a8a4297c7e29299c7214777->enter($__internal_854510e73d714d66d248e72c3ca3b8de2f2684f84a8a4297c7e29299c7214777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_854510e73d714d66d248e72c3ca3b8de2f2684f84a8a4297c7e29299c7214777->leave($__internal_854510e73d714d66d248e72c3ca3b8de2f2684f84a8a4297c7e29299c7214777_prof);

        
        $__internal_cf75e20ce9f23e4930d15635e70715f117ef9cc9dc421e61fabf5cdbc313eeeb->leave($__internal_cf75e20ce9f23e4930d15635e70715f117ef9cc9dc421e61fabf5cdbc313eeeb_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cfec848243f7b60acf80271cc5d94027244600cc061c160d4a9a7b0177315500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfec848243f7b60acf80271cc5d94027244600cc061c160d4a9a7b0177315500->enter($__internal_cfec848243f7b60acf80271cc5d94027244600cc061c160d4a9a7b0177315500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_05083e846618f5f7023b4fc67646dfed0d3b610bb5dffb2dc51f7d346461a04d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05083e846618f5f7023b4fc67646dfed0d3b610bb5dffb2dc51f7d346461a04d->enter($__internal_05083e846618f5f7023b4fc67646dfed0d3b610bb5dffb2dc51f7d346461a04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_05083e846618f5f7023b4fc67646dfed0d3b610bb5dffb2dc51f7d346461a04d->leave($__internal_05083e846618f5f7023b4fc67646dfed0d3b610bb5dffb2dc51f7d346461a04d_prof);

        
        $__internal_cfec848243f7b60acf80271cc5d94027244600cc061c160d4a9a7b0177315500->leave($__internal_cfec848243f7b60acf80271cc5d94027244600cc061c160d4a9a7b0177315500_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 18,  121 => 17,  104 => 7,  86 => 6,  70 => 19,  67 => 18,  64 => 17,  58 => 15,  52 => 13,  50 => 12,  42 => 8,  40 => 7,  36 => 6,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>

<body>
    {% if app.user %}
      <a href=\"{{ path('logout') }}\">Log out</a>
    {% else %}
      <a href=\"{{ path('login') }}\">Log in</a>
    {% endif %}
    {% block body %}{% endblock %}
    {% block javascripts %}{% endblock %}
    <footer>Site developpé par {{ webmaster }}</footer>
</body>

</html>
", "::base.html.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/app/Resources/views/base.html.twig");
    }
}
