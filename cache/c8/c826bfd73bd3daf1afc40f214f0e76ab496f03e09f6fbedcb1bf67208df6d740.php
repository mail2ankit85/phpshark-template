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

/* login.html */
class __TwigTemplate_4cb311095817b8a00b8cf898ca9c97cd0ecfbbe616303b52d7f26d4b9fac068f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base-dialog-center.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base-dialog-center.html", "login.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["get"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 5
            echo "        ";
            if (($context["value"] == "failed")) {
                // line 6
                echo "            <div class=\"p-3\">

                <div class=\"alert alert-danger alert-dismissible\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    <strong>Error!</strong> The username/password provided is invalid.
                </div>
            
            </div>
        ";
            }
            // line 15
            echo "
        ";
            // line 16
            if (($context["value"] == "empty")) {
                // line 17
                echo "            <div class=\"p-3\">

                <div class=\"alert alert-danger alert-dismissible\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    <strong>Error!</strong> Mandatory Field in the form seems to be empty.
                </div>
            
            </div>
        ";
            }
            // line 26
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "    <div class=\"form-heading my-3 p-2\"> 
        <h3 class=\"d-flex justify-content-center\">Login</h3>
        <h6 class=\"d-flex justify-content-center\">Login to your account</h6>
    </div>
    <hr/>

    ";
        // line 37
        $this->loadTemplate("form-login.html", "login.html", 37)->display($context);
        // line 38
        echo "
";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 38,  107 => 37,  99 => 31,  95 => 30,  86 => 26,  75 => 17,  73 => 16,  70 => 15,  59 => 6,  56 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base-dialog-center.html\" %}

{% block messages %}
    {% for value in get %}
        {% if ( value == 'failed' ) %}
            <div class=\"p-3\">

                <div class=\"alert alert-danger alert-dismissible\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    <strong>Error!</strong> The username/password provided is invalid.
                </div>
            
            </div>
        {% endif %}

        {% if ( value == 'empty' ) %}
            <div class=\"p-3\">

                <div class=\"alert alert-danger alert-dismissible\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    <strong>Error!</strong> Mandatory Field in the form seems to be empty.
                </div>
            
            </div>
        {% endif %}

    {% endfor %}
{% endblock %}

{% block body %}
    <div class=\"form-heading my-3 p-2\"> 
        <h3 class=\"d-flex justify-content-center\">Login</h3>
        <h6 class=\"d-flex justify-content-center\">Login to your account</h6>
    </div>
    <hr/>

    {% include 'form-login.html' %}

{% endblock %}



", "login.html", "/Applications/MAMP/htdocs/server/fixopr/wp-content/plugins/phpshark-template/public/login.html");
    }
}
