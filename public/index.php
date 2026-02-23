
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
    <style>
        body {
            background-color: #061934;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            overflow-x: hidden;
        }
        
        .bi::before {
            line-height: 1.7 !important;
        }

        .gradient-container {
            flex: 1;
            width: 100%;
            background: radial-gradient(circle, rgba(42, 87, 199, 0.8) 0%, transparent 80%);
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .auth-btn {
            position: absolute;
            top: 30px;
            right: 30px;
            background: rgba(6, 25, 52, 0.95);
            border: 2px solid rgba(42, 87, 199, 0.5);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: all 0.3s ease;
            color: #95C4FA;
            font-size: 24px;
            z-index: 10;
            box-shadow: 0 5px 15px rgba(42, 87, 199, 0.3);
        }
        
        .auth-btn:hover {
            box-shadow: 0 5px 25px rgba(42, 87, 199, 0.6);
        }
        
        .logo-container {
            max-width: 400px;
            padding: 20px;
        }
        
        .logo-container img {
            max-width: 100%;
            height: auto;
        }
        
        footer {
            margin-top: auto;
            padding: 15px 20px;
            text-align: center;
            background-color: rgba(6, 25, 52, 0.95);
            border-top: 2px solid rgba(42, 87, 199, 0.5);
            position: sticky;
            bottom: 0;
            z-index: 90;
            backdrop-filter: blur(10px);
            box-shadow: 0 -5px 20px rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .logo-subtitle {
            color: #95C4FA;
            font-size: 18px;
            margin: 0;
        }
        
        /* Стили для модального окна */
        .modal-content {
            background-color: #061934;
            border: 2px solid rgba(42, 87, 199, 0.5);
            border-radius: 15px;
        }
        
        .modal-header {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding-bottom: 15px;
        }
        
        .modal-title {
            color: #95C4FA;
            font-size: 24px;
            font-weight: 600;
        }
        
        .modal-body {
            padding: 25px;
        }
        
        .input-group {
            margin-bottom: 20px;
        }
        
        .input-group-text {
            background-color: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-right: none;
            color: #95C4FA;
            font-size: 18px;
            padding: 12px 15px;
            border-radius: 8px 0 0 8px;
        }
        
        .form-control {
            background-color: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-left: none;
            color: #95C4FA;
            border-radius: 0 8px 8px 0;
            padding: 12px 15px;
        }
        
        .form-control:focus {
            background-color: rgba(255, 255, 255, 0.12);
            border-color: rgba(42, 87, 199, 0.6);
            border-left: none;
            box-shadow: 0 0 0 0.2rem rgba(42, 87, 199, 0.25);
            color: #ffffff;
        }
        
        .form-control::placeholder {
            color: rgba(149, 196, 250, 0.5);
        }
        
        .btn-close {
            filter: invert(1) grayscale(100%) brightness(200%);
        }
        
        .btn-login {
            background: linear-gradient(135deg, rgba(42, 87, 199, 0.8), rgba(42, 87, 199, 0.6));
            border: none;
            color: white;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 600;
            width: 100%;
            transition: all 0.3s ease;
        }
        
        .btn-login:hover {
            background: linear-gradient(135deg, rgba(42, 87, 199, 0.9), rgba(42, 87, 199, 0.7));
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(42, 87, 199, 0.5);
        }
        
        .modal-footer {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 15px;
        }
        
        .forgot-password {
            color: rgba(149, 196, 250, 0.7);
            font-size: 14px;
            text-decoration: none;
            cursor: pointer;
        }
        
        .forgot-password:hover {
            color: #95C4FA;
            text-decoration: underline;
        }
        
        .back-to-login {
            color: rgba(149, 196, 250, 0.7);
            font-size: 14px;
            text-decoration: none;
            cursor: pointer;
        }
        
        .back-to-login:hover {
            color: #95C4FA;
            text-decoration: underline;
        }
        
        .success-message {
            background: rgba(40, 167, 69, 0.2);
            border: 1px solid rgba(40, 167, 69, 0.4);
            border-radius: 8px;
            padding: 15px;
            margin-top: 15px;
            color: #28a745;
            font-weight: 500;
            display: none;
        }
        
        /* Стили для аудио плеера */
        .audio-control {
            position: absolute;
            bottom: 70px;
            right: 20px;
            background: rgba(6, 25, 52, 0.95);
            padding: 12px 15px;
            border-radius: 12px;
            border: 2px solid rgba(42, 87, 199, 0.5);
            box-shadow: 0 5px 15px rgba(42, 87, 199, 0.3);
            backdrop-filter: blur(10px);
            min-width: 280px;
            transition: all 0.3s ease;
            z-index: 95;
        }
        
        .audio-control:hover {
            box-shadow: 0 5px 25px rgba(42, 87, 199, 0.6);
        }
        
        .player-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
        }
        
        .player-title {
            color: #95C4FA;
            font-size: 13px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        
        .player-toggle {
            color: #95C4FA;
            font-size: 16px;
            transition: transform 0.3s ease;
        }
        
        .player-toggle.collapsed {
            transform: rotate(180deg);
        }
        
        .player-content {
            overflow: hidden;
            transition: max-height 0.3s ease, opacity 0.3s ease;
        }
        
        .player-content.collapsed {
            max-height: 0;
            opacity: 0;
            padding: 0 !important;
            margin: 0 !important;
            border: none !important;
        }
        
        .progress-container {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
            height: 5px;
            width: 100%;
            position: relative;
            cursor: pointer;
            margin-bottom: 6px;
            overflow: hidden;
        }
        
        .progress-bar {
            background: linear-gradient(to right, #2A57C7, #95C4FA);
            height: 100%;
            border-radius: 5px;
            width: 0%;
            position: relative;
            transition: width 0.1s linear;
        }
        
        .progress-bar::before {
            content: '';
            position: absolute;
            right: -6px;
            top: 50%;
            transform: translateY(-50%);
            width: 10px;
            height: 10px;
            background: #95C4FA;
            border-radius: 50%;
            box-shadow: 0 0 8px rgba(149, 196, 250, 0.8);
            display: none;
        }
        
        .progress-bar.active::before {
            display: block;
        }
        
        .time-container {
            display: flex;
            justify-content: space-between;
            color: #95C4FA;
            font-size: 10px;
            margin-bottom: 10px;
        }
        
        .controls {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 12px;
        }
        
        .control-btn {
            background: rgba(255, 255, 255, 0.15);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: all 0.3s ease;
            color: #95C4FA;
            font-size: 16px;
        }
        
        .control-btn:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: scale(1.1);
            box-shadow: 0 3px 10px rgba(42, 87, 199, 0.5);
        }
        
        .control-btn.play-pause {
            width: 48px;
            height: 48px;
            font-size: 20px;
        }
        
        /* Плейлист */
        .playlist-container {
            margin-top: 12px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 12px;
        }
        
        .playlist-header {
            color: #95C4FA;
            font-size: 11px;
            font-weight: 600;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 4px;
        }
        
        .playlist {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }
        
        .playlist-item {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 6px;
            padding: 8px;
            cursor: pointer;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 11px;
        }
        
        .playlist-item:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(3px);
        }
        
        .playlist-item.active {
            background: rgba(42, 87, 199, 0.3);
            border-left: 3px solid #95C4FA;
        }
        
        .playlist-item-number {
            color: #95C4FA;
            font-size: 11px;
            font-weight: bold;
            min-width: 18px;
        }
        
        .playlist-item-info {
            flex: 1;
        }
        
        .playlist-item-title {
            color: #ffffff;
            font-size: 12px;
            font-weight: 500;
            margin-bottom: 1px;
        }
        
        .playlist-item-artist {
            color: rgba(149, 196, 250, 0.7);
            font-size: 10px;
        }
        
        .playlist-item-duration {
            color: #95C4FA;
            font-size: 10px;
            font-weight: 500;
        }
        
        /* Свёрнутый плеер */
        .audio-control.collapsed {
            min-width: 240px;
            padding: 8px 12px;
        }
    </style>
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
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
            const audio = document.getElementById('backgroundMusic');
            const progressBar = document.getElementById('progressBar');
            const progressContainer = document.getElementById('progressContainer');
            const currentTimeEl = document.getElementById('currentTime');
            const durationEl = document.getElementById('duration');
            const playPauseBtn = document.getElementById('playPauseBtn');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const playerHeader = document.getElementById('playerHeader');
            const playerContent = document.getElementById('playerContent');
            const playerToggle = document.getElementById('playerToggle');
            const audioPlayer = document.getElementById('audioPlayer');
            const currentTrackTitle = document.getElementById('currentTrackTitle');
            const playlistItems = document.querySelectorAll('.playlist-item');
            const playlistItemDurations = document.querySelectorAll('.playlist-item-duration');
            
            // Элементы формы восстановления пароля
            const loginForm = document.getElementById('loginForm');
            const forgotPasswordForm = document.getElementById('forgotPasswordForm');
            const forgotPasswordLink = document.getElementById('forgotPasswordLink');
            const backToLoginLink = document.getElementById('backToLoginLink');
            const successMessage = document.getElementById('successMessage');
            
            let isPlaying = false;
            let currentTrackIndex = 0;
            let isCollapsed = true; // Плеер свёрнут по умолчанию
            let trackDurations = {}; // Храним продолжительности треков
            
            // Форматирование времени
            function formatTime(seconds) {
                const mins = Math.floor(seconds / 60);
                const secs = Math.floor(seconds % 60);
                return `${mins}:${secs.toString().padStart(2, '0')}`;
            }
            
            // Обновление прогресса
            function updateProgress() {
                if (audio.duration && !isNaN(audio.duration)) {
                    const progress = (audio.currentTime / audio.duration) * 100;
                    progressBar.style.width = `${progress}%`;
                    currentTimeEl.textContent = formatTime(audio.currentTime);
                }
                
                if (!audio.paused) {
                    requestAnimationFrame(updateProgress);
                }
            }
            
            // Обработчик клика на кнопку авторизации
            document.getElementById('authButton').addEventListener('click', function() {
                loginModal.show();
            });
            
            // Обработка отправки формы входа
            loginForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const username = document.getElementById('loginUsername').value;
                const password = document.getElementById('loginPassword').value;
                console.log('Логин:', username);
                console.log('Пароль:', password);
                loginModal.hide();
                setTimeout(() => {
                    alert('Добро пожаловать, ' + username + '!');
                }, 300);
            });
            
            // Переключение на форму восстановления пароля
            forgotPasswordLink.addEventListener('click', function() {
                loginForm.style.display = 'none';
                forgotPasswordForm.style.display = 'block';
                forgotPasswordLink.style.display = 'none';
                backToLoginLink.style.display = 'inline';
                document.getElementById('loginModalLabel').innerHTML = '<i class="bi bi-key me-2"></i>Восстановление пароля';
            });
            
            // Возврат к форме входа
            backToLoginLink.addEventListener('click', function() {
                loginForm.style.display = 'block';
                forgotPasswordForm.style.display = 'none';
                forgotPasswordLink.style.display = 'inline';
                backToLoginLink.style.display = 'none';
                successMessage.style.display = 'none';
                document.getElementById('loginModalLabel').innerHTML = '<i class="bi bi-person-circle me-2"></i>Авторизация';
            });
            
            // Обработка отправки формы восстановления пароля
            forgotPasswordForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const email = document.getElementById('recoveryEmail').value;
                console.log('Email для восстановления:', email);
                
                // Показываем сообщение об успехе
                successMessage.style.display = 'block';
                
                // Скрываем форму через 3 секунды
                setTimeout(() => {
                    loginForm.style.display = 'block';
                    forgotPasswordForm.style.display = 'none';
                    forgotPasswordLink.style.display = 'inline';
                    backToLoginLink.style.display = 'none';
                    successMessage.style.display = 'none';
                    document.getElementById('loginModalLabel').innerHTML = '<i class="bi bi-person-circle me-2"></i>Авторизация';
                    document.getElementById('recoveryEmail').value = '';
                }, 3000);
            });
            
            // Переключение свёрнутого/развёрнутого состояния плеера
            playerHeader.addEventListener('click', function() {
                isCollapsed = !isCollapsed;
                
                if (isCollapsed) {
                    playerContent.classList.add('collapsed');
                    playerToggle.classList.add('collapsed');
                    audioPlayer.classList.add('collapsed');
                } else {
                    playerContent.classList.remove('collapsed');
                    playerToggle.classList.remove('collapsed');
                    audioPlayer.classList.remove('collapsed');
                }
            });
            
            // Загрузка трека
            function loadTrack(index) {
                currentTrackIndex = index;
                const track = playlistItems[index];
                const src = track.dataset.src;
                
                // Обновляем интерфейс
                currentTrackTitle.textContent = track.querySelector('.playlist-item-title').textContent;
                
                // Убираем активный класс у всех
                playlistItems.forEach(item => item.classList.remove('active'));
                // Добавляем активный класс текущему
                track.classList.add('active');
                
                // Загружаем аудио
                audio.src = src;
                audio.load();
                
                // Обновляем время после загрузки метаданных
                audio.addEventListener('loadedmetadata', function onLoaded() {
                    if (!isNaN(audio.duration)) {
                        durationEl.textContent = formatTime(audio.duration);
                        trackDurations[src] = audio.duration;
                        
                        // Обновляем время в плейлисте
                        playlistItemDurations[index].textContent = formatTime(audio.duration);
                    }
                    audio.removeEventListener('loadedmetadata', onLoaded);
                });
                
                // Если играет, запускаем
                if (isPlaying) {
                    audio.play().catch(error => {
                        console.log('Ошибка воспроизведения:', error);
                    });
                }
            }
            
            // Воспроизведение/пауза
            playPauseBtn.addEventListener('click', function() {
                if (audio.paused) {
                    audio.play().then(() => {
                        isPlaying = true;
                        playPauseBtn.innerHTML = '<i class="bi bi-pause-fill"></i>';
                        progressBar.classList.add('active');
                        updateProgress();
                    }).catch(error => {
                        console.log('Ошибка воспроизведения:', error);
                        alert('Для воспроизведения звука нужен клик пользователя!');
                    });
                } else {
                    audio.pause();
                    isPlaying = false;
                    playPauseBtn.innerHTML = '<i class="bi bi-play-fill"></i>';
                    progressBar.classList.remove('active');
                }
            });
            
            // Перемотка по клику на прогресс
            progressContainer.addEventListener('click', function(e) {
                const width = this.clientWidth;
                const clickX = e.offsetX;
                const duration = audio.duration;
                
                if (duration && !isNaN(duration)) {
                    audio.currentTime = (clickX / width) * duration;
                    
                    if (!isPlaying) {
                        audio.play().then(() => {
                            isPlaying = true;
                            playPauseBtn.innerHTML = '<i class="bi bi-pause-fill"></i>';
                            progressBar.classList.add('active');
                            updateProgress();
                        });
                    }
                }
            });
            
            // Предыдущий трек
            prevBtn.addEventListener('click', function() {
                currentTrackIndex = (currentTrackIndex - 1 + playlistItems.length) % playlistItems.length;
                loadTrack(currentTrackIndex);
                
                if (isPlaying) {
                    audio.play().catch(error => {
                        console.log('Ошибка воспроизведения:', error);
                    });
                }
            });
            
            // Следующий трек
            nextBtn.addEventListener('click', function() {
                currentTrackIndex = (currentTrackIndex + 1) % playlistItems.length;
                loadTrack(currentTrackIndex);
                
                if (isPlaying) {
                    audio.play().catch(error => {
                        console.log('Ошибка воспроизведения:', error);
                    });
                }
            });
            
            // Клик по треку в плейлисте
            playlistItems.forEach((item, index) => {
                item.addEventListener('click', function() {
                    loadTrack(index);
                    
                    if (isPlaying) {
                        audio.play().catch(error => {
                            console.log('Ошибка воспроизведения:', error);
                        });
                    }
                });
            });
            
            // Сброс при окончании трека
            audio.addEventListener('ended', function() {
                nextBtn.click();
            });
            
            // Инициализация первого трека
            loadTrack(0);
        });
    </script>
</body>
</html>