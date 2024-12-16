<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

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

    .login-container {
        background-color: rgba(125, 124, 124, 0.7);
        border-radius: 12px;
        padding: 2rem;
        width: 100%;
        max-width: 350px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .login-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 1.5rem;
    }

    .form-group {
        position: relative;
        margin-bottom: 1.2rem;
        text-align: left;
    }

    .form-group input {
        background-color: transparent; /* Fond transparent */
        border: 1px solid rgba(255, 255, 255, 0.6); /* Bordure légère pour la visibilité */
        border-radius: 12px; /* Bordure arrondie */
        padding: 0.5rem 0.5rem 0.5rem 2.2rem; /* Réduit le padding pour une taille plus petite */
        width: 100%;
        font-size: 0.85rem; /* Taille de la police réduite */
        color: white; /* Couleur du texte dans le champ */
        transition: border 0.3s ease, box-shadow 0.3s ease;
    }


    .form-group input::placeholder {
        color: rgba(255, 255, 255, 0.7); /* Couleur claire du texte placeholder */
        font-style: italic;
    }

    .form-group input:focus {
        border-color: #ececf1;
        box-shadow: 0 0 4px rgba(99, 102, 241, 0.3);
        outline: none;
    }

    .form-group .icon {
        position: absolute;
        top: 50%;
        left: 0.8rem;
        transform: translateY(-50%);
        color: #f3f3f7;
        font-size: 1rem; /* Réduit la taille de l'icône */
    }

    .remember-me {
        display: flex;
        align-items: center;
        font-size: 0.9rem;
        justify-content: flex-start;
        gap: 0.5rem;
        color: white; /* Texte "Se souvenir de moi" en blanc */
    }

    .remember-me input {
        margin: 0;
        width: auto;
        height: auto;
    }

    .btn-primary {
        background-color: #fff; /* Fond blanc pour le bouton */
        color: #000; /* Texte noir pour le bouton */
        border: 1px solid rgba(255, 255, 255, 0.6); /* Bordure subtile */
        padding: 0.8rem 1.5rem;
        border-radius: 12px; /* Augmenté le border-radius ici */
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        width: 100%;
        margin-bottom: 1rem;
    }

    .btn-primary:hover {
        background-color: rgba(235, 233, 233, 0.1); /* Effet de survol */
        box-shadow: 0 4px 8px rgba(79, 70, 229, 0.3);
    }

    .forgot-password {
        font-size: 0.85rem;
        color: #f6f6f9;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .forgot-password:hover {
        color: #fafafb;
    }
</style>

<div class="login-container">
    <!-- Titre Connexion -->
    <div class="login-title">Connexion</div>

    <!-- Formulaire -->
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Adresse Email -->
        <div class="form-group">

            <span class="icon">@</span> <!-- Icône pour l'email -->
            <input id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
        </div>

        <!-- Mot de Passe -->
        <div class="form-group">
            <span class="icon">🔒</span> <!-- Icône pour le mot de passe -->
            <input id="password" type="password" name="password" placeholder="Mot de passe" required>
        </div>

        <!-- Se souvenir -->
        <div class="form-group remember-me">
            <input id="remember_me" type="checkbox" name="remember">
            <label for="remember_me">Se souvenir de moi</label>
        </div>

        <!-- Bouton de connexion -->
        <div class="form-group">
            <button type="submit" class="btn-primary">Se connecter</button>
        </div>

        <!-- Lien mot de passe oublié -->
        <a class="forgot-password" href="{{ route('password.request') }}">Mot de passe oublié ?</a>
    </form>

</div>
