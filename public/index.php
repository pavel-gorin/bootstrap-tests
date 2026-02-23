
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
    <link rel="stylesheet" href="style.css">
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