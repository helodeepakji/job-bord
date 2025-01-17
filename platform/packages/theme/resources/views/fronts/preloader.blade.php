<style>
    .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 99999;
        background-color: rgba(255, 255, 255, .82);
    }

    .preloader.fade-in {
        display: none;
    }

    .preloader-loading {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: block;
    }

    .preloader-loading::after {
        content: " ";
        display: block;
        border-radius: 50%;
        border-width: 1px;
        border-style: solid;
        animation: preloader-dual-ring .5s linear infinite;
        width: 40px;
        height: 40px;
        border-color: var(--primary-color, #aa0909) transparent var(--primary-color, #aa0909) transparent;
    }

    @keyframes preloader-dual-ring {
        0% {
            transform: rotate(0deg)
        }

        100% {
            transform: rotate(360deg)
        }
    }

    @-webkit-keyframes preloader-dual-ring {
        0% {
            transform: rotate(0deg)
        }

        100% {
            transform: rotate(360deg)
        }
    }

    @-o-keyframes preloader-dual-ring {
        0% {
            transform: rotate(0deg)
        }

        100% {
            transform: rotate(360deg)
        }
    }

    @-ms-keyframes preloader-dual-ring {
        0% {
            transform: rotate(0deg)
        }

        100% {
            transform: rotate(360deg)
        }
    }
</style>

<script>
    window.addEventListener('load', function() {
        document.getElementById('preloader').classList.add('fade-in');
    });
</script>

<div
    class="preloader"
    id="preloader">
    <div class="preloader-loading"></div>
</div>
