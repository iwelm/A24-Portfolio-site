export default class Youtube {
  constructor(element) {
    this.element = element;

    this.youtubeContainer = this.element.querySelector('.js-youtube');
    this.poster = this.element.querySelector('.js-poster');
    this.youtubeId = this.element.dataset.youtubeId;
    this.autoplay = this.poster ? 1 : 0;
    this.playerReady = false;

    Youtube.instances.push(this);

    if (this.youtubeId) {
      Youtube.loadScript();
    } else {
      console.error('Vous devez spécifier un id');
    }
  }

  static loadScript() {
    if (!Youtube.scriptIsLoading) {
      Youtube.scriptIsLoading = true;

      const script = document.createElement('script');
      script.src = 'https://www.youtube.com/iframe_api';
      document.body.appendChild(script);
    } else {
    }
  }

  init() {
    this.initPlayer = this.initPlayer.bind(this);

    if (this.poster) {
      this.element.addEventListener('click', this.initPlayer);
    } else {
      this.initPlayer();
    }
  }

  initPlayer(event) {
    if (event) {
      this.element.removeEventListener('click', this.initPlayer);
    }

    this.player = new YT.Player(this.youtubeContainer, {
      height: '100%',
      width: '100%',
      videoId: this.youtubeId,
      playerVars: { rel: 0, autoplay: this.autoplay },
      events: {
        onReady: () => {
          this.playerReady = true;
          const observer = new IntersectionObserver(this.watch.bind(this), {
            rootMargin: '0px 0px 0px 0px',
          });

          observer.observe(this.element);
        },
        onStateChange: (event) => {
          if (event.data == YT.PlayerState.PLAYING) {
            // pause tout les vidéos sauf celui qui joue
            Youtube.pauseAll(this);
          } else if (event.data == YT.PlayerState.ENDED) {
            this.player.seekTo(0);
            this.player.pauseVidéo();
          }
        },
      },
    });
  }
  watch(entries) {
    if (this.playerReady && !entries[0].isIntersecting) {
      this.player.pauseVideo();
    }
  }

  static initAll() {
    document.documentElement.classList.add('is-video-ready');
    for (let i = 0; i < Youtube.instances.length; i++) {
      const instance = Youtube.instances[i];
      instance.init();
    }
  }

  static pauseAll(currentInstance) {
    for (let i = 0; i < Youtube.instances.length; i++) {
      const instance = Youtube.instances[i];
      if (instance.playerReady && instance !== currentInstance) {
        instance.player.pauseVideo();
      }
    }
  }
}

Youtube.instances = [];
window.onYouTubeIframeAPIReady = Youtube.initAll;
