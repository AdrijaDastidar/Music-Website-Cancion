console.log("Welcome To Cancion");

// Initialize variables
let currentAudioElement = null; // Store the current audio element
let currentIndex = 0; // Keep track of the current song index

// Function to play the song
const playSong = (songId, songName) => {
    // Pause the current audio element if it exists
    if (currentAudioElement) {
        currentAudioElement.pause();
    }

    // Create a new audio element for the selected song
    const audioElement = new Audio(`Songs/${songId}.mp3`);
    audioElement.play(); // Start playing the song immediately

    // Update the current audio element and index
    currentAudioElement = audioElement;
    currentIndex = songIds.indexOf(songId);

    // Update master play button state based on audio element state
    const masterPlay = document.getElementById('masterPlay');
    masterPlay.classList.remove('fa-play-circle');
    masterPlay.classList.add('fa-pause-circle');

    // Set the song name and cover image
    const masterSongName = document.getElementById('masterSongName');
    masterSongName.innerText = songName;
    const gif = document.getElementById('gif');
    gif.src = `covers/${songId}.jpg`;

    // Update play/pause buttons in the song list
    const playButtons = document.querySelectorAll('.songItemPlay');
    playButtons.forEach(button => {
        if (button.id === currentIndex.toString()) {
            button.classList.remove('fa-play-circle');
            button.classList.add('fa-pause-circle');
        } else {
            button.classList.remove('fa-pause-circle');
            button.classList.add('fa-play-circle');
        }
    });

    // Update play/pause button in the footer
    const footerPlayPause = document.getElementById('footerPlayPause');
    footerPlayPause.classList.remove('fa-play-circle');
    footerPlayPause.classList.add('fa-pause-circle');
};

// Function to pause the current song
const pauseSong = () => {
    if (currentAudioElement) {
        currentAudioElement.pause(); // Pause the current song
    }

    // Update play/pause buttons in the song list
    const playButtons = document.querySelectorAll('.songItemPlay');
    playButtons.forEach(button => {
        button.classList.remove('fa-pause-circle');
        button.classList.add('fa-play-circle');
    });

    // Update play/pause button in the footer
    const footerPlayPause = document.getElementById('footerPlayPause');
    footerPlayPause.classList.remove('fa-pause-circle');
    footerPlayPause.classList.add('fa-play-circle');
};

// Function to toggle play and pause buttons in the song list
const togglePlayPauseButton = (button) => {
    if (button.classList.contains('fa-play-circle')) {
        button.classList.remove('fa-play-circle');
        button.classList.add('fa-pause-circle');
    } else {
        button.classList.remove('fa-pause-circle');
        button.classList.add('fa-play-circle');
    }
};

// Function to play the next song
const playNextSong = () => {
    // Increment the current index
    currentIndex = (currentIndex + 1) % songIds.length;
    const nextSongId = songIds[currentIndex];
    const nextSongName = songNames[currentIndex];

    // Play the next song
    playSong(nextSongId, nextSongName);
};

// Function to play the previous song
const playPreviousSong = () => {
    // Decrement the current index
    currentIndex = (currentIndex - 1 + songIds.length) % songIds.length;
    const previousSongId = songIds[currentIndex];
    const previousSongName = songNames[currentIndex];

    // Play the previous song
    playSong(previousSongId, previousSongName);
};

// Retrieve songId and songName from URL parameters
const urlParams = new URLSearchParams(window.location.search);
const songIds = urlParams.getAll('songId[]');
const songNames = urlParams.getAll('songName[]');

// Add click event listener to the master play/pause button
const masterPlay = document.getElementById('masterPlay');
masterPlay.addEventListener('click', () => {
    if (currentAudioElement.paused || currentAudioElement.currentTime <= 0) {
        // If paused or at the beginning, play the current song
        currentAudioElement.play();
    } else {
        // If playing, pause the current song
        currentAudioElement.pause();
    }
});

// Add click event listener to the next button
const nextButton = document.getElementById('next');
nextButton.addEventListener('click', playNextSong);

// Add click event listener to the previous button
const previousButton = document.getElementById('previous');
previousButton.addEventListener('click', playPreviousSong);

// Function to handle song item click
const handleSongItemClick = (songIndex) => {
    // Pause the current song and play the selected song
    pauseSong();
    playSong(songIds[songIndex], songNames[songIndex]);

    // Toggle play/pause button icon
    const playButton = document.getElementById(songIndex.toString());
    togglePlayPauseButton(playButton);
};

// Add click event listeners to each song item
const songItems = document.querySelectorAll('.songItem');
songItems.forEach((songItem, index) => {
    songItem.addEventListener('click', () => {
        handleSongItemClick(index);
    });
});

// Initialize the first song
playSong(songIds[currentIndex], songNames[currentIndex]);
