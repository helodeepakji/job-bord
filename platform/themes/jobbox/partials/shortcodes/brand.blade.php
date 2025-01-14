<style>
    .company-branding-companent .logo-card {
        background-color: #f8fdfb;
        border: none;
        border-radius: 8px;
        padding: 18px 15px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .company-branding-companent .logo-card img {
        width: 120px;
        height: auto;
        object-fit: cover;
        overflow: hidden;
    }
</style>
<div class="container py-5 company-branding-companent">
    <!-- Row of logo cards -->
    <div class="row g-4">
        <!-- Slack Logo -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="card logo-card">
                <img src="{{ RvMedia::getImageUrl($shortcode->image1) ?: 'https://via.placeholder.com/100x50?text=Slack' }}"
                    alt="Slack Logo" class="img-fluid">
            </div>
        </div>
        <!-- Dropbox Logo -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="card logo-card">
                <img src="{{ RvMedia::getImageUrl($shortcode->image2) ?: 'https://via.placeholder.com/100x50?text=Slack' }}"
                    alt="Slack Logo" class="img-fluid">
            </div>
        </div>
        <!-- Spotify Logo -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="card logo-card">
                <img src="{{ RvMedia::getImageUrl($shortcode->image3) ?: 'https://via.placeholder.com/100x50?text=Slack' }}"
                    alt="Slack Logo" class="img-fluid">
            </div>
        </div>
        <!-- Stripe Logo -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="card logo-card">
                <img src="{{ RvMedia::getImageUrl($shortcode->image4) ?: 'https://via.placeholder.com/100x50?text=Slack' }}"
                    alt="Slack Logo" class="img-fluid">
            </div>
        </div>
    </div>
</div>
