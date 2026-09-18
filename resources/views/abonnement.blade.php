@extends('template.house')

@section('title')
    Housa - Abonnement Bailleur
@endsection
@section('style')
    <link rel="stylesheet" href="assets/css/style.css">
@endsection
@section('content')
    <div class="space32" style="margin-top: 100px">
        <!--===== Abonnement AREA STARTS =======-->
        <form action="{{ route('abonnement.update', Auth::user()) }}" method="post">
            @csrf
            @method('PUT')
            <div class="vl-blog-1-area container-home1 overflow-hidden">
                <div class="container-fluid">
                    <div class="header">
                        <h1>🏠 Devenez Bailleur Professionnel</h1>
                        <p>Choisissez l'offre qui correspond à vos besoins et maximisez vos revenus locatifs</p>
                    </div>

                    <div class="plans-container">
                        <div class="plan-card">
                            <div class="plan-header">
                                <div class="plan-name">Essentiel</div>
                                <div class="plan-price">3 000 <span>FCFA/mois</span></div>
                                <div class="plan-description">Parfait pour débuter dans la location</div>
                            </div>
                            <ul class="features-list">
                                <li>Jusqu'à 3 propriétés</li>
                                <li>Publication d'annonces illimitées</li>
                                <li>Tableau de bord basique</li>
                                <li>Gestion des locataires</li>
                                <li>Suivi des paiements</li>
                                <li>Support par email</li>
                            </ul>
                            <button type="submit" class="subscribe-btn">Souscrire</button>
                        </div>

                        <div class="plan-card featured">
                            <div class="plan-header">
                                <div class="plan-name">Professionnel</div>
                                <div class="plan-price">5 000 <span>FCFA/mois</span></div>
                                <div class="plan-description">L'offre la plus populaire pour gérer efficacement</div>
                            </div>
                            <ul class="features-list">
                                <li>Jusqu'à 10 propriétés</li>
                                <li>Toutes les fonctionnalités Essentiel</li>
                                <li>Tableau de bord avancé avec analytics</li>
                                <li>Génération automatique de contrats</li>
                                <li>Rappels automatiques de paiement</li>
                                <li>Suivi des dépenses et revenus</li>
                                <li>Support prioritaire 24/7</li>
                                <li>Badge "Bailleur Vérifié"</li>
                            </ul>
                            <button type="submit" class="subscribe-btn">Souscrire</button>
                        </div>

                        <div class="plan-card">
                            <div class="plan-header">
                                <div class="plan-name">Premium</div>
                                <div class="plan-price">15 000 <span>FCFA/mois</span></div>
                                <div class="plan-description">Pour les grands gestionnaires immobiliers</div>
                            </div>
                            <ul class="features-list">
                                <li>Propriétés illimitées</li>
                                <li>Toutes les fonctionnalités Professionnel</li>
                                <li>API d'intégration</li>
                                <li>Gestionnaire de compte dédié</li>
                                <li>Rapports financiers personnalisés</li>
                                <li>Multi-utilisateurs (jusqu'à 5)</li>
                                <li>Formation personnalisée</li>
                                <li>Publicité prioritaire</li>
                                <li>Intégration comptable</li>
                                <li>Assurance loyers impayés incluse</li>
                            </ul>
                            <button type="submit" class="subscribe-btn">Souscrire</button>
                        </div>
                    </div>

                    <div class="benefits-section">
                        <h2>Pourquoi Devenir Bailleur sur Notre Plateforme ?</h2>
                        <div class="benefits-grid">
                            <div class="benefit-item">
                                <div class="benefit-icon">💰</div>
                                <h3>Maximisez vos Revenus</h3>
                                <p>Fixez vos prix, gérez plusieurs propriétés et augmentez votre taux d'occupation grâce à
                                    notre visibilité accrue.</p>
                            </div>
                            <div class="benefit-item">
                                <div class="benefit-icon">🛡️</div>
                                <h3>Sécurité Garantie</h3>
                                <p>Vérification des locataires, contrats légaux et système de paiement sécurisé pour votre
                                    tranquillité d'esprit.</p>
                            </div>
                            <div class="benefit-item">
                                <div class="benefit-icon">📊</div>
                                <h3>Gestion Simplifiée</h3>
                                <p>Tableau de bord intuitif pour suivre vos propriétés, paiements, et communications en un
                                    seul endroit.</p>
                            </div>
                            <div class="benefit-item">
                                <div class="benefit-icon">🎯</div>
                                <h3>Visibilité Optimale</h3>
                                <p>Vos annonces sont vues par des milliers de locataires potentiels chaque jour sur notre
                                    plateforme.</p>
                            </div>
                            <div class="benefit-item">
                                <div class="benefit-icon">⚡</div>
                                <h3>Gain de Temps</h3>
                                <p>Automatisation des tâches répétitives : rappels, factures, et notifications pour vous
                                    concentrer sur l'essentiel.</p>
                            </div>
                            <div class="benefit-item">
                                <div class="benefit-icon">🤝</div>
                                <h3>Support Expert</h3>
                                <p>Une équipe dédiée pour vous accompagner à chaque étape et répondre à toutes vos
                                    questions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--===== Abonnement AREA ENDS =======-->
    </div>
@endsection
