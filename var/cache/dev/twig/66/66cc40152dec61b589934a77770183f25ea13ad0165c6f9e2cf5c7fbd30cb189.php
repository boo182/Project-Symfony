<?php

/* @WebProfiler/Collector/logger.html.twig */
class __TwigTemplate_13e52a6c55af79a2e3aea9f6cf4a3a756b44d430623ee2605bc5c59cdff8453a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/logger.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9a60156b494f507e759033b9ff30ae05083555297912706c78f3bac92a44ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9a60156b494f507e759033b9ff30ae05083555297912706c78f3bac92a44ae9->enter($__internal_b9a60156b494f507e759033b9ff30ae05083555297912706c78f3bac92a44ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/logger.html.twig"));

        $__internal_cd210c75e99b023f25ac0c691a22aec733b51288545c5031fff786916fb77182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd210c75e99b023f25ac0c691a22aec733b51288545c5031fff786916fb77182->enter($__internal_cd210c75e99b023f25ac0c691a22aec733b51288545c5031fff786916fb77182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/logger.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9a60156b494f507e759033b9ff30ae05083555297912706c78f3bac92a44ae9->leave($__internal_b9a60156b494f507e759033b9ff30ae05083555297912706c78f3bac92a44ae9_prof);

        
        $__internal_cd210c75e99b023f25ac0c691a22aec733b51288545c5031fff786916fb77182->leave($__internal_cd210c75e99b023f25ac0c691a22aec733b51288545c5031fff786916fb77182_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d5fd4959fccf3180ee7a8afe915b49b6514c7fb20a700cbff9eac703bc36f5ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5fd4959fccf3180ee7a8afe915b49b6514c7fb20a700cbff9eac703bc36f5ad->enter($__internal_d5fd4959fccf3180ee7a8afe915b49b6514c7fb20a700cbff9eac703bc36f5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_33666d9757c01e48286a143487eb0473988bfb9ab54419812dadff267a617216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33666d9757c01e48286a143487eb0473988bfb9ab54419812dadff267a617216->enter($__internal_33666d9757c01e48286a143487eb0473988bfb9ab54419812dadff267a617216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array()) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", array())) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countwarnings", array()))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            $context["status_color"] = (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) ? ("red") : ("yellow"));
            // line 9
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/logger.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 10
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) ? ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) : (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", array()) + $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countwarnings", array())))), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start();
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 16
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) ? ("red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "counterrors", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "counterrors", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Warnings</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 21
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countwarnings", array())) ? ("yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countwarnings", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countwarnings", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 26
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", array())) ? ("yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 29
            echo "
        ";
            // line 30
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "status" => ($context["status_color"] ?? $this->getContext($context, "status_color"))));
            echo "
    ";
        }
        
        $__internal_33666d9757c01e48286a143487eb0473988bfb9ab54419812dadff267a617216->leave($__internal_33666d9757c01e48286a143487eb0473988bfb9ab54419812dadff267a617216_prof);

        
        $__internal_d5fd4959fccf3180ee7a8afe915b49b6514c7fb20a700cbff9eac703bc36f5ad->leave($__internal_d5fd4959fccf3180ee7a8afe915b49b6514c7fb20a700cbff9eac703bc36f5ad_prof);

    }

    // line 34
    public function block_menu($context, array $blocks = array())
    {
        $__internal_01ef8ebc8f5c6e49c30d29946909f9dd8cc3aa88aab8119496409322e12c3944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01ef8ebc8f5c6e49c30d29946909f9dd8cc3aa88aab8119496409322e12c3944->enter($__internal_01ef8ebc8f5c6e49c30d29946909f9dd8cc3aa88aab8119496409322e12c3944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_68a686990f8b5170a180526a8901c6473e567ad46bf1cd46ce440d5c7ffec341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a686990f8b5170a180526a8901c6473e567ad46bf1cd46ce440d5c7ffec341->enter($__internal_68a686990f8b5170a180526a8901c6473e567ad46bf1cd46ce440d5c7ffec341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 35
        echo "    <span class=\"label label-status-";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) ? ("error") : (((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", array()) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countwarnings", array()))) ? ("warning") : (""))));
        echo " ";
        echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "logs", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 36
        echo twig_include($this->env, $context, "@WebProfiler/Icon/logger.svg");
        echo "</span>
        <strong>Logs</strong>
        ";
        // line 38
        if ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array()) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", array())) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countwarnings", array()))) {
            // line 39
            echo "            <span class=\"count\">
                <span>";
            // line 40
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) ? ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) : (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", array()) + $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countwarnings", array())))), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 43
        echo "    </span>
";
        
        $__internal_68a686990f8b5170a180526a8901c6473e567ad46bf1cd46ce440d5c7ffec341->leave($__internal_68a686990f8b5170a180526a8901c6473e567ad46bf1cd46ce440d5c7ffec341_prof);

        
        $__internal_01ef8ebc8f5c6e49c30d29946909f9dd8cc3aa88aab8119496409322e12c3944->leave($__internal_01ef8ebc8f5c6e49c30d29946909f9dd8cc3aa88aab8119496409322e12c3944_prof);

    }

    // line 46
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae067616c43f9adfc4d5cd04d0804cb15aff3c90895de20b3f1e37882664a78b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae067616c43f9adfc4d5cd04d0804cb15aff3c90895de20b3f1e37882664a78b->enter($__internal_ae067616c43f9adfc4d5cd04d0804cb15aff3c90895de20b3f1e37882664a78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6b1065ecf4d79ce97df44bf683f021a7d530c20cb72dbcba4757a3675b2124b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b1065ecf4d79ce97df44bf683f021a7d530c20cb72dbcba4757a3675b2124b0->enter($__internal_6b1065ecf4d79ce97df44bf683f021a7d530c20cb72dbcba4757a3675b2124b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 47
        echo "    <h2>Log Messages</h2>

    ";
        // line 49
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "logs", array()))) {
            // line 50
            echo "        <div class=\"empty\">
            <p>No log messages available.</p>
        </div>
    ";
        } else {
            // line 54
            echo "        ";
            // line 55
            echo "        ";
            list($context["deprecation_logs"], $context["debug_logs"], $context["info_and_error_logs"], $context["silenced_logs"]) =             array(array(), array(), array(), array());
            // line 56
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "logs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 57
                echo "            ";
                if (($this->getAttribute($context["log"], "scream", array(), "any", true, true) &&  !$this->getAttribute($context["log"], "scream", array()))) {
                    // line 58
                    echo "                ";
                    $context["deprecation_logs"] = twig_array_merge(($context["deprecation_logs"] ?? $this->getContext($context, "deprecation_logs")), array(0 => $context["log"]));
                    // line 59
                    echo "            ";
                } elseif (($this->getAttribute($context["log"], "scream", array(), "any", true, true) && $this->getAttribute($context["log"], "scream", array()))) {
                    // line 60
                    echo "                ";
                    $context["silenced_logs"] = twig_array_merge(($context["silenced_logs"] ?? $this->getContext($context, "silenced_logs")), array(0 => $context["log"]));
                    // line 61
                    echo "            ";
                } elseif (($this->getAttribute($context["log"], "priorityName", array()) == "DEBUG")) {
                    // line 62
                    echo "                ";
                    $context["debug_logs"] = twig_array_merge(($context["debug_logs"] ?? $this->getContext($context, "debug_logs")), array(0 => $context["log"]));
                    // line 63
                    echo "            ";
                } else {
                    // line 64
                    echo "                ";
                    $context["info_and_error_logs"] = twig_array_merge(($context["info_and_error_logs"] ?? $this->getContext($context, "info_and_error_logs")), array(0 => $context["log"]));
                    // line 65
                    echo "            ";
                }
                // line 66
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Info. &amp; Errors <span class=\"badge status-";
            // line 70
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) ? ("error") : ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countwarnings", array())) ? ("warning") : (""))));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) ? ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) : (twig_length_filter($this->env, ($context["info_and_error_logs"] ?? $this->getContext($context, "info_and_error_logs"))))), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 73
            if (twig_test_empty(($context["info_and_error_logs"] ?? $this->getContext($context, "info_and_error_logs")))) {
                // line 74
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 78
                echo "                        ";
                echo $context["helper"]->getrender_table(($context["info_and_error_logs"] ?? $this->getContext($context, "info_and_error_logs")), "info", true);
                echo "
                    ";
            }
            // line 80
            echo "                </div>
            </div>

            <div class=\"tab\">
                ";
            // line 86
            echo "                <h3 class=\"tab-title\">Deprecations <span class=\"badge status-";
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", array())) ? ("warning") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array()), 0)) : (0)), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 89
            if (twig_test_empty(($context["deprecation_logs"] ?? $this->getContext($context, "deprecation_logs")))) {
                // line 90
                echo "                        <div class=\"empty\">
                            <p>There are no log messages about deprecated features.</p>
                        </div>
                    ";
            } else {
                // line 94
                echo "                        ";
                echo $context["helper"]->getrender_table(($context["deprecation_logs"] ?? $this->getContext($context, "deprecation_logs")), "deprecation", false, true);
                echo "
                    ";
            }
            // line 96
            echo "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Debug <span class=\"badge\">";
            // line 100
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["debug_logs"] ?? $this->getContext($context, "debug_logs"))), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 103
            if (twig_test_empty(($context["debug_logs"] ?? $this->getContext($context, "debug_logs")))) {
                // line 104
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 108
                echo "                        ";
                echo $context["helper"]->getrender_table(($context["debug_logs"] ?? $this->getContext($context, "debug_logs")), "debug");
                echo "
                    ";
            }
            // line 110
            echo "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Silenced PHP Notices<span class=\"badge\">";
            // line 114
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countscreams", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countscreams", array()), 0)) : (0)), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 117
            if (twig_test_empty(($context["silenced_logs"] ?? $this->getContext($context, "silenced_logs")))) {
                // line 118
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 122
                echo "                        ";
                echo $context["helper"]->getrender_table(($context["silenced_logs"] ?? $this->getContext($context, "silenced_logs")), "silenced");
                echo "
                    ";
            }
            // line 124
            echo "                </div>
            </div>

        </div>
    ";
        }
        
        $__internal_6b1065ecf4d79ce97df44bf683f021a7d530c20cb72dbcba4757a3675b2124b0->leave($__internal_6b1065ecf4d79ce97df44bf683f021a7d530c20cb72dbcba4757a3675b2124b0_prof);

        
        $__internal_ae067616c43f9adfc4d5cd04d0804cb15aff3c90895de20b3f1e37882664a78b->leave($__internal_ae067616c43f9adfc4d5cd04d0804cb15aff3c90895de20b3f1e37882664a78b_prof);

    }

    // line 131
    public function getrender_table($__logs__ = null, $__category__ = "", $__show_level__ = false, $__is_deprecation__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "logs" => $__logs__,
            "category" => $__category__,
            "show_level" => $__show_level__,
            "is_deprecation" => $__is_deprecation__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_2eabb3d885b6619dfeee148b2f31af5bf085ce7c7c5ae8186e3274c1b1b7a4ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_2eabb3d885b6619dfeee148b2f31af5bf085ce7c7c5ae8186e3274c1b1b7a4ac->enter($__internal_2eabb3d885b6619dfeee148b2f31af5bf085ce7c7c5ae8186e3274c1b1b7a4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_71258822e332c79c7c37e939679a521bbcfba1a7d35e56873abfbadf4b07cf34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_71258822e332c79c7c37e939679a521bbcfba1a7d35e56873abfbadf4b07cf34->enter($__internal_71258822e332c79c7c37e939679a521bbcfba1a7d35e56873abfbadf4b07cf34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 132
            echo "    ";
            $context["helper"] = $this;
            // line 133
            echo "    ";
            $context["channel_is_defined"] = $this->getAttribute(twig_first($this->env, ($context["logs"] ?? $this->getContext($context, "logs"))), "channel", array(), "any", true, true);
            // line 134
            echo "
    <table class=\"logs\">
        <thead>
            <tr>
                <th>";
            // line 138
            echo ((($context["show_level"] ?? $this->getContext($context, "show_level"))) ? ("Level") : ("Time"));
            echo "</th>
                ";
            // line 139
            if (($context["channel_is_defined"] ?? $this->getContext($context, "channel_is_defined"))) {
                echo "<th>Channel</th>";
            }
            // line 140
            echo "                <th class=\"full-width\">Message</th>
            </tr>
        </thead>

        <tbody>
            ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? $this->getContext($context, "logs")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 146
                echo "                ";
                $context["css_class"] = ((($context["is_deprecation"] ?? $this->getContext($context, "is_deprecation"))) ? ("") : (((twig_in_filter($this->getAttribute(                // line 147
$context["log"], "priorityName", array()), array(0 => "CRITICAL", 1 => "ERROR", 2 => "ALERT", 3 => "EMERGENCY"))) ? ("status-error") : (((($this->getAttribute(                // line 148
$context["log"], "priorityName", array()) == "WARNING")) ? ("status-warning") : (""))))));
                // line 150
                echo "                <tr class=\"";
                echo twig_escape_filter($this->env, ($context["css_class"] ?? $this->getContext($context, "css_class")), "html", null, true);
                echo "\">
                    <td class=\"font-normal text-small\" nowrap>
                        ";
                // line 152
                if (($context["show_level"] ?? $this->getContext($context, "show_level"))) {
                    // line 153
                    echo "                            <span class=\"colored text-bold\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
                    echo "</span>
                        ";
                }
                // line 155
                echo "                        <span class=\"text-muted newline\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "timestamp", array()), "H:i:s"), "html", null, true);
                echo "</span>
                    </td>

                    ";
                // line 158
                if (($context["channel_is_defined"] ?? $this->getContext($context, "channel_is_defined"))) {
                    // line 159
                    echo "                        <td class=\"font-normal text-small text-bold\" nowrap>
                            ";
                    // line 160
                    echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "channel", array()), "html", null, true);
                    echo "
                            ";
                    // line 161
                    if (($this->getAttribute($context["log"], "errorCount", array(), "any", true, true) && ($this->getAttribute($context["log"], "errorCount", array()) > 1))) {
                        // line 162
                        echo "                                <span class=\"text-muted\">(";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "errorCount", array()), "html", null, true);
                        echo " times)</span>
                            ";
                    }
                    // line 164
                    echo "                        </td>

                    ";
                }
                // line 167
                echo "
                    <td class=\"font-normal\">";
                // line 168
                echo $context["helper"]->getrender_log_message(($context["category"] ?? $this->getContext($context, "category")), $this->getAttribute($context["loop"], "index", array()), $context["log"], ($context["is_deprecation"] ?? $this->getContext($context, "is_deprecation")));
                echo "</td>
                </tr>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "        </tbody>
    </table>
";
            
            $__internal_71258822e332c79c7c37e939679a521bbcfba1a7d35e56873abfbadf4b07cf34->leave($__internal_71258822e332c79c7c37e939679a521bbcfba1a7d35e56873abfbadf4b07cf34_prof);

            
            $__internal_2eabb3d885b6619dfeee148b2f31af5bf085ce7c7c5ae8186e3274c1b1b7a4ac->leave($__internal_2eabb3d885b6619dfeee148b2f31af5bf085ce7c7c5ae8186e3274c1b1b7a4ac_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 175
    public function getrender_log_message($__category__ = null, $__log_index__ = null, $__log__ = null, $__is_deprecation__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "category" => $__category__,
            "log_index" => $__log_index__,
            "log" => $__log__,
            "is_deprecation" => $__is_deprecation__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_1f3d6930a5c71b08f16a7406452f52e72ab6d921295369c5b819810be4988248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_1f3d6930a5c71b08f16a7406452f52e72ab6d921295369c5b819810be4988248->enter($__internal_1f3d6930a5c71b08f16a7406452f52e72ab6d921295369c5b819810be4988248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_log_message"));

            $__internal_33c2c41e435a49c06c41321c53ae9e9d34430642447fa6a46020a35b9bfd2825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_33c2c41e435a49c06c41321c53ae9e9d34430642447fa6a46020a35b9bfd2825->enter($__internal_33c2c41e435a49c06c41321c53ae9e9d34430642447fa6a46020a35b9bfd2825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_log_message"));

            // line 176
            echo "    ";
            if (($context["is_deprecation"] ?? $this->getContext($context, "is_deprecation"))) {
                // line 177
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "message", array()), "html", null, true);
                echo "

        ";
                // line 179
                $context["context_id"] = ((("context-" . ($context["category"] ?? $this->getContext($context, "category"))) . "-") . ($context["log_index"] ?? $this->getContext($context, "log_index")));
                // line 180
                echo "
        <span class=\"metadata\">
             <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                // line 182
                echo twig_escape_filter($this->env, ($context["context_id"] ?? $this->getContext($context, "context_id")), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide trace\">Show trace</a>

            <div id=\"";
                // line 184
                echo twig_escape_filter($this->env, ($context["context_id"] ?? $this->getContext($context, "context_id")), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                ";
                // line 185
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "context", array()), "seek", array(0 => "exception"), "method"), "seek", array(0 => "\000Exception\000trace"), "method"), 2));
                echo "
            </div>
        </span>
    ";
            } elseif (($this->getAttribute(            // line 188
($context["log"] ?? null), "context", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "context", array())))) {
                // line 189
                echo "        ";
                echo $this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpLog($this->env, $this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "message", array()), $this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "context", array()));
                echo "

        ";
                // line 191
                $context["context_id"] = ((("context-" . ($context["category"] ?? $this->getContext($context, "category"))) . "-") . ($context["log_index"] ?? $this->getContext($context, "log_index")));
                // line 192
                echo "
        <span class=\"metadata\">
             <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                // line 194
                echo twig_escape_filter($this->env, ($context["context_id"] ?? $this->getContext($context, "context_id")), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide context\">Show context</a>

             <div id=\"";
                // line 196
                echo twig_escape_filter($this->env, ($context["context_id"] ?? $this->getContext($context, "context_id")), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                ";
                // line 197
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "context", array()), 1));
                echo "
            </div>
        </span>
    ";
            } else {
                // line 201
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "message", array()), "html", null, true);
                echo "
    ";
            }
            
            $__internal_33c2c41e435a49c06c41321c53ae9e9d34430642447fa6a46020a35b9bfd2825->leave($__internal_33c2c41e435a49c06c41321c53ae9e9d34430642447fa6a46020a35b9bfd2825_prof);

            
            $__internal_1f3d6930a5c71b08f16a7406452f52e72ab6d921295369c5b819810be4988248->leave($__internal_1f3d6930a5c71b08f16a7406452f52e72ab6d921295369c5b819810be4988248_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  593 => 201,  586 => 197,  582 => 196,  577 => 194,  573 => 192,  571 => 191,  565 => 189,  563 => 188,  557 => 185,  553 => 184,  548 => 182,  544 => 180,  542 => 179,  536 => 177,  533 => 176,  512 => 175,  489 => 171,  472 => 168,  469 => 167,  464 => 164,  458 => 162,  456 => 161,  452 => 160,  449 => 159,  447 => 158,  440 => 155,  434 => 153,  432 => 152,  426 => 150,  424 => 148,  423 => 147,  421 => 146,  404 => 145,  397 => 140,  393 => 139,  389 => 138,  383 => 134,  380 => 133,  377 => 132,  356 => 131,  341 => 124,  335 => 122,  329 => 118,  327 => 117,  321 => 114,  315 => 110,  309 => 108,  303 => 104,  301 => 103,  295 => 100,  289 => 96,  283 => 94,  277 => 90,  275 => 89,  266 => 86,  260 => 80,  254 => 78,  248 => 74,  246 => 73,  238 => 70,  233 => 67,  227 => 66,  224 => 65,  221 => 64,  218 => 63,  215 => 62,  212 => 61,  209 => 60,  206 => 59,  203 => 58,  200 => 57,  195 => 56,  192 => 55,  190 => 54,  184 => 50,  182 => 49,  178 => 47,  169 => 46,  158 => 43,  152 => 40,  149 => 39,  147 => 38,  142 => 36,  135 => 35,  126 => 34,  113 => 30,  110 => 29,  102 => 26,  92 => 21,  82 => 16,  78 => 14,  76 => 13,  73 => 12,  68 => 10,  63 => 9,  60 => 8,  57 => 7,  54 => 6,  45 => 5,  35 => 1,  33 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% if collector.counterrors or collector.countdeprecations or collector.countwarnings %}
        {% set icon %}
            {% set status_color = collector.counterrors ? 'red' : 'yellow' %}
            {{ include('@WebProfiler/Icon/logger.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.counterrors ?: (collector.countdeprecations + collector.countwarnings) }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.counterrors ? 'red' }}\">{{ collector.counterrors|default(0) }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Warnings</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countwarnings ? 'yellow' }}\">{{ collector.countwarnings|default(0) }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countdeprecations ? 'yellow' }}\">{{ collector.countdeprecations|default(0) }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.counterrors ? 'error' : collector.countdeprecations or collector.countwarnings ? 'warning' }} {{ collector.logs is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/logger.svg') }}</span>
        <strong>Logs</strong>
        {% if collector.counterrors or collector.countdeprecations or collector.countwarnings %}
            <span class=\"count\">
                <span>{{ collector.counterrors ?: (collector.countdeprecations + collector.countwarnings) }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Log Messages</h2>

    {% if collector.logs is empty %}
        <div class=\"empty\">
            <p>No log messages available.</p>
        </div>
    {% else %}
        {# sort collected logs in groups #}
        {% set deprecation_logs, debug_logs, info_and_error_logs, silenced_logs = [], [], [], [] %}
        {% for log in collector.logs %}
            {% if log.scream is defined and not log.scream %}
                {% set deprecation_logs = deprecation_logs|merge([log]) %}
            {% elseif log.scream is defined and log.scream %}
                {% set silenced_logs = silenced_logs|merge([log]) %}
            {% elseif log.priorityName == 'DEBUG' %}
                {% set debug_logs = debug_logs|merge([log]) %}
            {% else %}
                {% set info_and_error_logs = info_and_error_logs|merge([log]) %}
            {% endif %}
        {% endfor %}

        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Info. &amp; Errors <span class=\"badge status-{{ collector.counterrors ? 'error' : collector.countwarnings ? 'warning' }}\">{{ collector.counterrors ?: info_and_error_logs|length }}</span></h3>

                <div class=\"tab-content\">
                    {% if info_and_error_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(info_and_error_logs, 'info', true) }}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab\">
                {# 'deprecation_logs|length' is not used because deprecations are
                now grouped and the group count doesn't match the message count #}
                <h3 class=\"tab-title\">Deprecations <span class=\"badge status-{{ collector.countdeprecations ? 'warning' }}\">{{ collector.countdeprecations|default(0) }}</span></h3>

                <div class=\"tab-content\">
                    {% if deprecation_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages about deprecated features.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(deprecation_logs, 'deprecation', false, true) }}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Debug <span class=\"badge\">{{ debug_logs|length }}</span></h3>

                <div class=\"tab-content\">
                    {% if debug_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(debug_logs, 'debug') }}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Silenced PHP Notices<span class=\"badge\">{{ collector.countscreams|default(0) }}</span></h3>

                <div class=\"tab-content\">
                    {% if silenced_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(silenced_logs, 'silenced') }}
                    {% endif %}
                </div>
            </div>

        </div>
    {% endif %}
{% endblock %}

{% macro render_table(logs, category = '', show_level = false, is_deprecation = false) %}
    {% import _self as helper %}
    {% set channel_is_defined = (logs|first).channel is defined %}

    <table class=\"logs\">
        <thead>
            <tr>
                <th>{{ show_level ? 'Level' : 'Time' }}</th>
                {% if channel_is_defined %}<th>Channel</th>{% endif %}
                <th class=\"full-width\">Message</th>
            </tr>
        </thead>

        <tbody>
            {% for log in logs %}
                {% set css_class = is_deprecation ? ''
                    : log.priorityName in ['CRITICAL', 'ERROR', 'ALERT', 'EMERGENCY'] ? 'status-error'
                    : log.priorityName == 'WARNING' ? 'status-warning'
                %}
                <tr class=\"{{ css_class }}\">
                    <td class=\"font-normal text-small\" nowrap>
                        {% if show_level %}
                            <span class=\"colored text-bold\">{{ log.priorityName }}</span>
                        {% endif %}
                        <span class=\"text-muted newline\">{{ log.timestamp|date('H:i:s') }}</span>
                    </td>

                    {% if channel_is_defined %}
                        <td class=\"font-normal text-small text-bold\" nowrap>
                            {{ log.channel }}
                            {% if log.errorCount is defined and log.errorCount > 1 %}
                                <span class=\"text-muted\">({{ log.errorCount }} times)</span>
                            {% endif %}
                        </td>

                    {% endif %}

                    <td class=\"font-normal\">{{ helper.render_log_message(category, loop.index, log, is_deprecation) }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endmacro %}

{% macro render_log_message(category, log_index, log, is_deprecation = false) %}
    {% if is_deprecation %}
        {{ log.message }}

        {% set context_id = 'context-' ~ category ~ '-' ~ log_index %}

        <span class=\"metadata\">
             <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ context_id }}\" data-toggle-alt-content=\"Hide trace\">Show trace</a>

            <div id=\"{{ context_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                {{ profiler_dump(log.context.seek('exception').seek('\\0Exception\\0trace'), maxDepth=2) }}
            </div>
        </span>
    {% elseif log.context is defined and log.context is not empty %}
        {{ profiler_dump_log(log.message, log.context) }}

        {% set context_id = 'context-' ~ category ~ '-' ~ log_index %}

        <span class=\"metadata\">
             <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ context_id }}\" data-toggle-alt-content=\"Hide context\">Show context</a>

             <div id=\"{{ context_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                {{ profiler_dump(log.context, maxDepth=1) }}
            </div>
        </span>
    {% else %}
        {{ log.message }}
    {% endif %}
{% endmacro %}
", "@WebProfiler/Collector/logger.html.twig", "/home/lulu/Rendu/Symphony_Jour_4/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/logger.html.twig");
    }
}
