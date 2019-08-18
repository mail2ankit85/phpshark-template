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

/* confirmation-resend.html */
class __TwigTemplate_77f28532a336532986c39e68ce5e1f861eabe4bd76282ccf9088e63580cacf58 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base-dialog-center.html", "confirmation-resend.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "        ";
        if (((($context["ind"] ?? null) != null) && (($context["ind"] ?? null) == true))) {
            // line 5
            echo "            <div class=\"p-3\">

                <div class=\"alert alert-success alert-dismissible\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    <strong>Success!</strong> A new confirmation link has been send to your account for email confirmation.
                </div>

            </div>
        ";
        }
        // line 14
        echo "
        ";
        // line 15
        if (((($context["ind"] ?? null) != null) && (($context["ind"] ?? null) == false))) {
            // line 16
            echo "            <div class=\"p-3\">

                <div class=\"alert alert-danger alert-dismissible\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    <strong>Error!</strong> Your email ID is already confirmed. Please try <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["forgot_url"] ?? null), "html", null, true);
            echo "\">resetting</a> you password. 
                </div>

            </div>
        ";
        }
    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    <div class=\"form-heading my-3 p-2\"> 
        <h3 class=\"d-flex justify-content-center\">Confirmation Resend</h3>
        <h6 class=\"d-flex justify-content-center\">(PS: Valid if you email is registered by unconfirmed.)</h6>
    </div>
    <hr/>

    ";
        // line 34
        $this->loadTemplate("form-confirmation-resend.html", "confirmation-resend.html", 34)->display($context);
        // line 35
        echo "
";
    }

    public function getTemplateName()
    {
        return "confirmation-resend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 35,  98 => 34,  90 => 28,  86 => 27,  76 => 20,  70 => 16,  68 => 15,  65 => 14,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base-dialog-center.html\" %}

{% block messages %}
        {% if ( ind != null and ind == true ) %}
            <div class=\"p-3\">

                <div class=\"alert alert-success alert-dismissible\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    <strong>Success!</strong> A new confirmation link has been send to your account for email confirmation.
                </div>

            </div>
        {% endif %}

        {% if ( ind != null and ind == false ) %}
            <div class=\"p-3\">

                <div class=\"alert alert-danger alert-dismissible\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    <strong>Error!</strong> Your email ID is already confirmed. Please try <a href=\"{{ forgot_url }}\">resetting</a> you password. 
                </div>

            </div>
        {% endif %}
{% endblock %}

{% block body %}
    <div class=\"form-heading my-3 p-2\"> 
        <h3 class=\"d-flex justify-content-center\">Confirmation Resend</h3>
        <h6 class=\"d-flex justify-content-center\">(PS: Valid if you email is registered by unconfirmed.)</h6>
    </div>
    <hr/>

    {% include 'form-confirmation-resend.html' %}

{% endblock %}

", "confirmation-resend.html", "/Applications/MAMP/htdocs/server/fixopr/wp-content/plugins/phpshark-template/public/confirmation-resend.html");
    }
}
