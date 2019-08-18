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

/* base-dialog-center-logged-user.html */
class __TwigTemplate_f31d59adca724a790bd9c531d4b8dff58a50d97d59c4ff5f5e6500da396b3e09 extends \Twig\Template
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
        if ((($context["logged"] ?? null) == true)) {
            // line 7
            echo "                <div class=\"row\">
                    
                    <div class=\"col-md-3 mb-5\">
                        ";
            // line 10
            $this->loadTemplate("structure-menu.html", "base-dialog-center-logged-user.html", 10)->display($context);
            // line 11
            echo "                    </div>

                    <div class=\"col-md-9\">
                            ";
            // line 14
            $this->displayBlock('messages', $context, $blocks);
            // line 15
            echo "            
                            <div class=\"row card\">
                                <div class=\"col-md-8 offset-md-2\">
            
                                    ";
            // line 19
            $this->displayBlock('body', $context, $blocks);
            // line 20
            echo "            
                                </div>
                            </div><!-- #row -->
                    </div>

                </div>
            ";
        } else {
            // line 27
            echo "                <div class=\"row\"> 
                    <div class=\"col-md-12\">
                        <!-- // your code for logged out user  -->
                    </div>
                </div>
            ";
        }
        // line 33
        echo "
        </div><!-- #container -->
        </main><!-- #main -->
        
</div><!-- #primary -->
";
    }

    // line 14
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base-dialog-center-logged-user.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 19,  96 => 14,  87 => 33,  79 => 27,  70 => 20,  68 => 19,  62 => 15,  60 => 14,  55 => 11,  53 => 10,  48 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"primary\" class=\"content-area\">

\t\t<main id=\"main\" class=\"site-main\">
        <div class=\"container mb-5\">

            {% if ( logged == true ) %}
                <div class=\"row\">
                    
                    <div class=\"col-md-3 mb-5\">
                        {% include 'structure-menu.html' %}
                    </div>

                    <div class=\"col-md-9\">
                            {% block messages %}{% endblock %}
            
                            <div class=\"row card\">
                                <div class=\"col-md-8 offset-md-2\">
            
                                    {% block body %}{% endblock %}
            
                                </div>
                            </div><!-- #row -->
                    </div>

                </div>
            {% else %}
                <div class=\"row\"> 
                    <div class=\"col-md-12\">
                        <!-- // your code for logged out user  -->
                    </div>
                </div>
            {% endif %}

        </div><!-- #container -->
        </main><!-- #main -->
        
</div><!-- #primary -->
", "base-dialog-center-logged-user.html", "/Applications/MAMP/htdocs/server/fixopr/wp-content/plugins/phpshark-template/public/partials/base-dialog-center-logged-user.html");
    }
}
