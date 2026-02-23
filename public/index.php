
<!-- Привет, маленькая любопытинка!! -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Павел Горин">
    <meta name="keywords" content="Павел Горин IT ИТ ИП"/>
    <title>Павел Горин IT</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="gradient-container">
        <button type="button" class="auth-btn" id="authButton">
            <i class="bi bi-person-circle"></i>
        </button>
        
        <div class="logo-container">
            <img src="/img/logo_white.png" alt="Павел Горин" class="img-fluid">
        </div>
    </div>
    
    <footer>
        <p class="logo-subtitle" id="mark"># PavelGorinIT at Gmail</p>
    </footer>
    
    <!-- Аудио плеер поверх футера (свёрнут по умолчанию) -->
    <div class="audio-control collapsed" id="audioPlayer">
        <div class="player-header" id="playerHeader">
            <div class="player-title">
                <i class="bi bi-music-note-beamed"></i>
                <span id="currentTrackTitle">SoundHelix Song 1</span>
            </div>
            <i class="bi bi-chevron-down player-toggle collapsed" id="playerToggle"></i>
        </div>
        
        <div class="player-content collapsed" id="playerContent">
            <div class="progress-container" id="progressContainer">
                <div class="progress-bar" id="progressBar"></div>
            </div>
            
            <div class="time-container">
                <span id="currentTime">0:00</span>
                <span id="duration">0:00</span>
            </div>
            
            <div class="controls">
                <button class="control-btn" id="prevBtn">
                    <i class="bi bi-skip-backward-fill"></i>
                </button>
                <button class="control-btn play-pause" id="playPauseBtn">
                    <i class="bi bi-play-fill"></i>
                </button>
                <button class="control-btn" id="nextBtn">
                    <i class="bi bi-skip-forward-fill"></i>
                </button>
            </div>
            
            <div class="playlist-container">
                <div class="playlist-header">
                    <i class="bi bi-list-ul"></i>
                    <span>ПЛЕЙЛИСТ</span>
                </div>
                
                <div class="playlist" id="playlist">
                    <div class="playlist-item active" data-src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3">
                        <span class="playlist-item-number">1</span>
                        <div class="playlist-item-info">
                            <div class="playlist-item-title">SoundHelix Song 1</div>
                            <div class="playlist-item-artist">SoundHelix</div>
                        </div>
                        <span class="playlist-item-duration">--:--</span>
                    </div>
                    <div class="playlist-item" data-src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-2.mp3">
                        <span class="playlist-item-number">2</span>
                        <div class="playlist-item-info">
                            <div class="playlist-item-title">SoundHelix Song 2</div>
                            <div class="playlist-item-artist">SoundHelix</div>
                        </div>
                        <span class="playlist-item-duration">--:--</span>
                    </div>
                    <div class="playlist-item" data-src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-3.mp3">
                        <span class="playlist-item-number">3</span>
                        <div class="playlist-item-info">
                            <div class="playlist-item-title">SoundHelix Song 3</div>
                            <div class="playlist-item-artist">SoundHelix</div>
                        </div>
                        <span class="playlist-item-duration">--:--</span>
                    </div>
                    <div class="playlist-item" data-src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-4.mp3">
                        <span class="playlist-item-number">4</span>
                        <div class="playlist-item-info">
                            <div class="playlist-item-title">SoundHelix Song 4</div>
                            <div class="playlist-item-artist">SoundHelix</div>
                        </div>
                        <span class="playlist-item-duration">--:--</span>
                    </div>
                    <div class="playlist-item" data-src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-5.mp3">
                        <span class="playlist-item-number">5</span>
                        <div class="playlist-item-info">
                            <div class="playlist-item-title">SoundHelix Song 5</div>
                            <div class="playlist-item-artist">SoundHelix</div>
                        </div>
                        <span class="playlist-item-duration">--:--</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Модальное окно авторизации -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">
                        <i class="bi bi-person-circle me-2"></i>Авторизация
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <!-- Форма входа -->
                    <form id="loginForm">
                        <div class="input-group has-validation mb-3">
                            <span class="input-group-text">
                                <i class="bi bi-person"></i>
                            </span>
                            <input type="text" class="form-control" id="loginUsername" placeholder="Логин" required>
                        </div>
                        
                        <div class="input-group has-validation mb-4">
                            <span class="input-group-text">
                                <i class="bi bi-lock"></i>
                            </span>
                            <input type="password" class="form-control" id="loginPassword" placeholder="Пароль" required>
                        </div>
                        
                        <button type="submit" class="btn btn-login">Войти</button>
                    </form>
                    
                    <!-- Форма восстановления пароля (скрыта по умолчанию) -->
                    <form id="forgotPasswordForm" style="display: none;">
                        <div class="input-group has-validation mb-3">
                            <span class="input-group-text">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input type="email" class="form-control" id="recoveryEmail" placeholder="Email для восстановления" required>
                        </div>
                        
                        <button type="submit" class="btn btn-login">Отправить</button>
                        
                        <div class="success-message" id="successMessage">
                            <i class="bi bi-check-circle me-2"></i>Запрос на восстановление пароля отправлен
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <small>
                        <span class="forgot-password" id="forgotPasswordLink">Забыли пароль?</span>
                        <span class="back-to-login" id="backToLoginLink" style="display: none;">Вернуться к входу</span>
                    </small>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Скрытый аудио элемент -->
    <audio id="backgroundMusic" preload="metadata"></audio>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/script.js"></script>
</body>
</html>