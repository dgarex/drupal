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

/* core/modules/image/templates/image-style-preview.html.twig */
class __TwigTemplate_8fe47f1ac837c1af2895661b0343ab394250125f02a4887567912520c95d57af extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/modules/image/templates/image-style-preview.html.twig"));

        // line 33
        echo "<div class=\"image-style-preview preview clearfix\">
  ";
        // line 35
        echo "  <div class=\"preview-image-wrapper\">
      ";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("original"));
        echo " (<a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["original"] ?? null), "url", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("view actual size"));
        echo "</a>)
      <div class=\"preview-image original-image\" style=\"width: ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["preview"] ?? null), "original", [], "any", false, false, true, 37), "width", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "px; height: ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["preview"] ?? null), "original", [], "any", false, false, true, 37), "height", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "px;\">
        <a href=\"";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["original"] ?? null), "url", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        echo "\">
          ";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["original"] ?? null), "rendered", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "
        </a>
      <div class=\"height\" style=\"height: ";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["preview"] ?? null), "original", [], "any", false, false, true, 41), "height", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "px\"><span>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["original"] ?? null), "height", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "px</span></div>
      <div class=\"width\" style=\"width: ";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["preview"] ?? null), "original", [], "any", false, false, true, 42), "width", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo "px\"><span>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["original"] ?? null), "width", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo "px</span></div>
    </div>
  </div>

  ";
        // line 47
        echo "  <div class=\"preview-image-wrapper\">
    ";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["style_name"] ?? null), 48, $this->source), "html", null, true);
        echo " (<a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["derivative"] ?? null), "url", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "?";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cache_bypass"] ?? null), 48, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("view actual size"));
        echo "</a>)
    <div class=\"preview-image modified-image\" style=\"width: ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["preview"] ?? null), "derivative", [], "any", false, false, true, 49), "width", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "px; height: ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["preview"] ?? null), "derivative", [], "any", false, false, true, 49), "height", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "px;\">
      <a href=\"";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["derivative"] ?? null), "url", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "?";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cache_bypass"] ?? null), 50, $this->source), "html", null, true);
        echo "\">
        ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["derivative"] ?? null), "rendered", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "
      </a>
      <div class=\"height\" style=\"height: ";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["preview"] ?? null), "derivative", [], "any", false, false, true, 53), "height", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
        echo "px\"><span>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["derivative"] ?? null), "height", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
        echo "px</span></div>
      <div class=\"width\" style=\"width: ";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["preview"] ?? null), "derivative", [], "any", false, false, true, 54), "width", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "px\"><span>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["derivative"] ?? null), "width", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "px</span></div>
    </div>
  </div>
</div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "core/modules/image/templates/image-style-preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 54,  116 => 53,  111 => 51,  105 => 50,  99 => 49,  89 => 48,  86 => 47,  77 => 42,  71 => 41,  66 => 39,  62 => 38,  56 => 37,  48 => 36,  45 => 35,  42 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/image/templates/image-style-preview.html.twig", "/app/core/modules/image/templates/image-style-preview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("t" => 36, "escape" => 36);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['t', 'escape'],
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
