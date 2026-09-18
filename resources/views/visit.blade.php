@extends('template.house')

@section('title')
    Housa - Real Esate Template
@endsection
@section('style')
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection
@section('content')
<div class="visites-container">
        <!-- Page Header -->
        <div class="page-header">
            <h1>Mes visites</h1>
            <p>Consultez l'historique de toutes vos visites de logements</p>
        </div>

        <!-- Empty State -->
        <div class="empty-state">
            <div class="empty-state-icon">
                <i class="fas fa-calendar-alt"></i>
            </div>
            <h3>Aucune visite programmée</h3>
            <p>Commencez à explorer des logements et programmez vos premières visites !</p>
            <button class="btn btn-discover">Découvrir des logements</button>
        </div>
    </div>
@endsection
