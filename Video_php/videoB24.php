<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vidéo B24</title>
    <link rel="stylesheet" href="/assets/accueil_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        html, body {
            height: 100%;
        }
        body {
            min-height: 100vh;
            margin: 0;
            padding: 0;
            background: url('../no_label.png') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .bg-overlay {
            position: fixed;
            top: 0; left: 0; width: 100vw; height: 100vh;
            background: rgba(255,255,255,0.65);
            z-index: 0;
            pointer-events: none;
        }
        .video-container {
            background: rgba(255,255,255,0.92);
            border-radius: 1.7vw;
            box-shadow: 0 0 1.7vw rgba(0,0,0,0.22);
            width: 75vw;
            max-width: 95vw;
            min-width: 0;
            margin: 0 auto;
            padding: 0.5vw 3.5vw 1vw 3.5vw;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            position: relative;
            min-height: 35vh;
            z-index: 1;
        }
        .video-header-row {
            display: flex;
            flex-direction: row;
            align-items: flex-end;
            justify-content: flex-start;
            width: 100%;
            margin-bottom: 0.3vw;
        }
        .titre-b1 {
            font-size: 1.1vw;
            color: #333;
            padding: 0.5vw 0vw;
        }
        .titre-centre {
            font-size: 1.1vw;
            font-weight: bold;
            padding: 0.5vw 0vw;
            color: #333;
            flex: 1;
            text-align: center;
        }
        video {
            width: 77vw !important;              /* taille responsive */
            height: auto !important;             /* hauteur automatique */
            max-width: 1480px !important;        /* largeur max précise */
            max-height: 90vh !important;         /* limite la hauteur à 90% viewport */
            margin-top: 0vw;   /* colle la vidéo au titre */
            margin-bottom: 0.4vw;
            border-radius: 0.9vw !important;    /* arrondi des bords */
            box-shadow: 0 0 0.8vw rgba(0, 0, 0, 0.09) !important; /* ombre douce */
            display: block !important;
            object-fit: contain !important;
        }
        .btn-continue {
            margin-top: 2vw; /* espace augmenté entre la vidéo et le bouton */
            position: static;
            margin: 0 auto;
            display: block;
            background-color: #4da3ff !important;
            border-color: #4da3ff !important;
            min-width: 6vw;
            font-size: 0.9vw;
            padding: 0.3vw 1vw;
            border-radius: 0.5vw;
            margin-top: 0.8vw;   /* bouton très proche de la vidéo */
        }
        .arrow-back {
            position: absolute;
            left: 1vw;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            z-index: 2;
            padding: 0;
        }
        .arrow-back svg {
            width: 3vw;
            height: 3vw;
            fill: #4da3ff;
        }
        @media (max-width: 900px) {
            .video-container {
                width: 95vw;
                padding: 3vw 2vw;
            }
            video {
                width: 80vw;
                max-width: 90vw;
            }
            .btn-continue {
                font-size: 2vw;
                min-width: 20vw;
                padding: 1vw 2vw;
            }
            h1 {
                font-size: 2.5vw;
            }
            .arrow-back svg {
                width: 6vw;
                height: 6vw;
            }
        }
        @media (max-width: 500px) {
            .video-container {
                width: 10vw;
                padding: 2vw 1vw;
                min-height: 30vh;
            }
            video {
                width: 98vw;
                max-width: 98vw;
            }
            .btn-continue {
                font-size: 3vw;
                min-width: 30vw;
                padding: 2vw 4vw;
            }
            h1 {
                font-size: 4vw;
            }
            .arrow-back svg {
                width: 10vw;
                height: 10vw;
            }
        }
    </style>
</head>
<body>
    <div class="bg-overlay"></div>
    <button class="arrow-back" onclick="window.location.href='videoB23.php';" title="Vidéo précédente" style="position:absolute;left:1vw;top:50%;transform:translateY(-50%);background:none;border:none;cursor:pointer;z-index:2;padding:0;">
        <svg viewBox="0 0 24 24" style="width:3vw;height:3vw;fill:#4da3ff;"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg>
    </button>
    <div class="video-container">
        <div class="video-header-row">
            <div class="titre-b1">Vidéo B24</div>
            <div class="titre-centre">Déconnexions : routes</div>
        </div>
        <video controls>
            <source src="../videos/Vidéo_B24.mp4" type="video/mp4">
        </video>
        <button type="button" class="btn btn-primary btn-continue" onclick="window.location.href='../etape3.php';">Continuer</button>
    </div>
</body>
</html>
