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

/* mod_index_dashboard.phtml */
class __TwigTemplate_5c8c99e7331faf2b1656559e31e3f935d1b3c03242cd49c966d1ec4498bfeb3a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "layout_default.phtml";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_index_dashboard.phtml", 1)->unwrap();
        // line 2
        $this->parent = $this->loadTemplate("layout_default.phtml", "mod_index_dashboard.phtml", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Dashboard");
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_messages", [0 => ["type" => "info"]], "method", false, false, false, 8));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 9
            echo "<div class=\"nNote nInformation hideit ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 9)) {
                echo "first";
            }
            echo "\">
    <p><strong>";
            // line 10
            echo gettext("INFORMATION");
            echo ": </strong>";
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "</p>
</div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_is_allowed", [0 => ["mod" => "stats"]], "method", false, false, false, 14)) {
            // line 15
            echo "<div class=\"widget\">
    <div class=\"head\"><h5><i class=\"dark-sprite-icon sprite-chart8\" style=\"margin: 0 15px 0 -15px\"></i>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
            echo " ";
            echo gettext("Statistics");
            echo "</h5></div>
    ";
            // line 17
            $context["stats"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_summary", [], "any", false, false, false, 17);
            // line 18
            echo "    ";
            $context["income"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_summary_income", [], "any", false, false, false, 18);
            // line 19
            echo "    <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" class=\"tableStatic\">
        <thead>
            <tr>
                <td width=\"10%\">";
            // line 22
            echo gettext("Metric");
            echo "</td>
                <td>";
            // line 23
            echo gettext("Today");
            echo "</td>
                <td>";
            // line 24
            echo gettext("Yesterday");
            echo "</td>
                <td>";
            // line 25
            echo gettext("This month so far");
            echo "</td>
                <td>";
            // line 26
            echo gettext("Last month");
            echo "</td>
                <td>";
            // line 27
            echo gettext("Total");
            echo "</td>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>";
            // line 33
            echo gettext("Income");
            echo "</td>
                <td align=\"center\"><a href=\"";
            // line 34
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice", ["paid_at" => twig_date_format_filter($this->env, "now", "Y-m-d")]);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, ($context["income"] ?? null), "today", [], "any", false, false, false, 34)], 34, $context, $this->getSourceContext());
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 35
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice", ["paid_at" => twig_date_format_filter($this->env, "yesterday", "Y-m-d")]);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, ($context["income"] ?? null), "yesterday", [], "any", false, false, false, 35)], 35, $context, $this->getSourceContext());
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 36
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, ($context["income"] ?? null), "this_month", [], "any", false, false, false, 36)], 36, $context, $this->getSourceContext());
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 37
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, ($context["income"] ?? null), "last_month", [], "any", false, false, false, 37)], 37, $context, $this->getSourceContext());
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 38
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, ($context["income"] ?? null), "total", [], "any", false, false, false, 38)], 38, $context, $this->getSourceContext());
            echo "</a></td>
            </tr>
            <tr>
                <td>";
            // line 41
            echo gettext("Clients");
            echo "</td>
                <td align=\"center\"><a href=\"";
            // line 42
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client", ["created_at" => twig_date_format_filter($this->env, "now", "Y-m-d")]);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "clients_today", [], "any", false, false, false, 42), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 43
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client", ["created_at" => twig_date_format_filter($this->env, "yesterday", "Y-m-d")]);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "clients_yesterday", [], "any", false, false, false, 43), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 44
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "clients_this_month", [], "any", false, false, false, 44), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 45
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "clients_last_month", [], "any", false, false, false, 45), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 46
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "clients_total", [], "any", false, false, false, 46), "html", null, true);
            echo "</a></td>
            </tr>
            <tr>
                <td>";
            // line 49
            echo gettext("Orders");
            echo "</td>
                <td align=\"center\"><a href=\"";
            // line 50
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order", ["created_at" => twig_date_format_filter($this->env, "now", "Y-m-d")]);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "orders_today", [], "any", false, false, false, 50), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 51
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order", ["created_at" => twig_date_format_filter($this->env, "yesterday", "Y-m-d")]);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "orders_yesterday", [], "any", false, false, false, 51), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 52
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "orders_this_month", [], "any", false, false, false, 52), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 53
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "orders_last_month", [], "any", false, false, false, 53), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 54
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "orders_total", [], "any", false, false, false, 54), "html", null, true);
            echo "</a></td>
            </tr>
            <tr>
                <td>";
            // line 57
            echo gettext("Invoices");
            echo "</td>
                <td align=\"center\"><a href=\"";
            // line 58
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice", ["created_at" => twig_date_format_filter($this->env, "now", "Y-m-d")]);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "invoices_today", [], "any", false, false, false, 58), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 59
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice", ["created_at" => twig_date_format_filter($this->env, "yesterday", "Y-m-d")]);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "invoices_yesterday", [], "any", false, false, false, 59), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 60
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "invoices_this_month", [], "any", false, false, false, 60), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 61
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "invoices_last_month", [], "any", false, false, false, 61), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 62
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "invoices_total", [], "any", false, false, false, 62), "html", null, true);
            echo "</a></td>
            </tr>
            <tr>
                <td>";
            // line 65
            echo gettext("Tickets");
            echo "</td>
                <td align=\"center\"><a href=\"";
            // line 66
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support", ["created_at" => twig_date_format_filter($this->env, "now", "Y-m-d")]);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "tickets_today", [], "any", false, false, false, 66), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 67
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support", ["created_at" => twig_date_format_filter($this->env, "yesterday", "Y-m-d")]);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "tickets_yesterday", [], "any", false, false, false, 67), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 68
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "tickets_this_month", [], "any", false, false, false, 68), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 69
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "tickets_last_month", [], "any", false, false, false, 69), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 70
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "tickets_total", [], "any", false, false, false, 70), "html", null, true);
            echo "</a></td>
            </tr>
        </tbody>
    </table>
</div>
";
        }
        // line 76
        echo "
";
        // line 77
        $context["orders"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "order_get_list", [0 => ["per_page" => "5", "status" => "active"]], "method", false, false, false, 77);
        // line 78
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["orders"] ?? null), "list", [], "any", false, false, false, 78)) > 0)) {
            // line 79
            echo "<div class=\"widgets\">
    <div class=\"left\">
        <div class=\"widget\">
            <div class=\"head\">
                <h5 class=\"iMoney\">";
            // line 83
            echo gettext("Latest orders");
            echo "</h5>
                <div class=\"num\"><a href=\"";
            // line 84
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order");
            echo "\" class=\"greenNum\">+";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["orders"] ?? null), "total", [], "any", false, false, false, 84), "html", null, true);
            echo "</a></div>
            </div>
            <div style=\"height: 221px; overflow: auto;\">
                <table class=\"tableStatic wide\">
                    <thead>
                        <tr>
                            <td>";
            // line 90
            echo gettext("Order");
            echo "</td>
                            <td>";
            // line 91
            echo gettext("Client");
            echo "</td>
                        </tr>
                    </thead>
                    <tbody>
                    ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["orders"] ?? null), "list", [], "any", false, false, false, 95));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 96
                echo "                        <tr title=\"";
                echo twig_escape_filter($this->env, twig_timeago_filter(twig_get_attribute($this->env, $this->source, $context["order"], "created_at", [], "any", false, false, false, 96)), "html", null, true);
                echo " ago\">
                            <td><a href=\"";
                // line 97
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 97), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "title", [], "any", false, false, false, 97), 35), "html", null, true);
                echo "</a></td>
                            <td align=\"center\"><a href=\"";
                // line 98
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "client_id", [], "any", false, false, false, 98), "html", null, true);
                echo "\" title=\"\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "client", [], "any", false, false, false, 98), "first_name", [], "any", false, false, false, 98), 1, null, "."), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "client", [], "any", false, false, false, 98), "last_name", [], "any", false, false, false, 98), "html", null, true);
                echo "</a></td>
                        </tr>
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 101
                echo "                    <tr>
                        <td colspan=\"2\" align=\"center\">";
                // line 102
                echo gettext("The list is empty");
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class=\"right\">
        <div class=\"widget\">
            <div class=\"head\">
                <h5 class=\"iGraph\">";
            // line 114
            echo gettext("Product sales");
            echo "</h5>
            </div>
            <div style=\"height: 221px; overflow: auto;\">
                <table class=\"tableStatic wide\">
                    <thead>
                        <tr>
                            <td>";
            // line 120
            echo gettext("Product/Service");
            echo "</td>
                            <td>";
            // line 121
            echo gettext("Orders");
            echo "</td>
                        </tr>
                    </thead>
                    <tbody>
                    ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_product_summary", [], "any", false, false, false, 125));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 126
                echo "                        <tr>
                            <td><a href=\"";
                // line 127
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("product/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 127), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "title", [], "any", false, false, false, 127), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "title", [], "any", false, false, false, 127), 35), "html", null, true);
                echo "</a></td>
                            <td align=\"center\"><a href=\"";
                // line 128
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order", ["product_id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 128)]);
                echo "\" title=\"\" class=\"webStatsLink\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "orders", [], "any", false, false, false, 128), "html", null, true);
                echo "</a></td>
                        </tr>
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 131
                echo "                    <tr>
                        <td colspan=\"2\" align=\"center\">";
                // line 132
                echo gettext("No active orders available");
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class=\"fix\"></div>
</div>
";
        }
        // line 143
        echo "
";
        // line 144
        if (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_is_allowed", [0 => ["mod" => "stats"]], "method", false, false, false, 144)) {
            // line 145
            echo "<div class=\"widget\">
    <div class=\"head\">
        <h5><i class=\"dark-sprite-icon sprite-dropper\" style=\"margin: 0 15px 0 -15px\"></i>";
            // line 147
            echo gettext("Define date interval for graphs");
            echo "</h5>
    </div>
    <form method=\"get\" action=\"\" class=\"mainForm\">
        <input type=\"hidden\" name=\"_url\" value=\"";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 150), "html", null, true);
            echo "\" />
        <fieldset>
            <div class=\"rowElem noborder\">
                <div class=\"moreFields\">
                    <ul>
                        <li style=\"width: 100px\"><input type=\"text\" name=\"date_from\" value=\"";
            // line 155
            if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 155)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 155), "Y-m-d"), "html", null, true);
            }
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["now"] ?? null), "Y-m-d"), "html", null, true);
            echo "\" class=\"datepicker\"/></li>
                        <li class=\"sep\">-</li>
                        <li style=\"width: 100px\"><input type=\"text\" name=\"date_to\" value=\"";
            // line 157
            if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 157)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 157), "Y-m-d"), "html", null, true);
            }
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["now"] ?? null), "Y-m-d"), "html", null, true);
            echo "\" class=\"datepicker\"/></li>
                        <li class=\"sep\" style=\"padding-top: 0px\"><input type=\"submit\" value=\"";
            // line 158
            echo gettext("Update graphs");
            echo "\" class=\"greyishBtn\" /></li>
                    </ul>
                </div>
                <div class=\"fix\"></div>
            </div>
        </fieldset>
    </form>
</div>

<div class=\"widget\">
    <div class=\"head\">
        <h5><i class=\"dark-sprite-icon sprite-graph\" style=\"margin: 0 15px 0 -15px\"></i>";
            // line 169
            echo gettext("Income");
            echo "</h5>
    </div>
    <div class=\"body\">
        <div id=\"graph-income\" style=\"width: 100%; height: 200px;\"></div>
    </div>
</div>

<div class=\"widget\">
    <div class=\"head\">
        <h5><i class=\"dark-sprite-icon sprite-graph\" style=\"margin: 0 15px 0 -15px\"></i>";
            // line 178
            echo gettext("Orders");
            echo "</h5>
    </div>
    <div class=\"body\">
        <div id=\"graph-orders\" style=\"width: 100%; height: 200px;\"></div>
    </div>
</div>

<div class=\"widget\">
    <div class=\"head\">
        <h5><i class=\"dark-sprite-icon sprite-graph\" style=\"margin: 0 15px 0 -15px\"></i>";
            // line 187
            echo gettext("Invoices");
            echo "</h5>
    </div>
    <div class=\"body\">
        <div id=\"graph-invoice\" style=\"width: 100%; height: 200px;\"></div>
    </div>
</div>

<div class=\"widget\">
    <div class=\"head\">
        <h5><i class=\"dark-sprite-icon sprite-graph\" style=\"margin: 0 15px 0 -15px\"></i>";
            // line 196
            echo gettext("Clients");
            echo "</h5>
    </div>
    <div class=\"body\">
        <div id=\"graph-clients\" style=\"width: 100%; height: 200px;\"></div>
    </div>
</div>

<div class=\"widget\">
    <div class=\"head\">
        <h5><i class=\"dark-sprite-icon sprite-graph\" style=\"margin: 0 15px 0 -15px\"></i>";
            // line 205
            echo gettext("Support tickets");
            echo "</h5>
    </div>
    <div class=\"body\">
        <div id=\"graph-tickets\" style=\"width: 100%; height: 200px;\"></div>
    </div>
</div>
";
        }
        // line 212
        echo "
";
        // line 213
        if (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_is_allowed", [0 => ["mod" => "activity"]], "method", false, false, false, 213)) {
            // line 214
            echo "<div class=\"widget simpleTabs\">
    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
            // line 216
            echo gettext("Recent clients activity");
            echo "</a></li>
        <li><a href=\"#tab-staff\">";
            // line 217
            echo gettext("Recent staff activity");
            echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>

        <div class=\"tab_content nopadding\" id=\"tab-index\">
            <table class=\"tableStatic wide\">
                <tbody>
                ";
            // line 226
            $context["events"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "activity_log_get_list", [0 => ["per_page" => 10, "only_clients" => 1]], "method", false, false, false, 226);
            // line 227
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "list", [], "any", false, false, false, 227));
            $context['_iterated'] = false;
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["i"] => $context["event"]) {
                // line 228
                echo "                <tr ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 228)) {
                    echo "class=\"noborder\"";
                }
                echo ">
                    <td style=\"width: 5%\"><a href=\"";
                // line 229
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "client", [], "any", false, false, false, 229), "id", [], "any", false, false, false, 229), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "client", [], "any", false, false, false, 229), "name", [], "any", false, false, false, 229), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, twig_gravatar_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "client", [], "any", false, false, false, 229), "email", [], "any", false, false, false, 229)), "html", null, true);
                echo "?size=20\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "client", [], "any", false, false, false, 229), "name", [], "any", false, false, false, 229), "html", null, true);
                echo "\" /></a></td>
                    <td>";
                // line 230
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "client", [], "any", false, false, false, 230), "name", [], "any", false, false, false, 230), 40), "html", null, true);
                echo "</td>
                    <td><a href=\"";
                // line 231
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "client", [], "any", false, false, false, 231), "id", [], "any", false, false, false, 231), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 231), 50), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 232
                echo twig_escape_filter($this->env, twig_timeago_filter(twig_get_attribute($this->env, $this->source, $context["event"], "created_at", [], "any", false, false, false, 232)), "html", null, true);
                echo " ago</td>
                </tr>
                </tbody>

                ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 237
                echo "                <tbody>
                    <tr class=\"noborder\">
                        <td colspan=\"4\">
                            ";
                // line 240
                echo gettext("The list is empty");
                // line 241
                echo "                        </td>
                    </tr>
                </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 245
            echo "            </table>
        </div>
        
        <div class=\"tab_content nopadding\" id=\"tab-staff\">
            <table class=\"tableStatic wide\">
                <tbody>
                ";
            // line 251
            $context["events"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "activity_log_get_list", [0 => ["per_page" => 10, "only_staff" => 1]], "method", false, false, false, 251);
            // line 252
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "list", [], "any", false, false, false, 252));
            $context['_iterated'] = false;
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["i"] => $context["event"]) {
                // line 253
                echo "                <tr ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 253)) {
                    echo "class=\"noborder\"";
                }
                echo ">
                    <td style=\"width: 5%\"><a href=\"";
                // line 254
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "staff", [], "any", false, false, false, 254), "id", [], "any", false, false, false, 254), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "staff", [], "any", false, false, false, 254), "name", [], "any", false, false, false, 254), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, twig_gravatar_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "staff", [], "any", false, false, false, 254), "email", [], "any", false, false, false, 254)), "html", null, true);
                echo "?size=20\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "staff", [], "any", false, false, false, 254), "name", [], "any", false, false, false, 254), "html", null, true);
                echo "\" /></a></td>
                    <td>";
                // line 255
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "staff", [], "any", false, false, false, 255), "name", [], "any", false, false, false, 255), "html", null, true);
                echo "</td>
                    <td><a href=\"";
                // line 256
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "staff", [], "any", false, false, false, 256), "id", [], "any", false, false, false, 256), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 256), 50), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 257
                echo twig_escape_filter($this->env, twig_timeago_filter(twig_get_attribute($this->env, $this->source, $context["event"], "created_at", [], "any", false, false, false, 257)), "html", null, true);
                echo " ago</td>
                </tr>
                </tbody>

                ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 262
                echo "                <tbody>
                    <tr class=\"noborder\">
                        <td colspan=\"4\">
                            ";
                // line 265
                echo gettext("The list is empty");
                // line 266
                echo "                        </td>
                    </tr>
                </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 270
            echo "            </table>
        </div>

    </div>
    
    <div class=\"fix\"></div>
</div>
";
        }
        // line 278
        echo "
";
    }

    // line 281
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 282
        echo "
";
        // line 283
        if (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_is_allowed", [0 => ["mod" => "stats"]], "method", false, false, false, 283)) {
            // line 284
            echo "<script type=\"text/javascript\" src=\"js/flot/jquery.flot.js\"></script>
<script type=\"text/javascript\" src=\"js/flot/excanvas.min.js\"></script>
<script type=\"text/javascript\">

\$(function() {
    setPlotDataData('graph-income', ";
            // line 289
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_income", [0 => ["date_from" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 289), "date_to" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 289)]], "method", false, false, false, 289)), "html", null, true);
            echo " );
    setPlotDataData('graph-orders', ";
            // line 290
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_orders", [0 => ["date_from" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 290), "date_to" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 290)]], "method", false, false, false, 290)), "html", null, true);
            echo " );
    setPlotDataData('graph-invoice', ";
            // line 291
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_invoices", [0 => ["date_from" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 291), "date_to" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 291)]], "method", false, false, false, 291)), "html", null, true);
            echo " );
    setPlotDataData('graph-clients', ";
            // line 292
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_clients", [0 => ["date_from" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 292), "date_to" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 292)]], "method", false, false, false, 292)), "html", null, true);
            echo " );
    setPlotDataData('graph-tickets', ";
            // line 293
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_tickets", [0 => ["date_from" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 293), "date_to" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 293)]], "method", false, false, false, 293)), "html", null, true);
            echo " );
});

function setPlotDataData(id, result) {
    \$.plot(\$(\"#\"+id), [ result ] , {
        yaxis: {
            min: 0,
            tickDecimals: false
        },
        xaxis: {
            mode: \"time\",
            tickDecimals: false,
            timeformat: \"%y-%m-%d\"
        },
        clickable: true,
        colors: [\"#afd8f8\"],
        series: {
               lines: {
                    lineWidth: 2,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0.6 }, { opacity: 0.2 } ] },
                    steps: false
               }
            }
    });
}

</script>
";
        }
    }

    public function getTemplateName()
    {
        return "mod_index_dashboard.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  872 => 293,  868 => 292,  864 => 291,  860 => 290,  856 => 289,  849 => 284,  847 => 283,  844 => 282,  840 => 281,  835 => 278,  825 => 270,  816 => 266,  814 => 265,  809 => 262,  791 => 257,  783 => 256,  779 => 255,  767 => 254,  760 => 253,  741 => 252,  739 => 251,  731 => 245,  722 => 241,  720 => 240,  715 => 237,  697 => 232,  689 => 231,  685 => 230,  673 => 229,  666 => 228,  647 => 227,  645 => 226,  633 => 217,  629 => 216,  625 => 214,  623 => 213,  620 => 212,  610 => 205,  598 => 196,  586 => 187,  574 => 178,  562 => 169,  548 => 158,  540 => 157,  531 => 155,  523 => 150,  517 => 147,  513 => 145,  511 => 144,  508 => 143,  498 => 135,  489 => 132,  486 => 131,  476 => 128,  466 => 127,  463 => 126,  458 => 125,  451 => 121,  447 => 120,  438 => 114,  427 => 105,  418 => 102,  415 => 101,  401 => 98,  393 => 97,  388 => 96,  383 => 95,  376 => 91,  372 => 90,  361 => 84,  357 => 83,  351 => 79,  349 => 78,  347 => 77,  344 => 76,  333 => 70,  327 => 69,  321 => 68,  315 => 67,  309 => 66,  305 => 65,  297 => 62,  291 => 61,  285 => 60,  279 => 59,  273 => 58,  269 => 57,  261 => 54,  255 => 53,  249 => 52,  243 => 51,  237 => 50,  233 => 49,  225 => 46,  219 => 45,  213 => 44,  207 => 43,  201 => 42,  197 => 41,  189 => 38,  183 => 37,  177 => 36,  171 => 35,  165 => 34,  161 => 33,  152 => 27,  148 => 26,  144 => 25,  140 => 24,  136 => 23,  132 => 22,  127 => 19,  124 => 18,  122 => 17,  116 => 16,  113 => 15,  111 => 14,  108 => 13,  89 => 10,  82 => 9,  65 => 8,  62 => 7,  58 => 6,  51 => 4,  46 => 2,  44 => 1,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_index_dashboard.phtml", "/var/www/bb-themes/admin_default/html/mod_index_dashboard.phtml");
    }
}
