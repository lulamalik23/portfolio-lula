<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Short Video Editor | Lula</title>

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

        .project-label {
            font-size: 13px;
            letter-spacing: 2px;
            margin-bottom: 18px;
            color: #66bb6a;
            font-weight: 600;
        }

        .project-title {
            font-size: 48px;
            line-height: 1.1;
            margin-bottom: 25px;
            max-width: 800px;
            color: #ffffff;
        }

        .project-description {
            max-width: 750px;
            font-size: 17px;
            line-height: 1.8;
            color: #bdbdbd;
            margin-bottom: 40px;
        }

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

        .works {
            display: flex;
            flex-direction: column;
            gap: 50px;
        }

        .work-title {
            font-size: 14px;
            margin-bottom: 14px;
            color: #66bb6a;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .work-image {
            width: 100%;
            display: block;
            border-radius: 14px;
            border: 1px solid #333333;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
            transition: all 0.3s ease;
        }

        .work-image:hover {
            border-color: #2e7d32;
            transform: translateY(-4px);
            box-shadow: 0 15px 35px rgba(46, 125, 50, 0.25);
        }

        .work-video {
            width: 100%;
            display: block;
            border-radius: 14px;
            border: 1px solid #333333;
            background: #000000;
        }

        .project-footer {
            margin-top: 70px;
            padding-top: 30px;
            border-top: 1px solid #333333;
            color: #777777;
            font-size: 14px;
        }

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

            .works {
                gap: 35px;
            }
        }
    </style>
</head>

<body>

<main class="project-detail">

    <a href="{{ url('/') }}#projects" class="back-link">
        ← Back to Projects
    </a>

    <p class="project-label">
        PROJECT 03 — VIDEO EDITING
    </p>

    <h1 class="project-title">
        Short Video Editor
    </h1>

    <p class="project-description">
        Mengedit dan menyusun video pendek untuk kebutuhan
        konten media sosial dengan memperhatikan visual,
        transisi, teks, dan audio agar lebih menarik.
    </p>

    <div class="project-tech">
        <span>CapCut</span>
        <span>Canva</span>
        <span>Video Editing</span>
        <span>Adobe Illustrator</span>
    </div>

    <div class="works">

    <!-- CAPCUT -->
    <div class="work">

        <p class="work-title">
            01 — CapCut
        </p>

        <img
            src="{{ asset('images/project-video-editor-1.png') }}"
            alt="Project Video Editing CapCut"
            class="work-image"
        >

    </div>


    <!-- CANVA 1 -->
    <div class="work">

        <p class="work-title">
            02 — Canva
        </p>

        <img
            src="{{ asset('images/project-canva 1.png') }}"
            alt="Project Canva"
            class="work-image"
        >

    </div>


    <!-- CANVA 2 -->
    <div class="work">

        <p class="work-title">
            03 — Canva
        </p>

        <img
            src="{{ asset('images/project-canva 2.png') }}"
            alt="Project Canva 2"
            class="work-image"
        >

    </div>


    <!-- VIDEO EDITOR -->
    <div class="work">

        <p class="work-title">
            04 — Video Editor
        </p>

        <video
            class="work-video"
            controls
        >
            <source
                src="{{ asset('videos/project-video-editing-capcut.mp4') }}"
                type="video/mp4"
            >

            Browser kamu tidak mendukung video.
        </video>

    </div>


    <!-- ADOBE ILLUSTRATOR -->
    <div class="work">

        <p class="work-title">
            05 — Adobe Illustrator Animation
        </p>

        <video
            class="work-video"
            controls
        >
            <source
                src="{{ asset('videos/project-adobe-illustrator.mp4') }}"
                type="video/mp4"
            >

            Browser kamu tidak mendukung video.
        </video>

    </div>

</div>

<div class="project-footer">
    <p>Designed & Developed by Lula.</p>
</div>

</main>

</body>
</html>