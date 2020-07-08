<aside>
    <div class="rooms">
        <a href="index.php?room=ChilloutPlace">
        <div class="room <?php if (isset($_GET['room'])) { if ($_GET['room']=='ChilloutPlace') { echo 'active'; } } ?>">
            <p class="title">Chillout place</p>
            <p class="description">Don't worry, be chatty</p>
        </div></a>

        <a href="index.php?room=Nightlife">
        <div class="room <?php if (isset($_GET['room'])) { if ($_GET['room']=='Nightlife') { echo 'active'; } } ?>">
            <p class="title">Nightlife</p>
            <p class="description">Where you at tonight</p>
        </div></a>

        <a href="index.php?room=SeriesMovies">
        <div class="room <?php if (isset($_GET['room'])) { if ($_GET['room']=='SeriesMovies') { echo 'active'; } } ?>">
            <p class="title">Series & Movies</p>
            <p class="description">Hey! What you looking at?</p>
        </div></a>

        <a href="index.php?room=Sports">
        <div class="room <?php if (isset($_GET['room'])) { if ($_GET['room']=='Sports') { echo 'active'; } } ?>">
            <p class="title">Sports</p>
            <p class="description">Stay in shape</p>
        </div></a>
    </div>
</aside>