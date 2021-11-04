<!--menagambil file header-->
<?php include('header.php') ?>
<!-- / -->

<div class="container">
    <div class="card bg-success bg-gradient text-light">
        <div class="card-body">
            <h1 class="text-center"> Sistem Pakar Diagnosa Covid-19</h1>
        </div>
    </div>
    <div class="card mt-3 rounded shadow-sm">
        <div class="card-body">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://covid19.go.id/storage/app/media//slider/kipi.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://covid19.go.id/storage/app/media//slider/penyintas.webp" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://covid19.go.id/storage/app/media//slider/faskesvaksin.jpeg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div id="kopi-covid"></div>
    <script>
        var f = document.createElement("iframe")
        f.src = "https://kopi.dev/widget-covid-19/"
        f.width = "100%"
        f.height = 400
        f.scrolling = "no"
        f.frameBorder = 0
        var rootEl = document.getElementById("kopi-covid")
        console.log(rootEl)
        rootEl.appendChild(f)
    </script>
    <div class="card">
        <div class="card-body">

        </div>

    </div>
</div>
</main>

<?php include('footer.php');
