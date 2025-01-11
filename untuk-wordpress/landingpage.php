<?php
/*
Template Name: Landing Page
*/

get_header(); ?>

<style>
    .landing-page {
        text-align: center;
        padding: 50px;
        background-color: #f9f9f9;
    }
    .landing-page h1 {
        font-size: 2.5em;
        margin-bottom: 20px;
    }
    .landing-page p {
        font-size: 1.2em;
        margin-bottom: 30px;
    }
    .landing-page .cta-button {
        background-color: #0073aa;
        color: white;
        padding: 15px 30px;
        text-decoration: none;
        border-radius: 5px;
    }
    .landing-page .cta-button:hover {
        background-color: #005177;
    }
</style>

<div class="landing-page">
    <h1>Welcome to Our Landing Page!</h1>
    <p>Discover amazing content and offers just for you.</p>
    <a href="#signup" class="cta-button">Sign Up Now</a>
</div>

<?php get_footer(); ?>