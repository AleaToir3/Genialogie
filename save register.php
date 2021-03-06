{% extends "base.html.twig" %}

{% block title %} {{parent()}} | Créer un compte  {% endblock %}

{% block stylesheets %}
    <link rel="stylesheet" href="{{ asset ('assets/css/boostrap.css' ) }}" type="text/css">  
     <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,600;1,400&display=swap"
        rel="stylesheet"> 
{% endblock stylesheets %}

{% block body %}







       
<div class="container-fluid bloc-logo-h1 d-flex flex-row flex-nowrap justify-content-center">
    <div class="container bloc-logo d-flex align-items-center justify-content-center ">
        <img src="assets/icones/logo-orange.svg" alt="logo">
    </div>
    <div class="container title">
        <h1>Je créé un compte</h1>
    </div>
</div>

<div class="container-fluid bloc-inputs">
    {{ form_start(registrationForm) }}
    <div class="bloc-inputs d-flex flex-column align-items-start label-container">
        {{ form_widget(registrationForm.name, {'attr':{'placeholder': 'Nom','class' : 'title-area'}}) }}
        {{ form_widget(registrationForm.firstname, {'attr':{'placeholder': 'Prenom','class' : 'title-area'}}) }}
        {{ form_row(registrationForm.birthday, {'attr':{'placeholder': 'Date de naissance','class' : 'date-area'}}) }}
        {{ form_widget(registrationForm.email,{'attr':{'placeholder': 'Email','class' : 'title-area'}}) }}
        {{ form_widget(registrationForm.plainPassword, {'attr':{'placeholder': 'Password','class' : 'title-area'}}) }}
    </div>
</div>

<div class="container-fluid bloc-checkbox-cta d-flex flex-row align-items-center">
    <div class="container-check d-flex flex-row justify-content-evenly">
                {{ form_widget(registrationForm.agreeTerms) }}
                {# {{ form_widget(registrationForm.agreeTerms,{'attr':{'class' : 'form-check-input'}}) }}J'ai lu et accepte sans réserve les<a href="#"> Conditions Générales d'Utilisation</a> du site. #}
        </label>
    </div>
    <div class="container button-container">
        <button type="button" class="btn-cta-full">Je me lance !</button>
        <button type="submit" class="btn">Register</button>

        {{ form_end(registrationForm) }}
    </div>
    </div>
    <a href="{{ path('app_login') }}">J'ai deja un compte je me  connecter</a>
    <br>
    <a href="{{ path('Home') }}">Retour a l'accueil</a>





<!-- Lien javascript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


{% endblock %}
