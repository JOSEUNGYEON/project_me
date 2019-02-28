

    $(function($){
          $('.body').vidbg({
              'mp4': './data/mp4_video.mp4',
              'webm': './data/webm_video.webm',
              'poster': './data/fallback.jpg',
          }, {
            // Options
            muted: true,
            loop: true,
        overlay: true,
          });
      });

