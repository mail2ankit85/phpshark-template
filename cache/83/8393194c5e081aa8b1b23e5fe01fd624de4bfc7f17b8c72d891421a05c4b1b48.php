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

/* base.html */
class __TwigTemplate_46f05caced115cc1938f99309b4f917ae3df6cbe1705a45d145f11a0544fa3fb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
            'row_card' => [$this, 'block_row_card'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"primary\" class=\"content-area\">
\t\t<main id=\"main\" class=\"site-main\">
        <div class=\"container mb-5\">

        ";
        // line 5
        $this->displayBlock('messages', $context, $blocks);
        // line 8
        echo "        
            <div class=\"row card\">

                <div class=\"col-md-8 offset-md-2\">

                ";
        // line 13
        $this->displayBlock('row_card', $context, $blocks);
        // line 16
        echo "
                </div>

            </div><!-- #row -->
        </div><!-- #container -->

        </main><!-- #main -->
</div><!-- #primary -->
";
    }

    // line 5
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
        ";
    }

    // line 13
    public function block_row_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function getDebugInfo()
    {
        return array (  81 => 14,  77 => 13,  72 => 6,  68 => 5,  56 => 16,  54 => 13,  47 => 8,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"primary\" class=\"content-area\">
\t\t<main id=\"main\" class=\"site-main\">
        <div class=\"container mb-5\">

        {% block messages %}

        {% endblock %}
        
            <div class=\"row card\">

                <div class=\"col-md-8 offset-md-2\">

                {% block row_card %}

                {% endblock %}

                </div>

            </div><!-- #row -->
        </div><!-- #container -->

        </main><!-- #main -->
</div><!-- #primary -->
", "base.html", "/Applications/MAMP/htdocs/server/fixopr/wp-content/plugins/phpshark-template/public/partials/base.html");
    }
}
