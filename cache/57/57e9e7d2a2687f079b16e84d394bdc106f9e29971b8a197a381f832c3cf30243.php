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

/* structure-menu.html */
class __TwigTemplate_929e857cd10a239228c000531a1baf8be233eede57cc77a481133ae5d3deb279 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["foo"] = "foo";
        // line 2
        echo "
<!-- BEGIN MENU BUTTON -->
<div class=\"minimenu-menu-button-wrapper\">
    <div class=\"minimenu-menu-tooltip\"></div>
    <div class=\"minimenu-menu-button-wrapper-inner\">
        <div class=\"minimenu-menu-button\"></div>
        <div class=\"minimenu-menu-button-middle\"></div>
    </div>
    <div class=\"minimenu-menu-button-text-wrapper\">
        <div class=\"minimenu-menu-button-text\">Explore</div>
    </div>
</div>
<!-- END MENU BUTTON -->

<!-- BEGIN MENU + SOCIAL BAR -->
<div class=\"minimenu-by-bonfire-wrapper\">
    
    <!-- BEGIN MENU -->
    <div class=\"minimenu-close-button\"></div>
    <div class=\"minimenu-by-bonfire\">
        <div class=\"minimenu-by-bonfire-inner\">
            <div class=\"menu-minimenu-menu-container\">
                <!-- BEGIN MENU ITEMS -->
                <ul>
                    <li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["base"] ?? null), "html", null, true);
        echo "member/profile\">My Profile</a>
                    <div class=\"minimenu-menu-item-description\">Just a little bit of your background so we can connect.</div></li>
                    <?php if(! current_user_can('administrator') ): ?>
                        <li><a href=\"#\">Ask me</a>
                        <div class=\"minimenu-menu-item-description\">Send the author your post related queries.</div></li>
                    <?php endif; ?>
                    <li class=\"menu-item-has-children\"><a href=\"#\">Account</a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["base"] ?? null), "html", null, true);
        echo "member/subscribe\">Subscription</a> | </li>
                            <li class=\"menu-item-has-children\"><a href=\"#\">Setup:</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["base"] ?? null), "html", null, true);
        echo "member/password/change\">Password</a></li>
                                    <!-- <li><a href=\"#\">GPU</a>,</li> -->
                                    <!-- <li><a href=\"#\">Motherboard</a> | </li> -->
                                </ul>
                            </li>
                            <!-- <li><a href=\"#\">New tech</a></li> -->
                        </ul>
                    </li>
                    <!-- <li><a href=\"#\">Your Social Network</a>
                    <div class=\"minimenu-menu-item-description\">Share you social.</div></li> -->
                    <li><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["base"] ?? null), "html", null, true);
        echo "logout\">Logout</a></li>
                </ul>
                <!-- END MENU ITEMS -->
            </div>
            <!-- <img style=\"width:100%;\" src=\"minimenu/img/placeholder.jpg\"> -->
        </div>
    </div>
    <!-- END MENU -->

    <!-- BEGIN SOCIAL -->
    <div class=\"minimenu-social-bar-wrapper\">
        <div class=\"minimenu-social-bar-label\">SOCIAL:</div>
        <div class=\"minimenu-social-bar-icons\">
            <a href=\"#\">
                <span class=\"minimenu-icon-youtube\"></span>
            </a>
            <a href=\"#\">
                <span class=\"minimenu-icon-twitter\"></span>
            </a>
            <a href=\"#\">
                <span class=\"minimenu-icon-facebook\"></span>
            </a>
            <a href=\"#\">
                <span class=\"minimenu-icon-instagram\"></span>
            </a>
            <a href=\"#\">
                <span class=\"minimenu-icon-google-plus\"></span>
            </a>
        </div>
    </div>
    <!-- END SOCIAL -->
</div>
<!-- BEGIN MENU + SOCIAL BAR -->";
    }

    public function getTemplateName()
    {
        return "structure-menu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 47,  82 => 37,  76 => 34,  65 => 26,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set foo = 'foo' %}

<!-- BEGIN MENU BUTTON -->
<div class=\"minimenu-menu-button-wrapper\">
    <div class=\"minimenu-menu-tooltip\"></div>
    <div class=\"minimenu-menu-button-wrapper-inner\">
        <div class=\"minimenu-menu-button\"></div>
        <div class=\"minimenu-menu-button-middle\"></div>
    </div>
    <div class=\"minimenu-menu-button-text-wrapper\">
        <div class=\"minimenu-menu-button-text\">Explore</div>
    </div>
</div>
<!-- END MENU BUTTON -->

<!-- BEGIN MENU + SOCIAL BAR -->
<div class=\"minimenu-by-bonfire-wrapper\">
    
    <!-- BEGIN MENU -->
    <div class=\"minimenu-close-button\"></div>
    <div class=\"minimenu-by-bonfire\">
        <div class=\"minimenu-by-bonfire-inner\">
            <div class=\"menu-minimenu-menu-container\">
                <!-- BEGIN MENU ITEMS -->
                <ul>
                    <li><a href=\"{{ base }}member/profile\">My Profile</a>
                    <div class=\"minimenu-menu-item-description\">Just a little bit of your background so we can connect.</div></li>
                    <?php if(! current_user_can('administrator') ): ?>
                        <li><a href=\"#\">Ask me</a>
                        <div class=\"minimenu-menu-item-description\">Send the author your post related queries.</div></li>
                    <?php endif; ?>
                    <li class=\"menu-item-has-children\"><a href=\"#\">Account</a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"{{ base }}member/subscribe\">Subscription</a> | </li>
                            <li class=\"menu-item-has-children\"><a href=\"#\">Setup:</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"{{ base }}member/password/change\">Password</a></li>
                                    <!-- <li><a href=\"#\">GPU</a>,</li> -->
                                    <!-- <li><a href=\"#\">Motherboard</a> | </li> -->
                                </ul>
                            </li>
                            <!-- <li><a href=\"#\">New tech</a></li> -->
                        </ul>
                    </li>
                    <!-- <li><a href=\"#\">Your Social Network</a>
                    <div class=\"minimenu-menu-item-description\">Share you social.</div></li> -->
                    <li><a href=\"{{ base }}logout\">Logout</a></li>
                </ul>
                <!-- END MENU ITEMS -->
            </div>
            <!-- <img style=\"width:100%;\" src=\"minimenu/img/placeholder.jpg\"> -->
        </div>
    </div>
    <!-- END MENU -->

    <!-- BEGIN SOCIAL -->
    <div class=\"minimenu-social-bar-wrapper\">
        <div class=\"minimenu-social-bar-label\">SOCIAL:</div>
        <div class=\"minimenu-social-bar-icons\">
            <a href=\"#\">
                <span class=\"minimenu-icon-youtube\"></span>
            </a>
            <a href=\"#\">
                <span class=\"minimenu-icon-twitter\"></span>
            </a>
            <a href=\"#\">
                <span class=\"minimenu-icon-facebook\"></span>
            </a>
            <a href=\"#\">
                <span class=\"minimenu-icon-instagram\"></span>
            </a>
            <a href=\"#\">
                <span class=\"minimenu-icon-google-plus\"></span>
            </a>
        </div>
    </div>
    <!-- END SOCIAL -->
</div>
<!-- BEGIN MENU + SOCIAL BAR -->", "structure-menu.html", "/Applications/MAMP/htdocs/server/fixopr/wp-content/plugins/phpshark-template/public/partials/structure-menu.html");
    }
}
