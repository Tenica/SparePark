<?php include "../includes/head.php" ?>
    <link rel="stylesheet" href="../public/css/about.css">
  
</head>
<body>
    <div class="backdrop"></div>
  
        <?php include "../includes/navigation.php" ?>
 
    <?php include "../includes/mobile_navigation.php" ?>
<main>
    <section id="about-us">
        <h1>About Us</h1>
    </section>

    <section class="about-us__container">
         <div class="about-us__statement">
            <h2>
                We reimagine the way the world moves for the better
            </h2>
             <p class="about-us__text">
                Movement is what we power. It’s our lifeblood. 
                It runs through our veins. It’s what gets us out of bed each morning. 
                It pushes us to constantly reimagine how we can move better. For you. 
                For all the places you want to go. For all the things you want to get. 
                For all the ways you want to earn. Across the entire world. 
                In real time. At the incredible speed of now.
             </p>
         </div>
    </section>

    <section class="more-information ">
        <div class="more-information__wrap">
            <div class="more-information__message">
                <p>Read our full mission statement</p>
            </div>
            <div class="more-information__message plus">
                <span class="material-symbols-outlined">
                    add
                </span>
            </div>
    
        </div>

  
    </section>
    
    <div class="more-information__hide">
        <p>
            We are Uber. The go-getters. The kind of people who are relentless about our mission to help people go anywhere and
            get anything and earn their way. Movement is what we power. It’s our lifeblood. It runs through our veins. It’s what
            gets us out of bed each morning. It pushes us to constantly reimagine how we can move better. For you. For all the
            places you want to go. For all the things you want to get. For all the ways you want to earn. Across the entire
            world. In real time. At the incredible speed of now.
        </p>
        
        <p>
            We are a tech company that connects the physical and digital worlds to help make movement happen at the tap of a
            button. Because we believe in a world where movement should be accessible. So you can move and earn safely. In a way
            that’s sustainable for our planet. And regardless of your gender, race, religion, abilities or sexual orientation,
            we champion your right to move and earn freely and without fear. Of course, we haven’t always got it right. But
            we’re not afraid of failure, because it makes us better, wiser and stronger. And it makes us even more committed to
            do the right thing by our customers, local communities and cities, and our incredibly diverse set of international
            partners.
        </p>
    </div>
    <div class="more-information__line"></div>


    <div class="ceo-note__container" id="ceo-note__container">
        <div class="ceo-note__note">
        <h2>A message from our CEO</h2>
        <p>Read about our team’s 
            commitment to provide everyone on our global<br> platform with the technology that can
             help them move ahead.</p>
             <button class="ceo-note__button">
                Chika's message
             </button>
        </div>
      <div class="ceo-note__image-container">
        <img src="../public/images/ceo-image.jpg" class="ceo-image" alt="">
      </div> 
</div>

<div class="ceo-note__mobile-container">
    <div class="ceo-note__mobile-container-text">
        <h2>A message from our CEO</h2>
        <p>Read about our team’s 
            commitment to provide everyone on our global<br> platform with the technology that can
             help them move ahead.</p>
             <button class="ceo-note__mobile-container-button">
                Chika's message
             </button>
        </div>
</div>

    <section class="mission-container">
        <div class="mission-container__image" >
            <img src="../public/images/mission-image.jpg" class="mission-image" alt="">
        </div>
        <div class="mission-container__statement">
            <h2>Mission</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat asperiores iure, eos voluptas rem eius explicabo
            nisi accusamus, doloremque tempore eaque fugiat non, magnam facilis! Molestiae quibusdam veritatis quisquam dolore.
        </p>
        </div>
    </section>

    <section class="vision-container">
        <div class="vision-container__image" >
            <img src="../public/images/mission-image.jpg" class="vision-image" alt="">
        </div>
        <div class="vision-container__statement">
            <h2>Vision</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat asperiores iure, eos voluptas rem eius explicabo
            nisi accusamus, doloremque tempore eaque fugiat non, magnam facilis! Molestiae quibusdam veritatis quisquam dolore.
        </p>
        </div>
    </section>
</main>


 <?php include "../includes/footer.php" ?>

        <script>
    var path = window. location. pathname;

console.log( path );
</script>
    <script src="../public/js/shared.js"></script>
    <script src="../public/js/about.js"></script>
</body>
</html>