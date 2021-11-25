<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/modules/image/templates/image-resize-summary.html.twig */
class __TwigTemplate_3240398e1d656898fe21db293eb1a5fa53f8e2eb15c782cf6c8a0b2fbddafed8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/modules/image/templates/image-resize-summary.html.twig"));

        // line 18
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "width", [], "any", false, false, true, 18) && twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "height", [], "any", false, false, true, 18))) {
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "width", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "×";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "height", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        } else {
            // line 21
            if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "width", [], "any", false, false, true, 21)) {
                // line 22
                echo "    ";
                echo t("width @data.width", array("@data.width" => twig_get_attribute($this->env, $this->source,                 // line 23
($context["data"] ?? null), "width", [], "any", false, false, true, 23), ));
                // line 25
                echo "  ";
            } elseif (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "height", [], "any", false, false, true, 25)) {
                // line 26
                echo "    ";
                echo t("height @data.height", array("@data.height" => twig_get_attribute($this->env, $this->source,                 // line 27
($context["data"] ?? null), "height", [], "any", false, false, true, 27), ));
                // line 29
                echo "  ";
            }
        }
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "core/modules/image/templates/image-resize-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 29,  60 => 27,  58 => 26,  55 => 25,  53 => 23,  51 => 22,  49 => 21,  44 => 19,  42 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/image/templates/image-resize-summary.html.twig", "/app/core/modules/image/templates/image-resize-summary.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18, "trans" => 22);
        static $filters = array("escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
