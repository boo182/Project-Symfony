<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_562be9ca48bb7b9e7a2d0d2a53db65db1a26a6ceda2e7afd82b9b4ab8a63e54e extends Twig_Template
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
        $__internal_5e843dbda2981910139a66a710808cb15b4158a24e363ecb7e5558513d6e16ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e843dbda2981910139a66a710808cb15b4158a24e363ecb7e5558513d6e16ab->enter($__internal_5e843dbda2981910139a66a710808cb15b4158a24e363ecb7e5558513d6e16ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_79e34460a8c20a245ce29d9c0c63654525f83f2fc1a7f3d12230f44674ca20ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79e34460a8c20a245ce29d9c0c63654525f83f2fc1a7f3d12230f44674ca20ab->enter($__internal_79e34460a8c20a245ce29d9c0c63654525f83f2fc1a7f3d12230f44674ca20ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5e843dbda2981910139a66a710808cb15b4158a24e363ecb7e5558513d6e16ab->leave($__internal_5e843dbda2981910139a66a710808cb15b4158a24e363ecb7e5558513d6e16ab_prof);

        
        $__internal_79e34460a8c20a245ce29d9c0c63654525f83f2fc1a7f3d12230f44674ca20ab->leave($__internal_79e34460a8c20a245ce29d9c0c63654525f83f2fc1a7f3d12230f44674ca20ab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
