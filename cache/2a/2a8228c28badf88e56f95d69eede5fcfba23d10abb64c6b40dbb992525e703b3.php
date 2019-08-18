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

/* base.php */
class __TwigTemplate_8015513f0cfb2f0d4f13fed7937b1be7af36b77e5085a484536775abe1294f7e extends \Twig\Template
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
            'rowcard' => [$this, 'block_rowcard'],
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
        $this->displayBlock('rowcard', $context, $blocks);
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
    public function block_rowcard($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "base.php";
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

                {% block rowcard %}

                {% endblock %}

                </div>

            </div><!-- #row -->
        </div><!-- #container -->

        </main><!-- #main -->
</div><!-- #primary -->
", "base.php", "/Applications/MAMP/htdocs/server/fixopr/wp-content/plugins/phpshark-template/public/partials/base.php");
    }
}
