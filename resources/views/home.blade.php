@extends('layouts.app')

@section('title', 'Página Inicial')

@section('content')
    <!-- Banner ou Imagem de Destaque -->
    <section style="background-image: url('/path/to/banner.jpg'); background-size: cover; height: 300px; width: 100%; margin-top: 20px;">
        <div style="height: 100%; display: flex; justify-content: center; align-items: center;">
            <h2 style="color: white; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">Bem-vindo à Casa da Paz</h2>
        </div>
    </section>

    <!-- Seção de Introdução com Bootstrap -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h3>Sobre a Casa da Paz</h3>
                <p>A Casa da Paz é uma instituição que oferece apoio a crianças necessitadas...</p>
            </div>
            <div class="col-md-6">
                <h3>Como você pode ajudar</h3>
                <p>Existem várias formas de você colaborar com nossa causa, seja através de doações ou como voluntário.</p>
            </div>
        </div>
    </div>

    <!-- Seção de Doações com botão -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <a href="/doacoes" class="btn btn-success btn-lg">Faça sua Doação Agora</a>
            </div>
        </div>
    </div>

    <!-- Testemunhos (Bootstrap Cards) -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="/path/to/testemunho1.jpg" class="card-img-top" alt="Testemunho 1">
                    <div class="card-body">
                        <h5 class="card-title">Maria Oliveira</h5>
                        <p class="card-text">"A Casa da Paz mudou a vida de muitas crianças, incluindo a minha."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="/path/to/testemunho2.jpg" class="card-img-top" alt="Testemunho 2">
                    <div class="card-body">
                        <h5 class="card-title">José Silva</h5>
                        <p class="card-text">"Ser voluntário na Casa da Paz foi uma experiência transformadora."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="/path/to/testemunho3.jpg" class="card-img-top" alt="Testemunho 3">
                    <div class="card-body">
                        <h5 class="card-title">Ana Souza</h5>
                        <p class="card-text">"Ajudar a Casa da Paz foi a decisão mais gratificante da minha vida."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
