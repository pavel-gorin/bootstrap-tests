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