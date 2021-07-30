var sound = new Howl({
    src: ['../assets/audio/MenuMusic01.mp3'],
    volume: 1.0,
    onend: function () {
      //alert('We finished with the setup!');
      sound.play()
    }
  });
  sound.play()