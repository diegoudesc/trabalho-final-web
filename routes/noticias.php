<?php

$this->get('noticias', function(){
	echo 'Notícias';
});

$this->get('noticias/{id}', function($arg){
	echo 'Alguma notícia....';
});

$this->get('noticias/{id}/{categoria}', function($arg){
	echo 'Alguma notícia com categoria....';
});
?>