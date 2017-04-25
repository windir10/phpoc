<?php

// Return all articles
function getArticles() {
    $bdd = new PDO('mysql:host=localhost;dbname=microcms;charset=utf8', 'root', 'boosted');
    $articles = $bdd->query('select * from t_article order by art_id desc');
    return $articles;
}