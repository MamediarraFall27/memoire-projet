<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: url('{{ asset('images/background/1.jpg') }}') no-repeat center center fixed;
        background-size: cover;
        height: 100vh;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .form-container {
        background-color: rgba(125, 124, 124, 0.7); /* Formulaire transparent */
        border-radius: 25px;
        padding: 1.5rem;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 350px;
        margin:0 auto;
    }

    .form-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 1rem;
        text-align: center;
    }

    .input-group {
        display: flex;
        align-items: center;
        background-color: rgba(255, 255, 255, 0); /* Champs transparents */
        border: 1px solid #ddd; /* Bordure */
        border-radius: 20px;
        margin-bottom: 1.2rem;
        padding: 0.5rem;
    }

    .input-group i {
        color: white; /* Couleur des icônes */
       /* margin-left: 0.5rem; /* Icône à gauche du champ */
        margin-right: 0.75rem;
    }

    .input-group input {
        background: none; /* Transparent */
        border: none; /* Pas de bordure */
        outline: none; /* Pas de contour au focus */
        color: white; /* Texte blanc */
        font-size: 0.85rem;
        width: 100%;
        padding: 0.5rem;
    }

    .input-group input::placeholder {
        color: #f0f0f0; /* Placeholder en blanc */
        font-style: italic;
    }

    .input-group input:focus {
        box-shadow: none; /* Pas d'ombre */
    }

    .form-container .remember-me-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 1rem;
        font-size: 0.9rem;
    }

    .form-container .remember-me-container .remember-me {
        display: flex;
        align-items: center;
        color: white;
    }

    .form-container .form-button {
        background-color: #f9f9fa;
        color: #333;
        border: none;
        border-radius: 25px;
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
        cursor: pointer;
        width: 100%;
        margin-top: 1.5rem;
    }

    .form-container .form-button:hover {
        background-color: #ebebee;
        box-shadow: 0px 4px 8px rgba(79, 70, 229, 0.3);
    }

    .form-container a {
        font-size: 0.9rem;
        color: #f4f4f7;
        text-decoration: none;
    }

    .form-container a:hover {
        color: #f4f4fb;
    }
    
</style>

<div class="form-container">
    <div class="form-title">{{ __('Inscription') }}</div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Prénom -->
        <div class="input-group">
            <i class="fas fa-user"></i> <!-- Icône à gauche -->
            <input id="prenom" type="text" name="prenom" placeholder="Prénom" value="{{ old('prenom') }}" required autofocus>
        </div>

        <!-- Nom -->
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input id="nom" type="text" name="nom" placeholder="Nom" value="{{ old('nom') }}" required>
        </div>

        <!-- Email -->
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
        </div>

        <!-- Mot de passe -->
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input id="password" type="password" name="password" placeholder="Mot de passe" required>
        </div>

        <!-- Confirmation du mot de passe -->
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirmer le mot de passe" required>
        </div>

        <!-- Se souvenir de moi et Mot de passe oublié -->
        <div class="remember-me-container">
            <div class="remember-me">
                <input type="checkbox" id="remember_me" name="remember">
                <label for="remember_me">{{ __('Se souvenir de moi') }}</label>
            </div>
            <a href="{{ route('password.request') }}">{{ __('Mot de passe oublié ?') }}</a>
        </div>

        <!-- Bouton S'inscrire -->
        <button type="submit" class="form-button">{{ __("S'inscrire") }}</button>
    </form>
</div>
