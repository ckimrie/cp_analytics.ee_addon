**CP Analytics** is an ExpressionEngine 2.0 accessory which displays an overview of your site's Google Analytics statistics. The accessory displays quick stats for Today and Yesterday (visits, pageviews, average pageviews per visit, and average visit length), with increased stats for the past 31 days (visits, pageviews, average pageviews per visit, average visit length, bounce rate, percentage of new visits, top content and top referrers). The 31-day stats also include sparklines to visualize site activity.

##Installation

Upload the **cp_analytics** folder to your **/system/expressionengine/third_party/** directory, then activate the accessory and extension from the **Add-Ons -> Accessories** menu. Then, visit the CP Analytics extension settings screen to authorize your site to access your account with the provided link, and select one of your available account profiles to display.

CP Analytics caches your "yesterday" and "last month" stats daily, and "today's" stats hourly.

##Theming

CP Analytics comes with themes for the Default, Fruit, and Corporate themes. If you use a different control panel theme, and wish to customize how CP Analytics looks, add your override styles to a file called `your_theme_name.css` and upload it to `/expressionengine/third_party/cp_analytics/css/`.

##Compatibility

CP Analytics requires ExpressionEngine 2.1.3 and PHP 5+, and is MSM-compatible. Also needed in your PHP configuration: OpenSSL and HTTPS cURL support.

The ExpressionEngine 1.7-compatible version of this add-on, called Google Analytics panel, [can be found here](http://github.com/amphibian/ext.analytics_panel.ee_addon).