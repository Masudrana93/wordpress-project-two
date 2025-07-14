<?php

function my_portfolio_theme_register_navbar(){
  register_nav_menus(array(
    'primary-menu'         => __('Primary Menu', 'myPortfolioTwo'),
    'company-menu'         => __('Company Menu', 'myPortfolioTwo'),
    'recent-projects-menu' => __('Recent Projects Menu', 'myPortfolioTwo'),
    'get-in-touch'         => __('Get In Touch Menu', 'myPortfolioTwo'),
  ));
}
add_action('init', 'my_portfolio_theme_register_navbar');