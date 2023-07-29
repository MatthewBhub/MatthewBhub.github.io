
// JavaScript function to play audio when a button is clicked
function playAudio(audioSrc) {
  var audioPlayer = document.getElementById("audioPlayer");

  // Set the audio source dynamically based on the clicked button
  audioPlayer.src = audioSrc;

  // Play the audio
  audioPlayer.play();
}
