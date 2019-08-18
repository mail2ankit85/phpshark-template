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

/* base-dialog-center.html */
class __TwigTemplate_350f04dfc01d1f504390ee2247d4bc1b4320dc8161357480ce46305dab149e23 extends \Twig\Template
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
            'body' => [$this, 'block_body'],
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
        // line 6
        $this->displayBlock('messages', $context, $blocks);
        // line 7
        echo "
            <div class=\"row card\">
                <div class=\"col-md-8 offset-md-2\">

                    ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "
                </div>
            </div><!-- #row -->

        </div><!-- #container -->
        </main><!-- #main -->
        
</div><!-- #primary -->
";
    }

    // line 6
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base-dialog-center.html";
    }

    public function getDebugInfo()
    {
        return array (  74 => 11,  68 => 6,  56 => 12,  54 => 11,  48 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"primary\" class=\"content-area\">

\t\t<main id=\"main\" class=\"site-main\">
        <div class=\"container mb-5\">

            {% block messages %}{% endblock %}

            <div class=\"row card\">
                <div class=\"col-md-8 offset-md-2\">

                    {% block body %}{% endblock %}

                </div>
            </div><!-- #row -->

        </div><!-- #container -->
        </main><!-- #main -->
        
</div><!-- #primary -->
", "base-dialog-center.html", "/Applications/MAMP/htdocs/server/fixopr/wp-content/plugins/phpshark-template/public/partials/base-dialog-center.html");
    }
}
