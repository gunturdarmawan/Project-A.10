
      gsap.from('.content-left', {
        stagger:1,
        opacity:0, 
        duration:2,
        y: -20, delay: 0.5
        });

      var tl = gsap.timeline({defaults:{duration: .7, ease: Back.easeOut.config(2), opacity:0}});

      tl.from("#img-content", {delay: 2, opacity:0, scale: .3, transformOrigin: 'left'}, "=.2");
      gsap.registerPlugin(MotionPathPlugin);

      gsap.from("#phone", {
        duration: 5, 
        repeat: -1,
        delay: 1,
        yoyo: true,
        ease: "power1.inOut",
        motionPath:{
          path: "#Pathmain",
          align: "#Pathmain",
          autoRotate: false,
          alignOrigin: [0.5, 0.5]
        }
      });
