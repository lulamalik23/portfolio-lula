<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Website Muslimat Dewan Da'wah | Lula</title>

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background: #0d0d0d;
        color: #ffffff;
    }

    .project-detail {
        max-width: 1100px;
        margin: auto;
        padding: 70px 25px;
    }

    /* BACK */
    .back-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;

        margin-bottom: 50px;

        color: #66bb6a;
        text-decoration: none;

        font-size: 14px;
        font-weight: 500;

        transition: all 0.3s ease;
    }

    .back-link:hover {
        color: #a5d6a7;
        transform: translateX(-4px);
    }

    /* LABEL */
    .project-label {
        font-size: 13px;
        letter-spacing: 2px;
        margin-bottom: 18px;

        color: #66bb6a;
        font-weight: 600;
    }

    /* TITLE */
    .project-title {
        font-size: 48px;
        line-height: 1.1;
        margin-bottom: 25px;

        max-width: 800px;
        color: #ffffff;
    }

    /* DESCRIPTION */
    .project-description {
        max-width: 750px;

        font-size: 17px;
        line-height: 1.8;

        color: #bdbdbd;

        margin-bottom: 40px;
    }

    /* TECHNOLOGY */
    .project-tech {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;

        margin-bottom: 60px;
    }

    .project-tech span {
        border: 1px solid #2e7d32;

        padding: 8px 14px;

        border-radius: 30px;

        font-size: 13px;
        color: #66bb6a;

        background: transparent;

        transition: all 0.3s ease;
    }

    .project-tech span:hover {
        background: #2e7d32;
        color: #ffffff;
        transform: translateY(-2px);
    }

    /* SCREENSHOTS */
    .screenshots {
        display: flex;
        flex-direction: column;
        gap: 45px;
    }

    .screenshot {
        position: relative;
    }

    .screenshot-title {
        font-size: 14px;
        margin-bottom: 14px;

        color: #66bb6a;

        font-weight: 600;
        letter-spacing: 0.5px;
    }

    .screenshot img {
        width: 100%;
        display: block;

        border-radius: 14px;

        border: 1px solid #333333;

        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);

        transition: all 0.3s ease;
    }

    .screenshot img:hover {
        border-color: #2e7d32;

        transform: translateY(-4px);

        box-shadow: 0 15px 35px rgba(46, 125, 50, 0.25);
    }

    /* FOOTER */
    .project-footer {
        margin-top: 70px;
        padding-top: 30px;

        border-top: 1px solid #333333;

        color: #777777;
        font-size: 14px;
    }

    /* MOBILE */
    @media (max-width: 768px) {

        .project-detail {
            padding: 40px 20px;
        }

        .back-link {
            margin-bottom: 35px;
        }

        .project-title {
            font-size: 36px;
        }

        .project-description {
            font-size: 15px;
        }

        .project-tech {
            margin-bottom: 45px;
        }

        .screenshots {
            gap: 35px;
        }

    }
</style>
</head>

<body>

    <main class="project-detail">

        <!-- BACK -->
        <a href="{{ url('/') }}#projects" class="back-link">
            ← Back to Projects
        </a>


        <!-- PROJECT INFO -->

        <p class="project-label">
            PROJECT 01 — WEBSITE
        </p>

        <h1 class="project-title">
            Website Muslimat Dewan Da'wah
            Provinsi Lampung
        </h1>

        <p class="project-description">
            Website sebagai media informasi organisasi Muslimat
            Dewan Da'wah Provinsi Lampung. Website ini dikembangkan
            untuk membantu menyampaikan informasi mengenai profil,
            program kerja, kegiatan, artikel, galeri, cabang,
            donasi, dan konsultasi kepada masyarakat.
        </p>


        <!-- TECHNOLOGY -->

        <div class="project-tech">
            <span>Laravel</span>
            <span>PHP</span>
            <span>MySQL</span>
            <span>Bootstrap</span>
        </div>


        <!-- SCREENSHOTS -->

        <div class="screenshots">

            <!-- SCREENSHOT 01 -->

            <div class="screenshot">

                <p class="screenshot-title">
                    01 — Dashboard / Admin
                </p>

                <img
                    src="{{ asset('images/project-muslimat-1.png') }}"
                    alt="Dashboard Admin Website Muslimat Dewan Da'wah Provinsi Lampung"
                >

            </div>


            <!-- SCREENSHOT 02 -->

            <div class="screenshot">

                <p class="screenshot-title">
                    02 — Homepage
                </p>

                <img
                    src="{{ asset('images/project-muslimat-2.png') }}"
                    alt="Homepage Website Muslimat Dewan Da'wah Provinsi Lampung"
                >

            </div>


            <!-- SCREENSHOT 03 -->

            <div class="screenshot">

                <p class="screenshot-title">
                    03 — Fitur Website
                </p>

                <img
                    src="{{ asset('images/project-muslimat-3.png') }}"
                    alt="Fitur Website Muslimat Dewan Da'wah Provinsi Lampung"
                >

            </div>

        </div>


        <!-- FOOTER -->

        <div class="project-footer">

            <p>
                Designed & Developed by Lula.
            </p>

        </div>

    </main>

</body>
</html>