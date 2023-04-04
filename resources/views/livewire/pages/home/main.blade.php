<div class="absolute top-0 w-full z-0">
    <div class="top-0">
        <div class="header top-0 absloute">
            <div class="inner-header flex">
            {{ __('ui.add') }}
            </div>
            @livewire('ui.waves')
        </div>
        <div class="content flex">

        </div>
    </div>
    {{-- <div class="bottom-0">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fb97ac" fill-opacity="1" d="M0,0L24,21.3C48,43,96,85,144,106.7C192,128,240,128,288,138.7C336,149,384,171,432,165.3C480,160,528,128,576,128C624,128,672,160,720,176C768,192,816,192,864,213.3C912,235,960,277,1008,245.3C1056,213,1104,107,1152,80C1200,53,1248,107,1296,112C1344,117,1392,75,1416,53.3L1440,32L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path>
        </svg>
    </div> --}}
    <livewire:components.footer  />
</div>
<style>
    @import url(//fonts.googleapis.com/css?family=Lato:300:400);

    body {
        margin: 0;
        top:0;
    }

    h1 {
        font-family: 'Lato', sans-serif;
        font-weight: 300;
        letter-spacing: 2px;
        font-size: 48px;
    }

    p {
        font-family: 'Lato', sans-serif;
        letter-spacing: 1px;
        font-size: 14px;
        color: #333333;
    }

    .header {
        position: relative;
        text-align: center;
        background: linear-gradient(60deg, rgba(251, 111, 146, 1) 0%, rgba(250, 197, 201, 1) 100%);
        color: white;
    }

    .logo {
        width: 50px;
        fill: white;
        padding-right: 15px;
        display: inline-block;
        vertical-align: middle;
    }

    .inner-header {
        height: 65vh;
        width: 100%;
        margin: 0;
        padding: 0;
    }

    .flex {
        /*Flexbox for containers*/
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .waves {
        position: relative;
        width: 100%;
        height: 15vh;
        margin-bottom: -7px;
        /*Fix for safari gap*/
        min-height: 100px;
        max-height: 150px;
    }

    .content {
        position: relative;
        height: 20vh;
        text-align: center;
    }

    /* Animation */

    .parallax>use {
        animation: move-forever 25s cubic-bezier(.55, .5, .45, .5) infinite;
    }

    .parallax>use:nth-child(1) {
        animation-delay: -2s;
        animation-duration: 7s;
    }

    .parallax>use:nth-child(2) {
        animation-delay: -3s;
        animation-duration: 10s;
    }

    .parallax>use:nth-child(3) {
        animation-delay: -4s;
        animation-duration: 13s;
    }

    .parallax>use:nth-child(4) {
        animation-delay: -5s;
        animation-duration: 20s;
    }

    @keyframes move-forever {
        0% {
            transform: translate3d(-90px, 0, 0);
        }

        100% {
            transform: translate3d(85px, 0, 0);
        }
    }

    /*Shrinking for mobile*/
    @media (max-width: 768px) {
        .waves {
            height: 40px;
            min-height: 40px;
        }

        .content {
            height: 30vh;
        }

        h1 {
            font-size: 24px;
        }
    }
</style>
