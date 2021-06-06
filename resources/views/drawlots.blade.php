<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>發一崇德台南道場</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link href="{{ URL::to('/') }}/css/app.css" rel="stylesheet" />

    <!-- SEO -->
    <meta name=" keywords" content="仙佛慈語,佳句" />
    <meta name="description"
        content="聽聽仙佛怎麼說--仙佛慈語線上抽" />

    <!-- Open Graph -->
    <meta property="og:title" content="發一崇德台南道場,發一崇德,台南學界" />
    <meta property="og:description"
        content="聽聽仙佛怎麼說--仙佛慈語線上抽" />
        <style>
            /* This style sets the width of all images to 100%: */
            img {
            width: 50%;
            }
        </style>
</head>

<body>
    <script>
        function getRandomIntInclusive(min, max) {
            min = Math.ceil(min);
            max = Math.floor(max);
            return Math.floor(Math.random() * (max - min + 1) + min); //The maximum is inclusive and the minimum is inclusive
        }
        function draw(){
            var random = getRandomIntInclusive(10,45);
            var str = "public/image/buddas/"+random+".png"; 
            document.getElementById('lots')
            .src=str;
        }
    </script>
    <div class="container py-3">
        <main>
            <div class="pricing-header p-2 pb-md-4 mx-auto text-center">
                <h1 class="display-6 fw-normal">發一崇德台南學界
                    <span class="badge rounded-pill bg-light text-dark my-1">愛的共振
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#dc3545"
                            class="bi bi-heart-fill mb-2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                        </svg></span>
                </h1>
                <div class="card mb-9 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">仙佛慈語</h4>
                        <button name="draw" onclick=draw(); class="w-100 btn btn-lg btn-danger">
                            開始抽籤
                        </button>
                    </div>
                    <div class="card-body">
                <img id="lots" src="" class="center"
                alt="仙佛慈語" />
                    </div>
                </div>
            </div>
        </main>

    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
